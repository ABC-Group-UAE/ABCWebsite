<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Tue Sep 15 2020 12:53:39 GMT+0000 (Coordinated Universal Time)  -->


<html data-wf-page="5f391927bba6e95475e1cb89" data-wf-site="5f103f7e5224a5353e5ce1c7">


<head>
    <meta charset="utf-8">
    <title>Brands</title>
    <meta name="description" content="Our Top Brands">
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
<link rel="canonical" href="https://abcgroupuae.com/en/brands">
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
<style>
.header{
  background:#d84701;
  
  /* line-height: 36px; */
  
/* font-family: 'Sofia pro';#c53f47
font-size:12px; */
  color: #fff;
  text-align: center;
  border: 1px solid coral;
  transition:1s all;
  border-radius: 5px;
}
.accordianTitle{
  font-family: Sofiapro, sans-serif;
  font-size: 14px;
  font-weight: 300;
  color: #fff;
}
.header:hover{
  background: lightcoral;
  border-radius: 10px;
}
.activ{
  background: coral;
  letter-spacing: 4px;

}
#accordion{
    border: 1px solid whitesmoke;
    border-radius: 5px;
}
.content{
  background: #fff;
  color: gray;
  overflow: hidden;
  

}
</style>

<script>
$(document).ready(function() {
  //getting the height of every content
  var height=[];
  $('.content').each(function(index, el) {
    height.push($(this).css('height'));
  });
  //making them collapse
  $('.content').css('height', '0px');
var parw=document.getElementById('accordion').parentElement.style.width;

 
$('#accordion').css('width',parw+ 'px');
var a=$('.content').css('height');
$('.content').css('height','0px');
  $('.header').click(function(event) {
  var itsme=$(this);
  $('.header').removeClass('activ');
  $('.content').each(function(index, el) {
    if(itsme.next().is($(this))){
      if($(this).css('height')=='0px'){$(this).animate({'height':height[index],'opacity':'1','padding' : '10px'}, 250); itsme.addClass('activ'); }

      else
      $(this).animate({'height':'0px','opacity':'0','padding' : '0px'},500 );
    }

    else{
      $(this).animate({'height':'0px','opacity':'0','padding' : '0px'}, 500 );
    }
  });
});
});

    </script>
    
  </head>
