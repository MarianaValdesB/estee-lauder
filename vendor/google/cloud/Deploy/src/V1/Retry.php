<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/deploy/v1/cloud_deploy.proto

namespace Google\Cloud\Deploy\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Retries the failed job.
 *
 * Generated from protobuf message <code>google.cloud.deploy.v1.Retry</code>
 */
class Retry extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Total number of retries. Retry is skipped if set to 0; The
     * minimum value is 1, and the maximum value is 10.
     *
     * Generated from protobuf field <code>int64 attempts = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $attempts = 0;
    /**
     * Optional. How long to wait for the first retry. Default is 0, and the
     * maximum value is 14d.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration wait = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $wait = null;
    /**
     * Optional. The pattern of how wait time will be increased. Default is
     * linear. Backoff mode will be ignored if `wait` is 0.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.BackoffMode backoff_mode = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $backoff_mode = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $attempts
     *           Required. Total number of retries. Retry is skipped if set to 0; The
     *           minimum value is 1, and the maximum value is 10.
     *     @type \Google\Protobuf\Duration $wait
     *           Optional. How long to wait for the first retry. Default is 0, and the
     *           maximum value is 14d.
     *     @type int $backoff_mode
     *           Optional. The pattern of how wait time will be increased. Default is
     *           linear. Backoff mode will be ignored if `wait` is 0.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Deploy\V1\CloudDeploy::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Total number of retries. Retry is skipped if set to 0; The
     * minimum value is 1, and the maximum value is 10.
     *
     * Generated from protobuf field <code>int64 attempts = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int|string
     */
    public function getAttempts()
    {
        return $this->attempts;
    }

    /**
     * Required. Total number of retries. Retry is skipped if set to 0; The
     * minimum value is 1, and the maximum value is 10.
     *
     * Generated from protobuf field <code>int64 attempts = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int|string $var
     * @return $this
     */
    public function setAttempts($var)
    {
        GPBUtil::checkInt64($var);
        $this->attempts = $var;

        return $this;
    }

    /**
     * Optional. How long to wait for the first retry. Default is 0, and the
     * maximum value is 14d.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration wait = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getWait()
    {
        return $this->wait;
    }

    public function hasWait()
    {
        return isset($this->wait);
    }

    public function clearWait()
    {
        unset($this->wait);
    }

    /**
     * Optional. How long to wait for the first retry. Default is 0, and the
     * maximum value is 14d.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration wait = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setWait($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->wait = $var;

        return $this;
    }

    /**
     * Optional. The pattern of how wait time will be increased. Default is
     * linear. Backoff mode will be ignored if `wait` is 0.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.BackoffMode backoff_mode = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getBackoffMode()
    {
        return $this->backoff_mode;
    }

    /**
     * Optional. The pattern of how wait time will be increased. Default is
     * linear. Backoff mode will be ignored if `wait` is 0.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.BackoffMode backoff_mode = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setBackoffMode($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Deploy\V1\BackoffMode::class);
        $this->backoff_mode = $var;

        return $this;
    }

}

