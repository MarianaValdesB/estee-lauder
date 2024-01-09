<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/contactcenterinsights/v1/contact_center_insights.proto

namespace Google\Cloud\ContactCenterInsights\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request to list phrase matchers.
 *
 * Generated from protobuf message <code>google.cloud.contactcenterinsights.v1.ListPhraseMatchersRequest</code>
 */
class ListPhraseMatchersRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The parent resource of the phrase matcher.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * The maximum number of phrase matchers to return in the response. If this
     * value is zero, the service will select a default size. A call might return
     * fewer objects than requested. A non-empty `next_page_token` in the response
     * indicates that more data is available.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     */
    private $page_size = 0;
    /**
     * The value returned by the last `ListPhraseMatchersResponse`. This value
     * indicates that this is a continuation of a prior `ListPhraseMatchers` call
     * and that the system should return the next page of data.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     */
    private $page_token = '';
    /**
     * A filter to reduce results to a specific subset. Useful for querying
     * phrase matchers with specific properties.
     *
     * Generated from protobuf field <code>string filter = 4;</code>
     */
    private $filter = '';

    /**
     * @param string $parent Required. The parent resource of the phrase matcher. Please see
     *                       {@see ContactCenterInsightsClient::locationName()} for help formatting this field.
     *
     * @return \Google\Cloud\ContactCenterInsights\V1\ListPhraseMatchersRequest
     *
     * @experimental
     */
    public static function build(string $parent): self
    {
        return (new self())
            ->setParent($parent);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The parent resource of the phrase matcher.
     *     @type int $page_size
     *           The maximum number of phrase matchers to return in the response. If this
     *           value is zero, the service will select a default size. A call might return
     *           fewer objects than requested. A non-empty `next_page_token` in the response
     *           indicates that more data is available.
     *     @type string $page_token
     *           The value returned by the last `ListPhraseMatchersResponse`. This value
     *           indicates that this is a continuation of a prior `ListPhraseMatchers` call
     *           and that the system should return the next page of data.
     *     @type string $filter
     *           A filter to reduce results to a specific subset. Useful for querying
     *           phrase matchers with specific properties.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Contactcenterinsights\V1\ContactCenterInsights::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The parent resource of the phrase matcher.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The parent resource of the phrase matcher.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * The maximum number of phrase matchers to return in the response. If this
     * value is zero, the service will select a default size. A call might return
     * fewer objects than requested. A non-empty `next_page_token` in the response
     * indicates that more data is available.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * The maximum number of phrase matchers to return in the response. If this
     * value is zero, the service will select a default size. A call might return
     * fewer objects than requested. A non-empty `next_page_token` in the response
     * indicates that more data is available.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * The value returned by the last `ListPhraseMatchersResponse`. This value
     * indicates that this is a continuation of a prior `ListPhraseMatchers` call
     * and that the system should return the next page of data.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * The value returned by the last `ListPhraseMatchersResponse`. This value
     * indicates that this is a continuation of a prior `ListPhraseMatchers` call
     * and that the system should return the next page of data.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

    /**
     * A filter to reduce results to a specific subset. Useful for querying
     * phrase matchers with specific properties.
     *
     * Generated from protobuf field <code>string filter = 4;</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * A filter to reduce results to a specific subset. Useful for querying
     * phrase matchers with specific properties.
     *
     * Generated from protobuf field <code>string filter = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setFilter($var)
    {
        GPBUtil::checkString($var, True);
        $this->filter = $var;

        return $this;
    }

}

