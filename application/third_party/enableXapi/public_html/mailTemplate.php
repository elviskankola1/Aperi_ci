<?php 
$messageTwo = "";
if(CheckData($_POST['type']) =="KS"){
  $messageTwo =  '
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
      </style>
      <body style="padding:10px;">
      <div id="main" style="max-width:700px; margin:0px auto; font-size:1em !important; display:block; background-color:white; padding10px;">
      <img src="https://www.ngomacommunications.com/images/logo2.png"  alt="Ngoma Communications Logo" style="width:200px; height:auto;">
      <div id="container" >
      <h4>Dear '.CheckData($_POST['title']).' '. CheckData($_POST['firstName']).' '. CheckData($_POST['lastName']).'</h4>
      <hr>
      <p style="text-align:left; ">
      Thank you for your interest in our Keynote Speakers. '.CheckData($_POST['facilitator']).' will be delighted to deliver a keynote speech at your event. . <br><br>

        I am currently looking into your request and will get back to you within 48 hours with the proposal you have requested.<br><br>

        Over the past 15 years, our keynote speakers have presented at hundreds of events on various topics relating to business leadership, career progress, vision and goal setting.
      Please note, the costs in our proposal will depend on the selected speaker’s fee as well as, if applicable, to expenses relating to the speaker’s travel and accommodation and other logistical factors.<br><br>

        I look forward to assisting you and to ensuring that your event is a success.<br><br>

        Should you have any query do not hesitate to contact me.  <br><br>

        Regards,

    <br><br>

      <h4>Luke N Mponda</h4>
      <p style="margin-top:-10px !important;">Head of Open Seminars & Keynote Speaking</p> 
      <br>
      <table>
        <tr>
        <tr>
          <td> E: </td>
          <td> luke@ngomacommunications.com </td>
        </tr>
        <tr>
         <td> M: </td>
          <td> +27 (62) 271 8694 (Personal)</td>
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
         <td> Website </td>
          <td> www.ngomacommunications.com </td>
        </tr>
      </table><br>
        <h5>Please find out more about us:</h5>
        <p style="margin-top:-10px !important; ">
          <a href="https://www.ngomacommunications.com/events.php">Open Seminars</a> | 
          <a href="https://www.ngomacommunications.com/pages-inhouse.php">In-House Seminars</a> |
          <a href="https://www.ngomacommunications.com/pages-executive.php">Executive Coaching</a> |
          <a href="https://www.ngomacommunications.com/pages-keynote.php">Keynote Speaking</a>
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
}elseif(CheckData($_POST['type']) =="EC"){
  $messageTwo = '
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
  </style>
  <body style="padding:10px;">
  <div id="main" style="max-width:700px; margin:0px auto; font-size:1em !important; display:block; background-color:white; padding10px;">
  <img src="https://www.ngomacommunications.com/images/logo2.png"  alt="Ngoma Communications Logo" style="width:200px; height:auto;">
  <div id="container" >
  <h4>Dear '.CheckData($_POST['title']).' '. CheckData($_POST['firstName']).' '. CheckData($_POST['lastName']).'</h4>
  <hr>
  <p style="text-align:left; ">
  Thank you for your interest in our keynote speakers. '.CheckData($_POST['facilitator']).'  .<br><br>


    Thank you for your interest in our Executive Coaching.  '.CheckData($_POST['facilitator']).' will be delighted to offer you '.$offer.' session on Name of the Executive Coaching Session. We will send you a proposal on your request within 48hrs.<br><br>


   Over the past 15 years, we have coached hundreds of professionals and entrepreneurs on various topics relating to leadership, career progress, vision and goal setting.<br>br>

  We maintain a pool of highly qualified executive coaches who are all business people with executive-level backgrounds. With these backgrounds comes a wealth of expertise to ensure you gain the necessary knowledge for tangible success in your progress.<br><br>

  Please note, the coaching fees in our proposal will depend on the number of participants as well as, if applicable to expenses relating to facilitator’s travel and accommodation and other logistical factors.<br><br>

  I look forward to assisting you and ensuring that your coaching session is a success.<br><br> 

  Should you have any query do not hesitate to contact me.  <br><br>

 Regards,
<br><br>

  <h4>Paul M Kabeya</h4>
      <p style="margin-top:-10px !important;">Head of In-House Seminars & Executive Coaching</p> 
      <br>
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
         <td> Website </td>
          <td> www.ngomacommunications.com </td>
        </tr>
  </table><br>
    <h5>Please find out more about us:</h5>
    <p style="margin-top:-10px !important; ">
     <a href="https://www.ngomacommunications.com/events.php">Open Seminars</a> | 
          <a href="https://www.ngomacommunications.com/pages-inhouse.php">In-House Seminars</a> |
          <a href="https://www.ngomacommunications.com/pages-executive.php">Executive Coaching</a> |
          <a href="https://www.ngomacommunications.com/pages-keynote.php">Keynote Speaking</a>
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
}else{
  $messageTwo ='
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
  </style>
  <body style="padding:10px;">
  <div id="main" style="max-width:700px; margin:0px auto; font-size:1em !important; display:block; background-color:white; padding10px;">
  <img src="https://www.ngomacommunications.com/images/logo2.png"  alt="Ngoma Communications Logo" style="width:200px; height:auto;">
  <div id="container" >
  <h4>Dear '.CheckData($_POST['title']).' '. CheckData($_POST['firstName']).' '. CheckData($_POST['lastName']).'</h4>
  <hr>
 

      Thank you for your interest in our In-house Workshops. Ngoma Communications will be delighted to offer our '.CheckData($_POST['programme']).' to '.CheckData($_POST['company']).'. We will send you a proposal on your request within 48hrs.<br><br>

    While our open or public seminars allow companies to respond to the learning and development needs of one delegate or very small number of delegates giving them at the same time the opportunity to interact and network with their peers from different industries, our in-house off-the-shelf or customized training workshops on the other hand, are ideal for companies with groups of at least 10 participants who need to develop their skills in a practical and hands-on way. They allow companies to save on travel and accommodation costs for participants and creates teamwork.<br><br>

    Over the past 15 years, we have delivered in 45 countries hundreds of open and in-house training seminars as well as Keynote speeches on various topics relating to business leadership.
    <br><br>

    We maintain a pool of highly qualified facilitators who are all business people with executive-level backgrounds working for international corporations. With these backgrounds comes the wealth of expertise to ensure each participant gains the necessary knowledge for tangible success with every training seminar.
    <BR><BR>

    Please note that the costs of the seminar in our proposal will depend on the number of participants as well as, if applicable, to expenses relating to the facilitators travel and accommodation expenses and other logistical factors.
    <br><br>

    I look forward to assisting you and ensuring that your in-house seminar session is success. 
    <BR><BR>

  <h4>Paul M Kabeya</h4>
  <p style="margin-top:-10px !important;">Head of In-House Seminars</p> 
  <br>
  <table>
    <tr>
    <tr>
      <td> Email: </td>
      <td> paul@ngomacommunications </td>
    </tr>
    <tr>
     <td> Contact: </td>
      <td> +27 (67) 957 3809 </td>
    </tr>
    <tr>
     <td> Assistant </td>
      <td> +27 (66) 266 9364 </td>
    </tr>
    <tr>
     <td> Fixed-Line </td>
      <td> +27 (11) 83 6003 </td>
    </tr>
    <tr>
     <td> Website </td>
      <td> www.ngomacommunications.com </td>
    </tr>
  </table><br>
    <h5>Please find out more about us:</h5>
    <p style="margin-top:-10px !important; ">
      <a href="https://www.ngomacommunications.com/events.php">Open Seminars</a> | 
          <a href="https://www.ngomacommunications.com/pages-inhouse.php">In-House Seminars</a> |
          <a href="https://www.ngomacommunications.com/pages-executive.php">Executive Coaching</a> |
          <a href="https://www.ngomacommunications.com/pages-keynote.php">Keynote Speaking</a>
    <br><br>
    </p> 

    <h5 style="text-align:center;" >You can follow us on social media:</h5>
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
  </html>
  ';
}




?>