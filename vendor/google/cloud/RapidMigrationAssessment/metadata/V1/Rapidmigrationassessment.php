<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/rapidmigrationassessment/v1/rapidmigrationassessment.proto

namespace GPBMetadata\Google\Cloud\Rapidmigrationassessment\V1;

class Rapidmigrationassessment
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Rapidmigrationassessment\V1\ApiEntities::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�&
Ggoogle/cloud/rapidmigrationassessment/v1/rapidmigrationassessment.proto(google.cloud.rapidmigrationassessment.v1google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto;google/cloud/rapidmigrationassessment/v1/api_entities.proto#google/longrunning/operations.proto google/protobuf/field_mask.protogoogle/protobuf/timestamp.proto"�
CreateAnnotationRequest9
parent (	B)�A�A#
!locations.googleapis.com/LocationM

annotation (24.google.cloud.rapidmigrationassessment.v1.AnnotationB�A

request_id (	B�A"`
GetAnnotationRequestH
name (	B:�A�A4
2rapidmigrationassessment.googleapis.com/Annotation"�
CreateCollectorRequest9
parent (	B)�A�A#
!locations.googleapis.com/Location
collector_id (	B�AK
	collector (23.google.cloud.rapidmigrationassessment.v1.CollectorB�A

request_id (	B�A"�
ListCollectorsRequest9
parent (	B)�A�A#
!locations.googleapis.com/Location
	page_size (

page_token (	
filter (	
order_by (	"�
ListCollectorsResponseG

collectors (23.google.cloud.rapidmigrationassessment.v1.Collector
next_page_token (	
unreachable (	"^
GetCollectorRequestG
name (	B9�A�A3
1rapidmigrationassessment.googleapis.com/Collector"z
DeleteCollectorRequestG
name (	B9�A�A3
1rapidmigrationassessment.googleapis.com/Collector

request_id (	B�A"�
UpdateCollectorRequest4
update_mask (2.google.protobuf.FieldMaskB�AK
	collector (23.google.cloud.rapidmigrationassessment.v1.CollectorB�A

request_id (	B�A"z
ResumeCollectorRequestG
name (	B9�A�A3
1rapidmigrationassessment.googleapis.com/Collector

request_id (	B�A"|
RegisterCollectorRequestG
name (	B9�A�A3
1rapidmigrationassessment.googleapis.com/Collector

request_id (	B�A"y
PauseCollectorRequestG
name (	B9�A�A3
1rapidmigrationassessment.googleapis.com/Collector

request_id (	B�A"�
OperationMetadata4
create_time (2.google.protobuf.TimestampB�A1
end_time (2.google.protobuf.TimestampB�A
target (	B�A
verb (	B�A
status_message (	B�A#
requested_cancellation (B�A
api_version (	B�A2�
RapidMigrationAssessment�
CreateCollector@.google.cloud.rapidmigrationassessment.v1.CreateCollectorRequest.google.longrunning.Operation"����;"./v1/{parent=projects/*/locations/*}/collectors:	collector�Aparent,collector,collector_id�A
	CollectorOperationMetadata�
CreateAnnotationA.google.cloud.rapidmigrationassessment.v1.CreateAnnotationRequest.google.longrunning.Operation"y���="//v1/{parent=projects/*/locations/*}/annotations:
annotation�Aparent,annotation�A

AnnotationOperationMetadata�

ListCollectors?.google.cloud.rapidmigrationassessment.v1.ListCollectorsRequest@.google.cloud.rapidmigrationassessment.v1.ListCollectorsResponse"?���0./v1/{parent=projects/*/locations/*}/collectors�Aparent�
GetCollector=.google.cloud.rapidmigrationassessment.v1.GetCollectorRequest3.google.cloud.rapidmigrationassessment.v1.Collector"=���0./v1/{name=projects/*/locations/*/collectors/*}�Aname�
UpdateCollector@.google.cloud.rapidmigrationassessment.v1.UpdateCollectorRequest.google.longrunning.Operation"����E28/v1/{collector.name=projects/*/locations/*/collectors/*}:	collector�Acollector,update_mask�A
	CollectorOperationMetadata�
DeleteCollector@.google.cloud.rapidmigrationassessment.v1.DeleteCollectorRequest.google.longrunning.Operation"^���0*./v1/{name=projects/*/locations/*/collectors/*}�Aname�A
	CollectorOperationMetadata�
ResumeCollector@.google.cloud.rapidmigrationassessment.v1.ResumeCollectorRequest.google.longrunning.Operation"h���:"5/v1/{name=projects/*/locations/*/collectors/*}:resume:*�Aname�A
	CollectorOperationMetadata�
RegisterCollectorB.google.cloud.rapidmigrationassessment.v1.RegisterCollectorRequest.google.longrunning.Operation"j���<"7/v1/{name=projects/*/locations/*/collectors/*}:register:*�Aname�A
	CollectorOperationMetadata�
PauseCollector?.google.cloud.rapidmigrationassessment.v1.PauseCollectorRequest.google.longrunning.Operation"g���9"4/v1/{name=projects/*/locations/*/collectors/*}:pause:*�Aname�A
	CollectorOperationMetadata[�A\'rapidmigrationassessment.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
,com.google.cloud.rapidmigrationassessment.v1BRapidMigrationAssessmentProtoPZhcloud.google.com/go/rapidmigrationassessment/apiv1/rapidmigrationassessmentpb;rapidmigrationassessmentpb�(Google.Cloud.RapidMigrationAssessment.V1�(Google\\Cloud\\RapidMigrationAssessment\\V1�+Google::Cloud::RapidMigrationAssessment::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}
