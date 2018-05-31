<?php include '../includes/functions.php'; ?>
<?php include '../includes/layouts/header.php';?>

<main class="p-3 mb-5" id="main" style="margin-top:10px;">
    <div class="container">
        <?php //error message
        if ($errors = errors()) {
            ?>
            <ul class="list-group">
                <?php
                foreach ($errors as $value) {
                    foreach ($value as $val) {
                        echo "<li class=\"list-group-item list-group-item-danger\">" . $val . "</li>";
                    }
                }
                ?>
            </ul>
            <?php
        }
        ?>

        <?php //other messages
        if ($message = message()) {
            ?>
            <div class="alert alert-success" role="alert">
                <?php echo $message; ?> </div>
            <?php
        }
        ?>

    </div>
    <!-- Forms starts here -->
    <div class="row">
        <!-- Login area -->
        <div class="col-lg-6">
            <div class="row">
                <div class="col-md-2"></div>
                <!-- login form goes here -->
                <div class="col-md-8 mt-5">
                    <div class="p-5" style="background-color:#ecebeb;">
                        <form action="otp_form.php" method="post">
                            <h3 class="text-center"><b>Login</b></h3>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Email</label>
                                <input type="email" name="email" class="form-control" id="exampleInputUsername1" aria-describedby="emailHelp" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>
                            <button type="submit" name="login" class="btn btn-primary form-control mt-2" style="background-color:#76e292;border:1px solid #76e292;">LOGIN</button>
                        </form>
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>

        <!-- Registration area -->
        <div class="col-lg-6">
            <div class="row">
                <div class="col-md-2"></div>
                <!-- registration form goes here -->
                <div class="col-md-8 mt-5">
                    <div class="p-5" style="background-color:#ecebeb;">
                        <form action="otp_form.php" method="post">
                            <h3 class="text-center"><b>Registration</b></h3>
                            <div class="form-group">
                                <label for="exampleInputUIN1">Unique Identification Number (UIN)</label>
                                <input type="text" name="UIN" class="form-control" id="exampleInputUIN1" aria-describedby="emailHelp" placeholder="Enter UIN">
                                <small id="emailHelp" class="form-text text-muted">
                                    We'll never share your UIN with anyone else.<br>
                                    Aadhar Card number for individual<br>
                                    Pan Card number for organization
                                </small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputNumber1">Mobile Number</label>
                                <input type="number" name="mobile_number" class="form-control" id="exampleInputNumber1" placeholder="Mobile number">
                                <small id="emailHelp" class="form-text text-muted">Provide the same number used in Unique ID</small>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" name="is_organization" class="form-check-input" id="exampleCheck1" value="1">
                                <label class="form-check-label" for="exampleCheck1">Register as an organization</label>
                            </div>
                            <button type="submit" name="OTP" class="btn btn-primary form-control mt-2" style="background-color:#76e292;border:1px solid #76e292;">Request OTP</button>
                        </form>
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </div>

</main>
<?php include '../includes/layouts/page_footer.php';?>