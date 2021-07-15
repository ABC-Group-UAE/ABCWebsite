<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Tue Sep 15 2020 12:53:39 GMT+0000 (Coordinated Universal Time)  -->


<html data-wf-page="5f855af0d840bd5a5d33da88" data-wf-site="5f103f7e5224a5353e5ce1c7">


<head>
    <meta charset="utf-8">

    <title>Description</title>
    <meta name="description" content="Detailed view of our products that are available in UAE.">
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
  <link rel="canonical" href="https://abcgroupuae.com/en/Description">
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
<!-- Hotjar Tracking Code for www.abcgroupuae.com -->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:2429344,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script>
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
  <div data-w-id="2b1ccfe9-16e2-35fe-01f4-6f6fbf849d25" class="pro-description w-container">

  <form method="post"  action="{{route('Product.description.option',app()->getlocale())}}" id="Description">
    
        @csrf
          @if(session('message'))
           <h3>{{$message ?? ''}}</h3>
          @endif
      
         
        @if(!empty($product)) 
        <input type="hidden" name="productID" id="productID" value="{{ $product->Product_id }}">
        <input type="hidden" name="FamilyCode" id="FamilyCode" value="{{ $product->FamilyCode }}">
        <div class="outlineSocialShare">
        <!-- <a  style="display:flex; justify-content:center; align-items:center; " href="https://twitter.com/intent/tweet?url=https://abcgroupuae.com/en/Description/{{$product->Product_id}}&text=" _target="blank" title="Tweet this page on twitter!">
            <i class="fa fa-twitter"></i>
        </a> -->
        <!-- <a  style="display:flex; justify-content:center; align-items:center; " href="https://msng.link/o/?https://abcgroupuae.com/en/Description/{{$product->Product_id}}&title=abcgroupuae&summary=website&source=" _target="blank"  title="Share this page on Linkedin!">
            <i class="fa fa-instagram"></i>
        </a> -->
            <a  style="display:flex; justify-content:center; align-items:center; " id="facebookShare" href="https://www.facebook.com/sharer/sharer.php?u=https://abcgroupuae.com/en/Description/{{$product->Product_id}}" _target="blank" title="Share this page on Facebook!">
              <i class="fa fa-facebook"></i></a>
        <a  style="display:flex; justify-content:center; align-items:center; " id="whatsappShare" href="https://api.whatsapp.com/send?text=https://abcgroupuae.com/en/Description/{{$product->Product_id}}" _target="blank" title="Share On Whatsapp" >    
            <i class="fa fa-whatsapp"></i>
        </a>
        </div>
    <div class="w-layout-grid page-layout-grid">
      <div id="w-node-cda86d3e8214-5d33da88" class="image-gallery-div">
        <div data-animation="slide" data-duration="500" data-infinite="1" class="slider-2 w-slider">
          <div class="w-slider-mask">
          @if(isset($product->MainImage))
          <div class="slide w-slide"><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/products/{{$product->MainImage}}" loading="lazy" alt="" class="image-54"></div>
          
          @endif
          @if(isset($product->Thumpnail1) and !empty($product->Thumpnail1))
          <div class="slide w-slide"><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/products/{{$product->Thumpnail1}}" loading="lazy" alt="" class="image-54"></div>
          
          @endif
          @if(isset($product->Thumpnail2) and !empty($product->Thumpnail2))
          <div class="w-slide"><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/products/{{$product->Thumpnail2}}" loading="lazy" alt="" class="image-54"></div>
          
          @endif
          @if(isset($product->Thumpnail3) and !empty($product->Thumpnail3))
          <div class="w-slide"><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/products/{{$product->Thumpnail3}}" loading="lazy" alt="" class="image-54"></div>
          @endif
          @if(isset($product->Thumpnail4) and !empty($product->Thumpnail4))
          <div class="w-slide"><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/products/{{$product->Thumpnail4}}" loading="lazy" alt="" class="image-54"></div>
          
          @endif
          @if(isset($product->Thumpnail5) and !empty($product->Thumpnail5))
          <div class="w-slide"><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/products/{{$product->Thumpnail5}}" loading="lazy" alt="" class="image-54"></div>
          
          @endif
          
            
          </div>
          <div class="w-slider-arrow-left">
            <div class="w-icon-slider-left"></div>
          </div>
          <div class="w-slider-arrow-right">
            <div class="w-icon-slider-right"></div>
          </div>
          <div class="slide-nav-2 w-slider-nav w-round"></div>
        </div>
        <div class="thumpnail-holding-div" id="thumpwraper">
          @if(isset($product->Thumpnail1) and !empty($product->Thumpnail1))
          <div class="thumpnail thumpactive" id = "thumpnail1"><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/products/{{$product->MainImage}}" loading="lazy" alt="" class="image-45"></div>
          @endif
          @if(isset($product->Thumpnail2) and !empty($product->Thumpnail2))
          <div class="thumpnail" id = "thumpnail2"><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/products/{{$product->Thumpnail2}}" loading="lazy" alt="" class="image-45"></div>
          @endif
          @if(isset($product->Thumpnail3) and !empty($product->Thumpnail3))
          <div class="thumpnail" id = "thumpnail3"><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/products/{{$product->Thumpnail3}}" loading="lazy" alt="" class="image-45"></div>
          @endif
          @if(isset($product->Thumpnail4) and !empty($product->Thumpnail4))
          <div class="thumpnail" id = "thumpnail4"><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/products/{{$product->Thumpnail4}}" loading="lazy" alt="" class="image-45"></div>
          @endif
          @if(isset($product->Thumpnail5) and !empty($product->Thumpnail5))
          <div class="thumpnail" id = "thumpnail5"><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/products/{{$product->Thumpnail5}}" loading="lazy" alt="" class="image-45"></div>
          @endif
          
        </div>
        <div class="main-image-div"><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/products/{{$product->MainImage}}" loading="lazy" alt="" class="image-50" id="productImage"></div>
      </div>
      <div id="w-node-9f90e2661ba7-5d33da88" class="product-description-div">
        <h5 class="brand-text">{{ trans($product->Brand) }}</h5>
        <h2 class="product-name-text">{{ $product->product_name }} </h2>
        <div class="availability-div">
          <h6 class="availability-text">Availability</h6>
          @if( $product->unit_in_stock >0)
               <div class="button">
              <h6 class="in-stock-text">in stock</h6>
            </div>
            @else
               <div class="button" style="background-color: #bb0303">
              <h6 class="in-stock-text">Out of stock</h6>
            </div>
            @endif
          
        </div>
        <div class="description-div">
          <!-- <h4 class="detailing-headings">DESCRIPTION</h4> -->
          <p class="paragraph-9">{{ $product->long_description }}</p>
        </div>
        @if(!empty($product->Available_sizes))
        <div class="option-div">
          <h6 class="heading-25">Choose an option</h6>
          <div class="option-listing-div">
                <input type="hidden" name="SelSize" id="SelSize" value="">
                
                @foreach(explode(',', $product->Available_sizes) as $option)
                @php
                $col = "white";
                $textcolor = "black";
                  $pcolour = strtoupper($product->size);
                  $ocolour = strtoupper($option);
                  if(strcmp($pcolour,$ocolour) == 0){
                      $col = "#bb0303"; 
                      $textcolor = "white";
                      
                  }
                @endphp
            <div class="button-copy" style="background-color:{{$col}} " onClick = "SelOption('{{$option}}','{{ $product->Product_id }}','size')">
              <h6 class="heading-16" style="color:{{$textcolor}} ">{{$option}}</h6>
            </div>
            
            @endforeach
          </div>
        </div>
        @endif
        @if(!empty($product->Available_colours))
        <div class="option-div">
          <h6 class="heading-25">Available colours</h6>
          <div class="option-listing-div">
          <input type="hidden" name="SelColour" id="SelColour" value="">
            @foreach(explode(',', $product->Available_colours) as $option)
            @php
              $col1 = "white";
              $textcolor = "black";
              $pcolour = strtoupper($product->colour);
              $ocolour = strtoupper($option);

             // echo 'pcolour'.$pcolour.'and $ocolour'.$ocolour;
              if(strcmp($pcolour,$ocolour) == 0){
                   $col1 = "#bb0303"; 
                   $textcolor = "white";
                   
               }
            @endphp
            <div class="button-copy" style="margin-right: 5px;background-color:{{$col1}}" onClick = "SelOption('{{$option}}','{{ $product->Product_id }}','colour')">
              <h6 class="heading-16" style="color:{{$textcolor}} ">{{ $option }}</h6>
            </div>
            @endforeach
          </div>
        </div>
        @endif
        <!-- <div class="option-listing-div">
          
            
            <div >
              <h3 class="heading-16"> {{ $product->presentPrice() }}</h3>
            </div>
        </div> -->
        <div class="cart-and-qty-div">
        @if( $product->unit_in_stock >0)
        <div class="html-embed-2 w-embed">
            <select name="quantity" autocomplete="off" id="quantity" tabindex="0"  class="selectboxstyle">
                    <option value="1" selected="">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    </select>
            
          </div>
          @endif
          <input type="hidden" value = "{{ $product->Product_id }}" id = "Product_id">
          <div class="div-block-108">
            
            @if( $product->unit_in_stock >0)
            <div class="addtocartbuttondescription" id = "{{ $product->Product_id }}"  onClick= "AddToCart(event)">
            <img
		  @php 
			 if($product->IsItemAddedtoCart()) { 
             echo "src='https://abccontentbucket.s3.me-south-1.amazonaws.com/images/greentick.svg'"; } else { echo "src='https://abccontentbucket.s3.me-south-1.amazonaws.com/images/Shoplist-Ikea-rzk-version_1.svg'";}
			@endphp  width="19" height="19" alt="" class="cart-img" id="product{{$product->Product_id}}cartimg">
            <h5 class="addtocarttext" id="product{{$product->Product_id}}carttext"> 
            @php 
			   if($product->IsItemAddedtoCart()) { 
             echo "Added To Cart "; }else{ echo "Add To Cart";}
			@endphp</h5>
            </div>
            @endif
      <!--      <div class="fav-copy addtocartbutton" id = "{{ 'Favourite'.$product->Product_id }}"  onClick= "AddToFavourite(event,'desktop')">
            <svg 
            @php 
			   if($product->IsAddedAsFavourite()) { 
             echo "class='ico liked'"; }else{ echo "class='ico'";}
			   @endphp 
             width="17" height="17" viewBox="0 0 24 24" id="product{{$product->Product_id}}">
          <path d="M12,21.35L10.55,20.03C5.4,15.36 2,12.27 2,8.5C2,5.41 4.42,3 7.5,3C9.24,3 10.91,3.81 12,5.08C13.09,3.81 14.76,3 16.5,3C19.58,3 22,5.41 22,8.5C22,12.27 18.6,15.36 13.45,20.03L12,21.35Z"></path>
          </svg>
         <input type="hidden" name="product_{{$product->Product_id}}_text" id="product_{{$product->Product_id}}_text" @php 
			   if($product->IsAddedAsFavourite()) { 
             echo "value='Unlike'"; }else{ echo "value='Like'";}
			       @endphp" />
             <div class="like-text" id="product_{{$product->Product_id}}_div"> 
				 @php 
			   if($product->IsAddedAsFavourite()) { 
             echo "Unlike"; }else{ echo "Like";}
			    @endphp </div>
              
            </div>
            <div class="favbuttondescription" id = "{{ 'Favourite1'.$product->Product_id }}"  onClick= "AddToFavourite(event,'mobile')">
            <svg 
            @php 
			   if($product->IsAddedAsFavourite()) { 
             echo "class='ico liked'"; }else{ echo "class='ico'";}
			   @endphp 
             width="17" height="17" viewBox="0 0 24 24" id="product1{{$product->Product_id}}">
          <path d="M12,21.35L10.55,20.03C5.4,15.36 2,12.27 2,8.5C2,5.41 4.42,3 7.5,3C9.24,3 10.91,3.81 12,5.08C13.09,3.81 14.76,3 16.5,3C19.58,3 22,5.41 22,8.5C22,12.27 18.6,15.36 13.45,20.03L12,21.35Z"></path>
          </svg>
         <input type="hidden" name="product_{{$product->Product_id}}_text1" id="product_{{$product->Product_id}}_text1" @php 
			   if($product->IsAddedAsFavourite()) { 
             echo "value='Unlike'"; }else{ echo "value='Like'";}
			       @endphp" />
             <div class="like-text" id="product_{{$product->Product_id}}_div1"> 
				 @php 
			   if($product->IsAddedAsFavourite()) { 
             echo "Unlike"; }else{ echo "Like";}
			    @endphp </div>
             
            </div> -->
          </div>
        </div>
        <!-- onclick="window.open('whatsapp:\/\/send?text=' + encodeURIComponent(document.URL)); return false;" -->
        <!-- <a  class="div-block-122" href="https://api.whatsapp.com/send?text=https://api.whatsapp.com/send?text=http%3A%2F%2F192.168.1.196%3A8000%2FDescription%2F{{$product->Product_id}}" title="Share On Whatsapp" ><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/images/003-whatsapp.svg" loading="lazy" width="26" height="20"  alt="" class="image-67">
          <h6 class="heading-34">Share </h6>
         </a> -->
      </div>
      <div class="detailing-div">
        <!-- <div class="description-div">
          <h4 class="detailing-headings">DESCRIPTION</h4>
          <p class="paragraph-9">{{ $product->long_description }}</p>
        </div> -->
        <div class="specification-heading">
          <h4 class="detailing-headings">Specifications</h4>
        </div>
        <div class="w-layout-grid specification-list-grid">
          <div id="w-node-9f90e2661b83-5d33da88" class="greydiv">
            <h4 class="specifications-text">Itemcode</h4>
          </div>
          <div class="lightgreydiv">
            <h4 class="specifications-description">{{ $product->Product_id }}</h4>
          </div>
          <div id="w-node-9f90e2661b89-5d33da88" class="greydiv">
            <h4 class="specifications-text">Brand</h4>
          </div>
          <div class="lightgreydiv">
            <h4 class="specifications-description">{{ $product->Brand }}</h4>
          </div>
          <div id="w-node-9f90e2661b8f-5d33da88" class="greydiv">
            <h4 class="specifications-text">Size</h4>
          </div>
          <div class="lightgreydiv">
            <h4 class="specifications-description">{{ $product->size }}</h4>
          </div>
          <div id="w-node-9f90e2661b95-5d33da88" class="greydiv">
            <h4 class="specifications-text">Classification</h4>
          </div>
          <div class="lightgreydiv">
            <h4 class="specifications-description">{{ $product->categories->Category_Name }}</h4>
          </div>
          <div id="w-node-9f90e2661b9b-5d33da88" class="greydiv">
            <h4 class="specifications-text">Material</h4>
            </div>
          <div class="lightgreydiv">
            <h4 class="specifications-description">{{ $product->material }}</h4>
          </div>
          @php
          if(strcmp($product->Category_ID ,'K') == 0){
            @endphp
            
          <div id="w-node-9b26c9b1bb4e-5d33da88" class="greydiv">
            <h4 class="specifications-text">Thickness</h4>
          </div>
          <div class="lightgreydiv">
            <h4 class="specifications-description">{{ $product->Thickness }}</h4>
          </div>
          <div id="w-node-9f90e2661ba1-5d33da88" class="greydiv">
            <h4 class="specifications-text">Finish</h4>
          </div>
          <div class="lightgreydiv">
            <h4 class="specifications-description">{{ $product->Finish}}</h4>
          </div>
            @php
          }else{
            @endphp
            
          <div id="w-node-9b26c9b1bb4e-5d33da88" class="greydiv">
            <h4 class="specifications-text">colour</h4>
          </div>
          <div class="lightgreydiv">
            <h4 class="specifications-description">{{ $product->colour }}</h4>
          </div>
          <div id="w-node-9f90e2661ba1-5d33da88" class="greydiv">
            <h4 class="specifications-text">Space</h4>
          </div>
          <div class="lightgreydiv">
            <h4 class="specifications-description">{{ $product->Application }}</h4>
          </div>
        
            @php
          }
          @endphp
          
          
         
        </div>
      </div>
      
      @if(!empty($relatedProducts) && $relatedProducts->count()>=1)
      <div id="w-node-9f90e2661bc6-5d33da88" class="related-products">
        <div class="div-with-border">
          <h4 class="detailing-headings combo">Frequently bought together</h4>
          <div class="w-layout-grid related-product-div">
            <div class="product-image-div"><!--  -->
              <a href="{{ route('Product.description', [app()->getlocale(),$product->Product_id]) }}" >  
                  <img height="150" width="200" src="/abccontentbucket.s3.me-south-1.amazonaws.com/products/{{$product->MainImage}}" data-w-id="043e5686-14b4-8749-315b-9f90e2661bcc" alt="" class="product-image">
                  <!-- <h4 class="related-product-heading">{{ $product->product_name }}</h4> -->
              </a>
              <a href="{{ route('Product.description', [app()->getlocale(),$product->Product_id]) }}" class="related-product-link"  >
                   <h5 class="related-product-heading">{{ $product->product_name }}</h5>
              </a>

            </div>

            <?php
                  $i=0;
                  
            ?>
            @foreach( $relatedProducts as $item)
            <?php
            $i++;
                 
                  
            ?>

            <div class="product-image-div">
            <input type="hidden" name="{{'rel'.$i}}"  id="{{'rel'.$i}}" value = "{{ $item->Related_Product_id }}">
              <a href="{{ route('Product.description', [app()->getlocale(),$item->Related_Product_id]) }}" class="combocolorandavoidunderline w-inline-block">  
                  <img height="150" width="200" src="/abccontentbucket.s3.me-south-1.amazonaws.com/products/{{$item->MainImage}}" data-w-id="043e5686-14b4-8749-315b-9f90e2661bcc" alt="" class="product-image">
                  <!-- <h4 class="related-product-heading">{{ $item->product_name }}</h4> -->
              </a>
              <a href="{{ route('Product.description', [app()->getlocale(),$item->Related_Product_id]) }}" class="related-product-link" >
                   <h5 class="related-product-heading">{{ $item->product_name }}</h5>
              </a>

            </div>
            @endforeach
          </div>
          <div class="addtocartbutton" onClick="BuyTogetherItemsToCart('{{$product->Product_id}}',event)"><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/images/Shoplist-Ikea-rzk-version_1.svg" width="19" height="19" alt="" class="cart-img">
            <div class="buy-together">Buy Together</div>
          </div>
        </div>
      </div>
      @endif
    </div>
    @endif
    </form>
  </div>
  @include('product.notification')
  @include('Common.SimilarProducts_scroll_div')
 @include('Common.Footer') 
  <div class="whatsappbox"><a href="https://api.whatsapp.com/send?phone=971564130262&amp;abid=971564130262" class="link-block-category w-inline-block"><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/images/001-whatsapp.svg" width="35" height="35" alt="" class="whatsapp-icon"><h5 class="chat-with-us">Chat<br>with Us</h5></a></div>
 </body>

