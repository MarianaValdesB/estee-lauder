<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/schedule.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An instance of a Schedule periodically schedules runs to make API calls based
 * on user specified time specification and API request type.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.Schedule</code>
 */
class Schedule extends \Google\Protobuf\Internal\Message
{
    /**
     * Immutable. The resource name of the Schedule.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    private $name = '';
    /**
     * Required. User provided name of the Schedule.
     * The name can be up to 128 characters long and can consist of any UTF-8
     * characters.
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $display_name = '';
    /**
     * Optional. Timestamp after which the first run can be scheduled.
     * Default to Schedule create time if not specified.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $start_time = null;
    /**
     * Optional. Timestamp after which no new runs can be scheduled.
     * If specified, The schedule will be completed when either
     * end_time is reached or when scheduled_run_count >= max_run_count.
     * If not specified, new runs will keep getting scheduled until this Schedule
     * is paused or deleted. Already scheduled runs will be allowed to complete.
     * Unset if not specified.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $end_time = null;
    /**
     * Optional. Maximum run count of the schedule.
     * If specified, The schedule will be completed when either
     * started_run_count >= max_run_count or when end_time is reached.
     * If not specified, new runs will keep getting scheduled until this Schedule
     * is paused or deleted. Already scheduled runs will be allowed to complete.
     * Unset if not specified.
     *
     * Generated from protobuf field <code>int64 max_run_count = 16 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $max_run_count = 0;
    /**
     * Output only. The number of runs started by this schedule.
     *
     * Generated from protobuf field <code>int64 started_run_count = 17 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $started_run_count = 0;
    /**
     * Output only. The state of this Schedule.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.Schedule.State state = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $state = 0;
    /**
     * Output only. Timestamp when this Schedule was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $create_time = null;
    /**
     * Output only. Timestamp when this Schedule was updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 19 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $update_time = null;
    /**
     * Output only. Timestamp when this Schedule should schedule the next run.
     * Having a next_run_time in the past means the runs are being started
     * behind schedule.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp next_run_time = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $next_run_time = null;
    /**
     * Output only. Timestamp when this Schedule was last paused.
     * Unset if never paused.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_pause_time = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $last_pause_time = null;
    /**
     * Output only. Timestamp when this Schedule was last resumed.
     * Unset if never resumed from pause.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_resume_time = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $last_resume_time = null;
    /**
     * Required. Maximum number of runs that can be started concurrently for this
     * Schedule. This is the limit for starting the scheduled requests and not the
     * execution of the operations/jobs created by the requests (if applicable).
     *
     * Generated from protobuf field <code>int64 max_concurrent_run_count = 11 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $max_concurrent_run_count = 0;
    /**
     * Optional. Whether new scheduled runs can be queued when max_concurrent_runs
     * limit is reached. If set to true, new runs will be queued instead of
     * skipped. Default to false.
     *
     * Generated from protobuf field <code>bool allow_queueing = 12 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $allow_queueing = false;
    /**
     * Output only. Whether to backfill missed runs when the schedule is resumed
     * from PAUSED state. If set to true, all missed runs will be scheduled. New
     * runs will be scheduled after the backfill is complete. Default to false.
     *
     * Generated from protobuf field <code>bool catch_up = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $catch_up = false;
    /**
     * Output only. Response of the last scheduled run.
     * This is the response for starting the scheduled requests and not the
     * execution of the operations/jobs created by the requests (if applicable).
     * Unset if no run has been scheduled yet.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.Schedule.RunResponse last_scheduled_run_response = 18 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $last_scheduled_run_response = null;
    protected $time_specification;
    protected $request;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $cron
     *           Cron schedule (https://en.wikipedia.org/wiki/Cron) to launch scheduled
     *           runs. To explicitly set a timezone to the cron tab, apply a prefix in the
     *           cron tab: "CRON_TZ=${IANA_TIME_ZONE}" or "TZ=${IANA_TIME_ZONE}".
     *           The ${IANA_TIME_ZONE} may only be a valid string from IANA time zone
     *           database. For example, "CRON_TZ=America/New_York 1 * * * *", or
     *           "TZ=America/New_York 1 * * * *".
     *     @type \Google\Cloud\AIPlatform\V1\CreatePipelineJobRequest $create_pipeline_job_request
     *           Request for
     *           [PipelineService.CreatePipelineJob][google.cloud.aiplatform.v1.PipelineService.CreatePipelineJob].
     *           CreatePipelineJobRequest.parent field is required (format:
     *           projects/{project}/locations/{location}).
     *     @type string $name
     *           Immutable. The resource name of the Schedule.
     *     @type string $display_name
     *           Required. User provided name of the Schedule.
     *           The name can be up to 128 characters long and can consist of any UTF-8
     *           characters.
     *     @type \Google\Protobuf\Timestamp $start_time
     *           Optional. Timestamp after which the first run can be scheduled.
     *           Default to Schedule create time if not specified.
     *     @type \Google\Protobuf\Timestamp $end_time
     *           Optional. Timestamp after which no new runs can be scheduled.
     *           If specified, The schedule will be completed when either
     *           end_time is reached or when scheduled_run_count >= max_run_count.
     *           If not specified, new runs will keep getting scheduled until this Schedule
     *           is paused or deleted. Already scheduled runs will be allowed to complete.
     *           Unset if not specified.
     *     @type int|string $max_run_count
     *           Optional. Maximum run count of the schedule.
     *           If specified, The schedule will be completed when either
     *           started_run_count >= max_run_count or when end_time is reached.
     *           If not specified, new runs will keep getting scheduled until this Schedule
     *           is paused or deleted. Already scheduled runs will be allowed to complete.
     *           Unset if not specified.
     *     @type int|string $started_run_count
     *           Output only. The number of runs started by this schedule.
     *     @type int $state
     *           Output only. The state of this Schedule.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. Timestamp when this Schedule was created.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. Timestamp when this Schedule was updated.
     *     @type \Google\Protobuf\Timestamp $next_run_time
     *           Output only. Timestamp when this Schedule should schedule the next run.
     *           Having a next_run_time in the past means the runs are being started
     *           behind schedule.
     *     @type \Google\Protobuf\Timestamp $last_pause_time
     *           Output only. Timestamp when this Schedule was last paused.
     *           Unset if never paused.
     *     @type \Google\Protobuf\Timestamp $last_resume_time
     *           Output only. Timestamp when this Schedule was last resumed.
     *           Unset if never resumed from pause.
     *     @type int|string $max_concurrent_run_count
     *           Required. Maximum number of runs that can be started concurrently for this
     *           Schedule. This is the limit for starting the scheduled requests and not the
     *           execution of the operations/jobs created by the requests (if applicable).
     *     @type bool $allow_queueing
     *           Optional. Whether new scheduled runs can be queued when max_concurrent_runs
     *           limit is reached. If set to true, new runs will be queued instead of
     *           skipped. Default to false.
     *     @type bool $catch_up
     *           Output only. Whether to backfill missed runs when the schedule is resumed
     *           from PAUSED state. If set to true, all missed runs will be scheduled. New
     *           runs will be scheduled after the backfill is complete. Default to false.
     *     @type \Google\Cloud\AIPlatform\V1\Schedule\RunResponse $last_scheduled_run_response
     *           Output only. Response of the last scheduled run.
     *           This is the response for starting the scheduled requests and not the
     *           execution of the operations/jobs created by the requests (if applicable).
     *           Unset if no run has been scheduled yet.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\Schedule::initOnce();
        parent::__construct($data);
    }

    /**
     * Cron schedule (https://en.wikipedia.org/wiki/Cron) to launch scheduled
     * runs. To explicitly set a timezone to the cron tab, apply a prefix in the
     * cron tab: "CRON_TZ=${IANA_TIME_ZONE}" or "TZ=${IANA_TIME_ZONE}".
     * The ${IANA_TIME_ZONE} may only be a valid string from IANA time zone
     * database. For example, "CRON_TZ=America/New_York 1 * * * *", or
     * "TZ=America/New_York 1 * * * *".
     *
     * Generated from protobuf field <code>string cron = 10;</code>
     * @return string
     */
    public function getCron()
    {
        return $this->readOneof(10);
    }

