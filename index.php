<?php



if (isset($_REQUEST['ctin']))
  $inicio=$_REQUEST['ctin'];
else
  $inicio="";
?>


<?php


$leng = strlen($inicio);

$cadena = trim($inicio);


$patron = "[\n|\r|\n\r]";

$cadena = eregi_replace("[\r]", "", $cadena);

$cadena = "'".eregi_replace("[\n]", "','", $cadena)."'";

$cadena = "in (".$cadena.")";


$leng = strlen($cadena);
$cuenta = substr_count($cadena,"','") +1;


?>




<!DOCTYPE html>
<!--
   Copyright 2014 toolsapp.net dev.jsencian@gmail.com

   Licensed under the Apache License, Version 2.0 (the "License");
   you may not use this file except in compliance with the License.
   You may obtain a copy of the License at

       http://www.apache.org/licenses/LICENSE-2.0

   Unless required by applicable law or agreed to in writing, software
   distributed under the License is distributed on an "AS IS" BASIS,
   WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
   See the License for the specific language governing permissions and
   limitations under the License.
 -->




<html lang="es">
<head>

<meta charset="utf-8">
    <title>In() Tool</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="toolsapp.net">
    <meta name="author" content="jsr">


<!-- Quitamos la posibilidad de hacer zoom en dispositivos moviles -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

<!-- Bootstrap CSS -->
   <link href="./css/bootstrap.min.css" rel="stylesheet" media="screen">
<!--   <link href="./css/bootstrap-theme.min.css" rel="stylesheet" media="screen"> -->
    <style>

	  
	  body{padding-top:60px;padding-bottom:40px}.navbar-brand{padding-bottom:0;padding-top:4px;padding-left:4px;padding-right:4px}
	  
	  #about-modal img{float:left}.tt-hint{display:none}.control-group{margin-bottom:0}
	  #about-modal img{paddin-right:10px}
	  #about-modal .modal-body{margin-left:40px}

	  
		<!-- socicons -->
		@font-face {
		font-family: 'si';
		src: url('./fonts/socicon/socicon.eot');
		src: url('./fonts/socicon/socicon.eot?#iefix') format('embedded-opentype'),
		 url('./fonts/socicon/socicon.woff') format('woff'),
		 url('./fonts/socicon/socicon.ttf') format('truetype'),
		 url('./fonts/socicon/socicon.svg#icomoonregular') format('svg');
		font-weight: normal;
		font-style: normal;

		}

		@media screen and (-webkit-min-device-pixel-ratio:0) {
		@font-face {
		font-family:si;
		src: url(./fonts/socicon/socicon.svg) format(svg);
		}
		}

		.soc {
		overflow:hidden;
		margin:0; padding:0;
		list-style:none;
		}

		.soc li {
		display:inline-block;
		*display:inline;
		zoom:1;
		text-align: center;
		vertical-align: middle;
		}
		
		.soc p {
		
		padding-top: 10px;
		
		}

		.soc li a {
		font-family:si!important;
		font-style:normal;
		font-weight:400;
		-webkit-font-smoothing:antialiased;
		-moz-osx-font-smoothing:grayscale;
		-webkit-box-sizing:border-box;
		-moz-box-sizing:border-box;
		-ms-box-sizing:border-box;
		-o-box-sizing:border-box;
		box-sizing:border-box;
		-o-transition:.1s;
		-ms-transition:.1s;
		-moz-transition:.1s;
		-webkit-transition:.1s;
		transition:.1s;
		-webkit-transition-property: transform;
		transition-property: transform;
		-webkit-transform: translateZ(0);
		transform: translateZ(0);

		overflow:hidden;
		text-decoration:none;
		text-align:center;
		display:block;
		position: relative;
		z-index: 1;
		width: 27px;
		height: 27px;
		line-height: 27px;
		font-size: 14px;
		-webkit-border-radius: 100px;
		-moz-border-radius: 100px;
		border-radius: 100px;
		margin-right: 7px;
		color: #ffffff;
		background-color: #b0b0b0;
		}

		.soc a:hover {
		z-index: 2;
		background-color:#c4c4c4 !important;
		}


		.soc-icon-last{
		margin:0 !important;
		}

		.soc-twitter:before {
		content:'a';
		}
		.soc-github:before {
		content:'Q';
		}
		.soc-email1:before {
		content:'<';
		}



	  
    </style>
    <link href="./css/bootstrap-theme.min.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="./css/offcanvas.css" rel="stylesheet">




    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="./ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="./ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="./ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="./ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="./ico/favicon.png">

</head>


<body>

	

		<!-- Navbar -->
    <div class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
					
                <a class="navbar-brand" href="#"><img src="ico/apple-touch-icon-144-rounded.png" width=40 height=40 alt="Responsive image"/></a>
            </div>
			
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">In() Tool</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Options<span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">						
							<li role="presentation" class="disabled"><a role="menuitem" tabindex="-1" href="#">Add IN() statement</a></li>
							<li role="presentation" class="disabled"><a role="menuitem" tabindex="-1" href="#">Replace quotes with double quotes</a></li>
							<li role="presentation" class="disabled"><a role="menuitem" tabindex="-1" href="#">Reverse transformation</a></li>
							<li class="divider"></li>
							<li role="presentation" class="disabled"><a role="menuitem" tabindex="-1" href="#">Delete duplicates</a></li>
							<li role="presentation" class="disabled"><a role="menuitem" tabindex="-1" href="#">Order ASC</a></li>
							<li role="presentation" class="disabled"><a role="menuitem" tabindex="-1" href="#">Order DESC</a></li>
						</ul>
					</li>
					
					<li><a href="#" id="about" data-toggle="modal" data-target="#about-modal">About</a></li>
                </ul>
            </div>
        </div>
    </div>
		
	
	
	
	
	
	

  <div class="container">

