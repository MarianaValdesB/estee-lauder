<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/migrationcenter/v1/migrationcenter.proto

namespace Google\Cloud\MigrationCenter\V1\ReportSummary;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A set of findings that applies to assets destined for Sole-Tenant nodes.
 *
 * Generated from protobuf message <code>google.cloud.migrationcenter.v1.ReportSummary.SoleTenantFinding</code>
 */
class SoleTenantFinding extends \Google\Protobuf\Internal\Message
{
    /**
     * Set of regions in which the assets are allocated
     *
     * Generated from protobuf field <code>repeated string allocated_regions = 1;</code>
     */
    private $allocated_regions;
    /**
     * Count of assets which are allocated
     *
     * Generated from protobuf field <code>int64 allocated_asset_count = 2;</code>
     */
    protected $allocated_asset_count = 0;
    /**
     * Set of per-nodetype allocation records
     *
     * Generated from protobuf field <code>repeated .google.cloud.migrationcenter.v1.ReportSummary.SoleTenantNodeAllocation node_allocations = 3;</code>
     */
    private $node_allocations;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $allocated_regions
     *           Set of regions in which the assets are allocated
     *     @type int|string $allocated_asset_count
     *           Count of assets which are allocated
     *     @type array<\Google\Cloud\MigrationCenter\V1\ReportSummary\SoleTenantNodeAllocation>|\Google\Protobuf\Internal\RepeatedField $node_allocations
     *           Set of per-nodetype allocation records
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Migrationcenter\V1\Migrationcenter::initOnce();
        parent::__construct($data);
    }

    /**
     * Set of regions in which the assets are allocated
     *
     * Generated from protobuf field <code>repeated string allocated_regions = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAllocatedRegions()
    {
        return $this->allocated_regions;
    }

    /**
     * Set of regions in which the assets are allocated
     *
     * Generated from protobuf field <code>repeated string allocated_regions = 1;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAllocatedRegions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->allocated_regions = $arr;

        return $this;
    }

    /**
     * Count of assets which are allocated
     *
     * Generated from protobuf field <code>int64 allocated_asset_count = 2;</code>
     * @return int|string
     */
    public function getAllocatedAssetCount()
    {
        return $this->allocated_asset_count;
    }

    /**
     * Count of assets which are allocated
     *
     * Generated from protobuf field <code>int64 allocated_asset_count = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setAllocatedAssetCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->allocated_asset_count = $var;

        return $this;
    }

    /**
     * Set of per-nodetype allocation records
     *
     * Generated from protobuf field <code>repeated .google.cloud.migrationcenter.v1.ReportSummary.SoleTenantNodeAllocation node_allocations = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNodeAllocations()
    {
        return $this->node_allocations;
    }

    /**
     * Set of per-nodetype allocation records
     *
     * Generated from protobuf field <code>repeated .google.cloud.migrationcenter.v1.ReportSummary.SoleTenantNodeAllocation node_allocations = 3;</code>
     * @param array<\Google\Cloud\MigrationCenter\V1\ReportSummary\SoleTenantNodeAllocation>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNodeAllocations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\MigrationCenter\V1\ReportSummary\SoleTenantNodeAllocation::class);
        $this->node_allocations = $arr;

        return $this;
    }

}


