<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/spanner/admin/database/v1/spanner_database_admin.proto

namespace Google\Cloud\Spanner\Admin\Database\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Action information extracted from a DDL statement. This proto is used to
 * display the brief info of the DDL statement for the operation
 * [UpdateDatabaseDdl][google.spanner.admin.database.v1.DatabaseAdmin.UpdateDatabaseDdl].
 *
 * Generated from protobuf message <code>google.spanner.admin.database.v1.DdlStatementActionInfo</code>
 */
class DdlStatementActionInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * The action for the DDL statement, e.g. CREATE, ALTER, DROP, GRANT, etc.
     * This field is a non-empty string.
     *
     * Generated from protobuf field <code>string action = 1;</code>
     */
    private $action = '';
    /**
     * The entity type for the DDL statement, e.g. TABLE, INDEX, VIEW, etc.
     * This field can be empty string for some DDL statement,
     * e.g. for statement "ANALYZE", `entity_type` = "".
     *
     * Generated from protobuf field <code>string entity_type = 2;</code>
     */
    private $entity_type = '';
    /**
     * The entity name(s) being operated on the DDL statement.
     * E.g.
     * 1. For statement "CREATE TABLE t1(...)", `entity_names` = ["t1"].
     * 2. For statement "GRANT ROLE r1, r2 ...", `entity_names` = ["r1", "r2"].
     * 3. For statement "ANALYZE", `entity_names` = [].
     *
     * Generated from protobuf field <code>repeated string entity_names = 3;</code>
     */
    private $entity_names;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $action
     *           The action for the DDL statement, e.g. CREATE, ALTER, DROP, GRANT, etc.
     *           This field is a non-empty string.
     *     @type string $entity_type
     *           The entity type for the DDL statement, e.g. TABLE, INDEX, VIEW, etc.
     *           This field can be empty string for some DDL statement,
     *           e.g. for statement "ANALYZE", `entity_type` = "".
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $entity_names
     *           The entity name(s) being operated on the DDL statement.
     *           E.g.
     *           1. For statement "CREATE TABLE t1(...)", `entity_names` = ["t1"].
     *           2. For statement "GRANT ROLE r1, r2 ...", `entity_names` = ["r1", "r2"].
     *           3. For statement "ANALYZE", `entity_names` = [].
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Spanner\Admin\Database\V1\SpannerDatabaseAdmin::initOnce();
        parent::__construct($data);
    }

    /**
     * The action for the DDL statement, e.g. CREATE, ALTER, DROP, GRANT, etc.
     * This field is a non-empty string.
     *
     * Generated from protobuf field <code>string action = 1;</code>
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * The action for the DDL statement, e.g. CREATE, ALTER, DROP, GRANT, etc.
     * This field is a non-empty string.
     *
     * Generated from protobuf field <code>string action = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setAction($var)
    {
        GPBUtil::checkString($var, True);
        $this->action = $var;

        return $this;
    }

    /**
     * The entity type for the DDL statement, e.g. TABLE, INDEX, VIEW, etc.
     * This field can be empty string for some DDL statement,
     * e.g. for statement "ANALYZE", `entity_type` = "".
     *
     * Generated from protobuf field <code>string entity_type = 2;</code>
     * @return string
     */
    public function getEntityType()
    {
        return $this->entity_type;
    }

    /**
     * The entity type for the DDL statement, e.g. TABLE, INDEX, VIEW, etc.
     * This field can be empty string for some DDL statement,
     * e.g. for statement "ANALYZE", `entity_type` = "".
     *
     * Generated from protobuf field <code>string entity_type = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setEntityType($var)
    {
        GPBUtil::checkString($var, True);
        $this->entity_type = $var;

        return $this;
    }

    /**
     * The entity name(s) being operated on the DDL statement.
     * E.g.
     * 1. For statement "CREATE TABLE t1(...)", `entity_names` = ["t1"].
     * 2. For statement "GRANT ROLE r1, r2 ...", `entity_names` = ["r1", "r2"].
     * 3. For statement "ANALYZE", `entity_names` = [].
     *
     * Generated from protobuf field <code>repeated string entity_names = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEntityNames()
    {
        return $this->entity_names;
    }

    /**
     * The entity name(s) being operated on the DDL statement.
     * E.g.
     * 1. For statement "CREATE TABLE t1(...)", `entity_names` = ["t1"].
     * 2. For statement "GRANT ROLE r1, r2 ...", `entity_names` = ["r1", "r2"].
     * 3. For statement "ANALYZE", `entity_names` = [].
     *
     * Generated from protobuf field <code>repeated string entity_names = 3;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEntityNames($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->entity_names = $arr;

        return $this;
    }

}

