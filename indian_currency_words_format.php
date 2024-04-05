<?php
if (!function_exists('convertToIndianCurrencyWords')) {
// $my_amount= 1255.50;
// $my_amount= 1781800.00;
function convertToIndianCurrencyWords($my_amount) {
    // $my_amount= 1255.50;
    // echo $my_amount."<br>";
    // exit;
    $words = array(
        'zero', 'one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine',
        'ten', 'eleven', 'twelve', 'thirteen', 'fourteen', 'fifteen', 'sixteen', 'seventeen', 'eighteen', 'nineteen'
    );

    $tens = array(
        '', '', 'twenty', 'thirty', 'forty', 'fifty', 'sixty', 'seventy', 'eighty', 'ninety'
    );

    // Separate rupees and paisa
    $rupees = (int)$my_amount;
    $paisa = round(($my_amount - $rupees) * 100);
// echo $rupees."<br>";
// echo $paisa."<br>";
    // Convert rupees to words
    $rupees_in_words = convertNumberToWords($rupees, $words, $tens);
    $paisa_in_words = convertNumberToWords($paisa, $words, $tens);
// echo $rupees_in_words."<br>";
    // Construct the final output
    $output = ucwords($rupees_in_words) . ' Rupees';
    // echo $output;
    // exit;
    
    if ($paisa > 0) {
        $output .= ' And ' .ucwords($paisa_in_words) . ' Paisa';
    }
    $output .= ' Only';

    return $output;
}
function convertNumberToWords($number, $words, $tens) {
    $words_in_rupees = '';
     if ($number >= 1000000) {
        $words_in_rupees .= $words[(int)($number / 1000000)] . ' arab ';
        $number %= 1000000;
    }
     if ($number >= 100000) {
        $words_in_rupees .= $words[(int)($number / 100000)] . ' crore ';
        $number %= 100000;
    }
     if ($number >= 10000) {
        $words_in_rupees .= $words[(int)($number / 10000)] . ' lakh ';
        $number %= 10000;
    }
    if ($number >= 1000) {
        $words_in_rupees .= $words[(int)($number / 1000)] . ' thousand ';
        $number %= 1000;
    }

    if ($number >= 100) {
        $words_in_rupees .= $words[(int)($number / 100)] . ' hundred ';
        $number %= 100;
    }

    if ($number >= 20) {
        $words_in_rupees .= $tens[(int)($number / 10)] . ' ';
        $number %= 10;
    }

    if ($number > 0) {
        $words_in_rupees .= $words[$number] . ' ';
    }

    return $words_in_rupees;
}




}
?>
