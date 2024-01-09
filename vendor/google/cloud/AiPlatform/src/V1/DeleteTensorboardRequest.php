<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/tensorboard_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [TensorboardService.DeleteTensorboard][google.cloud.aiplatform.v1.TensorboardService.DeleteTensorboard].
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.DeleteTensorboardRequest</code>
 */
class DeleteTensorboardRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the Tensorboard to be deleted.
     * Format:
     * `projects/{project}/locations/{location}/tensorboards/{tensorboard}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';

    /**
     * @param string $name Required. The name of the Tensorboard to be deleted.
     *                     Format:
     *                     `projects/{project}/locations/{location}/tensorboards/{tensorboard}`
     *                     Please see {@see TensorboardServiceClient::tensorboardName()} for help formatting this field.
     *
     * @return \Google\Cloud\AIPlatform\V1\DeleteTensorboardRequest
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
     *           Required. The name of the Tensorboard to be deleted.
     *           Format:
     *           `projects/{project}/locations/{location}/tensorboards/{tensorboard}`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\TensorboardService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the Tensorboard to be deleted.
     * Format:
     * `projects/{project}/locations/{location}/tensorboards/{tensorboard}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the Tensorboard to be deleted.
     * Format:
     * `projects/{project}/locations/{location}/tensorboards/{tensorboard}`
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

