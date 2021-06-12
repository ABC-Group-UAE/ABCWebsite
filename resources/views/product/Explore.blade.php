<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Tue Sep 15 2020 12:53:39 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="5f8592151ab185e1ffca5abc" data-wf-site="5f103f7e5224a5353e5ce1c7">


<head>
    <meta charset="utf-8">
    <title>Products</title>
    <meta name="description" content="ABC Group is the synonymous for high quality tiles, sanitary wares, bathroom fittings and allied building materials.">
  <meta content="ABC Group" property="og:title">
  <meta content="ABC Group" property="twitter:title">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <meta name="csrf-token" content="{!! csrf_token() !!}">
  <link rel="canonical" href="https://abcgroupuae.com/en/Product/Explore">
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
<script async src="https://www.googletagmanager.com/gtag/js?id=G-6SQLZ5GFVC"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-6SQLZ5GFVC');
</script>
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
		use App\Category;
		?>
	
		<?php
		$SelectedCategory='ALL';
		$SelectedSubCategory='ALL';
		$SelectedSubSubCategory='ALL';
		$categorycolor ="black";
		$message="";
		if(!empty($selectedCatValue)){
			$SelectedCategory = $selectedCatValue;
			if(strcmp($selectedCatValue,"ALL-") == 0)
					$message="We couldn’t find what you were looking for... We have so many other products that you will like!";
		}
		if(!empty($selectedSubCatValue)){
			$SelectedSubCategory = $selectedSubCatValue;
		}
		if(!empty($selectedSubSubCatValue)){
			$SelectedSubSubCategory = $selectedSubSubCatValue;
		}
		if(!empty($message)){
			$message = $message;
			// echo "this is message:".$message;
		}
		?>
		<form action="{{ route('Explore',app()->getlocale()) }}" method="" id="Explore">
	{{csrf_field()}}
	<input type="hidden" id="selCategory" name="selCategory" value="{{$SelectedCategory}}">
	<input type="hidden" id="selSubCategory" name="selSubCategory" value="{{$SelectedSubCategory}}">
	<input type="hidden" id="selSubSubCategory" name="selSubSubCategory" value="{{$SelectedSubSubCategory}}">
	<input type="hidden" id="SelectedSUBCategories" name="SelectedSUBCategories" value="">
	<input type="hidden" id="SelectedBrands" name="SelectedBrands" value="">
	<input type="hidden" id="SelectedColours" name="SelectedColours" value="">
	<input type="hidden" id="min_price1" name="min_price1" value="0">
	<input type="hidden" id="max_price1" name="max_price1" value="6000">
  <div class="modal-wrapper-copy" id = "filtermodel">
  <div class="div-block-103">
        <h4 class="heading-31">Filter</h4>
        <a href="{{route('Explore',app()->getlocale())}}" style="text-decoration:none;"><h4 class="heading-31">x</h4></a>
	</div>
    <div class="form-wrapper-copy">

      
	  <div style="overflow-y:auto;overflow-x:hidden">
	  <div class='snippet-body'  oncontextmenu='return false'>
				<div class="d-flex justify-content-center">
					<div class="wrapper center-block">
						<!-- <div class="filters-text">
							<span class="filter-span">Filters <small>(find product using filters below)</small></span>
							<span style="float:right;"><i class="fa fa-filter"></i></span>
						</div> -->
						<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
						@if( !($Categories->isEmpty()))
						@php
							$heading=0;
						@endphp
						@foreach($Categories as $Category)
						@php
							$heading++;
						@endphp
						<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="heading{{$heading}}">
									<h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse{{$heading}}" aria-expanded="false" aria-controls="collapse{{$heading}}"> {{ trans($Category->Category_Name)}} </a> </h4>
								</div>
								<div id="collapse{{$heading}}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading{{$heading}}">
									@php
										$subCategories = Category::find($Category->Category_ID)->SubCategories;
									@endphp
									<div class="panel-body">
										@if( !($subCategories->isEmpty())) <!-- checking if sub category list empty -->
											@foreach($subCategories as $subCategory)
											<div class="checkbox"> <label> <input type="checkbox" class="option-input checkbox" name="category1"   value="{{$subCategory->Category_ID}}-{{$subCategory->Sub_Category_ID}}" onChange="updateCategory()"/> <span class="ml-10">{{trans($subCategory->Sub_Category_Name)}}</span> </label> </div>
													@php
													$subSubCategories = $subCategory->SubSubCategories($subCategory->Category_ID,$subCategory->Sub_Category_ID);
													@endphp
													@if( !($subSubCategories->isEmpty()))  <!-- checking if sub sub category list empty -->
														@foreach($subSubCategories as $subSubCategory) 
															<div class="checkbox" style="margin-left: 10%"> <label> <input type="checkbox" class="option-input checkbox" name="category1"   value="{{$subSubCategory->Category_ID}}-{{$subSubCategory->Sub_Category_ID}}-{{$subSubCategory->Sub_Sub_Category_ID}}" onChange="updateCategory()"/> <span class="ml-10">{{trans($subSubCategory->Sub_Sub_Category_Name)}}</span> </label> </div>
														@endforeach
													@endif
											@endforeach
										@endif
									</div>
								</div>
						</div>
						    @endforeach
						    @endif
						    @php
							$heading++;
						    @endphp
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="heading{{$heading}}">
									<h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse{{$heading}}" aria-expanded="false" aria-controls="collapse{{$heading}}"> @lang('Price') </a> </h4>
								</div>
								<div id="collapse{{$heading}}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading{{$heading}}">
									<div class="panel-body">
											<div class="filter-section-div"><h3 class="filter-main-heading">Price (AED)</h3></div><div class="pricechoosediv"><input type="number" name="min" id="min_price2" aria-label="min" class="text-field-4 w-input" value="0" onChange="updatePrice()"><span class="jsx-304923497 between">To</span><input type="number" name="max" id="max_price2" aria-label="max" class="text-field-4 w-input" value="6000" onChange="updatePrice()"></div>
										
									</div>
								</div>
							</div>
							@php
							$heading++;
						    @endphp
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="heading{{$heading}}">
									<h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse{{$heading}}" aria-expanded="false" aria-controls="collapse{{$heading}}"> @lang('Brand') </a> </h4>
								</div>
								<div id="collapse{{$heading}}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading{{$heading}}">
									<div class="panel-body">
									@if( (sizeof($Brands)>0))
									@foreach($Brands as $Branditem)
										<div class="checkbox"> <label> <input type="checkbox" class="option-input checkbox" name="Brands1" value="{{$Branditem->Brand_Name}}" onChange="updateBrand()" /> <span class="ml-10">{{trans($Branditem->Brand_Name)}}</span> </label> </div>
										
									@endforeach
									@endif
									
									</div>
								</div>
							</div>
							@php
							$heading++;
						    @endphp
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="heading{{$heading}}">
									<h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse{{$heading}}" aria-expanded="false" aria-controls="collapse{{$heading}}"> @lang('Colours') </a> </h4>
								</div>
								<div id="collapse{{$heading}}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading{{$heading}}">
									<div class="panel-body">
									@if( (sizeof($colours)>0)) 
									@foreach($colours as $colouritem)
										<div class="checkbox"> <label> <input type="checkbox" class="option-input checkbox" name="colours1" value="{{$colouritem->colour}}" onChange="updateColour()" /> <span class="ml-10">{{trans($colouritem->colour)}}</span> </label> </div>
									@endforeach
									@endif
									</div>
								</div>
							</div>
							
						</div>
						<!-- <form id="mobileForm">
					      {{csrf_field()}}
						    <div class="text-right refine"> <button class="btn btn-out btn-primary btn-square" id="apply" onClick ="fetchDataBasedOnMobileFilter()">Apply</button> </div>
						    <div class="text-left refine"> <button class="btn btn-out btn-primary btn-square" id="resetButton" onClick ="reset()">Reset</button> </div>
						</form> -->
					</div>
				</div>

				</div>
	</div>
      
	</div>
	<form id="mobileForm" action = "{{route('Explore',app()->getlocale())}}" method="get">
					      {{csrf_field()}}
	<div class="div-block-102-copy"><a href="{{route('Explore',app()->getlocale())}}"  id="resetButton" onClick ="reset()" class="reset w-button">@lang('Reset')</a><a href="#" class="apply w-button" id="apply" onClick ="fetchDataBasedOnMobileFilter()" >@lang('Apply')</a></div>
	</form>
