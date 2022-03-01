<?php 
   include  './data.php';
?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>

<body>
    <header>
        <div class="container d-flex justify-content-between align-items-center">
            <figure>
                <img class="h-100 p-2" src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/19/Spotify_logo_without_text.svg/768px-Spotify_logo_without_text.svg.png" alt="Spotify Logo" />
            </figure>
        </div>
    </header>
    <main class="container box-card d-flex justify-content-center flex-wrap my-3">
        <div class="row">
            <?php foreach ($albums as $album) { ?>
                <div class="album-card col-6 col-md-3 col-lg-2 text-center shadow">
                    <figure>
                        <img class="img-fluid p-3" src="<?php echo $album['poster'] ?>" alt="" />
                    </figure>
                    <h5><?php echo $album['title'] ?></h5>
    
                    <span class="autore"><?php echo $album['author'] ?></span><br />
                    <data class="anno"><?php echo $album['year'] ?></data>
    
                </div>
            <?php } ?>
        </div>
    </main>


</body>

</html>