<?php
// Define allowed referrer URLs and their corresponding custom URLs
$referrerLogic = [
    "https://aspkinternationaltrade.com/niramaystudio/" => "https://custom-url-1.com",
    "https://niramaystudio.aspkinternationaltrade.com/" => "https://custom-url-2.com",
    "https://madebyniramaystudio.blogspot.com/" => "https://custom-url-3.com",
    "https://another-allowed-url.com/" => "https://custom-url-4.com"
];

// Get the referrer URL
$referrer = $_SERVER['HTTP_REFERER'] ?? null;

// Determine the custom URL based on the referrer
$customUrl = null;
if ($referrer && array_key_exists($referrer, $referrerLogic)) {
    $customUrl = $referrerLogic[$referrer];
}

// Pass the custom URL to the front-end
echo json_encode([
    "showBackButton" => $customUrl !== null,
    "customUrl" => $customUrl
]);
?>
