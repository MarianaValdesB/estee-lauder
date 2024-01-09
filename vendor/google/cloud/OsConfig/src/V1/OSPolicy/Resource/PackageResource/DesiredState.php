<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/osconfig/v1/os_policy.proto

namespace Google\Cloud\OsConfig\V1\OSPolicy\Resource\PackageResource;

use UnexpectedValueException;

/**
 * The desired state that the OS Config agent maintains on the VM.
 *
 * Protobuf type <code>google.cloud.osconfig.v1.OSPolicy.Resource.PackageResource.DesiredState</code>
 */
class DesiredState
{
    /**
     * Unspecified is invalid.
     *
     * Generated from protobuf enum <code>DESIRED_STATE_UNSPECIFIED = 0;</code>
     */
    const DESIRED_STATE_UNSPECIFIED = 0;
    /**
     * Ensure that the package is installed.
     *
     * Generated from protobuf enum <code>INSTALLED = 1;</code>
     */
    const INSTALLED = 1;
    /**
     * The agent ensures that the package is not installed and
     * uninstalls it if detected.
     *
     * Generated from protobuf enum <code>REMOVED = 2;</code>
     */
    const REMOVED = 2;

    private static $valueToName = [
        self::DESIRED_STATE_UNSPECIFIED => 'DESIRED_STATE_UNSPECIFIED',
        self::INSTALLED => 'INSTALLED',
        self::REMOVED => 'REMOVED',
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


