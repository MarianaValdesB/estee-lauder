<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataform/v1beta1/dataform.proto

namespace Google\Cloud\Dataform\V1beta1\Repository;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Configures workspace compilation overrides for a repository.
 * Primarily used by the UI (`console.cloud.google.com`).
 * `schema_suffix` and `table_prefix` can have a special expression -
 * `${workspaceName}`, which refers to the workspace name from which the
 * compilation results will be created. API callers are expected to resolve
 * the expression in these overrides and provide them explicitly in
 * `code_compilation_config`
 * (https://cloud.google.com/dataform/reference/rest/v1beta1/projects.locations.repositories.compilationResults#codecompilationconfig)
 * when creating workspace-scoped compilation results.
 *
 * Generated from protobuf message <code>google.cloud.dataform.v1beta1.Repository.WorkspaceCompilationOverrides</code>
 */
class WorkspaceCompilationOverrides extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. The default database (Google Cloud project ID).
     *
     * Generated from protobuf field <code>string default_database = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $default_database = '';
    /**
     * Optional. The suffix that should be appended to all schema (BigQuery
     * dataset ID) names.
     *
     * Generated from protobuf field <code>string schema_suffix = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $schema_suffix = '';
    /**
     * Optional. The prefix that should be prepended to all table names.
     *
     * Generated from protobuf field <code>string table_prefix = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $table_prefix = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $default_database
     *           Optional. The default database (Google Cloud project ID).
     *     @type string $schema_suffix
     *           Optional. The suffix that should be appended to all schema (BigQuery
     *           dataset ID) names.
     *     @type string $table_prefix
     *           Optional. The prefix that should be prepended to all table names.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataform\V1Beta1\Dataform::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. The default database (Google Cloud project ID).
     *
     * Generated from protobuf field <code>string default_database = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getDefaultDatabase()
    {
        return $this->default_database;
    }

    /**
     * Optional. The default database (Google Cloud project ID).
     *
     * Generated from protobuf field <code>string default_database = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setDefaultDatabase($var)
    {
        GPBUtil::checkString($var, True);
        $this->default_database = $var;

        return $this;
    }

    /**
     * Optional. The suffix that should be appended to all schema (BigQuery
     * dataset ID) names.
     *
     * Generated from protobuf field <code>string schema_suffix = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getSchemaSuffix()
    {
        return $this->schema_suffix;
    }

    /**
     * Optional. The suffix that should be appended to all schema (BigQuery
     * dataset ID) names.
     *
     * Generated from protobuf field <code>string schema_suffix = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setSchemaSuffix($var)
    {
        GPBUtil::checkString($var, True);
        $this->schema_suffix = $var;

        return $this;
    }

    /**
     * Optional. The prefix that should be prepended to all table names.
     *
     * Generated from protobuf field <code>string table_prefix = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getTablePrefix()
    {
        return $this->table_prefix;
    }

    /**
     * Optional. The prefix that should be prepended to all table names.
     *
     * Generated from protobuf field <code>string table_prefix = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setTablePrefix($var)
    {
        GPBUtil::checkString($var, True);
        $this->table_prefix = $var;

        return $this;
    }

}

