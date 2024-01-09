<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/deploy/v1/cloud_deploy.proto

namespace Google\Cloud\Deploy\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * DeployParameters contains deploy parameters information.
 *
 * Generated from protobuf message <code>google.cloud.deploy.v1.DeployParameters</code>
 */
class DeployParameters extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Values are deploy parameters in key-value pairs.
     *
     * Generated from protobuf field <code>map<string, string> values = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $values;
    /**
     * Optional. Deploy parameters are applied to targets with match labels.
     * If unspecified, deploy parameters are applied to all targets (including
     * child targets of a multi-target).
     *
     * Generated from protobuf field <code>map<string, string> match_target_labels = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $match_target_labels;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array|\Google\Protobuf\Internal\MapField $values
     *           Required. Values are deploy parameters in key-value pairs.
     *     @type array|\Google\Protobuf\Internal\MapField $match_target_labels
     *           Optional. Deploy parameters are applied to targets with match labels.
     *           If unspecified, deploy parameters are applied to all targets (including
     *           child targets of a multi-target).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Deploy\V1\CloudDeploy::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Values are deploy parameters in key-value pairs.
     *
     * Generated from protobuf field <code>map<string, string> values = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getValues()
    {
        return $this->values;
    }

    /**
     * Required. Values are deploy parameters in key-value pairs.
     *
     * Generated from protobuf field <code>map<string, string> values = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setValues($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->values = $arr;

        return $this;
    }

    /**
     * Optional. Deploy parameters are applied to targets with match labels.
     * If unspecified, deploy parameters are applied to all targets (including
     * child targets of a multi-target).
     *
     * Generated from protobuf field <code>map<string, string> match_target_labels = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getMatchTargetLabels()
    {
        return $this->match_target_labels;
    }

    /**
     * Optional. Deploy parameters are applied to targets with match labels.
     * If unspecified, deploy parameters are applied to all targets (including
     * child targets of a multi-target).
     *
     * Generated from protobuf field <code>map<string, string> match_target_labels = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setMatchTargetLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->match_target_labels = $arr;

        return $this;
    }

}

