<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/binaryauthorization/v1beta1/continuous_validation_logging.proto

namespace Google\Cloud\BinaryAuthorization\V1beta1\ContinuousValidationEvent;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An event describing a user-actionable configuration issue that prevents CV
 * from auditing.
 *
 * Generated from protobuf message <code>google.cloud.binaryauthorization.v1beta1.ContinuousValidationEvent.ConfigErrorEvent</code>
 */
class ConfigErrorEvent extends \Google\Protobuf\Internal\Message
{
    /**
     * A description of the issue.
     *
     * Generated from protobuf field <code>string description = 1;</code>
     */
    private $description = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $description
     *           A description of the issue.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Binaryauthorization\V1Beta1\ContinuousValidationLogging::initOnce();
        parent::__construct($data);
    }

    /**
     * A description of the issue.
     *
     * Generated from protobuf field <code>string description = 1;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * A description of the issue.
     *
     * Generated from protobuf field <code>string description = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ConfigErrorEvent::class, \Google\Cloud\BinaryAuthorization\V1beta1\ContinuousValidationEvent_ConfigErrorEvent::class);

