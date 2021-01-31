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
 * https://github.com/google/googleapis/blob/master/google/cloud/recommender/v1/recommender_service.proto
 * and updates to that file get reflected here through a refresh process.
 */

namespace Google\Cloud\Recommender\V1\Gapic;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\PathTemplate;
use Google\ApiCore\RequestParamsHeaderDescriptor;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\Recommender\V1\GetInsightRequest;
use Google\Cloud\Recommender\V1\GetRecommendationRequest;
use Google\Cloud\Recommender\V1\Insight;
use Google\Cloud\Recommender\V1\ListInsightsRequest;
use Google\Cloud\Recommender\V1\ListInsightsResponse;
use Google\Cloud\Recommender\V1\ListRecommendationsRequest;
use Google\Cloud\Recommender\V1\ListRecommendationsResponse;
use Google\Cloud\Recommender\V1\MarkInsightAcceptedRequest;
use Google\Cloud\Recommender\V1\MarkRecommendationClaimedRequest;
use Google\Cloud\Recommender\V1\MarkRecommendationFailedRequest;
use Google\Cloud\Recommender\V1\MarkRecommendationSucceededRequest;
use Google\Cloud\Recommender\V1\Recommendation;

/**
 * Service Description: Provides insights and recommendations for cloud customers for various
 * categories like performance optimization, cost savings, reliability, feature
 * discovery, etc. Insights and recommendations are generated automatically
 * based on analysis of user resources, configuration and monitoring metrics.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods. Sample code to get started:
 *
 * ```
 * $recommenderClient = new RecommenderClient();
 * try {
 *     $parent = '';
 *     // Iterate over pages of elements
 *     $pagedResponse = $recommenderClient->listInsights($parent);
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
 *     $pagedResponse = $recommenderClient->listInsights($parent);
 *     foreach ($pagedResponse->iterateAllElements() as $element) {
 *         // doSomethingWith($element);
 *     }
 * } finally {
 *     $recommenderClient->close();
 * }
 * ```
 *
 * Many parameters require resource names to be formatted in a particular way. To assist
 * with these names, this class includes a format method for each type of name, and additionally
 * a parseName method to extract the individual identifiers contained within formatted names
 * that are returned by the API.
 */
class RecommenderGapicClient
{
    use GapicClientTrait;

    /**
     * The name of the service.
     */
    const SERVICE_NAME = 'google.cloud.recommender.v1.Recommender';

