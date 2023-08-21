<!--<!DOCTYPE HTML>
<html>  
<body>

<form action="tutorial.php" method="get">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">

</form>

</body>
</html>-->

<?php
 include('db_config.php');
?>
<html>
    <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript">
       // document.write(5 + 6);
        $(document).ready(function(){
            // Country dependent ajax
          
            $("#country").on("change",function(){
                var countryId = $(this).val();   
                alert('Country Selected  : ' + countryId);
                $.ajax({
                    url :"<?php echo base_url('action.php');?>",
                    type:"POST",
                    cache:false,
                    data:{countryId:countryId},
                    success:function(data){
                        $("#state").html(data);
                        alert('Country Selected');
                        $('#city').html('<option value="">Select city</option>');
                    }
                });
            
            });
                    
            // state dependent ajax
            $("#state").on("change", function(){
                var stateId = $(this).val();
                $.ajax({
                    url :'action.php',
                    type:'POST',
                    cache:false,
                    data:{stateId:stateId},
                    success:function(data){
                        $("#city").html(data);
                    }
                });
            });
        });
        function myaction(){
            alert('Country Selected');
           //alert('Country Selected....' + countryId);
            url='action.php';
            //url ="<?php echo base_url('TABLE1/action');?>";
            //url =base_url('TABLE1/action.php');
    
        }
    </script>


    </head>
    <body>
        <h1 align=center>Country-State-City</h1>
        <div class="container">
            <br/>
        <form action="" method="post">
            <div class="col-md-4">
            
                <!-- Country dropdown -->
                <label for="country">Country</label>
                <select class="form-control" id="country" onchange="myaction()">
                    <option value="">Select Country</option>

                    <?php
                    $query = "SELECT * FROM country";
                    $result = $conn->query($query);
                    if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                    echo '<option value="'.$row['id'].'">'.$row['cname'].'</option>';
                    }
                    }else{
                    echo '<option value="">Country not available</option>';
                    }
                    ?> 
                </select>
                <br/>
                    
                <!-- State dropdown -->
                <label for="country">State</label>
                <select class="form-control" id="state">
                    <option value="">Select State</option>
                 </select>
                <br/>
                
                <!-- City dropdown -->
                <label for="country">City</label>
                <select class="form-control" id="city">
                    <option value="">Select City</option>
                </select>
                <br/>
                <!--<input type="submit" name="submit">-->
            </div>
        </form> 
    </body>
</html>



