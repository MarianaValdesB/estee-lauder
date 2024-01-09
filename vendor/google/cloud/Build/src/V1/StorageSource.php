<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/cloudbuild/v1/cloudbuild.proto

namespace Google\Cloud\Build\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Location of the source in an archive file in Cloud Storage.
 *
 * Generated from protobuf message <code>google.devtools.cloudbuild.v1.StorageSource</code>
 */
class StorageSource extends \Google\Protobuf\Internal\Message
{
    /**
     * Cloud Storage bucket containing the source (see
     * [Bucket Name
     * Requirements](https://cloud.google.com/storage/docs/bucket-naming#requirements)).
     *
     * Generated from protobuf field <code>string bucket = 1;</code>
     */
    private $bucket = '';
    /**
     * Cloud Storage object containing the source.
     * This object must be a zipped (`.zip`) or gzipped archive file (`.tar.gz`)
     * containing source to build.
     *
     * Generated from protobuf field <code>string object = 2;</code>
     */
    private $object = '';
    /**
     * Cloud Storage generation for the object. If the generation is
     * omitted, the latest generation will be used.
     *
     * Generated from protobuf field <code>int64 generation = 3;</code>
     */
    private $generation = 0;
    /**
     * Option to specify the tool to fetch the source file for the build.
     *
     * Generated from protobuf field <code>.google.devtools.cloudbuild.v1.StorageSource.SourceFetcher source_fetcher = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $source_fetcher = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $bucket
     *           Cloud Storage bucket containing the source (see
     *           [Bucket Name
     *           Requirements](https://cloud.google.com/storage/docs/bucket-naming#requirements)).
     *     @type string $object
     *           Cloud Storage object containing the source.
     *           This object must be a zipped (`.zip`) or gzipped archive file (`.tar.gz`)
     *           containing source to build.
     *     @type int|string $generation
     *           Cloud Storage generation for the object. If the generation is
     *           omitted, the latest generation will be used.
     *     @type int $source_fetcher
     *           Option to specify the tool to fetch the source file for the build.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Cloudbuild\V1\Cloudbuild::initOnce();
        parent::__construct($data);
    }

    /**
     * Cloud Storage bucket containing the source (see
     * [Bucket Name
     * Requirements](https://cloud.google.com/storage/docs/bucket-naming#requirements)).
     *
     * Generated from protobuf field <code>string bucket = 1;</code>
     * @return string
     */
    public function getBucket()
    {
        return $this->bucket;
    }

    /**
     * Cloud Storage bucket containing the source (see
     * [Bucket Name
     * Requirements](https://cloud.google.com/storage/docs/bucket-naming#requirements)).
     *
     * Generated from protobuf field <code>string bucket = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setBucket($var)
    {
        GPBUtil::checkString($var, True);
        $this->bucket = $var;

        return $this;
    }

    /**
     * Cloud Storage object containing the source.
     * This object must be a zipped (`.zip`) or gzipped archive file (`.tar.gz`)
     * containing source to build.
     *
     * Generated from protobuf field <code>string object = 2;</code>
     * @return string
     */
    public function getObject()
    {
        return $this->object;
    }

    /**
     * Cloud Storage object containing the source.
     * This object must be a zipped (`.zip`) or gzipped archive file (`.tar.gz`)
     * containing source to build.
     *
     * Generated from protobuf field <code>string object = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setObject($var)
    {
        GPBUtil::checkString($var, True);
        $this->object = $var;

        return $this;
    }

    /**
     * Cloud Storage generation for the object. If the generation is
     * omitted, the latest generation will be used.
     *
     * Generated from protobuf field <code>int64 generation = 3;</code>
     * @return int|string
     */
    public function getGeneration()
    {
        return $this->generation;
    }

    /**
     * Cloud Storage generation for the object. If the generation is
     * omitted, the latest generation will be used.
     *
     * Generated from protobuf field <code>int64 generation = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setGeneration($var)
    {
        GPBUtil::checkInt64($var);
        $this->generation = $var;

        return $this;
    }

    /**
     * Option to specify the tool to fetch the source file for the build.
     *
     * Generated from protobuf field <code>.google.devtools.cloudbuild.v1.StorageSource.SourceFetcher source_fetcher = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getSourceFetcher()
    {
        return $this->source_fetcher;
    }

    /**
     * Option to specify the tool to fetch the source file for the build.
     *
     * Generated from protobuf field <code>.google.devtools.cloudbuild.v1.StorageSource.SourceFetcher source_fetcher = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setSourceFetcher($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Build\V1\StorageSource\SourceFetcher::class);
        $this->source_fetcher = $var;

        return $this;
    }

}
