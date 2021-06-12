<div style="display:none" id="notification">
<div class="cartdetaildivmobile">
    <div class="detailing-div-mobile"><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/products/{{$product->MainImage}}" loading="lazy" width="75" height="75" alt="" class="image-cart-product">
      <div class="productdetaildisplaydivmobile">
        <div>{{ $product->product_name }}</div>
        <div>Added to Cart</div>
      </div>
    </div>
    <div class="notifu_button_div">
      <a href="#" class="w-button" onClick="hideNotification()">Continue shopping</a>
    </div>
  </div>
  <div class="notificationmodal">
    <div class="cartdetaildiv">
      <div class="detail_div"><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/products/{{$product->MainImage}}" loading="lazy" width="150" height="150" alt="" class="image-cart-product">
        <div class="form-block-11 w-form">
          <form id="email-form" name="email-form" data-name="Email Form" class="form-7">
            <div>{{ $product->product_name }}</div>
            <input type="text" class="text-field-10 w-input" maxlength="256" name="notify_qty" data-name="Name" placeholder="" id="notify_qty" disabled>
            <div>Added to Cart</div>
          </form>
          <div class="w-form-done"></div>
          <div class="w-form-fail"></div>
        </div>
      </div>
      <div class="notifu_button_div">
        <!-- <a href="#" class="w-button" onClick="RemoveFromCart('{{ $product->Product_id }}',event)">Remove from Cart</a> -->
        <a href="#" class="w-button" onClick="hideNotification()">Continue shopping</a>
      </div>
    </div>
  </div>

  </div>

  <script>
  function hideNotification(){
    $("#notification").css('display','none');
  }

  function RemoveFromCart(productId,e){
            e.preventDefault();
           // e.stopP
            console.log("Hi inside remove from cart function of notification");
            // var productId = $('#productId_'+rowid).val();
            console.log(productId);
            var url = "{{ route('Cart.Remove',app()->getlocale()) }}";
            //url = url.replace("http", "https");
            var _token = '<?php echo csrf_token() ?>';
            console.log(url);
           
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
                    // e.preventDefault();
                    
                  },
                  error:function(result) {
                    alert('error');
                    console.log(result);

                  }
              });

      }
  </script>