    /**
     * The default address of the service.
     */
    const SERVICE_ADDRESS = 'recommender.googleapis.com';

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
    private static $billingAccountLocationInsightTypeNameTemplate;
    private static $billingAccountLocationInsightTypeInsightNameTemplate;
    private static $billingAccountLocationRecommenderNameTemplate;
    private static $billingAccountLocationRecommenderRecommendationNameTemplate;
    private static $insightNameTemplate;
    private static $insightTypeNameTemplate;
    private static $projectLocationInsightTypeNameTemplate;
    private static $projectLocationInsightTypeInsightNameTemplate;
    private static $projectLocationRecommenderNameTemplate;
    private static $projectLocationRecommenderRecommendationNameTemplate;
    private static $recommendationNameTemplate;
    private static $recommenderNameTemplate;
    private static $pathTemplateMap;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' => self::SERVICE_ADDRESS.':'.self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__.'/../resources/recommender_client_config.json',
            'descriptorsConfigPath' => __DIR__.'/../resources/recommender_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__.'/../resources/recommender_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__.'/../resources/recommender_rest_client_config.php',
                ],
            ],
        ];
    }

    private static function getBillingAccountLocationInsightTypeNameTemplate()
    {
        if (null == self::$billingAccountLocationInsightTypeNameTemplate) {
            self::$billingAccountLocationInsightTypeNameTemplate = new PathTemplate('billingAccounts/{billing_account}/locations/{location}/insightTypes/{insight_type}');
        }

        return self::$billingAccountLocationInsightTypeNameTemplate;
    }

    private static function getBillingAccountLocationInsightTypeInsightNameTemplate()
    {
        if (null == self::$billingAccountLocationInsightTypeInsightNameTemplate) {
            self::$billingAccountLocationInsightTypeInsightNameTemplate = new PathTemplate('billingAccounts/{billing_account}/locations/{location}/insightTypes/{insight_type}/insights/{insight}');
        }

        return self::$billingAccountLocationInsightTypeInsightNameTemplate;
    }

    private static function getBillingAccountLocationRecommenderNameTemplate()
    {
        if (null == self::$billingAccountLocationRecommenderNameTemplate) {
            self::$billingAccountLocationRecommenderNameTemplate = new PathTemplate('billingAccounts/{billing_account}/locations/{location}/recommenders/{recommender}');
        }

        return self::$billingAccountLocationRecommenderNameTemplate;
    }

    private static function getBillingAccountLocationRecommenderRecommendationNameTemplate()
    {
        if (null == self::$billingAccountLocationRecommenderRecommendationNameTemplate) {
            self::$billingAccountLocationRecommenderRecommendationNameTemplate = new PathTemplate('billingAccounts/{billing_account}/locations/{location}/recommenders/{recommender}/recommendations/{recommendation}');
        }

        return self::$billingAccountLocationRecommenderRecommendationNameTemplate;
    }

    private static function getInsightNameTemplate()
    {
        if (null == self::$insightNameTemplate) {
            self::$insightNameTemplate = new PathTemplate('projects/{project}/locations/{location}/insightTypes/{insight_type}/insights/{insight}');
        }

        return self::$insightNameTemplate;
    }

    private static function getInsightTypeNameTemplate()
    {
        if (null == self::$insightTypeNameTemplate) {
            self::$insightTypeNameTemplate = new PathTemplate('projects/{project}/locations/{location}/insightTypes/{insight_type}');
        }

        return self::$insightTypeNameTemplate;
    }

    private static function getProjectLocationInsightTypeNameTemplate()
    {
        if (null == self::$projectLocationInsightTypeNameTemplate) {
            self::$projectLocationInsightTypeNameTemplate = new PathTemplate('projects/{project}/locations/{location}/insightTypes/{insight_type}');
        }

        return self::$projectLocationInsightTypeNameTemplate;
    }

    private static function getProjectLocationInsightTypeInsightNameTemplate()
    {
        if (null == self::$projectLocationInsightTypeInsightNameTemplate) {
            self::$projectLocationInsightTypeInsightNameTemplate = new PathTemplate('projects/{project}/locations/{location}/insightTypes/{insight_type}/insights/{insight}');
        }

        return self::$projectLocationInsightTypeInsightNameTemplate;
    }

    private static function getProjectLocationRecommenderNameTemplate()
    {
        if (null == self::$projectLocationRecommenderNameTemplate) {
            self::$projectLocationRecommenderNameTemplate = new PathTemplate('projects/{project}/locations/{location}/recommenders/{recommender}');
        }

        return self::$projectLocationRecommenderNameTemplate;
    }

    private static function getProjectLocationRecommenderRecommendationNameTemplate()
    {
        if (null == self::$projectLocationRecommenderRecommendationNameTemplate) {
            self::$projectLocationRecommenderRecommendationNameTemplate = new PathTemplate('projects/{project}/locations/{location}/recommenders/{recommender}/recommendations/{recommendation}');
        }

        return self::$projectLocationRecommenderRecommendationNameTemplate;
    }

    private static function getRecommendationNameTemplate()
    {
        if (null == self::$recommendationNameTemplate) {
            self::$recommendationNameTemplate = new PathTemplate('projects/{project}/locations/{location}/recommenders/{recommender}/recommendations/{recommendation}');
        }

        return self::$recommendationNameTemplate;
    }

    private static function getRecommenderNameTemplate()
    {
        if (null == self::$recommenderNameTemplate) {
            self::$recommenderNameTemplate = new PathTemplate('projects/{project}/locations/{location}/recommenders/{recommender}');
        }

        return self::$recommenderNameTemplate;
    }

    private static function getPathTemplateMap()
    {
        if (null == self::$pathTemplateMap) {
            self::$pathTemplateMap = [
                'billingAccountLocationInsightType' => self::getBillingAccountLocationInsightTypeNameTemplate(),
                'billingAccountLocationInsightTypeInsight' => self::getBillingAccountLocationInsightTypeInsightNameTemplate(),
                'billingAccountLocationRecommender' => self::getBillingAccountLocationRecommenderNameTemplate(),
                'billingAccountLocationRecommenderRecommendation' => self::getBillingAccountLocationRecommenderRecommendationNameTemplate(),
                'insight' => self::getInsightNameTemplate(),
                'insightType' => self::getInsightTypeNameTemplate(),
                'projectLocationInsightType' => self::getProjectLocationInsightTypeNameTemplate(),
                'projectLocationInsightTypeInsight' => self::getProjectLocationInsightTypeInsightNameTemplate(),
                'projectLocationRecommender' => self::getProjectLocationRecommenderNameTemplate(),
                'projectLocationRecommenderRecommendation' => self::getProjectLocationRecommenderRecommendationNameTemplate(),
                'recommendation' => self::getRecommendationNameTemplate(),
                'recommender' => self::getRecommenderNameTemplate(),
            ];
        }

        return self::$pathTemplateMap;
    }

    /**
     * Formats a string containing the fully-qualified path to represent
     * a billing_account_location_insight_type resource.
     *
     * @param string $billingAccount
     * @param string $location
     * @param string $insightType
     *
     * @return string The formatted billing_account_location_insight_type resource.
     */
    public static function billingAccountLocationInsightTypeName($billingAccount, $location, $insightType)
    {
        return self::getBillingAccountLocationInsightTypeNameTemplate()->render([
            'billing_account' => $billingAccount,
            'location' => $location,
            'insight_type' => $insightType,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent
     * a billing_account_location_insight_type_insight resource.
     *
     * @param string $billingAccount
     * @param string $location
     * @param string $insightType
     * @param string $insight
     *
     * @return string The formatted billing_account_location_insight_type_insight resource.
     */
    public static function billingAccountLocationInsightTypeInsightName($billingAccount, $location, $insightType, $insight)
    {
        return self::getBillingAccountLocationInsightTypeInsightNameTemplate()->render([
            'billing_account' => $billingAccount,
            'location' => $location,
            'insight_type' => $insightType,
            'insight' => $insight,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent
     * a billing_account_location_recommender resource.
     *
     * @param string $billingAccount
     * @param string $location
     * @param string $recommender
     *
     * @return string The formatted billing_account_location_recommender resource.
     */
    public static function billingAccountLocationRecommenderName($billingAccount, $location, $recommender)
    {
        return self::getBillingAccountLocationRecommenderNameTemplate()->render([
            'billing_account' => $billingAccount,
            'location' => $location,
            'recommender' => $recommender,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent
     * a billing_account_location_recommender_recommendation resource.
     *
     * @param string $billingAccount
     * @param string $location
     * @param string $recommender
     * @param string $recommendation
     *
     * @return string The formatted billing_account_location_recommender_recommendation resource.
     */
    public static function billingAccountLocationRecommenderRecommendationName($billingAccount, $location, $recommender, $recommendation)
    {
        return self::getBillingAccountLocationRecommenderRecommendationNameTemplate()->render([
            'billing_account' => $billingAccount,
            'location' => $location,
            'recommender' => $recommender,
            'recommendation' => $recommendation,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent
     * a insight resource.
     *
     * @param string $project
     * @param string $location
     * @param string $insightType
     * @param string $insight
     *
     * @return string The formatted insight resource.
     */
    public static function insightName($project, $location, $insightType, $insight)
    {
        return self::getInsightNameTemplate()->render([
            'project' => $project,
            'location' => $location,
            'insight_type' => $insightType,
            'insight' => $insight,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent
     * a insight_type resource.
     *
     * @param string $project
     * @param string $location
     * @param string $insightType
     *
     * @return string The formatted insight_type resource.
     */
    public static function insightTypeName($project, $location, $insightType)
    {
        return self::getInsightTypeNameTemplate()->render([
            'project' => $project,
            'location' => $location,
            'insight_type' => $insightType,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent
     * a project_location_insight_type resource.
     *
     * @param string $project
     * @param string $location
     * @param string $insightType
     *
     * @return string The formatted project_location_insight_type resource.
     */
    public static function projectLocationInsightTypeName($project, $location, $insightType)
    {
        return self::getProjectLocationInsightTypeNameTemplate()->render([
            'project' => $project,
            'location' => $location,
            'insight_type' => $insightType,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent
     * a project_location_insight_type_insight resource.
     *
     * @param string $project
     * @param string $location
     * @param string $insightType
     * @param string $insight
     *
     * @return string The formatted project_location_insight_type_insight resource.
     */
    public static function projectLocationInsightTypeInsightName($project, $location, $insightType, $insight)
    {
        return self::getProjectLocationInsightTypeInsightNameTemplate()->render([
            'project' => $project,
            'location' => $location,
            'insight_type' => $insightType,
            'insight' => $insight,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent
     * a project_location_recommender resource.
     *
     * @param string $project
     * @param string $location
     * @param string $recommender
     *
     * @return string The formatted project_location_recommender resource.
     */
    public static function projectLocationRecommenderName($project, $location, $recommender)
    {
        return self::getProjectLocationRecommenderNameTemplate()->render([
            'project' => $project,
            'location' => $location,
            'recommender' => $recommender,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent
     * a project_location_recommender_recommendation resource.
     *
     * @param string $project
     * @param string $location
     * @param string $recommender
     * @param string $recommendation
     *
     * @return string The formatted project_location_recommender_recommendation resource.
     */
    public static function projectLocationRecommenderRecommendationName($project, $location, $recommender, $recommendation)
    {
        return self::getProjectLocationRecommenderRecommendationNameTemplate()->render([
            'project' => $project,
            'location' => $location,
            'recommender' => $recommender,
            'recommendation' => $recommendation,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent
     * a recommendation resource.
     *
     * @param string $project
     * @param string $location
     * @param string $recommender
     * @param string $recommendation
     *
     * @return string The formatted recommendation resource.
     */
    public static function recommendationName($project, $location, $recommender, $recommendation)
    {
        return self::getRecommendationNameTemplate()->render([
            'project' => $project,
            'location' => $location,
            'recommender' => $recommender,
            'recommendation' => $recommendation,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent
     * a recommender resource.
     *
     * @param string $project
     * @param string $location
     * @param string $recommender
     *
     * @return string The formatted recommender resource.
     */
    public static function recommenderName($project, $location, $recommender)
    {
        return self::getRecommenderNameTemplate()->render([
            'project' => $project,
            'location' => $location,
            'recommender' => $recommender,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - billingAccountLocationInsightType: billingAccounts/{billing_account}/locations/{location}/insightTypes/{insight_type}
     * - billingAccountLocationInsightTypeInsight: billingAccounts/{billing_account}/locations/{location}/insightTypes/{insight_type}/insights/{insight}
     * - billingAccountLocationRecommender: billingAccounts/{billing_account}/locations/{location}/recommenders/{recommender}
     * - billingAccountLocationRecommenderRecommendation: billingAccounts/{billing_account}/locations/{location}/recommenders/{recommender}/recommendations/{recommendation}
     * - insight: projects/{project}/locations/{location}/insightTypes/{insight_type}/insights/{insight}
     * - insightType: projects/{project}/locations/{location}/insightTypes/{insight_type}
     * - projectLocationInsightType: projects/{project}/locations/{location}/insightTypes/{insight_type}
     * - projectLocationInsightTypeInsight: projects/{project}/locations/{location}/insightTypes/{insight_type}/insights/{insight}
     * - projectLocationRecommender: projects/{project}/locations/{location}/recommenders/{recommender}
     * - projectLocationRecommenderRecommendation: projects/{project}/locations/{location}/recommenders/{recommender}/recommendations/{recommendation}
     * - recommendation: projects/{project}/locations/{location}/recommenders/{recommender}/recommendations/{recommendation}
     * - recommender: projects/{project}/locations/{location}/recommenders/{recommender}.
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
     *           as "<uri>:<port>". Default 'recommender.googleapis.com:443'.
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
     */
    public function __construct(array $options = [])
    {
        $clientOptions = $this->buildClientOptions($options);
        $this->setClientOptions($clientOptions);
    }

    /**
     * Lists insights for a Cloud project. Requires the recommender.*.list IAM
     * permission for the specified insight type.
     *
     * Sample code:
     * ```
     * $recommenderClient = new RecommenderClient();
     * try {
     *     $parent = '';
     *     // Iterate over pages of elements
     *     $pagedResponse = $recommenderClient->listInsights($parent);
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
     *     $pagedResponse = $recommenderClient->listInsights($parent);
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $recommenderClient->close();
     * }
     * ```
     *
     * @param string $parent Required. The container resource on which to execute the request.
     *                       Acceptable formats:
     *
     * 1.
     * "projects/[PROJECT_NUMBER]/locations/[LOCATION]/insightTypes/[INSIGHT_TYPE_ID]",
     *
     * LOCATION here refers to GCP Locations:
     * https://cloud.google.com/about/locations/
     * INSIGHT_TYPE_ID refers to supported insight types:
     * https://cloud.google.com/recommender/docs/insights/insight-types.)
     * @param array $optionalArgs {
     *                            Optional.
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
     *          Optional. Filter expression to restrict the insights returned. Supported
     *          filter fields: state
     *          Eg: `state:"DISMISSED" or state:"ACTIVE"
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
     */
    public function listInsights($parent, array $optionalArgs = [])
    {
        $request = new ListInsightsRequest();
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
            'ListInsights',
            $optionalArgs,
            ListInsightsResponse::class,
            $request
        );
    }

    /**
     * Gets the requested insight. Requires the recommender.*.get IAM permission
     * for the specified insight type.
     *
     * Sample code:
     * ```
     * $recommenderClient = new RecommenderClient();
     * try {
     *     $name = '';
     *     $response = $recommenderClient->getInsight($name);
     * } finally {
     *     $recommenderClient->close();
     * }
     * ```
     *
     * @param string $name         Required. Name of the insight.
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
     * @return \Google\Cloud\Recommender\V1\Insight
     *
     * @throws ApiException if the remote call fails
     */
    public function getInsight($name, array $optionalArgs = [])
    {
        $request = new GetInsightRequest();
        $request->setName($name);

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'GetInsight',
            Insight::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Marks the Insight State as Accepted. Users can use this method to
     * indicate to the Recommender API that they have applied some action based
     * on the insight. This stops the insight content from being updated.
     *
     * MarkInsightAccepted can be applied to insights in ACTIVE state. Requires
     * the recommender.*.update IAM permission for the specified insight.
     *
     * Sample code:
     * ```
     * $recommenderClient = new RecommenderClient();
     * try {
     *     $name = '';
     *     $etag = '';
     *     $response = $recommenderClient->markInsightAccepted($name, $etag);
     * } finally {
     *     $recommenderClient->close();
     * }
     * ```
     *
     * @param string $name         Required. Name of the insight.
     * @param string $etag         Required. Fingerprint of the Insight. Provides optimistic locking.
     * @param array  $optionalArgs {
     *                             Optional.
     *
     *     @type array $stateMetadata
     *          Optional. State properties user wish to include with this state.  Full replace of the
     *          current state_metadata.
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Recommender\V1\Insight
     *
     * @throws ApiException if the remote call fails
     */
    public function markInsightAccepted($name, $etag, array $optionalArgs = [])
    {
        $request = new MarkInsightAcceptedRequest();
        $request->setName($name);
        $request->setEtag($etag);
        if (isset($optionalArgs['stateMetadata'])) {
            $request->setStateMetadata($optionalArgs['stateMetadata']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'MarkInsightAccepted',
            Insight::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Lists recommendations for a Cloud project. Requires the recommender.*.list
     * IAM permission for the specified recommender.
     *
     * Sample code:
     * ```
     * $recommenderClient = new RecommenderClient();
     * try {
     *     $parent = '';
     *     // Iterate over pages of elements
     *     $pagedResponse = $recommenderClient->listRecommendations($parent);
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
     *     $pagedResponse = $recommenderClient->listRecommendations($parent);
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $recommenderClient->close();
     * }
     * ```
     *
     * @param string $parent Required. The container resource on which to execute the request.
     *                       Acceptable formats:
     *
     * 1.
     * "projects/[PROJECT_NUMBER]/locations/[LOCATION]/recommenders/[RECOMMENDER_ID]",
     *
     * LOCATION here refers to GCP Locations:
     * https://cloud.google.com/about/locations/
     * RECOMMENDER_ID refers to supported recommenders:
     * https://cloud.google.com/recommender/docs/recommenders.
     * @param array $optionalArgs {
     *                            Optional.
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
     *          Filter expression to restrict the recommendations returned. Supported
     *          filter fields: state_info.state
     *          Eg: `state_info.state:"DISMISSED" or state_info.state:"FAILED"
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
     */
    public function listRecommendations($parent, array $optionalArgs = [])
    {
        $request = new ListRecommendationsRequest();
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
            'ListRecommendations',
            $optionalArgs,
            ListRecommendationsResponse::class,
            $request
        );
    }

    /**
     * Gets the requested recommendation. Requires the recommender.*.get
     * IAM permission for the specified recommender.
     *
     * Sample code:
     * ```
     * $recommenderClient = new RecommenderClient();
     * try {
     *     $name = '';
     *     $response = $recommenderClient->getRecommendation($name);
     * } finally {
     *     $recommenderClient->close();
     * }
     * ```
     *
     * @param string $name         Required. Name of the recommendation.
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
     * @return \Google\Cloud\Recommender\V1\Recommendation
     *
     * @throws ApiException if the remote call fails
     */
    public function getRecommendation($name, array $optionalArgs = [])
    {
        $request = new GetRecommendationRequest();
        $request->setName($name);

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'GetRecommendation',
            Recommendation::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Marks the Recommendation State as Claimed. Users can use this method to
     * indicate to the Recommender API that they are starting to apply the
     * recommendation themselves. This stops the recommendation content from being
     * updated. Associated insights are frozen and placed in the ACCEPTED state.
     *
     * MarkRecommendationClaimed can be applied to recommendations in CLAIMED,
     * SUCCEEDED, FAILED, or ACTIVE state.
     *
     * Requires the recommender.*.update IAM permission for the specified
     * recommender.
     *
     * Sample code:
     * ```
     * $recommenderClient = new RecommenderClient();
     * try {
     *     $name = '';
     *     $etag = '';
     *     $response = $recommenderClient->markRecommendationClaimed($name, $etag);
     * } finally {
     *     $recommenderClient->close();
     * }
     * ```
     *
     * @param string $name         Required. Name of the recommendation.
     * @param string $etag         Required. Fingerprint of the Recommendation. Provides optimistic locking.
     * @param array  $optionalArgs {
     *                             Optional.
     *
     *     @type array $stateMetadata
     *          State properties to include with this state. Overwrites any existing
     *          `state_metadata`.
     *          Keys must match the regex /^[a-z0-9][a-z0-9_.-]{0,62}$/.
     *          Values must match the regex /^[a-zA-Z0-9_./-]{0,255}$/.
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Recommender\V1\Recommendation
     *
     * @throws ApiException if the remote call fails
     */
    public function markRecommendationClaimed($name, $etag, array $optionalArgs = [])
    {
        $request = new MarkRecommendationClaimedRequest();
        $request->setName($name);
        $request->setEtag($etag);
        if (isset($optionalArgs['stateMetadata'])) {
            $request->setStateMetadata($optionalArgs['stateMetadata']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'MarkRecommendationClaimed',
            Recommendation::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Marks the Recommendation State as Succeeded. Users can use this method to
     * indicate to the Recommender API that they have applied the recommendation
     * themselves, and the operation was successful. This stops the recommendation
     * content from being updated. Associated insights are frozen and placed in
     * the ACCEPTED state.
     *
     * MarkRecommendationSucceeded can be applied to recommendations in ACTIVE,
     * CLAIMED, SUCCEEDED, or FAILED state.
     *
     * Requires the recommender.*.update IAM permission for the specified
     * recommender.
     *
     * Sample code:
     * ```
     * $recommenderClient = new RecommenderClient();
     * try {
     *     $name = '';
     *     $etag = '';
     *     $response = $recommenderClient->markRecommendationSucceeded($name, $etag);
     * } finally {
     *     $recommenderClient->close();
     * }
     * ```
     *
     * @param string $name         Required. Name of the recommendation.
     * @param string $etag         Required. Fingerprint of the Recommendation. Provides optimistic locking.
     * @param array  $optionalArgs {
     *                             Optional.
     *
     *     @type array $stateMetadata
     *          State properties to include with this state. Overwrites any existing
     *          `state_metadata`.
     *          Keys must match the regex /^[a-z0-9][a-z0-9_.-]{0,62}$/.
     *          Values must match the regex /^[a-zA-Z0-9_./-]{0,255}$/.
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Recommender\V1\Recommendation
     *
     * @throws ApiException if the remote call fails
     */
    public function markRecommendationSucceeded($name, $etag, array $optionalArgs = [])
    {
        $request = new MarkRecommendationSucceededRequest();
        $request->setName($name);
        $request->setEtag($etag);
        if (isset($optionalArgs['stateMetadata'])) {
            $request->setStateMetadata($optionalArgs['stateMetadata']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'MarkRecommendationSucceeded',
            Recommendation::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Marks the Recommendation State as Failed. Users can use this method to
     * indicate to the Recommender API that they have applied the recommendation
     * themselves, and the operation failed. This stops the recommendation content
     * from being updated. Associated insights are frozen and placed in the
     * ACCEPTED state.
     *
     * MarkRecommendationFailed can be applied to recommendations in ACTIVE,
     * CLAIMED, SUCCEEDED, or FAILED state.
     *
     * Requires the recommender.*.update IAM permission for the specified
     * recommender.
     *
     * Sample code:
     * ```
     * $recommenderClient = new RecommenderClient();
     * try {
     *     $name = '';
     *     $etag = '';
     *     $response = $recommenderClient->markRecommendationFailed($name, $etag);
     * } finally {
     *     $recommenderClient->close();
     * }
     * ```
     *
     * @param string $name         Required. Name of the recommendation.
     * @param string $etag         Required. Fingerprint of the Recommendation. Provides optimistic locking.
     * @param array  $optionalArgs {
     *                             Optional.
     *
     *     @type array $stateMetadata
     *          State properties to include with this state. Overwrites any existing
     *          `state_metadata`.
     *          Keys must match the regex /^[a-z0-9][a-z0-9_.-]{0,62}$/.
     *          Values must match the regex /^[a-zA-Z0-9_./-]{0,255}$/.
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Recommender\V1\Recommendation
     *
     * @throws ApiException if the remote call fails
     */
    public function markRecommendationFailed($name, $etag, array $optionalArgs = [])
    {
        $request = new MarkRecommendationFailedRequest();
        $request->setName($name);
        $request->setEtag($etag);
        if (isset($optionalArgs['stateMetadata'])) {
            $request->setStateMetadata($optionalArgs['stateMetadata']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'MarkRecommendationFailed',
            Recommendation::class,
            $optionalArgs,
            $request
        )->wait();
    }
}
