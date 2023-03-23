<?php
session_start();
error_reporting(0);
include('includes/dbconnect.php');
if (strlen($_SESSION['obcsuid'] == 0)) {
    header('location:logout.php');
} else {
    $uid = $_SESSION['obcsuid'];
    $sql = "SELECT * FROM  users where ID=:uid";
    $query = $dbh->prepare($sql);
    $query->bindParam(':uid', $uid, PDO::PARAM_STR);
    $query->execute();
    $results = $query->fetchAll(PDO::FETCH_OBJ);
    $cnt = 1;
    if ($query->rowCount() > 0) {
        foreach ($results as $row) {
            $cnt = $cnt + 1;
        }
    }
}
?>
<!DOCTYPE html>
<html id="html" class="isResponsive isNotExternal isTourNotShown isTourNotActive isSliderNotShown isHome isLoggedIn ot">

<head>
    <meta charset="utf-8">
    <title>Home | Easymedia</title>
    <meta name="keywords" content="">
    <meta name="description" content="Earn rewards and free stuff by searching and shopping online, answering surveys, and more at EasymediaW, a customer loyalty rewards program. Be rewarded today.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="../static.prdg.io/dist-non-modules/images/favicon-16x16.c851c657ffaf20dfaf15.png" sizes="16x16">
    <link rel="icon" type="image/png" href="../static.prdg.io/dist-non-modules/images/favicon-32x32.62bd6461aac547ff4000.png" sizes="32x32">
    <link rel="icon" type="image/png" href="../static.prdg.io/dist-non-modules/images/favicon-96x96.6e441ed57709dfb43629.png" sizes="96x96">
    <link rel="icon" type="image/png" href="../static.prdg.io/dist-non-modules/images/android-chrome-192x192.a8de0a0f140635c65747.png" sizes="192x192">
    <link rel="alternate icon" type="image/png" href="/favicon.png">
    <link rel="apple-touch-icon" href="../static.prdg.io/dist-non-modules/images/apple-touch-icon-120x120.f6f0effa6837166ce1d9.png">
    <link rel="apple-touch-icon" sizes="180x180" href="../static.prdg.io/dist-non-modules/images/apple-touch-icon-180x180.48d1616875d9e641fc7a.png">
    <link rel="apple-touch-icon" sizes="167x167" href="../static.prdg.io/dist-non-modules/images/apple-touch-icon-167x167.f0fca7d85bd8abbfbaa8.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../static.prdg.io/dist-non-modules/images/apple-touch-icon-152x152.144c1bf7000db8f9835c.png">
    <link rel="canonical" href="#">
    <meta name="format-detection" content="telephone=no">
</head>

