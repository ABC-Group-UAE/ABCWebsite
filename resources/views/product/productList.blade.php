@if( !($products->isEmpty()))
    <div class="w-layout-grid product-display-grid"  id ="productList">
	@foreach($products as $product)
      <div class="product-display-div">
        <div class="productlink-holding-div">
          <a href="{{ route('Product.description', [app()->getlocale(),$product->Product_id]) }}" class="combocolorandavoidunderline w-inline-block">
            <div class="product-image-div"><img height="235" width="400" src="/abccontentbucket.s3.me-south-1.amazonaws.com/images/products/{{$product->MainImage)}}" data-w-id="437c5c3e-61c4-24a8-550f-2bf0e3b35adc" alt="" class="product-image"></div>
            <div class="product-name combocolor">{{$product->product_name}}</div>
          </a>
        </div>
        <div class="fav-cart">
          <div class="fav" onClick=" return wishListAddition('{{$product->Product_id}}',event)">
			  <svg 
			   @php 
			   if($product->IsAddedAsFavourite()) { 
             echo "class='ico liked'"; }else{ echo "class='ico'";}
			@endphp 
			 width="17" height="17" viewBox="0 0 24 24" id="{{$product->Product_id}}"
			 >
  <path d="M12,21.35L10.55,20.03C5.4,15.36 2,12.27 2,8.5C2,5.41 4.42,3 7.5,3C9.24,3 10.91,3.81 12,5.08C13.09,3.81 14.76,3 16.5,3C19.58,3 22,5.41 22,8.5C22,12.27 18.6,15.36 13.45,20.03L12,21.35Z"></path>
</svg>
<!-- <img src="/abccontentbucket.s3.me-south-1.amazonaws.com/images/002-love.svg" width="22" height="22" alt="" class="ico">  -->
			<input type="hidden" name="{{$product->Product_id}}_text" id="{{$product->Product_id}}_text" @php 
			   if($product->IsAddedAsFavourite()) { 
             echo "value='Unlike'"; }else{ echo "value='Like'";}
			@endphp" />
             <div class="like-text" id="{{$product->Product_id}}_div"> 
				 @php 
			   if($product->IsAddedAsFavourite()) { 
             echo "Unlike"; }else{ echo "Like";}
			@endphp </div>
          </div>
		  <div class="addtocartbutton" onClick=" return CartAddition('{{$product->Product_id}}',event)">
		  <!-- src='https://abccontentbucket.s3.me-south-1.amazonaws.com/images/Shoplist-Ikea-rzk-version_1.sv'  -->
		  <img
		  @php 
			 if($product->IsItemAddedtoCart()) { 
             echo "src='/images/greentick.svg'"; } else { echo "src='/images/Shoplist-Ikea-rzk-version_1.svg'";}
			@endphp"  width="19" height="19" alt="" class="cart-img" id="{{$product->Product_id}}cartimg">
            <h5 class="addtocarttext" id="{{$product->Product_id}}carttext"> @php 
			   if($product->IsItemAddedtoCart()) { 
             echo "Added To Cart "; }else{ echo "Add To Cart";}
			@endphp</h5>
          </div>
        </div>
	  </div>
	@endforeach
    
	</div>
   
	@endif
    <div style="display:block" id="main">
	  @if( ($products->isEmpty()))
		  <h1>No Products to display </h1>
	  @endif
	  </div>
  <div  id="paginationlinks"></div>