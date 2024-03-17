<?php

require 'vendor/autoload.php';

db()->connect([
    'dbtype' => 'sqlite',
    'dbname' => 'database.sqlite'
]);

db()->query('
create table employees(
    id integer not null primary key autoincrement,
    name text,
    city text,
    salary double
);
')->execute();

app()->run();
