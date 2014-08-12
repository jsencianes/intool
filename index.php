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
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
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

    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!--<img src="./ico/apple-touch-icon-72-precomposed.png" alt="Responsive image">-->
          <a class="navbar-brand" href="#"> In() Tool</a>


        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Main</a></li>
            <li><a href="#options">Options</a></li>
            <!--<li><a href="http://twitter.com/toolsappnet">About</a></li>-->
			<li> <a href="#" id="about" data-toggle="modal" data-target="#about-modal">About</a></li>
          </ul>
        </div><!-- /.nav-collapse -->
      </div><!-- /.container -->
    </div><!-- /.navbar -->


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
        <p class="text-muted">&copy; toolsapp.net 2014 | Follow us on <a href="http://twitter.com/toolsappnet" target="_blank"><img src="https://lh6.googleusercontent.com/--aIk2uBwEKM/T3nN1x09jBI/AAAAAAAAAs8/qzDsbw3kEm8/s32/twitter32.png" width=32 height=32 alt="follow us on Twitter" /></a></p>
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
                    <p><img src="ico/apple-touch-icon-144-precomposed.png"/></p>
                    <p>Developed and maintained by <a href="mailto:shane.bell@gmail.com" target="_mail">Shane Bell</a></p>
                    <p>Licensed under the <a href="http://www.apache.org/licenses/LICENSE-2.0" target="_license">Apache License v2.0</a></p>
                    <!--<p>Available from the <a href="https://chrome.google.com/webstore....." target="_webstore">Chrome Web Store</a></p> -->
                    <p>Source code available at <a href="https://github.com/jsencianes/intool.git" target="_github">GitHub</a></p>
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

