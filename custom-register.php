<?php
/* Template Name: Custom Registration Page */

get_header();
global $wpdb;

// Form validation
if ($_POST) {

    $username = $wpdb->escape($_POST['user_name']);
    $email = $wpdb->escape($_POST['user_email']);
    $password = $wpdb->escape($_POST['user_password']);
    $confirm_password = $wpdb->escape($_POST['confirm_password']);
    $captcha = $wpdb->escape($_POST['captcha']);

    $error = array();
    if (strpos($username, ' ') !== FALSE) {
        $error['username_space'] = "";
    }

    if (empty($username)) {
        $error['username_empty'] = "Username cannot be empty";
    }

    if (username_exists($username)) {
        $error['username_exists'] = "Username already exists";
    }

    if (!is_email($email)) {
        $error['email_valid'] = "Not valied email address";
    }

    if (email_exists($email)) {
        $error['email_existence'] = "Email already exists";
    }

    if (strcmp($password, $confirm_password) !== 0) {
        $error['password'] = "Password didn't match";
    }

    if (strcmp($captcha, '14.6') !== 0) {
        $error['captcha'] = "Wrong Captcha";
    }

    if (count($error) == 0) {
        wp_create_user($username, $password, $email);
        echo "User Created Successfully"; 
        wp_redirect_admin_locations();
        exit();
    } else {
        print_r($error);
    }
}

?>

<form name="registerform" id="registerform" method="post">
    <p>
        <label for="user_name"><?php _e('Username'); ?></label>
        <input type="text" name="user_name" id="user_name" class="input" size="20" autocapitalize="off" />
    </p>
    <p>
        <label for="user_email"><?php _e('Email'); ?></label>
        <input type="email" name="user_email" id="user_email" class="input" size="25" />
    </p>
    <p>
        <label for="user_password"><?php _e('Password'); ?></label>
        <input type="password" name="user_password" id="user_password" class="input" size="25" />
    </p>
    <p>
        <label for="confirm_password"><?php _e('Re-Password'); ?></label>
        <input type="password" name="confirm_password" id="confirm_password" class="input" size="25" />
    </p>
    <p>
        <label for="captcha"><?php _e('Type "14.6"'); ?></label>
        <input type="text" name="captcha" id="captcha" class="input" size="25" />
    </p>
    <p class="submit">
        <input type="submit" name="submit" id="submit" class="button button-primary button-large" value="Register" />
    </p>
</form>