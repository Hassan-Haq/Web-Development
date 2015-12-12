<!doctype html>
<html>

	<head> 
		<title>Hassan Haq</title>
		<link rel="icon"  type="image/png" href="images/user.png">
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		  <!-- Include jQuery -->
		<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js'></script>
		<link rel="stylesheet" type="text/css" href="Home.css"> 
		<link rel="stylesheet" type="text/css" href="font-awesome.css"> 
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<!-- Optional theme -->
		<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">-->


		<script type='text/javascript'>
		//<![CDATA[ 

		 $(function() {
			    // Stick the #nav to the top of the window
			    var nav = $('#nav');
			    var navHomeY = nav.offset().top;
			    var isFixed = false;
			    var $w = $(window);
			    $w.scroll(function() {
			        var scrollTop = $w.scrollTop();
			        var shouldBeFixed = scrollTop > navHomeY;
			        if (shouldBeFixed && !isFixed) {
			            nav.css({
			                position: 'fixed',
			                top: 0,
			                left: nav.offset().left,
			                width: nav.width()
			            });
			            isFixed = true;
			        }
			        else if (!shouldBeFixed && isFixed)
			        {
			            nav.css({
			                position: 'static'
			            });
			            isFixed = false;
			        }
			    });
			});

		//]]>  
		</script>
		<script type='text/javascript'>
			$('#myModal').on('shown.bs.modal', function () {
	  			$('#myInput').focus()
			})
		</script>
		<script type="text/javascript">
		 $(function () { 
		    $("#myModal").modal({show:false});
		});  
		</script>

	</head>	

	<body>

		<header class="navbar">
			<div id="navWrap">
				<nav class="navbar">
				  <div class="container-fluid">
				    <!-- Brand and toggle get grouped for better mobile display -->
				    <div class="navbar-header">
				      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav" aria-expanded="false">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				      </button>
				    </div>

				    <!-- Collect the nav links, forms, and other content for toggling -->
				    <div class="collapse navbar-collapse" id="nav">

				      <ul class="nav nav-pills clr">
				      		<li><a href="#Nav" class="smoothScroll"><img alt="Brand" src="images/logo.JPG" class="img-circle" height="25" width="25"></a></li>
				      		<li><a href="#AboutMe" class="smoothScroll"><b>About</b></a></li>
		                    <li><a href="#Experience" class="smoothScroll"><b>Experience</b></a></li>
		                    <li><a href="#Projects" class="smoothScroll"><b>Projects</b></b></a></li>
		                    <li><a href="#Contact" class="smoothScroll"><b>Contact</b></a></li>
				       </ul>
				       <br class="clearLeft" />

				    </div><!-- /.navbar-collapse -->
				  </div><!-- /.container-fluid -->
				</nav>
			</div>
		</header>
		<div class="row">
			<div class="pic" id="Nav">
				<h1>Hassan Haq<h1>
				<h2>Developer. Designer. Programmer<h2>
				<img src="images/HeadShot.jpg"class="img-circle" height="480" width="480">
			</div>
		</div>
		<div class="Bot" >
			<div class="container">	
					<div class="moveAbout" id="AboutMe">
						<h1>About Me</h1>
					</div>
				<div class="row" >
					<div class="col-sm-2">
					</div>
					<div class="col-sm-8">
						
							<p>
							I am a student at <b>Queen's University</b> studying <b>Software Development/Design</b>. I have two great passions, Dance, and Computer Science. Both fields inspire me and push me to constantly work and improve my skills. 
							</p>
							<p>
							As a Programmer I am constantly challenging myself by tackling various projects in and outside of school. I like to ensure that whatever projects I am related to are of quality and are executed with effeciency.
							</p>
							<p>
							As a dancer I teach at, and help run the breakdancing club at Queens. As a club we constantly work to empower the dance scene in the city through performances and by hosting events for the students and general public.
							</p>

					</div>
					<div class="col-sm-2">
					</div>
				</div>
				<div class="row">
					<div class="text-center">
						<div class="btn-group" role="group">
						  <a href="Resume.pdf" target="_blank"><button type="button" class="btn btn-lg pull-middle btn-primary"><i class="fa fa-file-text"></i> Resume</button></a>
						  <a href="https://www.linkedin.com/profile/view?id=AAIAABeXkIkBx_6J24JBdKF8ngx9X1qF7INPEHA&trk=nav_responsive_tab_profile" target="_blank"><button type="button" class="btn btn-lg btn-warning"><i class="fa fa-linkedin-square"></i> LinkedIn</button></a>
						</div>
					</div>
				</div>
				<div class="containerOne">	
						<div class="box">
							<h1>Why Me?</h1>
						</div>
					<div class="Apara">
						<div class="row">
							<div class="col-sm-1">
							</div>
							<div class="col-sm-2">
								<div style="width:193px;height:197px;border:10px solid #1975D1; background-color: #1975D1; border-radius: 10px 0px 0px 10px">
									<p><b>Dedicated.</b><p>
									<p>
										I work daily to improve myself physically, socially and professionally. I strive to execute projects to the best of my ability and ensure that my work is top quality and my services are positivly received.
									</p>
								</div>
							</div>
							<div class="col-sm-2">
								<div style="width:193px;height:197px;border:10px solid #0066CC; background-color: #0066CC;">
									<p><b>Problem Solver.</b><p>
									<p>
										Optimizing solutions for different situations is a key skill to have as a programmer. I am constantly working to improve my problem solving skills.
									</p>
								</div>
							</div>
							<div class="col-sm-2">
								<div style="width:193px;height:197px;border:10px solid #005CB8; background-color: #005CB8;">
									<p><b>Collabrative.</b><p>
									<p>
										I have high regards for team building. I work well amongst peers and find inspiration in being able to tackle a problem with a team at my side.
									</p>
								</div>
							</div>
							<div class="col-sm-2">
								<div style="width:193px;height:197px;border:10px solid #0052A3; background-color: #0052A3; border-radius: 0px 10px 10px 0px">	 
									<p><b>Ambitious.</b><p>
									<p>
										I am constantly on the look-out for opportunities to improve and am not afraid to take risks when necessary.
									</p>
								</div>
							</div>
							<div class="coFFDDA1">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="containerTwo"id="Experience">
			<div class="Exp"    >
				<h1>Experience</h1>
			</div>
			<div class="row">
					<div class="exp">
						<div class="row">
							<div class="col-sm-8">
							<div class="panel">
			  				<div class="panel-heading panel-primary text-center"><b>WRMR Queen's University</b></div>
			  				<div class="panel text-center"><i>Slide and Computer Lab Assistant</i></div>
			  					<div class="panel-body">
			    					Incharge of selecting and scanning various works of art, sculptor, architecture etc. I then analyze and use PhotoShop to remove any discrepencies in the peices and label and archive them using Adobe Standard. Other responsibilities include troubleshooting technical (Hardware/Software) problems and interacting and assisting the students and staff that use the room.
			  					</div>
							</div>
							</div>
							<div class="col-sm-4">
								<div class="Queens">
									<img src="images/QueensLogo.jpg"class="img-rounded" height="220" width="270">
								</div>
							</div>
						</div>
					</div>
					<hr>
					<div class="exp">
						<div class="row">
							<div class="col-sm-8">
							<div class="panel">
			  				<div class="panel-heading panel-primary text-center"><b>QRBC (Kinetiq)</b></div>
			  				<div class="panel text-center"><i>Vice President & Dance Instructor</i></div>
			  					<div class="panel-body">
			    					Instructor at Queen's only Breakdance Club. I am responsible for teaching a class of 30 students how to free-style as well as how to discover and improve themselves through dance. I am responsible for community outrech as well. We are constantly working with various groups throughout the city (SP Music Festival, Queen's Annual Dance Battle, etc.) to help organize events and performances which improve the clubs standing and the hip-hop scence in Kingston. I also help to create the choreography numbers which are performend at these various events.
			  					</div>
							</div>
							</div>
							<div class="col-sm-4">
								<div class="KQ">
									<img src="images/KQ.jpg"class="img-circle" height="220" width="220">
								</div>
							</div>
						</div>
					</div>
					<hr>
				    <div class="exp">
						<div class="row">
							<div class="col-sm-8" alight="right">
							<div class="panel">
			  				<div class="panel-heading panel-primary text-center"><b>Walker Exhaust Tenneco Inc.</b></div>
			  				<div class="panel text-center"><i>MFG/Set-Up</i></div>
			  					<div class="panel-body">
			    					Worked as an MFG dealing with various automobile parts. Other than making the parts I was also responsible for Quality Assurance for my sector as well as teaching new employess about proper work ethic and safety. My work managed to pique the interest of our sections set-up and I was unofficially placed as his assistant dealing with the programs of the various machines and thier maintenance.
			  					</div>
							</div>
							</div>
							<div class="col-sm-4">
								<div class="tenneco">
									<img src="images/Tenneco.jpg" class="img-rounded">
								</div>
							</div>
						</div>
					</div>
			</div>
		</div>


		<div class="Pro" id="Projects">
			<h1>Projects</h1>
			<div class="row" >
				<div class="rowOne">
					<div class="col-sm-1">
						
					</div>
					<div class="col-sm-2">
						<div style="width:130px;height:130px;border-radius: 50%; line-height: 130px; solid #006B6B;background-position: 50%; background-image: url(images/Tech.jpg); background-size: 135px 135px ">
						</div>
					</div>
					<div class="col-sm-6">
						<p><b>TechSupport is the app created and tailored for the technologically challenged and techno­phobic individuals stuck in a tech-filled world.</b><p>



							<!-- Button trigger modal -->
						<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal"> More Info </button>

						<!-- Modal -->
						<div class="modal fade bs-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="false">
						  <div class="modal-dialog modal-lg" role="document">
						    <div class="modal-content">
						      <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						        <h4 class="modal-title" id="myModalLabel"><img src="images/Tech.jpg" class="img-circle" height="60" width="60"></h4>
						      </div>
						      <div class="modal-body">
						      	<div class="row">
						      		<p>Below I've presented some highlights from the TechSupport Project as well as a link to the poster which summarizes the project and a link to the github page that hosts our app.</p>
						      	</div>
						      	<div class="row">
							        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
									  <!-- Indicators -->
									  <ol class="carousel-indicators">
									    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
									    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
									    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
									    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
									  </ol>

									  <!-- Wrapper for slides -->
									  <div class="carousel-inner" role="listbox">
									    <div class="item active">
									      <img class="arch" src="images/tech1.JPG" alt="wire One" align="middle"; >
									      <div class="carousel-caption">
									   	  </div>
									    </div>
									    <div class="item">
									      <img class="arch" src="images/tech2.JPG" alt="wire Two" align="middle" ; >
									      <div class="carousel-caption">
									      </div>
									    </div>
									    <div class="item">
									      <img class="arch" src="images/tech3.JPG" alt="StoryBoard Piece" align="middle" ; >
									      <div class="carousel-caption">
									      </div>
									    </div>
									    <div class="item">
									      <img class="arch" src="images/tech4.JPG" alt="HTI" align="middle" ; >
									      <div class="carousel-caption">
									      </div>
									    </div>
									  
									  </div>

									  <!-- Controls -->
									  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
									    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
									    <span class="sr-only">Previous</span>
									  </a>
									  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
									    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
									    <span class="sr-only">Next</span>
									  </a>
									</div>
								</div>
						      	<div class="rowIn">
						        	<div class="col-sm-6">
										<a href="TOSTAPOSTA.pdf" target="_blank"><button type="button" class="btn btn-warning">Poster</button></a>
									</div>
									<div class="col-sm-6">
										<a href="https://github.com/danlafreniere/TechSupport_Redux" target="_blank"><button type="button" class="btn btn-warning">GitHub</button></a>
									</div>
								</div>
						      </div>
						      <div class="modal-footer">
						        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						      </div>
						    </div>
						  </div>

						</div>

					</div> <!-- col-sm-6 -->
				</div>
			</div>
			<div class="row">
				<hr>
			</div>
			<div class="row" >
				<div class="rowTwo">
					<div class="col-sm-1">
						
					</div>
					<div class="col-sm-2">
						<div style="width:130px;height:130px;border-radius: 50%; line-height: 130px; solid #006B6B;background-position: 50%; background-image: url(images/Doom.png);background-size: 130px 130px">
						</div>
					</div>
					<div class="col-sm-6">
						<p><b>Studied the code base of Doom 3 and developed the Conceptual & Concrete Architecture. Demonstrated the effects on the Architecture due to the introduction of Co-op Campaign </b><p>


						<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal1"> More Info </button>


							<!-- Modal -->
						<div class="modal fade bs-example-modal-lg" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="false">
						  <div class="modal-dialog modal-lg" role="document">
						    <div class="modal-content">
						      <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						        <h4 class="modal-title" id="myModalLabel"><img src="images/Doom.png" class="img-circle" height="60" width="60"></h4>
						      </div>
						      <div class="modal-body">
						      	<div class="row">
						        	<p>Below I've presented the Conceptual and Concrete Architecture's we developed followed by links to the reports detailing each step of the project<p> 
						        </div>
						        <div class="row">
							        <div id="carousel-example-generic-One" class="carousel slide" data-ride="carousel">
									  <!-- Indicators -->
									  <ol class="carousel-indicators">
									    <li data-target="#carousel-example-generic-One" data-slide-to="0" class="active"></li>
									    <li data-target="#carousel-example-generic-One" data-slide-to="1"></li>
									  </ol>

									  <!-- Wrapper for slides -->
									  <div class="carousel-inner" role="listbox">
									    <div class="item active">
									      <img class="arch" src="images/Concept.JPG" alt="Conceptual Architecture" align="middle"; >
									      <div class="carousel-caption">
									     
									      </div>
									    </div>
									    <div class="item">
									      <img class="arch" src="images/Concrete.JPG" alt="Concrete Architecture" align="middle" ; >
									      <div class="carousel-caption">
									      
									      </div>
									    </div>
									  
									  </div>

									  <!-- Controls -->
									  <a class="left carousel-control" href="#carousel-example-generic-One" role="button" data-slide="prev">
									    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
									    <span class="sr-only">Previous</span>
									  </a>
									  <a class="right carousel-control" href="#carousel-example-generic-One" role="button" data-slide="next">
									    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
									    <span class="sr-only">Next</span>
									  </a>
									</div>
								</div>
								<div class="rowIn">
									<div class="col-sm-4">
										<a href="https://cisc326groupomg.files.wordpress.com/2015/11/assign1reportfinal.pdf" target="_blank"><button type="button" class="btn btn-warning">Conceptual Report</button></a>
									</div>
									<div class="col-sm-4">
										<a href="https://cisc326groupomg.files.wordpress.com/2015/11/cisc326-groupomg-a2-doom3concretearchitecture.pdf" target="_blank"><button type="button" class="btn btn-warning">Concrete Report</button></a>
									</div>
									<div class="col-sm-4">
										<a href="https://cisc326groupomg.files.wordpress.com/2015/11/cisc326-a3-doom3architectureenhancement.pdf" target="_blank"><button type="button" class="btn btn-warning">Co-op Enhancement</button></a>
									</div>
								</div>

						      </div>
						      <div class="modal-footer">
						        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						      </div>
						    </div>
						  </div>

						</div>
					</div>
				</div>
			</div>
