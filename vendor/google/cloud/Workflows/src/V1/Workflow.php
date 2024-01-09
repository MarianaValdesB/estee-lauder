<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/workflows/v1/workflows.proto

namespace Google\Cloud\Workflows\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Workflow program to be executed by Workflows.
 *
 * Generated from protobuf message <code>google.cloud.workflows.v1.Workflow</code>
 */
class Workflow extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the workflow.
     * Format: projects/{project}/locations/{location}/workflows/{workflow}
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * Description of the workflow provided by the user.
     * Must be at most 1000 unicode characters long.
     *
     * Generated from protobuf field <code>string description = 2;</code>
     */
    private $description = '';
    /**
     * Output only. State of the workflow deployment.
     *
     * Generated from protobuf field <code>.google.cloud.workflows.v1.Workflow.State state = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $state = 0;
    /**
     * Output only. The revision of the workflow.
     * A new revision of a workflow is created as a result of updating the
     * following properties of a workflow:
     * - [Service account][google.cloud.workflows.v1.Workflow.service_account]
     * - [Workflow code to be
     * executed][google.cloud.workflows.v1.Workflow.source_contents]
     * The format is "000001-a4d", where the first six characters define
     * the zero-padded revision ordinal number. They are followed by a hyphen and
     * three hexadecimal random characters.
     *
     * Generated from protobuf field <code>string revision_id = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $revision_id = '';
    /**
     * Output only. The timestamp for when the workflow was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $create_time = null;
    /**
     * Output only. The timestamp for when the workflow was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $update_time = null;
    /**
     * Output only. The timestamp for the latest revision of the workflow's
     * creation.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp revision_create_time = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $revision_create_time = null;
    /**
     * Labels associated with this workflow.
     * Labels can contain at most 64 entries. Keys and values can be no longer
     * than 63 characters and can only contain lowercase letters, numeric
     * characters, underscores, and dashes. Label keys must start with a letter.
     * International characters are allowed.
     *
     * Generated from protobuf field <code>map<string, string> labels = 8;</code>
     */
    private $labels;
    /**
     * The service account associated with the latest workflow version.
     * This service account represents the identity of the workflow and determines
     * what permissions the workflow has.
     * Format: projects/{project}/serviceAccounts/{account} or {account}
     * Using `-` as a wildcard for the `{project}` or not providing one at all
     * will infer the project from the account. The `{account}` value can be the
     * `email` address or the `unique_id` of the service account.
     * If not provided, workflow will use the project's default service account.
     * Modifying this field for an existing workflow results in a new workflow
     * revision.
     *
     * Generated from protobuf field <code>string service_account = 9;</code>
     */
    private $service_account = '';
    /**
     * Optional. The resource name of a KMS crypto key used to encrypt or decrypt
     * the data associated with the workflow.
     * Format:
     * projects/{project}/locations/{location}/keyRings/{keyRing}/cryptoKeys/{cryptoKey}
     * Using `-` as a wildcard for the `{project}` or not providing one at all
     * will infer the project from the account.
     * If not provided, data associated with the workflow will not be
     * CMEK-encrypted.
     *
     * Generated from protobuf field <code>string crypto_key_name = 11 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     */
    private $crypto_key_name = '';
    /**
     * Output only. Error regarding the state of the workflow. For example, this
     * field will have error details if the execution data is unavailable due to
     * revoked KMS key permissions.
     *
     * Generated from protobuf field <code>.google.cloud.workflows.v1.Workflow.StateError state_error = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $state_error = null;
    /**
     * Optional. Describes the level of platform logging to apply to calls and
     * call responses during executions of this workflow. If both the workflow and
     * the execution specify a logging level, the execution level takes
     * precedence.
     *
     * Generated from protobuf field <code>.google.cloud.workflows.v1.Workflow.CallLogLevel call_log_level = 13 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $call_log_level = 0;
    /**
     * Optional. User-defined environment variables associated with this workflow
     * revision. This map has a maximum length of 20. Each string can take up to
     * 40KiB. Keys cannot be empty strings and cannot start with “GOOGLE” or
     * “WORKFLOWS".
     *
     * Generated from protobuf field <code>map<string, string> user_env_vars = 14 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $user_env_vars;
    protected $source_code;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The resource name of the workflow.
     *           Format: projects/{project}/locations/{location}/workflows/{workflow}
     *     @type string $description
     *           Description of the workflow provided by the user.
     *           Must be at most 1000 unicode characters long.
     *     @type int $state
     *           Output only. State of the workflow deployment.
     *     @type string $revision_id
     *           Output only. The revision of the workflow.
     *           A new revision of a workflow is created as a result of updating the
     *           following properties of a workflow:
     *           - [Service account][google.cloud.workflows.v1.Workflow.service_account]
     *           - [Workflow code to be
     *           executed][google.cloud.workflows.v1.Workflow.source_contents]
     *           The format is "000001-a4d", where the first six characters define
     *           the zero-padded revision ordinal number. They are followed by a hyphen and
     *           three hexadecimal random characters.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. The timestamp for when the workflow was created.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. The timestamp for when the workflow was last updated.
     *     @type \Google\Protobuf\Timestamp $revision_create_time
     *           Output only. The timestamp for the latest revision of the workflow's
     *           creation.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           Labels associated with this workflow.
     *           Labels can contain at most 64 entries. Keys and values can be no longer
     *           than 63 characters and can only contain lowercase letters, numeric
     *           characters, underscores, and dashes. Label keys must start with a letter.
     *           International characters are allowed.
     *     @type string $service_account
     *           The service account associated with the latest workflow version.
     *           This service account represents the identity of the workflow and determines
     *           what permissions the workflow has.
     *           Format: projects/{project}/serviceAccounts/{account} or {account}
     *           Using `-` as a wildcard for the `{project}` or not providing one at all
     *           will infer the project from the account. The `{account}` value can be the
     *           `email` address or the `unique_id` of the service account.
     *           If not provided, workflow will use the project's default service account.
     *           Modifying this field for an existing workflow results in a new workflow
     *           revision.
     *     @type string $source_contents
     *           Workflow code to be executed. The size limit is 128KB.
     *     @type string $crypto_key_name
     *           Optional. The resource name of a KMS crypto key used to encrypt or decrypt
     *           the data associated with the workflow.
     *           Format:
     *           projects/{project}/locations/{location}/keyRings/{keyRing}/cryptoKeys/{cryptoKey}
     *           Using `-` as a wildcard for the `{project}` or not providing one at all
     *           will infer the project from the account.
     *           If not provided, data associated with the workflow will not be
     *           CMEK-encrypted.
     *     @type \Google\Cloud\Workflows\V1\Workflow\StateError $state_error
     *           Output only. Error regarding the state of the workflow. For example, this
     *           field will have error details if the execution data is unavailable due to
     *           revoked KMS key permissions.
     *     @type int $call_log_level
     *           Optional. Describes the level of platform logging to apply to calls and
     *           call responses during executions of this workflow. If both the workflow and
     *           the execution specify a logging level, the execution level takes
     *           precedence.
     *     @type array|\Google\Protobuf\Internal\MapField $user_env_vars
     *           Optional. User-defined environment variables associated with this workflow
     *           revision. This map has a maximum length of 20. Each string can take up to
     *           40KiB. Keys cannot be empty strings and cannot start with “GOOGLE” or
     *           “WORKFLOWS".
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Workflows\V1\Workflows::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the workflow.
     * Format: projects/{project}/locations/{location}/workflows/{workflow}
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The resource name of the workflow.
     * Format: projects/{project}/locations/{location}/workflows/{workflow}
     *
     * Generated from protobuf field <code>string name = 1;</code>
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
     * Description of the workflow provided by the user.
     * Must be at most 1000 unicode characters long.
     *
     * Generated from protobuf field <code>string description = 2;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Description of the workflow provided by the user.
     * Must be at most 1000 unicode characters long.
     *
     * Generated from protobuf field <code>string description = 2;</code>
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
     * Output only. State of the workflow deployment.
     *
     * Generated from protobuf field <code>.google.cloud.workflows.v1.Workflow.State state = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Output only. State of the workflow deployment.
     *
     * Generated from protobuf field <code>.google.cloud.workflows.v1.Workflow.State state = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Workflows\V1\Workflow\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Output only. The revision of the workflow.
     * A new revision of a workflow is created as a result of updating the
     * following properties of a workflow:
     * - [Service account][google.cloud.workflows.v1.Workflow.service_account]
     * - [Workflow code to be
     * executed][google.cloud.workflows.v1.Workflow.source_contents]
     * The format is "000001-a4d", where the first six characters define
     * the zero-padded revision ordinal number. They are followed by a hyphen and
     * three hexadecimal random characters.
     *
     * Generated from protobuf field <code>string revision_id = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getRevisionId()
    {
        return $this->revision_id;
    }

    /**
     * Output only. The revision of the workflow.
     * A new revision of a workflow is created as a result of updating the
     * following properties of a workflow:
     * - [Service account][google.cloud.workflows.v1.Workflow.service_account]
     * - [Workflow code to be
     * executed][google.cloud.workflows.v1.Workflow.source_contents]
     * The format is "000001-a4d", where the first six characters define
     * the zero-padded revision ordinal number. They are followed by a hyphen and
     * three hexadecimal random characters.
     *
     * Generated from protobuf field <code>string revision_id = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setRevisionId($var)
    {
        GPBUtil::checkString($var, True);
        $this->revision_id = $var;

        return $this;
    }

    /**
     * Output only. The timestamp for when the workflow was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Output only. The timestamp for when the workflow was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Output only. The timestamp for when the workflow was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * Output only. The timestamp for when the workflow was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

    /**
     * Output only. The timestamp for the latest revision of the workflow's
     * creation.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp revision_create_time = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getRevisionCreateTime()
    {
        return $this->revision_create_time;
    }

    public function hasRevisionCreateTime()
    {
        return isset($this->revision_create_time);
    }

    public function clearRevisionCreateTime()
    {
        unset($this->revision_create_time);
    }

    /**
     * Output only. The timestamp for the latest revision of the workflow's
     * creation.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp revision_create_time = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setRevisionCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->revision_create_time = $var;

        return $this;
    }

    /**
     * Labels associated with this workflow.
     * Labels can contain at most 64 entries. Keys and values can be no longer
     * than 63 characters and can only contain lowercase letters, numeric
     * characters, underscores, and dashes. Label keys must start with a letter.
     * International characters are allowed.
     *
     * Generated from protobuf field <code>map<string, string> labels = 8;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Labels associated with this workflow.
     * Labels can contain at most 64 entries. Keys and values can be no longer
     * than 63 characters and can only contain lowercase letters, numeric
     * characters, underscores, and dashes. Label keys must start with a letter.
     * International characters are allowed.
     *
     * Generated from protobuf field <code>map<string, string> labels = 8;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

    /**
     * The service account associated with the latest workflow version.
     * This service account represents the identity of the workflow and determines
     * what permissions the workflow has.
     * Format: projects/{project}/serviceAccounts/{account} or {account}
     * Using `-` as a wildcard for the `{project}` or not providing one at all
     * will infer the project from the account. The `{account}` value can be the
     * `email` address or the `unique_id` of the service account.
     * If not provided, workflow will use the project's default service account.
     * Modifying this field for an existing workflow results in a new workflow
     * revision.
     *
     * Generated from protobuf field <code>string service_account = 9;</code>
     * @return string
     */
    public function getServiceAccount()
    {
        return $this->service_account;
    }

    /**
     * The service account associated with the latest workflow version.
     * This service account represents the identity of the workflow and determines
     * what permissions the workflow has.
     * Format: projects/{project}/serviceAccounts/{account} or {account}
     * Using `-` as a wildcard for the `{project}` or not providing one at all
     * will infer the project from the account. The `{account}` value can be the
     * `email` address or the `unique_id` of the service account.
     * If not provided, workflow will use the project's default service account.
     * Modifying this field for an existing workflow results in a new workflow
     * revision.
     *
     * Generated from protobuf field <code>string service_account = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setServiceAccount($var)
    {
        GPBUtil::checkString($var, True);
        $this->service_account = $var;

        return $this;
    }

    /**
     * Workflow code to be executed. The size limit is 128KB.
     *
     * Generated from protobuf field <code>string source_contents = 10;</code>
     * @return string
     */
    public function getSourceContents()
    {
        return $this->readOneof(10);
    }

    public function hasSourceContents()
    {
        return $this->hasOneof(10);
    }

    /**
     * Workflow code to be executed. The size limit is 128KB.
     *
     * Generated from protobuf field <code>string source_contents = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setSourceContents($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(10, $var);

        return $this;
    }

    /**
     * Optional. The resource name of a KMS crypto key used to encrypt or decrypt
     * the data associated with the workflow.
     * Format:
     * projects/{project}/locations/{location}/keyRings/{keyRing}/cryptoKeys/{cryptoKey}
     * Using `-` as a wildcard for the `{project}` or not providing one at all
     * will infer the project from the account.
     * If not provided, data associated with the workflow will not be
     * CMEK-encrypted.
     *
     * Generated from protobuf field <code>string crypto_key_name = 11 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getCryptoKeyName()
    {
        return $this->crypto_key_name;
    }

    /**
     * Optional. The resource name of a KMS crypto key used to encrypt or decrypt
     * the data associated with the workflow.
     * Format:
     * projects/{project}/locations/{location}/keyRings/{keyRing}/cryptoKeys/{cryptoKey}
     * Using `-` as a wildcard for the `{project}` or not providing one at all
     * will infer the project from the account.
     * If not provided, data associated with the workflow will not be
     * CMEK-encrypted.
     *
     * Generated from protobuf field <code>string crypto_key_name = 11 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setCryptoKeyName($var)
    {
        GPBUtil::checkString($var, True);
        $this->crypto_key_name = $var;

        return $this;
    }

    /**
     * Output only. Error regarding the state of the workflow. For example, this
     * field will have error details if the execution data is unavailable due to
     * revoked KMS key permissions.
     *
     * Generated from protobuf field <code>.google.cloud.workflows.v1.Workflow.StateError state_error = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\Workflows\V1\Workflow\StateError|null
     */
    public function getStateError()
    {
        return $this->state_error;
    }

    public function hasStateError()
    {
        return isset($this->state_error);
    }

    public function clearStateError()
    {
        unset($this->state_error);
    }

    /**
     * Output only. Error regarding the state of the workflow. For example, this
     * field will have error details if the execution data is unavailable due to
     * revoked KMS key permissions.
     *
     * Generated from protobuf field <code>.google.cloud.workflows.v1.Workflow.StateError state_error = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\Workflows\V1\Workflow\StateError $var
     * @return $this
     */
    public function setStateError($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Workflows\V1\Workflow\StateError::class);
        $this->state_error = $var;

        return $this;
    }

    /**
     * Optional. Describes the level of platform logging to apply to calls and
     * call responses during executions of this workflow. If both the workflow and
     * the execution specify a logging level, the execution level takes
     * precedence.
     *
     * Generated from protobuf field <code>.google.cloud.workflows.v1.Workflow.CallLogLevel call_log_level = 13 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getCallLogLevel()
    {
        return $this->call_log_level;
    }

    /**
     * Optional. Describes the level of platform logging to apply to calls and
     * call responses during executions of this workflow. If both the workflow and
     * the execution specify a logging level, the execution level takes
     * precedence.
     *
     * Generated from protobuf field <code>.google.cloud.workflows.v1.Workflow.CallLogLevel call_log_level = 13 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setCallLogLevel($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Workflows\V1\Workflow\CallLogLevel::class);
        $this->call_log_level = $var;

        return $this;
    }

    /**
     * Optional. User-defined environment variables associated with this workflow
     * revision. This map has a maximum length of 20. Each string can take up to
     * 40KiB. Keys cannot be empty strings and cannot start with “GOOGLE” or
     * “WORKFLOWS".
     *
     * Generated from protobuf field <code>map<string, string> user_env_vars = 14 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getUserEnvVars()
    {
        return $this->user_env_vars;
    }

    /**
     * Optional. User-defined environment variables associated with this workflow
     * revision. This map has a maximum length of 20. Each string can take up to
     * 40KiB. Keys cannot be empty strings and cannot start with “GOOGLE” or
     * “WORKFLOWS".
     *
     * Generated from protobuf field <code>map<string, string> user_env_vars = 14 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setUserEnvVars($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->user_env_vars = $arr;

        return $this;
    }

    /**
     * @return string
     */
    public function getSourceCode()
    {
        return $this->whichOneof("source_code");
    }

}

