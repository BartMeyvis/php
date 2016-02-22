<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Oefening 1</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
   <?php include 'header.php'; ?>
   
    <?php $posts =  [
                    ['profile_1.jpg','Gilbert','Brooklyn, NY','brooklyn.jpg'],
                    ['profile_2.jpg','Herman','New York, NY',''],
                    ['profile_3.jpg','Dirk','South of market, San Fransisco','']
                    ]; ?>
                    
    <section>
       <?php foreach($posts as list($a, $b, $c, $d)){ ?>
        <div class="post">
            
            <img class="profile_img" src="<?php echo $a ?>">
            <h4><?php echo $b; ?></h4>
            <p><?php echo $c; ?></p>
            
            <?php if(empty($d)==false){?>
            <img class="post_img" src="<?php echo $d; ?>">
            <?php }else{echo "<br>";} ?>
            
        </div>
        <?php }?>
    </section>
    <?php include 'footer.php'; ?>
</body>
</html>