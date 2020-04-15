<?php include_once('header.php');?>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>
      Online Coronavirus Risk Scan
    </title>
    <meta property="og:image" content="static/assets/images/og.jpg" />
    <meta
      name="description"
      content="Stay calm amidst the current paranoia surrounding COVID 19 and calculate your risk level through Apollo's Coronavirus Risk Scan driven AI which has been developed on the basis of guidelines from the WHO and MHFW, Government of India"
    />
    <meta
      name="keywords"
      content="Coronavirus, COVID-19, Coronavirus Tracker, BreakTheChain"
    />
    <meta name="author" content="Apollo 24|7" />
    <link rel="canonical" href="index.html" />
    <meta name="robots" content="noodp" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta
      property="og:title"
      content="COVID-19 Risk Assessment Scanner powered by Apollo 24|7"
    />
    <meta
      property="og:description"
      content="Stay calm amidst the current paranoia surrounding COVID 19 and calculate your risk level through Apollo's Coronavirus Risk Scan driven AI which has been developed on the basis of guidelines from the WHO and MHFW, Government of India"
    />
    <meta property="og:url" content="index.html" />
    <meta
      property="og:site_name"
      content="Online Coronavirus Risk Scan"
    />
    <meta name="twitter:card" content="summary" />
    <meta
      name="twitter:description"
      content="Stay calm amidst the current paranoia surrounding COVID 19 and calculate your risk level through Apollo's Coronavirus Risk Scan driven AI which has been developed on the basis of guidelines from the WHO and MHFW, Government of India"
    />
    <meta
      name="twitter:title"
      content="COVID-19 Risk Assessment Scanner powered by Apollo 24|7"
    />
    <meta name="twitter:site" content="@Apollo24x7" />
    <meta name="twitter:creator" content="@Apollo24x7" />

    <meta name="msapplication-TileColor" content="#02475b" />
    <meta name="theme-color" content="#fff" />
    <link
      rel="shortcut icon"
      href="static/assets/images/favicon.ico"
      type="image/x-icon"
    />
    <link
      rel="icon"
      href="static/assets/images/favicon.ico"
      type="image/x-icon"
    />

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script
      async
      src="https://www.googletagmanager.com/gtag/js?id=UA-161578608-1"
    ></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag() {
        dataLayer.push(arguments);
      }
      gtag("js", new Date());

      gtag("config", "UA-161578608-1");
    </script>

    <!-- Google Tag Manager -->
    <script>
      (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({ "gtm.start": new Date().getTime(), event: "gtm.js" });
        var f = d.getElementsByTagName(s)[0],
          j = d.createElement(s),
          dl = l != "dataLayer" ? "&l=" + l : "";
        j.async = true;
        j.src = "../www.googletagmanager.com/gtm5445.html?id=" + i + dl;
        f.parentNode.insertBefore(j, f);
      })(window, document, "script", "dataLayer", "GTM-PNGHP4L");
    </script>
    <!-- End Google Tag Manager -->

    <!-- <link rel="stylesheet" href="./static/assets/css/botui.min.css" />
    <link rel="stylesheet" href="./static/assets/css/botui.theme.min.css" /> -->
    <link rel="stylesheet" href="css/main.min.css" />
    <style type="text/css">
      body{
        background-image: url(img/covid2.jpg);
        height: 100%;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
      }
    </style>
    <!-- Facebook Pixel Code -->
    <script>
      !(function(f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function() {
          n.callMethod
            ? n.callMethod.apply(n, arguments)
            : n.queue.push(arguments);
        };
        if (!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = "2.0";
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s);
      })(
        window,
        document,
        "script",
        "../connect.facebook.net/en_US/fbevents.js"
      );
      fbq("init", "516415665913994");
      fbq("track", "PageView");
    </script>
    <noscript
      ><img
        height="20px"
        width="20px"
        style="display:none"
        src="https://www.facebook.com/tr?id=516415665913994&amp;ev=PageView&amp;noscript=1"
    /></noscript>
    <!-- End Facebook Pixel Code -->
  </head>
  <body>
    <!-- Google Tag Manager (noscript) -->
    <noscript
      ><iframe
        src="https://www.googletagmanager.com/ns.html?id=GTM-PNGHP4L"
        height="0"
        width="0"
        style="display:none;visibility:hidden"
      ></iframe
    ></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <div id="my-botui-app">
      <!-- <header class="header"> -->
        <div class="container">
          <!-- <a href="http://www.fitgraphy.com/" target="_blank"> -->
            <!-- <img
              src="static/assets/images/logo.png"
              alt="Apollo 24X7"
              class="logo"
            /> -->
          <p></p>
           <center><h2 style="color: white">Online Coronavirus Risk Scan</h2></center>
          <a href="https://apollo247.com/" target="_blank" class="fake"> -->
            <!-- <img
              src="static/assets/images/logo.svg"
              alt="Apollo 24X7"
              class="logo"
            /> -->
          </a>
        </div>
      </header>
      
        <div class="container">
          <bot-ui></bot-ui>
          <button onclick="reset()" class="reset" >
            <i class="fa fa-undo"></i>
          </button>
        </div>
      
    </div>
    <div class="loader">
      <svg
        class="spinner"
        width="50px"
        height="50px"
        viewBox="0 0 50 50"
        xmlns="http://www.w3.org/2000/svg"
      >
        <circle
          class="circle"
          fill="none"
          stroke-width="5"
          stroke-linecap="round"
          cx="25"
          cy="25"
          r="20"
        ></circle>
      </svg>
    </div>
    <script src="javascript/vue.min.js"></script>
    <!-- <script src="./static/assets/js/botui.js"></script> -->
    <script src="javascript/mustache.js"></script>
    <script src="javascript/main.min.js"></script>
  </body>


