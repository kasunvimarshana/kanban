<!-- ---------------------------------------------------------------------------- -->
<?php

//Content-Type: text/event-stream
let eventSource = new EventSource("/events/subscribe");

eventSource.onmessage = function(event) {
  console.log("New message", event.data);
  // will log 3 times for the data stream above
};

// or eventSource.addEventListener('message', ...)

let source = new EventSource("https://another-site.com/events");

let source = new EventSource("https://another-site.com/events", {
    withCredentials: true
});

let eventSource = new EventSource(...);
eventSource.close();

EventSource.CONNECTING = 0; // connecting or reconnecting
EventSource.OPEN = 1;       // connected
EventSource.CLOSED = 2;     // connection closed

eventSource.addEventListener('join', event => {
  alert(`Joined ${event.data}`);
});

eventSource.addEventListener('message', event => {
  alert(`Said: ${event.data}`);
});

eventSource.addEventListener('leave', event => {
  alert(`Left ${event.data}`);
});

?>
<!-- ---------------------------------------------------------------------------- -->

<!-- ---------------------------------------------------------------------------- -->
<?php

<!DOCTYPE html>
<script>
let eventSource;

function start() { // when "Start" button pressed
  if (!window.EventSource) {
    // IE or an old browser
    alert("The browser doesn't support EventSource.");
    return;
  }

  eventSource = new EventSource('digits');

  eventSource.onopen = function(e) {
    log("Event: open");
  };

  eventSource.onerror = function(e) {
    log("Event: error");
    if (this.readyState == EventSource.CONNECTING) {
      log(`Reconnecting (readyState=${this.readyState})...`);
    } else {
      log("Error has occured.");
    }
  };

  eventSource.addEventListener('bye', function(e) {
    log("Event: bye, data: " + e.data);
  });

  eventSource.onmessage = function(e) {
    log("Event: message, data: " + e.data);
  };
}

function stop() { // when "Stop" button pressed
  eventSource.close();
  log("eventSource.close()");
}

function log(msg) {
  logElem.innerHTML += msg + "<br>";
  document.documentElement.scrollTop = 99999999;
}
</script>

<button onclick="start()">Start</button> Press the "Start" to begin.
<div id="logElem" style="margin: 6px 0"></div>

<button onclick="stop()">Stop</button> "Stop" to finish.
    
</html>

?>

<?php
header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');

$time = date('r');
echo "data: The server time is: {$time}\n\n";
flush();
?>
<!-- ---------------------------------------------------------------------------- -->