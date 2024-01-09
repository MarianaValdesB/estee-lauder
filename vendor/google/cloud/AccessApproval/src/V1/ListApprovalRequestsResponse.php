<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/accessapproval/v1/accessapproval.proto

namespace Google\Cloud\AccessApproval\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response to listing of ApprovalRequest objects.
 *
 * Generated from protobuf message <code>google.cloud.accessapproval.v1.ListApprovalRequestsResponse</code>
 */
class ListApprovalRequestsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Approval request details.
     *
     * Generated from protobuf field <code>repeated .google.cloud.accessapproval.v1.ApprovalRequest approval_requests = 1;</code>
     */
    private $approval_requests;
    /**
     * Token to retrieve the next page of results, or empty if there are no more.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    private $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\AccessApproval\V1\ApprovalRequest>|\Google\Protobuf\Internal\RepeatedField $approval_requests
     *           Approval request details.
     *     @type string $next_page_token
     *           Token to retrieve the next page of results, or empty if there are no more.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Accessapproval\V1\Accessapproval::initOnce();
        parent::__construct($data);
    }

    /**
     * Approval request details.
     *
     * Generated from protobuf field <code>repeated .google.cloud.accessapproval.v1.ApprovalRequest approval_requests = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getApprovalRequests()
    {
        return $this->approval_requests;
    }

    /**
     * Approval request details.
     *
     * Generated from protobuf field <code>repeated .google.cloud.accessapproval.v1.ApprovalRequest approval_requests = 1;</code>
     * @param array<\Google\Cloud\AccessApproval\V1\ApprovalRequest>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setApprovalRequests($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\AccessApproval\V1\ApprovalRequest::class);
        $this->approval_requests = $arr;

        return $this;
    }

    /**
     * Token to retrieve the next page of results, or empty if there are no more.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * Token to retrieve the next page of results, or empty if there are no more.
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

}
