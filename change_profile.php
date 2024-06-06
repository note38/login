<?php include "includes/db.php"; ?>
<?php
if (isset($_GET['p_id'])) {
   $the_id = $_GET['p_id'];
}
        $query = "SELECT * FROM account WHERE id = {$the_id} ";
        $select_query = mysqli_query($connection, $query);
        if (!$select_query) {
            die("QUERY FAILED" . mysqli_error($connection));
        }
        while ($row = mysqli_fetch_assoc($select_query)) {
            $id = $row['id'];
            $firstname = $row['firstname'];
            $lastname = $row['lastname'];
            $image = $row['image'];
            
        }

        if (isset($_POST['update_profile'])) {
            
           
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $image = $_FILES['image']['name'];
            $image_temp = $_FILES['image']['tmp_name'];
            

            move_uploaded_file( $image_temp, "images/$image");

            if (empty($image)) {
               $query = "SELECT * FROM account WHERE id = {$the_id} ";
               $select_image = mysqli_query($connection, $query);

               while ($row = mysqli_fetch_assoc($select_image)) {
                    $image = $row['image'];
               }
            }
            
            $query = "UPDATE account SET ";
            $query .= "image = '{$image}', ";
            $query .= "firstname = '{$firstname}', ";
            $query .= "lastname = '{$lastname}' ";
            $query .= "WHERE id = '{$the_id}'";

            $update_query = mysqli_query($connection, $query);

            if (!$update_query) {
                die("QUERY FAILED" . mysqli_error($connection));
            }else {
                echo "change succesfuly";
            }
            header("location: homepage.php");
          
        }
?>



<?php include 'templates/header.php'; ?>



<div class="bg-grey-lighter min-h-screen flex flex-col">
        <div class="container max-w-sm mx-auto flex-1 flex flex-col items-center justify-center px-2">
                    <a href="homepage.php"
                        class=" text-center bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 w-32 border-b-4 border-blue-700 hover:border-blue-500 rounded">
                        Back
                    </a>
            <div class="bg-white px-6 py-8 rounded shadow-md text-black w-full">

                <form action="" method="post" enctype="multipart/form-data">
                    
                <label for="image">Profie picture</label>
                    <input 
                        type="file" 
                        class="block border border-grey-light w-full p-3 rounded mb-4"
                        name="image">

                <label for="firstname">Firstname</label>
                    <input 
                        type="text"
                        class="block border border-grey-light w-full p-3 rounded mb-4"
                        name="firstname"
                        value="<?php echo $firstname; ?>" />

                <label for="lastname">Lastname</label>
                    <input 
                        type="text"
                        class="block border border-grey-light w-full p-3 rounded mb-4"
                        name="lastname"
                        value="<?php echo $lastname; ?>" />

                        <button 
                        name="update_profile"
                        class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 w-full border-b-4 border-blue-700 hover:border-blue-500 rounded">
                        Change
                        </button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>