<body class="loggedIn">
    <link rel="stylesheet" href="//static.prdg.io/dist-non-modules/content/components/font/font.0e7d3d116854f6603774.css" />
    <script src="https://cdn.cookielaw.org/consent/e3b98144-e9b8-4fab-9a3a-3a12894bed0b/OtAutoBlock.js"></script>
    <script src="https://cdn.cookielaw.org/scripttemplates/otSDKStub.js" charset="UTF-8" data-domain-script="e3b98144-e9b8-4fab-9a3a-3a12894bed0b"></script>
    <script>
        function OptanonWrapper() {}
    </script>
    <script id="sbHeadData" type="application/json">
        {
            "topNavMenuApplicable": false,
            "token": {
                "__mBfuPAgT": "83c84d465dd97d5bc74c9acf18cf5e7d9643331a74f267b64279ed14c2aef01e"
            },
            "sbGlbMember": 136484444,
            "emailOnly": false,
            "trayMobileViewV2Applicable": false,
            "currentSbAmount": 49,
            "homepage": true,
            "dailyGoalApplicable": true,
            "activityFeedApplicable": false,
            "isEasymediaWPlusApplicable": false,
            "subscriptionApplicable": false,
            "subscriptionActive": false
        }
    </script>
    <script>
        var CDN_STATIC_CONTENT = '//static.prdg.io';
    </script>
    <script id="sbGlobalsData" type="application/json">
        {
            "EXTERNAL_CONTENT_ROOT": "//ucontent.prdg.io/",
            "EXTERNAL_CONTENT_PATHS": {
                "SHOP_MERCHANT_GROUP_BACKGROUND_SMALL": "img\/shop\/smgbi",
                "PRIZES_MEDIUM": "img\/prizes\/medium",
                "SHOP_MERCHANT_GROUP_LARGE": "img\/shop\/mgs",
                "POLLS_ACTION": "img\/polls\/a",
                "MP_DEFAULT_TILE_IMAGE": "img\/my-points\/tile",
                "SPECIAL_OFFERS_OG_JP_IMAGE": "img\/special-offers\/og",
                "CARD": "img\/card\/0",
                "NOTIFICATIONS_FEATURED_CARD": "img\/notifications\/fc",
                "POLLS_ORIGINAL": "img\/polls\/o",
                "ON_BOARDING_MAIN": "img\/onboarding\/m",
                "SHOP_MERCHANT_BACKGROUND_LARGE": "img\/shop\/mbi",
                "SHOP_MERCHANT_BACKGROUND_SMALL": "img\/shop\/smbi",
                "IN_STORE_CATEGORY_LOGOS": "img\/instore\/category",
                "PRODUCT": "img\/product\/0",
                "IN_STORE_RETAILER_LOGOS": "img\/instore\/logos",
                "PROMOTION_BANNER_HP": "img\/promotion\/lightbox",
                "MP_MERCHANT_GROUP_LOGO_IMAGE": "img\/my-points\/mg-logo",
                "SHOP_MERCHANT_LARGE": "img\/shop\/ms",
                "SWAGSTAKES_MEDIUM": "img\/swagstakes\/medium",
                "POLLS_MAIN": "img\/polls\/m",
                "SHOP_MERCHANT_SMALL": "img\/shop\/ms",
                "IN_STORE_CATEGORY_LOGOS_SVG": "img\/instore\/category",
                "SHOP_MERCHANT_GROUP_BACKGROUND_LARGE": "img\/shop\/mgbi",
                "IN_STORE_RECEIPT_CHALLENGE": "img\/instore\/irc",
                "SHOP_MERCHANT_GROUP_SMALL": "img\/shop\/mgs",
                "SWAGSTAKES_SMALL": "img\/swagstakes\/small",
                "SHOP_MERCHANT_BANNER_360_240": "img\/shop\/mobile-banner",
                "MP_DEFAULT_LOGO_IMAGE": "img\/my-points\/logo",
                "MP_MERCHANT_GROUP_TILE_IMAGE": "img\/my-points\/mg-tile",
                "SPECIAL_OFFERS_OG_W2M_IMAGE": "img\/special-offers\/og",
                "NOTIFICATIONS_PREMIUM_BANNER": "img\/notifications\/pb",
                "COLLECTOR_BILLS": "img\/bills\/0",
                "PRIZES_LARGE": "img\/prizes\/large",
                "IN_STORE_OFFER_OG_IMAGE": "img\/instore\/og",
                "SHOP_MERCHANT_LOGO_88_31": "img\/shop\/logo",
                "IN_STORE_RETAILER_BG_LOGOS": "img\/instore\/bg-logos",
                "SHOP_MERCHANT_BANNER_1140_340": "img\/shop\/banner",
                "SIMPLE_SIGNUP_FORM": "img\/ssu\/f"
            },
            "EXTERNAL_CONTENT_PREFIXES": {
                "SHOP_MERCHANT_GROUP_BACKGROUND_SMALL": "smgbi",
                "PRIZES_MEDIUM": "",
                "SHOP_MERCHANT_GROUP_LARGE": "mgb",
                "POLLS_ACTION": "",
                "MP_DEFAULT_TILE_IMAGE": "brand",
                "SPECIAL_OFFERS_OG_JP_IMAGE": "",
                "CARD": "",
                "NOTIFICATIONS_FEATURED_CARD": "",
                "POLLS_ORIGINAL": "",
                "ON_BOARDING_MAIN": "",
                "SHOP_MERCHANT_BACKGROUND_LARGE": "mbi",
                "SHOP_MERCHANT_BACKGROUND_SMALL": "smbi",
                "IN_STORE_CATEGORY_LOGOS": "",
                "PRODUCT": "",
                "IN_STORE_RETAILER_LOGOS": "",
                "PROMOTION_BANNER_HP": "",
                "MP_MERCHANT_GROUP_LOGO_IMAGE": "mg",
                "SHOP_MERCHANT_LARGE": "mb",
                "SWAGSTAKES_MEDIUM": "",
                "POLLS_MAIN": "",
                "SHOP_MERCHANT_SMALL": "ms",
                "IN_STORE_CATEGORY_LOGOS_SVG": "",
                "SHOP_MERCHANT_GROUP_BACKGROUND_LARGE": "mgbi",
                "IN_STORE_RECEIPT_CHALLENGE": "",
                "SHOP_MERCHANT_GROUP_SMALL": "mgs",
                "SWAGSTAKES_SMALL": "",
                "SHOP_MERCHANT_BANNER_360_240": "",
                "MP_DEFAULT_LOGO_IMAGE": "brand",
                "MP_MERCHANT_GROUP_TILE_IMAGE": "mg",
                "SPECIAL_OFFERS_OG_W2M_IMAGE": "",
                "NOTIFICATIONS_PREMIUM_BANNER": "",
                "COLLECTOR_BILLS": "",
                "PRIZES_LARGE": "",
                "IN_STORE_OFFER_OG_IMAGE": "",
                "SHOP_MERCHANT_LOGO_88_31": "small",
                "IN_STORE_RETAILER_BG_LOGOS": "",
                "SHOP_MERCHANT_BANNER_1140_340": "",
                "SIMPLE_SIGNUP_FORM": ""
            },
            "EXTERNAL_CONTENT_EXTENSIONS": {
                "SHOP_MERCHANT_GROUP_BACKGROUND_SMALL": ".jpg",
                "PRIZES_MEDIUM": "",
                "SHOP_MERCHANT_GROUP_LARGE": ".jpg",
                "POLLS_ACTION": "",
                "MP_DEFAULT_TILE_IMAGE": ".jpg",
                "SPECIAL_OFFERS_OG_JP_IMAGE": "",
                "CARD": "",
                "NOTIFICATIONS_FEATURED_CARD": "",
                "POLLS_ORIGINAL": "",
                "ON_BOARDING_MAIN": "",
                "SHOP_MERCHANT_BACKGROUND_LARGE": ".jpg",
                "SHOP_MERCHANT_BACKGROUND_SMALL": ".jpg",
                "IN_STORE_CATEGORY_LOGOS": "",
                "PRODUCT": "",
                "IN_STORE_RETAILER_LOGOS": "",
                "PROMOTION_BANNER_HP": "",
                "MP_MERCHANT_GROUP_LOGO_IMAGE": ".png",
                "SHOP_MERCHANT_LARGE": ".jpg",
                "SWAGSTAKES_MEDIUM": "",
                "POLLS_MAIN": "",
                "SHOP_MERCHANT_SMALL": ".jpg",
                "IN_STORE_CATEGORY_LOGOS_SVG": "",
                "SHOP_MERCHANT_GROUP_BACKGROUND_LARGE": ".jpg",
                "IN_STORE_RECEIPT_CHALLENGE": "",
                "SHOP_MERCHANT_GROUP_SMALL": ".jpg",
                "SWAGSTAKES_SMALL": "",
                "SHOP_MERCHANT_BANNER_360_240": ".jpg",
                "MP_DEFAULT_LOGO_IMAGE": ".png",
                "MP_MERCHANT_GROUP_TILE_IMAGE": ".jpg",
                "SPECIAL_OFFERS_OG_W2M_IMAGE": "",
                "NOTIFICATIONS_PREMIUM_BANNER": "",
                "COLLECTOR_BILLS": "",
                "PRIZES_LARGE": "",
                "IN_STORE_OFFER_OG_IMAGE": "",
                "SHOP_MERCHANT_LOGO_88_31": ".jpg",
                "IN_STORE_RETAILER_BG_LOGOS": "",
                "SHOP_MERCHANT_BANNER_1140_340": ".jpg",
                "SIMPLE_SIGNUP_FORM": ""
            },
            "PROFILE_HOST": "https://profileimages.prdg.io",
            "PROFILE_UPLOADER_HOST": "//upload.profileimages.EasymediaW.com",
            "EMAIL_INVITES_AMOUNT": 10
        }
    </script>
    <script src="//static.prdg.io/dist-non-modules/content/shared/sbglobals.75e9c5e76a91dfe5e99f.js"></script>
    <link rel="search" href="//static.prdg.io/dist-non-modules/content/open-search/open-search-chrome.cbb6a7acf953589cb993.xml" type="application/opensearchdescription+xml" title="EasymediaW search and get rewarded">
    <script src="//static.prdg.io/dist-non-modules/content/shared/jquery-1.6.4.min.310d26371f84ccea90a1.js"></script>
    <script src="//static.prdg.io/dist-non-modules/content/shared/localize-loader.5c6a8a2c0232e9cbb336.js" id="localizeScript" data-testing="false" data-src="//static.prdg.io/dist-non-modules/content/shared/localize.1fdb88736d80e367d0aa.js" data-bits="{&#34;de&#34;:2,&#34;no&#34;:32768,&#34;ru&#34;:64,&#34;sv&#34;:65536,&#34;pt&#34;:524288,&#34;ko&#34;:262144,&#34;el&#34;:8192,&#34;en&#34;:1,&#34;it&#34;:32,&#34;fr&#34;:128,&#34;es&#34;:1048576,&#34;zh&#34;:256,&#34;ar&#34;:512,&#34;ja&#34;:131072,&#34;pl&#34;:1024,&#34;da&#34;:4096,&#34;tr&#34;:2048,&#34;nl&#34;:16384}" data-language-code="" data-ysense="false" data-key="MldiexN2caLe9" data-languages="{&#34;de&#34;:&#34;Deutsch&#34;,&#34;no&#34;:&#34;norsk&#34;,&#34;ru&#34;:&#34;русский&#34;,&#34;sv&#34;:&#34;svenska&#34;,&#34;pt&#34;:&#34;Português (Brasil)&#34;,&#34;ko&#34;:&#34;한국어&#34;,&#34;el&#34;:&#34;Ελληνικά&#34;,&#34;en&#34;:&#34;English&#34;,&#34;it&#34;:&#34;Italiano&#34;,&#34;fr&#34;:&#34;Français (Canada)&#34;,&#34;es&#34;:&#34;Español (México)&#34;,&#34;zh&#34;:&#34;中文&#34;,&#34;ar&#34;:&#34;العربية&#34;,&#34;ja&#34;:&#34;日本語&#34;,&#34;pl&#34;:&#34;Język polski&#34;,&#34;da&#34;:&#34;dansk&#34;,&#34;tr&#34;:&#34;Türkçe&#34;,&#34;nl&#34;:&#34;Nederlands&#34;}"></script>
    <script crossorigin="anonymous" src="//polyfill.io/v3/polyfill.min.js?flags=gated&features=default,DocumentFragment.prototype.append,Object.assign,Element.prototype.append,~html5-elements,IntersectionObserver,ResizeObserver,Intl.~locale.en,Intl.PluralRules,Intl.DateTimeFormat,Intl.NumberFormat"></script>
    <link rel="stylesheet" href="//static.prdg.io/dist-non-modules/content/components/header/template.880091a8f3f534be6c6a.css" />

    <link rel="stylesheet" href="//static.prdg.io/dist-non-modules/content/shared/css/generic-v3.3c46b8c2d2a888150ba9.css" />
    <link rel="stylesheet" href="//static.prdg.io/dist-non-modules/content/components/header/top-bar/top-bar.4fcdfd73efb3980d918f.css" />
    <script>
        (function() {
            'use strict';

            var global = {
                gAppContent: window.CDN_STATIC_CONTENT,
                intPageId: 1,
                userBrowserType: {
                    browserName: 'chrome',
                    browserVersion: '109'
                },
                location: {
                    countryCodes: {
                        US: 'US',
                        CA: 'CA'
                    },
                    countryCode: 'NG',
                    languageCode: 'ot',
                    id: 512,
                    supports: {
                        coupons: 0,
                        dailyDeals: 0,
                        shopEarn: 1,
                        sbtv: 0,
                        nCrave: 0,
                        sbApp: 0,
                        answerApp: 0,
                        local: 0
                    },
                    currency: {
                        name: 'Dollar',
                        symbol: '&#36;',
                        sbCashValue: 0.01,
                        code: 'USD',
                    },
                    domains: {
                        facebook: 'www.facebook.com/EasymediaW',
                        blog: '/blog',
                        pinterest: 'www.pinterest.com/EasymediaW/',
                        youtube: 'www.youtube.com/user/EasymediaW',
                        twitter: 'www.twitter.com/EasymediaW',
                        instagram: 'www.instagram.com/EasymediaWofficial/',
                        helpCenter: 'help.EasymediaW.com/hc/en-us',
                        helpCenterNewTicket: 'https://help.EasymediaW.com/hc/requests/new',
                        cardLinkedOfferServiceTermsUrl: 'https://www.prodege.com/prodege-card-linked-offer-service-terms/',
                        privacyPolicyUrl: '/privacy-policy-intl',
                        termsOfUseUrl: '/terms-of-use-intl',

                    },
                    zipLabel: 'Postal Code'
                },
                strGaTracker: 'gauniversal',
                strGaTrackerPrepend: 'gauniversal.',
                isAppm: false,
                EMAIL_INVITES_AMOUNT: 10

            };

            init();

            function init() {
                setSbpage();
                setSbglbl();
            }

            function setSbpage() {
                if (typeof window.sbPage === 'undefined') {
                    window.sbPage = {};
                }
            }

            function setSbglbl() {
                if (typeof window.sbGlbl === 'undefined') {
                    window.sbGlbl = global;
                } else {
                    window.sbGlbl = Object.assign(window.sbGlbl, global);
                }
            }
        })();
    </script>
    <script src="//static.prdg.io/dist-non-modules/content/global-includes/js/helpers-new.c74ce40e76f4589d1b59.js"></script>
    <script src="//static.prdg.io/dist-non-modules/content/skin-02/js/top-functions-v2.de7eb06bda3fe88bef5e.js"></script>
    <div id="sbPage">
       <?php include('header.php')?>
        <div id="sbContentOverlay"></div>
        <div id="sbContent">
            <link rel="stylesheet" href="//static.prdg.io/dist-non-modules/content/components/header/top-bar/jquery-plugins.37a081e16b4a18f9031a.css" />
            <script src="//static.prdg.io/dist-non-modules/content/components/header/top-bar/jquery-plugins.06aa462fcaee532d8433.js"></script>
            <script src="//static.prdg.io/dist-non-modules/content/components/banner/banner-v2.3377fbfdf01106a390d6.js" data-css-src="//static.prdg.io/dist-non-modules/content/components/banner/banner-v2.4e1f9e366219e5cfbded.css"></script>
            <script src="//static.prdg.io/dist-non-modules/content/components/header/top-bar/top-bar.3b6f94687f7a13617b4a.js"></script>
            <script src="//static.prdg.io/dist-non-modules/content/components/header/top-bar/search.204e2199cc01f1509832.js"></script>
            <script src="//static.prdg.io/dist-non-modules/content/components/header/top-bar/menus.0d8f3da7f8426c710521.js"></script>
            <script src="//static.prdg.io/dist-non-modules/content/shared/jquery.tmpl.49b33d8b10460c2c5988.js"></script>
            <script>
                sbGlbl.tourVisible = true;
            </script>
            <div id="middle" class="contOuter">
                <div id="middleInner" class="cRgt">
                    <link rel="stylesheet" href="//static.prdg.io/dist-non-modules/content/shared/shared-layout-v2.2c3a4fdc810030ef82c5.css" />
                    <link rel="stylesheet" href="//static.prdg.io/dist-non-modules/content/shared/navbar.eef607845fa8c2c7cfe6.css" />
                    <link rel="stylesheet" href="//static.prdg.io/dist-non-modules/content/shared/responsive-v2.edb119b748b069701e21.css" />
                    <main id="earningCardsWrap" class="earningCardsWrap isCompanionAdsSidebarNotPresent">
                        <script>
                            var onBoarding = {
                                levels: [{
                                    levelId: 1,
                                    name: 'Welcome to EasymediaW',
                                    shortName: 'Welcome',
                                    imageId: 0,
                                    sb: 0,
                                    minutes: 0,
                                    activeText: '',
                                    dialog: false
                                }],
                                stepCount: 9,
                                steps: {
                                    1: [{
                                        stepId: 380,
                                        settingFlag: 0,
                                        levelId: 1,
                                        sb: 0,
                                        flag: 32,
                                        nextStepId: 390,
                                        name: 'Welcome to EasymediaW'
                                    }, {
                                        stepId: 390,
                                        settingFlag: 0,
                                        levelId: 1,
                                        sb: 0,
                                        flag: 32,
                                        nextStepId: 400,
                                        name: 'Ways to earn'
                                    }, {
                                        stepId: 400,
                                        settingFlag: 0,
                                        levelId: 1,
                                        sb: 0,
                                        flag: 32,
                                        nextStepId: 410,
                                        name: 'Redeem your SB'
                                    }, {
                                        stepId: 410,
                                        settingFlag: 0,
                                        levelId: 1,
                                        sb: 0,
                                        flag: 32,
                                        nextStepId: 420,
                                        name: 'SB for completing'
                                    }, {
                                        stepId: 420,
                                        settingFlag: 0,
                                        levelId: 1,
                                        sb: 0,
                                        flag: 32,
                                        nextStepId: 430,
                                        name: 'SB per dollar'
                                    }, {
                                        stepId: 430,
                                        settingFlag: 0,
                                        levelId: 1,
                                        sb: 0,
                                        flag: 32,
                                        nextStepId: 440,
                                        name: 'Earnings'
                                    }, {
                                        stepId: 440,
                                        settingFlag: 0,
                                        levelId: 1,
                                        sb: 0,
                                        flag: 0,
                                        nextStepId: 1000,
                                        name: 'Easy Earners'
                                    }, {
                                        stepId: 1000,
                                        settingFlag: 0,
                                        levelId: 1,
                                        sb: 0,
                                        flag: 0,
                                        nextStepId: 1010,
                                        name: 'Opted-out'
                                    }, {
                                        stepId: 1010,
                                        settingFlag: 0,
                                        levelId: 1,
                                        sb: 0,
                                        flag: 0,
                                        nextStepId: -1,
                                        name: 'Opted-out child'
                                    }]
                                },
                                map: {
                                    380: function() {
                                        return onBoarding.steps[1][0];
                                    },
                                    390: function() {
                                        return onBoarding.steps[1][1];
                                    },
                                    400: function() {
                                        return onBoarding.steps[1][2];
                                    },
                                    410: function() {
                                        return onBoarding.steps[1][3];
                                    },
                                    420: function() {
                                        return onBoarding.steps[1][4];
                                    },
                                    430: function() {
                                        return onBoarding.steps[1][5];
                                    },
                                    440: function() {
                                        return onBoarding.steps[1][6];
                                    },
                                    1000: function() {
                                        return onBoarding.steps[1][7];
                                    },
                                    1010: function() {
                                        return onBoarding.steps[1][8];
                                    }
                                }
                            };
                            // onboarding object
                            var memberOnBoardingInfo = {
                                onBoardingId: 25,
                                completedInfo: {
                                    10: 0,
                                    40: 0,
                                    100: 0,
                                    120: 0,
                                    140: 0,
                                    620: 0,
                                    660: 0,
                                    670: 0,
                                    680: 0,
                                    690: 0,
                                    700: 0,
                                    710: 0,
                                    720: 0,
                                    730: 0,
                                    1360: 0
                                },
                                curStep: 380
                            };

                            var onBoarding2 = {
                                levels: [{
                                    levelId: 1,
                                    name: 'Welcome to EasymediaW Homepage 2',
                                    shortName: 'Welcome',
                                    imageId: 0,
                                    sb: 0,
                                    minutes: 0,
                                    activeText: '',
                                    dialog: false
                                }],
                                stepCount: 6,
                                steps: {
                                    1: [{
                                        stepId: 790,
                                        settingFlag: 0,
                                        levelId: 1,
                                        sb: 0,
                                        flag: 32,
                                        nextStepId: 800,
                                        name: 'Welcome to Homepage 2'
                                    }, {
                                        stepId: 800,
                                        settingFlag: 0,
                                        levelId: 1,
                                        sb: 0,
                                        flag: 32,
                                        nextStepId: 810,
                                        name: 'Homepage Rewards 2'
                                    }, {
                                        stepId: 810,
                                        settingFlag: 0,
                                        levelId: 1,
                                        sb: 0,
                                        flag: 32,
                                        nextStepId: 820,
                                        name: 'Homepage Redeem 2'
                                    }, {
                                        stepId: 820,
                                        settingFlag: 0,
                                        levelId: 1,
                                        sb: 0,
                                        flag: 32,
                                        nextStepId: 1000,
                                        name: 'Homepage Earnings 2'
                                    }, {
                                        stepId: 1000,
                                        settingFlag: 0,
                                        levelId: 1,
                                        sb: 0,
                                        flag: 0,
                                        nextStepId: 1010,
                                        name: 'Opted-out'
                                    }, {
                                        stepId: 1010,
                                        settingFlag: 0,
                                        levelId: 1,
                                        sb: 0,
                                        flag: 0,
                                        nextStepId: -1,
                                        name: 'Opted-out child'
                                    }]
                                },
                                map: {
                                    790: function() {
                                        return onBoarding2.steps[1][0];
                                    },
                                    800: function() {
                                        return onBoarding2.steps[1][1];
                                    },
                                    810: function() {
                                        return onBoarding2.steps[1][2];
                                    },
                                    820: function() {
                                        return onBoarding2.steps[1][3];
                                    },
                                    1000: function() {
                                        return onBoarding2.steps[1][4];
                                    },
                                    1010: function() {
                                        return onBoarding2.steps[1][5];
                                    }
                                }
                            };
                            // onboarding 2 object
                            var memberOnBoarding2Info = {
                                onBoardingId: 31,
                                completedInfo: {
                                    10: 0,
                                    40: 0,
                                    100: 0,
                                    120: 0,
                                    140: 0,
                                    620: 0,
                                    660: 0,
                                    670: 0,
                                    680: 0,
                                    690: 0,
                                    700: 0,
                                    710: 0,
                                    720: 0,
                                    730: 0,
                                    1360: 0
                                },
                                curStep: 790
                            };

                            memberOnBoardingInfo.boardingHsh = 'a24e831f2fbe327e49c2e1f9d6a71097';

                            if (typeof sbGlbl === 'object') {
                                sbGlbl.objOnboarding = {};
                            } else {
                                var sbGlbl = {
                                    objOnboarding: {}
                                };
                            }

                            sbGlbl.objOnboarding.intTourID = 4;
                            sbGlbl.objOnboarding.strChannelName = 'Homepage';
                        </script>
                        <link rel="stylesheet" href="//static.prdg.io/dist-non-modules/content/components/onboarding/onboarding-v2.3789c2e32f206684e765.css" />
                        <link rel="stylesheet" href="//static.prdg.io/dist-non-modules/content/components/onboarding/homepage-onboarding-v2.f86cae868fed80c51521.css" />
                        <aside id="userTourContainer" class="sbTour" hidden aria-hidden="true">
                            <div id="sbTour1" class="sbTourWrapper" data-tour-id="4" data-tour-name="Homepage">
                                <section id="hpTourSlideReferral" class="userTourSlide userTourStaticPositionSlide blueTheme" data-step="0">
                                    <span class="inlineBlock inlineSet"></span>
                                    <!--
         -->
                                    <div class="userTourSlideDesc inlineBlock">
                                        <div class="userTourTitle">Welcome to EasymediaW!
                                        </div>
                                        <p>
                                            Thanks for accepting the invitation from your friend<var></var>
                                            .

                                        </p>
                                        <button id="hpTourSlideReferralVideoCta" class="sbCta">
                                            <span class="sbVisuallyHidden">Play</span>
                                        </button>
                                        <p id="hpTourSlideReferralVideoLabel">Play video to learn more</p>
                                        <button class="userTourCTA sbCta">Skip Video &Continue
                                        </button>
                                        <script>
                                            var welcomeVidURL = '//www.youtube.com/embed/-BJQD_iuJY4?rel=0&autoplay=1&wmode=opaque';
                                        </script>
                                    </div>
                                </section>
                                <section id="hpTourSlideWelcome" class="userTourSlide userTourCurrentSlide userTourStaticPositionSlide blueTheme" data-step="380">
                                    <span class="inlineBlock inlineSet"></span>
                                    <!--
         -->
                                    <div class="userTourSlideDesc inlineBlock">
                                        <div class="userTourIcon userTourIconSBLogo"></div>
                                        <div class="userTourTitle">Welcome to EasymediaW
                                        </div>
                                        <p>Our mission is to get you free gift cards by rewarding you points (called SB) for things you do online.
                                        </p>
                                        <button class="userTourCTA userTourContinueCTA sbCta">Show me how (in 1 minute)
                                        </button>
                                        <button id="hpTourSlideWelcomeSkipCta" class="smallLink userTourExitCTA sbCta" data-text="Skip">Skip this tour and get me started
                                        </button>
                                    </div>
                                </section>
                                <!--
     -->
                                <section id="hpTourSlideRewards" class="userTourSlide userTourStaticPositionSlide blueTheme" data-step="390">
                                    <span class="userTourIcon userTourIconClose userTourExitCTA" data-text="Close"></span>
                                    <div id="userTourRewards">
                                        <span class="userTourIcon userTourIconArrowUL"></span>
                                        Earn SB when you shop, <br />
                                        watch videos, play games,<br />
                                        answer surveys, search<br />the web, and more!

                                    </div>
                                    <span class="inlineBlock inlineSet"></span>
                                    <!--
         -->
                                    <div class="userTourSlideDesc inlineBlock">
                                        <div class="userTourTitle">
                                            Get rewarded for discovering things you &apos;re <span class="sbNoLineBreak">interested in.</span>
                                        </div>
                                        <button class="userTourCTA userTourContinueCTA sbCta">Tell me more
                                        </button>
                                    </div>
                                </section>
                                <!--
     -->
                                <section id="hpTourSlideRedeem" class="userTourSlide userTourStaticPositionSlide blueTheme" data-step="400">
                                    <span class="userTourIcon userTourIconClose userTourExitCTA" data-text="Close"></span>
                                    <span id="userTourRedeemGC">
                                        <span class="userTourIcon userTourIconArrowUL"></span>
                                        Go here to redeem your<br />SB for free gift cards.

                                    </span>
                                    <span class="inlineBlock inlineSet"></span>
                                    <!--
         -->
                                    <div class="userTourSlideDesc inlineBlock">
                                        <div class="userTourTitle">Redeem your SB for free gift cards.
                                        </div>
                                        <p>Our Rewards Store has over 140 brands to choose from, including Amazon, Walmart, and PayPal.
                                        </p>
                                        <button class="userTourCTA userTourContinueCTA sbCta">Great. Go on.
                                        </button>
                                    </div>
                                </section>
                                <!--
     -->
                                <section id="hpHomeTourSlideTips" class="userTourSlide userTourFluidPositionSlide" data-step="410">
                                    <div class="userTourSlideDesc">
                                        <section id="userTourIconPopularOffer" class="inlineBlock">
                                            <div class="sbCard sbHomeCard sbOnTourCard animateScaleDown">
                                                <header class="sbTrayListItemHeader">
                                                    <div class="sbHomeTourCardHeader"></div>
                                                    <h1 class="sbTrayListItemHeaderCaption cardHeader">Popular Offer</h1>
                                                </header>
                                                <p class="sbTrayListItemSbContainer">
                                                    <span class="sbTrayListItemSbEarn sbPrimaryColor">
                                                        Earn <var>3 SB</var>
                                                    </span>
                                                </p>
                                                <span class="sbTrayListItemSbType">Discover &amp;earn</span>
                                            </div>
                                        </section>
                                        <!--
             -->
                                        <span class="userTourIcon userTourIconArrowDL inlineBlock"></span>
                                        <div id="userHomeTourCardTips">
                                            <span class="userTourIcon userTourIconClose userTourExitCTA" data-text="Close"></span>
                                            <div class="userTourIntTitle">Just a few more tips
                                            </div>
                                            <div class="userTourIntText">
                                                <p>
                                                    Look here to see how many SB you &apos;ll earn. This example shows that you &apos;ll earn <var>3 SB</var>
                                                    for completing this activity.

                                                </p>
                                                <button class="userTourCTA userTourContinueCTA sbCta">OK. Next.
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <!--
     -->
                                <section id="hpHomeTourSlideTips2" class="userTourSlide userTourFluidPositionSlide" data-step="420">
                                    <div class="userTourSlideDesc">
                                        <section id="userTourIconPopularStore" class="inlineBlock">
                                            <div class="sbCard sbHomeCard sbOnTourCard animateScaleDown">
                                                <header class="sbTrayListItemHeader">
                                                    <div class="sbHomeTourCardHeader"></div>
                                                    <h1 class="sbTrayListItemHeaderCaption cardHeader">Recommended Store</h1>
                                                </header>
                                                <p class="sbTrayListItemSbContainer">
                                                    <span class="sbTrayListItemSbEarn sbPrimaryColor">2% Cash Back</span>
                                                </p>
                                                <span class="sbTrayListItemSbType">
                                                    Earn <var>2 SB</var>
                                                    per <var>&#36;1.00</var>
                                                </span>
                                            </div>
                                            <span class="userTourIcon userTourIconArrowDown inlineBlock"></span>
                                        </section>
                                        <!--
             -->
                                        <div id="userTourIconTips2Text" class="inlineBlock">
                                            <span class="userTourIcon userTourIconClose userTourExitCTA" data-text="Close"></span>
                                            <div class="userTourIntText">
                                                <p>
                                                    Stores display rewards like this. This example shows that you &apos;ll earn <var>2 SB</var>
                                                    for every <var>&#36;1.00</var>
                                                    you spend at this store.

                                                </p>
                                                <button class="userTourCTA userTourContinueCTA sbCta">OK. Next.
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <!--
     -->
                                <section id="hpTourSlideEarnings" class="userTourSlide userTourFluidPositionSlide" data-step="430">
                                    <div class="userTourSlideDesc inlineBlock">
                                        <div id="homeTourTipWrapper">
                                            <span class="userTourIcon userTourIconArrowUp"></span>
                                            <div class="userTourIntText">
                                                <p>
                                                    Keep track of your<br />total earnings here.

                                                </p>
                                                <p>
                                                    <var>100 SB = &#36;1.00</var>
                                                </p>
                                                <p>
                                                    You can get your first gift card for as little as <var>300 &nbsp;SB</var>
                                                    (for a <var>&#36;3</var>
                                                    gift card).

                                                </p>
                                                <button class="userTourCTA userTourContinueCTA sbCta">Got it. Next.
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <!--
     -->
                                <section id="hpTourSlideSwagButton" class="userTourSlide userTourFluidPositionSlide" data-step="440">
                                    <span class="userTourIcon userTourArrowBlueDLLrg inlineBlock"></span>
                                    <!--
         -->
                                    <div class="userTourSlideDesc inlineBlock">
                                        <div class="userTourIntText">
                                            <p>Take your deals to go!
                                            </p>
                                            <p>Get our FREE SwagButton browser extension and get alerts about new earning opportunities even when you &apos;re not on the EasymediaW website.
                                            </p>
                                            <a class="userTourCTA userTourContinueCTA" href="/extension" target="_blank">Get the SwagButton
                                            </a>
                                        </div>
                                        <button id="hpTourEnd" class="sbPrimaryColor userTourExitCTA sbCta">No thanks. I &apos;m ready to explore!
                                        </button>
                                    </div>
                                </section>
                                <div class="clear"></div>
                            </div>
                            <div id="sbTour2" class="sbTourWrapper" data-tour-id="10" data-tour-name="Homepage 2">
                                <section id="hpTourSlideReferral2" class="userTourSlide userTourSlideTiny userTourStaticPositionSlide blueTheme" data-step="0">
                                    <span class="inlineBlock inlineSet"></span>
                                    <!--
         -->
                                    <div class="userTourSlideDesc inlineBlock">
                                        <div class="userTourTitle">Welcome to EasymediaW!
                                        </div>
                                        <p>
                                            Thanks for accepting the invitation from your friend<var></var>
                                            .

                                        </p>
                                        <button id="hpTourSlideReferralVideoCta2" class="sbCta">
                                            <span class="sbVisuallyHidden">Play</span>
                                        </button>
                                        <p id="hpTourSlideReferralVideoLabel2">Play video to learn more</p>
                                        <button class="userTourCTA sbCta">Skip Video &Continue
                                        </button>
                                    </div>
                                </section>
                                <section id="hpTourSlideWelcome" class="userTourSlide userTourSlideTiny userTourCurrentSlide userTourStaticPositionSlide blueTheme" data-step="790">
                                    <div class="userTourSlideDesc inlineBlock">
                                        <div class="userTourIcon userTourIconSBLogo"></div>
                                        <div class="userTourTitle">Welcome to EasymediaW
                                        </div>
                                        <p class="sbTour2Desc">Our mission is to get you free gift cards by rewarding you points (called SB) for things you do online.
                                        </p>
                                        <button class="userTourCTA userTourContinueCTA sbCta">Show me how (in 1 minute)
                                        </button>
                                        <button id="hpTourSlideWelcomeSkipCta" class="smallLink userTourExitCTA sbCta" data-text="Skip">Skip this tour and get me started
                                        </button>
                                    </div>
                                </section>
                                <!--
     -->
                                <section id="hpTourSlideRewards" class="userTourSlide userTourSlideTiny userTourStaticPositionSlide blueTheme" data-step="800">
                                    <div class="sbTour2UserTourRewards">
                                        <span class="userTourIcon sbTour2UserTourIcon"></span>
                                        <span class="sbTour2AfterArrow">
                                            You can tap the <span class="sbTour2MainNavToggleIcon"></span>
                                            to see all the ways you can earn SB towards free gift cards.

                                        </span>
                                    </div>
                                    <div class="userTourSlideDesc inlineBlock">
                                        <div class="userTourTitle">Get rewarded for discovering things you &apos;re interested in.
                                        </div>
                                        <button class="userTourCTA userTourContinueCTA sbCta">Tell me more
                                        </button>
                                    </div>
                                </section>
                                <!--
     -->
                                <section id="hpTourSlideRedeem" class="userTourSlide userTourSlideTiny userTourStaticPositionSlide blueTheme" data-step="810">
                                    <div class="sbTour2UserTourRewards">
                                        <span class="userTourIcon sbTour2UserTourIcon"></span>
                                        <span class="sbTour2AfterArrow">
                                            You can tap the <span class="sbTour2MainNavToggleIcon"></span>
                                            to access the Rewards Store

                                        </span>
                                    </div>
                                    <div class="userTourSlideDesc inlineBlock">
                                        <div class="userTourTitle">Redeem your SB for free gift cards.
                                        </div>
                                        <p class="sbTour2Desc">Our Rewards Store has over 140 brands to choose from, including Amazon, Walmart, and PayPal.
                                        </p>
                                        <button class="userTourCTA userTourContinueCTA sbCta">Great. Go on.
                                        </button>
                                    </div>
                                </section>
                                <!--
     -->
                                <section id="hpTourSlideEarnings" class="userTourSlide userTourSlideTiny userTourFluidPositionSlide userTourStaticPositionSlide blueTheme" data-step="820">
                                    <div class="userTourSlideDesc inlineBlock">
                                        <div class="sbTour2TextRight">
                                            <span class="userTourIcon sbTour2MenuArrow"></span>
                                        </div>
                                        <div class="userTourIntText">
                                            <p class="sbTour2Desc">Keep track of your total earnings here.
                                            </p>
                                            <p class="sbTour2Desc">100 SB = &#36;1.00
                                            </p>
                                            <p class="sbTour2Desc">
                                                You can get your first gift card for as little as <var>300 &nbsp;SB</var>
                                                (for a <var>&#36;3</var>
                                                gift card).

                                            </p>
                                            <button class="userTourCTA userTourContinueCTA sbCta">Ok. I &apos;m ready to start!
                                            </button>
                                        </div>
                                    </div>
                                </section>
                                <div class="clear"></div>
                            </div>
                        </aside>
                        <script>
                            sbGlbl.tourVisible = true;

                            if (!sbGlbl.tourVisible) {
                                typeof sbPromoButton !== 'undefined' && sbPromoButton.show();
                            }
                        </script>
                        <script src="//static.prdg.io/dist-non-modules/content/components/onboarding/homepage-onboarding-v2.d1dd6950b5e0d01cb540.js"></script>
                        <script src="//static.prdg.io/dist-non-modules/content/components/onboarding/onboarding-v2.d850f4c9f4f060f6bacb.js"></script>
                        <aside id="prefsCont" hidden aria-hidden="true">
                            <section id="prefsSelectCont">
                                <button id="prefsClose" class="sbCta"></button>
                                <div id="prefsTitle">Customize your EasymediaW experience</div>
                                <div id="prefsItemsCont">
                                    <div id="prefItem1" class="pref" stream="7">
                                        <span></span>
                                        Discovering deals
                                    </div>
                                    <div id="prefItem3" class="pref" stream="164">
                                        <span></span>
                                        Shopping online
                                    </div>
                                    <div id="prefItem4" class="pref" stream="9">
                                        <span></span>
                                        Answering surveys
                                    </div>
                                    <div id="prefItem5" class="pref" stream="11">
                                        <span></span>
                                        Playing games
                                    </div>
                                </div>
                                <div id="prefsContinueCont">
                                    <div id="prefsContinue">Continue</div>
                                </div>
                            </section>
                            <section id="prefsLoadCont">
                                <div id="prefsLoader"></div>
                                <div id="prefsLoaderText">Customizing your Homepage</div>
                            </section>
                        </aside>
                        <link rel="stylesheet" href="//static.prdg.io/dist-non-modules/content/projects/homepage/tray-preferences.a0cf02f2412075b1f7ab.css" />
                        <script src="//static.prdg.io/dist-non-modules/content/projects/homepage/tray-preferences.92c54f45ff62d69906c4.js"></script>
                        <script>
                            trayPrefs.memberPrefs = [];
                        </script>
                        <script>
                            sbGlbl.isHome = true;
                        </script>
                        <script id="subscriptionModalData" type="application/json">
                            {
                                "loginCountForSubscriptionModal": 0
                            }
                        </script>
                        <link rel="stylesheet" href="//static.prdg.io/dist-non-modules/answer-card-v2.701cc8c0eb8c53824b78.css" />
                        <script>
                            sbGlbl.homeLocation = {
                                locationID: 512,
                                currencyName: 'Dollar',
                                currencySymbol: '&#36;',
                                currencyCode: 'USD',
                                countryCode: 'OT',
                                languageCode: 'ot',
                            };

                            sbGlbl.getCardsLocation = function() {
                                return this.merchantLocation || this.shopLocation || this.homeLocation || {};
                            };

                            if (typeof sbCards === 'undefined') {
                                window.sbCards = {};
                            }

                            var _gaq = _gaq || [],
                                showNewCards = true,
                                memberEmail = "tonymax1049@gmail.com",
                                specificStream = 0,
                                useNotificationsForPremiumAndFeatured = true;
                            sbGlbl.premiumAndFeaturedCards = {
                                "featured": [],
                                "premium": []
                            };

                            var hasStaticCardsTray = false;

                            var streams = [{
                                streamID: 9,
                                cards: [],
                                nextIndex: 422,
                                allUrl: '/surveys',
                                title: 'Answer Surveys and Earn',
                                showViewMore: true,
                                currentSort: 120,
                                rows: 2,
                                popularSort: 4,
                                expectedCardCount: 20,
                                streamIntro: {
                                    title: 'Answer',
                                    subTitle: 'Earn SB for answering surveys and influencing brands'
                                },
                                channel: 'Answer'
                            }, {
                                streamID: 7,
                                cards: [{
                                    cardId: 1887143,
                                    cardTypeId: 98,
                                    header: '82% off 2 years + 4 months free!',
                                    subHeader: 'Protect your digital life with 82% off + 4 FREE months! Purchase a 2-year plan to earn 3,600 SB*',
                                    link: 'https:\/\/www.EasymediaW.com\/g\/shopredir?trkid=p9176664&merchant=25986&page=18',
                                    image: '20\/2022b424-1101-405b-89c1-9294ab9645f4.jpg',
                                    targetBlank: 1,
                                    integrationTypeID: '8',
                                    suppressX: false,
                                    modalButtonText: '',
                                    thingsToKnow: ["Requires the purchase of a 2-year subscription.", "Please allow 60 days for SB to credit.", "Must remain subscribed for 30 days to earn SB."],
                                    disclaimer: '*SB will appear as Pending for 60 days. This offer is only available to new Private Internet Access customers\/subscribers. Must remain subscribed for 30 days to earn SB. Must submit valid name, address, credit card and other subscription information to earn SB. Offer may only be redeemed once (1) per user.  This offer is presented to you by EasymediaW on behalf of a third-party merchant or sponsor (\"Merchant\"). EasymediaW does not endorse (and therefore is not responsible to you for) the Merchant\'s views, policies, products or services. Have questions? Please contact the EasymediaW Help Center.',
                                    pImageId: 121358,
                                    image600x300: 'https:\/\/ucontent.prdg.io\/pimages\/83\/83a7c123-3d56-4c78-bd5d-b26d7a42cbce.jpg',
                                    iconType: 0,
                                    pos: 0,
                                    trkId: 'p9176664',
                                    perDollar: false,
                                    upTo: false,
                                    impressions: 12227426,
                                    rewardDelay: 0,
                                    offer: 14942,
                                    earn: 3600,
                                    isSuppressModal: false,
                                    discoverBonusAmount: 0,
                                    discoverBonusPercent: 0
                                }, {
                                    cardId: 1804177,
                                    cardTypeId: 98,
                                    header: '49% off 12 months + get 3 months free!',
                                    subHeader: 'High-speed, secure & anonymous VPN service. Purchase the 1-month package to earn 800 SB or 6-month package to earn 2,000 SB. Get 3 months for free when you purchase the 12-month package, plus earn 4,000 SB!*',
                                    link: 'https:\/\/www.EasymediaW.com\/g\/shopredir?trkid=p8956881&merchant=27470&page=18&drctLink=0',
                                    image: '2f\/2ffaed50-eb94-41bb-b1ef-7096badde604.jpg',
                                    targetBlank: 1,
                                    integrationTypeID: '8',
                                    suppressX: false,
                                    modalButtonText: '',
                                    thingsToKnow: ["Requires a purchase.", "Award will Pend for 90 days.", "New customers only. Must purchase a package to earn award."],
                                    disclaimer: '*New customers only. SB will appear as Pending for 90 days. Must purchase a package to earn SB. Must enter valid sign-up information, including credit card information to earn SB. Offer may only be redeemed once (1) per user. This offer is presented to you by EasymediaW on behalf of a third-party merchant or sponsor (\"Merchant\"). EasymediaW does not endorse (and therefore is not responsible to you for) the Merchant\'s views, policies, products or services. Have questions? Please contact the EasymediaW Help Center.',
                                    pImageId: 144166,
                                    image600x300: 'https:\/\/ucontent.prdg.io\/pimages\/b7\/b7c64b28-7d96-43fd-9947-f0f2a2651709.jpg',
                                    iconType: 18,
                                    pos: 1,
                                    trkId: 'p8956881',
                                    perDollar: false,
                                    upTo: true,
                                    impressions: 5611259,
                                    rewardDelay: 0,
                                    offer: 14554,
                                    earn: 4000,
                                    isSuppressModal: false,
                                    discoverBonusAmount: 0,
                                    discoverBonusPercent: 0
                                }, {
                                    cardId: 2666695,
                                    cardTypeId: 98,
                                    header: 'Lords Mobile - Android Only!',
                                    subHeader: 'Unite the kingdoms and build your empire in the game of Lords Mobile. Install the app and reach castle level 11 to earn 500 SB!*',
                                    link: 'https:\/\/www.ayetstudios.com\/s2s\/pub\/191817\/1270\/9587\/10910?external_identifier=136484444',
                                    image: '',
                                    targetBlank: 1,
                                    integrationTypeID: '1',
                                    suppressX: false,
                                    modalButtonText: '',
                                    thingsToKnow: ["This offer does not require a purchase.", "SB awarded within 48 hours.", "Must be a new user to earn. "],
                                    disclaimer: '*SB will appear as Pending for 2 days. Must be a new user of Lords Mobile app to earn SB. Offer may only be redeemed (1) one time per user.  This offer is presented to you by EasymediaW on behalf of a third party merchant or sponsor (\"Merchant\"), which advises us when the offer is completed and a reward should be issued.  EasymediaW has not evaluated and does not endorse Merchant\'s views, policies, products or services, which you are encouraged to evaluate for yourself. Have questions? Please contact the EasymediaW Help Center.',
                                    image600x300: 'https:\/\/ucontent.prdg.io\/pimages\/dd\/dd21ec53-8215-4798-9565-603661a94eb1.jpg',
                                    iconType: 0,
                                    pos: 2,
                                    trkId: 'p9177520',
                                    perDollar: false,
                                    upTo: false,
                                    impressions: 66926,
                                    rewardDelay: 3,
                                    offer: 9073,
                                    earn: 500,
                                    isSuppressModal: false,
                                    discoverBonusAmount: 0,
                                    discoverBonusPercent: 0
                                }],
                                nextIndex: 59,
                                allUrl: '/discover',
                                title: 'Discover Special Offers and Earn',
                                showViewMore: true,
                                currentSort: 4,
                                rows: 2,
                                popularSort: 4,
                                expectedCardCount: 20,
                                streamIntro: {
                                    title: 'Discover',
                                    subTitle: 'Earn SB and discover amazing special offers'
                                },
                                channel: 'Discover'
                            }, {
                                streamID: 5,
                                cards: [{
                                    cardId: 1887143,
                                    cardTypeId: 98,
                                    header: '82% off 2 years + 4 months free!',
                                    subHeader: 'Protect your digital life with 82% off + 4 FREE months! Purchase a 2-year plan to earn 3,600 SB*',
                                    link: 'https:\/\/www.EasymediaW.com\/g\/shopredir?trkid=p9176664&merchant=25986&page=18',
                                    image: '20\/2022b424-1101-405b-89c1-9294ab9645f4.jpg',
                                    targetBlank: 1,
                                    integrationTypeID: '8',
                                    suppressX: false,
                                    modalButtonText: '',
                                    thingsToKnow: ["Requires the purchase of a 2-year subscription.", "Please allow 60 days for SB to credit.", "Must remain subscribed for 30 days to earn SB."],
                                    disclaimer: '*SB will appear as Pending for 60 days. This offer is only available to new Private Internet Access customers\/subscribers. Must remain subscribed for 30 days to earn SB. Must submit valid name, address, credit card and other subscription information to earn SB. Offer may only be redeemed once (1) per user.  This offer is presented to you by EasymediaW on behalf of a third-party merchant or sponsor (\"Merchant\"). EasymediaW does not endorse (and therefore is not responsible to you for) the Merchant\'s views, policies, products or services. Have questions? Please contact the EasymediaW Help Center.',
                                    pImageId: 121358,
                                    image600x300: 'https:\/\/ucontent.prdg.io\/pimages\/83\/83a7c123-3d56-4c78-bd5d-b26d7a42cbce.jpg',
                                    iconType: 0,
                                    pos: 0,
                                    trkId: 'p9176664',
                                    perDollar: false,
                                    upTo: false,
                                    impressions: 12227426,
                                    rewardDelay: 0,
                                    offer: 14942,
                                    earn: 3600,
                                    isSuppressModal: false,
                                    discoverBonusAmount: 0,
                                    discoverBonusPercent: 0
                                }, {
                                    cardId: 1804177,
                                    cardTypeId: 98,
                                    header: '49% off 12 months + get 3 months free!',
                                    subHeader: 'High-speed, secure & anonymous VPN service. Purchase the 1-month package to earn 800 SB or 6-month package to earn 2,000 SB. Get 3 months for free when you purchase the 12-month package, plus earn 4,000 SB!*',
                                    link: 'https:\/\/www.EasymediaW.com\/g\/shopredir?trkid=p8956881&merchant=27470&page=18&drctLink=0',
                                    image: '2f\/2ffaed50-eb94-41bb-b1ef-7096badde604.jpg',
                                    targetBlank: 1,
                                    integrationTypeID: '8',
                                    suppressX: false,
                                    modalButtonText: '',
                                    thingsToKnow: ["Requires a purchase.", "Award will Pend for 90 days.", "New customers only. Must purchase a package to earn award."],
                                    disclaimer: '*New customers only. SB will appear as Pending for 90 days. Must purchase a package to earn SB. Must enter valid sign-up information, including credit card information to earn SB. Offer may only be redeemed once (1) per user. This offer is presented to you by EasymediaW on behalf of a third-party merchant or sponsor (\"Merchant\"). EasymediaW does not endorse (and therefore is not responsible to you for) the Merchant\'s views, policies, products or services. Have questions? Please contact the EasymediaW Help Center.',
                                    pImageId: 144166,
                                    image600x300: 'https:\/\/ucontent.prdg.io\/pimages\/b7\/b7c64b28-7d96-43fd-9947-f0f2a2651709.jpg',
                                    iconType: 18,
                                    pos: 1,
                                    trkId: 'p8956881',
                                    perDollar: false,
                                    upTo: true,
                                    impressions: 5611259,
                                    rewardDelay: 0,
                                    offer: 14554,
                                    earn: 4000,
                                    isSuppressModal: false,
                                    discoverBonusAmount: 0,
                                    discoverBonusPercent: 0
                                }, {
                                    cardId: 1927518,
                                    cardTypeId: 40,
                                    header: "Alu\'s Revenge 2",
                                    subHeader: "How to Play:\r\n\r\nIn the spirit of the popular game Toon Blast, in this classic collapse game you\'ll want to click on any group of two or more tiles of the same color to &hellip;",
                                    image: "//ucontent.prdg.io/pimages/b1/b134e78e-a49b-4ece-bed8-4182249b8d28.jpg",
                                    earn: 10,
                                    link: "/games/play/319/alu-s-revenge-2",
                                    pos: 2,
                                    trkId: '1927518'
                                }, {
                                    cardId: 1927520,
                                    cardTypeId: 40,
                                    header: "Pyramid Solitaire",
                                    subHeader: "Brush up on your addition skills with this fan-favorite solitaire variant! Instead of using foundation piles, you can remove open cards from the board in any order. The &hellip;",
                                    image: "//ucontent.prdg.io/pimages/c5/c54f3be8-e68e-4d6b-81c4-95acd4f45eae.jpg",
                                    earn: 10,
                                    link: "/games/play/317/pyramid-solitaire",
                                    pos: 3,
                                    trkId: '1927520'
                                }, {
                                    cardId: 1927519,
                                    cardTypeId: 40,
                                    header: "Mahjongg Dimensions",
                                    subHeader: "This free online game brings Mahjongg to a whole new...dimension. A third dimension, that is. Turn and tap elegant puzzles at rapid speed. Click on matching pairs of &hellip;",
                                    image: "//ucontent.prdg.io/pimages/7a/7ab120b0-e6bb-41f4-9fe2-1392a1a43ce1.jpg",
                                    earn: 10,
                                    link: "/games/play/318/mahjongg-dimensions",
                                    pos: 4,
                                    trkId: '1927519'
                                }, {
                                    cardId: 2564855,
                                    cardTypeId: 40,
                                    header: "The Daily Word Search",
                                    subHeader: "Do you consider yourself a puzzle master? Do you spend your Sundays (or even every day) playing crossword puzzles in the newspaper? Then you\u2019re in the right &hellip;",
                                    image: "//ucontent.prdg.io/pimages/8f/8f9ebbdd-fe69-473b-9f4c-e3afdccfbdd9.png",
                                    earn: 10,
                                    link: "/games/play/336/the-daily-word-search",
                                    pos: 5,
                                    trkId: '2564855'
                                }, {
                                    cardId: 2565682,
                                    cardTypeId: 40,
                                    header: "2048",
                                    subHeader: "2048 is a cool math and puzzle game that was created in 2014 and quickly became popular around the globe. Inspired by 1024 and Threes!, our free 2048 game is an exciting &hellip;",
                                    image: "//ucontent.prdg.io/pimages/03/0343537a-e73a-4ddc-a0d4-55908d0e550d.png",
                                    earn: 10,
                                    link: "/games/play/337/2048",
                                    pos: 6,
                                    trkId: '2565682'
                                }, {
                                    cardId: 2522379,
                                    cardTypeId: 60,
                                    header: 'MyDailyCash - Android',
                                    subHeader: 'Launch the app, register, swipe through the tutorial and validate your phone number.',
                                    link: 'http:\/\/www.offertoro.com\/click_track\/api\/19573930\/484\/[USER_ID]\/371\/web\/9\/y\/',
                                    earn: 22,
                                    image: 'https:\/\/static.offertoro.com\/uploads\/offers_image\/0d0f8c1ced6b53ea60482abe23f884247922b212e46cc831bc71b23dfa3afe4f.jpeg',
                                    disclaimer: 'This offer rewards within 24 hours. New users only.',
                                    countries: 'MA, DZ, NG, LK',
                                    pos: 7,
                                    trkId: '2522379'
                                }, {
                                    cardId: 2546115,
                                    cardTypeId: 60,
                                    header: 'Cash Giraffe Play - Android',
                                    subHeader: 'Get the app, install any app from Cash Giraffeand play it for at least 60 minutes (new users only).',
                                    link: 'http:\/\/www.offertoro.com\/click_track\/api\/19585767\/484\/[USER_ID]\/371\/web\/9\/y\/',
                                    earn: 90,
                                    image: 'https:\/\/static.offertoro.com\/uploads\/packages\/cashgiraffe.app\/second.png',
                                    disclaimer: 'This offer rewards within 24 hours. New users only.',
                                    countries: 'PR, PS, PT, PW, PY, QA, AD, AE, AF, AG, AI, AL, AM, AN, AO, AQ, AR, AS, AT, RE, AW, AZ, RO, BA, BB, RS, BE, BF, RW, BH, BI, BJ, BM, BN, BO, SA, SB, BR, SC, BS, SD, BT, SE, BV, SG, BW, SH, SI, BY, SJ, BZ, SK, SL, SM, SN, SO, CA, SR, CC, CD, ST, CF, CG, CH, CI, SY, SZ, CK, CL, CM, CN, CO, CR, TC, CS, TD, CU, TF, CV, TG, TH, CX, CY, TJ, CZ, TK, TL, TM, TN, TO, TT, TV, TW, DJ, TZ, DK, DM, DO, UG, DZ, UM, EC, EE, EH, UY, UZ, VA, ER, VC, ES, ET, VG, VI, VU, FI, FJ, FK, FM, FO, FR, WF, GA, WS, GD, GE, GF, GH, GI, GL, GM, GN, GP, GQ, GR, GS, GT, GU, GW, GY, HK, HM, HN, HR, HT, YE, HU, YT, IE, IL, IO, ZA, IQ, IR, IS, IT, ZM, ZW, JM, JO, JP, KE, KG, KH, KI, KM, KN, KP, KR, KW, KY, KZ, LA, LB, LC, LI, LK, LR, LS, LT, LU, LV, LY, MC, MD, ME, MG, MH, MK, ML, MM, MN, MO, MP, MQ, MR, MS, MT, MU, MV, MW, MX, MY, MZ, NA, NC, NE, NF, NG, NI, NL, NO, NP, NR, NU, NZ, OM, PA, PE, PF, PG, PH, PL, PM, PN',
                                    pos: 8,
                                    trkId: '2546115'
                                }, {
                                    cardId: 2567599,
                                    cardTypeId: 60,
                                    header: 'Coin Pop - Android',
                                    subHeader: 'Open the Coin Pop app and then download one or multiple suggested games and play at least 60 mins.',
                                    link: 'http:\/\/www.offertoro.com\/click_track\/api\/19586996\/484\/[USER_ID]\/371\/web\/5\/y\/',
                                    earn: 90,
                                    image: 'https:\/\/static.offertoro.com\/uploads\/offers_image\/thumbs\/ot_ct_second_undefined_version_1583926439.png',
                                    disclaimer: 'This offer rewards within 24 hours. New users only.',
                                    countries: 'PR, PS, PT, PW, PY, QA, AD, AE, AF, AG, AI, AL, AM, AN, AO, AQ, AR, AS, AT, RE, AW, AZ, RO, BA, BB, RS, BE, BF, RW, BH, BI, BJ, BM, BN, BO, SA, SB, BR, SC, BS, SD, BT, SE, BV, SG, BW, SH, SI, BY, SJ, BZ, SK, SL, SM, SN, SO, CA, SR, CC, CD, ST, CF, CG, CH, CI, SY, SZ, CK, CL, CM, CN, CO, CR, TC, CS, TD, CU, TF, CV, TG, TH, CX, CY, TJ, CZ, TK, TL, TM, TN, TO, TT, TV, TW, DJ, TZ, DK, DM, DO, UG, DZ, UM, EC, EE, EH, UY, UZ, VA, ER, VC, ES, ET, VG, VI, VU, FI, FJ, FK, FM, FO, FR, WF, GA, WS, GD, GE, GF, GH, GI, GL, GM, GN, GP, GQ, GR, GS, GT, GU, GW, GY, HK, HM, HN, HR, HT, YE, HU, YT, IE, IL, IO, ZA, IQ, IR, IS, IT, ZM, ZW, JM, JO, JP, KE, KG, KH, KI, KM, KN, KP, KR, KW, KY, KZ, LA, LB, LC, LI, LK, LR, LS, LT, LU, LV, LY, MC, MD, ME, MG, MH, MK, ML, MM, MN, MO, MP, MQ, MR, MS, MT, MU, MV, MW, MX, MY, MZ, NA, NC, NE, NF, NG, NI, NL, NO, NP, NR, NU, NZ, OM, PA, PE, PF, PG, PH, PL, PM, PN',
                                    pos: 9,
                                    trkId: '2567599'
                                }, {
                                    cardId: 2467392,
                                    cardTypeId: 60,
                                    header: 'Pop It Step - iOS',
                                    subHeader: 'Open the app and complete level 50 of the game.    This offer can be completed up to 10x faster with in-game purchases.',
                                    link: 'http:\/\/www.offertoro.com\/click_track\/api\/19552643\/484\/[USER_ID]\/371\/web\/5\/y\/',
                                    earn: 60,
                                    image: 'https:\/\/static.offertoro.com\/uploads\/offers_image\/9c5048dbef46132a9d515fec4e97960c935ff3bb5154e35c1e458540a7724c4e.jpg',
                                    disclaimer: 'This offer rewards within 24 hours. New users only.',
                                    countries: 'PR, PS, PT, PW, PY, QA, AD, AE, AF, AG, AI, AL, AM, AN, AO, AQ, AR, AS, AT, RE, AU, AW, AZ, RO, BA, BB, RS, BD, BE, RU, BF, BG, RW, BH, BI, BJ, BM, BN, BO, SA, SB, BR, SC, BS, SD, BT, SE, BV, SG, BW, SH, SI, BY, SJ, BZ, SK, SL, SM, SN, SO, CA, SR, CC, CD, ST, CF, SV, CG, CH, CI, SY, SZ, CK, CL, CM, CN, CO, CR, TC, CS, TD, CU, TF, CV, TG, TH, CX, CY, TJ, CZ, TK, TL, TM, TN, TO, TR, TT, DE, TV, TW, DJ, TZ, DK, DM, DO, UG, DZ, UM, EC, EE, EH, UY, UZ, VA, ER, VC, ES, ET, VE, VG, VI, VN, VU, FI, FJ, FK, FM, FO, FR, WF, GA, GB, WS, GD, GE, GF, GH, GI, GL, GM, GN, GP, GQ, GR, GS, GT, GU, GW, GY, HK, HM, HN, HR, HT, YE, HU, ID, YT, IE, IL, IO, ZA, IR, IS, IT, ZM, ZW, JM, JO, JP, KE, KG, KH, KI, KM, KN, KP, KR, KW, KY, KZ, LA, LB, LC, LI, LK, LR, LS, LT, LU, LV, LY, MA, MC, MD, ME, MG, MH, MK, ML, MM, MN, MO, MP, MQ, MR, MS, MT, MU, MV, MW, MX, MY, MZ, NA, NC, NE, NF, NG, NI, NL, NO, NP, NR, NU, NZ, OM, PA, PE, PF, PG, PH, PL, PM, PN',
                                    pos: 10,
                                    trkId: '2467392'
                                }, {
                                    cardId: 2546113,
                                    cardTypeId: 60,
                                    header: 'Cashyy Play and win - Android',
                                    subHeader: 'Get the app, install any app from Cashyy and play it for at least 60 minutes (new users only).',
                                    link: 'http:\/\/www.offertoro.com\/click_track\/api\/19585765\/484\/[USER_ID]\/371\/web\/9\/y\/',
                                    earn: 90,
                                    image: 'https:\/\/static.offertoro.com\/uploads\/packages\/online.cashyy.app\/second.png',
                                    disclaimer: 'This offer rewards within 24 hours. New users only.',
                                    countries: 'PR, PS, PT, PW, PY, QA, AD, AE, AF, AG, AI, AL, AM, AN, AO, AQ, AR, AS, AT, RE, AW, AZ, RO, BA, BB, RS, BE, BF, RW, BH, BI, BJ, BM, BN, BO, SA, SB, BR, SC, BS, SD, BT, SE, BV, SG, BW, SH, SI, BY, SJ, BZ, SK, SL, SM, SN, SO, CA, SR, CC, CD, ST, CF, CG, CH, CI, SY, SZ, CK, CL, CM, CN, CO, CR, TC, CS, TD, CU, TF, CV, TG, TH, CX, CY, TJ, CZ, TK, TL, TM, TN, TO, TT, DE, TV, TW, DJ, TZ, DK, DM, DO, UG, DZ, UM, EC, EE, EH, UY, UZ, VA, ER, VC, ES, ET, VG, VI, VU, FI, FJ, FK, FM, FO, FR, WF, GA, GB, WS, GD, GE, GF, GH, GI, GL, GM, GN, GP, GQ, GR, GS, GT, GU, GW, GY, HK, HM, HN, HR, HT, YE, HU, YT, IE, IL, IO, ZA, IQ, IR, IS, IT, ZM, ZW, JM, JO, JP, KE, KG, KH, KI, KM, KN, KP, KR, KW, KY, KZ, LA, LB, LC, LI, LK, LR, LS, LT, LU, LV, LY, MC, MD, ME, MG, MH, MK, ML, MM, MN, MO, MP, MQ, MR, MS, MT, MU, MV, MW, MX, MY, MZ, NA, NC, NE, NF, NG, NI, NL, NO, NP, NR, NU, NZ, OM, PA, PE, PF, PG, PH, PL, PM, PN',
                                    pos: 11,
                                    trkId: '2546113'
                                }, {
                                    cardId: 2529997,
                                    cardTypeId: 60,
                                    header: 'Gemdoku: Wood Block Puzzle - iOS',
                                    subHeader: 'Reach Level 100',
                                    link: 'http:\/\/www.offertoro.com\/click_track\/api\/19583646\/484\/[USER_ID]\/371\/web\/9\/y\/',
                                    earn: 87,
                                    image: 'https:\/\/static.offertoro.com\/uploads\/packages\/id1618998535\/second.jpeg',
                                    disclaimer: 'This offer rewards within 24 hours. New users only.',
                                    countries: 'QA, AE, TH, SI, NG, IS, KE, IT, IE, PL, ES, SA',
                                    pos: 12,
                                    trkId: '2529997'
                                }, {
                                    cardId: 2667367,
                                    cardTypeId: 60,
                                    header: 'Zen Life: Tile Match Games - iOS',
                                    subHeader: 'Collect 100 Stars!',
                                    link: 'http:\/\/www.offertoro.com\/click_track\/api\/19603650\/484\/[USER_ID]\/371\/web\/9\/y\/',
                                    earn: 45,
                                    image: 'https:\/\/static.offertoro.com\/uploads\/offers_image\/c6d2ddfe26aa2253e8aecae400dc68f816ddfb068e09d06de0ec116dbed28b91.jpeg',
                                    disclaimer: 'This offer rewards within 24 hours. New users only.',
                                    countries: 'NG, MY, PL',
                                    pos: 13,
                                    trkId: '2667367'
                                }, {
                                    cardId: 2546114,
                                    cardTypeId: 60,
                                    header: 'Cashem All: Play Win - Android',
                                    subHeader: 'Get the app, install any app from Cashem All and play it for at least 60 minutes (new users only).',
                                    link: 'http:\/\/www.offertoro.com\/click_track\/api\/19585766\/484\/[USER_ID]\/371\/web\/9\/y\/',
                                    earn: 90,
                                    image: 'https:\/\/static.offertoro.com\/uploads\/offers_image\/53121c7ac2f41484a23709ac74b3f095960fd9761ab3c2d15b1f1efa97c51958.jpeg',
                                    disclaimer: 'This offer rewards within 24 hours. New users only.',
                                    countries: 'PR, PS, PT, PW, PY, QA, AD, AE, AF, AG, AI, AL, AM, AN, AO, AQ, AR, AS, AT, RE, AW, AZ, RO, BA, BB, RS, BE, BF, RW, BH, BI, BJ, BM, BN, BO, SA, SB, BR, SC, BS, SD, BT, SE, BV, SG, BW, SH, SI, BY, SJ, BZ, SK, SL, SM, SN, SO, CA, SR, CC, CD, ST, CF, CG, CH, CI, SY, SZ, CK, CL, CM, CN, CO, CR, TC, CS, TD, CU, TF, CV, TG, TH, CX, CY, TJ, CZ, TK, TL, TM, TN, TO, TT, TV, TW, DJ, TZ, DK, DM, DO, UG, DZ, UM, EC, EE, EH, UY, UZ, VA, ER, VC, ES, ET, VG, VI, VU, FI, FJ, FK, FM, FO, WF, GA, GB, WS, GD, GE, GF, GH, GI, GL, GM, GN, GP, GQ, GR, GS, GT, GU, GW, GY, HK, HM, HN, HR, HT, YE, HU, YT, IE, IL, IO, ZA, IQ, IR, IS, IT, ZM, ZW, JM, JO, JP, KE, KG, KH, KI, KM, KN, KP, KR, KW, KY, KZ, LA, LB, LC, LI, LK, LR, LS, LT, LU, LV, LY, MC, MD, ME, MG, MH, MK, ML, MM, MN, MO, MP, MQ, MR, MS, MT, MU, MV, MW, MX, MY, MZ, NA, NC, NE, NF, NG, NI, NL, NO, NP, NR, NU, NZ, OM, PA, PE, PF, PG, PH, PL, PM, PN',
                                    pos: 14,
                                    trkId: '2546114'
                                }, {
                                    cardId: 2248070,
                                    cardTypeId: 60,
                                    header: 'Pandar: Coins Giftcard Bill - Android',
                                    subHeader: 'Open and use the app.',
                                    link: 'http:\/\/www.offertoro.com\/click_track\/api\/19530752\/484\/[USER_ID]\/371\/web\/9\/y\/',
                                    earn: 9,
                                    image: 'https:\/\/static.offertoro.com\/uploads\/offers_image\/1f05a959b3c5b94569313dabb1663f8d2380c3bf7068f37d14af5b2161314041.png',
                                    disclaimer: 'This offer rewards within 24 hours. New users only.',
                                    countries: 'NG',
                                    pos: 15,
                                    trkId: '2248070'
                                }, {
                                    cardId: 2625882,
                                    cardTypeId: 60,
                                    header: 'Diamond City - iOS',
                                    subHeader: 'Build Cyber Mall! Play the game and construct Cyber Mall.     New users only.',
                                    link: 'http:\/\/www.offertoro.com\/click_track\/api\/19590289\/484\/[USER_ID]\/371\/web\/5\/y\/',
                                    earn: 60,
                                    image: 'https:\/\/static.offertoro.com\/uploads\/offers_image\/63960c51803c09e7a0a390f5b6916a3410db879d144783a08c7a66861b8323da.jpg',
                                    disclaimer: 'This offer rewards within 24 hours. New users only.',
                                    countries: 'PR, PS, PT, PW, PY, QA, AD, AE, AF, AG, AI, AL, AM, AN, AO, AQ, AR, AS, AT, RE, AU, AW, AZ, RO, BA, BB, RS, BD, BE, RU, BF, BG, RW, BH, BI, BJ, BM, BN, BO, SA, SB, BR, SC, BS, SD, BT, SE, BV, SG, BW, SH, SI, BY, SJ, BZ, SK, SL, SM, SN, SO, CA, SR, CC, CD, ST, CF, SV, CG, CH, CI, SY, SZ, CK, CL, CM, CN, CO, CR, TC, CS, TD, CU, TF, CV, TG, TH, CX, CY, TJ, CZ, TK, TL, TM, TN, TO, TR, TT, DE, TV, TW, DJ, TZ, DK, DM, DO, UG, DZ, UM, EC, EE, EG, EH, UY, UZ, VA, ER, VC, ES, ET, VE, VG, VI, VN, VU, FI, FJ, FK, FM, FO, FR, WF, GA, GB, WS, GD, GE, GF, GH, GI, GL, GM, GN, GP, GQ, GR, GS, GT, GU, GW, GY, HK, HM, HN, HR, HT, YE, HU, ID, YT, IE, IL, IN, IO, ZA, IQ, IR, IS, IT, ZM, ZW, JM, JO, JP, KE, KG, KH, KI, KM, KN, KP, KR, KW, KY, KZ, LA, LB, LC, LI, LK, LR, LS, LT, LU, LV, LY, MA, MC, MD, ME, MG, MH, MK, ML, MM, MN, MO, MP, MQ, MR, MS, MT, MU, MV, MW, MX, MY, MZ, NA, NC, NE, NF, NG, NI, NL, NO, NP, NR, NU, NZ, OM, PA, PE, PF, PG, PH, PK, PL, PM, PN',
                                    pos: 16,
                                    trkId: '2625882'
                                }, {
                                    cardId: 2639912,
                                    cardTypeId: 60,
                                    header: 'Appstation - Android',
                                    subHeader: 'Open the Appstation app and then download one or multiple suggested games and play at least 60 mins.',
                                    link: 'http:\/\/www.offertoro.com\/click_track\/api\/19587000\/484\/[USER_ID]\/371\/web\/5\/y\/',
                                    earn: 12,
                                    image: 'https:\/\/static.offertoro.com\/uploads\/offers_image\/thumbs\/ot_up_second_earn_money_playing_games_version_1582197830.png',
                                    disclaimer: 'This offer rewards within 24 hours. New users only.',
                                    countries: 'PR, PS, PT, PW, PY, QA, AD, AE, AF, AG, AI, AL, AM, AN, AO, AQ, AR, AS, AT, RE, AW, AZ, RO, BA, BB, RS, BE, BF, RW, BH, BI, BJ, BM, BN, BO, SA, SB, BR, SC, BS, SD, BT, SE, BV, BW, SH, SI, BY, SJ, BZ, SK, SL, SM, SN, SO, SR, CC, CD, ST, CF, CG, CH, CI, SY, SZ, CK, CL, CM, CN, CO, CR, TC, CS, TD, CU, TF, CV, TG, TH, CX, CY, TJ, CZ, TK, TL, TM, TN, TO, TT, DE, TV, TW, DJ, TZ, DK, DM, DO, UG, DZ, UM, EC, EE, EH, UY, UZ, VA, ER, VC, ET, VG, VI, VU, FI, FJ, FK, FM, FO, WF, GA, GB, WS, GD, GE, GF, GH, GI, GL, GM, GN, GP, GQ, GR, GS, GT, GU, GW, GY, HK, HM, HN, HR, HT, YE, HU, YT, IE, IL, IO, ZA, IQ, IR, IS, ZM, ZW, JM, JO, KE, KG, KH, KI, KM, KN, KP, KR, KW, KY, KZ, LA, LB, LC, LI, LK, LR, LS, LT, LU, LV, LY, MC, MD, ME, MG, MH, MK, ML, MM, MN, MO, MP, MQ, MR, MS, MT, MU, MV, MW, MX, MY, MZ, NA, NC, NE, NF, NG, NI, NL, NO, NP, NR, NU, NZ, OM, PA, PE, PF, PG, PH, PL, PM, PN',
                                    pos: 17,
                                    trkId: '2639912'
                                }, {
                                    cardId: 2537531,
                                    cardTypeId: 60,
                                    header: 'BallSort - iOS',
                                    subHeader: 'Play and reach level 501 within 10 days.',
                                    link: 'http:\/\/www.offertoro.com\/click_track\/api\/19584804\/484\/[USER_ID]\/371\/web\/5\/y\/',
                                    earn: 149,
                                    image: 'https:\/\/static.offertoro.com\/uploads\/offers_image\/75d19c11a4b332c25594ffe7f4cb70dd0150b108954fa4719ef30cdeaefc9b41.jpg',
                                    disclaimer: 'This offer rewards within 24 hours. New users only.',
                                    countries: 'PR, PS, PT, PW, PY, QA, AD, AE, AF, AG, AI, AL, AM, AN, AO, AQ, AR, AS, AT, RE, AU, AW, AZ, RO, BA, BB, RS, BD, BE, RU, BF, BG, RW, BH, BI, BJ, BM, BN, BO, SA, SB, BR, SC, BS, SD, BT, SE, BV, SG, BW, SH, SI, BY, SJ, BZ, SK, SL, SM, SN, SO, CA, SR, CC, CD, ST, CF, SV, CG, CH, CI, SY, SZ, CK, CL, CM, CN, CO, CR, TC, CS, TD, CU, TF, CV, TG, TH, CX, CY, TJ, CZ, TK, TL, TM, TN, TO, TR, TT, DE, TV, TW, DJ, TZ, DK, DM, DO, UA, UG, DZ, UM, EC, EE, EG, EH, UY, UZ, VA, ER, VC, ES, ET, VE, VG, VI, VN, VU, FI, FJ, FK, FM, FO, FR, WF, GA, GB, WS, GD, GE, GF, GH, GI, GL, GM, GN, GP, GQ, GR, GS, GT, GU, GW, GY, HK, HM, HN, HR, HT, YE, HU, ID, YT, IE, IL, IN, IO, ZA, IQ, IR, IS, IT, ZM, ZW, JM, JO, JP, KE, KG, KH, KI, KM, KN, KP, KR, KW, KY, KZ, LA, LB, LC, LI, LK, LR, LS, LT, LU, LV, LY, MA, MC, MD, ME, MG, MH, MK, ML, MM, MN, MO, MP, MQ, MR, MS, MT, MU, MV, MW, MX, MY, MZ, NA, NC, NE, NF, NG, NI, NL, NO, NP, NR, NU, NZ, OM, PA, PE, PF, PG, PH, PK, PL, PM, PN',
                                    pos: 18,
                                    trkId: '2537531'
                                }, {
                                    cardId: 2546116,
                                    cardTypeId: 60,
                                    header: 'Money RAWR - Android',
                                    subHeader: 'Open the Money Rawr app & then download 2 games and play at least 60 mins.',
                                    link: 'http:\/\/www.offertoro.com\/click_track\/api\/19585768\/484\/[USER_ID]\/371\/web\/9\/y\/',
                                    earn: 24,
                                    image: 'https:\/\/static.offertoro.com\/uploads\/offers_image\/thumbs\/ot_ct_second_undefined_version_1540387038_5bd0717040ddc_similar_5bd0721a7dc92_similar.png',
                                    disclaimer: 'This offer rewards within 24 hours. New users only.',
                                    countries: 'PR, PS, PT, PW, PY, QA, AD, AE, AF, AG, AI, AL, AM, AN, AO, AQ, AR, AS, AT, RE, AW, AZ, RO, BA, BB, RS, BE, BF, RW, BH, BI, BJ, BM, BN, BO, SA, SB, BR, SC, BS, SD, BT, SE, BV, SG, BW, SH, SI, BY, SJ, BZ, SK, SL, SM, SN, SO, CA, SR, CC, CD, ST, CF, CG, CH, CI, SY, SZ, CK, CL, CM, CN, CO, CR, TC, CS, TD, CU, TF, CV, TG, TH, CX, CY, TJ, CZ, TK, TL, TM, TN, TO, TT, TV, TW, DJ, TZ, DK, DM, DO, UG, DZ, UM, EC, EE, EH, UY, UZ, VA, ER, VC, ET, VG, VI, VU, FI, FJ, FK, FM, FO, WF, GA, WS, GD, GE, GF, GH, GI, GL, GM, GN, GP, GQ, GR, GS, GT, GU, GW, GY, HK, HM, HN, HR, HT, YE, HU, YT, IE, IL, IO, ZA, IQ, IR, IS, ZM, ZW, JM, JO, JP, KE, KG, KH, KI, KM, KN, KP, KR, KW, KY, KZ, LA, LB, LC, LI, LK, LR, LS, LT, LU, LV, LY, MC, MD, ME, MG, MH, MK, ML, MM, MN, MO, MP, MQ, MR, MS, MT, MU, MV, MW, MX, MY, MZ, NA, NC, NE, NF, NG, NI, NL, NO, NP, NR, NU, NZ, OM, PA, PE, PF, PG, PH, PL, PM, PN',
                                    pos: 19,
                                    trkId: '2546116'
                                }],
                                nextIndex: 1194,
                                allUrl: 'view-popular',
                                title: 'Trending Now',
                                showViewMore: true,
                                currentSort: 4,
                                rows: 1,
                                popularSort: 4,
                                expectedCardCount: 20
                            }, {
                                streamID: 16,
                                cards: [],
                                nextIndex: 29,
                                allUrl: 'view-featured',
                                title: 'Featured Ways to Earn',
                                showViewMore: true,
                                currentSort: 6,
                                rows: 1,
                                popularSort: 4,
                                expectedCardCount: 20
                            }, {
                                streamID: 114,
                                cards: [{
                                    cardId: 52658,
                                    cardTypeId: 49,
                                    header: "RevU",
                                    subHeader: "",
                                    image: "//ucontent.prdg.io/img/offerwalls/icon/wall-120.jpg",
                                    earn: 5000,
                                    link: "/discover/offer-walls/120/revu",
                                    upTo: true,
                                    pos: 0,
                                    trkId: '52658',
                                    offerWallID: 120
                                }, {
                                    cardId: 52655,
                                    cardTypeId: 49,
                                    header: "OfferToro",
                                    subHeader: "",
                                    image: "//ucontent.prdg.io/img/offerwalls/icon/wall-140.jpg",
                                    earn: 5000,
                                    link: "/discover/offer-walls/140/offertoro",
                                    upTo: true,
                                    pos: 1,
                                    trkId: '52655',
                                    offerWallID: 140
                                }, {
                                    cardId: 1605587,
                                    cardTypeId: 49,
                                    header: "ayeT Studios",
                                    subHeader: "",
                                    image: "//ucontent.prdg.io/img/offerwalls/icon/wall-342.jpg",
                                    earn: 3200,
                                    link: "/discover/offer-walls/342/ayet-studios",
                                    upTo: true,
                                    pos: 2,
                                    trkId: '1605587',
                                    offerWallID: 342
                                }, {
                                    cardId: 54879,
                                    cardTypeId: 49,
                                    header: "AdGate Media",
                                    subHeader: "",
                                    image: "//ucontent.prdg.io/img/offerwalls/icon/wall-151.jpg",
                                    earn: 5000,
                                    link: "/discover/offer-walls/151/adgate-media",
                                    upTo: true,
                                    pos: 3,
                                    trkId: '54879',
                                    offerWallID: 151
                                }, {
                                    cardId: 52656,
                                    cardTypeId: 49,
                                    header: "AdscendMedia",
                                    subHeader: "",
                                    image: "//ucontent.prdg.io/img/offerwalls/icon/wall-138.jpg",
                                    earn: 1500,
                                    link: "/discover/offer-walls/138/adscendmedia",
                                    upTo: true,
                                    pos: 4,
                                    trkId: '52656',
                                    offerWallID: 138
                                }, {
                                    cardId: 1060600,
                                    cardTypeId: 49,
                                    header: "Wannads",
                                    subHeader: "",
                                    image: "//ucontent.prdg.io/img/offerwalls/icon/wall-239.jpg",
                                    earn: 514,
                                    link: "/discover/offer-walls/239/wannads",
                                    upTo: true,
                                    pos: 5,
                                    trkId: '1060600',
                                    offerWallID: 239
                                }, {
                                    cardId: 2532931,
                                    cardTypeId: 49,
                                    header: "MyChips",
                                    subHeader: "",
                                    image: "//ucontent.prdg.io/img/offerwalls/icon/wall-791.jpg",
                                    earn: 4000,
                                    link: "/discover/offer-walls/791/mychips",
                                    upTo: true,
                                    pos: 6,
                                    trkId: '2532931',
                                    offerWallID: 791
                                }],
                                nextIndex: 8,
                                allUrl: '/discover/offer-walls',
                                title: 'Offers from Our Trusted Partners',
                                showViewMore: false,
                                currentSort: 99,
                                rows: 1,
                                popularSort: 99,
                                expectedCardCount: 20,
                                channel: 'Discover'
                            }, {
                                streamID: 164,
                                cards: [{
                                    cardId: 24824,
                                    cardTypeId: 39,
                                    header: "Walmart",
                                    subHeader: "Walmart carries the best selection of electronics, home improvement, movies, toys, fitness, jewelry, sporting goods, books, and more for your home and garden!",
                                    link: "/g/shopredir?merchant=183",
                                    detailsLink: "/shop/walmart-coupons",
                                    hasCoupons: true,
                                    merchantId: 183,
                                    revealCouponCodes: false,
                                    impressionScript: "",
                                    discoverChannel: false,
                                    pos: 0,
                                    trkId: '24824',
                                    favoriteStore: true,
                                    hasBonus: false,
                                    image: "//ucontent.prdg.io/img/shop/mgs/mgb2996.jpg?v=1622154005000",
                                    imageSmall: "//ucontent.prdg.io/img/shop/mgs/mgs2996.jpg?v=1622153810000",
                                    bgImage: "//ucontent.prdg.io/img/shop/smgbi/smgbi2996.jpg?v=1622154244000",
                                    bgImageLarge: "//ucontent.prdg.io/img/shop/mgbi/mgbi2996.jpg?v=1677511413000",
                                    earn: 2,
                                    origEarn: 1,
                                    upTo: true,
                                    cashBackPercent: 2,
                                    origCashBackPercent: 1,
                                    sbCashValueFormatted: "0.02",
                                    origSbCashValueFormatted: "0.01",
                                    perDollar: true,
                                    terms: {
                                        0: [{
                                            EasymediaW: 2,
                                            term: "All other qualifying purchases"
                                        }, {
                                            EasymediaW: 1,
                                            term: "Electronics"
                                        }],
                                        2: [{
                                            EasymediaW: 0,
                                            term: "Cash Back will not be awarded on the following: Apple Products, Arts, Crafts, Cricut & Sewing, Baby Consumables (diapers, wipes, food/snacks), Baby Gear & Nursery, Beauty, Books & Magazines, Electronics, Gift Cards, Grocery, Furniture, Hardware & Tools, Home, Household Paper, Kitchen & Dining, Party & Celebration, Personal Care, Pet Supplies, Pharmacy, Photo Center, Precious Metals, Prepaid Cards, Sports & Fitness, Tires, Toys, Video Games, Walmart+ Membership"
                                        }]
                                    }
                                }, {
                                    cardId: 24248,
                                    cardTypeId: 39,
                                    header: "Staples",
                                    subHeader: "For over 25 years, Staples has been a leader in office and business products. Through world-class service, Staples offers the best technology and services to facilitate your every need!",
                                    link: "/g/shopredir?merchant=1386",
                                    detailsLink: "/shop/staples-coupons",
                                    hasCoupons: true,
                                    merchantId: 1386,
                                    revealCouponCodes: false,
                                    impressionScript: "",
                                    discoverChannel: false,
                                    pos: 1,
                                    trkId: '24248',
                                    favoriteStore: true,
                                    hasBonus: false,
                                    image: "//ucontent.prdg.io/img/shop/ms/mb1386.jpg?v=1554219456000",
                                    imageSmall: "//ucontent.prdg.io/img/shop/ms/ms1386.jpg?v=1554219460000",
                                    bgImage: "//ucontent.prdg.io/img/shop/smbi/smbi1386.jpg?v=1534190170000",
                                    bgImageLarge: "//ucontent.prdg.io/img/shop/mbi/mbi1386.jpg?v=1534189789000",
                                    earn: 2,
                                    origEarn: 2,
                                    upTo: false,
                                    cashBackPercent: 2,
                                    origCashBackPercent: 2,
                                    sbCashValueFormatted: "0.02",
                                    origSbCashValueFormatted: "0.02",
                                    perDollar: true,
                                    terms: {}
                                }, {
                                    cardId: 32379,
                                    cardTypeId: 39,
                                    header: "eBay",
                                    subHeader: "Shop at the world\'s largest online marketplace! From electronics and clothes, to toys and jewelry, you\'ll find it all at eBay! Shop Now!",
                                    link: "/g/shopredir?merchant=1635",
                                    detailsLink: "/shop/ebay-coupons",
                                    hasCoupons: true,
                                    merchantId: 1635,
                                    revealCouponCodes: false,
                                    impressionScript: "",
                                    discoverChannel: false,
                                    pos: 2,
                                    trkId: '32379',
                                    favoriteStore: true,
                                    hasBonus: false,
                                    image: "//ucontent.prdg.io/img/shop/ms/mb1635.jpg?v=1639765541000",
                                    imageSmall: "//ucontent.prdg.io/img/shop/ms/ms1635.jpg?v=1639765546000",
                                    bgImage: "//ucontent.prdg.io/img/shop/smgbi/smgbi857.jpg?v=1622154184000",
                                    bgImageLarge: "//ucontent.prdg.io/img/shop/mgbi/mgbi857.jpg?v=1622154061000",
                                    earn: 1,
                                    origEarn: 1,
                                    upTo: false,
                                    cashBackPercent: 1,
                                    origCashBackPercent: 1,
                                    sbCashValueFormatted: "0.01",
                                    origSbCashValueFormatted: "0.01",
                                    perDollar: true,
                                    terms: {
                                        2: [{
                                            EasymediaW: 0,
                                            term: "Please allow up to 32 days from date of purchase for your SB to credit. Only legitimate Winning Bid or “Buy It Now” transactions are eligible for SB. Bids placed with a sniping service/tool, eBay Motors (including Vehicles, Motorcycles, Boats, and Powersports) are not eligible for SB."
                                        }, {
                                            EasymediaW: 0,
                                            term: "The purchase of eBay-branded gift cards (Physical or Digital) and the purchase of any discounted gift card on the eBay deals/gift cards section of eBay site are not eligible for SB."
                                        }, {
                                            EasymediaW: 0,
                                            term: "SB-earning categories are subject to change without notice."
                                        }, {
                                            EasymediaW: 0,
                                            term: "Your SB will not be credited if you are using an auction-monitoring program or if you are using an eBay Toolbar. Please disable these applications prior to responding to SB offers."
                                        }, {
                                            EasymediaW: 0,
                                            term: "Purchases from eBay Automotive are not eligible for SB."
                                        }, {
                                            EasymediaW: 0,
                                            term: "Electronics, Heavy Equipment, Bullion, Real Estate, Charity Auctions, Coins & Paper Money, Snipe Services, Any Gift Cards, or when seller fees are $0.00 are not eligible for SB."
                                        }, {
                                            EasymediaW: 0,
                                            term: "Missing orders cannot be researched."
                                        }]
                                    }
                                }, {
                                    cardId: 1098014,
                                    cardTypeId: 39,
                                    header: "The Home Depot",
                                    subHeader: "",
                                    link: "/g/shopredir?merchant=13633",
                                    detailsLink: "/shop/home-depot-coupons",
                                    hasCoupons: true,
                                    merchantId: 13633,
                                    revealCouponCodes: false,
                                    impressionScript: "",
                                    discoverChannel: false,
                                    pos: 3,
                                    trkId: '1098014',
                                    favoriteStore: false,
                                    hasBonus: false,
                                    image: "//ucontent.prdg.io/img/shop/mgs/mgb1276.jpg?v=1624294717000",
                                    imageSmall: "//ucontent.prdg.io/img/shop/mgs/mgs1276.jpg?v=1626193771000",
                                    bgImage: "//ucontent.prdg.io/img/shop/smgbi/smgbi1276.jpg?v=1622154199000",
                                    bgImageLarge: "//ucontent.prdg.io/img/shop/mgbi/mgbi1276.jpg?v=1622154081000",
                                    earn: 16,
                                    origEarn: 4,
                                    upTo: true,
                                    cashBackPercent: 16,
                                    origCashBackPercent: 4,
                                    sbCashValueFormatted: "0.16",
                                    origSbCashValueFormatted: "0.04",
                                    perDollar: true,
                                    terms: {
                                        0: [{
                                            EasymediaW: 16,
                                            term: "Home Decor*"
                                        }, {
                                            EasymediaW: 25,
                                            term: "Hubspace product purchase"
                                        }, {
                                            EasymediaW: 1,
                                            term: "Appliance purchases"
                                        }, {
                                            EasymediaW: 1,
                                            term: "All other qualifying purchases"
                                        }],
                                        2: [{
                                            EasymediaW: 0,
                                            term: "*Home Decor Includes: Bedding & Bath Accessories, Cooking & Food Prep, Home Accents, Interior Furniture, Kitchen Storage & Organization, Kitchenware, Small Appliances, Wall Decor, Wallpaper"
                                        }, {
                                            EasymediaW: 0,
                                            term: "Home Decor does not include: Rugs, Lighting & Ceiling Fans, Outdoor Furniture, Blinds, or Window Treatments"
                                        }, {
                                            EasymediaW: 0,
                                            term: "All gift card, installation services, custom created products, select special orders and in-store purchases are not eligible for Cash Back.  Please allow 32 days for SB to be credited to your account."
                                        }]
                                    }
                                }, {
                                    cardId: 24943,
                                    cardTypeId: 39,
                                    header: "Expedia",
                                    subHeader: "Expedia, Inc allows you to find the right trip at the right price since they negotiate rates directly with hotels!",
                                    link: "/g/shopredir?merchant=17",
                                    detailsLink: "/shop/expedia-coupons",
                                    hasCoupons: true,
                                    merchantId: 17,
                                    revealCouponCodes: false,
                                    impressionScript: "",
                                    discoverChannel: false,
                                    pos: 4,
                                    trkId: '24943',
                                    favoriteStore: true,
                                    hasBonus: false,
                                    image: "//ucontent.prdg.io/img/shop/mgs/mgb942.jpg?v=1635459749000",
                                    imageSmall: "//ucontent.prdg.io/img/shop/mgs/mgs942.jpg?v=1635459761000",
                                    bgImage: "//ucontent.prdg.io/img/shop/smgbi/smgbi942.jpg?v=1622154186000",
                                    bgImageLarge: "//ucontent.prdg.io/img/shop/mgbi/mgbi942.jpg?v=1622154064000",
                                    earn: 3,
                                    origEarn: 1,
                                    upTo: true,
                                    cashBackPercent: 3,
                                    origCashBackPercent: 1,
                                    sbCashValueFormatted: "0.03",
                                    origSbCashValueFormatted: "0.01",
                                    perDollar: true,
                                    terms: {
                                        0: [{
                                            EasymediaW: 3,
                                            term: "Hotels"
                                        }, {
                                            EasymediaW: 2,
                                            term: "Cars"
                                        }, {
                                            EasymediaW: 3,
                                            term: "Vacation Packages"
                                        }, {
                                            EasymediaW: 3,
                                            term: "Activities"
                                        }, {
                                            EasymediaW: 4,
                                            term: "Completed Cruise"
                                        }, {
                                            EasymediaW: 3,
                                            term: "Vacation Rental"
                                        }, {
                                            EasymediaW: 3,
                                            term: "Ground Transfer"
                                        }],
                                        1: [{
                                            EasymediaW: 125,
                                            term: "Completed Airline Travel"
                                        }],
                                        2: [{
                                            EasymediaW: 0,
                                            term: "Please allow up to 90 days from your completion of travel for your SB to credit."
                                        }, {
                                            EasymediaW: 0,
                                            term: "Use of coupon codes is not permitted and will forfeit SB for the purchase."
                                        }, {
                                            EasymediaW: 0,
                                            term: "SB not awarded on car rentals over $5,000.00."
                                        }, {
                                            EasymediaW: 0,
                                            term: "Several airlines are waiving fees on bookings for a limited time."
                                        }, {
                                            EasymediaW: 0,
                                            term: "Free cancellation on most hotels and activities. Because flexibility matters."
                                        }, {
                                            EasymediaW: 0,
                                            term: "Please note that due to COVID-19, there may be a delay in your SB being credited to your account. We appreciate your patience during this time and will update when we can."
                                        }]
                                    }
                                }, {
                                    cardId: 24654,
                                    cardTypeId: 39,
                                    header: "Amazon",
                                    subHeader: "Cash back is only available for the offers listed below. No cash back will be given for purchases other than these offers. To be eligible for cash back, purchases must be made through Amazon\'s US desktop website or US mobile website. Purchases made via the Amazon app are not eligible for cash back.",
                                    link: "/shop/amazon-coupons",
                                    detailsLink: "/shop/amazon-coupons",
                                    hasCoupons: true,
                                    merchantId: 793,
                                    revealCouponCodes: false,
                                    impressionScript: "",
                                    discoverChannel: false,
                                    pos: 5,
                                    trkId: '24654',
                                    favoriteStore: true,
                                    hasBonus: false,
                                    image: "//ucontent.prdg.io/img/shop/ms/mb793.jpg?v=1564423935000",
                                    imageSmall: "//ucontent.prdg.io/img/shop/ms/ms793.jpg?v=1572899939000",
                                    bgImage: "//ucontent.prdg.io/img/shop/smbi/smbi793.jpg?v=1574094576000",
                                    bgImageLarge: "//ucontent.prdg.io/img/shop/mbi/mbi793.jpg?v=1574094570000",
                                    earn: 4,
                                    origEarn: 4,
                                    upTo: true,
                                    cashBackPercent: 4,
                                    origCashBackPercent: 4,
                                    sbCashValueFormatted: "0.04",
                                    origSbCashValueFormatted: "0.04",
                                    perDollar: true,
                                    terms: {}
                                }, {
                                    cardId: 2109829,
                                    cardTypeId: 39,
                                    header: "Lowe\'s",
                                    subHeader: "Lowes offers a wide range of home improvement and home enhancement products - ranging from appliances to outdoor power equipment, to lawn and garden and more - intended to enhance both the inside and outside of any home or business.",
                                    link: "/g/shopredir?merchant=31484",
                                    detailsLink: "/shop/lowes-coupons",
                                    hasCoupons: true,
                                    merchantId: 31484,
                                    revealCouponCodes: false,
                                    impressionScript: "",
                                    discoverChannel: false,
                                    pos: 6,
                                    trkId: '2109829',
                                    favoriteStore: false,
                                    hasBonus: false,
                                    image: "//ucontent.prdg.io/img/shop/mgs/mgb1681.jpg?v=1666901209000",
                                    imageSmall: "//ucontent.prdg.io/img/shop/mgs/mgs1681.jpg?v=1666901214000",
                                    bgImage: "//ucontent.prdg.io/img/shop/smgbi/smgbi1681.jpg?v=1622154212000",
                                    bgImageLarge: "//ucontent.prdg.io/img/shop/mgbi/mgbi1681.jpg?v=1622154103000",
                                    earn: 3,
                                    origEarn: 1,
                                    upTo: true,
                                    cashBackPercent: 3,
                                    origCashBackPercent: 1,
                                    sbCashValueFormatted: "0.03",
                                    origSbCashValueFormatted: "0.01",
                                    perDollar: true,
                                    terms: {
                                        0: [{
                                            EasymediaW: 1,
                                            term: "Appliances"
                                        }, {
                                            EasymediaW: 1,
                                            term: "All other qualifying purchases*"
                                        }, {
                                            EasymediaW: 3,
                                            term: "Paint, Flooring, Kitchen and bath purchases"
                                        }],
                                        2: [{
                                            EasymediaW: 0,
                                            term: "The following are not eligible for SB: Gift Cards, all house cleaning products, laundry detergent, hand sanitizer, toilet paper, paper towels, generators, hardware, lumber & building material and millwork."
                                        }]
                                    }
                                }, {
                                    cardId: 24326,
                                    cardTypeId: 39,
                                    header: "Sam\'s Club",
                                    subHeader: "Exceptional wholesale club values on TVs, mattresses, business and office supplies and more at Sam\'s Club. Visit SamsClub.com today to shop online, become a member and start saving today!",
                                    link: "/g/shopredir?merchant=1298",
                                    detailsLink: "/shop/sams-club-coupons",
                                    hasCoupons: true,
                                    merchantId: 1298,
                                    revealCouponCodes: false,
                                    impressionScript: "",
                                    discoverChannel: false,
                                    pos: 7,
                                    trkId: '24326',
                                    favoriteStore: false,
                                    hasBonus: false,
                                    image: "//ucontent.prdg.io/img/shop/mgs/mgb2370.jpg?v=1652903225000",
                                    imageSmall: "//ucontent.prdg.io/img/shop/mgs/mgs2370.jpg?v=1652903229000",
                                    bgImage: "//ucontent.prdg.io/img/shop/smgbi/smgbi2370.jpg?v=1622154231000",
                                    bgImageLarge: "//ucontent.prdg.io/img/shop/mgbi/mgbi2370.jpg?v=1622154127000",
                                    earn: 4,
                                    origEarn: 1,
                                    upTo: true,
                                    cashBackPercent: 4,
                                    origCashBackPercent: 1,
                                    sbCashValueFormatted: "0.04",
                                    origSbCashValueFormatted: "0.01",
                                    perDollar: true,
                                    terms: {
                                        0: [{
                                            EasymediaW: 4,
                                            term: "Delivery From Club/Same Day Delivery purchase*"
                                        }, {
                                            EasymediaW: 2,
                                            term: "Other Qualifying Purchases*"
                                        }, {
                                            EasymediaW: 4,
                                            term: "PIckup Orders*"
                                        }],
                                        1: [{
                                            EasymediaW: 1500,
                                            term: "Purchase a new Sam\'s Club Membership. Renewals are not eligible for Cash Back"
                                        }],
                                        2: [{
                                            EasymediaW: 0,
                                            term: "*Cash Back will not be awarded on the purchase of the following: Alcohol, Tobacco, Fuel, Automotive & Tires, Pharmacy, Membership Renewals."
                                        }]
                                    }
                                }, {
                                    cardId: 406409,
                                    cardTypeId: 39,
                                    header: "Ticketmaster",
                                    subHeader: "Ticketmaster offers unparalleled access to live sports, concerts, theater and family events.",
                                    link: "/g/shopredir?merchant=3963",
                                    detailsLink: "/shop/ticketmaster-coupons",
                                    hasCoupons: true,
                                    merchantId: 3963,
                                    revealCouponCodes: false,
                                    impressionScript: "",
                                    discoverChannel: false,
                                    pos: 8,
                                    trkId: '406409',
                                    favoriteStore: false,
                                    hasBonus: false,
                                    image: "//ucontent.prdg.io/img/shop/ms/mb3963.jpg?v=1534190024000",
                                    imageSmall: "//ucontent.prdg.io/img/shop/ms/ms3963.jpg?v=1534190124000",
                                    bgImage: "//ucontent.prdg.io/img/shop/smbi/smbi3963.jpg?v=1574272713000",
                                    bgImageLarge: "//ucontent.prdg.io/img/shop/mbi/mbi3963.jpg?v=1574272706000",
                                    earn: 1,
                                    origEarn: 1,
                                    upTo: false,
                                    cashBackPercent: 1,
                                    origCashBackPercent: 1,
                                    sbCashValueFormatted: "0.01",
                                    origSbCashValueFormatted: "0.01",
                                    perDollar: true,
                                    terms: {
                                        2: [{
                                            EasymediaW: 0,
                                            term: "Pre-Sale Tickets are not eligible for SB."
                                        }]
                                    }
                                }, {
                                    cardId: 24937,
                                    cardTypeId: 39,
                                    header: "Hotels.com",
                                    subHeader: "Get Great deals on hotel bookings throughout the world!\r\n\r\nCredit Date: SB will be awarded to your account within six weeks after your travel has been completed.",
                                    link: "/g/shopredir?merchant=24",
                                    detailsLink: "/shop/hotels.com-coupons",
                                    hasCoupons: true,
                                    merchantId: 24,
                                    revealCouponCodes: false,
                                    impressionScript: "",
                                    discoverChannel: false,
                                    pos: 9,
                                    trkId: '24937',
                                    favoriteStore: true,
                                    hasBonus: false,
                                    image: "//ucontent.prdg.io/img/shop/mgs/mgb1300.jpg?v=1669762455000",
                                    imageSmall: "//ucontent.prdg.io/img/shop/mgs/mgs1300.jpg?v=1669762503000",
                                    bgImage: "//ucontent.prdg.io/img/shop/smgbi/smgbi1300.jpg?v=1622154199000",
                                    bgImageLarge: "//ucontent.prdg.io/img/shop/mgbi/mgbi1300.jpg?v=1622154081000",
                                    earn: 2,
                                    origEarn: 1,
                                    upTo: false,
                                    cashBackPercent: 2,
                                    origCashBackPercent: 1,
                                    sbCashValueFormatted: "0.02",
                                    origSbCashValueFormatted: "0.01",
                                    perDollar: true,
                                    terms: {
                                        2: [{
                                            EasymediaW: 0,
                                            term: "SB will be awarded to your account within six weeks after your travel has been completed."
                                        }, {
                                            EasymediaW: 0,
                                            term: "Airfare and purchase or redemption of gift cards are not eligible for SB."
                                        }, {
                                            EasymediaW: 0,
                                            term: "Use of coupon codes not on site is not permitted and will forfeit SB for the purchase."
                                        }, {
                                            EasymediaW: 0,
                                            term: "SB will be credited only for completed, eligible hotel stays."
                                        }]
                                    }
                                }, {
                                    cardId: 1449650,
                                    cardTypeId: 39,
                                    header: "Chewy",
                                    subHeader: "Chewy is working to become the most trusted and convenient online destination for pet parents and our partners \u2013 vets and service providers \u2013 alike. Our success is measured by the happiness of the people and pets we serve, not simply by the amount of pet supplies we deliver. That\u2019s why we continue to think of outside-the-Chewy-box ways to delight, surprise, and thank our loyal pet lovers.",
                                    link: "/g/shopredir?merchant=21259",
                                    detailsLink: "/shop/chewy.com-coupons",
                                    hasCoupons: true,
                                    merchantId: 21259,
                                    revealCouponCodes: false,
                                    impressionScript: "",
                                    discoverChannel: false,
                                    pos: 10,
                                    trkId: '1449650',
                                    favoriteStore: false,
                                    hasBonus: false,
                                    image: "//ucontent.prdg.io/img/shop/mgs/mgb11978.jpg?v=1660926037000",
                                    imageSmall: "//ucontent.prdg.io/img/shop/mgs/mgs11978.jpg?v=1660926043000",
                                    bgImage: "//ucontent.prdg.io/img/shop/smgbi/smgbi11978.jpg?v=1622156134000",
                                    bgImageLarge: "//ucontent.prdg.io/img/shop/mgbi/mgbi11978.jpg?v=1622156120000",
                                    earn: 4,
                                    origEarn: 2,
                                    upTo: false,
                                    cashBackPercent: 4,
                                    origCashBackPercent: 2,
                                    sbCashValueFormatted: "0.04",
                                    origSbCashValueFormatted: "0.02",
                                    perDollar: true,
                                    terms: {
                                        2: [{
                                            EasymediaW: 0,
                                            term: "Cash Back is not available on Pharmacy, Flea, Tick & Heartworm Products, Gift Cards, Prescriptions and Auto ship orders after the first order."
                                        }, {
                                            EasymediaW: 0,
                                            term: "The $20 eGift Card for the pharmacy purchase will be fulfilled by Chewy, not EasymediaW."
                                        }]
                                    }
                                }, {
                                    cardId: 881028,
                                    cardTypeId: 39,
                                    header: "Kohl\'s",
                                    subHeader: "Find the same great sales and famous brand names that are in our stores.  Great values you can\'t pass up!",
                                    link: "/g/shopredir?merchant=11998",
                                    detailsLink: "/shop/kohls-coupons",
                                    hasCoupons: true,
                                    merchantId: 11998,
                                    revealCouponCodes: false,
                                    impressionScript: "",
                                    discoverChannel: false,
                                    pos: 11,
                                    trkId: '881028',
                                    favoriteStore: true,
                                    hasBonus: false,
                                    image: "//ucontent.prdg.io/img/shop/mgs/mgb1526.jpg?v=1622153919000",
                                    imageSmall: "//ucontent.prdg.io/img/shop/mgs/mgs1526.jpg?v=1622153733000",
                                    bgImage: "//ucontent.prdg.io/img/shop/smgbi/smgbi1526.jpg?v=1622154208000",
                                    bgImageLarge: "//ucontent.prdg.io/img/shop/mgbi/mgbi1526.jpg?v=1622154095000",
                                    earn: 10,
                                    origEarn: 1,
                                    upTo: false,
                                    cashBackPercent: 10,
                                    origCashBackPercent: 1,
                                    sbCashValueFormatted: "0.10",
                                    origSbCashValueFormatted: "0.01",
                                    perDollar: true,
                                    terms: {
                                        2: [{
                                            EasymediaW: 0,
                                            term: "Cash Back will not be earned for the purchase of Kohl\'s Cares products, Jewelry over $2,000, Gift Cards, gaming systems, Crocs, Apple, Beats, JLab, Nintendo, or Amazon products."
                                        }]
                                    }
                                }, {
                                    cardId: 1464206,
                                    cardTypeId: 39,
                                    header: "Newegg",
                                    subHeader: "Newegg is a leading e-commerce company focused on providing a positive shopping experience and a broad selection of high-quality technology and entertainment retail goods at very competitive prices. They carry a full range of computer components to consumer electronics for all to enjoy - with over 3 million products available, from hard drives to televisions to home appliances.",
                                    link: "/g/shopredir?merchant=21415",
                                    detailsLink: "/shop/newegg-coupons",
                                    hasCoupons: true,
                                    merchantId: 21415,
                                    revealCouponCodes: false,
                                    impressionScript: "",
                                    discoverChannel: false,
                                    pos: 12,
                                    trkId: '1464206',
                                    favoriteStore: false,
                                    hasBonus: false,
                                    image: "//ucontent.prdg.io/img/shop/ms/mb21415.jpg?v=1561573630000",
                                    imageSmall: "//ucontent.prdg.io/img/shop/ms/ms21415.jpg?v=1561573630000",
                                    bgImage: "//ucontent.prdg.io/img/shop/smbi/smbi21415.jpg?v=1561573630000",
                                    bgImageLarge: "//ucontent.prdg.io/img/shop/mbi/mbi21415.jpg?v=1561573630000",
                                    earn: 1,
                                    origEarn: 1,
                                    upTo: false,
                                    cashBackPercent: 1,
                                    origCashBackPercent: 1,
                                    sbCashValueFormatted: "0.01",
                                    origSbCashValueFormatted: "0.01",
                                    perDollar: true,
                                    terms: {
                                        2: [{
                                            EasymediaW: 0,
                                            term: "SB is not available on the purchase or redemption of gift cards,  Apple products, monitors, desktop pc, gaming notebooks, notebooks, tablets, 2in1 laptops, Vga, server – systems, pc gaming, video game consoles, AMD Video Cards, AMD CPU 5000 Series, the RTX 3000 and 6000 series, PS5 console and accessories, and Xbox Series and Accessories"
                                        }, {
                                            EasymediaW: 0,
                                            term: "Use of the following coupon codes will result in SB being reversed: EMC, EMP, NAF, DYN, MBLN, B2BEMC and BTE."
                                        }]
                                    }
                                }, {
                                    cardId: 24925,
                                    cardTypeId: 39,
                                    header: "Priceline",
                                    subHeader: "Priceline is a world leader in travel deals. We have more than 20 years\u2019 worth of experience in negotiating exclusive discounts on hotels, flights, alternative accommodations, rental cars, cruises and packages. We offer more than a million lodging properties, helping travelers find the right accommodation at the right price. Travelers can easily find deals at up to 60 percent off of prices found elsewhere. With free cancellation for many rates, 24-hour customer assistance and the option for both pre-paid and pay upon arrival reservations, Priceline helps millions of travelers be there for the moments that matter. For us, and for our customers, every trip is a big deal.  ",
                                    link: "/g/shopredir?merchant=38",
                                    detailsLink: "/shop/priceline-coupons",
                                    hasCoupons: true,
                                    merchantId: 38,
                                    revealCouponCodes: false,
                                    impressionScript: "",
                                    discoverChannel: false,
                                    pos: 13,
                                    trkId: '24925',
                                    favoriteStore: false,
                                    hasBonus: false,
                                    image: "//ucontent.prdg.io/img/shop/ms/mb38.jpg?v=1534190022000",
                                    imageSmall: "//ucontent.prdg.io/img/shop/ms/ms38.jpg?v=1534190122000",
                                    bgImage: "//ucontent.prdg.io/img/shop/smbi/smbi38.jpg?v=1534190194000",
                                    bgImageLarge: "//ucontent.prdg.io/img/shop/mbi/mbi38.jpg?v=1534189840000",
                                    earn: 5,
                                    origEarn: 2,
                                    upTo: true,
                                    cashBackPercent: 5,
                                    origCashBackPercent: 2,
                                    sbCashValueFormatted: "0.05",
                                    origSbCashValueFormatted: "0.02",
                                    perDollar: true,
                                    terms: {
                                        0: [{
                                            EasymediaW: 5,
                                            term: "Cruises"
                                        }, {
                                            EasymediaW: 5,
                                            term: "Hotel"
                                        }, {
                                            EasymediaW: 5,
                                            term: "Car Rental"
                                        }],
                                        1: [{
                                            EasymediaW: 200,
                                            term: "Flights"
                                        }],
                                        2: [{
                                            EasymediaW: 0,
                                            term: "You must complete your travel before you are eligible for SB. Please allow up to 90 days from the completion of your travel for your SB to appear in your account."
                                        }, {
                                            EasymediaW: 0,
                                            term: "Clicking through another source within same 40 minute session as your outclick from this site may result in SB not being tracked."
                                        }, {
                                            EasymediaW: 0,
                                            term: "Any orders placed with a coupon code will be ineligible for SB."
                                        }, {
                                            EasymediaW: 0,
                                            term: "The following purchases are not eligible for SB: taxes, travel insurance, any carrier fees, canceled orders or phone orders."
                                        }]
                                    }
                                }, {
                                    cardId: 560355,
                                    cardTypeId: 39,
                                    header: "Vrbo",
                                    subHeader: "Through Vrbo, owners and property managers offer an extensive selection of vacation homes that provide travelers with memorable experiences and benefits, including more room to relax and added privacy, for less than the cost of traditional hotel accommodations. The company also makes it easy for vacation rental owners and property managers to advertise their properties and manage bookings online.",
                                    link: "/g/shopredir?merchant=10159",
                                    detailsLink: "/shop/vrbo-coupons",
                                    hasCoupons: true,
                                    merchantId: 10159,
                                    revealCouponCodes: false,
                                    impressionScript: "",
                                    discoverChannel: false,
                                    pos: 14,
                                    trkId: '560355',
                                    favoriteStore: false,
                                    hasBonus: false,
                                    image: "//ucontent.prdg.io/img/shop/mgs/mgb2986.jpg?v=1669762778000",
                                    imageSmall: "//ucontent.prdg.io/img/shop/mgs/mgs2986.jpg?v=1669762810000",
                                    bgImage: "//ucontent.prdg.io/img/shop/smgbi/smgbi2986.jpg?v=1669763213000",
                                    bgImageLarge: "//ucontent.prdg.io/img/shop/mgbi/mgbi2986.jpg?v=1669763187000",
                                    earn: 2,
                                    origEarn: 1,
                                    upTo: false,
                                    cashBackPercent: 2,
                                    origCashBackPercent: 1,
                                    sbCashValueFormatted: "0.02",
                                    origSbCashValueFormatted: "0.01",
                                    perDollar: true,
                                    terms: {
                                        2: [{
                                            EasymediaW: 0,
                                            term: "Cash Back will be awarded for booking and completing vacation rental."
                                        }, {
                                            EasymediaW: 0,
                                            term: "Cash Back will not be awarded for third-party purchases, offline purchases, gift card purchases or use of a coupon."
                                        }, {
                                            EasymediaW: 0,
                                            term: "Cash Back will be awarded to your account 45 after your travel has been completed."
                                        }]
                                    }
                                }, {
                                    cardId: 1406576,
                                    cardTypeId: 39,
                                    header: "QVC",
                                    subHeader: "",
                                    link: "/g/shopredir?merchant=20533",
                                    detailsLink: "/shop/qvc-coupons",
                                    hasCoupons: true,
                                    merchantId: 20533,
                                    revealCouponCodes: false,
                                    impressionScript: "",
                                    discoverChannel: false,
                                    pos: 15,
                                    trkId: '1406576',
                                    favoriteStore: false,
                                    hasBonus: false,
                                    image: "//ucontent.prdg.io/img/shop/mgs/mgb2229.jpg?v=1622153961000",
                                    imageSmall: "//ucontent.prdg.io/img/shop/mgs/mgs2229.jpg?v=1622153770000",
                                    bgImage: "//ucontent.prdg.io/img/shop/smgbi/smgbi2229.jpg?v=1673969884000",
                                    bgImageLarge: "//ucontent.prdg.io/img/shop/mgbi/mgbi2229.jpg?v=1673969877000",
                                    earn: 12,
                                    origEarn: 4,
                                    upTo: false,
                                    cashBackPercent: 12,
                                    origCashBackPercent: 4,
                                    sbCashValueFormatted: "0.12",
                                    origSbCashValueFormatted: "0.04",
                                    perDollar: true,
                                    terms: {
                                        2: [{
                                            EasymediaW: 0,
                                            term: "This merchant can only research missing Cash Back 45 days past the order month."
                                        }, {
                                            EasymediaW: 0,
                                            term: "Cash Back is not eligible on protection plans, warranties, service offerings, or gift cards.  For auto-delivery items, Cash Back is eligible only on initial purchase and not subsequent shipments.  Cash Back is not eligible on canceled orders, returned orders, and or fraudulent orders.  Cash Back is not eligible on items purchased by resellers or with intent to resell.  Cash Back is eligible on clearance items and alcohol unless explicitly stated otherwise."
                                        }, {
                                            EasymediaW: 0,
                                            term: "Cash Back awarded is equal to the total net retail dollar amount actually received by QVC, excluding any discounts, chargebacks bad debts, taxes, shipping and handling charges, and insurance charges.  Other restrictions may apply.  QVC has the right to accept or reject for any reason in its sole discretion any order for products."
                                        }]
                                    }
                                }, {
                                    cardId: 1790356,
                                    cardTypeId: 39,
                                    header: "GiftCards.com",
                                    subHeader: "GiftCards.com is the leading online retailer of gift cards with an array of gift card products including personalized Visa\u00AE and MasterCard\u00AE gift cards, eGift cards, and popular merchant gift cards including Best Buy, Home Depot, Sephora, and over a hundred others.",
                                    link: "/g/shopredir?merchant=25094",
                                    detailsLink: "/shop/giftcards.com-coupons",
                                    hasCoupons: true,
                                    merchantId: 25094,
                                    revealCouponCodes: false,
                                    impressionScript: "",
                                    discoverChannel: false,
                                    pos: 16,
                                    trkId: '1790356',
                                    favoriteStore: false,
                                    hasBonus: false,
                                    image: "//ucontent.prdg.io/img/shop/mgs/mgb1137.jpg?v=1637855389000",
                                    imageSmall: "//ucontent.prdg.io/img/shop/mgs/mgs1137.jpg?v=1637855412000",
                                    bgImage: "//ucontent.prdg.io/img/shop/smgbi/smgbi1137.jpg?v=1622154193000",
                                    bgImageLarge: "//ucontent.prdg.io/img/shop/mgbi/mgbi1137.jpg?v=1622154072000",
                                    earn: 1,
                                    origEarn: 1,
                                    upTo: false,
                                    cashBackPercent: 1,
                                    origCashBackPercent: 1,
                                    sbCashValueFormatted: "0.01",
                                    origSbCashValueFormatted: "0.01",
                                    perDollar: true,
                                    terms: {
                                        2: [{
                                            EasymediaW: 0,
                                            term: "SB is not awarded on the redemption of gift cards."
                                        }]
                                    }
                                }, {
                                    cardId: 45581,
                                    cardTypeId: 39,
                                    header: "IHG Hotels & Resorts",
                                    subHeader: "IHG allows you to explore a huge family of Brands and book fabulous hotel stays to make your vacation the best it can be!",
                                    link: "/g/shopredir?merchant=2263",
                                    detailsLink: "/shop/ihg.com-coupons",
                                    hasCoupons: true,
                                    merchantId: 2263,
                                    revealCouponCodes: false,
                                    impressionScript: "",
                                    discoverChannel: false,
                                    pos: 17,
                                    trkId: '45581',
                                    favoriteStore: false,
                                    hasBonus: false,
                                    image: "//ucontent.prdg.io/img/shop/mgs/mgb1334.jpg?v=1622153908000",
                                    imageSmall: "//ucontent.prdg.io/img/shop/mgs/mgs1334.jpg?v=1622153720000",
                                    bgImage: "//ucontent.prdg.io/img/shop/smbi/smbi2263.jpg?v=1623964815000",
                                    bgImageLarge: "//ucontent.prdg.io/img/shop/mbi/mbi2263.jpg?v=1623964810000",
                                    earn: 6,
                                    origEarn: 4,
                                    upTo: false,
                                    cashBackPercent: 6,
                                    origCashBackPercent: 4,
                                    sbCashValueFormatted: "0.06",
                                    origSbCashValueFormatted: "0.04",
                                    perDollar: true,
                                    terms: {
                                        2: [{
                                            EasymediaW: 0,
                                            term: "Only completed hotel stays are eligible for SB. You must complete your travel before you are eligible for SB. Please allow 30 days from the completion of your travel for your SB to appear in your account."
                                        }, {
                                            EasymediaW: 0,
                                            term: "Rooms booked at Kimpton Hotels, the following Holiday Inn locations: Salisbury-Stonehenge, North Beach Virginia Beach, Oceanside Virginia Beach, or London Gatwick Worth, the following Holiday Inn Express locations: Portsmouth Gunwharf Quays, Annapolis East-Kent Island, GUELPH,  Nags Head Oceanfront, Virginia Beach, or Slough, Staybridge Suites Chesapeake Virginia Beach or Crowne Plaza Danang are not eligible for SB."
                                        }]
                                    }
                                }, {
                                    cardId: 41614,
                                    cardTypeId: 39,
                                    header: "SheIn",
                                    subHeader: "SheIn is an online clothing retailer, offering the latest in Women\'s street fashion. We carry a wide array of the hottest styles of tops, bottoms, dresses, jewelry, and accessories. We are supported through a network of fans from the hottest street-shot sites. Our customers love our fashion, but they also rely on our customer-focused policies and pricing.",
                                    link: "/g/shopredir?merchant=1856",
                                    detailsLink: "/shop/shein-coupons",
                                    hasCoupons: true,
                                    merchantId: 1856,
                                    revealCouponCodes: false,
                                    impressionScript: "",
                                    discoverChannel: false,
                                    pos: 18,
                                    trkId: '41614',
                                    favoriteStore: false,
                                    hasBonus: false,
                                    image: "//ucontent.prdg.io/img/shop/mgs/mgb6622.jpg?v=1622155730000",
                                    imageSmall: "//ucontent.prdg.io/img/shop/mgs/mgs6622.jpg?v=1622155369000",
                                    bgImage: "//ucontent.prdg.io/img/shop/smgbi/smgbi6622.jpg?v=1622156127000",
                                    bgImageLarge: "//ucontent.prdg.io/img/shop/mgbi/mgbi6622.jpg?v=1622156108000",
                                    earn: 5,
                                    origEarn: 5,
                                    upTo: false,
                                    cashBackPercent: 5,
                                    origCashBackPercent: 5,
                                    sbCashValueFormatted: "0.05",
                                    origSbCashValueFormatted: "0.05",
                                    perDollar: true,
                                    terms: {}
                                }, {
                                    cardId: 38991,
                                    cardTypeId: 39,
                                    header: "Quill",
                                    subHeader: "Quill is The Rewarding Work Place. Count on us for more than pens, paper, and toner. Also get instant rewards, weekly sales, fast free shipping on orders over $25, and personal support. ",
                                    link: "/g/shopredir?merchant=1815",
                                    detailsLink: "/shop/quill-coupons",
                                    hasCoupons: true,
                                    merchantId: 1815,
                                    revealCouponCodes: false,
                                    impressionScript: "",
                                    discoverChannel: false,
                                    pos: 19,
                                    trkId: '38991',
                                    favoriteStore: false,
                                    hasBonus: false,
                                    image: "//ucontent.prdg.io/img/shop/ms/mb1815.jpg?v=1675717693000",
                                    imageSmall: "//ucontent.prdg.io/img/shop/ms/ms1815.jpg?v=1675717694000",
                                    bgImage: "//ucontent.prdg.io/img/shop/smgbi/smgbi2226.jpg?v=1675960999000",
                                    bgImageLarge: "//ucontent.prdg.io/img/shop/mgbi/mgbi2226.jpg?v=1675803211000",
                                    earn: 3,
                                    origEarn: 1,
                                    upTo: false,
                                    cashBackPercent: 3,
                                    origCashBackPercent: 1,
                                    sbCashValueFormatted: "0.03",
                                    origSbCashValueFormatted: "0.01",
                                    perDollar: true,
                                    terms: {
                                        2: [{
                                            EasymediaW: 0,
                                            term: "Use of coupon/promotional code not found on EasymediaW may void eligibility for SB."
                                        }, {
                                            EasymediaW: 0,
                                            term: "SB are not available on the following purchases: gift cards, QuillSUBSCRIBE, streaming devices, HP Products, Epson products, Alexa Voice Remote, Google Chromecast, third party purchases, and purchases made for the purpose of reselling."
                                        }, {
                                            EasymediaW: 0,
                                            term: "All HP, Epson, and Samsung products are excluded from coupons, discounts, and cash back offers."
                                        }]
                                    }
                                }],
                                nextIndex: 20,
                                allUrl: '/shop',
                                title: 'Shop and Earn',
                                showViewMore: true,
                                currentSort: 4,
                                rows: 2,
                                popularSort: 4,
                                expectedCardCount: 20,
                                streamIntro: {
                                    title: 'Shop',
                                    subTitle: 'Earn SB when you shop at your favorite stores'
                                },
                                channel: 'Shop'
                            }, {
                                streamID: 11,
                                cards: [{
                                    cardId: 1927518,
                                    cardTypeId: 40,
                                    header: "Alu\'s Revenge 2",
                                    subHeader: "How to Play:\r\n\r\nIn the spirit of the popular game Toon Blast, in this classic collapse game you\'ll want to click on any group of two or more tiles of the same color to &hellip;",
                                    image: "//ucontent.prdg.io/pimages/b1/b134e78e-a49b-4ece-bed8-4182249b8d28.jpg",
                                    earn: 10,
                                    link: "/games/play/319/alu-s-revenge-2",
                                    pos: 0,
                                    trkId: '1927518'
                                }, {
                                    cardId: 1927520,
                                    cardTypeId: 40,
                                    header: "Pyramid Solitaire",
                                    subHeader: "Brush up on your addition skills with this fan-favorite solitaire variant! Instead of using foundation piles, you can remove open cards from the board in any order. The &hellip;",
                                    image: "//ucontent.prdg.io/pimages/c5/c54f3be8-e68e-4d6b-81c4-95acd4f45eae.jpg",
                                    earn: 10,
                                    link: "/games/play/317/pyramid-solitaire",
                                    pos: 1,
                                    trkId: '1927520'
                                }, {
                                    cardId: 1927519,
                                    cardTypeId: 40,
                                    header: "Mahjongg Dimensions",
                                    subHeader: "This free online game brings Mahjongg to a whole new...dimension. A third dimension, that is. Turn and tap elegant puzzles at rapid speed. Click on matching pairs of &hellip;",
                                    image: "//ucontent.prdg.io/pimages/7a/7ab120b0-e6bb-41f4-9fe2-1392a1a43ce1.jpg",
                                    earn: 10,
                                    link: "/games/play/318/mahjongg-dimensions",
                                    pos: 2,
                                    trkId: '1927519'
                                }, {
                                    cardId: 2564855,
                                    cardTypeId: 40,
                                    header: "The Daily Word Search",
                                    subHeader: "Do you consider yourself a puzzle master? Do you spend your Sundays (or even every day) playing crossword puzzles in the newspaper? Then you\u2019re in the right &hellip;",
                                    image: "//ucontent.prdg.io/pimages/8f/8f9ebbdd-fe69-473b-9f4c-e3afdccfbdd9.png",
                                    earn: 10,
                                    link: "/games/play/336/the-daily-word-search",
                                    pos: 3,
                                    trkId: '2564855'
                                }, {
                                    cardId: 2565682,
                                    cardTypeId: 40,
                                    header: "2048",
                                    subHeader: "2048 is a cool math and puzzle game that was created in 2014 and quickly became popular around the globe. Inspired by 1024 and Threes!, our free 2048 game is an exciting &hellip;",
                                    image: "//ucontent.prdg.io/pimages/03/0343537a-e73a-4ddc-a0d4-55908d0e550d.png",
                                    earn: 10,
                                    link: "/games/play/337/2048",
                                    pos: 4,
                                    trkId: '2565682'
                                }, {
                                    cardId: 2666695,
                                    cardTypeId: 98,
                                    header: 'Lords Mobile - Android Only!',
                                    subHeader: 'Unite the kingdoms and build your empire in the game of Lords Mobile. Install the app and reach castle level 11 to earn 500 SB!*',
                                    link: 'https:\/\/www.ayetstudios.com\/s2s\/pub\/191817\/1270\/9587\/10910?external_identifier=136484444',
                                    image: '',
                                    targetBlank: 1,
                                    integrationTypeID: '1',
                                    suppressX: false,
                                    modalButtonText: '',
                                    thingsToKnow: ["This offer does not require a purchase.", "SB awarded within 48 hours.", "Must be a new user to earn. "],
                                    disclaimer: '*SB will appear as Pending for 2 days. Must be a new user of Lords Mobile app to earn SB. Offer may only be redeemed (1) one time per user.  This offer is presented to you by EasymediaW on behalf of a third party merchant or sponsor (\"Merchant\"), which advises us when the offer is completed and a reward should be issued.  EasymediaW has not evaluated and does not endorse Merchant\'s views, policies, products or services, which you are encouraged to evaluate for yourself. Have questions? Please contact the EasymediaW Help Center.',
                                    image600x300: 'https:\/\/ucontent.prdg.io\/pimages\/dd\/dd21ec53-8215-4798-9565-603661a94eb1.jpg',
                                    iconType: 0,
                                    pos: 5,
                                    trkId: 'p9177520',
                                    perDollar: false,
                                    upTo: false,
                                    impressions: 66926,
                                    rewardDelay: 3,
                                    offer: 9073,
                                    earn: 500,
                                    isSuppressModal: false,
                                    discoverBonusAmount: 0,
                                    discoverBonusPercent: 0
                                }],
                                nextIndex: 21,
                                allUrl: 'view-play',
                                title: '',
                                showViewMore: false,
                                currentSort: 4,
                                rows: 1,
                                popularSort: 4,
                                expectedCardCount: 20,
                                streamIntro: {
                                    title: 'Play',
                                    subTitle: 'Earn SB when you make in-game purchases'
                                },
                                channel: 'Play'
                            }];

                            function hasStream(streamId) {
                                for (var i = 0, l = streams.length; i < l; i++) {
                                    var stream = streams[i];

                                    if (stream && stream.streamID == streamId) {
                                        return true;
                                    }
                                }

                                return false;
                            }

                            if (hasStream(16)) {
                                hasStaticCardsTray = true;
                            }
                            sbCards.boolUseHorizontalScroll = false;
                        </script>
                        <link rel="stylesheet" href="//static.prdg.io/dist-non-modules/content/shared/pop-styles.b0a3238bbb62262195cc.css" />
                        <link rel="stylesheet" href="//static.prdg.io/dist-non-modules/content/shared/home-btn-style.71498679dd078e39aa3a.css" />
                        <link rel="stylesheet" href="//static.prdg.io/dist-non-modules/content/components/cardstream/tray-v4.8fa240a2dd676ffa2a35.css" />
                        <link rel="stylesheet" href="//static.prdg.io/dist-non-modules/content/components/cardstream/card-v4.845e4cbbf1630088b4b7.css" />
                        <aside class="sbTray noHorizontalScrollMobile" hidden aria-hidden="true">
                            <div class="sbTrayInnerContainer">
                                <div id="sbTrayInnerSizeStandard" class="sbTrayInner">
                                    <div id="sbCardSizeStandard" class="sbCard">
                                        <div id="sbTrayListItemHeaderCaptionSizeStandard" class="sbTrayListItemHeaderCaption"></div>
                                    </div>
                                </div>
                            </div>
                        </aside>
                        <script src="//static.prdg.io/dist-non-modules/content/shared/clipboard-2.0.8.min.aac2bb8ae7fddfaae241.js"></script>
                        <script>
                            function preprocessTemplate(templateBody) {
                                return templateBody;
                            }

                            var hpLocationID = 512,
                                mustWatchToWin = 30,
                                pImagePath = '//ucontent.prdg.io/pimages/';

                            sbGlbl.cardSort = 0;
                            sbGlbl.analyticsTrackingID = 'UA-50581703-1';

                            function getImgVersion(cardId) {
                                if (typeof cardId === 'string') {
                                    cardId = parseInt(cardId.split('-')[0]);
                                }

                                return Math.round((27991610 + cardId) / 60);
                            }
                        </script>
                        <script src="//static.prdg.io/dist-non-modules/content/components/cardstream/main-v4.23d33ca8bcacc1f5b7a6.js"></script>
                        <script src="//static.prdg.io/dist-non-modules/content/components/cardstream/cards-helpers.7552f9fa62f4bb853dce.js"></script>
                        <script>
                            var premiumBannerProps = {
                                ntfCmd: "home",
                            }
                        </script>
                        <script src="//static.prdg.io/dist-non-modules/content/components/cardstream/premium-banner-v4.fc55d066f3a1e0f05d61.js"></script>
                        <script>
                            var featuredCardProps = {
                                ntfCmd: "home",
                            };
                        </script>
                        <script src="//static.prdg.io/dist-non-modules/content/components/cardstream/featured-cards-v4.20c99c2ed0ea2482fe29.js"></script>
                        <script>
                            window.Hammer || document.write('<script src="//static.prdg.io/dist-non-modules/content/shared/hammer.min.242a5454574a31020137.js"><\/script>');
                        </script>
                        <script>
                            sbCards.answerPromoShouldBeDisplayed = false;
                            sbCards.answerPromoMultiplier = 0.0;
                            sbCards.answerPromoShouldBeAddedToBaseAmount = false;
                            sbCards.answerPromoShouldBeSubtractedFromBaseAmount = false;
                            sbCards.answerPromoEndDate = 0;
                            sbCards.answerPromoExpirationShouldBeShown = false;
                            sbCards.answerPromoApplicable = false;
                            sbCards.showSurveyAwardRange = false;
                            sbCards.initialProfilerCompleted = true;
                            sbCards.discoverHomepage = false;
                            sbCards.answerCardV2Applicable = true;
                            sbCards.discoverGetSbShouldBeShownOnCta = false;
                            sbCards.shouldSkipOfferModal = false;
                        </script>
                        <script src="//static.prdg.io/dist-non-modules/content/shared/parseHTML.7a5f1ec1dc48d8579471.js"></script>
                        <script src="//static.prdg.io/dist-non-modules/content/shared/truncate.3cda3e6e6a0af231e53e.js"></script>
                        <script src="//static.prdg.io/dist-non-modules/trays-swipes.b1aea7fca7b501945d9c.js"></script>
                        <script src="//static.prdg.io/dist-non-modules/content/components/cardstream/tray-v4.c0cdfadd2e85e0d948e3.js"></script>
                        <script src="//static.prdg.io/dist-non-modules/content/components/cardstream/cards-templates-v4.9984e48fb93ad1311d62.js"></script>
                        <script src="//static.prdg.io/dist-non-modules/content/shared/jquery.isonscreen.7b851814bd6af500d8f9.js"></script>
                        <script>
                            sbCards.boolUseQuickLook = false;
                        </script>
                        <link rel="stylesheet" href="//static.prdg.io/dist-non-modules/content/components/cardstream/flyout.067e44475ada20f7abb4.css" />
                        <script src="//static.prdg.io/dist-non-modules/content/components/cardstream/flyout.0fd063ad6fa98dab80b1.js"></script>
                        <script>
                            sbCards.objTrays = {
                                popularHomepage: 5,
                                discover: 7,
                                play: 11,
                                shop: 109,
                                answer: 9,
                                nCrave: 13,
                                featured: 16,
                                featuredSpecialOffers: 120,
                                partners: 114,
                                popular: 121,
                                recent: 122,
                                explore: 123,
                                signUp: 124,
                                donate: 125,
                                freeOffers: 126,
                                mobileApps: 127,
                                shopDiscover: 128,
                                watch: 144,
                                editorsPick: 138,
                                watchOffers: 501,
                                exploreHomepage: 145,
                                allDiscoverOffers: 150,
                                addedStores: 19,
                                favorites: 18,
                                featuredStores: 20,
                                coupons: 108,
                                popularStores: 22,
                                food: 130,
                                sports: 133,
                                fashion: 136,
                                tvFilms: 142,
                                news: 503,
                                popularGames: 110,
                                recentGames: 111,
                                casinoGames: 112,
                                EasymediaWGames: 113,
                                featuredGames: 148,
                                mostPopularRewards: 151,
                                charityDonations: 152,
                                giftCardsICanAfford: 153,
                                onSaleRewards: 154,
                                shopAndEarn: 164,
                                amazonFeatured: 61,
                                amazonStoreUS: 61,
                                amazonStoreCA: 62,
                                inStoreDeals: 1235305,
                                discoverBonusAward: 169,
                                featuredMerchants: 166,
                                bestBuyFeatured: 171,
                                discoverFeaturedOffers: 174,
                                mobileGames: 170,
                                continuePlayingOffers: 173,
                                shopPromotion1: 569,
                                shopPromotion2: 570,
                                shopPromotion3: 571,
                            }
                        </script>
                        <link rel="stylesheet" href="//static.prdg.io/dist-non-modules/content/components/modal/modal.6edf6559ad5f45602994.css" />
                        <aside id="sbModalBg" class="sbModalCloseCta" hidden>
                            <div id="sbModal">
                                <button id="sbModalClose" class="sbModalCloseCta">
                                    <span class="sbVisuallyHidden">Close</span>
                                </button>
                                <div id="sbModalMain">
                                    <div id="sbModalLogo"></div>
                                    <div id="sbModalBody">
                                        <div id="sbModalTitle"></div>
                                        <div id="sbModalContent"></div>
                                    </div>
                                </div>
                                <div id="sbModalActions"></div>
                            </div>
                        </aside>
                        <script src="//static.prdg.io/dist-non-modules/content/components/modal/modal.21dd0e2702556ed21e37.js"></script>
                        <script src="//static.prdg.io/dist-non-modules/content/components/social/social.771dbb0adf9bb24c6b99.js" defer="defer" data-fb-app-id="138664736214483"></script>
                        <script src="//static.prdg.io/dist-non-modules/vendor.402045020487a4edd587.js"></script>
                        <script src="//static.prdg.io/dist-non-modules/offer-modal.00fcbb85574fa72093b4.js"></script>
                        <script src="//static.prdg.io/dist-non-modules/content/components/cardstream/cards-v4.ad9c772201e95890e0a8.js"></script>
                        <script src="//static.prdg.io/dist-non-modules/content/components/coupon/coupon.173502853c3f9d3cb69d.js"></script>
                        <script src="//static.prdg.io/dist-non-modules/content/shared/loader.3de289d1e0ec904795a2.js"></script>
                        <script src="//static.prdg.io/dist-non-modules/content/shared/md5.74e246cb2b78cf1c3eb4.js"></script>
                        <div id="onboardingDeckContainer" class="sbHomeRail">
                            <script id="sbCardsJson" type="application/json">
                                {
                                    "discover": {
                                        "cardIdsWithTransparentCloseButton3thingsModal": [1950158, 1950157, 1950179, 1950180, 1135640, 1825636, 1793345, 1825637, 1967348, 1967349, 1764405, 1810021],
                                        "isDiscoverPage": false,
                                        "offerModalViewTestApplicable": true
                                    },
                                    "answer": {
                                        "emailOrPinVerified": true
                                    },
                                    "shopHomepage": false
                                }
                            </script>
                            <div id="cardDeck" class="cardDeck isNotViewAllPage"></div>
                        </div>
                        <script>
                            var streamManualLoadLength = 15,
                                streamAutoLoadLength = 15,
                                cardHash = 'f36f3a80c8437e0206a6aa10612ecc99',
                                soSbMemId = 136484444,
                                soMasterTypes = {},
                                junCall = 'https://embed.jungroup.com/embedded_videos/videos_available_jsonp?uid=136484444&pid=17&jsonp=sbCards.junCardRenderer.onJson&sub_id=136484444' + new Date().getTime() + '&ip_address=129.205.113.145&gender=m&dob=1997-04-07',
                                junSBAmount = 2,
                                svnCall = '',
                                svnCardAward = 2,
                                gambitCall = 'http://b.v11media.com/json?k=b3483fdd2acde55024021614496b083b&uid=136484444&types=video&callback=onGambitJson&ip=129.205.113.145&gender=m&dob=1997-04-07',
                                ssa_json = {
                                    'applicationUserId': '136484444',
                                    'applicationKey': '2d099f45',
                                    'onCampaignsReady': onSsa,
                                    'onCampaignsDone': onSsaDone,
                                    'applicationUserGender': 'male',
                                    'applicationUserBirthday': '1997-04-07',
                                    'custom_trkid': 'uniquecstmtrkid'
                                },
                                peanutCall = '//aalert.peanutlabs.com/publisherCmd.php?cmd=hasAlertJSON&userId=136484444-4574-e47e1d24e5&callback=onPeanutJson',
                                mbCall = '//surveys.insightexpressai.com/ix/enterPartner.aspx?partnerID=121&g=@@DWID@@&ppid=136484444&test=true&callback=onMbJson',
                                mbDwids = {
                                    "dwids": []
                                },
                                tp_params_all = {
                                    sid: 136484444,
                                    tp_params: '{"tp_age":25,"tp_gender":2,"sid":136484444,"timestamp":1679496602}',
                                    tp_signature: '03341cb264b1f866de83903fea944ccbdfd18d6e615d9df996e5cd3f8bca0be5'
                                },
                                srCall = '//www.superrewards-offers.com/super/offers?h=iiliyfdthj.502968925784&uid=136484444&ip=129.205.113.145&json=1&mode=video&callback=onSrJson',
                                buzzCall = '//api.ebuzzing.com/partners/1.0/getDeal?site_id=51689&user_id=42901&token=53f057c7a866b9e88e4682ba3aea343f&maxitems=10&format=json&callback=onBuzzJson&sbxmemberid=136484444&age=25&ipaddress=129.205.113.145&gender=m',
                                buzzAgeOk = true,
                                roCall = '//panel.gwallet.com/network-node/impression?appId=f8757dc10efd4568ab13644ff19c2c81&userId=136484444&panelId=12&format=json&callback=onRoJson&pageSize=5&gender=m&age=25',
                                viroolCall = '//api.virool.com/api/v1/offers/14ed4a0d11a3791ea02aa4b07baf5282/all.jsonp?callback=onViroolJson&userId=136484444&gender=male&dob=1997-04-07&d=' + Math.random(),
                                revUverseCall = '//publishers.revenueuniverse.com/sbx_offer.php?uid=136484444&age=25&gender=male&ip=129.205.113.145&callback=onRevUverseJson',
                                spaceJetCall = 'https://closelocate.com/listings?apikey=16f5841272b84cc683d98a3e2f9555d3&callback=onSpaceJetJson&age=25&gender=m&email=tonymax1049@gmail.com&memberid=136484444',
                                discoverBackgroundImg = '//static.prdg.io/dist-non-modules/content/components/cardstream/discover-background.9ec5a8fc05c8bd2446f8.jpg',
                                hidePeanutLabsCard = false,
                                trialPayApiCall = 'https://geo.tp-cdn.com/api/offer/v1/?vic=ffa398becf6f28fb8074ed4bf516e7ae&sid=136484444&num_offers=100&ip=129.205.113.145&ua=Mozilla%2F5.0+%28X11%3B+Linux+x86_64%29+AppleWebKit%2F537.36+%28KHTML%2C+like+Gecko%29+Chrome%2F111.0.0.0+Safari%2F537.36&jsonp=trialPayCards.callback';
                            sbCards.cardtypesForLoggedOutRedirect = [39, 47, 49, 60, 65, 94, 96, 97, 98];
                        </script>
                        <script>
                            var sbCoupon = {
                                openCoupon: '0'
                            };
                        </script>
                        <script src="//static.prdg.io/dist-non-modules/content/components/cardstream/ga-event-data.76fe24a7e696ff337893.js"></script>
                        <script>
                            getTrays();
                        </script>
                        <aside id="sbTracking">
                            <!-- Google Code for Logged In Remarketing List -->
                            <script>
                                /* <![CDATA[ */
                                var google_conversion_id = 1012810923,
                                    google_conversion_language = 'en',
                                    google_conversion_format = '3',
                                    google_conversion_color = '666666',
                                    google_conversion_label = 'TJXGCLWpkgIQq4n54gM',
                                    google_conversion_value = 0;
                                /* ]]> */
                            </script>
                            <script src="//www.googleadservices.com/pagead/conversion.js"></script>
                            <noscript>
                                <img src="//www.googleadservices.com/pagead/conversion/1012810923/?label=TJXGCLWpkgIQq4n54gM&amp;guid=ON&amp;script=0" class="sbPixelImg" alt="">
                            </noscript>
                            <img src="//media.fastclick.net/w/tre?ad_id=23790;evt=16703;cat1=20491;cat2=20492;rand=2031477355" class="sbPixelImg" alt="">
                            <img src="//d.adroll.com/ipixel/YNI7ZGONXFHPDFOXIBWPXH/LHFOD4XV4JH5PO4WW4RREE?name=loggedin" class="sbPixelImg" alt="">
                        </aside>
                        <link rel="stylesheet" href="//static.prdg.io/dist-non-modules/content/projects/homepage/homepage.91fca998e94f65d33bd9.css" />
                    </main>
                </div>
                <div class="clear"></div>
            </div>
            <div class="stPop" id="stPop" onclick="closeMe('stPop')" style="left: -999px;">
                <div class="close"></div>
                <div class="inner" id="stPopInner">
                    <div class="ico" id="stPopIco"></div>
                    <div class="fltLft msg">
                        <div id="stPopTitle"></div>
                        <div id="stPopBody"></div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <link rel="stylesheet" href="//static.prdg.io/dist-non-modules/content/components/footer/footer.7219cbbc39a1d231c848.css" />
         <?php include('../footer.php')?>
            <script src="//static.prdg.io/dist-non-modules/content/shared/jquery.isonscreen.7b851814bd6af500d8f9.js"></script>
            <script src="//static.prdg.io/dist-non-modules/content/components/footer/footer.b6e45277a533caadfd71.js"></script>
            <script id="sbServiceWorkerData" type="application/json">
                {
                    "clientDomain": "https://www.Easymedia.com"
                }
            </script>
            <script src="//static.prdg.io/dist-non-modules/service-worker-client.89227b5fc6fc8a41ec4e.js" defer="defer"></script>
            <div id="topAd" class="advertisement ad_warn ad-placement doubleclick pub_300x250 pub_300x250m pub_728x90 text-ad textAd text_ad" style="display: block !important; height:10px !important; width:10px !important; left: -10px !important;color:transparent; position: absolute; bottom: 0;"></div>
            <script src="//static.prdg.io/dist-non-modules/content/components/banner/no-SB-banner.87f9aac2752ba1af488b.js" defer="defer"></script>
            <script src="//static.prdg.io/dist-non-modules/content/shared/functions.1022909b13ef0adb975e.js"></script>
            <script src="//static.prdg.io/dist-non-modules/content/components/footer/btm-functions-v4.8347d86fcd4360703d1b.js"></script>
        </div>
    </div>
</body>

</html>
<script src="//static.prdg.io/dist-non-modules/accessibility-widget.9fd7e401530c3e46da38.js" defer="defer"></script>