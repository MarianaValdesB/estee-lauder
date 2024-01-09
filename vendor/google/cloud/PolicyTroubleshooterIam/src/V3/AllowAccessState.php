<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/policytroubleshooter/iam/v3/troubleshooter.proto

namespace Google\Cloud\PolicyTroubleshooter\Iam\V3;

use UnexpectedValueException;

/**
 * Whether IAM allow policies gives the principal the permission.
 *
 * Protobuf type <code>google.cloud.policytroubleshooter.iam.v3.AllowAccessState</code>
 */
class AllowAccessState
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>ALLOW_ACCESS_STATE_UNSPECIFIED = 0;</code>
     */
    const ALLOW_ACCESS_STATE_UNSPECIFIED = 0;
    /**
     * The allow policy gives the principal the permission.
     *
     * Generated from protobuf enum <code>ALLOW_ACCESS_STATE_GRANTED = 1;</code>
     */
    const ALLOW_ACCESS_STATE_GRANTED = 1;
    /**
     * The allow policy doesn't give the principal the permission.
     *
     * Generated from protobuf enum <code>ALLOW_ACCESS_STATE_NOT_GRANTED = 2;</code>
     */
    const ALLOW_ACCESS_STATE_NOT_GRANTED = 2;
    /**
     * The allow policy gives the principal the permission if a condition
     * expression evaluate to `true`. However, the sender of the request didn't
     * provide enough context for Policy Troubleshooter to evaluate the condition
     * expression.
     *
     * Generated from protobuf enum <code>ALLOW_ACCESS_STATE_UNKNOWN_CONDITIONAL = 3;</code>
     */
    const ALLOW_ACCESS_STATE_UNKNOWN_CONDITIONAL = 3;
    /**
     * The sender of the request doesn't have access to all of the allow policies
     * that Policy Troubleshooter needs to evaluate the principal's access.
     *
     * Generated from protobuf enum <code>ALLOW_ACCESS_STATE_UNKNOWN_INFO = 4;</code>
     */
    const ALLOW_ACCESS_STATE_UNKNOWN_INFO = 4;

    private static $valueToName = [
        self::ALLOW_ACCESS_STATE_UNSPECIFIED => 'ALLOW_ACCESS_STATE_UNSPECIFIED',
        self::ALLOW_ACCESS_STATE_GRANTED => 'ALLOW_ACCESS_STATE_GRANTED',
        self::ALLOW_ACCESS_STATE_NOT_GRANTED => 'ALLOW_ACCESS_STATE_NOT_GRANTED',
        self::ALLOW_ACCESS_STATE_UNKNOWN_CONDITIONAL => 'ALLOW_ACCESS_STATE_UNKNOWN_CONDITIONAL',
        self::ALLOW_ACCESS_STATE_UNKNOWN_INFO => 'ALLOW_ACCESS_STATE_UNKNOWN_INFO',
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

