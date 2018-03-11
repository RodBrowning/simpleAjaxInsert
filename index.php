<!DOCTYPE html>
<html>
<head>
	<title>php</title>
</head>
<body>
			<label>nome</label>
			<input id="nome" type="text" >
			<label>email</label>
			<input id="email" type="email" >
	<a href="#" onclick="ajaxFunction()">add</a>

	<div id="div"></div>

	<script type="text/javascript">
		function ajaxFunction(){
			var nome = document.getElementById('nome').value;
			var email = document.getElementById('email').value;
			var xmlhttp = new XMLHttpRequest();

			xmlhttp.onreadystatechange = function(){
					if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
						
						var div = document.getElementById('div');
						div.innerHTML = xmlhttp.responseText;
					}
			}
			xmlhttp.open('GET',`insert.php?nome=${nome}&email=${email}`,true);
			xmlhttp.send();
		}
	</script>
</body>
</html>