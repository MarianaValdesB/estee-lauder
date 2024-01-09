<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/recommendationengine/v1beta1/prediction_service.proto

namespace Google\Cloud\RecommendationEngine\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for predict method.
 *
 * Generated from protobuf message <code>google.cloud.recommendationengine.v1beta1.PredictResponse</code>
 */
class PredictResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * A list of recommended items. The order represents the ranking (from the
     * most relevant item to the least).
     *
     * Generated from protobuf field <code>repeated .google.cloud.recommendationengine.v1beta1.PredictResponse.PredictionResult results = 1;</code>
     */
    private $results;
    /**
     * A unique recommendation token. This should be included in the user event
     * logs resulting from this recommendation, which enables accurate attribution
     * of recommendation model performance.
     *
     * Generated from protobuf field <code>string recommendation_token = 2;</code>
     */
    private $recommendation_token = '';
    /**
     * IDs of items in the request that were missing from the catalog.
     *
     * Generated from protobuf field <code>repeated string items_missing_in_catalog = 3;</code>
     */
    private $items_missing_in_catalog;
    /**
     * True if the dryRun property was set in the request.
     *
     * Generated from protobuf field <code>bool dry_run = 4;</code>
     */
    private $dry_run = false;
    /**
     * Additional domain specific prediction response metadata.
     *
     * Generated from protobuf field <code>map<string, .google.protobuf.Value> metadata = 5;</code>
     */
    private $metadata;
    /**
     * If empty, the list is complete. If nonempty, the token to pass to the next
     * request's PredictRequest.page_token.
     *
     * Generated from protobuf field <code>string next_page_token = 6;</code>
     */
    private $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\RecommendationEngine\V1beta1\PredictResponse\PredictionResult>|\Google\Protobuf\Internal\RepeatedField $results
     *           A list of recommended items. The order represents the ranking (from the
     *           most relevant item to the least).
     *     @type string $recommendation_token
     *           A unique recommendation token. This should be included in the user event
     *           logs resulting from this recommendation, which enables accurate attribution
     *           of recommendation model performance.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $items_missing_in_catalog
     *           IDs of items in the request that were missing from the catalog.
     *     @type bool $dry_run
     *           True if the dryRun property was set in the request.
     *     @type array|\Google\Protobuf\Internal\MapField $metadata
     *           Additional domain specific prediction response metadata.
     *     @type string $next_page_token
     *           If empty, the list is complete. If nonempty, the token to pass to the next
     *           request's PredictRequest.page_token.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Recommendationengine\V1Beta1\PredictionService::initOnce();
        parent::__construct($data);
    }

    /**
     * A list of recommended items. The order represents the ranking (from the
     * most relevant item to the least).
     *
     * Generated from protobuf field <code>repeated .google.cloud.recommendationengine.v1beta1.PredictResponse.PredictionResult results = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getResults()
    {
        return $this->results;
    }

    /**
     * A list of recommended items. The order represents the ranking (from the
     * most relevant item to the least).
     *
     * Generated from protobuf field <code>repeated .google.cloud.recommendationengine.v1beta1.PredictResponse.PredictionResult results = 1;</code>
     * @param array<\Google\Cloud\RecommendationEngine\V1beta1\PredictResponse\PredictionResult>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setResults($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\RecommendationEngine\V1beta1\PredictResponse\PredictionResult::class);
        $this->results = $arr;

        return $this;
    }

    /**
     * A unique recommendation token. This should be included in the user event
     * logs resulting from this recommendation, which enables accurate attribution
     * of recommendation model performance.
     *
     * Generated from protobuf field <code>string recommendation_token = 2;</code>
     * @return string
     */
    public function getRecommendationToken()
    {
        return $this->recommendation_token;
    }

    /**
     * A unique recommendation token. This should be included in the user event
     * logs resulting from this recommendation, which enables accurate attribution
     * of recommendation model performance.
     *
     * Generated from protobuf field <code>string recommendation_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setRecommendationToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->recommendation_token = $var;

        return $this;
    }

    /**
     * IDs of items in the request that were missing from the catalog.
     *
     * Generated from protobuf field <code>repeated string items_missing_in_catalog = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getItemsMissingInCatalog()
    {
        return $this->items_missing_in_catalog;
    }

    /**
     * IDs of items in the request that were missing from the catalog.
     *
     * Generated from protobuf field <code>repeated string items_missing_in_catalog = 3;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setItemsMissingInCatalog($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->items_missing_in_catalog = $arr;

        return $this;
    }

    /**
     * True if the dryRun property was set in the request.
     *
     * Generated from protobuf field <code>bool dry_run = 4;</code>
     * @return bool
     */
    public function getDryRun()
    {
        return $this->dry_run;
    }

    /**
     * True if the dryRun property was set in the request.
     *
     * Generated from protobuf field <code>bool dry_run = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setDryRun($var)
    {
        GPBUtil::checkBool($var);
        $this->dry_run = $var;

        return $this;
    }

    /**
     * Additional domain specific prediction response metadata.
     *
     * Generated from protobuf field <code>map<string, .google.protobuf.Value> metadata = 5;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * Additional domain specific prediction response metadata.
     *
     * Generated from protobuf field <code>map<string, .google.protobuf.Value> metadata = 5;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setMetadata($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Protobuf\Value::class);
        $this->metadata = $arr;

        return $this;
    }

    /**
     * If empty, the list is complete. If nonempty, the token to pass to the next
     * request's PredictRequest.page_token.
     *
     * Generated from protobuf field <code>string next_page_token = 6;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * If empty, the list is complete. If nonempty, the token to pass to the next
     * request's PredictRequest.page_token.
     *
     * Generated from protobuf field <code>string next_page_token = 6;</code>
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
