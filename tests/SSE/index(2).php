<!-- ---------------------------------------------------------------------------------- -->
<?php

var source = new EventSource(url, { withCredentials: true });

//////////////////////////////////////////////////////////////////////////////////////

source.onopen = function (event) {
  // ...
};

// another way
source.addEventListener('open', function (event) {
  // ...
}, false);

///////////////////////////////////////////////////////////////////////////////////////

source.onmessage = function (event) {
  var data = event.data;
  // handle message
};

// another way
source.addEventListener('message', function (event) {
  var data = event.data;
  // handle message
}, false);

//////////////////////////////////////////////////////////////////////////////////////

source.onerror = function (event) {
  // handle error event
};

// another way
source.addEventListener('error', function (event) {
  // handle error event
}, false);

///////////////////////////////////////////////////////////////////////////////////////

source.addEventListener('foo', function (event) {
  var data = event.data;
  // handle message
}, false);

///////////////////////////////////////////////////////////////////////////////////////

Content-Type: text/event-stream
Cache-Control: no-cache
Connection: keep-alive
    
"Content-Type":"text/event-stream",
"Cache-Control":"no-cache",
"Connection":"keep-alive",
"Access-Control-Allow-Origin": '*',

?>
<!-- ---------------------------------------------------------------------------------- -->

<!-- ---------------------------------------------------------------------------------- -->
<?php

stream.addEventListener('error', function(event) {

    switch (event.target.readyState) {

        case EventSource.CONNECTING:
            console.log('Reconnecting...');
            break;

        case EventSource.CLOSED:
            console.log('Connection failed, will not reconnect');
            break;

    }

}, false);

stream.addEventListener('message', function(event) {
    console.log('Received a message event: [' + event.lastEventId + ']', event.data);
}, false);

?>
<!-- ---------------------------------------------------------------------------------- -->

<!-- ---------------------------------------------------------------------------------- -->
<?php

const googleStream = new EventSource('https://streaming.kaazing.io/stock-prices/GOOG');

googleStream.addEventListener('message', function(event) {
    // Update Google price on screen
}, false);

const appleStream = new EventSource('https://streaming.kaazing.io/stock-prices/APPL');

appleStream.addEventListener('message', function(event) {
    // Update Apple price on screen
}, false);

?>
<!-- ---------------------------------------------------------------------------------- -->

<!-- ---------------------------------------------------------------------------------- -->
<?php

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Polyfill for older browsers without native support for the HTML5 EventSource API. -->
    <script src="https://cdn.polyfill.io/v2/polyfill.min.js?features=EventSource"></script>
  </head>
  <body>
    <div id="payload"></div>
    <script>

      const stream = new EventSource('https://streams.kaazing.net/sportsbook/events');

      // Handler for when the stream is opened (either the first time or after a reconnect).
      stream.addEventListener('open', function(event) {
        console.log('Stream is open');
      }, false);

      // Handler for new messages.
      stream.addEventListener('message', event => {
        document.getElementById('payload').innerText = event.data;
      }, false);

      // Handler for a dropped connection or the server closing the connection.
      stream.addEventListener('error', function(event) {
        switch (event.target.readyState) {
            case EventSource.CONNECTING:
                console.log('Reconnecting...');
                break;
            case EventSource.CLOSED:
                console.log('Connection failed, will not reconnect');
                break;
        }
      }, false);

    </script>
  </body>
</html>

?>
<!-- ---------------------------------------------------------------------------------- -->