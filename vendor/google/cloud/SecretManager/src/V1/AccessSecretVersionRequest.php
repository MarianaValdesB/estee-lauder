<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/secretmanager/v1/service.proto

namespace Google\Cloud\SecretManager\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for [SecretManagerService.AccessSecretVersion][google.cloud.secretmanager.v1.SecretManagerService.AccessSecretVersion].
 *
 * Generated from protobuf message <code>google.cloud.secretmanager.v1.AccessSecretVersionRequest</code>
 */
class AccessSecretVersionRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the [SecretVersion][google.cloud.secretmanager.v1.SecretVersion] in the format
     * `projects/&#42;&#47;secrets/&#42;&#47;versions/&#42;`.
     * `projects/&#42;&#47;secrets/&#42;&#47;versions/latest` is an alias to the most recently
     * created [SecretVersion][google.cloud.secretmanager.v1.SecretVersion].
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';

    /**
     * @param string $name Required. The resource name of the [SecretVersion][google.cloud.secretmanager.v1.SecretVersion] in the format
     *                     `projects/&#42;/secrets/&#42;/versions/*`.
     *
     *                     `projects/&#42;/secrets/&#42;/versions/latest` is an alias to the most recently
     *                     created [SecretVersion][google.cloud.secretmanager.v1.SecretVersion]. Please see
     *                     {@see SecretManagerServiceClient::secretVersionName()} for help formatting this field.
     *
     * @return \Google\Cloud\SecretManager\V1\AccessSecretVersionRequest
     *
     * @experimental
     */
    public static function build(string $name): self
    {
        return (new self())
            ->setName($name);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The resource name of the [SecretVersion][google.cloud.secretmanager.v1.SecretVersion] in the format
     *           `projects/&#42;&#47;secrets/&#42;&#47;versions/&#42;`.
     *           `projects/&#42;&#47;secrets/&#42;&#47;versions/latest` is an alias to the most recently
     *           created [SecretVersion][google.cloud.secretmanager.v1.SecretVersion].
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Secretmanager\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the [SecretVersion][google.cloud.secretmanager.v1.SecretVersion] in the format
     * `projects/&#42;&#47;secrets/&#42;&#47;versions/&#42;`.
     * `projects/&#42;&#47;secrets/&#42;&#47;versions/latest` is an alias to the most recently
     * created [SecretVersion][google.cloud.secretmanager.v1.SecretVersion].
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The resource name of the [SecretVersion][google.cloud.secretmanager.v1.SecretVersion] in the format
     * `projects/&#42;&#47;secrets/&#42;&#47;versions/&#42;`.
     * `projects/&#42;&#47;secrets/&#42;&#47;versions/latest` is an alias to the most recently
     * created [SecretVersion][google.cloud.secretmanager.v1.SecretVersion].
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

}