</div>
  
  <div class="product-container w-container" >
  <!-- data-w-id="344d042e-70b4-3c36-1481-9ae020fdf117"  data-w-id="344d042e-70b4-3c36-1481-9ae020fdf117"-->
    <div class="div-block-104" data-w-id="344d042e-70b4-3c36-1481-9ae020fdf117" >
	  <div class="text-block-33">@lang('Filter')</div>
	</div>
	
	<!-- onClick="showmodel()" -->
    <div class="mobile-filter-div">
	   <img src="/abccontentbucket.s3.me-south-1.amazonaws.com/images/16.jpg" style="width:95%;height:150px;margin-bottom:20px;margin-top:10px;" />
      <div  class="html-embed-3 w-embed"><button type="button" class="btn btn-info" style="width:100%" onClick="showmodel()">Filter<img src="/abccontentbucket.s3.me-south-1.amazonaws.com/images/001-web3.svg" style="width:20px;height:25px;"/></button></div>
    </div>
    <div class="desktop-filter-div">
		<div class="filter-section-div">
					<h3 class="filter-main-heading">@lang('Products')</h3>
					<a href="#" onClick="fetchData('ALL')" aria-current="page" class="category-link">@lang('All Products')</a>

					@if( !($Categories->isEmpty()))  <!-- all category listing div  checking categories exist-->

					@foreach($Categories as $Category)<!-- category iterating loop   -->
					<div class="category-listing-div w-clearfix" >
						<a href="#"  onClick="fetchData('{{$Category->Category_ID}}')" aria-current="page" class="category-link" id="{{$Category->Category_ID}}"  @php if(isset($SelectedCategory)) { 
            if(strcmp($SelectedCategory ,$Category->Category_ID) == 0) 
            { echo "style='color:#bb0303;font-weight:700'"; }}@endphp >{{trans($Category->Category_Name)}}</a>

						@if($SelectedCategory == $Category->Category_ID)<!-- checking if selected category === this category -->
						<?php
						$categorycolor ="red";
				// if($Selected == $Category->Category_ID){
						$subCategories = Category::find($Category->Category_ID)->SubCategories;
				// $subCategories = $Categories->SubCategories;
				//dd($subCategories);
				//style="font-style:{{($SelectedCategory == $Category->Category_ID) ? 'red' : '' }} "
						?>

						@if( !($subCategories->isEmpty())) <!-- checking if sub category list empty -->


						@foreach($subCategories as $subCategory) <!-- looping sub categories -->
						<?php
				// if($Selected == $Category->Category_ID){
						$subSubCategories = $subCategory->SubSubCategories($subCategory->Category_ID,$subCategory->Sub_Category_ID);
				// $subCategories = $Categories->SubCategories;
				//dd($subCategory->Category_ID);
				//dd ($subCategory->Sub_Category_ID); 
				//dd($subSubCategories);
						?>
						@if($SelectedCategory == $subCategory->Category_ID)
						<div  style="margin-left: 10%;">
							<div style="display:flex"><input type="checkbox"  @php if(isset($selectedSubCatValue)) { 
            if(strcmp($selectedSubCatValue ,$subCategory->Sub_Category_ID) == 0) 
            { echo "checked=checked"; }}@endphp  name="category"  id="{{$subCategory->Category_ID}}-{{$subCategory->Sub_Category_ID}}" value="{{$subCategory->Category_ID}}-{{$subCategory->Sub_Category_ID}}" onChange="fetchDataBasedOnFilter('checkbox')" ><a  aria-current="page" class="subcategory-link">{{trans($subCategory->Sub_Category_Name)}}</a></div>
							<!-- name="{{$subCategory->Category_ID}}-{{$subCategory->Sub_Category_ID}}" -->
							<!-- onClick="fetchDataCategory('{{$subCategory->Category_ID}}','{{$subCategory->Sub_Category_ID}}',{{$subCategories}})" -->

							@if( !($subSubCategories->isEmpty()))  <!-- checking if sub sub category list empty -->

							<div style="margin-left: 10%">
								@foreach($subSubCategories as $subSubCategory) <!-- looping sub sub categories -->

								<div style="display:flex"><input type="checkbox" @php if(isset($selectedSubSubCatValue) && isset($selectedSubCatValue)) { 
            if((strcmp($selectedSubSubCatValue ,$subSubCategory->Sub_Sub_Category_ID) == 0) && (strcmp($selectedSubCatValue ,$subCategory->Sub_Category_ID) == 0)) 
            { echo "checked=checked"; }}@endphp name="category" value="{{$subSubCategory->Category_ID}}-{{$subSubCategory->Sub_Category_ID}}-{{$subSubCategory->Sub_Sub_Category_ID}}" id="{{$subSubCategory->Category_ID}}-{{$subSubCategory->Sub_Category_ID}}-{{$subSubCategory->Sub_Sub_Category_ID}}" onChange="fetchDataBasedOnFilter('checkbox')" ><a  aria-current="page" class="subsubcategory-link">{{trans($subSubCategory->Sub_Sub_Category_Name)}}</a></div>
								<!-- name="{{$subSubCategory->Category_ID}}-{{$subSubCategory->Sub_Category_ID}}-{{$subSubCategory->Sub_Sub_Category_ID}}" -->
								<!--  onClick="fetchDataSubCategory('{{$subSubCategory->Category_ID}}','{{$subSubCategory->Sub_Category_ID}}','{{$subSubCategory->Sub_Sub_Category_ID}}',{{$subSubCategories}})" --> 
								@endforeach <!--end of  looping sub sub categories -->
							</div> 

							@endif  <!-- end of if sub sub category list empty -->
						</div>
						@endif 
						@endforeach  <!-- end of looping sub categories -->
						@endif  <!--  close checking if sub category list empty -->

						@endif <!--  close of if selected category === this category -->

					</div>
					@endforeach <!-- end of vategory iterating loop -->
					@endif  <!-- all category listing div  close of category exist checking if -->

				</div>
				<div class="filter-section-div" style="display:none">
					<h3 class="filter-main-heading">@lang('Price Range')</h3>
					<div>@lang('Select your Price Range:')</div>
					<div id="slider-min" class="price-ranger" style="display:block">
						<!-- my price ranger code -->
						<div id="slider-range" class="price-filter-range" name="rangeInput">
						</div>  
						<input type="number" min=0 max="5900" oninput="validity.valid||(value='0');" id="min_price" class="price-range-field" />
						<span> To </span>
						<input type="number" min=0 max="6000" oninput="validity.valid||(value='6000');" id="max_price" class="price-range-field" />
						<br>
						<div class="rangesearch">
							<button class="price-range-search" id="price-range-submit" onClick="fetchDataBasedOnFilter('Button')">@lang('Search')</button>
						</div>



						<div id="searchResults" class="search-results-block" ></div>

						<!-- end of price ranger code -->


					</div>

				</div>
				<div class="filter-section-div">
					<h3 class="filter-main-heading">@lang('Colour')</h3>
					<!-- class="colour-filter-div" -->
					<?php
					$i=1;
					?>
					<div>
						@if( (sizeof($colours)>0)) 
						
						<div class="colourlisting">
						@foreach($colours as $colouritem)
					
							<div class="flexdiv"><input type="checkbox" name="colours" value="{{$colouritem->colour}}" onChange="fetchDataBasedOnFilter('checkbox')"><span class="headcategory-link">{{trans($colouritem->colour)}}</span> </div>

							

						
						
						@endforeach
						</div>
						@endif

					</div>
				</div>
				<div class="filter-section-div">
					<h3 class="filter-main-heading">@lang('Our Brands')</h3>
					@if( (sizeof($Brands)>0))
					@foreach($Brands as $Branditem)
					<div class="flexdiv"><input type="checkbox"  @php if(isset($selectedBrand)) { 

            if((strcmp($selectedBrand ,strtolower($Branditem->Brand_Name)) == 0)) 
            { echo "checked=checked"; }}@endphp name="Brands" value="{{$Branditem->Brand_Name}}" onChange="fetchDataBasedOnFilter('checkbox')"><span class="headcategory-link">{{trans($Branditem->Brand_Name)}}</span></div>
					@endforeach
					@endif

				</div>
	</div>
    <div>
	<h5 class="messageStyle">{{$message}}</h5>
    @if( !($products->isEmpty()))
	
    <div class="w-layout-grid product-display-grid"  id ="productList">
	
	@foreach($products as $product)
      <div class="product-display-div">
        <div class="productlink-holding-div">
          <a href="{{ route('Product.description', [app()->getlocale(),$product->Product_id]) }}" class="combocolorandavoidunderline w-inline-block">
		  <!-- height="235" width="400" -->
            <div class="product-image-div"><img height="235" width="400" src="/abccontentbucket.s3.me-south-1.amazonaws.com/products/{{$product->MainImage}}" data-w-id="437c5c3e-61c4-24a8-550f-2bf0e3b35adc" alt="{{$product->product_name}}" class="product-image"></div>
            <div class="product-name combocolor">{{trans($product->product_name)}}</div>
          </a>
        </div>
        <!-- <div class="fav-cart">
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
          <img src="/abccontentbucket.s3.me-south-1.amazonaws.com/images/002-love.svg" width="22" height="22" alt="" class="ico"> 
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
		   
		  <img
		  @php 
			 if($product->IsItemAddedtoCart()) { 
             echo "src='https://abccontentbucket.s3.me-south-1.amazonaws.com/images/greentick.svg'"; } else { echo "src='https://abccontentbucket.s3.me-south-1.amazonaws.com/images/Shoplist-Ikea-rzk-version_1.svg'";}
			@endphp"  width="19" height="19" alt="" class="cart-img" id="{{$product->Product_id}}cartimg">
            <h5 class="addtocarttext" id="{{$product->Product_id}}carttext"> @php 
			   if($product->IsItemAddedtoCart()) { 
             echo "Added To Cart "; }else{ echo "Add To Cart";}
			@endphp</h5>
          </div>
        </div> -->
	  </div>
	@endforeach
    
	</div>
   
	@endif
    <div style="display:block" id="main">
	  @if( ($products->isEmpty()))
		  <h1>@lang('No Products to display') </h1>
	  @endif
	  </div>
  
    </div>
	
	
     
	
	
	
	
  </div>
  <div style="display:flex;align-items:center;justify-content:center" id="pagination-container"></div>
