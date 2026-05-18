<?php

function basePath($path = '')
{
    return __DIR__ . '/' . $path;
}

function loadView($name, $data = [])
{
    $viewPath = basePath("App/Views/{$name}.view.php");

    if (file_exists($viewPath)) {
        extract($data);
        require $viewPath;
    } else {
        echo "View '{$name}' not found.";
    }
}

function loadPartial($name, $data = [])
{
    $partialPath = basePath("App/Views/Partials/{$name}.php");

    if (file_exists($partialPath)) {
        extract($data);
        require $partialPath;
    } else {
        echo "Partial '{$name}' not found.";
    }
}

function inspect($value)
{
    echo '<pre>';
    print_r($value);
    echo '</pre>';
}


function formatSalary($salary)
{
    return '$' . number_format(floatval($salary));
}

function inspectAndDie($value) {
    echo '<pre>';
    die(var_dump($value));
    echo '</pre>';
}

function sanitize($dirty) {
    return filter_var(trim($dirty), FILTER_SANITIZE_SPECIAL_CHARS);
}

function redirect($url) {
    header("Location: " . $url);
    exit;
}