<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Tue Sep 15 2020 12:53:39 GMT+0000 (Coordinated Universal Time)  -->


<html data-wf-page="5f91211170b33add84a26cf0" data-wf-site="55f103f7e5224a5353e5ce1c7">


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
<?php     
    use App\Product;
    $SId = Session::get('id');
  ?>
<div class="modal-wrapper"  id="popup">
    <div class="form-wrapper w-clearfix"><a href="{{route('Cart.View',app()->getlocale())}}" aria-current="page" class="close w--current">x </a>
      <h2 class="heading-4 headinginnerpages">Please Fill the form</h2>
      <div class="w-form">
        <form id="email-form-4" name="email-form-4" data-name="Email Form 4" method="post" id="ContactForm" action="{{ route('shoplist.enquire',app()->getlocale()) }}">
          {{csrf_field()}}
          <input type="text" class="w-input" autofocus="true" maxlength="256" name="name" data-name="Name" placeholder="Enter Your name" id="name" required="">
          <input type="email" class="w-input" autofocus="true" maxlength="256" name="email" data-name="Email" placeholder="Enter your mail id" id="email" required="">
          <input type="tel" class="w-input" autofocus="true" maxlength="256" name="PhNo" data-name="PhNo" placeholder="Enter Your mobile number" id="PhNo" required="" pattern="[0-9]{10}">
          <input type="submit" value="Get a Quote" data-wait="Please wait..." class="btnclass borderclass w-button" onclick="contactus()">
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
  <div class="main-container w-container" id ="ShopList">
  <div id ="CartContent">
    <?php     
            if(! (\Cart::session($SId)->isEmpty())) { ?>
                
                       <div class="heading-div" id ="CARTLIST">
                        <div>
                          <h1 class="heading-29">Shoplist</h1>
                        </div>
                        <div class="div-block-78">
                          <div class="div-block-96">
                            <h4 class="heading-27">Product Image</h4>
                          </div>
                          <div class="div-block-96">
                            <h4 class="heading-27">Product Description</h4>
                          </div>
                          <h4 id="w-node-772a9433cff5-fa8c5f7d" class="heading-28">Quantity</h4>
                          <div id="w-node-772a9433cff7-fa8c5f7d" class="div-block-98">
                            <h4 class="heading-4"></h4>
                          </div>
                          <div>
                            <h4 class="heading-4-copy"></h4>
                          </div>
                        </div>
                      </div>
                      <form id="cartUpdate" name="email-form" data-name="Email Form" class="form-4">
                          @csrf
                          <div class="w-layout-grid cart-list-1" id="Cart" name="Cart">
                                        <?php 
                                            if( !($cartContent->isEmpty())){
                                                $row = 0;
                                                $rowcount = $cartContent->count();
                                                $subTotal = \Cart::session($SId)->getSubTotal();
                                                $vat = 0.05* $subTotal;
                                                $Total = $vat+$subTotal;

                                        ?>
                                                <input type="hidden" name="rowcount" id="rowcount" value={{$rowcount}}>
                                        <?php
                                                foreach($cartContent as $item){
                                                  $row++;
                                                  $product = Product::find($item->id);
                                                  $summedPrice = \Cart::session($SId)->get($item->id)->getPriceSum();


                                                
                                        ?>
                                        <div class="rowid" id="{{'row'.$row}}">
                                          <div class="cartrow-grid-without-price">
                                            <div id="w-node-772a9433cfff-fa8c5f7d" class="procontentdiv">
                                              <div class="div-block-90">
                                                <a href="{{route('Product.description',[app()->getlocale(),$product->Product_id])}}" class="link-block-2 w-inline-block">
                                                  <div class="div-block-75"><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/products/{{$product->MainImage }}" loading="lazy" alt="{{$product->MainImage }}" class="image-51" id = "{{'Productpic_'.$row}}"></div>
                                                </a>
                                              </div>
                                            </div>
                                            <a href="{{route('Product.description',[app()->getlocale(),$product->Product_id])}}" class="link-block-2 w-inline-block">
                                              <div class="productname-2">
                                                <h5 class="heading-26">{{ $product->product_name }}</h5>
                                                <div class="text-block-35">{{ $product->long_description }}</div>
                                              </div>
                                            </a>
                                            <div id="w-node-772a9433d00a-fa8c5f7d" class="div-block-89">
                                              <div class="form-block-5 w-form">
                                                  <input type="hidden" name="{{'productId_'.$row}}" id="{{'productId_'.$row}}" value="{{ $product->Product_id }}">
                                                  <input type="text" class="text-field-3 w-input" maxlength="256" name="{{'qtyText'.$row}}" id="{{'qtyText'.$row}}" data-name="Name" 
                                                    value= "{{$item->quantity}}"  onChange="UpdateCartQuantity({{$row}},event) ">
                                                
                                              </div>
                                            </div>
                                            <div id="w-node-772a9433d017-fa8c5f7d" class="deletebuttondiv">
                                              <div class="div-block-95" ><a id="{{'delete_'.$row}}" href="#" class="link-3" onClick="RemoveFromCart({{$row}},event)">Remove</a></div>
                                            </div>
                                          </div>
                                          <div>
                                            <div class="grey-divider-div"></div>
                                          </div>
                                        </div>
                                  <?php
                                    }
                                  ?>
                          </div>
                      </form>
                      <?php
                                    }
                                  ?>     
                      <div class="button-div" id="purchaseButton" onclick="SendMail()"><a data-w-id="058c16d4-5fe2-d8eb-62df-fa46370ee06d" href="#" class="buttonclass-copy combostyle w-button">Get a Quote</a></div> 

            <?php }?>
           </div>
            <?php     
            if(\Cart::session($SId)->isEmpty()) {
                  
              if( ($OrderContent->isEmpty())) {
          
                $message ="Cart is Empty... Please Continue shopping";
          ?>
         
              <div style="display:flex;flex-direction:column;align-items:center;justify-content:center;height:20%;padding:100px;padding-bottom:5px;" id="emptycart" > 
                <img src="/abccontentbucket.s3.me-south-1.amazonaws.com/images/empty-state-cart.png" style="width:30%;height:50%;"/>
                <form action ="{{route('Explore',app()->getlocale())}}" style="display:flex;flex-direction:column;align-items:center;justify-content:center" >
                  <input type="submit" value="Start Shopping" class="continuebutton" >
                </form>
              </div>
              <h4 style="text-align:center;" id = "message">{{$message}}</h4>
              
          <?php }else{ ?>
            <div id ="OrderContent">
                     <div class="heading-div" id ="OrderList">
                        <div>
                          <h1 class="heading-29">Products you have enquired about</h1>
                        </div>
                        <div class="div-block-78">
                          <div class="div-block-96">
                            <h4 class="heading-27">Product Image</h4>
                          </div>
                          <div class="div-block-96">
                            <h4 class="heading-27">Product Description</h4>
                          </div>
                          <h4 id="w-node-772a9433cff5-fa8c5f7d" class="heading-28">Quantity</h4>
                          <div id="w-node-772a9433cff7-fa8c5f7d" class="div-block-98">
                            <h4 class="heading-4"></h4>
                          </div>
                          <div>
                            <h4 class="heading-4-copy"></h4>
                          </div>
                        </div>
                      </div>
                            <div class="w-layout-grid cart-list-1" id="Order" name="Order">
                                        <?php 
                                            if( !($OrderContent->isEmpty())){
                                                $row = 0;
                                                $rowcount = $OrderContent->count();
                                                // $subTotal = \Cart::session($SId)->getSubTotal();
                                                // $vat = 0.05* $subTotal;
                                                // $Total = $vat+$subTotal;

                                        ?>
                                                <input type="hidden" name="rowcount" id="rowcount" value={{$rowcount}}>
                                        <?php
                                                foreach($OrderContent as $item){
                                                  $row++;
                                                  $product = Product::find($item->id);
                                                //   $summedPrice = \Cart::session($SId)->get($item->id)->getPriceSum();


                                                
                                        ?>
                                        <div class="rowid" id="{{'row'.$row}}">
                                          <div class="cartrow-grid-without-price">
                                            <div id="w-node-772a9433cfff-fa8c5f7d" class="procontentdiv">
                                              <div class="div-block-90">
                                                <a href="{{route('Product.description',[app()->getlocale(),$product->Product_id])}}" class="link-block-2 w-inline-block">
                                                  <div class="div-block-75"><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/products/{{$product->MainImage }}" loading="lazy" alt="{{$product->MainImage }}" class="image-51" ></div>
                                                </a>
                                              </div>
                                            </div>
                                            <a href="{{route('Product.description',[app()->getlocale(),$product->Product_id])}}" class="link-block-2 w-inline-block">
                                              <div class="productname-2">
                                                <h5 class="heading-26">{{ $product->product_name }}</h5>
                                                <div class="text-block-35">{{ $product->long_description }}</div>
                                              </div>
                                            </a>
                                            <div id="w-node-772a9433d00a-fa8c5f7d" class="div-block-89">
                                              <div class="form-block-5 w-form">
                                                  
                                                  <input type="text" class="text-field-3 w-input" maxlength="256" name="{{'qtyText'.$row}}" id="{{'qtyText'.$row}}" data-name="Name" 
                                                    value= "{{$item->quantity}}"  disabled="true">
                                                
                                              </div>
                                            </div>
                                            <div id="w-node-772a9433d017-fa8c5f7d" class="deletebuttondiv">
                                              
                                            </div>
                                          </div>
                                          <div>
                                            <div class="grey-divider-div"></div>
                                          </div>
                                        </div>
                                  <?php
                                    }
                                  ?>
                          </div>

         <?php }} }?>
        
    

    <!-- end of cart code -->


    <!-- start of wish list -->
    <div id="wishListDiv">
          <?php     
              if( !($wishListContent->isEmpty())) {
          ?>

                   <div class="heading-div" id ="FAVLIST">
                      <div>
                        <h1 class="heading-29">Favourites</h1>
                        <div class="div-block-78">
                          <div class="div-block-96">
                            <h4 class="heading-27">Product Image</h4>
                          </div>
                          <div class="div-block-96">
                            <h4 class="heading-27">Product Description</h4>
                          </div>
                          <h4 id="w-node-e347bbebc6ac-fa8c5f7d" class="heading-28">Quantity</h4>
                          <div id="w-node-e347bbebc6ae-fa8c5f7d" class="div-block-98">
                            <h4 class="heading-4"></h4>
                          </div>
                          <div>
                            <h4 class="heading-4-copy"></h4>
                          </div>
                        </div>
                      </div>
                    </div>
                    <form id = "wishList" name = "wishList" data-name = "wishList" class = "wishList">
                      @csrf
                    <div class="w-layout-grid whishlist-1" id="WishCart" name="WishCart">
                          <?php 
                              if( !($wishListContent->isEmpty())){
                                  $row = 0;
                                  $rowcount = $wishListContent->count();
                          ?>
                                  <input type="hidden" name="rowcount" id="rowcount" value={{$rowcount}}>
                          <?php
                                  foreach($wishListContent as $item){
                                    $row++;
                                    $product = Product::find($item->id);
                                    $summedPrice =0;
                                    $summedPrice = app('wishlist')->get($item->id)->getPriceSum();

                                  
                          ?>

                      <div class="rowid" id="{{'Wishrow'.$row}}">
                        <div class="wishlitrow-grid-without-price">
                          <div class="procontentdiv">
                            <div class="div-block-90">
                              <a href="{{route('Product.description',[app()->getlocale(),$product->Product_id])}}" class="link-block-2 w-inline-block">
                                <div class="div-block-75 combo"><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/products/{{$product->MainImage }}" loading="lazy" alt="{{$product->MainImage }}" class="image-52" id = "{{'WishProductpic_'.$row}}"></div>
                              </a>
                            </div>
                          </div>
                          <a href="{{route('Product.description',[app()->getlocale(),$product->Product_id])}}" class="link-block-2 w-inline-block">
                            <div class="productname-2">
                              <h5 class="heading-26">{{ $product->product_name }}</h5>
                              <div class="text-block-35">{{ $product->long_description }}</div>
                            </div>
                          </a>
                          <div id="w-node-772a9433d096-fa8c5f7d" class="div-block-89">
                            <div class="form-block-5 w-form">
                                        <input type="hidden" name="{{'WishproductId_'.$row}}" id="{{'WishproductId_'.$row}}" value="{{ $product->Product_id }}">
                                        <input type="text" class="text-field-3 w-input" maxlength="256" name="{{'WishqtyText'.$row}}" id="{{'WishqtyText'.$row}}" data-name="Name" 
                                        value= "{{$item->quantity}}"  onChange="UpdateWishListQuantity({{$row}},event)">
                            </div>
                          </div>
                          <div id="w-node-772a9433d0a3-fa8c5f7d" class="div-block-106">
                            <div class="shoplistcartaddingbutton" id = "{{'WishAddCart_'.$row}}" onClick="addFromWishListToCart({{$row}},'ShopList',event)"><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/images/Shoplist-Ikea-rzk-version_1.svg" width="19" height="19" alt="" class="cart-img">
                              <div class="addtocarttext">Add To Cart</div>
                            </div>
                            <div class="div-block-95"><a id="{{'Wishdelete_'.$row}}" href="#" class="link-3" onClick="RemoveFromWishList({{$row}},event)">Remove</a></div>
                          </div>
                        </div>
                        <div>
                          <div class="grey-divider-div"></div>
                        </div>
                      </div>
                      <?php  } }  ?>
                    </div>

                    </form>                 

          <?php  }   ?>                            
  
     </div>


  </div>
  @include('Common.SimilarProducts_scroll_div')
 

