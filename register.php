<?php
include_once "header.php"
?>
        <div class="row row-content" style="position:relative;top:20px;bottom:20px;min-height: 600px;">
            <div class="col-xs-12 col-sm-9">
			    <form class="form-horizontal" role="form" enctype="multipart/form-data" method="post" action="doAction.php?act=reg">
                    <div class="form-group">
                        <label for="Username" class="col-sm-2 control-label">Username</label>
                        <div class="col-xs-7 col-sm-6 col-md-7">
                        <input type="text" class="form-control" id="Username" name="username" placeholder="Enter your username">
                        </div>
                    </div>
					 <div class="form-group">
                        <label for="telnum" class="col-xs-12 col-sm-2 control-label">Password</label>
                        <div class="col-xs-7 col-sm-6 col-md-7">
                                    <input type="password" class="form-control" id="telnum" name="password" placeholder="password">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="emailid" class="col-sm-2 control-label">Email</label>
                        <div class="col-xs-7 col-sm-6 col-md-7">
                            <input type="email" class="form-control" id="emailid" name="email" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-primary">Send Feedback</button>
                        </div>
                    </div>
                </form>
            </div>
             <div class="col-xs-12 col-sm-3" >
                <p style="padding:20px;"></p>
            </div>
       </div>
<?php
include_once "footer.php"
?>