<div>
<blockquote>
  <p>In()Tool helps you convert your column list of items in a valid SQL format <code>in(item1,item2,...itemn)</code> easily.</p>


</blockquote>

</div>

    <div class="row">

        <div class="col-sm-4">


                <form class="form-horizontal" role="form" action="index.php" method="post">

                          <div class="form-group">
                            <button type="button" class="btn btn-default" onclick="blanquea_text();" >New</button>
                            <button type="submit"  class="btn btn-primary" id="btnProc" data-loading-text="Processing...">Process</button>
                          </div>

                          <div class="form-group">
                            <textarea class="form-control col-sm-4" id="ct_in" name="ctin" rows="20"><?php echo $inicio;?></textarea>
                            <!-- <img src="./img/arrows.png" class="img-responsive" alt="Responsive image"> -->
                          </div>

                </form>

        </div>




        <div class="col-sm-8">



          <div class="form-group">

            <button type="button"  class="btn btn-primary" id="copy-button" data-clipboard-target="ct_out">Copy to clipboard</button>


            <span class="badge"><?php echo $cuenta." items";?></span>
            <span class="badge"><?php echo $leng." characters";?></span>
          </div>

          <div class="form-group">
            <textarea  class="form-control" id="ct_out" name = "ct_out" rows="20"><?php echo $cadena;?></textarea>

          </div>



        </div>
    </div> <!-- row -->


   <div class="footer">
      <div class="container">
       <!--  <p class="text-muted">&copy; toolsapp.net 2014 | <a href="http://twitter.com/toolsappnet" target="_blank">Follow us on <img src="https://lh6.googleusercontent.com/--aIk2uBwEKM/T3nN1x09jBI/AAAAAAAAAs8/qzDsbw3kEm8/s32/twitter32.png" width=16 height=16 alt="follow us on Twitter" />@toolsappnet</a></p> -->
	   

	   
	   <ul class="soc">
	   
	   	    <li><p class="text-muted">&copy; toolsapp.net 2014 |&nbsp;</p></li>
			<li><a class="soc-twitter" href="http://twitter.com/toolsappnet" target="_blank"> @toolsappnet</a></li>
			<li><a class="soc-github" href="https://github.com/jsencianes/intool.git" target="_github"></a></li>
			<li><a class="soc-email1 soc-icon-last" href="mailto:dev.jsencian@gmail.com" target="_mail"></a></li>
			
		</ul>	   

	   
      </div>
    </div>

	
  <!-- About modal -->
    <div id="about-modal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h3>Toolsapp.net</h3>
                    <p>beta 0.2</p>
                </div>
                <div class="modal-body">
					<p><img class="img-responsive" src="ico/apple-touch-icon-144-rounded.png" alt=""/></p>
					<p>&nbsp;&nbsp;Developed and maintained by <a href="mailto:dev.jsencian@gmail.com" target="_mail">dev.jsencian@gmail.com</a></p>
					<p>&nbsp;&nbsp;Licensed under the <a href="http://www.apache.org/licenses/LICENSE-2.0" target="_license">Apache License v2.0</a></p>
					<!--<p>Available from the <a href="https://chrome.google.com/webstore....." target="_webstore">Chrome Web Store</a></p> -->
					<p>&nbsp;&nbsp;Source code available at <a href="https://github.com/jsencianes/intool.git" target="_github">GitHub</a></p>
					<p>&nbsp;&nbsp;Follow us on <a href="http://twitter.com/toolsappnet" target="_blank">twitter</a></p>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-primary" data-dismiss="modal">Close</a>
                </div>
            </div>
        </div>
    </div>	
	
	

  </div> <!-- /container -->





  <!-- JS FILES -->
   <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
   <script src="./js/bootstrap.min.js"></script>
   <script src="./js/offcanvas.js"></script>
   <script src="./js/ZeroClipboard.min.js"></script>
   <script type="text/javascript">

      ZeroClipboard.config({ debug: false });

      var client = new ZeroClipboard(document.getElementById('copy-button'));

      client.on( 'load', function(client) {

      client.on( 'complete', function(client, args) {
          //alert("Copied text to clipboard: " + args.text );
          set_success();
        } );

      } );

      client.on( 'wrongflash noflash', function() {
        ZeroClipboard.destroy();
      } );

   </script>


<script type="text/javascript">





function blanquea_text()
{
   var a = $("#ct_in");
   var b = $("#ct_out");

   a.val("");
   b.val("");

}


function set_success()
{
  var bton = $("#copy-button");
  bton.attr("class", "btn btn-success");


}


$('#btnProc').click(function () {
    var btn = $('#btnProc')
    btn.button('loading')
    });




</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-50233812-1', 'toolsapp.net');
  ga('send', 'pageview');

</script>


</body>
</html>

