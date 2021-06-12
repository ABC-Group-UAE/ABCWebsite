
  <?php
      $From = '';
      if($fromValue != ''){
        $From = $fromValue;
      }

  ?>
<!-- <style>


/*scrollableDiv*/
.cata-sub-nav {
    background: #fff;
    padding: 20px 15px 20px;
    margin: 0 37px;
    margin: auto;
    /* Make this scrollable when needed */
    overflow-x: auto;
    /* We don't want vertical scrolling */
    overflow-y: hidden;
    /* Make an auto-hiding scroller for the 3 people using a IE */
    -ms-overflow-style: -ms-autohiding-scrollbar;
    /* For WebKit implementations, provide inertia scrolling */
    -webkit-overflow-scrolling: touch;
    /* We don't want internal inline elements to wrap */
    white-space: nowrap;
    /* Remove the default scrollbar for WebKit implementations */
}
.cata-sub-nav::-webkit-scrollbar {
        display: none;
    }
.cata-sub-nav ul {
    margin: 20;
    

        display: flex;
          -webkit-padding-start: 0px;
}
.cata-sub-nav li {
	height:350px;
	width:300px;
    display: inline-table;
    margin: 0 10px;
        font-size: 16px;
} 
.arrow{
  background: red;
  margin: auto
}
.nav-prev {
    width: 25px;
    height: 25px;
    position: absolute;
    left: 7px;
    margin-top: 145px;
    
}
.nav-next {
    width: 25px;
    height: 25px;
    position: absolute;
    right: 7px;
    margin-top: -190px;
    
}
</style> -->

  

   @if(!empty($mightAlsoLike))
    <div  class="similar-scroller w-container">
        <form>
          @csrf
          <div class="div-block-121">
      <h4 class="heading-15">@lang('products you may like')</h4>
      <h4 class="scroll-text">@lang('Scroll for more')</h4><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/images/scrollarrow.svg" loading="lazy" data-w-id="05f2c38d-c5db-7b0c-a6ef-064501f83b01" alt="" class="image-66">
    </div>
          <!-- <div class="div-block-121"> 
            <h4 class="heading-15">Similar products you may like</h4>
             <h4 class="scroll-text">Scroll for more</h4>
            <img class="image-66" src="/abccontentbucket.s3.me-south-1.amazonaws.com/images/scrollarrow.svg" /> 
          </div> -->
        
        <!-- code start -->

    <div class="cata-sub-nav">
    <div class="nav-prev"><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/images/leftArrow.svg" loading="lazy" alt=""></div>
    <ul role="list" class="scrollinglist w-list-unstyled">
    @foreach($mightAlsoLike as $productItem)
      <li class="scrolling-list-item">
        <div class="product-display-div">
          <div class="productlink-holding-div">
            <a href="{{ route('Product.description', [app()->getlocale(),$productItem->Product_id]) }}" class="combocolorandavoidunderline w-inline-block">
              <div class="product-image-div"><img height="235" width="400" src="/abccontentbucket.s3.me-south-1.amazonaws.com/products/{{$productItem->MainImage}}" data-w-id="ab2365b4-9154-161b-4502-3e63d62a102a" alt="" class="similarprosuctimg"></div>
              <div class="product-name combocolor">{{ trans($productItem->product_name) }}</div>
            </a>
          </div>
          <!-- <div class="fav-cart">
                    <div class="fav" onClick=" return wishListAddition('{{$productItem->Product_id}}','{{$From}}',event)">
                            <svg 
                            @php 
                              if($productItem->IsAddedAsFavourite()) { 
                                      echo "class='ico liked'"; }else{ echo "class='ico'";}
                            @endphp 
                            width="17" height="17" viewBox="0 0 24 24" id="similar{{$productItem->Product_id}}">
                                            <path d="M12,21.35L10.55,20.03C5.4,15.36 2,12.27 2,8.5C2,5.41 4.42,3 7.5,3C9.24,3 10.91,3.81 12,5.08C13.09,3.81 14.76,3 16.5,3C19.58,3 22,5.41 22,8.5C22,12.27 18.6,15.36 13.45,20.03L12,21.35Z"></path>
                          </svg>
                        <input type="hidden" name="{{$productItem->Product_id}}_text" id="{{$productItem->Product_id}}_text" @php 
                          if($productItem->IsAddedAsFavourite()) { 
                              echo "value='Unlike'"; }else{ echo "value='Like'";}
                            @endphp" />
                          <div class="like-text" id="{{$productItem->Product_id}}_div"> 
                                @php 
                                if($productItem->IsAddedAsFavourite()) { 
                                    echo "Unlike"; }else{ echo "Like";}
                              @endphp </div>
              
                    </div>
                    <div class="addtocartbutton" onClick=" return CartAddition('{{$productItem->Product_id}}','{{$From}}',event)" >
                      <img
                            @php 
                            if($productItem->IsItemAddedtoCart()) { 
                                  echo "src='https://abccontentbucket.s3.me-south-1.amazonaws.com/images/greentick.svg'"; } else { echo "src='https://abccontentbucket.s3.me-south-1.amazonaws.com/images/Shoplist-Ikea-rzk-version_1.svg'";}
                            @endphp  width="19" height="19" alt="" class="cart-img" id="similar{{$productItem->Product_id}}cartimg">
                        <h5 class="addtocarttext" id="similar{{$productItem->Product_id}}carttext"> 
                                    @php 
                                if($productItem->IsItemAddedtoCart()) { 
                                    echo "Added To Cart "; }else{ echo "Add To Cart";}
                              @endphp</h5>
             
                    </div>
          </div> -->
        </div>
      </li>
    @endforeach
    </ul>
    <div class="nav-next"><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/images/rightArrow.svg" loading="lazy" alt=""></div>
  </div>







 
