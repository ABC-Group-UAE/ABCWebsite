<!--  Last Published: Tue Sep 15 2020 12:53:39 GMT+0000 (Coordinated Universal Time)  -->

@if(isset($page))
<html data-wf-page="{{$page->page_id}}" data-wf-site="5f103f7e5224a5353e5ce1c7">
@else
 <html data-wf-page="5f91211170b33add84a26cf0" data-wf-site="5f103f7e5224a5353e5ce1c7"> 
@endif

<head>
  <meta charset="utf-8">
  @if(isset($page))
     @if($page->page_name=="ABC GROUP UAE")
            <title>ABC GROUP UAE</title>
            <meta name="description" content="ABC Group is dedicated to make the world a better place through innovative business and inspiring luxury living. Having the largest collection of trend setting tiles, sanitary ware and building materials, manufactured by the world’s best. Our mission is to serve our customers better forever">
            <link rel="canonical" href="https://abcgroupuae.com/">
        @elseif($page->page_name=="Team")
            <title>ABC GROUP UAE Team</title>
            <meta name="description" content="The pivotal role we play in bringing global expertise locally,our team  are committed to creating and maintaining powerful customer relationships built on a foundation of trust and excellence.">
        @elseif($page->page_name=="Shoplist")
            <title>Shoplist</title>
            <meta name="description" content="Shop quality tiles, sanitary wares, bathroom fittings and allied building  materials from us.">
        @elseif($page->page_name=="Product")
            <title>Products</title>
            <meta name="description" content="ABC Group is the synonymous for high quality tiles, sanitary wares, bathroom fittings and allied building materials.">
        @elseif($page->page_name=="Global Presence")
            <title>Global Presence</title>
            <meta name="description" content="ABC Group has worldwide acceptability. We proudly cater to a host of countries scattered all over the world. Our products are marketed in Uganda, Rwanda, Tanzania, Oman, UAE, India and Qatar.">

        @elseif($page->page_name=="Exhibit")
        <title>Exhibit</title>
        <meta name="description" content="Explore the world of unique products.">
        @elseif($page->page_name=="Downloads")
        <title>Downloads</title>
        <meta name="description" content="Download products catalogues from here.">
        @elseif($page->page_name=="Career")
        <title>Career</title>
        <meta name="description" content="Come and join with ABC Group UAE.">
        @elseif($page->page_name=="Description")
        <title>Description</title>
        <meta name="description" content="Detailed view of our product">
    @endif
	
@else
   <title>ABC GROUP UAE</title>
@endif
  <meta name="title" content="ABC Group UAE"> 
  <meta content="ABC Group" property="og:title">
  <meta content="ABC Group" property="twitter:title">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <meta name="csrf-token" content="{!! csrf_token() !!}">
  <link  href="/css/normalize.css?v=<?php echo date('hisa');?>" rel="stylesheet" type="text/css">
  <link  href="/css/webflow_css/webflow.css?version=16" rel="stylesheet" type="text/css">
  <link  href="/css/share.css?v=<?php echo date('hisa');?>" rel="stylesheet" type="text/css">
  <link  href="/css/webflow_css/abcgroupuaecom.webflow.css?version=16" rel="stylesheet" type="text/css">
  <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <link  href="/images/favicon.ico" rel="shortcut icon" type="image/x-icon">
  <link  href="/images/webclip.png" rel="apple-touch-icon">
  <link  href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
  <!-- <link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}"> -->
  <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<script src="/js/ranger.js?v=<?php echo date('hisa');?>"></script>
<script src="/js/jquery.min.js?v=<?php echo date('hisa');?>"></script>
<script src="/js/jquery.simplePagination.js?v=<?php echo date('hisa');?>"></script>
<script src="/js/jquery-ui.min.js?v=<?php echo date('hisa');?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js" integrity="sha512-0bEtK0USNd96MnO4XhH8jhv3nyRF0eK87pJke6pkYf3cM0uDIhNJy9ltuzqgypoIFXw3JSuiy04tVk4AjpZdZw==" crossorigin="anonymous"></script>

<link href="/extra_css/ranger.css?v=<?php echo date('hisa');?>" rel="stylesheet">
<link href="/extra_css/jquery-ui.css?v=<?php echo date('hisa');?>" rel="stylesheet">
<link rel="stylesheet" href="/css/bootstyle.css?v=<?php echo date('hisa');?>" >
<link href="/css/simplePagination.css?v=<?php echo date('hisa');?>" rel="stylesheet">
<link href='https://use.fontawesome.com/releases/v5.7.2/css/all.css'>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js'></script>
<!-- <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css'> -->
<link href="{{asset('/css/bootstrap.min.css')}}">

<!-- <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script> -->
<script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<link  href="/css/bootstrap.min.css?v=<?php echo date('hisa');?>" rel='stylesheet'>
                                <link href='https://use.fontawesome.com/releases/v5.7.2/css/all.css' rel='stylesheet'>
                                <!-- <script  src="https://use.fontawesome.com/releases/v5.6.3/js/all.js" integrity="sha384-EIHISlAOj4zgYieurP0SdoiBYfGJKkgWedPHH4jCzpCXLmzVsw1ouK59MuUtP4a1" crossorigin="anonymous"></script> -->
                                <link  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">              
                                <!-- <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">  -->       
                                <script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
<script nomodule src="https://unpkg.com/@google/model-viewer/dist/model-viewer-legacy.js"></script>                             


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-6SQLZ5GFVC"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-6SQLZ5GFVC');
</script>


</head>
<body >
<!-- <div id="google_translate_element" ></div> -->
@include('Common.Dynamicheader')

@yield('extra-css')

@yield('content')

@yield('extra-js')

@include('Common.Footer') 
  <script src="/js/webflow.js" type="text/javascript"></script>
   <!-- <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=5f103f7e5224a5353e5ce1c7" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>  -->
 
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>

</html>
<!-- <script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script> -->
<!-- <script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script> -->

<!-- <script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, includedLanguages:'ar,en',autoDisplay: false }, 'google_translate_element');
}
</script> -->
   
<!-- <script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>
<df-messenger
  intent="WELCOME"
  chat-title="Online-Shopping"
  agent-id="c398d4bb-03e0-47ab-8529-41bf19e214ec"
  language-code="en"
></df-messenger> -->
