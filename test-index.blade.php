<!DOCTYPE html>
<html lang="en">
  <head>
    <title>&lt;model-viewer&gt; example</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="demo-styles.css">
    
    <!-- The following libraries and polyfills are recommended to maximize browser support -->
    <!-- NOTE: you must adjust the paths as appropriate for your project -->
    
    <!-- 🚨 REQUIRED: Web Components polyfill to support Edge and Firefox < 63
    <script src="https://unpkg.com/@webcomponents/webcomponentsjs@2.1.3/webcomponents-loader.js"></script>

     💁 OPTIONAL: Intersection Observer polyfill for better performance in Safari and IE11
    <script src="https://unpkg.com/intersection-observer@0.5.1/intersection-observer.js"></script>

     💁 OPTIONAL: Resize Observer polyfill improves resize behavior in non-Chrome browsers 
    <script src="https://unpkg.com/resize-observer-polyfill@1.5.0/dist/ResizeObserver.js"></script>

     💁 OPTIONAL: Fullscreen polyfill is needed to fully support AR features 
    <script src="https://unpkg.com/fullscreen-polyfill@1.0.2/dist/fullscreen.polyfill.js"></script>

     💁 OPTIONAL: Include prismatic.js for Magic Leap support 
    <script src="https://unpkg.com/@magicleap/prismatic/prismatic.min.js"></script>
    
     💁 OPTIONAL: The :focus-visible polyfill removes the focus ring for some input types 
    <script src="https://unpkg.com/focus-visible@5.0.2/dist/focus-visible.js" defer></script> -->


<!-- Import the component -->
<script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
<script nomodule src="https://unpkg.com/@google/model-viewer/dist/model-viewer-legacy.js"></script>
<!-- Use it like any other HTML element -->
<!-- <model-viewer src="shared-assets/models/Astronaut.glb" alt="A 3D model of an astronaut" auto-rotate camera-controls></model-viewer> -->

  </head> 
<body>
  <div id="card">
    <!-- All you need to put beautiful, interactive 3D content on your site: -->
    <model-viewer src="/abccontentbucket.s3.me-south-1.amazonaws.com/AR/basin_black_scale_25.gltf"
                  ios-src="/abccontentbucket.s3.me-south-1.amazonaws.com/AR/apricot.usdz"
                  alt="A 3D model of a WC"
                  shadow-intensity="1"
                  camera-controls
                  interaction-prompt="auto"
                  auto-rotate ar ar-modes="scene-viewer quick-look" magic-leap>
    </model-viewer>
    <section class="attribution"> 
      <span>
        <h1>3D Show Piece</h1>
        <span>By <a href="https://poly.google.com/view/dLHpzNdygsg" target="_blank">AllInReality</a></span>
      </span>
    </section>
    
  </div>
  
  
  <footer>
    <span>This page is a basic demo of the <a href="https://github.com/GoogleWebComponents/model-viewer" target="_blank">&lt;model-viewer&gt;</a> web component by AllInReality.</span>
    <span>It makes displaying 3D and AR content on the web easy ✌️</span>
  
  </footer>
  
  
  <!-- 💁 Include both scripts below to support all browsers! -->

  <!-- Loads <model-viewer> for modern browsers: -->
  <script type="module"
      src="https://unpkg.com/@google/model-viewer@v0.9.0/dist/model-viewer.js">
  </script>

  <!-- Loads <model-viewer> for old browsers like IE11: -->
  <script nomodule
      src="https://unpkg.com/@google/model-viewer@v0.9.0/dist/model-viewer-legacy.js">
  </script>
</body>
</html>