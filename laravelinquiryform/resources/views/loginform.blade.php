<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="loginform.css">
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">


</head>
<body>
    <div>
    <div class="logo">
            <img src="\assets\images\logo.png" alt="BISJHINTU'S Logo" class="logo">
        </div>

        <div class="container">
       
       <div class="login-box">
           <h2>Login</h2>
           <form action="/login" method="POST">
               <div class="input-group">
                   <label for="email">Email</label>
                   <input type="email" id="email" name="email" placeholder="Enter your email" required>
               </div>
               <div class="input-group">
                   <label for="password">Password</label>
                   <input type="password" id="password" name="password" placeholder="Enter your password" required>
               </div>
               <button type="submit" class="login-button">Login</button>
           </form>
       </div>
   </div>
    </div>
   
</body>
</html>
