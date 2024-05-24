<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>
    <style>
 *{
    scroll-behavior: smooth;
    padding: 0px;
    margin: 0px;
    font-family: Georgia, 'Times New Roman', Times, serif;
    
}
.aa{
    color: rgb(166, 60, 60);
    text-decoration: none;
}
.conta{
    padding-top: 100px ;
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
}
.cont{
    border-radius: 20px;
    width: 400px;
    margin: 20px ;
    background-color: #343131;
    padding: 20px;
    box-shadow: 0 0 20px rgb(220, 0, 0);
}
body{
    /* background: linear-gradient(to bottom, #3d0504, #350000 ,#350000); */
    background: linear-gradient(to bottom, #350000, #350000, #000, #350000);
    /* background-image: url(./ss.jpg); */
    background-size: cover;
}
label{
    font-size: large;
    text-align: left;
    color: rgb(166, 60, 60);
}
h2{
    margin: 6px;
    font-size: x-large;
    text-align: center;
    color: rgb(164, 49, 49);
}
.submit{
    padding: 3px;
    margin: 15px;
    font-size: large;
    text-align: center;
    color: rgb(166, 60, 60);
    border-radius: 5px;
    background-color: #343131;
}
.input{
    color: white;
    background-color: #343131;
    border-radius: 5px;
    margin: 10px;
    padding: 4px;
    width: 200px;
}
legend {
    background-color:#343131;
    padding: 5px 10px;
    
  }
fieldset{
    border-radius: 15px;
    color: #3d0504;
    background-color: #343131;
    box-shadow: 0 0 20px rgb(120, 0, 0);
}
ul{
    list-style-type: none;
    color: white;

}
#conta{
    padding-top: 150px ;
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
}

    </style>
</head>
<body>
<div id="conta">
        <center>
     <div class="cont">
     <fieldset>
    <legend><h2>Sign Up</h2></legend>
    <?php if (!empty($error)) echo "<p>$error</p>"; ?>
    <form method="post">
        <label for="name">Name:</label><br> 
        <input type="text" name="name" required class="input"><br>
        <label for="email">Email:</label><br> 
        <input type="email" name="email" required class="input"><br>
        <label for="password">Password:</label><br> 
        <input type="password" name="password" required class="input"><br>
        <input type="submit" value="            Sign Up         " class="submit">
        <p><a href="/login" class="aa">Login</a></p><br>
    </form>
    </fieldset>
     </div>
        </center>
</div>
</body>
</html>