    public function hasCron()
    {
        return $this->hasOneof(10);
    }

    /**
     * Cron schedule (https://en.wikipedia.org/wiki/Cron) to launch scheduled
     * runs. To explicitly set a timezone to the cron tab, apply a prefix in the
     * cron tab: "CRON_TZ=${IANA_TIME_ZONE}" or "TZ=${IANA_TIME_ZONE}".
     * The ${IANA_TIME_ZONE} may only be a valid string from IANA time zone
     * database. For example, "CRON_TZ=America/New_York 1 * * * *", or
     * "TZ=America/New_York 1 * * * *".
     *
     * Generated from protobuf field <code>string cron = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setCron($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(10, $var);

        return $this;
    }

    /**
     * Request for
     * [PipelineService.CreatePipelineJob][google.cloud.aiplatform.v1.PipelineService.CreatePipelineJob].
     * CreatePipelineJobRequest.parent field is required (format:
     * projects/{project}/locations/{location}).
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.CreatePipelineJobRequest create_pipeline_job_request = 14;</code>
     * @return \Google\Cloud\AIPlatform\V1\CreatePipelineJobRequest|null
     */
    public function getCreatePipelineJobRequest()
    {
        return $this->readOneof(14);
    }

    public function hasCreatePipelineJobRequest()
    {
        return $this->hasOneof(14);
    }

