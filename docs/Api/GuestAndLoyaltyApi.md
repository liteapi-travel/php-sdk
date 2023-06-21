# OpenAPI\Client\GuestAndLoyaltyApi

All URIs are relative to https://api.liteapi.travel/v2.0, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**guestsGet()**](GuestAndLoyaltyApi.md#guestsGet) | **GET** /guests | guests |


## `guestsGet()`

```php
guestsGet($email): object
```

guests

The guests API returns the unique guest ID of a user based on the users email ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\GuestAndLoyaltyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email = johndoe@nlite.ml; // string | Email ID of the guest

try {
    $result = $apiInstance->guestsGet($email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GuestAndLoyaltyApi->guestsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **email** | **string**| Email ID of the guest | [optional] |

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
