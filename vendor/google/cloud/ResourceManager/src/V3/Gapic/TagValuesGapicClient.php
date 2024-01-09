<?php
/*
 * Copyright 2021 Google LLC
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
 * Generated by gapic-generator-php from the file
 * https://github.com/googleapis/googleapis/blob/master/google/cloud/resourcemanager/v3/tag_values.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Cloud\ResourceManager\V3\Gapic;

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
use Google\Cloud\Iam\V1\GetIamPolicyRequest;
use Google\Cloud\Iam\V1\GetPolicyOptions;
use Google\Cloud\Iam\V1\Policy;
use Google\Cloud\Iam\V1\SetIamPolicyRequest;
use Google\Cloud\Iam\V1\TestIamPermissionsRequest;
use Google\Cloud\Iam\V1\TestIamPermissionsResponse;
use Google\Cloud\ResourceManager\V3\CreateTagValueRequest;
use Google\Cloud\ResourceManager\V3\DeleteTagValueRequest;
use Google\Cloud\ResourceManager\V3\GetNamespacedTagValueRequest;
use Google\Cloud\ResourceManager\V3\GetTagValueRequest;
use Google\Cloud\ResourceManager\V3\ListTagValuesRequest;
use Google\Cloud\ResourceManager\V3\ListTagValuesResponse;
use Google\Cloud\ResourceManager\V3\TagValue;
use Google\Cloud\ResourceManager\V3\UpdateTagValueRequest;
use Google\LongRunning\Operation;
use Google\Protobuf\FieldMask;

/**
 * Service Description: Allow users to create and manage tag values.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods. Sample code to get started:
 *
 * ```
 * $tagValuesClient = new TagValuesClient();
 * try {
 *     $tagValue = new TagValue();
 *     $operationResponse = $tagValuesClient->createTagValue($tagValue);
 *     $operationResponse->pollUntilComplete();
 *     if ($operationResponse->operationSucceeded()) {
 *         $result = $operationResponse->getResult();
 *     // doSomethingWith($result)
 *     } else {
 *         $error = $operationResponse->getError();
 *         // handleError($error)
 *     }
 *     // Alternatively:
 *     // start the operation, keep the operation name, and resume later
 *     $operationResponse = $tagValuesClient->createTagValue($tagValue);
 *     $operationName = $operationResponse->getName();
 *     // ... do other work
 *     $newOperationResponse = $tagValuesClient->resumeOperation($operationName, 'createTagValue');
 *     while (!$newOperationResponse->isDone()) {
 *         // ... do other work
 *         $newOperationResponse->reload();
 *     }
 *     if ($newOperationResponse->operationSucceeded()) {
 *         $result = $newOperationResponse->getResult();
 *     // doSomethingWith($result)
 *     } else {
 *         $error = $newOperationResponse->getError();
 *         // handleError($error)
 *     }
 * } finally {
 *     $tagValuesClient->close();
 * }
 * ```
 *
 * Many parameters require resource names to be formatted in a particular way. To
 * assist with these names, this class includes a format method for each type of
 * name, and additionally a parseName method to extract the individual identifiers
 * contained within formatted names that are returned by the API.
 *
 * This service has a new (beta) implementation. See {@see
 * \Google\Cloud\ResourceManager\V3\Client\TagValuesClient} to use the new surface.
 */
class TagValuesGapicClient
{
    use GapicClientTrait;

    /** The name of the service. */
    const SERVICE_NAME = 'google.cloud.resourcemanager.v3.TagValues';

    /** The default address of the service. */
    const SERVICE_ADDRESS = 'cloudresourcemanager.googleapis.com';

    /** The default port of the service. */
    const DEFAULT_SERVICE_PORT = 443;

    /** The name of the code generator, to be included in the agent header. */
    const CODEGEN_NAME = 'gapic';

    /** The default scopes required by the service. */
    public static $serviceScopes = [
        'https://www.googleapis.com/auth/cloud-platform',
        'https://www.googleapis.com/auth/cloud-platform.read-only',
    ];

    private static $tagValueNameTemplate;

    private static $pathTemplateMap;

