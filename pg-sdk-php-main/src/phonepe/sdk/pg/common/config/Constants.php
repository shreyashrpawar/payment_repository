<?php

namespace PhonePe\common\config;

/**
 * Constants
 */
class Constants
{
    const STAGE = "STAGE";
    const UAT = "UAT";
    const PRODUCTION = "PRODUCTION";

    const BASE_URL_PROD = "https://api.phonepe.com/apis/hermes";
    const BASE_URL_STAGE = "https://api-preprod.phonepe.com/apis/pg-sandbox";
    const BASE_URL_UAT = "https://api-preprod.phonepe.com/apis/pg-sandbox";
    const EVENT_ENDPOINT = "/pg/v1/pay";

    const ERROR = "PAYMENT_ERROR";
    const IOS = "IOS";
    const ANDROID = "ANDROID";
}