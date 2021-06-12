<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Tue Sep 15 2020 12:53:39 GMT+0000 (Coordinated Universal Time)  -->


<html data-wf-page="5f3779c4fb8e3e05cfcfc276" data-wf-site="55f103f7e5224a5353e5ce1c7">


<head>
    <meta charset="utf-8">
    <title>AR Experince</title>
    <meta name="description" content="This AR Experience itself is fairly simple.">
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
  <link rel="canonical" href="https://abcgroupuae.com/en">
  <!-- <link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}"> -->
  <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

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

<div class="catalogue-img-container-copy w-container">
    <div data-poster-url="/abccontentbucket.s3.me-south-1.amazonaws.com/videos/114.jpg" data-video-urls="/abccontentbucket.s3.me-south-1.amazonaws.com/videos/114.mp4" data-autoplay="true" data-loop="true" data-wf-ignore="true" class="background-video-8 w-background-video w-background-video-atom"><video autoplay="" loop="" style="background-image:url(&quot;/abccontentbucket.s3.me-south-1.amazonaws.com/videos/111.jpg&quot;)" muted="" playsinline="" data-wf-ignore="true" data-object-fit="cover">
        <source src="/abccontentbucket.s3.me-south-1.amazonaws.com/videos/114.mp4" data-wf-ignore="true">
        <source src="/abccontentbucket.s3.me-south-1.amazonaws.com/videos/114.mp4" data-wf-ignore="true">
      </video>
      <h1 class="mainheading">AR Experience </h1>
    </div>
  </div>
  <div class="main-hero-section">
    <div class="wrapper">
      <div class="w-layout-grid ARModel-list">
        <div id="w-node-42e0c98ae5d7-ae22ba76" class="image-wrapper-copy">
          <div class="div-block-133">
          <model-viewer src="/abccontentbucket.s3.me-south-1.amazonaws.com/AR/BX-3801 S9 MG B.glb"
                  ios-src="/abccontentbucket.s3.me-south-1.amazonaws.com/AR/BX-3801 S9 MG B.usdz"
                  alt="A 3D model of a Wall hung basin"
                  
                  camera-controls
                  disable-zoom
                  loading="eager"
                  interaction-prompt="auto"
                  ar-scale="auto"
                  
                  auto-rotate ar ar-only magic-leap>
    </model-viewer>
          </div>
          <h5 class="heading-41">BX-3801 S9 MG B Art Basin</h5>
        </div>
        <div id="w-node-cc8e83d551f8-ae22ba76" class="image-wrapper-copy">
          <div class="div-block-133">
          <model-viewer src="/abccontentbucket.s3.me-south-1.amazonaws.com/AR/BX-3801 S1 .glb"
                  ios-src="/abccontentbucket.s3.me-south-1.amazonaws.com/AR/BX-3801 S1 .usdz"
                  alt="A 3D model of a Wall hung basin"
                  
                  camera-controls
                  disable-zoom
                  loading="eager"
                  interaction-prompt="auto"
                  ar-scale="auto"
                  
                  auto-rotate ar ar-only magic-leap>
    </model-viewer>
          </div>
          <h5 class="heading-41">BX-3801 S1 MG One piece toilet</h5>
        </div>
        <div id="w-node-ee6e06d4595a-ae22ba76" class="image-wrapper-copy">
          <div class="div-block-133">
          <model-viewer src="/abccontentbucket.s3.me-south-1.amazonaws.com/AR/BX-3801 S3 MG .glb"
                  ios-src="/abccontentbucket.s3.me-south-1.amazonaws.com/AR/BX-3801 S3 MG .usdz"
                  alt="A 3D model of a Wall hung basin"
                  
                  camera-controls
                  disable-zoom
                  loading="eager"
                  interaction-prompt="auto"
                  ar-scale="auto"
                  
                  auto-rotate ar ar-only magic-leap>
    </model-viewer>
          </div>
          <h5 class="heading-41">BX-3801 S3 MG Wall hung toilet</h5>
        </div>
        <div id="w-node-45adfc12f702-ae22ba76" class="image-wrapper-copy">
          <div class="div-block-133">
          <model-viewer src="/abccontentbucket.s3.me-south-1.amazonaws.com/AR/BX-3802 S1 MA.glb"
                  ios-src="/abccontentbucket.s3.me-south-1.amazonaws.com/AR/BX-3802 S1 MA.usdz"
                  alt="A 3D model of a Wall hung basin"
                  
                  camera-controls
                  disable-zoom
                  loading="eager"
                  interaction-prompt="auto"
                  ar-scale="auto"
                  
                  auto-rotate ar ar-only magic-leap>
    </model-viewer>
          </div>
          <h5 class="heading-41">BX-3802 S1 MA One piece toilet</h5>
        </div>
        <div id="w-node-42e0c98ae5d7-ae22ba76" class="image-wrapper-copy">
          <div class="div-block-133">
          <model-viewer src="/abccontentbucket.s3.me-south-1.amazonaws.com/AR/BX-3802 S3 MA.glb"
                  ios-src="/abccontentbucket.s3.me-south-1.amazonaws.com/AR/BX-3802 S3 MA.usdz"
                  alt="A 3D model of a Wall hung basin"
                  
                  camera-controls
                  disable-zoom
                  loading="eager"
                  interaction-prompt="auto"
                  ar-scale="auto"
                  
                  auto-rotate ar ar-only magic-leap>
    </model-viewer>
          </div>
          <h5 class="heading-41">BX-3802 S3 MA wall hung toilet</h5>
        </div>
        <div id="w-node-42e0c98ae5d7-ae22ba76" class="image-wrapper-copy">
          <div class="div-block-133">
          <model-viewer src="/abccontentbucket.s3.me-south-1.amazonaws.com/AR/BX-3801 S4.glb"
                  ios-src="/abccontentbucket.s3.me-south-1.amazonaws.com/AR/BX-3801 S4.usdz"
                  alt="A 3D model of a Wall hung basin"
                   
                  camera-controls
                  disable-zoom
                  loading="eager"
                  interaction-prompt="auto"
                  ar-scale="auto"
                  
                  auto-rotate ar ar-only magic-leap>
    </model-viewer>
          </div>
          <h5 class="heading-41">BX-3801 S4 MBK Wall hung basin</h5>
        </div>
        <div id="w-node-42e0c98ae5d7-ae22ba76" class="image-wrapper-copy">
          <div class="div-block-133">
          <model-viewer src="/abccontentbucket.s3.me-south-1.amazonaws.com/AR/BX-3801 S9.glb"
                  ios-src="/abccontentbucket.s3.me-south-1.amazonaws.com/AR/BX-3801 S9.usdz"
                  alt="A 3D model of a Wall hung basin"
                  
                  camera-controls
                  disable-zoom
                  loading="eager"
                  interaction-prompt="auto"
                  ar-scale="auto"
                  
                  auto-rotate ar ar-only magic-leap>
    </model-viewer>
          </div>
          <h5 class="heading-41">BX-3801 S9 MG ArtBasin</h5>
        </div>
      </div>
    </div>
  </div>
  @include('Common.Footer')
  <script src="/js/webflow.js" type="text/javascript"></script>
 
</body>

</html>
