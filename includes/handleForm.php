<?php
    include './includes/apiSettings.php';

    $amountWritten = 1;
    $resultFinal = 0;
    $flag = '';
    $convertResult2 = [];
    $to = '';
    $convertText = '';
    $from = '';
    $fromMoneyName = '';



    if(!empty($_POST))
    {
        $amountWritten = $_POST['amount'];

        $fromNoConversion = $_POST['from'];
        $from = substr($fromNoConversion, 0, 3);
        $fromMoneyName = substr($fromNoConversion, 3, -1);

        $toNoConversion = $_POST['to'];
        $to = substr($toNoConversion, 0, 3);
        $toMoneyName = substr($toNoConversion, 3, -1);

        $url ='https://api.exchangerate.host/convert?from='.$from.'&to='.$to.'';
        $convertResult = apiCall($url);
        $amountApi = $convertResult->query->amount;
        $rate = $convertResult->info->rate;
        $amountApi = $amountWritten;
        $calculate = $amountApi. ' ' . $fromMoneyName . ' = ' . $amountApi * $rate .' '. $toMoneyName;
        $resultFinal = $calculate;

        $url2 ='https://restcountries.com/v3.1/currency/'.$to.'';
        $convertResult2 = apiCall($url2);

        $convertText = 'with ' .'<span>'. '"' .$toMoneyName . ' "' .'</span>'. ' you can pay in these countries 👇';
    }
