<?php

class FactoryRobot
{
    /**
     * @var array
     */
    private $robots;

    /**
     * add robot type
     *
     * @param RobotTypeInterface $robotType
     * @return $this
     */
    public function addType(RobotTypeInterface $robotType): self
    {
        $this->robots[] = $robotType;
        return $this;
    }

    public function __call($method, $arguments)
    {
        if (substr( $method, 0, 6 ) === 'create') {
            $className = substr($method, 6);
            foreach ($this->robots as $robot) {
                if ($robot instanceof $className) {
                    return $robot->create(...$arguments);
                }
            }
        }
        return 'method not found';
    }
}