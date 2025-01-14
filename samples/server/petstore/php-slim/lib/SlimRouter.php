<?php
/**
 * SlimRouter
 *
 * PHP version 7
 *
 * @package OpenAPIServer
 * @author  OpenAPI Generator team
 * @link    https://github.com/openapitools/openapi-generator
 */

/**
 * OpenAPI Petstore
 *
 * This spec is mainly for testing Petstore server and contains fake endpoints, models. Please do not use this for any other purpose. Special characters: \" \\
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://github.com/openapitools/openapi-generator.git
 */

/**
 * NOTE: This class is auto generated by the openapi generator program.
 * https://github.com/openapitools/openapi-generator
 * Do not edit the class manually.
 */
namespace OpenAPIServer;

use Slim\App;
use Slim\Interfaces\RouteInterface;
use Psr\Container\ContainerInterface;
use InvalidArgumentException;
use Dyorg\TokenAuthentication;
use Dyorg\TokenAuthentication\TokenSearch;
use Psr\Http\Message\ServerRequestInterface;
use Exception;

/**
 * SlimRouter Class Doc Comment
 *
 * @package OpenAPIServer
 * @author  OpenAPI Generator team
 * @link    https://github.com/openapitools/openapi-generator
 */
class SlimRouter
{

    /** @var App instance */
    private $slimApp;

