<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/alloydb/v1alpha/resources.proto

namespace Google\Cloud\AlloyDb\V1alpha\Backup;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A backup's position in a quantity-based retention queue, of backups with
 * the same source cluster and type, with length, retention, specified by the
 * backup's retention policy.
 * Once the position is greater than the retention, the backup is eligible to
 * be garbage collected.
 * Example: 5 backups from the same source cluster and type with a
 * quantity-based retention of 3 and denoted by backup_id (position,
 * retention).
 * Safe: backup_5 (1, 3), backup_4, (2, 3), backup_3 (3, 3).
 * Awaiting garbage collection: backup_2 (4, 3), backup_1 (5, 3)
 *
 * Generated from protobuf message <code>google.cloud.alloydb.v1alpha.Backup.QuantityBasedExpiry</code>
 */
class QuantityBasedExpiry extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The backup's position among its backups with the same source
     * cluster and type, by descending chronological order create time(i.e.
     * newest first).
     *
     * Generated from protobuf field <code>int32 retention_count = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $retention_count = 0;
    /**
     * Output only. The length of the quantity-based queue, specified by the
     * backup's retention policy.
     *
     * Generated from protobuf field <code>int32 total_retention_count = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $total_retention_count = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $retention_count
     *           Output only. The backup's position among its backups with the same source
     *           cluster and type, by descending chronological order create time(i.e.
     *           newest first).
     *     @type int $total_retention_count
     *           Output only. The length of the quantity-based queue, specified by the
     *           backup's retention policy.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Alloydb\V1Alpha\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The backup's position among its backups with the same source
     * cluster and type, by descending chronological order create time(i.e.
     * newest first).
     *
     * Generated from protobuf field <code>int32 retention_count = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getRetentionCount()
    {
        return $this->retention_count;
    }

    /**
     * Output only. The backup's position among its backups with the same source
     * cluster and type, by descending chronological order create time(i.e.
     * newest first).
     *
     * Generated from protobuf field <code>int32 retention_count = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setRetentionCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->retention_count = $var;

        return $this;
    }

    /**
     * Output only. The length of the quantity-based queue, specified by the
     * backup's retention policy.
     *
     * Generated from protobuf field <code>int32 total_retention_count = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getTotalRetentionCount()
    {
        return $this->total_retention_count;
    }

    /**
     * Output only. The length of the quantity-based queue, specified by the
     * backup's retention policy.
     *
     * Generated from protobuf field <code>int32 total_retention_count = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setTotalRetentionCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->total_retention_count = $var;

        return $this;
    }

}

