<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/cx/v3/experiment.proto

namespace Google\Cloud\Dialogflow\Cx\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * State of the auto-rollout process.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.cx.v3.RolloutState</code>
 */
class RolloutState extends \Google\Protobuf\Internal\Message
{
    /**
     * Display name of the current auto rollout step.
     *
     * Generated from protobuf field <code>string step = 1;</code>
     */
    protected $step = '';
    /**
     * Index of the current step in the auto rollout steps list.
     *
     * Generated from protobuf field <code>int32 step_index = 3;</code>
     */
    protected $step_index = 0;
    /**
     * Start time of the current step.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 2;</code>
     */
    protected $start_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $step
     *           Display name of the current auto rollout step.
     *     @type int $step_index
     *           Index of the current step in the auto rollout steps list.
     *     @type \Google\Protobuf\Timestamp $start_time
     *           Start time of the current step.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\Cx\V3\Experiment::initOnce();
        parent::__construct($data);
    }

    /**
     * Display name of the current auto rollout step.
     *
     * Generated from protobuf field <code>string step = 1;</code>
     * @return string
     */
    public function getStep()
    {
        return $this->step;
    }

    /**
     * Display name of the current auto rollout step.
     *
     * Generated from protobuf field <code>string step = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setStep($var)
    {
        GPBUtil::checkString($var, True);
        $this->step = $var;

        return $this;
    }

    /**
     * Index of the current step in the auto rollout steps list.
     *
     * Generated from protobuf field <code>int32 step_index = 3;</code>
     * @return int
     */
    public function getStepIndex()
    {
        return $this->step_index;
    }

    /**
     * Index of the current step in the auto rollout steps list.
     *
     * Generated from protobuf field <code>int32 step_index = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setStepIndex($var)
    {
        GPBUtil::checkInt32($var);
        $this->step_index = $var;

        return $this;
    }

    /**
     * Start time of the current step.
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
     * Start time of the current step.
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

}