    /** @var array[] list of all api operations */
    private $operations = [
        [
            'httpMethod' => 'PATCH',
            'basePathWithoutHost' => '/v2',
            'path' => '/another-fake/dummy',
            'apiPackage' => 'OpenAPIServer\Api',
            'classname' => 'AbstractAnotherFakeApi',
            'userClassname' => 'AnotherFakeApi',
            'operationId' => 'call123TestSpecialTags',
            'authMethods' => [
            ],
        ],
        [
            'httpMethod' => 'POST',
            'basePathWithoutHost' => '/v2',
            'path' => '/fake/create_xml_item',
            'apiPackage' => 'OpenAPIServer\Api',
            'classname' => 'AbstractFakeApi',
            'userClassname' => 'FakeApi',
            'operationId' => 'createXmlItem',
            'authMethods' => [
            ],
        ],
        [
            'httpMethod' => 'POST',
            'basePathWithoutHost' => '/v2',
            'path' => '/fake/outer/boolean',
            'apiPackage' => 'OpenAPIServer\Api',
            'classname' => 'AbstractFakeApi',
            'userClassname' => 'FakeApi',
            'operationId' => 'fakeOuterBooleanSerialize',
            'authMethods' => [
            ],
        ],
        [
            'httpMethod' => 'POST',
            'basePathWithoutHost' => '/v2',
            'path' => '/fake/outer/composite',
            'apiPackage' => 'OpenAPIServer\Api',
            'classname' => 'AbstractFakeApi',
            'userClassname' => 'FakeApi',
            'operationId' => 'fakeOuterCompositeSerialize',
            'authMethods' => [
            ],
        ],
        [
            'httpMethod' => 'POST',
            'basePathWithoutHost' => '/v2',
            'path' => '/fake/outer/number',
            'apiPackage' => 'OpenAPIServer\Api',
            'classname' => 'AbstractFakeApi',
            'userClassname' => 'FakeApi',
            'operationId' => 'fakeOuterNumberSerialize',
            'authMethods' => [
            ],
        ],
        [
            'httpMethod' => 'POST',
            'basePathWithoutHost' => '/v2',
            'path' => '/fake/outer/string',
            'apiPackage' => 'OpenAPIServer\Api',
            'classname' => 'AbstractFakeApi',
            'userClassname' => 'FakeApi',
            'operationId' => 'fakeOuterStringSerialize',
            'authMethods' => [
            ],
        ],
        [
            'httpMethod' => 'PUT',
            'basePathWithoutHost' => '/v2',
            'path' => '/fake/body-with-file-schema',
            'apiPackage' => 'OpenAPIServer\Api',
            'classname' => 'AbstractFakeApi',
            'userClassname' => 'FakeApi',
            'operationId' => 'testBodyWithFileSchema',
            'authMethods' => [
            ],
        ],
        [
            'httpMethod' => 'PUT',
            'basePathWithoutHost' => '/v2',
            'path' => '/fake/body-with-query-params',
            'apiPackage' => 'OpenAPIServer\Api',
            'classname' => 'AbstractFakeApi',
            'userClassname' => 'FakeApi',
            'operationId' => 'testBodyWithQueryParams',
            'authMethods' => [
            ],
        ],
        [
            'httpMethod' => 'PATCH',
            'basePathWithoutHost' => '/v2',
            'path' => '/fake',
            'apiPackage' => 'OpenAPIServer\Api',
            'classname' => 'AbstractFakeApi',
            'userClassname' => 'FakeApi',
            'operationId' => 'testClientModel',
            'authMethods' => [
            ],
        ],
        [
            'httpMethod' => 'POST',
            'basePathWithoutHost' => '/v2',
            'path' => '/fake',
            'apiPackage' => 'OpenAPIServer\Api',
            'classname' => 'AbstractFakeApi',
            'userClassname' => 'FakeApi',
            'operationId' => 'testEndpointParameters',
            'authMethods' => [
                // http security schema named 'http_basic_test'
                [
                    'type' => 'http',
                    'isBasic' => true,
                    'isBearer' => false,
                    'isApiKey' => false,
                    'isOAuth' => false,
                ],
            ],
        ],
        [
            'httpMethod' => 'GET',
            'basePathWithoutHost' => '/v2',
            'path' => '/fake',
            'apiPackage' => 'OpenAPIServer\Api',
            'classname' => 'AbstractFakeApi',
            'userClassname' => 'FakeApi',
            'operationId' => 'testEnumParameters',
            'authMethods' => [
            ],
        ],
        [
            'httpMethod' => 'DELETE',
            'basePathWithoutHost' => '/v2',
            'path' => '/fake',
            'apiPackage' => 'OpenAPIServer\Api',
            'classname' => 'AbstractFakeApi',
            'userClassname' => 'FakeApi',
            'operationId' => 'testGroupParameters',
            'authMethods' => [
            ],
        ],
        [
            'httpMethod' => 'POST',
            'basePathWithoutHost' => '/v2',
            'path' => '/fake/inline-additionalProperties',
            'apiPackage' => 'OpenAPIServer\Api',
            'classname' => 'AbstractFakeApi',
            'userClassname' => 'FakeApi',
            'operationId' => 'testInlineAdditionalProperties',
            'authMethods' => [
            ],
        ],
        [
            'httpMethod' => 'GET',
            'basePathWithoutHost' => '/v2',
            'path' => '/fake/jsonFormData',
            'apiPackage' => 'OpenAPIServer\Api',
            'classname' => 'AbstractFakeApi',
            'userClassname' => 'FakeApi',
            'operationId' => 'testJsonFormData',
            'authMethods' => [
            ],
        ],
        [
            'httpMethod' => 'PATCH',
            'basePathWithoutHost' => '/v2',
            'path' => '/fake_classname_test',
            'apiPackage' => 'OpenAPIServer\Api',
            'classname' => 'AbstractFakeClassnameTags123Api',
            'userClassname' => 'FakeClassnameTags123Api',
            'operationId' => 'testClassname',
            'authMethods' => [
                // apiKey security schema named 'api_key_query'
                [
                    'type' => 'apiKey',
                    'isBasic' => false,
                    'isBearer' => false,
                    'isApiKey' => true,
                    'isOAuth' => false,
                    'keyParamName' => 'api_key_query',
                    'isKeyInHeader' => false,
                    'isKeyInQuery' => true,
                    'isKeyInCookie' => false,
                ],
            ],
        ],
        [
            'httpMethod' => 'POST',
            'basePathWithoutHost' => '/v2',
            'path' => '/pet',
            'apiPackage' => 'OpenAPIServer\Api',
            'classname' => 'AbstractPetApi',
            'userClassname' => 'PetApi',
            'operationId' => 'addPet',
            'authMethods' => [
                // oauth2 security schema named 'petstore_auth'
                [
                    'type' => 'oauth2',
                    'isBasic' => false,
                    'isBearer' => false,
                    'isApiKey' => false,
                    'isOAuth' => true,
                    'scopes' => [
                        'write:pets', // modify pets in your account
                        'read:pets', // read your pets
                    ],
                ],
            ],
        ],
        [
            'httpMethod' => 'GET',
            'basePathWithoutHost' => '/v2',
            'path' => '/pet/findByStatus',
            'apiPackage' => 'OpenAPIServer\Api',
            'classname' => 'AbstractPetApi',
            'userClassname' => 'PetApi',
            'operationId' => 'findPetsByStatus',
            'authMethods' => [
                // oauth2 security schema named 'petstore_auth'
                [
                    'type' => 'oauth2',
                    'isBasic' => false,
                    'isBearer' => false,
                    'isApiKey' => false,
                    'isOAuth' => true,
                    'scopes' => [
                        'write:pets', // modify pets in your account
                        'read:pets', // read your pets
                    ],
                ],
            ],
        ],
        [
            'httpMethod' => 'GET',
            'basePathWithoutHost' => '/v2',
            'path' => '/pet/findByTags',
            'apiPackage' => 'OpenAPIServer\Api',
            'classname' => 'AbstractPetApi',
            'userClassname' => 'PetApi',
            'operationId' => 'findPetsByTags',
            'authMethods' => [
                // oauth2 security schema named 'petstore_auth'
                [
                    'type' => 'oauth2',
                    'isBasic' => false,
                    'isBearer' => false,
                    'isApiKey' => false,
                    'isOAuth' => true,
                    'scopes' => [
                        'write:pets', // modify pets in your account
                        'read:pets', // read your pets
                    ],
                ],
            ],
        ],
        [
            'httpMethod' => 'PUT',
            'basePathWithoutHost' => '/v2',
            'path' => '/pet',
            'apiPackage' => 'OpenAPIServer\Api',
            'classname' => 'AbstractPetApi',
            'userClassname' => 'PetApi',
            'operationId' => 'updatePet',
            'authMethods' => [
                // oauth2 security schema named 'petstore_auth'
                [
                    'type' => 'oauth2',
                    'isBasic' => false,
                    'isBearer' => false,
                    'isApiKey' => false,
                    'isOAuth' => true,
                    'scopes' => [
                        'write:pets', // modify pets in your account
                        'read:pets', // read your pets
                    ],
                ],
            ],
        ],
        [
            'httpMethod' => 'DELETE',
            'basePathWithoutHost' => '/v2',
            'path' => '/pet/{petId}',
            'apiPackage' => 'OpenAPIServer\Api',
            'classname' => 'AbstractPetApi',
            'userClassname' => 'PetApi',
            'operationId' => 'deletePet',
            'authMethods' => [
                // oauth2 security schema named 'petstore_auth'
                [
                    'type' => 'oauth2',
                    'isBasic' => false,
                    'isBearer' => false,
                    'isApiKey' => false,
                    'isOAuth' => true,
                    'scopes' => [
                        'write:pets', // modify pets in your account
                        'read:pets', // read your pets
                    ],
                ],
            ],
        ],
        [
            'httpMethod' => 'GET',
            'basePathWithoutHost' => '/v2',
            'path' => '/pet/{petId}',
            'apiPackage' => 'OpenAPIServer\Api',
            'classname' => 'AbstractPetApi',
            'userClassname' => 'PetApi',
            'operationId' => 'getPetById',
            'authMethods' => [
                // apiKey security schema named 'api_key'
                [
                    'type' => 'apiKey',
                    'isBasic' => false,
                    'isBearer' => false,
                    'isApiKey' => true,
                    'isOAuth' => false,
                    'keyParamName' => 'api_key',
                    'isKeyInHeader' => true,
                    'isKeyInQuery' => false,
                    'isKeyInCookie' => false,
                ],
            ],
        ],
        [
            'httpMethod' => 'POST',
            'basePathWithoutHost' => '/v2',
            'path' => '/pet/{petId}',
            'apiPackage' => 'OpenAPIServer\Api',
            'classname' => 'AbstractPetApi',
            'userClassname' => 'PetApi',
            'operationId' => 'updatePetWithForm',
            'authMethods' => [
                // oauth2 security schema named 'petstore_auth'
                [
                    'type' => 'oauth2',
                    'isBasic' => false,
                    'isBearer' => false,
                    'isApiKey' => false,
                    'isOAuth' => true,
                    'scopes' => [
                        'write:pets', // modify pets in your account
                        'read:pets', // read your pets
                    ],
                ],
            ],
        ],
        [
            'httpMethod' => 'POST',
            'basePathWithoutHost' => '/v2',
            'path' => '/pet/{petId}/uploadImage',
            'apiPackage' => 'OpenAPIServer\Api',
            'classname' => 'AbstractPetApi',
            'userClassname' => 'PetApi',
            'operationId' => 'uploadFile',
            'authMethods' => [
                // oauth2 security schema named 'petstore_auth'
                [
                    'type' => 'oauth2',
                    'isBasic' => false,
                    'isBearer' => false,
                    'isApiKey' => false,
                    'isOAuth' => true,
                    'scopes' => [
                        'write:pets', // modify pets in your account
                        'read:pets', // read your pets
                    ],
                ],
            ],
        ],
        [
            'httpMethod' => 'POST',
            'basePathWithoutHost' => '/v2',
            'path' => '/fake/{petId}/uploadImageWithRequiredFile',
            'apiPackage' => 'OpenAPIServer\Api',
            'classname' => 'AbstractPetApi',
            'userClassname' => 'PetApi',
            'operationId' => 'uploadFileWithRequiredFile',
            'authMethods' => [
                // oauth2 security schema named 'petstore_auth'
                [
                    'type' => 'oauth2',
                    'isBasic' => false,
                    'isBearer' => false,
                    'isApiKey' => false,
                    'isOAuth' => true,
                    'scopes' => [
                        'write:pets', // modify pets in your account
                        'read:pets', // read your pets
                    ],
                ],
            ],
        ],
        [
            'httpMethod' => 'GET',
            'basePathWithoutHost' => '/v2',
            'path' => '/store/inventory',
            'apiPackage' => 'OpenAPIServer\Api',
            'classname' => 'AbstractStoreApi',
            'userClassname' => 'StoreApi',
            'operationId' => 'getInventory',
            'authMethods' => [
                // apiKey security schema named 'api_key'
                [
                    'type' => 'apiKey',
                    'isBasic' => false,
                    'isBearer' => false,
                    'isApiKey' => true,
                    'isOAuth' => false,
                    'keyParamName' => 'api_key',
                    'isKeyInHeader' => true,
                    'isKeyInQuery' => false,
                    'isKeyInCookie' => false,
                ],
            ],
        ],
        [
            'httpMethod' => 'POST',
            'basePathWithoutHost' => '/v2',
            'path' => '/store/order',
            'apiPackage' => 'OpenAPIServer\Api',
            'classname' => 'AbstractStoreApi',
            'userClassname' => 'StoreApi',
            'operationId' => 'placeOrder',
            'authMethods' => [
            ],
        ],
        [
            'httpMethod' => 'DELETE',
            'basePathWithoutHost' => '/v2',
            'path' => '/store/order/{order_id}',
            'apiPackage' => 'OpenAPIServer\Api',
            'classname' => 'AbstractStoreApi',
            'userClassname' => 'StoreApi',
            'operationId' => 'deleteOrder',
            'authMethods' => [
            ],
        ],
        [
            'httpMethod' => 'GET',
            'basePathWithoutHost' => '/v2',
            'path' => '/store/order/{order_id}',
            'apiPackage' => 'OpenAPIServer\Api',
            'classname' => 'AbstractStoreApi',
            'userClassname' => 'StoreApi',
            'operationId' => 'getOrderById',
            'authMethods' => [
            ],
        ],
        [
            'httpMethod' => 'POST',
            'basePathWithoutHost' => '/v2',
            'path' => '/user',
            'apiPackage' => 'OpenAPIServer\Api',
            'classname' => 'AbstractUserApi',
            'userClassname' => 'UserApi',
            'operationId' => 'createUser',
            'authMethods' => [
            ],
        ],
        [
            'httpMethod' => 'POST',
            'basePathWithoutHost' => '/v2',
            'path' => '/user/createWithArray',
            'apiPackage' => 'OpenAPIServer\Api',
            'classname' => 'AbstractUserApi',
            'userClassname' => 'UserApi',
            'operationId' => 'createUsersWithArrayInput',
            'authMethods' => [
            ],
        ],
        [
            'httpMethod' => 'POST',
            'basePathWithoutHost' => '/v2',
            'path' => '/user/createWithList',
            'apiPackage' => 'OpenAPIServer\Api',
            'classname' => 'AbstractUserApi',
            'userClassname' => 'UserApi',
            'operationId' => 'createUsersWithListInput',
            'authMethods' => [
            ],
        ],
        [
            'httpMethod' => 'GET',
            'basePathWithoutHost' => '/v2',
            'path' => '/user/login',
            'apiPackage' => 'OpenAPIServer\Api',
            'classname' => 'AbstractUserApi',
            'userClassname' => 'UserApi',
            'operationId' => 'loginUser',
            'authMethods' => [
            ],
        ],
        [
            'httpMethod' => 'GET',
            'basePathWithoutHost' => '/v2',
            'path' => '/user/logout',
            'apiPackage' => 'OpenAPIServer\Api',
            'classname' => 'AbstractUserApi',
            'userClassname' => 'UserApi',
            'operationId' => 'logoutUser',
            'authMethods' => [
            ],
        ],
        [
            'httpMethod' => 'DELETE',
            'basePathWithoutHost' => '/v2',
            'path' => '/user/{username}',
            'apiPackage' => 'OpenAPIServer\Api',
            'classname' => 'AbstractUserApi',
            'userClassname' => 'UserApi',
            'operationId' => 'deleteUser',
            'authMethods' => [
            ],
        ],
        [
            'httpMethod' => 'GET',
            'basePathWithoutHost' => '/v2',
            'path' => '/user/{username}',
            'apiPackage' => 'OpenAPIServer\Api',
            'classname' => 'AbstractUserApi',
            'userClassname' => 'UserApi',
            'operationId' => 'getUserByName',
            'authMethods' => [
            ],
        ],
        [
            'httpMethod' => 'PUT',
            'basePathWithoutHost' => '/v2',
            'path' => '/user/{username}',
            'apiPackage' => 'OpenAPIServer\Api',
            'classname' => 'AbstractUserApi',
            'userClassname' => 'UserApi',
            'operationId' => 'updateUser',
            'authMethods' => [
            ],
        ],
    ];

