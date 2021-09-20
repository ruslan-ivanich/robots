<?php
require 'RobotTypes/BaseRobotType.php';
require 'RobotTypes/RobotTypeInterface.php';
require 'FactoryRobot.php';
require 'RobotTypes/Robot1.php';
require 'RobotTypes/Robot2.php';


$factory = new FactoryRobot();
$factory
    ->addType(new Robot1())
    ->addType(new Robot2())
;

var_dump($factory->createRobot1(5));
var_dump($factory->createRobot2(2));

