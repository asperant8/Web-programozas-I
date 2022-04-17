<?
    $saveMessage = false;
    $responseMsg = [];
    $everythingSet = false;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $lastName = $_POST["lastName"];
        $firstName = $_POST["firstName"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $subject = $_POST["subject"];
        $message = $_POST["message"];
    }

    if (
        isset($lastName) && isset($firstName) && isset($email) && isset($phone) &&
        isset($subject) && isset($message)
    ) {
        $everythingSet=true;

        if (validateName($lastName, $firstName) != "") {
            array_push($responseMsg, validateName($lastName, $firstName));
        }
        if (validateEmail($email) != "") {
            array_push($responseMsg, validateEmail($email));
        }
        if (validatePhone($phone) != "") {
            array_push($responseMsg, validatePhone($phone));
        }
        if (validateSubject($subject) != "") {
            array_push($responseMsg, validateSubject($subject));
        }
        if (validateMessage($message) != "") {
            array_push($responseMsg, validateMessage($message));
        }
        if (count($responseMsg) == 0) {
            $saveMessage=true;
        }
    }
    else{
        $saveMessage=false;
    }


    if($saveMessage==true){
        
    }
        
    



function validateName($fname, $lname)
{
    if (strlen($fname) >= 2 && strlen($lname) >= 2 && ctype_alpha($fname) && ctype_alpha($lname)) {
        $nameErr = "";
    } 
    else $nameErr = "First name or last name is incorrect!";

    return $nameErr;
}

function validateEmail($email)
{
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
    } else $emailErr = "";
    return $emailErr;
}

function validatePhone($phone)
{
    $phone = str_replace(['+',' ', '.', '-', '(', ')'], '', $phone);

    if (strlen($phone) > 10 && ctype_digit($phone)) {
        $phoneErr = "";
    } else $phoneErr = "Mobile number is not in a correct format!";
    return $phoneErr;
}

function validateSubject($subject)
{
    if (strlen($subject) > 3) {
        $subjectErr = "";
    } else $subjectErr = "Subject field doesn't have enought characters!";
    return $subjectErr;
}

function validateMessage($msg)
{
    if (strlen($msg)>5) {
        $msgErr = "";
    } else $msgErr = "The message is too short!";
    return $msgErr;
}