    /**
     * Request for
     * [PipelineService.CreatePipelineJob][google.cloud.aiplatform.v1.PipelineService.CreatePipelineJob].
     * CreatePipelineJobRequest.parent field is required (format:
     * projects/{project}/locations/{location}).
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.CreatePipelineJobRequest create_pipeline_job_request = 14;</code>
     * @param \Google\Cloud\AIPlatform\V1\CreatePipelineJobRequest $var
     * @return $this
     */
    public function setCreatePipelineJobRequest($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\CreatePipelineJobRequest::class);
        $this->writeOneof(14, $var);

        return $this;
    }

    /**
     * Immutable. The resource name of the Schedule.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Immutable. The resource name of the Schedule.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IMMUTABLE];</code>
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
     * Required. User provided name of the Schedule.
     * The name can be up to 128 characters long and can consist of any UTF-8
     * characters.
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Required. User provided name of the Schedule.
     * The name can be up to 128 characters long and can consist of any UTF-8
     * characters.
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
     * Optional. Timestamp after which the first run can be scheduled.
     * Default to Schedule create time if not specified.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getStartTime()
    {
        return $this->start_time;
    }

    public function hasStartTime()
    {
        return isset($this->start_time);
    }

    public function clearStartTime()
    {
        unset($this->start_time);
    }

    /**
     * Optional. Timestamp after which the first run can be scheduled.
     * Default to Schedule create time if not specified.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setStartTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->start_time = $var;

        return $this;
    }

    /**
     * Optional. Timestamp after which no new runs can be scheduled.
     * If specified, The schedule will be completed when either
     * end_time is reached or when scheduled_run_count >= max_run_count.
     * If not specified, new runs will keep getting scheduled until this Schedule
     * is paused or deleted. Already scheduled runs will be allowed to complete.
     * Unset if not specified.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getEndTime()
    {
        return $this->end_time;
    }

    public function hasEndTime()
    {
        return isset($this->end_time);
    }

    public function clearEndTime()
    {
        unset($this->end_time);
    }

    /**
     * Optional. Timestamp after which no new runs can be scheduled.
     * If specified, The schedule will be completed when either
     * end_time is reached or when scheduled_run_count >= max_run_count.
     * If not specified, new runs will keep getting scheduled until this Schedule
     * is paused or deleted. Already scheduled runs will be allowed to complete.
     * Unset if not specified.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setEndTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->end_time = $var;

        return $this;
    }

    /**
     * Optional. Maximum run count of the schedule.
     * If specified, The schedule will be completed when either
     * started_run_count >= max_run_count or when end_time is reached.
     * If not specified, new runs will keep getting scheduled until this Schedule
     * is paused or deleted. Already scheduled runs will be allowed to complete.
     * Unset if not specified.
     *
     * Generated from protobuf field <code>int64 max_run_count = 16 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int|string
     */
    public function getMaxRunCount()
    {
        return $this->max_run_count;
    }

    /**
     * Optional. Maximum run count of the schedule.
     * If specified, The schedule will be completed when either
     * started_run_count >= max_run_count or when end_time is reached.
     * If not specified, new runs will keep getting scheduled until this Schedule
     * is paused or deleted. Already scheduled runs will be allowed to complete.
     * Unset if not specified.
     *
     * Generated from protobuf field <code>int64 max_run_count = 16 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int|string $var
     * @return $this
     */
    public function setMaxRunCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->max_run_count = $var;

        return $this;
    }

    /**
     * Output only. The number of runs started by this schedule.
     *
     * Generated from protobuf field <code>int64 started_run_count = 17 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getStartedRunCount()
    {
        return $this->started_run_count;
    }

    /**
     * Output only. The number of runs started by this schedule.
     *
     * Generated from protobuf field <code>int64 started_run_count = 17 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setStartedRunCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->started_run_count = $var;

        return $this;
    }

    /**
     * Output only. The state of this Schedule.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.Schedule.State state = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Output only. The state of this Schedule.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.Schedule.State state = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\AIPlatform\V1\Schedule\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Output only. Timestamp when this Schedule was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. Timestamp when this Schedule was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. Timestamp when this Schedule was updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 19 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. Timestamp when this Schedule was updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 19 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. Timestamp when this Schedule should schedule the next run.
     * Having a next_run_time in the past means the runs are being started
     * behind schedule.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp next_run_time = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getNextRunTime()
    {
        return $this->next_run_time;
    }

    public function hasNextRunTime()
    {
        return isset($this->next_run_time);
    }

    public function clearNextRunTime()
    {
        unset($this->next_run_time);
    }

    /**
     * Output only. Timestamp when this Schedule should schedule the next run.
     * Having a next_run_time in the past means the runs are being started
     * behind schedule.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp next_run_time = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setNextRunTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->next_run_time = $var;

        return $this;
    }

    /**
     * Output only. Timestamp when this Schedule was last paused.
     * Unset if never paused.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_pause_time = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getLastPauseTime()
    {
        return $this->last_pause_time;
    }

    public function hasLastPauseTime()
    {
        return isset($this->last_pause_time);
    }

    public function clearLastPauseTime()
    {
        unset($this->last_pause_time);
    }

    /**
     * Output only. Timestamp when this Schedule was last paused.
     * Unset if never paused.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_pause_time = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setLastPauseTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->last_pause_time = $var;

        return $this;
    }

    /**
     * Output only. Timestamp when this Schedule was last resumed.
     * Unset if never resumed from pause.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_resume_time = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getLastResumeTime()
    {
        return $this->last_resume_time;
    }

    public function hasLastResumeTime()
    {
        return isset($this->last_resume_time);
    }

    public function clearLastResumeTime()
    {
        unset($this->last_resume_time);
    }

    /**
     * Output only. Timestamp when this Schedule was last resumed.
     * Unset if never resumed from pause.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_resume_time = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setLastResumeTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->last_resume_time = $var;

        return $this;
    }

    /**
     * Required. Maximum number of runs that can be started concurrently for this
     * Schedule. This is the limit for starting the scheduled requests and not the
     * execution of the operations/jobs created by the requests (if applicable).
     *
     * Generated from protobuf field <code>int64 max_concurrent_run_count = 11 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int|string
     */
    public function getMaxConcurrentRunCount()
    {
        return $this->max_concurrent_run_count;
    }

    /**
     * Required. Maximum number of runs that can be started concurrently for this
     * Schedule. This is the limit for starting the scheduled requests and not the
     * execution of the operations/jobs created by the requests (if applicable).
     *
     * Generated from protobuf field <code>int64 max_concurrent_run_count = 11 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int|string $var
     * @return $this
     */
    public function setMaxConcurrentRunCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->max_concurrent_run_count = $var;

        return $this;
    }

    /**
     * Optional. Whether new scheduled runs can be queued when max_concurrent_runs
     * limit is reached. If set to true, new runs will be queued instead of
     * skipped. Default to false.
     *
     * Generated from protobuf field <code>bool allow_queueing = 12 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getAllowQueueing()
    {
        return $this->allow_queueing;
    }

    /**
     * Optional. Whether new scheduled runs can be queued when max_concurrent_runs
     * limit is reached. If set to true, new runs will be queued instead of
     * skipped. Default to false.
     *
     * Generated from protobuf field <code>bool allow_queueing = 12 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setAllowQueueing($var)
    {
        GPBUtil::checkBool($var);
        $this->allow_queueing = $var;

        return $this;
    }

    /**
     * Output only. Whether to backfill missed runs when the schedule is resumed
     * from PAUSED state. If set to true, all missed runs will be scheduled. New
     * runs will be scheduled after the backfill is complete. Default to false.
     *
     * Generated from protobuf field <code>bool catch_up = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return bool
     */
    public function getCatchUp()
    {
        return $this->catch_up;
    }

    /**
     * Output only. Whether to backfill missed runs when the schedule is resumed
     * from PAUSED state. If set to true, all missed runs will be scheduled. New
     * runs will be scheduled after the backfill is complete. Default to false.
     *
     * Generated from protobuf field <code>bool catch_up = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param bool $var
     * @return $this
     */
    public function setCatchUp($var)
    {
        GPBUtil::checkBool($var);
        $this->catch_up = $var;

        return $this;
    }

    /**
     * Output only. Response of the last scheduled run.
     * This is the response for starting the scheduled requests and not the
     * execution of the operations/jobs created by the requests (if applicable).
     * Unset if no run has been scheduled yet.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.Schedule.RunResponse last_scheduled_run_response = 18 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\AIPlatform\V1\Schedule\RunResponse|null
     */
    public function getLastScheduledRunResponse()
    {
        return $this->last_scheduled_run_response;
    }

    public function hasLastScheduledRunResponse()
    {
        return isset($this->last_scheduled_run_response);
    }

    public function clearLastScheduledRunResponse()
    {
        unset($this->last_scheduled_run_response);
    }

    /**
     * Output only. Response of the last scheduled run.
     * This is the response for starting the scheduled requests and not the
     * execution of the operations/jobs created by the requests (if applicable).
     * Unset if no run has been scheduled yet.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.Schedule.RunResponse last_scheduled_run_response = 18 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\AIPlatform\V1\Schedule\RunResponse $var
     * @return $this
     */
    public function setLastScheduledRunResponse($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\Schedule\RunResponse::class);
        $this->last_scheduled_run_response = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getTimeSpecification()
    {
        return $this->whichOneof("time_specification");
    }

    /**
     * @return string
     */
    public function getRequest()
    {
        return $this->whichOneof("request");
    }

}