<!--			
<div class="row" >
				<div class="rowThree">
					<div class="col-sm-1">
						
					</div>
					<div class="col-sm-2">
						<div style="width:130px;height:130px;border-radius: 50%; line-height: 130px; solid #006B6B;background-position: 50%;  background-image: url(images/Quibble.png);background-size: 130px 130px">
						</div>
					</div>
					<div class="col-sm-6">
						<p><b>Assisted in developing an Event Ticketing System which was designed from a Software Quality Assurance view point.</b><p>

						<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal2"> More Info </button>


						<div class="modal fade bs-example-modal-lg" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="false">
						  <div class="modal-dialog modal-lg" role="document">
						    <div class="modal-content">
						      <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						        <h4 class="modal-title" id="myModalLabel"><img src="images/Quibble.png" class="img-circle" height="60" width="60"></h4>
						      </div>
						      <div class="modal-body">
						        ...
						      </div>
						      <div class="modal-footer">
						        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						      </div>
						    </div>
						  </div>

						</div>
				</div>

				</div>
			</div>
			 -->
		</div>

<script>


</script>
<!-- Small modal -->

		<div class="con" id="Contact">
			<div class="modal-header">
				<h1>Let's Talk</h1>
			</div>
			<form class="form-horizontal" role="form" method="post" action="">
			    <div class="form-group">
			        <label for="name" class="col-sm-2 control-label">Name</label>
			        <div class="col-sm-10">
			            <input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name">
			        </div>
			    </div>
			    <div class="form-group">
			        <label for="email" class="col-sm-2 control-label">Email</label>
			        <div class="col-sm-10">
			            <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" >
			        </div>
			    </div>
			    <div class="form-group">
			        <label for="message" class="col-sm-2 control-label">Message</label>
			        <div class="col-sm-10">
			            <textarea class="form-control" id= "message" rows="4" name="message"></textarea>
			        </div>
			    </div>
			    <div class="form-group">
			        <div class="col-sm-10 col-sm-offset-2">

			            <input id="submit" type="button" Value="Send" onclick = "sendMail()" name="submit" class="btn btn-primary btn-lg" data-toggle="modal" 
			            data-target="#EmailModal" data-backdrop="false"/>
						<div class="modal fade" id="EmailModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
						  <div class="modal-dialog" role="document">
						    <div class="modal-content">
						      <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						        <h4 class="modal-title" id="myModalLabel">Confirmation</h4>
						      </div>
						      <div class="modal-body">
						        Thank you! Your email has been sent. I will be in touch.
						      </div>
						      <div class="modal-footer">
						        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
						      </div>
						    </div>
						  </div>
						</div>
			        </div>
			    </div>
			    <div class="form-group">
			        <div class="col-sm-10 col-sm-offset-2">
			           
			        </div>
			    </div>
			</form> 
