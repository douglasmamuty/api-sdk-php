<?php
/**
 * ProductsAttributesApiTest
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Facestore API
 *
 * This is a reference to Facestore API.  # Introduction This API is documented in **OpenAPI format** and provided by [facestore.pt](http://facestore.pt) team.  # About the API Through the Facestore API your applications can retrieve and manage Facestore platform content in your store. The base address of the API is `https://api.facestore.pt`. There are several endpoints at that address, each with its own unique path. All endpoints are private and you need the permissions to access them. To get an API Token you have to be client of Facestore and access your personal account to request it (see the next topic).  # Get API Token To consume the Facestore API is take the unique token to identify your requests. You can do that accessing the store manager admin and doing the following steps: 1. Go to ``configurations > API`` section. 2. Copy the unique token.  # Requests The API is based on REST principles: data resources are accessed via standard HTTPS requests in UTF-8 format to an API endpoint. Where possible, the API strives to use appropriate HTTP verbs for each action: | VERB     | DESCRIPTION                                            | | -------- |:-------------:                                         | | GET      | Used for retrieving resources.                         | | POST     | Used for creating resources.                           | | PUT      | Used for changing/replacing resources or collections.  | | PATCH    | Used for changing/replacing partial resources.         | | DELETE   | Used for deleting resources.                           |  # Responses Response Status Codes The API uses the following response status codes, as defined in the RFC 2616 and RFC 6585:  | STATUS CODE | DESCRIPTION                                                                                                                                                                                                                       | |:-----------:|:---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------:| | 200         | OK - The request has succeeded. The client can read the result of the request in the body and the headers of the response.                                                                                                        | | 201         | Created - The request has been fulfilled and resulted in a new resource being created.                                                                                                                                            | | 202         | Accepted - The request has been accepted for processing, but the processing has not been completed.                                                                                                                               | | 204         | No Content - The request has succeeded but returns no message body.                                                                                                                                                               | | 304         | Not Modified. See Conditional requests.                                                                                                                                                                                           | | 400         | Bad Request - The request could not be understood by the server due to malformed syntax. The message body will contain more information; see Error Details.                                                                       | | 401         | Unauthorized - The request requires user authentication or, if the request included authorization credentials, authorization has been refused for those credentials.                                                              | | 403         | Forbidden - The server understood the request, but is refusing to fulfill it.                                                                                                                                                     | | 404         | Not Found - The requested resource could not be found. This error can be due to a temporary or permanent condition.                                                                                                               | | 429         | Too Many Requests - Rate limiting has been applied.                                                                                                                                                                               | | 500         | Internal Server Error. You should never receive this error because our clever coders catch them all ... but if you are unlucky enough to get one, please report it to us through a comment at the bottom of this page.            | | 502         | Bad Gateway - The server was acting as a gateway or proxy and received an invalid response from the upstream server.                                                                                                              | | 503         | Service Unavailable - The server is currently unable to handle the request due to a temporary condition which will be alleviated after some delay. You can choose to resend the request again.                                    |  # Rate limiting To make the API fast for everybody, rate limits apply.  Rate limiting is applied on an application basis (based on client id), regardless of how many users are using it.  If you get status code 429, it means that you have sent too many requests. If this happens, have a look in the Retry-After header, where you will see a number displayed. This is the amount of seconds that you need to wait, before you can retry sending your requests.  You can check the returned HTTP headers of any API request to see your current rate limit status:  ``` curl -i https://api.facestore.pt/v1/sample HTTP/1.1 200 OK Date: Mon, 01 Dec 2016 17:27:06 GMT Status: 200 OK X-RateLimit-Limit: 60 X-RateLimit-Remaining: 56 X-RateLimit-Reset: 1372700873 ```  The headers tell you everything you need to know about your current rate limit status:  | HEADER NAME           | DESCRIPTION                                                                     | |:---------------------:|:-------------------------------------------------------------------------------:| | X-RateLimit-Limit   | The maximum number of requests that the consumer is permitted to make per hour. | | X-RateLimit-Remaining | The number of requests remaining in the current rate limit window.              | | X-RateLimit-Reset   | The time at which the current rate limit window resets in UTC epoch seconds.    |  # Timestamps Timestamps are returned in ISO 8601 format as Coordinated Universal Time (UTC) with zero offset: YYYY-MM-DDTHH:MM:SSZ. If the time is imprecise (for example, the date/time of an product is created), an additional field will show the precision; see for example, created_at in an product object.  # Error Details The API uses the following format to describe unsuccessful responses, return information about the error as an error JSON object containing the following information::  | KEY         | VALUE TYPE   | VALUE DESCRIPTION | |:-----------:|:------------:|:-----------------:| | status_code | integer    | The HTTP status code (also returned in the response header; see Response Status Codes for more information). | | message     | string     | A short description of the cause of the error. |
 *
 * OpenAPI spec version: 0.1.4
 * Contact: apihelp@facestore.pt
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Please update the test case below to test the endpoint.
 */

