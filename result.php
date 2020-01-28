<html>
 
<head>
	<meta charset="UTF-8" />
	
	<title>PHP Quiz</title>
	
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>
 
<body>
 
	<div id="page-wrap">
 
		<h1>Result</h1>
		
        <?php
            
            $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question-3-answers'];
            $answer4 = $_POST['question-4-answers'];

     
        
        
            $totalCorrect = 0;
            
            if ($answer1 == "D")
             {
            $totalCorrect++; 
            echo "Hur länge finns något i GLOBALS variabel i Php? </br>";
            echo  "Rätt </br>" ; 
            }else{
            echo "Hur länge finns något i GLOBALS variabel i Php? </br>";
            echo  "Fell </br>" ; 
            }
            if ($answer2 == "C") 
            {
            $totalCorrect++;
            echo "Vad är _POST och _GET ? </br>";
            echo  " Rätt </br>";
            }else{
            echo "Vad är _POST och _GET ? </br>";
            echo  "Fell </br>" ; 
            }
            
            if ($answer3 == "B")
            {
            $totalCorrect++;
            echo "PHP is a.... </br>";
            echo " Rätt </br>";
            }else{
            echo "PHP is a.... </br>";
            echo  "Fell </br>" ; 
            }
           
            if ($answer4 == "B")
            { 
            $totalCorrect++; 
            echo "Vad är en cookie ?</br>";
            echo  " Rätt </br>";
            }else{
            echo "Vad är en cookie ?</br>";
            echo  "Fell </br>" ; 
            }
            
           
            
            echo "<div id='results'>$totalCorrect / 4 correct</div>";
            
        ?>
	
	</div>
 
</body>
 
</html>