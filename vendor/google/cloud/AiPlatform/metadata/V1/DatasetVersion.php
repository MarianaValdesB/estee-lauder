<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/dataset_version.proto

namespace GPBMetadata\Google\Cloud\Aiplatform\V1;

class DatasetVersion
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
0google/cloud/aiplatform/v1/dataset_version.protogoogle.cloud.aiplatform.v1google/api/resource.protogoogle/protobuf/timestamp.proto"�
DatasetVersion
name (	B�A4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�A
etag (	#
big_query_dataset_name (	B�A:��A�
(aiplatform.googleapis.com/DatasetVersion\\projects/{project}/locations/{location}/datasets/{dataset}/datasetVersions/{dataset_version}B�
com.google.cloud.aiplatform.v1BDatasetVersionProtoPZ>cloud.google.com/go/aiplatform/apiv1/aiplatformpb;aiplatformpb�Google.Cloud.AIPlatform.V1�Google\\Cloud\\AIPlatform\\V1�Google::Cloud::AIPlatform::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}
