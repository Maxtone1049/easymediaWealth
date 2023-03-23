<?php
session_start();
error_reporting(0);
include('includes/dbconnect.php');

if (isset($_POST['action'])) {
    $Email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT ID FROM users WHERE email=:email and password=:password";
    $query = $dbh->prepare($sql);
    $query->bindParam(':email', $Email, PDO::PARAM_STR);
    $query->bindParam(':password', $password, PDO::PARAM_STR);
    $query->execute();
    $results = $query->fetchAll(PDO::FETCH_OBJ);
    if ($query->rowCount() > 0) {
        foreach ($results as $result) {
            $_SESSION['obcsuid'] = $result->ID;
        }

        $_SESSION['login'] = $_POST['Email'];
        echo "<script type='text/javascript'> document.location ='account/.'; </script>";
    } else {
        $msg = '<div style="margin-top:10px;background:red; color:white;font-size:15px;width:100%;font-weight:800;border-radius:15px;padding:15px;">Incorrect Username or Password</div>';
    }
}

?>

<!DOCTYPE html>
<html id="html" class="isNotExternal" lang="en">
<head>
    <meta charset="utf-8">
    <title>Login | EasymediaWealth</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="title" content="Login | EasymediaWealth">
    <meta name="description" content="Earn rewards and free stuff by searching and shopping online, answering surveys, and more, a customer loyalty rewards program. Be rewarded today.">
    <meta name="keywords" content="Earn Reward Points and Redeem Them For Free Stuff">
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
    <link rel="stylesheet" href="static.prdg.io/dist-non-modules/content/components/font/font.0e7d3d116854f6603774.css" />
    <script src="https://cdn.cookielaw.org/consent/e3b98144-e9b8-4fab-9a3a-3a12894bed0b/OtAutoBlock.js"></script>
    <script src="https://cdn.cookielaw.org/scripttemplates/otSDKStub.js" charset="UTF-8" data-domain-script="e3b98144-e9b8-4fab-9a3a-3a12894bed0b"></script>
    <script>
        function OptanonWrapper() {}
    </script>
    <script crossorigin="anonymous" src="//polyfill.io/v3/polyfill.min.js?flags=gated&features=default,DocumentFragment.prototype.append,Object.assign,Element.prototype.append,~html5-elements,IntersectionObserver,ResizeObserver,Intl.~locale.en,Intl.PluralRules,Intl.DateTimeFormat,Intl.NumberFormat"></script>
    <link rel="stylesheet" href="static.prdg.io/dist-non-modules/login-landing-page.96241e34c36d4fd0b990.css" />
    <link rel="stylesheet" href="static.prdg.io/dist-non-modules/content/shared/css/generic-v3.9b2fedc1d7ef1838c325.css" />
    <script src="static.prdg.io/dist-non-modules/content/shared/jquery-1.6.4.min.310d26371f84ccea90a1.js"></script>
    <script src="static.prdg.io/dist-non-modules/content/home-6/js/login-landing-page.f3aa1db635901ed7ff8b.js"></script>
    <link rel="stylesheet" href="static.prdg.io/dist-non-modules/content/global-includes/css/sbPop.4a37cd58fd4d8f8c36f9.css" />
    <script src="static.prdg.io/dist-non-modules/content/shared/localize-loader.5c6a8a2c0232e9cbb336.js" id="localizeScript" data-testing="false" data-src="static.prdg.io/dist-non-modules/content/shared/localize.1fdb88736d80e367d0aa.js" data-bits="{&#34;de&#34;:2,&#34;no&#34;:32768,&#34;ru&#34;:64,&#34;sv&#34;:65536,&#34;pt&#34;:524288,&#34;ko&#34;:262144,&#34;el&#34;:8192,&#34;en&#34;:1,&#34;it&#34;:32,&#34;fr&#34;:128,&#34;es&#34;:1048576,&#34;zh&#34;:256,&#34;ar&#34;:512,&#34;ja&#34;:131072,&#34;pl&#34;:1024,&#34;da&#34;:4096,&#34;tr&#34;:2048,&#34;nl&#34;:16384}" data-language-code="en" data-ysense="false" data-key="MldiexN2caLe9" data-languages="{&#34;de&#34;:&#34;Deutsch&#34;,&#34;no&#34;:&#34;norsk&#34;,&#34;ru&#34;:&#34;русский&#34;,&#34;sv&#34;:&#34;svenska&#34;,&#34;pt&#34;:&#34;Português (Brasil)&#34;,&#34;ko&#34;:&#34;한국어&#34;,&#34;el&#34;:&#34;Ελληνικά&#34;,&#34;en&#34;:&#34;English&#34;,&#34;it&#34;:&#34;Italiano&#34;,&#34;fr&#34;:&#34;Français (Canada)&#34;,&#34;es&#34;:&#34;Español (México)&#34;,&#34;zh&#34;:&#34;中文&#34;,&#34;ar&#34;:&#34;العربية&#34;,&#34;ja&#34;:&#34;日本語&#34;,&#34;pl&#34;:&#34;Język polski&#34;,&#34;da&#34;:&#34;dansk&#34;,&#34;tr&#34;:&#34;Türkçe&#34;,&#34;nl&#34;:&#34;Nederlands&#34;}"></script>
    <script src="https://accounts.google.com/gsi/client" defer></script>
</head>

