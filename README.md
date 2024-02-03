## REST API Client (PHP)

This repository contains example client scripts for Jungle's
REST API. They rely on an auto-generated SDK that's presently
stored in the `generated/` subfolder.

## Requirements

These scripts depend on PHP 7 and [composer](https://getcomposer.org/)

## Install Dependencies

Run the following to install dependencies:

```
composer install
```

## Running

Run a client script like so:

```bash
JUNGLE_AUTH_HEADER="ApiKey your-api-key" php get-inventory.php
```

## SDK

The SDK is generated automatically as follows:

```bash
php vendor/bin/jane-openapi generate
```
