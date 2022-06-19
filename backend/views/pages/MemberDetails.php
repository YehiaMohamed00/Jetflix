<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orelega+One&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="../static/css/staticThemeConfigs.css"> -->
    <link rel="stylesheet" href="../static/css/styles.css">
    <link rel="icon" href="../static/img/favicon.ico">
    <title>Member details</title>
</head>
<body>
    <div class="display-port">
        <div class="left-bar">LEFTBAR</div>
        <div class="center">
            <div class="container">
                <div class="row">
                  <div class="col-lg-4">
                    <div class="card member_details_card">
                        <?php 
                        $username = $result['username'];
                        echo "<img class='member_picture' src='../static/img/members/$username.jpg' >";
                        ?>
                        
                        <div class="card-body member_details">
   
                            <h4>Email:</h4>
                            <p><?php echo $result['email']; ?></p>

                            <h4>Username:</h4>
                            <p><?php echo $result['username']; ?></p>
    
                        </div>
                    </div>
                  </div>
                  <div class="col-lg-8">
                    
                    <a onclick="scrollR(1)"><i class="fa-solid fa-circle-chevron-right mt-4" style="color:red; font-size:x-large; float:right; margin-left:5px;" ></i></a>
                    <a onclick="scrollL(1)"><i class="fa-solid fa-circle-chevron-left  mt-4" style="color:red; font-size:x-large; float:right;"></i></a>
                    <h2 class="mt-3" style="color: #ffffff;">Favorites</h2>
            
                    <div class="h_scrollFis ">
                        <div><img class="movie_poster" src="../static/img/newMovies/batman.jpg" alt="" width="150" height="200"></div>
                        <div><img class="movie_poster" src="../static/img/newMovies/ambulance.jpg" alt="" width="150" height="200"></div>
                        <div><img class="movie_poster" src="../static/img/newMovies/ambulance.jpg" alt="" width="150" height="200"></div>
                        <div><img class="movie_poster" src="../static/img/newMovies/ambulance.jpg" alt="" width="150" height="200"></div>
                        <div><img class="movie_poster" src="../static/img/newMovies/ambulance.jpg" alt="" width="150" height="200"></div>
                        <div><img class="movie_poster" src="../static/img/newMovies/ambulance.jpg" alt="" width="150" height="200"></div>
                        <div><img class="movie_poster" src="../static/img/newMovies/ambulance.jpg" alt="" width="150" height="200"></div>
                        <div><img class="movie_poster" src="../static/img/newMovies/ambulance.jpg" alt="" width="150" height="200"></div>
                        <div><img class="movie_poster" src="../static/img/newMovies/ambulance.jpg" alt="" width="150" height="200"></div>
                        <div><img class="movie_poster" src="../static/img/newMovies/ambulance.jpg" alt="" width="150" height="200"></div>
                    </div>

                    <a onclick="scrollR(2)"><i class="fa-solid fa-circle-chevron-right mt-4" style="color:red; font-size:x-large; float:right; margin-left:5px;" ></i></a>
                    <a onclick="scrollL(2)"><i class="fa-solid fa-circle-chevron-left  mt-4" style="color:red; font-size:x-large; float:right;"></i></a>
                    <h2 class="mt-3" style="color: #ffffff;">Watchlist</h2>
        
                    <div class="h_scrollSec mb-3">
                        <div><img class="movie_poster" src="../static/img/newMovies/batman.jpg" alt="" width="150" height="200"></div>
                        <div><img class="movie_poster" src="../static/img/newMovies/ambulance.jpg" alt="" width="150" height="200"></div>
                        <div><img class="movie_poster" src="../static/img/newMovies/ambulance.jpg" alt="" width="150" height="200"></div>
                        <div><img class="movie_poster" src="../static/img/newMovies/ambulance.jpg" alt="" width="150" height="200"></div>
                        <div><img class="movie_poster" src="../static/img/newMovies/ambulance.jpg" alt="" width="150" height="200"></div>
                        <div><img class="movie_poster" src="../static/img/newMovies/ambulance.jpg" alt="" width="150" height="200"></div>
                        <div><img class="movie_poster" src="../static/img/newMovies/ambulance.jpg" alt="" width="150" height="200"></div>
                        <div><img class="movie_poster" src="../static/img/newMovies/ambulance.jpg" alt="" width="150" height="200"></div>
                        <div><img class="movie_poster" src="../static/img/newMovies/ambulance.jpg" alt="" width="150" height="200"></div>
                        <div><img class="movie_poster" src="../static/img/newMovies/ambulance.jpg" alt="" width="150" height="200"></div>
                    </div>

                  </div>
                </div>
            </div>
        </div>
    </div>
    

    <script src="../static/js/moviesScroll.js"></script>
    <script src="https://kit.fontawesome.com/4f652f8988.js" crossorigin="anonymous"></script>
</body>
</html>