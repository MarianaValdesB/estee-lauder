<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/audio_config.proto

namespace Google\Cloud\Dialogflow\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Description of which voice to use for speech synthesis.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.VoiceSelectionParams</code>
 */
class VoiceSelectionParams extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. The name of the voice. If not set, the service will choose a
     * voice based on the other parameters such as language_code and
     * [ssml_gender][google.cloud.dialogflow.v2.VoiceSelectionParams.ssml_gender].
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $name = '';
    /**
     * Optional. The preferred gender of the voice. If not set, the service will
     * choose a voice based on the other parameters such as language_code and
     * [name][google.cloud.dialogflow.v2.VoiceSelectionParams.name]. Note that
     * this is only a preference, not requirement. If a voice of the appropriate
     * gender is not available, the synthesizer should substitute a voice with a
     * different gender rather than failing the request.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.SsmlVoiceGender ssml_gender = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $ssml_gender = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Optional. The name of the voice. If not set, the service will choose a
     *           voice based on the other parameters such as language_code and
     *           [ssml_gender][google.cloud.dialogflow.v2.VoiceSelectionParams.ssml_gender].
     *     @type int $ssml_gender
     *           Optional. The preferred gender of the voice. If not set, the service will
     *           choose a voice based on the other parameters such as language_code and
     *           [name][google.cloud.dialogflow.v2.VoiceSelectionParams.name]. Note that
     *           this is only a preference, not requirement. If a voice of the appropriate
     *           gender is not available, the synthesizer should substitute a voice with a
     *           different gender rather than failing the request.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\AudioConfig::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. The name of the voice. If not set, the service will choose a
     * voice based on the other parameters such as language_code and
     * [ssml_gender][google.cloud.dialogflow.v2.VoiceSelectionParams.ssml_gender].
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Optional. The name of the voice. If not set, the service will choose a
     * voice based on the other parameters such as language_code and
     * [ssml_gender][google.cloud.dialogflow.v2.VoiceSelectionParams.ssml_gender].
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
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
     * Optional. The preferred gender of the voice. If not set, the service will
     * choose a voice based on the other parameters such as language_code and
     * [name][google.cloud.dialogflow.v2.VoiceSelectionParams.name]. Note that
     * this is only a preference, not requirement. If a voice of the appropriate
     * gender is not available, the synthesizer should substitute a voice with a
     * different gender rather than failing the request.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.SsmlVoiceGender ssml_gender = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getSsmlGender()
    {
        return $this->ssml_gender;
    }

    /**
     * Optional. The preferred gender of the voice. If not set, the service will
     * choose a voice based on the other parameters such as language_code and
     * [name][google.cloud.dialogflow.v2.VoiceSelectionParams.name]. Note that
     * this is only a preference, not requirement. If a voice of the appropriate
     * gender is not available, the synthesizer should substitute a voice with a
     * different gender rather than failing the request.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.SsmlVoiceGender ssml_gender = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setSsmlGender($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dialogflow\V2\SsmlVoiceGender::class);
        $this->ssml_gender = $var;

        return $this;
    }

}
