<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Play Geography Quiz</title>

</head>
<body>

<div id="container">
	<h1>Play the Quiz!</h1>
    
    <form method="post" action="<?php echo base_url();?>index.php/Questions/resultdisplay">
       
    
    <?php foreach($questions as $row) { ?>
    
    <?php $ans_array = array($row->choice1, $row->choice2, $row->choice3, $row->answer);
	shuffle($ans_array); ?>
    
    <p><?=$row->quizID?>.<?=$row->question?></p>
    
    <input type="radio" name="quizid<?=$row->quizID?>" value="<?=$ans_array[0]?>" required> <?=$ans_array[0]?><br>
    <input type="radio" name="quizid<?=$row->quizID?>" value="<?=$ans_array[1]?>"> <?=$ans_array[1]?><br>
    <input type="radio" name="quizid<?=$row->quizID?>" value="<?=$ans_array[2]?>"> <?=$ans_array[2]?><br>
    <input type="radio" name="quizid<?=$row->quizID?>" value="<?=$ans_array[3]?>"> <?=$ans_array[3]?><br>
    
    <?php } ?>
    
    <br><br>
    <input type="submit" value="Submit!">
    
    </form>
    
</div>

</body>
</html>