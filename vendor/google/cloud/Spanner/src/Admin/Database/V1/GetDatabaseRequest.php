<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/spanner/admin/database/v1/spanner_database_admin.proto

namespace Google\Cloud\Spanner\Admin\Database\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request for [GetDatabase][google.spanner.admin.database.v1.DatabaseAdmin.GetDatabase].
 *
 * Generated from protobuf message <code>google.spanner.admin.database.v1.GetDatabaseRequest</code>
 */
class GetDatabaseRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the requested database. Values are of the form
     * `projects/<project>/instances/<instance>/databases/<database>`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';

    /**
     * @param string $name Required. The name of the requested database. Values are of the form
     *                     `projects/<project>/instances/<instance>/databases/<database>`. Please see
     *                     {@see DatabaseAdminClient::databaseName()} for help formatting this field.
     *
     * @return \Google\Cloud\Spanner\Admin\Database\V1\GetDatabaseRequest
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
     *           Required. The name of the requested database. Values are of the form
     *           `projects/<project>/instances/<instance>/databases/<database>`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Spanner\Admin\Database\V1\SpannerDatabaseAdmin::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the requested database. Values are of the form
     * `projects/<project>/instances/<instance>/databases/<database>`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the requested database. Values are of the form
     * `projects/<project>/instances/<instance>/databases/<database>`.
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

