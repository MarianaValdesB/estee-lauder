<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/recommendationengine/v1beta1/prediction_apikey_registry_service.proto

namespace Google\Cloud\RecommendationEngine\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for `DeletePredictionApiKeyRegistration` method.
 *
 * Generated from protobuf message <code>google.cloud.recommendationengine.v1beta1.DeletePredictionApiKeyRegistrationRequest</code>
 */
class DeletePredictionApiKeyRegistrationRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The API key to unregister including full resource path.
     * `projects/&#42;&#47;locations/global/catalogs/default_catalog/eventStores/default_event_store/predictionApiKeyRegistrations/<YOUR_API_KEY>`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';

    /**
     * @param string $name Required. The API key to unregister including full resource path.
     *                     `projects/&#42;/locations/global/catalogs/default_catalog/eventStores/default_event_store/predictionApiKeyRegistrations/<YOUR_API_KEY>`
     *                     Please see {@see PredictionApiKeyRegistryClient::predictionApiKeyRegistrationName()} for help formatting this field.
     *
     * @return \Google\Cloud\RecommendationEngine\V1beta1\DeletePredictionApiKeyRegistrationRequest
     *
     * @experimental
     */
    public static function build(string $name): self
    {
        return (new self())
            ->setName($name);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The API key to unregister including full resource path.
     *           `projects/&#42;&#47;locations/global/catalogs/default_catalog/eventStores/default_event_store/predictionApiKeyRegistrations/<YOUR_API_KEY>`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Recommendationengine\V1Beta1\PredictionApikeyRegistryService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The API key to unregister including full resource path.
     * `projects/&#42;&#47;locations/global/catalogs/default_catalog/eventStores/default_event_store/predictionApiKeyRegistrations/<YOUR_API_KEY>`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The API key to unregister including full resource path.
     * `projects/&#42;&#47;locations/global/catalogs/default_catalog/eventStores/default_event_store/predictionApiKeyRegistrations/<YOUR_API_KEY>`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}
