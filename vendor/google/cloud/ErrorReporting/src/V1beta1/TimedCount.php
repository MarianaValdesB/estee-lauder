<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/clouderrorreporting/v1beta1/error_stats_service.proto

namespace Google\Cloud\ErrorReporting\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The number of errors in a given time period.
 * All numbers are approximate since the error events are sampled
 * before counting them.
 *
 * Generated from protobuf message <code>google.devtools.clouderrorreporting.v1beta1.TimedCount</code>
 */
class TimedCount extends \Google\Protobuf\Internal\Message
{
    /**
     * Approximate number of occurrences in the given time period.
     *
     * Generated from protobuf field <code>int64 count = 1;</code>
     */
    private $count = 0;
    /**
     * Start of the time period to which `count` refers (included).
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 2;</code>
     */
    private $start_time = null;
    /**
     * End of the time period to which `count` refers (excluded).
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 3;</code>
     */
    private $end_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $count
     *           Approximate number of occurrences in the given time period.
     *     @type \Google\Protobuf\Timestamp $start_time
     *           Start of the time period to which `count` refers (included).
     *     @type \Google\Protobuf\Timestamp $end_time
     *           End of the time period to which `count` refers (excluded).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Clouderrorreporting\V1Beta1\ErrorStatsService::initOnce();
        parent::__construct($data);
    }

    /**
     * Approximate number of occurrences in the given time period.
     *
     * Generated from protobuf field <code>int64 count = 1;</code>
     * @return int|string
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Approximate number of occurrences in the given time period.
     *
     * Generated from protobuf field <code>int64 count = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->count = $var;

        return $this;
    }

    /**
     * Start of the time period to which `count` refers (included).
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 2;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getStartTime()
    {
        return $this->start_time;
    }

    public function hasStartTime()
    {
        return isset($this->start_time);
    }

    public function clearStartTime()
    {
        unset($this->start_time);
    }

    /**
     * Start of the time period to which `count` refers (included).
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 2;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setStartTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->start_time = $var;

        return $this;
    }

    /**
     * End of the time period to which `count` refers (excluded).
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 3;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getEndTime()
    {
        return $this->end_time;
    }

    public function hasEndTime()
    {
        return isset($this->end_time);
    }

    public function clearEndTime()
    {
        unset($this->end_time);
    }

    /**
     * End of the time period to which `count` refers (excluded).
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 3;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setEndTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->end_time = $var;

        return $this;
    }

}

