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
<html id="html" class="isResponsive isNotExternal isTourNotShown isTourNotActive isSliderNotShown isNotHome isLoggedIn ot">

<head>
    <meta charset="utf-8">
    <title>My Settings - My Account | Easymedia</title>
    <meta name="keywords" content="">
    <meta name="description" content="Earn rewards and free stuff by searching and shopping online, answering surveys, and more at Easymedia.com, a customer loyalty rewards program. Be rewarded today.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:url" content="https://www.Easymedia.com/account/settings">
    <meta property="og:description" content="Earn rewards and free stuff by searching and shopping online, answering surveys, and more at Easymedia.com, a customer loyalty rewards program. Be rewarded today.">
    <meta property="og:title" content="My Settings - My Account | Easymedia">
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
    <link rel="canonical" href="https://www.Easymedia.com/account/settings">
    <meta name="format-detection" content="telephone=no">
</head>

<body class="loggedIn">
    <section id="persistentBannerWrapper" hidden></section>
    <link rel="stylesheet" href="//static.prdg.io/dist-non-modules/persistent-banner.524a2fa5e0f69c81ab45.css" />
    <script src="//static.prdg.io/dist-non-modules/persistent-banner.31424dec890af72153cd.js" defer="defer"></script>
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
            application: 'Easymedia-prod',
        });
    </script>
    <script id="sbHeadData" type="application/json">
        {
            "topNavMenuApplicable": false,
            "token": {
                "__mBfuPAgT": "5b4598daa6301138576d29e2dd33befcd574ee1faf12052b8e2a395b77541dcd"
            },
            "sbGlbMember": 136484444,
            "emailOnly": false,
            "currentSbAmount": 49,
            "homepage": false,
            "dailyGoalApplicable": true,
            "activityFeedApplicable": false,
            "isEasymediaPlusApplicable": false,
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
                "EasySTAKES_MEDIUM": "img\/Easystakes\/medium",
                "POLLS_MAIN": "img\/polls\/m",
                "SHOP_MERCHANT_SMALL": "img\/shop\/ms",
                "IN_STORE_CATEGORY_LOGOS_SVG": "img\/instore\/category",
                "SHOP_MERCHANT_GROUP_BACKGROUND_LARGE": "img\/shop\/mgbi",
                "IN_STORE_RECEIPT_CHALLENGE": "img\/instore\/irc",
                "SHOP_MERCHANT_GROUP_SMALL": "img\/shop\/mgs",
                "EasySTAKES_SMALL": "img\/Easystakes\/small",
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
                "EasySTAKES_MEDIUM": "",
                "POLLS_MAIN": "",
                "SHOP_MERCHANT_SMALL": "ms",
                "IN_STORE_CATEGORY_LOGOS_SVG": "",
                "SHOP_MERCHANT_GROUP_BACKGROUND_LARGE": "mgbi",
                "IN_STORE_RECEIPT_CHALLENGE": "",
                "SHOP_MERCHANT_GROUP_SMALL": "mgs",
                "EasySTAKES_SMALL": "",
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
                "EasySTAKES_MEDIUM": "",
                "POLLS_MAIN": "",
                "SHOP_MERCHANT_SMALL": ".jpg",
                "IN_STORE_CATEGORY_LOGOS_SVG": "",
                "SHOP_MERCHANT_GROUP_BACKGROUND_LARGE": ".jpg",
                "IN_STORE_RECEIPT_CHALLENGE": "",
                "SHOP_MERCHANT_GROUP_SMALL": ".jpg",
                "EasySTAKES_SMALL": "",
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
            "PROFILE_UPLOADER_HOST": "//upload.profileimages.Easymedia.com",
            "EMAIL_INVITES_AMOUNT": 10
        }
    </script>
    <script src="//static.prdg.io/dist-non-modules/content/shared/sbglobals.75e9c5e76a91dfe5e99f.js"></script>
    <link rel="search" href="//static.prdg.io/dist-non-modules/content/open-search/open-search-chrome.cbb6a7acf953589cb993.xml" type="application/opensearchdescription+xml" title="Easymedia search and get rewarded">
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
                intPageId: 499,
                userBrowserType: {
                    browserName: 'chrome',
                    browserVersion: '110'
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
                        facebook: 'www.facebook.com/Easymedia',
                        blog: '/blog',
                        pinterest: 'www.pinterest.com/Easymedia/',
                        youtube: 'www.youtube.com/user/Easymedia',
                        twitter: 'www.twitter.com/Easymedia',
                        instagram: 'www.instagram.com/Easymediaofficial/',
                        helpCenter: 'help.Easymedia.com/hc/en-us',
                        helpCenterNewTicket: 'https://help.Easymedia.com/hc/requests/new',
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
                sbGlbl.tourVisible = false;
            </script>
            <div id="middle" class="contOuter">
                <div id="middleInner" class="cRgt middleInnerAccount">
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
                                            <a href="#" class="sbMainNavSectionListCta">Search</a>
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
                                                            <a href="#" class="sbMainNavSectionListCta">Activity</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="sbMainNavSectionListCta">Easy Ups</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="sbMainNavSectionListCta">Collector &#39;s Bills</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="sbMainNavSectionListCta">Gift Cards
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="sbMainNavSectionListCta">Order Status
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="sbMainNavSectionListCta">Referrals</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="sbMainNavSectionListCta">Easystakes Entries</a>
                                                        </li>
                                                        <li>
                                                            <a href="/account/settings" class="sbMainNavSectionListCta selected">Settings</a>
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
                                                            <a href="/extension" class="sbMainNavSectionListCta">EasyButton</a>
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
                                                            <a class="sbMainNavSectionListCta notranslate" href="#" target="_blank" rel="noopener nofollow">Facebook</a>
                                                        </li>
                                                        <li id="sbMainNavSectionListItemInstagram" class="sbMainNavSectionListItem">
                                                            <a class="sbMainNavSectionListCta notranslate" href="#" target="_blank" rel="noopener nofollow">Instagram</a>
                                                        </li>
                                                        <li id="sbMainNavSectionListItemPinterest" class="sbMainNavSectionListItem">
                                                            <a class="sbMainNavSectionListCta notranslate" href="#" target="_blank" rel="noopener nofollow">Pinterest</a>
                                                        </li>
                                                        <li id="sbMainNavSectionListItemTwitter" class="sbMainNavSectionListItem">
                                                            <a class="sbMainNavSectionListCta notranslate" href="#" target="_blank" rel="noopener nofollow">Twitter</a>
                                                        </li>
                                                        <li id="sbMainNavSectionListItemYouTube" class="sbMainNavSectionListItem">
                                                            <a class="sbMainNavSectionListCta notranslate" href="#" target="_blank" rel="noopener nofollow">YouTube</a>
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
                            <link rel="stylesheet" href="//static.prdg.io/dist-non-modules/content/shared/reset-security-question.2a6a75701f40f5a61e37.css" />
                            <div class="acctNotifyMsgPopup" id="seqUpdatedPopup">
                                Your security question has been successfully updated. <span onclick="sbGlbl.resetPsswd.hideSuccessMessage()"></span>
                            </div>
                            <div class="acctNotifyMsgPopup" id="emailSentPopup">
                                Here we go! A fresh email is on its way with a new link for you. <span onclick="sbGlbl.resetPsswd.hideSuccessMessage()"></span>
                            </div>
                            <link rel="stylesheet" href="//static.prdg.io/dist-non-modules/content/projects/account/settings.1b1beb95ce7145a87ae1.css" />
                            <script id="passwordInfo" type="application/json">
                                {
                                    "minLength": 6,
                                    "maxLength": 32
                                }
                            </script>
                            <div>
                                <header id="sbMainHeader">
                                    <h1 id="sbMainHeading">Settings</h1>
                                    <nav id="sbMainTabsNav">
                                        <a href="/account/settings" class="active sbMainTabsNavCta sbCta">Account Details
                                        </a>
                                        <a href="/account/settings/notifications" class="sbMainTabsNavCta sbCta">Preferences
                                        </a>
                                    </nav>
                                </header>
                                <section class="sbMainTab">
                                    <form id="profileForm">
                                        <input type="hidden" id="isSSOUser" value="true">
                                        <input type="hidden" name="hsh">
                                        <section id="infoForm" class="acctForm">
                                            <div class="formHead">
                                                <h2 class="information">Account Information</h2>
                                                <button id="emailEditLnk" class="sbCta highlight1">Edit Email</button>
                                                <button id="emailSubmitBtn" class="sbCta highlight1" hidden>Save Email</button>
                                                <button id="infoFormEditLnk" class="sbCta highlight1">Edit Profile</button>
                                                <button id="infoFormSubmitBtn" class="sbCta highlight1" hidden>Save Profile</button>
                                            </div>
                                            <section class="accountInformationWrap">
                                                <ul class="accountInformation">
                                                    <li class="accountInformationFieldWrap">
                                                        <label class="accountInformationFieldName" for="fullName">Full Name</label>
                                                        <input name="fullName" id="fullName" class="accountInformationInput" value="<?php echo $row->fullname;?>" disabled="disabled" maxlength="50" autocomplete="name">
                                                    </li>
                                                    <li class="accountInformationFieldWrap">
                                                        <label class="accountInformationFieldName" for="email">Email</label>
                                                        <input type="email" name="email" id="email" class="accountInformationInput" value="<?php echo $row->email;?>" disabled="disabled" maxlength="70" autocomplete="email">
                                                    </li>
                                                    <li class="accountInformationFieldWrap sso">
                                                        <label class="accountInformationFieldName" for="password">Password</label>
                                                        <input type="password" name="password" id="password" class="accountInformationInput" value="000000000000" disabled="disabled" maxlength="32" autocomplete="current-password">
                                                    </li>
                                                    <li class="accountInformationFieldWrap sso">
                                                        <label class="accountInformationFieldName" id="cpasswordFieldName" for="cpassword">Confirm Password</label>
                                                        <input type="password" name="cpassword" id="cpassword" class="accountInformationInput" value="000000000000" disabled="disabled" maxlength="32" autocomplete="current-password">
                                                    </li>
                                                    <li class="accountInformationFieldWrap">
                                                        <label class="accountInformationFieldName" for="settingsLanguageSelect">Language Preference:</label>
                                                        <select name="language" id="settingsLanguageSelect" class="accountInformationInput" disabled>
                                                            <option value="1" data-lang-code="en" selected>English</option>
                                                            <option value="2" data-lang-code="de">Deutsch</option>
                                                            <option value="4" data-lang-code="fr">Français (France)</option>
                                                            <option value="8" data-lang-code="es">Español (España)</option>
                                                            <option value="16" data-lang-code="pt">Português (Portugal)</option>
                                                            <option value="32" data-lang-code="it">Italiano</option>
                                                            <option value="64" data-lang-code="ru">русский</option>
                                                            <option value="128" data-lang-code="fr">Français (Canada)</option>
                                                            <option value="256" data-lang-code="zh">中文</option>
                                                            <option value="512" data-lang-code="ar">العربية</option>
                                                            <option value="1024" data-lang-code="pl">Język polski</option>
                                                            <option value="2048" data-lang-code="tr">Türkçe</option>
                                                            <option value="4096" data-lang-code="da">dansk</option>
                                                            <option value="8192" data-lang-code="el">Ελληνικά</option>
                                                            <option value="16384" data-lang-code="nl">Nederlands</option>
                                                            <option value="32768" data-lang-code="no">norsk</option>
                                                            <option value="65536" data-lang-code="sv">svenska</option>
                                                            <option value="131072" data-lang-code="ja">日本語</option>
                                                            <option value="262144" data-lang-code="ko">한국어</option>
                                                            <option value="524288" data-lang-code="pt">Português (Brasil)</option>
                                                            <option value="1048576" data-lang-code="es">Español (México)</option>
                                                        </select>
                                                    </li>
                                                    <li class="resetSecurityQuestionWrap">
                                                        <button type="button" id="resetSecurityQuestionCta" class="sbCta fromLineButton resetSqEmail">
                                                            <span id="sendEmailLink">Reset Security Question</span>
                                                        </button>
                                                    </li>
                                                </ul>
                                                <section id="photoBlock">
                                                    <div id="photoFrame">
                                                        <iframe id="profileFrame" src="/?cmd=sb-profile-img-v2" scrolling="no" frameborder="0" width="100" height="100" allowtransparency="yes"></iframe>
                                                    </div>
                                                    <div id="photoProfileInfo">
                                                        <span class="swagNameTitle">Easy Name</span>
                                                        <input id="swagNameIpt" value="<?php echo $row->easyname?>" disabled="disabled">
                                                    </div>
                                                </section>
                                            </section>
                                            <script src="//static.prdg.io/dist-non-modules/content/shared/reset-security-question.ad69926fe1ab59dac5c5.js"></script>
                                        </section>
                                        <section id="linkedAccountSection">
                                            <script id="sbPaypalVerifyData" type="application/json">
                                                {
                                                    "appid": "AaxBY0QjkKXcb4PxjEx8S_KCYDC5H8LWzZ6ITlsv9nXTK_7DR3yNMxDyGZbH4YJaSk7z-1U_Z0ruIsIG",
                                                    "authend": "live",
                                                    "locale": "en-us",
                                                    "returnurl": "https:\/\/www.Easymedia.com\/?cmd=pp-paypal-connect",
                                                    "paypalConnectStatus": false,
                                                    "prizeId": null
                                                }
                                            </script>
                                            <h2 class="linkedAccountSectionTitle">Linked Accounts
                                            </h2>
                                            <div id="paypalLinkedAccount" class="linkedAccountSectionContent"></div>
                                        </section>
                                        <section id="addressForm" class="acctForm">
                                            <div class="formHead">
                                                <h2 class="information">Address</h2>
                                                <button id="addressFormEditLnk" class="sbCta highlight1">Edit</button>
                                                <button id="addressFormSubmitBtn" class="sbCta highlight1" hidden>Save</button>
                                            </div>
                                            <ul class="accountInformation">
                                                <li class="accountInformationFieldWrap">
                                                    <label class="accountInformationFieldName" for="address1">Address</label>
                                                    <input name="address1" id="address1" class="accountInformationInput" value="<?php echo $row->address?>" disabled="disabled" maxlength="50" autocomplete="address-line1">
                                                </li>
                                                <li class="accountInformationFieldWrap">
                                                    <label class="accountInformationFieldName" for="address2"></label>
                                                    <input name="address2" id="address2" class="accountInformationInput" value="<?php echo $row->address?>" disabled="disabled" maxlength="50" autocomplete="address-line2">
                                                </li>
                                                <li class="accountInformationFieldWrap">
                                                    <label class="accountInformationFieldName" for="city">City</label>
                                                    <input name="city" id="city" class="accountInformationInput" value="<?php echo $row->city?>" disabled="disabled" maxlength="50" autocomplete="address-level2">
                                                </li>
                                                <li class="accountInformationFieldWrap">
                                                    <label class="accountInformationFieldName" for="country">Country</label>
                                                    <input type="hidden" name="country" id="country" class="accountInformationInput" value="102" disabled="disabled">
                                                    <input name="countryText" id="countryText" class="accountInformationInput" value="<?php echo $row->country?>" disabled="disabled" readonly>
                                                </li>
                                                <li class="accountInformationFieldWrap">
                                                    <label class="accountInformationFieldName" for="state">State</label>
                                                    <select name="state" id="state" class="accountInformationInput" disabled="disabled">
                                                        <option id="drpSelected" value="<?php echo $row->state?>"></option>
                                                    </select>
                                                </li>
                                                <li class="accountInformationFieldWrap">
                                                    <label class="accountInformationFieldName" for="zipcode">Postal Code</label>
                                                    <input name="zipCode" id="zipcode" class="accountInformationInput" value="<?php echo $row->postal?>" disabled="disabled" maxlength="10" autocomplete="postal-code">
                                                </li>
                                            </ul>
                                        </section>
                                    </form>
                                    <link rel="stylesheet" href="//static.prdg.io/dist-non-modules/account-settings.9e716739dec5c4653841.css" />
                                    <section id="supportSection"></section>
                                    <script>
                                        $(function() {
                                            if (typeof $alertInvalidEmailPop != 'undefined' && $alertInvalidEmailPop.length) {
                                                if (alertInvalidEmailPopShown)
                                                    $('#fadeCover').hide();
                                                showInvalidEmailPop();
                                                $('#infoForm, #addressForm').hide();
                                                $('#profileForm').append($alertInvalidEmailPop);
                                            }
                                        });
                                    </script>
                                    <script>
                                        if (typeof _gaq == 'undefined') {
                                            _gaq = [];
                                        }
                                        var refreshedOnce = false;
                                        var profileFrame = document.getElementById('profileFrame');
                                        var profileLoading = document.getElementById('profileLoadingBkd');

                                        function profileUploading() {
                                            refreshedOnce = false;
                                        }

                                        function profileRefreshed() {
                                            if (refreshedOnce) {
                                                setTimeout(function() {
                                                    profileFrame.src = '/?cmd=sb-profile-img-v2';
                                                }, 8000);
                                                return false;
                                            } else {
                                                refreshedOnce = true;
                                                return true;
                                            }
                                        }

                                        function profileImageUpload(retCode) {
                                            profileFrame.src = '/?cmd=sb-profile-img-v2&retCode=' + retCode;
                                        }

                                        hsh = '9d1a87b1942a107db105717713ae5769';
                                        stateValues = "AU,FR,IE,A Coruña,AL,AK,Álava,Albacete,AB,Alicante,Almería,Andaman and Nicobar ,Andhra Pradesh,AZ,AR,Arunachal Pradesh,Assam,Asturias,Ávila,Badajoz,BW,Balearic Islands,Barcelona,BY,BE,Bihar,Biscay,BB,HB,BC,Burgos,Cáceres,Cádiz,CA,Cantabria,Carlow,Castellón,Cavan,Ceuta,Chandigarh,Chhattisgarh,Ciudad Real,Clare,CO,CT,Córdoba,Cork,Cuenca,Dadra and Nagar Have,Daman and Diu,DE,Delhi,DC,Donegal,Dublin,ENG,FL,Galway,GA,Gipuzkoa,Girona,Goa,Granada,Guadalajara,Gujarat,HH,Haryana,HI,HE,Himachal Pradesh,Huelva,Huesca,ID,IL,IN,IA,Jaén,Jammu and Kashmir,Jharkhand,KS,Karnataka,KY,Kerala,Kerry,Kildare,Kilkenny,La Rioja,Lakshadweep,Laois,Las Palmas,Leitrim,León,Limerick,Lleida,Longford,LA,Louth,Lugo,Madhya Pradesh,Madrid,Maharashtra,ME,Málaga,Manipur,MB,MD,MA,Mayo,Meath,MV,Meghalaya,Melilla,MI,MN,MS,MO,Mizoram,Monaghan,MT,Murcia,Nagaland,Navarre,NE,NV,NB,NH,NJ,NM,NY,NL,NI,NW,NC,ND,IRL,NT,NS,NU,Offaly ,OH,OK,ON,OR,Orissa (Odisha),Ourense,Palencia,PA,Pondicherry,Pontevedra,PE,Punjab,QC,Rajasthan,RP,RI,Roscommon,SL,SN,ST,Salamanca,Santa Cruz de Tenerf,SK,SH,SCT,Segovia,Seville,Sikkim,Sligo,Soria,SC,SD,Tamil Nadu,Tarragona,Telangana,TN,Teruel,TX,TH,Tipperary North,Tipperary South,Toledo,Tripura,UT,Uttar Pradesh,Uttaranchal (Uttarak,Valencia,Valladolid,VT,VA,WLS,WA,Waterford,West Bengal,WV,Westmeath,Wexford,Wicklow,WI,WY,YT,Zamora,Zaragoza,Alsace,Aquitaine,Auvergne,Basse-Normandie,Bourgogne,Bretagne,Centre,Champagne-Ardenne,Corse,Franche-Comté,Haute-Normandie,Île-de-France,Languedoc-Roussillon,Limousin,Lorraine,Midi-Pyrénées,Nord-Pas-de-Calais,Pays de la Loire,Picardie,Poitou-Charentes,Rhône-Alpes,AS,GU,MP,PR,VI".split(",");
                                        stateIds = "4,8,5,9,1,1,9,9,2,9,9,6,6,1,1,6,6,9,9,9,7,9,9,7,7,6,9,7,7,2,9,9,9,1,9,5,9,5,9,6,6,9,5,1,1,9,5,9,6,6,1,6,1,5,5,3,1,5,1,9,9,6,9,9,6,7,6,1,7,6,9,9,1,1,1,1,9,6,6,1,6,1,6,5,5,5,9,6,5,9,5,9,5,9,5,1,5,9,6,9,6,1,9,6,2,1,1,5,5,7,6,9,1,1,1,1,6,5,1,9,6,9,1,1,2,1,1,1,1,2,7,7,1,1,3,2,2,2,5,1,1,2,1,6,9,9,1,6,9,2,6,2,6,7,1,5,7,7,7,9,9,2,7,3,9,9,6,5,9,1,1,6,9,6,1,9,1,7,5,5,9,6,1,6,6,9,9,1,1,3,1,5,6,1,5,5,5,1,1,2,9,9,8,8,8,8,8,8,8,8,8,8,8,8,8,8,8,8,8,8,8,8,8,1,1,1,1,1".split(",");
                                        stateNames = ",,,A Coruña,Alabama,Alaska,Álava,Albacete,Alberta,Alicante,Almería,Andaman and Nicobar Islands,Andhra Pradesh,Arizona,Arkansas,Arunachal Pradesh,Assam,Asturias,Ávila,Badajoz,Baden-Württemberg,Balearic Islands,Barcelona,Bayern,Berlin,Bihar,Biscay,Brandenburg,Bremen,British Columbia,Burgos,Cáceres,Cádiz,California,Cantabria,Carlow,Castellón,Cavan,Ceuta,Chandigarh,Chhattisgarh,Ciudad Real,Clare,Colorado,Connecticut,Córdoba,Cork,Cuenca,Dadra and Nagar Haveli,Daman and Diu,Delaware,Delhi,District of Columbia,Donegal,Dublin,England,Florida,Galway,Georgia,Gipuzkoa,Girona,Goa,Granada,Guadalajara,Gujarat,Hamburg,Haryana,Hawaii,Hessen,Himachal Pradesh,Huelva,Huesca,Idaho,Illinois,Indiana,Iowa,Jaén,Jammu and Kashmir,Jharkhand,Kansas,Karnataka,Kentucky,Kerala,Kerry,Kildare,Kilkenny,La Rioja,Lakshadweep,Laois,Las Palmas,Leitrim,León,Limerick,Lleida,Longford,Louisiana,Louth,Lugo,Madhya Pradesh,Madrid,Maharashtra,Maine,Málaga,Manipur,Manitoba,Maryland,Massachusetts,Mayo,Meath,Mecklenburg-Vorpommern,Meghalaya,Melilla,Michigan,Minnesota,Mississippi,Missouri,Mizoram,Monaghan,Montana,Murcia,Nagaland,Navarre,Nebraska,Nevada,New Brunswick,New Hampshire,New Jersey,New Mexico,New York,Newfoundland / Labrador,Niedersachsen,Nordrhein-Westfalen,North Carolina,North Dakota,Northern Ireland,Northwest Territories,Nova Scotia,Nunavut,Offaly ,Ohio,Oklahoma,Ontario,Oregon,Orissa (Odisha),Ourense,Palencia,Pennsylvania,Pondicherry,Pontevedra,Prince Edward Island,Punjab,Quebec,Rajasthan,Rheinland-Pfalz,Rhode Island,Roscommon,Saarland,Sachsen,Sachsen-Anhalt,Salamanca,Santa Cruz de Tenerife,Saskatchewan,Schleswig-Holstein,Scotland,Segovia,Seville,Sikkim,Sligo,Soria,South Carolina,South Dakota,Tamil Nadu,Tarragona,Telangana,Tennessee,Teruel,Texas,Thüringen,Tipperary North,Tipperary South,Toledo,Tripura,Utah,Uttar Pradesh,Uttaranchal (Uttarakhand),Valencia,Valladolid,Vermont,Virginia,Wales ,Washington,Waterford,West Bengal,West Virginia,Westmeath,Wexford,Wicklow,Wisconsin,Wyoming,Yukon,Zamora,Zaragoza,Alsace,Aquitaine,Auvergne,Basse-Normandie,Bourgogne,Bretagne,Centre,Champagne-Ardenne,Corse,Franche-Comté,Haute-Normandie,Île-de-France,Languedoc-Roussillon,Limousin,Lorraine,Midi-Pyrénées,Nord-Pas-de-Calais,Pays de la Loire,Picardie,Poitou-Charentes,Rhône-Alpes,American Samoa,Guam,Northern Mariana Islands,Puerto Rico,Virgin Islands".split(",");
                                    </script>
                                    <script>
                                        acctCancelCur = "none";
                                        acctCancelOther = "block";

                                        var $pop = $('#verfTypeDialog');
                                        var infoErrs = new Array("fullName|Please enter a Full Name", "fullName|Please correct the Full Name (it should be alphanumeric)", "email|Please correct the Email", "email|Please correct the Email (invalid domain)", "email|Please choose another Email (this one's taken)", "password|Please correct the Password (its length should be 6-32 characters)", "password|Please correct the Password (it should not contain your name or email)", "cpassword|Please correct the Confirm Password (it must match Password)", "|Please enter an Address", "|Please enter a City", "|Please select a Country", "|Please select a State", "|Please correct the @codename@", "|Please correct the @codename@ (it's invalid for the selected State)", "|Please enter a @codename@", "password|Please correct the Password (weak password - not allowed)", "password|Please correct the Password (unknown validation error occurred)", "Easyname|Please enter a Easy Name", "Easyname|Please correct the Easy Name (it should consist of 4-16 alphanumeric characters with at least one letter)", "Easyname|The Easy Name you've entered is already in use or is invalid. Please retry.", "Easyname|Sorry, you already have a Easy Name, please refresh the page");
                                        var zipOptional = !true;
                                        sbPage.currentLanguage = 1;
                                        sbPage.strTokenName = "__mBfuPAgT";
                                        sbPage.strTokenValue = "5b4598daa6301138576d29e2dd33befcd574ee1faf12052b8e2a395b77541dcd";
                                    </script>
                                </section>
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
                                <script src="//static.prdg.io/dist-non-modules/content/projects/account/settings.9c82b1af584fa327cc5b.js"></script>
                                <script src="//static.prdg.io/dist-non-modules/vendor.402045020487a4edd587.js" defer="defer"></script>
                                <script src="//static.prdg.io/dist-non-modules/account-settings.faf7b53c17b26a07407c.js" defer="defer"></script>
                            </div>
                            <script src="//static.prdg.io/dist-non-modules/content/shared/reset-security-question.ad69926fe1ab59dac5c5.js"></script>
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
            <?php include_once('../footer.php') ?>
            <script src="//static.prdg.io/dist-non-modules/content/shared/jquery.isonscreen.7b851814bd6af500d8f9.js"></script>
            <script src="//static.prdg.io/dist-non-modules/content/components/footer/footer.b6e45277a533caadfd71.js"></script>
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