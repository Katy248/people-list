<?php
if (isset($_POST["first_name"]) and isset($_POST["last_name"]) and isset($_POST["phone"])) {

    $data = new FormData();
    $creation = date("Y-m-d");

    if (!validate($data)) {
        header("location:new.php");
        die();
    }
    $query = "INSERT into `people` (`first_name`, `last_name`, `phone`, `creation`) VALUES ('" . $data->first_name . "','" . $data->last_name . "','" . $data->phone . "','" . $creation . "')";
} else {
    echo "NOT OK";
}
class FormData
{
    public $first_name;
    public $last_name;
    public $phone_name;

    public function __construct()
    {
        $this->first_name = $_POST["first_name"];
        $this->last_name = $_POST["last_name"];
        $this->phone_name = $_POST["phone"];
    }
}

class KeyValue
{
    public $key;
    public $value;
    function __construct($key, $value)
    {
        $this->key = $key;
        $this->value = $value;
    }
}
function validate($data): bool
{
    $errors = array();
    if (!empty($data->first_name)) {
        array_push($errors, new KeyValue('first_name_error', 'Field cannot be empty'));
    }
    if (!empty($data->last_name)) {
        array_push($errors, new KeyValue('last_name_error', 'Field cannot be empty'));
    }
    if (!empty($data->phone)) {
        array_push($errors, new KeyValue('phone_error', 'Field cannot be empty'));
    }
    return count($errors) > 0;
}
