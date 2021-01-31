<?php
/*
 * Copyright 2020 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * This file was generated from the file
 * https://github.com/google/googleapis/blob/master/google/cloud/recommendationengine/v1beta1/catalog_service.proto
 * and updates to that file get reflected here through a refresh process.
 *
 * @experimental
 */

namespace Google\Cloud\RecommendationEngine\V1beta1\Gapic;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\LongRunning\OperationsClient;
use Google\ApiCore\OperationResponse;
use Google\ApiCore\PathTemplate;
use Google\ApiCore\RequestParamsHeaderDescriptor;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\RecommendationEngine\V1beta1\CatalogItem;
use Google\Cloud\RecommendationEngine\V1beta1\CreateCatalogItemRequest;
use Google\Cloud\RecommendationEngine\V1beta1\DeleteCatalogItemRequest;
use Google\Cloud\RecommendationEngine\V1beta1\GetCatalogItemRequest;
use Google\Cloud\RecommendationEngine\V1beta1\ImportCatalogItemsRequest;
use Google\Cloud\RecommendationEngine\V1beta1\ImportErrorsConfig;
use Google\Cloud\RecommendationEngine\V1beta1\InputConfig;
use Google\Cloud\RecommendationEngine\V1beta1\ListCatalogItemsRequest;
use Google\Cloud\RecommendationEngine\V1beta1\ListCatalogItemsResponse;
use Google\Cloud\RecommendationEngine\V1beta1\UpdateCatalogItemRequest;
use Google\LongRunning\Operation;
use Google\Protobuf\FieldMask;
use Google\Protobuf\GPBEmpty;

/**
 * Service Description: Service for ingesting catalog information of the customer's website.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods. Sample code to get started:
 *
 * ```
 * $catalogServiceClient = new CatalogServiceClient();
 * try {
 *     $formattedParent = $catalogServiceClient->catalogName('[PROJECT]', '[LOCATION]', '[CATALOG]');
 *     $inputConfig = new InputConfig();
 *     $operationResponse = $catalogServiceClient->importCatalogItems($formattedParent, $inputConfig);
 *     $operationResponse->pollUntilComplete();
 *     if ($operationResponse->operationSucceeded()) {
 *         $result = $operationResponse->getResult();
 *         // doSomethingWith($result)
 *     } else {
 *         $error = $operationResponse->getError();
 *         // handleError($error)
 *     }
 *
 *
 *     // Alternatively:
 *
 *     // start the operation, keep the operation name, and resume later
 *     $operationResponse = $catalogServiceClient->importCatalogItems($formattedParent, $inputConfig);
 *     $operationName = $operationResponse->getName();
 *     // ... do other work
 *     $newOperationResponse = $catalogServiceClient->resumeOperation($operationName, 'importCatalogItems');
 *     while (!$newOperationResponse->isDone()) {
 *         // ... do other work
 *         $newOperationResponse->reload();
 *     }
 *     if ($newOperationResponse->operationSucceeded()) {
 *       $result = $newOperationResponse->getResult();
 *       // doSomethingWith($result)
 *     } else {
 *       $error = $newOperationResponse->getError();
 *       // handleError($error)
 *     }
 * } finally {
 *     $catalogServiceClient->close();
 * }
 * ```
 *
 * Many parameters require resource names to be formatted in a particular way. To assist
 * with these names, this class includes a format method for each type of name, and additionally
 * a parseName method to extract the individual identifiers contained within formatted names
 * that are returned by the API.
 *
 * @experimental
 */
class CatalogServiceGapicClient
{
    use GapicClientTrait;

    /**
     * The name of the service.
     */
    const SERVICE_NAME = 'google.cloud.recommendationengine.v1beta1.CatalogService';

    /**
     * The default address of the service.
     */
    const SERVICE_ADDRESS = 'recommendationengine.googleapis.com';

    /**
     * The default port of the service.
     */
    const DEFAULT_SERVICE_PORT = 443;

    /**
     * The name of the code generator, to be included in the agent header.
     */
    const CODEGEN_NAME = 'gapic';

    /**
     * The default scopes required by the service.
     */
    public static $serviceScopes = [
        'https://www.googleapis.com/auth/cloud-platform',
    ];
    private static $catalogNameTemplate;
    private static $catalogItemPathNameTemplate;
    private static $pathTemplateMap;

