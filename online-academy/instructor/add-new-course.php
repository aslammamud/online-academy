<?php
include ('../connection.inc.php');
include ('../functions.inc.php');

$instructor_id = $_SESSION['abc_ins_id'];
$course_url = randomURL();
$insert_query = "INSERT INTO `instructor_made_courses`(`ins_mc_instrc_id`, `ins_mc_url`) VALUES ('$instructor_id', '$course_url')";

    if (mysqli_query($con, $insert_query)) {

        inst_notifier($instructor_id,'Successfully created a new course.',$type='success',$status=0,$priotity=0,$np2con);
        
        notifier($msg='Sucessfully created a new course!',$alert=2,$time=3000);
        $reload_path  = "edit-course.php?url=".$course_url;
        echo reloader($reload_path,0);
        exit();
        die();
            
    } else {
      echo "Error: " . $insertuser . "<br>" . mysqli_error($con);
      notifier($msg='Course not created! Please try again',$alert=4,$time=3000);
    }
    



?>
