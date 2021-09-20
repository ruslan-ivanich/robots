<?php

class MergeRobot extends BaseRobotType implements RobotTypeInterface
{

    /**
     * @var  array
     */
    private $robots;

    /**
     * Add robot/robots
     * @param @param RobotTypeInterface|array $data
     */
    public function addRobot($data): void
    {
        if ($data instanceof RobotTypeInterface) {
            $this->robots[] = $data;
        }
        if (is_array($data)) {
            $this->robots = array_merge($this->robots, $data);
        }
    }

    /**
     * @param int $count
     * @return array
     */
    public function create(int $count): array
    {
        $this->speed = 0;
        $this->height = 0;
        $this->weight = 0;
        if (is_array($this->robots)) {
            /** @var RobotTypeInterface $robot */
            foreach ($this->robots as $robot) {
                if ($robot instanceof RobotTypeInterface) {
                    $this->speed = $this->speed && $this->speed < $robot->speed ? $this->speed : $robot->speed;
                    $this->height += $robot->height;
                    $this->weight += $robot->weight;
                }
            }
        }

        $robots = [];
        for ($i = 0; $i < $count; $i++) {
            $robots[] = $this;
        }
        return $robots;
    }

    /**
     * @return null|int
     */
    public function getSpeed(): ?int
    {
        return $this->speed;
    }

    /**
     * @return int|null
     */
    public function getHeight(): ?int
    {
        return $this->height;
    }

    /**
     * @return int|null
     */
    public function getWeight(): ?int
    {
        return $this->weight;
    }
}