<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/cx/v3/test_case.proto

namespace Google\Cloud\Dialogflow\Cx\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The response message for
 * [TestCases.ListTestCases][google.cloud.dialogflow.cx.v3.TestCases.ListTestCases].
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.cx.v3.ListTestCasesResponse</code>
 */
class ListTestCasesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The list of test cases. There will be a maximum number of items returned
     * based on the page_size field in the request.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.cx.v3.TestCase test_cases = 1;</code>
     */
    private $test_cases;
    /**
     * Token to retrieve the next page of results, or empty if there are no more
     * results in the list.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    protected $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\Dialogflow\Cx\V3\TestCase>|\Google\Protobuf\Internal\RepeatedField $test_cases
     *           The list of test cases. There will be a maximum number of items returned
     *           based on the page_size field in the request.
     *     @type string $next_page_token
     *           Token to retrieve the next page of results, or empty if there are no more
     *           results in the list.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\Cx\V3\TestCase::initOnce();
        parent::__construct($data);
    }

    /**
     * The list of test cases. There will be a maximum number of items returned
     * based on the page_size field in the request.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.cx.v3.TestCase test_cases = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTestCases()
    {
        return $this->test_cases;
    }

    /**
     * The list of test cases. There will be a maximum number of items returned
     * based on the page_size field in the request.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.cx.v3.TestCase test_cases = 1;</code>
     * @param array<\Google\Cloud\Dialogflow\Cx\V3\TestCase>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTestCases($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dialogflow\Cx\V3\TestCase::class);
        $this->test_cases = $arr;

        return $this;
    }

    /**
     * Token to retrieve the next page of results, or empty if there are no more
     * results in the list.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * Token to retrieve the next page of results, or empty if there are no more
     * results in the list.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

}
