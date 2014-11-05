<?php

namespace Report\Model;

class ColumnsModel implements ColumnsModelInterface
{
    protected $columnsList = [];

    protected $allowed = [
        'product',
        'website',
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
            throw new \InvalidArgumentException('invalid column');
        }

        $this->columnsList[] = $name;
    }

    /**
     * get
     *
     * @return string[]
     */
    public function get()
    {
        return $this->columnsList;
    }
}