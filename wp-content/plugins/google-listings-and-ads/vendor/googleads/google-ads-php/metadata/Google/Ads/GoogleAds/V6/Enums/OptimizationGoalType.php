<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v6/enums/optimization_goal_type.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V6\Enums;

class OptimizationGoalType
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
:google/ads/googleads/v6/enums/optimization_goal_type.protogoogle.ads.googleads.v6.enums"y
OptimizationGoalTypeEnum"]
OptimizationGoalType
UNSPECIFIED 
UNKNOWN
CALL_CLICKS
DRIVING_DIRECTIONSB�
!com.google.ads.googleads.v6.enumsBOptimizationGoalTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v6/enums;enums�GAA�Google.Ads.GoogleAds.V6.Enums�Google\\Ads\\GoogleAds\\V6\\Enums�!Google::Ads::GoogleAds::V6::Enumsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

