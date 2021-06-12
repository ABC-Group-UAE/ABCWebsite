<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Tue Sep 15 2020 12:53:39 GMT+0000 (Coordinated Universal Time)  -->


<html data-wf-page="5f3779c4fb8e3e05cfcfc276" data-wf-site="55f103f7e5224a5353e5ce1c7">


<head>
    <meta charset="utf-8">
    <title>Dealers</title>
    <meta name="description" content="ABC Group Trade partners">
  <meta content="ABC Group" property="og:title">
  <meta content="ABC Group" property="twitter:title">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <meta name="csrf-token" content="{!! csrf_token() !!}">

  <link href="/css/normalize.css?v=<?php echo date('hisa');?>" rel="stylesheet" type="text/css">
  <link href="/css/webflow_css/webflow.css?version=16" rel="stylesheet" type="text/css">
  <link href="/css/share.css?v=<?php echo date('hisa');?>" rel="stylesheet" type="text/css">
  <link href="/css/webflow_css/abcgroupuaecom.webflow.css?version=16" rel="stylesheet" type="text/css">
  <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <link href="/images/favicon.ico" rel="shortcut icon" type="image/x-icon">
  <link href="/images/webclip.png" rel="apple-touch-icon">
  <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
  <!-- <link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}"> -->
  <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<link rel="canonical" href="https://abcgroupuae.com/en/Dealers">
<script src="/js/ranger.js?v=<?php echo date('hisa');?>"></script>
<script src="/js/jquery.min.js?v=<?php echo date('hisa');?>"></script>
<script src="/js/jquery.simplePagination.js?v=<?php echo date('hisa');?>"></script>
<script src="/js/jquery-ui.min.js?v=<?php echo date('hisa');?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js" integrity="sha512-0bEtK0USNd96MnO4XhH8jhv3nyRF0eK87pJke6pkYf3cM0uDIhNJy9ltuzqgypoIFXw3JSuiy04tVk4AjpZdZw==" crossorigin="anonymous"></script>

<link href="/extra_css/ranger.css?v=<?php echo date('hisa');?>" rel="stylesheet">
<link href="/extra_css/jquery-ui.css?v=<?php echo date('hisa');?>" rel="stylesheet">
<link href="/css/bootstyle.css?v=<?php echo date('hisa');?>" rel="stylesheet">
<link href="/css/simplePagination.css?v=<?php echo date('hisa');?>" rel="stylesheet">
<link href='https://use.fontawesome.com/releases/v5.7.2/css/all.css'>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js'></script>
<!-- <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css'> -->
<link href="{{asset('/css/bootstrap.min.css')}}">

<!-- <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script> -->
<script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<link href="/css/bootstrap.min.css?v=<?php echo date('hisa');?>" rel='stylesheet'>
                                <link href='https://use.fontawesome.com/releases/v5.7.2/css/all.css' rel='stylesheet'>
                                <!-- <script  src="https://use.fontawesome.com/releases/v5.6.3/js/all.js" integrity="sha384-EIHISlAOj4zgYieurP0SdoiBYfGJKkgWedPHH4jCzpCXLmzVsw1ouK59MuUtP4a1" crossorigin="anonymous"></script> -->
                                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                                <!-- <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">  -->
                                <script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
<script nomodule src="https://unpkg.com/@google/model-viewer/dist/model-viewer-legacy.js"></script>
</head>
<body >
    @include('Common.Dynamicheader')

