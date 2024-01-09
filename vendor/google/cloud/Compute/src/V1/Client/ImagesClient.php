<?php
/*
 * Copyright 2023 Google LLC
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
 * https://github.com/googleapis/googleapis/blob/master/google/cloud/compute/v1/compute.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Cloud\Compute\V1\Client;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\OperationResponse;
use Google\ApiCore\PagedListResponse;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\Compute\V1\DeleteImageRequest;
use Google\Cloud\Compute\V1\DeprecateImageRequest;
use Google\Cloud\Compute\V1\GetFromFamilyImageRequest;
use Google\Cloud\Compute\V1\GetIamPolicyImageRequest;
use Google\Cloud\Compute\V1\GetImageRequest;
use Google\Cloud\Compute\V1\GlobalOperationsClient;
use Google\Cloud\Compute\V1\Image;
use Google\Cloud\Compute\V1\InsertImageRequest;
use Google\Cloud\Compute\V1\ListImagesRequest;
use Google\Cloud\Compute\V1\PatchImageRequest;
use Google\Cloud\Compute\V1\Policy;
use Google\Cloud\Compute\V1\SetIamPolicyImageRequest;
use Google\Cloud\Compute\V1\SetLabelsImageRequest;
use Google\Cloud\Compute\V1\TestIamPermissionsImageRequest;
use Google\Cloud\Compute\V1\TestPermissionsResponse;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * Service Description: The Images API.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods.
 *
 * This class is currently experimental and may be subject to changes. See {@see
 * \Google\Cloud\Compute\V1\ImagesClient} for the stable implementation
 *
 * @experimental
 *
 * @method PromiseInterface deleteAsync(DeleteImageRequest $request, array $optionalArgs = [])
 * @method PromiseInterface deprecateAsync(DeprecateImageRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getAsync(GetImageRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getFromFamilyAsync(GetFromFamilyImageRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getIamPolicyAsync(GetIamPolicyImageRequest $request, array $optionalArgs = [])
 * @method PromiseInterface insertAsync(InsertImageRequest $request, array $optionalArgs = [])
 * @method PromiseInterface listAsync(ListImagesRequest $request, array $optionalArgs = [])
 * @method PromiseInterface patchAsync(PatchImageRequest $request, array $optionalArgs = [])
 * @method PromiseInterface setIamPolicyAsync(SetIamPolicyImageRequest $request, array $optionalArgs = [])
 * @method PromiseInterface setLabelsAsync(SetLabelsImageRequest $request, array $optionalArgs = [])
 * @method PromiseInterface testIamPermissionsAsync(TestIamPermissionsImageRequest $request, array $optionalArgs = [])
 */
final class ImagesClient
{
    use GapicClientTrait;

    /** The name of the service. */
    private const SERVICE_NAME = 'google.cloud.compute.v1.Images';

    /** The default address of the service. */
    private const SERVICE_ADDRESS = 'compute.googleapis.com';

    /** The default port of the service. */
    private const DEFAULT_SERVICE_PORT = 443;

    /** The name of the code generator, to be included in the agent header. */
    private const CODEGEN_NAME = 'gapic';

    /** The default scopes required by the service. */
    public static $serviceScopes = [
        'https://www.googleapis.com/auth/compute',
        'https://www.googleapis.com/auth/cloud-platform',
    ];