<body >
    @include('Common.Dynamicheader')
    <div class="brand-section-image-container w-container">
    <h1 class="mainheading">Our Brands</h1>
  </div>
  <div class="main-section-container w-container">
    
    <div data-duration-in="300" data-duration-out="100" class="tabs w-tabs">
      <div class="tabs-menu w-tab-menu" >
        <a data-w-tab="Tab 1" id="w-node-0269c5f163e4-75e1cb89" class="tab-link-tab-1 w-inline-block w-tab-link w--current"  onClick="selectedTabStyle('redTab1')"><img  height="50" src="/abccontentbucket.s3.me-south-1.amazonaws.com/images/Asset-10.png" width="50" data-w-id="a823a568-ac97-00c5-8621-f4130dc44e72" alt="becken logo" class="brand-logo" >
          <div class="brandtab-redline" style="opacity:1" id = "redTab1"></div>
        </a>
        <a data-w-tab="Tab 2" id="w-node-0269c5f163e7-75e1cb89" class="tab-link-tab-2 w-inline-block w-tab-link" onClick="selectedTabStyle('redTab2')"><img  height="50" src="/abccontentbucket.s3.me-south-1.amazonaws.com/images/bathx.png" width="50" data-w-id="0476e870-e78a-bc74-0601-af5839fbf372" alt="bathx logo" class="brand-logo">
          <div class="brandtab-redline" style="opacity:0" id = "redTab2"></div>
        </a>
        <a data-w-tab="Tab 3" class="tab-link-tab-3 w-inline-block w-tab-link" onClick="selectedTabStyle('redTab3')"><img  height="50" src="/abccontentbucket.s3.me-south-1.amazonaws.com/images/Asset-9.png" width="50" data-w-id="9b03a1ce-0f50-ce55-76d1-49b37d7d780b" alt="deko logo" class="brand-logo">
          <div class="brandtab-redline" style="opacity:0" id = "redTab3"></div>
        </a>
        <a data-w-tab="Tab 4" class="tab-link-tab-4 w-inline-block w-tab-link" onClick="selectedTabStyle('redTab4')"><img  height="50" src="/abccontentbucket.s3.me-south-1.amazonaws.com/images/INOX-WITH-TAGLINE.png" width="50" data-w-id="967a5fd6-9dbd-d651-7a9f-6b5db7830b71" alt="inox logo" class="brand-logo">
          <div class="brandtab-redline" style="opacity:0" id = "redTab4"></div>
        </a>
        <a data-w-tab="Tab 5" id="w-node-bf35bcfc0386-75e1cb89" class="tab-link-tab-5 w-inline-block w-tab-link" onClick="selectedTabStyle('redTab5')"><img  height="50" src="/abccontentbucket.s3.me-south-1.amazonaws.com/images/viceroy.png" width="50" data-w-id="525cac62-de45-09a0-77e8-df1beb6cf86d" alt="viceroy logo" class="brand-logo">
          <div class="brandtab-redline" style="opacity:0" id = "redTab5"></div>
        </a>
        <a data-w-tab="Tab 6" id="w-node-80fa145fd855-75e1cb89" class="tab-link-tab-6 w-inline-block w-tab-link" onClick="selectedTabStyle('redTab6')"><img class="brand-logo" alt="granitogres" src="/abccontentbucket.s3.me-south-1.amazonaws.com/images/Asset-12.png" width="50" height="50" alt=""  sizes="(max-width: 767px) 100vw, (max-width: 991px) 11vw, (max-width: 1919px) 126.660888671875px, 7vw" data-w-id="46b9801c-ff73-34eb-2b63-80fa145fd858" srcset="/abccontentbucket.s3.me-south-1.amazonaws.com/images/Asset-12-p-500.png 500w, /abccontentbucket.s3.me-south-1.amazonaws.com/images/Asset-12.png 649w">
          <div class="brandtab-redline" style="opacity:0" id = "redTab6"></div>
        </a>
      </div>
      <div class="tabs-content w-tab-content">
        <div data-w-tab="Tab 1" class="tab-pane-tab-1 w-tab-pane w--tab-active">
        <div class="specialproductdiiv-copy"><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/images/12.jpeg" loading="lazy" height="" sizes="(max-width: 767px) 100vw, (max-width: 991px) 95vw, 45vw" srcset="/abccontentbucket.s3.me-south-1.amazonaws.com/images/12.jpeg 1080w, /abccontentbucket.s3.me-south-1.amazonaws.com/images/12.jpeg 1600w, /abccontentbucket.s3.me-south-1.amazonaws.com/images/12.jpeg 2000w" alt="Becken" class="special-product-img-copy">
            <div class="specialproductstory">
              <h4 class="product-heading-copy">BECKEN</h4>
              <p class="paragraph-15">Becken  has the strength of the latest German  technology. The very brand name “Becken” means sink in German language.  We provide both machine pressed and handmade sinks. Handmade kitchen   sinks   are   spacious   and   hammered   out   by   master craftsmen from  premium   stainless   steel.   Sinks   come   with   both embossing   and   satin   finish. We ensure 100% quality at every stage of the   fabrication. Becken, by its imaginative designs, creates a sense of space and style</p>
              <!-- <div class="website-link-div">
                <a href="#">website</a>
                <div class="text-block-30">mail id</div>
              </div> -->
              <div class="brandcategories"><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/images/Asset-2_3.svg" loading="lazy" height="30" width="114" alt=""><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/images/9NaSBr_3.svg" loading="lazy" ></div>
              <!-- <a id="toggle" href="#" class="button-4 w-button">Read More</a> -->
            </div>
          </div>
        </div>
        <div data-w-tab="Tab 2" class="w-tab-pane">
        <div class="specialproductdiiv-copy"><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/images/14_1.jpg" loading="lazy" height="" sizes="(max-width: 767px) 100vw, (max-width: 991px) 95vw, 45vw" srcset="/abccontentbucket.s3.me-south-1.amazonaws.com/images/14_1.jpg 500w, /abccontentbucket.s3.me-south-1.amazonaws.com/images/14_1.jpg 1080w, /abccontentbucket.s3.me-south-1.amazonaws.com/images/14_1.jpg 1600w, /abccontentbucket.s3.me-south-1.amazonaws.com/images/14_1.jpg 2000w, /abccontentbucket.s3.me-south-1.amazonaws.com/images/14_1.jpg 2561w" alt="Bathx" class="special-product-img-copy">
            <div class="specialproductstory">
              <h4 class="product-heading-copy">BATHX</h4>
              <p id="text" class="paragraph-15">Bathx- Where quality is combined with rigorous craftsmanship to bring innovative and beautiful design for life.bathx is a synonym for aesthetic design and technical advancements in bathwares. Product line of bathx is enormous and give's consumer a one stop solution for their bathroom requirements. bathe has a wide range of products such as sanitary wares, bathroom cabinet mirrors, glass basin, art basin & so on. Each products in bathx are designed & crafted artistically with extreme delicacy & perfection to meet the need of modem world.<br>
              bathx is a OEM manufacturer of products with a well organized R&D department working with insight knowledge of quality of products and global market standards.
              </p>
              <!-- <a id="toggle" href="#" class="button-4 w-button">Read More</a> -->
              <div class="brandcategories"><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/images/FweAiP_3.svg" loading="lazy" height="30" alt=""><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/images/Asset-1_3.svg" loading="lazy" alt=""><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/images/9NaSBr_3.svg" loading="lazy" alt=""></div>
              <!-- <div class="brandcategories"><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/images/Asset-4_3.svg" loading="lazy" height="30" alt=""><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/images/FweAiP_3.svg" loading="lazy" height="30" alt=""><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/images/Asset-2_3.svg" loading="lazy" height="30" width="114" alt=""><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/images/Asset-1_3.svg" loading="lazy" alt=""></div>
              <div class="brandcategories"><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/images/FweAiP_3.svg" loading="lazy" height="30" alt=""><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/images/9NaSBr_3.svg" loading="lazy" alt=""><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/images/Asset-2_3.svg" loading="lazy" height="30" alt=""><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/images/Asset-1_3.svg" loading="lazy" alt=""></div> -->
              <!-- <div class="website-link-div">
                <a href="#">website</a>
                <div class="text-block-30">mail id</div>
              </div> -->
            </div>
          </div>
        </div>
        <div data-w-tab="Tab 3" class="w-tab-pane">
        <div class="specialproductdiiv-copy"><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/images/13_1.jpg" loading="lazy" height="" sizes="(max-width: 767px) 100vw, (max-width: 991px) 95vw, 45vw" srcset="/abccontentbucket.s3.me-south-1.amazonaws.com/images/13_1.jpg 1080w, /abccontentbucket.s3.me-south-1.amazonaws.com/images/13_1.jpg 1600w, /abccontentbucket.s3.me-south-1.amazonaws.com/images/13_1.jpg 2000w, /abccontentbucket.s3.me-south-1.amazonaws.com/images/13_1.jpg 2600w, /abccontentbucket.s3.me-south-1.amazonaws.com/images/13_1.jpg 3200w, /abccontentbucket.s3.me-south-1.amazonaws.com/images/13_1.jpg 5760w" alt="Deko" class="special-product-img-copy">
            <div class="specialproductstory">
              <h4 class="product-heading-copy">DEKO</h4>
              <p class="paragraph-15">DEKO is a leading speciality manufacturer in decorative products, for your home DEKO is offering high-class stainless steel new style decorative trims and the profiles.ln order to meet different customer's needs,we pays more attention to design,innovate,sales and produce different kinds of decoration trims with competitive prices,DEKO uses various green raw materials,such as natural sea shell,natura I stones,glasses,stainless steel,etc together to make special products.</p>
              <!-- <a id="toggle" href="#" class="button-4 w-button">Read More</a> -->
              <div class="brandcategories"><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/images/Asset-4_3.svg" loading="lazy" height="30" alt=""></div>
              <!-- <div class="website-link-div">
                <a href="#">website</a>
                <div class="text-block-30">mail id</div>
              </div> -->
            </div>
          </div>
        </div>
        <div data-w-tab="Tab 4" class="w-tab-pane">
        <div class="specialproductdiiv-copy"><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/images/16.jpg" loading="lazy" height="" sizes="(max-width: 767px) 100vw, (max-width: 991px) 95vw, 45vw" srcset="/abccontentbucket.s3.me-south-1.amazonaws.com/images/16-p-500.jpeg 500w, /abccontentbucket.s3.me-south-1.amazonaws.com/images/16-p-800.jpeg 800w, /abccontentbucket.s3.me-south-1.amazonaws.com/images/16-p-1080.jpeg 1080w, /abccontentbucket.s3.me-south-1.amazonaws.com/images/16-p-1600.jpeg 1600w, /abccontentbucket.s3.me-south-1.amazonaws.com/images/16-p-2000.jpeg 2000w, /abccontentbucket.s3.me-south-1.amazonaws.com/images/16-p-2600.jpeg 2600w, /abccontentbucket.s3.me-south-1.amazonaws.com/images/16-p-3200.jpeg 3200w, /abccontentbucket.s3.me-south-1.amazonaws.com/images/16.jpg 6718w" alt="Inox" class="special-product-img-copy">
            <div class="specialproductstory">
              <h4 class="product-heading-copy">INOX</h4>
              <p class="paragraph-15">Inox - a leading brand in faucets and bathwares industry, emerged with an aim to make healthier and hygienic life for people through offering a wide range of kitchen sinks and utensils. We have a wide range of products that include laundry accessories, taps, bathroom fittings, kitchen sinks etc.We deals with manufacturing of faucets, bathwares and kitchen sinks with a team of craftsmen that had been acquired in the potteries. Inox Products were awarded with many prestigious design and innovation awards. We Provide high quaky, environment - friendly, water - saving, energy - saving, serial and complete bath ware products with complete functions to global users and decorate comfortable and warm living space.</p>
              <!-- <a id="toggle" href="#" class="button-4 w-button">Read More</a> -->
              
              <div class="brandcategories"><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/images/FweAiP_3.svg" loading="lazy" height="30" alt=""><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/images/9NaSBr_3.svg" loading="lazy" alt=""><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/images/Asset-2_3.svg" loading="lazy" height="30" alt=""><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/images/Asset-1_3.svg" loading="lazy" alt=""></div>
              <!-- <div class="website-link-div">
                <a href="#">website</a>
                <div class="text-block-30">mail id</div>
              </div> -->
            </div>
          </div>
        </div>
        <div data-w-tab="Tab 5" class="w-tab-pane">
        <div class="specialproductdiiv-copy"><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/images/13_2.jpg" loading="lazy" height="" sizes="(max-width: 767px) 100vw, (max-width: 991px) 95vw, 45vw" srcset="/abccontentbucket.s3.me-south-1.amazonaws.com/images/13_2.jpg 500w, /abccontentbucket.s3.me-south-1.amazonaws.com/images/13_2.jpg 800w, /abccontentbucket.s3.me-south-1.amazonaws.com/images/13_2.jpg 1600w, /abccontentbucket.s3.me-south-1.amazonaws.com/images/13_2.jpg 1920w" alt="Viceroy" class="special-product-img-copy">
            <div class="specialproductstory">
              <h4 class="product-heading-copy">VICEROY</h4>
              <p class="paragraph-15">Viceroy Ceramics provide the best Tiles to transform your house into a magical world.For us, making each and every customer belonging to every corner of the world, proud of our products, is the topmost priority and passion.<br>Enjoy our glazed porcelain tiles collection with different textures and colors.These tiles are made from the people who know best about manufacturing tiles. We focus on different style Tiles, including outdoor tiles, bathroom tiles, polished porcelain tiles ect.</p>
              
              <!-- <div class="website-link-div">
                <a href="#">website</a>
                <div class="text-block-30">mail id</div>
              </div> -->
              <!-- <a id="toggle" href="#" class="button-4 w-button">Read More</a> -->
              <div class="brandcategories"><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/images/Asset-4_3.svg" loading="lazy" height="30" alt=""></div>
              <!-- <div class="website-link-div">
                <a href="#">website</a>
                <div class="text-block-30">mail id</div>
              </div> -->
            </div>
          </div>
        </div>
        <div data-w-tab="Tab 6" class="w-tab-pane">
        <div class="specialproductdiiv-copy"><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/images/13_3.jpg" loading="lazy" height="" sizes="(max-width: 767px) 100vw, (max-width: 991px) 95vw, 45vw" srcset="/abccontentbucket.s3.me-south-1.amazonaws.com/images/13_3.jpg 500w, /abccontentbucket.s3.me-south-1.amazonaws.com/images/13_3.jpg 1080w, /abccontentbucket.s3.me-south-1.amazonaws.com/images/13_3.jpg 1600w, /abccontentbucket.s3.me-south-1.amazonaws.com/images/13_3.jpg 2000w, /abccontentbucket.s3.me-south-1.amazonaws.com/images/13_3.jpg 2600w, /abccontentbucket.s3.me-south-1.amazonaws.com/images/13_3.jpg 3200w" alt="Granitogres" class="special-product-img-copy">
            <div class="specialproductstory">
              <h4 class="product-heading-copy">GRANITOGRES</h4>
              <p class="paragraph-15">GranitoGres Tiles. where the aesthetic luxury & technical innovation were merged, and unlike anything you've witnessed before. GranitoGres is a premium tile brand that has been crafted for the sophisticated buyer, who seeks elegance & quality in equal measure. The strength that ensures that it stays beautiful for a long, long time. The extraordinary aesthetic appeal of GranitoGres Tiles is the outcome of the skill and passion of master-designers. Beneath the beautiful surface, GranitoGres Tiles are surprisingly strong, possessing high flexural and breaking strength. Almost 100% of non-porous slabs do not allow the water to sleep through. .</p>
              <p id="text" class="paragraph-15">The unique Nano Polish along with special glazes ensures they remain stain-proof, scratch-proof, and abrasion-resistant. GranitoGres Tiles are truly natural and luxurious forever</p>
              <!-- <a id="toggle" href="#" class="button-4 w-button">Read More</a> -->
              <div class="brandcategories"><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/images/Asset-4_3.svg" loading="lazy" height="30" alt=""></div>
              <!-- <div class="brandcategories"><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/images/FweAiP_3.svg" loading="lazy" height="30" alt=""><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/images/9NaSBr_3.svg" loading="lazy" alt=""><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/images/Asset-2_3.svg" loading="lazy" height="30" alt=""><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/images/Asset-1_3.svg" loading="lazy" alt=""></div>
              <div class="brandcategories"><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/images/Asset-2_3.svg" loading="lazy" height="30" alt=""><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/images/9NaSBr_3.svg" loading="lazy" height="30" alt=""><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/images/Asset-1_3.svg" loading="lazy" alt=""></div> -->
              <!-- <div class="website-link-div">
                <a href="#">website</a>
                <div class="text-block-30">mail id</div>
              </div> -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="brandaccordiandiv" id="accordion">
    <div class="header">
      <h3 class="accordianTitle">BECKEN</h3>
    </div>
    <div class="content" >
    
    <div class="specialproductdiiv-copy"><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/images/12.jpeg" loading="lazy" height="" sizes="(max-width: 767px) 100vw, (max-width: 991px) 95vw, 45vw" srcset="/abccontentbucket.s3.me-south-1.amazonaws.com/images/12.jpeg 1080w, /abccontentbucket.s3.me-south-1.amazonaws.com/images/12.jpeg 1600w, /abccontentbucket.s3.me-south-1.amazonaws.com/images/12.jpeg 2000w" alt="" class="special-product-img-copy">
                                                                                          <div class="specialproductstory">
                                                                                          <h4 class="product-heading-copy">BECKEN</h4>
                                                                                          <p class="paragraph-15"> Becken  has the strength of the latest German  technology. The very brand name “Becken” means sink in German language.  We provide both machine pressed and handmade sinks. Handmade kitchen   sinks   are   spacious   and   hammered   out   by   master craftsmen from  premium   stainless   steel.   Sinks   come   with   both embossing   and   satin   finish. We ensure 100% quality at every stage of the   fabrication. Becken, by its imaginative designs, creates a sense of space and style</p>
                                                                                          <!-- <div class="website-link-div" class="paragraph-15">
                                                                                              <a href="#">website</a>
                                                                                              <div class="text-block-30">mail id</div>
                                                                                          </div> -->
                                                                                          <div class="brandcategories"><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/images/Asset-2_3.svg" loading="lazy" height="30" width="114" alt=""><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/images/9NaSBr_3.svg" loading="lazy" alt=""></div>
                                                                                          <a id="toggle" href="#" class="button-4 w-button">Read More</a>
                                                                                          </div>
                                                                                      </div>
                                                                                      
                                                                                      
    </div>

    <div class="header">
      <h3 class="accordianTitle">BATHX</h3>
    </div>
    <div class="content" >
    
    <div class="specialproductdiiv-copy"><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/images/14_1.jpg" loading="lazy" height="" sizes="(max-width: 767px) 100vw, (max-width: 991px) 95vw, 45vw" srcset="/abccontentbucket.s3.me-south-1.amazonaws.com/images/14_1.jpg 500w, /abccontentbucket.s3.me-south-1.amazonaws.com/images/14_1.jpg 1080w, /abccontentbucket.s3.me-south-1.amazonaws.com/images/14_1.jpg 1600w, /abccontentbucket.s3.me-south-1.amazonaws.com/images/14_1.jpg 2000w, /abccontentbucket.s3.me-south-1.amazonaws.com/images/14_1.jpg 2561w" alt="" class="special-product-img-copy">
                                                                                          <div class="specialproductstory">
                                                                                          <h4 class="product-heading-copy">BATHX</h4>
                                                                                          <p class="paragraph-15">Bathx- Where quality is combined with rigorous craftsmanship to bring innovative and beautiful design for life.bathx is a synonym for aesthetic design and technical advancements in bathwares. Product line of bathx is enormous and give's consumer a one stop solution for their bathroom requirements. bathe has a wide range of products such as sanitary wares, bathroom cabinet mirrors, glass basin, art basin & so on. Each products in bathx are designed & crafted artistically with extreme delicacy & perfection to meet the need of modem world.<br>
                                                                                              bathx is a OEM manufacturer of products with a well organized R&D department working with insight knowledge of quality of products and global market standards.</p>
                                                                                          <!-- <div class="website-link-div" id="text">
                                                                                              <a href="#">website</a>
                                                                                              <div class="text-block-30">mail id</div>
                                                                                          </div> -->
                                                                                          <div class="brandcategories"><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/images/FweAiP_3.svg" loading="lazy" height="30" alt=""><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/images/Asset-1_3.svg" loading="lazy" alt=""><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/images/9NaSBr_3.svg" loading="lazy" alt=""></div>
                                                                                          <a id="toggle" href="#" class="button-4 w-button">Read More</a>
                                                                                          </div>
                                                                                      </div>
                                                                                      
    </div>

    <div class="header">
      <h3 class="accordianTitle">DEKO</h3>
    </div>
    <div class="content" >
    
    <div class="specialproductdiiv-copy"><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/images/13_1.jpg" loading="lazy" height="" sizes="(max-width: 767px) 100vw, (max-width: 991px) 95vw, 45vw" srcset="/abccontentbucket.s3.me-south-1.amazonaws.com/images/13_1.jpg 1080w, /abccontentbucket.s3.me-south-1.amazonaws.com/images/13_1.jpg 1600w, /abccontentbucket.s3.me-south-1.amazonaws.com/images/13_1.jpg 2000w, /abccontentbucket.s3.me-south-1.amazonaws.com/images/13_1.jpg 2600w, /abccontentbucket.s3.me-south-1.amazonaws.com/images/13_1.jpg 3200w, /abccontentbucket.s3.me-south-1.amazonaws.com/images/13_1.jpg 5760w" alt="" class="special-product-img-copy">
                                                                                          <div class="specialproductstory">
                                                                                          <h4 class="product-heading-copy">DEKO</h4>
                                                                                          <p class="paragraph-15">DEKO is a leading speciality manufacturer in decorative products, for your home DEKO is offering high-class stainless steel new style decorative trims and the profiles.ln order to meet different customer's needs,we pays more attention to design,innovate,sales and produce different kinds of decoration trims with competitive prices,DEKO uses various green raw materials,such as natural sea shell,natura I stones,glasses,stainless steel,etc together to make special products.</p>
                                                                                          <!-- <div class="website-link-div">
                                                                                              <a href="#">website</a>
                                                                                              <div class="text-block-30">mail id</div>
                                                                                          </div> -->
                                                                                          <div class="brandcategories"><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/images/Asset-4_3.svg" loading="lazy" height="30" alt=""></div>
                                                                                          <a id="toggle" href="#" class="button-4 w-button">Read More</a>
                                                                                          </div>
                                                                                      </div>
                                                                                      
    </div>