<script>
      function formsubmit(){
        this.form.submit();
      }
      function SendMail(){
        console.log("Hi I am inside the mail sending code");

        if($("#popup").length){
             $("#popup").css("display", "flex");
             $('.modal-wrapper').show();
             $('.modal-wrapper').css("opacity", 100);
             console.log("HI");
        }else{
          $('.modal-wrapper').show();
        }

      }
      function contactus(){
       // ContactForm
       var name="";
       var mailid ="";
       var mobile = "";
       
      if($("#name").val()==""){
        
      }else{
          name = $("#name").val();
      }
      if($("#email").val()==""){
        
      }else{
          mailid = $("#email").val();
      }
      if($("#PhNo").val()==""){
        
      }else{
          mobile = $("#PhNo").val();
      }
      
      
      $("#ContactForm").submit();


   }

   function addFromWishListToCart(rowid, fromValue ,event){
    console.log("hi from inside similar product product-image" + fromValue);
          event.preventDefault();
          //alert(productId +" and "+fromValue);
            var url = "{{ route('Cart.Add',app()->getlocale()) }}";
            var _token = '<?php echo csrf_token() ?>';
            var productId = $('#WishproductId_'+rowid).val();
            console.log(productId);
            // 'qtyText'.$row
            var quantity = $('#WishqtyText'+rowid).val();
            //url = url.replace("http", "https");
            console.log(url);
            console.log(_token);
            $.ajax({
                  type: "post",
                  url: url,
                  data: {   
                               id: productId,
                         Quantity: quantity,
                         _token  :_token
                       },
                  success:function(result,e) {
                   // alert(result.message+"and"+ result.count+"and"+ result.success );
                    console.log(result);
                      console.log(result.data);
                    console.log(result.message);
                    console.log(result.count);
                    if(result.count > 0){ //checking cart is empty or not.. if not empty
                      //if not empty
                      $("#emptycart").css('display','none');
                      if($("#cartCount").length){
                                $("#cartCount").css('display','flex');
                                  $("#cartCountText").text(result.count);
                                }
                                if($("#cartCount1").length){
                                $("#cartCount1").css('display','flex');
                                  $("#cartCountText1").text(result.count);
                                }
                    
                    }else{
                      // if cart is empty
                      $("#cartCount").css('display','none');
                      $("#cartCount1").css('display','none');
                    }
                    console.log("Before Adding View");
                     if(fromValue == "ShopList"){ //opening of from value checking if



                      console.log("Adding to Cart");



                    if(!result.AlreadyAdded){// checking if the item already exist in cart
                          // do this if the item is new to the cart
                                  if(! (jQuery.isEmptyObject(result.product))){ // checking the product detail container is empty or not
                                    //do this if it is not empty
                                    if(result.count > 0 && result.count == 1){// checking if the cart is empty and no cart div present in page
                                          //console.log.(result.count);

                                          // if Cart div is not present then including cart div that cart content is appending to the container and hiding cart empty message


                                          $("#message").css('display','none');
                                        var pageurl = "{{ route('Product.description', [app()->getlocale(),':id']) }}";
                                            pageurl = pageurl.replace(':id',result.product.Product_id);
                                        var producturl =  "/abccontentbucket.s3.me-south-1.amazonaws.com/products/"+result.product.MainImage;
						                                // producturl = producturl.replace(':image', result.product.MainImage);

                                          var $html = $("<div class='heading-div' id ='CARTLIST'><div><h1 class='heading-29'>Shoplist</h1></div><div class='div-block-78'><div class='div-block-96'>"
                                                      +"<h4 class='heading-27'>Product Image</h4></div><div class='div-block-96'><h4 class='heading-27'>Product Description</h4></div>"
                                                      +"<h4 id='w-node-772a9433cff5-fa8c5f7d' class='heading-28'>Quantity</h4><div id='w-node-772a9433cff7-fa8c5f7d' class='div-block-98'>"
                                                      +"<h4 class='heading-4'></h4></div><div><h4 class='heading-4-copy'></h4></div></div></div><form id='cartUpdate' name='email-form' data-name='Email Form' class='form-4'>"
                                                      +"<input name='_token' value='"+_token+"' type='hidden'> <div class='w-layout-grid cart-list-1' id='Cart' name='Cart'><input type='hidden' name='rowcount' id='rowcount' value='"+result.count+"'>"
                                                      +"<div class='rowid' id='row"+result.count+"'><div class='cartrow-grid-without-price'><div id='w-node-772a9433cfff-fa8c5f7d' class='procontentdiv'>"
                                                      +"<div class='div-block-90'><a href='"+pageurl+"' class='link-block-2 w-inline-block'> <div class='div-block-75'><img src= '"+producturl +"' loading='lazy' alt='' class='image-51' id = 'Productpic_"+result.count+"'></div>"
                                                      +"</a></div></div><a href='"+pageurl+"' class='link-block-2 w-inline-block'><div class='productname-2'><h5 class='heading-26'>"+ result.product.product_name +"</h5>"
                                                      +"<div class='text-block-35'>"+ result.product.long_description +"</div></div></a><div id='w-node-772a9433d00a-fa8c5f7d' class='div-block-89'><div class='form-block-5 w-form'>"
                                                      +"<input type='hidden' name='productId_'"+result.count+"' id='productId_"+result.count+"' value='"+result.product.Product_id+"'><input type='text' class='text-field-3 w-input' maxlength='256' name='qtyText"+result.count+"' id='qtyText"+result.count+"' data-name='Name'"
                                                      +"value= '"+result.cartitem.quantity+"'  onChange='UpdateCartQuantity("+result.count+",event) '></div></div><div id='w-node-772a9433d017-fa8c5f7d' class='deletebuttondiv'>"
                                                      +"<div class='div-block-95' ><a id='delete_"+result.count+"' href='#' class='link-3' onClick='RemoveFromCart("+result.count+",event)'>Remove</a></div></div>"
                                                      +"</div><div><div class='grey-divider-div'></div></div></div></div></form>");
                                            newdiv2 = document.createElement( "div" ),
                                            $( "#CartContent" ).append( $html);
                                            $("<div class='button-div' id='purchaseButton' onclick='SendMail()'><a data-w-id='058c16d4-5fe2-d8eb-62df-fa46370ee06d' href='#' class='buttonclass-copy combostyle w-button'>Proceed To Purchase</a></div>").appendTo("#CartContent");
                            }
                            else
                            {


                              //if the cart div is present then appending product details to the existing cart div

                              var pageurl = "{{ route('Product.description', [app()->getlocale(),':id']) }}";
                                            pageurl = pageurl.replace(':id',result.product.Product_id);
                                        var producturl =  "/abccontentbucket.s3.me-south-1.amazonaws.com/products/"+result.product.MainImage;
						                                // producturl = producturl.replace(':image', result.product.MainImage);

                              var $temp = $("<div class='rowid' id='row"+result.count+"'><div class='cartrow-grid-without-price'><div id='w-node-772a9433cfff-fa8c5f7d' class='procontentdiv'>"
                                                      +"<div class='div-block-90'><a href='"+pageurl+"' class='link-block-2 w-inline-block'> <div class='div-block-75'><img src= '"+producturl +"' loading='lazy' alt='' class='image-51' id = 'Productpic_"+result.count+"'></div>"
                                                      +"</a></div></div><a href='"+pageurl+"' class='link-block-2 w-inline-block'><div class='productname-2'><h5 class='heading-26'>"+ result.product.product_name +"</h5>"
                                                      +"<div class='text-block-35'>"+ result.product.long_description +"</div></div></a><div id='w-node-772a9433d00a-fa8c5f7d' class='div-block-89'><div class='form-block-5 w-form'>"
                                                      +"<input type='hidden' name='productId_"+result.count+"' id='productId_"+result.count+"' value='"+result.product.Product_id+"'><input type='text' class='text-field-3 w-input' maxlength='256' name='qtyText"+result.count+"' id='qtyText"+result.count+"' data-name='Name'"
                                                      +"value= '"+result.cartitem.quantity+"'  onChange='UpdateCartQuantity("+result.count+",event) '></div></div><div id='w-node-772a9433d017-fa8c5f7d' class='deletebuttondiv'>"
                                                      +"<div class='div-block-95' ><a id='delete_"+result.count+"' href='#' class='link-3' onClick='RemoveFromCart("+result.count+",event)'>Remove</a></div></div>"
                                                      +"</div><div><div class='grey-divider-div'></div></div></div>"); 
                                                      $temp.appendTo("#Cart");
                            }

                            console.log("product fetched");  
                                    
                            }//end of jQuery.isEmptyObject(result.product)))
                    }else{
                      console.log("Hi inside cart existing quantity");
                      // do the following if the item already exist in cart
                        for(var i=1;i<=result.count;i++){
                          var pid = $('#productId_'+i).val();
                          //alert("product id" + pid);
                          if(pid == result.product.Product_id){
                                $('#qtyText'+ i).val(result.cartitem.quantity);
                                // $('#price_'+ i).text(result.summedPrice);
                                //  if($("#priceDetails"). length){
                                //           $("#subtotal").text(result.subTotal);
                                //           $("#tax").text(result.vat);
                                //           $("#grandtotal").text(result.Total);
                                //      } 
                                // break;

                          }
                        }
                        console.log("product fetched");
                        

                    }
                    
                    } // close of from value checking if
                    // e.preventDefault();
                    RemoveFromWishList(rowid,event);
                    
                  },//end of success function
                  error:function(result) {
                    alert('error');
                    console.log(result);

                  }
              });

      }
      function RemoveFromWishList(rowid,e){
            e.preventDefault();
           // e.stopP
           console.log("Hi inside js function");
            var productId = $('#WishproductId_'+rowid).val();
            //alert(productId);'qtyText'.$row
            var quantity = $('#WishqtyText'+rowid).val();
            console.log(quantity);
            var url = "{{ route('Favourite.Remove',app()->getlocale()) }}";
            //url = url.replace("http", "https");
            var _token = '<?php echo csrf_token() ?>';
            console.log(url);
            console.log(_token);
            $.ajax(

                  {
                  type: "post",
                  url: url,
                  data: {   
                               id: productId,
                         
                         _token  :_token
                       },
                  success:function(result,e) {
                   // alert(result.message+"and"+ result.count+"and"+ result.success );
                    console.log(result);
                      console.log(result.data);
                    console.log(result.message);
                    console.log(result.count);
                    var rowidd = parseInt(rowid);
                    var count= parseInt(result.count);
                    if($("#similar"+productId).length){
                      var likeBtn = document.getElementById("similar"+productId);
                      likeBtn.classList.toggle('liked');
                      var idcontent = productId+"_text";
                            console.log(idcontent);
                            console.log(document.getElementById(idcontent).value);
                            if(document.getElementById(idcontent).value == "Like"){
                              document.getElementById(idcontent).value = "Unlike";
                              console.log(document.getElementById(idcontent).value);
                              $html = $("<h5 class='like-text'>Unlike</h1>");
                              var idvalue = productId+"_div";
                              $("#"+idvalue).empty();
                              $("#"+idvalue).append($html);
                              // $("#"+).append($html);
                            }else{
                              document.getElementById(idcontent).value = "Like";
                              console.log(document.getElementById(idcontent).value);
                              $html = $("<h5 class='like-text'>Like</h1>");
                              var idvalue = productId+"_div";
                              $("#"+idvalue).empty();
                              $("#"+idvalue).append($html);
                              
                            }
                      
                    }
                    if(rowidd == count ){
                      console.log(" row id == count row ID ="+rowidd);
                      $("#Wishrow"+ rowidd).remove();
                       if($("#Wishrow"+(rowidd+1)). length){
                            $("#Wishrow"+(rowidd+1)).prop('id','Wishrow'+(rowidd));
                            $("#Wishrow"+(rowidd+1)).prop('name', 'Wishrow'+(rowidd));
                       } 
                       if($("#WishProductpic_"+(rowidd+1)). length){
                             $("#WishProductpic_"+(rowidd+1)).prop('name', 'WishProductpic_'+(rowidd));
                             $("#WishProductpic_"+(rowidd+1)).prop('id','WishProductpic_'+(rowidd));
                       } 
                       if($("#WishproductId_"+(rowidd+1)). length){
                             $("#WishproductId_"+(rowidd+1)).prop('name', 'WishproductId_'+(rowidd));
                             $("#WishproductId_"+(rowidd+1)).prop('id','WishproductId_'+(rowidd));
                       } 
                       if($("#WishqtyText"+(rowidd+1)). length){
                            $("#WishqtyText"+(rowidd+1)).prop('name', 'WishqtyText'+(rowidd));
                            $("#WishqtyText"+(rowidd+1)).prop('id','WishqtyText'+(rowidd));
                            $("#WishqtyText"+(rowidd)).removeAttr('onchange');
                            $("#WishqtyText"+(rowidd)).attr("onChange","UpdateWishListQuantity('"+rowidd+"', event)"); 
                       }
                      //  if($("#Wishprice_"+(rowidd+1)). length){
                      //       $("#Wishprice_"+(rowidd+1)).prop('name', 'Wishprice_'+(rowidd));
                      //       $("#Wishprice_"+(rowidd+1)).prop('id','Wishprice_'+(rowidd));
                      //  }
                       if($("#Wishdelete_"+(rowidd+1)). length){
                            $("#Wishdelete_"+(rowidd+1)).prop('id','Wishdelete_'+(rowidd));
                            $("#Wishdelete_"+(rowidd)).removeAttr('onclick');
                            $("#Wishdelete_"+(rowidd)).attr("onClick","RemoveFromWishList('"+rowidd+"', event)");
                       } 
                       if($("#WishAddCart_"+(rowidd+1)). length){
                            $("#WishAddCart_"+(rowidd+1)).prop('id','WishAddCart_'+(rowidd));
                            $("#WishAddCart_"+(rowidd)).removeAttr('onclick');
                            $("#WishAddCart_"+(rowidd)).attr("onClick","addFromWishListToCart('"+rowidd+"','ShopList', event)");
                       }
                      
                     }else if(rowidd < count ){
                      console.log(" less than count row ID ="+rowidd);
                          $("#Wishrow"+ rowidd).remove();
                          for(var i=rowidd; i<=count ; i++)
                          {
                            console.log(" inside for loop row ID ="+i);
                                if($("#Wishrow"+(i+1)). length)
                                {
                                        $("#Wishrow"+(i+1)).prop('id','Wishrow'+(i));
                                        $("#Wishrow"+(i+1)).prop('name', 'Wishrow'+(i));
                                   } 
                                    if($("#WishProductpic_"+(i+1)). length)
                                    {
                                         $("#WishProductpic_"+(i+1)).prop('name', 'WishProductpic_'+(i));
                                         $("#WishProductpic_"+(i+1)).prop('id','WishProductpic_'+(i));
                                   } 
                                   if($("#WishproductId_"+(i+1)). length)
                                   {
                                         $("#WishproductId_"+(i+1)).prop('name', 'WishproductId_'+(i));
                                         $("#WishproductId_"+(i+1)).prop('id','WishproductId_'+(i));
                                   } 
                                   if($("#WishqtyText"+(i+1)). length)
                                   {
                                        $("#WishqtyText"+(i+1)).prop('name', 'WishqtyText'+(i));
                                        $("#WishqtyText"+(i+1)).prop('id','WishqtyText'+(i));
                                        $("#WishqtyText"+(i)).removeAttr('onchange');
                                        $("#WishqtyText"+(i)).attr("onchange","UpdateWishListQuantity('"+i+"', event)"); 
                                   }
                                  //  if($("#Wishprice_"+(i+1)). length)
                                  //  {
                                  //       $("#Wishprice_"+(i+1)).prop('name', 'Wishprice_'+(i));
                                  //       $("#Wishprice_"+(i+1)).prop('id','Wishprice_'+(i));
                                  //  }  
                                   if($("#Wishdelete_"+(i+1)). length)
                                   {
                                    console.log("#Wishdelete_"+(i+1));
                                        $("#Wishdelete_"+(i+1)).prop('id','Wishdelete_'+(i));
                                        console.log("#Wishdelete_"+(i));
                                        $("#Wishdelete_"+(i)).removeAttr('onclick');
                                        $("#Wishdelete_"+(i)).attr("onclick","RemoveFromWishList('"+i+"', event)");
                                   } 
                                   if($("#WishAddCart_"+(i+1)). length)
                                   {
                                        $("#WishAddCart_"+(i+1)).prop('id','WishAddCart_'+(i));
                                        $("#WishAddCart_"+(i)).removeAttr('onclick');
                                        $("#WishAddCart_"+(i)).attr("onClick","addFromWishListToCart('"+i+"','ShopList', event)");
                                   }

                          }



                    }else{
                      if($("#favmsg"). length)
                          {
                            $("#favmsg").remove();
                           
                          }
                      $("#Wishrow"+ rowid).remove();
                    }
                    if(result.count == 0){
                       $("#FAVLIST").remove();
                       $("#WishCart").remove();
                          $("<h1 id='favmsg'>No Items found in your Favourite List </h1>").appendTo("#wishListDiv");
                     }
                   
                    // e.preventDefault();
                    
                  },
                  error:function(result) {
                    alert('error');
                    console.log(result);

                  }
              });

      }
      function UpdateWishListQuantity(rowid,e){
            e.preventDefault();
           // e.stopP
           console.log("Hi inside js function");
            var productId = $('#WishproductId_'+rowid).val();
            //alert(productId);'qtyText'.$row
            var quantity = $('#WishqtyText'+rowid).val();
            console.log(quantity);
            var url = "{{ route('Favourite.Update',app()->getlocale()) }}";
            var _token = '<?php echo csrf_token() ?>';
            //url = url.replace("http", "https");
            console.log(url);
            console.log(_token);
            $.ajax(

                  {
                  type: "post",
                  url: url,
                  data: {   
                               id: productId,
                         Quantity: quantity,
                         _token  :_token
                       },
                  success:function(result,e) {
                   // alert(result.message+"and"+ result.count+"and"+ result.success );
                    // alert("price" + result.cartitem);
                    // $('#price_'+ rowid).text("AED "+result.summedPrice);
                    console.log("price" + result.cartitem);
                    // $('#Wishprice_'+ rowid).text("AED "+result.summedPrice);
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
      function RemoveFromCart(rowid,e){
            e.preventDefault();
           // e.stopP
            console.log("Hi inside remove from cart function");
            var productId = $('#productId_'+rowid).val();
            console.log(productId);
            var quantity = $('#qtyText'+rowid).val();
            console.log(quantity);
            var url = "{{ route('Cart.Remove',app()->getlocale()) }}";
            //url = url.replace("http", "https");
            var _token = '<?php echo csrf_token() ?>';
            console.log(url);
            //alert(_token);
            $.ajax(

                  {
                  type: "post",
                  url: url,
                  data: {   
                               id: productId,
                         
                         _token  :_token
                       },
                  success:function(result,e) {
                   // alert(result.message+"and"+ result.count+"and"+ result.success );
                    console.log(result);
                      console.log(result.data);
                    console.log(result.message);
                    console.log(result.count);
                    var rowidd = parseInt(rowid);
                    var count= parseInt(result.count);
                    if(rowidd == count ){
                      console.log(" row id == count row ID ="+rowidd);
                      $("#row"+ rowidd).remove();
                       if($("#row"+(rowidd+1)). length){
                            $("#row"+(rowidd+1)).prop('id','row'+(rowidd));
                            $("#row"+(rowidd+1)).prop('name', 'row'+(rowidd));
                       } 
                       if($("#Productpic_"+(rowidd+1)). length){
                             $("#Productpic_"+(rowidd+1)).prop('name', 'Productpic_'+(rowidd));
                             $("#Productpic_"+(rowidd+1)).prop('id','Productpic_'+(rowidd));
                       } 
                       if($("#productId_"+(rowidd+1)). length){
                             $("#productId_"+(rowidd+1)).prop('name', 'productId_'+(rowidd));
                             $("#productId_"+(rowidd+1)).prop('id','productId_'+(rowidd));
                       } 
                       if($("#qtyText"+(rowidd+1)). length){
                            $("#qtyText"+(rowidd+1)).prop('name', 'qtyText'+(rowidd));
                            $("#qtyText"+(rowidd+1)).prop('id','qtyText'+(rowidd));
                            $("#qtyText"+(rowidd)).removeAttr('onchange');
                            $("#qtyText"+(rowidd)).attr("onChange","UpdateCartQuantity('"+rowidd+"', event)"); 
                       }
                      //  if($("#price_"+(rowidd+1)). length){
                      //       $("#price_"+(rowidd+1)).prop('name', 'price_'+(rowidd));
                      //       $("#price_"+(rowidd+1)).prop('id','price_'+(rowidd));
                      //  }
                       if($("#delete_"+(rowidd+1)). length){
                            $("#delete_"+(rowidd+1)).prop('id','delete_'+(rowidd));
                            $("#delete_"+(rowidd)).removeAttr('onclick');
                            $("#delete_"+(rowidd)).attr("onClick","RemoveFromCart('"+rowidd+"', event)");
                       } 
                      //  if($("#priceDetails"). length){
                      //       $("#subtotal").text(result.subTotal);
                      //       $("#tax").text(result.vat);
                      //       $("#grandtotal").text(result.Total);
                      //  } 
                      
                     }else if(rowidd < count ){
                      console.log(" less than count row ID ="+rowidd);
                          $("#row"+ rowidd).remove();
                          for(var i=rowidd; i<=count ; i++)
                          {
                            console.log(" inside for loop row ID ="+i);
                                if($("#row"+(i+1)). length)
                                {
                                        $("#row"+(i+1)).prop('id','row'+(i));
                                        $("#row"+(i+1)).prop('name', 'row'+(i));
                                   } 
                                    if($("#Productpic_"+(i+1)). length)
                                    {
                                         $("#Productpic_"+(i+1)).prop('name', 'Productpic_'+(i));
                                         $("#Productpic_"+(i+1)).prop('id','Productpic_'+(i));
                                   } 
                                   if($("#productId_"+(i+1)). length)
                                   {
                                         $("#productId_"+(i+1)).prop('name', 'productId_'+(i));
                                         $("#productId_"+(i+1)).prop('id','productId_'+(i));
                                   } 
                                   if($("#qtyText"+(i+1)). length)
                                   {
                                        $("#qtyText"+(i+1)).prop('name', 'qtyText'+(i));
                                        $("#qtyText"+(i+1)).prop('id','qtyText'+(i));
                                        $("#qtyText"+(i)).removeAttr('onchange');
                                        $("#qtyText"+(i)).attr("onchange","UpdateCartQuantity('"+i+"', event)"); 
                                   }
                                  //  if($("#price_"+(i+1)). length)
                                  //  {
                                  //       $("#price_"+(i+1)).prop('name', 'price_'+(i));
                                  //       $("#price_"+(i+1)).prop('id','price_'+(i));
                                  //  }  
                                   if($("#delete_"+(i+1)). length)
                                   {
                                    console.log("#delete_"+(i+1));
                                        $("#delete_"+(i+1)).prop('id','delete_'+(i));
                                        console.log("#delete_"+(i));
                                        $("#delete_"+(i)).removeAttr('onclick');
                                        $("#delete_"+(i)).attr("onclick","RemoveFromCart('"+i+"', event)");
                                   } 

                          }

                      //     if($("#priceDetails"). length){
                      //       $("#subtotal").text(result.subTotal);
                      //       $("#tax").text(result.vat);
                      //       $("#grandtotal").text(result.Total);
                      //  } 

                    }else{
                      $("#row"+ rowid).remove();
                    }
                    //$("#row"+ rowid).css('display','none');
                     
                    if(result.count > 0){
                      $("#emptycart").css('display','none');
                      if($("#shopmsg"). length)
                          {
                            $("#shopmsg").remove();
                           
                          }
                          if($("#cartCount").length){
                                $("#cartCount").css('display','flex');
                                  $("#cartCountText").text(result.count);
                                }
                                if($("#cartCount1").length){
                                $("#cartCount1").css('display','flex');
                                  $("#cartCountText1").text(result.count);
                                }
                      // if($("#priceDetails"). length){
                      //       $("#subtotal").text(result.subTotal);
                      //       $("#tax").text(result.vat);
                      //       $("#grandtotal").text(result.Total);
                      //  } 
                    
                    }else{
                      $("#cartCount").css('display','none');
                      $("#cartCount1").css('display','none');
                      $("#Cart").remove();
                      $("#CARTLIST").remove();
                      //  $("#priceDetails").remove();
                       $("#purchaseButton").remove();
                       // $("#subtotal").remove();
                       // $("#tax").remove();
                       // $("#grandtotal").remove();
                      $("<h4 style='text-align:center'  id='shopmsg'>No Items found in your Cart </h1>").appendTo("#CartContent");
                      $("#emptycart").css('display','flex');

                    }
                    
                    
                    // e.preventDefault();
                    
                  },
                  error:function(result) {
                    alert('error');
                    console.log(result);

                  }
              });

      }
      function UpdateCartQuantity(rowid,e){
            e.preventDefault();
           // e.stopP
           console.log("Hi inside js function");
            var productId = $('#productId_'+rowid).val();
            //alert(productId);'qtyText'.$row
            var quantity = $('#qtyText'+rowid).val();
            console.log(quantity);
            var url = "{{ route('Cart.Update',app()->getlocale()) }}";
            //url = url.replace("http", "https");
            var _token = '<?php echo csrf_token() ?>';
            console.log(url);
            console.log(_token);
            $.ajax(

                  {
                  type: "post",
                  url: url,
                  data: {   
                               id: productId,
                         Quantity: quantity,
                         _token  :_token
                       },
                  success:function(result,e) {
                   // alert(result.message+"and"+ result.count+"and"+ result.success );
                   console.log("price" + result.cartitem);
                    // $('#price_'+ rowid).text("AED "+result.summedPrice);
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
                    // if($("#priceDetails"). length){
                    //         $("#subtotal").text(result.subTotal);
                    //         $("#tax").text(result.vat);
                    //         $("#grandtotal").text(result.Total);
                    //    } 
                    
                    // e.preventDefault();
                    
                  },
                  error:function(result) {
                    alert('error');
                    console.log(result);

                  }
              });

      }
  </script>
</body>

</html>
