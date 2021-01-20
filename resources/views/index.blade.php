<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
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
                <li id="active"><a href="/">HOME</a></li>
                <li><a href="/login">LOG IN</a></li>
                @if(session()->has('name') && session()->has('lastName'))
                <li><a href="{{ route('logout') }}">LOG OUT</a></li>
                @endif
            </ul>
        </div>
    </nav>

    <div class="container-fluid content">
        <div class="row content content_background">
            <div class="col-md-6" id="bla">
                <div class="row visit_us_section">
                    <div class="col-md-7 col-md-offset-5 visit_us_content">
                        <h5>LOREM IPSUM</h5>
                        <h3>LOREM IPSUM</h3>
                        <P>Lorem, ipsum dolor sit amet consectetur adipisicing 
                            elit. Maxime, cum fugit voluptates optio 
                            consectetur error officia dolor laborum enim 
                            mollitia fuga doloribus culpa nulla accusamus 
                            nam doloremque nisi voluptatibus! Unde recusandae 
                            vel nulla voluptate quos!
                        </P>
                        <a class="btn btn-warning" href="#" role="button">Visit us today</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6"></div>
        </div>
    </div>

    <div class="container-fluid promise_section">
        <div class="row">
            <div class="col-xs-12">
                <div class="promise_section_content">
                    <h6>OUR PROMISE</h6>
                    @if(session()->has('name') && session()->has('lastName'))
                    <h3 id="user_full_name">TO {{session('name')}} {{session('lastName')}}</h3>
                    @else
                    <h3>TO YOU</h3>
                    @endif
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing 
                        elit. Ipsam quibusdam necessitatibus autem rem 
                        libero vel tempore quia aut beatae repellat a esse 
                        est minus aliquid, magni, adipisci saepe nisi 
                        voluptatem dolorum eos nesciunt accusantium sit 
                        numquam placeat? Esse eos molestiae sed! 
                        Ab corporis, rem aliquam quo facilis soluta, 
                        possimus eveniet iste vitae voluptates quas 
                        blanditiis sapiente fuga ducimus facere voluptas? 
                        Dicta facilis asperiores iusto modi voluptate 
                        esse ab, corporis laborum recusandae vel est 
                        sit vitae quae excepturi doloribus dolorum minus.
                        Lorem ipsum dolor sit amet.
                    </p>
                </div>
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