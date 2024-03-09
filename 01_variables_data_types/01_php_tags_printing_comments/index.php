<?php
echo "Hello From PHP";
echo '<br />';
print 'Hello from print';
echo '<br />';
echo 'Value One', 'Value Two';
// print 'Value One', 'Value Two'; This gives a syntax error
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title><?php
            echo "Everyone Learn PHP!!"
            ?></title>
</head>

<body class="bg-gray-100">
    <header class="bg-blue-500 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-3xl font-semibold"><?= "Using a clearer syntax to echo" ?> </h1>
        </div>
    </header>
    <div class="container mx-auto p-4 mt-4">
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-2xl font-semibold mb-4">Welcome To The Course</h2>
            <?php echo ' <p>Parsing HTML in php tags</p>'; ?>
        </div>
    </div>
</body>

</html>