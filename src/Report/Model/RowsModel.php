<?php

namespace Report\Model;

class RowsModel implements RowsModelInterface
{
    protected $rowsList = [];

    protected $allowed = [
        'date',
        'merchant',
        'account',
        'bank',
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
            throw new \InvalidArgumentException('invalid rows');
        }

        $this->rowsList[] = $name;
    }

    /**
     * get
     *
     * @return string[]
     */
    public function get()
    {
        return $this->rowsList;
    }
}