<?php
// cSpell: ignore eftec bladeone
include "BladeOne.php"; // our file downloaded from Internet.
$name=@$_POST['name'];
$blade=new \eftec\bladeone\BladeOne();
$data=['name' => $name]; // data to send from our logic -> view
echo $blade->run('example', $data);
