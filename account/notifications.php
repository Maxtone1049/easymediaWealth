<?php
session_start();
error_reporting(0);
include('../includes/dbconnect.php');
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
<html id="html" class="isResponsive isNotExternal isTourNotShown isTourNotActive isSliderNotShown isNotHome isLoggedIn ot">

<head>
    <meta charset="utf-8">
    <title>Notifications - My Settings - My Account | EasyMedia</title>
    <meta name="keywords" content="">
    <meta name="description" content="Earn rewards and free stuff by searching and shopping online, answering surveys, and more at EasymediaW.com, a customer loyalty rewards program. Be rewarded today.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:url" content="notifications">
    <meta property="og:description" content="Earn rewards and free stuff by searching and shopping online, answering surveys, and more at EasymediaW.com, a customer loyalty rewards program. Be rewarded today.">
    <meta property="og:title" content="Notifications - My Settings - My Account | EasymediaW">
    <link rel="icon" type="image/svg+xml" href="/favicon.svg">
    <link rel="icon" type="image/png" href="//static.prdg.io/dist-non-modules/images/favicon-16x16.c851c657ffaf20dfaf15.png" sizes="16x16">
    <link rel="icon" type="image/png" href="//static.prdg.io/dist-non-modules/images/favicon-32x32.62bd6461aac547ff4000.png" sizes="32x32">
    <link rel="icon" type="image/png" href="//static.prdg.io/dist-non-modules/images/favicon-96x96.6e441ed57709dfb43629.png" sizes="96x96">
    <link rel="icon" type="image/png" href="//static.prdg.io/dist-non-modules/images/android-chrome-192x192.a8de0a0f140635c65747.png" sizes="192x192">
    <link rel="alternate icon" type="image/png" href="/favicon.png">
    <link rel="apple-touch-icon" href="//static.prdg.io/dist-non-modules/images/apple-touch-icon-120x120.f6f0effa6837166ce1d9.png">
    <link rel="apple-touch-icon" sizes="180x180" href="//static.prdg.io/dist-non-modules/images/apple-touch-icon-180x180.48d1616875d9e641fc7a.png">
    <link rel="apple-touch-icon" sizes="167x167" href="//static.prdg.io/dist-non-modules/images/apple-touch-icon-167x167.f0fca7d85bd8abbfbaa8.png">
    <link rel="apple-touch-icon" sizes="152x152" href="//static.prdg.io/dist-non-modules/images/apple-touch-icon-152x152.144c1bf7000db8f9835c.png">
    <link rel="canonical" href="notifications">
    <meta name="format-detection" content="telephone=no">
</head>

