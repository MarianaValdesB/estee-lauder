<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/clouddms/v1/conversionworkspace_resources.proto

namespace Google\Cloud\CloudDms\V1\BackgroundJobLogEntry;

use UnexpectedValueException;

/**
 * Final state after a job completes.
 *
 * Protobuf type <code>google.cloud.clouddms.v1.BackgroundJobLogEntry.JobCompletionState</code>
 */
class JobCompletionState
{
    /**
     * The status is not specified. This state is used when job is not yet
     * finished.
     *
     * Generated from protobuf enum <code>JOB_COMPLETION_STATE_UNSPECIFIED = 0;</code>
     */
    const JOB_COMPLETION_STATE_UNSPECIFIED = 0;
    /**
     * Success.
     *
     * Generated from protobuf enum <code>SUCCEEDED = 1;</code>
     */
    const SUCCEEDED = 1;
    /**
     * Error.
     *
     * Generated from protobuf enum <code>FAILED = 2;</code>
     */
    const FAILED = 2;

    private static $valueToName = [
        self::JOB_COMPLETION_STATE_UNSPECIFIED => 'JOB_COMPLETION_STATE_UNSPECIFIED',
        self::SUCCEEDED => 'SUCCEEDED',
        self::FAILED => 'FAILED',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

