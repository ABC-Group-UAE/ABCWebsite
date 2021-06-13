<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Tue Sep 15 2020 12:53:39 GMT+0000 (Coordinated Universal Time)  -->


<html data-wf-page="5f91211170b33add84a26cf0" data-wf-site="5f103f7e5224a5353e5ce1c7">


<head>
    <meta charset="utf-8">
    <title>Locations</title>
    <meta name="description" content="Our products are available on different parts of the world">
  <meta content="ABC Group" property="og:title">
  <meta content="ABC Group" property="twitter:title">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <meta name="csrf-token" content="{!! csrf_token() !!}">
  <meta name="googlebot" content="noindex">
  <link rel="canonical" href="https://abcgroupuae.com/en/location">
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
<div class="map-container w-container">
  <div class="map-div w-clearfix">
    <div class="gmap" id="map"></div>
    <!-- <div class="select-map">
      <div class="div-block-60">
        <div class="country-select-text">Select A Country</div>
      </div>
      <div class="country-dropdown">
        <div data-hover="1" data-delay="0" class="dropdown w-dropdown">
            <select id="country" class="dropdown-toggle" style=" border:0px;outline:0px;">
                <option value="all"> All Countries</option>
                @foreach($countries as $country)
                <option value={{$country->country}}>{{$country->country}}</option>
                @endforeach
            </select>
           {{-- <div class="dropdown-toggle w-dropdown-toggle">
            <div class="w-icon-dropdown-toggle"></div>
            <div>All Countries</div>
          </div>
          <nav class="w-dropdown-list"><a href="#" class="w-dropdown-link">United Arab Emirates</a><a href="#" class="w-dropdown-link">Oman</a><a href="#" class="w-dropdown-link">Uganda</a><a href="#" class="w-dropdown-link">Rwanda</a><a href="#" class="w-dropdown-link">Tanzania</a><a href="#" class="w-dropdown-link">Qatar</a></nav>
          --}} 
        </div>
      </div>
    </div> -->
  </div>
   <!-- show-room-list -->
            <div class="global-presence-list" id="showrooms">
            @if(!empty($locations))
        @foreach($locations as $location)
        @if(strcmp($location->country,"UAE")==0)
        <div class="showroom-holding-div"><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/images/{{$location->image}}" loading="lazy" width="259" height="259" alt="" class="showroom-img">
          <div class="reddividerdiv"></div>
          <div class="showroomAdress">
                <div class='show-room-name'>{{$location->showroom}}</div>
                <div class='address-div'><img src='https://abccontentbucket.s3.me-south-1.amazonaws.com/images/method-draw-image-12.svg' loading='lazy' alt='location' class='image-111'><div class='show-room-address'>{{$location->street . $location->city}}</div></div>
                <div class='email-div'><img src='https://abccontentbucket.s3.me-south-1.amazonaws.com/images/method-draw-image-13.svg' loading='lazy' alt='email' class='image-110'><a href='#' class='email-link w-inline-block'><div class='show-room-mailid'>{{$location->email}}</div></a></div>
                <div class='phone-div'><img src='https://abccontentbucket.s3.me-south-1.amazonaws.com/images/method-draw-image-14.svg' loading='lazy' alt='phone' class='image-112'><div class='show-room-phone'><a href = 'tel:{{$location->phone_no}}'>{{$location->phone_no}}</a></div></div>
           </div>
        </div>
        @endif
        @endforeach
        @endif
        </div>
  </div>
 @include('Common.Footer')
