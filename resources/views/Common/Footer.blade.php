<!-- <div class="whatsappbox"><a href="https://api.whatsapp.com/send?phone=+971504240262&amp;abid=+971564240262" target="_blank" class="link-block-category w-inline-block"><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/images/001-whatsapp.svg" width="35" height="35" alt="" class="whatsapp-icon"><h5 class="chat-with-us">@lang('Chat')<br></h5></a></div> -->
 <div class="footersection w-clearfix">
    <div class="scrolltotoparrow-mobile"><a href="#header" class="link-block w-inline-block"><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/images/up-arrow.svg" width="38" height="30" data-w-id="ddd28bd6-ec85-f57b-3916-e9302a7f39a9" alt="" class="image-15"></a></div>
    <div class="footermenucontainer w-container">
      <div data-w-id="084592a8-06a0-e5a4-2527-7513cd9ec849" class="scrolltotoparrow"><a href="#header" class="w-inline-block"><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/images/up-arrow.svg" width="27" height="30" alt="" class="image-15"></a></div>
      <div class="w-layout-grid footermenugrid">
        <div id="w-node-91a09e5fc710-9e5fc70b" class="footer-heading-div">
          <ul role="list" class="list w-list-unstyled">
            <li class="footerlist-item"><a href="/abccontentbucket.s3.me-south-1.amazonaws.com/corporate/ABC Group UAE_ Corporate Profile 2020.pdf" target="_blank" class="footerlink">@lang('Company Profile')</a></li>
            <li class="footerlist-item"><a href="/abccontentbucket.s3.me-south-1.amazonaws.com/corporate/History.pdf" target="_blank"  class="footerlink">@lang('History')</a></li>
            <li class="footerlist-item"><a href="{{route('Team',app()->getlocale())}}" class="footerlink">@lang('Team')</a></li>
            <li class="footerlist-item"><a href="{{route('OurPresence',app()->getlocale())}}" class="footerlink">@lang('Global Presence')</a></li>
          </ul>
          <div class="whitedividerdiv"></div>
        </div>
        <div class="footer-heading-div">
          <ul role="list" class="list w-list-unstyled">
            <li class="footerlist-item"><a href="{{route('Dealers',app()->getlocale())}}" class="footerlink">@lang('Dealers')</a></li> 
            <li class="footerlist-item"><a href="{{route('Brands',app()->getlocale())}}" class="footerlink">@lang('Brands')</a></li>
            <li class="footerlist-item"><a href="{{route('Exhibits',app()->getlocale())}}" class="footerlink">@lang('Exhibits')</a></li>
            <li class="footerlist-item"><a href="{{route('catalogue',app()->getlocale())}}" class="footerlink">@lang('Downloads')</a></li>
          </ul>
          <div class="whitedividerdiv"></div>
        </div>
        <div class="footer-heading-div">
          <ul role="list" class="list w-list-unstyled">
            <li class="footerlist-item"><a href="{{route('location',app()->getlocale())}}" class="footerlink">@lang('Store Locator')</a></li>
            <li class="footerlist-item"><a href="{{route('careers',app()->getlocale())}}" class="footerlink">@lang('Career')</a></li>
            <li class="footerlist-item"><a href="{{route('privacy',app()->getlocale())}}" class="footerlink">@lang('Privacy Policy')</a></li>
            <li class="footerlist-item"><a href="{{route('cookies',app()->getlocale())}}" class="footerlink">@lang('Cookies Policy')</a></li>
          </ul>
          <div class="whitedividerdiv"></div>
        </div>
        <div class="footer-heading-div">
          <ul role="list" class="footerlastsectionlist w-list-unstyled">
            <li class="footerlist-item"><a href="#" class="footerlink">@lang('Terms and condition')</a></li>
            <li class="footerlist-item"><a href="{{route('Explore',app()->getlocale())}}" class="footerlink">@lang('Products')</a></li>
          </ul>
          <div class="whitedividerdiv"></div>
        </div>
        <div id="w-node-91a09e5fc742-9e5fc70b" class="footer-newsletter-div">
          <div class="text-block-11">@lang('Get Our News Letter')</div>
          <div class="form-block-3 w-form">
            <form id="subscribe" name="email-form-3" data-name="Email Form 3" class="form-3" action="{{ route('Subscribe.newsLetter',app()->getlocale()) }}" method="post">
              @csrf
              <div class="div-block-101"><input type="text" class="text-field-2 w-input" maxlength="256" name="Mailid" id="Mailid" data-name="Mailid 2" placeholder="Enter your mail id" id="Mailid-2"><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/images/Asset-1-1_1.svg" id="newsletterimage" loading="lazy" width="19" height="19" alt="" class="image-39" onClick=" return newsLetterSubsscription(event)"></div>
              <div id="SubscribeMsg" style="color:white;"></div>
            </form>
            <div class="w-form-done">
              <div>Thank you! Your submission has been received!</div>
            </div>
            <div class="w-form-fail">
              <div>Oops! Something went wrong while submitting the form.</div>
            </div>
          </div>
          <div class="whitedividerdiv"></div>
        </div>
        <div id="w-node-91a09e5fc74f-9e5fc70b" class="footer-social-media-links">
          <div class="social-icons-white"><a href="https://www.facebook.com/abcgroupuae" target="_blank" class="link-block-9 w-inline-block"><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/images/002-facebook-white.svg" loading="lazy" width="20" id="w-node-634764a340f4-9e5fc70b" alt="" class="facebook-white"></a><a href="https://www.linkedin.com/company/abc-mercantile-fzco-uae/?viewAsMember=true" target="_blank" class="w-inline-block"><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/images/005-linkedin-white.svg" loading="lazy" width="20" id="w-node-634764a340f5-9e5fc70b" alt="" class="linkdin-white"></a><a href="https://twitter.com/abcgroupuae" target="_blank" class="w-inline-block"><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/images/003-twitter-white.svg" loading="lazy" width="20" id="w-node-634764a340f6-9e5fc70b" alt="" class="twitter-white"></a><a href="https://www.instagram.com/abcgroupuae" target="_blank" class="w-inline-block"><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/images/001-instagramwhite.svg" loading="lazy" width="20" id="w-node-634764a340f7-9e5fc70b" alt="" class="insta-white"></a></div>
        </div>
        <!-- <div id="w-node-91a09e5fc74f-9e5fc70b" class="footer-social-media-links">
          <div class="w-layout-grid footersocialmediagrid"><a href="#" class="link-block-3 w-inline-block"><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/images/method-draw-image.svg" height="" width="12" alt="" class="image-41"></a><a href="#" class="link-block-4 w-inline-block"><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/images/Asset-1-1.png" height="" width="17" alt="" class="image-42"></a><a href="#" class="link-block-5 w-inline-block"><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/images/Asset-2-1.png" height="" width="17" alt="" class="image-43"></a><a href="#" class="link-block-6 w-inline-block"><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/images/method-draw-image-1.svg" height="" width="17" alt="" class="image-44"></a></div>
        </div> -->
      </div>
      <div class="div-block-112">
        <div class="text-block-36">@lang('Copyright © 2020 ABC Group. All rights reserved.')</div>
      </div>
    </div>
  </div>





  <script>
    $(function() {
      $('#Mailid').keypress(function(event){
        
    //var keycode = (event.keyCode ? event.keyCode : event.which);
    if(event.which == 13){
      event.preventDefault();
      if($("#Mailid").val() == ""){
          $("#SubscribeMsg").empty();
          $("#SubscribeMsg").append("Please Enter the mail id to Proceed");
        }else if(IsEmail($("#Mailid").val())){
          newsLetterSubsscription(event);
        }else{
          $("#SubscribeMsg").empty();
          $("#SubscribeMsg").append("Please Enter a valid mail id");
        }
      
       
    } else{
      $("#newsletterimage").attr("src", "/abccontentbucket.s3.me-south-1.amazonaws.com/images/Asset-1-1_1.svg");
    }
    // if (typeof event.which == "undefined") {
    //     // This is IE, which only fires keypress events for printable keys
    //     return true;
    // }
});
    });
    function IsEmail(email) {
        var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if(!regex.test(email)) {
           return false;
        }else{
           return true;
        }
      }
    function newsLetterSubsscription(event){

        if($("#Mailid").val() == ""){
          $("#SubscribeMsg").empty();
          $("#SubscribeMsg").append("Please Enter the mail id to Proceed");
          $("#newsletterimage").attr("src", "/abccontentbucket.s3.me-south-1.amazonaws.com/images/Asset-1-1_1.svg");
        }
        var email = document.getElementById("Mailid").value;
        // var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        //   if(!regex.test(email)) {
        //      return false;
        //   }else{
        //      return true;
        //   }
        event.preventDefault();
          //event.stopPropagation();
         // alert("HI");
           var mailid = $("#Mailid").val();
           var url = "{{ route('Subscribe.newsLetter',app()->getlocale()) }}";
          //url = url.replace("http", "https");
           var _token = '<?php echo csrf_token() ?>';
           console.log(url);
           $.ajax(

                  {
                  type: "post",
                  url: url,
                  //alert(url);
                  
                  data: {  
                          mailid: mailid,
                          _token:_token
                         },
                  success:function(result,e) {
                   // alert(result.message+"and"+ result.count+"and"+ result.success );
                       console.log(result);
                    
                    
                    
                      $("#SubscribeMsg").empty();
                      $("#SubscribeMsg").append(result);
                      $("#newsletterimage").attr("src", "/abccontentbucket.s3.me-south-1.amazonaws.com/images/sucesstick.svg");
                    },
                  error:function(result) {
                   // alert('error');
                    console.log(result);

                  }
              });
        // $("#subscribe").submit();
           
    }

  </script>
