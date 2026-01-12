<?php

$university = "HOLY ANGEL UNIVERSITY";
$full_name  = "Rustine De Pedro";
$sample_str = "   Welcome to Holy Angel University   ";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP String Built-in Functions</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f5f5f5;
            padding: 20px;
        }
        h2 {
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background: #fff;
        }
        th, td {
            border: 1px solid #444;
            padding: 8px;
        }
        th {
            background: #eaeaea;
            text-align: left;
        }
    </style>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

<h2>PHP String Built-in Functions</h2>

<table>
  
    <tr>
        <th colspan="2">Changing the Case of Characters</th>
    </tr>
    <tr>
        <td>Lowercase</td>
        <td><?php echo strtolower($university); ?></td>
    </tr>
    <tr>
        <td>Uppercase</td>
        <td><?php echo strtoupper($university); ?></td>
    </tr>
    <tr>
        <td>Capitalize</td>
        <td><?php echo ucwords(strtolower($university)); ?></td>
    </tr>


    <tr>
        <th colspan="2">Counting Characters and Words</th>
    </tr>
    <tr>
        <td>Number of Characters</td>
        <td><?php echo strlen($full_name); ?></td>
    </tr>
    <tr>
        <td>Number of Words</td>
        <td><?php echo str_word_count($full_name); ?></td>
    </tr>

   
    <tr>
        <th colspan="2">Removing and Replacing Characters</th>
    </tr>
    <tr>
        <td>Remove whitespaces from left</td>
        <td><?php echo ltrim($sample_str); ?></td>
    </tr>
    <tr>
        <td>Remove whitespaces from right</td>
        <td><?php echo rtrim($sample_str); ?></td>
    </tr>
    <tr>
        <td>Remove whitespace from left and right</td>
        <td><?php echo trim($sample_str); ?></td>
    </tr>
    <tr>
        <td>String replace</td>
        <td><?php echo str_replace("Holy Angel University", "HAU", $sample_str); ?></td>
    </tr>
    <tr>
        <td>String Repeat</td>
        <td><?php echo str_repeat("67 ", 5); ?></td>
    </tr>

    
    <tr>
        <th colspan="2">Other Built-in Functions</th>
    </tr>
    <tr>
        <td>Substring</td>
        <td><?php echo substr($full_name, 0, 7); ?></td>
    </tr>
    <tr>
        <td>String Position</td>
        <td><?php echo strpos($full_name, "De"); ?></td>
    </tr>
    <tr>
        <td>String Length (trimmed)</td>
        <td><?php echo strlen(trim($sample_str)); ?></td>
    </tr>
    <tr>
        <td>String Shuffle</td>
        <td><?php echo str_shuffle("Web Development"); ?></td>
    </tr>
    <tr>
        <td>String Reverse</td>
        <td><?php echo strrev($full_name); ?></td>
    </tr>
    <tr>
        <td>String Compare</td>
        <td><?php echo strcmp($university, $full_name); ?></td>
    </tr>
    <tr>
        <td>Capitalize First Letter</td>
        <td><?php echo ucfirst(strtolower($university)); ?></td>
    </tr>
    <tr>
        <td>Capitalize Each Word</td>
        <td><?php echo ucwords(strtolower($university)); ?></td>    
    </tr>
    <tr>
        <td>Word Count (University)</td>
        <td><?php echo str_word_count($university); ?></td>
    </tr>
</table>

</body>
</html>
