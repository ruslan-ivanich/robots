<?php

class MergeRobot extends BaseRobotType implements RobotTypeInterface
{

    /**
     * @var  array
     */
    private $robots;

    public function addRobot($data): void
    {
        if ($data instanceof RobotTypeInterface) {
            $this->robots[] = $data;
        }
        if (is_array($data)) {
            $this->robots = array_merge($this->robots, $data);
        }


    }

    public function create(int $count): array
    {
        $robots = [];
        for ($i = 0; $i < $count; $i++) {
                $robots[] = $this;
        }
        return $robots;
    }
}