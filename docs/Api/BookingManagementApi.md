# OpenAPI\Client\BookingManagementApi

All URIs are relative to https://api.nlite.ml/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**bookingsBookingIdDelete()**](BookingManagementApi.md#bookingsBookingIdDelete) | **DELETE** /bookings/{bookingId} | Cancel booking |
| [**bookingsBookingIdGet()**](BookingManagementApi.md#bookingsBookingIdGet) | **GET** /bookings/{bookingId} | Retrieve booking |


## `bookingsBookingIdDelete()`

```php
bookingsBookingIdDelete($booking_id): \OpenAPI\Client\Model\BookingsBookingIdDelete200Response
```

Cancel booking

This endpoint allows you to cancel a booking based on a booking ID. The refund amount is based on the cancellation policies. <!-- theme: danger -->

### Example

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

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **booking_id** | **string**| (Required) The unique identifier of the booking you would like to update. | |

### Return type

[**\OpenAPI\Client\Model\BookingsBookingIdDelete200Response**](../Model/BookingsBookingIdDelete200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bookingsBookingIdGet()`

```php
bookingsBookingIdGet($booking_id): object
```

Retrieve booking

This endpoint allows you to retrieve all the information for specific booking ID.

### Example

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
    $result = $apiInstance->bookingsBookingIdGet($booking_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookingManagementApi->bookingsBookingIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **booking_id** | **string**| (Required) The unique identifier of the booking you would like to update. | |

### Return type

**object**

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
