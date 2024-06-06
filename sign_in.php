<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/fontawesome-free-6.4.0-web/css/fontawesome.css">
    <link rel="stylesheet" href="css/fontawesome-free-6.4.0-web/css/brands.css">
    <link rel="stylesheet" href="css/fontawesome-free-6.4.0-web/css/solid.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title></title>
</head>
<body class="">
    <div class="bg-grey-lighter min-h-screen flex flex-col">
        <div class="container max-w-sm mx-auto flex-1 flex flex-col items-center justify-center px-2">
            <div class="bg-white px-6 py-8 rounded shadow-md text-black w-full">
                <h1 class="mb-8 text-3xl text-center">Sign up</h1>

                <!-- Display error messages in this div -->
                <div id="error-message" class="text-red-500 mb-4">
                    
                </div>

                <form action="./includes/signin.php" method="post">

                    <input 
                        type="text"
                        class="block border border-grey-light w-full p-3 rounded mb-4"
                        name="firstname"
                        placeholder="First Name" />

                    <input 
                        type="text"
                        class="block border border-grey-light w-full p-3 rounded mb-4"
                        name="lastname"
                        placeholder="Last Name" />

                    <input 
                        type="email"
                        class="block border border-grey-light w-full p-3 rounded mb-4"
                        name="email"
                        placeholder="Email" />

                    <input 
                        type="password"
                        class="block border border-grey-light w-full p-3 rounded mb-4"
                        name="password"
                        placeholder="Password" />
                    <input 
                        type="password"
                        class="block border border-grey-light w-full p-3 rounded mb-4"
                        name="confirm_password"
                        placeholder="Confirm Password" />

                    
                        <button 
                        name="sign_up"
                        class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 w-full border-b-4 border-blue-700 hover:border-blue-500 rounded">
                        Sign up
                        </button>
                </form>
            </div>

            <div class="text-grey-dark mt-6">
                Already a member? 
                <a class="no-underline border-b border-blue text-blue" href="index.php">
                    Log in
                </a>
            </div>
        </div>
    </div>
</body>
</html>