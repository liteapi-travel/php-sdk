# OpenAPI\Client\DefaultApi

All URIs are relative to https://api.nlite.ml/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**hotelsData()**](DefaultApi.md#hotelsData) | **GET** /data | hotels data |


## `hotelsData()`

```php
hotelsData($hotel_name, $city_name, $country_code, $limit, $offset, $rid, $xid): \OpenAPI\Client\Model\HotelsData200Response
```

hotels data

hotels data

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$hotel_name = ibis; // string
$city_name = paris; // string
$country_code = FR; // string
$limit = 10; // string
$offset = 5; // string
$rid = 888-8888-8888-888; // string
$xid = ; // string

try {
    $result = $apiInstance->hotelsData($hotel_name, $city_name, $country_code, $limit, $offset, $rid, $xid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->hotelsData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hotel_name** | **string**|  | [optional] |
| **city_name** | **string**|  | [optional] |
| **country_code** | **string**|  | [optional] |
| **limit** | **string**|  | [optional] |
| **offset** | **string**|  | [optional] |
| **rid** | **string**|  | [optional] |
| **xid** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\HotelsData200Response**](../Model/HotelsData200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
