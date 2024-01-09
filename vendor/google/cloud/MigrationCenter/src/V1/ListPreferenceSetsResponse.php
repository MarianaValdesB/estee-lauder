<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/migrationcenter/v1/migrationcenter.proto

namespace Google\Cloud\MigrationCenter\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for listing preference sets.
 *
 * Generated from protobuf message <code>google.cloud.migrationcenter.v1.ListPreferenceSetsResponse</code>
 */
class ListPreferenceSetsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The list of PreferenceSets
     *
     * Generated from protobuf field <code>repeated .google.cloud.migrationcenter.v1.PreferenceSet preference_sets = 1;</code>
     */
    private $preference_sets;
    /**
     * A token identifying a page of results the server should return.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    protected $next_page_token = '';
    /**
     * Locations that could not be reached.
     *
     * Generated from protobuf field <code>repeated string unreachable = 3;</code>
     */
    private $unreachable;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\MigrationCenter\V1\PreferenceSet>|\Google\Protobuf\Internal\RepeatedField $preference_sets
     *           The list of PreferenceSets
     *     @type string $next_page_token
     *           A token identifying a page of results the server should return.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $unreachable
     *           Locations that could not be reached.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Migrationcenter\V1\Migrationcenter::initOnce();
        parent::__construct($data);
    }

    /**
     * The list of PreferenceSets
     *
     * Generated from protobuf field <code>repeated .google.cloud.migrationcenter.v1.PreferenceSet preference_sets = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPreferenceSets()
    {
        return $this->preference_sets;
    }

    /**
     * The list of PreferenceSets
     *
     * Generated from protobuf field <code>repeated .google.cloud.migrationcenter.v1.PreferenceSet preference_sets = 1;</code>
     * @param array<\Google\Cloud\MigrationCenter\V1\PreferenceSet>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPreferenceSets($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\MigrationCenter\V1\PreferenceSet::class);
        $this->preference_sets = $arr;

        return $this;
    }

    /**
     * A token identifying a page of results the server should return.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * A token identifying a page of results the server should return.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

    /**
     * Locations that could not be reached.
     *
     * Generated from protobuf field <code>repeated string unreachable = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUnreachable()
    {
        return $this->unreachable;
    }

    /**
     * Locations that could not be reached.
     *
     * Generated from protobuf field <code>repeated string unreachable = 3;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUnreachable($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->unreachable = $arr;

        return $this;
    }

}
