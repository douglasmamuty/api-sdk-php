# Swagger\Client\TestApi

All URIs are relative to *https://api.facestore.pt/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addBrands**](TestApi.md#addBrands) | **POST** /test | 
[**getProductsAttributes**](TestApi.md#getProductsAttributes) | **GET** /test | 


# **addBrands**
> \Swagger\Client\Model\InlineResponse2012 addBrands($test)



Creates a new brand in the store.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIKeyHeader
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('APIToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('APIToken', 'Bearer');

$apiInstance = new Swagger\Client\Api\TestApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$test = new \Swagger\Client\Model\Test(); // \Swagger\Client\Model\Test | Brand to add to the store

try {
    $result = $apiInstance->addBrands($test);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TestApi->addBrands: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **test** | [**\Swagger\Client\Model\Test**](../Model/Test.md)| Brand to add to the store |

### Return type

[**\Swagger\Client\Model\InlineResponse2012**](../Model/InlineResponse2012.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProductsAttributes**
> \Swagger\Client\Model\InlineResponse2002 getProductsAttributes($includes, $limit, $order_by)



Returns all brands from the system that the user has access to  ### Includes You can give the following values on includes parameter: `options`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIKeyHeader
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('APIToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('APIToken', 'Bearer');

$apiInstance = new Swagger\Client\Api\TestApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$includes = array("includes_example"); // string[] | Include associated objects within response
$limit = 56; // int | max records to return
$order_by = array("order_by_example"); // string[] | Specify the field to be sorted, examples:  - `?order_by=id|desc` - `?order_by=updated_at|desc,position|asc`

try {
    $result = $apiInstance->getProductsAttributes($includes, $limit, $order_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TestApi->getProductsAttributes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **includes** | [**string[]**](../Model/string.md)| Include associated objects within response | [optional]
 **limit** | **int**| max records to return | [optional]
 **order_by** | [**string[]**](../Model/string.md)| Specify the field to be sorted, examples:  - &#x60;?order_by&#x3D;id|desc&#x60; - &#x60;?order_by&#x3D;updated_at|desc,position|asc&#x60; | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

