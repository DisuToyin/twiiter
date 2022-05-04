<?php
if (isset($_POST['signup'])) {
    $screenName = $_POST['screenName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $error = '';

    if (empty($screenName) or empty($email) or empty($password)) {
        $error = 'All fields are required';
    } else {
        $email = $getFromU->checkInput($email);
        $password = $getFromU->checkInput($password);
        $screenName = $getFromU->checkInput($screenName);

        if (!filter_var($email)) {
            $error = 'Invalid name format';
        } else if (strlen($screenName) > 20) {
            $error = 'name must be between 6 and 20 characters';
        } else if (strlen($password) < 5) {
            $error = 'Password is too short';
        } else {
            if ($getFromU->checkEmail($email) == false) {
                $error = 'This email is already in use';
            } else {
            }
        }
    }
}
?>

<form method="post">
    <div class="signup-div">
        <h3>Sign up </h3>
        <ul>
            <li>
                <input type="text" name="screenName" placeholder="Full Name" />
            </li>
            <li>
                <input type="email" name="email" placeholder="Email" />
            </li>
            <li>
                <input type="password" name="password" placeholder="Password" />
            </li>
            <li>
                <input type="submit" name="signup" Value="Signup for Twitter">
            </li>

            <?php

            if (isset($error)) {
                echo    '<li class="error-li">
                            <div class="span-fp-error">' . $error . '</div>
                        </li>';
            }
            ?>
        </ul>



    </div>
</form>