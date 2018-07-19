<html>
<head>
<style>
.image{
    width:120px;
    height:120px
}
.div{
border:1px solid black;

}


</style>

<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>

</script>



</script>


</head>

<center>
<form id="frm1">
    <input type="file" id="img_input"/>
    <br /><img id="img_preview" src="" alt="Foto Colaborador" />
</form>
</center>

</html>

<script>

function ImagePreview(input)
{

    if (input.files && input.files[0])
	{

        var r = new FileReader();

        r.onload = function(e)
		{
			$("#img_preview").show();
            $("#img_preview").attr("src", e.target.result);
        }

        r.readAsDataURL(input.files[0]);

    }
}

$().ready(function() {

	hide_empty_image = false;
	set_blank_to_empty_image = false;
	set_image_border = true;

	if (hide_empty_image)
		$("#img_preview").hide();

	if (set_blank_to_empty_image)
		$("#img_preview").attr("src","data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=");

	if (set_image_border)
		$("#img_preview").css("border", "1px solid #05bbcc");
  
    $("#img_preview").css("width", "150px");
    $("#img_preview").css("height", "150px");

	$("#img_input").change(function(){
		ImagePreview(this);
	});

});
</script>


	

	

