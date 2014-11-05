<?php

namespace Report\Model;

interface RequestModelInterface
{

    /**
     * getMeasures
     *
     * @return string[]
     */
    public function getMeasures();

    /**
     * getDimensions
     *
     * @return string[]
     */
    public function getDimensions();

    /**
     * getColumns
     *
     * @return string[]
     */
    public function getColumns();

    /**
     * getRows
     *
     * @return string[]
     */
    public function getRows();
}