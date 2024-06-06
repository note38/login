<?php session_start(); ?>
<?php include "includes/db.php"; ?>
<?php
    if (!$_SESSION['user_id']) {
        header("location: index.php");
    }
    
    $the_id = $_SESSION['user_id'];

    $query = "SELECT * FROM account WHERE id = {$the_id} ";
        $select_query = mysqli_query($connection, $query);
        if (!$select_query) {
            die("QUERY FAILED" . mysqli_error($connection));
        }
        while ($row = mysqli_fetch_assoc($select_query)) {
            $id = $row['id'];
            $firstname = $row['firstname'];
            $lastname = $row['lastname'];
            $email = $row['email'];
            $image = $row['image'];
            
        }

?>

<?php include 'templates/header.php'; ?>

    
</header>
<body class="">


<div class="max-w-md p-8 sm:flex sm:space-x-6 mx-auto drop-shadow-2xl border-solid border-2">
	<div class="flex-shrink-0 w-full mb-6 h-44 sm:h-32 sm:w-32 sm:mb-0">
		<img src="images/<?php echo $image; ?>" alt="" class="object-cover object-center w-full h-full rounded dark:bg-gray-500">
	</div>
	<div class="flex flex-col space-y-4">
		<div>
			<h2 class="text-2xl font-semibold"><?php echo $firstname; ?></h2>
			<span class="text-xl dark:text-gray-400"><?php echo $lastname; ?></span>
		</div>
		<div class="space-y-1">
            
			<span class="flex items-center space-x-2">
				<span class="dark:text-gray-400"><?php echo $email; ?></span>
			</span>
			
		</div>
	</div>
</div>

</body>