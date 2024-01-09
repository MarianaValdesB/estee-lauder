<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/featurestore_monitoring.proto

namespace Google\Cloud\AIPlatform\V1\FeaturestoreMonitoringConfig;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Configuration of the Featurestore's Snapshot Analysis Based Monitoring.
 * This type of analysis generates statistics for each Feature based on a
 * snapshot of the latest feature value of each entities every
 * monitoring_interval.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.FeaturestoreMonitoringConfig.SnapshotAnalysis</code>
 */
class SnapshotAnalysis extends \Google\Protobuf\Internal\Message
{
    /**
     * The monitoring schedule for snapshot analysis.
     * For EntityType-level config:
     *   unset / disabled = true indicates disabled by
     *   default for Features under it; otherwise by default enable snapshot
     *   analysis monitoring with monitoring_interval for Features under it.
     * Feature-level config:
     *   disabled = true indicates disabled regardless of the EntityType-level
     *   config; unset monitoring_interval indicates going with EntityType-level
     *   config; otherwise run snapshot analysis monitoring with
     *   monitoring_interval regardless of the EntityType-level config.
     * Explicitly Disable the snapshot analysis based monitoring.
     *
     * Generated from protobuf field <code>bool disabled = 1;</code>
     */
    private $disabled = false;
    /**
     * Configuration of the snapshot analysis based monitoring pipeline
     * running interval. The value indicates number of days.
     *
     * Generated from protobuf field <code>int32 monitoring_interval_days = 3;</code>
     */
    private $monitoring_interval_days = 0;
    /**
     * Customized export features time window for snapshot analysis. Unit is one
     * day. Default value is 3 weeks. Minimum value is 1 day. Maximum value is
     * 4000 days.
     *
     * Generated from protobuf field <code>int32 staleness_days = 4;</code>
     */
    private $staleness_days = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $disabled
     *           The monitoring schedule for snapshot analysis.
     *           For EntityType-level config:
     *             unset / disabled = true indicates disabled by
     *             default for Features under it; otherwise by default enable snapshot
     *             analysis monitoring with monitoring_interval for Features under it.
     *           Feature-level config:
     *             disabled = true indicates disabled regardless of the EntityType-level
     *             config; unset monitoring_interval indicates going with EntityType-level
     *             config; otherwise run snapshot analysis monitoring with
     *             monitoring_interval regardless of the EntityType-level config.
     *           Explicitly Disable the snapshot analysis based monitoring.
     *     @type int $monitoring_interval_days
     *           Configuration of the snapshot analysis based monitoring pipeline
     *           running interval. The value indicates number of days.
     *     @type int $staleness_days
     *           Customized export features time window for snapshot analysis. Unit is one
     *           day. Default value is 3 weeks. Minimum value is 1 day. Maximum value is
     *           4000 days.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\FeaturestoreMonitoring::initOnce();
        parent::__construct($data);
    }

    /**
     * The monitoring schedule for snapshot analysis.
     * For EntityType-level config:
     *   unset / disabled = true indicates disabled by
     *   default for Features under it; otherwise by default enable snapshot
     *   analysis monitoring with monitoring_interval for Features under it.
     * Feature-level config:
     *   disabled = true indicates disabled regardless of the EntityType-level
     *   config; unset monitoring_interval indicates going with EntityType-level
     *   config; otherwise run snapshot analysis monitoring with
     *   monitoring_interval regardless of the EntityType-level config.
     * Explicitly Disable the snapshot analysis based monitoring.
     *
     * Generated from protobuf field <code>bool disabled = 1;</code>
     * @return bool
     */
    public function getDisabled()
    {
        return $this->disabled;
    }

    /**
     * The monitoring schedule for snapshot analysis.
     * For EntityType-level config:
     *   unset / disabled = true indicates disabled by
     *   default for Features under it; otherwise by default enable snapshot
     *   analysis monitoring with monitoring_interval for Features under it.
     * Feature-level config:
     *   disabled = true indicates disabled regardless of the EntityType-level
     *   config; unset monitoring_interval indicates going with EntityType-level
     *   config; otherwise run snapshot analysis monitoring with
     *   monitoring_interval regardless of the EntityType-level config.
     * Explicitly Disable the snapshot analysis based monitoring.
     *
     * Generated from protobuf field <code>bool disabled = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setDisabled($var)
    {
        GPBUtil::checkBool($var);
        $this->disabled = $var;

        return $this;
    }

    /**
     * Configuration of the snapshot analysis based monitoring pipeline
     * running interval. The value indicates number of days.
     *
     * Generated from protobuf field <code>int32 monitoring_interval_days = 3;</code>
     * @return int
     */
    public function getMonitoringIntervalDays()
    {
        return $this->monitoring_interval_days;
    }

    /**
     * Configuration of the snapshot analysis based monitoring pipeline
     * running interval. The value indicates number of days.
     *
     * Generated from protobuf field <code>int32 monitoring_interval_days = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setMonitoringIntervalDays($var)
    {
        GPBUtil::checkInt32($var);
        $this->monitoring_interval_days = $var;

        return $this;
    }

    /**
     * Customized export features time window for snapshot analysis. Unit is one
     * day. Default value is 3 weeks. Minimum value is 1 day. Maximum value is
     * 4000 days.
     *
     * Generated from protobuf field <code>int32 staleness_days = 4;</code>
     * @return int
     */
    public function getStalenessDays()
    {
        return $this->staleness_days;
    }

    /**
     * Customized export features time window for snapshot analysis. Unit is one
     * day. Default value is 3 weeks. Minimum value is 1 day. Maximum value is
     * 4000 days.
     *
     * Generated from protobuf field <code>int32 staleness_days = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setStalenessDays($var)
    {
        GPBUtil::checkInt32($var);
        $this->staleness_days = $var;

        return $this;
    }

}


