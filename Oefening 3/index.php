<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Oefening 3</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    

        <?php $posts =  [
                    ['Make assignments','6','school'],
                    
                    ['Help neighbour Carl','2','home'],
                    ['Watch a movie','3','home'],
                    ['Buy some food','2','home'],
                    ['Call Herman','1','work']
                    ]; ?>

            <section>
                <?php foreach($posts as list($a, $b, $c)){ ?>
            <div class="post <?php
                        if($b<= 1)
                        {
                         echo "green";
                        }
                        elseif($b <= 5){
                         echo "yellow";
                        }
                        else{
                         echo "red";
                        }
                        
                        
                        ?>">

                        <div class="title">
                        <h4><?php echo $a; ?></h4>
                        <p>Estimated time
                            <?php echo $b; ?> hours</p>
                        </div>
                        <?php 
            
              switch ($c) {
                case "school":
                    ?><img class="label" src="school.png"><?php
                    break;
                case "work":
                    ?><img class="label" src="work.png"><?php
                    break;
                case "home":
                     ?><img class="label" src="home.png"><?php
                    break;
                        }                                   
            
            ?>
                           


                    </div>
                    <?php }?>
            </section>
            
</body>

</html>