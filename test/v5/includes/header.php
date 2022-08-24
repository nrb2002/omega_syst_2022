<?php require 'functions.php';
//Importer le fichier des fonctions pour qu'il soit pris en compte dans toutes les pages du site-->

//Importer la vérification de session active avant de donner accès à la page
//require_once 'session-auth.php';

?>

<!doctype html>
<html lang="en">
<!--  <head-->
    
    <head itemscope itemtype="https://schema.org/WebSite">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.101.0">
        <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
        <meta property="og:locale" content="fr_FR" />
        <meta property="og:type" content="website" />
        
        <meta property="og:url" content="https://omegasystem.biz/" />
        <meta property="og:site_name" content="OMEGA System" />
        <meta property="article:modified_time" content="2022-06-02T20:35:28+00:00" />
        <meta property="og:image" content="https://i0.wp.com/omegasystem.biz/wp-content/uploads/2022/05/Logo-Omega-1.jpeg?fit=484%2C438&ssl=1" />
        <meta property="og:image:width" content="484" />
        <meta property="og:image:height" content="438" />
        <meta property="og:image:type" content="image/jpeg" />
        <meta name="twitter:card" content="summary_large_image" />
        
        <!-- Je charge mon propre css -->
        <link href="../assets/css/app.css" rel="stylesheet">
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="canonical" href="https://omegasystem.biz/" />


        <link rel='dns-prefetch' href='//fonts.googleapis.com' />
        <link rel='dns-prefetch' href='//s.w.org' />
        <link rel='dns-prefetch' href='//i0.wp.com' />
        <link rel="alternate" type="application/rss+xml" title="OMEGA System &raquo; Flux" href="https://omegasystem.biz/feed/" />
        <link rel="alternate" type="application/rss+xml" title="OMEGA System &raquo; Flux des commentaires" href="https://omegasystem.biz/comments/feed/" />
                
        
        <!-- This site is optimized with the Yoast SEO plugin v19.5.1 - https://yoast.com/wordpress/plugins/seo/ -->
	    
        
        
        

        <!-- Favicons 
        <link rel="apple-touch-icon" href="/docs/5.2/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
        <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
        <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
        <link rel="manifest" href="/docs/5.2/assets/img/favicons/manifest.json">
        <link rel="mask-icon" href="/docs/5.2/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
        <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon.ico">
        <meta name="theme-color" content="#712cf9">
