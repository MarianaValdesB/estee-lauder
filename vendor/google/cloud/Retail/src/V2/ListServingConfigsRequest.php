<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/retail/v2/serving_config_service.proto

namespace Google\Cloud\Retail\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for ListServingConfigs method.
 *
 * Generated from protobuf message <code>google.cloud.retail.v2.ListServingConfigsRequest</code>
 */
class ListServingConfigsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The catalog resource name. Format:
     * `projects/{project_number}/locations/{location_id}/catalogs/{catalog_id}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Optional. Maximum number of results to return. If unspecified, defaults
     * to 100. If a value greater than 100 is provided, at most 100 results are
     * returned.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $page_size = 0;
    /**
     * Optional. A page token, received from a previous `ListServingConfigs` call.
     * Provide this to retrieve the subsequent page.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $page_token = '';

    /**
     * @param string $parent Required. The catalog resource name. Format:
     *                       `projects/{project_number}/locations/{location_id}/catalogs/{catalog_id}`
     *                       Please see {@see ServingConfigServiceClient::catalogName()} for help formatting this field.
     *
     * @return \Google\Cloud\Retail\V2\ListServingConfigsRequest
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
     *           Required. The catalog resource name. Format:
     *           `projects/{project_number}/locations/{location_id}/catalogs/{catalog_id}`
     *     @type int $page_size
     *           Optional. Maximum number of results to return. If unspecified, defaults
     *           to 100. If a value greater than 100 is provided, at most 100 results are
     *           returned.
     *     @type string $page_token
     *           Optional. A page token, received from a previous `ListServingConfigs` call.
     *           Provide this to retrieve the subsequent page.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Retail\V2\ServingConfigService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The catalog resource name. Format:
     * `projects/{project_number}/locations/{location_id}/catalogs/{catalog_id}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The catalog resource name. Format:
     * `projects/{project_number}/locations/{location_id}/catalogs/{catalog_id}`
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
     * Optional. Maximum number of results to return. If unspecified, defaults
     * to 100. If a value greater than 100 is provided, at most 100 results are
     * returned.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Optional. Maximum number of results to return. If unspecified, defaults
     * to 100. If a value greater than 100 is provided, at most 100 results are
     * returned.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
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
     * Optional. A page token, received from a previous `ListServingConfigs` call.
     * Provide this to retrieve the subsequent page.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Optional. A page token, received from a previous `ListServingConfigs` call.
     * Provide this to retrieve the subsequent page.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

}

