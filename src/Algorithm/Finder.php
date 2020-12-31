<?php

namespace Eurecab\Finder\Algorithm;

/**
 * Class Finder
 */
final class Finder
{
    /**
     * @var Thing[]
     */
    private $_p;

    /**
     * @var F
     */
    protected $f;


    /**
     * Finder constructor.
     *
     * @param array $p
     */
    public function __construct(array $p)
    {
        $this->_p = $p;
        $this->f = new F();
    }

    /**
     * Finds Answer.
     *
     * @param int $ft
     *
     * @return F
     */
    public function find(int $ft): F
    {
        $tr = $this->getTR();

        return $this->getAnswer($ft, $tr);
    }

    /**
     * Gets TR.
     *
     * @return F[]
     */
    public function getTR(): array
    {
        /**
         * @var F[] $tr
         */
        $tr = [];

        for ($i = 0; $i < count($this->_p); $i++) {
            for ($j = $i + 1; $j < count($this->_p); $j++) {
                if ($this->_p[$i]->getBirthDate() < $this->_p[$j]->getBirthDate()) {
                    $this->f->setP1($this->_p[$i]);
                    $this->f->setP2($this->_p[$j]);
                } else {
                    $this->f->setP1($this->_p[$j]);
                    $this->f->setP2($this->_p[$i]);
                }

                $d = $this->f->p2->birthDate->getTimestamp() - $this->f->p1->birthDate->getTimestamp();
                $this->f->setD($d);

                $tr[] = $this->f;
            }
        }

        return $tr;
    }

    /**
     * Gets the Answer.
     *
     * @param int $ft
     * @param F[] $tr
     *
     * @return F
     */
    public function getAnswer(int $ft, array $tr): F
    {
        if (count($tr) < 1) {
            return $this->f;
        }

        $answer = $tr[0];

        foreach ($tr as $result) {
            switch ($ft) {
                case FT::ONE:
                    if ($result->getD() < $answer->getD()) {
                        $answer = $result;
                    }
                    break;

                case FT::TWO:
                    if ($result->getD() > $answer->getD()) {
                        $answer = $result;
                    }
                    break;
            }
        }

        return $answer;
    }
}
