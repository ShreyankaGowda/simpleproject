<?php 
   session_start();

   include("config.php");
   if(!isset($_SESSION['valid'])){
    header("Location: index.php");
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@24,400,0,0" />
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQq7Ml8WsgGqyGaoXtaq3x79xM93oZb7wzg==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <header>
      <div class="top">
        <div class="logo">
          <h1><span class="material-symbols-sharp">favorite</span><b>NOTE</b><span class="danger">BAR</span></span></h1>
        </div>
      </div>
    </header>
    
    <div class="Container">

        <!-- aside section starts -->
        <aside>
          <div class="sidebar">
            <a href="#" class="active">
              <span class="material-symbols-sharp">Account_Circle</span>
              <h3>My Account</h3>
            </a>

            <a href="#">
              <span class="material-symbols-sharp">grid_view</span>
              <h3>Dashboard</h3>
            </a>
        
            <a href="#">
              <span class="material-symbols-sharp">upload</span>
              <h3 onclick="x()">Upload Image</h3>
            </a>
        

            <a href="#">
              <span class="material-symbols-sharp">message</span>
              <h3>Message</h3>
            </a>

            <a href="#">
              <span class="material-symbols-sharp">settings</span>
              <h3>Settings</h3>
            </a>

            <a href="#">
              <span class="material-symbols-sharp">feedback</span>
              <h3>Feedback</h3>
            </a>


            <a href="logout.php">
              <span class="material-symbols-sharp">logout</span>
              <h3 onclick="z()">Log Out</h3>
            </a>

          </div>


        </aside>
        <!-- aside section ends -->

        <!-- Main section starts -->
        <main>

          <!-- nav bar -->
          <header>
            <div class="header-content">
            <form action="https:www.google.com" class="search-bar">
              <div id="search">
              <input type="search" name="search">
                <span class="material-symbols-sharp">Search</span>
            </div>
            </form>
        
              <div class="bell-icon">
                <span class="material-symbols-sharp">notifications</span>
              </div>
              <div>
                <a href="profile.php">
              <div class="profile-pic">
                <img src="images.png" alt="Profile Picture">
              <h3 style="color: black;"><b>Profile</b></h3>
            </div>
          </div>
                </a>
          <div>
          <?php 
            $id = $_SESSION['id'];
            $query = mysqli_query($con,"SELECT*FROM users WHERE Id=$id");

            while($result = mysqli_fetch_assoc($query)){
                $res_Uname = $result['username'];
                $res_Email = $result['email'];
                $res_Age = $result['age'];
                $res_id = $result['id'];
            }
            
            // echo "<a href='edit.php?Id=$res_id'>Change Profile</a>";
            ?>
           <a href='edit.php?Id=$res_id'><button id="button">Change Profile</button></a>
            </div>
          </header>


             <!-- to do lists -->
             <div class="insights">
                <div class="todo-app">
                    <h2>To-Do List<img src="todo icon.png"></h2>
                    <div class="row">
                        <input type="text" id="input-box" placeholder="Add your text">
                        <button onclick="addTask()">Add</button>
                    </div>
                    <ul id="list-container">
                    </ul>
                </div>
            </div>
            
        </main>
    
        <!-- main section ends -->

    </div>

      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright &copy; Your Website 2021</span>
            </div>
        </div>
    </footer>
    
    <script src="script.js"></script>
//         <?php
//       session_start();
//       session_destroy();
//       header("Location: ../index.php");
// ?>

    
   

  </body>
</html>