<?php

$server = $_SERVER['SERVER_ADDR'];
$domain = $_SERVER['SERVER_NAME'];
$page   = $_SERVER['SCRIPT_NAME'];
$cspVal = uniqid('CSP');

if (isset($_SESSION['userid'])) {
    $userID = $_SESSION['userid'];
}
else {
    $userID = uniqid('US', true);
    $_SESSION['userid'] = $userID;
}
?>
<!-- <meta http-equiv="Content-Security-Policy" content="script-src 'self' assets.adobedtm.com 'nonce-<?php echo($cspVal) ?>'"> -->
<script>
    var digitalData = digitalData || {};
    digitalData = {
        site: {
            domain: "<?php echo $domain; ?>",
            server: "<?php echo $server; ?>"
        },    
        page: {
            pageName: document.title,
            siteSection: ""
        },
        product: {
            productEvent: "",
            productID: "",
            productName: ""
        },
        time: {
            time: "<?php echo(date("h:i:sa")) ?>",
            timeZone: "<?php echo(date("e")) ?>",
            date: "<?php echo(date("Y-m-d")) ?>",
            dayOfWeek: "<?php echo(date("D")) ?>",
            month: "<?php echo(date("M")) ?>",
            day: "<?php echo(date("j")) ?>",
            year: "<?php echo(date("Y")) ?>"
        },
        security: {
            csp: "<?php echo($cspVal) ?>"
        },
        user: {
            userId: "<?php echo $userID; ?>"
        }
    };
</script>