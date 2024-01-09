<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/participant.proto

namespace Google\Cloud\Dialogflow\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents an intent suggestion.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.IntentSuggestion</code>
 */
class IntentSuggestion extends \Google\Protobuf\Internal\Message
{
    /**
     * The display name of the intent.
     *
     * Generated from protobuf field <code>string display_name = 1;</code>
     */
    private $display_name = '';
    /**
     * Human readable description for better understanding an intent like its
     * scope, content, result etc. Maximum character limit: 140 characters.
     *
     * Generated from protobuf field <code>string description = 5;</code>
     */
    private $description = '';
    protected $intent;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $display_name
     *           The display name of the intent.
     *     @type string $intent_v2
     *           The unique identifier of this
     *           [intent][google.cloud.dialogflow.v2.Intent]. Format: `projects/<Project
     *           ID>/locations/<Location ID>/agent/intents/<Intent ID>`.
     *     @type string $description
     *           Human readable description for better understanding an intent like its
     *           scope, content, result etc. Maximum character limit: 140 characters.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\Participant::initOnce();
        parent::__construct($data);
    }

    /**
     * The display name of the intent.
     *
     * Generated from protobuf field <code>string display_name = 1;</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * The display name of the intent.
     *
     * Generated from protobuf field <code>string display_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * The unique identifier of this
     * [intent][google.cloud.dialogflow.v2.Intent]. Format: `projects/<Project
     * ID>/locations/<Location ID>/agent/intents/<Intent ID>`.
     *
     * Generated from protobuf field <code>string intent_v2 = 2;</code>
     * @return string
     */
    public function getIntentV2()
    {
        return $this->readOneof(2);
    }

    public function hasIntentV2()
    {
        return $this->hasOneof(2);
    }

    /**
     * The unique identifier of this
     * [intent][google.cloud.dialogflow.v2.Intent]. Format: `projects/<Project
     * ID>/locations/<Location ID>/agent/intents/<Intent ID>`.
     *
     * Generated from protobuf field <code>string intent_v2 = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setIntentV2($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Human readable description for better understanding an intent like its
     * scope, content, result etc. Maximum character limit: 140 characters.
     *
     * Generated from protobuf field <code>string description = 5;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Human readable description for better understanding an intent like its
     * scope, content, result etc. Maximum character limit: 140 characters.
     *
     * Generated from protobuf field <code>string description = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getIntent()
    {
        return $this->whichOneof("intent");
    }

}
