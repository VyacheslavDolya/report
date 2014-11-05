<?php

namespace Report\Model;


class DimensionsModel implements DimensionsModelInterface
{
    protected $dimensionsList = [];

    protected $allowed = [
        'dateFrom',
        'dateTo',
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
            throw new \InvalidArgumentException('invalid dimension');
        }

        $this->dimensionsList[] = $name;
    }

    /**
     * get
     *
     * @return string[]
     */
    public function get()
    {
        return $this->dimensionsList;
    }
}