<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .forme >div{ 
        display:flex;
        border: 2px solid green;
        border-radius: 2px;
    padding :2rem;
    }
    .
    .forme{
        border: 2px solid green;
        border-radius: 2px ;
    }

</style>
<body>
    <div class ="forme">
        <div class ="forme1">
          <div>Nom:</div> <div> <?php echo $_POST["firstname"];?></div>
        </div>
        <div class ="forme1">
          <div>Prenom:</div> <div> <?php echo $_POST["lastname"];?></div>
        </div>
        <div class ="forme1">
          <div>Country :</div><div> <?php echo $_POST["country"];?></div>
        </div>
        
        <div class ="forme1">
          <div>subject :</div> <div> <?php echo $_POST["subject"];?></div>
        </div>
        </div>
</body>
</html>