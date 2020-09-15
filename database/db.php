<?php

require('connect.php');

function dd($value)
{
    echo "<pre>", print_r($value, true), "</pre>";
    die();
}

function executeQuery($sql, $data)
{
    global $conn;
    $stmt = $conn->prepare($sql);
    $values = array_values($data);
    $types = str_repeat('s', count($values));
    $stmt->bind_param($types, ...$values);
    $stmt->execute();
    return $stmt;
}

function selectAll($table, $conditions = [])
{
    global $conn;
    $sql = "SELECT * FROM $table";
    if (empty($conditions)) {
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        return $records;
    } else {
        // return records that match conditions
        // $sql = "SELECT * FROM users WHERE username='Taurus' AND admin=1";

        $i = 0;
        foreach ($conditions as $key => $value) {
            if ($i === 0) {
                $sql = $sql . " WHERE $key = ?";
            } else {
                $sql = $sql . " AND $key = ?";
            }
            $i++;
        }
        $stmt = executeQuery($sql, $conditions);
        $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        return $records;
    }
}


function selectOne($table, $conditions = [])
{
    global $conn;
    $sql = "SELECT * FROM $table";

    // return records that match conditions
    // $sql = "SELECT * FROM users WHERE username='Taurus' AND admin=1";

    $i = 0;
    foreach ($conditions as $key => $value) {
        if ($i === 0) {
            $sql = $sql . " WHERE $key = ?";
        } else {
            $sql = $sql . " AND $key = ?";
        }
        $i++;
    }

    // $sql = "SELECT * FROM users WHERE username='Taurus' AND admin=0";
    $sql = $sql . " LIMIT 1";
    $stmt = executeQuery($sql, $conditions);
    $records = $stmt->get_result()->fetch_assoc();
    return $records;
}

function create($table, $data)
{
    global $conn;
    // $sql = "INSERT INTO users SET username=?, admin=?, email=?, password=?";
    $sql = "INSERT INTO $table SET ";

    $i = 0;
    foreach ($data as $key => $value) {
        if ($i === 0) {
            $sql = $sql . " $key=?";
        } else {
            $sql = $sql . ", $key=?";
        }
        $i++;
    }
    // dd($sql);
    $stmt = executeQuery($sql, $data);
    $id = $stmt->insert_id;
    return $id;
}

function update($table, $id, $data)
{
    global $conn;
    // $sql = "UPDATE users SET username=?, admin=?, email=?, password=? WHERE id=?";
    $sql = "UPDATE $table SET ";

    $i = 0;
    foreach ($data as $key => $value) {
        if ($i === 0) {
            $sql = $sql . " $key=?";
        } else {
            $sql = $sql . ", $key=?";
        }
        $i++;
    }

    $sql = $sql . " WHERE id=?";
    // dd($sql);
    $stmt = executeQuery($sql, $data);
    $id = $stmt->insert_id;
    return $id;
}


$data = [
    'username' => 'Sudeep Mohan',
    'admin' => 1,
    'email' => 'sudeep@gmail.com',
    'password' => 'taurus@123'
];

// $users = selectOne('users', $conditions);
// $id = create('users', $data);
$id = update('users', 2, $data);
dd($id);
