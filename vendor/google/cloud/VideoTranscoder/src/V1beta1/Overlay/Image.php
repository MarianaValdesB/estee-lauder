<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/video/transcoder/v1beta1/resources.proto

namespace Google\Cloud\Video\Transcoder\V1beta1\Overlay;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Overlaid jpeg image.
 *
 * Generated from protobuf message <code>google.cloud.video.transcoder.v1beta1.Overlay.Image</code>
 */
class Image extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. URI of the JPEG image in Cloud Storage. For example,
     * `gs://bucket/inputs/image.jpeg`. JPEG is the only supported image type.
     *
     * Generated from protobuf field <code>string uri = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $uri = '';
    /**
     * Normalized image resolution, based on output video resolution. Valid
     * values: `0.0`–`1.0`. To respect the original image aspect ratio, set
     * either `x` or `y` to `0.0`. To use the original image resolution, set
     * both `x` and `y` to `0.0`.
     *
     * Generated from protobuf field <code>.google.cloud.video.transcoder.v1beta1.Overlay.NormalizedCoordinate resolution = 2;</code>
     */
    private $resolution = null;
    /**
     * Target image opacity. Valid values are from  `1.0` (solid, default) to
     * `0.0` (transparent), exclusive. Set this to a value greater than `0.0`.
     *
     * Generated from protobuf field <code>double alpha = 3;</code>
     */
    private $alpha = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $uri
     *           Required. URI of the JPEG image in Cloud Storage. For example,
     *           `gs://bucket/inputs/image.jpeg`. JPEG is the only supported image type.
     *     @type \Google\Cloud\Video\Transcoder\V1beta1\Overlay\NormalizedCoordinate $resolution
     *           Normalized image resolution, based on output video resolution. Valid
     *           values: `0.0`–`1.0`. To respect the original image aspect ratio, set
     *           either `x` or `y` to `0.0`. To use the original image resolution, set
     *           both `x` and `y` to `0.0`.
     *     @type float $alpha
     *           Target image opacity. Valid values are from  `1.0` (solid, default) to
     *           `0.0` (transparent), exclusive. Set this to a value greater than `0.0`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Video\Transcoder\V1Beta1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. URI of the JPEG image in Cloud Storage. For example,
     * `gs://bucket/inputs/image.jpeg`. JPEG is the only supported image type.
     *
     * Generated from protobuf field <code>string uri = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * Required. URI of the JPEG image in Cloud Storage. For example,
     * `gs://bucket/inputs/image.jpeg`. JPEG is the only supported image type.
     *
     * Generated from protobuf field <code>string uri = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->uri = $var;

        return $this;
    }

    /**
     * Normalized image resolution, based on output video resolution. Valid
     * values: `0.0`–`1.0`. To respect the original image aspect ratio, set
     * either `x` or `y` to `0.0`. To use the original image resolution, set
     * both `x` and `y` to `0.0`.
     *
     * Generated from protobuf field <code>.google.cloud.video.transcoder.v1beta1.Overlay.NormalizedCoordinate resolution = 2;</code>
     * @return \Google\Cloud\Video\Transcoder\V1beta1\Overlay\NormalizedCoordinate|null
     */
    public function getResolution()
    {
        return $this->resolution;
    }

    public function hasResolution()
    {
        return isset($this->resolution);
    }

    public function clearResolution()
    {
        unset($this->resolution);
    }

    /**
     * Normalized image resolution, based on output video resolution. Valid
     * values: `0.0`–`1.0`. To respect the original image aspect ratio, set
     * either `x` or `y` to `0.0`. To use the original image resolution, set
     * both `x` and `y` to `0.0`.
     *
     * Generated from protobuf field <code>.google.cloud.video.transcoder.v1beta1.Overlay.NormalizedCoordinate resolution = 2;</code>
     * @param \Google\Cloud\Video\Transcoder\V1beta1\Overlay\NormalizedCoordinate $var
     * @return $this
     */
    public function setResolution($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Video\Transcoder\V1beta1\Overlay\NormalizedCoordinate::class);
        $this->resolution = $var;

        return $this;
    }

    /**
     * Target image opacity. Valid values are from  `1.0` (solid, default) to
     * `0.0` (transparent), exclusive. Set this to a value greater than `0.0`.
     *
     * Generated from protobuf field <code>double alpha = 3;</code>
     * @return float
     */
    public function getAlpha()
    {
        return $this->alpha;
    }

    /**
     * Target image opacity. Valid values are from  `1.0` (solid, default) to
     * `0.0` (transparent), exclusive. Set this to a value greater than `0.0`.
     *
     * Generated from protobuf field <code>double alpha = 3;</code>
     * @param float $var
     * @return $this
     */
    public function setAlpha($var)
    {
        GPBUtil::checkDouble($var);
        $this->alpha = $var;

        return $this;
    }

}