namespace Swagger\Client;

use GuzzleHttp\Client;
use Swagger\Client\Api\ProductsAttributesApi;
use Swagger\Client\Model\Attribute;
use Swagger\Client\Model\InlineResponse2005;
use Swagger\Client\Model\InlineResponse2006;
use Swagger\Client\Model\Product;


/**
 * ProductsAttributesApiTest Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProductsAttributesApiTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Api\ProductsAttributesApi
     */
    private $productAttributesAPI;


    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass()
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
//        $productAttributes = new (
//            [
//                'active' => 1,
//                'position'=> 1,
//                'visibility'=> [
//                    "facebook"
//                ],
//                'i18n' => [
//                    [
//                        'locale' => 'pt_PT',
//                        'name'   => 'Category generated by integration test',
//                    ]
//                ]
//            ]
//        );

        $config = Configuration::getDefaultConfiguration()
            ->setApiKey('APIToken', '083e7be2ca947a899db97d00db4f512db6a85551');

        $this->productAttributesAPI = new ProductsAttributesApi(
            new Client(),
            $config
        );

//        $response = $this->categoriesAPI->addCategories($category);
//
//        $this->idCategory = $response->getData()[0]->getId();
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
    }

    /**
     * Test case for addProductsAttributes
     *
     * .
     *
     */
    public function testAddProductsAttributes()
    {
        $attributesProduct = new Attribute(
            [
                "is_searchable"=> true,
                "active"=> true,
                "i18n"=> [
                    "pt_PT"=> [
                        "name"=> "Tamanho"
                    ],
                    "en_US"=> [
                        "name"=> "Size"
                    ],
                    "es_ES"=> [
                        "name"=> "Tamaño"
                    ]
                ],
                "options"=> [
                    [
                        "position"=> 2,
                        "image"=> "image",
                        "aux_code"=> "P",
                        "i18n"=> [
                            "pt_PT"=> [
                                "name"=> "Pequeno"
                            ],
                            "en_US"=> [
                                "name"=> "Small"
                            ],
                            "es_ES"=> [
                                "name"=> "Pequeño"
                            ]
                        ]
                    ],
                    [
                        "aux_code"=> "M",
                        "i18n"=> [
                            "pt_PT"=> [
                                "name"=> "Medio"
                            ],
                            "en_US"=> [
                                "name"=> "Medium"
                            ],
                            "es_ES"=> [
                                "name"=> "Medio"
                            ]
                        ]
                    ],
                    [
                        "i18n"=> [
                            "pt_PT"=> [
                                "name"=> "Grande"
                            ],
                            "en_US"=> [
                                "name"=> "Big"
                            ],
                            "es_ES"=> [
                                "name"=> "Grande"
                            ]
                        ]
                    ]
                ]
            ]
        );

        $response = $this->productAttributesAPI->addProductsAttributes($attributesProduct);
        $this->assertInstanceOf(InlineResponse2006::class, $response);
    }

    /**
     * Test case for deleteProductAttributeById
     *
     * .
     *
     */
    public function testDeleteProductAttributeById()
    {
    }

    /**
     * Test case for getProductAttributeById
     *
     * .
     *
     */
    public function testGetProductAttributeById()
    {
    }

    /**
     * Test case for getProductsAttributes
     *
     * .
     *
     */
    public function testGetProductsAttributes()
    {
    }

    /**
     * Test case for updateProductAttributeById
     *
     * .
     *
     */
    public function testUpdateProductAttributeById()
    {
    }
}
