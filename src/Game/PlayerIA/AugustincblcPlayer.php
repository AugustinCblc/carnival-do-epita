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
        // -------------------------------------    -----------------------------------------------------
        // I start with a random forest but the other students' solutions weren't advanced enough to play against me.
        // So I preferred to do more basic.
        // -------------------------------------    -----------------------------------------------------

        $mylast = $this->result->getLastChoiceFor($this->mySide);
        $opplast = $this->result->getLastChoiceFor($this->opponentSide);
        $score = $this->result->getLastScoreFor($this->mySide);

        // -------------------------------------    -----------------------------------------------------
        // If I win, I keep my last choice because I think opponent is waiting for me to change.
        // -------------------------------------    -----------------------------------------------------
        if ($score > 1)
        {
            return $mylast;
        }

        // -------------------------------------    -----------------------------------------------------
        // If I loose, I choose the solution with which I should have won because if opponent think like me, he should
        // keep his last choice.
        // -------------------------------------    -----------------------------------------------------
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
  }
};
