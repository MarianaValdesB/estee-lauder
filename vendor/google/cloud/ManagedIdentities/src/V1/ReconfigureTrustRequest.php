<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/managedidentities/v1/managed_identities_service.proto

namespace Google\Cloud\ManagedIdentities\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [ReconfigureTrust][google.cloud.managedidentities.v1.ReconfigureTrust]
 *
 * Generated from protobuf message <code>google.cloud.managedidentities.v1.ReconfigureTrustRequest</code>
 */
class ReconfigureTrustRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource domain name, project name and location using the form:
     * `projects/{project_id}/locations/global/domains/{domain_name}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';
    /**
     * Required. The fully-qualified target domain name which will be in trust with current
     * domain.
     *
     * Generated from protobuf field <code>string target_domain_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $target_domain_name = '';
    /**
     * Required. The target DNS server IP addresses to resolve the remote domain involved
     * in the trust.
     *
     * Generated from protobuf field <code>repeated string target_dns_ip_addresses = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $target_dns_ip_addresses;

    /**
     * @param string   $name                 Required. The resource domain name, project name and location using the form:
     *                                       `projects/{project_id}/locations/global/domains/{domain_name}`
     *                                       Please see {@see ManagedIdentitiesServiceClient::domainName()} for help formatting this field.
     * @param string   $targetDomainName     Required. The fully-qualified target domain name which will be in trust with current
     *                                       domain.
     * @param string[] $targetDnsIpAddresses Required. The target DNS server IP addresses to resolve the remote domain involved
     *                                       in the trust.
     *
     * @return \Google\Cloud\ManagedIdentities\V1\ReconfigureTrustRequest
     *
     * @experimental
     */
    public static function build(string $name, string $targetDomainName, array $targetDnsIpAddresses): self
    {
        return (new self())
            ->setName($name)
            ->setTargetDomainName($targetDomainName)
            ->setTargetDnsIpAddresses($targetDnsIpAddresses);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The resource domain name, project name and location using the form:
     *           `projects/{project_id}/locations/global/domains/{domain_name}`
     *     @type string $target_domain_name
     *           Required. The fully-qualified target domain name which will be in trust with current
     *           domain.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $target_dns_ip_addresses
     *           Required. The target DNS server IP addresses to resolve the remote domain involved
     *           in the trust.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Managedidentities\V1\ManagedIdentitiesService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource domain name, project name and location using the form:
     * `projects/{project_id}/locations/global/domains/{domain_name}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The resource domain name, project name and location using the form:
     * `projects/{project_id}/locations/global/domains/{domain_name}`
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
     * Required. The fully-qualified target domain name which will be in trust with current
     * domain.
     *
     * Generated from protobuf field <code>string target_domain_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getTargetDomainName()
    {
        return $this->target_domain_name;
    }

    /**
     * Required. The fully-qualified target domain name which will be in trust with current
     * domain.
     *
     * Generated from protobuf field <code>string target_domain_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setTargetDomainName($var)
    {
        GPBUtil::checkString($var, True);
        $this->target_domain_name = $var;

        return $this;
    }

    /**
     * Required. The target DNS server IP addresses to resolve the remote domain involved
     * in the trust.
     *
     * Generated from protobuf field <code>repeated string target_dns_ip_addresses = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTargetDnsIpAddresses()
    {
        return $this->target_dns_ip_addresses;
    }

    /**
     * Required. The target DNS server IP addresses to resolve the remote domain involved
     * in the trust.
     *
     * Generated from protobuf field <code>repeated string target_dns_ip_addresses = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTargetDnsIpAddresses($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->target_dns_ip_addresses = $arr;

        return $this;
    }

}

