<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/security/privateca/v1beta1/resources.proto

namespace Google\Cloud\Security\PrivateCA\V1beta1\Certificate;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Describes fields that are relavent to the revocation of a [Certificate][google.cloud.security.privateca.v1beta1.Certificate].
 *
 * Generated from protobuf message <code>google.cloud.security.privateca.v1beta1.Certificate.RevocationDetails</code>
 */
class RevocationDetails extends \Google\Protobuf\Internal\Message
{
    /**
     * Indicates why a [Certificate][google.cloud.security.privateca.v1beta1.Certificate] was revoked.
     *
     * Generated from protobuf field <code>.google.cloud.security.privateca.v1beta1.RevocationReason revocation_state = 1;</code>
     */
    private $revocation_state = 0;
    /**
     * The time at which this [Certificate][google.cloud.security.privateca.v1beta1.Certificate] was revoked.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp revocation_time = 2;</code>
     */
    private $revocation_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $revocation_state
     *           Indicates why a [Certificate][google.cloud.security.privateca.v1beta1.Certificate] was revoked.
     *     @type \Google\Protobuf\Timestamp $revocation_time
     *           The time at which this [Certificate][google.cloud.security.privateca.v1beta1.Certificate] was revoked.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Security\Privateca\V1Beta1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Indicates why a [Certificate][google.cloud.security.privateca.v1beta1.Certificate] was revoked.
     *
     * Generated from protobuf field <code>.google.cloud.security.privateca.v1beta1.RevocationReason revocation_state = 1;</code>
     * @return int
     */
    public function getRevocationState()
    {
        return $this->revocation_state;
    }

    /**
     * Indicates why a [Certificate][google.cloud.security.privateca.v1beta1.Certificate] was revoked.
     *
     * Generated from protobuf field <code>.google.cloud.security.privateca.v1beta1.RevocationReason revocation_state = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setRevocationState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Security\PrivateCA\V1beta1\RevocationReason::class);
        $this->revocation_state = $var;

        return $this;
    }

    /**
     * The time at which this [Certificate][google.cloud.security.privateca.v1beta1.Certificate] was revoked.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp revocation_time = 2;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getRevocationTime()
    {
        return $this->revocation_time;
    }

    public function hasRevocationTime()
    {
        return isset($this->revocation_time);
    }

    public function clearRevocationTime()
    {
        unset($this->revocation_time);
    }

    /**
     * The time at which this [Certificate][google.cloud.security.privateca.v1beta1.Certificate] was revoked.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp revocation_time = 2;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setRevocationTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->revocation_time = $var;

        return $this;
    }

}


