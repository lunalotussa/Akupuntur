<style type="text/css">
body{
  font-family: 'Open Sans', sans-serif;
  background:#3498DB;
  margin: 0 auto 0 auto;  
  width:100%; 
  text-align:center;
  margin: 200px 0px 20px 0px;   
}

p{
  font-size:12px;
  text-decoration: none;
  color:#ffffff;
}

h1{
  font-size:1.5em;
  color:#525252;
}

.box{
  background:white;
  width:300px;
  border-radius:6px;
  margin: 0 auto 0 auto;
  padding:0px 0px 70px 0px;
  border: #000000 4px solid; 
}

.email{
  background:#ecf0f1;
  border: #ccc 1px solid;
  border-bottom: #ccc 2px solid;
  padding: 8px;
  width:250px;
  color:#AAAAAA;
  margin-top:10px;
  font-size:1em;
  border-radius:4px;
}

.password{
  border-radius:4px;
  background:#ecf0f1;
  border: #ccc 1px solid;
  padding: 8px;
  width:250px;
  font-size:1em;
}

.btn{
  background:#3498DB;
  width:125px;
  padding-top:5px;
  padding-bottom:5px;
  color:white;
  border-radius:4px;
  border: #000000 3px solid;
  
  margin-top:20px;
  margin-bottom:20px;
  float:center;
  margin-left:16px;
  font-weight:800;
  font-size:0.8em;
  text-align:center;
}

.btn:hover{
  background:#000000; 
}

</style>
<!DOCTYPE html>
<html>
<head>
  <title>Akupuntur</title>
</head>
<body>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:700,600' rel='stylesheet' type='text/css'>
<!--  -->
<form form action="<?=base_url();?>" method="POST">
<div class="box">
<h1>SIGN IN</h1>

<input type="text" name="email" placeholder="Email" class="email" />
  
<input type="password" name="password" placeholder="Password" class="email" />
  
<input type="submit" class="btn" value="Sign In" name="login"><br>
<a href="<?php echo site_url('main/register');?>"><font size="2" color="#000000">Don't have an account? Click here to Sign Up</font></a>
</div> <!-- End Box -->
</form>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js" type="text/javascript"></script>
</body>
</html>
<!-- <script type="text/javascript">
  function field_focus(field, email)
  {
    if(field.value == email)
    {
      field.value = '';
    }
  }

  function field_blur(field, email)
  {
    if(field.value == '')
    {
      field.value = email;
    }
  }

//Fade in dashboard box
$(document).ready(function(){
    $('.box').hide().fadeIn(1000);
    });

//Stop click event
$('a').click(function(event){
    event.preventDefault(); 
  });
</script> -->