<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $password = "";

    // Redirect to form when no data
    if (empty($_POST["username"]) and empty($_POST["password"])) {
        redirect();
    }

    function validate($data)
    {
        // Prevent JS code to execute when our file run
        $data = htmlspecialchars($data);
        // Remove \ from input
        $data = stripslashes($data);
        // Remove extra tab, space, newline
        $data = trim($data);

        return $data;
    }

    $username = validate($_POST["username"]);
    $password = validate($_POST["password"]);

    echo "$username / $password";
} else {
    redirect();
}

function redirect()
{
    header("Location: http://localhost:4000/chap3/form/form.php");
    exit();
}
