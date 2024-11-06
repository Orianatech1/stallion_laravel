@extend('layout.main')
@section('main-containt')


<?php
if(isset($_REQUEST['submit'])){
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$message=$_REQUEST['message'];

$to = "bookings@stallioncoaches.com";
$subject = "Website Enquiry";
$message='
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stallion Coaches</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        table, th, td {
          border:1px solid #cbcbcb;
          border-collapse: collapse;
        }

        .main{
            width: 800px;
            margin: 0px auto;
            padding: 20px;
        }
        </style>

</head>
<body style="background:#e9e9e9; white; padding: 100px 100px; color: #333;">
    <div class="main" style="width: 800px; background: #fff; margin: 0 auto; box-shadow: 2px 2px 8px #ddd; padding: 20px; ">
        <table style="border: 1px solid #cbcbcb; width:100%">
        <table style="border: 1px solid #cbcbcb; width:100%">

            <tr>
                <th style="color: #0964ab; padding: 7px 0px; font-size: 26px;
                letter-spacing: 1px; font-family: "Open Sans", sans-serif; font-weight: 400; border: none; background: #e9e9e9;" colspan="2">Mail from Stallion Coaches </th>
            </tr>



               <tr>
                <td style="font-family: "Open Sans", sans-serif; font-weight: 500; font-size: 24px; border: 1px solid #cbcbcb; padding: 5px 0px; padding: 5px;">Name :</td>
                <td style="font-family: "Open Sans", sans-serif; font-weight: 400; font-size: 24px; border: 1px solid #cbcbcb; padding: 5px 0px; padding: 5px;">'.$name.'</td>
            </tr>

                        <tr>
                <td style="font-family: "Open Sans", sans-serif; font-weight: 500; font-size: 24px; border: 1px solid #cbcbcb; padding: 5px 0px; padding: 5px;">Email :</td>
                <td style="font-family: "Open Sans", sans-serif; font-weight: 400; font-size: 24px; border: 1px solid #cbcbcb; padding: 5px 0px; padding: 5px;">'.$email.'</td>
            </tr>




            <tr>
                <td style="font-family: "Open Sans", sans-serif; font-weight: 500; font-size: 24px; border: 1px solid #cbcbcb; padding: 5px 0px; padding: 5px;">Message :</td>
                <td style="font-family: "Open Sans", sans-serif; font-weight: 400; font-size: 24px; border: 1px solid #cbcbcb; padding: 5px 0px; padding: 5px;">'.$message.'</td>
            </tr>


        </table>


    </div>
</body>';

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <'.$name.'>' . "\r\n";

mail($to,$subject,$message,$headers);

echo "<script>alert('Your Service Request Submit Successfully ');</script>";
   echo "<script>window.location='thankyou.php'</script>";

}
?>


        <!-- main-area -->
        <main>

            <!-- breadcrumb-area -->
            <section class="breadcrumb-area breadcrumb-bg" data-background="img/bg/breadcrumb_bg.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="breadcrumb-content text-center">
                                <h2>Contact Us</h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{('/')}}">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb-area-end -->

            <!-- contact-area -->
            <section class="contact-area pt-120">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 col-lg-6">
                            <div class="contact-info-wrap">
                                <div class="section-title text-left mb-25">
                                    <span class="sub-title"> </span>
                                    <h2 class="title"> </h2>
                                    <div class="line"><img src="img/images/title_line.png" alt=""></div>
                                </div>
                                <p align="justify"> Our dedicated and friendly team is on standby 24/7 to take your calls and bookings</p>
                                <ul class="contact-info-list">
                                    <li>
                                        <div class="icon"><i class="fas fa-map-marker-alt"></i></div>
                                        <div class="content">
                                            <h5> </h5>
                                            <p>26 Manor Road,
Edgbaston, Birmingham.
United Kingdom.
B16 9ND</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon"><i class="fas fa-phone-alt"></i></div>
                                        <div class="content">
                                            <h5> </h5>
                                            <p><a href="tel:07733324160">07733324160 </a></p>
 <p><a href="tel:07769470144 "> 07769470144 </a></p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon"><i class="far fa-envelope"></i></div>
                                        <div class="content">
                                            <h5> </h5>
	                                            <p ><a href="bookings@stallioncoaches.com"><span class="" data-cfemail="">    bookings@stallioncoaches.com </a></p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-6">
                            <div class="contact-form-wrap">
                                <div class="login-wrap">
                                    <h3 class="widget-title">Get in  <span>Touch</span></h3>
                                    <form action="#" method="post" class="login-form">
                                          <div class="form-grp">
                                            <label for="name">Your Name <span>*</span></label>
                                            <input type="text" id="name" name="name" placeholder="Your Name">
                                        </div>



                                         <div class="form-grp">
                                            <label for="email">Your Email <span>*</span></label>
                                            <input type="email" id="email" name="email" placeholder="Your Email">
                                        </div>
                                         <div class="form-grp">
                                            <label for="message">Your Message <span>*</span></label>
                                            <textarea name="message" id="message" placeholder="Hello..."></textarea>
                                        </div>

                                         <button class="btn" type="submit" name="submit">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- contact-area-end -->





        </main>
        <!-- main-area-end -->

@endsection
