<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\Instance;

use UnexpectedValueException;

/**
 * The private IPv6 google access type for the VM. If not specified, use INHERIT_FROM_SUBNETWORK as default.
 *
 * Protobuf type <code>google.cloud.compute.v1.Instance.PrivateIpv6GoogleAccess</code>
 */
class PrivateIpv6GoogleAccess
{
    /**
     * A value indicating that the enum field is not set.
     *
     * Generated from protobuf enum <code>UNDEFINED_PRIVATE_IPV6_GOOGLE_ACCESS = 0;</code>
     */
    const UNDEFINED_PRIVATE_IPV6_GOOGLE_ACCESS = 0;
    /**
     * Bidirectional private IPv6 access to/from Google services. If specified, the subnetwork who is attached to the instance's default network interface will be assigned an internal IPv6 prefix if it doesn't have before.
     *
     * Generated from protobuf enum <code>ENABLE_BIDIRECTIONAL_ACCESS_TO_GOOGLE = 427975994;</code>
     */
    const ENABLE_BIDIRECTIONAL_ACCESS_TO_GOOGLE = 427975994;
    /**
     * Outbound private IPv6 access from VMs in this subnet to Google services. If specified, the subnetwork who is attached to the instance's default network interface will be assigned an internal IPv6 prefix if it doesn't have before.
     *
     * Generated from protobuf enum <code>ENABLE_OUTBOUND_VM_ACCESS_TO_GOOGLE = 288210263;</code>
     */
    const ENABLE_OUTBOUND_VM_ACCESS_TO_GOOGLE = 288210263;
    /**
     * Each network interface inherits PrivateIpv6GoogleAccess from its subnetwork.
     *
     * Generated from protobuf enum <code>INHERIT_FROM_SUBNETWORK = 530256959;</code>
     */
    const INHERIT_FROM_SUBNETWORK = 530256959;

    private static $valueToName = [
        self::UNDEFINED_PRIVATE_IPV6_GOOGLE_ACCESS => 'UNDEFINED_PRIVATE_IPV6_GOOGLE_ACCESS',
        self::ENABLE_BIDIRECTIONAL_ACCESS_TO_GOOGLE => 'ENABLE_BIDIRECTIONAL_ACCESS_TO_GOOGLE',
        self::ENABLE_OUTBOUND_VM_ACCESS_TO_GOOGLE => 'ENABLE_OUTBOUND_VM_ACCESS_TO_GOOGLE',
        self::INHERIT_FROM_SUBNETWORK => 'INHERIT_FROM_SUBNETWORK',
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

