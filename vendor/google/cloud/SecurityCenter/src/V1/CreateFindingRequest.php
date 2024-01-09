<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v1/securitycenter_service.proto

namespace Google\Cloud\SecurityCenter\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for creating a finding.
 *
 * Generated from protobuf message <code>google.cloud.securitycenter.v1.CreateFindingRequest</code>
 */
class CreateFindingRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Resource name of the new finding's parent. Its format should be
     * "organizations/[organization_id]/sources/[source_id]".
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Required. Unique identifier provided by the client within the parent scope.
     * It must be alphanumeric and less than or equal to 32 characters and
     * greater than 0 characters in length.
     *
     * Generated from protobuf field <code>string finding_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $finding_id = '';
    /**
     * Required. The Finding being created. The name and security_marks will be
     * ignored as they are both output only fields on this resource.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v1.Finding finding = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $finding = null;

    /**
     * @param string                                  $parent    Required. Resource name of the new finding's parent. Its format should be
     *                                                           "organizations/[organization_id]/sources/[source_id]". Please see
     *                                                           {@see SecurityCenterClient::sourceName()} for help formatting this field.
     * @param string                                  $findingId Required. Unique identifier provided by the client within the parent scope.
     *                                                           It must be alphanumeric and less than or equal to 32 characters and
     *                                                           greater than 0 characters in length.
     * @param \Google\Cloud\SecurityCenter\V1\Finding $finding   Required. The Finding being created. The name and security_marks will be
     *                                                           ignored as they are both output only fields on this resource.
     *
     * @return \Google\Cloud\SecurityCenter\V1\CreateFindingRequest
     *
     * @experimental
     */
    public static function build(string $parent, string $findingId, \Google\Cloud\SecurityCenter\V1\Finding $finding): self
    {
        return (new self())
            ->setParent($parent)
            ->setFindingId($findingId)
            ->setFinding($finding);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. Resource name of the new finding's parent. Its format should be
     *           "organizations/[organization_id]/sources/[source_id]".
     *     @type string $finding_id
     *           Required. Unique identifier provided by the client within the parent scope.
     *           It must be alphanumeric and less than or equal to 32 characters and
     *           greater than 0 characters in length.
     *     @type \Google\Cloud\SecurityCenter\V1\Finding $finding
     *           Required. The Finding being created. The name and security_marks will be
     *           ignored as they are both output only fields on this resource.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Securitycenter\V1\SecuritycenterService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Resource name of the new finding's parent. Its format should be
     * "organizations/[organization_id]/sources/[source_id]".
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. Resource name of the new finding's parent. Its format should be
     * "organizations/[organization_id]/sources/[source_id]".
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. Unique identifier provided by the client within the parent scope.
     * It must be alphanumeric and less than or equal to 32 characters and
     * greater than 0 characters in length.
     *
     * Generated from protobuf field <code>string finding_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getFindingId()
    {
        return $this->finding_id;
    }

    /**
     * Required. Unique identifier provided by the client within the parent scope.
     * It must be alphanumeric and less than or equal to 32 characters and
     * greater than 0 characters in length.
     *
     * Generated from protobuf field <code>string finding_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setFindingId($var)
    {
        GPBUtil::checkString($var, True);
        $this->finding_id = $var;

        return $this;
    }

    /**
     * Required. The Finding being created. The name and security_marks will be
     * ignored as they are both output only fields on this resource.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v1.Finding finding = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\SecurityCenter\V1\Finding|null
     */
    public function getFinding()
    {
        return $this->finding;
    }

    public function hasFinding()
    {
        return isset($this->finding);
    }

    public function clearFinding()
    {
        unset($this->finding);
    }

    /**
     * Required. The Finding being created. The name and security_marks will be
     * ignored as they are both output only fields on this resource.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v1.Finding finding = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\SecurityCenter\V1\Finding $var
     * @return $this
     */
    public function setFinding($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\SecurityCenter\V1\Finding::class);
        $this->finding = $var;

        return $this;
    }

}

