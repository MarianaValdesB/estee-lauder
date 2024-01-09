<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.BulkInsertOperationStatus</code>
 */
class BulkInsertOperationStatus extends \Google\Protobuf\Internal\Message
{
    /**
     * [Output Only] Count of VMs successfully created so far.
     *
     * Generated from protobuf field <code>optional int32 created_vm_count = 396924158;</code>
     */
    private $created_vm_count = null;
    /**
     * [Output Only] Count of VMs that got deleted during rollback.
     *
     * Generated from protobuf field <code>optional int32 deleted_vm_count = 271756013;</code>
     */
    private $deleted_vm_count = null;
    /**
     * [Output Only] Count of VMs that started creating but encountered an error.
     *
     * Generated from protobuf field <code>optional int32 failed_to_create_vm_count = 58384104;</code>
     */
    private $failed_to_create_vm_count = null;
    /**
     * [Output Only] Creation status of BulkInsert operation - information if the flow is rolling forward or rolling back.
     * Check the Status enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string status = 181260274;</code>
     */
    private $status = null;
    /**
     * [Output Only] Count of VMs originally planned to be created.
     *
     * Generated from protobuf field <code>optional int32 target_vm_count = 532975733;</code>
     */
    private $target_vm_count = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $created_vm_count
     *           [Output Only] Count of VMs successfully created so far.
     *     @type int $deleted_vm_count
     *           [Output Only] Count of VMs that got deleted during rollback.
     *     @type int $failed_to_create_vm_count
     *           [Output Only] Count of VMs that started creating but encountered an error.
     *     @type string $status
     *           [Output Only] Creation status of BulkInsert operation - information if the flow is rolling forward or rolling back.
     *           Check the Status enum for the list of possible values.
     *     @type int $target_vm_count
     *           [Output Only] Count of VMs originally planned to be created.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * [Output Only] Count of VMs successfully created so far.
     *
     * Generated from protobuf field <code>optional int32 created_vm_count = 396924158;</code>
     * @return int
     */
    public function getCreatedVmCount()
    {
        return isset($this->created_vm_count) ? $this->created_vm_count : 0;
    }

    public function hasCreatedVmCount()
    {
        return isset($this->created_vm_count);
    }

    public function clearCreatedVmCount()
    {
        unset($this->created_vm_count);
    }

    /**
     * [Output Only] Count of VMs successfully created so far.
     *
     * Generated from protobuf field <code>optional int32 created_vm_count = 396924158;</code>
     * @param int $var
     * @return $this
     */
    public function setCreatedVmCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->created_vm_count = $var;

        return $this;
    }

    /**
     * [Output Only] Count of VMs that got deleted during rollback.
     *
     * Generated from protobuf field <code>optional int32 deleted_vm_count = 271756013;</code>
     * @return int
     */
    public function getDeletedVmCount()
    {
        return isset($this->deleted_vm_count) ? $this->deleted_vm_count : 0;
    }

    public function hasDeletedVmCount()
    {
        return isset($this->deleted_vm_count);
    }

    public function clearDeletedVmCount()
    {
        unset($this->deleted_vm_count);
    }

    /**
     * [Output Only] Count of VMs that got deleted during rollback.
     *
     * Generated from protobuf field <code>optional int32 deleted_vm_count = 271756013;</code>
     * @param int $var
     * @return $this
     */
    public function setDeletedVmCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->deleted_vm_count = $var;

        return $this;
    }

    /**
     * [Output Only] Count of VMs that started creating but encountered an error.
     *
     * Generated from protobuf field <code>optional int32 failed_to_create_vm_count = 58384104;</code>
     * @return int
     */
    public function getFailedToCreateVmCount()
    {
        return isset($this->failed_to_create_vm_count) ? $this->failed_to_create_vm_count : 0;
    }

    public function hasFailedToCreateVmCount()
    {
        return isset($this->failed_to_create_vm_count);
    }

    public function clearFailedToCreateVmCount()
    {
        unset($this->failed_to_create_vm_count);
    }

    /**
     * [Output Only] Count of VMs that started creating but encountered an error.
     *
     * Generated from protobuf field <code>optional int32 failed_to_create_vm_count = 58384104;</code>
     * @param int $var
     * @return $this
     */
    public function setFailedToCreateVmCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->failed_to_create_vm_count = $var;

        return $this;
    }

    /**
     * [Output Only] Creation status of BulkInsert operation - information if the flow is rolling forward or rolling back.
     * Check the Status enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string status = 181260274;</code>
     * @return string
     */
    public function getStatus()
    {
        return isset($this->status) ? $this->status : '';
    }

    public function hasStatus()
    {
        return isset($this->status);
    }

    public function clearStatus()
    {
        unset($this->status);
    }

    /**
     * [Output Only] Creation status of BulkInsert operation - information if the flow is rolling forward or rolling back.
     * Check the Status enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string status = 181260274;</code>
     * @param string $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkString($var, True);
        $this->status = $var;

        return $this;
    }

    /**
     * [Output Only] Count of VMs originally planned to be created.
     *
     * Generated from protobuf field <code>optional int32 target_vm_count = 532975733;</code>
     * @return int
     */
    public function getTargetVmCount()
    {
        return isset($this->target_vm_count) ? $this->target_vm_count : 0;
    }

    public function hasTargetVmCount()
    {
        return isset($this->target_vm_count);
    }

    public function clearTargetVmCount()
    {
        unset($this->target_vm_count);
    }

    /**
     * [Output Only] Count of VMs originally planned to be created.
     *
     * Generated from protobuf field <code>optional int32 target_vm_count = 532975733;</code>
     * @param int $var
     * @return $this
     */
    public function setTargetVmCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->target_vm_count = $var;

        return $this;
    }

}

