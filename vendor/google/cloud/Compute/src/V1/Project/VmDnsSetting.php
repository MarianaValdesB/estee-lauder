<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\Project;

use UnexpectedValueException;

/**
 * [Output Only] Default internal DNS setting used by VMs running in this project.
 *
 * Protobuf type <code>google.cloud.compute.v1.Project.VmDnsSetting</code>
 */
class VmDnsSetting
{
    /**
     * A value indicating that the enum field is not set.
     *
     * Generated from protobuf enum <code>UNDEFINED_VM_DNS_SETTING = 0;</code>
     */
    const UNDEFINED_VM_DNS_SETTING = 0;
    /**
     * Generated from protobuf enum <code>GLOBAL_DEFAULT = 345419141;</code>
     */
    const GLOBAL_DEFAULT = 345419141;
    /**
     * Generated from protobuf enum <code>UNSPECIFIED_VM_DNS_SETTING = 35691930;</code>
     */
    const UNSPECIFIED_VM_DNS_SETTING = 35691930;
    /**
     * Generated from protobuf enum <code>ZONAL_DEFAULT = 368475782;</code>
     */
    const ZONAL_DEFAULT = 368475782;
    /**
     * Generated from protobuf enum <code>ZONAL_ONLY = 521198951;</code>
     */
    const ZONAL_ONLY = 521198951;

    private static $valueToName = [
        self::UNDEFINED_VM_DNS_SETTING => 'UNDEFINED_VM_DNS_SETTING',
        self::GLOBAL_DEFAULT => 'GLOBAL_DEFAULT',
        self::UNSPECIFIED_VM_DNS_SETTING => 'UNSPECIFIED_VM_DNS_SETTING',
        self::ZONAL_DEFAULT => 'ZONAL_DEFAULT',
        self::ZONAL_ONLY => 'ZONAL_ONLY',
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

