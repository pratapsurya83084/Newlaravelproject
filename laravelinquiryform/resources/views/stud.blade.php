<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
</head>
<body>
<div>
    <h1>add new stude</h1>
    <form action="add" method="post">
        @csrf
 <input type="password" name="password" placeholder="enter password">
 <br>
 <input type="email" name="email" placeholder="enter email">
 <br>
 <!-- <input type="phoneNumber" name="phone" placeholder="enter phone">
 <br> -->

 <button>Add Student</button>
    </form>
</div>
</body>
</html>