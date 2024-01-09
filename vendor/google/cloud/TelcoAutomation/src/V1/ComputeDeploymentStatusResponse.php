<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/telcoautomation/v1/telcoautomation.proto

namespace Google\Cloud\TelcoAutomation\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response object for `ComputeDeploymentStatus`.
 *
 * Generated from protobuf message <code>google.cloud.telcoautomation.v1.ComputeDeploymentStatusResponse</code>
 */
class ComputeDeploymentStatusResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of the deployment.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * Output only. Aggregated status of a deployment.
     *
     * Generated from protobuf field <code>.google.cloud.telcoautomation.v1.Status aggregated_status = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $aggregated_status = 0;
    /**
     * Output only. Resource level status details in deployments.
     *
     * Generated from protobuf field <code>repeated .google.cloud.telcoautomation.v1.ResourceStatus resource_statuses = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $resource_statuses;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The name of the deployment.
     *     @type int $aggregated_status
     *           Output only. Aggregated status of a deployment.
     *     @type array<\Google\Cloud\TelcoAutomation\V1\ResourceStatus>|\Google\Protobuf\Internal\RepeatedField $resource_statuses
     *           Output only. Resource level status details in deployments.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Telcoautomation\V1\Telcoautomation::initOnce();
        parent::__construct($data);
    }

    /**
     * The name of the deployment.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The name of the deployment.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Output only. Aggregated status of a deployment.
     *
     * Generated from protobuf field <code>.google.cloud.telcoautomation.v1.Status aggregated_status = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getAggregatedStatus()
    {
        return $this->aggregated_status;
    }

    /**
     * Output only. Aggregated status of a deployment.
     *
     * Generated from protobuf field <code>.google.cloud.telcoautomation.v1.Status aggregated_status = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setAggregatedStatus($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\TelcoAutomation\V1\Status::class);
        $this->aggregated_status = $var;

        return $this;
    }

    /**
     * Output only. Resource level status details in deployments.
     *
     * Generated from protobuf field <code>repeated .google.cloud.telcoautomation.v1.ResourceStatus resource_statuses = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getResourceStatuses()
    {
        return $this->resource_statuses;
    }

    /**
     * Output only. Resource level status details in deployments.
     *
     * Generated from protobuf field <code>repeated .google.cloud.telcoautomation.v1.ResourceStatus resource_statuses = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param array<\Google\Cloud\TelcoAutomation\V1\ResourceStatus>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setResourceStatuses($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\TelcoAutomation\V1\ResourceStatus::class);
        $this->resource_statuses = $arr;

        return $this;
    }

}

