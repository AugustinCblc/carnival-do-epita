<?php

namespace Hackathon\PlayerIA;
use Hackathon\Game\Result;

/**
 * Class PaperPlayer
 * @package Hackathon\PlayerIA
 * @author Robin
 *
 */
class AugustincblcPlayer extends Player
{
    protected $mySide;
    protected $opponentSide;
    protected $result;

    public function getChoice()
    {
        $mylast = $this->result->getLastChoiceFor($this->mySide);
        $opplast = $this->result->getLastChoiceFor($this->opponentSide);

        $win = $this->result->getLastScoreFor($this->mySide);
        if ($win > 0)
        {
            if ($mylast == $this->rockChoice())
                return parent::rockChoice();
            if ($mylast == $this->paperChoice())
                return parent::paperChoice();
            else
                return parent::scissorsChoice();
        }
        /*if ($mylast != $opplast)
        {
            if ($opplast == $this->rockChoice())
                return parent::paperChoice();
            if ($opplast == $this->paperChoice())
                return parent::scissorsChoice();
            else
                return parent::rockChoice();
        }*/
        if ($opplast == $this->rockChoice())
            return parent::paperChoice();
        if ($opplast == $this->paperChoice())
            return parent::scissorsChoice();
        else
            return parent::rockChoice();
        // -------------------------------------    -----------------------------------------------------
        // How to get my Last Choice           ?    $this->result->getLastChoiceFor($this->mySide) -- if 0 (first round)
        // How to get the opponent Last Choice ?    $this->result->getLastChoiceFor($this->opponentSide) -- if 0 (first round)
        // -------------------------------------    -----------------------------------------------------
        // How to get my Last Score            ?    $this->result->getLastScoreFor($this->mySide) -- if 0 (first round)
        // How to get the opponent Last Score  ?    $this->result->getLastScoreFor($this->opponentSide) -- if 0 (first round)
        // -------------------------------------    -----------------------------------------------------
        // How to get all the Choices          ?    $this->result->getChoicesFor($this->mySide)
        // How to get the opponent Last Choice ?    $this->result->getChoicesFor($this->opponentSide)
        // -------------------------------------    -----------------------------------------------------
       // How to get my Last Score            ?    $this->result->getLastScoreFor($this->mySide)
        // How to get the opponent Last Score  ?    $this->result->getLastScoreFor($this->opponentSide)
        // -------------------------------------    -----------------------------------------------------
        // How to get the stats                ?    $this->result->getStats()
        // How to get the stats for me         ?    $this->result->getStatsFor($this->mySide)
        //          array('name' => value, 'score' => value, 'friend' => value, 'foe' => value
        // How to get the stats for the oppo   ?    $this->result->getStatsFor($this->opponentSide)
        //          array('name' => value, 'score' => value, 'friend' => value, 'foe' => value
        // -------------------------------------    -----------------------------------------------------
        // How to get the number of round      ?    $this->result->getNbRound()
        // -------------------------------------    -----------------------------------------------------
        // How can i display the result of each round ? $this->prettyDisplay()
        // -------------------------------------    -----------------------------------------------------
        return parent::paperChoice();            
  }
};
