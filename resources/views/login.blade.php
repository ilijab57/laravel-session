<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
                <li id="active"><a href="/login">LOG IN</a></li>
            </ul>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <form id="login_form" action="{{ route('infoPage') }}" method="POST">
                @csrf

                <div class="form-group">
                @error('name')
                    <p class="label label-danger form_err_msg">{{ $message }}</p>
                @enderror
                        <label for="name">NAME</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                    </div>

                <div class="form-group">
                @error('lastName')
                    <p class="label label-danger form_err_msg">{{ $message }}</p>
                @enderror
                    <label for="lastName">LAST NAME</label>
                    <input type="text" class="form-control" id="lastName" name="lastName" value="{{ old('lastName') }}">
                </div>

                <div class="form-group">
                @error('email')
                    <p class="label label-danger form_err_msg">{{ $message }}</p>
                @enderror                
                    <label for="email">EMAIL</label>
                    <input type="text" class="form-control" id="email" name="email" value="{{ old('email') }}">
                </div>
                <input class="btn btn-default btn-block" type="submit" value="Submit">
            </form>
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