</form>
  @include('Common.Footer')
</body>

</html>
<script src="/js/webflow.js" type="text/javascript"></script>
  <script>
        $(function() {
            console.log("inside pagination function");
	// 		$('#pagination-container').click(function () {
	// 			console.log("inside pagination link clicking function");
    //     $('body,html').animate({
    //         scrollTop: 0
    //     }, 600);
    //     return false;
    // });
			
            var items = $(".product-display-grid .product-display-div");
			if(items != null && items.length >0){
				$('#pagination-container').show();
				var numItems = items.length;
                var perPage = 25;

                items.slice(perPage).hide();

                $('#pagination-container').pagination({
                    items: numItems,
                    itemsOnPage: perPage,
                    prevText: "&laquo;",
                    nextText: "&raquo;",
                    onPageClick: function (pageNumber) {
                        var showFrom = perPage * (pageNumber - 1);
                        var showTo = showFrom + perPage;
                        items.hide().slice(showFrom, showTo).show();
						$('body,html').animate({
            scrollTop: 0
        }, 600);
        return false;
						
                    }
				
                });
				
			}else{
				$('#pagination-container').hide();
			}
			


        });

        function dynamicpagination(){
            console.log("inside pagination function");
            var items = $(".product-display-grid .product-display-div");
			if(items != null && items.length >0){
				$('#pagination-container').show();
				var numItems = items.length;
                var perPage = 25;

                items.slice(perPage).hide();

                $('#pagination-container').pagination({
                    items: numItems,
                    itemsOnPage: perPage,
                    prevText: "&laquo;",
                    nextText: "&raquo;",
                    onPageClick: function (pageNumber) {
                        var showFrom = perPage * (pageNumber - 1);
                        var showTo = showFrom + perPage;
                        items.hide().slice(showFrom, showTo).show();
						$('body,html').animate({
            scrollTop: 0
        }, 600);
        return false;
                    }
					
                
                });
				
			}else{
				$('#pagination-container').hide();
			}
                
        }
		function checkboxchecking(checkboxname,value)
		{
			console.log("checkboxname = "+checkboxname);
			console.log("passed value = "+value);
			var values = value.split(",");
				console.log("values"+values);
				     	if(values.length > 1 ){
				     			var Checkboxes = document.getElementsByName(checkboxname);
				     			for(var cat in values){
									 console.log("length="+Checkboxes.length);
									 console.log("selected value ="+values[cat]);
				     					for (var i=0; i<Checkboxes.length; i++) {
				     						console.log("value"+Checkboxes[i].value);
				     						if (Checkboxes[i].value == values[cat]) {
												Checkboxes[i].checked = true;
												console.log("Marked as checked")
											 }
											//  else{
											// 			Checkboxes[i].checked = false;
											// 		 }
				     					}

				     			}


				     	}else if(values.length == 1 && values[0] != ""){
				     			var Checkboxes = document.getElementsByName(checkboxname);
				     			for(var cat in values){
				     					for (var i=0; i<Checkboxes.length; i++) {
				     								if (Checkboxes[i].value == values[cat]) {
														Checkboxes[i].checked = true;
													 }
													//  else{
													// 	Checkboxes[i].checked = false;
													//  }

				     					}

				     			}

				     	}
		}


		function fetchData(Selected){
			//alert($("#selCategory").val());
			if($("#selCategory").val() != "ALL"){
				var selCategory = $("#selCategory").val();
			}
			selCategory = selCategory
			$("#selCategory").val(Selected);
			//alert("Hi Inside Form submit function");
			
			//alert($("#selCategory").val());
			$("#Explore").submit();
		}
		
		
		function updatePrice(){
			var min_price = $('#min_price2').val();
			var max_price = $('#max_price2').val();

			$('#min_price1').val(min_price);
			$('#max_price1').val(max_price);
		}
		function fetchDataBasedOnFilter(type){


			event.preventDefault();
			//alert($("#selCategory").val());
			var selected = $("#selCategory").val();
			var checkboxes = document.getElementsByName("category");
			var categories = [];
			for (var i=0; i<checkboxes.length; i++) {
			     // And stick the checked ones onto an array...
			     if (checkboxes[i].checked) {
			     	//alert(checkboxes[i].value);
			     	categories.push(checkboxes[i].value);

			       // alert(checkboxes[i].value);
			   }
			}

			if(categories.length==0){
				categories.push("ALL");
			}
			 // alert(categories);
			 var colourcheckboxes = document.getElementsByName("colours");
			 var selColours = [];
			 for (var i=0; i<colourcheckboxes.length; i++) {
			     // And stick the checked ones onto an array...
			     if (colourcheckboxes[i].checked) {
			     	//alert(checkboxes[i].value);
			     	selColours.push(colourcheckboxes[i].value);

			       // alert(checkboxes[i].value);
			   }
			}
			  // if(selColours.length==0){
			  // 	selColours.push("ALL");
			  // }
			  var colourCount = selColours.length;
			 // alert(selColours.length);
			 // alert(selColours);
			 var brandcheckboxes = document.getElementsByName("Brands");
			 var selBrands = [];
			 for (var i=0; i<brandcheckboxes.length; i++) {
			     // And stick the checked ones onto an array...
			     if (brandcheckboxes[i].checked) {
			     	//alert(checkboxes[i].value);
			     	selBrands.push(brandcheckboxes[i].value);

			       // alert(checkboxes[i].value);
			   }
			}
			  // if(selBrands.length==0){
			  // 	selBrands.push("ALL");
			  // }
			  var brandCount = selBrands.length;
			 // alert(selBrands.length);
			 // alert(selBrands);
			 var min_price = $('#min_price').val();
			 var max_price = $('#max_price').val();

			 var url = "{{ route('Product.Fetch',app()->getlocale()) }}";
			 //url = url.replace("http", "https");
			 var _token = '<?php echo csrf_token() ?>';
			 console.log("The ajax url="+url);
			 //url = url.replace("http", "https");
            // var secure//url = url.replace("http", "https");
			 console.log("The ajax secure url="+url);
			//alert(url);
			$.ajax(

			{
				type: "post",
				url: url,
				data: {   
					categories:categories,
					selectedCat : selected,
					selColours : selColours,
					selBrands  :selBrands,
					min_price:min_price,
					max_price:max_price,
					colourCount : colourCount,
					brandCount  : brandCount,
					_token  :_token
				},
				
				success:function(result,e) {
					console.log(result)


					console.log(url);

					console.log(result.products);
		      				// console.log(result.message);
		      				// console.log(result.Sub_Category_ID);
		      				// console.log(result.Category_ID);
                              console.log(result.html);
		      				var products =result.products;
							  console.log(products.length);
							  console.log(typeof(products));
							  product_display(products,event);

		      			},
		      			error:function(result) {
		      				alert('error');
		      				console.log(result);

		      			}
		      	});

		}
		
		
		function CartAddition(productId,e)
		{

			event.preventDefault();
			console.log(productId);
			var imageid = productId+"cartimg";
			var textid = productId+"carttext";
			var imageurl = "/abccontentbucket.s3.me-south-1.amazonaws.com/images/greentick.svg";
			console.log('imageurl = '+imageurl);
			document.getElementById(imageid).src = imageurl;
			$("#"+textid).empty();
			$("#"+textid).append("Added to Cart")
          //alert(productId +" and "+fromValue);
          var url = "{{ route('Cart.Add',app()->getlocale()) }}";
		  //url = url.replace("http", "https");
          var _token = '<?php echo csrf_token() ?>';
           // alert(url);
           // alert(_token);
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
	   function wishListAddition(productId,e)
	   {
		  var likeBtn = document.getElementById(productId);

           //   likeBtn.addEventListener('click', function() {
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
              //    });
					event.preventDefault();
					var url = "{{ route('Favourite.Add',app()->getlocale()) }}";
					//url = url.replace("http", "https");
					var _token = '<?php echo csrf_token() ?>';
					// alert(url);
					// alert(_token);
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
							if(result.AlreadyAdded){
								RemoveFromWishList(productId,event);
							}


							

								// e.preventDefault();
								
							},
							error:function(result) {
								// alert('error');
								console.log(error);
								console.log(result);

							}
						});

        }


	   function product_display(products,event)
	     {
			//  async:true;
			// event.preventDefault();
			 	console.log("type of produvts "+products);
				$("#productList").empty();
				$( "#main" ).empty();
				var $html="";
				if(products.length == 0){
					$html = $("<h1>No Products to display</h1><br>");
					$( "#main" ).append( $html);
					dynamicpagination();
				}else{
					for (var product in products) {
						console.log(typeof(products[product]));
						var url = "{{ route('Product.description', [app()->getlocale(),':id']) }}";
						url = url.replace(':id', products[product].Product_id);
						//url = url.replace("http", "https");
						// var carturl = "/abccontentbucket.s3.me-south-1.amazonaws.com/images/Shoplist-Ikea-rzk-version_1.svg";
						var likeurl = "/abccontentbucket.s3.me-south-1.amazonaws.com/images/002-love.svg";
						var producturl =  "/abccontentbucket.s3.me-south-1.amazonaws.com/products/"+products[product].MainImage;
						// producturl = producturl.replace(':image', products[product].MainImage);
						var addedasfavourite = products[product].addedAsFavourite;
						var styleinfo ="ico";
						var textvalue="Like";
						if(addedasfavourite){
							styleinfo ="ico liked";
							textvalue = "Unlike";
						}
						console.log(products[product].addedToCart);
						var carttextvalue="Add to Cart";
						var isaddedToCart = products[product].addedToCart;
						console.log("isaddedToCart"+ products[product].product_name +" is "+isaddedToCart);
						if(isaddedToCart){
							var carturl = "/abccontentbucket.s3.me-south-1.amazonaws.com/images/greentick.svg";
							carttextvalue = "Added to Cart";
						}else{
							var carturl = "/abccontentbucket.s3.me-south-1.amazonaws.com/images/Shoplist-Ikea-rzk-version_1.svg";
							
						}
						// $html = $("<div class='product-display-div'><div class='productlink-holding-div'><a href='"+ url +"' class='combocolorandavoidunderline w-inline-block'><div class='product-image-div'><img src='"+producturl+"'  height='235' width='400' id='pro_pic"+products[product].Product_id+"'  data-w-id='929cb5a7-833d-a883-92ec-fe7a5c2c664a' alt='' class='product-image'></div><div class='product-name combocolor'>"+ products[product].product_name +"</div></a></div><div class='fav-cart'><div class='fav' onClick='wishListAddition(\""+ products[product].Product_id +"\",event)' ><svg class='"+styleinfo+"' width='17' height='17' viewBox='0 0 24 24' id='"+products[product].Product_id+"'><path d='M12,21.35L10.55,20.03C5.4,15.36 2,12.27 2,8.5C2,5.41 4.42,3 7.5,3C9.24,3 10.91,3.81 12,5.08C13.09,3.81 14.76,3 16.5,3C19.58,3 22,5.41 22,8.5C22,12.27 18.6,15.36 13.45,20.03L12,21.35Z'></path></svg><input type='hidden' name='"+products[product].Product_id+"_text' id='"+products[product].Product_id+"_text' value='"+textvalue+"' /><div class='like-text' id='"+products[product].Product_id+"_div'>Like</div></div><div class='addtocartbutton' onClick='CartAddition(\""+ products[product].Product_id +"\",event)'><img src='"+carturl+"' width='19' height='19' alt='' class='cart-img' id='"+products[product].Product_id+"cartimg'><h5 class='addtocarttext' id='"+products[product].Product_id+"carttext'>"+carttextvalue+"</h5></div></div></div>");
                        
					    $html = $("<div class='product-display-div'><div class='productlink-holding-div'><a href='"+ url +"' class='combocolorandavoidunderline w-inline-block'><div class='product-image-div'><img src='"+producturl+"'  height='235' width='400' id='pro_pic"+products[product].Product_id+"'  data-w-id='929cb5a7-833d-a883-92ec-fe7a5c2c664a' alt='' class='product-image'></div><div class='product-name combocolor'>"+ products[product].product_name +"</div></a></div></div>");
						$( "#productList" ).append( $html);
						dynamicpagination();
					}
					
				}
         }
       function updateCategory(){
       						if(document.getElementsByName("category1").length != 0){ 
       						var selectedValues = "";
       				    // if($("#SelectedSUBCategories").val()!=""){
       				    // 	selectedValues = $("#SelectedSUBCategories").val()+","; 
						   // }
						//    if($(this).prop("checked") == false){
						// 		$(this).prop('checked', true);
            			// 	}else{
						// 		$(this).prop('checked', false);
						// 	}
       				    var checkboxes = document.getElementsByName("category1");
       				    var categories = [];
       				    for (var i=0; i<checkboxes.length; i++) {
						     // And stick the checked ones onto an array...
						     if (checkboxes[i].checked) {
						     	//alert(checkboxes[i].value);
						     	categories.push(checkboxes[i].value);

						       // alert(checkboxes[i].value);
						   }
						}

						if(categories.length==0){
							categories.push("ALL");
						}
						// selectedValues += categories;
						$("#SelectedSUBCategories").val(categories);
						
						 console.log($("#SelectedSUBCategories").val());
						// console.log($("#SelectedColours").val());
						// console.log($("#SelectedBrands").val());
					}
				} 
				function updateBrand(){
					if(document.getElementsByName("Brands1").length != 0){ 
						console.log("Inside updateBrand function");
						var selectedValues = "";
						
       				    
       				    var brandcheckboxes = document.getElementsByName("Brands1");
       				    var brands = [];
       				    for (var i=0; i<brandcheckboxes.length; i++) {
						     // And stick the checked ones onto an array...
						     if (brandcheckboxes[i].checked) {
						     	//alert(checkboxes[i].value);
						     	brands.push(brandcheckboxes[i].value);

						       // alert(checkboxes[i].value);
						    }
						}

						$("#SelectedBrands").val('');
						$("#SelectedBrands").val(brands);
						
						console.log($("#SelectedBrands").val());
					}
				}	
				function updateColour(){
					if(document.getElementsByName("colours1").length != 0){ 
						var selectedValues = "";
						
       				    var colourcheckboxes = document.getElementsByName("colours1");
       				    var colours = [];
       				    for (var i=0; i<colourcheckboxes.length; i++) {
						    
						     if (colourcheckboxes[i].checked) {
						     	
						     	colours.push(colourcheckboxes[i].value);

						      
						   }
						}
						$("#SelectedColours").val(colours);
						// console.log($("#SelectedSUBCategories").val());
						 console.log($("#SelectedColours").val());
						// console.log($("#SelectedBrands").val());
					}
				}
			function fetchDataBasedOnMobileFilter()
			{
					event.preventDefault();
					console.log("Hi inside filter function");
					var selBrands =[];
					var selColours =[];
					var categories =[];
					var min_price = 0;
					var max_price =6000;
					var str = $("#SelectedSUBCategories").val();
					var branddd = $("#SelectedBrands").val();
					var colourrr = $("#SelectedColours").val();
				    categories = str.split(",");
					selBrands = branddd.split(",");
					selColours = colourrr.split(",");
					var categorycount = categories.length;
					var colourCount = selColours.length;
					var brandCount = selBrands.length;
					
					min_price = $('#min_price1').val();
					max_price = $('#max_price1').val();
					console.log($("#SelectedSUBCategories").val());
					console.log($("#SelectedColours").val());
					console.log($("#SelectedBrands").val());
					if(colourCount == 1 && selColours[0] == "" ){
						colourCount =0;
					}
					if(brandCount == 1 && selBrands[0] == "" ){
						brandCount =0;
					}
					if(categorycount == 1 && categories[0] == "" ){

						categories[0]="ALL";
					}
					console.log(selBrands);
					console.log(selColours);

					console.log(categories);
					console.log($('#min_price1').val());
					console.log($('#max_price1').val());
					console.log("colourcount"+colourCount);
					console.log("brandCount"+brandCount);

					var url = "{{ route('Product.Fetch',app()->getlocale()) }}";
					//url = url.replace("http", "https");
					var _token = '<?php echo csrf_token() ?>';
							//alert(url);
							$.ajax(

							{
								type: "post",
								url: url,
								data: {   
									categories : categories,
									selectedCat : 'selected',
									selColours : selColours,
									selBrands  : selBrands,
									min_price : min_price,
									max_price : max_price,
									colourCount : colourCount,
									brandCount  : brandCount,
									_token  :_token
								},
								success:function(result,e) {
									console.log(result)


									console.log(url);

									console.log(result.products);
						      				// console.log(result.message);
						      				// console.log(result.Sub_Category_ID);
						      				// console.log(result.Category_ID);
											  var products =result.products;
											  console.log(result);
						      				console.log(products);
                                              console.log(result.html);
						      				product_display(result.products, event);

						      			},
						      			error:function(result) {
						      				alert('error');
						      				console.log(result);

						      			}
						    });
							console.log("Successfully executed");
							$("#filtermodel").hide();
							// $("#apply").hide();
							// $("#resetButton").hide();


			}
		function reset(){
					console.log("Inside the reset function");
					$("#mobileForm").submit();
		}
		function showmodel(){
        console.log("Hi I am inside the model displaying");

        if($("#filtermodel").length){
             $("#filtermodel").css("display", "block");
             $('.modal-wrapper-copy').show();
             $('.modal-wrapper-copy').css("opacity", 100);
             console.log("HI");
		}
		// else{
        //   $('.modal-wrapper-copy').show();
        // }

      }	
</script>
  
