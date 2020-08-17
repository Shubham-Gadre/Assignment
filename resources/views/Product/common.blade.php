<html>
    <head>
        <title>
            Code Assignment
        </title>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 

    </head>
        <body>

            <div class="container">

            <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                    <div class="navbar-header">
                    <a class="navbar-brand" href="#">Code Assignment</a>
                    </div>
                    <ul class="nav navbar-nav">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Page 1</a></li>
                    <li><a href="#">Page 2</a></li>
                    <li><a href="#">Page 3</a></li>
                    </ul>
                    <ul class="nav navbar-nav pull-right">
                    <li><a href="#">Page 4</a></li>
                    </ul>
                </div>
            </nav>

            @yield('content')   
            </div>



        
        </body>
    </html>