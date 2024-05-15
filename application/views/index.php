<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
    <link rel="stylesheet" href="css/bootstrap-4.4.1.css">

    <!-- X3dom -->
    <link rel='stylesheet' type='text/css' href='css/x3dom.css'>

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="css/all.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Link in some fonts — Not used because we finally installed the fonts
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'> 
    -->

    <!-- Use a light box to view images in the gallery -->
    <link rel="stylesheet" type="text/css" href="css/jquery.fancybox.min.css">

    <title>3D Applications 2024</title>

  </head>
  <body id="bodyColor">
    
    <!-- Logo and navigation bar -->
    <nav id="headerColor" class="navbar sticky-top navbar-expand-sm navbar_coca_cola">
      <div class="container-fluid">  
        <!-- Brand -->
        <div class="logo">
          <a class="navbar-brand" href="index.php">
          <h1>1</h1>
          <h1>oca</h1>
          <h2>Cola</h2>
          <h3>Journey</h3>
          <p>Refreshing the world, one story at a time</p>
          </a>
        </div>
                 
        <!-- Collapsible Navbar Menu Icon -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <!-- Link Menu item button to the links class navbar-collapse selector -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Links -->
            <ul class="navbar-nav ml-auto"> <!-- Use mx-auto to align centre, default to left or use mr-auto -->
              <!-- nothing changed from Lab 5 -->
              <li class="nav-item">
                <a class="nav-link active" href="index.php">Home</a>
              </li>
              <!-- Added navAbout ID, do we use this? -->
              <li class="nav-item">
                  <a id="navAbout" class="nav-link" href="javascript:;" data-toggle="popover" data-trigger="hover" data-placement="bottom" title="About Web 3D Applications" data-content="3D Apps is a final year and postgraduate module ...">About</a>
              </li>
          
              <!-- Replace Dropdown from lab 5 with single nav lnk to models -->
              <li class="nav-item">
                <a id="navModels" class="nav-link"  href="javascript:;" data-toggle="popover" data-trigger="hover" data-placement="bottom" title="X3D Models" data-content="There are three X3D models: Coke, Sprite and Pepper">Models</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="javascript:;" data-toggle="modal" data-target="#contactModal">Contact</a>
              </li>
            </ul>
        </div>
      </div>
    </nav>

    <!-- Start 3D App SPA Contents -->
    <div class="container-fluid main_contents"> 
        <!-- Home page block element -->
        <div id="home">
			
		<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="1000">
		  <div class="carousel-inner">
			<div class="carousel-item active">
			  <img src="assets/images/slide/slide1.jpg" class="d-block w-100" alt="Slide 1">
			</div>
			<div class="carousel-item">
			  <img src="assets/images/slide/slide2.jpg" class="d-block w-100" alt="Slide 2">
			</div>
			<div class="carousel-item">
			  <img src="assets/images/slide/slide3.jpg" class="d-block w-100" alt="Slide 3">
			</div>
		  </div>
		  <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		  </a>
		</div>

          <div class="row top-text"> 
            <div class ="col-sm-12">
              <div>
                  <div id="main_text" class="col-xs-12 col-sm-3">
					<div class="topbg">
						<div id="title_home"></div>
						<div id="subTitle_home"></div>
						<div id="description_home"></div>						
					</div>

                  </div> 
              </div> 
            </div>
          </div>

          <!-- Row of cards on the grid -->
          <div class="row">
            <div class="col-sm-4">
                <div class="card">
                    <a href="assets/images/render_images/coke.jpg" data-fancybox data-caption="My 3D Coke Can Render">
                        <img class="card-img-top img-fluid img-thumbnail" src="assets/images/site_images/coca_cola.jpg" alt="Coca Cola">
                    </a>
                    <div class="card-body">
                        <div id="title_left" class="card-title drinksText"></div>
                        <div id="subTitle_left" class="card-subtitle drinksText"></div>
                        <div id="description_left" class="card-text drinksText"></div>   
                        <a href="http://www.coca-cola.co.uk/drinks/coca-cola/coca-cola" class="btn btn-primary btn-responsive">Find out more ...</a>          
                    </div>
                </div>
            </div>
        
            <div class="col-sm-4">
                <div class="card">
                    <a href="assets/images/render_images/sprite.jpg" data-fancybox data-caption="My 3D Sprite Bottle Render" class="img-narrow">
                        <img class="card-img-top img-fluid img-thumbnail" src="assets/images/site_images/sprite.jpg" alt="Sprite">
                    </a>
                    <div class="card-body">
                        <div id="title_centre" class="card-title drinksText"></div>
                        <div id="subTitle_centre" class="card-subtitle drinksText"></div>
                        <div id="description_centre" class="card-text drinksText"></div>   
                        <a href="http://www.coca-cola.co.uk/drinks/sprite/sprite" class="btn btn-primary btn-responsive">Find out more ...</a>
                      </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="card">
                    <a href="assets/images/render_images/pepper.jpg" data-fancybox data-caption="My 3D Pepper Cup Render" class="thumbnail">
                        <img class="card-img-top img-fluid img-thumbnail" src="assets/images/site_images/dr_pepper.jpg" alt="Dr Pepper">
                    </a>
                    <div class="card-body">
                        <div id="title_right" class="card-title drinksText"></div>
                        <div id="subTitle_right" class="card-subtitle drinksText"></div>
                        <div id="description_right" class="card-text drinksText"></div>   
                        <a href="http://www.coca-cola.co.uk/drinks/dr-pepper/dr-pepper" class="btn btn-primary btn-responsive">Find out more ...</a>
                      </div>
                </div>
            </div>
          </div>
        </div> <!-- End home page -->

        <!-- About page block element -->
        <div id="about" >
          Insert About Contents
        </div> <!-- End home page -->

        <!-- Start X3D models and 3D Image Gallery -->
        <div id="models">
          <!-- Row to hold two cards to hold 1) the X3D model, and 2) the gallery-->
          <div class="row">
              <!-- 3D image gallery -->
              <div class="col-sm-4">
                <div class="card text-left">
                    <div class="card-header gallery-header">
                        <ul class="nav nav-tabs card-header-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" href="javascript:;">Gallery</a>
                        </li>
                    </div>
                    <div class="card-body">
                        <div class="card-title title_gallery drinksText"></div>
                        <div class="gallery" id="gallery"></div>
                        <div class="card-text description_gallery drinksText"></div>
                    </div>
                </div> <!-- End gallery card -->
            </div> <!-- End gallery column -->
              <!-- X3D Models — Place 4 models in here for the assignment -->
              <div class="col-sm-8 model-main">
                  <div class="card text-left">
                      <div class="card-header">
                      <ul class="nav nav-tabs card-header-tabs" id="modelTab">
                          <li class="nav-item">
                          <a id="navCoke" class="nav-link active" href="javascript:;" modelname="Coke">Coke</a>
                          </li>
                          <li class="nav-item">
                          <a id="navSprite" class="nav-link" href="javascript:;" modelname="Sprite">Sprite</a>
                          </li>
                          <li class="nav-item">
                          <a id="navPepper" class="nav-link" href="javascript:;" modelname="Pepper">Pepper</a>
                          </li>
                      </ul>
                      </div>
                      <div class="card-body">
                      <!-- Coke X3D model -->
                      <div id="coke">
                          <div id="x3dModelTitle_coke" class="card-title drinksText"></div>
                          <!-- Place the X3D code here -->
                          <div class="model3D">
                              <x3d id="model_Coke">
                                  <scene>
                                      <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="assets/x3d/coke.x3d" > </inline>
                                        </scene>
                                    </x3d>
                          </div> 
                          <div id="x3dCreationMethod_coke" class="card-text drinksText"></div>
                      </div>
                      <!-- Sprite X3D model -->
                      <div id="sprite" style="display:none;">
                          <div id="x3dModelTitle_sprite" class="card-title drinksText"></div>
                          <!-- Place the X3D code here -->
                          <div class="model3D">
                              <x3d id="model_Sprite">
                                  <scene>
                                      <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="assets/x3d/sprite.x3d?t=8855"> </inline>
                                  </scene>
                              </x3d>
                          </div> 
                          <div id="x3dCreationMethod_sprite" class="card-text drinksText"></div>
                      </div>
                      <!-- Pepper X3D model -->
                      <div id="pepper" style="display:none;">
                          <div id="x3dModelTitle_pepper" class="card-title drinksText"></div>
                          <!-- Place the X3D code here -->
                          <div class="model3D">
                              <x3d id="model_Pepper">
                                  <scene>
                                      <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="assets/x3d/pepper.x3d?t=441"> </inline>
                                  </scene>
                              </x3d>
                          </div> 
                          <div id="x3dCreationMethod_pepper" class="card-text drinksText"></div>
                          </div>
                      </div>
                  </div>
				  
				  
				 <div class="history"> 
					<!-- Row to hold one card to hold the coke descriptive text, etc.-->
					<div id="cokeDescription" class="row" >
						<div class="col-sm-12">
							<div class="card">
								<div class="card-body">
									<div id="title_coke" class="card-title drinksText"></div>
									<div id="subTitle_coke" class="card-subtitle drinksText"></div>
									<div id="description_coke" class="card-text drinksText"></div>   
									<a href="http://www.coca-cola.co.uk/drinks/coca-cola/coca-cola" class="btn btn-primary btn-responsive">Visit Coke</a>                 
								</div>
							</div>
						</div>
					</div> <!-- End coke description contents -->

					<!-- Row to hold one card to hold the sprite descriptive text, etc.-->
					<div id="spriteDescription" class="row" >
						<div class="col-sm-12">
							<div class="card">
								<div class="card-body">
									<div id="title_sprite" class="card-title drinksText"></div>
									<div id="subTitle_sprite" class="card-subtitle drinksText"></div>
									<div id="description_sprite" class="card-text drinksText"></div>  
									<a href="http://www.coca-cola.co.uk/drinks/sprite/sprite" class="btn btn-primary btn-responsive">Visit Sprite</a>                 
								</div>
							</div>
						</div>
					</div> <!-- End sprite description contents -->

					<!-- Row to hold one card to hold the pepper descriptive text, etc.-->
					<div id="pepperDescription" class="row" >
						<div class="col-sm-12">
							<div class="card">
								<div class="card-body">
									<div id="title_pepper" class="card-title drinksText"></div>
									<div id="subTitle_pepper" class="card-subtitle drinksText"></div>
									<div id="description_pepper" class="card-text drinksText"></div>  
									<a href="http://www.coca-cola.co.uk/drinks/dr-pepper/dr-pepper" class="btn btn-primary btn-responisve">Visit Pepper.</a>                 
								</div>
							</div>
						</div>
					</div> <!-- End pepper description contents -->  
				 </div> 
				  
				  
              </div>
          </div> <!-- End row for X3D Model and Gallery -->
        </div> <!-- End X3D Models and Gallery -->
    
        <!-- Start the interaction panels -->
        <div id="interaction" class="row" >
                <!-- Column for the camera view controls -->
                <div class="col-sm-4">
                    <div class="card text-left equal">
                        <div class="card-header">
                          <ul class="nav nav-tabs card-header-tabs float-left">
                          <!-- Dropdown nav-tab -->
                          <li class="nav-item dropdown">
                              <a class="nav-link active dropdown-toggle" href="javascript:;" >Cameras</a>

                            </li>
							
                          </ul>
						  <div class="btn btn-light btn-small expand float-right">Expand/Fold</div>
                        </div>
                        <div class="card-body" style="display: none;">
                          <div class="card-Title x3dCamera_Subtitle drinksText">
                            <h3>Camera Views</h3>
                          </div>                            
                          <a href="javascript:;" class="btn btn-primary btn-responsive" onclick="cFront();">Front</a>
                          <a href="javascript:;" class="btn btn-secondary btn-responsive" onclick="cBack();">Back</a>
                          <a href="javascript:;" class="btn btn-success btn-responsive" onclick="cLeft();">Left</a>
                          <a href="javascript:;" class="btn btn-danger btn-responsive" onclick="cRight();">Right</a>
                          <a href="javascript:;" class="btn btn-info btn-responsive" onclick="cTop();">Top</a>
                          <a href="javascript:;" class="btn btn-warning btn-responsive" onclick="cBottom();">Bottom</a>
                          <div class="card-text x3dCameraDescription drinksText">
                            <p>These buttons select a limited range of X3D model viewpoints, use the dropdown menu for more camera views</p>
                          </div>
                        </div>
                      </div>
                </div>
                <!-- Column for the animation controls -->
                <div class="col-sm-4">
                    <div class="card text-left equal">
                        <div class="card-header">
                          <ul class="nav nav-tabs card-header-tabs float-left">
                            <li class="nav-item">
                              <a class="nav-link active" href="javascript:;">Animation</a>
                            </li>
                          </ul>
						  <div class="btn btn-light btn-small expand float-right">Expand/Fold</div>
                        </div>
                        <div class="card-body" style="display: none;">
                          <div class="card-Title x3dAnimationSubtitle drinksText">
                            <h3>Animation Options</h3>
                          </div>
                          <a href="javascript:;" class="btn btn-outline-light btn-responsive" onclick="spin();">Start Animation</a>
                          <a href="javascript:;" class="btn btn-outline-dark btn-responsive" onclick="stopRotation();">Stop Animation</a>
                          <div class="card-text x3dAnimationDescription drinksText">
                              <p>These buttons select a range of X3D animation options</p>
                          </div>
                        </div>
                      </div>
                </div>
                <!-- Column for the render type and lighting controls -->
                <div class="col-sm-4">
                    <div class="card text-left equal">
                        <div class="card-header">
                          <ul class="nav nav-tabs card-header-tabs float-left">
                            <li class="nav-item">
                              <a class="nav-link active dropdown-toggle" href="javascript:;" id="navbardrop" data-toggle="dropdown" >Render</a>
                              <div class="dropdown-menu">
                                <a class="dropdown-item" href="javascript:;" onclick="wireframe(0);">Polygon</a>
                                <a class="dropdown-item" href="javascript:;" onclick="wireframe(2);">Wireframe</a>
                                <a class="dropdown-item" href="javascript:;" onclick="wireframe(1);">Vertex</a>
                              </div>
                            </li>
                          
                          </ul>
						  <div class="btn btn-light btn-small expand float-right">Expand/Fold</div>
                        </div>
                        <div class="card-body" style="display: none;">
                          <div class="card-Title x3dRendersubtitle drinksText">
                            <h3>Render Options</h3>
                          </div>
                          <a href="javascript:;" class="btn btn-success btn-responsive" onclick="wireframe(0);">Polygon</a>
                          <a href="javascript:;" class="btn btn-secondary btn-responsive" onclick="wireframe(2);">Wireframe</a>
                         
                          <a href="javascript:;" class="btn btn-outline-dark btn-responsive" onclick="wireframe(1);">Vertex</a>
                          <div class="card-text x3dRenderDescription drinksText">
                              <p>These buttons select a limited number of render and lighting options; use the dropdown menus for more options</p>
                          </div>
                        </div>
                      </div>
                </div>
        </div> <!-- End the interaction panels -->



    </div>  <!-- End 3D App SPA Contents --> 

    <!-- Your 3D App footer -->
    <nav id="footerColor" class="navbar navbar-expand-sm footer">
        <div class="container-fluid">   
            <div class="navbar-text float-left copyright">
                <p><span class="align-baseline">&copy 2020 3D Apps | <a href="javascript:changeLook()">Restyle</a> | <a href="javascript:changeBack()">Reset</a></span></p>
            </div>
            <div class="navbar-text social">
                  <a href="javascript:;"><i class="fab fa-github-square fa-2x fa-pull-right"></i></a>
                  <a href="javascript:;"><i class="fab fa-google-plus-square fa-2x fa-pull-right"></i></a>
                  <a href="javascript:;"><i class="fab fa-twitter-square fa-2x fa-pull-right"></i></a>
                  <a href="javascript:;"><i class="fab fa-facebook-square fa-2x fa-pull-right"></i></a>
            </div>
        </div>
    </nav> 


    <div class="modal fade" id="contactModal">
        <div class="modal-dialog">
            <div class="modal-content">
            
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">3D App Contact Details</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            
            <!-- Modal body -->
            <div class="modal-body">
                <p>Xinyu Wang, Email: xw301@sussex.ac.uk</p>
            </div>
            
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            </div>
            
            </div>
        </div>
    </div>

    <!-- jQuery first -->
    <script src="scripts/js/jquery-3.4.1.js"></script>
    <script src="scripts/js/popper.min.js"></script>

    <script src="scripts/js/bootstrap-4.4.1.js"></script>

    <!-- Include the x3dom JavaScript -->
    <script src='scripts/js/x3dom.js'></script>




    <!-- JavaScript to swap for SPA and restyle -->
    <script src="scripts/js/swap_restyle.js"></script>

    <!-- JavaScript and PHP based Gallery generator  -->
    <script src="scripts/js/gallery_generator.js?t=2413543"></script>

    <!-- JQuery code to get content data from Sqlite -->
    <script src="scripts/js/getSqlData.js"></script>

    <!-- JavaScript model interactions -->
    <script src="scripts/js/modelInteractions.js?t=4524"></script>


    <script src="scripts/js/jquery.fancybox.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {

		  $('#myCarousel').carousel();
		  
		});
	</script>
  </body>
</html>

