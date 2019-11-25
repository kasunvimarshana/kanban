<!-- ----------------------------------------------------------- -->
<?php

Post::with(array('user'=>function($query){
    $query->select('id','username');
}))->get();

?>
<!-- ----------------------------------------------------------- -->

<!-- ----------------------------------------------------------- -->
<?php

Post::with(['user' => function ($query) {
        $query->select('id','company_id', 'username');
    }, 'user.company' => function ($query) {
        $query->select('id', 'name');
    }])->get()

?>
<!-- ----------------------------------------------------------- -->

<!-- ----------------------------------------------------------- -->
<?php

DB::table('users')
            ->whereExists(function ($query) {
                $query->select(DB::raw(1))
                      ->from('orders')
                      ->whereRaw('orders.user_id = users.id');
            })
            ->get();

?>
<!-- ----------------------------------------------------------- -->

<!-- ----------------------------------------------------------- -->
<?php

$orders = DB::table('orders')
                ->selectRaw('price * ? as price_with_tax', [1.0825])
                ->get();

?>
<!-- ----------------------------------------------------------- -->

<!-- ----------------------------------------------------------- -->
<?php

$orders = DB::table('orders')
                ->whereRaw('price > IF(state = "TX", ?, 100)', [200])
                ->get();

?>
<!-- ----------------------------------------------------------- -->

<!-- ----------------------------------------------------------- -->
<?php

$id = DB::table('users')->insertGetId(
    array('email' => 'john@example.com', 'votes' => 0)
);

?>
<!-- ----------------------------------------------------------- -->

<!-- ----------------------------------------------------------- -->
<?php

'mysql' => array(
    'read' => array(
        'host' => '192.168.1.1',
    ),
    'write' => array(
        'host' => '196.168.1.2'
    ),
    'driver'    => 'mysql',
    'database'  => 'database',
    'username'  => 'root',
    'password'  => '',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
),

?>
<!-- ----------------------------------------------------------- -->

<!-- ----------------------------------------------------------- -->
<?php

'mysql' => [
    'read' => [
        'host' => '192.168.1.1',
        'username'  => 'username1',
        'password'  => 'password1',
    ],
    'write' => [
        'host' => '196.168.1.2',
        'username'  => 'username2',
        'password'  => 'password2',
    ],
    'driver'    => 'mysql',
    'database'  => 'database_name',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
],

?>
<!-- ----------------------------------------------------------- -->

<!-- ----------------------------------------------------------- -->
<?php

$users = DB::connection('foo')->select(...);
$pdo = DB::connection()->getPdo();
DB::reconnect('foo');
DB::disconnect('foo');
DB::connection()->disableQueryLog();
$queries = DB::getQueryLog();

?>
<!-- ----------------------------------------------------------- -->