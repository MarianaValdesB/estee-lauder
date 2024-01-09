<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/shopping/merchant/reports/v1beta/reports.proto

namespace Google\Shopping\Merchant\Reports\V1beta\ProductView\ItemIssue\ItemIssueSeverity;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Issue severity per reporting context.
 *
 * Generated from protobuf message <code>google.shopping.merchant.reports.v1beta.ProductView.ItemIssue.ItemIssueSeverity.IssueSeverityPerReportingContext</code>
 */
class IssueSeverityPerReportingContext extends \Google\Protobuf\Internal\Message
{
    /**
     * Reporting context the issue applies to.
     *
     * Generated from protobuf field <code>optional .google.shopping.type.ReportingContext.ReportingContextEnum reporting_context = 1;</code>
     */
    protected $reporting_context = null;
    /**
     * List of disapproved countries in the reporting context, represented
     * in ISO 3166 format.
     *
     * Generated from protobuf field <code>repeated string disapproved_countries = 2;</code>
     */
    private $disapproved_countries;
    /**
     * List of demoted countries in the reporting context, represented in
     * ISO 3166 format.
     *
     * Generated from protobuf field <code>repeated string demoted_countries = 3;</code>
     */
    private $demoted_countries;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $reporting_context
     *           Reporting context the issue applies to.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $disapproved_countries
     *           List of disapproved countries in the reporting context, represented
     *           in ISO 3166 format.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $demoted_countries
     *           List of demoted countries in the reporting context, represented in
     *           ISO 3166 format.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Shopping\Merchant\Reports\V1Beta\Reports::initOnce();
        parent::__construct($data);
    }

    /**
     * Reporting context the issue applies to.
     *
     * Generated from protobuf field <code>optional .google.shopping.type.ReportingContext.ReportingContextEnum reporting_context = 1;</code>
     * @return int
     */
    public function getReportingContext()
    {
        return isset($this->reporting_context) ? $this->reporting_context : 0;
    }

    public function hasReportingContext()
    {
        return isset($this->reporting_context);
    }

    public function clearReportingContext()
    {
        unset($this->reporting_context);
    }

    /**
     * Reporting context the issue applies to.
     *
     * Generated from protobuf field <code>optional .google.shopping.type.ReportingContext.ReportingContextEnum reporting_context = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setReportingContext($var)
    {
        GPBUtil::checkEnum($var, \Google\Shopping\Type\ReportingContext\ReportingContextEnum::class);
        $this->reporting_context = $var;

        return $this;
    }

    /**
     * List of disapproved countries in the reporting context, represented
     * in ISO 3166 format.
     *
     * Generated from protobuf field <code>repeated string disapproved_countries = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDisapprovedCountries()
    {
        return $this->disapproved_countries;
    }

    /**
     * List of disapproved countries in the reporting context, represented
     * in ISO 3166 format.
     *
     * Generated from protobuf field <code>repeated string disapproved_countries = 2;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDisapprovedCountries($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->disapproved_countries = $arr;

        return $this;
    }

    /**
     * List of demoted countries in the reporting context, represented in
     * ISO 3166 format.
     *
     * Generated from protobuf field <code>repeated string demoted_countries = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDemotedCountries()
    {
        return $this->demoted_countries;
    }

    /**
     * List of demoted countries in the reporting context, represented in
     * ISO 3166 format.
     *
     * Generated from protobuf field <code>repeated string demoted_countries = 3;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDemotedCountries($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->demoted_countries = $arr;

        return $this;
    }

}


