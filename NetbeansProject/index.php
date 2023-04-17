<?php include ('head.php'); ?>
<body>
    <div class="container">
        <div class="row">

            <center><h3> Sri Lankan Election </h3></center>
            <div class="col-md-4 col-md-offset-4">

                <div class="login-panel panel panel-default">

                    <div class="panel-heading">
                        <center><h3 class="panel-title"> Log In Voter
                            </h3></center>
                    </div>
                    <div class="panel-body">
                        <form role="form" method = "post" enctype = "multipart/form-data">
                            <fieldset>

                                <div class="form-group">
                                    <label for = "username" >ID No.</label>
                                    <input class="form-control" placeholder="Please Enter Voter's ID Number" name="idno" type="text" required = "required" autofocus>
                                </div>

                                <div class="form-group">
                                    <label for = "username" >Password</label>
                                    <input class="form-control" placeholder="Password" name="password" type="password" required = "required">
                                </div>


                                <button class="btn btn-lg btn-success btn-black " name = "login">Login</a>


                            </fieldset>

                            <?php include ('login_query.php'); ?>
                        </form>
                        <h4><b>Note:</b> <i>If you are a new voter, go here and register!!</i> </h4>
                        <a href="register/index.php" class="btn btn-lg btn-success btn-block" role="button" data-bs-toggle="button">Registation</a>
                            
                    </div>
                </div>
            </div>
        </div>
    </div>

   

</body>

</html>
