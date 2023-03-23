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
    <title>Surveys | EasyMediaWealth</title>
    <meta name="keywords" content="">
    <meta name="description" content="Earn More Swag Bucks with Surveys">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:url" content="https://www.swagbucks.com/surveys">
    <meta property="og:description" content="Earn More Swag Bucks with Surveys">
    <meta property="og:title" content="Surveys | EasyMediaWealth">
    <link rel="icon" type="image/svg+xml" href="/favicon.svg">
    <link rel="icon" type="image/png" href="../static.prdg.io/dist-non-modules/images/favicon-16x16.c851c657ffaf20dfaf15.png" sizes="16x16">
    <link rel="icon" type="image/png" href="../static.prdg.io/dist-non-modules/images/favicon-32x32.62bd6461aac547ff4000.png" sizes="32x32">
    <link rel="icon" type="image/png" href="../static.prdg.io/dist-non-modules/images/favicon-96x96.6e441ed57709dfb43629.png" sizes="96x96">
    <link rel="icon" type="image/png" href="../static.prdg.io/dist-non-modules/images/android-chrome-192x192.a8de0a0f140635c65747.png" sizes="192x192">
    <link rel="alternate icon" type="image/png" href="/favicon.png">
    <link rel="apple-touch-icon" href="//static.prdg.io/dist-non-modules/images/apple-touch-icon-120x120.f6f0effa6837166ce1d9.png">
    <link rel="apple-touch-icon" sizes="180x180" href="//static.prdg.io/dist-non-modules/images/apple-touch-icon-180x180.48d1616875d9e641fc7a.png">
    <link rel="apple-touch-icon" sizes="167x167" href="//static.prdg.io/dist-non-modules/images/apple-touch-icon-167x167.f0fca7d85bd8abbfbaa8.png">
    <link rel="apple-touch-icon" sizes="152x152" href="//static.prdg.io/dist-non-modules/images/apple-touch-icon-152x152.144c1bf7000db8f9835c.png">
    <link rel="canonical" href="surveys">
    <meta name="format-detection" content="telephone=no">
</head>

