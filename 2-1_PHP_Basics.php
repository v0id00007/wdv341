<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2-1 PHP Basics</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        hr { margin: 20px 0; }
    </style>
</head>
<body>

    <?php
    // 1. Create a variable called yourName. Assign it a value of your name.
    $yourName = "Michael Coleman";

    // 2. Display the assignment name in an h1 element on the page. 
    echo "<h1>2-1 PHP Basics</h1>";
    ?>

    <!-- 3. Use HTML to put an h2 element on the page. 
          Use PHP to display your name inside the element using the variable. -->
    <h2><?php echo $yourName; ?></h2>

    <hr>

    <?php
    // 4. Create variables: number1, number2 and total. Assign a value to them.
    $number1 = 10;
    $number2 = 5;
    $total = $number1 + $number2;

    // Display the value of each variable and the total variable.
    echo "<p><strong>Number 1:</strong> " . $number1 . "</p>";
    echo "<p><strong>Number 2:</strong> " . $number2 . "</p>";
    echo "<p><strong>Total:</strong> " . $total . "</p>";
    ?>

    <hr>

    <?php
    // 5. Create a PHP variable that is an array containing 'PHP', 'HTML' and 'Javascript'.
    $skills = array('PHP', 'HTML', 'Javascript');
    ?>
    <script>
        // Output PHP array as JavaScript array
        var skills = <?php echo json_encode($skills); ?>;
        var ul = document.createElement('ul');
        skills.forEach(function(skill) {
            var li = document.createElement('li');
            li.textContent = skill;
            ul.appendChild(li);
        });
        document.body.appendChild(ul);

// Verify it's a JavaScript array
console.log(skills); // ['PHP', 'HTML', 'Javascript']
console.log(Array.isArray(skills)); // true
</script>

</body>
</html>
