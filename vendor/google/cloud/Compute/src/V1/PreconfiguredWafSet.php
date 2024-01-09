<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.PreconfiguredWafSet</code>
 */
class PreconfiguredWafSet extends \Google\Protobuf\Internal\Message
{
    /**
     * List of entities that are currently supported for WAF rules.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.WafExpressionSet expression_sets = 474011032;</code>
     */
    private $expression_sets;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\Compute\V1\WafExpressionSet>|\Google\Protobuf\Internal\RepeatedField $expression_sets
     *           List of entities that are currently supported for WAF rules.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * List of entities that are currently supported for WAF rules.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.WafExpressionSet expression_sets = 474011032;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getExpressionSets()
    {
        return $this->expression_sets;
    }

    /**
     * List of entities that are currently supported for WAF rules.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.WafExpressionSet expression_sets = 474011032;</code>
     * @param array<\Google\Cloud\Compute\V1\WafExpressionSet>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setExpressionSets($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Compute\V1\WafExpressionSet::class);
        $this->expression_sets = $arr;

        return $this;
    }

}
