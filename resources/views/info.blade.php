<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>
<body>
    

<div id="backgorund_color">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12">
                <h1 id="title">BUSINESS CASUAL</h1>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <ul class="nav navbar-nav">
                <li><a href="/">HOME</a></li>
                <li><a href="/login">LOG IN</a></li>
                @if(session()->has('name') && session()->has('lastName'))
                <li><a href="{{ route('logout') }}">LOG OUT</a></li>
                @endif
            </ul>
        </div>
    </nav>


    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 user_info">
                <h3>Your name is: {{$userData['name']}}</h3>
                <h3>Your last name is: {{$userData['lastName']}}</h3>
                @if($userData['email'] != '')
                <h3>Your email is: {{$userData['email']}}</h3>
                @endif
            </div> 
        </div>
    </div>


    <div class="container-fluid footer">
        <div class="row">
            <div class="col-xs-12">
                <p>Copyright &#169 Your Website 2018</p>
            </div>
        </div>
    </div>



</div>

    

</body>
</html>