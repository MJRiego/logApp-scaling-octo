<?php
require_once('config/config.php');
require_once('config/db.php');

//will get the all infromation from person table in database
$query_db = "SELECT * FROM person ORDER BY user_id DESC";
$query = mysqli_query($conn, $query_db);


//check if there is any rows 
if (mysqli_num_rows($query) > 0) {
    // to fetch all the rows
    $persons = mysqli_fetch_all($query, MYSQLI_ASSOC);
  } else {
    $persons = [];
  }

?>

<?php include('inc/header.php'); ?>
	<div class="container">
    <br/>
		<h2>Person's Log</h2>
        <table class="table">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Lastname</th>
                    <th scope="col">Firstname</th>
                    <th scope="col">Address</th>
                    <th scope="col">Log Date and Time</th>
                    </tr>
                </thead>
		
			<div class="well">
                <tbody>
                <?php foreach($persons as $person) : ?>
                    <tr>
                    <th scope="row"><?php echo $person['user_id'];?></th>
                    <td><?php echo $person['last_name'];?></td>
                    <td><?php echo $person['first_name'];?></td>
                    <td><?php echo $person['address'];?></td>
                    <td><?php echo $person['logdt'];?></td>
                    </tr>
                <?php endforeach; ?>   
                </tbody>
            </div>
        </table>
        <br/>

            <button type="button" class="btn btn-dark btn-sm" onclick="document.location='guestbook-login.php'">Logout</button>
</div>
<?php include('inc/footer.php'); ?>