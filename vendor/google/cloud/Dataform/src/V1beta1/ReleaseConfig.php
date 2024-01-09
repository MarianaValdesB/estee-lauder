<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataform/v1beta1/dataform.proto

namespace Google\Cloud\Dataform\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a Dataform release configuration.
 *
 * Generated from protobuf message <code>google.cloud.dataform.v1beta1.ReleaseConfig</code>
 */
class ReleaseConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The release config's name.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $name = '';
    /**
     * Required. Git commit/tag/branch name at which the repository should be
     * compiled. Must exist in the remote repository. Examples:
     * - a commit SHA: `12ade345`
     * - a tag: `tag1`
     * - a branch name: `branch1`
     *
     * Generated from protobuf field <code>string git_commitish = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $git_commitish = '';
    /**
     * Optional. If set, fields of `code_compilation_config` override the default
     * compilation settings that are specified in dataform.json.
     *
     * Generated from protobuf field <code>.google.cloud.dataform.v1beta1.CodeCompilationConfig code_compilation_config = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $code_compilation_config = null;
    /**
     * Optional. Optional schedule (in cron format) for automatic creation of
     * compilation results.
     *
     * Generated from protobuf field <code>string cron_schedule = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $cron_schedule = '';
    /**
     * Optional. Specifies the time zone to be used when interpreting
     * cron_schedule. Must be a time zone name from the time zone database
     * (https://en.wikipedia.org/wiki/List_of_tz_database_time_zones). If left
     * unspecified, the default is UTC.
     *
     * Generated from protobuf field <code>string time_zone = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $time_zone = '';
    /**
     * Output only. Records of the 10 most recent scheduled release attempts,
     * ordered in in descending order of `release_time`. Updated whenever
     * automatic creation of a compilation result is triggered by cron_schedule.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataform.v1beta1.ReleaseConfig.ScheduledReleaseRecord recent_scheduled_release_records = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $recent_scheduled_release_records;
    /**
     * Optional. The name of the currently released compilation result for this
     * release config. This value is updated when a compilation result is created
     * from this release config, or when this resource is updated by API call
     * (perhaps to roll back to an earlier release). The compilation result must
     * have been created using this release config. Must be in the format
     * `projects/&#42;&#47;locations/&#42;&#47;repositories/&#42;&#47;compilationResults/&#42;`.
     *
     * Generated from protobuf field <code>string release_compilation_result = 6 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     */
    private $release_compilation_result = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. The release config's name.
     *     @type string $git_commitish
     *           Required. Git commit/tag/branch name at which the repository should be
     *           compiled. Must exist in the remote repository. Examples:
     *           - a commit SHA: `12ade345`
     *           - a tag: `tag1`
     *           - a branch name: `branch1`
     *     @type \Google\Cloud\Dataform\V1beta1\CodeCompilationConfig $code_compilation_config
     *           Optional. If set, fields of `code_compilation_config` override the default
     *           compilation settings that are specified in dataform.json.
     *     @type string $cron_schedule
     *           Optional. Optional schedule (in cron format) for automatic creation of
     *           compilation results.
     *     @type string $time_zone
     *           Optional. Specifies the time zone to be used when interpreting
     *           cron_schedule. Must be a time zone name from the time zone database
     *           (https://en.wikipedia.org/wiki/List_of_tz_database_time_zones). If left
     *           unspecified, the default is UTC.
     *     @type array<\Google\Cloud\Dataform\V1beta1\ReleaseConfig\ScheduledReleaseRecord>|\Google\Protobuf\Internal\RepeatedField $recent_scheduled_release_records
     *           Output only. Records of the 10 most recent scheduled release attempts,
     *           ordered in in descending order of `release_time`. Updated whenever
     *           automatic creation of a compilation result is triggered by cron_schedule.
     *     @type string $release_compilation_result
     *           Optional. The name of the currently released compilation result for this
     *           release config. This value is updated when a compilation result is created
     *           from this release config, or when this resource is updated by API call
     *           (perhaps to roll back to an earlier release). The compilation result must
     *           have been created using this release config. Must be in the format
     *           `projects/&#42;&#47;locations/&#42;&#47;repositories/&#42;&#47;compilationResults/&#42;`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataform\V1Beta1\Dataform::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The release config's name.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. The release config's name.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Required. Git commit/tag/branch name at which the repository should be
     * compiled. Must exist in the remote repository. Examples:
     * - a commit SHA: `12ade345`
     * - a tag: `tag1`
     * - a branch name: `branch1`
     *
     * Generated from protobuf field <code>string git_commitish = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getGitCommitish()
    {
        return $this->git_commitish;
    }

    /**
     * Required. Git commit/tag/branch name at which the repository should be
     * compiled. Must exist in the remote repository. Examples:
     * - a commit SHA: `12ade345`
     * - a tag: `tag1`
     * - a branch name: `branch1`
     *
     * Generated from protobuf field <code>string git_commitish = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setGitCommitish($var)
    {
        GPBUtil::checkString($var, True);
        $this->git_commitish = $var;

        return $this;
    }

    /**
     * Optional. If set, fields of `code_compilation_config` override the default
     * compilation settings that are specified in dataform.json.
     *
     * Generated from protobuf field <code>.google.cloud.dataform.v1beta1.CodeCompilationConfig code_compilation_config = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Dataform\V1beta1\CodeCompilationConfig|null
     */
    public function getCodeCompilationConfig()
    {
        return $this->code_compilation_config;
    }

    public function hasCodeCompilationConfig()
    {
        return isset($this->code_compilation_config);
    }

    public function clearCodeCompilationConfig()
    {
        unset($this->code_compilation_config);
    }

    /**
     * Optional. If set, fields of `code_compilation_config` override the default
     * compilation settings that are specified in dataform.json.
     *
     * Generated from protobuf field <code>.google.cloud.dataform.v1beta1.CodeCompilationConfig code_compilation_config = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Dataform\V1beta1\CodeCompilationConfig $var
     * @return $this
     */
    public function setCodeCompilationConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataform\V1beta1\CodeCompilationConfig::class);
        $this->code_compilation_config = $var;

        return $this;
    }

    /**
     * Optional. Optional schedule (in cron format) for automatic creation of
     * compilation results.
     *
     * Generated from protobuf field <code>string cron_schedule = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getCronSchedule()
    {
        return $this->cron_schedule;
    }

    /**
     * Optional. Optional schedule (in cron format) for automatic creation of
     * compilation results.
     *
     * Generated from protobuf field <code>string cron_schedule = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setCronSchedule($var)
    {
        GPBUtil::checkString($var, True);
        $this->cron_schedule = $var;

        return $this;
    }

    /**
     * Optional. Specifies the time zone to be used when interpreting
     * cron_schedule. Must be a time zone name from the time zone database
     * (https://en.wikipedia.org/wiki/List_of_tz_database_time_zones). If left
     * unspecified, the default is UTC.
     *
     * Generated from protobuf field <code>string time_zone = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getTimeZone()
    {
        return $this->time_zone;
    }

    /**
     * Optional. Specifies the time zone to be used when interpreting
     * cron_schedule. Must be a time zone name from the time zone database
     * (https://en.wikipedia.org/wiki/List_of_tz_database_time_zones). If left
     * unspecified, the default is UTC.
     *
     * Generated from protobuf field <code>string time_zone = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setTimeZone($var)
    {
        GPBUtil::checkString($var, True);
        $this->time_zone = $var;

        return $this;
    }

    /**
     * Output only. Records of the 10 most recent scheduled release attempts,
     * ordered in in descending order of `release_time`. Updated whenever
     * automatic creation of a compilation result is triggered by cron_schedule.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataform.v1beta1.ReleaseConfig.ScheduledReleaseRecord recent_scheduled_release_records = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRecentScheduledReleaseRecords()
    {
        return $this->recent_scheduled_release_records;
    }

    /**
     * Output only. Records of the 10 most recent scheduled release attempts,
     * ordered in in descending order of `release_time`. Updated whenever
     * automatic creation of a compilation result is triggered by cron_schedule.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataform.v1beta1.ReleaseConfig.ScheduledReleaseRecord recent_scheduled_release_records = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param array<\Google\Cloud\Dataform\V1beta1\ReleaseConfig\ScheduledReleaseRecord>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRecentScheduledReleaseRecords($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dataform\V1beta1\ReleaseConfig\ScheduledReleaseRecord::class);
        $this->recent_scheduled_release_records = $arr;

        return $this;
    }

    /**
     * Optional. The name of the currently released compilation result for this
     * release config. This value is updated when a compilation result is created
     * from this release config, or when this resource is updated by API call
     * (perhaps to roll back to an earlier release). The compilation result must
     * have been created using this release config. Must be in the format
     * `projects/&#42;&#47;locations/&#42;&#47;repositories/&#42;&#47;compilationResults/&#42;`.
     *
     * Generated from protobuf field <code>string release_compilation_result = 6 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getReleaseCompilationResult()
    {
        return $this->release_compilation_result;
    }

    /**
     * Optional. The name of the currently released compilation result for this
     * release config. This value is updated when a compilation result is created
     * from this release config, or when this resource is updated by API call
     * (perhaps to roll back to an earlier release). The compilation result must
     * have been created using this release config. Must be in the format
     * `projects/&#42;&#47;locations/&#42;&#47;repositories/&#42;&#47;compilationResults/&#42;`.
     *
     * Generated from protobuf field <code>string release_compilation_result = 6 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setReleaseCompilationResult($var)
    {
        GPBUtil::checkString($var, True);
        $this->release_compilation_result = $var;

        return $this;
    }

}
