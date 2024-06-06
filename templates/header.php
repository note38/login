
<!DOCTYPE html>
<html lang="en">
<head>
    
    <link rel="stylesheet" href="css/fontawesome-free-6.4.0-web/css/fontawesome.css">
    <link rel="stylesheet" href="css/fontawesome-free-6.4.0-web/css/brands.css">
    <link rel="stylesheet" href="css/fontawesome-free-6.4.0-web/css/solid.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title></title>
</head>
<header>
    <nav>
        <div class="flex justify-around py-6">
            <section>
                <h3>logo</h3>
            </section>
            <section class="">
                <a class="py-2 px-6 font-semibold border rounded dark:border-gray-200 m-2"
                    href="change_profile.php?p_id=<?php echo $_SESSION['user_id']; ?>">
                    change profile
                </a>
                 <a 
                class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-6 border-b-4 border-blue-700 hover:border-blue-500 rounded" 
                href="./includes/logout.php">
                    Log out
                </a>
            </section>
        </div>
    </nav>