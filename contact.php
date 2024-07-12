<?php 

include('header.php');

?>



<main>
    <div class="container-fluid pam-page-header">
        <div class="container">
            <div class="row" >
  
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="container"> 
            <div class="row p-5"> 
                <div class="col text-center">
                    <h1 class="cen-font-darkblue">CONTACT</h1>
                </div>
            </div>


            <div class="row pb-5"> 
                <form action="forms/appointment.php" method="post" role="form" class="php-email-form">
                <div class="row">
                    <div class="col-md-6 form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                    <div class="validate"></div>
                    </div>
                    <div class="col-md-6 form-group mt-3 mt-md-0">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
                    <div class="validate"></div>
                    </div>

                </div>

                <div class="form-group mt-3">
                    <textarea class="form-control" name="message" rows="5" placeholder="Message (Optional)"></textarea>
                    <div class="validate"></div>
                </div>
                <div class="mb-3">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your appointment request has been sent successfully. Thank you!</div>
                </div>
                <div class="text-center ">
                    <button type="submit" class="btn btn-primary pam-bg-blue py-2 px-3">SUBMIT</button>
                </div>
                </form>

            </div>
        </div>
    </div>


</main>



<?php 

include('footer.php');

?>