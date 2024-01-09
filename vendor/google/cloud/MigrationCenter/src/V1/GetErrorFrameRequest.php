<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/migrationcenter/v1/migrationcenter.proto

namespace Google\Cloud\MigrationCenter\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>google.cloud.migrationcenter.v1.GetErrorFrameRequest</code>
 */
class GetErrorFrameRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the frame to retrieve.
     * Format:
     * projects/{project}/locations/{location}/sources/{source}/errorFrames/{error_frame}
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';
    /**
     * Optional. An optional view mode to control the level of details for the
     * frame. The default is a basic frame view.
     *
     * Generated from protobuf field <code>.google.cloud.migrationcenter.v1.ErrorFrameView view = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $view = 0;

    /**
     * @param string $name Required. The name of the frame to retrieve.
     *                     Format:
     *                     projects/{project}/locations/{location}/sources/{source}/errorFrames/{error_frame}
     *                     Please see {@see MigrationCenterClient::errorFrameName()} for help formatting this field.
     *
     * @return \Google\Cloud\MigrationCenter\V1\GetErrorFrameRequest
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
     *           Required. The name of the frame to retrieve.
     *           Format:
     *           projects/{project}/locations/{location}/sources/{source}/errorFrames/{error_frame}
     *     @type int $view
     *           Optional. An optional view mode to control the level of details for the
     *           frame. The default is a basic frame view.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Migrationcenter\V1\Migrationcenter::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the frame to retrieve.
     * Format:
     * projects/{project}/locations/{location}/sources/{source}/errorFrames/{error_frame}
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the frame to retrieve.
     * Format:
     * projects/{project}/locations/{location}/sources/{source}/errorFrames/{error_frame}
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
     * Optional. An optional view mode to control the level of details for the
     * frame. The default is a basic frame view.
     *
     * Generated from protobuf field <code>.google.cloud.migrationcenter.v1.ErrorFrameView view = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getView()
    {
        return $this->view;
    }

    /**
     * Optional. An optional view mode to control the level of details for the
     * frame. The default is a basic frame view.
     *
     * Generated from protobuf field <code>.google.cloud.migrationcenter.v1.ErrorFrameView view = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setView($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\MigrationCenter\V1\ErrorFrameView::class);
        $this->view = $var;

        return $this;
    }

}
