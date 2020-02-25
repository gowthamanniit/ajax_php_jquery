<!DOCTYPE html>
<html>
<head>
	<title>jquery ajax php</title>
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.8.3.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#submit").click(function(){
				var name=$("#name").val();
				var email=$("#email").val();
				var dataString='name1='+name+"&email1="+email;
				if(name==''|| email=='')
				{
					$("#display").html("must fill the details");
				}
				else
				{
					$.ajax({
						type:"POST",
						url:"mypgm.php",
						data:dataString,
						cache:false,
						success: function(result){
							$("#display").html(result);
						}
					});
				}
				return false;
			});
		});
	</script>
</head>
<body>

<input id="name" type="text" placeholder="your nama here">
<br>
<input id="email" type="text" placeholder="Your Email">
<br>
<input type="button" id="submit" value="submit">
<br>

<h1> Answer </h1>

<div id="display"></div>
</body>
</html>