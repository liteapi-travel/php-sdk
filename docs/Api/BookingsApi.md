# OpenAPI\Client\BookingsApi

All URIs are relative to https://api.nlite.ml/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**bookPost()**](BookingsApi.md#bookPost) | **POST** /book | Book |
| [**prebookPost()**](BookingsApi.md#prebookPost) | **POST** /prebook | Prebook |


## `bookPost()`

```php
bookPost($book_post_request): \OpenAPI\Client\Model\HotelsPost401Response
```

Book

This endpoint allows you to send a specific prebook ID along with the email to confirm the booking for a specific room in a specific hotel.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\BookingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$book_post_request = {"prebookId":"v43KK76NH","sessionId":"GIYDEMZNGAZS2MJVPQZDAMRTFUYDGLJRGZ6DC7BRGIWDS7CNIF6HYMLEMRWV6Z3EKNXGC","contact":{"firstName":"Steve","lastName":"Kim","email":"test@nlite.ml"},"rateId":"2_3P6L4TRYIFKLFM3DRKUQ4SBFCSO3QJBU27UQ76RU6HTAVUULOUZN3HLFLDS6HRUUQXXZNPELVXHLEXZF3J26PGYXGZEMZOPATZGAUBZLMB7BR6OL7QW4FIAIWTOCOLVHBIRGQFE7UJLTQP5RB6AXVPADIRT34YR56BBBSLSAWK2BMTRYBFRZCYG6HQKMULTSO6JIWWTEGVSBOHNFO7KTFXFMGCULXME2B4PZDCFWK62PT3EL4XUVOEB37V2EA7CWJKOZZU4OYDFB36YWUCID6LWVCCRMVU4PYZH2WBTJ6SLVVEGVZHTVGCVXA5GXEOCUE4ARMWXCIGRPASA5WBFI2T557GWUUZ6YMBZZMPUPCWI7DVO2OG6KY36WWASVBLEJRYFHJRRGQKDV5HY6INAD3YARYKVNFMITJ6BX5LVBVXNF33OZF34ZQDE5S74ND73FMHCYSSTZFOBCOBKYDHQ5BWGRYS7GALROITVAFG2OIFSXLUSKRT3MEURPJL7S3MHWEJMAYJFGGPMRZBEQZXAXDJI","travelerId":"fr5Yght9","IP":"212.56.43.5"}; // \OpenAPI\Client\Model\BookPostRequest

try {
    $result = $apiInstance->bookPost($book_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookingsApi->bookPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **book_post_request** | [**\OpenAPI\Client\Model\BookPostRequest**](../Model/BookPostRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\HotelsPost401Response**](../Model/HotelsPost401Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `prebookPost()`

```php
prebookPost($prebook_post_request): \OpenAPI\Client\Model\HotelsPost401Response
```

Prebook

This endpoint allows you to send a specific rate ID along with the session ID to confirm the room availability, rates and cancellation policies in the response. A prebook-id is also part of the response which can be used to book a specific room in a hotel.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\BookingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$prebook_post_request = {"sessionId":"GIYDEMZNGAZS2MJVPQZDAMRTFUYDGLJRGZ6DC7BRGIWDS7CNIF6HYMLEMRWV6Z3EKNXGC","rateId":"2_3P6L4TRYIFKLFM3DRKUQ4SBFCSO3QJBU27UQ76RU6HTAVUULOUZN3HLFLDS6HRUUQXXZNPELVXHLEXZF3J26PGYXGZEMZOPATZGAUBZLMB7BR6OL7QW4FIAIWTOCOLVHBIRGQFE7UJLTQP5RB6AXVPADIRT34YR56BBBSLSAWK2BMTRYBFRZCYG6HQKMULTSO6JIWWTEGVSBOHNFO7KTFXFMGCULXME2B4PZDCFWK62PT3EL4XUVOEB37V2EA7CWJKOZZU4OYDFB36YWUCID6LWVCCRMVU4PYZH2WBTJ6SLVVEGVZHTVGCVXA5GXEOCUE4ARMWXCIGRPASA5WBFI2T557GWUUZ6YMBZZMPUPCWI7DVO2OG6KY36WWASVBLEJRYFHJRRGQKDV5HY6INAD3YARYKVNFMITJ6BX5LVBVXNF33OZF34ZQDE5S74ND73FMHCYSSTZFOBCOBKYDHQ5BWGRYS7GALROITVAFG2OIFSXLUSKRT3MEURPJL7S3MHWEJMAYJFGGPMRZBEQZXAXDJI","travelerId":"FrT56hfty"}; // \OpenAPI\Client\Model\PrebookPostRequest

try {
    $result = $apiInstance->prebookPost($prebook_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookingsApi->prebookPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **prebook_post_request** | [**\OpenAPI\Client\Model\PrebookPostRequest**](../Model/PrebookPostRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\HotelsPost401Response**](../Model/HotelsPost401Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