    private $operationsClient;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' => self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__ . '/../resources/images_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../resources/images_descriptor_config.php',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
                'useJwtAccessWithScope' => false,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../resources/images_rest_client_config.php',
                ],
            ],
            'operationsClientClass' => GlobalOperationsClient::class,
        ];
    }

    /** Implements GapicClientTrait::defaultTransport. */
    private static function defaultTransport()
    {
        return 'rest';
    }

    /** Implements GapicClientTrait::getSupportedTransports. */
    private static function getSupportedTransports()
    {
        return [
            'rest',
        ];
    }

    /**
     * Return an GlobalOperationsClient object with the same endpoint as $this.
     *
     * @return GlobalOperationsClient
     */
    public function getOperationsClient()
    {
        return $this->operationsClient;
    }

    /** Return the default longrunning operation descriptor config. */
    private function getDefaultOperationDescriptor()
    {
        return [
            'additionalArgumentMethods' => [
                'getProject',
            ],
            'getOperationMethod' => 'get',
            'cancelOperationMethod' => null,
            'deleteOperationMethod' => 'delete',
            'operationErrorCodeMethod' => 'getHttpErrorStatusCode',
            'operationErrorMessageMethod' => 'getHttpErrorMessage',
            'operationNameMethod' => 'getName',
            'operationStatusMethod' => 'getStatus',
            'operationStatusDoneValue' => \Google\Cloud\Compute\V1\Operation\Status::DONE,
        ];
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
        $options = isset($this->descriptors[$methodName]['longRunning']) ? $this->descriptors[$methodName]['longRunning'] : $this->getDefaultOperationDescriptor();
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
     *           as "<uri>:<port>". Default 'compute.googleapis.com:443'.
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
     *           The transport used for executing network requests. At the moment, supports only
     *           `rest`. *Advanced usage*: Additionally, it is possible to pass in an already
     *           instantiated {@see \Google\ApiCore\Transport\TransportInterface} object. Note
     *           that when this object is provided, any settings in $transportConfig, and any
     *           $apiEndpoint setting, will be ignored.
     *     @type array $transportConfig
     *           Configuration options that will be used to construct the transport. Options for
     *           each supported transport type should be passed in a key for that transport. For
     *           example:
     *           $transportConfig = [
     *               'rest' => [...],
     *           ];
     *           See the {@see \Google\ApiCore\Transport\RestTransport::build()} method for the
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

    /** Handles execution of the async variants for each documented method. */
    public function __call($method, $args)
    {
        if (substr($method, -5) !== 'Async') {
            trigger_error('Call to undefined method ' . __CLASS__ . "::$method()", E_USER_ERROR);
        }

        array_unshift($args, substr($method, 0, -5));
        return call_user_func_array([$this, 'startAsyncCall'], $args);
    }

    /**
     * Deletes the specified image.
     *
     * The async variant is {@see ImagesClient::deleteAsync()} .
     *
     * @param DeleteImageRequest $request     A request to house fields associated with the call.
     * @param array              $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function delete(DeleteImageRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('Delete', $request, $callOptions)->wait();
    }

    /**
     * Sets the deprecation status of an image. If an empty request body is given, clears the deprecation status instead.
     *
     * The async variant is {@see ImagesClient::deprecateAsync()} .
     *
     * @param DeprecateImageRequest $request     A request to house fields associated with the call.
     * @param array                 $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function deprecate(DeprecateImageRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('Deprecate', $request, $callOptions)->wait();
    }

    /**
     * Returns the specified image.
     *
     * The async variant is {@see ImagesClient::getAsync()} .
     *
     * @param GetImageRequest $request     A request to house fields associated with the call.
     * @param array           $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Image
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function get(GetImageRequest $request, array $callOptions = []): Image
    {
        return $this->startApiCall('Get', $request, $callOptions)->wait();
    }

    /**
     * Returns the latest image that is part of an image family and is not deprecated. For more information on image families, see Public image families documentation.
     *
     * The async variant is {@see ImagesClient::getFromFamilyAsync()} .
     *
     * @param GetFromFamilyImageRequest $request     A request to house fields associated with the call.
     * @param array                     $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Image
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getFromFamily(GetFromFamilyImageRequest $request, array $callOptions = []): Image
    {
        return $this->startApiCall('GetFromFamily', $request, $callOptions)->wait();
    }

    /**
     * Gets the access control policy for a resource. May be empty if no such policy or resource exists.
     *
     * The async variant is {@see ImagesClient::getIamPolicyAsync()} .
     *
     * @param GetIamPolicyImageRequest $request     A request to house fields associated with the call.
     * @param array                    $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Policy
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getIamPolicy(GetIamPolicyImageRequest $request, array $callOptions = []): Policy
    {
        return $this->startApiCall('GetIamPolicy', $request, $callOptions)->wait();
    }

    /**
     * Creates an image in the specified project using the data included in the request.
     *
     * The async variant is {@see ImagesClient::insertAsync()} .
     *
     * @param InsertImageRequest $request     A request to house fields associated with the call.
     * @param array              $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function insert(InsertImageRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('Insert', $request, $callOptions)->wait();
    }

    /**
     * Retrieves the list of custom images available to the specified project. Custom images are images you create that belong to your project. This method does not get any images that belong to other projects, including publicly-available images, like Debian 8. If you want to get a list of publicly-available images, use this method to make a request to the respective image project, such as debian-cloud or windows-cloud.
     *
     * The async variant is {@see ImagesClient::listAsync()} .
     *
     * @param ListImagesRequest $request     A request to house fields associated with the call.
     * @param array             $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return PagedListResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function list(ListImagesRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('List', $request, $callOptions);
    }

    /**
     * Patches the specified image with the data included in the request. Only the following fields can be modified: family, description, deprecation status.
     *
     * The async variant is {@see ImagesClient::patchAsync()} .
     *
     * @param PatchImageRequest $request     A request to house fields associated with the call.
     * @param array             $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function patch(PatchImageRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('Patch', $request, $callOptions)->wait();
    }

    /**
     * Sets the access control policy on the specified resource. Replaces any existing policy.
     *
     * The async variant is {@see ImagesClient::setIamPolicyAsync()} .
     *
     * @param SetIamPolicyImageRequest $request     A request to house fields associated with the call.
     * @param array                    $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Policy
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function setIamPolicy(SetIamPolicyImageRequest $request, array $callOptions = []): Policy
    {
        return $this->startApiCall('SetIamPolicy', $request, $callOptions)->wait();
    }

    /**
     * Sets the labels on an image. To learn more about labels, read the Labeling Resources documentation.
     *
     * The async variant is {@see ImagesClient::setLabelsAsync()} .
     *
     * @param SetLabelsImageRequest $request     A request to house fields associated with the call.
     * @param array                 $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function setLabels(SetLabelsImageRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('SetLabels', $request, $callOptions)->wait();
    }

    /**
     * Returns permissions that a caller has on the specified resource.
     *
     * The async variant is {@see ImagesClient::testIamPermissionsAsync()} .
     *
     * @param TestIamPermissionsImageRequest $request     A request to house fields associated with the call.
     * @param array                          $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return TestPermissionsResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function testIamPermissions(TestIamPermissionsImageRequest $request, array $callOptions = []): TestPermissionsResponse
    {
        return $this->startApiCall('TestIamPermissions', $request, $callOptions)->wait();
    }
}