<body class="loggedIn">
    <link rel="stylesheet" href="//static.prdg.io/dist-non-modules/content/components/font/font.0e7d3d116854f6603774.css" />
    <script src="https://cdn.cookielaw.org/consent/e3b98144-e9b8-4fab-9a3a-3a12894bed0b/OtAutoBlock.js"></script>
    <script src="https://cdn.cookielaw.org/scripttemplates/otSDKStub.js" charset="UTF-8" data-domain-script="e3b98144-e9b8-4fab-9a3a-3a12894bed0b"></script>
    <script>
        function OptanonWrapper() {}
    </script>
    <script>
        var CDN_STATIC_CONTENT = '//static.prdg.io';
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
            'sblsid': 7,
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
   
    <link rel="stylesheet" href="//static.prdg.io/dist-non-modules/content/shared/css/generic-v3.3c46b8c2d2a888150ba9.css" />
    <link rel="stylesheet" href="//static.prdg.io/dist-non-modules/content/components/header/top-bar/top-bar.4fcdfd73efb3980d918f.css" />
    <script>
        (function() {
            'use strict';

            var global = {
                gAppContent: window.CDN_STATIC_CONTENT,
                intPageId: 101100,
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
        <?php 
        include('header.php');
        
        ?>
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
                    <script>
                        var trkid = '';
                    </script>
                    <script src="//static.prdg.io/dist-non-modules/content/components/banner/banner-v2.3377fbfdf01106a390d6.js" data-css-src="//static.prdg.io/dist-non-modules/content/components/banner/banner-v2.4e1f9e366219e5cfbded.css"></script>
                    <script>
                        banner.config({
                            color: 'red',
                            timer: 5,
                            removeOthers: true
                        });
                    </script>
                    <link rel="stylesheet" href="//static.prdg.io/dist-non-modules/content/shared/sbTooltip.5c370062260d964ee03e.css" />
                    <link rel="stylesheet" href="//static.prdg.io/dist-non-modules/content/shared/shared-layout-v2.2c3a4fdc810030ef82c5.css" />
                    <link rel="stylesheet" href="//static.prdg.io/dist-non-modules/content/projects/surveys/survey-dash-begin/survey-dashboard-v4.4a60b4d2d2e45b450012.css" />
                    <div class="dashboardWrap">
                        <div class="dashboardLeftRail">
                            <link rel="stylesheet" href="//static.prdg.io/dist-non-modules/content/shared/shared-layout-v2.2c3a4fdc810030ef82c5.css" />
                            <link rel="stylesheet" href="//static.prdg.io/dist-non-modules/content/shared/navbar.eef607845fa8c2c7cfe6.css" />
                            <link rel="stylesheet" href="//static.prdg.io/dist-non-modules/content/shared/responsive-v2.edb119b748b069701e21.css" />
                            <aside id="mainNavCont">
                            <?php include('nav.php')?>
                            </aside>
                        </div>
                        <!--
 -->
                        <div class="dashboardMainContent">
                            <link rel="stylesheet" href="//static.prdg.io/dist-non-modules/content/projects/surveys/daily-poll-cta.a6a4d05cc71dc9e3c40c.css" />
                            <aside id="dailyPollWrap">
                                <a href="/polls">
                                    <div id="dailyPoolHeader" class="pageHeader">Daily Poll</div>
                                    <div id="dailyPollNav">
                                        <span class="dailyPollNavIcon inlineBlock valignMiddle"></span>
                                        <!--
                         -->
                                        <span class="dailyPollNavText inlineBlock valignMiddle">See today's poll results</span>
                                    </div>
                                </a>
                            </aside>
                            <div class="pageHeader">
                                <span>Answer Surveys</span>
                            </div>
                            <script>
                                var stepMap = {
                                    Welcome: 580,
                                    How_to_earn: 590,
                                    Redeem_your_SB: 600,
                                    SB_per_dollar: 610,
                                    Keep_in_mind: 620,
                                    Gender_and_age: 630,
                                    Dob: 640,
                                    Age_and_dob: 650,
                                    Movies: 330,
                                    Disqualification: 340,
                                    Last_thanks: 660
                                };
                                var pollfishApiKey = "f670a2b2-d006-4b11-95a6-82a56f2f2678";
                            </script>
                            <script>
                                memberSurveyIDs = [];
                                var onSBExtensionPresentHomepageGoldDash = function() {
                                    var msgData = {
                                        sbPageMsgType: "GoldSurveyIDs",
                                        sbPageMsgBody: JSON.stringify(memberSurveyIDs)
                                    };
                                    if (sbGlbl.userBrowserType.browserName === 'firefox') {
                                        function postMsgToFF(data) {
                                            var request = document.createTextNode(JSON.stringify(data));
                                            document.head.appendChild(request);
                                            var event = document.createEvent("Events");
                                            event.initEvent("MessageEvent", true, false, data, window.location, 0, window, null);
                                            request.dispatchEvent(event);
                                        }
                                        postMsgToFF(msgData);
                                    } else {
                                        window.postMessage(msgData, "*");
                                    }
                                }
                                sbGlbl.onSBExtensionPresent.push(onSBExtensionPresentHomepageGoldDash);
                            </script>
                            <link rel="stylesheet" href="//static.prdg.io/dist-non-modules/content/global-includes/css/sbPop.4a37cd58fd4d8f8c36f9.css" />
                            <link rel="stylesheet" href="//static.prdg.io/dist-non-modules/content/global-includes/css/buttons.6205a026d2d155eb20ee.css" />
                            <link rel="stylesheet" href="//static.prdg.io/dist-non-modules/content/swagbucks-com/css/address-prompt-pop-v2.70b04cde68196001b6c6.css" />
                            <div id="addressPromptPop">
                                <div id="addressFormContainer" class="sbPopContainer">
                                    <div id="addressFormContent" class="sbPopContent">
                                        <div id="formHeader">
                                            <div id="formTitle">Address Validation
                                            </div>
                                            <div class="formSubTitle">
                                                In order to participate in certain surveys, we need to verify where you live.
                                                If you have any questions about this request, please contact <a href="/g/contact" target="blank">Customer Support</a>
                                                .
                                                View our <a href="/privacy-policy-intl" target="blank">Privacy Policy</a>
                                                .

                                            </div>
                                        </div>
                                        <form id="addressFormExtended">
                                            <input type="hidden" name="__mBfuPAgT" value="038a07286215fd6198b1162e7e4de313736664d1fc18a44765dfdb0224a31e54" id="neededInfoAuthToken" />
                                            <div id="formBody">
                                                <div class="formElement cint" id="firstNameSection">
                                                    <input type="text" id="firstNameInputTextField" data-validation="name" data-field="firstName" tabindex="84" placeholder="First Name" data-placeholder="First Name" />
                                                    <div class="glblErrortip glblRightTooltip"></div>
                                                </div>
                                                <div class="formElement cint" id="lastNameSection">
                                                    <input type="text" id="lastNameInputTextField" data-validation="name" data-field="lastName" tabindex="88" placeholder="Last Name" data-placeholder="Last Name" />
                                                    <div class="glblErrortip glblRightTooltip"></div>
                                                </div>
                                                <div class="formElement verity" id="address1InputSection">
                                                    <input type="text" id="addressInputTextField" data-validation="address1" data-field="address1" tabindex="92" placeholder="Address" data-placeholder="Address" />
                                                    <div class="glblErrortip glblRightTooltip"></div>
                                                </div>
                                                <div class="formElement verity" id="cityInputSection">
                                                    <input type="text" id="cityInputTextField" data-validation="city" data-field="city" tabindex="96" placeholder="City" data-placeholder="City" />
                                                    <div class="glblErrortip glblRightTooltip"></div>
                                                </div>
                                                <div class="formElement verity" id="stateAndZipInputSection">
                                                    <div id="stateSection">
                                                        <div id="addressZipCounty" class="addressDropdownContainer drpAttchKeydown" data-validation="optionSelected" data-val="0" data-field="state" tabindex="100">
                                                            <div id="addressDropdownArrow"></div>
                                                            <span style="padding-left:5px; color:#555555">Select a State</span>
                                                            <div id="addressZipCountyDropdown" class="addressDropdown cardDropdown"></div>
                                                        </div>
                                                        <div class="glblErrortip glblLeftTooltip"></div>
                                                    </div>
                                                    <div id="zipSection">
                                                        <input type="text" id="zipInputTextField" data-validation="zip" data-field="zipCode" tabindex="104" placeholder="Postal Code" data-placeholder="Postal Code" />
                                                        <div class="glblErrortip glblRightTooltip"></div>
                                                    </div>
                                                </div>
                                                <div class="formElement stateAndZipInputSection cint">
                                                    <input type="text" id="zipInputTextField" data-validation="zip" data-field="zipCode" tabindex="104" placeholder="Postal Code" data-placeholder="Postal Code" />
                                                    <div class="glblErrortip glblRightTooltip"></div>
                                                </div>
                                                <div class="clear"></div>
                                                <div id="buttonsFormSection">
                                                    <div id="cancelBtn" onclick="sbNeedsAddress.closeVerityForm();">Cancel
                                                    </div>
                                                    <!-- 
                     -->
                                                    <div class="formElement" id="submitFormSection">
                                                        <input type="hidden" id="mHash" name="hsh" value="9d1a87b1942a107db105717713ae5769">
                                                        <a class="actionBtn actionBtnGreen" id="submitFormBtn" href="#" tabindex="108">Save &Continue </a>
                                                    </div>
                                                    <div id="askMeLaterSection">
                                                        <span onclick="sbNeedsAddress.processAskMeLater();" tabindex="112">Ask me later </span>
                                                    </div>
                                                </div>
                                                <!-- Add space so navigation bar in web view does not block access to response buttons -->
                                            </div>
                                        </form>
                                        <div id="formFooter">
                                            <div class="formSubTitle">
                                                In order to participate in certain surveys, we need to verify where you live.
                                                If you have any questions about this request, please contact <a href="/g/contact" target="blank">Customer Support</a>
                                                .
                                                View our <a href="/privacy-policy-intl" target="blank">Privacy Policy</a>
                                                .

                                            </div>
                                        </div>
                                        <div id="redirectSection">
                                            <a id="redirectBtn" class="actionBtn actionBtnGreen" href="#" target="_blank">Start Survey</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="addressPromptPopOverlay" class="loadingHidden">
                                <img src="//static.prdg.io/dist-non-modules/content/swagbucks-com/images/loading.88a47f901075a11e1b45.gif" />
                            </div>
                            <script>
                                var cmpltRegMID = 136484444;
                                var zipLabel = 'Postal Code';
                                var zipLabelLocal = typeof zipLabel != 'undefined' ? zipLabel : 'zip code';
                            </script>
                            <script src="//static.prdg.io/dist-non-modules/content/swagbucks-com/js/address-prompt-pop-v2.5a7bdedf1acd0adfe2cc.js"></script>
                            <script>
                                sbGlbl.tourVisible = false;

                                if (!sbGlbl.tourVisible) {
                                    typeof sbPromoButton !== 'undefined' && sbPromoButton.show();
                                }
                            </script>
                            <script src="//static.prdg.io/dist-non-modules/js/sort-table.fbf90d001e839264178d.js"></script>
                            <script src="//static.prdg.io/dist-non-modules/content/projects/surveys/gold-dash/survey-profile-v3.821bbeaf686dcb6f327a.js"></script>
                            <div class="dashboardMiddleRightContent">
                                <div class="dashboardMiddle">
                                    <link rel="stylesheet" href="//static.prdg.io/dist-non-modules/content/projects/surveys/survey-popout-modal.e955f3f05c131cf0b6cc.css" />
                                    <div id="surveyOpenModalPop">
                                        <div class="sbPopContainer" id="surveyOpenModal">
                                            <div class="sbPopContent">
                                                <div class="surveyPopoutModalCta" id="surveyPopoutModalCloseCta">
                                                    <img src="//static.prdg.io/dist-non-modules/images/x_close_sb.aa9679b855cf0dd30451.png" alt="" loading="lazy">
                                                </div>
                                                <div id="surveyPopoutModalHeader">Finished with your survey?
                                                </div>
                                                <div id="surveyPopoutModalContent">
                                                    <div class="surveyPopoutModalExtraBP" id="surveyPopoutModalSubheader">We noticed that you are still in progress with another survey. Are you sure you want to stop and begin another survey?
                                                    </div>
                                                    <button class="surveyPopoutModalCty" id="surveyPopoutModalYesCty">Yes, begin new survey</button>
                                                    <button class="surveyPopoutModalCta" id="surveyPopoutModalNoCta">No, continue current survey</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <script></script>
                                    <div id="surveyListContainer">
                                        <table id="surveyList" cellpadding="0" cellspacing="0" border="0" class="table-autosort table-autostripe table-stripeclass:surveyOddRow table-stripeasonetbody:true datatable">
                                            <thead id="surveysTHead" style="display:none;">
                                                <tr>
                                                    <th class="table-sortable:numeric surveyTime" data-column="1">
                                                        <span class="sort">Time to Complete</span>
                                                    </th>
                                                    <th class="table-sortable:numeric surveySB" data-column="4">
                                                        <span class="sort">SB Amount</span>
                                                        <span class="dashboardSurveyInfoIcon">
                                                            <div class="sbTooltip surveyInfoTooltip tipdown">SB amount for completing survey.</div>
                                                        </span>
                                                    </th>
                                                    <th class="surveyID">Survey #</th>
                                                    <th class="surveyLink">&nbsp;</th>
                                                </tr>
                                            </thead>
                                            <tbody id="profilerSurveyTBody" class="profilerSurveyHidden">
                                                <tr title="Survey Profiler" class="profilerSurveyHidden" loi="5" guaranteed-amount="0" reward="5" bonus="" survey-id="140346961" project-id="140346961" oid="1">
                                                    <td class="surveyTime">
                                                        <var>5</var>
                                                        min
                                                    </td>
                                                    <td class="surveySB">
                                                        <span class="tdSbAmount">
                                                            <var>5 SB</var>
                                                        </span>
                                                    </td>
                                                    <td class="surveyID">
                                                        <var>140346961</var>
                                                    </td>
                                                    <td class="surveyLink">
                                                        <a href="#" class="surveyClick profilerSurvey" onclick="return surveyClick(this, '/g/survey-click?projectid=140346961&oid=1&sourceid=7&memberid=136484444&pout=5&dqpout=1&hsh=e5caae7b49a5243411e10150033817ead0831e7e46250578fb89c268c77056b4', 0, false);" target="_blank">
                                                            <span class="startSurveyLinkText">Start Survey</span>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <div id="welcomeTourTooltip" class="sbTooltip tiptop" style="display: none;">
                                                <div class="tooltipClose"></div>
                                                <span class="inlineBlock inlineSet"></span>
                                                <!--  -->
                                                <span class="inlineBlock valignMiddle">Take this survey first to unlock all of the other surveys in the list</span>
                                            </div>
                                            <div id="fadeCoverTBody" style="display: none;"></div>
                                            <tbody id="incentiveSurveysTBody"></tbody>
                                            <tbody id="featuredSurveysTBody"></tbody>
                                            <tbody>
                                                <tr id="pollfishRow" style="display:none" loi="7" guaranteed-amount="0" reward="10" bonus="" survey-id="PF20230320" project-id="" oid="">
                                                    <td class="surveyTime">
                                                        <var>7</var>
                                                        min

                                                    </td>
                                                    <td class="surveySB">
                                                        <span class="moreSurveyWrap">
                                                            <span class="tdSbAmount moreSurvey">
                                                                <var>10 SB</var>
                                                            </span>
                                                        </span>
                                                    </td>
                                                    <td class="surveyID" data-notranslate>
                                                        PF20230320
                                                        &nbsp;
                                                        <span class="dashboardSurveyInfoIcon">
                                                            <div class="sbTooltip surveyInfoTooltip tipdown">This survey is not eligible for the 1 SB disqualification award</div>
                                                        </span>
                                                    </td>
                                                    <td class="surveyLink startSurveyLink">
                                                        <a class="surveyClick pollfishClick" href="" target="_blank">
                                                            <span class="startSurveyLinkText">Start Survey</span>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr id="peanutLabsRow" style="display:none" loi="" guaranteed-amount="0" reward="259" bonus="" survey-id="" project-id="" oid="">
                                                    <td class="surveyTime">More Surveys
                                                    </td>
                                                    <td class="surveySB">
                                                        <span class="moreSurveyWrap">
                                                            <span class="tdSbAmount moreSurvey">
                                                                Earn up to <var>259 SB</var>
                                                            </span>
                                                        </span>
                                                    </td>
                                                    <td class="surveyID"></td>
                                                    <td class="surveyLink startSurveyLink">
                                                        <a class="surveyClick" href="/surveys/peanutlabs" target="_blank">Open
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <button id="loadMoreSurveys" type="button">Load More Surveys</button>
                                    </div>
                                    <div id="loadingExtendedSurveys">
                                        <div class="extendedSurveySpinner surveyDashboardLoading"></div>
                                        <p>Loading more surveys...</p>
                                    </div>
                                    <a id="surveyLegalNoticeButton" onclick="window.showSurveyLegalNotice()">Important Things to Know About Taking Surveys</a>
                                </div>
                                <!--
    
 -->
                                <div class="dashboardRightRail">
                                    <div class="dashboardRightRailSurveyQ  dashboardGold">
                                        <div class="surveyMeterContainerDiscrete surveyQuestionsMeter">
                                            <div class="dashboardRightRailContent inlineBlock valignTop">
                                                <span class="dashboardSecTitle">Your Survey Profile</span>
                                                <span class="dashboardSecDesc">Earn 2 SB for every 10 questions</span>
                                            </div>
                                            <div class="surveyMeterDiscrete">
                                                <span class="dashboardIcon2 dashboardIconMeterNull dashboardIconMeterFill inlineBlock"></span>
                                                <span class="dashboardIcon2 dashboardIconMeterNull dashboardIconMeterFill inlineBlock"></span>
                                                <span class="dashboardIcon2 dashboardIconMeterNull dashboardIconMeterFill inlineBlock"></span>
                                                <span class="dashboardIcon2 dashboardIconMeterNull inlineBlock"></span>
                                                <span class="dashboardIcon2 dashboardIconMeterNull inlineBlock"></span>
                                                <span class="dashboardIcon2 dashboardIconMeterNull inlineBlock"></span>
                                                <span class="dashboardIcon2 dashboardIconMeterNull inlineBlock"></span>
                                                <span class="dashboardIcon2 dashboardIconMeterNull inlineBlock"></span>
                                                <span class="dashboardIcon2 dashboardIconMeterNull inlineBlock"></span>
                                                <span class="dashboardIcon2 dashboardIconMeterNull inlineBlock"></span>
                                            </div>
                                        </div>
                                        <div class="surveyQuestionContainer">
                                            <div class="surveyQuestion questionMultiple">
                                                <span class="surveyQuestionText">If you own/lease your car(s), which brand are they?</span>
                                                <div class="surveyQuestionAnswers"></div>
                                                <div class="surveyQuestionCTA">
                                                    <button type="button" class="surveyDashboardCTA surveyDashboardCTANull sbCta sbBgPrimaryColor" onclick="sp.saveAnswer();">Answer
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clear"></div>
                                <div id="pollfishModal" class="modal">
                                    <!-- Modal content -->
                                    <div class="modal-content">Please wait while we find a survey...
                                    </div>
                                </div>
                            </div>
                            <script>
                                var surveyTracking = {
                                    data: {
                                        offWin: null,
                                        isLimitedToSingleOpenSurvey: false
                                    }
                                };

                                var showSbPerMin = false;
                                var isMobileOrTablet = false;

                                $('a.surveyClick').click(function() {
                                    var self = $(this);
                                    if (self.hasClass('verityRequired')) {
                                        return;
                                    }
                                });

                                var pollfishConfig;

                                let pollfishClick$;
                                if (showSbPerMin && isMobileOrTablet) {
                                    pollfishClick$ = $('#pollfishRow')
                                } else {
                                    pollfishClick$ = $('#pollfishRow a');
                                }

                                pollfishClick$.click(function() {

                                    var self = $(this);
                                    if (self.is("a")) {
                                        self.parents('tr').addClass('surveyClicked');
                                        self.parents('td').html('Started');
                                    }

                                    //show modal
                                    $('#pollfishModal').show();

                                    setTimeout(function() {
                                        $('#pollfishModal').hide();
                                    }, 5000);

                                    //Make request to get clickID
                                    var data = {
                                        memberid: 136484444,
                                        sourceid: 7
                                    };
                                    $.post('/?cmd=survey-pollfish-click', data, function(clickID) {
                                        pollfishConfig = {
                                            api_key: pollfishApiKey,
                                            uuid: clickID,
                                            ready: pollfishReady,
                                            surveyAvailable: pollfishAvailable,
                                            surveyNotAvailable: surveyNotAvailableCallback,
                                            userNotEligibleCallback: pollfishNotAvailable,
                                            surveyCompletedCallback: pollfishCompleted,
                                            closeAndNoShowCalllback: pollfishClose
                                        };
                                        var script = document.createElement('script');
                                        script.setAttribute('type', 'text/javascript');
                                        script.setAttribute('src', 'https://storage.googleapis.com/pollfish_production/sdk/webplugin/pollfish.min.js');
                                        document.body.appendChild(script);
                                    });
                                    return false;
                                });

                                function pollfishClose() {
                                    Pollfish.hide();
                                    banner.create({
                                        color: 'yellow',
                                        html: 'Your dashboard may be out-of-date. Please <a href="/surveys">refresh your page</a> to ensure you have the latest survey opportunities.',
                                        timer: false
                                    });
                                }

                                function pollfishReady() {
                                    Pollfish.hide();
                                }

                                function pollfishAvailable(data) {
                                    $('#pollfishModal').hide();
                                    if (!Pollfish.showFullSurvey()) {
                                        window.location = "/surveys?m=1";
                                    }
                                }

                                function pollfishNotAvailable() {
                                    $('#pollfishModal').hide();
                                    window.location = "/surveys?m=1";
                                }

                                function surveyNotAvailableCallback() {
                                    $('#pollfishModal').hide();
                                    window.location = "/surveys?m=-5";
                                }

                                function pollfishCompleted() {
                                    $('#pollfishModal').hide();
                                    window.location = "/surveys?m=0";
                                }
                                var pollfishModal = document.getElementById('pollfishModal');
                                window.onclick = function(event) {
                                    if (event.target == pollfishModal) {
                                        $('#pollfishModal').hide();
                                    }
                                }

                                function enterSurvey(elm, redirectURL, totalSurveys, featured, verityRequired, needsAddress) {
                                    // things seem to break if surveyFeedback call is not at top

                                    let $surveyRow = $(elm).is('tr') ? $(elm) : $(elm).parents('tr');

                                    if (dashboardProps.shouldShowSurveyFeedbackModal) {
                                        surveyFeedback.openModal($surveyRow[0]);
                                    }
                                    if ($(elm).hasClass('markClicked')) {
                                        $(elm).parents('tr').addClass('surveyClicked');
                                        $(elm).parents('td').html('Started');
                                    }

                                    if (!$(elm).hasClass('pollfishClick')) {
                                        banner.create({
                                            color: 'yellow',
                                            html: 'Your dashboard may be out-of-date. Please <a href="/surveys">refresh your page</a> to ensure you have the latest survey opportunities.',
                                            timer: false
                                        });
                                    }

                                    verityRequired = verityRequired || false;
                                    needsAddress = needsAddress || false;
                                    var position = $surveyRow.prevAll().length + 1;
                                    var surveyElements = $('#surveyList tbody tr');
                                    var totalSurveysInViewport = 0;

                                    for (var i = 0, surveyCount = surveyElements.length; i < surveyCount; i++) {
                                        var rect = $(surveyElements[i])[0].getBoundingClientRect();
                                        if (rect.height > 0) {
                                            var offsetTop = rect.top + $(window).scrollTop();
                                            if (offsetTop > 0 && offsetTop < (window.innerHeight || document.documentElement.clientHeight)) {
                                                totalSurveysInViewport++;
                                            }
                                        }
                                    }
                                    var surveyParams = '&p=' + position + '&s=' + totalSurveys + '&v=' + totalSurveysInViewport + '&f=' + featured;

                                    var sortParams = '';
                                    var sortInfo = Table.tabledata.surveyList;
                                    if (sortInfo !== undefined && sortInfo.hasOwnProperty('col') && sortInfo.hasOwnProperty('desc')) {
                                        const theadRow = 0;
                                        const colNum = document.getElementById('surveyList').rows[theadRow].cells[sortInfo.col].dataset.column;
                                        sortParams += '&c=' + colNum;
                                        sortParams += '&d=' + sortInfo.desc;
                                    }
                                    redirectURL = redirectURL + surveyParams + sortParams;
                                    var redirect = true;
                                    if (verityRequired) {
                                        redirect = sbNeedsAddress.showPop(needsAddress, redirectURL);
                                    }

                                    //return redirect && elm.setAttribute('href', redirectURL);
                                    if (redirect) {
                                        surveyTracking.data.offWin = window.open(redirectURL);
                                    }
                                    return false;
                                }

                                function surveyClick(elm, redirectURL, totalSurveys, featured, verityRequired, needsAddress) {

                                    if (surveyTracking.data.offWin && surveyTracking.data.isLimitedToSingleOpenSurvey) {
                                        $('#surveyOpenModal').appendTo('body');
                                        sbGlbl.sbTb.openPop('surveyOpenModal');
                                        $('.surveyPopoutModalCta').click(function() {
                                            sbGlbl.sbTb.closePop();
                                        })
                                        $('.surveyPopoutModalCty').click(function() {
                                            surveyTracking.data.offWin.close();
                                            sbGlbl.sbTb.closePop();
                                            enterSurvey(elm, redirectURL, totalSurveys, featured, verityRequired, needsAddress);
                                        })
                                    } else {
                                        enterSurvey(elm, redirectURL, totalSurveys, featured, verityRequired, needsAddress);
                                    }
                                    return false;
                                }
                            </script>
                        </div>
                        <!-- .dashboardMainContent   END -->
                    </div>
                    <!-- .dashboardWrap   END -->
                    <script src="//static.prdg.io/dist-non-modules/content/projects/surveys/gold-dash/gold-dash-v3.cbe6f9585a016c3fae15.js"></script>
                    <script>
                        var dashboardProps = {
                            memberID: 136484444,
                            linkSourceID: 7,
                            shouldShowSurveyFeedbackModal: true,
                            maxRatingForSurveyFeedback: 2,
                            surveyWelcomeTourID: 7,
                            mainOnboardingTourID: 1,
                            currentStepID: -1,
                            isExistingUser: true,
                            status: 'enabled',
                            mustVerifyEmail: false,
                            alreadyDoneSbOnBoarding: false,
                            showExtended: true,
                            topTwoFeatured: false,
                            displayAnswerPromo: false,
                            answerPromoMultiplier: 0.0,
                            answerPromoShouldBeAddedToBaseAmount: false,
                            answerPromoShouldBeSubtractedFromBaseAmount: false,
                            memberSurveysSize: 0,
                            loadAllSurveys: true,
                            api_user_ids_not_in_cache: [],
                            impressionID: 'ze298ehmdw8x',
                            maxNumOfTries: 10,
                            pollWaitTime: 2000,
                            showSurveyAwardRange: false,
                            showPeanutLabs: false,
                            allowsPollfish: false,
                            isDebugMode: false,
                            debugModePw: '',
                            shouldShowHonestyPledge: false
                        };
                        var unansweredQuestion = null;
                        var answersCount = 21;
                        var profileQuestionsCountForReward = 10;
                        var QUESTION_TYPES = {
                            UNKNOWN: -1,
                            DUMMY: 0,
                            SINGLE_PUNCH: 1,
                            MULTI_PUNCH: 2,
                            NUMERIC_OPEN_END: 3,
                            TEXT_OPEN_END: 4,
                            CON_LIST_SINGLE_PUNCH: 5,
                            CON_LIST_MULTI_PUNCH: 6,
                            CALCULATED_DUMMY: 7,
                            DATE: 8,
                            GRID: 9
                        }
                        QUESTION_TYPES = {
                            SINGLE_PUNCH: 4,
                            MULTI_PUNCH: 5
                        }
                        var profileQuestion = {
                            'questionId': 296,
                            'answers': [],
                            'label': 'How frequently do you rent or download movies for home viewing (on average)?',
                            'type': '4'
                        };

                        profileQuestion['answers'].push(['1', 'Less than once a month']);

                        profileQuestion['answers'].push(['2', 'One time per month']);

                        profileQuestion['answers'].push(['3', 'Two times per month']);

                        profileQuestion['answers'].push(['4', 'Three times per month']);

                        profileQuestion['answers'].push(['5', 'Four times per month']);

                        profileQuestion['answers'].push(['6', 'Five or more times per month']);

                        profileQuestion['answers'].push(['7', 'I don\'t rent or download movies']);

                        unansweredQuestion = profileQuestion;

                        sp.fillQuestionMeter(answersCount % profileQuestionsCountForReward);
                        if (unansweredQuestion == null) {
                            sp.showNoMoreQuestions();
                        } else {
                            sp.showNextQuestion();
                        }
                    </script>
                    <script id="sbSurveyLegalModal" type="application/json">
                        {
                            "showModal": "false"
                        }
                    </script>
                    <link rel="stylesheet" href="//static.prdg.io/dist-non-modules/survey-legal-notice.4c75525f8eb376b92e24.css" />
                    <script src="//static.prdg.io/dist-non-modules/survey-legal-notice.83a2f63cc92261d8e31a.js" defer="defer"></script>
                    <link rel="stylesheet" href="//static.prdg.io/dist-non-modules/content/shared/font-awesome/css/font-awesome-4.7.0.min.53b24c6202d85b6443ad.css" />
                    <link rel="stylesheet" href="//static.prdg.io/dist-non-modules/survey-feedback.011ce6b9ce3833c63dc4.css" />
                    <div id="surveyFeedbackModal"></div>
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
            <div id="topAd" class="advertisement ad_warn ad-placement doubleclick pub_300x250 pub_300x250m pub_728x90 text-ad textAd text_ad" style="display: block !important; height:10px !important; width:10px !important; left: -10px !important;color:transparent; position: absolute; bottom: 0;"></div>
            <?php include('../footer.php');?>
        </div>
    </div>
    <script src="//static.prdg.io/dist-non-modules/content/shared/jquery.isonscreen.7b851814bd6af500d8f9.js"></script>
    <script src="//static.prdg.io/dist-non-modules/survey-feedback.abe687f81c4998f4488a.js"></script>
    <script src="//static.prdg.io/dist-non-modules/content/js/perfect-scrollbar.min.ded6e0fdfc15d1e32978.js"></script>
    <link rel="stylesheet" href="//static.prdg.io/dist-non-modules/content/css/perfect-scrollbar.min.9f2851097f4adb3b6cdb.css" />
    <script src="//static.prdg.io/dist-non-modules/content/js/detect-ie.29ecc00420dafb01e5ac.js"></script>
    <script src="//static.prdg.io/dist-non-modules/service-worker-client.89227b5fc6fc8a41ec4e.js" defer="defer"></script>
    <script src="//static.prdg.io/dist-non-modules/vendor.402045020487a4edd587.js"></script>
    <script src="//static.prdg.io/dist-non-modules/content/components/banner/no-SB-banner.87f9aac2752ba1af488b.js" defer="defer"></script>
    <script src="//static.prdg.io/dist-non-modules/content/components/footer/footer.b6e45277a533caadfd71.js"></script>
    <script src="//static.prdg.io/dist-non-modules/content/shared/functions.1022909b13ef0adb975e.js"></script>
    <script src="//static.prdg.io/dist-non-modules/content/components/footer/btm-functions-v4.8347d86fcd4360703d1b.js"></script>
    <script src="//static.prdg.io/dist-non-modules/accessibility-widget.9fd7e401530c3e46da38.js" defer="defer"></script>
</body>
</html>