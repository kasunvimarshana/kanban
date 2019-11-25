<!-- ------------------------------------------------------------------------------------ -->
<?php

public function store(Request $request) {
  $email = $request->input('email'); // option 1
  $email = $request->get('email'); // option 2
  $email = $request->email; // even more simple?
  $email = request('email'); // there's also helper
  $email = data_get($request, 'email'); // did you even know this function?
}

?>
<!-- ------------------------------------------------------------------------------------ -->

<!-- ------------------------------------------------------------------------------------ -->
<?php

$request = request();
$value = request('key', $default = null);

?>
<!-- ------------------------------------------------------------------------------------ -->