</form>  
</div>
@endif 





 <script>
    function CartAddition(productId,fromValue,e){
          console.log("hi from inside similar product product-image" + fromValue);
          event.preventDefault();
          var imageid = "similar"+productId+"cartimg";
			    var textid = "similar"+productId+"carttext";
			    var imageurl = "/abccontentbucket.s3.me-south-1.amazonaws.com/images/greentick.svg";
		    	console.log('imageurl = '+imageurl);
			    document.getElementById(imageid).src = imageurl;
			    $("#"+textid).empty();
			    $("#"+textid).append("Added to Cart");
                          if($("#shopmsg"). length)
                          {
                            $("#shopmsg").remove();
                           
                          }
          //alert(productId +" and "+fromValue);
            var url = "{{ route('Cart.Add',app()->getlocale()) }}";
            //url = url.replace("http", "https");
            var _token = '<?php echo csrf_token() ?>';
            console.log(url);
            console.log(_token);
            $.ajax({
                  type: "post",
                  url: url,
                  data: {   
                               id: productId,
                         Quantity: 1,
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
                                        var producturl =  "/abccontentbucket.s3.me-south-1.amazonaws.com/products/"+ result.product.MainImage;
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
                                                      +"<input type='hidden' name='productId_"+result.count+"' id='productId_"+result.count+"' value='"+result.product.Product_id+"'><input type='text' class='text-field-3 w-input' maxlength='256' name='qtyText"+result.count+"' id='qtyText"+result.count+"' data-name='Name'"
                                                      +"value= '"+result.cartitem.quantity+"'  onChange='UpdateCartQuantity("+result.count+",event) '></div></div><div id='w-node-772a9433d017-fa8c5f7d' class='deletebuttondiv'>"
                                                      +"<div class='div-block-95' ><a id='delete_"+result.count+"' href='#' class='link-3' onClick='RemoveFromCart("+result.count+",event)'>Remove</a></div></div>"
                                                      +"</div><div><div class='grey-divider-div'></div></div></div></div></form>");
                                            newdiv2 = document.createElement( "div" ),
                                            $( "#CartContent" ).append( $html);
                                            $("<div class='button-div' id='purchaseButton' onclick='SendMail()'><a data-w-id='058c16d4-5fe2-d8eb-62df-fa46370ee06d' href='#' class='buttonclass-copy combostyle w-button'>Proceed To Purchase</a></div>").appendTo("#CartContent");







                                          
                                          // var $html = $("<div id='CARTLIST'><div><h1>CART</h1></div><div class='heading-div'><div class='div-block-78'><div><h4>Product Added to the ShopList</h4></div><div><h4>Quantity</h4></div><div><h4 class='heading-23'>Quantity</h4></div>"
                                          //    +"<div><h4 class='heading-23'>Price</h4></div></div></div></div><form id='cartUpdate' name='email-form' data-name='Email Form' class='form-4'><input name='_token' value='"+_token+"' type='hidden'>"
                                          //     +"<div class='w-layout-grid cart-list' id='Cart' name='Cart'><div id='row"+result.count+"' style='display:inline'><div class='div-block-76 w-clearfix'><div class='div-block-90'><a href='Description/"+ result.product.Product_id +"'>"
                                          //   +"<div class='div-block-75' id = 'Productpic_"+result.count+"'></div><div>"+ result.product.product_name +"</div></a></div><div class='div-block-89'><div class='w-form'><input  name='productId_"+result.count+"' id='productId_"+result.count+"' value='"+result.product.Product_id+"' type='hidden'>"
                                          //   +"<input type='text' class='text-field-3 w-input' maxlength='256' name='qtyText"+result.count+"' id='qtyText"+result.count+"' data-name='Name' value= '"+result.cartitem.quantity+"'  onChange='UpdateCartQuantity("+result.count+",event) '></div></div><div > <label id = 'price_"+result.count+"' name=price_"+result.count+"'> AED"+result.summedPrice+" </label> </div>"
                                          //   +"<a id ='delete_"+result.count+"' href=''   class='close' onClick='RemoveFromCart("+result.count+",event)'>+</a></div><div class='grey-divider-div'></div></div> </div><div id='priceDetails'><div style='float:right;display:flex'><label>SubTotal</label><label id='subtotal'>"+result.subTotal+"</label></div><br><div style='float:right;display:flex'><label>VAT included</label><label id='tax'>"+result.vat+"</label></div><br><div style='float:right;display:flex'><label>Grand Total</label><label id='grandtotal'>"+result.Total+"</label></div><br></div></form>");
                                          //   newdiv2 = document.createElement( "div" ),
                                          //  // existingdiv1 = $( "#ShopList" );
                                          //   $( "#CartContent" ).append( $html);
                                            //  $("<div class='button-div' id='purchaseButton'><a data-w-id='058c16d4-5fe2-d8eb-62df-fa46370ee06d' href='#' class='buttonclass-copy combostyle w-button'>Proceed To Purchase</a></div>").appendTo("#CartContent");
                                            // $('#Productpic_'+ result.count).css("background-image", 'url(' + 'images/' + result.product.MainImage+ ')');
                                            // $('#Productpic_'+ result.count).css("background-repeat", 'no-repeat');
                                            // $('#Productpic_'+ result.count).css("width", '1000%');
                                            // $('#qtyText'+ result.count).val(result.cartitem.quantity);
                            }
                            else
                            {


                              //if the cart div is present then appending product details to the existing cart div
                              var pageurl = "{{ route('Product.description', [app()->getlocale(),':id']) }}";
                                            pageurl = pageurl.replace(':id',result.product.Product_id);
                                        var producturl =  "/abccontentbucket.s3.me-south-1.amazonaws.com/products/"+ result.product.MainImage;
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





                              // var $temp = $("<div id='row"+result.count+"' style='display:inline'><div class='div-block-76 w-clearfix'><div class='div-block-90'><a href='Description/"+ result.product.Product_id +"' ><div class='div-block-75' id = 'Productpic_"+result.count+"'></div><div>"+ result.product.product_name +"</div></a></div><div class='div-block-89'><div class='w-form'> <input type='hidden' name='productId_"+result.count+"' id='productId_"+result.count+"' value='"+result.product.Product_id+"'><input type='text' class='text-field-3 w-input' maxlength='256' name='qtyText"+result.count+"' id='qtyText"+result.count+"' data-name='Name' value= '"+result.cartitem.quantity+"'  onChange='UpdateCartQuantity("+result.count+",event) '></div></div><div > <label id = 'price_"+result.count+"' name=price_"+result.count+"'> AED"+result.summedPrice+" </label> </div><a id ='delete_"+result.count+"' href=''  class='close'  onClick='RemoveFromCart("+result.count+",event)'>+</a></div><div class='grey-divider-div'></div></div> "); 
                              //   // $( "#Cart" ).append( $temp );
                              //   $temp.appendTo("#Cart");
                              //       // newdiv2 = document.createElement( "div" ),
                              //       // existingdiv1 = $( "#Cart" );
                              //       // $( "body" ).append( $temp, [ newdiv2, existingdiv1 ] );
                              //       $('#Productpic_'+ result.count).css("background-image", 'url(' + 'images/' + result.product.MainImage+ ')');
                              //       $('#Productpic_'+ result.count).css("background-repeat", 'no-repeat');
                              //       $('#Productpic_'+ result.count).css("width", '1000%');
                              //       $('#qtyText'+ result.count).val(result.cartitem.quantity);
                              //       if($("#priceDetails"). length){
                              //               $("#subtotal").text(result.subTotal);
                              //               $("#tax").text(result.vat);
                              //               $("#grandtotal").text(result.Total);
                              //          } 
                            }

                              console.log("product fetched");  
                                    
                            }//end of jQuery.isEmptyObject(result.product)))
                    }else{
                      // do the following if the item already exist in cart
                        for(var i=1;i<=result.count;i++){
                          var pid = $('#productId_'+i).val();
                          //alert("product id" + pid);
                          if(pid == result.product.Product_id){
                                $('#qtyText'+ i).val(result.cartitem.quantity);
                                // $('#price_'+ i).text(result.summedPrice);
                                // if($("#priceDetails"). length){
                                //             $("#subtotal").text(result.subTotal);
                                //             $("#tax").text(result.vat);
                                //             $("#grandtotal").text(result.Total);
                                // } 
                                // break;

                          }
                        }
                        console.log("product fetched");
                        

                    }
                    
                    } // close of from value checking if
                    // e.preventDefault();
                    
                  },//end of success function
                  error:function(result) {
                    alert('error');
                    console.log(result);

                  }
              });

    }
    function RemoveFromWishList(productid,e){
            e.preventDefault();
           // e.stopP
           console.log("Hi inside js function");
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
                               id: productid,
                         
                         _token  :_token
					   },
					   
                  success:function(result,e) {
                   // alert(result.message+"and"+ result.count+"and"+ result.success );
                    console.log(result);
                      console.log(result.data);
                    console.log(result.message);
                    console.log(result.count);
                    
                    
                   
                    // e.preventDefault();
                    
                  },
                  error:function(result) {
                    alert('error');
                    console.log(result);

                  }
              });

    }

    function wishListAddition(productId,fromValue,e){
        console.log("hi from inside similar product product-image");
        
        //    });
        if($("#favmsg"). length)
                          {
                            $("#favmsg").remove();
                           
                          }
          event.preventDefault();
          // alert(fromValue);
           if($("#favmsg"). length)
                          {
                            $("#favmsg").remove();
                           
                          }
                          if($("#shopmsg"). length)
                          {
                            $("#shopmsg").remove();
                           
                          }
          //alert(productId +" and "+fromValue);
            var url = "{{ route('Favourite.Add',app()->getlocale()) }}";
            //url = url.replace("http", "https");
            var _token = '<?php echo csrf_token() ?>';
            console.log(url);
            console.log(_token);
            $.ajax({
                  type: "post",
                  url: url,
                  data: {   
                               id: productId,
                         Quantity: 1,
                         _token  :_token
                       },
                  success:function(result,e) {
                   // alert(result.message+"and"+ result.count+"and"+ result.success );
                    console.log(result);
                      console.log(result.data);
                    console.log(result.message);
                    console.log(result.count);
                     if(fromValue == "ShopList"){ //opening of from value checking if



                      console.log("Adding to wishlist");



                    if(!result.AlreadyAdded){// checking if the item already exist in cart
                          // do this if the item is new to the cart
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
                                  if(! (jQuery.isEmptyObject(result.product))){ // checking the product detail container is empty or not
                                    //do this if it is not empty
                                    if(result.count > 0 && result.count == 1){// checking if the cart is empty and no cart div present in page
                                          //console.log.(result.count);

                                          // if Cart div is not present then including cart div that cart content is appending to the container and hiding cart empty message
                                          var pageurl = "{{ route('Product.description', [app()->getlocale(),':id']) }}";
                                            pageurl = pageurl.replace(':id',result.product.Product_id);
                                        var producturl =  "/abccontentbucket.s3.me-south-1.amazonaws.com/products/"+ result.product.MainImage;
                                            // producturl = producturl.replace(':image', result.product.MainImage);
                                            console.log(producturl);
                                        var cartimgurl = "/abccontentbucket.s3.me-south-1.amazonaws.com/images/Shoplist-Ikea-rzk-version_1.svg";
                                             console.log(cartimgurl);
                                        $("#message").css('display','none');
                                        var $html = $("<div class='heading-div' id ='FAVLIST'><div><h1 class='heading-29'>Favourites</h1><div class='div-block-78'><div class='div-block-96'><h4 class='heading-27'>Product Image</h4>"
                                                    +"</div><div class='div-block-96'><h4 class='heading-27'>Product Description</h4></div><h4 id='w-node-e347bbebc6ac-fa8c5f7d' class='heading-28'>Quantity</h4><div id='w-node-e347bbebc6ae-fa8c5f7d' class='div-block-98'>"
                                                    +"<h4 class='heading-4'></h4></div><div><h4 class='heading-4-copy'></h4></div></div></div></div><form id='wishList' name='wishList' data-name='wishList' class='wishList'><input name='_token' value='"+_token+"' type='hidden'>"
                                                    +"<div class='w-layout-grid whishlist-1' id='WishCart' name='WishCart'><input type='hidden' name='rowcount' id='rowcount' value='"+result.count+"'>"
                                                    +"<div class='rowid' id='Wishrow"+result.count+"'><div class='wishlitrow-grid-without-price'><div class='procontentdiv'><div class='div-block-90'><a href='"+pageurl+"' class='link-block-2 w-inline-block'>"
                                                    +"<div class='div-block-75 combo'><img src='"+producturl +"' loading='lazy' alt='' class='image-52' id = 'WishProductpic_"+result.count+"'></div></a></div></div><a href='"+pageurl+"' class='link-block-2 w-inline-block'>"
                                                    +"<div class='productname-2'><h5 class='heading-26'>"+ result.product.product_name +"</h5><div class='text-block-35'>"+ result.product.long_description +"</div></div></a><div id='w-node-772a9433d096-fa8c5f7d' class='div-block-89'>"
                                                    +"<div class='form-block-5 w-form'><input type='hidden' name='WishproductId_"+result.count+"' id='WishproductId_"+result.count+"' value='"+result.product.Product_id+"'><input type='text' class='text-field-3 w-input' maxlength='256' name='WishqtyText"+result.count+"' id='WishqtyText"+result.count+"' data-name='Name'"
                                                    +"value= '"+result.cartitem.quantity+"'  onChange='UpdateWishListQuantity("+result.count+",event) '></div> </div><div id='w-node-772a9433d0a3-fa8c5f7d' class='div-block-106'><div class='shoplistcartaddingbutton' id =  'WishAddCart_"+result.count+"' onClick='addFromWishListToCart("+result.count+",\""+fromValue+"\",event)' ><img src='"+cartimgurl +"' width='19'"
                                                    + "height='19' alt='' class='cart-img'><div class='addtocarttext'>Add To Cart</div></div><div class='div-block-95'><a id='Wishdelete_"+result.count+"' href='#' class='link-3' onClick='RemoveFromWishList("+result.count+",event)'>Remove</a></div>"
                                                    +"</div></div><div><div class='grey-divider-div'></div></div></div></div></form>");
                                            newdiv2 = document.createElement( "div" ),
                                            $( "#wishListDiv" ).append($html);









                                          // var $html = $("<div id='FAVLIST'><div><h1>Favourite List</h1></div><div class='heading-div'><div class='div-block-78'><div><h4>Product Added to the wishList</h4></div><div><h4>Quantity</h4></div><div><h4 class='heading-23'>Quantity</h4></div>"
                                          //    +"<div><h4 class='heading-23'>Price</h4></div></div></div></div><form id='wishList' name='wishList' data-name='wishList' class='wishList'><input name='_token' value='"+_token+"' type='hidden'>"
                                          //     +"<div class='w-layout-grid cart-list' id='WishCart' name='WishCart'><div id='Wishrow"+result.count+"' style='display:inline'><div class='div-block-76 w-clearfix'><div class='div-block-90'><a href='Description/"+ result.product.Product_id +"' >"
                                          //   +"<div class='div-block-75' id = 'WishProductpic_"+result.count+"'></div><div>"+ result.product.product_name +"</div></a></div><div class='div-block-89'><div class='w-form'><input  name='WishproductId_"+result.count+"' id='WishproductId_"+result.count+"' value='"+result.product.Product_id+"' type='hidden'>"
                                          //   +"<input type='text' class='text-field-3 w-input' maxlength='256' name='WishqtyText"+result.count+"' id='WishqtyText"+result.count+"' data-name='Name' value= '"+result.cartitem.quantity+"'  onChange='UpdateWishListQuantity("+result.count+",event) '></div></div><div > <label id = 'Wishprice_"+result.count+"' name= 'Wishprice_"+result.count+"'> AED "+result.summedPrice+" </label> </div>"
                                          //   +"<a id ='Wishdelete_"+result.count+"' href=''   class='close' onClick='RemoveFromWishList("+result.count+",event)'>+</a><div id = 'WishAddCart_"+result.count+"' style='width:30%' onClick='addFromWishListToCart("+result.count+",\""+fromValue+"\",event)' ><a  href='#' class='buttonclass-copy combostyle hereonly w-button'>Add To Cart</a></div></div><div class='grey-divider-div'></div></div> </div></form>");
                                          //   newdiv2 = document.createElement( "div" ),
                                          //  // existingdiv1 = $( "#ShopList" );
                                          //   $( "#wishListDiv" ).append( $html);
                                          //   $('#WishProductpic_'+ result.count).css("background-image", 'url(' + 'images/' + result.product.MainImage+ ')');
                                          //   $('#WishProductpic_'+ result.count).css("background-repeat", 'no-repeat');
                                          //   $('#WishProductpic_'+ result.count).css("width", '1000%');
                                          //   $('#WishqtyText'+ result.count).val(result.cartitem.quantity);
                            }
                            else
                            {
                              var pageurl = "{{ route('Product.description', [app()->getlocale(),':id']) }}";
                                            pageurl = pageurl.replace(':id',result.product.Product_id);
                                        var producturl =  "/abccontentbucket.s3.me-south-1.amazonaws.com/products/"+ result.product.MainImage;
                                            // producturl = producturl.replace(':image', result.product.MainImage);
                                            console.log(producturl);
                                        var cartimgurl = "/abccontentbucket.s3.me-south-1.amazonaws.com/images/Shoplist-Ikea-rzk-version_1.svg";
                                             console.log(cartimgurl);

                              //if the cart div is present then appending product details to the existing cart div
                              var $temp = $("<div class='rowid' id='Wishrow"+result.count+"'><div class='wishlitrow-grid-without-price'><div class='procontentdiv'><div class='div-block-90'><a href='"+pageurl+"' class='link-block-2 w-inline-block'>"
                                                    +"<div class='div-block-75 combo'><img src='"+producturl +"' loading='lazy' alt='' class='image-52' id = 'WishProductpic_"+result.count+"'></div></a></div></div><a href='"+pageurl+"' class='link-block-2 w-inline-block'>"
                                                    +"<div class='productname-2'><h5 class='heading-26'>"+ result.product.product_name +"</h5><div class='text-block-35'>"+ result.product.long_description +"</div></div></a><div id='w-node-772a9433d096-fa8c5f7d' class='div-block-89'>"
                                                    +"<div class='form-block-5 w-form'><input type='hidden' name='WishproductId_"+result.count+"' id='WishproductId_"+result.count+"' value='"+result.product.Product_id+"'><input type='text' class='text-field-3 w-input' maxlength='256' name='WishqtyText"+result.count+"' id='WishqtyText"+result.count+"' data-name='Name'"
                                                    +"value= '"+result.cartitem.quantity+"'  onChange='UpdateWishListQuantity("+result.count+",event) '></div> </div><div id='w-node-772a9433d0a3-fa8c5f7d' class='div-block-106'><div class='shoplistcartaddingbutton' id =  'WishAddCart_"+result.count+"' onClick='addFromWishListToCart("+result.count+",\""+fromValue+"\",event)' ><img src='"+cartimgurl +"' width='19'"
                                                    + "height='19' alt='' class='cart-img'><div class='addtocarttext'>Add To Cart</div></div><div class='div-block-95'><a id='Wishdelete_"+result.count+"' href='#' class='link-3' onClick='RemoveFromWishList("+result.count+",event)'>Remove</a></div>"
                                                    +"</div></div><div><div class='grey-divider-div'></div></div></div>");
                                  $temp.appendTo("#WishCart");
                              // var $temp = $("<div id='Wishrow"+result.count+"' style='display:inline'><div class='div-block-76 w-clearfix'><div class='div-block-90'><a href='Description/"+ result.product.Product_id +"' ><div class='div-block-75' id = 'WishProductpic_"+result.count+"'></div><div>"+ result.product.product_name +"</div></a></div><div class='div-block-89'><div class='w-form'> <input type='hidden' name='WishproductId_"+result.count+"' id='WishproductId_"+result.count+"' value='"+result.product.Product_id+"'><input type='text' class='text-field-3 w-input' maxlength='256' name='WishqtyText"+result.count+"' id='WishqtyText"+result.count+"' data-name='Name' value= '"+result.cartitem.quantity+"'  onChange='UpdateWishListQuantity("+result.count+",event) '></div></div><div > <label id = 'Wishprice_"+result.count+"' name='Wishprice_"+result.count+"'> AED"+result.summedPrice+" </label> </div><a id ='Wishdelete_"+result.count+"' href=''  class='close'  onClick='RemoveFromWishList("+result.count+",event)'>+</a><div id = 'WishAddCart_"+result.count+"' style='width:30%'  onClick='addFromWishListToCart("+result.count+",\""+fromValue+"\",event)' ><a  href='#' class='buttonclass-copy combostyle hereonly w-button'>Add To Cart</a></div></div><div class='grey-divider-div'></div></div> "); 
                              //   //$( "#Cart" ).append( $temp );
                              //   $temp.appendTo("#WishCart");
                              //       // newdiv2 = document.createElement( "div" ),
                              //       // existingdiv1 = $( "#Cart" );
                              //       // $( "body" ).append( $temp, [ newdiv2, existingdiv1 ] );
                              //       $('#WishProductpic_'+ result.count).css("background-image", 'url(' + 'images/' + result.product.MainImage+ ')');
                              //       $('#WishProductpic_'+ result.count).css("background-repeat", 'no-repeat');
                              //       $('#WishProductpic_'+ result.count).css("width", '1000%');
                              //       $('#WishqtyText'+ result.count).val(result.cartitem.quantity);
                            }

                            console.log("product fetched");  
                                    
                            }//end of jQuery.isEmptyObject(result.product)))
                    }else{
                      // do the following if the item already exist in wishList
                        for(var i=1;i<=result.count;i++){
                          var pid = $('#WishproductId_'+i).val();
                          console.log("count="+result.count+"product id" + pid +"product id from controller"+result.product.Product_id);
                          if(pid == result.product.Product_id){
                            console.log("inside changing content function");
                               // $('#WishqtyText'+ i).val(result.cartitem.quantity);
                                // $('#Wishprice_'+ i).text(result.summedPrice);
                                RemoveFromWishList(i,event);

                          }
                        }
                        console.log("product fetched");
                        

                    }
                    
                    } // close of from value checking if
                    else{
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
                          if(result.AlreadyAdded){
                            RemoveFromWishList(productId,event);
                          }
                    }
                   
                    
                    // e.preventDefault();
                    
                  },
                  error:function(result) {
                    alert('error');
                    console.log(result);

                  }
              });

      }

(function($) {

	        $(".cata-sub-nav").on('scroll', function() {
    	    $val = $(this).scrollLeft();

          if($(this).scrollLeft() + $(this).innerWidth()>=$(this)[0].scrollWidth){
              $(".nav-next").hide();
            } else {
            $(".nav-next").show();
          }

          if($val == 0){
            $(".nav-prev").hide();
          } else {
            $(".nav-prev").show();
          }
  	  });
      console.log( 'init-scroll: ' + $(".nav-next").scrollLeft() );
      $(".nav-next").on("click", function(){
        $(".cata-sub-nav").animate( { scrollLeft: '+=300' }, 200);
        
      });
      $(".nav-prev").on("click", function(){
        $(".cata-sub-nav").animate( { scrollLeft: '-=300' }, 200);
      });

	

})(jQuery);

   </script>