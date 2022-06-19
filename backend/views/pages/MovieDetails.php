<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="../static/css/staticThemeConfigs.css"> -->
    <link rel="stylesheet" href="../static/css/styles.css">
    <title>Movie Details</title>
    <link rel="icon" href="../static/img/favicon.ico">
</head>
<body>
    <div class="display-port">
        <div class="left-bar">LEFTBAR</div>
        <div class="center">
            <br>
            <div class="trailer">
                <h1>Movie Trailer</h1>
            </div>
            <table>
                <tr>
                    <td class='poster'>
                        <?php
                            $name = strtolower($result['name']);
                            echo "
                                <img src='../static/img/newMovies/$name.jpg' height='400' alt='$name' title='$name'>                          
                                ";
                        ?>
                    </td>
                    
                    <td class="details">
                        <h1>Movie Details</h1>
                        <br>
                        <ul class="list">
                            <li>Name: <?php
                                echo $result['name'];
                            ?></li>
                            <li>Description:<?php
                                echo $result['description'];
                            ?></li>
                            <li>Genre:<?php
                                echo $result['genre'];
                            ?></li>
                            <li>Duration:<?php
                                echo $result['duration'];
                            ?></li>
                            <li>Origin<?php
                                echo $result['origin'];
                            ?>:</li>
                            <li>Release Date:<?php
                                echo $result['year'];
                            ?></li>
                            <li>Cast:<?php
                                echo $result['cast'];
                            ?></li>
                        </ul>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>
        