<body class="lpLogin">
   <script src="static.prdg.io/dist-non-modules/content/components/social/social.771dbb0adf9bb24c6b99.js" defer="defer" data-fb-app-id="138664736214483"></script>
    <script src="static.prdg.io/dist-non-modules/content/components/signup-form/google-signin.57fccc28fb026cae917f.js" defer="defer" data-google-client-id="788821587590-77vn3q4ibvphcm0spgrp2gs7jajcq8bd.apps.googleusercontent.com"></script>
    <section id="sbGlobalNav"></section>
    <script src="static.prdg.io/dist-non-modules/content/components/banner/banner-v2.3377fbfdf01106a390d6.js" data-css-src="static.prdg.io/dist-non-modules/content/components/banner/banner-v2.4e1f9e366219e5cfbded.css"></script>
    <div id="lpContentOuterWrap">
        <div id="lpContentWrap">
            <div id="lpContentPromoArea">
                <link rel="stylesheet" href="static.prdg.io/dist-non-modules/content/home-6/css/login-page-promo-20150930-hundredmil.357877c6089b025d547c.css" />
                <div id="lpContentBrag">
                    <span class="lpContentBragCopy">We &rsquo;ve given back</span>
                    <link rel="stylesheet" href="static.prdg.io/dist-non-modules/content/home-6/css/include-rewards-flipcounter.fe8dc1edd9c96230324f.css" />
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
                    <span class="lpContentBragCopy">
                        <em>Put cash back in your wallet!</em>
                    </span>
                </div>
                <script src="static.prdg.io/dist-non-modules/content/home-6/js/login-landing-left.5d6a5480b79cbe7df841.js"></script>
            </div>
            <div class="loginFormWrapper">
                <div id="divErLandingPage" class="divErLandingPage"></div>
                <section class="loginFormSection">
                    <div class="loginHeaderWrapper">
                        <div class="loginHeader">
                            <div class="loginHeaderContent">
                                <a class="loginHomePageLink" href="." aria-label="EasymediaWealth"></a>
                                <h2 class="loginHeaderTitle">Login</h2>
                            </div>
                            <svg width="0" height="0">
                                <defs>
                                    <clipPath id="loginHeaderClip" clipPathUnits="objectBoundingBox">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M 0 0 H 1 V 0.8363 C 1 0.8363 0.7536 0.9985 0.5 0.9985 C 0.2464 0.9985 0 0.8363 0 0.8363 V 0 Z" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                    </div>
                    <form id="loginForm" method="post" action="">
                        <div id="inputFieldsContainer">
                            <label class="inputFieldWrapper emailInputWrapper">
                                <input id="sbxJxRegEmail" class="inputField" name="email" placeholder="Email" autocomplete="username" autofocus required>
                                <span class="inputPlaceholder">Email
                                </span>
                            </label>
                            <label class="inputFieldWrapper passwordInputWrapper">
                                <input id="sbxJxRegPswd" class="inputField" type="password" name="password" placeholder="Password" autocomplete="current-password" required>
                                <span class="inputPlaceholder">Password
                                </span>
                            </label>
                            <p id="loginErrorMessage"></p>
                        </div>
                        <div class="loginFormActions">
                            <div class="rememberMeCheckbox">
                                <input id="signUpRememberMe" type="checkbox" name="persist" checked="checked" value="on">
                                <label class="rememberMeLabel" for="signUpRememberMe">Remember me
                                </label>
                            </div>
                            <button id="glblWelcomeForgotPassword" class="forgotPasswordButton" type="button">Forgot password?
                            </button>
                            <p class="reaffirmationContainer">
                                By clicking Sign in, I agree to the
                                <a href="#" class="agreementLink" target="_blank" rel="noopener">Terms of Use</a>
                                and
                                <a href="#" class="agreementLink" target="_blank" rel="noopener">Privacy Policy</a>
                                .
                            </p>
                            <button id="loginBtn" class="loginSubmitButton" name="action">Sign in</button>
                            <?php if ($msg) {
                                echo $msg;
                            }  ?>
                        </div>
                        <div id="sbLoginCaptcha"></div>
                    </form>
                    <a class="signUpLink" href="register">
                        Not a member?
                        <span class="signUpLinkHighlighted">Join today
                        </span>
                    </a>
                </section>
                <p class="disclaimerCopy">*Cash Back rewards are paid in the form of SB points good for popular gift cards or PayPal cash
                </p>
            </div>
        </div>

        <script src="static.prdg.io/dist-non-modules/vendor.402045020487a4edd587.js"></script>
        <script src="static.prdg.io/dist-non-modules/content/global-includes/js/helpers-new.151e9ccb5c4cfae0e3bc.js"></script>
        <script src="static.prdg.io/dist-non-modules/content/skin-02/js/top-functions-v2.de7eb06bda3fe88bef5e.js"></script>
        <script src="static.prdg.io/dist-non-modules/login-landing-page.478956ab0340ec9da66f.js"></script>
        <script src="static.prdg.io/dist-non-modules/content/global-includes/js/jquery-plugins.0c792b60ab9856806f26.js"></script>
        <script src="static.prdg.io/dist-non-modules/content/top-bar/js/top-bar.03825e3ebd17f5094ab6.js"></script>
        <script src="static.prdg.io/dist-non-modules/content/global-styles/js/pop-functions.a7d2a7fabb9fb7178351.js"></script>
        <script src="static.prdg.io/dist-non-modules/content/top-bar/js/mini-reg.68fc3431b436aba23ba6.js"></script>
        <link rel="stylesheet" href="static.prdg.io/dist-non-modules/content/components/footer/footer.7219cbbc39a1d231c848.css" />
        <script src="static.prdg.io/dist-non-modules/content/shared/jquery.isonscreen.7b851814bd6af500d8f9.js"></script>
        <script src="static.prdg.io/dist-non-modules/content/components/footer/footer.b6e45277a533caadfd71.js"></script>
      <script src="https://www.google.com/recaptcha/enterprise.js?onload=initRecaptcha&render=explicit" async defer></script>
    </div>
    <script src="static.prdg.io/dist-non-modules/accessibility-widget.9fd7e401530c3e46da38.js" defer="defer"></script>
</body>

</html>