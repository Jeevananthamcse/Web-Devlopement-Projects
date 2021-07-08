<html>  
<head> 
<style>
.button {
  background-color: #ffaa00; /* Green */
  border: none;
  color: white;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.button2 {background-color:#ffaa00;} /* Blue */
a:link, a:visited {
  background-color: DodgerBlue;
  color: white;
  padding: 8px 12px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active {
  background-color: Tomato;
}
</style>
    <title>login</title>  
    <link rel = "stylesheet" type = "text/css" href = "style.css">   
</head>  
<body>  
	<style>
body {
  background-image: url('e.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
</style>
<center>
		
		<h1 style=>Muthayammal Polytechnic Institution</h1>
		<hr>
		<h2> CSE DEPARTMENT EVENT</h2>
		<hr>
		</center>

    <div id = "frm">  
        <h1>Login</h1>  
        <form name="f1" action = "loginsart.php"  method = "POST">  
            <p>  
                <label> UserName: </label>  
					&nbsp;
						&nbsp;
                <input type = "text" id ="user" name  = "user"  required />  
            </p>  
            <p>  
                <label> Password: </label>  
				&nbsp;
					&nbsp;
					&nbsp;
                <input type = "password" id ="pass" name  = "pass"   required />  
            </p>  
            <p>     
                <input type =  "submit" id = "btn" value = "Login" />  
				
            </p>  
			
			
			<p>If you don't have a account</p>
			<p>     
			<a href="sign.php" target="_blank">SIGN UP</a>
            </p> 
        </form>  
    </div>  
    <script>  
            function validation()  
            {  
                var id=document.f1.user.value;  
                var ps=document.f1.pass.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  
        </script>  
</body>     
</html>  