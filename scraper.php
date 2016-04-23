<?php
include_once 'header.php';
require_once 'include.php';
?>

<!doctype html>
<html>
<head>
    <title>About</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Play-Offs Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() {setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!meta charset utf="8">
    <!--flexslider-css-->
    <link href="css/flexslider.css" rel='stylesheet' type='text/css' />
    <!--bootstrap-->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!--coustom css-->
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <!--fonts-->
    <link href='http://fonts.useso.com/css?family=Coda:400,800' rel='stylesheet' type='text/css' />
    <link href='http://fonts.useso.com/css?family=Jockey+One' rel='stylesheet' type='text/css' />
    <!--script-->
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script src="js/modernizr.custom.js"></script>
    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!--script-->
    <script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
    </script>
    <!--fonts-->
</head>
<body>
    <div class="container">
        <table style="border: 2px solid black; margin-top: 150px">
            <tr style="border: 2px dashed blue; margin-bottom: 10px">
                <th>Project Name</th>
                <th>Supervisor</th>
                <th>Department</th>
                <th>Project Description</th>
            </tr>
            <?php
$url='http://urop.ust.hk/cgi-bin/uropos/index.php';
$content = file_get_contents($url);
preg_match_all('/<a href\="\?action\=details&id\=([0-9]*)">(.*)<\/a>/i', $content, $project);
$url = array();
foreach($project[1] as $number)
    $url[] = "http://urop.ust.hk/cgi-bin/uropos/index.php?action=details&id=" . $number;
$project = $project[2];
#print_r($project);
#print_r($url);

preg_match_all('/<div class\="name"> *([a-zA-Z\- ]*) *, *([A-Z]*) *<\/div>/i',$content,$profDept);
$prof = $profDept[1];
$dept = $profDept[2];
#print_r($prof);
#print_r($dept);

$description = array();
#for ($i=0; $i<30; $i++)
foreach($url as $pageUrl)
{
    #$pageContent = file_get_contents($url[$i]);
    $pageContent = file_get_contents($pageUrl);
    $pageDesc = array(0=>' ',1=>' ');
    preg_match('/Project Description:[\n ]*<\/td>[\n ]*<td class\="project02_table_right">[\n ]*(.*)[\n ]*<\/td>/i', $pageContent, $pageDesc);
    if (!isset($pageDesc[1]))
        $pageDesc[1] = "No description.";
    $description[] = $pageDesc[1];
    #print_r($pageDesc[1]);
}
#print_r($description);

#for ($i=0; $i<30; $i++)
for ($i=0; $i<sizeof($project); $i++)
{
    echo "<tr style=\"border: 2px dashed blue; margin-bottom: 10px\">
    <td style=\"width: 15%\">$project[$i]</td>
    <td style=\"width: 15%\">$prof[$i]</td>
    <td style=\"width: 15%\">$dept[$i]</td>
    <td style=\"width: 50%\">$description[$i]</td>
    </tr>";
}
echo "</table>";

#insert all projects & profs in database
#for ($i=0; $i<30; $i++)
/*
for ($i=0; $i<sizeof($project); $i++)
{
    $professor = $prof[$i];
    $department = $dept[$i];
    $email = "No email address";
    #echo "$professor$department$email";
    $checkQ = "SELECT count(*) FROM professor WHERE name='$professor'";
    $check = mysqli_query($link,$checkQ);
    $check = mysqli_fetch_assoc($check);
    $check = implode("",$check);
    #echo "$check";
    if ($check==0)
    {
        #$query = "INSERT IGNORE INTO `professor` SET `name`='$professor', `email`='$email', `department`='$department'";
        $query = "INSERT INTO professor (name, email, department) VALUES ('$professor', '$email', '$department')";
        mysqli_query($link,$query);
    }
}
*/
#for ($i=0; $i<30; $i++)
for ($i=0; $i<sizeof($project); $i++)
{
    $query_pid = "SELECT p_id FROM professor WHERE name='$prof[$i]'";

    $result = mysqli_query($link,$query_pid);
    #echo "$result";
    $pid = mysqli_fetch_assoc($result);

    #print_r($pid);
    $pid = implode("",$pid);

    $checkQ = "SELECT count(*) FROM project WHERE proj_name='$project[$i]'";
    $check = mysqli_query($link,$checkQ);
    $check = mysqli_fetch_assoc($check);
    $check = implode("",$check);
    if ($check==0)
    {
        $query = "INSERT INTO project (p_id, proj_name, description) VALUES ('$pid', '$project[$i]', '$description[$i]')";
        mysqli_query($link,$query);
    }
}

mysqli_close($link);
            ?>


        </table>
    </div>
</body>
</html>
<?php
include_once "footer.php"
?>