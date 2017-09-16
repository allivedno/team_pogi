<nav class="navbar navbar-expand-lg navbar-light blue-grey lighten-5">

    <!-- Navbar brand -->
  

    <!-- Collapse button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

    <!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <!-- Links -->
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link page-scroll" href="#aboutflowtork">About Flowtork</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
            </li>

            <!-- Dropdown -->
            <!-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li> -->
            <li class="nav-item dropdown">
             <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Login</a>
                      
                        <ul id="login-dp" class="dropdown-menu">
                            <li>
                                 <div class="row">
                                        <div class="col-md-12">
                                         <label class="label">
                                            Login</label>
                                            <br><br><br>
                                             <form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
                                                    <div class="form-group">
                                                         <label class="label">Email address or Username</label><br>
                                                         <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email address or Username" required>
                                                    </div><br>
                                                    <div class="form-group">
                                                         <label class="label">Password</label>
                                                         <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
                                                         <div class="help-block text-right"><a href="">Forget the password ?</a></div>
                                                    </div>
                                                    <div class="form-group">
                                                         <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                                                    </div>
                                                    <div class="checkbox">
                                                         
                                                    </div>
                                             </form>
                                        </div>
                                        <div class="bottom text-center">
                                            New here ? <a href="frmsignup.php"><b>Join Us</b></a>
                                        </div>
                                 </div>
                            </li>
                        </ul>
                    </li>

        </ul>
        <!-- Links -->

        <!-- Search form -->
        <form class="form-inline">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
        </form>
    </div>
    <!-- Collapsible content -->

</nav>