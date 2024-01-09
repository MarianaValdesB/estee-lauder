<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/policytroubleshooter/iam/v3/troubleshooter.proto

namespace Google\Cloud\PolicyTroubleshooter\Iam\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Details about how a specific IAM allow policy contributed to the final access
 * state.
 *
 * Generated from protobuf message <code>google.cloud.policytroubleshooter.iam.v3.ExplainedAllowPolicy</code>
 */
class ExplainedAllowPolicy extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Indicates whether _this policy_ provides the specified permission
     * to the specified principal for the specified resource.
     * This field does _not_ indicate whether the principal actually has the
     * permission for the resource. There might be another policy that overrides
     * this policy. To determine whether the principal actually has the
     * permission, use the `overall_access_state` field in the
     * [TroubleshootIamPolicyResponse][google.cloud.policytroubleshooter.iam.v3.TroubleshootIamPolicyResponse].
     *
     * Generated from protobuf field <code>.google.cloud.policytroubleshooter.iam.v3.AllowAccessState allow_access_state = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $allow_access_state = 0;
    /**
     * The full resource name that identifies the resource. For example,
     * `//compute.googleapis.com/projects/my-project/zones/us-central1-a/instances/my-instance`.
     * If the sender of the request does not have access to the policy, this field
     * is omitted.
     * For examples of full resource names for Google Cloud services, see
     * https://cloud.google.com/iam/help/troubleshooter/full-resource-names.
     *
     * Generated from protobuf field <code>string full_resource_name = 2;</code>
     */
    protected $full_resource_name = '';
    /**
     * Details about how each role binding in the policy affects the principal's
     * ability, or inability, to use the permission for the resource. The order of
     * the role bindings matches the role binding order in the policy.
     * If the sender of the request does not have access to the policy, this field
     * is omitted.
     *
     * Generated from protobuf field <code>repeated .google.cloud.policytroubleshooter.iam.v3.AllowBindingExplanation binding_explanations = 3;</code>
     */
    private $binding_explanations;
    /**
     * The relevance of this policy to the overall access state in the
     * [TroubleshootIamPolicyResponse][google.cloud.policytroubleshooter.iam.v3.TroubleshootIamPolicyResponse].
     * If the sender of the request does not have access to the policy, this field
     * is omitted.
     *
     * Generated from protobuf field <code>.google.cloud.policytroubleshooter.iam.v3.HeuristicRelevance relevance = 4;</code>
     */
    protected $relevance = 0;
    /**
     * The IAM allow policy attached to the resource.
     * If the sender of the request does not have access to the policy, this field
     * is empty.
     *
     * Generated from protobuf field <code>.google.iam.v1.Policy policy = 5;</code>
     */
    protected $policy = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $allow_access_state
     *           Required. Indicates whether _this policy_ provides the specified permission
     *           to the specified principal for the specified resource.
     *           This field does _not_ indicate whether the principal actually has the
     *           permission for the resource. There might be another policy that overrides
     *           this policy. To determine whether the principal actually has the
     *           permission, use the `overall_access_state` field in the
     *           [TroubleshootIamPolicyResponse][google.cloud.policytroubleshooter.iam.v3.TroubleshootIamPolicyResponse].
     *     @type string $full_resource_name
     *           The full resource name that identifies the resource. For example,
     *           `//compute.googleapis.com/projects/my-project/zones/us-central1-a/instances/my-instance`.
     *           If the sender of the request does not have access to the policy, this field
     *           is omitted.
     *           For examples of full resource names for Google Cloud services, see
     *           https://cloud.google.com/iam/help/troubleshooter/full-resource-names.
     *     @type array<\Google\Cloud\PolicyTroubleshooter\Iam\V3\AllowBindingExplanation>|\Google\Protobuf\Internal\RepeatedField $binding_explanations
     *           Details about how each role binding in the policy affects the principal's
     *           ability, or inability, to use the permission for the resource. The order of
     *           the role bindings matches the role binding order in the policy.
     *           If the sender of the request does not have access to the policy, this field
     *           is omitted.
     *     @type int $relevance
     *           The relevance of this policy to the overall access state in the
     *           [TroubleshootIamPolicyResponse][google.cloud.policytroubleshooter.iam.v3.TroubleshootIamPolicyResponse].
     *           If the sender of the request does not have access to the policy, this field
     *           is omitted.
     *     @type \Google\Cloud\Iam\V1\Policy $policy
     *           The IAM allow policy attached to the resource.
     *           If the sender of the request does not have access to the policy, this field
     *           is empty.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Policytroubleshooter\Iam\V3\Troubleshooter::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Indicates whether _this policy_ provides the specified permission
     * to the specified principal for the specified resource.
     * This field does _not_ indicate whether the principal actually has the
     * permission for the resource. There might be another policy that overrides
     * this policy. To determine whether the principal actually has the
     * permission, use the `overall_access_state` field in the
     * [TroubleshootIamPolicyResponse][google.cloud.policytroubleshooter.iam.v3.TroubleshootIamPolicyResponse].
     *
     * Generated from protobuf field <code>.google.cloud.policytroubleshooter.iam.v3.AllowAccessState allow_access_state = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getAllowAccessState()
    {
        return $this->allow_access_state;
    }

    /**
     * Required. Indicates whether _this policy_ provides the specified permission
     * to the specified principal for the specified resource.
     * This field does _not_ indicate whether the principal actually has the
     * permission for the resource. There might be another policy that overrides
     * this policy. To determine whether the principal actually has the
     * permission, use the `overall_access_state` field in the
     * [TroubleshootIamPolicyResponse][google.cloud.policytroubleshooter.iam.v3.TroubleshootIamPolicyResponse].
     *
     * Generated from protobuf field <code>.google.cloud.policytroubleshooter.iam.v3.AllowAccessState allow_access_state = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setAllowAccessState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\PolicyTroubleshooter\Iam\V3\AllowAccessState::class);
        $this->allow_access_state = $var;

        return $this;
    }

    /**
     * The full resource name that identifies the resource. For example,
     * `//compute.googleapis.com/projects/my-project/zones/us-central1-a/instances/my-instance`.
     * If the sender of the request does not have access to the policy, this field
     * is omitted.
     * For examples of full resource names for Google Cloud services, see
     * https://cloud.google.com/iam/help/troubleshooter/full-resource-names.
     *
     * Generated from protobuf field <code>string full_resource_name = 2;</code>
     * @return string
     */
    public function getFullResourceName()
    {
        return $this->full_resource_name;
    }

    /**
     * The full resource name that identifies the resource. For example,
     * `//compute.googleapis.com/projects/my-project/zones/us-central1-a/instances/my-instance`.
     * If the sender of the request does not have access to the policy, this field
     * is omitted.
     * For examples of full resource names for Google Cloud services, see
     * https://cloud.google.com/iam/help/troubleshooter/full-resource-names.
     *
     * Generated from protobuf field <code>string full_resource_name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setFullResourceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->full_resource_name = $var;

        return $this;
    }

    /**
     * Details about how each role binding in the policy affects the principal's
     * ability, or inability, to use the permission for the resource. The order of
     * the role bindings matches the role binding order in the policy.
     * If the sender of the request does not have access to the policy, this field
     * is omitted.
     *
     * Generated from protobuf field <code>repeated .google.cloud.policytroubleshooter.iam.v3.AllowBindingExplanation binding_explanations = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBindingExplanations()
    {
        return $this->binding_explanations;
    }

    /**
     * Details about how each role binding in the policy affects the principal's
     * ability, or inability, to use the permission for the resource. The order of
     * the role bindings matches the role binding order in the policy.
     * If the sender of the request does not have access to the policy, this field
     * is omitted.
     *
     * Generated from protobuf field <code>repeated .google.cloud.policytroubleshooter.iam.v3.AllowBindingExplanation binding_explanations = 3;</code>
     * @param array<\Google\Cloud\PolicyTroubleshooter\Iam\V3\AllowBindingExplanation>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBindingExplanations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\PolicyTroubleshooter\Iam\V3\AllowBindingExplanation::class);
        $this->binding_explanations = $arr;

        return $this;
    }

    /**
     * The relevance of this policy to the overall access state in the
     * [TroubleshootIamPolicyResponse][google.cloud.policytroubleshooter.iam.v3.TroubleshootIamPolicyResponse].
     * If the sender of the request does not have access to the policy, this field
     * is omitted.
     *
     * Generated from protobuf field <code>.google.cloud.policytroubleshooter.iam.v3.HeuristicRelevance relevance = 4;</code>
     * @return int
     */
    public function getRelevance()
    {
        return $this->relevance;
    }

    /**
     * The relevance of this policy to the overall access state in the
     * [TroubleshootIamPolicyResponse][google.cloud.policytroubleshooter.iam.v3.TroubleshootIamPolicyResponse].
     * If the sender of the request does not have access to the policy, this field
     * is omitted.
     *
     * Generated from protobuf field <code>.google.cloud.policytroubleshooter.iam.v3.HeuristicRelevance relevance = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setRelevance($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\PolicyTroubleshooter\Iam\V3\HeuristicRelevance::class);
        $this->relevance = $var;

        return $this;
    }

    /**
     * The IAM allow policy attached to the resource.
     * If the sender of the request does not have access to the policy, this field
     * is empty.
     *
     * Generated from protobuf field <code>.google.iam.v1.Policy policy = 5;</code>
     * @return \Google\Cloud\Iam\V1\Policy|null
     */
    public function getPolicy()
    {
        return $this->policy;
    }

    public function hasPolicy()
    {
        return isset($this->policy);
    }

    public function clearPolicy()
    {
        unset($this->policy);
    }

    /**
     * The IAM allow policy attached to the resource.
     * If the sender of the request does not have access to the policy, this field
     * is empty.
     *
     * Generated from protobuf field <code>.google.iam.v1.Policy policy = 5;</code>
     * @param \Google\Cloud\Iam\V1\Policy $var
     * @return $this
     */
    public function setPolicy($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Iam\V1\Policy::class);
        $this->policy = $var;

        return $this;
    }

}

