<?php

function request($filePath = '*') {
    $blog_url = get_site_url();

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, "$blog_url/$filePath");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PURGE');

    $result = curl_exec($ch);
    if (curl_errno($ch)) {
        $error = curl_error($ch);
        $message = "Error: $error";
    } else {
        $message = $result;
    }

    curl_close($ch);
    return $message;
}
