<?php include'database.php' ?>
<?php
    session_start();
    //set question number
    $number=(int) $_GET['n'];
$query="select*from question where question_number=$number";
$result = $mysqli->query($query);
$question=$result->fetch_assoc();

$query="select*from choices where question_number=$number";
$choices = $mysqli->query($query);

$query="select * from question";
     $result=$mysqli->query($query);
    $total=$result->num_rows;
?>
<html>
    <head>
    <link rel="stylesheet" href="CSS/style.css">
    </head>
    <body>
        <header>
            <div class="container">
            
             <h2>Quize</h2>
             <a href="../index.php">Home</a>
            </div>
        
        </header>
   
        <main>
       <div class="container">
            
            <div class="current">Question <?php echo $question['question_number'];?>of <?php echo $total;?></div>
           <p class="question">
               <?php echo $question['text']; ?>
           </p>
           <form method="post" action="process.php">
           <ul>
               <?php while($row= $choices->fetch_assoc()){ ?>
               
              
               <li class="choices"><input name="choice" type="radio" value="<?php echo $row['id'];?>"/><?php echo $row['text']; ?></li>
                
            <?php } ?>
               </ul>
               <input type="submit" value="submit"/>
               <input type="hidden" name="number" value="<?php echo $number; ?> "/>
                      
           </form>
            </div>
        
        </main>
    </body>

</html>