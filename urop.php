<?php
include_once 'header.php';
require_once 'include.php';
#if(!isset($_SESSION['username']))
#   header("Location: register.php");
if(!session_id())
    session_start();
$item=40;
?>

    <div class="urop-page">
        <h3>UROP Project List</h3>
        <div class="container">
            <form action=# method="post">
                   <div class="row">
                        <div class="col-md-4 select-project">
                            <label for="dep">Department</label>
                            <select id="dep" class="form-control" name="dept">
                                <option value="ALL"></option>
                                <?php
                                $query = "SELECT DISTINCT department FROM professor ORDER BY department ASC";
                                $result = mysqli_query($link,$query);
                                $result = mysqli_fetch_all($result);
                                foreach ($result as $dept)
                                {
                                    $dept = implode("",$dept);
                                    echo "<option value='$dept'>$dept</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                <div class="row">
                        <div class="col-md-4 select-project">
                            <label for="pro">Supervisor</label>
                            <select id="pro" class="form-control" name="prof">
                                <option value="ALL"></option>
                                <?php
                                $query = "SELECT DISTINCT name FROM professor ORDER BY name ASC";
                                $result = mysqli_query($link,$query);
                                $result = mysqli_fetch_all($result);
                                foreach ($result as $prof)
                                {
                                    $prof = implode("",$prof);
                                    echo "<option value='$prof'>$prof</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <input type="submit" name="submit-search" value="Search" class="btn btn-info mrg" id="search-button" />
                        </div>
                    </div>
</form>
            <table class="table table-sm" id="projectList">
                <tr>
                    <th>Project Name</th>
                    <th>Supervisor</th>
                    <th>Department</th>
                    <th></th>
                </tr>
                <tbody>
                    <?php
                    if (!empty($_POST['submit-search'])) 
                    {
                        $dept = $_POST['dept'];
                        $prof = $_POST['prof'];
                        if ($dept!="ALL" and $prof=="ALL")
                            $query = "SELECT p.proj_name, t.department, t.name, p.p_id, p.proj_id FROM project p, professor t WHERE p.p_id=t.p_id AND t.department='$dept' ORDER BY p.proj_name asc";
                        elseif ($dept=="ALL" and $prof!="ALL")
                            $query = "SELECT p.proj_name, t.department, t.name, p.p_id, p.proj_id FROM project p, professor t WHERE p.p_id=t.p_id AND t.name='$prof' ORDER BY p.proj_name asc";
                        elseif ($dept!="ALL" and $prof!="ALL")
                            $query = "SELECT p.proj_name, t.department, t.name, p.p_id, p.proj_id FROM project p, professor t WHERE p.p_id=t.p_id AND t.name='$prof' AND t.department='$dept' ORDER BY p.proj_name asc";
                        else
                            $query = "SELECT p.proj_name, t.department, t.name, p.p_id, p.proj_id FROM project p, professor t WHERE p.p_id=t.p_id ORDER BY t.department asc";
                    }
                    else
                        $query = "SELECT p.proj_name, t.department, t.name, p.p_id, p.proj_id FROM project p, professor t WHERE p.p_id=t.p_id ORDER BY t.department asc";
                    $resultP = mysqli_query($link,$query);
                    $resultP = mysqli_fetch_all($resultP);
                    
                    $username = $_SESSION['username'];
                    $sql = "SELECT u_id FROM user WHERE username='$username'";
                    $result = mysqli_query($link,$sql);
                    $result = mysqli_fetch_assoc($result);
                    $uid = implode("",$result);
                    $sql = "SELECT DISTINCT p_id, proj_id FROM comments WHERE u_id='$uid'";
                    $written = mysqli_query($link,$sql);
                    $written = mysqli_fetch_all($written);
                    #for ($i=0; $i<sizeof($written); $i++){
                    #   $written[$i] = implode("",$written[$i]);
                    #}
                    #print_r($written);
                    

                    foreach ($resultP as $proj)
                    {
                        #print_r($proj);
                        echo "<tr>
                            <td style=\"width: 56%\" class=\"title-button\">
                                <a href=\"show.php?pid=$proj[3]&projid=$proj[4]\">$proj[0]</a>
                            </td>
                            <td style=\"width: 12%\">$proj[1]</td>
                            <td style=\"width: 20%\">$proj[2]</td><td class=\"write-button\">";
                        $writtenThis = false;
                        foreach ($written as $writtenC)
                        {
                            if ($writtenC[0]==$proj[3] and $writtenC[1]==$proj[4])
                            {
                                $writtenThis = true;
                                break;
                            }
                        }
                        if ($writtenThis)
                            echo "<a href=\"newComment.php?pid=$proj[3]&projid=$proj[4]&written=true\">Modify Comment</a>";
                        else
                            echo "<a href=\"newComment.php?pid=$proj[3]&projid=$proj[4]&written=false\">Write Comment</a>";
                        echo "</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
            <script>
                $(document).ready(function () {
                    $('#projectList').DataTable();
                });
            </script>
        </div>
    </div>
<?php
include_once "footer.php"
?>