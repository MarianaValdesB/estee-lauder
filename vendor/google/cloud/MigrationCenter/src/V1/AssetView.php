<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/migrationcenter/v1/migrationcenter.proto

namespace Google\Cloud\MigrationCenter\V1;

use UnexpectedValueException;

/**
 * Specifies the types of asset views that provide complete or partial details
 * of an asset.
 *
 * Protobuf type <code>google.cloud.migrationcenter.v1.AssetView</code>
 */
class AssetView
{
    /**
     * The asset view is not specified. The API displays the basic view by
     * default.
     *
     * Generated from protobuf enum <code>ASSET_VIEW_UNSPECIFIED = 0;</code>
     */
    const ASSET_VIEW_UNSPECIFIED = 0;
    /**
     * The asset view includes only basic metadata of the asset.
     *
     * Generated from protobuf enum <code>ASSET_VIEW_BASIC = 1;</code>
     */
    const ASSET_VIEW_BASIC = 1;
    /**
     * The asset view includes all the metadata of an asset and performance data.
     *
     * Generated from protobuf enum <code>ASSET_VIEW_FULL = 2;</code>
     */
    const ASSET_VIEW_FULL = 2;

    private static $valueToName = [
        self::ASSET_VIEW_UNSPECIFIED => 'ASSET_VIEW_UNSPECIFIED',
        self::ASSET_VIEW_BASIC => 'ASSET_VIEW_BASIC',
        self::ASSET_VIEW_FULL => 'ASSET_VIEW_FULL',
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
