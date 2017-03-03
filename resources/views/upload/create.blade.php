<!DOCTYPE html>
<html>
<head>
	<title>File Upload</title>
	<style>
		html,body{
			height: 100%;
		}
		body{
			display: flex;
			justify-content: center;
			align-items: center;
		}
	</style>
</head>
<body>
	<form action="/upload" method="POST" enctype="multipart/form-data">
	{{ csrf_field() }}
		<input type="file" id="file" name="image" >
		<button type="submit"> Enviar </button>
	</form>
	<p>
	 <img src='images/tZ0F5t38Yt.png' alt=""> 
	</p>
</body>
</html>