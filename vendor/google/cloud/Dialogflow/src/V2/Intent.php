<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/intent.proto

namespace Google\Cloud\Dialogflow\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An intent categorizes an end-user's intention for one conversation turn. For
 * each agent, you define many intents, where your combined intents can handle a
 * complete conversation. When an end-user writes or says something, referred to
 * as an end-user expression or end-user input, Dialogflow matches the end-user
 * input to the best intent in your agent. Matching an intent is also known as
 * intent classification.
 * For more information, see the [intent
 * guide](https://cloud.google.com/dialogflow/docs/intents-overview).
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.Intent</code>
 */
class Intent extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. The unique identifier of this intent.
     * Required for
     * [Intents.UpdateIntent][google.cloud.dialogflow.v2.Intents.UpdateIntent] and
     * [Intents.BatchUpdateIntents][google.cloud.dialogflow.v2.Intents.BatchUpdateIntents]
     * methods.
     * Format: `projects/<Project ID>/agent/intents/<Intent ID>`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $name = '';
    /**
     * Required. The name of this intent.
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $display_name = '';
    /**
     * Optional. Indicates whether webhooks are enabled for the intent.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.Intent.WebhookState webhook_state = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $webhook_state = 0;
    /**
     * Optional. The priority of this intent. Higher numbers represent higher
     * priorities.
     * - If the supplied value is unspecified or 0, the service
     *   translates the value to 500,000, which corresponds to the
     *   `Normal` priority in the console.
     * - If the supplied value is negative, the intent is ignored
     *   in runtime detect intent requests.
     *
     * Generated from protobuf field <code>int32 priority = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $priority = 0;
    /**
     * Optional. Indicates whether this is a fallback intent.
     *
     * Generated from protobuf field <code>bool is_fallback = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $is_fallback = false;
    /**
     * Optional. Indicates whether Machine Learning is disabled for the intent.
     * Note: If `ml_disabled` setting is set to true, then this intent is not
     * taken into account during inference in `ML ONLY` match mode. Also,
     * auto-markup in the UI is turned off.
     *
     * Generated from protobuf field <code>bool ml_disabled = 19 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $ml_disabled = false;
    /**
     * Optional. Indicates that a live agent should be brought in to handle the
     * interaction with the user. In most cases, when you set this flag to true,
     * you would also want to set end_interaction to true as well. Default is
     * false.
     *
     * Generated from protobuf field <code>bool live_agent_handoff = 20 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $live_agent_handoff = false;
    /**
     * Optional. Indicates that this intent ends an interaction. Some integrations
     * (e.g., Actions on Google or Dialogflow phone gateway) use this information
     * to close interaction with an end user. Default is false.
     *
     * Generated from protobuf field <code>bool end_interaction = 21 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $end_interaction = false;
    /**
     * Optional. The list of context names required for this intent to be
     * triggered.
     * Format: `projects/<Project ID>/agent/sessions/-/contexts/<Context ID>`.
     *
     * Generated from protobuf field <code>repeated string input_context_names = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $input_context_names;
    /**
     * Optional. The collection of event names that trigger the intent.
     * If the collection of input contexts is not empty, all of the contexts must
     * be present in the active user session for an event to trigger this intent.
     * Event names are limited to 150 characters.
     *
     * Generated from protobuf field <code>repeated string events = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $events;
    /**
     * Optional. The collection of examples that the agent is
     * trained on.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.Intent.TrainingPhrase training_phrases = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $training_phrases;
    /**
     * Optional. The name of the action associated with the intent.
     * Note: The action name must not contain whitespaces.
     *
     * Generated from protobuf field <code>string action = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $action = '';
    /**
     * Optional. The collection of contexts that are activated when the intent
     * is matched. Context messages in this collection should not set the
     * parameters field. Setting the `lifespan_count` to 0 will reset the context
     * when the intent is matched.
     * Format: `projects/<Project ID>/agent/sessions/-/contexts/<Context ID>`.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.Context output_contexts = 11 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $output_contexts;
    /**
     * Optional. Indicates whether to delete all contexts in the current
     * session when this intent is matched.
     *
     * Generated from protobuf field <code>bool reset_contexts = 12 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $reset_contexts = false;
    /**
     * Optional. The collection of parameters associated with the intent.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.Intent.Parameter parameters = 13 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $parameters;
    /**
     * Optional. The collection of rich messages corresponding to the
     * `Response` field in the Dialogflow console.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.Intent.Message messages = 14 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $messages;
    /**
     * Optional. The list of platforms for which the first responses will be
     * copied from the messages in PLATFORM_UNSPECIFIED (i.e. default platform).
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.Intent.Message.Platform default_response_platforms = 15 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $default_response_platforms;
    /**
     * Output only.
     * Read-only. The unique identifier of the root intent in the chain of
     * followup intents. It identifies the correct followup intents chain for
     * this intent. We populate this field only in the output.
     * Format: `projects/<Project ID>/agent/intents/<Intent ID>`.
     *
     * Generated from protobuf field <code>string root_followup_intent_name = 16 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $root_followup_intent_name = '';
    /**
     * Read-only after creation. The unique identifier of the parent intent in the
     * chain of followup intents. You can set this field when creating an intent,
     * for example with
     * [CreateIntent][google.cloud.dialogflow.v2.Intents.CreateIntent] or
     * [BatchUpdateIntents][google.cloud.dialogflow.v2.Intents.BatchUpdateIntents],
     * in order to make this intent a followup intent.
     * It identifies the parent followup intent.
     * Format: `projects/<Project ID>/agent/intents/<Intent ID>`.
     *
     * Generated from protobuf field <code>string parent_followup_intent_name = 17;</code>
     */
    private $parent_followup_intent_name = '';
    /**
     * Output only. Read-only. Information about all followup intents that have
     * this intent as a direct or indirect parent. We populate this field only in
     * the output.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.Intent.FollowupIntentInfo followup_intent_info = 18 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $followup_intent_info;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Optional. The unique identifier of this intent.
     *           Required for
     *           [Intents.UpdateIntent][google.cloud.dialogflow.v2.Intents.UpdateIntent] and
     *           [Intents.BatchUpdateIntents][google.cloud.dialogflow.v2.Intents.BatchUpdateIntents]
     *           methods.
     *           Format: `projects/<Project ID>/agent/intents/<Intent ID>`.
     *     @type string $display_name
     *           Required. The name of this intent.
     *     @type int $webhook_state
     *           Optional. Indicates whether webhooks are enabled for the intent.
     *     @type int $priority
     *           Optional. The priority of this intent. Higher numbers represent higher
     *           priorities.
     *           - If the supplied value is unspecified or 0, the service
     *             translates the value to 500,000, which corresponds to the
     *             `Normal` priority in the console.
     *           - If the supplied value is negative, the intent is ignored
     *             in runtime detect intent requests.
     *     @type bool $is_fallback
     *           Optional. Indicates whether this is a fallback intent.
     *     @type bool $ml_disabled
     *           Optional. Indicates whether Machine Learning is disabled for the intent.
     *           Note: If `ml_disabled` setting is set to true, then this intent is not
     *           taken into account during inference in `ML ONLY` match mode. Also,
     *           auto-markup in the UI is turned off.
     *     @type bool $live_agent_handoff
     *           Optional. Indicates that a live agent should be brought in to handle the
     *           interaction with the user. In most cases, when you set this flag to true,
     *           you would also want to set end_interaction to true as well. Default is
     *           false.
     *     @type bool $end_interaction
     *           Optional. Indicates that this intent ends an interaction. Some integrations
     *           (e.g., Actions on Google or Dialogflow phone gateway) use this information
     *           to close interaction with an end user. Default is false.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $input_context_names
     *           Optional. The list of context names required for this intent to be
     *           triggered.
     *           Format: `projects/<Project ID>/agent/sessions/-/contexts/<Context ID>`.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $events
     *           Optional. The collection of event names that trigger the intent.
     *           If the collection of input contexts is not empty, all of the contexts must
     *           be present in the active user session for an event to trigger this intent.
     *           Event names are limited to 150 characters.
     *     @type array<\Google\Cloud\Dialogflow\V2\Intent\TrainingPhrase>|\Google\Protobuf\Internal\RepeatedField $training_phrases
     *           Optional. The collection of examples that the agent is
     *           trained on.
     *     @type string $action
     *           Optional. The name of the action associated with the intent.
     *           Note: The action name must not contain whitespaces.
     *     @type array<\Google\Cloud\Dialogflow\V2\Context>|\Google\Protobuf\Internal\RepeatedField $output_contexts
     *           Optional. The collection of contexts that are activated when the intent
     *           is matched. Context messages in this collection should not set the
     *           parameters field. Setting the `lifespan_count` to 0 will reset the context
     *           when the intent is matched.
     *           Format: `projects/<Project ID>/agent/sessions/-/contexts/<Context ID>`.
     *     @type bool $reset_contexts
     *           Optional. Indicates whether to delete all contexts in the current
     *           session when this intent is matched.
     *     @type array<\Google\Cloud\Dialogflow\V2\Intent\Parameter>|\Google\Protobuf\Internal\RepeatedField $parameters
     *           Optional. The collection of parameters associated with the intent.
     *     @type array<\Google\Cloud\Dialogflow\V2\Intent\Message>|\Google\Protobuf\Internal\RepeatedField $messages
     *           Optional. The collection of rich messages corresponding to the
     *           `Response` field in the Dialogflow console.
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $default_response_platforms
     *           Optional. The list of platforms for which the first responses will be
     *           copied from the messages in PLATFORM_UNSPECIFIED (i.e. default platform).
     *     @type string $root_followup_intent_name
     *           Output only.
     *           Read-only. The unique identifier of the root intent in the chain of
     *           followup intents. It identifies the correct followup intents chain for
     *           this intent. We populate this field only in the output.
     *           Format: `projects/<Project ID>/agent/intents/<Intent ID>`.
     *     @type string $parent_followup_intent_name
     *           Read-only after creation. The unique identifier of the parent intent in the
     *           chain of followup intents. You can set this field when creating an intent,
     *           for example with
     *           [CreateIntent][google.cloud.dialogflow.v2.Intents.CreateIntent] or
     *           [BatchUpdateIntents][google.cloud.dialogflow.v2.Intents.BatchUpdateIntents],
     *           in order to make this intent a followup intent.
     *           It identifies the parent followup intent.
     *           Format: `projects/<Project ID>/agent/intents/<Intent ID>`.
     *     @type array<\Google\Cloud\Dialogflow\V2\Intent\FollowupIntentInfo>|\Google\Protobuf\Internal\RepeatedField $followup_intent_info
     *           Output only. Read-only. Information about all followup intents that have
     *           this intent as a direct or indirect parent. We populate this field only in
     *           the output.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\Intent::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. The unique identifier of this intent.
     * Required for
     * [Intents.UpdateIntent][google.cloud.dialogflow.v2.Intents.UpdateIntent] and
     * [Intents.BatchUpdateIntents][google.cloud.dialogflow.v2.Intents.BatchUpdateIntents]
     * methods.
     * Format: `projects/<Project ID>/agent/intents/<Intent ID>`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Optional. The unique identifier of this intent.
     * Required for
     * [Intents.UpdateIntent][google.cloud.dialogflow.v2.Intents.UpdateIntent] and
     * [Intents.BatchUpdateIntents][google.cloud.dialogflow.v2.Intents.BatchUpdateIntents]
     * methods.
     * Format: `projects/<Project ID>/agent/intents/<Intent ID>`.
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
     * Required. The name of this intent.
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Required. The name of this intent.
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * Optional. Indicates whether webhooks are enabled for the intent.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.Intent.WebhookState webhook_state = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getWebhookState()
    {
        return $this->webhook_state;
    }

    /**
     * Optional. Indicates whether webhooks are enabled for the intent.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.Intent.WebhookState webhook_state = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setWebhookState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dialogflow\V2\Intent\WebhookState::class);
        $this->webhook_state = $var;

        return $this;
    }

    /**
     * Optional. The priority of this intent. Higher numbers represent higher
     * priorities.
     * - If the supplied value is unspecified or 0, the service
     *   translates the value to 500,000, which corresponds to the
     *   `Normal` priority in the console.
     * - If the supplied value is negative, the intent is ignored
     *   in runtime detect intent requests.
     *
     * Generated from protobuf field <code>int32 priority = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Optional. The priority of this intent. Higher numbers represent higher
     * priorities.
     * - If the supplied value is unspecified or 0, the service
     *   translates the value to 500,000, which corresponds to the
     *   `Normal` priority in the console.
     * - If the supplied value is negative, the intent is ignored
     *   in runtime detect intent requests.
     *
     * Generated from protobuf field <code>int32 priority = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setPriority($var)
    {
        GPBUtil::checkInt32($var);
        $this->priority = $var;

        return $this;
    }

    /**
     * Optional. Indicates whether this is a fallback intent.
     *
     * Generated from protobuf field <code>bool is_fallback = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getIsFallback()
    {
        return $this->is_fallback;
    }

    /**
     * Optional. Indicates whether this is a fallback intent.
     *
     * Generated from protobuf field <code>bool is_fallback = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setIsFallback($var)
    {
        GPBUtil::checkBool($var);
        $this->is_fallback = $var;

        return $this;
    }

    /**
     * Optional. Indicates whether Machine Learning is disabled for the intent.
     * Note: If `ml_disabled` setting is set to true, then this intent is not
     * taken into account during inference in `ML ONLY` match mode. Also,
     * auto-markup in the UI is turned off.
     *
     * Generated from protobuf field <code>bool ml_disabled = 19 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getMlDisabled()
    {
        return $this->ml_disabled;
    }

    /**
     * Optional. Indicates whether Machine Learning is disabled for the intent.
     * Note: If `ml_disabled` setting is set to true, then this intent is not
     * taken into account during inference in `ML ONLY` match mode. Also,
     * auto-markup in the UI is turned off.
     *
     * Generated from protobuf field <code>bool ml_disabled = 19 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setMlDisabled($var)
    {
        GPBUtil::checkBool($var);
        $this->ml_disabled = $var;

        return $this;
    }

    /**
     * Optional. Indicates that a live agent should be brought in to handle the
     * interaction with the user. In most cases, when you set this flag to true,
     * you would also want to set end_interaction to true as well. Default is
     * false.
     *
     * Generated from protobuf field <code>bool live_agent_handoff = 20 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getLiveAgentHandoff()
    {
        return $this->live_agent_handoff;
    }

    /**
     * Optional. Indicates that a live agent should be brought in to handle the
     * interaction with the user. In most cases, when you set this flag to true,
     * you would also want to set end_interaction to true as well. Default is
     * false.
     *
     * Generated from protobuf field <code>bool live_agent_handoff = 20 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setLiveAgentHandoff($var)
    {
        GPBUtil::checkBool($var);
        $this->live_agent_handoff = $var;

        return $this;
    }

    /**
     * Optional. Indicates that this intent ends an interaction. Some integrations
     * (e.g., Actions on Google or Dialogflow phone gateway) use this information
     * to close interaction with an end user. Default is false.
     *
     * Generated from protobuf field <code>bool end_interaction = 21 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getEndInteraction()
    {
        return $this->end_interaction;
    }

    /**
     * Optional. Indicates that this intent ends an interaction. Some integrations
     * (e.g., Actions on Google or Dialogflow phone gateway) use this information
     * to close interaction with an end user. Default is false.
     *
     * Generated from protobuf field <code>bool end_interaction = 21 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setEndInteraction($var)
    {
        GPBUtil::checkBool($var);
        $this->end_interaction = $var;

        return $this;
    }

    /**
     * Optional. The list of context names required for this intent to be
     * triggered.
     * Format: `projects/<Project ID>/agent/sessions/-/contexts/<Context ID>`.
     *
     * Generated from protobuf field <code>repeated string input_context_names = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getInputContextNames()
    {
        return $this->input_context_names;
    }

    /**
     * Optional. The list of context names required for this intent to be
     * triggered.
     * Format: `projects/<Project ID>/agent/sessions/-/contexts/<Context ID>`.
     *
     * Generated from protobuf field <code>repeated string input_context_names = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setInputContextNames($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->input_context_names = $arr;

        return $this;
    }

    /**
     * Optional. The collection of event names that trigger the intent.
     * If the collection of input contexts is not empty, all of the contexts must
     * be present in the active user session for an event to trigger this intent.
     * Event names are limited to 150 characters.
     *
     * Generated from protobuf field <code>repeated string events = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEvents()
    {
        return $this->events;
    }

    /**
     * Optional. The collection of event names that trigger the intent.
     * If the collection of input contexts is not empty, all of the contexts must
     * be present in the active user session for an event to trigger this intent.
     * Event names are limited to 150 characters.
     *
     * Generated from protobuf field <code>repeated string events = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEvents($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->events = $arr;

        return $this;
    }

    /**
     * Optional. The collection of examples that the agent is
     * trained on.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.Intent.TrainingPhrase training_phrases = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTrainingPhrases()
    {
        return $this->training_phrases;
    }

    /**
     * Optional. The collection of examples that the agent is
     * trained on.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.Intent.TrainingPhrase training_phrases = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<\Google\Cloud\Dialogflow\V2\Intent\TrainingPhrase>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTrainingPhrases($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dialogflow\V2\Intent\TrainingPhrase::class);
        $this->training_phrases = $arr;

        return $this;
    }

    /**
     * Optional. The name of the action associated with the intent.
     * Note: The action name must not contain whitespaces.
     *
     * Generated from protobuf field <code>string action = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Optional. The name of the action associated with the intent.
     * Note: The action name must not contain whitespaces.
     *
     * Generated from protobuf field <code>string action = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setAction($var)
    {
        GPBUtil::checkString($var, True);
        $this->action = $var;

        return $this;
    }

    /**
     * Optional. The collection of contexts that are activated when the intent
     * is matched. Context messages in this collection should not set the
     * parameters field. Setting the `lifespan_count` to 0 will reset the context
     * when the intent is matched.
     * Format: `projects/<Project ID>/agent/sessions/-/contexts/<Context ID>`.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.Context output_contexts = 11 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getOutputContexts()
    {
        return $this->output_contexts;
    }

    /**
     * Optional. The collection of contexts that are activated when the intent
     * is matched. Context messages in this collection should not set the
     * parameters field. Setting the `lifespan_count` to 0 will reset the context
     * when the intent is matched.
     * Format: `projects/<Project ID>/agent/sessions/-/contexts/<Context ID>`.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.Context output_contexts = 11 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<\Google\Cloud\Dialogflow\V2\Context>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setOutputContexts($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dialogflow\V2\Context::class);
        $this->output_contexts = $arr;

        return $this;
    }

    /**
     * Optional. Indicates whether to delete all contexts in the current
     * session when this intent is matched.
     *
     * Generated from protobuf field <code>bool reset_contexts = 12 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getResetContexts()
    {
        return $this->reset_contexts;
    }

    /**
     * Optional. Indicates whether to delete all contexts in the current
     * session when this intent is matched.
     *
     * Generated from protobuf field <code>bool reset_contexts = 12 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setResetContexts($var)
    {
        GPBUtil::checkBool($var);
        $this->reset_contexts = $var;

        return $this;
    }

    /**
     * Optional. The collection of parameters associated with the intent.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.Intent.Parameter parameters = 13 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Optional. The collection of parameters associated with the intent.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.Intent.Parameter parameters = 13 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<\Google\Cloud\Dialogflow\V2\Intent\Parameter>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setParameters($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dialogflow\V2\Intent\Parameter::class);
        $this->parameters = $arr;

        return $this;
    }

    /**
     * Optional. The collection of rich messages corresponding to the
     * `Response` field in the Dialogflow console.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.Intent.Message messages = 14 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMessages()
    {
        return $this->messages;
    }

    /**
     * Optional. The collection of rich messages corresponding to the
     * `Response` field in the Dialogflow console.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.Intent.Message messages = 14 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<\Google\Cloud\Dialogflow\V2\Intent\Message>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMessages($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dialogflow\V2\Intent\Message::class);
        $this->messages = $arr;

        return $this;
    }

    /**
     * Optional. The list of platforms for which the first responses will be
     * copied from the messages in PLATFORM_UNSPECIFIED (i.e. default platform).
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.Intent.Message.Platform default_response_platforms = 15 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDefaultResponsePlatforms()
    {
        return $this->default_response_platforms;
    }

    /**
     * Optional. The list of platforms for which the first responses will be
     * copied from the messages in PLATFORM_UNSPECIFIED (i.e. default platform).
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.Intent.Message.Platform default_response_platforms = 15 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDefaultResponsePlatforms($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Google\Cloud\Dialogflow\V2\Intent\Message\Platform::class);
        $this->default_response_platforms = $arr;

        return $this;
    }

    /**
     * Output only.
     * Read-only. The unique identifier of the root intent in the chain of
     * followup intents. It identifies the correct followup intents chain for
     * this intent. We populate this field only in the output.
     * Format: `projects/<Project ID>/agent/intents/<Intent ID>`.
     *
     * Generated from protobuf field <code>string root_followup_intent_name = 16 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getRootFollowupIntentName()
    {
        return $this->root_followup_intent_name;
    }

    /**
     * Output only.
     * Read-only. The unique identifier of the root intent in the chain of
     * followup intents. It identifies the correct followup intents chain for
     * this intent. We populate this field only in the output.
     * Format: `projects/<Project ID>/agent/intents/<Intent ID>`.
     *
     * Generated from protobuf field <code>string root_followup_intent_name = 16 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setRootFollowupIntentName($var)
    {
        GPBUtil::checkString($var, True);
        $this->root_followup_intent_name = $var;

        return $this;
    }

    /**
     * Read-only after creation. The unique identifier of the parent intent in the
     * chain of followup intents. You can set this field when creating an intent,
     * for example with
     * [CreateIntent][google.cloud.dialogflow.v2.Intents.CreateIntent] or
     * [BatchUpdateIntents][google.cloud.dialogflow.v2.Intents.BatchUpdateIntents],
     * in order to make this intent a followup intent.
     * It identifies the parent followup intent.
     * Format: `projects/<Project ID>/agent/intents/<Intent ID>`.
     *
     * Generated from protobuf field <code>string parent_followup_intent_name = 17;</code>
     * @return string
     */
    public function getParentFollowupIntentName()
    {
        return $this->parent_followup_intent_name;
    }

    /**
     * Read-only after creation. The unique identifier of the parent intent in the
     * chain of followup intents. You can set this field when creating an intent,
     * for example with
     * [CreateIntent][google.cloud.dialogflow.v2.Intents.CreateIntent] or
     * [BatchUpdateIntents][google.cloud.dialogflow.v2.Intents.BatchUpdateIntents],
     * in order to make this intent a followup intent.
     * It identifies the parent followup intent.
     * Format: `projects/<Project ID>/agent/intents/<Intent ID>`.
     *
     * Generated from protobuf field <code>string parent_followup_intent_name = 17;</code>
     * @param string $var
     * @return $this
     */
    public function setParentFollowupIntentName($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent_followup_intent_name = $var;

        return $this;
    }

    /**
     * Output only. Read-only. Information about all followup intents that have
     * this intent as a direct or indirect parent. We populate this field only in
     * the output.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.Intent.FollowupIntentInfo followup_intent_info = 18 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFollowupIntentInfo()
    {
        return $this->followup_intent_info;
    }

    /**
     * Output only. Read-only. Information about all followup intents that have
     * this intent as a direct or indirect parent. We populate this field only in
     * the output.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.Intent.FollowupIntentInfo followup_intent_info = 18 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param array<\Google\Cloud\Dialogflow\V2\Intent\FollowupIntentInfo>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFollowupIntentInfo($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dialogflow\V2\Intent\FollowupIntentInfo::class);
        $this->followup_intent_info = $arr;

        return $this;
    }

}
