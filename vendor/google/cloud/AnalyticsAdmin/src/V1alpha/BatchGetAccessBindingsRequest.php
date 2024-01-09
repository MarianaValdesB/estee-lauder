<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/admin/v1alpha/analytics_admin.proto

namespace Google\Analytics\Admin\V1alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for BatchGetAccessBindings RPC.
 *
 * Generated from protobuf message <code>google.analytics.admin.v1alpha.BatchGetAccessBindingsRequest</code>
 */
class BatchGetAccessBindingsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The account or property that owns the access bindings. The parent
     * of all provided values for the 'names' field must match this field.
     * Formats:
     * - accounts/{account}
     * - properties/{property}
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Required. The names of the access bindings to retrieve.
     * A maximum of 1000 access bindings can be retrieved in a batch.
     * Formats:
     * - accounts/{account}/accessBindings/{accessBinding}
     * - properties/{property}/accessBindings/{accessBinding}
     *
     * Generated from protobuf field <code>repeated string names = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $names;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The account or property that owns the access bindings. The parent
     *           of all provided values for the 'names' field must match this field.
     *           Formats:
     *           - accounts/{account}
     *           - properties/{property}
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $names
     *           Required. The names of the access bindings to retrieve.
     *           A maximum of 1000 access bindings can be retrieved in a batch.
     *           Formats:
     *           - accounts/{account}/accessBindings/{accessBinding}
     *           - properties/{property}/accessBindings/{accessBinding}
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Analytics\Admin\V1Alpha\AnalyticsAdmin::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The account or property that owns the access bindings. The parent
     * of all provided values for the 'names' field must match this field.
     * Formats:
     * - accounts/{account}
     * - properties/{property}
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The account or property that owns the access bindings. The parent
     * of all provided values for the 'names' field must match this field.
     * Formats:
     * - accounts/{account}
     * - properties/{property}
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
     * Required. The names of the access bindings to retrieve.
     * A maximum of 1000 access bindings can be retrieved in a batch.
     * Formats:
     * - accounts/{account}/accessBindings/{accessBinding}
     * - properties/{property}/accessBindings/{accessBinding}
     *
     * Generated from protobuf field <code>repeated string names = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNames()
    {
        return $this->names;
    }

    /**
     * Required. The names of the access bindings to retrieve.
     * A maximum of 1000 access bindings can be retrieved in a batch.
     * Formats:
     * - accounts/{account}/accessBindings/{accessBinding}
     * - properties/{property}/accessBindings/{accessBinding}
     *
     * Generated from protobuf field <code>repeated string names = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNames($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->names = $arr;

        return $this;
    }

}

