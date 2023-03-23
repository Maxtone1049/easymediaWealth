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
            $msg = "<div style='background:green;padding:1em;border-radius:1em;color:white;font-size: 1.2rem;font-weight:900; text-align:center;'>Welcome Onboard</div>";
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
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.cookielaw.org/consent/e3b98144-e9b8-4fab-9a3a-3a12894bed0b/OtAutoBlock.js"></script>
        <script src="https://cdn.cookielaw.org/scripttemplates/otSDKStub.js" charset="UTF-8" data-domain-script="e3b98144-e9b8-4fab-9a3a-3a12894bed0b"></script>
        <script>
            function OptanonWrapper() {}
        </script>
        <script src="static.prdg.io/dist-non-modules/content/shared/trackjs.min.ce256864164b0abb791e.js"></script>
        <script src="static.prdg.io/dist-non-modules/content/shared/sbxIovations.5f49a69b36dcf11f3e9f.js"></script>
        <script src="static.prdg.io/dist-non-modules/content/shared/sbxIovations-loader.5f4be45273e39bcc59e6.js"></script>
        <meta name="title" content="Easymedia: Coupons, Paid Online Surveys & Free Gift Cards">
        <meta name="description" content="Save money with coupons, promo codes, sales and cashback when you shop for clothes, electronics, travel, groceries, gifts & homeware. Get free gift cards and cash for taking paid online surveys and free trial offers. Join for free now!">
        <script src="static.prdg.io/dist-non-modules/content/shared/sbglobals.75e9c5e76a91dfe5e99f.js"></script>
        <link rel="search" href="static.prdg.io/dist-non-modules/content/open-search/open-search-chrome.cbb6a7acf953589cb993.xml" type="application/opensearchdescription+xml" title="Easymedia search and get rewarded">
        <script src="static.prdg.io/dist-non-modules/content/shared/jquery-1.6.4.min.310d26371f84ccea90a1.js"></script>
        <script src="static.prdg.io/dist-non-modules/content/shared/localize-loader.5c6a8a2c0232e9cbb336.js" id="localizeScript" data-testing="false" data-src="static.prdg.io/dist-non-modules/content/shared/localize.1fdb88736d80e367d0aa.js" data-bits="{&#34;de&#34;:2,&#34;no&#34;:32768,&#34;ru&#34;:64,&#34;sv&#34;:65536,&#34;pt&#34;:524288,&#34;ko&#34;:262144,&#34;el&#34;:8192,&#34;en&#34;:1,&#34;it&#34;:32,&#34;fr&#34;:128,&#34;es&#34;:1048576,&#34;zh&#34;:256,&#34;ar&#34;:512,&#34;ja&#34;:131072,&#34;pl&#34;:1024,&#34;da&#34;:4096,&#34;tr&#34;:2048,&#34;nl&#34;:16384}" data-language-code="en" data-ysense="false" data-key="MldiexN2caLe9" data-languages="{&#34;de&#34;:&#34;Deutsch&#34;,&#34;no&#34;:&#34;norsk&#34;,&#34;ru&#34;:&#34;русский&#34;,&#34;sv&#34;:&#34;svenska&#34;,&#34;pt&#34;:&#34;Português (Brasil)&#34;,&#34;ko&#34;:&#34;한국어&#34;,&#34;el&#34;:&#34;Ελληνικά&#34;,&#34;en&#34;:&#34;English&#34;,&#34;it&#34;:&#34;Italiano&#34;,&#34;fr&#34;:&#34;Français (Canada)&#34;,&#34;es&#34;:&#34;Español (México)&#34;,&#34;zh&#34;:&#34;中文&#34;,&#34;ar&#34;:&#34;العربية&#34;,&#34;ja&#34;:&#34;日本語&#34;,&#34;pl&#34;:&#34;Język polski&#34;,&#34;da&#34;:&#34;dansk&#34;,&#34;tr&#34;:&#34;Türkçe&#34;,&#34;nl&#34;:&#34;Nederlands&#34;}"></script>
        <meta charset="UTF-8">
        <title>EasyMedia: Coupons, Paid Online Surveys &Free Gift Cards</title>
        <meta name="keywords" content="Earn Reward Points and Redeem Them For Free Gift Cards at Easymedia.com">
        <link rel="canonical" href="https://www.Easymedia.com/">
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
        <script crossorigin="anonymous" src="//polyfill.io/v3/polyfill.min.js?flags=gated&features=default,DocumentFragment.prototype.append,Object.assign,Element.prototype.append,~html5-elements,IntersectionObserver,ResizeObserver,Intl.~locale.en,Intl.PluralRules,Intl.DateTimeFormat,Intl.NumberFormat"></script>
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
        <meta name="twitter:site" content="@Easymedia">
        <meta property="og:description" content="Shop, Watch Videos, Discover Deals, and more to earn FREE gift cards from your favorite retailers - get started today.">
        <meta property="og:title" content="Put cash back in your wallet with Easymedia!">
        <meta property="og:image" content="static.prdg.io/dist-non-modules/content/home-6/images/facebookog.42a0aef27e670f3f384a.png">
        <meta property="og:image:secure_url" content="static.prdg.io/dist-non-modules/content/home-6/images/facebookog.42a0aef27e670f3f384a.png">
        <meta property="og:image:width" content="1200">
        <meta property="og:image:height" content="630">
        <link rel="stylesheet" href="static.prdg.io/dist-non-modules/content/home-6/css/include-registration-form.d7fe3e5f0b8ba4821c85.css"/>
        <script src="static.prdg.io/dist-non-modules/content/components/social/social.771dbb0adf9bb24c6b99.js" defer="defer" data-fb-app-id="138664736214483"></script>
        <script src="static.prdg.io/dist-non-modules/content/components/signup-form/google-signin.57fccc28fb026cae917f.js" defer="defer" data-google-client-id="788821587590-77vn3q4ibvphcm0spgrp2gs7jajcq8bd.apps.googleusercontent.com"></script>
        <link rel="stylesheet" href="static.prdg.io/dist-non-modules/content/shared/css/generic-v3.9b2fedc1d7ef1838c325.css"/>
        <link rel="stylesheet" href="static.prdg.io/dist-non-modules/content/components/header/top-bar/top-bar.4fcdfd73efb3980d918f.css"/>
        <script src="static.prdg.io/dist-non-modules/content/global-includes/js/helpers-new.151e9ccb5c4cfae0e3bc.js"></script>
        <script src="static.prdg.io/dist-non-modules/content/skin-02/js/top-functions-v2.de7eb06bda3fe88bef5e.js"></script>
        <link rel="stylesheet" href="static.prdg.io/dist-non-modules/header.a49f3b59cb8b091c2228.css"/>
        <link rel="stylesheet" href="static.prdg.io/dist-non-modules/content/components/header/responsive-header-v2.5ccd5e97dd1ff917de09.css"/>
        <link rel="stylesheet" href="static.prdg.io/dist-non-modules/content/components/header/top-bar/jquery-plugins.37a081e16b4a18f9031a.css"/>
        <script src="static.prdg.io/dist-non-modules/content/components/header/top-bar/jquery-plugins.06aa462fcaee532d8433.js"></script>
        <script src="static.prdg.io/dist-non-modules/content/components/header/top-bar/mini-reg.1fa82cf337a84a50e84c.js"></script>
        <link rel="stylesheet" href="static.prdg.io/dist-non-modules/content/components/header/top-bar/mini-reg.29bf58874790a07110e1.css"/>
        <script src="static.prdg.io/dist-non-modules/content/components/banner/banner-v2.3377fbfdf01106a390d6.js" data-css-src="static.prdg.io/dist-non-modules/content/components/banner/banner-v2.4e1f9e366219e5cfbded.css"></script>
        <script src="static.prdg.io/dist-non-modules/content/components/header/top-bar/top-bar.5accbdbcc775fc3b460d.js"></script>
        <script src="static.prdg.io/dist-non-modules/content/components/header/top-bar/search.204e2199cc01f1509832.js"></script>
        <script src="static.prdg.io/dist-non-modules/content/components/header/top-bar/menus.0d8f3da7f8426c710521.js"></script>
        <script src="static.prdg.io/dist-non-modules/content/shared/jquery.tmpl.49b33d8b10460c2c5988.js"></script>
        <link rel="stylesheet" href="static.prdg.io/dist-non-modules/content/home-6/css/templateDefault-v2.7ff65ffaf6d3b4117cb5.css"/>
        <script src="static.prdg.io/dist-non-modules/vendor.402045020487a4edd587.js"></script>
        <script src="static.prdg.io/dist-non-modules/header-logged-out.982740785a1c8b43075c.js"></script>
        <link rel="stylesheet" href="static.prdg.io/dist-non-modules/signup-consent.12db33d56497d6022de8.css"/>
        <script src="static.prdg.io/dist-non-modules/signup-consent.f2ffce7402f5cfb5eeb1.js" defer="defer"></script>
        <link rel="stylesheet" href="static.prdg.io/dist-non-modules/content/components/social/google/google-button.576cafd30722c373813f.css"/>
        <!-- <div id="googleButtonWrapper" class="googleButtonIsLoading" data-id="SignUp" data-title="Sign up with Google"></div> -->
        <script type="text/javascript" src="https://appleid.cdn-apple.com/appleauth/static/jsapi/appleid/1/en_US/appleid.auth.js" defer></script>
        <link rel="stylesheet" href="static.prdg.io/dist-non-modules/apple-signin.031f6e4ddb297e3e69d9.css"/>
        <div id="appleid-signin" data-type="sign-up" data-width="100%" data-height="100%" data-mode="center-align" data-color="white" data-border="true" data-border-radius="4"></div>
        <script src="static.prdg.io/dist-non-modules/apple-signin.9cde1ee72fd88f574168.js" defer="defer"></script>
        <script src="static.prdg.io/dist-non-modules/content/shared/sbxIovations.5f49a69b36dcf11f3e9f.js"></script>
        <script src="static.prdg.io/dist-non-modules/content/shared/sbxIovations-loader.5f4be45273e39bcc59e6.js"></script>
        <script>
            sbGlbl.showConfirmPassword = true;
        </script>
        <script src="static.prdg.io/dist-non-modules/content/components/signup-form/signup-form.36843addcf7821f68976.js"></script>
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
                                    <span class="sbVisuallyHidden">Easymedia
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
                                            <input id="sbxJxRegEmail" type="text" name="email" placeholder="Email Address" value="" required>
                                            <span class="vline"></span>
                                        </div>
                                        <div class="sbRegFormInputWrap pass">
                                            <label for="sbxJxRegPswd" class="sbVisuallyHidden">Password</label>
                                            <input id="sbxJxRegPswd" type="password" name="password" placeholder="Password" required>
                                            <span class="vline"></span>
                                        </div>
                                        <div class="sbRegFormInputWrap pass">
                                            <label for="sbxJxRegEmailConfirm" class="sbVisuallyHidden">Confirm Password</label>
                                            <input id="sbxJxRegEmailConfirm" type="password" required placeholder="Confirm Password">
                                            <span class="vline"></span>
                                        </div>
                                        <div id="signUpCodeLine">
                                            <button id="signUpCodeText" type="button">
                                                I have a sign up code (<em>optional</em>
                                                )
					
                                            
                                            </button>
                                            <label for="signUpCodeInput" class="sbVisuallyHidden">Enter sign up code</label>
                                            <input id="signUpCodeInput" type="text" placeholder="Enter sign up code">
                                        </div>
                                        <div id="signupLegalConsentOuterWrapper"></div>
                                        <button type="submit" id="sbxJxRegBtnSubmit" name="done" class="signupLegalConsentSubmit sbCta">Join Now</button>
                                        <span id="sbRegFormOptionDivider">or</span>
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
                            <img src="static.prdg.io/dist-non-modules/content/home-6/images/logged-out/logos/logo-buzzfeed.243a3e2818a4ecfae366.svg" alt="Buzzfeed" loading="lazy">
                            <img src="static.prdg.io/dist-non-modules/content/home-6/images/logged-out/logos/logo-save-the-student.88a6b5054b02bfee567d.svg" alt="Save The Student" loading="lazy">
                            <img src="static.prdg.io/dist-non-modules/content/home-6/images/logged-out/logos/logo-the-penny-hoarder.29d9fdda65d83c2fbe6d.svg" alt="The Penny Hoarder" loading="lazy">
                            <img src="static.prdg.io/dist-non-modules/content/home-6/images/logged-out/logos/logo-abc.52f65d3490803800e2bc.svg" alt="abc" loading="lazy">
                            <img src="static.prdg.io/dist-non-modules/content/home-6/images/logged-out/logos/logo-huffington-post.7d592bebb55fc187a24b.svg" id="huffpost" alt="Huffington Post" loading="lazy">
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
                <span class="flipCounterDigit">8</span>
            </span>
            ,
            
            <span class="flipCounterFrame">
                <span class="flipCounterDigit">8</span>
            </span>
            <span class="flipCounterFrame">
                <span class="flipCounterDigit">7</span>
            </span>
            <span class="flipCounterFrame">
                <span class="flipCounterDigit">6</span>
            </span>
            ,
            
            <span class="flipCounterFrame">
                <span class="flipCounterDigit">7</span>
            </span>
            <span class="flipCounterFrame">
                <span class="flipCounterDigit">8</span>
            </span>
            <span class="flipCounterFrame">
                <span class="flipCounterDigit">8</span>
            </span>
        </div>
    </div>
