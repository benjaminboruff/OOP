<?php

use Acme\Users\Person;
use Acme\Staff;
use Acme\Business;

$ben = new Person('Ben');
$stewie = new Person('Stewie');
$john = new Person('Johnny');
$dave = new Person('Dave');

$staff = new Staff([$dave, $john]);

$localGyros = new Business($staff);

$localGyros->hire($ben);
$localGyros->hire($stewie);

$members = $localGyros->getStaffMembers();


var_dump($localGyros->getStaffMembers());