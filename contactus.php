<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'link.php' ?>





  <title>Document</title>
</head>

<body>
    <?php include 'navbar.php'?>




<!--  -->
<div class="container  "  >
<div class="row mt-5 ">
  <div class="col m6 s12 offset-l2">
  <h2 class="font-bold">SEND US A DIRECT MESSAGE</h2>
          <p >SR Designs serve a rich and diverse base of clients across India. We do measure our success in success of our clients. We do try our level best by offering personalized services with objective of meeting their requirements in most effective and efficient manner and we are committed to achieve maximum customer satisfaction,we are serving a client base of 200+ Architects, Interior designers, builders and counting</p>
       </div>

      <div class="col m3 s12  border bg-primary"><h3 class="py-5 px-3 mt-5" style="padding: ">LET'S BUILD SOMETHING AWESOME!</h3></div>
  
</div>
 </div>
 </div>

<!-- new form -->
<!-- <div >
    <section >
       <div class="row ">
        <div class="col s4 m4 14 offset-l4 "><hr></div>
        
    </div>
    <h2 class="center-align blue-text">Contact Form</h2>
     <?php 
                            $Msg = "";
                            if(isset($_GET['error']))
                            {
                                $Msg = " Please Fill in the Blanks ";
                                echo '<div class="alert alert-danger">'.$Msg.'</div>';
                            }

                            if(isset($_GET['success']))
                            {
                                $Msg = " Your Message Has Been Sent ";
                                echo '<div class="alert alert-success">'.$Msg.'</div>';
                            }
                        
                        ?>

    <div class="row ">
        <div class="col s4 m4 14 offset-l4 "><hr></div>
        
    </div>

    <div class="row ">
        <div class="col m6 16 offset-l3 ">

  <div class="row">
    <form class="col s12 ">
      <div class="row">

        <div class="input-field col s6">
             <i class="material-icons prefix">account_circle</i>
          <input placeholder="Placeholder" id="first_name" type="text" class="validate">

          <label for="first_name">First Name</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" type="text" class="validate">
          <label for="last_name">Last Name</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
                      <i class="material-icons prefix">phone</i>

          <input  value="1234567890" id="number" type="text" class="validate">
          <label for="number">Phone Number</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
                      <i class="material-icons prefix">mode_edit</i>

          <input id="password" type="text" class="validate">
          <label for="password">Message</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
            <i class="material-icons prefix far fa-envelope"></i>
          <input id="email" type="email" class="validate">
          <label for="email">Email</label>
        </div>
      </div>
      <button class="btn waves-effect waves-light " type="submit" name="action">Submit
    <i class="material-icons right">send</i>
  </button> -->


    <!-- adabdakdbada -->
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class=" mt-5">
                    <div class="font-weight-bold">
                        <h2 class="text-center py-2 font-bold"> Contact Us </h2>
                        <hr>
                        <?php 
                            $Msg = "";
                            if(isset($_GET['error']))
                            {
                                $Msg = " Please Fill in the Blanks ";
                                echo '<div class="alert alert-danger">'.$Msg.'</div>';
                            }

                            if(isset($_GET['success']))
                            {
                                $Msg = " Your Message Has Been Sent ";
                                echo '<div class="alert alert-success">'.$Msg.'</div>';
                            }
                        
                        ?>
                    </div>
                    <div class="card-body">
                        <form action="process.php" method="post">
                        <div class="input-field col s6">
                        <i class="material-icons prefix">account_circle</i>
                            <input type="text" name="UName" placeholder="User Name" class="form-control mb-2"></div>
                            <div class="input-field col s12">
            <i class="material-icons prefix far fa-envelope"></i>
                            <input type="email" name="Email" placeholder="Email" class="form-control mb-2"></div>
                            <div class="input-field col s12">
                      <i class="material-icons prefix">phone</i>
                            <input type="number" name="Subject" placeholder="Mobile No" class="form-control mb-2"></div>
                            
        <div class="input-field col s12">
                      <i class="material-icons prefix">mode_edit</i>
                            <textarea name="msg" class="form-control mb-2" placeholder="Write The Message"></textarea></div>
                            <div class="input-field col s12"><button class="btn waves-effect waves-light" name="btn-send"> SUMBIT </button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- adaudadadladn -->
 
  </div>
            
        </div>
        
    </div>

</section>
    
</div>
<?php include 'footer.php' ?>

<script type="text/javascript">$(document).ready(function(){
    $('select').formSelect();
  });</script>
  <script type="text/javascript"> $(document).ready(function(){
    $('.sidenav').sidenav();
  });</script>