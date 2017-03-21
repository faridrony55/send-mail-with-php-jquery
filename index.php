<!DOCTYPE html>
<html lang="en">
  	<head>
    	<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1"> 
    	<title>email</title>
    	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet"> 
    	<link href="css/bootstrap.min.css" rel="stylesheet">  
  	</head>
	<body>
    

 
<section id="contact-form" class="pad">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3">
				<form action="value" id="form">
					<div class="form-group">
						<input type="text" id="name"   class="form-control" placeholder="your name">
					</div>
					<div class="form-group">
						<input type="email" id="email"   class="form-control" placeholder="your email">
					</div>
					<div class="form-group">
						<input type="button" id="send" class="btn btn-danger" value="submit">
					</div>

                     <p id="returnmessage"></p>
				</form>
			</div>
		</div>
	</div>
</section>


 
    <script src="js/jquery.min.js"></script>  

    	<script>
    		$(function(){
    			$("#send").click(function(){
    				var name = $("#name").val();
    				var email = $("#email").val(); 

					$("#returnmessage").empty(); 

    				$.post("send-info.php",{
    					name1:name,email1:email
    				},
    				function(data){
    					$("#returnmessage").append(data);
    					if(data=="message has been sent"){
    						$("#form")[0].reset();
    					} 
    				});
    			});
    		});
 
    	</script>
	</body>
</html>


