<?php

require __DIR__ . '/vendor/autoload.php';

$headers  = [
  'Authorization' => getenv('JUNGLE_AUTH_HEADER')
];

// This script retrieves all inventory for a single location.
// It prints the XIDs and available inventory level for all
// products that have non-zero inventory

$locationId = '100';
$from = '';
$hasMore = true;
$apiClient = Jungle\Library\Generated\Client::create();

while ($hasMore) {
  $inventory = backoff(function () use ($apiClient, $from, $headers, $locationId) {
    $inventory = $apiClient->inventoryFind(['locationId' => $locationId, 'from' => $from, 'limit' => 100.0], $headers);

    // The above call may have failed, in which case $inventory will be null.
    // If so, the following line will throw an exception, triggering the backoff/retry process
    $inventory->getPageInfo();
    return $inventory;
  });

  $hasMore = $inventory->getPageInfo()->getHasMore();

  if ($hasMore) {
    $from = $inventory->getPageInfo()->getNextCursor();
  }

  $resultsWithProductRecords = array_filter($inventory->getResults(), function ($result) {
    return $result->getProduct()->isInitialized('xids');
  });

  // Filter out records with available stock - remove this filter to see all products
  $resultsWithNonZeroAvailableInventory = array_filter($resultsWithProductRecords, function ($result) {
    return $result->getAvailable() != 0;
  });

  foreach ($resultsWithNonZeroAvailableInventory as $result) {
    $xids = array_map(function ($xid) {
      return $xid->getXid();
    }, $result->getProduct()->getXids());

    $availableProductInventory = ['xids' => $xids, 'availabe' => $result->getAvailable()];
    echo json_encode($availableProductInventory, JSON_PRETTY_PRINT);
  }
}
