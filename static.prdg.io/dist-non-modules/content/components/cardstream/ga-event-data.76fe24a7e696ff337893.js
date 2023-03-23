if(void 0===sbCards)var sbCards={};sbCards.cardProps={cardDeckSelector:"cardDeck",traySelector:"sbTray",trayTitleLinkClass:"sbTrayTitleLink",rewardsCardClass:"sbRewardsCardGoToCta"},sbCards.getCardDeck=sbCards.getCardDeck||function(){return sbCards.$cardDeck?sbCards.$cardDeck:sbCards.$cardDeck=$("#"+sbCards.cardProps.cardDeckSelector)},sbCards.formatTrayTitle=function(e){"use strict";var a="",r=sbCards.objTrays;switch(e){case r.popularHomepage:case r.popular:a="Most Popular Offers";break;case r.discover:a="Discover";break;case r.answer:a="Answer";break;case r.play:a="Play";break;case r.nCrave:a="NCrave";break;case r.featured:case r.featuredSpecialOffers:a="Featured Offers";break;case r.shop:case r.shopDiscover:a="Shop";break;case r.partners:a="Trusted Partners Offers";break;case r.recent:a="Most Recent Offers";break;case r.signUp:a="Sign Ups";break;case r.donate:a="Donate to Charity";break;case r.freeOffers:a="Free Offers";break;case r.mobileApps:a="Mobile Apps";break;case r.watch:a="Watch Videos";break;case r.exploreHomepage:case r.explore:a="Explore Content";break;case r.allDiscoverOffers:a="All Offers";break;case r.watchOffers:a="Sponsored Videos";break;case r.featuredStores:a="Featured Stores";break;case r.popularStores:a="Popular Stores";break;case r.coupons:a="Featured Coupons";break;case r.favorites:a="Favorite Stores";break;case r.addedStores:a="Recently Added Stores";break;case r.editorsPick:a="Editors Pick";break;case r.news:a="News and Politics";break;case r.fashion:a="Fashion";break;case r.food:a="Food";break;case r.sports:a="Sports";break;case r.tvFilms:a="TV and Film";break;case r.popularGames:a="Popular Games";break;case r.recentGames:a="Recent Games";break;case r.casinoGames:a="Casino Games";break;case r.swagbucksGames:a="Swagbucks Games";break;case r.featuredGames:a="Featured Promotions";break;case r.mostPopularRewards:a="Most Popular Rewards";break;case r.charityDonations:a="Charity Donations";break;case r.giftCardsICanAfford:a="Rewards You Can Afford";break;case r.onSaleRewards:a="On Sale Rewards"}return a},sbCards.trackGaDataForCardClicks=function(e,a,r){var s=sbCards.getPageDataForGaTracking(),t=s.gaCategoryName,o=!1;if(s.isEligibleForGaTracking){var i,d,n=$(r.target),c="",l={};if(c=n.hasClass("hoverDetailsHeaderMainCta")?"Hover Button":a.hasClass("hoverDetailsVideoContainer")?"Hover Video":n.hasClass("searchCardCta")?"Direct Button":"Direct Card",s.isSearchPage)void 0===e.pos&&(e=e[0]),i=s.gaLabelName,"Direct Card"==c&&(o=!0);else{d=e.trayId;var b=e.link;i=sbCards.formatTrayTitle(d),o="string"==typeof b&&"/"===b.charAt(0),s.isCategoryPage?(l.internalId=initialCardLoad.streamID,l.title=initialCardLoad.title):l=sbCards.getTrayProperties(d)}var C=l.title;sbHelpers.trackData({eventCategory:t,eventAction:"Card Click",eventLabel:d?d.toString():C||i,dimension23:o?"Internal":"External",dimension24:void 0!==l.internalId?l.internalId.toString():"1",dimension25:void 0!==e.pos?e.pos.toString():"",dimension26:void 0!==e.realCardId?e.realCardId.toString():void 0!==e.cardId?e.cardId.toString():"",dimension27:c})}},sbCards.seenTrays=[],sbCards.IntersectionObserverCallback=function(e){for(var a=0,r=e.length;a<r;a++){var s=e[a],t=$(s.target),o=sbCards.getPageDataForGaTracking(),i={},d=t.attr("id");if(d!==sbCards.cardProps.traySelector+"Spotlight"&&"hidden"!==t.css("visibility")){var n=parseInt(d.replace(sbCards.cardProps.traySelector,""));if(isNaN(n)&&(n=initialCardLoad.streamID),!sbCards.seenTrays.includes(n)&&s.intersectionRatio){var c=sbCards.formatTrayTitle(n),l=t.data("gaParameters");sbCards.seenTrays.push(n),o.isCategoryPage||(i=sbCards.getTrayProperties(n));var b=t.find("."+sbCards.cardProps.trayTitleLinkClass).html();sbHelpers.trackData({eventCategory:l.eventCategory,eventAction:l.eventAction,eventLabel:n?n.toString():b||c,nonInteraction:!0,dimension24:void 0!==i.internalId?i.internalId.toString():"1"})}}}},sbCards.SearchResultsIntersectionObserverCallback=function(e){for(var a=0,r=e.length;a<r;a++){var s=e[a],t=$(s.target),o=t.attr("id");if(!sbCards.seenTrays.includes(o)&&s.intersectionRatio){var i=t.data("gaParameters");sbCards.seenTrays.push(o),sbHelpers.trackData({eventCategory:i.eventCategory,eventAction:i.eventAction,eventLabel:i.eventLabel,nonInteraction:!0,dimension24:"1"})}}},sbCards.objTrackingCategories={home:"Homepage Modules",discoverCategory:"Discover Category Modules",discoverHome:"Discover HP Modules",shopHome:"Shop HP Modules",watchHome:"Watch HP Modules",playHome:"Play HP Modules",search:"Search Results Modules",rewardsHome:"Rewards Store HP Modules"},sbCards.objSearchTrackingLabels={web:"Web Search Results",shop:"Shop Search Results",shopCoupons:"Shop Coupons Search Results",rewards:"Rewards Search Results",swagstakes:"Swagstakes Search Results"},sbCards.getPageDataForGaTracking=function(){var e={isEligibleForGaTracking:!0},a=sbPage.strChannelName,r=sbPage.strName,s=sbPage.strCategoryName,t=sbCards.objTrackingCategories,o=sbCards.objSearchTrackingLabels;return sbGlbl.isHome?e.gaCategoryName=t.home:"discover"==a?void 0!==r&&"category"==r?(e.gaCategoryName=t.discoverCategory,e.isCategoryPage=!0):sbCards.trayMobileViewV2Possible?(e.isCategoryPage=!0,e.gaCategoryName=t.discoverCategory):e.gaCategoryName=t.discoverHome:"rewards"==a&&void 0!==r?"category"==r?void 0!==s&&"search"==s?(e.gaCategoryName=t.search,e.isSearchPage=!0,e.gaLabelName=o.rewards):e.isEligibleForGaTracking=!1:"home"==r&&(e.gaCategoryName=t.rewardsHome):void 0!==r&&"home"==r?"shop"==a?e.gaCategoryName=t.shopHome:"watch"==a?e.gaCategoryName=t.watchHome:"play"==a&&(e.gaCategoryName=t.playHome):void 0!==r&&"search"==r?(e.gaCategoryName=t.search,e.isSearchPage=!0,"search"==a?e.gaLabelName=o.web:"swagstakes"==a?e.gaLabelName=o.swagstakes:"shop"==a&&(e.gaLabelName=o.shop)):e.isEligibleForGaTracking=!1,e},sbCards.observeTargetElement=function(e,a,r){null!==a&&($(a).data("gaParameters",r),e.observe(a))},sbCards.trackSearchCardsClicks=function(e,a){var r=document.getElementsByClassName(a);if(void 0!==r&&r.length>0)for(var s=0,t=r.length;s<t;s++)r[s].addEventListener("click",(function(r){var s=sbCards.getSearchCardData(e,a,this);sbCards.trackGaDataForCardClicks(s,$(this),r)}))},sbCards.getSearchCardData=function(e,a,r){var s=$("#"+e).children("."+a).index($(r))+1,t=r.parentNode.dataset.id;return{pos:0!==s?s:"",cardId:void 0!==t?t:r.dataset.id}},document.addEventListener("DOMContentLoaded",(function(){var e=sbCards.getPageDataForGaTracking(),a=e.gaCategoryName,r=e.gaLabelName;if(e.isEligibleForGaTracking){var s,t=sbCards.getCardDeck().find("."+sbCards.cardProps.traySelector).filter(":visible"),o=new IntersectionObserver(sbCards.IntersectionObserverCallback,{threshold:.35}),i={eventCategory:a,eventAction:"Module Impression",eventLabel:r},d=sbPage.strChannelName;if(t.length>0){for(var n=0,c=t.length;n<c;n++){var l=t[n];sbCards.observeTargetElement(o,l,i)}return}if(e.isCategoryPage)s=sbCards.getCardDeck()[0];else if(e.isSearchPage){if(o=new IntersectionObserver(sbCards.SearchResultsIntersectionObserverCallback,{threshold:.35}),sbPage.hasShopSearchCoupons){s=document.getElementById("sbShopSearchCoupons");var b={eventCategory:a,eventAction:"Module Impression",eventLabel:sbCards.objSearchTrackingLabels.shopCoupons};sbCards.observeTargetElement(o,s,b)}"search"==d?s=document.getElementById("sbResultsList"):"shop"==d?s=document.getElementById("sbShopSearchStores"):"rewards"==d?(sbGlbl.isListView?sbCards.trackSearchCardsClicks("sbRewardsList","sbRewardListItemLink"):sbCards.trackSearchCardsClicks("sbRewardsCards",sbCards.cardProps.rewardsCardClass),s=document.getElementById("main")):"swagstakes"==d&&(sbCards.trackSearchCardsClicks("main","sbSwagstakesCardGoToCta"),s=document.getElementById("main"))}sbCards.observeTargetElement(o,s,i)}}));