    private $operationsClient;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' => self::SERVICE_ADDRESS.':'.self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__.'/../resources/catalog_service_client_config.json',
            'descriptorsConfigPath' => __DIR__.'/../resources/catalog_service_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__.'/../resources/catalog_service_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__.'/../resources/catalog_service_rest_client_config.php',
                ],
            ],
        ];
    }

    private static function getCatalogNameTemplate()
    {
        if (null == self::$catalogNameTemplate) {
            self::$catalogNameTemplate = new PathTemplate('projects/{project}/locations/{location}/catalogs/{catalog}');
        }

        return self::$catalogNameTemplate;
    }

    private static function getCatalogItemPathNameTemplate()
    {
        if (null == self::$catalogItemPathNameTemplate) {
            self::$catalogItemPathNameTemplate = new PathTemplate('projects/{project}/locations/{location}/catalogs/{catalog}/catalogItems/{catalog_item_path=**}');
        }

        return self::$catalogItemPathNameTemplate;
    }

    private static function getPathTemplateMap()
    {
        if (null == self::$pathTemplateMap) {
            self::$pathTemplateMap = [
                'catalog' => self::getCatalogNameTemplate(),
                'catalogItemPath' => self::getCatalogItemPathNameTemplate(),
            ];
        }

        return self::$pathTemplateMap;
    }

    /**
     * Formats a string containing the fully-qualified path to represent
     * a catalog resource.
     *
     * @param string $project
     * @param string $location
     * @param string $catalog
     *
     * @return string The formatted catalog resource.
     * @experimental
     */
    public static function catalogName($project, $location, $catalog)
    {
        return self::getCatalogNameTemplate()->render([
            'project' => $project,
            'location' => $location,
            'catalog' => $catalog,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent
     * a catalog_item_path resource.
     *
     * @param string $project
     * @param string $location
     * @param string $catalog
     * @param string $catalogItemPath
     *
     * @return string The formatted catalog_item_path resource.
     * @experimental
     */
    public static function catalogItemPathName($project, $location, $catalog, $catalogItemPath)
    {
        return self::getCatalogItemPathNameTemplate()->render([
            'project' => $project,
            'location' => $location,
            'catalog' => $catalog,
            'catalog_item_path' => $catalogItemPath,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - catalog: projects/{project}/locations/{location}/catalogs/{catalog}
     * - catalogItemPath: projects/{project}/locations/{location}/catalogs/{catalog}/catalogItems/{catalog_item_path=**}.
     *
     * The optional $template argument can be supplied to specify a particular pattern, and must
     * match one of the templates listed above. If no $template argument is provided, or if the
     * $template argument does not match one of the templates listed, then parseName will check
     * each of the supported templates, and return the first match.
     *
     * @param string $formattedName The formatted name string
     * @param string $template      Optional name of template to match
     *
     * @return array An associative array from name component IDs to component values.
     *
     * @throws ValidationException If $formattedName could not be matched.
     * @experimental
     */
    public static function parseName($formattedName, $template = null)
    {
        $templateMap = self::getPathTemplateMap();

        if ($template) {
            if (!isset($templateMap[$template])) {
                throw new ValidationException("Template name $template does not exist");
            }

            return $templateMap[$template]->match($formattedName);
        }

        foreach ($templateMap as $templateName => $pathTemplate) {
            try {
                return $pathTemplate->match($formattedName);
            } catch (ValidationException $ex) {
                // Swallow the exception to continue trying other path templates
            }
        }
        throw new ValidationException("Input did not match any known format. Input: $formattedName");
    }

    /**
     * Return an OperationsClient object with the same endpoint as $this.
     *
     * @return OperationsClient
     * @experimental
     */
    public function getOperationsClient()
    {
        return $this->operationsClient;
    }

    /**
     * Resume an existing long running operation that was previously started
     * by a long running API method. If $methodName is not provided, or does
     * not match a long running API method, then the operation can still be
     * resumed, but the OperationResponse object will not deserialize the
     * final response.
     *
     * @param string $operationName The name of the long running operation
     * @param string $methodName    The name of the method used to start the operation
     *
     * @return OperationResponse
     * @experimental
     */
    public function resumeOperation($operationName, $methodName = null)
    {
        $options = isset($this->descriptors[$methodName]['longRunning'])
            ? $this->descriptors[$methodName]['longRunning']
            : [];
        $operation = new OperationResponse($operationName, $this->getOperationsClient(), $options);
        $operation->reload();

        return $operation;
    }

    /**
     * Constructor.
     *
     * @param array $options {
     *                       Optional. Options for configuring the service API wrapper.
     *
     *     @type string $serviceAddress
     *           **Deprecated**. This option will be removed in a future major release. Please
     *           utilize the `$apiEndpoint` option instead.
     *     @type string $apiEndpoint
     *           The address of the API remote host. May optionally include the port, formatted
     *           as "<uri>:<port>". Default 'recommendationengine.googleapis.com:443'.
     *     @type string|array|FetchAuthTokenInterface|CredentialsWrapper $credentials
     *           The credentials to be used by the client to authorize API calls. This option
     *           accepts either a path to a credentials file, or a decoded credentials file as a
     *           PHP array.
     *           *Advanced usage*: In addition, this option can also accept a pre-constructed
     *           {@see \Google\Auth\FetchAuthTokenInterface} object or
     *           {@see \Google\ApiCore\CredentialsWrapper} object. Note that when one of these
     *           objects are provided, any settings in $credentialsConfig will be ignored.
     *     @type array $credentialsConfig
     *           Options used to configure credentials, including auth token caching, for the client.
     *           For a full list of supporting configuration options, see
     *           {@see \Google\ApiCore\CredentialsWrapper::build()}.
     *     @type bool $disableRetries
     *           Determines whether or not retries defined by the client configuration should be
     *           disabled. Defaults to `false`.
     *     @type string|array $clientConfig
     *           Client method configuration, including retry settings. This option can be either a
     *           path to a JSON file, or a PHP array containing the decoded JSON data.
     *           By default this settings points to the default client config file, which is provided
     *           in the resources folder.
     *     @type string|TransportInterface $transport
     *           The transport used for executing network requests. May be either the string `rest`
     *           or `grpc`. Defaults to `grpc` if gRPC support is detected on the system.
     *           *Advanced usage*: Additionally, it is possible to pass in an already instantiated
     *           {@see \Google\ApiCore\Transport\TransportInterface} object. Note that when this
     *           object is provided, any settings in $transportConfig, and any `$apiEndpoint`
     *           setting, will be ignored.
     *     @type array $transportConfig
     *           Configuration options that will be used to construct the transport. Options for
     *           each supported transport type should be passed in a key for that transport. For
     *           example:
     *           $transportConfig = [
     *               'grpc' => [...],
     *               'rest' => [...]
     *           ];
     *           See the {@see \Google\ApiCore\Transport\GrpcTransport::build()} and
     *           {@see \Google\ApiCore\Transport\RestTransport::build()} methods for the
     *           supported options.
     * }
     *
     * @throws ValidationException
     * @experimental
     */
    public function __construct(array $options = [])
    {
        $clientOptions = $this->buildClientOptions($options);
        $this->setClientOptions($clientOptions);
        $this->operationsClient = $this->createOperationsClient($clientOptions);
    }

    /**
     * Bulk import of multiple catalog items. Request processing may be
     * synchronous. No partial updating supported. Non-existing items will be
     * created.
     *
     * Operation.response is of type ImportResponse. Note that it is
     * possible for a subset of the items to be successfully updated.
     *
     * Sample code:
     * ```
     * $catalogServiceClient = new CatalogServiceClient();
     * try {
     *     $formattedParent = $catalogServiceClient->catalogName('[PROJECT]', '[LOCATION]', '[CATALOG]');
     *     $inputConfig = new InputConfig();
     *     $operationResponse = $catalogServiceClient->importCatalogItems($formattedParent, $inputConfig);
     *     $operationResponse->pollUntilComplete();
     *     if ($operationResponse->operationSucceeded()) {
     *         $result = $operationResponse->getResult();
     *         // doSomethingWith($result)
     *     } else {
     *         $error = $operationResponse->getError();
     *         // handleError($error)
     *     }
     *
     *
     *     // Alternatively:
     *
     *     // start the operation, keep the operation name, and resume later
     *     $operationResponse = $catalogServiceClient->importCatalogItems($formattedParent, $inputConfig);
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $catalogServiceClient->resumeOperation($operationName, 'importCatalogItems');
     *     while (!$newOperationResponse->isDone()) {
     *         // ... do other work
     *         $newOperationResponse->reload();
     *     }
     *     if ($newOperationResponse->operationSucceeded()) {
     *       $result = $newOperationResponse->getResult();
     *       // doSomethingWith($result)
     *     } else {
     *       $error = $newOperationResponse->getError();
     *       // handleError($error)
     *     }
     * } finally {
     *     $catalogServiceClient->close();
     * }
     * ```
     *
     * @param string      $parent       Required. "projects/1234/locations/global/catalogs/default_catalog"
     * @param InputConfig $inputConfig  Required. The desired input location of the data.
     * @param array       $optionalArgs {
     *                                  Optional.
     *
     *     @type string $requestId
     *          Optional. Unique identifier provided by client, within the ancestor
     *          dataset scope. Ensures idempotency and used for request deduplication.
     *          Server-generated if unspecified. Up to 128 characters long. This is
     *          returned as google.longrunning.Operation.name in the response.
     *     @type ImportErrorsConfig $errorsConfig
     *          Optional. The desired location of errors incurred during the Import.
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\ApiCore\OperationResponse
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function importCatalogItems($parent, $inputConfig, array $optionalArgs = [])
    {
        $request = new ImportCatalogItemsRequest();
        $request->setParent($parent);
        $request->setInputConfig($inputConfig);
        if (isset($optionalArgs['requestId'])) {
            $request->setRequestId($optionalArgs['requestId']);
        }
        if (isset($optionalArgs['errorsConfig'])) {
            $request->setErrorsConfig($optionalArgs['errorsConfig']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'parent' => $request->getParent(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startOperationsCall(
            'ImportCatalogItems',
            $optionalArgs,
            $request,
            $this->getOperationsClient()
        )->wait();
    }

    /**
     * Creates a catalog item.
     *
     * Sample code:
     * ```
     * $catalogServiceClient = new CatalogServiceClient();
     * try {
     *     $formattedParent = $catalogServiceClient->catalogName('[PROJECT]', '[LOCATION]', '[CATALOG]');
     *     $catalogItem = new CatalogItem();
     *     $response = $catalogServiceClient->createCatalogItem($formattedParent, $catalogItem);
     * } finally {
     *     $catalogServiceClient->close();
     * }
     * ```
     *
     * @param string      $parent       Required. The parent catalog resource name, such as
     *                                  "projects/&#42;/locations/global/catalogs/default_catalog".
     * @param CatalogItem $catalogItem  Required. The catalog item to create.
     * @param array       $optionalArgs {
     *                                  Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\RecommendationEngine\V1beta1\CatalogItem
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function createCatalogItem($parent, $catalogItem, array $optionalArgs = [])
    {
        $request = new CreateCatalogItemRequest();
        $request->setParent($parent);
        $request->setCatalogItem($catalogItem);

        $requestParams = new RequestParamsHeaderDescriptor([
          'parent' => $request->getParent(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'CreateCatalogItem',
            CatalogItem::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Gets a specific catalog item.
     *
     * Sample code:
     * ```
     * $catalogServiceClient = new CatalogServiceClient();
     * try {
     *     $formattedName = $catalogServiceClient->catalogItemPathName('[PROJECT]', '[LOCATION]', '[CATALOG]', '[CATALOG_ITEM_PATH]');
     *     $response = $catalogServiceClient->getCatalogItem($formattedName);
     * } finally {
     *     $catalogServiceClient->close();
     * }
     * ```
     *
     * @param string $name         Required. Full resource name of catalog item, such as
     *                             "projects/&#42;/locations/global/catalogs/default_catalog/catalogitems/some_catalog_item_id".
     * @param array  $optionalArgs {
     *                             Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\RecommendationEngine\V1beta1\CatalogItem
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function getCatalogItem($name, array $optionalArgs = [])
    {
        $request = new GetCatalogItemRequest();
        $request->setName($name);

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'GetCatalogItem',
            CatalogItem::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Gets a list of catalog items.
     *
     * Sample code:
     * ```
     * $catalogServiceClient = new CatalogServiceClient();
     * try {
     *     $formattedParent = $catalogServiceClient->catalogName('[PROJECT]', '[LOCATION]', '[CATALOG]');
     *     // Iterate over pages of elements
     *     $pagedResponse = $catalogServiceClient->listCatalogItems($formattedParent);
     *     foreach ($pagedResponse->iteratePages() as $page) {
     *         foreach ($page as $element) {
     *             // doSomethingWith($element);
     *         }
     *     }
     *
     *
     *     // Alternatively:
     *
     *     // Iterate through all elements
     *     $pagedResponse = $catalogServiceClient->listCatalogItems($formattedParent);
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $catalogServiceClient->close();
     * }
     * ```
     *
     * @param string $parent       Required. The parent catalog resource name, such as
     *                             "projects/&#42;/locations/global/catalogs/default_catalog".
     * @param array  $optionalArgs {
     *                             Optional.
     *
     *     @type int $pageSize
     *          The maximum number of resources contained in the underlying API
     *          response. The API may return fewer values in a page, even if
     *          there are additional values to be retrieved.
     *     @type string $pageToken
     *          A page token is used to specify a page of values to be returned.
     *          If no page token is specified (the default), the first page
     *          of values will be returned. Any page token used here must have
     *          been generated by a previous call to the API.
     *     @type string $filter
     *          Optional. A filter to apply on the list results.
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\ApiCore\PagedListResponse
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function listCatalogItems($parent, array $optionalArgs = [])
    {
        $request = new ListCatalogItemsRequest();
        $request->setParent($parent);
        if (isset($optionalArgs['pageSize'])) {
            $request->setPageSize($optionalArgs['pageSize']);
        }
        if (isset($optionalArgs['pageToken'])) {
            $request->setPageToken($optionalArgs['pageToken']);
        }
        if (isset($optionalArgs['filter'])) {
            $request->setFilter($optionalArgs['filter']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'parent' => $request->getParent(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->getPagedListResponse(
            'ListCatalogItems',
            $optionalArgs,
            ListCatalogItemsResponse::class,
            $request
        );
    }

    /**
     * Updates a catalog item. Partial updating is supported. Non-existing
     * items will be created.
     *
     * Sample code:
     * ```
     * $catalogServiceClient = new CatalogServiceClient();
     * try {
     *     $formattedName = $catalogServiceClient->catalogItemPathName('[PROJECT]', '[LOCATION]', '[CATALOG]', '[CATALOG_ITEM_PATH]');
     *     $catalogItem = new CatalogItem();
     *     $response = $catalogServiceClient->updateCatalogItem($formattedName, $catalogItem);
     * } finally {
     *     $catalogServiceClient->close();
     * }
     * ```
     *
     * @param string      $name         Required. Full resource name of catalog item, such as
     *                                  "projects/&#42;/locations/global/catalogs/default_catalog/catalogItems/some_catalog_item_id".
     * @param CatalogItem $catalogItem  Required. The catalog item to update/create. The 'catalog_item_id' field
     *                                  has to match that in the 'name'.
     * @param array       $optionalArgs {
     *                                  Optional.
     *
     *     @type FieldMask $updateMask
     *          Optional. Indicates which fields in the provided 'item' to update. If not
     *          set, will by default update all fields.
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\RecommendationEngine\V1beta1\CatalogItem
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function updateCatalogItem($name, $catalogItem, array $optionalArgs = [])
    {
        $request = new UpdateCatalogItemRequest();
        $request->setName($name);
        $request->setCatalogItem($catalogItem);
        if (isset($optionalArgs['updateMask'])) {
            $request->setUpdateMask($optionalArgs['updateMask']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'UpdateCatalogItem',
            CatalogItem::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Deletes a catalog item.
     *
     * Sample code:
     * ```
     * $catalogServiceClient = new CatalogServiceClient();
     * try {
     *     $formattedName = $catalogServiceClient->catalogItemPathName('[PROJECT]', '[LOCATION]', '[CATALOG]', '[CATALOG_ITEM_PATH]');
     *     $catalogServiceClient->deleteCatalogItem($formattedName);
     * } finally {
     *     $catalogServiceClient->close();
     * }
     * ```
     *
     * @param string $name         Required. Full resource name of catalog item, such as
     *                             "projects/&#42;/locations/global/catalogs/default_catalog/catalogItems/some_catalog_item_id".
     * @param array  $optionalArgs {
     *                             Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function deleteCatalogItem($name, array $optionalArgs = [])
    {
        $request = new DeleteCatalogItemRequest();
        $request->setName($name);

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'DeleteCatalogItem',
            GPBEmpty::class,
            $optionalArgs,
            $request
        )->wait();
    }
}