<?php

interface RobotTypeInterface
{
    /**
     * Create robots
     * @param int $count
     * @return array
     */
    public function create(int $count): array;
}