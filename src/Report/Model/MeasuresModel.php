<?php

namespace Report\Model;


class MeasuresModel implements MeasuresModelInterface
{
    protected $measuresList = [];

    protected $allowed = [
        'sum',
        'count',
    ];

    /**
     * add
     *
     * @param string $name
     * @throws \InvalidArgumentException
     */
    public function add($name)
    {
        if (!is_string($name) || !in_array($name, $this->allowed)) {
            throw new \InvalidArgumentException('invalid measure');
        }

        $this->measuresList[] = $name;
    }

    /**
     * get
     *
     * @return string[]
     */
    public function get()
    {
        return $this->measuresList;
    }
}