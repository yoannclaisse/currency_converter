<?php
    // TAKE CODE FROM API AND STOCK IT IN LOCAL ARRAY

    $url = 'https://api.exchangerate.host/symbols';
    $result = apiCall($url);

    $codes = $result->symbols;

    $code = [];

    foreach($codes as $key => $value)
    {
        $code[] = $value;
    }




