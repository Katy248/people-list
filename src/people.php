<?php
class Human
{
    public $id;
    public $first_name;
    public $last_name;
    public $phone;
    public $creation;
    public $last_edit;
    public function __construct($id, $first_name, $last_name, $phone, $creation, $last_edit)
    {
        $this->id = $id;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->phone = $phone;
        $this->creation = $creation;
        $this->last_edit = $last_edit;
    }
}

function get_human($connection, $id)
{
    $query = 'SELECT * FROM `people` where `id` = ' . $id;
    $result = mysqli_query($connection, $query);

    if (!$result) {
        die('Query error');
    }

    $row = mysqli_fetch_assoc($result);

    if ($row) {
        $human = new Human($row['id'], $row['first_name'], $row['last_name'], $row['phone'], $row['creation'], $row['last_edit']);
        return $human;
    } else {
        die();
    }
}

function get_people($connection)
{
    $people = array();
    $query = 'SELECT * FROM `people`';
    $result = mysqli_query($connection, $query);

    if (!$result) {
        die('Query error');
    }

    while ($row = mysqli_fetch_assoc($result)) {
        array_push($people, new Human($row['id'], $row['first_name'], $row['last_name'], $row['phone'], $row['creation'], $row['last_edit']));
    }
    return $people;
}
function
    create_human(
    $connection,
    $first_name,
    $last_name,
    $phone
) {
    $query = "INSERT into `people` (`first_name`, `last_name`, `phone`, `creation`) VALUES ('" . $first_name . "','" . $last_name . "','" . $phone . "','" . date('Y-m-d') . "')";

    $result = mysqli_query($connection, $query);
    if (!$result) {
        die('Query error');
    }
}
