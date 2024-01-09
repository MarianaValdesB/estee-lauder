<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/cx/v3/response_message.proto

namespace Google\Cloud\Dialogflow\Cx\V3\ResponseMessage;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Indicates that the conversation should be handed off to a live agent.
 * Dialogflow only uses this to determine which conversations were handed off
 * to a human agent for measurement purposes. What else to do with this signal
 * is up to you and your handoff procedures.
 * You may set this, for example:
 * * In the
 * [entry_fulfillment][google.cloud.dialogflow.cx.v3.Page.entry_fulfillment]
 * of a [Page][google.cloud.dialogflow.cx.v3.Page] if
 *   entering the page indicates something went extremely wrong in the
 *   conversation.
 * * In a webhook response when you determine that the customer issue can only
 *   be handled by a human.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.cx.v3.ResponseMessage.LiveAgentHandoff</code>
 */
class LiveAgentHandoff extends \Google\Protobuf\Internal\Message
{
    /**
     * Custom metadata for your handoff procedure. Dialogflow doesn't impose
     * any structure on this.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct metadata = 1;</code>
     */
    protected $metadata = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Struct $metadata
     *           Custom metadata for your handoff procedure. Dialogflow doesn't impose
     *           any structure on this.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\Cx\V3\ResponseMessage::initOnce();
        parent::__construct($data);
    }

    /**
     * Custom metadata for your handoff procedure. Dialogflow doesn't impose
     * any structure on this.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct metadata = 1;</code>
     * @return \Google\Protobuf\Struct|null
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    public function hasMetadata()
    {
        return isset($this->metadata);
    }

    public function clearMetadata()
    {
        unset($this->metadata);
    }

    /**
     * Custom metadata for your handoff procedure. Dialogflow doesn't impose
     * any structure on this.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct metadata = 1;</code>
     * @param \Google\Protobuf\Struct $var
     * @return $this
     */
    public function setMetadata($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Struct::class);
        $this->metadata = $var;

        return $this;
    }

}