    private $operationsClient;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' => self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__ . '/../resources/tag_values_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../resources/tag_values_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__ . '/../resources/tag_values_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../resources/tag_values_rest_client_config.php',
                ],
            ],
        ];
    }

    private static function getTagValueNameTemplate()
    {
        if (self::$tagValueNameTemplate == null) {
            self::$tagValueNameTemplate = new PathTemplate('tagValues/{tag_value}');
        }

        return self::$tagValueNameTemplate;
    }

    private static function getPathTemplateMap()
    {
        if (self::$pathTemplateMap == null) {
            self::$pathTemplateMap = [
                'tagValue' => self::getTagValueNameTemplate(),
            ];
        }

        return self::$pathTemplateMap;
    }

    /**
     * Formats a string containing the fully-qualified path to represent a tag_value
     * resource.
     *
     * @param string $tagValue
     *
     * @return string The formatted tag_value resource.
     */
    public static function tagValueName($tagValue)
    {
        return self::getTagValueNameTemplate()->render([
            'tag_value' => $tagValue,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - tagValue: tagValues/{tag_value}
     *
     * The optional $template argument can be supplied to specify a particular pattern,
     * and must match one of the templates listed above. If no $template argument is
     * provided, or if the $template argument does not match one of the templates
     * listed, then parseName will check each of the supported templates, and return
     * the first match.
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
     * Return an OperationsClient object with the same endpoint as $this.
     *
     * @return OperationsClient
     */
    public function getOperationsClient()
    {
        return $this->operationsClient;
    }

    /**
     * Resume an existing long running operation that was previously started by a long
     * running API method. If $methodName is not provided, or does not match a long
     * running API method, then the operation can still be resumed, but the
     * OperationResponse object will not deserialize the final response.
     *
     * @param string $operationName The name of the long running operation
     * @param string $methodName    The name of the method used to start the operation
     *
     * @return OperationResponse
     */
    public function resumeOperation($operationName, $methodName = null)
    {
        $options = isset($this->descriptors[$methodName]['longRunning']) ? $this->descriptors[$methodName]['longRunning'] : [];
        $operation = new OperationResponse($operationName, $this->getOperationsClient(), $options);
        $operation->reload();
        return $operation;
    }

    /**
     * Constructor.
     *
     * @param array $options {
     *     Optional. Options for configuring the service API wrapper.
     *
     *     @type string $apiEndpoint
     *           The address of the API remote host. May optionally include the port, formatted
     *           as "<uri>:<port>". Default 'cloudresourcemanager.googleapis.com:443'.
     *     @type string|array|FetchAuthTokenInterface|CredentialsWrapper $credentials
     *           The credentials to be used by the client to authorize API calls. This option
     *           accepts either a path to a credentials file, or a decoded credentials file as a
     *           PHP array.
     *           *Advanced usage*: In addition, this option can also accept a pre-constructed
     *           {@see \Google\Auth\FetchAuthTokenInterface} object or
     *           {@see \Google\ApiCore\CredentialsWrapper} object. Note that when one of these
     *           objects are provided, any settings in $credentialsConfig will be ignored.
     *     @type array $credentialsConfig
     *           Options used to configure credentials, including auth token caching, for the
     *           client. For a full list of supporting configuration options, see
     *           {@see \Google\ApiCore\CredentialsWrapper::build()} .
     *     @type bool $disableRetries
     *           Determines whether or not retries defined by the client configuration should be
     *           disabled. Defaults to `false`.
     *     @type string|array $clientConfig
     *           Client method configuration, including retry settings. This option can be either
     *           a path to a JSON file, or a PHP array containing the decoded JSON data. By
     *           default this settings points to the default client config file, which is
     *           provided in the resources folder.
     *     @type string|TransportInterface $transport
     *           The transport used for executing network requests. May be either the string
     *           `rest` or `grpc`. Defaults to `grpc` if gRPC support is detected on the system.
     *           *Advanced usage*: Additionally, it is possible to pass in an already
     *           instantiated {@see \Google\ApiCore\Transport\TransportInterface} object. Note
     *           that when this object is provided, any settings in $transportConfig, and any
     *           $apiEndpoint setting, will be ignored.
     *     @type array $transportConfig
     *           Configuration options that will be used to construct the transport. Options for
     *           each supported transport type should be passed in a key for that transport. For
     *           example:
     *           $transportConfig = [
     *               'grpc' => [...],
     *               'rest' => [...],
     *           ];
     *           See the {@see \Google\ApiCore\Transport\GrpcTransport::build()} and
     *           {@see \Google\ApiCore\Transport\RestTransport::build()} methods for the
     *           supported options.
     *     @type callable $clientCertSource
     *           A callable which returns the client cert as a string. This can be used to
     *           provide a certificate and private key to the transport layer for mTLS.
     * }
     *
     * @throws ValidationException
     */
    public function __construct(array $options = [])
    {
        $clientOptions = $this->buildClientOptions($options);
        $this->setClientOptions($clientOptions);
        $this->operationsClient = $this->createOperationsClient($clientOptions);
    }

    /**
     * Creates a TagValue as a child of the specified TagKey. If a another
     * request with the same parameters is sent while the original request is in
     * process the second request will receive an error. A maximum of 1000
     * TagValues can exist under a TagKey at any given time.
     *
     * Sample code:
     * ```
     * $tagValuesClient = new TagValuesClient();
     * try {
     *     $tagValue = new TagValue();
     *     $operationResponse = $tagValuesClient->createTagValue($tagValue);
     *     $operationResponse->pollUntilComplete();
     *     if ($operationResponse->operationSucceeded()) {
     *         $result = $operationResponse->getResult();
     *     // doSomethingWith($result)
     *     } else {
     *         $error = $operationResponse->getError();
     *         // handleError($error)
     *     }
     *     // Alternatively:
     *     // start the operation, keep the operation name, and resume later
     *     $operationResponse = $tagValuesClient->createTagValue($tagValue);
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $tagValuesClient->resumeOperation($operationName, 'createTagValue');
     *     while (!$newOperationResponse->isDone()) {
     *         // ... do other work
     *         $newOperationResponse->reload();
     *     }
     *     if ($newOperationResponse->operationSucceeded()) {
     *         $result = $newOperationResponse->getResult();
     *     // doSomethingWith($result)
     *     } else {
     *         $error = $newOperationResponse->getError();
     *         // handleError($error)
     *     }
     * } finally {
     *     $tagValuesClient->close();
     * }
     * ```
     *
     * @param TagValue $tagValue     Required. The TagValue to be created. Only fields `short_name`,
     *                               `description`, and `parent` are considered during the creation request.
     * @param array    $optionalArgs {
     *     Optional.
     *
     *     @type bool $validateOnly
     *           Optional. Set as true to perform the validations necessary for creating the
     *           resource, but not actually perform the action.
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\ApiCore\OperationResponse
     *
     * @throws ApiException if the remote call fails
     */
    public function createTagValue($tagValue, array $optionalArgs = [])
    {
        $request = new CreateTagValueRequest();
        $request->setTagValue($tagValue);
        if (isset($optionalArgs['validateOnly'])) {
            $request->setValidateOnly($optionalArgs['validateOnly']);
        }

        return $this->startOperationsCall('CreateTagValue', $optionalArgs, $request, $this->getOperationsClient())->wait();
    }

    /**
     * Deletes a TagValue. The TagValue cannot have any bindings when it is
     * deleted.
     *
     * Sample code:
     * ```
     * $tagValuesClient = new TagValuesClient();
     * try {
     *     $formattedName = $tagValuesClient->tagValueName('[TAG_VALUE]');
     *     $operationResponse = $tagValuesClient->deleteTagValue($formattedName);
     *     $operationResponse->pollUntilComplete();
     *     if ($operationResponse->operationSucceeded()) {
     *         $result = $operationResponse->getResult();
     *     // doSomethingWith($result)
     *     } else {
     *         $error = $operationResponse->getError();
     *         // handleError($error)
     *     }
     *     // Alternatively:
     *     // start the operation, keep the operation name, and resume later
     *     $operationResponse = $tagValuesClient->deleteTagValue($formattedName);
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $tagValuesClient->resumeOperation($operationName, 'deleteTagValue');
     *     while (!$newOperationResponse->isDone()) {
     *         // ... do other work
     *         $newOperationResponse->reload();
     *     }
     *     if ($newOperationResponse->operationSucceeded()) {
     *         $result = $newOperationResponse->getResult();
     *     // doSomethingWith($result)
     *     } else {
     *         $error = $newOperationResponse->getError();
     *         // handleError($error)
     *     }
     * } finally {
     *     $tagValuesClient->close();
     * }
     * ```
     *
     * @param string $name         Required. Resource name for TagValue to be deleted in the format
     *                             tagValues/456.
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type bool $validateOnly
     *           Optional. Set as true to perform the validations necessary for deletion,
     *           but not actually perform the action.
     *     @type string $etag
     *           Optional. The etag known to the client for the expected state of the
     *           TagValue. This is to be used for optimistic concurrency.
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\ApiCore\OperationResponse
     *
     * @throws ApiException if the remote call fails
     */
    public function deleteTagValue($name, array $optionalArgs = [])
    {
        $request = new DeleteTagValueRequest();
        $requestParamHeaders = [];
        $request->setName($name);
        $requestParamHeaders['name'] = $name;
        if (isset($optionalArgs['validateOnly'])) {
            $request->setValidateOnly($optionalArgs['validateOnly']);
        }

        if (isset($optionalArgs['etag'])) {
            $request->setEtag($optionalArgs['etag']);
        }

        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startOperationsCall('DeleteTagValue', $optionalArgs, $request, $this->getOperationsClient())->wait();
    }

    /**
     * Gets the access control policy for a TagValue. The returned policy may be
     * empty if no such policy or resource exists. The `resource` field should
     * be the TagValue's resource name. For example: `tagValues/1234`.
     * The caller must have the
     * `cloudresourcemanager.googleapis.com/tagValues.getIamPolicy` permission on
     * the identified TagValue to get the access control policy.
     *
     * Sample code:
     * ```
     * $tagValuesClient = new TagValuesClient();
     * try {
     *     $resource = 'resource';
     *     $response = $tagValuesClient->getIamPolicy($resource);
     * } finally {
     *     $tagValuesClient->close();
     * }
     * ```
     *
     * @param string $resource     REQUIRED: The resource for which the policy is being requested.
     *                             See the operation documentation for the appropriate value for this field.
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type GetPolicyOptions $options
     *           OPTIONAL: A `GetPolicyOptions` object for specifying options to
     *           `GetIamPolicy`.
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Iam\V1\Policy
     *
     * @throws ApiException if the remote call fails
     */
    public function getIamPolicy($resource, array $optionalArgs = [])
    {
        $request = new GetIamPolicyRequest();
        $requestParamHeaders = [];
        $request->setResource($resource);
        $requestParamHeaders['resource'] = $resource;
        if (isset($optionalArgs['options'])) {
            $request->setOptions($optionalArgs['options']);
        }

        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('GetIamPolicy', Policy::class, $optionalArgs, $request)->wait();
    }

    /**
     * Retrieves a TagValue by its namespaced name.
     * This method will return `PERMISSION_DENIED` if the value does not exist
     * or the user does not have permission to view it.
     *
     * Sample code:
     * ```
     * $tagValuesClient = new TagValuesClient();
     * try {
     *     $formattedName = $tagValuesClient->tagValueName('[TAG_VALUE]');
     *     $response = $tagValuesClient->getNamespacedTagValue($formattedName);
     * } finally {
     *     $tagValuesClient->close();
     * }
     * ```
     *
     * @param string $name         Required. A namespaced tag value name in the following format:
     *
     *                             `{parentId}/{tagKeyShort}/{tagValueShort}`
     *
     *                             Examples:
     *                             - `42/foo/abc` for a value with short name "abc" under the key with short
     *                             name "foo" under the organization with ID 42
     *                             - `r2-d2/bar/xyz` for a value with short name "xyz" under the key with
     *                             short name "bar" under the project with ID "r2-d2"
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\ResourceManager\V3\TagValue
     *
     * @throws ApiException if the remote call fails
     */
    public function getNamespacedTagValue($name, array $optionalArgs = [])
    {
        $request = new GetNamespacedTagValueRequest();
        $request->setName($name);
        return $this->startCall('GetNamespacedTagValue', TagValue::class, $optionalArgs, $request)->wait();
    }

    /**
     * Retrieves a TagValue. This method will return `PERMISSION_DENIED` if the
     * value does not exist or the user does not have permission to view it.
     *
     * Sample code:
     * ```
     * $tagValuesClient = new TagValuesClient();
     * try {
     *     $formattedName = $tagValuesClient->tagValueName('[TAG_VALUE]');
     *     $response = $tagValuesClient->getTagValue($formattedName);
     * } finally {
     *     $tagValuesClient->close();
     * }
     * ```
     *
     * @param string $name         Required. Resource name for TagValue to be fetched in the format
     *                             `tagValues/456`.
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\ResourceManager\V3\TagValue
     *
     * @throws ApiException if the remote call fails
     */
    public function getTagValue($name, array $optionalArgs = [])
    {
        $request = new GetTagValueRequest();
        $requestParamHeaders = [];
        $request->setName($name);
        $requestParamHeaders['name'] = $name;
        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('GetTagValue', TagValue::class, $optionalArgs, $request)->wait();
    }

    /**
     * Lists all TagValues for a specific TagKey.
     *
     * Sample code:
     * ```
     * $tagValuesClient = new TagValuesClient();
     * try {
     *     $parent = 'parent';
     *     // Iterate over pages of elements
     *     $pagedResponse = $tagValuesClient->listTagValues($parent);
     *     foreach ($pagedResponse->iteratePages() as $page) {
     *         foreach ($page as $element) {
     *             // doSomethingWith($element);
     *         }
     *     }
     *     // Alternatively:
     *     // Iterate through all elements
     *     $pagedResponse = $tagValuesClient->listTagValues($parent);
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $tagValuesClient->close();
     * }
     * ```
     *
     * @param string $parent       Required.
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type int $pageSize
     *           The maximum number of resources contained in the underlying API
     *           response. The API may return fewer values in a page, even if
     *           there are additional values to be retrieved.
     *     @type string $pageToken
     *           A page token is used to specify a page of values to be returned.
     *           If no page token is specified (the default), the first page
     *           of values will be returned. Any page token used here must have
     *           been generated by a previous call to the API.
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\ApiCore\PagedListResponse
     *
     * @throws ApiException if the remote call fails
     */
    public function listTagValues($parent, array $optionalArgs = [])
    {
        $request = new ListTagValuesRequest();
        $request->setParent($parent);
        if (isset($optionalArgs['pageSize'])) {
            $request->setPageSize($optionalArgs['pageSize']);
        }

        if (isset($optionalArgs['pageToken'])) {
            $request->setPageToken($optionalArgs['pageToken']);
        }

        return $this->getPagedListResponse('ListTagValues', $optionalArgs, ListTagValuesResponse::class, $request);
    }

    /**
     * Sets the access control policy on a TagValue, replacing any existing
     * policy. The `resource` field should be the TagValue's resource name.
     * For example: `tagValues/1234`.
     * The caller must have `resourcemanager.tagValues.setIamPolicy` permission
     * on the identified tagValue.
     *
     * Sample code:
     * ```
     * $tagValuesClient = new TagValuesClient();
     * try {
     *     $resource = 'resource';
     *     $policy = new Policy();
     *     $response = $tagValuesClient->setIamPolicy($resource, $policy);
     * } finally {
     *     $tagValuesClient->close();
     * }
     * ```
     *
     * @param string $resource     REQUIRED: The resource for which the policy is being specified.
     *                             See the operation documentation for the appropriate value for this field.
     * @param Policy $policy       REQUIRED: The complete policy to be applied to the `resource`. The size of
     *                             the policy is limited to a few 10s of KB. An empty policy is a
     *                             valid policy but certain Cloud Platform services (such as Projects)
     *                             might reject them.
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type FieldMask $updateMask
     *           OPTIONAL: A FieldMask specifying which fields of the policy to modify. Only
     *           the fields in the mask will be modified. If no mask is provided, the
     *           following default mask is used:
     *
     *           `paths: "bindings, etag"`
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Iam\V1\Policy
     *
     * @throws ApiException if the remote call fails
     */
    public function setIamPolicy($resource, $policy, array $optionalArgs = [])
    {
        $request = new SetIamPolicyRequest();
        $requestParamHeaders = [];
        $request->setResource($resource);
        $request->setPolicy($policy);
        $requestParamHeaders['resource'] = $resource;
        if (isset($optionalArgs['updateMask'])) {
            $request->setUpdateMask($optionalArgs['updateMask']);
        }

        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('SetIamPolicy', Policy::class, $optionalArgs, $request)->wait();
    }

    /**
     * Returns permissions that a caller has on the specified TagValue.
     * The `resource` field should be the TagValue's resource name. For example:
     * `tagValues/1234`.
     *
     * There are no permissions required for making this API call.
     *
     * Sample code:
     * ```
     * $tagValuesClient = new TagValuesClient();
     * try {
     *     $resource = 'resource';
     *     $permissions = [];
     *     $response = $tagValuesClient->testIamPermissions($resource, $permissions);
     * } finally {
     *     $tagValuesClient->close();
     * }
     * ```
     *
     * @param string   $resource     REQUIRED: The resource for which the policy detail is being requested.
     *                               See the operation documentation for the appropriate value for this field.
     * @param string[] $permissions  The set of permissions to check for the `resource`. Permissions with
     *                               wildcards (such as '*' or 'storage.*') are not allowed. For more
     *                               information see
     *                               [IAM Overview](https://cloud.google.com/iam/docs/overview#permissions).
     * @param array    $optionalArgs {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Iam\V1\TestIamPermissionsResponse
     *
     * @throws ApiException if the remote call fails
     */
    public function testIamPermissions($resource, $permissions, array $optionalArgs = [])
    {
        $request = new TestIamPermissionsRequest();
        $requestParamHeaders = [];
        $request->setResource($resource);
        $request->setPermissions($permissions);
        $requestParamHeaders['resource'] = $resource;
        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('TestIamPermissions', TestIamPermissionsResponse::class, $optionalArgs, $request)->wait();
    }

    /**
     * Updates the attributes of the TagValue resource.
     *
     * Sample code:
     * ```
     * $tagValuesClient = new TagValuesClient();
     * try {
     *     $tagValue = new TagValue();
     *     $operationResponse = $tagValuesClient->updateTagValue($tagValue);
     *     $operationResponse->pollUntilComplete();
     *     if ($operationResponse->operationSucceeded()) {
     *         $result = $operationResponse->getResult();
     *     // doSomethingWith($result)
     *     } else {
     *         $error = $operationResponse->getError();
     *         // handleError($error)
     *     }
     *     // Alternatively:
     *     // start the operation, keep the operation name, and resume later
     *     $operationResponse = $tagValuesClient->updateTagValue($tagValue);
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $tagValuesClient->resumeOperation($operationName, 'updateTagValue');
     *     while (!$newOperationResponse->isDone()) {
     *         // ... do other work
     *         $newOperationResponse->reload();
     *     }
     *     if ($newOperationResponse->operationSucceeded()) {
     *         $result = $newOperationResponse->getResult();
     *     // doSomethingWith($result)
     *     } else {
     *         $error = $newOperationResponse->getError();
     *         // handleError($error)
     *     }
     * } finally {
     *     $tagValuesClient->close();
     * }
     * ```
     *
     * @param TagValue $tagValue     Required. The new definition of the TagValue. Only fields `description` and
     *                               `etag` fields can be updated by this request. If the `etag` field is
     *                               nonempty, it must match the `etag` field of the existing ControlGroup.
     *                               Otherwise, `ABORTED` will be returned.
     * @param array    $optionalArgs {
     *     Optional.
     *
     *     @type FieldMask $updateMask
     *           Optional. Fields to be updated.
     *     @type bool $validateOnly
     *           Optional. True to perform validations necessary for updating the resource,
     *           but not actually perform the action.
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\ApiCore\OperationResponse
     *
     * @throws ApiException if the remote call fails
     */
    public function updateTagValue($tagValue, array $optionalArgs = [])
    {
        $request = new UpdateTagValueRequest();
        $requestParamHeaders = [];
        $request->setTagValue($tagValue);
        $requestParamHeaders['tag_value.name'] = $tagValue->getName();
        if (isset($optionalArgs['updateMask'])) {
            $request->setUpdateMask($optionalArgs['updateMask']);
        }

        if (isset($optionalArgs['validateOnly'])) {
            $request->setValidateOnly($optionalArgs['validateOnly']);
        }

        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startOperationsCall('UpdateTagValue', $optionalArgs, $request, $this->getOperationsClient())->wait();
    }
}
