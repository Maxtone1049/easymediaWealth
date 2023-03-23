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
} ?>
<!DOCTYPE html>
<html id="html" class="isResponsive isNotExternal isTourNotShown isTourNotActive isSliderNotShown isNotHome isLoggedIn ot">

<head>
    <meta charset="utf-8">
    <title>Rewards | EasyMediaWealth</title>
    <meta name="keywords" content="">
    <meta name="description" content="Earn rewards and free stuff by searching and shopping online, answering surveys, and more at Swagbucks.com, a customer loyalty rewards program. Be rewarded today.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:url" content="https://www.swagbucks.com/rewards-store">
    <meta property="og:description" content="Earn rewards and free stuff by searching and shopping online, answering surveys, and more at Swagbucks.com, a customer loyalty rewards program. Be rewarded today.">
    <meta property="og:title" content="Rewards | Swagbucks">
    <link rel="icon" type="image/svg+xml" href="/favicon.svg">
    <link rel="icon" type="image/png" href="../static.prdg.io/dist-non-modules/images/favicon-16x16.c851c657ffaf20dfaf15.png" sizes="16x16">
    <link rel="icon" type="image/png" href="../static.prdg.io/dist-non-modules/images/favicon-32x32.62bd6461aac547ff4000.png" sizes="32x32">
    <link rel="icon" type="image/png" href="../static.prdg.io/dist-non-modules/images/favicon-96x96.6e441ed57709dfb43629.png" sizes="96x96">
    <link rel="icon" type="image/png" href="../static.prdg.io/dist-non-modules/images/android-chrome-192x192.a8de0a0f140635c65747.png" sizes="192x192">
    <link rel="alternate icon" type="image/png" href="/favicon.png">
    <link rel="apple-touch-icon" href="../static.prdg.io/dist-non-modules/images/apple-touch-icon-120x120.f6f0effa6837166ce1d9.png">
    <link rel="apple-touch-icon" sizes="180x180" href="../static.prdg.io/dist-non-modules/images/apple-touch-icon-180x180.48d1616875d9e641fc7a.png">
    <link rel="apple-touch-icon" sizes="167x167" href="../static.prdg.io/dist-non-modules/images/apple-touch-icon-167x167.f0fca7d85bd8abbfbaa8.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../static.prdg.io/dist-non-modules/images/apple-touch-icon-152x152.144c1bf7000db8f9835c.png">
    <link rel="canonical" href="h./rewards-store">
    <meta name="format-detection" content="telephone=no">
</head>