</html>
<script src="/js/webflow.js" type="text/javascript"></script>
 
  <script type="text/javascript">
    // {{url('office/service/requirement/rule_delete/')}}
        function AddToCart(event){

          event.preventDefault();
          //event.stopPropagation();
          
          console.log("HI");
          var Product_id = $("#Product_id").val();
          var url = "{{ route('Cart.Add',app()->getlocale()) }}";
          //url = url.replace("http", "https");
          console.log(url);
          console.log(Product_id);
         
          
          var imageid = "product"+Product_id+"cartimg";
			    var textid = "product"+Product_id+"carttext";
			    var imageurl = "/abccontentbucket.s3.me-south-1.amazonaws.com/images/greentick.svg";
          console.log('imageurl = '+imageurl);
          document.getElementById(imageid).src = imageurl;
          $("#"+textid).empty();
          $("#"+textid).append("Added to Cart");
           var _token = '<?php echo csrf_token() ?>';
           console.log(url);
           $.ajax(

                  {
                  type: "post",
                  url: url,
                  //alert(url);
                  
                  data: {  id: $("#Product_id").val(), Quantity: $("#quantity").val() ,  _token:_token},
                  success:function(result,e) {
                   // alert(result.message+"and"+ result.count+"and"+ result.success );
                    console.log(result);
                      console.log(result.data);
                    console.log(result.message);
                    console.log(result.count);
                    if(result.count > 0){
                      if($("#cartCount").length){
                        $("#cartCount").css('display','flex');
                        $("#notification").css('display','flex');
                        $("#notify_qty").val($("#quantity").val());
                          $("#cartCountText").text(result.count);
                        }
                        if($("#cartCount1").length){
                        $("#cartCount1").css('display','flex');
                        $("#notification").css('display','flex');
                        $("#notify_qty").val($("#quantity").val());
                          $("#cartCountText1").text(result.count);
                        }
                    
                    }else{
                      $("#cartCount").css('display','none');
                      $("#cartCount1").css('display','none');
                      $("#notification").css('display','none');
                    }
                    
                    
                    // e.preventDefault();
                    
                  },
                  error:function(result) {
                    alert('error');
                    console.log(result);

                  }
              });
           
        
       }


        $(function() { 
          $('[data-toggle="tooltip"]').tooltip();
          var Product_id = $("#Product_id").val();
          var qty = $("#quantity").val();

          $.ajaxSetup({
                        headers: {
                          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                          // 'Content-Security-Policy':$('meta[name="Content-Security-Policy"]').attr('upgrade-insecure-requests') 
                        }
                      });
          $(".thumpnail").on('click',function(event){
                
                $(".thumpnail").removeClass("thumpactive");
                $(this).addClass("thumpactive");
                var $pic = $(this).find('img');
                $('#productImage').attr('src',$pic.attr('src'));

               
            });
        });
        function AddToFavourite(event,fromvalue){

          event.preventDefault();
          //event.stopPropagation();
          var Product_id = $("#Product_id").val();
          if(fromvalue == "desktop"){
                  var likeBtn = document.getElementById("product"+Product_id);

                  //   likeBtn.addEventListener('click', function() {
                  likeBtn.classList.toggle('liked');
                  var idcontent = "product_"+Product_id+"_text";
                  console.log(idcontent);
                  console.log(document.getElementById(idcontent).value);
                  if(document.getElementById(idcontent).value == "Like"){
                  document.getElementById(idcontent).value = "Unlike";
                  console.log(document.getElementById(idcontent).value);
                  $html = $("<h5 class='like-text'>Unlike</h1>");
                  var idvalue = "product_"+Product_id+"_div";
                  $("#"+idvalue).empty();
                  $("#"+idvalue).append($html);
                  // $("#"+).append($html);
                  }else{
                  document.getElementById(idcontent).value = "Like";
                  console.log(document.getElementById(idcontent).value);
                  $html = $("<h5 class='like-text'>Like</h1>");
                  var idvalue = "product_"+Product_id+"_div";
                  $("#"+idvalue).empty();
                  $("#"+idvalue).append($html);

                  }
          }else{
            var likeBtn = document.getElementById("product1"+Product_id);

            //   likeBtn.addEventListener('click', function() {
            likeBtn.classList.toggle('liked');
            var idcontent = "product_"+Product_id+"_text1";
            console.log(idcontent);
            console.log(document.getElementById(idcontent).value);
            if(document.getElementById(idcontent).value == "Like"){
            document.getElementById(idcontent).value = "Unlike";
            console.log(document.getElementById(idcontent).value);
            $html = $("<h5 class='like-text'>Unlike</h1>");
            var idvalue = "product_"+Product_id+"_div1";
            $("#"+idvalue).empty();
            $("#"+idvalue).append($html);
            // $("#"+).append($html);
            }else{
            document.getElementById(idcontent).value = "Like";
            console.log(document.getElementById(idcontent).value);
            $html = $("<h5 class='like-text'>Like</h1>");
            var idvalue = "product_"+Product_id+"_div1";
            $("#"+idvalue).empty();
            $("#"+idvalue).append($html);
          }
          }
          console.log("HI");
          // var Product_id = $("#Product_id").val();
          var url = "{{ route('Favourite.Add',app()->getlocale()) }}";
          //url = url.replace("http", "https");
          console.log(url);
          console.log(Product_id);
           var _token = '<?php echo csrf_token() ?>';
           console.log(url);
           $.ajax(

                  {
                  type: "post",
                  url: url,
                  //alert(url);
                  
                  data: {  id: $("#Product_id").val(), Quantity: $("#quantity").val() },
                  success:function(result,e) {
                   // alert(result.message+"and"+ result.count+"and"+ result.success );
                    console.log(result);
                      console.log(result.data);
                    console.log(result.message);
                    console.log(result.count);
                    // if(result.count > 0){
                    //   $("#cartCount").css('display','inline');
                    //   $("#cartCountText").text(result.count);
                    
                    // }else{
                    //   $("#cartCount").css('display','none');
                    // }
                    
                    
                    // e.preventDefault();
                    
                  },
                  error:function(result) {
                    alert('error');
                    console.log(result);

                  }
              });
           
       }
        function BuyTogetherItemsToCart(selectedProduct,event){

          event.preventDefault();
          //event.stopPropagation();
          console.log("HI");
          console.log(selectedProduct);
          var multipleItems = [];
          multipleItems.push(selectedProduct);
          if($("#rel1"). length){
              multipleItems.push($("#rel1").val());
          }
          if($("#rel2"). length){
              multipleItems.push($("#rel2").val());
          }
          var url = "{{ route('Cart.Add.Multiple',app()->getlocale()) }}";
          //url = url.replace("http", "https");
          var _token = '<?php echo csrf_token() ?>';
            console.log(url);
               $.ajax(

                  {
                  type: "post",
                  url: url,
                  data: {
                            multipleItems: multipleItems, 
                            Quantity: $("#quantity").val()
                        },
                  success:function(result,e) {
                   // alert(result.message+"and"+ result.count+"and"+ result.success );
                    console.log(result);
                    console.log(result.message);
                    console.log(result.count);
                    if(result.count > 0){
                      if($("#cartCount").length){
                                $("#cartCount").css('display','flex');
                                  $("#cartCountText").text(result.count);
                                }
                                if($("#cartCount1").length){
                                $("#cartCount1").css('display','flex');
                                  $("#cartCountText1").text(result.count);
                                }
                    
                    }else{
                      $("#cartCount").css('display','none');
                      $("#cartCount1").css('display','none');
                    }
                    
                    
                    // e.preventDefault();
                    
                  },
                  error:function(result) {
                    alert('error');
                    console.log(result);

                  }
              });


         
        
         
       }
       function SelOption(Option,productID,type){
          if(type == "size"){
              $("#SelSize").val(Option);
          }else{
              $("#SelColour").val(Option);
          }
          $("#Description").submit();
       }


       $("#facebookShare").on('click', function(event) {
    event.preventDefault();
    // alert("hi");
    var url = "{{ route('share.count',app()->getlocale()) }}";
            //url = url.replace("http", "https");
            var _token = '<?php echo csrf_token() ?>';
            var status=false;
            console.log(url);
            var shareURL ="https://www.facebook.com/sharer/sharer.php?u=https://abcgroupuae.com/en/Description/"+$("#Product_id").val();
          $.ajax(

                  {
                  type: "post",
                  url: url,
                  data: {   
                         _token  :_token,
                         id: $("#Product_id").val(),
                         medium: "facebook",
                      },
                  success:function(result,e) {
                  // alert(result.message+"and"+ result.count+"and"+ result.success );
                    console.log(result);
                      console.log(result.status);
                      console.log(result.date1);
                      console.log(result.date2);
                      if(result.status=="success"){
                        status = true;
                        window.open(shareURL, '_blank');
                      }
                   
                    // e.preventDefault();
                    
                  },
                  error:function(result) {
                    alert('error');
                    console.log(result);
                    console.log(result.date1);
                      console.log(result.date2);

                  }
           });
    
      
    
});
$("#whatsappShare").on('click', function(event) {
    event.preventDefault();
    // alert("hi");
    var url = "{{ route('share.count',app()->getlocale()) }}";
            //url = url.replace("http", "https");
            var _token = '<?php echo csrf_token() ?>';
            var status=false;
            console.log(url);
            var shareURL ="https://api.whatsapp.com/send?text=https://abcgroupuae.com/en/Description/"+$("#Product_id").val();
          $.ajax(

                  {
                  type: "post",
                  url: url,
                  data: {   
                         _token  :_token,
                         id: $("#Product_id").val(),
                         medium: "whatsapp",
                      },
                  success:function(result,e) {
                  // alert(result.message+"and"+ result.count+"and"+ result.success );
                    console.log(result);
                      console.log(result.status);
                      console.log(result.date1);
                      console.log(result.date2);
                      if(result.status=="success"){
                        status = true;
                        window.open(shareURL, '_blank');
                      }
                   
                    // e.preventDefault();
                    
                  },
                  error:function(result) {
                    alert('error');
                    console.log(result);
                    console.log(result.date1);
                      console.log(result.date2);

                  }
           });
    
      
    
});

    </script>

