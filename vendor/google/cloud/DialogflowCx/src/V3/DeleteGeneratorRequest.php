<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/cx/v3/generator.proto

namespace Google\Cloud\Dialogflow\Cx\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for
 * [Generators.DeleteGenerator][google.cloud.dialogflow.cx.v3.Generators.DeleteGenerator].
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.cx.v3.DeleteGeneratorRequest</code>
 */
class DeleteGeneratorRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the generator to delete.
     * Format: `projects/<Project ID>/locations/<Location ID>/agents/<Agent
     * ID>/generators/<Generator ID>`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';
    /**
     * This field has no effect for generators not being used.
     * For generators that are used by pages/flows/transition route groups:
     * *  If `force` is set to false, an error will be returned with message
     *    indicating the referenced resources.
     * *  If `force` is set to true, Dialogflow will remove the generator, as well
     *    as any references to the generator (i.e.
     *    [Generator][Fulfillment.generator]) in fulfillments.
     *
     * Generated from protobuf field <code>bool force = 2;</code>
     */
    protected $force = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The name of the generator to delete.
     *           Format: `projects/<Project ID>/locations/<Location ID>/agents/<Agent
     *           ID>/generators/<Generator ID>`.
     *     @type bool $force
     *           This field has no effect for generators not being used.
     *           For generators that are used by pages/flows/transition route groups:
     *           *  If `force` is set to false, an error will be returned with message
     *              indicating the referenced resources.
     *           *  If `force` is set to true, Dialogflow will remove the generator, as well
     *              as any references to the generator (i.e.
     *              [Generator][Fulfillment.generator]) in fulfillments.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\Cx\V3\Generator::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the generator to delete.
     * Format: `projects/<Project ID>/locations/<Location ID>/agents/<Agent
     * ID>/generators/<Generator ID>`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the generator to delete.
     * Format: `projects/<Project ID>/locations/<Location ID>/agents/<Agent
     * ID>/generators/<Generator ID>`.
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
     * This field has no effect for generators not being used.
     * For generators that are used by pages/flows/transition route groups:
     * *  If `force` is set to false, an error will be returned with message
     *    indicating the referenced resources.
     * *  If `force` is set to true, Dialogflow will remove the generator, as well
     *    as any references to the generator (i.e.
     *    [Generator][Fulfillment.generator]) in fulfillments.
     *
     * Generated from protobuf field <code>bool force = 2;</code>
     * @return bool
     */
    public function getForce()
    {
        return $this->force;
    }

    /**
     * This field has no effect for generators not being used.
     * For generators that are used by pages/flows/transition route groups:
     * *  If `force` is set to false, an error will be returned with message
     *    indicating the referenced resources.
     * *  If `force` is set to true, Dialogflow will remove the generator, as well
     *    as any references to the generator (i.e.
     *    [Generator][Fulfillment.generator]) in fulfillments.
     *
     * Generated from protobuf field <code>bool force = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setForce($var)
    {
        GPBUtil::checkBool($var);
        $this->force = $var;

        return $this;
    }

}

