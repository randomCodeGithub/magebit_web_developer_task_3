<?php

class SubscriberListController
{
    public function actionIndex($searchValue = null)
    {
        $subscribers = Subscriber::getSubscribers();
        $providers = array();

    
        foreach ($subscribers as $subscriber) {
            //remove all symbols before '@', after remove '@' and write email provider into '$providerName'
            $providerName = str_replace('@', '', strstr($subscriber['email'], '@'));
            //compare array '$providers' and string '$providers' on the same values
            if (!in_array($providerName, $providers)) {
                array_push($providers, $providerName);
            }
        }

        //if url has search values. Example: without value - http://localhost/pineapple/, with value http://localhost/pineapple/gmail
        if ($searchValue) {
            $subscribers = Subscriber::getSubscriberByName($searchValue);
        }

        //if button that search by email providers is clicked
        if (isset($_POST['search-provider'])) {
            $providerName = $_POST['name'];
            $subscribers = Subscriber::getSubscriberByProvider($providerName);
        }

        //if button that order email by name is clicked
        if (isset($_POST['order-by-name'])) {
            $subscribers = Subscriber::orderByName();
        }

        //if button that order email by date is clicked
        if (isset($_POST['order-by-date'])) {
            $subscribers = Subscriber::getSubscribers();
        }

        //if button that reset to default state is clicked
        if (isset($_POST['default'])) {
            header("Location: " . HOME_ROOT . "/subscriber-list/");
        }

        ////if button that search email value clicked
        if (isset($_POST['search-by-name'])) {
            $searchValue = $_POST['name'];
            header("Location: " . HOME_ROOT . "/subscriber-list/" . $searchValue);
        }
        // include main page view file
        require_once('./views/subscriber-list.php');
        return true;
    }

    public function actionDelete()
    {
        //check if id of email exists
        if (Subscriber::checkEmailExistsByID($_POST["sudcriber-id"])) {
            Subscriber::deleteById($_POST["sudcriber-id"]);
        }

        // include main page view file
        header("Location: " . HOME_ROOT . "/subscriber-list/");
        return true;
    }
}
