<!DOCTYPE html>
<html lang="en">

<head>

    <title>
        Latihan Laravel
    </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,  initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous">
    </script>
    <script src="js/bootstrap.js"></script>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <link rel="canonical" href="" />
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="website">
    <meta property="og:title" content="">
    <meta property="og:description" content=" ">
    <meta property="og:url" content="">
    <meta property="og:site_name" content="">
    <meta property="article:publisher" content="">
    <meta property="article:modified_time" content="2021-02-12T06:55:22+00:00" />
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }

        ul {
            float: right;
            list-style-type: none;
            margin-top: 25px;
        }

        ul li {
            display: inline-block;
        }

        ul li a {
            text-decoration: none;
            color: whitesmoke;
            padding: 5px 20px;
            border: 1px solid transparent;
            transition: 0.6s ease;
        }

        ul li a:hover {
            background-color: ghostwhite;
            color: black;
        }

        ul li.active a {
            background-color: ghostwhite;
            color: black;
        }

        .ig img {
            float: left;
            width: 150px;
            height: auto;
        }

        .main {
            max-width: 1200px;
            margin: auto;
        }

        .title {
            position: absolute;
            top: 40%;
            left: 40%;
            transform: translate(-50%, -50%);
        }

        .title h1 {
            color: solid black;
            font-size: 70px;
        }

        .button {
            position: absolute;
            top: 55%;
            left: 20%;
            transform: translate(-50%, -50%);
        }

        .btn {
            border: 1px solid black;
            padding: 10px 30px;
            color: black;
            text-decoration: none;
            transition: 0.6s ease;
        }

        .btn:hover {
            background-color: ghostwhite;
            color: black;
        }

        .container {
            position: absolute;
            bottom: 200px;
            left: 919px;
        }

        .content {
            width: 70%;
        }

        header1 {
            position: absolute;
            bottom: 100px;
            left: 170px;
        }

    </style>
</head>

<body style="background-color:powderblue;">
    <header1>
        <div class="min-h-screen flex items-center justify-center bg-blue-400">

            <!-- login form -->
            <div class="bg-white p-16 rounded shadow-2xl w-2/3">

                <h2 class="text-3xl font-bold mb-10 text-gray-800">Create Your Account</h2>

                <form class="space-y-5">

                    <div>
                        <label class="block mb-1 font-bold text-gray-500">Name</label>
                        <input type="text" class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-purple-500">
                    </div>

                    <div>
                        <label class="block mb-1 font-bold text-gray-500">Email</label>
                        <input type="email" class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-purple-500">
                    </div>

                    <div>
                        <label class="block mb-1 font-bold text-gray-500">Password</label>
                        <input type="password" class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-purple-500">
                    </div>

                    <div class="flex items-center">
                        <input type="checkbox" id="agree">
                        <label for="agree" class="ml-2 text-gray-700 text-sm">I agree to the terms and privacy.</label>
                    </div>

                    <button class="block w-full bg-yellow-400 hover:bg-yellow-300 p-4 rounded text-yellow-900 hover:text-yellow-800 transition duration-300">Sign Up</button>

                </form>

            </div>

        </div>

    </header1>
    <header>
        <div class="main">
            <div class="ig">
            </div>
            <ul>
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">Service</a></li>
                <li><a href="#">Gallery</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
        <div class="title">
            <h1> Latihan Pertama Laravel</h1>
        </div>
        <div class="button">
            <a href="#" class="btn">Watch Video</a>
            <a href="#" class="btn">Learn More</a>
        </div>
    </header>
</body>

</html>
