<?php
   include('session.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
  <!--
	<style type="text/css">
    #event1{
    	display: none;
    }

    #event2{
    	display: none;
    }

	form {
        max-width:300px;
        min-width:250px;
        padding:10px 50px;
        border:2px solid gray;
        border-radius:10px;
        font-family:raleway;
        background-color:#fff
}
	</style>
  -->
</head>
<body>
      <h1>Welcome <?php echo $login_session; ?></h1>
      <!--
      <h1>EVENT LIST</h1>

      <h3>Azap</h3>
      <p>team event</p>
      <br>
      <button onclick="div_show()">Popup</button>
      <div id="event1">
      <p onclick ="div_hide()">click here to close</p>
      	<form action="eventreg.php" method="POST">
      		<p>click submit to register for Adzap</p>
      		<input type="submit" value="Submit">
      	</form>
      </div>

      <h3>Dance</h3>
      <p>solo event</p>
      <br>
      <button onclick="div_show2()">Popup</button>
      <div id="event2">
      <p onclick ="div_hide2()">click here to close</p>
      	<form action="eventreg2.php" method="POST">
      		<p>click submit to register for Dance</p>
      		<input type="submit" value="Submit">
      	</form>
      </div>
-->
      <h4><a href = "profile.php">Profile</a></h4> 
      <h4><a href = "logout.php">Sign Out</a></h4>
      <script type="text/javascript">

      history.pushState(null, null, document.title);
        window.addEventListener('popstate', function () {
          history.pushState(null, null, document.title);
        });
      	function div_show() {
            document.getElementById("event1").style.display = "block";
        }
        function div_hide(){
            document.getElementById("event1").style.display = "none";
        }
      	function div_show2() {
            document.getElementById("event2").style.display = "block";
        }
        function div_hide2(){
            document.getElementById("event2").style.display = "none";
        }        
      </script>
</body>
</html>