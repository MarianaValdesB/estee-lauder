<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/automl/v1/text_segment.proto

namespace GPBMetadata\Google\Cloud\Automl\V1;

class TextSegment
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
)google/cloud/automl/v1/text_segment.protogoogle.cloud.automl.v1"H
TextSegment
content (	
start_offset (

end_offset (B�
com.google.cloud.automl.v1BTextSegmentProtoPZ2cloud.google.com/go/automl/apiv1/automlpb;automlpb�Google.Cloud.AutoML.V1�Google\\Cloud\\AutoMl\\V1�Google::Cloud::AutoML::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

