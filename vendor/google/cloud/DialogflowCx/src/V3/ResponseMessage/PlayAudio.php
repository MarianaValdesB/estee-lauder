<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/cx/v3/response_message.proto

namespace Google\Cloud\Dialogflow\Cx\V3\ResponseMessage;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Specifies an audio clip to be played by the client as part of the response.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.cx.v3.ResponseMessage.PlayAudio</code>
 */
class PlayAudio extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. URI of the audio clip. Dialogflow does not impose any
     * validation on this value. It is specific to the client that reads it.
     *
     * Generated from protobuf field <code>string audio_uri = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $audio_uri = '';
    /**
     * Output only. Whether the playback of this message can be interrupted by
     * the end user's speech and the client can then starts the next Dialogflow
     * request.
     *
     * Generated from protobuf field <code>bool allow_playback_interruption = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $allow_playback_interruption = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $audio_uri
     *           Required. URI of the audio clip. Dialogflow does not impose any
     *           validation on this value. It is specific to the client that reads it.
     *     @type bool $allow_playback_interruption
     *           Output only. Whether the playback of this message can be interrupted by
     *           the end user's speech and the client can then starts the next Dialogflow
     *           request.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\Cx\V3\ResponseMessage::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. URI of the audio clip. Dialogflow does not impose any
     * validation on this value. It is specific to the client that reads it.
     *
     * Generated from protobuf field <code>string audio_uri = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getAudioUri()
    {
        return $this->audio_uri;
    }

    /**
     * Required. URI of the audio clip. Dialogflow does not impose any
     * validation on this value. It is specific to the client that reads it.
     *
     * Generated from protobuf field <code>string audio_uri = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setAudioUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->audio_uri = $var;

        return $this;
    }

    /**
     * Output only. Whether the playback of this message can be interrupted by
     * the end user's speech and the client can then starts the next Dialogflow
     * request.
     *
     * Generated from protobuf field <code>bool allow_playback_interruption = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return bool
     */
    public function getAllowPlaybackInterruption()
    {
        return $this->allow_playback_interruption;
    }

    /**
     * Output only. Whether the playback of this message can be interrupted by
     * the end user's speech and the client can then starts the next Dialogflow
     * request.
     *
     * Generated from protobuf field <code>bool allow_playback_interruption = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param bool $var
     * @return $this
     */
    public function setAllowPlaybackInterruption($var)
    {
        GPBUtil::checkBool($var);
        $this->allow_playback_interruption = $var;

        return $this;
    }

}


