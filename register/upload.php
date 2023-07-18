<?php

include $_SERVER['DOCUMENT_ROOT'].'/__lib/main.php';

if(isset($_POST['institution']) and 
isset($_POST['team_name']) and 
isset($_POST['project_title']) and 
isset($_POST['domain_selected']) and 
isset($_POST['problem_statement']) and 
isset($_POST['no_of_members']) and 
isset($_POST['teamlead_name']) and 
isset($_POST['teamlead_dept']) and 
isset($_POST['teamlead_year']) and 
isset($_POST['teamlead_contact']) and 
isset($_POST['teamlead_mail']) and 
isset($_POST['member1_name']) and 
isset($_POST['member1_dept']) and 
isset($_POST['member1_year']) and 
isset($_POST['member2_name']) and 
isset($_POST['member2_dept']) and 
isset($_POST['member2_year']) and 
isset($_FILES["fee_proof"])

)

{
  $institution  = $_POST['institution'];
  $team_name  = $_POST['team_name']; 
  $project_title  = $_POST['project_title']; 
  $domain_selected  = $_POST['domain_selected']; 
  $problem_statement  = $_POST['problem_statement']; 
  $no_of_members  = $_POST['no_of_members']; 
  $teamlead_name  = $_POST['teamlead_name']; 
  $teamlead_dept  = $_POST['teamlead_dept']; 
  $teamlead_dept_other  = $_POST['teamlead_dept_other']; 
  $teamlead_year  = $_POST['teamlead_year']; 
  $teamlead_contact  = $_POST['teamlead_contact']; 
  $teamlead_mail  = $_POST['teamlead_mail']; 
  $member1_name  = $_POST['member1_name']; 
  $member1_dept  = $_POST['member1_dept']; 
  $member1_dept_other  = $_POST['member1_dept_other']; 
  $member1_year  = $_POST['member1_year']; 
  $member2_name  = $_POST['member2_name']; 
  $member2_dept  = $_POST['member2_dept']; 
  $member2_dept_other  = $_POST['member2_dept_other']; 
  $member2_year  = $_POST['member2_year'];
  $member3_name  = $_POST['member3_name']; 
  $member3_dept  = $_POST['member3_dept']; 
  $member3_dept_other  = $_POST['member3_dept_other']; 
  $member3_year  = $_POST['member3_year'];
  $member4_name  = $_POST['member4_name']; 
  $member4_dept  = $_POST['member4_dept']; 
  $member4_dept_other  = $_POST['member4_dept_other']; 
  $member4_year  = $_POST['member4_year'];
  $fee_proof = $_FILES["fee_proof"]["name"];

  if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    die("Page Unavailable");
}

if (empty($_FILES)) {
    ?><script>alert('No files uploaded. Please fill the form again with proof.')</script><?
}

if ($_FILES["fee_proof"]["error"] !== UPLOAD_ERR_OK) {

    switch ($_FILES["fee_proof"]["error"]) {
        case UPLOAD_ERR_PARTIAL:
            ?><script>alert('File only partially uploaded.')</script><?
            break;
        case UPLOAD_ERR_NO_FILE:
            ?><script>alert('No files uploaded')</script><?
            break;
        case UPLOAD_ERR_EXTENSION:
            ?><script>alert('File upload stopped by a PHP Extension. Try again.')</script><?
            break;
        case UPLOAD_ERR_FORM_SIZE:
            ?><script>alert('File exceeds maximum file size in HTML.')</script><?
            break;
        case UPLOAD_ERR_INI_SIZE:
            ?><script>alert('File exceeds maximum file size in PHP.')</script><?
            
            break;
        case UPLOAD_ERR_NO_TMP_DIR:
            ?><script>alert('Temproary folder not found.')</script><?

            break;
        case UPLOAD_ERR_CANT_WRITE:
            ?><script>alert('failed to write file.')</script><?

            break;
        default:
        ?><script>alert('Unknown error in uploading files. Please contact us through contact page')</script><?
            break;
    }
}

if ($_FILES["fee_proof"]["size"] > 2097152) {
    ?><script>alert('File is too large. Max size allowed: 2MB')</script><?

}

$destination = __DIR__ . "/uploads/" . $fee_proof;

$i = 1;

while (file_exists($destination)) {

    $destination = __DIR__ . "/uploads/" . $i . $fee_proof;
    $i++;
}


if (move_uploaded_file($_FILES["fee_proof"]["tmp_name"], $destination)) {

 $result = registration::getreg ($institution,$team_name,$project_title,$domain_selected,$problem_statement,$no_of_members,
$teamlead_name,$teamlead_dept,$teamlead_dept_other,$teamlead_year,$teamlead_contact,$teamlead_mail,$member1_name,$member1_dept,
$member1_dept_other,$member1_year,$member2_name,$member2_dept,$member2_dept_other,$member2_year,$member3_name,$member3_dept,
$member3_dept_other,$member3_year,$member4_name,$member4_dept,$member4_dept_other,$member4_year,$fee_proof);

if($result == true)
{
load_template('registration-success');
   
}
else
{   
    load_template('registration-fail');
  
}

}
else
{
    ?> <script>alert('File upload failed!')</script><?
    die("File Upload Failed!");
}
}




?>



