<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1/document_service.proto

namespace Google\Cloud\DiscoveryEngine\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [DocumentService.GetDocument][google.cloud.discoveryengine.v1.DocumentService.GetDocument]
 * method.
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1.GetDocumentRequest</code>
 */
class GetDocumentRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Full resource name of
     * [Document][google.cloud.discoveryengine.v1.Document], such as
     * `projects/{project}/locations/{location}/collections/{collection}/dataStores/{data_store}/branches/{branch}/documents/{document}`.
     * If the caller does not have permission to access the
     * [Document][google.cloud.discoveryengine.v1.Document], regardless of whether
     * or not it exists, a `PERMISSION_DENIED` error is returned.
     * If the requested [Document][google.cloud.discoveryengine.v1.Document] does
     * not exist, a `NOT_FOUND` error is returned.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';

    /**
     * @param string $name Required. Full resource name of
     *                     [Document][google.cloud.discoveryengine.v1.Document], such as
     *                     `projects/{project}/locations/{location}/collections/{collection}/dataStores/{data_store}/branches/{branch}/documents/{document}`.
     *
     *                     If the caller does not have permission to access the
     *                     [Document][google.cloud.discoveryengine.v1.Document], regardless of whether
     *                     or not it exists, a `PERMISSION_DENIED` error is returned.
     *
     *                     If the requested [Document][google.cloud.discoveryengine.v1.Document] does
     *                     not exist, a `NOT_FOUND` error is returned. Please see
     *                     {@see DocumentServiceClient::documentName()} for help formatting this field.
     *
     * @return \Google\Cloud\DiscoveryEngine\V1\GetDocumentRequest
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
     *           Required. Full resource name of
     *           [Document][google.cloud.discoveryengine.v1.Document], such as
     *           `projects/{project}/locations/{location}/collections/{collection}/dataStores/{data_store}/branches/{branch}/documents/{document}`.
     *           If the caller does not have permission to access the
     *           [Document][google.cloud.discoveryengine.v1.Document], regardless of whether
     *           or not it exists, a `PERMISSION_DENIED` error is returned.
     *           If the requested [Document][google.cloud.discoveryengine.v1.Document] does
     *           not exist, a `NOT_FOUND` error is returned.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1\DocumentService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Full resource name of
     * [Document][google.cloud.discoveryengine.v1.Document], such as
     * `projects/{project}/locations/{location}/collections/{collection}/dataStores/{data_store}/branches/{branch}/documents/{document}`.
     * If the caller does not have permission to access the
     * [Document][google.cloud.discoveryengine.v1.Document], regardless of whether
     * or not it exists, a `PERMISSION_DENIED` error is returned.
     * If the requested [Document][google.cloud.discoveryengine.v1.Document] does
     * not exist, a `NOT_FOUND` error is returned.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. Full resource name of
     * [Document][google.cloud.discoveryengine.v1.Document], such as
     * `projects/{project}/locations/{location}/collections/{collection}/dataStores/{data_store}/branches/{branch}/documents/{document}`.
     * If the caller does not have permission to access the
     * [Document][google.cloud.discoveryengine.v1.Document], regardless of whether
     * or not it exists, a `PERMISSION_DENIED` error is returned.
     * If the requested [Document][google.cloud.discoveryengine.v1.Document] does
     * not exist, a `NOT_FOUND` error is returned.
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

