<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="icon5.png" rel="icon" type="image/png" sizes="195x195">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="../css/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="../css/iofrm-theme2.css">
    <style type="text/css">
        #Layer_1{
            margin-left: -1rem;
            margin-right: 4rem;
            height: 22rem;
            margin-top: 6rem;
            overflow: visible;
        }
    </style>
</head>
<body>
    <div class="form-body">

         <form action="api/create-token/index.php" method="POST">
        <div class="row">
            <div class="img-holder">
               <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 841.89 841.89"><defs><style>.cls-1,.cls-4,.cls-6{fill:#175d77;}.cls-2{fill:#20a0b2;}.cls-3{fill:#a7d1e1;}.cls-4{font-size:232.8px;font-family:Lobster1.3, "Lobster 1.3";}.cls-5{letter-spacing:-0.01em;}.cls-6{font-size:22.7px;font-family:Roboto-Condensed, Roboto;letter-spacing:0.23em;}.cls-7{letter-spacing:0.23em;}</style></defs><title>Artboard 1</title><path class="cls-1" d="M640.12,206.15s-232.73,49.32-220.4,377.6c0,0-47.77-117.13-234.26-157.21L174.67,159.91s195.74-4.62,232.72,205C407.39,364.89,484.46,224.64,640.12,206.15Z"/><path class="cls-2" d="M166,214.2l7.7,218.86S371,468.51,384.87,557.9c0,0-33.91-81.69-226.56-81.69l-64.73-262S142.9,205,166,214.2Z"/><path class="cls-3" d="M380.7,557.9s-72.43-67.81-235.81-30.82L35.47,282s48.59-22.16,64.73-12.33l55.48,214.23S300.56,471.59,380.7,557.9Z"/><text class="cls-4" transform="translate(443.75 573.56)"><tspan class="cls-5">i</tspan><tspan x="60.76" y="0">nco</tspan></text><text class="cls-6" transform="translate(443.75 599.22)"><tspan xml:space="preserve">Making  </tspan><tspan class="cls-7" x="117.78" y="0">E</tspan><tspan x="133.87" y="0" xml:space="preserve">ducation  Simple</tspan></text></svg>
                <div class="bg"></div>
                <div class="info-holder">

                </div>
            </div>
            
            <div  class="form-holder"> 
                <div class="form-content" >
                    <div class="form-items" >
                       <?php 
                       if($_GET['error'] =='false'){

                        echo '<div class="alert alert-danger">Access Denied!</div>';

                       }?>
                        <div class="page-links">
                            <a href="student_login.php" class="active">Login</a>
                        </div>
                       
                       
                            <input class="form-control" type="text" id="nameText" name="nameText" placeholder="Username" required>
                            <input class="form-control" type="text" id="roomName" name="meetingID" placeholder="Room ID" required>
                            <input class="form-control" type="text" id="room" name="roomPin" placeholder="Enter your Pin" required>
                          
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
<script src="../js/jquery.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/main.js"></script>
</body>

</html>