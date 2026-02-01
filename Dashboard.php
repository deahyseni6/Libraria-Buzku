<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="Dashboard.css">
</head>
<body>
    <header class="h1" style="height: 90px;">
        <div class="logo">
            <img src="logoo.png" alt="logo" height="65px">
        </div>

        <ul>
            <li><a href="index.php">Home</a></li>
            <div class="dropdown">
                <button class="drop" style="font-family: garamond;"><a href="Books.php" style="text-decoration: none; color: rgb(211, 178, 95);">Books</a></button>
                <div class="content">
                    <a href="Books.php#sh">Shqip</a>
                    <a href="Books.php#f">Femije</a>
                    <a href="Books.php#fj">Fjalore</a>
                    <a href="Books.php#shk">Shkollore</a>
                    <a href="Books.php#kl">Klasike</a>
                    <a href="Books.php#th">Thriller</a>
                    <a href="Books.php#r">Romance</a>
                    <a href="Books.php#h">Horror</a>
                    <a href="Books.php#dr">Drama</a>
                    <a href="Books.php#sc">Shkence</a>
                    <a href="Books.php#m">Muzike</a>
                    <a href="Books.php#c">Comics</a>
                </div>
            </div>
            <li><a href="aboutus.php">About Us</a></li>
            <li><a href="News.php" style="margin-left: -4px; margin-right: 5px;">News</a></li>
            <li><a href="#top" style="margin-left: -10px;">Dashboard</a></li>
            <button class="b"><a style="text-decoration: none; color: black;" href="LogIn.php">Log In</a></button>
            <li>/</li>
            <button class="b"><a style="text-decoration: none; color: black;" href="SignUp.php">Sign Up</a></button>
        </ul>
    </header>
    
    <main>
        <h2>User Dashboard</h2>
        <table border="1" class="tabela">
            <tr>
                <th>Name</th>
                <th>Surname</th>
                <th>Email</th>
                <th>Username</th>
                <th>Password</th>
                <th>Role</th>
            </tr>
                
            <?php
            include 'Users.php';
        
            foreach ($users as $user):
            ?>
            <tr>
                <td><?php echo $user["name"]; ?></td>
                <td><?php echo $user["surname"]; ?></td>
                <td><?php echo $user["email"]; ?></td>
                <td><?php echo $user["username"]; ?></td>
                <td><?php echo $user["password"]; ?></td>
                <td><?php echo $user["role"]; ?></td>
            </tr>
            
            <?php
            endforeach;
            ?>
        </table>
    </main>
</body>
</html>