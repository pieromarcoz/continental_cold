<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v9/enums/campaign_criterion_status.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V9\Enums;

class CampaignCriterionStatus
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
=google/ads/googleads/v9/enums/campaign_criterion_status.protogoogle.ads.googleads.v9.enums"|
CampaignCriterionStatusEnum"]
CampaignCriterionStatus
UNSPECIFIED 
UNKNOWN
ENABLED

PAUSED
REMOVEDB�
!com.google.ads.googleads.v9.enumsBCampaignCriterionStatusProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v9/enums;enums�GAA�Google.Ads.GoogleAds.V9.Enums�Google\\Ads\\GoogleAds\\V9\\Enums�!Google::Ads::GoogleAds::V9::Enumsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

