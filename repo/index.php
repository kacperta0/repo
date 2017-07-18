<!DOCTYPE HTML>

<html lang = "pl">

<head>
<meta charset = "utf-8">
<link rel = "stylesheet" href="orderstyle.css" type="text/css">

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>





</head>

<body>

   
   

    <div id="logo">
	
 

	
	
	</div>
	<div id="container">

		<form>
			
			
			<center><input type="text" placeholder="Login" onfocus="this.placeholder=''" onblur="this.placeholder='login'" ></center>
			
			<center><input type="password" placeholder="Hasło" onfocus="this.placeholder=''" onblur="this.placeholder='login'" ></center>
			<br/><br/><br/><br/>

			
			<center><input type="submit" value="Zaloguj się"></center>
			<center><input type="submit" value="Rejestracja konta"></center>
			
			<center><input type="submit" value="Zamów bez logowania"></center>
			
		</form>
		
		

<!-- The Modal -->
<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" 
class="close" title="Close Modal">&times;</span>

  <!-- Modal Content -->
  <form class="modal-content animate" action="/action_page.php">
    <div class="imgcontainer">
      <img src="" alt="Avatar" class="avatar">
	  
    </div>
  </form>
</div>
		
		
		</div>

	
	




</body>




</html>