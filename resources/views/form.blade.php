<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration_form</title>
</head>
<body>
    <!-- <form action="form" method="POST">
        @csrf 
             (Cross-site rquest forgeries,blade directive which protects us from malicious attacks 
             by providing a token. generates <input type='hidden'). 
        Name: <input type="text" name="name" id="number" placeholder="Enter the name"><br><br>
        Email: <input type="email" name="email" id="number" placeholder="Enter the email"><br><br>
        Age: <input type="age" name="age" id="number" placeholder="Enter age"><br><br>
        Username: <input type="username" name="username" id="number" placeholder="Enter username"><br><br>
        Password: <input type="password" name="password" id="number" placeholder="Enter password"><br><br>
        <input type="submit" value="submit">
    </form> -->
    <form action="form" method="POST">
        @csrf 
         <!-- Cross-site rquest forgeries,blade directive which protects us from malicious attacks 
         by providing a token. generates <input type='hidden' -->
        Name: <input type="text" name="name" id="number" placeholder="Enter the name" value="{{old('name')}}"><br><br>
        Email: <input type="email" name="email" id="number" placeholder="Enter the email" value="{{old('email')}}"><br><br>
        Age: <input type="age" name="age" id="number" placeholder="Enter age" value="{{old('age')}}"><br><br>
        Username: <input type="username" name="username" id="number" placeholder="Enter username" value="{{old('username')}}"><br><br>
        Password: <input type="password" name="password" id="number" placeholder="Enter password" value="{{old('password')}}"><br><br>
        <input type="submit" value="submit">
        <!-- this form is better then above once as it will store the last value for one request during the next request
        Incase ,User don't have to fill the required data fields again and again,if Data fields are in large numbers.  -->
    </form>
</body>
</html>