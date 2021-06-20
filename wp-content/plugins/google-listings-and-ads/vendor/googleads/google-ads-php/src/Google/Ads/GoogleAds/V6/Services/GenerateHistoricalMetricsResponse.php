<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v6/services/keyword_plan_service.proto

namespace Google\Ads\GoogleAds\V6\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for [KeywordPlanService.GenerateHistoricalMetrics][google.ads.googleads.v6.services.KeywordPlanService.GenerateHistoricalMetrics].
 *
 * Generated from protobuf message <code>google.ads.googleads.v6.services.GenerateHistoricalMetricsResponse</code>
 */
class GenerateHistoricalMetricsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * List of keyword historical metrics.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v6.services.KeywordPlanKeywordHistoricalMetrics metrics = 1;</code>
     */
    private $metrics;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Ads\GoogleAds\V6\Services\KeywordPlanKeywordHistoricalMetrics[]|\Google\Protobuf\Internal\RepeatedField $metrics
     *           List of keyword historical metrics.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V6\Services\KeywordPlanService::initOnce();
        parent::__construct($data);
    }

    /**
     * List of keyword historical metrics.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v6.services.KeywordPlanKeywordHistoricalMetrics metrics = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMetrics()
    {
        return $this->metrics;
    }

    /**
     * List of keyword historical metrics.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v6.services.KeywordPlanKeywordHistoricalMetrics metrics = 1;</code>
     * @param \Google\Ads\GoogleAds\V6\Services\KeywordPlanKeywordHistoricalMetrics[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMetrics($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V6\Services\KeywordPlanKeywordHistoricalMetrics::class);
        $this->metrics = $arr;

        return $this;
    }

}

