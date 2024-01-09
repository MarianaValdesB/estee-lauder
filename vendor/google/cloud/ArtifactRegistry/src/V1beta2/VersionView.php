<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/artifactregistry/v1beta2/version.proto

namespace Google\Cloud\ArtifactRegistry\V1beta2;

use UnexpectedValueException;

/**
 * The view, which determines what version information is returned in a
 * response.
 *
 * Protobuf type <code>google.devtools.artifactregistry.v1beta2.VersionView</code>
 */
class VersionView
{
    /**
     * The default / unset value.
     * The API will default to the BASIC view.
     *
     * Generated from protobuf enum <code>VERSION_VIEW_UNSPECIFIED = 0;</code>
     */
    const VERSION_VIEW_UNSPECIFIED = 0;
    /**
     * Includes basic information about the version, but not any related tags.
     *
     * Generated from protobuf enum <code>BASIC = 1;</code>
     */
    const BASIC = 1;
    /**
     * Include everything.
     *
     * Generated from protobuf enum <code>FULL = 2;</code>
     */
    const FULL = 2;

    private static $valueToName = [
        self::VERSION_VIEW_UNSPECIFIED => 'VERSION_VIEW_UNSPECIFIED',
        self::BASIC => 'BASIC',
        self::FULL => 'FULL',
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
