<!-- ------------------------------------------------------------------------------------------ -->
<?php

function myWhichDepartmentFunction(whichDept,someVar1,someVar2) 
{
    if(whichDept=='1')
    {
        alert(someVar1);
        var myDepartmentDivID = document.getElementsByTagName("myDepartmentDiv")[0];         
        var newScript = document.createElement('script');
        newScript.type = 'text/javascript';
        newScript.onload=scriptLoaded;
        newScript.src = 'js_files/' + someVar1 +'.js';
        myDepartmentDivID.replaceChild(newScript);
        var myDepartmentDivID2 = document.getElementsByTagName("myDepartmentDiv")[0];         
        var newScript2 = document.createElement('script');
        newScript2.type = 'text/javascript';
        newScript2.onload=scriptLoaded;
        newScript2.src = 'js_files/' + someVar2 + '.js';
        myDepartmentDivID2.appendChild(newScript2);    
    }
}

?>
<!-- ------------------------------------------------------------------------------------------ -->

<!-- ------------------------------------------------------------------------------------------ -->
<?php

var newScript = document.createElement("script");
newScript.src = "http://www.example.com/my-script.js";
target.appendChild(newScript);

?>
<!-- ------------------------------------------------------------------------------------------ -->

<!-- ------------------------------------------------------------------------------------------ -->
<?php

var newScript = document.createElement("script");
var inlineScript = document.createTextNode("alert('Hello World!');");
newScript.appendChild(inlineScript); 
target.appendChild(newScript);

?>
<!-- ------------------------------------------------------------------------------------------ -->

<!-- ------------------------------------------------------------------------------------------ -->
<?php

$( "li" ).add( document.getElementsByTagName( "p" )[ 0 ] )
  .css( "background-color", "red" );

?>
<!-- ------------------------------------------------------------------------------------------ -->

<!-- ------------------------------------------------------------------------------------------ -->
<?php

$( "li" ).add( "<p id='new'>new paragraph</p>" )
  .css( "background-color", "red" );

?>
<!-- ------------------------------------------------------------------------------------------ -->

<!-- ------------------------------------------------------------------------------------------ -->
<?php

$( "p" ).clone().add( "<span>Again</span>" ).appendTo( document.body );

?>
<!-- ------------------------------------------------------------------------------------------ -->

<!-- ------------------------------------------------------------------------------------------ -->
<?php

function addScript( src,callback) {
  var s = document.createElement( 'script' );
  s.setAttribute( 'src', src );
  s.onload=callback;
  document.body.appendChild( s );
}

?>
<!-- ------------------------------------------------------------------------------------------ -->

<!-- ------------------------------------------------------------------------------------------ -->
<?php

function scriptLoader(scripts, callback) {

    var count = scripts.length;

    function urlCallback(url) {
        return function () {
            console.log(url + ' was loaded (' + --count + ' more scripts remaining).');
            if (count < 1) {
                callback();
            }
        };
    }

    function loadScript(url) {
        var s = document.createElement('script');
        s.setAttribute('src', url);
        s.onload = urlCallback(url);
        document.head.appendChild(s);
    }

    for (var script of scripts) {
        loadScript(script);
    }
};

?>
<!-- ------------------------------------------------------------------------------------------ -->

<!-- ------------------------------------------------------------------------------------------ -->
<?php

function addScript(attribute, text, callback) {
    var s = document.createElement('script');
    for (var attr in attribute) {
        s.setAttribute(attr, attribute[attr] ? attribute[attr] : null)
    }
    s.innerHTML = text;
    s.onload = callback;
    document.body.appendChild(s);
}

addScript({
    src: 'https://www.google.com',
    type: 'text/javascript',
    async: null
}, '<div>innerHTML</div>', function(){});

?>
<!-- ------------------------------------------------------------------------------------------ -->

<!-- ------------------------------------------------------------------------------------------ -->
<?php

(function(d, script) {
    script = d.createElement('script');
    script.type = 'text/javascript';
    script.async = true;
    script.onload = function(){
        // remote script has loaded
    };
    script.src = 'http://www.google-analytics.com/ga.js';
    d.getElementsByTagName('head')[0].appendChild(script);
}(document));

?>
<!-- ------------------------------------------------------------------------------------------ -->

<!-- ------------------------------------------------------------------------------------------ -->
<?php

(function() {
    // Create a new script node
    var script = document.createElement("script");
    script.type = "text/javascript";
    script.onload = function() {
        // Cleanup onload handler
        script.onload = null;

        // do stuff with the loaded script!

    }

    // Add the script to the DOM
    (document.getElementsByTagName( "head" )[ 0 ]).appendChild( script );

    // Set the `src` to begin transport
    script.src = "https://remote.com/";
})();

?>
<!-- ------------------------------------------------------------------------------------------ -->

