<?php

class Robot2 extends BaseRobotType implements RobotTypeInterface
{
    public function create(int $count): array
    {
        $robots = [];
        for ($i = 0; $i < $count; $i++) {
                $robots[] = $this;
        }
        return $robots;
    }
}