    /**
     * Class constructor
     *
     * @param ContainerInterface|array $settings Either a ContainerInterface or an associative array of app settings
     *
     * @throws InvalidArgumentException When no container is provided that implements ContainerInterface
     * @throws Exception When implementation class doesn't exists
     */
    public function __construct($settings = [])
    {
        $this->slimApp = new App($settings);

        // middlewares requires Psr\Container\ContainerInterface
        $container = $this->slimApp->getContainer();

        $authPackage = 'OpenAPIServer\Auth';
        $basicAuthenticator = function (ServerRequestInterface &$request, TokenSearch $tokenSearch) use ($authPackage) {
            $message = "How about extending AbstractAuthenticator class by {$authPackage}\BasicAuthenticator?";
            throw new Exception($message);
        };
        $apiKeyAuthenticator = function (ServerRequestInterface &$request, TokenSearch $tokenSearch) use ($authPackage) {
            $message = "How about extending AbstractAuthenticator class by {$authPackage}\ApiKeyAuthenticator?";
            throw new Exception($message);
        };
        $oAuthAuthenticator = function (ServerRequestInterface &$request, TokenSearch $tokenSearch) use ($authPackage) {
            $message = "How about extending AbstractAuthenticator class by {$authPackage}\OAuthAuthenticator?";
            throw new Exception($message);
        };

        foreach ($this->operations as $operation) {
            $callback = function ($request, $response, $arguments) use ($operation) {
                $message = "How about extending {$operation['classname']} by {$operation['apiPackage']}\\{$operation['userClassname']} class implementing {$operation['operationId']} as a {$operation['httpMethod']} method?";
                throw new Exception($message);
                return $response->withStatus(501)->write($message);
            };
            $middlewares = [];

            if (class_exists("\\{$operation['apiPackage']}\\{$operation['userClassname']}")) {
                $callback = "\\{$operation['apiPackage']}\\{$operation['userClassname']}:{$operation['operationId']}";
            }

            foreach ($operation['authMethods'] as $authMethod) {
                switch ($authMethod['type']) {
                    case 'http':
                        $authenticatorClassname = "\\{$authPackage}\\BasicAuthenticator";
                        if (class_exists($authenticatorClassname)) {
                            $basicAuthenticator = new $authenticatorClassname($container);
                        }

                        $middlewares[] = new TokenAuthentication($this->getTokenAuthenticationOptions([
                            'authenticator' => $basicAuthenticator,
                            'regex' => $authMethod['isBearer'] ? '/Bearer\s+(.*)$/i' : '/Basic\s+(.*)$/i',
                            'header' => 'Authorization',
                            'parameter' => null,
                            'cookie' => null,
                            'argument' => null,
                        ]));
                        break;
                    case 'apiKey':
                        $authenticatorClassname = "\\{$authPackage}\\ApiKeyAuthenticator";
                        if (class_exists($authenticatorClassname)) {
                            $apiKeyAuthenticator = new $authenticatorClassname($container);
                        }

                        $middlewares[] = new TokenAuthentication($this->getTokenAuthenticationOptions([
                            'authenticator' => $apiKeyAuthenticator,
                            'regex' => '/^(.*)$/i',
                            'header' => $authMethod['isKeyInHeader'] ? $authMethod['keyParamName'] : null,
                            'parameter' => $authMethod['isKeyInQuery'] ? $authMethod['keyParamName'] : null,
                            'cookie' => $authMethod['isKeyInCookie'] ? $authMethod['keyParamName'] : null,
                            'argument' => null,
                        ]));
                        break;
                    case 'oauth2':
                        $authenticatorClassname = "\\{$authPackage}\\OAuthAuthenticator";
                        if (class_exists($authenticatorClassname)) {
                            $oAuthAuthenticator = new $authenticatorClassname($container, $authMethod['scopes']);
                        }

                        $middlewares[] = new TokenAuthentication($this->getTokenAuthenticationOptions([
                            'authenticator' => $oAuthAuthenticator,
                            'regex' => '/Bearer\s+(.*)$/i',
                            'header' => 'Authorization',
                            'parameter' => null,
                            'cookie' => null,
                            'argument' => null,
                        ]));
                        break;
                    default:
                        throw new Exception('Unknown authorization schema type');
                }
            }

            $this->addRoute(
                [$operation['httpMethod']],
                "{$operation['basePathWithoutHost']}{$operation['path']}",
                $callback,
                $middlewares
            )->setName($operation['operationId']);
        }
    }

    /**
     * Merges user defined options with dynamic params
     *
     * @param array $options Params which need to merge into user options
     *
     * @return array Merged array
     */
    private function getTokenAuthenticationOptions(array $options)
    {
        if (is_array($this->slimApp->getContainer()['tokenAuthenticationOptions']) === false) {
            return $options;
        }

        return array_merge($this->slimApp->getContainer()['tokenAuthenticationOptions'], $options);
    }

    /**
     * Add route with multiple methods
     *
     * @param string[]        $methods     Numeric array of HTTP method names
     * @param string          $pattern     The route URI pattern
     * @param callable|string $callable    The route callback routine
     * @param array|null      $middlewares List of middlewares
     *
     * @return RouteInterface
     *
     * @throws InvalidArgumentException If the route pattern isn't a string
     */
    public function addRoute(array $methods, string $pattern, $callable, $middlewares = [])
    {
        $route = $this->slimApp->map($methods, $pattern, $callable);
        foreach ($middlewares as $middleware) {
            $route->add($middleware);
        }
        return $route;
    }

    /**
     * Returns Slim Framework instance
     *
     * @return App
     */
    public function getSlimApp()
    {
        return $this->slimApp;
    }
}
