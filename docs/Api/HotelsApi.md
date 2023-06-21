# OpenAPI\Client\HotelsApi

All URIs are relative to http://localhost:8080, except if the operation defines another base path.

| Method                                                  | HTTP request              | Description                                      |
| ------------------------------------------------------- | ------------------------- | ------------------------------------------------ |
| [**getData()**](HotelsApi.md#getData)                   | **GET** /data             | Search by Destination/Hotel                      |
| [**hotelsHotelIdGet()**](HotelsApi.md#hotelsHotelIdGet) | **GET** /hotels/{hotelId} | Get Room Availability &amp; Rates for a Hotel ID |
| [**hotelsPost()**](HotelsApi.md#hotelsPost)             | **POST** /hotels          | Get Minimum Price for Available Hotels           |

## `getData()`

```php
getData($country_code, $hotel_name, $city_name, $limit, $offset, $latitude, $longitude, $distance): \OpenAPI\Client\Model\GetData200Response
```

Search by Destination/Hotel

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\HotelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$country_code = 'country_code_example'; // string | country code Alpha-2 code (example US, RU, CN)
$hotel_name = 'hotel_name_example'; // string | hotel name
$city_name = 'city_name_example'; // string | city name
$limit = 3.4; // float | limit results (max value 1000)
$offset = 3.4; // float | results offset
$latitude = 3.4; // float | latitude geo coordinates
$longitude = 3.4; // float | longtude geo coordinates
$distance = 3.4; // float | the distance starting from the selected geopgraphic point

try {
    $result = $apiInstance->getData($country_code, $hotel_name, $city_name, $limit, $offset, $latitude, $longitude, $distance);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HotelsApi->getData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name             | Type       | Description                                               | Notes      |
| ---------------- | ---------- | --------------------------------------------------------- | ---------- |
| **country_code** | **string** | country code Alpha-2 code (example US, RU, CN)            |            |
| **hotel_name**   | **string** | hotel name                                                | [optional] |
| **city_name**    | **string** | city name                                                 | [optional] |
| **limit**        | **float**  | limit results (max value 1000)                            | [optional] |
| **offset**       | **float**  | results offset                                            | [optional] |
| **latitude**     | **float**  | latitude geo coordinates                                  | [optional] |
| **longitude**    | **float**  | longtude geo coordinates                                  | [optional] |
| **distance**     | **float**  | the distance starting from the selected geopgraphic point | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetData200Response**](../Model/GetData200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `hotelsHotelIdGet()`

```php
hotelsHotelIdGet($hotel_id, $rid, $xid, $checkin, $checkout, $adults, $guest_nationality, $currency, $session_id): object
```

Get Room Availability & Rates for a Hotel ID

This endpoint allows you to send a hotel ID with a specific date range and in response receive all the rooms, rates that are available along with the cancelllation policies.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\HotelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$hotel_id = 436827; // int
$rid = 888-8888-8888-888; // string
$xid = 'xid_example'; // string
$checkin = 2023-01-15; // string
$checkout = 2023-01-16; // string
$adults = 1; // int
$guest_nationality = MA; // string
$currency = USD; // string
$session_id = GIYDEMZNGAYS2MJVPQZDAMRTFUYDCLJRGZ6DC7D4JVAXY7DZM5MDMQKKJJAXKZY; // string

try {
    $result = $apiInstance->hotelsHotelIdGet($hotel_id, $rid, $xid, $checkin, $checkout, $adults, $guest_nationality, $currency, $session_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HotelsApi->hotelsHotelIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name                  | Type       | Description | Notes      |
| --------------------- | ---------- | ----------- | ---------- |
| **hotel_id**          | **int**    |             |            |
| **rid**               | **string** |             | [optional] |
| **xid**               | **string** |             | [optional] |
| **checkin**           | **string** |             | [optional] |
| **checkout**          | **string** |             | [optional] |
| **adults**            | **int**    |             | [optional] |
| **guest_nationality** | **string** |             | [optional] |
| **currency**          | **string** |             | [optional] |
| **session_id**        | **string** |             | [optional] |

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

## `hotelsPost()`

```php
hotelsPost($rid, $hotels_post_request): object
```

Get Minimum Price for Available Hotels

This endpoint allows you to send a list of hotel ID's for a specific date range and in response receive the best rate available for each of the hotel ID's. The limit is set to 200 hotels.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\HotelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rid = 888-8888-8888-888; // string
$hotels_post_request = {"checkin":"2023-03-15","checkout":"2023-03-16","latitude":41.009336416923006,"longitude":28.96179423827173,"country":"TR","distance":500,"adults":1,"children":"12,9","currency":"EUR","guestNationality":"MA"}; // \OpenAPI\Client\Model\HotelsPostRequest

try {
    $result = $apiInstance->hotelsPost($rid, $hotels_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HotelsApi->hotelsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name                    | Type                                                                         | Description | Notes      |
| ----------------------- | ---------------------------------------------------------------------------- | ----------- | ---------- |
| **rid**                 | **string**                                                                   |             | [optional] |
| **hotels_post_request** | [**\OpenAPI\Client\Model\HotelsPostRequest**](../Model/HotelsPostRequest.md) |             | [optional] |

### Return type

**object**

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
