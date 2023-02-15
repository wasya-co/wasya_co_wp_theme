

<div class='our-services-3' >

<!-- Import maps polyfill -->
<!-- Remove this when import maps will be widely supported -->
<script async src="https://unpkg.com/es-module-shims@1.3.6/dist/es-module-shims.js"></script>

<script type="importmap">
  {
    "imports": {
      "three": "/wp-content/themes/wasya_co_wp_theme/vendor/threejs/three.module.js",
      "three/addons/": "/wp-content/themes/wasya_co_wp_theme/vendor/threejs/jsm/"
    }
  }
</script>

<script type="module">

  import * as THREE from 'three';

  import { OrbitControls } from 'three/addons/controls/OrbitControls.js';
  import { GLTFLoader } from 'three/addons/loaders/GLTFLoader.js';

  const w = 300;
  const h = 300;

  let camera, controls, scene, renderer;

  init();
  // render();
  animate();

  function init() {

    const container = document.createElement( 'div' );
    document.getElementById('rotatingC').appendChild( container );

    // fov — Camera frustum vertical field of view.
    // aspect — Camera frustum aspect ratio.
    // near — Camera frustum near plane.
    // far — Camera frustum far plane.
    camera = new THREE.PerspectiveCamera( 45, w/h, 1, 1600 );
    camera.position.set( - 1.8, 0.6, 2.7 );

    scene = new THREE.Scene({});

    const loader = new GLTFLoader().setPath( '/wp-content/themes/wasya_co_wp_theme/data/obj/' );
        loader.load( 'cyberpunk-laptop.glb', function ( gltf ) {
          scene.add( gltf.scene );
          render();
        } );

    renderer = new THREE.WebGLRenderer({
      alpha: true,
      antialias: true,
    });
    // renderer.setClearColor( 0x000000, 0 ); // default
    renderer.setPixelRatio( window.devicePixelRatio );
    renderer.setSize( w, h );
    renderer.toneMapping = THREE.ACESFilmicToneMapping;
    renderer.toneMappingExposure = 1;
    renderer.outputEncoding = THREE.sRGBEncoding;
    container.appendChild( renderer.domElement );

    controls = new OrbitControls( camera, renderer.domElement );
    // controls.addEventListener( 'change', render ); // use if there is no animation loop
    controls.minDistance = 400;
    controls.maxDistance = 800;
    controls.target.set( 0, 0, - 0.2 );
    controls.autoRotate = true;
    controls.update();

    window.addEventListener( 'resize', onWindowResize );
  }

  function onWindowResize() {
    camera.aspect = w / h;
    camera.updateProjectionMatrix();
    renderer.setSize( w, h );
    render();
  }

  function render() {
    renderer.render( scene, camera );
  }
  function animate() {
    requestAnimationFrame( animate );
    controls.update();
    renderer.render( scene, camera );
  }

</script>


<!-- <div class='debug'>Our Services 3</div> -->
<div class='spacer-300'></div>

<section class='our-services-lg' >
  <div class='max-width'>
    <div class='header' >
      <h1 class='title' >
        Our Services
      </h1>
      <div class='fancy-border'></div>
    </div>
  </div>
</section>

<section class='our-services-ip-md' >
  <div class='max-width'>
    <div class='header' >
      <h2 class='title' >
        Content & Intellectual Property Creation
      </h2>
      <div class='fancy-border'></div>
    </div>

    <div class='row r0' >
      <div class='col-md-4'>

        <div class='faint faint-1d our-services-1d'>

          <h3 class='center title'>Copy Writing</h3>

          <div class='r1'>
            <div class='pW' style='position: relative; flex-grow: 1' >
              &nbsp;
              <p style='position: absolute; right: 10px; top: -1em' >We contribute the thousand words for each picture.</p>
            </div>
            <div class='btnW'>
              <a href="/our-process-2"><button class="button-91" role="button">Synergize</button></a>
            </div>
          </div>

          <div class='r2'>
            <h4 class='subtitle'><a href='#'>View All Writing Services</a></h4>
            <ol>
              <li><a href='#'>Business Plans</a></li>
              <li><a href='#'>Lifestyle Articles</a></li>
              <li><a href='#'>Journalism</a></li>
              <li><a href='#'>Reports</a></li>
              <li><a href='#'>Tutorials</a></li>
              <li><a href='#'>Technical Documentation</a></li>
            </ol>
          </div>


        </div><!--faint-1d-->

      </div>
      <div class='col-md-4'>

        <div class='faint faint-2d our-services-2d'>

          <h3 class='center title'>Illustration</h3>

          <div class='r1'>
            <div class='btnW'>
              <a href="/our-process-2"><button class="button-91" role="button">View Feb'23 Gallery</button></a>
            </div>
          </div>

          <div class='thumbs r2'>
            <div class='thumb1'></div>
            <div class='thumb2'></div>
            <div class='thumb3'></div>
            <div class='thumb4'></div>
            <div class='thumb5'></div>
            <div class='thumb6'></div>
          </div>

        </div><!--faint-2d-->

      </div>
      <div class='col-md-4'>

        <div class='faint faint-3d our-services-2d'>

          <h3 class='center title'>3D</h3>

          <div class='r1'>
            <div class='btnW'>
              <a href="/our-process-2"><button class="button-91" role="button">Explore</button></a>
            </div>
          </div>

          <div id='rotatingC' class='r2'>
          </div>

        </div><!--faint-3d-->

      </div>
    </div>
  </div>
</section>

<div class='spacer-100' ></div>

</div><!--our-services-3-->
