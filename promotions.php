
<!doctype html>
<html lang="en"
              data-filename="file.zip" data-size-converted="11 MB"
            data-header="Test Sponsor Aplications Free" data-product-id="7"
      data-offers-url="http://adscendmedia.com/api/gateway/1442/7/4/offers.json?profile_id=6" data-click-url="" data-content-url="" data-relay-short-url-url=""
      data-relay-email-url="" data-relay-sms-url="">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="robots" content="noindex">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Activate Your Download</title>
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet"/>
      <link rel="stylesheet" href="/framework/public/packages/adscend/gateway/style.css?1633fda7d97e9598c4b9002a518f8c5ae5d4e56d"/>
      <style>
    /* COLORS */
    header { background-color: #03374f; }
    header h1 { color: #08f8e9; }
    .offer a, .offer > div > div.offerlink > .targetedsystem { color: #060606; } .offer p { color: #060606; }
    .offer a:hover { color: #a3a7a9; }
    .offer > div > div.offerlink > a, #mobileoptions #linkformbutton button, .container1 > div, .container2 > div, .container3 > div { background-color: #f10707; }
    .offer > div > div.offerlink > a:hover, #mobileoptions #linkformbutton button:hover { background-color: #03374f; }
    .offer > div > div.offerlink > a, #mobileoptions #linkformbutton button { color: #060606; }
    .offer > div > div.offerlink > a:hover, #mobileoptions #linkformbutton button:hover { color: #ffffff; }

    /* CUSTOM */
    
  </style>
  </head>
<body>

      <header>
  <h1 id="header"></h1>
</header>
<div id="contain">
  <div id="instructions">
    <div>
      <h4>
        <span class="filename"></span>
        <small>(<span class="size-converted"></span>)</small>
      </h4>
      <h2>To activate your download, please complete an offer.</h2>
    </div>
  </div>
  <div id="offers-container"></div>
</div>
<footer>
  <a class="dmca"></a>
</footer>  
<script type="text/x-underscore-template" id="template-offers-container">
  <div id="offers"></div>
  <div id="mobileoffer">
    <div>
      <p>Easily access this mobile offer by emailing<% smsUrl ? print(' or messaging') : print('') %> yourself the URL below or by scanning the QR code.</p>

      <div id="mobileoptions">
        <div>
          <div id="QRcode"></div>
          <form id="linkform">
            <div id="linkforminputs">
              <input type="hidden" name="longlink">
              <input type="text" name="shortlink" disabled readonly>
              <input type="text" name="emailphone" placeholder="Email<% smsUrl ? print(' or Phone #') : print('') %>">
            </div>
            <div id="linkformbutton">
              <button id="sendbtn">Send</button>
            </div>
          </form>
        </div>
      </div>
      <button class="backbtn">&#10094; Back To Offer List</button>
    </div>
  </div>
  <div id="content">
    <div>
      <div id="spincontain">
        <h3 id="waiting">Waiting for offer completion...</h3>

        <div class="spinner">
          <div class="spinner-container container1">
            <div class="circle1"></div>
            <div class="circle2"></div>
            <div class="circle3"></div>
            <div class="circle4"></div>
          </div>
          <div class="spinner-container container2">
            <div class="circle1"></div>
            <div class="circle2"></div>
            <div class="circle3"></div>
            <div class="circle4"></div>
          </div>
          <div class="spinner-container container3">
            <div class="circle1"></div>
            <div class="circle2"></div>
            <div class="circle3"></div>
            <div class="circle4"></div>
          </div>
        </div>
        <div id="mobilesubtext" style="display: none">
          <p>Be sure to <strong>download and open</strong> the app on your mobile device.</p>
        </div>
      </div>
      <div id="successbox">
        <div></div>
      </div>
      <button class="backbtn">&#10094; Back To Offer List</button>
      <button id="btn-url" class="btn-main"><% productId === 7 ? print('Download File') : print('Visit URL') %></button>
      <button id="btn-password" class="btn-main">View Password</button>
    </div>
  </div>
  <div id="nooffers">
    <div>
      <h2>Unfortunately, your download cannot be activated.</h2>
      <h3>There aren't any available offers for the country you're coming from.</h3>
    </div>
  </div>
</script>

<script type="text/x-underscore-template" id="template-offer">
  <div class="offer" data-matches-target="<%- matches_target_system_detected %>" data-target-system="<%- target_system %>" data-offer-id="<%- offer_id %>">
    <div>
      <div class="offerimg">
        <img src="<%- image_url %>" onerror="gateway.imgError(this);" alt=""/>
      </div>
      <div class="offerdesc">
        <a href="<%- click_url %>" target="_blank" class="clicklink"><%- name %></a>

        <p><%- description %></p>
      </div>
      <div class="offerlink">
        <a href="<%- click_url %>" target="_blank" class="clicklink">Start</a>

        <div class="targetedsystem">
          <% if (iconClass && iconBrand) { %>
          <i class="fa <%- iconClass %>"></i> <span><%- iconBrand %> App</span>
          <% } %>
        </div>
      </div>
    </div>
  </div>
</script>

<script src="//cdn.polyfill.io/v1/polyfill.min.js"></script>
<script src="/framework/public/packages/underscore/js/underscore.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="/framework/public/packages/jquery/jquery.1.11.1.js"><\/script>')</script>
<script src="/framework/public/packages/qrcode/js/jquery.qrcode-0.10.1.min.js"></script>
<script src="/framework/public/packages/adscend/gateway/main.js?v=2"></script>
</body>
</html>
