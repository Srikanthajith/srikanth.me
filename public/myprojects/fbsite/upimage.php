<!DOCTYPE html>
<html>
<head>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1">
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="css/animate.css" rel="stylesheet" type="text/css">
        <link href="style.css" rel="stylesheet" type="text/css">   
        <link href="css/font-awesome.css" rel="stylesheet" type="text/css">
    <title></title>

</head>

<style type="text/css">
body
{
    text-align: center;
    background-color: black;
    color: white
}



</style>
</head>
<body>




<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 brandname">
            Brand Name
        </div>
        <div class="col-xs-12 pageheading">
            Post your Favourite Picture!!
        </div>
        
        <form action="php/insertImage.php" method="post" class="form-group" enctype="multipart/form-data">

        <div class="col-xs-12 col-sm-offset-4 col-sm-4 inputposition animated flipInX">
            <input name="username" type="text" class="form-control inputfield input-lg " placeholder="@Username" id="adminid" required>
        </div>

        <div class="col-xs-12 col-sm-offset-3 col-sm-6 input-group animated flipInX">
            <input  name="motivequote" type="text" class="form-control inputfield input-lg" placeholder="Motivation Quote" id="adminpassword" required>
            <span class="input-group-addon">
            <span class="fa fa-question-circle-o fa-2x helpbut " data-toggle="tooltip" data-placement="bottom" title="What is motivation quote? A quote that inspires you as an individual. (Quotes submitted will be displayed on home screen)"></span>
            </span>
        </div>

        <div class="col-xs-12 col-sm-offset-3 col-sm-6 uploadbut inputposition animated flipInX">
            <label for="upload">
                <span class="fa fa-upload fa-5x" style="cursor:pointer;"></span><br>
            </label>
                <input type="file" id="upload" name="image" style="display:none; border:0px;" required/><br>
                <h1 class="pageheading">Upload Picture </h1>
                <small id="selectedfile" class="form-text text-red">No Images selected</small>
                <i class="fa fa-question-circle-o fa-2x " data-toggle="tooltip" data-placement="bottom" title="What kind of photo can I upload? Any photo which might be a motivation"></i><br>
        </div>
        <div class="col-xs-12 col-sm-offset-4 col-sm-4 sendbutton">
            <button class="btn-default btn-lg" type="submit">Send</button>
        </div>

        </form>
    </div>
</div>

<br>
Logout from <a href="php/logout.php?logout">Facebook</a>


<script src="js/jquery-2.0.2.js"></script>
<script src="js/bootstrap.js"></script>
<script>



    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();


    $('#upload').change(function(e){

        var filename = e.target.files[0].name;
        console.log(filename);
         document.getElementById("selectedfile").innerHTML = filename; 
    });
    });
    


    $('#upload').click(function(){
        if (document.getElementById('adminid').value=="admin@gmail.com" && document.getElementById('adminpassword').value=="admin123") 
        {
            console.log(2);
            window.location="adminpage.php";
        };
    });






</script>



</body>
</html>