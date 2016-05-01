<?php
include_once 'header.php';
require_once 'include.php';
?>

    <div class="container">
        <table style="border: 2px solid black; margin-top: 150px">
            <tr style="border: 2px dashed blue; margin-bottom: 10px">
                <th>Project Name</th>
                <th>Supervisor</th>
                <th>Department</th>
                <th>Project Description</th>
            </tr>
            <?php
$url='http://urop.ust.hk/cgi-bin/uropos/index.php?dpoption=CSE';
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
    preg_match('/Project Description:[\n ]*<\/td>[\n ]*<td class\="project02_table_right">(.*)<\/td>[\n ]*<\/tr>[\n ]*<tr>[\n ]*<td class\="project02_table_left">Course type:/s', $pageContent, $pageDesc);  
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
    <td style=\"width: 40%\">$description[$i]</td>
    <td style=\"width: 10%\">$url[$i]</td>
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
        $query = "INSERT INTO project (p_id, proj_name, description, url) VALUES ('$pid', '$project[$i]', '$description[$i]', $url[$i])";
        mysqli_query($link,$query);
    }
}

mysqli_close($link);
            ?>


        </table>
    </div>

<?php
include_once "footer.php"
?>