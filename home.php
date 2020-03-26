<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Club Management System</title>
        <?php require 'utils/styles.php'; ?><!--css links. file found in utils folder-->
        <?php require 'utils/scripts.php'; ?><!--js links. file found in utils folder-->
    </head>
    <body>
        <?php require 'utils/header.php'; ?><!--header content. file found in utils folder-->
        <div class = "content"><!--body content holder-->
            <div class = "container">
                <div class = "col-md-12"><!--body content title holder with 12 grid columns-->
                    <h1>Categories</h1><!--body content title-->
                </div>
            </div>
			
            <div class="container">
            <div class="col-md-12">
            <hr>
            </div>
            </div>
			
            <div class="row">
                <section>
                    <div class="container">
                        <div class="col-md-6"><!--image holder with 6 grid columns-->
                            <img src="images/artcraft.jpg" class="img-responsive">
                        </div>
                        <div class="subcontent col-md-6"><!--Text holder with 6 column grid-->
                            <h1>Art and Craft</h1><!--title-->
                            <p><!--content-->
                            Creativity is allowing yourself to make mistakes. Art is knowing which ones to keep. 
                            </p>
                            <hr class="customline"><!--css modified horizontal line-->
                            <a href="gallery.php">
                            <button type="button" class="btn btn-default btn-lg"><!--view event button (no function implemented)-->
                            View Clubs <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span><!--arrow right glyphicon-->
                            </button></a>
                        </div><!--subcontent div-->
                    </div><!--container div-->
                </section>
            </div><!--row div-->
			
            <div class="container">
            <div class="col-md-12">
            <hr>
            </div>
            </div>

            <div class="row">
                <section>
                    <div class="container">
                        <div class="col-md-6"><!--image holder with 6 grid columns-->
                            <img src="images/dancemusic.jpg" class="img-responsive">
                        </div>
                        <div class="subcontent col-md-6"><!--Text holder with 6 column grid-->
                            <h1>Dance and Music</h1><!--title-->
                            <p><!--content-->
                            Put music to our troubles and we'll dance them away!
                            </p>
                            <hr class="customline"><!--css modified horizontal line-->
                            <a href="gallery.php">
                            <button type="button" class="btn btn-default btn-lg"><!--view event button (no function implemented)-->
                            View Clubs  <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span><!--arrow right glyphicon-->
                            </button></a>
                        </div><!--subcontent div-->
                    </div><!--container div-->
                </section>
            </div><!--row div-->
			
            <div class="container">
            <div class="col-md-12">
            <hr>
            </div>
            </div>

            <div class="row">
                <section>
                    <div class="container">
                        <div class="col-md-6"><!--image holder with 6 grid columns-->
                            <img src="images/litaffairs.jpg" class="img-responsive">
                        </div>
                        <div class="subcontent col-md-6"><!--Text holder with 6 column grid-->
                            <h1>Literary Affairs</h1><!--title-->
                            <p><!--content-->
                            Write what should not be forgotten. Want to create an influence by penning your thoughts? Let's deconstruct. 
                            </p>
                            <hr class="customline"><!--css modified horizontal line-->
                            <a href="gallery.php">
                            <button type="button" class="btn btn-default btn-lg"><!--view event button (no function implemented)-->
                            View Clubs  <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span><!--arrow right glyphicon-->
                            </button> 
                            </a>    

                        </div><!--subcontent div-->
                    </div><!--container div-->
                </section>
            </div><!--row div-->
			
            <div class="container">
            <div class="col-md-12">
                <hr>
            </div>
            </div>

            <div class="row">
                <section>
                    <div class="container">
                        <div class="col-md-6"><!--image holder with 6 grid columns-->
                            <img src="images/robot.jpg" class="img-responsive">
                        </div>
                        <div class="subcontent col-md-6"><!--Text holder with 6 column grid-->
                            <h1>Technical Clubs</h1><!--title-->
                            <p><!--content-->
                            The science of today is the technology of tomorrow. So get your thinking caps on and apply what you learn into the real world!
                            </p>
                            <hr class="customline"><!--css modified horizontal line-->
                            <a href="gallery.php">
                            <button type="button" class="btn btn-default btn-lg"><!--view event button (no function implemented)-->
                            View Clubs  <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span><!--arrow right glyphicon--> 
                            </button> </a>
                        </div><!--subcontent div-->
                    </div><!--container div-->
                </section>
            </div><!--row div-->
        </div><!--body content div-->
        <?php require 'utils/footer.php'; ?><!--footer content. file found in utils folder-->
    </body>
</html>
