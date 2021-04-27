<?php

class Subscriber
{

    //subscribe
    public static function subscribe($email)
    {
        $db = Database::getConnection();

        $sql = "INSERT INTO subscribers (email, subscription_date) VALUES (:email, now())";

        $result = $db->prepare($sql);
        //bind parameters
        $result->bindParam(':email', $email, PDO::PARAM_STR);

        return $result->execute();
    }

    //get subscribers by name
    public static function getSubscriberByName($name)
    {
        $db = Database::getConnection();

        $sql = "SELECT * FROM subscribers WHERE email LIKE CONCAT( '%', :name, '%')";

        $result = $db->prepare($sql);
        $result->bindParam(':name', $name, PDO::PARAM_STR);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $result->execute();

        return $result->fetchAll();
    }

    //get subscribers by provider name
    public static function getSubscriberByProvider($provider)
    {
        $db = Database::getConnection();

        $sql = "SELECT * FROM subscribers WHERE email LIKE CONCAT( '%', :provider)";

        $result = $db->prepare($sql);
        $result->bindParam(':provider', $provider, PDO::PARAM_STR);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $result->execute();

        return $result->fetchAll();
    }

    //delete subscriber by ID
    public static function deleteById($id)
    {
        $db = Database::getConnection();

        $sql = "DELETE FROM subscribers WHERE id=:id";

        $result = $db->prepare($sql);
        //bind parameter
        $result->bindParam(':id', $id, PDO::PARAM_INT);

        return $result->execute();
    }

    //get all subscribers ordered by date
    public static function getSubscribers()
    {
        $db = Database::getConnection();
        $sql = 'SELECT * FROM subscribers ORDER BY subscription_date DESC';

        $result = $db->prepare($sql);

        //Return the next row as an array indexed by column names
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $result->execute();

        return $result->fetchAll();
    }

    //get subscribers ordered by name
    public static function orderByName()
    {
        $db = Database::getConnection();
        $sql = 'SELECT * FROM subscribers ORDER BY email ASC';

        $result = $db->prepare($sql);

        //Return the next row as an array indexed by column names
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $result->execute();

        return $result->fetchAll();
    }

    //check if email from db exist by email value
    public static function checkEmailExists($email)
    {
        $db = Database::getConnection();

        $sql = 'SELECT COUNT(*) FROM subscribers WHERE email=:email';

        $result = $db->prepare($sql);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->execute();

        if ($result->fetchColumn()) {
            return true;
        }
        return false;
    }

    //check if email from db exist by ID
    public static function checkEmailExistsByID($id)
    {
        $db = Database::getConnection();

        $sql = 'SELECT COUNT(*) FROM subscribers WHERE id=:id';

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->execute();

        if ($result->fetchColumn()) {
            return true;
        }
        return false;
    }

    //check if email value is empty
    public static function checkEmailEmpty($email)
    {
        if (trim($email) == '') {
            return true;
        }
        return false;
    }

    //check email validation
    public static function checkEmail($email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        }
        return false;
    }

    //check Colombia providers
    public static function checkComombian($email)
    {
        if (preg_match("/.co\s*$/", $email)) {
            return true;
        }
        return false;
    }
}
