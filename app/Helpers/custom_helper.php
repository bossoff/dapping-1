<?php

// $db      = \Config\Database::connect()

function settings($type): string{
    
    $db = db_connect();
    $query = $db->table('settings');
    $query->where('type',$type);
    $res = $query->get();
    $row = $res->getRow();
    if($res->getNumRows()>0){
        return $row->description;
    }

    return FALSE;
}

function filterUrl($theUrl='')
{
    $url = $theUrl;

    $url = filter_var($url, FILTER_SANITIZE_URL);
    // Validate url
    if (!filter_var($url, FILTER_VALIDATE_URL) ===  false) {
        echo "$url is TOTALLY legit. Really, it's a valid URL.";
    } else { 
        echo "$url is DEFINITLELY not a valid, working URL";
    }
}

// Please dont edit
function dDebug($callee)
{
    list($callee) = debug_backtrace();

    $args = func_get_args();

    $total_args = func_num_args();

    echo '<div><fieldset style="background: #fefefe !important; border:1px red solid; padding:15px">';
    echo '<legend style="background:blue; color:white; padding:5px;">'.$callee['file'].' @line: '.$callee['line'].'</legend><pre><code>';
    $i = 0;
    foreach ($args as $arg)
    {
        echo '<strong>Debug #' . ++$i . ' of ' . $total_args . '</strong>: ' . '<br>';
        var_dump($arg);
    }

    echo "</code></pre></fieldset><div><br>";
}#<!----!>