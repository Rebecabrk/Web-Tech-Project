<!DOCTYPE html>
<html>
  <head>
      <title>Create Account Page</title>
      <link href="css/CreateAccount.css" rel="stylesheet">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>

  <body>
      <div class="background">
          <div id="form" class="form_box">
              <form action="process.php" method="get">
                  <ul>
                    <li>
                      <input type="text" id="first_name" name="user_first_name" placeholder="First Name" required/>
                    </li>
                    <li>
                      <input type="text" id="last_name" name="user_last_name" placeholder="Last Name" required/>
                    </li>
                    <li>
                      <input type="email" id="mail" name="user_mail" placeholder="Email" required/>
                    </li>
                    <li>
                      <input type="password" id="password" name="user_password" placeholder="Password" required/>
                    </li>
                    <hr>
                    <li class="button">
                        <button type="submit">Create Account</button>
                    </li>
                  </ul>
                </form>
          </div>

          <div id="text">
              One step closer to building your child's bright future!
          </div>
      </div>
  </body>
</html>