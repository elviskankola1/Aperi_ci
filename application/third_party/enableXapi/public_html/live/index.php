<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="icon5.png" rel="icon" type="image/png" sizes="195x195">
    <link rel="stylesheet" type="text/css" href="../css1/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css1/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="iofrm-theme2.css">
    <style type="text/css">
        #Layer_1{
            margin-left: 2rem;
            margin-right: 4rem;
            height: 22rem;
            margin-top: 6rem;
            overflow: visible;
        }
        .form-content {
    background-color: #8bc34a !important;
}
.form-body {
    background-color: #8bc34a;
}
.form-content input, .form-content .dropdown-toggle.btn-default {
    border: 0;
    background-color: #f5f5f5;
    color: #111 !important;
}
.form-holder .form-content ::-webkit-input-placeholder {
    color: #000 !important;
}

.form-holder .form-content :-moz-placeholder {
    color: #000 !important;
}

.form-holder .form-content ::-moz-placeholder {
    color: #000;
}

.form-holder .form-content :-ms-input-placeholder {
    color: #000 !important;
}










    </style>
</head>
<body style="background-color: #8bc34a;">
    <div class="form-body">

         <form action="api/create-token/index.php" method="POST">
        <div class="row">
            <div class="img-holder">
               <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1500 1500"><defs><style>.cls-1{fill:none;}.cls-2{clip-path:url(#clip-path);}.cls-3{fill:#4753a4;}.cls-4{fill:#fff;}.cls-5{fill:#f7fcfe;}</style><clipPath id="clip-path"><rect class="cls-1" x="-4.03" y="-4.97" width="1508.05" height="1508.05"/></clipPath></defs><title>Aperi</title><g class="cls-2"><rect class="cls-3" x="-4.03" y="-4.97" width="1508.05" height="1508.05"/><polygon class="cls-4" points="602.14 352.74 602.14 1145.38 775.71 1145.38 775.71 408.67 1088.14 352.74 602.14 352.74"/><path class="cls-4" d="M445.67,1103.94v23.17h-3.36v-6.51c-2.31,4.2-6.79,6.79-13.16,6.79-8.19,0-13.16-4.2-13.16-10.43,0-5.53,3.5-10.22,13.65-10.22h12.53v-2.94c0-6.79-3.71-10.43-10.85-10.43a19,19,0,0,0-12.6,4.62l-1.75-2.52a22.29,22.29,0,0,1,14.63-5.18C440.63,1090.29,445.67,1094.91,445.67,1103.94Zm-3.5,12.39v-6.86H429.71c-7.56,0-10.22,3.15-10.22,7.35,0,4.76,3.71,7.7,10.15,7.7C435.8,1124.52,440.07,1121.58,442.17,1116.33Z"/><path class="cls-4" d="M496.49,1108.84c0,11-7.77,18.55-18.06,18.55a16.36,16.36,0,0,1-14.84-8.61v21.91h-3.5v-50.12h3.36v8.61a16.33,16.33,0,0,1,15-8.89C488.72,1090.29,496.49,1097.92,496.49,1108.84Zm-3.5,0c0-9.17-6.37-15.4-14.77-15.4s-14.7,6.23-14.7,15.4,6.3,15.4,14.7,15.4S493,1118,493,1108.84Z"/><path class="cls-4" d="M538.21,1109.68H506.78c.35,8.68,6.72,14.56,15.47,14.56a14.74,14.74,0,0,0,11.69-5.11l2,2.31c-3.22,3.92-8.26,6-13.79,6-11.06,0-18.83-7.7-18.83-18.55s7.49-18.55,17.5-18.55,17.43,7.56,17.43,18.41C538.28,1109,538.21,1109.33,538.21,1109.68ZM506.85,1107h28c-.49-7.91-6.23-13.58-14-13.58S507.41,1099,506.85,1107Z"/><path class="cls-4" d="M566.42,1090.29v3.43c-.28,0-.56-.07-.84-.07-8.12,0-13,5.39-13,14.42v19h-3.5v-36.54h3.36v8C554.73,1093.23,559.56,1090.29,566.42,1090.29Z"/><path class="cls-4" d="M575,1078.88a2.88,2.88,0,0,1,2.87-2.88,2.84,2.84,0,1,1-2.87,2.88Zm1.12,11.69h3.5v36.54h-3.5Z"/><path class="cls-5" d="M835.92,859.66c-1.09,1.13-16.76-5.1-16.76-16.76s15.67-17.89,16.76-16.76c.91,1-8.38,7.08-8.38,16.76S836.83,858.71,835.92,859.66Z"/></g></svg>
                <div class="bg"></div>
                <div class="info-holder">

                </div>
            </div>
            
            <div  class="form-holder"> 
                <div class="form-content" >
                    <div class="form-items" style="margin-top: 6rem;">
                       <?php 
                       if($_GET['error'] =='false'){

                        echo '<div class="alert alert-danger">Access Denied!</div>';

                       }?>
                        <div class="page-links">
                            <a href="student_login.php" class="active">Login</a>
                        </div>
                       
                       
<input class="form-control" type="text" id="nameText" name="nameText" placeholder="Username" required value="<?php echo $_GET['name']?>">
<input class="form-control" type="text" id="roomName" name="meetingID" placeholder="Room ID" required value="<?php echo $_GET['id']?>">
<input class="form-control" type="text" id="room" name="roomPin" placeholder="Enter your Pin" required style="color: #000 !important;" value="<?php echo $_GET['roomPin']?>">
                          
                            <div class="form-button">
                                <button  type="submit" class="ibtn">Login</button> 
                            </div>
                            <span id="message" style="color: red"></span>
                        </form>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="../js1/jquery.min.js"></script>
<script src="../js1/popper.min.js"></script>
<script src="../js1/bootstrap.min.js"></script>
<script src="../js1/main.js"></script>
</body>

</html>