</section>
<section id="lpContentTestimonials">
    <div class="iconTestimonial" id="testimonialA">
        <p class="testimonial">
            &ldquo;My most rewarding moment with Easymedia is using the gift cards I earn to buy gifts for my child &#39;s Christmas and February birthday.&rdquo;
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
    <button id="lpContentSignUpCta" class="sbCta">Join Now</button>
</section>
</main>
<?php
include ('footer.php');
?>
<script src="static.prdg.io/dist-non-modules/content/home-6/js/templateDefault.33cbed1c69217a446652.js"></script>
<script>
    var welcomeVid = "www.youtube.com/embed/igvuxUELCQg?rel=0&autoplay=1&wmode=opaque";
</script>
<div id="homeSignUpVidPop">
    <span class="sbPopClose" onclick="sbGlbl.sbGw.closeSignUpPop();"></span>
    <iframe src="" allowfullscreen></iframe>
</div>
<script src="static.prdg.io/dist-non-modules/content/home-6/js/logged-out-home.3a611ade4ac6dbbe501f.js"></script>
<link rel="stylesheet" href="static.prdg.io/dist-non-modules/content/components/footer/footer.7219cbbc39a1d231c848.css"/>

<script src="static.prdg.io/dist-non-modules/content/shared/jquery.isonscreen.7b851814bd6af500d8f9.js"></script>
<script src="static.prdg.io/dist-non-modules/content/components/footer/footer.b6e45277a533caadfd71.js"></script>
<script>
    $('.glblErrortip').addClass('SEErrortip');
</script>
<script src="static.prdg.io/dist-non-modules/accessibility-widget.9fd7e401530c3e46da38.js" defer="defer"></script>
</body></html>
