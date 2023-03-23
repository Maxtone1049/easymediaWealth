<?php
session_start();
error_reporting(0);
include('includes/dbconnect.php');
if(isset($_POST['done'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
// check if data already exist else create account
    $check =  "SELECT ID FROM users WHERE email=:email";
    $query = $dbh->prepare($check);
    $query->bindParam(':email', $email, PDO::PARAM_STR);
    $query->execute();
    $res=$query->fetchAll(PDO::FETCH_OBJ);

    if ($query->rowCount() == 0) {
        $sql = "INSERT INTO users (email,password) VALUES (:email,:password)";
        $query = $dbh->prepare($sql);
        $query->bindParam(':email', $email, PDO::PARAM_STR);
        $query->bindParam(':password', $password, PDO::PARAM_STR);
        $query->execute();
 $lastInsertId = $dbh->lastInsertId();
        if ($lastInsertId) {
            $msg = "<div style='background:green;padding:1em;border-radius:1em;color:white;font-size: 1.2rem;font-weight:900;text-align:center;'>Welcome Onboard</div>";
            echo ("<script type='text/javascript'>  
 setTimeout(function(){
    window.location.href = 'login';
 }, 3000);
</script>");
        } else {
            $msg = "<p style='background-color:red;padding:10px;border-radius: 10px;'>Error processing your request...</p>";
        }
    } else {
        $msg = "<p style='background-color:red;padding:10px;border-radius: 10px;'>Email Exists</p>";
    }
}
?>
<!DOCTYPE html>
<html id="html" class="isNotExternal isNotLoggedIn" lang="en">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script>
            function OptanonWrapper() {}
        </script>
        <script src="static.prdg.io/dist-non-modules/content/shared/sbxIovations.5f49a69b36dcf11f3e9f.js"></script>
        <script src="static.prdg.io/dist-non-modules/content/shared/sbxIovations-loader.5f4be45273e39bcc59e6.js"></script>
        <meta name="title" content="Easymedia: Coupons, Paid Online Surveys & Free Gift Cards">
        <meta name="description" content="Save money with coupons, promo codes, sales and cashback when you shop for clothes, electronics, travel, groceries, gifts & homeware. Get free gift cards and cash for taking paid online surveys and free trial offers. Join for free now!">
        <link rel="image_src" href="content.Easymedia.com/profiles/profile-sm/default-new.html">
        <script src="static.prdg.io/dist-non-modules/content/shared/sbglobals.75e9c5e76a91dfe5e99f.js"></script>
        <script src="static.prdg.io/dist-non-modules/content/shared/jquery-1.6.4.min.310d26371f84ccea90a1.js"></script>
        <script src="static.prdg.io/dist-non-modules/content/shared/localize-loader.5c6a8a2c0232e9cbb336.js" id="localizeScript" data-testing="false" data-src="static.prdg.io/dist-non-modules/content/shared/localize.1fdb88736d80e367d0aa.js" data-bits="{&#34;de&#34;:2,&#34;no&#34;:32768,&#34;ru&#34;:64,&#34;sv&#34;:65536,&#34;pt&#34;:524288,&#34;ko&#34;:262144,&#34;el&#34;:8192,&#34;en&#34;:1,&#34;it&#34;:32,&#34;fr&#34;:128,&#34;es&#34;:1048576,&#34;zh&#34;:256,&#34;ar&#34;:512,&#34;ja&#34;:131072,&#34;pl&#34;:1024,&#34;da&#34;:4096,&#34;tr&#34;:2048,&#34;nl&#34;:16384}" data-language-code="en" data-ysense="false" data-key="MldiexN2caLe9" data-languages="{&#34;de&#34;:&#34;Deutsch&#34;,&#34;no&#34;:&#34;norsk&#34;,&#34;ru&#34;:&#34;русский&#34;,&#34;sv&#34;:&#34;svenska&#34;,&#34;pt&#34;:&#34;Português (Brasil)&#34;,&#34;ko&#34;:&#34;한국어&#34;,&#34;el&#34;:&#34;Ελληνικά&#34;,&#34;en&#34;:&#34;English&#34;,&#34;it&#34;:&#34;Italiano&#34;,&#34;fr&#34;:&#34;Français (Canada)&#34;,&#34;es&#34;:&#34;Español (México)&#34;,&#34;zh&#34;:&#34;中文&#34;,&#34;ar&#34;:&#34;العربية&#34;,&#34;ja&#34;:&#34;日本語&#34;,&#34;pl&#34;:&#34;Język polski&#34;,&#34;da&#34;:&#34;dansk&#34;,&#34;tr&#34;:&#34;Türkçe&#34;,&#34;nl&#34;:&#34;Nederlands&#34;}"></script>
        <meta charset="UTF-8">
        <title>EasymediaWealth: Coupons, Paid Online Surveys &Free Gift Cards</title>
        <meta name="keywords" content="Earn Reward Points and Redeem Them For Free Gift Cards at easymediawealth.com">
        <link rel="canonical" href=".">
        <link rel="icon" type="image/svg+xml" href="/favicon.svg">
        <link rel="icon" type="image/png" href="static.prdg.io/dist-non-modules/images/favicon-16x16.c851c657ffaf20dfaf15.png" sizes="16x16">
        <link rel="icon" type="image/png" href="static.prdg.io/dist-non-modules/images/favicon-32x32.62bd6461aac547ff4000.png" sizes="32x32">
        <link rel="icon" type="image/png" href="static.prdg.io/dist-non-modules/images/favicon-96x96.6e441ed57709dfb43629.png" sizes="96x96">
        <link rel="icon" type="image/png" href="static.prdg.io/dist-non-modules/images/android-chrome-192x192.a8de0a0f140635c65747.png" sizes="192x192">
        <link rel="alternate icon" type="image/png" href="/favicon.png">
        <link rel="apple-touch-icon" href="static.prdg.io/dist-non-modules/images/apple-touch-icon-120x120.f6f0effa6837166ce1d9.png">
        <link rel="apple-touch-icon" sizes="180x180" href="static.prdg.io/dist-non-modules/images/apple-touch-icon-180x180.48d1616875d9e641fc7a.png">
        <link rel="apple-touch-icon" sizes="167x167" href="static.prdg.io/dist-non-modules/images/apple-touch-icon-167x167.f0fca7d85bd8abbfbaa8.png">
        <link rel="apple-touch-icon" sizes="152x152" href="static.prdg.io/dist-non-modules/images/apple-touch-icon-152x152.144c1bf7000db8f9835c.png">
        <link rel="stylesheet" href="static.prdg.io/dist-non-modules/content/home-6/css/logged-out-home-v2.8481e00f4d53178eedf9.css"/>
        <link rel="stylesheet" href="static.prdg.io/dist-non-modules/content/components/font/font.0e7d3d116854f6603774.css"/>
        <script crossorigin="anonymous" src="polyfill.io/v3/polyfill.min9957.js?flags=gated&amp;features=default,DocumentFragment.prototype.append,Object.assign,Element.prototype.append,~html5-elements,IntersectionObserver,ResizeObserver,Intl.~locale.en,Intl.PluralRules,Intl.DateTimeFormat,Intl.NumberFormat"></script>
        <script>
            if (typeof sbGlbl === 'undefined') {
                var sbGlbl = {};
            }
            var gaEventTrack = {
                category: 'cmp',
                action: '277',
                label: ''
            };
            var successRedirectTo = '';
            sbGlbl.showConfirmPassword = true;
        </script>
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="@Easymediawealth">
        <meta property="og:url" content=".">
        <meta property="og:description" content="Shop, Watch Videos, Discover Deals, and more to earn FREE gift cards from your favorite retailers - get started today.">
        <meta property="og:title" content="Put cash back in your wallet with Easymediawealth!">
        <meta property="og:image" content="static.prdg.io/dist-non-modules/content/home-6/images/facebookog.42a0aef27e670f3f384a.png">
        <meta property="og:image:secure_url" content="static.prdg.io/dist-non-modules/content/home-6/images/facebookog.42a0aef27e670f3f384a.png">
        <meta property="og:image:width" content="1200">
        <meta property="og:image:height" content="630">
        <script src="https://accounts.google.com/gsi/client" defer></script>
        <link rel="stylesheet" href="static.prdg.io/dist-non-modules/content/components/header/top-bar/jquery-plugins.37a081e16b4a18f9031a.css"/>
        <script src="static.prdg.io/dist-non-modules/content/components/header/top-bar/jquery-plugins.06aa462fcaee532d8433.js"></script>
        <script id="passwordInfo" type="application/json">
            
        {
            "minLength": 6,
            "maxLength": 32
        }
    
        </script>
        <script src="static.prdg.io/dist-non-modules/content/components/header/top-bar/mini-reg.1fa82cf337a84a50e84c.js"></script>
        <link rel="stylesheet" href="static.prdg.io/dist-non-modules/content/home-6/css/include-registration-form.d7fe3e5f0b8ba4821c85.css"/>
        <script src="static.prdg.io/dist-non-modules/content/components/social/social.771dbb0adf9bb24c6b99.js" defer="defer" data-fb-app-id="138664736214483"></script>
        <script src="static.prdg.io/dist-non-modules/content/components/signup-form/google-signin.57fccc28fb026cae917f.js" defer="defer" data-google-client-id="788821587590-77vn3q4ibvphcm0spgrp2gs7jajcq8bd.apps.googleusercontent.com"></script>
        <link rel="stylesheet" href="static.prdg.io/dist-non-modules/content/components/header/top-bar/mini-reg.29bf58874790a07110e1.css"/>
        <script src="static.prdg.io/dist-non-modules/content/components/banner/banner-v2.3377fbfdf01106a390d6.js" data-css-src="static.prdg.io/dist-non-modules/content/components/banner/banner-v2.4e1f9e366219e5cfbded.css"></script>
        <script src="static.prdg.io/dist-non-modules/content/components/header/top-bar/top-bar.5accbdbcc775fc3b460d.js"></script>
        <script src="static.prdg.io/dist-non-modules/content/components/header/top-bar/search.204e2199cc01f1509832.js"></script>
        <script src="static.prdg.io/dist-non-modules/content/components/header/top-bar/menus.0d8f3da7f8426c710521.js"></script>
        <script src="static.prdg.io/dist-non-modules/content/shared/jquery.tmpl.49b33d8b10460c2c5988.js"></script>
        <link rel="stylesheet" href="static.prdg.io/dist-non-modules/content/home-6/css/templateDefault-v2.7ff65ffaf6d3b4117cb5.css"/>
        <link rel="stylesheet" href="static.prdg.io/dist-non-modules/content/shared/css/generic-v3.9b2fedc1d7ef1838c325.css"/>
        <link rel="stylesheet" href="static.prdg.io/dist-non-modules/content/components/header/top-bar/top-bar.4fcdfd73efb3980d918f.css"/>
        <script src="static.prdg.io/dist-non-modules/content/global-includes/js/helpers-new.151e9ccb5c4cfae0e3bc.js"></script>
        <script src="static.prdg.io/dist-non-modules/content/skin-02/js/top-functions-v2.de7eb06bda3fe88bef5e.js"></script>
        <link rel="stylesheet" href="static.prdg.io/dist-non-modules/header.a49f3b59cb8b091c2228.css"/>
        <link rel="stylesheet" href="static.prdg.io/dist-non-modules/header.a49f3b59cb8b091c2228.css"/>
        <link rel="stylesheet" href="static.prdg.io/dist-non-modules/content/components/header/responsive-header-v2.5ccd5e97dd1ff917de09.css"/>
        <script src="static.prdg.io/dist-non-modules/vendor.402045020487a4edd587.js"></script>
        <script src="static.prdg.io/dist-non-modules/header-logged-out.e4aec097d54520a4e233.js"></script>
    </head>
    <body id="logged-out-home" class="  preload">
        <div id="sbPage">
            <div id="sbHead" class="">
                <div id="sbPendingCount" data-sb-pending-count="0"></div>
                <header id="sbGlobalNav" class="sbGlobalNavLoggedOut">
                    <nav id="sbGlobalNavContent" aria-label="Main Menu">
                        <section id="sbLogoContainer" data-is-external="false">
                            <div class="sbLogoLinkWrapper">
                                <a id="sbLogoLink" href=".">
                                    <span class="sbVisuallyHidden">Easymediawealth
            </span>
                                </a>
                            </div>
                        </section>
                        <section id="sbLogInSignUpContainer" class="sbTopBarSection" data-page-name="Logged-Out - 1">
                            <a href="login" id="sbLogInCta" class="sbLogInSignUpCta sbCta sbPrimaryColor sbBorderPrimaryColor">Log In
    </a>
                        </section>
                    </nav>
                </header>
            </div>
            <div id="sbContentOverlay"></div>
            <div id="sbContent">
                <main id="lpContainer" class="">
                    <header id="lpHeader">
                        <div id="lpHeaderContent">
                            <div id="lpHeaderContentLeft">
                                <h1>Put cash back in your wallet!</h1>
                                <aside id="lpHeaderVideo">
                                    <button id="lpHeaderVideoCta" class="sbCta">Play</button>
                                    See how in 43 seconds
            
                                </aside>
                            </div>
                            <div id="lpHeaderContentRight">
                                <div id="sbRegFormWrapper">
                            <form id="sbRegForm" method="post" action="">
                            <?php if ($msg) {
                               echo $msg;
                            }  ?>
                                        <h2 id="sbRegFormTitle">Join for Free</h2>
                                        <div class="sbRegFormInputWrap">
                                            <label for="sbxJxRegEmail" class="sbVisuallyHidden">Email Address</label>
                                            <input id="sbxJxRegEmail" type="text" placeholder="Email Address" name="email" value="" required>
                                            <span class="vline"></span>
                                        </div>
                                        <div class="sbRegFormInputWrap pass">
                                            <label for="sbxJxRegPswd" class="sbVisuallyHidden">Password</label>
                                            <input id="sbxJxRegPswd" name="password" type="password" placeholder="Password" required>
                                            <span class="vline"></span>
                                        </div>
                                        <div class="sbRegFormInputWrap pass">
                                            <label for="sbxJxRegEmailConfirm" class="sbVisuallyHidden">Confirm Password</label>
                                            <input id="sbxJxRegEmailConfirm" type="password" placeholder="Confirm Password">
                                            <span class="vline"></span>
                                        </div>
                                        <div id="signUpCodeLine">
                                            <button id="signUpCodeText"  type="button">
                                                I have a sign up code (<em>optional</em>
                                                )
					
                                            
                                            </button>
                                            <label for="signUpCodeInput" class="sbVisuallyHidden">Enter sign up code</label>
                                            <input id="signUpCodeInput" type="text" placeholder="Enter sign up code">
                                        </div>
                                        <div id="signupLegalConsentOuterWrapper"></div>
                                        <button type="submit" name="done" id="sbxJxRegBtnSubmit" class="signupLegalConsentSubmit sbCta">Join Now</button>
                                        <div id="socialConnectBlock"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </header>
                    <link rel="stylesheet" href="static.prdg.io/dist-non-modules/content/home-6/css/include-as-seen-on.2727f01f7188754ccebb.css"/>
                    <section id="lpContentSeenOn">
                        <div class="sectionWrapper">
                            <span>As seen on</span>
                            <img src="http://static.prdg.io/dist-non-modules/content/home-6/images/logged-out/logos/logo-buzzfeed.243a3e2818a4ecfae366.svg" alt="Buzzfeed" loading="lazy">
                            <img src="http://static.prdg.io/dist-non-modules/content/home-6/images/logged-out/logos/logo-save-the-student.88a6b5054b02bfee567d.svg" alt="Save The Student" loading="lazy">
                            <img src="http://static.prdg.io/dist-non-modules/content/home-6/images/logged-out/logos/logo-the-penny-hoarder.29d9fdda65d83c2fbe6d.svg" alt="The Penny Hoarder" loading="lazy">
                            <img src="http://static.prdg.io/dist-non-modules/content/home-6/images/logged-out/logos/logo-abc.52f65d3490803800e2bc.svg" alt="abc" loading="lazy">
                            <img src="http://static.prdg.io/dist-non-modules/content/home-6/images/logged-out/logos/logo-huffington-post.7d592bebb55fc187a24b.svg" id="huffpost" alt="Huffington Post" loading="lazy">
                        </div>
                    </section>
                    <section id="lpContentAbout">
                        <div class="sectionWrapper">
                            <h2>
                                Get <strong>Free</strong>
                                Gift Cards &amp;Cash for the everyday things you do online. Here's how &hellip;
</strong></h2>
<div id="lpContentAboutEarn" class="lpContentHalves">
    <h2>Earn Points</h2>
    <p>Shop online, Play video games, Search the web, Answer surveys and find great deals to earn your points.</p>
</div>
<span id="lpContentAboutArrow"></span>
<div id="lpContentAboutGC" class="lpContentHalves country_512 ">
    <h2>Get Free Gift Cards</h2>
    <p>Redeem your points for gift cards to your favorite retailers like Amazon and Walmart or get cash back from PayPal.</p>
</div>
</div></section>
<section id="lpContentBrag">
    <h2 id="lpContentBragTitle">We &rsquo;ve paid our members over</h2>
    <link rel="stylesheet" href="static.prdg.io/dist-non-modules/content/home-6/css/include-rewards-flipcounter.fe8dc1edd9c96230324f.css"/>
    <div id="flipCounterWrapper">
        &#36;
        <div id="flipCounter">
            <span class="flipCounterFrame">
                <span class="flipCounterDigit">8</span>
            </span>
            <span class="flipCounterFrame">
                <span class="flipCounterDigit">4</span>
            </span>
            <span class="flipCounterFrame">
                <span class="flipCounterDigit">6</span>
            </span>
            ,
            <span class="flipCounterFrame">
                <span class="flipCounterDigit">6</span>
            </span>
            <span class="flipCounterFrame">
                <span class="flipCounterDigit">0</span>
            </span>
            <span class="flipCounterFrame">
                <span class="flipCounterDigit">2</span>
            </span>
            ,
            <span class="flipCounterFrame">
                <span class="flipCounterDigit">3</span>
            </span>
            <span class="flipCounterFrame">
                <span class="flipCounterDigit">7</span>
            </span>
            <span class="flipCounterFrame">
                <span class="flipCounterDigit">9</span>
            </span>
        </div>
    </div>
</section>
<section id="lpContentTestimonials">
    <div class="iconTestimonial" id="testimonialA">
        <p class="testimonial">
            &ldquo;My most rewarding moment with Easymediawealth is using the gift cards I earn to buy gifts for my child &#39;s Christmas and February birthday.&rdquo;
            <span class="testimonialMeta">
                <span class="testimonialMetaName">Kim,</span>
                Member since 2009
        </p>
    </div>
</section>
<section id="lpContentGc">
    <span id="lpContentGcIcon"></span>
    <p id="lpContentGcCopy">
        We give out <strong>7,000</strong>
        free gift cards <em>every day</em>
    </p>
</section>
<section id="lpContentSignUp">
    <h2>Put cash back in your wallet!</h2>
    <button id="lpContentSignUpCta" class="sbCta">Sign Up Now</button>
</section>
</main><script src="static.prdg.io/dist-non-modules/content/home-6/js/templateDefault.33cbed1c69217a446652.js"></script>
<script>
    var welcomeVid = "www.youtube.com/embed/igvuxUELCQg?rel=0&autoplay=1&wmode=opaque";
</script>
<div id="homeSignUpVidPop">
    <span class="sbPopClose" onclick="sbGlbl.sbGw.closeSignUpPop();"></span>
    <iframe src="#" allowfullscreen></iframe>
</div>
<script src="static.prdg.io/dist-non-modules/content/home-6/js/logged-out-home.3a611ade4ac6dbbe501f.js"></script>
<link rel="stylesheet" href="static.prdg.io/dist-non-modules/content/components/footer/footer.7219cbbc39a1d231c848.css"/>
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
                <script src="static.prdg.io/dist-non-modules/content/components/footer/language-preferences.81ca2ca81eae282f5584.js" defer="defer"></script>
                <section id="sbFooterColCont" class="sbFooterSection sbFooterShowTrustPilot ">
                    <section id="footer-col-1" class="sbFooterSection sbFooterSectionCollapsible">
                        <section class="sbFooterSection">
                            <h6 class="sbFooterHeading">Easymedia</h6>
                            <input class="fTitle" type="radio" id="sbFooterSwagbucks" name="tinyFooter">
                            <label for="sbFooterSwagbucks" class="fTitle">Easymedia</label>
                            <ul id="footerSwagbucks" class="footerCol">
                                <li class="sbFooterLink">
                                    <a class="sbFooterLink" href="#">Useful Articles</a>
                                </li>
                                <li class="sbFooterLink">
                                    <a class="sbFooterLink" href="#">About Us</a>
                                </li>
                                <li class="sbFooterLink">
                                    <a id="footerEasymediaHowItWorks" class="sbFooterLink" href="how-it-works">How it Works
                                        </a>
                                </li>
                                <li class="sbFooterLink">
                                    <a class="sbFooterLink" href="https://www.prodege.com/newsroom/" target="_blank" rel="noopener">In the Press</a>
                                </li>
                                <li class="sbFooterLink">
                                    <a class="sbFooterLink" href="/blog">Blog</a>
                                </li>
                                <li class="sbFooterLink">
                                    <a class="sbFooterLink" href="#">Mobile Apps</a>
                                </li>
                                <li class="sbFooterLink">
                                    <a class="sbFooterLink" href="#">Extension</a>
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
                                    <a class="sbFooterLink" href="rewards-store">All Gift Cards</a>
                                </li>
                            </ul>
                        </section>
                        <section class="sbFooterSection">
                            <h6 class="sbFooterHeading">Ways to Earn</h6>
                            <input class="fTitle" type="radio" id="sbFooterWaysToEarn" name="tinyFooter">
                            <label for="sbFooterWaysToEarn" class="fTitle">Ways to Earn</label>
                            <ul id="footerWaysToEarn" class="footerCol">
                                <li class="sbFooterLink">
                                    <a class="sbFooterLink" href="shop">Coupons &Cash Back</a>
                                </li>
                                <li class="sbFooterLink">
                                    <a class="sbFooterLink" href="paid-surveys">Answer Surveys</a>
                                </li>
                                <li class="sbFooterLink">
                                    <a class="sbFooterLink" href="discover">Discover Deals</a>
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
                                    <a class="sbFooterLink" href="#" target="_blank" rel="noopener">Do &#039;s and Don &#039;ts
                                        </a>
                                </li>
                                <li class="sbFooterLink">
                                    <a class="sbFooterLink" href="#">Sitemap
                                        </a>
                                </li>
                                <li class="mobileEnabled sbFooterLink">
                                    <a class="sbFooterLink" href="rewards-store">Rewards Program
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
                    <section id="footer-col-5" class="sbFooterSection sbFooterSectionCollapsible contactContainer whenTrustpilotWidgetShown">
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
                                    <link rel="stylesheet" href="static.prdg.io/dist-non-modules/media-links.b70a8a294ea22c14468c.css"/>
                                    <li id="socialLinkFacebook" class="sbFooterLink">
                                        <a id="sbSocialIconFacebook" class="sbSocialIcon" href="#" target="_blank" rel="noopener">
                                            <span class="sbVisuallyHidden">Easymedia on Facebook
            </span>
                                        </a>
                                    </li>
                                    <li id="socialLinkTwitter" class="sbFooterLink">
                                        <a id="sbSocialIconTwitter" class="sbSocialIcon" href="#" target="_blank" rel="noopener">
                                            <span class="sbVisuallyHidden">Easymedia on Twitter
            </span>
                                        </a>
                                    </li>
                                    <li id="socialLinkInstagram" class="sbFooterLink">
                                        <a id="sbSocialIconInstagram" class="sbSocialIcon" href="#" target="_blank" rel="noopener">
                                            <span class="sbVisuallyHidden">Easymedia on Instagram
            </span>
                                        </a>
                                    </li>
                                    <li id="socialLinkPinterest" class="sbFooterLink">
                                        <a id="sbSocialIconPinterest" class="sbSocialIcon" href="#" target="_blank" rel="noopener">
                                            <span class="sbVisuallyHidden">Easymedia on Pinterest
            </span>
                                        </a>
                                    </li>
                                    <li id="socialLinkYoutube" class="sbFooterLink">
                                        <a id="sbSocialIconYoutube" class="sbSocialIcon" href="#" target="_blank" rel="noopener">
                                            <span class="sbVisuallyHidden">Easymedia on YouTube
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
                    <section id="footer-col-6" class="sbFooterSection sbFooterSectionCollapsible">
                        <aside class="trustpilot-widget" data-locale="en-US" data-template-id="539ad0ffdec7e10e686debd7" data-businessunit-id="48fbe999000064000503d343" data-style-height="350px" data-style-width="100%" data-theme="light" data-stars="5" data-schema-type="Organization" data-review-languages="ot">
                            <a href="#" target="_blank" rel="noopener">Trustpilot</a>
                        </aside>
                        <script src="//widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js" async></script>
                    </section>
                </section>
            </section>
            <div class="footerHowLinks">
                <span id="sbFooterHowLinksTitle">How our Members &hellip;</span>
                <a class="sbFooterHowLink" href="#">Make Money Online</a>
                <span class="sbFooterHowSeparator">|</span>
                <a class="sbFooterHowLink" href="#">Get Free Gift Cards</a>
                <span class="sbFooterHowSeparator">|</span>
                <a class="sbFooterHowLink" href="#">Use Money From Easymedia</a>
                <span class="sbFooterHowSeparator">|</span>
                <a class="sbFooterHowLink" href="#">Work at Home</a>
                <span class="sbFooterHowSeparator">|</span>
                <a class="sbFooterHowLink" href="#">Get Paid Online</a>
                <span class="sbFooterHowSeparator">|</span>
                <a class="sbFooterHowLink" href="#">Best Paid Surveys</a>
            </div>
        </div>
    </div>
    <div id="sbBoilerplateContainer">
        <div id="sbBoilerplate">
            <div id="sbProdegeFooter">
                <img src="static.prdg.io/dist-non-modules/content/shared/images/prodege-logo.a89abc252ad78bda8358.png" id="sbProdegeLogo" alt="Prodege" width="205px" height="56px" loading="lazy">
                <p>Copyright &copy;2023 Prodege, LLC
                </p>
            </div>
            <div id="sbBPText">
                <p>Easymedia &reg;-related trademarks including “EasyMedia &reg;”, “Easy Codes &reg;”, “Easystakes &reg;”, “EasyButton”, “EasyUp”, “SB” and the Easymedia logo are the property of Prodege, LLC; all rights reserved. Other trademarks appearing on this site are property of their respective owners, which do not endorse and are not affiliated with Easymedia or its promotions.
                </p>
            </div>
        </div>
    </div>
</footer>
<script src="static.prdg.io/dist-non-modules/content/shared/jquery.isonscreen.7b851814bd6af500d8f9.js"></script>
<script src="static.prdg.io/dist-non-modules/content/components/footer/footer.b6e45277a533caadfd71.js"></script>
<script>
    $('.glblErrortip').addClass('SEErrortip');
</script>
<script src="static.prdg.io/dist-non-modules/accessibility-widget.9fd7e401530c3e46da38.js" defer="defer"></script>
</body></html>