<!--		<form class="form-horizontal" role="form">

				<div class="modal-body">
					<div class="form-group">
						<label for="contact_name" class="col-sm-2 control-label">Name</label>
						<div class="col-sm-10">
							<input type="text"  class="form-control" id="contact_name">
						</div>
					</div>
					<div class="form-group">
						<label for="contact_email" class="col-sm-2 control-label">E-mail</label>
						<div class="col-sm-10">
							<input type="text"  class="form-control" id="contact_email">
						</div>
					</div>
					<div class="form-group">
						<label for="message" class="col-sm-2 control-label">Message</label>
						<div class="col-sm-10">
							<textarea class="form-control" id="message" rows="4" placeholder= "How can I help?"></textarea>
						</div>
					</div>
				</div>
				<button type="submit" class="btn btn-lg pull-right btn-primary">Send</button>
			</form> -->
		</div>

<!-- <p><b>haq.ul.hassan@gmail.com</b><p> -->		
		<script src="./bootstrap.min.js"></script>
		<script>
		$(function() {
		  $('a[href*=#]:not([href=#]):not(.carousel-control)').click(function () {
		    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
		      var target = $(this.hash);
		      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
		      if (target.length) {
		        $('html,body').animate({
		          scrollTop: target.offset().top
		        }, 1000);
		        return false;
		      }
		    }
		  });
		});
</script>
<script>
	function sendMail(){
			debugger;
    var xmlhttp;

    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var message = document.getElementById("message").value;

    if(window.XMLHttpRequest){
           xmlhttp = new XMLHttpRequest();
    }
    else{
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }   
          xmlhttp.onreadystatechange=function(){
         
            if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
                   document.getElementById("modalMessage").innerHTML = xmlhttp.responseText;
            } 
           
            
        }
        xmlhttp.open("GET","form.php?name="+name+"&email="+email+"&message="+message, true);
        xmlhttp.send();  
    }

		</script>

	</body>

</html>