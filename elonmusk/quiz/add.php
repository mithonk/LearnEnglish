<?php include'database.php';?>
 <?php 
if(isset($_POST['submit'])){
    //echo "submit was click";
    $question_number=$_POST['question_number'];
     $question_text=$_POST['question_text'];
    $choices=array();
    $choices[0]= $_POST['choice1'];
     $choices[1]= $_POST['choice2'];
     $choices[2]= $_POST['choice3'];
    
    
    //question
    $query="insert into  question (question_number,text) values ('question_number','question_text')";
    
    $insert_row=$mysqli->query($query) or die($mysqli->error);
    
    if($insert_row){
        foreach($choices as $choice => $value){
            if($value !=''){
                if($correct_choice == $choices){
                    $is_correct=1;
                }else{
                    $is_correct=0;
                }
                $query ="insert into choices (question_number.is_correct,text) values ('question_number','is_correct','text')";
                
                $insert_row =$mysqli->query($query) or die($mysqli->error);
                
                if($insert_row){
                    continue;
                }else{
                    //die('error:('.$mysqli->error.')'.$mysql->error);
                }
            }
            
        }
        $msg="question was added";
    }
}
$query="select * from question";
$question=$mysqli->query($query) or die($mysqli->error);
$total=$question->num_rows;
$next=$total+1;
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
           <h2>Add A question</h2>
            <?php 
            //echo $msg;
            ?>
            <form method="post" action="add.php">
            <p>
               <label>Qustion number</label> 
                <input type="number" name="question_number" value="<?php echo $next ; ?>"/>
              </p> 
                 <p>
               <label>Qustion Text</label> 
                <input type="text" name="question_text"/>
              </p> 
                 <p>
               <label>Choice #1:</label> 
                <input type="text" name="choice1"/>
              </p> 
                  <p>
               <label>Choice #2:</label> 
                <input type="text" name="choice2"/>
              </p> 
                  <p>
               <label>Choice #3:</label> 
                <input type="text" name="choice3"/>
              </p> 
                  
                 <p>
               <label>Correct Choice number:</label> 
                <input type="number" name="correct_choice"/>
              </p> 
            <p>
                
                <input type="submit" name="submit" value="submit"/>
                </p>
            </form>
            </div>
        
        </main>
    </body>

</html>