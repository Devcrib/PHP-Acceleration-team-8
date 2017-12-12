<?php
/*
    require_once 'index.php';

$db = Database::getInstance();
var_dump($conn->getConnection());*/

interface carCupounGenerator {
    function isActiveSeason();
    function isHighStock();
}

class bmwCupoun implements carCupounGenerator
{
    private $discount = 0;
    private $isActive = false;
    private $isStockHigh = true;

    /**
     * @return int
     */
    public function isActiveSeason()
    {
        if (!$this->isActive) return $this->discount += 5;
        return $this->discount = 0;
    }

    public function isHighStock()
    {
        if ($this->isStockHigh) return $this->discount += 9;
        return $this->discount = 0;
    }
}

$bwn = new bmwCupoun();
var_dump($bwn->isHighStock());