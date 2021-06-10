<?php 
session_start();
$message = "";

      $message .=  '
      <html>
      <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Ngoma Communications</title>
      <script src="js/jquery.min.js" type="text/javascript"></script>
      <script src="js/custom.js" type="text/javascript"></script>
      <link rel="stylesheet" type="text/css" href="css/style.css">
      </head>
      <style>

      html, body{
        font-size:1em;
      }
      .img-icons{
        width:25px; 
        padding:5px;
        border-radius:50%;
        position:relative;
        top:14px;
      }
      </style>
      <body style="padding:10px;">
      <div id="main" style="max-width:700px; margin:0px auto; font-size:1em !important; display:block; background-color:white; padding10px;">
      <img src="https://www.ngomacommunications.com/images/logo2.png"  alt="Ngoma Communications Logo" style="width:200px; height:auto;">
      <p style="text-align:left;">
      <b><img src="https://cdn1.iconfinder.com/data/icons/instagram-ui-flat/48/Instagram_UI-19-512.png" class="img-icons" style=" background:#ff0000;width:30px; height:30px;border-radius:50%; ">Leading Yourself </i></b> 
      <b><img src="https://cdn1.iconfinder.com/data/icons/instagram-ui-flat/48/Instagram_UI-19-512.png" class="img-icons" style="background:blue;width:30px; height:30px;border-radius:50%;">Leading People</b> 
      <b><img src="https://cdn1.iconfinder.com/data/icons/instagram-ui-flat/48/Instagram_UI-19-512.png" class="img-icons" style=" background:#4caf50; width:30px; height:30px; border-radius:50%;">Leading Organisations</b> <br><br>
       </p>
      <div id="container" >
      <p style="text-align:left; line-height:15px;">
      To:  <br><strong>'.CheckData($_POST['name']).'</strong><span style="float:right;"> Johannesburg, '.date('Y/m/d').'</span>
       <strong>'.CheckData($_POST['position']).' </strong><br>
     '.CheckData($_POST['organisation']).'<br>
     '.CheckData($_POST['telephone']).',<br>
     '.CheckData($_POST['suburb']).',<br>
     '.CheckData($_POST['town']).'<br><br>
       <b>RE: Goal - Illustration Activity</b>
      <hr><br>

    <h4>Dear '.CheckData($_POST['name']).' </h4>
    '.nl2br(CheckData($_POST['message'])).'
      <h4>Paul Mukuna</h4>
      <p style="margin-top:-15px !important;">Head of In-House Seminars & Executive Coaching</p> 
      <table>
        <tr>
        <tr>
          <td> E: </td>
          <td> paul@ngomacommunications.com</td>
        </tr>
        <tr>
         <td> M: </td>
          <td> +27 (67) 957 3809 (Personal)</td>
        </tr>
        <tr>
         <td> M: </td>
          <td> +27 (66) 266 9364 (Assistant)</td>
        </tr>
        <tr>
         <td> F: </td>
          <td> + 27 (11) 83 6003 (Fixed-line)</td>
        </tr>
        <tr>
         <td> W</td>
          <td> www.ngomacommunications.com </td>
        </tr>
      </table><br>
        <h5>Please find out more about us:</h5>
        <p style="margin-top:-10px !important; color:#5cb85c;">
          <a >Open Seminars</a> | 
          <a >In-House Seminars</a> |
          <a >Executive Coaching</a> |
          <a >Keynote Speaking</a>
        <br><br>
        </p> 

        <h5 style="text-align:center;">You can follow us on social media:</h5>
        <div align="center" style="width;100%; padding-top:10px padding-bottom:10px;">
            
           <span style="line-height:20px;font-size:10px"><a href="https://www.facebook.com/NgoCommunications/" target="_blank" ><img src="http://i.imgbox.com/BggPYqAh.png" alt="fb" style="width:20px" ></a>&nbsp;</span>

            <span style="line-height:20px;font-size:10px"><a href="https://twitter.com/Ngomacomms" target="_blank" ><img src="http://i.imgbox.com/j3NsGLak.png" alt="twit" style="width:20px" ></a>&nbsp;</span>

            <span style="line-height:20px;font-size:10px"><a href="https://www.youtube.com/channel/UCnMKWqfCy-SgY9yCDzfP_LA" target="_blank" ><img src="https://cdn.pixabay.com/photo/2016/07/03/18/36/youtube-1495277_960_720.png" alt="g" style="width:20px" ></a>&nbsp;</span>

            <span style="line-height:20px;font-size:10px"><a href="https://www.linkedin.com/in/ngoma-communications" target="_blank" ><img src="https://cdn.pixabay.com/photo/2017/08/23/22/59/linked-in-2674741_960_720.png" alt="fb" style="width:20px"></a>&nbsp;</span>

            <span style="line-height:20px;font-size:10px"><a href="https://www.instagram.com/Ngomacomms/" target="_blank"><img src="https://cdn.pixabay.com/photo/2016/08/09/17/52/instagram-1581266_960_720.jpg" alt="twit" style="width:20px"></a>&nbsp;</span>
            
            <span style="line-height:20px;font-size:10px"><a href="whatsapp://send?text=Hello&phone=+27662669364" target="_blank"><img src="https://cdn.pixabay.com/photo/2015/08/03/13/58/soon-873316_960_720.png" alt="twit" style="width:20px"></a>&nbsp;</span>

            <span style="line-height:20px;font-size:10px"><a href="https://join.skype.com/invite/f4H8DhzuWg5w" target="_blank" ><img src="https://cdn.pixabay.com/photo/2017/08/20/10/31/skype-2661209_960_720.jpg" alt="g" style="width:20px" ></a>&nbsp;</span>

          <div>
        </div>  
      <div align="center" style="width;100%; padding-top:10px padding-bottom:10px;"> &copy; 2019  Ngoma Communications. All Rights Reserved.</div>

      </div>
      </div>
      </body>
      </html>';

      ?>