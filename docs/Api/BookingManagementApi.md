# OpenAPI\Client\BookingManagementApi

All URIs are relative to https://api.liteapi.travel/v2.0, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**bookingsBookingIdGet()**](BookingManagementApi.md#bookingsBookingIdGet) | **GET** /bookings/{bookingId} | Booking retrieve |
| [**bookingsBookingIdPut()**](BookingManagementApi.md#bookingsBookingIdPut) | **PUT** /bookings/{bookingId} | Booking cancel |
| [**bookingsGet()**](BookingManagementApi.md#bookingsGet) | **GET** /bookings | Booking list |


## `bookingsBookingIdGet()`

```php
bookingsBookingIdGet($booking_id): object
```

Booking retrieve

The API returns the status and the details for the a specific booking Id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\BookingManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$booking_id =  "hSq2gVDrf"; // string | The Booking Id that needs to be retrieved

try {
    $result = $apiInstance->bookingsBookingIdGet($booking_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookingManagementApi->bookingsBookingIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **booking_id** | **string**| The Booking Id that needs to be retrieved | |

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

## `bookingsBookingIdPut()`

```php
bookingsBookingIdPut($booking_id): object
```

Booking cancel

<!-- theme: danger --> This API is used to request a cancellation of an existing confirmed booking. Cancellation policies and conditions will be used to determine the success of the cancellation. For example a booking with non-refundable (NRFN) tag or a booking with a cancellation policy that was requested past the cancellation date will not be able to cancel the confirmed booking.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\BookingManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$booking_id = "hSq2gVDrf"; // string | (Required) The unique identifier of the booking you would like to update.

try {
    $result = $apiInstance->bookingsBookingIdPut($booking_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookingManagementApi->bookingsBookingIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **booking_id** | **string**| (Required) The unique identifier of the booking you would like to update. | |

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

## `bookingsGet()`

```php
bookingsGet($guest_id): object
```

Booking list

The API returns the list of booking Id's for a given guest Id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\BookingManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guest_id = "FrT56hfty"; // string | The Guest Id of the user

try {
    $result = $apiInstance->bookingsGet($guest_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookingManagementApi->bookingsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **guest_id** | **string**| The Guest Id of the user | |

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
