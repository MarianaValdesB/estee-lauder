<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/clouddms/v1/conversionworkspace_resources.proto

namespace Google\Cloud\CloudDms\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Options to configure rule type SourceSqlChange.
 * The rule is used to alter the sql code for database entities.
 * The rule filter field can refer to one entity.
 * The rule scope can be: StoredProcedure, Function, Trigger, View
 *
 * Generated from protobuf message <code>google.cloud.clouddms.v1.SourceSqlChange</code>
 */
class SourceSqlChange extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Sql code for source (stored procedure, function, trigger or view)
     *
     * Generated from protobuf field <code>string sql_code = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $sql_code = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $sql_code
     *           Required. Sql code for source (stored procedure, function, trigger or view)
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Clouddms\V1\ConversionworkspaceResources::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Sql code for source (stored procedure, function, trigger or view)
     *
     * Generated from protobuf field <code>string sql_code = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getSqlCode()
    {
        return $this->sql_code;
    }

    /**
     * Required. Sql code for source (stored procedure, function, trigger or view)
     *
     * Generated from protobuf field <code>string sql_code = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setSqlCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->sql_code = $var;

        return $this;
    }

}