<body class="loggedIn">
    <link rel="stylesheet" href="//static.prdg.io/dist-non-modules/content/components/font/font.0e7d3d116854f6603774.css" />
    <script src="https://cdn.cookielaw.org/consent/e3b98144-e9b8-4fab-9a3a-3a12894bed0b/OtAutoBlock.js"></script>
    <script src="https://cdn.cookielaw.org/scripttemplates/otSDKStub.js" charset="UTF-8" data-domain-script="e3b98144-e9b8-4fab-9a3a-3a12894bed0b"></script>
    <script>
        function OptanonWrapper() {}
    </script>
    <script src="//static.prdg.io/dist-non-modules/content/shared/trackjs.min.ce256864164b0abb791e.js"></script>
    <script>
        window.TrackJS && TrackJS.install({
            token: 'a77f9aa3cfae4bc59cd1f05c818671ab',
            application: 'swagbucks-prod',
        });
    </script>
    <script id="sbHeadData" type="application/json">
        {
            "topNavMenuApplicable": false,
            "token": {
                "__mBfuPAgT": "18a5e57663b091d96f6f09cbfcda5653161db8ee1ab0c534da8766cb6a2626b2"
            },
            "sbGlbMember": 136484444,
            "emailOnly": false,
            "currentSbAmount": 49,
            "homepage": false,
            "dailyGoalApplicable": true,
            "activityFeedApplicable": false,
            "isSwagbucksPlusApplicable": false,
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
            "PROFILE_UPLOADER_HOST": "//upload.profileimages.swagbucks.com",
            "EMAIL_INVITES_AMOUNT": 10
        }
    </script>
    <script src="//static.prdg.io/dist-non-modules/content/shared/sbglobals.75e9c5e76a91dfe5e99f.js"></script>
    <link rel="search" href="//static.prdg.io/dist-non-modules/content/open-search/open-search-chrome.cbb6a7acf953589cb993.xml" type="application/opensearchdescription+xml" title="Swagbucks search and get rewarded">
    <script src="//static.prdg.io/dist-non-modules/content/shared/jquery-1.6.4.min.310d26371f84ccea90a1.js"></script>
    <script src="//static.prdg.io/dist-non-modules/content/shared/localize-loader.5c6a8a2c0232e9cbb336.js" id="localizeScript" data-testing="false" data-src="//static.prdg.io/dist-non-modules/content/shared/localize.1fdb88736d80e367d0aa.js" data-bits="{&#34;de&#34;:2,&#34;no&#34;:32768,&#34;ru&#34;:64,&#34;sv&#34;:65536,&#34;pt&#34;:524288,&#34;ko&#34;:262144,&#34;el&#34;:8192,&#34;en&#34;:1,&#34;it&#34;:32,&#34;fr&#34;:128,&#34;es&#34;:1048576,&#34;zh&#34;:256,&#34;ar&#34;:512,&#34;ja&#34;:131072,&#34;pl&#34;:1024,&#34;da&#34;:4096,&#34;tr&#34;:2048,&#34;nl&#34;:16384}" data-language-code="" data-ysense="false" data-key="MldiexN2caLe9" data-languages="{&#34;de&#34;:&#34;Deutsch&#34;,&#34;no&#34;:&#34;norsk&#34;,&#34;ru&#34;:&#34;русский&#34;,&#34;sv&#34;:&#34;svenska&#34;,&#34;pt&#34;:&#34;Português (Brasil)&#34;,&#34;ko&#34;:&#34;한국어&#34;,&#34;el&#34;:&#34;Ελληνικά&#34;,&#34;en&#34;:&#34;English&#34;,&#34;it&#34;:&#34;Italiano&#34;,&#34;fr&#34;:&#34;Français (Canada)&#34;,&#34;es&#34;:&#34;Español (México)&#34;,&#34;zh&#34;:&#34;中文&#34;,&#34;ar&#34;:&#34;العربية&#34;,&#34;ja&#34;:&#34;日本語&#34;,&#34;pl&#34;:&#34;Język polski&#34;,&#34;da&#34;:&#34;dansk&#34;,&#34;tr&#34;:&#34;Türkçe&#34;,&#34;nl&#34;:&#34;Nederlands&#34;}"></script>
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
    <link rel="stylesheet" href="//static.prdg.io/dist-non-modules/content/shared/css/generic-v3.3c46b8c2d2a888150ba9.css" />
    <link rel="stylesheet" href="//static.prdg.io/dist-non-modules/content/components/header/top-bar/top-bar.4fcdfd73efb3980d918f.css" />
    <script>
        (function() {
            'use strict';

            var global = {
                gAppContent: window.CDN_STATIC_CONTENT,
                intPageId: 110029,
                userBrowserType: {
                    browserName: 'chrome',
                    browserVersion: '111'
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
                        facebook: 'www.facebook.com/swagbucks',
                        blog: '/blog',
                        pinterest: 'www.pinterest.com/swagbucks/',
                        youtube: 'www.youtube.com/user/swagbucks',
                        twitter: 'www.twitter.com/swagbucks',
                        instagram: 'www.instagram.com/swagbucksofficial/',
                        helpCenter: 'help.swagbucks.com/hc/en-us',
                        helpCenterNewTicket: 'https://help.swagbucks.com/hc/requests/new',
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
     <?php include_once('header.php');?>
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
                sbGlbl.tourVisible = false;
            </script>
            <div id="middle" class="contOuter">
                <div id="middleInner" class="cRgt">
                    <script>
                        // List View or Cards View
                        sbGlbl.isListView = false;
                    </script>
                    <link rel="stylesheet" href="//static.prdg.io/dist-non-modules/content/shared/shared-layout-v2.2c3a4fdc810030ef82c5.css" />
                    <link rel="stylesheet" href="//static.prdg.io/dist-non-modules/content/shared/navbar.eef607845fa8c2c7cfe6.css" />
                    <link rel="stylesheet" href="//static.prdg.io/dist-non-modules/content/shared/responsive-v2.edb119b748b069701e21.css" />
                    <aside id="mainNavCont">
                       <?php include('nav.php')?>
                    </aside>
                    <link rel="stylesheet" href="//static.prdg.io/dist-non-modules/content/projects/rewards/home.41998426c842b450c5e9.css" />
                    <script>
                        sbGlbl.hasMonthlyDiscount = true;
                        sbPage.strChannelName = 'rewards';
                    </script>
                    <script>
                        sbPage.strName = 'home';
                    </script>
                    <main id="earningCardsWrap" class="earningCardsWrap isCompanionAdsSidebarNotPresent">
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
                            sbGlbl.premiumAndFeaturedCards = {};

                            var hasStaticCardsTray = false;

                            var streams = [{
                                streamID: 155,
                                cards: [],
                                nextIndex: 0,
                                allUrl: '',
                                title: 'Featured Gift Cards',
                                showViewMore: false,
                                currentSort: 106,
                                rows: 1,
                                popularSort: 105,
                                expectedCardCount: 20
                            }, {
                                streamID: 154,
                                cards: [{
                                    cardId: 448633,
                                    cardTypeId: 6,
                                    header: "Amazon.fr 5 EUR Gift Certificate",
                                    prizeId: 33464,
                                    image: "https://ucontent.prdg.io/img/prizes/large/image33464.jpg",
                                    price: 500,
                                    origPrice: 750,
                                    discountPct: 33,
                                    link: "/p/prize/33464/Amazon-fr-5-EUR-Gift-Certificate",
                                    deepDiscount: false,
                                    deepDiscountPct: 12,
                                    pos: 0,
                                    trkId: '448633'
                                }, {
                                    cardId: 688589,
                                    cardTypeId: 6,
                                    header: "Amazon.co.uk \u00A35",
                                    prizeId: 21742,
                                    image: "https://ucontent.prdg.io/img/prizes/large/image21742.jpg",
                                    price: 500,
                                    origPrice: 849,
                                    discountPct: 41,
                                    link: "/p/prize/21742/Amazon-co-uk-£5",
                                    deepDiscount: false,
                                    deepDiscountPct: 12,
                                    pos: 1,
                                    trkId: '688589'
                                }, {
                                    cardId: 448930,
                                    cardTypeId: 6,
                                    header: "Amazon.de 5 EUR Gutschein",
                                    prizeId: 33097,
                                    image: "https://ucontent.prdg.io/img/prizes/large/image33097.jpg",
                                    price: 500,
                                    origPrice: 750,
                                    discountPct: 33,
                                    link: "/p/prize/33097/Amazon-de-5-EUR-Gutschein",
                                    deepDiscount: false,
                                    deepDiscountPct: 12,
                                    pos: 2,
                                    trkId: '448930'
                                }, {
                                    cardId: 2561180,
                                    cardTypeId: 6,
                                    header: "Amazon.de 1 EUR Gutschein",
                                    prizeId: 34444,
                                    image: "https://ucontent.prdg.io/img/prizes/large/image34444.jpg",
                                    price: 100,
                                    origPrice: 350,
                                    discountPct: 71,
                                    link: "/p/prize/34444/Amazon-de-1-EUR-Gutschein",
                                    deepDiscount: false,
                                    deepDiscountPct: 12,
                                    pos: 3,
                                    trkId: '2561180'
                                }, {
                                    cardId: 2561181,
                                    cardTypeId: 6,
                                    header: "Amazon.fr 1 EUR Gift Certificate",
                                    prizeId: 34443,
                                    image: "https://ucontent.prdg.io/img/prizes/large/image34443.jpg",
                                    price: 100,
                                    origPrice: 350,
                                    discountPct: 71,
                                    link: "/p/prize/34443/Amazon-fr-1-EUR-Gift-Certificate",
                                    deepDiscount: false,
                                    deepDiscountPct: 12,
                                    pos: 4,
                                    trkId: '2561181'
                                }, {
                                    cardId: 688619,
                                    cardTypeId: 6,
                                    header: "Amazon.co.uk \u00A325",
                                    prizeId: 26992,
                                    image: "https://ucontent.prdg.io/img/prizes/large/image26992.jpg",
                                    price: 2500,
                                    origPrice: 4199,
                                    discountPct: 40,
                                    link: "/p/prize/26992/Amazon-co-uk-£25",
                                    deepDiscount: false,
                                    deepDiscountPct: 12,
                                    pos: 5,
                                    trkId: '688619'
                                }, {
                                    cardId: 448929,
                                    cardTypeId: 6,
                                    header: "Amazon.de 10 EUR Gutschein",
                                    prizeId: 33098,
                                    image: "https://ucontent.prdg.io/img/prizes/large/image33098.jpg",
                                    price: 1000,
                                    origPrice: 1500,
                                    discountPct: 33,
                                    link: "/p/prize/33098/Amazon-de-10-EUR-Gutschein",
                                    deepDiscount: false,
                                    deepDiscountPct: 12,
                                    pos: 6,
                                    trkId: '448929'
                                }, {
                                    cardId: 448631,
                                    cardTypeId: 6,
                                    header: "Amazon.fr 20 EUR Gift Certificate",
                                    prizeId: 33466,
                                    image: "https://ucontent.prdg.io/img/prizes/large/image33466.jpg",
                                    price: 2000,
                                    origPrice: 3000,
                                    discountPct: 33,
                                    link: "/p/prize/33466/Amazon-fr-20-EUR-Gift-Certificate",
                                    deepDiscount: false,
                                    deepDiscountPct: 12,
                                    pos: 7,
                                    trkId: '448631'
                                }, {
                                    cardId: 448928,
                                    cardTypeId: 6,
                                    header: "Amazon.de 25 EUR Gutschein",
                                    prizeId: 33099,
                                    image: "https://ucontent.prdg.io/img/prizes/large/image33099.jpg",
                                    price: 2500,
                                    origPrice: 3750,
                                    discountPct: 33,
                                    link: "/p/prize/33099/Amazon-de-25-EUR-Gutschein",
                                    deepDiscount: false,
                                    deepDiscountPct: 12,
                                    pos: 8,
                                    trkId: '448928'
                                }, {
                                    cardId: 688606,
                                    cardTypeId: 6,
                                    header: "Amazon.co.uk \u00A350",
                                    prizeId: 27259,
                                    image: "https://ucontent.prdg.io/img/prizes/large/image27259.jpg",
                                    price: 5000,
                                    origPrice: 8389,
                                    discountPct: 40,
                                    link: "/p/prize/27259/Amazon-co-uk-£50",
                                    deepDiscount: false,
                                    deepDiscountPct: 12,
                                    pos: 9,
                                    trkId: '688606'
                                }, {
                                    cardId: 448630,
                                    cardTypeId: 6,
                                    header: "Amazon.fr 50 EUR Gift Certificate",
                                    prizeId: 33467,
                                    image: "https://ucontent.prdg.io/img/prizes/large/image33467.jpg",
                                    price: 5000,
                                    origPrice: 7500,
                                    discountPct: 33,
                                    link: "/p/prize/33467/Amazon-fr-50-EUR-Gift-Certificate",
                                    deepDiscount: false,
                                    deepDiscountPct: 12,
                                    pos: 10,
                                    trkId: '448630'
                                }, {
                                    cardId: 1513718,
                                    cardTypeId: 6,
                                    header: "Amazon.es 20 EUR Tarjeta Regalo",
                                    prizeId: 34057,
                                    image: "https://ucontent.prdg.io/img/prizes/large/image34057.jpg",
                                    price: 2000,
                                    origPrice: 2750,
                                    discountPct: 27,
                                    link: "/p/prize/34057/Amazon-es-20-EUR-Tarjeta-Regalo",
                                    deepDiscount: false,
                                    deepDiscountPct: 12,
                                    pos: 11,
                                    trkId: '1513718'
                                }, {
                                    cardId: 448697,
                                    cardTypeId: 6,
                                    header: "Zalando.de Gutschein - 10 EUR",
                                    prizeId: 33350,
                                    image: "https://ucontent.prdg.io/img/prizes/large/image33350.jpg",
                                    price: 1000,
                                    origPrice: 1500,
                                    discountPct: 33,
                                    link: "/p/prize/33350/Zalando-de-Gutschein-10-EUR",
                                    deepDiscount: false,
                                    deepDiscountPct: 12,
                                    pos: 12,
                                    trkId: '448697'
                                }, {
                                    cardId: 448696,
                                    cardTypeId: 6,
                                    header: "Zalando.de Gutschein - 20 EUR",
                                    prizeId: 33351,
                                    image: "https://ucontent.prdg.io/img/prizes/large/image33351.jpg",
                                    price: 2000,
                                    origPrice: 3000,
                                    discountPct: 33,
                                    link: "/p/prize/33351/Zalando-de-Gutschein-20-EUR",
                                    deepDiscount: false,
                                    deepDiscountPct: 12,
                                    pos: 13,
                                    trkId: '448696'
                                }, {
                                    cardId: 1513714,
                                    cardTypeId: 6,
                                    header: "Amazon.it 100 EUR Gift Certificates",
                                    prizeId: 34061,
                                    image: "https://ucontent.prdg.io/img/prizes/large/image34061.jpg",
                                    price: 10000,
                                    origPrice: 13000,
                                    discountPct: 23,
                                    link: "/p/prize/34061/Amazon-it-100-EUR-Gift-Certificates",
                                    deepDiscount: false,
                                    deepDiscountPct: 12,
                                    pos: 14,
                                    trkId: '1513714'
                                }],
                                nextIndex: 15,
                                allUrl: '/rewards-store/onsale',
                                title: 'On Sale Rewards',
                                showViewMore: false,
                                currentSort: 105,
                                rows: 1,
                                popularSort: 105,
                                expectedCardCount: 20
                            }, {
                                streamID: 985000,
                                cards: [{
                                    cardId: 593691,
                                    cardTypeId: 6,
                                    header: "Amazon.com $5 Gift Card",
                                    prizeId: 2988,
                                    image: "https://ucontent.prdg.io/img/prizes/large/image2988.jpg",
                                    price: 500,
                                    origPrice: 500,
                                    discountPct: 0,
                                    link: "/p/prize/2988/Amazon-com-5-Gift-Card",
                                    deepDiscount: false,
                                    deepDiscountPct: 12,
                                    pos: 0,
                                    trkId: '593691'
                                }, {
                                    cardId: 448514,
                                    cardTypeId: 6,
                                    header: "Amazon.com $10 Gift Card",
                                    prizeId: 20196,
                                    image: "https://ucontent.prdg.io/img/prizes/large/image20196.jpg",
                                    price: 1000,
                                    origPrice: 1000,
                                    discountPct: 0,
                                    link: "/p/prize/20196/Amazon-com-10-Gift-Card",
                                    deepDiscount: false,
                                    deepDiscountPct: 12,
                                    pos: 1,
                                    trkId: '448514'
                                }, {
                                    cardId: 593687,
                                    cardTypeId: 6,
                                    header: "Amazon.com $15 Gift Card",
                                    prizeId: 32141,
                                    image: "https://ucontent.prdg.io/img/prizes/large/image32141.jpg",
                                    price: 1500,
                                    origPrice: 1500,
                                    discountPct: 0,
                                    link: "/p/prize/32141/Amazon-com-15-Gift-Card",
                                    deepDiscount: false,
                                    deepDiscountPct: 12,
                                    pos: 2,
                                    trkId: '593687'
                                }, {
                                    cardId: 593690,
                                    cardTypeId: 6,
                                    header: "Amazon.com $50 Gift Card",
                                    prizeId: 18145,
                                    image: "https://ucontent.prdg.io/img/prizes/large/image18145.jpg",
                                    price: 5000,
                                    origPrice: 5000,
                                    discountPct: 0,
                                    link: "/p/prize/18145/Amazon-com-50-Gift-Card",
                                    deepDiscount: false,
                                    deepDiscountPct: 12,
                                    pos: 3,
                                    trkId: '593690'
                                }, {
                                    cardId: 448633,
                                    cardTypeId: 6,
                                    header: "Amazon.fr 5 EUR Gift Certificate",
                                    prizeId: 33464,
                                    image: "https://ucontent.prdg.io/img/prizes/large/image33464.jpg",
                                    price: 500,
                                    origPrice: 750,
                                    discountPct: 33,
                                    link: "/p/prize/33464/Amazon-fr-5-EUR-Gift-Certificate",
                                    deepDiscount: false,
                                    deepDiscountPct: 12,
                                    pos: 4,
                                    trkId: '448633'
                                }, {
                                    cardId: 688589,
                                    cardTypeId: 6,
                                    header: "Amazon.co.uk \u00A35",
                                    prizeId: 21742,
                                    image: "https://ucontent.prdg.io/img/prizes/large/image21742.jpg",
                                    price: 500,
                                    origPrice: 849,
                                    discountPct: 41,
                                    link: "/p/prize/21742/Amazon-co-uk-£5",
                                    deepDiscount: false,
                                    deepDiscountPct: 12,
                                    pos: 5,
                                    trkId: '688589'
                                }, {
                                    cardId: 593689,
                                    cardTypeId: 6,
                                    header: "Amazon.com $100 Gift Card",
                                    prizeId: 20256,
                                    image: "https://ucontent.prdg.io/img/prizes/large/image20256.jpg",
                                    price: 10000,
                                    origPrice: 10000,
                                    discountPct: 0,
                                    link: "/p/prize/20256/Amazon-com-100-Gift-Card",
                                    deepDiscount: false,
                                    deepDiscountPct: 12,
                                    pos: 6,
                                    trkId: '593689'
                                }, {
                                    cardId: 448930,
                                    cardTypeId: 6,
                                    header: "Amazon.de 5 EUR Gutschein",
                                    prizeId: 33097,
                                    image: "https://ucontent.prdg.io/img/prizes/large/image33097.jpg",
                                    price: 500,
                                    origPrice: 750,
                                    discountPct: 33,
                                    link: "/p/prize/33097/Amazon-de-5-EUR-Gutschein",
                                    deepDiscount: false,
                                    deepDiscountPct: 12,
                                    pos: 7,
                                    trkId: '448930'
                                }, {
                                    cardId: 2561180,
                                    cardTypeId: 6,
                                    header: "Amazon.de 1 EUR Gutschein",
                                    prizeId: 34444,
                                    image: "https://ucontent.prdg.io/img/prizes/large/image34444.jpg",
                                    price: 100,
                                    origPrice: 350,
                                    discountPct: 71,
                                    link: "/p/prize/34444/Amazon-de-1-EUR-Gutschein",
                                    deepDiscount: false,
                                    deepDiscountPct: 12,
                                    pos: 8,
                                    trkId: '2561180'
                                }, {
                                    cardId: 2561181,
                                    cardTypeId: 6,
                                    header: "Amazon.fr 1 EUR Gift Certificate",
                                    prizeId: 34443,
                                    image: "https://ucontent.prdg.io/img/prizes/large/image34443.jpg",
                                    price: 100,
                                    origPrice: 350,
                                    discountPct: 71,
                                    link: "/p/prize/34443/Amazon-fr-1-EUR-Gift-Certificate",
                                    deepDiscount: false,
                                    deepDiscountPct: 12,
                                    pos: 9,
                                    trkId: '2561181'
                                }, {
                                    cardId: 688619,
                                    cardTypeId: 6,
                                    header: "Amazon.co.uk \u00A325",
                                    prizeId: 26992,
                                    image: "https://ucontent.prdg.io/img/prizes/large/image26992.jpg",
                                    price: 2500,
                                    origPrice: 4199,
                                    discountPct: 40,
                                    link: "/p/prize/26992/Amazon-co-uk-£25",
                                    deepDiscount: false,
                                    deepDiscountPct: 12,
                                    pos: 10,
                                    trkId: '688619'
                                }, {
                                    cardId: 448929,
                                    cardTypeId: 6,
                                    header: "Amazon.de 10 EUR Gutschein",
                                    prizeId: 33098,
                                    image: "https://ucontent.prdg.io/img/prizes/large/image33098.jpg",
                                    price: 1000,
                                    origPrice: 1500,
                                    discountPct: 33,
                                    link: "/p/prize/33098/Amazon-de-10-EUR-Gutschein",
                                    deepDiscount: false,
                                    deepDiscountPct: 12,
                                    pos: 11,
                                    trkId: '448929'
                                }, {
                                    cardId: 448631,
                                    cardTypeId: 6,
                                    header: "Amazon.fr 20 EUR Gift Certificate",
                                    prizeId: 33466,
                                    image: "https://ucontent.prdg.io/img/prizes/large/image33466.jpg",
                                    price: 2000,
                                    origPrice: 3000,
                                    discountPct: 33,
                                    link: "/p/prize/33466/Amazon-fr-20-EUR-Gift-Certificate",
                                    deepDiscount: false,
                                    deepDiscountPct: 12,
                                    pos: 12,
                                    trkId: '448631'
                                }, {
                                    cardId: 448928,
                                    cardTypeId: 6,
                                    header: "Amazon.de 25 EUR Gutschein",
                                    prizeId: 33099,
                                    image: "https://ucontent.prdg.io/img/prizes/large/image33099.jpg",
                                    price: 2500,
                                    origPrice: 3750,
                                    discountPct: 33,
                                    link: "/p/prize/33099/Amazon-de-25-EUR-Gutschein",
                                    deepDiscount: false,
                                    deepDiscountPct: 12,
                                    pos: 13,
                                    trkId: '448928'
                                }, {
                                    cardId: 1493517,
                                    cardTypeId: 6,
                                    header: "Payoneer $52",
                                    prizeId: 34038,
                                    image: "https://ucontent.prdg.io/img/prizes/large/image34038.jpg",
                                    price: 5200,
                                    origPrice: 5200,
                                    discountPct: 0,
                                    link: "/p/prize/34038/Payoneer-52",
                                    deepDiscount: false,
                                    deepDiscountPct: 12,
                                    pos: 14,
                                    trkId: '1493517'
                                }, {
                                    cardId: 688606,
                                    cardTypeId: 6,
                                    header: "Amazon.co.uk \u00A350",
                                    prizeId: 27259,
                                    image: "https://ucontent.prdg.io/img/prizes/large/image27259.jpg",
                                    price: 5000,
                                    origPrice: 8389,
                                    discountPct: 40,
                                    link: "/p/prize/27259/Amazon-co-uk-£50",
                                    deepDiscount: false,
                                    deepDiscountPct: 12,
                                    pos: 15,
                                    trkId: '688606'
                                }, {
                                    cardId: 1513720,
                                    cardTypeId: 6,
                                    header: "Amazon.it 10 EUR Gift Certificates",
                                    prizeId: 34055,
                                    image: "https://ucontent.prdg.io/img/prizes/large/image34055.jpg",
                                    price: 1000,
                                    origPrice: 1000,
                                    discountPct: 0,
                                    link: "/p/prize/34055/Amazon-it-10-EUR-Gift-Certificates",
                                    deepDiscount: false,
                                    deepDiscountPct: 12,
                                    pos: 16,
                                    trkId: '1513720'
                                }, {
                                    cardId: 2345019,
                                    cardTypeId: 6,
                                    header: "Steam 10 EUR",
                                    prizeId: 34379,
                                    image: "https://ucontent.prdg.io/img/prizes/large/image34379.jpg",
                                    price: 1000,
                                    origPrice: 1000,
                                    discountPct: 0,
                                    link: "/p/prize/34379/Steam-10-EUR",
                                    deepDiscount: false,
                                    deepDiscountPct: 12,
                                    pos: 17,
                                    trkId: '2345019'
                                }, {
                                    cardId: 448630,
                                    cardTypeId: 6,
                                    header: "Amazon.fr 50 EUR Gift Certificate",
                                    prizeId: 33467,
                                    image: "https://ucontent.prdg.io/img/prizes/large/image33467.jpg",
                                    price: 5000,
                                    origPrice: 7500,
                                    discountPct: 33,
                                    link: "/p/prize/33467/Amazon-fr-50-EUR-Gift-Certificate",
                                    deepDiscount: false,
                                    deepDiscountPct: 12,
                                    pos: 18,
                                    trkId: '448630'
                                }, {
                                    cardId: 2217416,
                                    cardTypeId: 6,
                                    header: "Payoneer $252",
                                    prizeId: 34121,
                                    image: "https://ucontent.prdg.io/img/prizes/large/image34121.jpg",
                                    price: 25200,
                                    origPrice: 25200,
                                    discountPct: 0,
                                    link: "/p/prize/34121/Payoneer-252",
                                    deepDiscount: false,
                                    deepDiscountPct: 12,
                                    pos: 19,
                                    trkId: '2217416'
                                }],
                                nextIndex: 20,
                                allUrl: '/rewards-store/popular',
                                title: 'Most Popular Rewards',
                                showViewMore: false,
                                currentSort: 105,
                                rows: 1,
                                popularSort: 105,
                                expectedCardCount: 20
                            }, {
                                streamID: 985002,
                                cards: [],
                                nextIndex: 30,
                                allUrl: '/rewards-store/affordable',
                                title: 'Gift Cards you can Afford Now',
                                showViewMore: false,
                                currentSort: 105,
                                rows: 1,
                                popularSort: 105,
                                expectedCardCount: 20
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
                            sbCards.boolUseHorizontalScroll = true;
                        </script>
                        <link rel="stylesheet" href="//static.prdg.io/dist-non-modules/content/shared/pop-styles.b0a3238bbb62262195cc.css" />
                        <link rel="stylesheet" href="//static.prdg.io/dist-non-modules/content/shared/home-btn-style.71498679dd078e39aa3a.css" />
                        <link rel="stylesheet" href="//static.prdg.io/dist-non-modules/content/components/cardstream/tray-v4.8fa240a2dd676ffa2a35.css" />
                        <link rel="stylesheet" href="//static.prdg.io/dist-non-modules/content/components/cardstream/card-v4.845e4cbbf1630088b4b7.css" />
                        <aside class="sbTray" hidden aria-hidden="true">
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

                                return Math.round((27990725 + cardId) / 60);
                            }
                        </script>
                        <script src="//static.prdg.io/dist-non-modules/content/components/cardstream/main-v4.23d33ca8bcacc1f5b7a6.js"></script>
                        <script src="//static.prdg.io/dist-non-modules/content/components/cardstream/cards-helpers.7552f9fa62f4bb853dce.js"></script>
                        <script>
                            var premiumBannerProps = {
                                ntfCmd: "rw-home",
                            }
                        </script>
                        <script src="//static.prdg.io/dist-non-modules/content/components/cardstream/premium-banner-v4.fc55d066f3a1e0f05d61.js"></script>
                        <script>
                            var featuredCardProps = {
                                ntfCmd: "rw-home",
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
                            sbCards.answerCardV2Applicable = false;
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
                                swagbucksGames: 113,
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
                                junCall = 'https://embed.jungroup.com/embedded_videos/videos_available_jsonp?uid=136484444&pid=17&jsonp=sbCards.junCardRenderer.onJson&sub_id=136484444' + new Date().getTime() + '&ip_address=197.211.59.126&gender=m&dob=1997-04-07',
                                junSBAmount = 2,
                                svnCall = '',
                                svnCardAward = 2,
                                gambitCall = 'http://b.v11media.com/json?k=b3483fdd2acde55024021614496b083b&uid=136484444&types=video&callback=onGambitJson&ip=197.211.59.126&gender=m&dob=1997-04-07',
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
                                    tp_params: '{"tp_age":25,"tp_gender":2,"sid":136484444,"timestamp":1679443506}',
                                    tp_signature: 'b645635371c0e78d5ccb2ee6c964c889a6468a2cd8e2cfab81a732c1c610e8a0'
                                },
                                srCall = '//www.superrewards-offers.com/super/offers?h=iiliyfdthj.502968925784&uid=136484444&ip=197.211.59.126&json=1&mode=video&callback=onSrJson',
                                buzzCall = '//api.ebuzzing.com/partners/1.0/getDeal?site_id=51689&user_id=42901&token=53f057c7a866b9e88e4682ba3aea343f&maxitems=10&format=json&callback=onBuzzJson&sbxmemberid=136484444&age=25&ipaddress=197.211.59.126&gender=m',
                                buzzAgeOk = true,
                                roCall = '//panel.gwallet.com/network-node/impression?appId=f8757dc10efd4568ab13644ff19c2c81&userId=136484444&panelId=12&format=json&callback=onRoJson&pageSize=5&gender=m&age=25',
                                viroolCall = '//api.virool.com/api/v1/offers/14ed4a0d11a3791ea02aa4b07baf5282/all.jsonp?callback=onViroolJson&userId=136484444&gender=male&dob=1997-04-07&d=' + Math.random(),
                                revUverseCall = '//publishers.revenueuniverse.com/sbx_offer.php?uid=136484444&age=25&gender=male&ip=197.211.59.126&callback=onRevUverseJson',
                                spaceJetCall = 'https://closelocate.com/listings?apikey=16f5841272b84cc683d98a3e2f9555d3&callback=onSpaceJetJson&age=25&gender=m&email=tonymax1049@gmail.com&memberid=136484444',
                                discoverBackgroundImg = '//static.prdg.io/dist-non-modules/content/components/cardstream/discover-background.9ec5a8fc05c8bd2446f8.jpg',
                                hidePeanutLabsCard = false,
                                trialPayApiCall = 'https://geo.tp-cdn.com/api/offer/v1/?vic=ffa398becf6f28fb8074ed4bf516e7ae&sid=136484444&num_offers=100&ip=197.211.59.126&ua=Mozilla%2F5.0+%28X11%3B+Linux+x86_64%29+AppleWebKit%2F537.36+%28KHTML%2C+like+Gecko%29+Chrome%2F107.0.0.0+Safari%2F537.36&jsonp=trialPayCards.callback';
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
                        <link rel="stylesheet" href="//static.prdg.io/dist-non-modules/content/projects/rewards/card.24304424d1c451c1af34.css" />
                        <aside id="swagstoreRewardsDistributed">
                            <p id="swagstoreRewardsGiven">
                                <span id="swagstoreRewardsLogo">Swagbucks</span>
                                has given away over &hellip;
                            </p>
                            <link rel="stylesheet" href="//static.prdg.io/dist-non-modules/content/home-6/css/include-rewards-flipcounter.fe8dc1edd9c96230324f.css" />
                            <div id="flipCounterWrapper">
                                &#36;
                                <div id="flipCounter">
                                    <span class="flipCounterFrame">
                                        <span class="flipCounterDigit">8</span>
                                    </span>
                                    <span class="flipCounterFrame">
                                        <span class="flipCounterDigit">5</span>
                                    </span>
                                    <span class="flipCounterFrame">
                                        <span class="flipCounterDigit">8</span>
                                    </span>
                                    ,
                                    <span class="flipCounterFrame">
                                        <span class="flipCounterDigit">5</span>
                                    </span>
                                    <span class="flipCounterFrame">
                                        <span class="flipCounterDigit">1</span>
                                    </span>
                                    <span class="flipCounterFrame">
                                        <span class="flipCounterDigit">9</span>
                                    </span>
                                    ,
                                    <span class="flipCounterFrame">
                                        <span class="flipCounterDigit">0</span>
                                    </span>
                                    <span class="flipCounterFrame">
                                        <span class="flipCounterDigit">3</span>
                                    </span>
                                    <span class="flipCounterFrame">
                                        <span class="flipCounterDigit">3</span>
                                    </span>
                                </div>
                            </div>
                            <p id="swagstoreRewardsWallet">
                                Put <span id="swagstoreRewardsHighlight">cash back</span>
                                in your wallet!
                            </p>
                        </aside>
                        <script>
                            var oldCount = 858512875 + 0;
                            var newCount = 858519033 + 0;
                        </script>
                    </main>
                    <script src="//static.prdg.io/dist-non-modules/content/components/cardstream/single-stream.b194b69804acb10fe9c0.js"></script>
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