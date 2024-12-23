<?php

/**
 * Get the base path
 * 
 * @param string $path
 * @return string
 * 
 */
function basePath($path = '')
{
    return $path;
}

/**
 * Load a view
 * 
 * @param string $name
 * @param array $data
 * return void
 */
function loadView($name, $data = [], $location = '')
{
    if ($location === '') {
        $viewPath = basePath("./App/views/{$name}.view.php");
    } else {
        $viewPath = __DIR__ . "/dashboard/App/views/{$name}.view.php";
    }

    if (file_exists($viewPath)) {
        extract($data);
        require $viewPath;
    } else {
        echo "View file'{$name}' not found.";
    }
}

/**
 * Load a partial
 * @param string $name
 * return void
 */
function loadPartial($name, $data = [], $location = '')
{
    // $partialPath = '';

    // echo $location;

    if ($location !== '') {
        $partialPath = __DIR__ . "/dashboard/App/views/partials/{$name}.php";
    } else {
        $partialPath = basePath("App/views/partials/{$name}.php");
    }
    // echo $partialPath . '<br/>';
    if (file_exists($partialPath)) {
        extract($data);
        require $partialPath;
    } else {
        echo "Partial file '{$name}' not found";
    }
}
/**
 * Inspect a value(s)
 * 
 * @param mixed $value
 * @return void
 */
function inspect($value)
{
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
}
/**
 * Inspect a value(s) and die
 * 
 * @param mixed $value
 * @return void
 */
function inspectAndDie($value)
{
    echo '<pre>';
    die(var_dump($value));
    echo '</pre>';
}

/**
 * Formats the value of salary passed
 *
 * @param string $salary
 * @return string
 */
function formatSalary($salary)
{
    return '$' . number_format($salary, 2);
}

/**
 * Sanitize the data
 * @param string $dirty
 * @return string
 */
function sanitize($dirty)
{

    return filter_var(trim($dirty), FILTER_SANITIZE_SPECIAL_CHARS);
}
/**
 * Redirect URL
 * @param string $url
 */
function redirect($url)
{
    header("Location: {$url}");
}

function numberFormatter(int $value)
{
    $number = $value;
    $number = str_replace(',', '', $number);
    $formattedNumber = number_format((float)$number, 2, '.', ',');
    return $formattedNumber;
}
function generateRandomString($length = 5) {
    $characters = 'abcdefghijklmnopqrstuvwxyz';
    $randomString = '';

    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }

    return $randomString;
}