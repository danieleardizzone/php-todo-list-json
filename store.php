<?php

$todos_json = file_get_contents('./todos.json');
$todos = json_decode($todos_json, true);

$todo_text = $_POST['todo'] ?? '';

$todo = [
    'text' => $todo_text,
    'done' => false
];

$todos[] = $todo;

$response = [
    'success' => true,
    'results' => $todos,
];

header('Content-Type: application/json');
echo json_encode($response);