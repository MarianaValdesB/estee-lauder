<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\SavedAttachedDisk;

use UnexpectedValueException;

/**
 * Specifies the type of the attached disk, either SCRATCH or PERSISTENT.
 *
 * Protobuf type <code>google.cloud.compute.v1.SavedAttachedDisk.Type</code>
 */
class Type
{
    /**
     * A value indicating that the enum field is not set.
     *
     * Generated from protobuf enum <code>UNDEFINED_TYPE = 0;</code>
     */
    const UNDEFINED_TYPE = 0;
    /**
     * Generated from protobuf enum <code>PERSISTENT = 460683927;</code>
     */
    const PERSISTENT = 460683927;
    /**
     * Generated from protobuf enum <code>SCRATCH = 496778970;</code>
     */
    const SCRATCH = 496778970;

    private static $valueToName = [
        self::UNDEFINED_TYPE => 'UNDEFINED_TYPE',
        self::PERSISTENT => 'PERSISTENT',
        self::SCRATCH => 'SCRATCH',
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