<!-- ------------------------------------------------------------------------------------------ -->
<script>
function insertScript ($script, callback) {
  var s = document.createElement('script')
  s.type = 'text/javascript'
  if ($script.src) {
    s.onload = callback
    s.onerror = callback
    s.src = $script.src
  } else {
    s.textContent = $script.innerText
  }

  // re-insert the script tag so it executes.
  document.head.appendChild(s)

  // clean-up
  $script.parentNode.removeChild($script)

  // run the callback immediately for inline scripts
  if (!$script.src) {
    callback()
  }
}

// https://html.spec.whatwg.org/multipage/scripting.html
var runScriptTypes = [
  'application/javascript',
  'application/ecmascript',
  'application/x-ecmascript',
  'application/x-javascript',
  'text/ecmascript',
  'text/javascript',
  'text/javascript1.0',
  'text/javascript1.1',
  'text/javascript1.2',
  'text/javascript1.3',
  'text/javascript1.4',
  'text/javascript1.5',
  'text/jscript',
  'text/livescript',
  'text/x-ecmascript',
  'text/x-javascript'
]

function runScripts ($container) {
  // get scripts tags from a node
  var $scripts = $container.querySelectorAll('script')
  var runList = []
  var typeAttr

  [].forEach.call($scripts, function ($script) {
    typeAttr = $script.getAttribute('type')

    // only run script tags without the type attribute
    // or with a javascript mime attribute value
    if (!typeAttr || runScriptTypes.indexOf(typeAttr) !== -1) {
      runList.push(function (callback) {
        insertScript($script, callback)
      })
    }
  })

  // insert the script tags sequentially
  // to preserve execution order
  seq(runList, scriptsDone)
}
</script>
<!-- ------------------------------------------------------------------------------------------ -->

<!-- ------------------------------------------------------------------------------------------ -->
<script>
/* insert strings into DOM
 */

var htmlContent = ''
htmlContent += '<script src="https://code.jquery.com/jquery-2.2.0.js"><\/script>'
htmlContent += '<script>$(document.body).append("<p>jQuery is loaded.</p>")<\/script>'

// run the scripts inside the dom node
var $container = document.querySelector('.container')
$container.innerHTML = htmlContent
runScripts($container)

/* helpers
 */

// runs an array of async functions in sequential order
function seq (arr, callback, index) {
  // first call, without an index
  if (typeof index === 'undefined') {
    index = 0
  }

  arr[index](function () {
    index++
    if (index === arr.length) {
      callback()
    } else {
      seq(arr, callback, index)
    }
  })
}

// trigger DOMContentLoaded
function scriptsDone () {
  var DOMContentLoadedEvent = document.createEvent('Event')
  DOMContentLoadedEvent.initEvent('DOMContentLoaded', true, true)
  document.dispatchEvent(DOMContentLoadedEvent)
}

/* script runner
 */

function insertScript ($script, callback) {
  var s = document.createElement('script')
  s.type = 'text/javascript'
  if ($script.src) {
    s.onload = callback
    s.onerror = callback
    s.src = $script.src
  } else {
    s.textContent = $script.innerText
  }

  // re-insert the script tag so it executes.
  document.head.appendChild(s)

  // clean-up
  $script.parentNode.removeChild($script)

  // run the callback immediately for inline scripts
  if (!$script.src) {
    callback()
  }
}

// https://html.spec.whatwg.org/multipage/scripting.html
var runScriptTypes = [
  'application/javascript',
  'application/ecmascript',
  'application/x-ecmascript',
  'application/x-javascript',
  'text/ecmascript',
  'text/javascript',
  'text/javascript1.0',
  'text/javascript1.1',
  'text/javascript1.2',
  'text/javascript1.3',
  'text/javascript1.4',
  'text/javascript1.5',
  'text/jscript',
  'text/livescript',
  'text/x-ecmascript',
  'text/x-javascript'
]

function runScripts ($container) {
  // get scripts tags from a node
  var $scripts = $container.querySelectorAll('script')
  var runList = []
  var typeAttr

  [].forEach.call($scripts, function ($script) {
    typeAttr = $script.getAttribute('type')

    // only run script tags without the type attribute
    // or with a javascript mime attribute value
    if (!typeAttr || runScriptTypes.indexOf(typeAttr) !== -1) {
      runList.push(function (callback) {
        insertScript($script, callback)
      })
    }
  })

  // insert the script tags sequentially
  // to preserve execution order
  seq(runList, scriptsDone)
}
</script>
<!-- ------------------------------------------------------------------------------------------ -->

<!-- ------------------------------------------------------------------------------------------ -->
<script>
//Firefox, Safari, Chrome, and Opera
var script = document.createElement("script");
script.type = "text/javascript";
script.src = "file.js";
script.onload = function(){
    alert("Script is ready!");
};
document.body.appendChild(script);
</script>
<!-- ------------------------------------------------------------------------------------------ -->