<!-- <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=5f2fc59bafe8e6083cb57bd1" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script> -->
  <!-- <script src="js/webflow.js" type="text/javascript"></script> -->
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]  google- key AIzaSyBoMMXN6s3a--R6cHM1ssTW5zPL83MhuAk-->
  <script src="https://maps.googleapis.com/maps/api/js?key=&callback=initMap&libraries=&v=weekly" defer></script>
  <script>
    "use strict";
    const iconbase='images/'
    let map;
    var marker;
    var infoWindow;
    //var locate="{!! json_encode($locations->toArray(), JSON_HEX_TAG) !!}";
    var locate=@json($locations);
    var styles = [{
        "stylers": [{
            "saturation": -100
        }]
    }];

    


    function initMap() {
      //c
      map = new google.maps.Map(document.getElementById("map"), {
        center: {
            lat: 24.466667,
            lng: 54.366669,
          },
        zoom: 3,
        styles:styles,
        zoomControl: true,
        scrollwheel: true,
       disableDoubleClickZoom: true,
       minZoom: 3
      });

      

      marker = new google.maps.Marker({

        icon: "/abccontentbucket.s3.me-south-1.amazonaws.com/images/location.svg",
          title:"ABC",
          draggable: true,
          map: map
      });
      
    }

    $(document).ready(function(){

      changecountry(locate,"UAE");

  });
  function changecountry(locationdetails,country_name)
              {

                        var i;
                        var newzoom;
                        var clicked = false;
                        var newlat;
                        var newlng;
                        infoWindow =null;
                        var mobilecontentstring;
                        console.log(country_name);

                        //var image = 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png';
                        if(country_name=="UAE"){
                                 map.setCenter(new google.maps.LatLng(25.324949,55.401567));

                                 if($(window).width() < 1024) {

                                    newzoom = 1 * 9;
                                    }
                                    else{
                                        newzoom = 1 * 10;
                                    }
                        }
                        
                        infoWindow = new google.maps.InfoWindow();
                        map.addListener('click', function() {
                                            if (infoWindow) infoWindow.close();
                                          });

                        for(var info in locationdetails){

                         var contentstring;
                         var closeInfoWindowWithTimeout;
                          console.log(locationdetails[info].latitude);
                          console.log(locationdetails[info].longitude);

                              newlat = 1 * locationdetails[info].latitude,
                              newlng = 1 * locationdetails[info].longitude;
                              map.setZoom(newzoom);

                              marker = new google.maps.Marker({
                              position: new google.maps.LatLng(locationdetails[info].latitude,locationdetails[info].longitude),
                                    icon:  "/abccontentbucket.s3.me-south-1.amazonaws.com/images/locations.png",
                                    // tool tip data
                                    title:"ABC",
                                    //position: {lat: la[i], lng: lo[i]},
                                    //label: {text: "ABC Group", color: "white"},
                                    draggable: false,
                                    map: map
                          });
                          //contentstring="<div  style='img{max-width: none;}'><b>"+locationdetails[info].showroom+"</b><br>"+locationdetails[info].street+","+locationdetails[info].city+"<br>"+locationdetails[info].country+"<br><a href = 'mailto: abc@example.com'>"+locationdetails[info].email+"</a><br>"+locationdetails[info].phone_no+"</div>";
                          contentstring="<div><b>"+locationdetails[info].showroom+"</b><br>"+locationdetails[info].street+","+locationdetails[info].city+"<br>"+locationdetails[info].country+"<br><a href = 'mailto: abc@example.com'>"+locationdetails[info].email+"</a><br><a href = 'tel:"+locationdetails[info].phone_no+"'>"+locationdetails[info].phone_no+"</a></div>";//<img border='0' align='Left' width='150px' height='100px' src='https://abccontentbucket.s3.me-south-1.amazonaws.com/images/pics.jpg' style='padding-left:5px;padding-right:5px;'>
                          mobilecontentstring="<div><b>"+locationdetails[info].showroom+"</b><br>"+locationdetails[info].street+","+locationdetails[info].city+"<br>"+locationdetails[info].country+"<br><a href = 'mailto: abc@example.com'>"+locationdetails[info].email+"</a><br><a href = 'tel:"+locationdetails[info].phone_no+"'>"+locationdetails[info].phone_no+"</a></div>";
                          //contentstring="<div style='max-height:400px;'><b>ABC Group UAE</b><br>Alif International<br>King Faisal Street Sharjah<br>abc@gmail.com<br>+97165434460</div>";
                          google.maps.event.addListener(marker, 'mouseover', (function(marker,infoWindow,contentstring) {
                                    return function() {
                                      infoWindow.setContent(contentstring);

                                      infoWindow.open(map, marker);

                                    }
                                  })(marker,infoWindow,contentstring));
                                  google.maps.event.addListener(marker, 'mousedown', (function(marker,infoWindow,mobilecontentstring) {
                                    return function() {
                                      infoWindow.setContent(mobilecontentstring);

                                      infoWindow.open(map, marker);

                                    }
                                  })(marker,infoWindow,mobilecontentstring));


                                  // google.maps.event.addListener(marker, 'mouseout', function() {
                                  //   if (!clicked) {
                                  //       infoWindow.close();
                                  //   }
                                  //   });
                        }


              }

   
</script>
</body>
</html>





