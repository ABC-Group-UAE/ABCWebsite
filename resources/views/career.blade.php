<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Tue Sep 15 2020 12:53:39 GMT+0000 (Coordinated Universal Time)  -->


<html data-wf-page="5f37862be7bab8542dbb0886" data-wf-site="5f103f7e5224a5353e5ce1c7">


<head>
    <meta charset="utf-8">
    <title>Career</title>
    <meta name="description" content="Come and join with ABC Group UAE.">
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
<link rel="canonical" href="https://abcgroupuae.com/en/careerview">
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
<div class="careerimagesection">
    <div class="container-15 w-container">
      <h1 class="mainheading">Join Our Team</h1>
    </div>
</div>
  <div class="career-hero-section">
    <div class="career-container w-container">
      <div class="form-block-2 w-form">
        @php
        if(isset($message1)){
          @endphp
          <span style="color:#d7d5d5">{{ $message1 }}</span>
          @php
        }
        @endphp
        <form id="email-form" name="email-form" data-name="Email Form" class="form-2" action="file_upload" method="post" enctype="multipart/form-data">
            @csrf
            <label for="Candidate-Name" class="field-label">Name</label>
            
            <input type="text" class=" w-input" maxlength="256" name="Candidate_Name" data-name="Candidate Name" placeholder="Enter Your Name Here" id="Candidate_Name" required="" >
            @error('Candidate_Name')
              <span style="color:red"> {{ $message }}</span><br>
            @enderror
            <label for="Candidate_mailid">Email Address</label>
            <input type="email" class=" w-input" maxlength="256" name="Candidate_mailid" data-name="Candidate_mailid" placeholder="Enter your mail Address" id="Candidate_mailid" required="" >
            @error('Candidate_mailid')
              <span style="color:red"> {{ $message }}</span><br>
            @enderror
            <label for="jobPosition">Job Position you are looking for</label>
            <input type="text" class=" w-input" maxlength="256" name="jobPosition" data-name="jobPosition" placeholder="Enter the job role you are looking for" id="jobPosition" required="" >
            @error('jobPosition')
              <span style="color:red"> {{ $message }}</span><br>
            @enderror
            <label for="coverletter">Cover Letter</label>
            <textarea required="" maxlength="5000" id="coverletter" name="coverletter" data-name="coverletter" placeholder="Type your cover letter" class=" w-input"></textarea>
            @error('coverletter')
              <span style="color:red"> {{ $message }}</span><br>
            @enderror
            <!-- <form action="file_upload" method="post" enctype="multipart/form-data"> -->
              @csrf
              <input type="file" name="resume" id="resume" style="margin-botton:10px;" required="">
              <!-- <button type="submit">fileUpload</button> -->
            <!-- </form> -->
            @error('resume')
              <span style="color:red"> {{ $message }}</span><br>
            @enderror
            <br>
            <input type="submit" value="Submit" data-wait="Please wait..." class="submit-button-2 w-button">
        
          </form>
        <div class="w-form-done">
          <div>Thank you! Your submission has been received!</div>
        </div>
        <div class="w-form-fail">
          <div>Oops! Something went wrong while submitting the form.</div>
        </div>
      </div>
    </div>
  </div>
  
    @include('Common.Footer')
  <script src="/js/webflow.js" type="text/javascript"></script>
   <!-- <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=5f103f7e5224a5353e5ce1c7" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>  -->

  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>

</html>
