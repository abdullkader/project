<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <style>
        *{
    scroll-behavior: smooth;
    padding: 0px;
    margin: 0px;
    font-family: Georgia, 'Times New Roman', Times, serif;
    
}
ul{
    list-style-type: none;
}
body{
    /* background: linear-gradient(to bottom, #3d0504, #350000 ,#350000); */
    background: linear-gradient(to bottom, #350000, #350000, #000, #350000);
    /* background-image: url(./ss.jpg); */
    background-size: cover;
}
    .cont{
    border-radius: 20px;
    width: 450px;
    margin: 20px ;
    background-color: #343131;
    padding: 20px;
    box-shadow: 0 0 20px rgb(100, 0, 0);
    }
    #conta{
    padding-top: 150px ;
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
    }
    tbody ,td ,tr{
        text-align: center;
        border: solid 3px black;
        padding: 5px;
        color: gray;
    }
    h3 ,h2{
        color: rgb(180, 50, 50);
    }

    </style>
</head>
<body>
    <div id="conta">
    <center>
        <div class="cont">
    <h2>Dashboard</h2><br>
    <h3>All Users</h3><br>
    <table>
        <thead>
            <td>First Name</td>
            <td>User Name</td>
            <td>Role</td>
        </thead>
        <tbody>
        <?php foreach ($users as $user): ?>
            <tr>
               <td>
                    <?php echo $user['name']; ?><br><br>
               </td> 
               <td>
                     (<?php echo $user['email']; ?>)<br><br>
               </td> 
               <td>
                    <?php echo $user['role']; ?><br><br>
               </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    </div>
    </center>
    </div>
</body>
</html>
