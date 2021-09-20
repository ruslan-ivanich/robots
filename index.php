<?php
require 'RobotTypes/BaseRobotType.php';
require 'RobotTypes/RobotTypeInterface.php';
require 'FactoryRobot.php';
require 'RobotTypes/Robot1.php';
require 'RobotTypes/Robot2.php';
require 'RobotTypes/MergeRobot.php';


$factory = new FactoryRobot();
$factory
    ->addType(new Robot1())
    ->addType(new Robot2())
;

var_dump($factory->createRobot1(5));
var_dump($factory->createRobot2(2));

$mergeRobot = new MergeRobot();
$mergeRobot ->addRobot(new Robot2());
$mergeRobot ->addRobot($factory->createRobot2(2));
$factory->addType($mergeRobot);


$mergedRobots = $factory->createMergeRobot(1);
/** @var MergeRobot $res */
$res = reset($mergedRobots);

var_dump($res);

echo $res->getSpeed() . PHP_EOL;
echo $res->getHeight() . PHP_EOL;
echo $res->getWeight() . PHP_EOL;


