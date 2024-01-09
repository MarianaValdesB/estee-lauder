<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/telcoautomation/v1/telcoautomation.proto

namespace Google\Cloud\TelcoAutomation\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Message for response to listing EdgeSlms.
 *
 * Generated from protobuf message <code>google.cloud.telcoautomation.v1.ListEdgeSlmsResponse</code>
 */
class ListEdgeSlmsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The list of EdgeSlm
     *
     * Generated from protobuf field <code>repeated .google.cloud.telcoautomation.v1.EdgeSlm edge_slms = 1;</code>
     */
    private $edge_slms;
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
     *     @type array<\Google\Cloud\TelcoAutomation\V1\EdgeSlm>|\Google\Protobuf\Internal\RepeatedField $edge_slms
     *           The list of EdgeSlm
     *     @type string $next_page_token
     *           A token identifying a page of results the server should return.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $unreachable
     *           Locations that could not be reached.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Telcoautomation\V1\Telcoautomation::initOnce();
        parent::__construct($data);
    }

    /**
     * The list of EdgeSlm
     *
     * Generated from protobuf field <code>repeated .google.cloud.telcoautomation.v1.EdgeSlm edge_slms = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEdgeSlms()
    {
        return $this->edge_slms;
    }

    /**
     * The list of EdgeSlm
     *
     * Generated from protobuf field <code>repeated .google.cloud.telcoautomation.v1.EdgeSlm edge_slms = 1;</code>
     * @param array<\Google\Cloud\TelcoAutomation\V1\EdgeSlm>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEdgeSlms($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\TelcoAutomation\V1\EdgeSlm::class);
        $this->edge_slms = $arr;

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
