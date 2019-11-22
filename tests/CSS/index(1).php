<!-- -------------------------------------------------------------------------------- -->
<!DOCTYPE html>
<html>
	<head>
		<title>Page Title</title>
		<style>
  @-webkit-keyframes argh-my-eyes {
    0%   { background-color: #fff; }
    49% { background-color: #fff; }
    50% { background-color: #000; }
    99% { background-color: #000; }
    100% { background-color: #ff0000; }
  }
  @-moz-keyframes argh-my-eyes {
    0%   { background-color: #ff0000; }
    49% { background-color: #ff0000; }
    50% { background-color: #000; }
    99% { background-color: #000; }
    100% { background-color: #ff0000; }
  }
  @keyframes argh-my-eyes {
    0%   { background-color: #ff0000; }
    49% { background-color: #ff0000; }
    50% { background-color: #000; }
    99% { background-color: #000; }
    100% { background-color: #ff0000; }
  }
  body {
  -webkit-animation: argh-my-eyes 0.5s infinite;
  -moz-animation:    argh-my-eyes 0.5s infinite;
  animation:         argh-my-eyes 0.5s infinite;
}
</style>
	</head>
	<body>
		
	</body>
</html>
<!-- -------------------------------------------------------------------------------- -->

<!-- -------------------------------------------------------------------------------- -->
<!DOCTYPE html>
<html>
<head>
<style> 
div {
  width: 100px;
  height: 100px;
  background-color: red;
  -webkit-animation-name: example; /* Safari 4.0 - 8.0 */
  -webkit-animation-duration: 4s; /* Safari 4.0 - 8.0 */
  animation-name: example;
  animation-duration: 4s;
}

/* Safari 4.0 - 8.0 */
@-webkit-keyframes example {
  from {background-color: red;}
  to {background-color: yellow;}
}

/* Standard syntax */
@keyframes example {
  from {background-color: red;}
  to {background-color: yellow;}
}
</style>
</head>
<body>

<p><b>Note:</b> This example does not work in Internet Explorer 9 and earlier versions.</p>

<div></div>

<p><b>Note:</b> When an animation is finished, it changes back to its original style.</p>

</body>
</html>

<!-- -------------------------------------------------------------------------------- -->

<!-- -------------------------------------------------------------------------------- -->
<style>
@-webkit-keyframes blink {
   from { color: green; }
   to { color: white; }
  }
 @-moz-keyframes blink {
   from { color: green; }
   to { color: white; }
 }
 @-ms-keyframes blink {
   from { color: green; }
   to { color: white; }
 }
 @-o-keyframes blink {
   from { color: green; }
   to { color: white; }
 }
 @keyframes blink {
   from { color: green; }
   to { color: white; }
 }

 .blink {
    color: green;
    -webkit-animation: blink 2s 3 alternate;
    -moz-animation: blink 2s 3 alternate;  
    -ms-animation: blink 2s 3 alternate;  
    -o-animation: blink 2s 3 alternate;  
    animation: blink 2s 3 alternate;   
 }
</style>
<!-- -------------------------------------------------------------------------------- -->

<!-- -------------------------------------------------------------------------------- -->
<style>
a {
    animation-duration: 1200ms;
    animation-name: blink;
    animation-iteration-count: infinite;
    animation-direction: alternate;
    -webkit-animation:blink 1200ms infinite; /* Safari and Chrome */
}
@keyframes blink {
    from {
        color:green;
    }
    to {
        color:white;
    }
}
@-webkit-keyframes blink {
    from {
        color:green;
    }
    to {
        color:white;
    }
}

</style>
<!-- -------------------------------------------------------------------------------- -->

<!-- -------------------------------------------------------------------------------- -->
<!DOCTYPE html>
<html>
<head>
<style> 
div {
  width: 100px;
  height: 100px;
  background-color: red;
  position: relative;
  -webkit-animation-name: example; /* Safari 4.0 - 8.0 */
  -webkit-animation-duration: 4s; /* Safari 4.0 - 8.0 */
  -webkit-animation-iteration-count: infinite; /* Safari 4.0 - 8.0 */
  animation-name: example;
  animation-duration: 4s;
  animation-iteration-count: infinite;
}

/* Safari 4.0 - 8.0 */
@-webkit-keyframes example {
  0%   {background-color:red; left:0px; top:0px;}
  25%  {background-color:yellow; left:200px; top:0px;}
  50%  {background-color:blue; left:200px; top:200px;}
  75%  {background-color:green; left:0px; top:200px;}
  100% {background-color:red; left:0px; top:0px;}
}

/* Standard syntax */
@keyframes example {
  0%   {background-color:red; left:0px; top:0px;}
  25%  {background-color:yellow; left:200px; top:0px;}
  50%  {background-color:blue; left:200px; top:200px;}
  75%  {background-color:green; left:0px; top:200px;}
  100% {background-color:red; left:0px; top:0px;}
}
</style>
</head>
<body>

<p><b>Note:</b> This example does not work in Internet Explorer 9 and earlier versions.</p>

<div></div>

</body>
</html>
<!-- -------------------------------------------------------------------------------- -->