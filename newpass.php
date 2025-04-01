

<html>
<head>
    <style>
        *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
body{
  background-image: url("main.jpeg");
  background-attachment: fixed;
  background-size: cover;
  background-repeat: no-repeat;
  font-family:sans-serif;
}
.p_name img{
width: 80px;
height: 80px;
margin-left: 500px;
margin-right: 25px;
float: left;
}
.p_name{
display: inline;
}
.p_name h1{
  margin-top: 60px;
  font-size: 50px;
  font-family:cursive;
  margin-left: 10px;
  /* text-align: center; */
  color: rgb(255, 136, 0);
}
button{
    background-color: red;
  color: white;
  padding: 14px 20px;
  border-radius: 5px;
  margin: 7px 0;
  width: 50%;
  font-size: 18px;
  opacity: 100%;
}
input[type=text],[type=password],[type=password]{
  background-color:white ;
  color: black;
  padding: 14px 20px;
  border-radius: 5px;
  margin: 7px 0;
  width: 100%;
  font-size: 18px;
  opacity: 100%;   
}



form{
  width:30rem;
  /* margin: 110px 500px; */
  display: flex;
  justify-content: center;
  align-items: center;
  color:white;
  border-radius: 22px;
  /* border: 1px solid rgba(255, 255, 255, 0.125); */
  width: 100vw;
  height: 80vh;
  margin: 0;
  padding: 0;
}


button:hover {
  opacity: 0.6;
  background-color: red;
  cursor: pointer;
}

.heading{
  font-family: cursive;
  text-align: center;
  color: greenyellow;
  font-size: 1.5rem;
  margin-top: 20px;
}

.Container1{
  padding: 16px;
  text-align: center;
}



.fade{
  background-color: rgba(54, 63, 63, 0.7);
  height: auto;
  width: 480px;
  border-radius: 20px;
}  
    </style>
</head>
<body>
<div class="main">
        <div class="main_image">
            <div class="p_name">
                <img src="symbol.jpg"></img>
                    <h1>Yp's Restroo</h1>
            </div>
            <center>
            
                <form action="updatepass.php" method="post">
                  <div class="fade">
                     
                    <div class="heading">
                        <h3>Forgot Password</h3>
                    </div>
            
                    <!-- Main container for all inputs -->
                    <div class="Container1">
                    Name: <input type="text" name="admin" placeholder="Enter your name"></br></br>
					New Password: <input type="password" name="npass" placeholder="Enter your new password">
					<br><br>
					Confirm Password: <input type="password" name="cpass" placeholder="Enter your new password">
					<br><br>
					<button type="submit" name="submit">submit</button> 
                    </div>
                 </div> 
                </form>
            
            </center>
        </div>
</div> 
</body>
</html>