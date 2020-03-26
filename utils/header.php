<header class="bgImage">
    <nav class="navbar">
        <div class="container">
            <div class="navbar-header"><!--website name/title-->
                <?php 
                require_once 'utils/functions.php';
                echo '<a href = "home.php" class = "navbar-brand">
                    SVNIT Clubs
                </a> ';
                ?>
            </div>
            <ul class="nav navbar-nav navbar-right"><!--navigation-->
                <?php 
                //links to database contents. *if logged in
                
                    echo '<li><a href = "home.php">Home</a></li>';
                    echo '<li><a href = "gallery.php">Gallery</a></li>';
                    echo '<li><a href = "participate.php">Participate</a></li>';
                    echo '<li><a href = "locations2.php">Events</a></li>';
                    echo '<li><a href = "contact.php">Contact Us</a></li>';
                    echo '<li class="btnlogout"><a class = "btn btn-default navbar-btn" href = "mylogin.php">Logout <span class = "glyphicon glyphicon-log-out"></span></a></li>';
                  
                
                ?>
                
                
            </ul>
        </div><!--container div-->
    </nav>
    <div class = "col-md-12">
        <div class = "container">
            <div class = "jumbotron"><!--jumbotron-->
                <h1>CLUBS AND EVENTS</h1><!--jumbotron heading-->
                <p><!--jumbotron content-->
                Take a limitation and turn it into an opportunity. Take an opportunity and turn it into an adventure by dreaming big!
                </p>
                <p id="dateAndTime"></p>
            </div>
        </div>
    </div>
</header>