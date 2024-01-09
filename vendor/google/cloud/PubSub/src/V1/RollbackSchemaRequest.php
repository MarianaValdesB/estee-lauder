<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/pubsub/v1/schema.proto

namespace Google\Cloud\PubSub\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for the `RollbackSchema` method.
 *
 * Generated from protobuf message <code>google.pubsub.v1.RollbackSchemaRequest</code>
 */
class RollbackSchemaRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The schema being rolled back with revision id.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';
    /**
     * Required. The revision ID to roll back to.
     * It must be a revision of the same schema.
     *   Example: c7cfa2a8
     *
     * Generated from protobuf field <code>string revision_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $revision_id = '';

    /**
     * @param string $name       Required. The schema being rolled back with revision id. Please see
     *                           {@see SchemaServiceClient::schemaName()} for help formatting this field.
     * @param string $revisionId Required. The revision ID to roll back to.
     *                           It must be a revision of the same schema.
     *
     *                           Example: c7cfa2a8
     *
     * @return \Google\Cloud\PubSub\V1\RollbackSchemaRequest
     *
     * @experimental
     */
    public static function build(string $name, string $revisionId): self
    {
        return (new self())
            ->setName($name)
            ->setRevisionId($revisionId);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The schema being rolled back with revision id.
     *     @type string $revision_id
     *           Required. The revision ID to roll back to.
     *           It must be a revision of the same schema.
     *             Example: c7cfa2a8
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Pubsub\V1\Schema::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The schema being rolled back with revision id.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The schema being rolled back with revision id.
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
     * Required. The revision ID to roll back to.
     * It must be a revision of the same schema.
     *   Example: c7cfa2a8
     *
     * Generated from protobuf field <code>string revision_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getRevisionId()
    {
        return $this->revision_id;
    }

    /**
     * Required. The revision ID to roll back to.
     * It must be a revision of the same schema.
     *   Example: c7cfa2a8
     *
     * Generated from protobuf field <code>string revision_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setRevisionId($var)
    {
        GPBUtil::checkString($var, True);
        $this->revision_id = $var;

        return $this;
    }

}
