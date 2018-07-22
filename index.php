<html>

<head>
  <meta charset="utf-8"></meta>
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">


</head>

<body>
    <center>
      <div>
          <img src="img/default.jpeg" class="image">
      </div>
      <input type="file" id="profile_image" class="btn btn-primary"></input>
      <br><br><br>

      <div id="resultado"></div>
    </center>

</body>

</html>

<script>

$(function(){
    $('#profile_image').change( function(e) {

        var img = URL.createObjectURL(e.target.files[0]);
        $('.image').attr('src', img);

    });

    $('#profile_image').click(function(){
        $.ajax(
              {url: "carregar.php",
              success: function(result){
              $("#resultado").html(result);
              $( "#msg" ).slideUp( 300 ).delay( 2500 ).fadeIn( 800 );
        }});
    });


});

</script>

<?php

	if(!file_exists($ac)){
		mkdir("/opt/lampp/htdocs/images", 0777,true);
	}else{
		echo 'NON existe';
	}


	echo $ac;
?>
