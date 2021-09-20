<?php

class Robot1 extends BaseRobotType implements RobotTypeInterface
{
    /**
     * @param int $count
     * @return array
     */
    public function create(int $count): array
    {
        $robots = [];
        for ($i = 0; $i < $count; $i++) {
                $robots[] = $this;
        }
        return $robots;
    }
}