<body class="loggedIn">
    <link rel="stylesheet" href="//static.prdg.io/dist-non-modules/content/components/font/font.0e7d3d116854f6603774.css" />
    <script src="https://cdn.cookielaw.org/consent/e3b98144-e9b8-4fab-9a3a-3a12894bed0b/OtAutoBlock.js"></script>
    <script src="https://cdn.cookielaw.org/scripttemplates/otSDKStub.js" charset="UTF-8" data-domain-script="e3b98144-e9b8-4fab-9a3a-3a12894bed0b"></script>
    <script>
        function OptanonWrapper() {}
    </script>
    <!-- <script id="sbHeadData" type="application/json">
        {
            "topNavMenuApplicable": false,
            "token": {
                "__mBfuPAgT": "ec4db306ebee07ec3ff2a1782306b7575538e0c6ba88080b71485ee22a4462d4"
            },
            "sbGlbMember": 136484444,
            "emailOnly": false,
            "currentSbAmount": 15,
            "trayMobileViewV2Applicable": false,
            "homepage": false,
            "dailyGoalApplicable": true,
            "activityFeedApplicable": false,
            "isSwagbucksPlusApplicable": false,
            "subscriptionApplicable": false,
            "subscriptionActive": false
        }
    </script> -->
    <!-- <script>
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
            "PROFILE_UPLOADER_HOST": "//upload.profileimages.swagbucks.com",
            "EMAIL_INVITES_AMOUNT": 10
        }
    </script> -->
    <script src="//static.prdg.io/dist-non-modules/content/shared/sbglobals.75e9c5e76a91dfe5e99f.js"></script>
    <link rel="search" href="//static.prdg.io/dist-non-modules/content/open-search/open-search-chrome.cbb6a7acf953589cb993.xml" type="application/opensearchdescription+xml" title="EasymediaW search and get rewarded">
    <script src="//static.prdg.io/dist-non-modules/content/shared/jquery-1.6.4.min.310d26371f84ccea90a1.js"></script>
    <script src="//static.prdg.io/dist-non-modules/content/shared/localize-loader.5c6a8a2c0232e9cbb336.js" id="localizeScript" data-testing="false" data-src="//static.prdg.io/dist-non-modules/content/shared/localize.1fdb88736d80e367d0aa.js" data-bits="{&#34;de&#34;:2,&#34;no&#34;:32768,&#34;ru&#34;:64,&#34;sv&#34;:65536,&#34;pt&#34;:524288,&#34;ko&#34;:262144,&#34;el&#34;:8192,&#34;en&#34;:1,&#34;it&#34;:32,&#34;fr&#34;:128,&#34;es&#34;:1048576,&#34;zh&#34;:256,&#34;ar&#34;:512,&#34;ja&#34;:131072,&#34;pl&#34;:1024,&#34;da&#34;:4096,&#34;tr&#34;:2048,&#34;nl&#34;:16384}" data-language-code="en" data-ysense="false" data-key="MldiexN2caLe9" data-languages="{&#34;de&#34;:&#34;Deutsch&#34;,&#34;no&#34;:&#34;norsk&#34;,&#34;ru&#34;:&#34;русский&#34;,&#34;sv&#34;:&#34;svenska&#34;,&#34;pt&#34;:&#34;Português (Brasil)&#34;,&#34;ko&#34;:&#34;한국어&#34;,&#34;el&#34;:&#34;Ελληνικά&#34;,&#34;en&#34;:&#34;English&#34;,&#34;it&#34;:&#34;Italiano&#34;,&#34;fr&#34;:&#34;Français (Canada)&#34;,&#34;es&#34;:&#34;Español (México)&#34;,&#34;zh&#34;:&#34;中文&#34;,&#34;ar&#34;:&#34;العربية&#34;,&#34;ja&#34;:&#34;日本語&#34;,&#34;pl&#34;:&#34;Język polski&#34;,&#34;da&#34;:&#34;dansk&#34;,&#34;tr&#34;:&#34;Türkçe&#34;,&#34;nl&#34;:&#34;Nederlands&#34;}"></script>
    <script crossorigin="anonymous" src="//polyfill.io/v3/polyfill.min.js?flags=gated&features=default,DocumentFragment.prototype.append,Object.assign,Element.prototype.append,~html5-elements,IntersectionObserver,ResizeObserver,Intl.~locale.en,Intl.PluralRules,Intl.DateTimeFormat,Intl.NumberFormat"></script>
    <link rel="stylesheet" href="//static.prdg.io/dist-non-modules/content/components/header/template.880091a8f3f534be6c6a.css" />
    <script>
        dataLayer = [{

            'sbcmp': 207,

            'sbaffsid': 'C2',

            'sbvmid': 0,
            'sbvendfeed': false,
            'sblsid': 0,
            'sblocid': 512,
            'sba': 25,
            'sbg': 1,
            'sbmid': 136484444,
            'sbactiveshopper': 0,
            'sbactivemember': 0,
            'sbrecentgcredeemer': 0,
            'sbactiveoffers': 0,
            'sbactivewatch': 0,
            'sbactivesurveys': 0,
            'sbactiveshoppermarketing': 0,
            'sbactiveupmmastercard': 0,
            'sbactivedining': 0,
            'sbdonotsell': 'true',
            'sbco': 'Nigeria',
            'sbmd5lce': 'ea89ba29dcc594fc0d6e6131391013bb',
            'sbsha1lce': '8341a3d3f2c5417d1692ea6e52bf8a324328e29b',
            'sbsha256lce': 'f8ce05483fd80187a9cd12169563be0b4b6aa92b15a4775d9ac39ae33824ebf4',
            'sbmd5uce': '8aff6a387522f6ea532dc973cd4a6f01',
            'sbsha1uce': '2aeabe97f17ea0d2d85123782d0719decf294af7',
            'sbsha256uce': 'd5de701b33b33a929c8cd3a11e07f824341beb6d4e1eb80e01a5ba2ed53ca9ce',
            'sbsh1lced': '526472e87484a6e5cbddc84f4c4c21c477919045',
            'sbcoiso': 'NG',
            'sbgrids': '613|592',
            'triggerSignup': 0,

            'memberEmail': 'tonymax1049@gmail.com'

        }];
    </script>
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src = '//www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-PTN2DB');
    </script>
    <link rel="stylesheet" href="//static.prdg.io/dist-non-modules/content/shared/css/generic-v3.9b2fedc1d7ef1838c325.css" />
    <link rel="stylesheet" href="//static.prdg.io/dist-non-modules/content/components/header/top-bar/top-bar.4fcdfd73efb3980d918f.css" />
    <script>
        (function() {
            'use strict';

            var global = {
                gAppContent: window.CDN_STATIC_CONTENT,
                intPageId: 111004,
                userBrowserType: {
                    browserName: 'chrome',
                    browserVersion: '83'
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
    <script src="//static.prdg.io/dist-non-modules/content/global-includes/js/helpers-new.151e9ccb5c4cfae0e3bc.js"></script>
    <script src="//static.prdg.io/dist-non-modules/content/skin-02/js/top-functions-v2.de7eb06bda3fe88bef5e.js"></script>
    <div id="sbPage">
      <?php include("header.php")?>
        <div id="sbContentOverlay"></div>
        <div id="sbContent">
            <link rel="stylesheet" href="//static.prdg.io/dist-non-modules/content/components/header/top-bar/jquery-plugins.37a081e16b4a18f9031a.css" />
            <script src="//static.prdg.io/dist-non-modules/content/components/header/top-bar/jquery-plugins.06aa462fcaee532d8433.js"></script>
            <script src="//static.prdg.io/dist-non-modules/content/components/banner/banner-v2.3377fbfdf01106a390d6.js" data-css-src="//static.prdg.io/dist-non-modules/content/components/banner/banner-v2.4e1f9e366219e5cfbded.css"></script>
            <script src="//static.prdg.io/dist-non-modules/content/components/header/top-bar/top-bar.5accbdbcc775fc3b460d.js"></script>
            <script src="//static.prdg.io/dist-non-modules/content/components/header/top-bar/search.204e2199cc01f1509832.js"></script>
            <script src="//static.prdg.io/dist-non-modules/content/components/header/top-bar/menus.0d8f3da7f8426c710521.js"></script>
            <script src="//static.prdg.io/dist-non-modules/content/shared/jquery.tmpl.49b33d8b10460c2c5988.js"></script>
            <script>
                sbGlbl.tourVisible = false;
            </script>
            <div id="middle" class="contOuter">
                <div id="middleInner" class="cRgt">
                    <link rel="stylesheet" href="//static.prdg.io/dist-non-modules/content/shared/shared-layout-v2.2c3a4fdc810030ef82c5.css" />
                    <link rel="stylesheet" href="//static.prdg.io/dist-non-modules/content/shared/navbar.eef607845fa8c2c7cfe6.css" />
                    <link rel="stylesheet" href="//static.prdg.io/dist-non-modules/content/shared/responsive-v2.edb119b748b069701e21.css" />
                    <aside id="mainNavCont">
                        <nav id="mainNav">
                            <h5 id="mainNavDropdown" class="account top">My Account
                            </h5>
                            <div class="sbMenuWrapper">
                                <div class="sbMenuInnerWrapper">
                                    <ul id="earn" class="top">
                                        <li class="sbMainNavSectionListItem mySwag">
                                            <a href="/" class="sbMainNavSectionListCta">Home</a>
                                        </li>
                                        <li class="sbMainNavSectionListItem answer">
                                            <a href="/surveys" class="sbMainNavSectionListCta sbMainNavInternalLink">Answer</a>
                                        </li>
                                        <li class="sbMainNavSectionListItem shop">
                                            <a href="/shop" class="sbMainNavSectionListCta sbMainNavInternalLink">Shop</a>
                                        </li>
                                        <li class="sbMainNavSectionListItem discover">
                                            <a href=/discover class="sbMainNavSectionListCta sbMainNavInternalLink">Discover</a>
                                        </li>
                                        <li class="sbMainNavSectionListItem search">
                                            <a href="//search.swagbucks.com" class="sbMainNavSectionListCta">Search</a>
                                        </li>
                                        <li class="sbMainNavSectionListItem play">
                                            <a href="/games" class="sbMainNavSectionListCta sbMainNavInternalLink">Play</a>
                                        </li>
                                        <li class="sbMainNavSectionListItem rewards">
                                            <a href="/rewards-store" class="sbMainNavSectionListCta sbMainNavInternalLink">Rewards</a>
                                        </li>
                                        <li class="sbMainNavSectionListItem account selectedButClickable">
                                            <a href="/account/settings" class="sbMainNavSectionListCta sbMainNavInternalLink">My Account</a>
                                        </li>
                                    </ul>
                                    <div id="sbDecoration1"></div>
                                    <div id="sbChannelMenu" class="sbSubmenu">
                                        <div class="sbSubmenuWrapper">
                                            <div class="sbSubmenuInnerWrapper">
                                                <section class="sbMainNavSection" data-menu-id="sbMainNavDefaultViewSetter">
                                                    <ul id="mainNavMainList" class="navList">
                                                        <li>
                                                            <a href="/account/summary" class="sbMainNavSectionListCta">Activity</a>
                                                        </li>
                                                        <li>
                                                            <a href="/account/swagup" class="sbMainNavSectionListCta">Swag Ups</a>
                                                        </li>
                                                        <li>
                                                            <a href="/account/collector-bills" class="sbMainNavSectionListCta">Collector &#39;s Bills</a>
                                                        </li>
                                                        <li>
                                                            <a href="/account/giftcards" class="sbMainNavSectionListCta">Gift Cards
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="/account/order-status" class="sbMainNavSectionListCta">Order Status
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="/account/referrals" class="sbMainNavSectionListCta">Referrals</a>
                                                        </li>
                                                        <li>
                                                            <a href="/account/swagstakes" class="sbMainNavSectionListCta">Swagstakes Entries</a>
                                                        </li>
                                                        <li>
                                                            <a href="/account/settings" class="sbMainNavSectionListCta">Settings</a>
                                                        </li>
                                                    </ul>
                                                </section>
                                                <section id="sbMainNavSectionQuickLinks" class="sbMainNavSection sbMainNavSectionPlain">
                                                    <h6 class="sbMainNavSectionHeading sbTourFadeRedeem sbTourFadeSwagButton">Quick Links</h6>
                                                    <ul class="sbMainNavSectionList">
                                                        <li class="sbMainNavSectionListItem sbTourFadeRedeem sbTourFadeSwagButton">
                                                            <a href="/account/settings" class="sbMainNavSectionListCta">My Account</a>
                                                        </li>
                                                        <li id="sbMainNavSectionListItemRedeem" class="sbMainNavSectionListItem sbTourFadeSwagButton">
                                                            <a href="/rewards-store" class="sbMainNavSectionListCta">Redeem SB</a>
                                                        </li>
                                                        <li id="sbMainNavSectionListItemSwagButton" class="sbMainNavSectionListItem sbTourFadeRedeem">
                                                            <a href="/extension" class="sbMainNavSectionListCta">SwagButton</a>
                                                        </li>
                                                        <li class="sbMainNavSectionListItem sbTourFadeRedeem sbTourFadeSwagButton">
                                                            <a href="/mobile" class="sbMainNavSectionListCta">Mobile Apps</a>
                                                        </li>
                                                        <li class="sbMainNavSectionListItem sbTourFadeRedeem sbTourFadeSwagButton">
                                                            <a href="/invite" class="sbMainNavSectionListCta">Invite Friends</a>
                                                        </li>
                                                    </ul>
                                                </section>
                                                <section id="sbMainNavSectionSocialize" class="sbMainNavSection sbMainNavSectionPlain">
                                                    <h6 class="sbMainNavSectionHeading">Socialize</h6>
                                                    <ul class="sbMainNavSectionList">
                                                        <li id="sbMainNavSectionListItemBlog" class="sbMainNavSectionListItem">
                                                            <a class="sbMainNavSectionListCta" href="/blog" target="_blank" title="Blog" rel="noopener">Blog</a>
                                                        </li>
                                                        <li id="sbMainNavSectionListItemFacebook" class="sbMainNavSectionListItem">
                                                            <a class="sbMainNavSectionListCta notranslate" href="https://www.facebook.com/swagbucks" target="_blank" rel="noopener nofollow">Facebook</a>
                                                        </li>
                                                        <li id="sbMainNavSectionListItemInstagram" class="sbMainNavSectionListItem">
                                                            <a class="sbMainNavSectionListCta notranslate" href="https://www.instagram.com/swagbucksofficial/" target="_blank" rel="noopener nofollow">Instagram</a>
                                                        </li>
                                                        <li id="sbMainNavSectionListItemPinterest" class="sbMainNavSectionListItem">
                                                            <a class="sbMainNavSectionListCta notranslate" href="https://www.pinterest.com/swagbucks/" target="_blank" rel="noopener nofollow">Pinterest</a>
                                                        </li>
                                                        <li id="sbMainNavSectionListItemTwitter" class="sbMainNavSectionListItem">
                                                            <a class="sbMainNavSectionListCta notranslate" href="https://www.twitter.com/swagbucks" target="_blank" rel="noopener nofollow">Twitter</a>
                                                        </li>
                                                        <li id="sbMainNavSectionListItemYouTube" class="sbMainNavSectionListItem">
                                                            <a class="sbMainNavSectionListCta notranslate" href="https://www.youtube.com/user/swagbucks" target="_blank" rel="noopener nofollow">YouTube</a>
                                                        </li>
                                                    </ul>
                                                </section>
                                                <script src="//static.prdg.io/dist-non-modules/content/shared/left-nav-v2.b9dd2721e08cd2b990a3.js" id="sbSideBarJsScript" data-selected-nav-selector-suffix="" data-selected-nav="account"></script>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </nav>
                    </aside>
                    <main id="main">
                        <div class="acctTemplate">
                            <link rel="stylesheet" href="//static.prdg.io/dist-non-modules/content/projects/account/settings.1b1beb95ce7145a87ae1.css" />
                            <div>
                                <header id="sbMainHeader">
                                    <h1 id="sbMainHeading">Settings</h1>
                                    <nav id="sbMainTabsNav">
                                        <a href="/account/settings" class="sbMainTabsNavCta sbCta">Account Details
                                        </a>
                                        <a href="/account/settings/notifications" class="active sbMainTabsNavCta sbCta">Preferences
                                        </a>
                                    </nav>
                                </header>
                                <link rel="stylesheet" href="//static.prdg.io/dist-non-modules/content/projects/account/settings-notifications.07ac257c6704848faf72.css" />
                                <section id="emailForm" class="acctForm sbMainTab">
                                    <div class="formHead">
                                        <h2 class="information">Email Notifications</h2>
                                    </div>
                                    <div class="outerTable">
                                        <table id="emailTable"></table>
                                        <div class="clear"></div>
                                        <p id="note">Your preferences here do not affect the important emails like password reminders and order confirmations that you will automatically receive.</p>
                                        <div class="clear"></div>
                                    </div>
                                    <div id="emailSettingsWrap"></div>
                                    <script>
                                        sbPage.notificationEvents = [
                                            [1, "Special Offers", "Receive new and special earning opportunities. And earn SB for it!", 1, 2, 1, "NotifySpecialOffers", "Yes"],
                                            [4, "Exclusive deals in Shop & Earn stores", "Receive exclusive savings and deals from your favorite stores. And earn SB for it!", 1, 2, 3, "NotifyShopEarnDeals", "Yes"],
                                            [8, "Limited-time Reward Opportunities", "Get in on all the fun and action of the community with Swagstakes, Swag Codes, Collector's Bills and more!", 1, 2, 4, "NotifyLimitedTimeReward", "Yes"],
                                            [32, "Videos to watch", "New videos, channels and updates about Swagbucks TV", 1, 2, 6, "NotifySBTV", "Yes"],
                                            [128, "Welcome Series", "A special introduction just for brand new members", 1, 2, 8, "NotifyWelcomeSeries", "Yes"],
                                            [512, "Survey Invites", "Receive exclusive survey invitations to earn more SB", 0, 2, 10, "", "No"],
                                            [1024, "Member Benefits", "Receive special product and feature notifications", 0, 2, 11, "", "No"]
                                        ];
                                    </script>
                                </section>
                                <script src="//static.prdg.io/dist-non-modules/content/js/jsbn2.5dcffb9b9fd25f7cd756.js"></script>
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
                                <script src="//static.prdg.io/dist-non-modules/content/projects/account/settings-notifications.73b7bedaa01da736f6b0.js"></script>
                            </div>
                            <aside id="popWindow">
                                <link rel="stylesheet" href="//static.prdg.io/dist-non-modules/content/components/modal/member-info.8f7273b159b5439bea83.css" />
                                <div id="popWindowContainer">
                                    <button id="popWindowClose"></button>
                                    <p id="popWindowText">We need a little more information about you. All forms must be filled to complete account set up.
                                    </p>
                                    <form id="signUpFormExtended">
                                        <input type="hidden" name="__mBfuPAgT" value="ec4db306ebee07ec3ff2a1782306b7575538e0c6ba88080b71485ee22a4462d4" id="neededInfoAuthToken">
                                        <section class="formControlHolder">
                                            <input id="signUpFirstName" class="sbMemberInfoModalFormInput" data-validation="name" data-field="firstName" tabindex="80">
                                            <label class="formControlPlaceholder" for="signUpFirstName">First Name</label>
                                        </section>
                                        <section class="formControlHolder">
                                            <input id="signUpLastName" class="sbMemberInfoModalFormInput" data-validation="name" data-field="lastName" tabindex="84">
                                            <label class="formControlPlaceholder" for="signUpLastName">Last Name</label>
                                        </section>
                                        <section class="formControlHolder">
                                            <input id="signUpSwagName" class="sbMemberInfoModalFormInput" data-validation="swagName" data-field="userName" tabindex="88">
                                            <label class="formControlPlaceholder" for="signUpSwagName">Create a Swagbucks Account Nickname</label>
                                            <p class="formControlHelp">Your Swag Account Nickname should be between 4 and 16 characters, alphanumeric characters only.</p>
                                        </section>
                                        <section class="formControlHolder">
                                            <input id="signUpZipCode" class="sbMemberInfoModalFormInput" data-validation="zip" data-field="zipCode" tabindex="92">
                                            <label class="formControlPlaceholder" for="signUpZipCode">Postal Code</label>
                                        </section>
                                        <section class="formControlHolder">
                                            <div id="signUpSecurityQuestion" class="formDropdownContainer" data-validation="secQuestion" data-val="0" data-field="securityQuestionID">
                                                <span>Select a Question</span>
                                                <div id="signUpSecurityQuestionDropdown" class="formDropdown cardDropdown">
                                                    <span data-id="32">What is the title of your favorite book or poem?</span>
                                                    <span data-id="36">What is the title of your favorite song?</span>
                                                    <span data-id="29">What was the first concert or show you attended?</span>
                                                    <span data-id="27">What was the name of your best childhood friend?</span>
                                                    <span data-id="24">What was your childhood nickname?</span>
                                                    <span data-id="37">What was your favorite cartoon character as a child?</span>
                                                    <span data-id="35">Who is your all-time favorite movie or literary character?</span>
                                                    <span data-id="33">Who is your all-time favorite movie or literary hero?</span>
                                                    <span data-id="34">Who is your all-time favorite movie or literary villain?</span>
                                                    <span data-id="31">Who is your favorite author or poet?</span>
                                                    <span data-id="30">Who was your childhood idol/role model outside of your family members?</span>
                                                    <span data-id="28">Who was your favorite teacher?</span>
                                                </div>
                                            </div>
                                        </section>
                                        <section class="formControlHolder">
                                            <input id="signUpSecurityAnswer" type="password" class="sbMemberInfoModalFormInput" data-validation="secAnswer" data-field="securityAnswer" autocomplete="off" tabindex="130">
                                            <label class="formControlPlaceholder" for="signUpSecurityAnswer">Please enter your security question answer.</label>
                                        </section>
                                        <div id="popWindowFooter">
                                            <button type="submit" class="sbCta sbBgPrimaryColor">Continue
                                            </button>
                                            <p id="popWindowError">Please review your account entries.
                                            </p>
                                        </div>
                                    </form>
                                </div>
                                <script>
                                    sbPage.zipLabelLocal = 'Postal Code' || 'ZIP Code';
                                </script>
                                <script src="//static.prdg.io/dist-non-modules/content/components/modal/member-info.cba9315bc100939da3fa.js"></script>
                            </aside>
                        </div>
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
            <footer id="sbFooterWrap">
                <div id="sbFooterContainer">
                    <div id="sbFooter" data-ignore-footer-reposition="false">
                        <section id="sbFooterInnerWrap">
                            <aside id="footerLanguagePreferencesCont" class="languagePreferencesCont notranslate">
                                <span id="footerLanguageCurrent" class="languagePreferencesCurrent sbPrimaryColor"></span>
                                <ul id="footerSettingsLanguageMenuCont" class="settingsLanguageMenuCont">
                                    <li data-locale-value="1" data-lang-code="en" data-lang="English" class="languageSelectOption">English
                                    </li>
                                    <li data-locale-value="2" data-lang-code="de" data-lang="Deutsch" class="languageSelectOption">Deutsch
                                    </li>
                                    <li data-locale-value="4" data-lang-code="fr" data-lang="Français (France)" class="languageSelectOption">Français (France)
                                    </li>
                                    <li data-locale-value="8" data-lang-code="es" data-lang="Español (España)" class="languageSelectOption">Español (España)
                                    </li>
                                    <li data-locale-value="16" data-lang-code="pt" data-lang="Português (Portugal)" class="languageSelectOption">Português (Portugal)
                                    </li>
                                    <li data-locale-value="32" data-lang-code="it" data-lang="Italiano" class="languageSelectOption">Italiano
                                    </li>
                                    <li data-locale-value="64" data-lang-code="ru" data-lang="русский" class="languageSelectOption">русский
                                    </li>
                                    <li data-locale-value="128" data-lang-code="fr" data-lang="Français (Canada)" class="languageSelectOption">Français (Canada)
                                    </li>
                                    <li data-locale-value="256" data-lang-code="zh" data-lang="中文" class="languageSelectOption">中文
                                    </li>
                                    <li data-locale-value="512" data-lang-code="ar" data-lang="العربية" class="languageSelectOption">العربية
                                    </li>
                                    <li data-locale-value="1024" data-lang-code="pl" data-lang="Język polski" class="languageSelectOption">Język polski
                                    </li>
                                    <li data-locale-value="2048" data-lang-code="tr" data-lang="Türkçe" class="languageSelectOption">Türkçe
                                    </li>
                                    <li data-locale-value="4096" data-lang-code="da" data-lang="dansk" class="languageSelectOption">dansk
                                    </li>
                                    <li data-locale-value="8192" data-lang-code="el" data-lang="Ελληνικά" class="languageSelectOption">Ελληνικά
                                    </li>
                                    <li data-locale-value="16384" data-lang-code="nl" data-lang="Nederlands" class="languageSelectOption">Nederlands
                                    </li>
                                    <li data-locale-value="32768" data-lang-code="no" data-lang="norsk" class="languageSelectOption">norsk
                                    </li>
                                    <li data-locale-value="65536" data-lang-code="sv" data-lang="svenska" class="languageSelectOption">svenska
                                    </li>
                                    <li data-locale-value="131072" data-lang-code="ja" data-lang="日本語" class="languageSelectOption">日本語
                                    </li>
                                    <li data-locale-value="262144" data-lang-code="ko" data-lang="한국어" class="languageSelectOption">한국어
                                    </li>
                                    <li data-locale-value="524288" data-lang-code="pt" data-lang="Português (Brasil)" class="languageSelectOption">Português (Brasil)
                                    </li>
                                    <li data-locale-value="1048576" data-lang-code="es" data-lang="Español (México)" class="languageSelectOption">Español (México)
                                    </li>
                                </ul>
                            </aside>
                            <script src="//static.prdg.io/dist-non-modules/content/components/footer/language-preferences.81ca2ca81eae282f5584.js" defer="defer"></script>
                            <section id="sbFooterColCont" class="sbFooterSection ">
                                <section id="footer-col-1" class="sbFooterSection sbFooterSectionCollapsible">
                                    <section class="sbFooterSection">
                                        <h6 class="sbFooterHeading">Swagbucks</h6>
                                        <input class="fTitle" type="radio" id="sbFooterSwagbucks" name="tinyFooter">
                                        <label for="sbFooterSwagbucks" class="fTitle">Swagbucks</label>
                                        <ul id="footerSwagbucks" class="footerCol">
                                            <li class="sbFooterLink">
                                                <a class="sbFooterLink" href="https://www.swagbucks.com/articles">Useful Articles</a>
                                            </li>
                                            <li class="sbFooterLink">
                                                <a class="sbFooterLink" href="https://www.swagbucks.com/g/about">About Us</a>
                                            </li>
                                            <li class="sbFooterLink">
                                                <a id="footerSwagbucksHowItWorks" class="sbFooterLink" href="https://www.swagbucks.com/g/how-it-works">How it Works
                                                </a>
                                            </li>
                                            <li class="sbFooterLink">
                                                <a class="sbFooterLink" href="https://www.prodege.com/newsroom/" target="_blank" rel="noopener">In the Press</a>
                                            </li>
                                            <li class="sbFooterLink">
                                                <a class="sbFooterLink" href="/blog">Blog</a>
                                            </li>
                                            <li class="sbFooterLink">
                                                <a class="sbFooterLink" href="https://www.swagbucks.com/mobile">Mobile Apps</a>
                                            </li>
                                            <li class="sbFooterLink">
                                                <a class="sbFooterLink" href="https://www.swagbucks.com/extension">Extension</a>
                                            </li>
                                        </ul>
                                    </section>
                                </section>
                                <section id="footer-col-3" class="sbFooterSection sbFooterSectionCollapsible">
                                    <section class="sbFooterSection">
                                        <h6 class="sbFooterHeading">Rewards</h6>
                                        <input class="fTitle" type="radio" id="sbFooterRewards" name="tinyFooter">
                                        <label for="sbFooterRewards" class="fTitle">Rewards</label>
                                        <ul id="footerRewards" class="footerCol">
                                            <li class="sbFooterLink">
                                                <a class="sbFooterLink" href="//www.swagbucks.com/rewards-store">All Gift Cards</a>
                                            </li>
                                        </ul>
                                    </section>
                                    <section class="sbFooterSection">
                                        <h6 class="sbFooterHeading">Ways to Earn</h6>
                                        <input class="fTitle" type="radio" id="sbFooterWaysToEarn" name="tinyFooter">
                                        <label for="sbFooterWaysToEarn" class="fTitle">Ways to Earn</label>
                                        <ul id="footerWaysToEarn" class="footerCol">
                                            <li class="sbFooterLink">
                                                <a class="sbFooterLink" href="https://www.swagbucks.com/shop">Coupons &Cash Back</a>
                                            </li>
                                            <li class="sbFooterLink">
                                                <a class="sbFooterLink" href="https://www.swagbucks.com/g/paid-surveys">Answer Surveys</a>
                                            </li>
                                            <li class="sbFooterLink">
                                                <a class="sbFooterLink" href="https://www.swagbucks.com/discover">Discover Deals</a>
                                            </li>
                                        </ul>
                                    </section>
                                </section>
                                <section id="footer-col-4" class="sbFooterSection sbFooterSectionCollapsible">
                                    <section class="sbFooterSection">
                                        <h6 class="sbFooterHeading">Information
                                        </h6>
                                        <input class="fTitle" type="radio" id="sbFooterMore" name="tinyFooter">
                                        <label for="sbFooterMore" class="fTitle">Information
                                        </label>
                                        <ul id="footerMore" class="footerCol">
                                            <li class="sbFooterLink">
                                                <a class="sbFooterLink" href="https://help.swagbucks.com/hc/en-us/articles/205640094-A-guide-to-the-Do-s-Don-ts-of-Swagbucks-" target="_blank" rel="noopener">Do &#039;s and Don &#039;ts
                                                </a>
                                            </li>
                                            <li class="mobileEnabled sbFooterLink">
                                                <a class="sbFooterLink" href="/rewards-store">Rewards Program
                                                </a>
                                            </li>
                                        </ul>
                                    </section>
                                    <section class="sbFooterSection">
                                        <h6 class="sbFooterHeading">Legal
                                        </h6>
                                        <input class="fTitle" type="radio" id="sbFooterLegal" name="tinyFooter">
                                        <label for="sbFooterLegal" class="fTitle">Legal
                                        </label>
                                        <ul id="footerLegal" class="footerCol">
                                            <li class="mobileEnabled sbFooterLink">
                                                <a class="sbFooterLink" href="/privacy-policy-intl" target="_blank" rel="noopener">Privacy Policy
                                                </a>
                                            </li>
                                            <li class="mobileEnabled sbFooterLink">
                                                <a class="sbFooterLink" href="/terms-of-use-intl" target="_blank" rel="noopener">Terms of Use
                                                </a>
                                            </li>
                                            <li class="mobileEnabled sbFooterLink">
                                                <a class="sbFooterLink" href="https://www.prodege.com/prodege-card-linked-offer-service-terms/" target="_blank" rel="noopener">Card Linked Offer Service Terms
                                                </a>
                                            </li>
                                            <li class="sbFooterLink">
                                                <a class="sbFooterLink ot-sdk-show-settings" href="#">Your Cookie Choices
                                                </a>
                                            </li>
                                            <li class="mobileEnabled sbFooterLink">
                                                <a class="sbFooterLink" href="https://www.prodege.com/advertising-disclosure/" target="_blank" rel="noopener">Advertising Disclosure
                                                </a>
                                            </li>
                                        </ul>
                                    </section>
                                </section>
                                <section id="footer-col-5" class="sbFooterSection sbFooterSectionCollapsible contactContainer">
                                    <section class="sbFooterSection">
                                        <h6 class="sbFooterHeading">Contact Us</h6>
                                        <input class="fTitle" type="radio" id="sbFooterContactUs" name="tinyFooter">
                                        <label for="sbFooterContactUs" class="fTitle">Contact Us</label>
                                        <ul id="footerSupport" class="footerCol">
                                            <li class="sbFooterLink">
                                                <a class="sbFooterLink" href="https://www.prodege.com" target="_blank" rel="noopener">Prodege, LLC</a>
                                            </li>
                                            <li class="sbFooterLink">
                                                <a class="sbFooterLink" href="/help">Customer Support
                                                </a>
                                            </li>
                                            <li class="sbFooterLink">
                                                <a class="sbFooterLink" href="https://www.prodege.com/solutions/" target="_blank" rel="noopener">Advertise With Us</a>
                                            </li>
                                            <li class="sbFooterLink">
                                                <a class="sbFooterLink" href="https://www.prodege.com/newsroom/" target="_blank" rel="noopener">Press and Business Inquiries</a>
                                            </li>
                                            <li class="sbFooterLink">
                                                <a class="sbFooterLink" href="https://www.prodege.com/careers/" target="_blank" rel="noopener">Careers</a>
                                            </li>
                                        </ul>
                                    </section>
                                    <section class="sbFooterSection">
                                        <h6 class="sbFooterHeading">Connect With Us</h6>
                                        <input class="fTitle" type="radio" id="sbFooterConnectWithUs" name="tinyFooter">
                                        <label for="sbFooterConnectWithUs" class="fTitle">Connect With Us</label>
                                        <div id="footerConnectWithUs">
                                            <ul id="socialMediaLinksList">
                                                <link rel="stylesheet" href="//static.prdg.io/dist-non-modules/media-links.b70a8a294ea22c14468c.css" />
                                                <li id="socialLinkFacebook" class="sbFooterLink">
                                                    <a id="sbSocialIconFacebook" class="sbSocialIcon" href="https://www.facebook.com/swagbucks" target="_blank" rel="noopener">
                                                        <span class="sbVisuallyHidden">Swagbucks on Facebook
                                                        </span>
                                                    </a>
                                                </li>
                                                <li id="socialLinkTwitter" class="sbFooterLink">
                                                    <a id="sbSocialIconTwitter" class="sbSocialIcon" href="https://www.twitter.com/swagbucks" target="_blank" rel="noopener">
                                                        <span class="sbVisuallyHidden">Swagbucks on Twitter
                                                        </span>
                                                    </a>
                                                </li>
                                                <li id="socialLinkInstagram" class="sbFooterLink">
                                                    <a id="sbSocialIconInstagram" class="sbSocialIcon" href="https://www.instagram.com/swagbucksofficial/" target="_blank" rel="noopener">
                                                        <span class="sbVisuallyHidden">Swagbucks on Instagram
                                                        </span>
                                                    </a>
                                                </li>
                                                <li id="socialLinkPinterest" class="sbFooterLink">
                                                    <a id="sbSocialIconPinterest" class="sbSocialIcon" href="https://www.pinterest.com/swagbucks/" target="_blank" rel="noopener">
                                                        <span class="sbVisuallyHidden">Swagbucks on Pinterest
                                                        </span>
                                                    </a>
                                                </li>
                                                <li id="socialLinkYoutube" class="sbFooterLink">
                                                    <a id="sbSocialIconYoutube" class="sbSocialIcon" href="https://www.youtube.com/user/swagbucks" target="_blank" rel="noopener">
                                                        <span class="sbVisuallyHidden">Swagbucks on YouTube
                                                        </span>
                                                    </a>
                                                </li>
                                                <li id="socialLinkBlog" class="sbFooterLink">
                                                    <a id="sbSocialIconBlog" class="sbSocialIcon" href="/blog" target="_blank" rel="noopener">
                                                        <span class="sbVisuallyHidden">Blog
                                                        </span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <ul id="footerMobileApps"></ul>
                                        </div>
                                    </section>
                                </section>
                            </section>
                        </section>
                    </div>
                </div>
                <div id="sbBoilerplateContainer">
                    <div id="sbBoilerplate">
                        <div id="sbProdegeFooter">
                            <img src="//static.prdg.io/dist-non-modules/content/shared/images/prodege-logo.a89abc252ad78bda8358.png" id="sbProdegeLogo" alt="Prodege" width="205px" height="56px" loading="lazy">
                            <p>Copyright &copy;2023 Prodege, LLC
                            </p>
                        </div>
                        <div id="sbBPText">
                            <p>Swagbucks &reg;-related trademarks including “Swagbucks &reg;”, “Swag Codes &reg;”, “Swagstakes &reg;”, “SwagButton”, “SwagUp”, “SB” and the Swagbucks logo are the property of Prodege, LLC; all rights reserved. Other trademarks appearing on this site are property of their respective owners, which do not endorse and are not affiliated with Swagbucks or its promotions.
                            </p>
                        </div>
                    </div>
                </div>
            </footer>
            <script src="//static.prdg.io/dist-non-modules/content/shared/jquery.isonscreen.7b851814bd6af500d8f9.js"></script>
            <script src="//static.prdg.io/dist-non-modules/content/components/footer/footer.b6e45277a533caadfd71.js"></script>
            <script id="sbServiceWorkerData" type="application/json">
                {
                    "clientDomain": "https://www.swagbucks.com"
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