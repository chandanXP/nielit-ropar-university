<?php include("header.php") ; ?>


    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Contact</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Contact</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Contact Us</h6>
                <h1 class="mb-5">Contact For Any Query</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-12 col-md-12 wow fadeInUp" data-wow-delay="0.1s">
                    <h5>Thanks for contacting us</h5>
                    <p class="mb-4">
                        Your Response has been received and forwarded to the official concerned. We will shorty contact you.
                    </p>
                    <p>
                            Details Submitted are : <br><br>
                            Name: <?php echo $_POST['name'] ; ?> <br>
                            Email : <?php echo $_POST["email"] ; ?><br>
                            Phone: <?php echo $_POST["phone"] ; ?><br>
                            Subject: <?php echo $_POST["subject"] ; ?><br>
                            Message: <?php echo $_POST["message"] ; ?><br>

                    </p>
                   
                    <?php

                        // Always set content-type when sending HTML email
                            $headers = "MIME-Version: 1.0" . "\r\n";
                            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

                            // More headers
                            $headers .= 'From: <' . $_POST["email"] . '>' . "\r\n" ; 

                            mail ("ritukamal@yahoo.com" , "Contact Us - From Website", $_POST["message"] , $headers) ; 


                     ?>




                </div>
             
            </div>
        </div>
    </div>
    <!-- Contact End -->



<?php include("footer.php") ; ?>
