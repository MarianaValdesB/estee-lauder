<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/billing/v1/cloud_billing.proto

namespace Google\Cloud\Billing\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for `UpdateProjectBillingInfo`.
 *
 * Generated from protobuf message <code>google.cloud.billing.v1.UpdateProjectBillingInfoRequest</code>
 */
class UpdateProjectBillingInfoRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the project associated with the billing
     * information that you want to update. For example,
     * `projects/tokyo-rain-123`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $name = '';
    /**
     * The new billing information for the project. Output-only fields are
     * ignored; thus, you can leave empty all fields except
     * `billing_account_name`.
     *
     * Generated from protobuf field <code>.google.cloud.billing.v1.ProjectBillingInfo project_billing_info = 2;</code>
     */
    private $project_billing_info = null;

    /**
     * @param string                                      $name               Required. The resource name of the project associated with the billing
     *                                                                        information that you want to update. For example,
     *                                                                        `projects/tokyo-rain-123`.
     * @param \Google\Cloud\Billing\V1\ProjectBillingInfo $projectBillingInfo The new billing information for the project. Output-only fields are
     *                                                                        ignored; thus, you can leave empty all fields except
     *                                                                        `billing_account_name`.
     *
     * @return \Google\Cloud\Billing\V1\UpdateProjectBillingInfoRequest
     *
     * @experimental
     */
    public static function build(string $name, \Google\Cloud\Billing\V1\ProjectBillingInfo $projectBillingInfo): self
    {
        return (new self())
            ->setName($name)
            ->setProjectBillingInfo($projectBillingInfo);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The resource name of the project associated with the billing
     *           information that you want to update. For example,
     *           `projects/tokyo-rain-123`.
     *     @type \Google\Cloud\Billing\V1\ProjectBillingInfo $project_billing_info
     *           The new billing information for the project. Output-only fields are
     *           ignored; thus, you can leave empty all fields except
     *           `billing_account_name`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Billing\V1\CloudBilling::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the project associated with the billing
     * information that you want to update. For example,
     * `projects/tokyo-rain-123`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The resource name of the project associated with the billing
     * information that you want to update. For example,
     * `projects/tokyo-rain-123`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * The new billing information for the project. Output-only fields are
     * ignored; thus, you can leave empty all fields except
     * `billing_account_name`.
     *
     * Generated from protobuf field <code>.google.cloud.billing.v1.ProjectBillingInfo project_billing_info = 2;</code>
     * @return \Google\Cloud\Billing\V1\ProjectBillingInfo|null
     */
    public function getProjectBillingInfo()
    {
        return $this->project_billing_info;
    }

    public function hasProjectBillingInfo()
    {
        return isset($this->project_billing_info);
    }

    public function clearProjectBillingInfo()
    {
        unset($this->project_billing_info);
    }

    /**
     * The new billing information for the project. Output-only fields are
     * ignored; thus, you can leave empty all fields except
     * `billing_account_name`.
     *
     * Generated from protobuf field <code>.google.cloud.billing.v1.ProjectBillingInfo project_billing_info = 2;</code>
     * @param \Google\Cloud\Billing\V1\ProjectBillingInfo $var
     * @return $this
     */
    public function setProjectBillingInfo($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Billing\V1\ProjectBillingInfo::class);
        $this->project_billing_info = $var;

        return $this;
    }

}

