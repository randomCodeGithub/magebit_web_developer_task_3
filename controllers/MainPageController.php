<?php

class MainPageController
{
    public function actionIndex()
    {
        // include main page view file
        require_once('./views/index.php');
        return true;
    }

    public function actionSubscribe()
    {
        $email = '';

        if (isset($_POST['send-email'])) {
            $email = $_POST['email'];
            $errors = null;

            //CHECK IF CHECKBOX ARE CHECKED
            if (!isset($_POST['terms'])) {
                $errors['check'] = 'You must accept theterms and conditions';
            }

            //EMAIL VALIDATION
            if (Subscriber::checkEmailEmpty($email)) {
                $errors['message'] = "Email address is required";
            } else {
                if (Subscriber::checkEmailExists(($email))) {
                    $errors['message'] = "Email already exist!";
                }
                if (!Subscriber::checkEmail($email)) {
                    $errors['message'] = "Please provide a valid e-mail address";
                } else {
                    if (Subscriber::checkComombian($email)) {
                        $errors['message'] = "We are not accepting subscriptions from Colombia";
                    }
                }
            }

            // Check if array '$errors' is null
            if ($errors == null) {
                //write subscriber email into database
                Subscriber::subscribe($email);
                require_once('./views/subscription-success.php');
                return true;
            }
        }
        require_once('./views/index.php');
        return true;
    }
}
