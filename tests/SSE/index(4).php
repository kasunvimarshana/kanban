<!-- ---------------------------------------------------------------------------------------- -->
<?php

$response = new StreamedResponse(function() use ($request) {
    while(true) {
        echo 'data: ' . json_encode(Stock::all()) . "\n\n";
        ob_flush();
        flush();
        usleep(200000);
    }
});
$response->headers->set('Content-Type', 'text/event-stream');
$response->headers->set('X-Accel-Buffering', 'no');
$response->headers->set('Cach-Control', 'no-cache');
return $response;

?>
<!-- ---------------------------------------------------------------------------------------- -->