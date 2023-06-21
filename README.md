# OpenAPIClient-php

lite api hotel booking api


## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/liteapi-travel/php-sdk.git"
    }
  ],
  "require": {
    "liteapi-travel/php-sdk": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\BookingManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$booking_id = SEMkJ9lNM; // string | (Required) The unique identifier of the booking you would like to update.

try {
    $result = $apiInstance->bookingsBookingIdDelete($booking_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookingManagementApi->bookingsBookingIdDelete: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.nlite.ml/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*BookingManagementApi* | [**bookingsBookingIdDelete**](docs/Api/BookingManagementApi.md#bookingsbookingiddelete) | **DELETE** /bookings/{bookingId} | Cancel booking
*BookingManagementApi* | [**bookingsBookingIdGet**](docs/Api/BookingManagementApi.md#bookingsbookingidget) | **GET** /bookings/{bookingId} | Retrieve booking
*BookingsApi* | [**bookPost**](docs/Api/BookingsApi.md#bookpost) | **POST** /book | Book
*BookingsApi* | [**prebookPost**](docs/Api/BookingsApi.md#prebookpost) | **POST** /prebook | Prebook
*HotelsApi* | [**getData**](docs/Api/HotelsApi.md#getdata) | **GET** /data | Search by Destination/Hotel
*HotelsApi* | [**hotelsHotelIdGet**](docs/Api/HotelsApi.md#hotelshotelidget) | **GET** /hotels/{hotelId} | Get Room Availability &amp; Rates for a Hotel ID
*HotelsApi* | [**hotelsPost**](docs/Api/HotelsApi.md#hotelspost) | **POST** /hotels | Get Minimum Price for Available Hotels

## Models

- [BookPost400Response](docs/Model/BookPost400Response.md)
- [BookPostRequest](docs/Model/BookPostRequest.md)
- [BookPostRequestContact](docs/Model/BookPostRequestContact.md)
- [BookingsBookingIdDelete200Response](docs/Model/BookingsBookingIdDelete200Response.md)
- [BookingsBookingIdDelete400Response](docs/Model/BookingsBookingIdDelete400Response.md)
- [BookingsBookingIdDelete400ResponseError](docs/Model/BookingsBookingIdDelete400ResponseError.md)
- [BookingsBookingIdDelete500Response](docs/Model/BookingsBookingIdDelete500Response.md)
- [GetData200Response](docs/Model/GetData200Response.md)
- [GetData200ResponseDataInner](docs/Model/GetData200ResponseDataInner.md)
- [GetData400Response](docs/Model/GetData400Response.md)
- [GetData400ResponseError](docs/Model/GetData400ResponseError.md)
- [GetData401Response](docs/Model/GetData401Response.md)
- [HotelsHotelIdGet200Response](docs/Model/HotelsHotelIdGet200Response.md)
- [HotelsHotelIdGet200ResponseData](docs/Model/HotelsHotelIdGet200ResponseData.md)
- [HotelsHotelIdGet200ResponseDataRoomTypesInner](docs/Model/HotelsHotelIdGet200ResponseDataRoomTypesInner.md)
- [HotelsHotelIdGet200ResponseDataRoomTypesInnerRatesInner](docs/Model/HotelsHotelIdGet200ResponseDataRoomTypesInnerRatesInner.md)
- [HotelsHotelIdGet200ResponseDataRoomTypesInnerRatesInnerCancellationPolicies](docs/Model/HotelsHotelIdGet200ResponseDataRoomTypesInnerRatesInnerCancellationPolicies.md)
- [HotelsHotelIdGet200ResponseDataRoomTypesInnerRatesInnerCancellationPoliciesCancelPolicyInfosInner](docs/Model/HotelsHotelIdGet200ResponseDataRoomTypesInnerRatesInnerCancellationPoliciesCancelPolicyInfosInner.md)
- [HotelsHotelIdGet200ResponseDataRoomTypesInnerRatesInnerRetailRate](docs/Model/HotelsHotelIdGet200ResponseDataRoomTypesInnerRatesInnerRetailRate.md)
- [HotelsHotelIdGet200ResponseDataRoomTypesInnerRatesInnerRetailRateTaxesAndFeesInner](docs/Model/HotelsHotelIdGet200ResponseDataRoomTypesInnerRatesInnerRetailRateTaxesAndFeesInner.md)
- [HotelsHotelIdGet200ResponseDataRoomTypesInnerRatesInnerRetailRateTotalInner](docs/Model/HotelsHotelIdGet200ResponseDataRoomTypesInnerRatesInnerRetailRateTotalInner.md)
- [HotelsPost200Response](docs/Model/HotelsPost200Response.md)
- [HotelsPost200ResponseDataInner](docs/Model/HotelsPost200ResponseDataInner.md)
- [HotelsPost401Response](docs/Model/HotelsPost401Response.md)
- [HotelsPostRequest](docs/Model/HotelsPostRequest.md)
- [PrebookPostRequest](docs/Model/PrebookPostRequest.md)

## Authorization

Authentication schemes defined for the API:
### ApiKeyAuth

- **Type**: API key
- **API key parameter name**: X-API-Key
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
