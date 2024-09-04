<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <title>Result</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-purple-400 to-blue-400 flex w-full justify-center items-center">
    <div class="flex flex-col gap-4 w-full justify-center items-center">
        <div class="font-bold text-6xl text-white">
            <?php

            $input = htmlspecialchars(stripslashes(trim($_POST["sacrifice"])));

            // probably never occur
            if (!is_numeric($input)) {
                echo "Not a number!";
            }

            echo $input + 2 
            ?>
        </div>
         <a href="index.php" class="bg-white font-bold rounded-md px-4 py-2 border-2 border-black hover:bg-black hover:text-white">TRY AGAIN...</a>
    </div>
</body>
</html>
