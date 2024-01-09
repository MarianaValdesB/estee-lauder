<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/admin/v1alpha/resources.proto

namespace Google\Analytics\Admin\V1alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Event setting conditions to match an event.
 *
 * Generated from protobuf message <code>google.analytics.admin.v1alpha.EventMapping</code>
 */
class EventMapping extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Name of the GA4 event. It must always be set.
     * The max allowed display name length is 40 UTF-16 code units.
     *
     * Generated from protobuf field <code>string event_name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $event_name = '';
    /**
     * At least one of the following four min/max values must be set. The
     * values set will be ANDed together to qualify an event.
     * The minimum number of times the event occurred. If not set, minimum event
     * count won't be checked.
     *
     * Generated from protobuf field <code>optional int64 min_event_count = 2;</code>
     */
    private $min_event_count = null;
    /**
     * The maximum number of times the event occurred. If not set, maximum event
     * count won't be checked.
     *
     * Generated from protobuf field <code>optional int64 max_event_count = 3;</code>
     */
    private $max_event_count = null;
    /**
     * The minimum revenue generated due to the event. Revenue currency will be
     * defined at the property level. If not set, minimum event value won't be
     * checked.
     *
     * Generated from protobuf field <code>optional double min_event_value = 4;</code>
     */
    private $min_event_value = null;
    /**
     * The maximum revenue generated due to the event. Revenue currency will be
     * defined at the property level. If not set, maximum event value won't be
     * checked.
     *
     * Generated from protobuf field <code>optional double max_event_value = 5;</code>
     */
    private $max_event_value = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $event_name
     *           Required. Name of the GA4 event. It must always be set.
     *           The max allowed display name length is 40 UTF-16 code units.
     *     @type int|string $min_event_count
     *           At least one of the following four min/max values must be set. The
     *           values set will be ANDed together to qualify an event.
     *           The minimum number of times the event occurred. If not set, minimum event
     *           count won't be checked.
     *     @type int|string $max_event_count
     *           The maximum number of times the event occurred. If not set, maximum event
     *           count won't be checked.
     *     @type float $min_event_value
     *           The minimum revenue generated due to the event. Revenue currency will be
     *           defined at the property level. If not set, minimum event value won't be
     *           checked.
     *     @type float $max_event_value
     *           The maximum revenue generated due to the event. Revenue currency will be
     *           defined at the property level. If not set, maximum event value won't be
     *           checked.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Analytics\Admin\V1Alpha\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Name of the GA4 event. It must always be set.
     * The max allowed display name length is 40 UTF-16 code units.
     *
     * Generated from protobuf field <code>string event_name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getEventName()
    {
        return $this->event_name;
    }

    /**
     * Required. Name of the GA4 event. It must always be set.
     * The max allowed display name length is 40 UTF-16 code units.
     *
     * Generated from protobuf field <code>string event_name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setEventName($var)
    {
        GPBUtil::checkString($var, True);
        $this->event_name = $var;

        return $this;
    }

    /**
     * At least one of the following four min/max values must be set. The
     * values set will be ANDed together to qualify an event.
     * The minimum number of times the event occurred. If not set, minimum event
     * count won't be checked.
     *
     * Generated from protobuf field <code>optional int64 min_event_count = 2;</code>
     * @return int|string
     */
    public function getMinEventCount()
    {
        return isset($this->min_event_count) ? $this->min_event_count : 0;
    }

    public function hasMinEventCount()
    {
        return isset($this->min_event_count);
    }

    public function clearMinEventCount()
    {
        unset($this->min_event_count);
    }

    /**
     * At least one of the following four min/max values must be set. The
     * values set will be ANDed together to qualify an event.
     * The minimum number of times the event occurred. If not set, minimum event
     * count won't be checked.
     *
     * Generated from protobuf field <code>optional int64 min_event_count = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setMinEventCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->min_event_count = $var;

        return $this;
    }

    /**
     * The maximum number of times the event occurred. If not set, maximum event
     * count won't be checked.
     *
     * Generated from protobuf field <code>optional int64 max_event_count = 3;</code>
     * @return int|string
     */
    public function getMaxEventCount()
    {
        return isset($this->max_event_count) ? $this->max_event_count : 0;
    }

    public function hasMaxEventCount()
    {
        return isset($this->max_event_count);
    }

    public function clearMaxEventCount()
    {
        unset($this->max_event_count);
    }

    /**
     * The maximum number of times the event occurred. If not set, maximum event
     * count won't be checked.
     *
     * Generated from protobuf field <code>optional int64 max_event_count = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setMaxEventCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->max_event_count = $var;

        return $this;
    }

    /**
     * The minimum revenue generated due to the event. Revenue currency will be
     * defined at the property level. If not set, minimum event value won't be
     * checked.
     *
     * Generated from protobuf field <code>optional double min_event_value = 4;</code>
     * @return float
     */
    public function getMinEventValue()
    {
        return isset($this->min_event_value) ? $this->min_event_value : 0.0;
    }

    public function hasMinEventValue()
    {
        return isset($this->min_event_value);
    }

    public function clearMinEventValue()
    {
        unset($this->min_event_value);
    }

    /**
     * The minimum revenue generated due to the event. Revenue currency will be
     * defined at the property level. If not set, minimum event value won't be
     * checked.
     *
     * Generated from protobuf field <code>optional double min_event_value = 4;</code>
     * @param float $var
     * @return $this
     */
    public function setMinEventValue($var)
    {
        GPBUtil::checkDouble($var);
        $this->min_event_value = $var;

        return $this;
    }

    /**
     * The maximum revenue generated due to the event. Revenue currency will be
     * defined at the property level. If not set, maximum event value won't be
     * checked.
     *
     * Generated from protobuf field <code>optional double max_event_value = 5;</code>
     * @return float
     */
    public function getMaxEventValue()
    {
        return isset($this->max_event_value) ? $this->max_event_value : 0.0;
    }

    public function hasMaxEventValue()
    {
        return isset($this->max_event_value);
    }

    public function clearMaxEventValue()
    {
        unset($this->max_event_value);
    }

    /**
     * The maximum revenue generated due to the event. Revenue currency will be
     * defined at the property level. If not set, maximum event value won't be
     * checked.
     *
     * Generated from protobuf field <code>optional double max_event_value = 5;</code>
     * @param float $var
     * @return $this
     */
    public function setMaxEventValue($var)
    {
        GPBUtil::checkDouble($var);
        $this->max_event_value = $var;

        return $this;
    }

}

