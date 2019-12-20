			var SCREEN_WIDTH = window.innerWidth;
			var SCREEN_HEIGHT = window.innerHeight;

			var containerSnow;

			var particle;

			var cameraSnow;
			var sceneSnow;
			var rendererSnow;

			var mouseX = 0;
			var mouseY = 0;

			var windowHalfX = window.innerWidth / 2;
			var windowHalfY = window.innerHeight / 2;
			
			var particles = []; 
			var particleImage = new Image();//THREE.ImageUtils.loadTexture( "img/ParticleSmoke.png" );
			particleImage.src = 'c/sys/xmas/img/snow.gif'; 

		
		
			function init() {

				//containerSnow = document.createElement('div');
				//document.body.appendChild(containerSnow);

				containerSnow = document.getElementById("canvasSnow");

				cameraSnow = new THREE.PerspectiveCamera( 75, SCREEN_WIDTH / SCREEN_HEIGHT, 1, 10000 );
				cameraSnow.position.z = 1000;

				sceneSnow = new THREE.Scene();
				sceneSnow.add(cameraSnow);
					
				rendererSnow = new THREE.CanvasRenderer();
				rendererSnow.setSize(SCREEN_WIDTH, SCREEN_HEIGHT);
				var material = new THREE.ParticleBasicMaterial( { map: new THREE.Texture(particleImage) } );
					
				for (var i = 0; i < 500; i++) {

					particle = new Particle3D( material);
					particle.position.x = Math.random() * 2000 - 1000;
					particle.position.y = Math.random() * 2000 - 1000;
					particle.position.z = Math.random() * 2000 - 1000;
					particle.scale.x = particle.scale.y =  1;
					sceneSnow.add( particle );
					
					particles.push(particle); 
				}

				containerSnow.appendChild( rendererSnow.domElement );

	
				document.addEventListener( 'mousemove', onDocumentMouseMove, false );
				document.addEventListener( 'touchstart', onDocumentTouchStart, false );
				document.addEventListener( 'touchmove', onDocumentTouchMove, false );

				window.addEventListener( 'resize', onWindowResize, false );
				
				setInterval( loop, 1000 / 60 );
				
			}
			
			function onDocumentMouseMove( event ) {

				mouseX = event.clientX - windowHalfX;
				mouseY = event.clientY - windowHalfY;
			}

			function onDocumentTouchStart( event ) {

				if ( event.touches.length == 1 ) {

					event.preventDefault();

					mouseX = event.touches[ 0 ].pageX - windowHalfX;
					mouseY = event.touches[ 0 ].pageY - windowHalfY;
				}
			}

			function onDocumentTouchMove( event ) {

				if ( event.touches.length == 1 ) {

					event.preventDefault();

					mouseX = event.touches[ 0 ].pageX - windowHalfX;
					mouseY = event.touches[ 0 ].pageY - windowHalfY;
				}
			}

			function onWindowResize() {

				windowHalfX = window.innerWidth / 2;
				windowHalfY = window.innerHeight / 2;

				cameraSnow.aspect = window.innerWidth / window.innerHeight;
				cameraSnow.updateProjectionMatrix();

				rendererSnow.setSize( window.innerWidth, window.innerHeight );

			}

			//

			function loop() {

			for(var i = 0; i<particles.length; i++)
				{

					var particle = particles[i]; 
					particle.updatePhysics(); 
	
					with(particle.position)
					{
						if(y<-1000) y+=2000; 
						if(x>1000) x-=2000; 
						else if(x<-1000) x+=2000; 
						if(z>1000) z-=2000; 
						else if(z<-1000) z+=2000; 
					}				
				}
			
				cameraSnow.position.x += ( mouseX - cameraSnow.position.x ) * 0.05;
				cameraSnow.position.y += ( - mouseY - cameraSnow.position.y ) * 0.05;
				cameraSnow.lookAt(sceneSnow.position); 

				rendererSnow.render( sceneSnow, cameraSnow );

				
			}

			 function random(arr) {
   				return arr[Math.floor(Math.random() * arr.length)];
  			}

			init();

			christmassList = [
				'5.jpg'
				,'11.gif'
				,'7.jpg'
				,'9.jpg'
				,'12.jpg'
				,'17.jpg'
				,'18.jpg'
				,'20.jpg'
				,'23.jpg'
				,'24.jpg'
				,'25.jpg'
				,'26.png'
				,'27.jpg'
				,'28.jpg'
				,'29.jpg'
				,'30.jpg'
				,'33.jpg'
				,'snoop.jpg'
				,'Merry_5ab723_1408311.jpg'
				,'7YL1e82.jpg'
				,'MDnmx3M.png'
				,'14235.jpg'
				,'524533.jpg'
				,'3245345.jpg'
				,'wb3uH.jpg'
				,'65431234.jpg'
				,'1zZIM.jpg'
				,'kjdf.jpg'
				,'destroy-Christmas.jpg'
				,'jzefhgj.jpg'
				,'kejzfhjzh.jpg'
				,'zekhzeud.jpg'
				,'ezhjfdhzedb.jpg'
				,'christmas-jammies2.jpg'
				,'zegyuzdgyud.jpg'
			];

			xmasImage = random(christmassList);
			
			var BgDocument = document.getElementById('w93_background');
			BgDocument.style.background = "url('c/sys/xmas/bg/"+xmasImage+"') no-repeat center top";
			BgDocument.style.backgroundSize = "cover";


			document.getElementById('canvasSnow').style.position = "absolute";
			document.getElementById('canvasSnow').style.pointerEvents = "none";
			document.getElementById('canvasSnow').style.zIndex = "9999884";
			

			document.body.style.overflow = 'hidden';

			//background-size: cover;
			// background-size: ;