<div class="modal-wrapper">
    <div class="form-wrapper w-clearfix"><a href="index.html" class="close">X </a>
      <h2 class="heading-4 headinginnerpages">Have a chat with us</h2>
      <div class="w-form">
        <form id="email-form-4" name="email-form-4" data-name="Email Form 4"><input type="text" class="w-input" autofocus="true" maxlength="256" name="name" data-name="Name" placeholder="Enter Your name" id="name"><input type="email" class="w-input" autofocus="true" maxlength="256" name="email" data-name="Email" placeholder="Enter your mail id" id="email" required=""><input type="tel" class="w-input" autofocus="true" maxlength="256" name="PhNo" data-name="Ph No" placeholder="Enter Your mobile number" id="PhNo" required="" pattern="[0-9]{10}"><input type="text" class="w-input" autofocus="true" maxlength="256" name="TypeofEnquiry" data-name="Typeof Enquiry" placeholder="Enter type of enquiry here" id="TypeofEnquiry" required=""><textarea data-name="Message" maxlength="5000" id="message" name="message" placeholder="type any message here" autofocus="true" class="textarea w-input"></textarea><input type="submit" value="Submit" data-wait="Please wait..." class="btnclass borderclass w-button"></form>
        <div class="w-form-done">
          <div>Thank you! Your submission has been received!</div>
        </div>
        <div class="w-form-fail">
          <div>Oops! Something went wrong while submitting the form.</div>
        </div>
      </div>
    </div>
  </div>

  <div class="dealers-image-section"></div>
  <div class="all-page-red-section w-clearfix">
    <div class="redsectioncontentdiv">
      <p class="paragraph-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.</p>
      <a href="#" class="know-more-link-block combotypocolour w-inline-block">
        <div class="buttonclass-knowmore combotypographycolor">
          <h3 class="know-more-heading">Know More</h3>
        </div>
      </a>
    </div>
  </div>
  <div id="dealer-div" class="herosection">
    <div class="main-section-container w-container">
      <h1 class="headinginnerpages">Our Trade Partners</h1>
      <div class="w-layout-grid dealers-list">
        <div>
          <div>
            <h3 class="dealer-heading">Heading</h3>
          </div>
          <div class="reddividerdiv"></div>
          <div class="category-image-div"><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/images/FweAiP_1.svg" width="27" height="37" alt=""><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/images/9NaSBr_1.svg" width="27" height="37" alt=""><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/images/Asset-2-1.svg" width="27" height="37" alt=""><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/images/Asset-1-1.svg" width="27" height="37" alt=""></div>
          <div>
            <div class="text-block-19">This is some text inside of a div block.</div>
            <div class="text-block-20">This is some text inside of a div block.</div>
            <div class="text-block-21">This is some text inside of a div block.</div>
            <div class="text-block-22">This is some text inside of a div block.</div>
            <div class="text-block-23">This is some text inside of a div block.</div>
          </div>
        </div>
        <div>
          <div>
            <h3 class="dealer-heading">Heading</h3>
          </div>
          <div class="reddividerdiv"></div>
          <div class="category-image-div"><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/images/FweAiP_1.svg" width="27" height="37" alt=""><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/images/9NaSBr_1.svg" width="27" height="37" alt=""><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/images/Asset-2-1.svg" width="27" height="37" alt=""><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/images/Asset-1-1.svg" width="27" height="37" alt=""></div>
          <div>
            <div class="text-block-19">This is some text inside of a div block.</div>
            <div class="text-block-20">This is some text inside of a div block.</div>
            <div class="text-block-21">This is some text inside of a div block.</div>
            <div class="text-block-22">This is some text inside of a div block.</div>
            <div class="text-block-23">This is some text inside of a div block.</div>
          </div>
        </div>
        <div>
          <div>
            <h3 class="dealer-heading">Heading</h3>
          </div>
          <div class="reddividerdiv"></div>
          <div class="category-image-div"><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/images/FweAiP_1.svg" width="27" height="37" alt=""><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/images/9NaSBr_1.svg" width="27" height="37" alt=""><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/images/Asset-2-1.svg" width="27" height="37" alt=""><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/images/Asset-1-1.svg" width="27" height="37" alt=""></div>
          <div>
            <div class="text-block-19">This is some text inside of a div block.</div>
            <div class="text-block-20">This is some text inside of a div block.</div>
            <div class="text-block-21">This is some text inside of a div block.</div>
            <div class="text-block-22">This is some text inside of a div block.</div>
            <div class="text-block-23">This is some text inside of a div block.</div>
          </div>
        </div>
        <div>
          <div>
            <h3 class="dealer-heading">Heading</h3>
          </div>
          <div class="reddividerdiv"></div>
          <div class="category-image-div"><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/images/FweAiP_1.svg" width="27" height="37" alt=""><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/images/9NaSBr_1.svg" width="27" height="37" alt=""><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/images/Asset-2-1.svg" width="27" height="37" alt=""><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/images/Asset-1-1.svg" width="27" height="37" alt=""></div>
          <div>
            <div class="text-block-19">This is some text inside of a div block.</div>
            <div class="text-block-20">This is some text inside of a div block.</div>
            <div class="text-block-21">This is some text inside of a div block.</div>
            <div class="text-block-22">This is some text inside of a div block.</div>
            <div class="text-block-23">This is some text inside of a div block.</div>
          </div>
        </div>
        <div>
          <div>
            <h3 class="dealer-heading">Heading</h3>
          </div>
          <div class="reddividerdiv"></div>
          <div class="category-image-div"><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/images/FweAiP_1.svg" width="27" height="37" alt=""><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/images/9NaSBr_1.svg" width="27" height="37" alt=""><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/images/Asset-2-1.svg" width="27" height="37" alt=""><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/images/Asset-1-1.svg" width="27" height="37" alt=""></div>
          <div>
            <div class="text-block-19">This is some text inside of a div block.</div>
            <div class="text-block-20">This is some text inside of a div block.</div>
            <div class="text-block-21">This is some text inside of a div block.</div>
            <div class="text-block-22">This is some text inside of a div block.</div>
            <div class="text-block-23">This is some text inside of a div block.</div>
          </div>
        </div>
        <div>
          <div>
            <h3 class="dealer-heading">Heading</h3>
          </div>
          <div class="reddividerdiv"></div>
          <div class="category-image-div"><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/images/FweAiP_1.svg" width="27" height="37" alt=""><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/images/9NaSBr_1.svg" width="27" height="37" alt=""><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/images/Asset-2-1.svg" width="27" height="37" alt=""><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/images/Asset-1-1.svg" width="27" height="37" alt=""></div>
          <div>
            <div class="text-block-19">This is some text inside of a div block.</div>
            <div class="text-block-20">This is some text inside of a div block.</div>
            <div class="text-block-21">This is some text inside of a div block.</div>
            <div class="text-block-22">This is some text inside of a div block.</div>
            <div class="text-block-23">This is some text inside of a div block.</div>
          </div>
        </div>
      </div><a data-w-id="f4ad95d5-c326-c74c-9c95-2bf910f7ba37" href="#" class="buttonclass w-button">Contact us For Dealership</a></div>
  </div>


  @include('Common.Footer')
  <script src="/js/webflow.js" type="text/javascript"></script>
   <!-- <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=5f103f7e5224a5353e5ce1c7" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>  -->

  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>

</html>
