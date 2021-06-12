<!DOCTYPE html>
<html lang="en">
  <head>
    <title>&lt;model-viewer&gt; example</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/css/webflow_css/abcgroupuaecom.webflow.css?version=16" rel="stylesheet" type="text/css">
    
    
    <!-- The following libraries and polyfills are recommended to maximize browser support -->
    <!-- NOTE: you must adjust the paths as appropriate for your project -->
    
    <!-- 🚨 REQUIRED: Web Components polyfill to support Edge and Firefox < 63 -->
    <!-- <script src="https://unpkg.com/@webcomponents/webcomponentsjs@2.1.3/webcomponents-loader.js"></script> -->

     <!-- 💁 OPTIONAL: Intersection Observer polyfill for better performance in Safari and IE11 -->
    <!-- <script src="https://unpkg.com/intersection-observer@0.5.1/intersection-observer.js"></script> -->

     <!-- 💁 OPTIONAL: Resize Observer polyfill improves resize behavior in non-Chrome browsers  -->
    <!-- <script src="https://unpkg.com/resize-observer-polyfill@1.5.0/dist/ResizeObserver.js"></script> -->

     <!-- 💁 OPTIONAL: Fullscreen polyfill is needed to fully support AR features  -->
    <!-- <script src="https://unpkg.com/fullscreen-polyfill@1.0.2/dist/fullscreen.polyfill.js"></script> -->

     <!-- 💁 OPTIONAL: Include prismatic.js for Magic Leap support  -->
    <!-- <script src="https://unpkg.com/@magicleap/prismatic/prismatic.min.js"></script> -->
    
     <!-- 💁 OPTIONAL: The :focus-visible polyfill removes the focus ring for some input types  -->
    <!-- <script src="https://unpkg.com/focus-visible@5.0.2/dist/focus-visible.js" defer></script>  -->


<!-- Import the component -->
<script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
<script nomodule src="https://unpkg.com/@google/model-viewer/dist/model-viewer-legacy.js"></script>
<!-- Use it like any other HTML element 
<a href="intent://arvr.google.com/scene-viewer/1.0?file=https://raw.githubusercontent.com/KhronosGroup/glTF-Sample-Models/master/2.0/Avocado/glTF/Avocado.gltf&mode=ar_only#Intent;scheme=https;package=com.google.ar.core;action=android.intent.action.VIEW;S.browser_fallback_url=https://developers.google.com/ar;end;">Avocado</a>;
-->
<!-- <model-viewer src="shared-assets/models/Astronaut.glb" alt="A 3D model of an astronaut" auto-rotate camera-controls></model-viewer> ar-modes="scene-viewer webxr quick-look" -->

  </head> 
<body>
  <div id="card">
  <!-- <a href="intent://arvr.google.com/scene-viewer/1.0?file={{url('/abccontentbucket.s3.me-south-1.amazonaws.com/AR/NHBd.usdc')}}&mode=ar_only#Intent;scheme=https;package=com.google.ar.core;action=android.intent.action.VIEW;S.browser_fallback_url=https://developers.google.com/ar;end;">Avocado</a>; -->
    <!-- All you need to put beautiful, interactive 3D content on your site: -->
    <model-viewer src="/abccontentbucket.s3.me-south-1.amazonaws.com/AR/matte _2_Animated.glb"
                  ios-src="/abccontentbucket.s3.me-south-1.amazonaws.com/AR/matte _2_Animated.usdz"
                  alt="A 3D model of a Wall hung basin"
                  
                  camera-controls
                  disable-zoom
                  loading="eager"
                  interaction-prompt="auto"
                  ar-scale="auto"
                  autoplay
                  auto-rotate ar ar-only magic-leap>
    </model-viewer>
    </div>
    <!-- shadow-intensity="1" skybox-image="/abccontentbucket.s3.me-south-1.amazonaws.com/AR/lilienstein_1k.hdr" -->
    <!-- <model-viewer id="static-model" src="/abccontentbucket.s3.me-south-1.amazonaws.com/AR/TTTTEST.gltf" shadow-intensity="1" camera-controls alt="A 3D model of an astronaut">
  <div class="controls">
    <button onclick="exportGLB()">Export GLB</button>
  </div>
</model-viewer>
<script>
  async function exportGLB(){
    let modelViewer = document.getElementById("static-model");
    const glTF = await modelViewer.exportScene();
    var file = new File([glTF], "export.glb");
    var link = document.createElement("a");
    link.download =file.name;
    link.href = URL.createObjectURL(file);
    link.click();
  }
</script> -->
<div id="ac-wrapper" style='display:none'>
    <div id="popup">
    
    <div class="popupwrapper">
      <div class="div-block-137">
        <div class="div-block-139">
          <h3 class="heading-42">AR <br>EXPERIENCE</h3>
          <div class="text-block-37">This AR Experience itself is fairly simple.</div>
          <a href="{{route('AR',app()->getlocale())}}" class="button-5 w-button">YES! I AM EXCITED</a>
          <a href="javascript:PopUp('hide')" class="link-4">May be later</a>
        </div>
        <div class="div-block-138"><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/images/pexels-tima-miroshnichenko-6612356.png" loading="lazy" width="300" height="300" alt="" class="image-70"></div>
      </div>
    </div>
    <div class="popupwrapper-tab_mob">
      <div class="div-block-137-copy">
        <div class="div-block-138-copy"><img src="/abccontentbucket.s3.me-south-1.amazonaws.com/images/pexels-tima-miroshnichenko-6612356.png" loading="lazy" width="300" height="300" alt="" class="image-70"></div>
        <div class="div-block-139-copy">
          <h3 class="heading-42">AR <br>EXPERIENCE</h3>
          <div class="text-block-37">This AR Experience itself is fairly simple.</div>
          <a href="{{route('AR',app()->getlocale())}}" class="button-5 w-button">YES! I AM EXCITED</a>
          <a href="javascript:PopUp('hide')" class="link-4" >May be later</a>
        </div>
      </div>
    </div>
  
    </div>
</div>
  <script>
  function PopUp(hideOrshow) {
    if (hideOrshow == 'hide') document.getElementById('ac-wrapper').style.display = "none";
    else document.getElementById('ac-wrapper').removeAttribute('style');
}
window.onload = function () {
    setTimeout(function () {
        PopUp('show');
    },5000);
}
  </script>
  
  
  
 
</body>
</html>