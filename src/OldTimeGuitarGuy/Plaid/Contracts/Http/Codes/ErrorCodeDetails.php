<?php

namespace OldTimeGuitarGuy\Plaid\Contracts\Http\Codes;

interface ErrorCodeDetails
{
    const ACCESS_TOKEN_MISSING            = 1000;
    const TYPE_MISSING                    = 1001;
    const ACCESS_TOKEN_DISALLOWED         = 1003;
    const UNSUPPORTED_ACCESS_TOKEN        = 1008;
    const INVALID_OPTIONS_FORMAT          = 1004;
    const CREDENTIALS_MISSING             = 1005;
    const INVALID_CREDENTIALS_FORMAT      = 1006;
    const UPGRADE_TO_REQUIRED             = 1007;
    const INVALID_CONTENT_TYPE            = 1009;
    const CLIENT_ID_MISSING               = 1100;
    const SECRET_MISSING                  = 1101;
    const SECRET_OR_CLIENT_ID_INVALID     = 1102;
    const UNAUTHORIZED_PRODUCT            = 1104;
    const BAD_ACCESS_TOKEN                = 1105;
    const BAD_PUBLIC_TOKEN                = 1106;
    const MISSING_PUBLIC_TOKEN            = 1107;
    const INVALID_INSTITUTION_TYPE        = 1108;
    const UNAUTHORIZED_SANDBOX_PRODUCT    = 1109;
    const PRODUCT_NOT_ENABLED             = 1110;
    const INVALID_UPGRADE                 = 1111;
    const ADDITION_LIMIT_EXCEEDED         = 1112;
    const RATE_LIMIT_EXCEEDED             = 1113;
    const UNAUTHORIZED_ENVIRONMENT        = 1114;
    const PRODUCT_ALREADY_ENABLED         = 1115;
    const INVALID_CREDENTIALS             = 1200;
    const INVALID_USERNAME                = 1201;
    const INVALID_PASSWORD                = 1202;
    const INVALID_MFA                     = 1203;
    const INVALID_SEND_METHOD             = 1204;
    const ACCOUNT_LOCKED                  = 1205;
    const ACCOUNT_NOT_SETUP               = 1206;
    const COUNTRY_NOT_SUPPORTED           = 1207;
    const MFA_NOT_SUPPORTED               = 1208;
    const INVALID_PIN                     = 1209;
    const ACCOUNT_NOT_SUPPORTED           = 1210;
    const BOFA_ACCOUNT_NOT_SUPPORTED      = 1211;
    const NO_ACCOUNTS                     = 1212;
    const INVALID_PATCH_USERNAME          = 1213;
    const MFA_RESET                       = 1215;
    const MFA_NOT_REQUIRED                = 1218;
    const INSTITUTION_NOT_AVAILABLE       = 1300;
    const UNABLE_TO_FIND_INSTITUTION      = 1301;
    const INSTITUTION_NOT_RESPONDING      = 1302;
    const INSTITUTION_DOWN                = 1303;
    const INSTITUTION_NO_LONGER_SUPPORTED = 1307;
    const UNABLE_TO_FIND_CATEGORY         = 1501;
    const TYPE_REQUIRED                   = 1502;
    const INVALID_TYPE                    = 1503;
    const INVALID_DATE                    = 1507;
    const PRODUCT_NOT_FOUND               = 1600;
    const PRODUCT_NOT_AVAILABLE           = 1601;
    const USER_NOT_FOUND                  = 1605;
    const ACCOUNT_NOT_FOUND               = 1606;
    const ITEM_NOT_FOUND                  = 1610;
    const EXTRACTOR_ERROR                 = 1700;
    const EXTRACTOR_ERROR_RETRY           = 1701;
    const PLAID_ERROR                     = 1702;
    const PLANNED_MAINTENANCE             = 1800;
}