<div class="header">
      <h3 class="accordianTitle">INOX</h3>
    </div>
    <div class="content" >
   
    <div class="specialproductdiiv-copy"><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/images/16.jpg" loading="lazy" height="" sizes="(max-width: 767px) 100vw, (max-width: 991px) 95vw, 45vw" srcset="/abccontentbucket.s3.me-south-1.amazonaws.com/images/16-p-500.jpeg 500w, /abccontentbucket.s3.me-south-1.amazonaws.com/images/16-p-800.jpeg 800w, /abccontentbucket.s3.me-south-1.amazonaws.com/images/16-p-1080.jpeg 1080w, /abccontentbucket.s3.me-south-1.amazonaws.com/images/16-p-1600.jpeg 1600w, /abccontentbucket.s3.me-south-1.amazonaws.com/images/16-p-2000.jpeg 2000w, /abccontentbucket.s3.me-south-1.amazonaws.com/images/16-p-2600.jpeg 2600w, /abccontentbucket.s3.me-south-1.amazonaws.com/images/16-p-3200.jpeg 3200w, /abccontentbucket.s3.me-south-1.amazonaws.com/images/16.jpg 6718w" alt="" class="special-product-img-copy">
                                                                                          <div class="specialproductstory">
                                                                                          <h4 class="product-heading-copy">INOX</h4>
                                                                                          <p class="paragraph-15">Inox - a leading brand in faucets and bathwares industry, emerged with an aim to make healthier and hygienic life for people through offering a wide range of kitchen sinks and utensils. We have a wide range of products that include laundry accessories, taps, bathroom fittings, kitchen sinks etc.We deals with manufacturing of faucets, bathwares and kitchen sinks with a team of craftsmen that had been acquired in the potteries. Inox Products were awarded with many prestigious design and innovation awards. We Provide high quaky, environment - friendly, water - saving, energy - saving, serial and complete bath ware products with complete functions to global users and decorate comfortable and warm living space.</p>
                                                                                          <!-- <div class="website-link-div">
                                                                                              <a href="#">website</a>
                                                                                              <div class="text-block-30">mail id</div>
                                                                                          </div> -->
                                                                                          <div class="brandcategories"><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/images/FweAiP_3.svg" loading="lazy" height="30" alt=""><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/images/Asset-2_3.svg" loading="lazy" height="30" width="114" alt=""><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/images/Asset-1_3.svg" loading="lazy" alt=""><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/images/9NaSBr_3.svg" loading="lazy" alt=""></div>
                                                                                          <a id="toggle" href="#" class="button-4 w-button">Read More</a>
                                                                                          </div>
                                                                                      </div>
                                                                                     
    </div>
    <div class="header">
      <h3 class="accordianTitle">VICEROY</h3>
    </div>
    <div class="content" >
   
    <div class="specialproductdiiv-copy"><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/images/13_2.jpg" loading="lazy" height="" sizes="(max-width: 767px) 100vw, (max-width: 991px) 95vw, 45vw" srcset="/abccontentbucket.s3.me-south-1.amazonaws.com/images/13_2.jpg 500w, /abccontentbucket.s3.me-south-1.amazonaws.com/images/13_2.jpg 800w, /abccontentbucket.s3.me-south-1.amazonaws.com/images/13_2.jpg 1600w, /abccontentbucket.s3.me-south-1.amazonaws.com/images/13_2.jpg 1920w" alt="" class="special-product-img-copy">
                                                                                          <div class="specialproductstory">
                                                                                          <h4 class="product-heading-copy">VICEROY</h4>
                                                                                          <p class="paragraph-15">Viceroy Ceramics provide the best Tiles to transform your house into a magical world.For us, making each and every customer belonging to every corner of the world, proud of our products, is the topmost priority and passion.<br>Enjoy our glazed porcelain tiles collection with different textures and colors.These tiles are made from the people who know best about manufacturing tiles. We focus on different style Tiles, including outdoor tiles, bathroom tiles, polished porcelain tiles ect. </p>
                                                                                          <!-- <div class="website-link-div">
                                                                                              <a href="#">website</a>
                                                                                              <div class="text-block-30">mail id</div>
                                                                                          </div> -->
                                                                                          <div class="brandcategories"><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/images/Asset-4_3.svg" loading="lazy" height="30" alt=""></div>
                                                                                          <a id="toggle" href="#" class="button-4 w-button">Read More</a>
                                                                                          </div>
                                                                                      </div>
                                                                                     
    </div>
    <div class="header">
      <h3 class="accordianTitle">GRANITOGRES</h3>
    </div>
    <div class="content" >
    
    <div class="specialproductdiiv-copy"><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/images/13_3.jpg" loading="lazy" height="" sizes="(max-width: 767px) 100vw, (max-width: 991px) 95vw, 45vw" srcset="/abccontentbucket.s3.me-south-1.amazonaws.com/images/13_3.jpg 500w, /abccontentbucket.s3.me-south-1.amazonaws.com/images/13_3.jpg 1080w, /abccontentbucket.s3.me-south-1.amazonaws.com/images/13_3.jpg 1600w, /abccontentbucket.s3.me-south-1.amazonaws.com/images/13_3.jpg 2000w, /abccontentbucket.s3.me-south-1.amazonaws.com/images/13_3.jpg 2600w, /abccontentbucket.s3.me-south-1.amazonaws.com/images/13_3.jpg 3200w" alt="" class="special-product-img-copy">
                                                                                      <div class="specialproductstory">
                                                                                      <h4 class="product-heading-copy">GRANITOGRES</h4>
                                                                                      <p class="paragraph-15">GranitoGres Tiles. where the aesthetic luxury & technical innovation were merged, and unlike anything you've witnessed before. GranitoGres is a premium tile brand that has been crafted for the sophisticated buyer, who seeks elegance & quality in equal measure. The strength that ensures that it stays beautiful for a long, long time. The extraordinary aesthetic appeal of GranitoGres Tiles is the outcome of the skill and passion of master-designers. Beneath the beautiful surface, GranitoGres Tiles are surprisingly strong, possessing high flexural and breaking strength. Almost 100% of non-porous slabs do not allow the water to sleep through. .</p>
                                                                                        <p id="text">The unique Nano Polish along with special glazes ensures they remain stain-proof, scratch-proof, and abrasion-resistant. GranitoGres Tiles are truly natural and luxurious forever</p>
                                                                                      <!-- <div class="website-link-div">
                                                                                          <a href="#">website</a>
                                                                                          <div class="text-block-30">mail id</div>
                                                                                      </div> -->
                                                                                      <div class="brandcategories"><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/images/Asset-4_3.svg" loading="lazy" height="30" alt=""></div>
                                                                                      <a id="toggle" href="#" class="button-4 w-button">Read More</a>
                                                                                      </div>
                                                                                  </div>
                                                                                  
    </div>
    
    </div>

    
    </div>
    @include('Common.Footer')
    <script src="/js/webflow.js" type="text/javascript"></script>
     
    <script>
    // $(function() {
    //   console.log("inside the function");
    //   $(".tab-link").on('click',function(event){
    //     $(".brandtab-redline").css('opacity','0.5');
    //     $(this).parent(".tab-link").children(".brandtab-redline").css('opacity','1');
             
    //     });
      
    // });
    function selectedTabStyle(id){
      $(".brandtab-redline").css('opacity','0');
      $("#"+id).css('opacity','1');
    }
    </script>
    </body>

  </html>


    
