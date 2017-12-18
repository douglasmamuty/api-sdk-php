# Swagger\Client\DouglasApi

All URIs are relative to *https://api.facestore.pt/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addCategories**](DouglasApi.md#addCategories) | **POST** /douglas | 
[**getCategories**](DouglasApi.md#getCategories) | **GET** /douglas | 


# **addCategories**
> \Swagger\Client\Model\InlineResponse2012 addCategories($douglas)



Creates a new category in the store.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIKeyHeader
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('APIToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('APIToken', 'Bearer');

$apiInstance = new Swagger\Client\Api\DouglasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$douglas = new \Swagger\Client\Model\Douglas(); // \Swagger\Client\Model\Douglas | Category to add to the store

try {
    $result = $apiInstance->addCategories($douglas);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DouglasApi->addCategories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **douglas** | [**\Swagger\Client\Model\Douglas**](../Model/Douglas.md)| Category to add to the store |

### Return type

[**\Swagger\Client\Model\InlineResponse2012**](../Model/InlineResponse2012.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCategories**
> \Swagger\Client\Model\InlineResponse2001 getCategories($includes, $limit, $order_by)



Returns all categories from the system that the user has access to  ### Includes You can give the following values on includes parameter: `routes, products`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIKeyHeader
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('APIToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('APIToken', 'Bearer');

$apiInstance = new Swagger\Client\Api\DouglasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$includes = array("includes_example"); // string[] | Include associated objects within response
$limit = 56; // int | max records to return
$order_by = array("order_by_example"); // string[] | Specify the field to be sorted, examples:  - `?order_by=id|desc` - `?order_by=updated_at|desc,position|asc`

try {
    $result = $apiInstance->getCategories($includes, $limit, $order_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DouglasApi->getCategories: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

