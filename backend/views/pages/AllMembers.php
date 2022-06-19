<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="../static/css/staticThemeConfigs.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../static/css/styles.css">
    <title>All Members</title>
    <link rel="icon" href="../static/img/favicon.ico">
</head>
<body>
    <div class="display-port">
        <div class="left-bar">LEFTBAR</div>
        <div class="center">
            <?php

            for($i = 0;$i<count($result); $i++){
                $row = $result[$i];
                $username = $row['Username']; 
                $id = $row['ID'];
                $email = $row['Email'];
                echo "
                    <div class='card' style='width: 18rem;' >
                    <div class='row'>
                        <div class='cd col-lg-6'>
                            <img class='ci' src='../static/img/members/$username.jpg' >
                        </div>
                        <div class='col-lg-6'>
                            <div class='card-body'>
                                <h5 class='card-title'>$username</h5>
                                <p>$email</p>
                            </div>
                        </div>
                        </div>
                        <a href='/member/$id' class='btn btn-danger'>View</a>
                    </div>
                
                ";
            }
            
            ?>
            
            
        </div>
    </div>

</body>
</html>