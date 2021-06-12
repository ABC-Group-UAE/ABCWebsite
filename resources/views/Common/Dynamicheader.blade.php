<?php 
  if(! Session::has('id')){
    Session::put('id',  rand());
}
                                   $SId = Session::get('id');
?>
<div data-collapse="medium" data-animation="over-right" data-duration="400" role="banner" class="tab-navbar w-nav" id="header">
    <div class="navbar-container-2 w-container">
      <div class="div-block-119"><a href="{{route('home',app()->getlocale())}}" aria-current="page" class="brand w-nav-brand w--current"><img src="/abccontentbucket.s3.me-south-1.amazonaws.com\images\method-draw-image-3.svg" height="" width="63" alt="abc group uae logo" class="abclogo"></a></div>
      <nav role="navigation" class="nav-menu-4 w-nav-menu">
        <a href="#" data-w-id="91463526-650a-57b2-aca5-40f199193f1d" class="our-story w-nav-link">@lang('Our Story')</a>
        <a href="{{route('Explore',app()->getlocale())}}" class="product w-nav-link">@lang('Product')</a>
        <a href="#" data-w-id="91463526-650a-57b2-aca5-40f199193f21" class="explore w-nav-link">@lang('Explore')</a>
        <a href="{{route('catalogue',app()->getlocale())}}" class="downloads w-nav-link">@lang('Downloads')</a>
        <a href="{{route('location',app()->getlocale())}}" class="store-locator w-nav-link">@lang('Store Locator')</a>
        <a href="{{route('careers',app()->getlocale())}}" class="career w-nav-link">@lang('Career')</a>
        <div class="searchboxdiv">
              <div class="form-block w-form">
                <form autocomplete="off" id="wf-form-searchBlock" name="wf-form-searchBlock" data-name="searchBlock" class="searchform" action="{{route('Search.filter',app()->getlocale())}}" method="get">
                  {{csrf_field()}}<input type="hidden" name="From" id="From" value="desktop"><input type="text" class="search-textbox w-input" maxlength="256" name="SearchProduct" data-name="Search Prosucts 2" placeholder="search products here" id="SearchProduct"><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/images/002-loupe.svg" width="19" id="searchicon" alt="" class="searchicon" onClick="submitForm('wf-form-searchBlock')" ><input type="hidden" name="filtertype" id="filter-info"><input type="hidden" name="filter-values" id="filter-values"></form>
                <div class="w-form-done"></div>
                <div class="w-form-fail"></div>
              </div>
              <div class="autocompletediv" id="product-list" Style="display:none;">
                <ul role="list" class="w-list-unstyled" id="data" Style="display:none;">
                  
                </ul>
              </div>
            </div>
        <!-- <div class="favandshoplisticondiv">
          <div class="w-layout-grid grid-6"><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/images/002-love.svg'" width="29" height="23" id="w-node-c756fada0958-84a26cf0" alt="" class="image-12">
            <div class="cart-div">
              <div class="colour-block notification">
                <div class="text-block-29">12</div>
              </div><a href="shoplist-without-price.html" class="w-inline-block"><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/images/Shoplist-Ikea-rzk-version.svg'" width="23" height="23" alt="" class="shoplist-icon"></a></div>
          </div>
        </div> -->
        <div class="favandshoplisticondiv">
              <div class="w-layout-grid grid-6"><a data-w-id="91463526-650a-57b2-aca5-40f199193f49" href="#" class="w-inline-block"><img src="/abccontentbucket.s3.me-south-1.amazonaws.com\images\002-loupe.svg" width="29" height="23" id="w-node-79be17756e1e-17756dc8" alt="" class="image-12"></a>
                <div class="cart-div">
                  
                  <div class="colour-block notification" id = "cartCount" <?php if(\Cart::session($SId)->isEmpty()) { ?> style=" display:none; "<?php } ?> >
                    <div class="text-block-29" id="cartCountText">
                           @if(\Cart::session($SId)->isEmpty())
                              
                               0
                            @else
                                <?php 
                                   $SId = Session::get('id');
                                echo \Cart::session($SId)->getContent()->count() ;

                                ?>
                            @endif
                   </div></div>
                   <a href="{{route('Cart.View',app()->getlocale())}}" class="w-inline-block"><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/images/Shoplist-Ikea-rzk-version.svg" width="23" height="23" alt="" class="shoplist-icon"></a>
                  </div>
                </div>
              </div>
        <div class="whatsappdiv">
          <div class="w-layout-grid whatsapp-grid"><a href="https://api.whatsapp.com/send?phone=+971504240262&amp;abid=+971564240262" target="_blank"><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/images/003-whatsapp.svg" width="19" height="19" alt=""></a>
            <div id="w-node-c756fada0962-84a26cf0"><a href="https://api.whatsapp.com/send?phone=+971504240262&amp;abid=+971564240262" target="_blank" style="color:black;text-decoration:none">+971504240262</a></div>
            <!-- <div id="w-node-c756fada0964-84a26cf0" class="text-block-34">ENGLISH</div><a href="https://api.whatsapp.com/send?phone=+971504240262&amp;abid=+971564240262" target="_blank" ><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/images/003-whatsapp.svg" width="19" height="19" alt=""></a>
            <div id="w-node-c756fada0967-84a26cf0"><a href="https://api.whatsapp.com/send?phone=+971504240262&amp;abid=+971564240262" target="_blank" style="color:black;">+971504240262</a></div>
            <div id="w-node-c756fada0969-84a26cf0">@lang('ARABIC')</div> -->
          </div>
          <!-- <div style="display:flex;">
           {{ request()->segment(2)}}  {{request()->segment(3)}}  {{request()->segment(4)}} 
          <a href="/en/{{ request()->segment(2)}}/{{ request()->segment(3)}}">En</a>|<a href="/ar/{{ request()->segment(2)}}/{{ request()->segment(3)}}">Ar</a>
        </div> -->
        </div>
        
      </nav>
      <div class="div-block-20">
        <div class="favandshoplisticondiv-hidden">
        <div class="w-layout-grid grid-6"><a data-w-id="91463526-650a-57b2-aca5-40f199193f49" href="#" class="w-inline-block"><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/images/002-loupe.svg" width="29" height="23" id="w-node-79be17756e1e-17756dc8" alt="" class="image-12"></a>
                <div class="cart-div" id="w-node-40f199193f4b-99193f17">
                  
                  <div class="colour-block notification" id = "cartCount1" <?php if(\Cart::session($SId)->isEmpty()) { ?> style=" display:none; "<?php } ?> >
                    <div class="text-block-29" id="cartCountText1">
                           @if(\Cart::session($SId)->isEmpty())
                              
                               0
                            @else
                                <?php 
                                   $SId = Session::get('id');
                                echo \Cart::session($SId)->getContent()->count() ;

                                ?>
                            @endif
                   </div></div>
                   <a href="{{route('Cart.View',app()->getlocale())}}" class="w-inline-block"><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/images/Shoplist-Ikea-rzk-version.svg" width="23" height="23" alt="" class="shoplist-icon"></a>
                  </div>
          </div>
        </div>
      </div>
      <div data-w-id="91463526-650a-57b2-aca5-40f199193f51" class="tabmenus"><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/images/menu.svg" loading="lazy" width="20" height="20" alt="" class="image-55"></div>
    </div>
  </div>
  
  <div  class="reddish-menu">
    <div class="red-menu-contaiiner w-container">
      <a href="/abccontentbucket.s3.me-south-1.amazonaws.com/corporate/ABC Group UAE_ Corporate Profile 2020.pdf" target="_blank" class="red-section-nav-link">@lang('Company Profile')</a>
      
      <a href="/abccontentbucket.s3.me-south-1.amazonaws.com/corporate/History.pdf" target="_blank" class="red-section-nav-link">@lang('History')</a>
      <a href="{{route('Team',app()->getlocale())}}" class="red-section-nav-link">@lang('Team')</a>
      <a href="{{route('OurPresence',app()->getlocale())}}" class="red-section-nav-link">@lang('Global Presence')</a>
      </div>
  </div>
  <div  class="explore-reddish-menu">
    <div class="exploresubmenucontainer w-container">
      <a href="{{route('Brands',app()->getlocale())}}" class="red-section-nav-link">@lang('Brands')</a>
      <a href="{{route('Exhibits',app()->getlocale())}}" class="red-section-nav-link">@lang('Exhibits')</a>
      <a href="{{route('AR',app()->getlocale())}}" class="red-section-nav-link">@lang('AR Experience')</a>
     </div>
  </div>
  <div  class="search-block">
    <div class="form-block-10 w-form">
      <form autocomplete="off" id="email-form-5" name="email-form-5" data-name="Email Form 5" class="form-6" action="{{route('Search.filter',app()->getlocale())}}" method="get">{{csrf_field()}}
        <input type="hidden" name="filtertype1" id="filter-info1"><input type="hidden" name="From" id="From" value="mobile"><input type="hidden" name="filter-values1" id="filter-values1">
        <input type="email" class="text-field-9 w-input" autofocus="true" maxlength="256" name="SearchProduct1" data-name="Search" placeholder="What are you looking for?" id="SearchProduct1">
        <div class="div-block-117"><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/images/method-draw-image-4.svg" loading="lazy" width="19" height="19" alt="" onClick="submitForm1('wf-form-searchBlock')"></div>
      </form>
    </div>
    <div class="div-block-118" id="product-list1">
      <ul role="list" class="list-2 w-list-unstyled" id="data1">
        
      </ul>
    </div>
  </div>
  <div data-w-id="df8b2c7f-8965-4335-c548-9dd2fa53bb08"  class="div-block-110">
    <div class="div-block-116">
      <div data-w-id="df8b2c7f-8965-4335-c548-9dd2fa53bb0a" class="div-block-113"><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/images/close.svg" loading="lazy" width="30" data-w-id="df8b2c7f-8965-4335-c548-9dd2fa53bb0b" alt="" class="image-64"></div>
      <div class="div-block-114">
