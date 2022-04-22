<?php 

$alert_suc = false;
$alert_err = false;

if ($_SERVER['REQUEST_METHOD'] == "POST"){

    include 'database/d_connect.php';
    
    $firstname = $_POST['sr_firstname'];
    $lastname = $_POST['sr_lastname'];
    $id = $_POST['id'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $C_time = time();
    $exists = false;

    if($pass == $confirm_password && $exists == false){

        $sql = "INSERT INTO `registrations` (`firstname`, `lastname`, `student_id`, `email_address`, `password`, `confirm_password`,`datetime`) VALUES ('$firstname', '$lastname', '$id', '$email', '$pass', '$confirm_password',$C_time)";
        
        //echo $sql;
        
        $result = mysqli_query($connect,$sql);

        if($result){

            $alert_suc = true;
        }

    }

    else{

        $alert_err = true;
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Register On UIU Shuttle Service</title>
</head>

<body>
    <section class="header">

        <?php require '_header.php'?>

        <?php

        if($alert_suc){

            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Congratulation!</strong> Your Account Has Been Created
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div> ';
        }

        if($alert_err){

            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Sorry!</strong> Passwords Do Not Match
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div> ';
        }
        
        ?>

    </section>

    <section class="section register" style="width: 38%;margin: auto;">
        <div class="container" style="margin-top: 33px; margin-bottom: 33px;">
            <div class="row">
                <div class="container container--xs">
                    <div class="woocommerce">



                        <div id="signup_div_wrapper">
                            <img class="mb-4"
                                style="align-items: center;justify-content: center;display: block;margin: auto;"
                                src="https://www.uiu.ac.bd/wp-content/uploads/2016/02/UIU-Logo-250.png" alt=""
                                width="72" height="57">
                            <h1 class="mb-1 text-center">Register</h1>
                            <p class="fs-14 text-gray text-center mb-5">Register to book your seat in the UIU Shuttle
                                Service</p>


                            <form method="post" class="register" action = "">

                                <p class="woocommerce-FormRow woocommerce-FormRow--first form-row form-row-first">
                                    <label for="reg_sr_firstname">First Name <span class="required">*</span></label>
                                    <input type="text"
                                        class="woocommerce-Input woocommerce-Input--text input-text form-control"
                                        name="sr_firstname" id="reg_sr_firstname" value="" required="">
                                <div class="invalid-feedback">This field is required</div>
                                </p>

                                <p class="woocommerce-FormRow woocommerce-FormRow--last form-row form-row-last">
                                    <label for="reg_sr_lastname">Last Name <span class="required">*</span></label>
                                    <input type="text"
                                        class="woocommerce-Input woocommerce-Input--text input-text form-control"
                                        name="sr_lastname" id="reg_sr_lastname" value="" required="">
                                <div class="invalid-feedback">This field is required</div>
                                </p>


                                <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                    <label for="reg_email">University Email address <span
                                            class="required">*</span></label>
                                    <input type="email"
                                        class="woocommerce-Input woocommerce-Input--text input-text form-control"
                                        name="email" id="reg_email" value="" required="">
                                <div class="invalid-feedback">This field is required</div>
                                </p>

                                <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                    <label for="reg_ID">ID Number <span class="required">*</span></label>
                                    <input type="id"
                                        class="woocommerce-Input woocommerce-Input--text input-text form-control"
                                        name="id" id="reg_ID" value="" required="">
                                <div class="invalid-feedback">This field is required</div>
                                </p>


                                <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                    <label for="reg_password">Password <span class="required">*</span></label>
                                    <input type="password"
                                        class="woocommerce-Input woocommerce-Input--text input-text form-control"
                                        name="password" id="reg_password" required="">
                                <div class="invalid-feedback">This field is required</div>
                                </p>

                                <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                    <label for="reg_confirm_password">Confirm Password <span class="required">*</span></label>
                                    <input type="confirm_password"
                                        class="woocommerce-Input woocommerce-Input--text input-text form-control"
                                        name="confirm_password" id="reg_confirm_password" required="">
                                <div class="invalid-feedback">This field is required</div>
                                </p>


                                <div style="left: -999em; position: absolute;"><label for="trap">Anti-spam</label><input
                                        type="text" name="email_2" id="trap" tabindex="-1" autocomplete="off"></div>


                                <p class="form-row form-row-wide mailchimp-newsletter"><input
                                        class="woocommerce-form__input woocommerce-form__input-checkbox input-checkbox"
                                        id="mailchimp_woocommerce_newsletter" type="checkbox"
                                        name="mailchimp_woocommerce_newsletter" value="1" checked="checked"> <label
                                        for="mailchimp_woocommerce_newsletter"
                                        class="woocommerce-form__label woocommerce-form__label-for-checkbox inline"><span>Subscribe
                                            To Get Updates &amp; Informations</span></label>
                                <div class="invalid-feedback">This field is required</div>
                                </p>
                                <div class="clear"></div>
                                <div class="woocommerce-privacy-policy-text"></div>
                                <p class="woocomerce-FormRow form-row">
                                    <input type="hidden" id="woocommerce-register-nonce"
                                        name="woocommerce-register-nonce" value="e8c84a1d51"><input type="hidden"
                                        name="_wp_http_referer" value="/my-account/">
                                    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign Up</button>
                                <div class="invalid-feedback">This field is required</div>
                                </p>


                            </form>

                            <p class="text-gray-soft text-center small mb-2">By clicking "Sign up" you agree to our <a
                                    href="#">Terms of Service</a>.</p>
                            <p class="text-gray-soft text-center small mb-2">Already have an account? <a
                                    href="login.php">Sign in</a></p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>