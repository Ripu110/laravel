<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>old Data</title>
</head>
<body>
    <h1>Form with Old Data</h1>
    <form action="olddata" method="post">
    @csrf 
         <!-- Cross-site rquest forgeries,blade directive which protects us from malicious attacks 
         by providing a token. generates <input type='hidden' -->
         Name: <input type="text" name="name" id="number" placeholder="Enter the name" value="{{old('name')}}"><br><br>
       <!-- //old(),it allows you to keep last submitted value in the form,keeps input from one request during the next request. -->
         Email: <input type="email" name="email" id="number" placeholder="Enter the email" value="{{old('email')}}"><br><br>
        Age: <input type="age" name="age" id="number" placeholder="Enter age" value="{{old('age')}}"><br><br>
        Username: <input type="username" name="username" id="number" placeholder="Enter username" value="{{old('username')}}"><br><br>
        Password: <input type="password" name="password" id="number" placeholder="Enter password" value="{{old('password')}}"><br><br>
        <input type="submit" value="submit">
    </form>
</body>
</html>