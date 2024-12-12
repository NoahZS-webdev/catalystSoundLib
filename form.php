<!DOCTYPE html>
<html lang="en">

<head>
    <!--Developed by Noah Sisson and Nathan Porter-->
    <title>Catalyst Sound Library</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/uploadStyles.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://use.typekit.net/sxb6bat.css">
    <script src="https://kit.fontawesome.com/e1899d146a.js" crossorigin="anonymous"></script>

</head>

<body>
    <!--
    *'flexContainerNav' is the flex container class for the nav bar
    *'flexNav' is the class for the flex items in 'flexContainerNav'
    *'flexHeader' is the class for the flebox item spesifically for the logo and another flexbox withing the first ont to contain flexnav
    -->
    <div class="topBox">
    <div class="flexContainerNav">

        <div class="btn"><a href="index.html"><i class="fa-solid fa-house"></i></a></div>

        <!-- Section for the search bar -->
        <div class="flexSearch">
                <input type="search" id="search" name="search" value="What are you looking for?">
        </div>


        <div class="flexHeader">
            <!--upload button-->
            <div class="btn" style="margin-left: 0px;"><a href="uploadGate.html"><i class="fa-solid fa-upload"></i></a></div>
            <!--User button-->
            <div class="btn"><a href="#"><i class="fa-solid fa-user"></i></a></div>
            <!--library button it currently has no planned use FIX LATER-->
            <div class="btn" style="margin-right: 100px"><a href="#"><i class="fa-solid fa-book-open"></i></a></div>
        </div>
    </div>

    <img src="media/visualizerMOD.png" class="bannerImg">
    </div>

    <section class="mainSect">
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <div class="surface">
        
            <div class="subSurface">
                <div class="dropBox">
                    <div class="bigIcon"><i class="fa-solid fa-upload"></i></div>

                </div>
            </div>

            <div class="subSurface">
                
                <div class="options">
                    <label for="sName">Sound Name</label><br>
                    <input type="text" name="sName"><br><br>

                    <label for="author">Creator Name</label><br>
                    <input type="text" name="author"><br><br>

                    <label for="fileType">File Type</label><br>

                    <input type="radio" id="mp3" name="fileType" value="mp3">
                    <label for="mp3">mp3</label><br>
                    <input type="radio" id="wav" name="fileType" value="WAV">
                    <label for="wav">WAV</label><br>
                    
                    <button type="submit">DONE!</button>

                </div>
            </div>
        
        </div>
    </form>
    </section>

    <?php

    // define vars and set to empty
    $sName = $author = $fileType = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $sName = test_input($_POST["sName"]);
        $author = 
    }
    
    
    ?>





</body>
</html>