<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Login To UIU Shuttle Service</title>
</head>

<body>

    <section class="header">
    <?php require '_header.php'?>

    </section>


    <section class="signin" style="margin: 50px 0;">

        <body class="text-center" data-new-gr-c-s-check-loaded="14.1056.0" data-gr-ext-installed="">
    
            <main class="form-signin">
              <form style="display: block;width: 60%;margin: auto;">
                <img class="mb-4" src="https://www.uiu.ac.bd/wp-content/uploads/2016/02/UIU-Logo-250.png" alt="" width="72" height="57">
                <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
            
                <div class="form-floating">
                  <input type="email" style="padding: -7px 0;margin: 29px 0;"class="form-control" id="floatingInput" placeholder="name@example.com">
                  <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating">
                  <input type="password"  style="margin: 15px 0;"class="form-control" id="floatingPassword" placeholder="Password">
                  <label for="floatingPassword"  >Password</label>
                  <a class="form-sublink" href="https://themes.getbootstrap.com/my-account/lost-password/">Forgot password?</a>
                </div>
            
                <div class="checkbox mb-3">
                  <label>
                    <input type="checkbox" value="remember-me"  style="margin: 15px 0;"> Remember me
                  </label>
                </div>
                <button class="w-50 btn btn-lg btn-primary" style="margin: 15px 0;type="submit">Sign in</button>
                <p class="small text-center text-gray-soft">Don't have an account yet? <a href="register.php">Sign up</a></p>
                <p class="mt-5 mb-3 text-muted">© UIU Shuttle Service 2022</p>
              </form>
            </main>
            
            
                
              
            
            </body>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>