-->
        <script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=__bNpe8DSvpsvePPxx6uN2_gS1njf29xc1on_tUMOGYYdWtfZOMJa7UWEqWdhSj5B2OXibclpNECbnrsfAQfwqMgJ1xr1HvkPjGCb_DBqmE" charset="UTF-8"></script><link rel="stylesheet" crossorigin="anonymous" href="https://gc.kis.v2.scr.kaspersky-labs.com/E3E8934C-235A-4B0E-825A-35A08381A191/abn/main.css?attr=aHR0cHM6Ly9nZXRib290c3RyYXAuY29tL2RvY3MvNS4yL2V4YW1wbGVzL2hlYWRlcnMv"/>        
        <script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=HHcbcpM2A6zub-eRgQMjvYKwyVtW7GTDNosOXiwPVDqXh8SY1YtfxuxsGvjU6eID" charset="UTF-8"></script><link rel="stylesheet" crossorigin="anonymous" href="https://gc.kis.v2.scr.kaspersky-labs.com/E3E8934C-235A-4B0E-825A-35A08381A191/abn/main.css?attr=aHR0cHM6Ly9vbWVnYXN5c3RlbS5iaXov"/>
	    <script type="application/ld+json" class="yoast-schema-graph">{"@context":"https://schema.org","@graph":[{"@type":"WebPage","@id":"https://omegasystem.biz/","url":"https://omegasystem.biz/","name":"Accueil - OMEGA System","isPartOf":{"@id":"http://box5397.temp.domains/~omegasys/#website"},"primaryImageOfPage":{"@id":"https://omegasystem.biz/#primaryimage"},"image":{"@id":"https://omegasystem.biz/#primaryimage"},"thumbnailUrl":"https://i0.wp.com/omegasystem.biz/wp-content/uploads/2022/05/Logo-Omega-1.jpeg?fit=484%2C438&ssl=1","datePublished":"2022-05-31T19:04:46+00:00","dateModified":"2022-06-02T20:35:28+00:00","breadcrumb":{"@id":"https://omegasystem.biz/#breadcrumb"},"inLanguage":"fr-FR","potentialAction":[{"@type":"ReadAction","target":["https://omegasystem.biz/"]}]},{"@type":"ImageObject","inLanguage":"fr-FR","@id":"https://omegasystem.biz/#primaryimage","url":"https://i0.wp.com/omegasystem.biz/wp-content/uploads/2022/05/Logo-Omega-1.jpeg?fit=484%2C438&ssl=1","contentUrl":"https://i0.wp.com/omegasystem.biz/wp-content/uploads/2022/05/Logo-Omega-1.jpeg?fit=484%2C438&ssl=1","width":484,"height":438},{"@type":"BreadcrumbList","@id":"https://omegasystem.biz/#breadcrumb","itemListElement":[{"@type":"ListItem","position":1,"name":"Home"}]},{"@type":"WebSite","@id":"http://box5397.temp.domains/~omegasys/#website","url":"http://box5397.temp.domains/~omegasys/","name":"OMEGA System","description":"Pour une meilleur accompagnement dans le business environnemental","potentialAction":[{"@type":"SearchAction","target":{"@type":"EntryPoint","urlTemplate":"http://box5397.temp.domains/~omegasys/?s={search_term_string}"},"query-input":"required name=search_term_string"}],"inLanguage":"fr-FR"}]}</script>
	    <!-- / Yoast SEO plugin. -->
    

        

        

        
        
        <style>
            #wpadminbar #wp-admin-bar-wsm_free_top_button .ab-icon:before {
                content: "\f239";
                color: #FF9800;
                top: 3px;
            }
        </style>

	
	
	
    


<!-- This site uses the Google Analytics by MonsterInsights plugin v8.7.0 - Using Analytics tracking - https://www.monsterinsights.com/ -->
		<!-- Remarque : MonsterInsights n’est actuellement pas configuré sur ce site. Le propriétaire doit authentifier son compte Google Analytics dans les réglages de MonsterInsights.  -->
					<!-- No UA code set -->
				<!-- / Google Analytics by MonsterInsights -->
		<script type="text/javascript">
window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/omegasystem.biz\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.0.1"}};
/*! This file is auto-generated */
!function(e,a,t){var n,r,o,i=a.createElement("canvas"),p=i.getContext&&i.getContext("2d");function s(e,t){var a=String.fromCharCode,e=(p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,e),0,0),i.toDataURL());return p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,t),0,0),e===i.toDataURL()}function c(e){var t=a.createElement("script");t.src=e,t.defer=t.type="text/javascript",a.getElementsByTagName("head")[0].appendChild(t)}for(o=Array("flag","emoji"),t.supports={everything:!0,everythingExceptFlag:!0},r=0;r<o.length;r++)t.supports[o[r]]=function(e){if(!p||!p.fillText)return!1;switch(p.textBaseline="top",p.font="600 32px Arial",e){case"flag":return s([127987,65039,8205,9895,65039],[127987,65039,8203,9895,65039])?!1:!s([55356,56826,55356,56819],[55356,56826,8203,55356,56819])&&!s([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]);case"emoji":return!s([129777,127995,8205,129778,127999],[129777,127995,8203,129778,127999])}return!1}(o[r]),t.supports.everything=t.supports.everything&&t.supports[o[r]],"flag"!==o[r]&&(t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&t.supports[o[r]]);t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&!t.supports.flag,t.DOMReady=!1,t.readyCallback=function(){t.DOMReady=!0},t.supports.everything||(n=function(){t.readyCallback()},a.addEventListener?(a.addEventListener("DOMContentLoaded",n,!1),e.addEventListener("load",n,!1)):(e.attachEvent("onload",n),a.attachEvent("onreadystatechange",function(){"complete"===a.readyState&&t.readyCallback()})),(e=t.source||{}).concatemoji?c(e.concatemoji):e.wpemoji&&e.twemoji&&(c(e.twemoji),c(e.wpemoji)))}(window,document,window._wpemojiSettings);
</script>
<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 0.07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
	<link rel='stylesheet' id='wp-block-library-css'  href='https://omegasystem.biz/wp-includes/css/dist/block-library/style.min.css?ver=6.0.1' type='text/css' media='all' />
