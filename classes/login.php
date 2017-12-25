<?php
/**
 * Created by PhpStorm.
 * User: subta
 * Date: 12/24/2017
 * Time: 10:08 PM
 */
require_once 'dbconnection.php';
class login
{
    public function loginFun($username,$password)
    {

        $firstName = $this->clearData($username);
        $password = $this->clearData($password);
        // prepare and bind

        $stmt = dbconnection::$conn ->prepare("SELECT * FROM users WHERE name =:name && password =:pass");
        $stmt->bindParam(":name", $firstName);
        $stmt->bindParam(":pass", $password);


        if($stmt->execute()) {

            if ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

                $role = $row["role"];
                $name = $row["name"];
                $pass = $row["password"];

                if ($firstName == $name && $password == $pass && $role == 1) {
                   // $_SESSION['Admin'] = $row["role"];
                    echo "Done";

                }


            }
            else
            {
                echo "Invalid Info";
            }
        }

        else
        {
            echo "Invalid Info";
        }

    }


    private function clearData($data)
    {
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;

    }



}

if(isset($_POST['user'])  && isset($_POST["pass"]) )
{
          $username = $_POST['user'];
          $password = $_POST["pass"];
         $login = new login();
         $login->loginFun($username,$password);
}

?>