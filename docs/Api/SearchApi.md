# OpenAPI\Client\SearchApi

All URIs are relative to https://api.liteapi.travel/v2.0, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**hotelsGet()**](SearchApi.md#hotelsGet) | **GET** /hotels | hotel minimum rates availability |
| [**hotelsRatesGet()**](SearchApi.md#hotelsRatesGet) | **GET** /hotels/rates | hotel full rates availability |


## `hotelsGet()`

```php
hotelsGet($hotel_ids, $checkin, $checkout, $currency, $guest_nationality, $adults, $children, $guest_id): object
```

hotel minimum rates availability

**Hotel Minimum Rates API** is to search and return the minimum room rates that are available for a list of hotel ID's on the specified search dates.  For each hotel ID, the minimum room rate that is available is returned.  The API also has a built in loyalty rewards system. The system rewards return users who have made prior bookings.  If the search is coming from a known guest ID, the guest level is also returned along with pricing has more discounts.  If it is a new user, the guest ID will be generated at the time of the first confirmed booking.   Example API key for test: sand_c0155ab8-c683-4f26-8f94-b5e92c5797b9

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$hotel_ids = lp3803c,lp1f982,lp19b70,lp19e75; // string | List of hotelIds
$checkin = 2023-11-15; // string | Check in data in YYYY-MM-DD format
$checkout = 2023-11-16; // string | Check out data in YYYY-MM-DD format
$currency = USD; // string | Currency code - example (USD)
$guest_nationality = US; // string | Guest nationality ISO-2 code - example (SG)
$adults = 1; // int | Number of adult guests staying
$children = 12,9; // string | Number of children staying if any
$guest_id = testtraveler1; // string | Unique traveler ID if available

try {
    $result = $apiInstance->hotelsGet($hotel_ids, $checkin, $checkout, $currency, $guest_nationality, $adults, $children, $guest_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->hotelsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hotel_ids** | **string**| List of hotelIds | |
| **checkin** | **string**| Check in data in YYYY-MM-DD format | |
| **checkout** | **string**| Check out data in YYYY-MM-DD format | |
| **currency** | **string**| Currency code - example (USD) | |
| **guest_nationality** | **string**| Guest nationality ISO-2 code - example (SG) | |
| **adults** | **int**| Number of adult guests staying | |
| **children** | **string**| Number of children staying if any | [optional] |
| **guest_id** | **string**| Unique traveler ID if available | [optional] |

### Return type

**object**

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `hotelsRatesGet()`

```php
hotelsRatesGet($hotel_ids, $checkin, $checkout, $guest_nationality, $currency, $adults, $children, $guest_id): object
```

hotel full rates availability

The Full Rates  API is to search and return all available rooms along with its rates, cancellation policies for a list of hotel ID's based on the search dates.   For each hotel ID, all available room information is returned.   The API also has a built in loyalty rewards system. The system rewards return users who have made prior bookings.   If the search is coming from a known guest ID, the guest level is also returned along with the pricing that's appropriate for the guest level.  If it is a new user, the guest ID will be generated at the time of the first confirmed booking.   Example API key for test: sand_c0155ab8-c683-4f26-8f94-b5e92c5797b9

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$hotel_ids = lp3803c,lp1f982,lp19b70,lp19e75; // string | List of hotelIds
$checkin = 2023-11-15; // string | Check in data in YYYY-MM-DD format
$checkout = 2023-11-16; // string | Check out data in YYYY-MM-DD format
$guest_nationality = US; // string | Guest nationality ISO-2 code - example (SG)
$currency = USD; // string | Currency code - example (USD)
$adults = 1; // int | Number of adult guests staying
$children = 12,9; // string | Number of children staying if any
$guest_id = traveler1; // string | Unique traveler ID if available

try {
    $result = $apiInstance->hotelsRatesGet($hotel_ids, $checkin, $checkout, $guest_nationality, $currency, $adults, $children, $guest_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->hotelsRatesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hotel_ids** | **string**| List of hotelIds | |
| **checkin** | **string**| Check in data in YYYY-MM-DD format | |
| **checkout** | **string**| Check out data in YYYY-MM-DD format | |
| **guest_nationality** | **string**| Guest nationality ISO-2 code - example (SG) | |
| **currency** | **string**| Currency code - example (USD) | |
| **adults** | **int**| Number of adult guests staying | |
| **children** | **string**| Number of children staying if any | [optional] |
| **guest_id** | **string**| Unique traveler ID if available | [optional] |

### Return type

**object**

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
