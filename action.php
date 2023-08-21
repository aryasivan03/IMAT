
<?php
echo "Country-State-City";
$country=$_POST['countryId'];
echo $country;
// Include the database connection file
include('db_config.php');

/*if (isset($_POST['countryId']) && !empty($_POST['countryId'])) {

 // Fetch state name base on country id
$query = "SELECT * FROM tbl_state WHERE country_id = ".$_POST['countryId'];
$result = $conn->query($query);
 if ($result->num_rows > 0) {
 echo '<option value="">Select State</option>';
 while ($row = $result->fetch_assoc()) {
 echo '<option value="'.$row['id'].'">'.$row['sname'].'</option>';

 }
 } else {
 echo '<option value="">State not available</option>';
 }
} elseif(isset($_POST['stateId']) && !empty($_POST['stateId'])) {
 
 // Fetch city name base on state id
 $query = "SELECT * FROM city WHERE state_id = ".$_POST['stateId'];
 $result = $conn->query($query);
 
 if ($result->num_rows > 0) {
 echo '<option value="">Select city</option>';
 while ($row = $result->fetch_assoc()) {
 echo '<option value="'.$row['id'].'">'.$row['city_name'].'</option>';
 }
 } else {
 echo '<option value="">City not available</option>';
 }
}
?>
<?php 
if(isset($_POST['submit'])){ 
    echo 'Selected Country Code: '.$_POST['country']; 
    echo 'Selected State Code: '.$_POST['state']; 
    echo 'Selected City Name: '.$_POST['city']; 
}*/ 
?>
