
<?php
include "connectDB.php";
?>
<!DOCTYPE html>
<html>
<head>
    <?php include "favicon.php";?>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <title>Ngoma Communications</title>
    <link href='https://fonts.googleapis.com/css?family=Poppins:400,300,200,500,600,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="about/css/material-cards.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style type="text/css">

        html {
            position: relative;
            min-height: 100%;
        }

        body {
            background-color: #383b3f;
            color: #37474F;
            font-family: 'Raleway', sans-serif;
            font-weight: 300;
            font-size: 16px;
        }

        h1, h2, h3 {
            font-weight: 200;
        }

        .float{
            position:fixed;
            width:60px;
            height:60px;
            bottom:10px;
            right:40px;
            background-color: gray;
            color:#FFF;
            border-radius:50px;
            text-align:center;
            box-shadow: 2px 2px 3px #999;
        }

        .my-float{
            margin-top:22px;
        }

    </style>
</head>
<body>

    <section class="container">
    <div class="page-header">
        <?php

        $title = "";
        if($_POST['programme'] == "KS"){
            $title = "Select a Keynote Speaker";
        }else{
            $title = "Select a Coach";
        }
        $concat = $_POST['concat'];
        ?>
        
        <h1 style="text-align: center; color: #A6A9A9; font-size: 40px;"><?php echo $title; ?></h1>
    </div>
    <div class="row active-with-click">
    <?php
        $sql = "SELECT * FROM ngomaFacilitators WHERE type='".$concat."' "; //DATABASE QUERY
        $result = mysqli_query($con, $sql);
        if(!$result){
        echo mysqli_error($con); //OUTPUT ANY ERROR ON DATABASE CONNECTION
         }
         else{
            $queryResult = mysqli_num_rows($result);  //GET QUERY RESULTS
             } 
        if($queryResult > 0 ){
            while ($row = mysqli_fetch_array($result)){ //CREATE A LOOP FOR EVERY RESLUT

        if($row['advisor_img'] === ""){ //PROFILE IMAGE
            $profile_img ='<img class="img-responsive" src="images/avatar.png" >';
        }else{
            $profile_img ='<img class="img-responsive" src="images/profiles/'.$row["facilitatorImg"].'">';
            
        } //
        echo '
            <div class="col-md-4 col-sm-6 col-xs-12">
            <article class="material-card Blue">
                <h2>
                    <span>'.$row["facilitatorName"].'</span>
                    <strong>
                        <i class="fa fa-fw fa-star"></i>
                        '.$row["facilitatorProfession"].'
                        <form method="POST" action="pages-proposal.php" style="display:in-line block; float:right;">
                        <input type="hidden" value="'.$_POST['programme'].'" name="programme" />
                        <input type="hidden" value="'.$_POST['offer'].'" name="offer" />
                        <input type="hidden" value="'.$row['facilitatorName'].'" name="facilitator" />
                        <button type="Submit" style="display:in-line block; float:right;" class="btn btn-success">Select</button>
                        </form>
                    </strong>
                </h2>
                <div class="mc-content">
                    <div class="img-container">
                       '.$profile_img.'
                    </div>
                    <div class="mc-description" style="color: #000; text-align:left;">
                        '.substr($row["facilitatorOfferings"], 0, 100).'..<br><br>
                        <form action="facilitator.php" method="POST">
                        <input type="hidden" value="'.$row["facilitatorID"].'" name="facilitator" />
                        <button type="submit"> Read more</button> 
                        </form>
                        
                    </div>
                </div>
                <a class="mc-btn-action">
                    <i class="fa fa-fw fa-bars"></i>
                </a>
            </article>
        </div>
        ';

            }
        }


?>
    </div>
</section>

<p>
    <a href="javascript:history.go(-1)" class="float">
        <i class="fa fa-reply my-float"></i>
    </a>
</p>

<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="about/js/jquery.material-cards.min.js"></script>
<script>
    $(function() {
        $('.material-card').materialCard({
            icon_close: 'fa-chevron-left',
            icon_open: 'fa-bars',
            icon_spin: 'fa-spin-fast',
            card_activator: 'click'
        });

        $('.material-card').on('shown.material-card show.material-card hide.material-card hidden.material-card', function (event) {
            console.log(event.type, event.namespace, $(this));
        });

    });
</script>
</body>
</html>