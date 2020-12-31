<?php

namespace Eurecab\Finder\Algorithm;

/**
 * Class F
 */
final class F
{
    /**
     * @var Thing $p1
     */
    public $p1;

    /**
     * @var Thing $p2
     */
    public $p2;

    /**
     * @var int $d
     */
    public $d;

    /**
     * sets P1.
     *
     * @param Thing $p1
     *
     * @return self
     */
    public function setP1(Thing $p1): self
    {
        $this->p1 = $p1;

        return $this;
    }

    /**
     * sets P2.
     *
     * @param Thing $p2
     *
     * @return self
     */
    public function setP2(Thing $p2): self
    {
        $this->p2 = $p2;

        return $this;
    }

    /**
     * sets D.
     *
     * @param int $d
     *
     * @return self
     */
    public function setD(int $d): self
    {
        $this->d = $d;

        return $this;
    }

    /**
     * Gets P1.
     *
     * @return Thing
     */
    public function getP1(): Thing
    {
        return $this->p1;
    }

    /**
     * Gets P2.
     *
     * @return Thing
     */
    public function getP2(): Thing
    {
        return $this->p2;
    }

    /**
     * Gets D.
     *
     * @return int
     */
    public function getD(): int
    {
        return $this->d;
    }
}
