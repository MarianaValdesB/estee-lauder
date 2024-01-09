<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/shopping/css/v1/css_product_inputs.proto

namespace Google\Shopping\Css\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for the DeleteCssProductInput method.
 *
 * Generated from protobuf message <code>google.shopping.css.v1.DeleteCssProductInputRequest</code>
 */
class DeleteCssProductInputRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the CSS product input resource to delete.
     * Format: accounts/{account}/cssProductInputs/{css_product_input}
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';
    /**
     * The Content API Supplemental Feed ID.
     * The field must not be set if the action applies to a primary feed.
     * If the field is set, then product action applies to a supplemental feed
     * instead of primary Content API feed.
     *
     * Generated from protobuf field <code>optional int64 supplemental_feed_id = 2;</code>
     */
    protected $supplemental_feed_id = null;

    /**
     * @param string $name Required. The name of the CSS product input resource to delete.
     *                     Format: accounts/{account}/cssProductInputs/{css_product_input}
     *                     Please see {@see CssProductInputsServiceClient::cssProductInputName()} for help formatting this field.
     *
     * @return \Google\Shopping\Css\V1\DeleteCssProductInputRequest
     *
     * @experimental
     */
    public static function build(string $name): self
    {
        return (new self())
            ->setName($name);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The name of the CSS product input resource to delete.
     *           Format: accounts/{account}/cssProductInputs/{css_product_input}
     *     @type int|string $supplemental_feed_id
     *           The Content API Supplemental Feed ID.
     *           The field must not be set if the action applies to a primary feed.
     *           If the field is set, then product action applies to a supplemental feed
     *           instead of primary Content API feed.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Shopping\Css\V1\CssProductInputs::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the CSS product input resource to delete.
     * Format: accounts/{account}/cssProductInputs/{css_product_input}
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the CSS product input resource to delete.
     * Format: accounts/{account}/cssProductInputs/{css_product_input}
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * The Content API Supplemental Feed ID.
     * The field must not be set if the action applies to a primary feed.
     * If the field is set, then product action applies to a supplemental feed
     * instead of primary Content API feed.
     *
     * Generated from protobuf field <code>optional int64 supplemental_feed_id = 2;</code>
     * @return int|string
     */
    public function getSupplementalFeedId()
    {
        return isset($this->supplemental_feed_id) ? $this->supplemental_feed_id : 0;
    }

    public function hasSupplementalFeedId()
    {
        return isset($this->supplemental_feed_id);
    }

    public function clearSupplementalFeedId()
    {
        unset($this->supplemental_feed_id);
    }

    /**
     * The Content API Supplemental Feed ID.
     * The field must not be set if the action applies to a primary feed.
     * If the field is set, then product action applies to a supplemental feed
     * instead of primary Content API feed.
     *
     * Generated from protobuf field <code>optional int64 supplemental_feed_id = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setSupplementalFeedId($var)
    {
        GPBUtil::checkInt64($var);
        $this->supplemental_feed_id = $var;

        return $this;
    }

}
