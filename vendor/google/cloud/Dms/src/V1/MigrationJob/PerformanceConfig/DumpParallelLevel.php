<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/clouddms/v1/clouddms_resources.proto

namespace Google\Cloud\CloudDms\V1\MigrationJob\PerformanceConfig;

use UnexpectedValueException;

/**
 * Describes the parallelism level during initial dump.
 *
 * Protobuf type <code>google.cloud.clouddms.v1.MigrationJob.PerformanceConfig.DumpParallelLevel</code>
 */
class DumpParallelLevel
{
    /**
     * Unknown dump parallel level. Will be defaulted to OPTIMAL.
     *
     * Generated from protobuf enum <code>DUMP_PARALLEL_LEVEL_UNSPECIFIED = 0;</code>
     */
    const DUMP_PARALLEL_LEVEL_UNSPECIFIED = 0;
    /**
     * Minimal parallel level.
     *
     * Generated from protobuf enum <code>MIN = 1;</code>
     */
    const MIN = 1;
    /**
     * Optimal parallel level.
     *
     * Generated from protobuf enum <code>OPTIMAL = 2;</code>
     */
    const OPTIMAL = 2;
    /**
     * Maximum parallel level.
     *
     * Generated from protobuf enum <code>MAX = 3;</code>
     */
    const MAX = 3;

    private static $valueToName = [
        self::DUMP_PARALLEL_LEVEL_UNSPECIFIED => 'DUMP_PARALLEL_LEVEL_UNSPECIFIED',
        self::MIN => 'MIN',
        self::OPTIMAL => 'OPTIMAL',
        self::MAX => 'MAX',
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