<a href="{{route('Explore',app()->getlocale())}}" class="link-block-7 w-inline-block">
            <h1 class="heading-32">@lang('Product')</h1>
          </a>        
<div>
          <a href="#" class="link-block-7 w-inline-block">
            <h1 class="our-story-a">@lang('Our Story')</h1>
          </a>
          <a href="/abccontentbucket.s3.me-south-1.amazonaws.com/corporate/ABC Group UAE_ Corporate Profile 2020.pdf" target="_blank" class="link-block-7 w-inline-block">
            <h1 class="sub-menu-heading">@lang('Company profile')</h1>
          </a>
          <a href="/abccontentbucket.s3.me-south-1.amazonaws.com/corporate/History.pdf" target="_blank" class="link-block-7 w-inline-block">
            <h1 class="sub-menu-heading">@lang('History')</h1>
          </a>
          
          <a href="{{route('Team',app()->getlocale())}}" class="link-block-7 w-inline-block">
            <h1 class="sub-menu-heading">@lang('Team')</h1>
          </a>
          <a href="{{route('OurPresence',app()->getlocale())}}" class="link-block-7 w-inline-block">
            <h1 class="sub-menu-heading">@lang('Global presence')</h1>
          </a>
          
        </div>
        <div>
          <a href="#" class="link-block-7 w-inline-block">
            <h1 class="explore-a">@lang('Explore')</h1>
          </a>
          <a href="{{route('Brands',app()->getlocale())}}" class="link-block-7 w-inline-block">
            <h1 class="sub-menu-heading">@lang('Brand')</h1>
          </a>
          <a href="{{route('Exhibits',app()->getlocale())}}" class="link-block-7 w-inline-block">
            <h1 class="sub-menu-heading">@lang('Exhibit')</h1>
          </a>
          <a href="{{route('AR',app()->getlocale())}}" class="link-block-7 w-inline-block">
            <h1 class="sub-menu-heading">@lang('AR Experience')</h1>
          </a>
          
        </div>
        <div>
                   <a href="{{route('catalogue',app()->getlocale())}}" class="link-block-7 w-inline-block">
            <h1 class="heading-32">@lang('Download')</h1>
          </a>
          <a href="{{route('location',app()->getlocale())}}" class="link-block-7 w-inline-block">
            <h1 class="heading-32">@lang('Store Locator')</h1>
          </a>
          <a href="{{route('careers',app()->getlocale())}}" class="link-block-7 w-inline-block">
            <h1 class="heading-32">@lang('Career')</h1>
          </a>
        </div>
        <div id="w-node-574c93f57b01-84a26cf0" class="div-block-111"><a href="https://www.facebook.com/abcgroupuae" target="_blank" class="link-block-9 w-inline-block"><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/images/002-facebook.svg" loading="lazy" width="20" alt="" class="image-63"></a><a href="https://www.linkedin.com/company/abc-mercantile-fzco-uae/?viewAsMember=true" target="_blank" class="w-inline-block"><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/images/005-linkedin.svg" loading="lazy" width="20" alt="" class="image-62"></a><a href="https://twitter.com/abcgroupuae" target="_blank" class="w-inline-block"><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/images/003-twitter-1.svg" loading="lazy" width="20" alt="" class="image-61"></a><a href="https://www.instagram.com/abcgroupuae" target="_blank" class="w-inline-block"><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/images/001-instagram.svg" loading="lazy" width="20" alt="" class="image-60"></a></div>
      </div>
    </div>
  </div>


  <script>
     var currentFocus;
     var currentFocus1;
    $(function() {
      // var likeBtn = document.querySelector('.ico');

      //   likeBtn.addEventListener('click', function() {
      //       likeBtn.classList.toggle('liked');
      //   });

        // document.addEventListener('keydown', function(key){
        //   if(key.key === 'l' || key.key === 'L') {
        //       likeBtn.classList.toggle('liked');
        //   }
        // });
            var count=0;
            var addProduct="";
            var code="";
            var view = "desktop";
            var categoryset=new Set();
            var subcategoryset=new Set();
            var subsubcategoryset=new Set();
            var productset=new Set();
            var brandset=new Set();
           
              $("#SearchProduct").on("input",function(e){
                $("#product-list").empty();
                
                code=$(this).val();
                count = code.length;
                console.log(count);
                if(count==0){
                  $("#product-list").empty();
                }
               
                if(count>0){
                  url="{{route('autocomplete',app()->getlocale())}}";
                  //url = url.replace("http", "https");
                  console.log(url);
                  console.log(code);
                  $.ajax({
                    url: url,
                    type:"GET",
                    
                    data:{
                      search:code,
                      From:view,
                      
                    },
                    success:function(response){
                      $("#product-list").show();
                      $("#data").show();
                      //console.log("Success");
                      //console.log(response);
                      categoryset.clear();
                      subcategoryset.clear();
                      subsubcategoryset.clear();
                      productset.clear();
                      brandset.clear();
                      currentFocus1= -1;
                     // $("#product-list").empty();
                      // $("#data").empty();
                      addProduct="";
                      list=response;
                      //console.log(typeof(code));  
                      var listcount=list.length;
                      var isEmptyProduct = true, isEmptyCategory = true , isEmptySubCategory=true ,isEmptySubSubCategory=true , isEmptyBrand = true ;
                      for(var i=0;i<listcount;i++){
                        console.log(list[i]);
                        var newcode=code.toLowerCase();
                        var category=(list[i].Category_Name).toLowerCase()+"-"+(list[i].Category_ID);
                        var subcategory=(list[i].Sub_Category_Name).toLowerCase()+"-"+(list[i].Category_ID)+"-"+(list[i].Sub_Category_ID);
                        var subsubcategory=(list[i].Sub_Sub_Category_Name).toLowerCase()+"-"+(list[i].Category_ID)+"-"+(list[i].Sub_Category_ID)+"-"+(list[i].Sub_Sub_Category_ID);
                        var product=(list[i].product_name).toLowerCase();
                        var brand=(list[i].Brand).toLowerCase();
                        categoryset.add(category);
                        subcategoryset.add(subcategory);
                        subsubcategoryset.add(subsubcategory);
                        productset.add(product);
                        brandset.add(brand);
                        var catsearch=category.search(newcode);
                        var subcatsearch=subcategory.search(newcode);
                        var subsubcatsearch=subsubcategory.search(newcode);
                        var productsearch=product.search(newcode);
                        var brandsearch=brand.search(newcode);
                        console.log(catsearch);
                        console.log(subcatsearch);
                        console.log(subsubcatsearch);
                        console.log(productsearch);
                        console.log(brandsearch);
                        if(productsearch>=0){
                          isEmptyProduct = false;
                          var type="description";
                         // addProduct+="<li   id='"+list[i].product_name+"' class='suggestionli' onClick='selectItem('"+list[i].product_name+"','description','"+list[i].Product_id+"')'>"+list[i].product_name+"</li>"; 
                          addProduct+='<li   id="'+list[i].product_name+'" class="list-item" onClick="selectItem(\''+list[i].product_name+'\',\''+type+'\',\''+list[i].Product_id+'\')">'+list[i].product_name+'</li>'; 
                        }else if(catsearch>=0){
                          isEmptyCategory =false;
                          addProduct="";
                          for (let item of categoryset) {
                                var type="Category";
                                var catarray = item.split("-");
                              
                                addProduct+='<li class="list-item" id="'+catarray[0]+'" onClick="selectItem(\''+catarray[0]+'\',\''+type+'\',\''+item+'\');">'+catarray[0]+'</li>'; 
                              }
                        }
                        if(subcatsearch>=0){
                          isEmptySubCategory=false;
                          addProduct="";
                          for (let item of subcategoryset) {
                                var type="Sub_Category";
                                var subcatarray = item.split("-");
                              
                                  addProduct+='<li class="list-item" id="'+subcatarray[0]+'" onClick="selectItem(\''+subcatarray[0]+'\',\''+type+'\',\''+item+'\');">'+subcatarray[0]+'</li>';
                              
                                
                              }
                         }
                        if(subsubcatsearch>=0){
                          isEmptySubSubCategory = false;
                          addProduct="";
                          for (let item of subsubcategoryset) {
                                var type="Sub_Sub_Category";
                                var subsubcatarray = item.split("-");
                              
                                  addProduct+='<li class="list-item" id="'+subsubcatarray[0]+'" onClick="selectItem(\''+subsubcatarray[0]+'\',\''+type+'\',\''+item+'\');">'+subsubcatarray[0]+'</li>';
                              
                                
                              }
                        }
                        if(brandsearch>=0){
                          isEmptyBrand = false;
                          addProduct="";
                         
                            for (let item of brandset) {
                                var type="Brand";
                              
                                addProduct+='<li class="list-item" id="'+item+'" onClick="selectItem(\''+item+'\',\''+type+'\',\''+item+'\');">'+item+'</li>'; 
                              }
                          
                        }
                        console.log("inside no products list countlist = "+ listcount);
                        // if(brandsearch == -1 && productsearch == -1 && subsubcatsearch == -1 && subcatsearch == -1 && catsearch == -1){
                        //   console.log("inside no products list countlist = "+ listcount);
                        //   addProduct="";
                        //   addProduct+='<li class="list-item" id="NoItem" onClick="selectItem1(\'NoItem\',\'type\',\'NoItem\');"><h4 class="heading-33">No Match Found</h4></li>'; 
                        // }
                        
                        //addProduct="<li id='"+list[i]+"' onClick=selectItem('"+list[i]+"')>"+list[i]+"</li>";
                        $('#product-list').html(addProduct);
                        //$('#data').html(addProduct);

                      }
                      if(isEmptyProduct && isEmptyCategory && isEmptySubCategory && isEmptySubSubCategory && isEmptyBrand) {
                           console.log("inside no products list countlist = "+ listcount);
                           addProduct="";
                           addProduct+='<li class="list-item" id="NoItem" onClick="selectItem1(\'NoItem\',\'type\',\'NoItem\');"><h4 class="heading-33">No Match Found</h4></li>'; 
                           $('#product-list').html(addProduct);
                     }    
                    }
                  });
                 }else{
                  $('#product-list').hide();
                 }
              });
              $("#SearchProduct").on("keydown",function(e){
                var x = document.getElementById("product-list");
                 if (x) x = x.getElementsByTagName("li");
                 console.log(x.length);
                if (e.keyCode == 40 ) {
                      /*If the arrow DOWN key is pressed,
                      increase the currentFocus variable:*/
                      // $(".list-item").removeClass("autocomplete-active");
                      // $(this).addClass("autocomplete-active");
                      /*and and make the current item more visible:*/
                      currentFocus1++;
                      addActive1(x);
                    } else if (e.keyCode == 38) {
                      /*If the ENTER key is pressed, prevent the form from being submitted,*/
                      currentFocus1--;
                      addActive1(x);
                    }else if (e.keyCode == 13) {
                      /*If the ENTER key is pressed, prevent the form from being submitted,*/
                      e.preventDefault();
                        if (currentFocus1 > -1) {
                            /*and simulate a click on the "active" item:*/
                            if (x) x[currentFocus1].click();
                            submitForm('#wf-form-searchBlock');
                          }
                     
                    }

              });
              view="mobile";
             
              // $("#SearchProduct1").keyup( function(e){
              $("#SearchProduct1").on("input",function(e){ 
                $("#product-list1").empty();
                $('.search-block').css('display','block');
                code=$(this).val();
                count = code.length;
                console.log(count);
                if(count==0){
                  $("#product-list1").empty();
                }
               
                if(count>0){
                  url="{{route('autocomplete',app()->getlocale())}}";
                  //url = url.replace("http", "https");
                  console.log(url);
                  console.log(code);
                  $.ajax({
                    url: url,
                    type:"GET",
                    
                    data:{
                      search:code,
                      From:view,
                    },
                    success:function(response){
                      $("#product-list1").show();
                      $("#data1").show();
                      $('.search-block').css('display','block');
                      //console.log("Success");
                      //console.log(response);
                      currentFocus= -1;
                      categoryset.clear();
                      subcategoryset.clear();
                      subsubcategoryset.clear();
                      productset.clear();
                      brandset.clear();
                     // $("#product-list").empty();
                      // $("#data").empty();
                      addProduct="";
                      list=response;
                      //console.log(typeof(code));  
                      var listcount=list.length;
                      var isEmptyProduct = true, isEmptyCategory = true , isEmptySubCategory=true ,isEmptySubSubCategory=true , isEmptyBrand = true ;
                      for(var i=0;i<listcount;i++){
                        console.log(list[i]);
                        var newcode=code.toLowerCase();
                        var category=(list[i].Category_Name).toLowerCase()+"-"+(list[i].Category_ID);
                        var subcategory=(list[i].Sub_Category_Name).toLowerCase()+"-"+(list[i].Category_ID)+"-"+(list[i].Sub_Category_ID);
                        var subsubcategory=(list[i].Sub_Sub_Category_Name).toLowerCase()+"-"+(list[i].Category_ID)+"-"+(list[i].Sub_Category_ID)+"-"+(list[i].Sub_Sub_Category_ID);
                        var product=(list[i].product_name).toLowerCase();
                        var brand=(list[i].Brand).toLowerCase();
                        categoryset.add(category);
                        subcategoryset.add(subcategory);
                        subsubcategoryset.add(subsubcategory);
                        productset.add(product);
                        brandset.add(brand);
                        var catsearch=category.search(newcode);
                        var subcatsearch=subcategory.search(newcode);
                        var subsubcatsearch=subsubcategory.search(newcode);
                        var productsearch=product.search(newcode);
                        var brandsearch=brand.search(newcode);
                        console.log(catsearch);
                        console.log(subcatsearch);
                        console.log(subsubcatsearch);
                        console.log(productsearch);
                        console.log(brandsearch);
                        if(productsearch>=0){
                          isEmptyProduct = false;
                          var type="description";
                         // addProduct+="<li   id='"+list[i].product_name+"' class='suggestionli' onClick='selectItem('"+list[i].product_name+"','description','"+list[i].Product_id+"')'>"+list[i].product_name+"</li>"; 
                          addProduct+='<li   id="'+list[i].product_name+'" class="list-item " onClick="selectItem1(\''+list[i].product_name+'\',\''+type+'\',\''+list[i].Product_id+'\')">'+list[i].product_name+'</li>'; 
                          // addProduct+="<li   id='"+list[i].product_name+"' class='list-item' onClick='selectItem1('"+list[i].product_name+"','description','"+list[i].Product_id+"')'><h4 class='heading-33'>"+list[i].product_name+"</h4></li>"; 
                        }else if(catsearch>=0){
                          isEmptyCategory =false;
                          addProduct="";
                          for (let item of categoryset) {
                                var type="Category";
                                var catarray = item.split("-");
                              
                                addProduct+='<li class="list-item" id="'+catarray[0]+'" onClick="selectItem1(\''+catarray[0]+'\',\''+type+'\',\''+item+'\');"><h4 class="heading-33">'+catarray[0]+'</h4></li>'; 
                              }
                        }
                        if(subcatsearch>=0){
                          isEmptySubCategory=false;
                          addProduct="";
                          for (let item of subcategoryset) {
                                var type="Sub_Category";
                                var subcatarray = item.split("-");
                              
                                  addProduct+='<li class="list-item" id="'+subcatarray[0]+'" onClick="selectItem1(\''+subcatarray[0]+'\',\''+type+'\',\''+item+'\');"><h4 class="heading-33">'+subcatarray[0]+'</h4></li>';
                              
                                
                              }
                         }
                        if(subsubcatsearch>=0){
                          isEmptySubSubCategory = false;
                          addProduct="";
                          for (let item of subsubcategoryset) {
                                var type="Sub_Sub_Category";
                                var subsubcatarray = item.split("-");
                              
                                  addProduct+='<li class="list-item" id="'+subsubcatarray[0]+'" onClick="selectItem1(\''+subsubcatarray[0]+'\',\''+type+'\',\''+item+'\');"><h4 class="heading-33">'+subsubcatarray[0]+'</h4></li>';
                              
                                
                              }
                        }
                        if(brandsearch>=0){
                          isEmptyBrand = false;
                          addProduct="";
                         
                            for (let item of brandset) {
                                var type="Brand";
                              
                                addProduct+='<li class="list-item" id="'+item+'" onClick="selectItem1(\''+item+'\',\''+type+'\',\''+item+'\');"><h4 class="heading-33">'+item+'</h4></li>'; 
                              }
                          
                        }
                        // if(brandsearch == -1 && productsearch == -1 && subsubcatsearch == -1 && subcatsearch == -1 && catsearch == -1){
                        //   console.log("inside no products list countlist = "+ listcount);
                        //   addProduct="";
                        //   addProduct+='<li class="list-item" id="NoItem" onClick="selectItem1(\'NoItem\',\'type\',\'NoItem\');"><h4 class="heading-33">No Match Found</h4></li>'; 
                        // }
                        
                        //addProduct="<li id='"+list[i]+"' onClick=selectItem('"+list[i]+"')>"+list[i]+"</li>";
                        $('#product-list1').html(addProduct);
                        //$('#data').html(addProduct);

                      }  
                     if(isEmptyProduct && isEmptyCategory && isEmptySubCategory && isEmptySubSubCategory && isEmptyBrand) {
                           console.log("inside no products list countlist = "+ listcount);
                           addProduct="";
                           addProduct+='<li class="list-item" id="NoItem" onClick="selectItem1(\'NoItem\',\'type\',\'NoItem\');"><h4 class="heading-33">No Match Found</h4></li>'; 
                           $('#product-list1').html(addProduct);
                     } 
                    } 
                  });
                 }else{
                  $('#product-list1').hide();
                 }
              });
              $("#SearchProduct1").on("keydown",function(e){
                var x = document.getElementById("product-list1");
                 if (x) x = x.getElementsByTagName("li");
                 console.log(x.length);
                if (e.keyCode == 40 ) {
                      /*If the arrow DOWN key is pressed,
                      increase the currentFocus variable:*/
                      // $(".list-item").removeClass("autocomplete-active");
                      // $(this).addClass("autocomplete-active");
                      /*and and make the current item more visible:*/
                      currentFocus++;
                      addActive(x);
                    } else if (e.keyCode == 38) {
                      /*If the ENTER key is pressed, prevent the form from being submitted,*/
                      currentFocus--;
                      addActive(x);
                    }else if (e.keyCode == 13) {
                      /*If the ENTER key is pressed, prevent the form from being submitted,*/
                      e.preventDefault();
                        if (currentFocus > -1) {
                            /*and simulate a click on the "active" item:*/
                            if (x) x[currentFocus].click();
                            submitForm1('#email-form-5');
                          }
                     
                    }

              });

              
             

        });
        function addActive(x) {
    /*a function to classify an item as "active":*/
    if (!x) return false;
    /*start by removing the "active" class on all items:*/
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    /*add class "autocomplete-active":*/
    x[currentFocus].classList.add("autocomplete-active");
  }
  function removeActive(x) {
    /*a function to remove the "active" class from all autocomplete items:*/
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("autocomplete-active");
    }
  }
  function addActive1(x) {
    /*a function to classify an item as "active":*/
    if (!x) return false;
    /*start by removing the "active" class on all items:*/
    removeActive(x);
    if (currentFocus1 >= x.length) currentFocus1 = 0;
    if (currentFocus1 < 0) currentFocus1 = (x.length - 1);
    /*add class "autocomplete-active":*/
    x[currentFocus1].classList.add("autocomplete-active");
  }

        function selectItem(listitem,description,redirectid){
                console.log("Clicked auto");
                console.log(description);
                $("#filter-info").val(description);
                $("#filter-values").val(redirectid);
                console.log(listitem);
                console.log(redirectid);
                $("#product-list").hide();

                $("#SearchProduct").val(listitem);
                submitForm('#wf-form-searchBlock');
         }

        function selectItem1(listitem,description,redirectid){
                console.log("Clicked auto");
                console.log(description);
                $("#filter-info1").val(description);
                $("#filter-values1").val(redirectid);
                console.log(listitem);
                console.log(redirectid);
                $("#product-list1").hide();

                $("#SearchProduct1").val(listitem);
                submitForm1('#email-form-5');
         }

      function submitForm(formid){
          console.log("inside form submit function");
          $("#wf-form-searchBlock").submit();
      }
      function submitForm1(formid){
          console.log("inside form submit function");
          $("#email-form-5").submit();
      }
  </script>