<style id='wp-block-library-inline-css' type='text/css'>
.has-text-align-justify{text-align:justify;}
</style>
<style id='ce4wp-subscribe-style-inline-css' type='text/css'>
.wp-block-ce4wp-subscribe{max-width:840px;margin:0 auto}.wp-block-ce4wp-subscribe .title{margin-bottom:0}.wp-block-ce4wp-subscribe .subTitle{margin-top:0;font-size:0.8em}.wp-block-ce4wp-subscribe .disclaimer{margin-top:5px;font-size:0.8em}.wp-block-ce4wp-subscribe .disclaimer .disclaimer-label{margin-left:10px}.wp-block-ce4wp-subscribe .inputBlock{width:100%;margin-bottom:10px}.wp-block-ce4wp-subscribe .inputBlock input{width:100%}.wp-block-ce4wp-subscribe .inputBlock label{display:inline-block}.wp-block-ce4wp-subscribe .submit-button{margin-top:25px;display:block}.wp-block-ce4wp-subscribe .required-text{display:inline-block;margin:0;padding:0;margin-left:0.3em}.wp-block-ce4wp-subscribe .onSubmission{height:0;max-width:840px;margin:0 auto}.wp-block-ce4wp-subscribe .firstNameSummary .lastNameSummary{text-transform:capitalize}.wp-block-ce4wp-subscribe .ce4wp-inline-notification{display:flex;flex-direction:row;align-items:center;padding:13px 10px;width:100%;height:40px;border-style:solid;border-color:orange;border-width:1px;border-left-width:4px;border-radius:3px;background:rgba(255,133,15,0.1);flex:none;order:0;flex-grow:1;margin:0px 0px}.wp-block-ce4wp-subscribe .ce4wp-inline-warning-text{font-style:normal;font-weight:normal;font-size:16px;line-height:20px;display:flex;align-items:center;color:#571600;margin-left:9px}.wp-block-ce4wp-subscribe .ce4wp-inline-warning-icon{color:orange}.wp-block-ce4wp-subscribe .ce4wp-inline-warning-arrow{color:#571600;margin-left:auto}.wp-block-ce4wp-subscribe .ce4wp-banner-clickable{cursor:pointer}.ce4wp-link{cursor:pointer}

.no-flex{display:block}.sub-header{margin-bottom:1em}


</style>
<link rel='stylesheet' id='mediaelement-css'  href='https://omegasystem.biz/wp-includes/js/mediaelement/mediaelementplayer-legacy.min.css?ver=4.2.16' type='text/css' media='all' />
<link rel='stylesheet' id='wp-mediaelement-css'  href='https://omegasystem.biz/wp-includes/js/mediaelement/wp-mediaelement.min.css?ver=6.0.1' type='text/css' media='all' />
<link rel='stylesheet' id='wpforms-gutenberg-form-selector-css'  href='https://omegasystem.biz/wp-content/plugins/wpforms/assets/css/wpforms-full.min.css?ver=1.7.4.2' type='text/css' media='all' />
<style id='global-styles-inline-css' type='text/css'>
body{--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #ffffff;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--duotone--dark-grayscale: url('#wp-duotone-dark-grayscale');--wp--preset--duotone--grayscale: url('#wp-duotone-grayscale');--wp--preset--duotone--purple-yellow: url('#wp-duotone-purple-yellow');--wp--preset--duotone--blue-red: url('#wp-duotone-blue-red');--wp--preset--duotone--midnight: url('#wp-duotone-midnight');--wp--preset--duotone--magenta-yellow: url('#wp-duotone-magenta-yellow');--wp--preset--duotone--purple-green: url('#wp-duotone-purple-green');--wp--preset--duotone--blue-orange: url('#wp-duotone-blue-orange');--wp--preset--font-size--small: 13px;--wp--preset--font-size--medium: 20px;--wp--preset--font-size--large: 36px;--wp--preset--font-size--x-large: 42px;}.has-black-color{color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color: var(--wp--preset--color--white) !important;}.has-pale-pink-color{color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color: var(--wp--preset--color--vivid-purple) !important;}.has-black-background-color{background-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-background-color{background-color: var(--wp--preset--color--vivid-purple) !important;}.has-black-border-color{border-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color: var(--wp--preset--color--vivid-purple) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background: var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background: var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background: var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background: var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background: var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background: var(--wp--preset--gradient--midnight) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-medium-font-size{font-size: var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size: var(--wp--preset--font-size--large) !important;}.has-x-large-font-size{font-size: var(--wp--preset--font-size--x-large) !important;}
</style>
<link rel='stylesheet' id='pure-css-css'  href='https://omegasystem.biz/wp-content/plugins/views-for-wpforms-lite/assets/css/pure-min.css?ver=6.0.1' type='text/css' media='all' />
<link rel='stylesheet' id='pure-grid-css-css'  href='https://omegasystem.biz/wp-content/plugins/views-for-wpforms-lite/assets/css/grids-responsive-min.css?ver=6.0.1' type='text/css' media='all' />
<link rel='stylesheet' id='wpforms-views-front-css'  href='https://omegasystem.biz/wp-content/plugins/views-for-wpforms-lite/assets/css/wpforms-views-display.css?ver=6.0.1' type='text/css' media='all' />
<link rel='stylesheet' id='wsm-style-css'  href='https://omegasystem.biz/wp-content/plugins/wp-stats-manager/css/style.css?ver=1.2' type='text/css' media='all' />
<link rel='stylesheet' id='wpforms-full-css'  href='https://omegasystem.biz/wp-content/plugins/wpforms/assets/css/wpforms-full.min.css?ver=1.7.4.2' type='text/css' media='all' />
<link rel='stylesheet' id='digital-download-google-fonts-css'  href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100i%2C300%2C300i%2C400%2C400i%2C500%2C500i%2C700%2C700i%2C900%2C900i' type='text/css' media='all' />
<link rel='stylesheet' id='digital-download-css'  href='https://omegasystem.biz/wp-content/themes/digital-download/style.css?ver=1.0.9' type='text/css' media='all' />
<link rel='stylesheet' id='wps-visitor-style-css'  href='https://omegasystem.biz/wp-content/plugins/wps-visitor-counter/styles/css/default.css?ver=2' type='text/css' media='all' />
<link rel='stylesheet' id='jetpack_css-css'  href='https://omegasystem.biz/wp-content/plugins/jetpack/css/jetpack.css?ver=11.2' type='text/css' media='all' />
<script type='text/javascript' src='https://omegasystem.biz/wp-includes/js/jquery/jquery.min.js?ver=3.6.0' id='jquery-core-js'></script>
<script type='text/javascript' src='https://omegasystem.biz/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.3.2' id='jquery-migrate-js'></script>
<script type='text/javascript' id='wps-js-extra'>
/* <![CDATA[ */
var wpspagevisit = {"ajaxurl":"https:\/\/omegasystem.biz\/wp-admin\/admin-ajax.php","ajax_nonce":"3ff57ade37"};
/* ]]> */
</script>
<script type='text/javascript' src='https://omegasystem.biz/wp-content/plugins/wps-visitor-counter/styles/js/custom.js?ver=1' id='wps-js'></script>
<link rel="https://api.w.org/" href="https://omegasystem.biz/wp-json/" /><link rel="alternate" type="application/json" href="https://omegasystem.biz/wp-json/wp/v2/pages/113" /><link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://omegasystem.biz/xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://omegasystem.biz/wp-includes/wlwmanifest.xml" /> 
<meta name="generator" content="WordPress 6.0.1" />
<link rel='shortlink' href='https://omegasystem.biz/' />
<link rel="alternate" type="application/json+oembed" href="https://omegasystem.biz/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fomegasystem.biz%2F" />
<link rel="alternate" type="text/xml+oembed" href="https://omegasystem.biz/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fomegasystem.biz%2F&#038;format=xml" />
	   
    <!-- Wordpress Stats Manager -->
    <script type="text/javascript">
          var _wsm = _wsm || [];
           _wsm.push(['trackPageView']);
           _wsm.push(['enableLinkTracking']);
           _wsm.push(['enableHeartBeatTimer']);
          (function() {
            var u="https://omegasystem.biz/wp-content/plugins/wp-stats-manager/";
            _wsm.push(['setUrlReferrer', ""]);
            _wsm.push(['setTrackerUrl',"https://omegasystem.biz/?wmcAction=wmcTrack"]);
            _wsm.push(['setSiteId', "1"]);
            _wsm.push(['setPageId', "113"]);
            _wsm.push(['setWpUserId', "0"]);           
            var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
            g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'js/wsm_new.js'; s.parentNode.insertBefore(g,s);
          })();
    </script>
    <!-- End Wordpress Stats Manager Code -->
      <style>img#wpstats{display:none}</style>
	<style type="text/css">.broken_link, a.broken_link {
	text-decoration: line-through;
}</style><style type="text/css" id="custom-background-css">
body.custom-background { background-color: #2b5900; }
</style>
	<link rel="icon" href="https://i0.wp.com/omegasystem.biz/wp-content/uploads/2022/05/cropped-Logo-Omega-1-2.jpeg?fit=32%2C32&#038;ssl=1" sizes="32x32" />
<link rel="icon" href="https://i0.wp.com/omegasystem.biz/wp-content/uploads/2022/05/cropped-Logo-Omega-1-2.jpeg?fit=192%2C192&#038;ssl=1" sizes="192x192" />
<link rel="apple-touch-icon" href="https://i0.wp.com/omegasystem.biz/wp-content/uploads/2022/05/cropped-Logo-Omega-1-2.jpeg?fit=180%2C180&#038;ssl=1" />
<meta name="msapplication-TileImage" content="https://i0.wp.com/omegasystem.biz/wp-content/uploads/2022/05/cropped-Logo-Omega-1-2.jpeg?fit=270%2C270&#038;ssl=1" />
</head>


    <body>
        <!--
        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="bootstrap" viewBox="0 0 118 94">
            
            <path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z"></path>
        </symbol>
        <symbol id="home" viewBox="0 0 16 16">
            <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
        </symbol>
        <symbol id="speedometer2" viewBox="0 0 16 16">
            <path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z"/>
            <path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z"/>
        </symbol>
        <symbol id="table" viewBox="0 0 16 16">
            <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm15 2h-4v3h4V4zm0 4h-4v3h4V8zm0 4h-4v3h3a1 1 0 0 0 1-1v-2zm-5 3v-3H6v3h4zm-5 0v-3H1v2a1 1 0 0 0 1 1h3zm-4-4h4V8H1v3zm0-4h4V4H1v3zm5-3v3h4V4H6zm4 4H6v3h4V8z"/>
        </symbol>
        <symbol id="people-circle" viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
        </symbol>
        <symbol id="grid" viewBox="0 0 16 16">
            <path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z"/>
        </symbol>
        </svg>
-->
        <main>
            <h1 class="visually-hidden">Omega System</h1>

            <div class="container">
            <!--<header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
                    <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
                        <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
                    </a>

                    <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                        <li><a href="index.php" class="nav-link px-2 link-secondary">Accueil</a></li>
                        <li><a href="#" class="nav-link px-2 link-dark">Nos offres</a></li>
                    </ul>

                    <div class="col-md-3 text-end"> 
                        <a href="connexion.php"><button type="button" class="btn btn-outline-primary">Se connecter</button></a>       
                        <a href="includes/register.php"><button type="button" class="btn btn-primary">S'enregistrer</button></a>
                    </div>
                </header>

                -->

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" >
                    <defs>
                        <filter id="wp-duotone-dark-grayscale">
                            <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                            <feComponentTransfer color-interpolation-filters="sRGB" >
                                <feFuncR type="table" tableValues="0 0.49803921568627" />
                                <feFuncG type="table" tableValues="0 0.49803921568627" />
                                <feFuncB type="table" tableValues="0 0.49803921568627" />
                                <feFuncA type="table" tableValues="1 1" />
                            </feComponentTransfer>
                            <feComposite in2="SourceGraphic" operator="in" />
                        </filter>
                    </defs>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" >
                    <defs>
                        <filter id="wp-duotone-grayscale">
                            <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                            <feComponentTransfer color-interpolation-filters="sRGB">
                                <feFuncR type="table" tableValues="0 1" />
                                <feFuncG type="table" tableValues="0 1" />
                                <feFuncB type="table" tableValues="0 1" />
                                <feFuncA type="table" tableValues="1 1" />
                            </feComponentTransfer>
                            <feComposite in2="SourceGraphic" operator="in" />
                        </filter>
                    </defs>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" >
                    <defs>
                        <filter id="wp-duotone-purple-yellow">
                            <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                            <feComponentTransfer color-interpolation-filters="sRGB" >
                                <feFuncR type="table" tableValues="0.54901960784314 0.98823529411765" />
                                <feFuncG type="table" tableValues="0 1" />
                                <feFuncB type="table" tableValues="0.71764705882353 0.25490196078431" />
                                <feFuncA type="table" tableValues="1 1" />
                            </feComponentTransfer>
                            <feComposite in2="SourceGraphic" operator="in" />
                        </filter>
                    </defs>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-blue-red"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0 1" /><feFuncG type="table" tableValues="0 0.27843137254902" /><feFuncB type="table" tableValues="0.5921568627451 0.27843137254902" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-midnight"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0 0" /><feFuncG type="table" tableValues="0 0.64705882352941" /><feFuncB type="table" tableValues="0 1" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-magenta-yellow"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0.78039215686275 1" /><feFuncG type="table" tableValues="0 0.94901960784314" /><feFuncB type="table" tableValues="0.35294117647059 0.47058823529412" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-purple-green"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0.65098039215686 0.40392156862745" /><feFuncG type="table" tableValues="0 1" /><feFuncB type="table" tableValues="0.44705882352941 0.4" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-blue-orange"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0.098039215686275 1" /><feFuncG type="table" tableValues="0 0.66274509803922" /><feFuncB type="table" tableValues="0.84705882352941 0.41960784313725" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg>    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#acc-content">Aller au contenu (Pressez Entrée)</a>
    	<div class="header-holder">
		<div class="overlay"></div>
		<div class="container">
			<header id="masthead" class="site-header" itemscope itemtype="https://schema.org/WPHeader">
				<div class="site-branding" itemscope itemtype="https://schema.org/Organization">
		            <div class="text-logo">
                        <h1 class="site-title" itemprop="name"><a href="../index.php" rel="home" itemprop="url">OMEGA System</a></h1>
				        <p class="site-description">Pour une meilleur accompagnement dans le business environnemental</p>
                    </div><!-- .text-logo -->
	</div><!-- .site-branding -->
    				<div class="right">
					<button id="toggle-button" data-toggle-target=".main-menu-modal" data-toggle-body-class="showing-main-menu-modal" aria-expanded="false" data-set-focus=".close-main-nav-toggle"><span></span></button>

                    <div class="mobile-menu-wrapper">
                        <nav id="mobile-site-navigation" class="main-navigation mobile-navigation">        
                            <div class="primary-menu-list main-menu-modal cover-modal" data-modal-target-string=".main-menu-modal">
                                <button class="close close-main-nav-toggle" data-toggle-target=".main-menu-modal" data-toggle-body-class="showing-main-menu-modal" aria-expanded="false" data-set-focus=".main-menu-modal"><i class="fas fa-times"></i></button>
                                <div class="mobile-menu" aria-label="Mobile">
                                    <div class="menu-main-menu-container"><ul id="mobile-primary-menu" class="nav-menu main-menu-modal"><li id="menu-item-334" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-334"><a href="https://omegasystem.biz/blogs-utilisateurs/">Appels d&#8217;offres</a></li>
<li id="menu-item-344" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-344"><a href="#">Enregistrez-votre business</a>
<ul class="sub-menu">
	<li id="menu-item-345" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-345"><a href="https://omegasystem.biz/entreprise/">Entreprise</a></li>
	<li id="menu-item-355" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-355"><a href="https://omegasystem.biz/freelance/">Freelance</a></li>
</ul>
</li>
<li id="menu-item-324" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-324"><a href="#">Consultez nos offres</a>
<ul class="sub-menu">
    <li id="menu-item-325" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-325"><a href="#">Appels d'offres</a></li>
	<li id="menu-item-325" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-325"><a href="#">Offres d&#8217;emploi</a></li>
	
</ul>
</li>
</ul></div>                                </div>
                            </div>
                        </nav><!-- #mobile-site-navigation -->
                    </div>

                    <nav id="site-navigation" class="main-navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
                        <div class="menu-main-menu-container"><ul id="primary-menu" class="menu">
                            
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-344"><a href="#">Enregistrez-votre business</a>
<ul class="sub-menu">
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-345"><a href="https://omegasystem.biz/entreprise/">Entreprise</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-355"><a href="register.php">Freelance</a></li>
</ul>
</li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-324"><a href="#">Consultez nos offres</a>
<ul class="sub-menu">
    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-325"><a href="#">Appels d'offres</a></li>
	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-325"><a href="#">Offres d'emploi</a></li>
</ul>

</li>
</ul></div>                    </nav><!-- #site-navigation -->
					<div class="tools">						
						    <div class="form-section">
        <button id="btn-search" class="search-btn" data-toggle-target=".header-search-modal" data-toggle-body-class="showing-search-modal" aria-expanded="false" data-set-focus=".header-search-modal .search-field">
		  <span id="btn-search-icon" class="fas fa-search"></span>
        </button>
		<div class="form-holder search header-searh-wrap header-search-modal cover-modal" data-modal-target-string=".header-search-modal">
			<form role="search" method="get" class="search-form" action="https://omegasystem.biz/">
				<label>
					<span class="screen-reader-text">Rechercher :</span>
					<input type="search" class="search-field" placeholder="Rechercher…" value="" name="s" />
				</label>
				<input type="submit" class="search-submit" value="Rechercher" />
			</form>            <button class="btn-form-close" data-toggle-target=".header-search-modal" data-toggle-body-class="showing-search-modal" aria-expanded="false" data-set-focus=".header-search-modal">
                 <i class="fas fa-times"></i>
            </button>
		</div>
	</div>
    						
					</div>
				</div>
			</header>
		</div>
	</div>
            

<!-- Les balises ouvertes ici dans le fichier header.php seront refermées dans le fichier footer.php -->