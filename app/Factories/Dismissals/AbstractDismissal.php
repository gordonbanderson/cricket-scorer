<?php

namespace App\Factories\Dismissals;

use App\Models\Innings;
use App\Models\InningsBatsman;
use App\Models\Match;
use App\Models\Player;

abstract class AbstractDismissal
{
    /** @var Match */
    protected $match = null;

    /** @var integer */
    protected $position = null;

    /** @var Player */
    protected $bowler = null;

    /** @var Player */
    protected $fielder = null;

    /** @var Player */
    protected $batsman = null;

    /** @var Innings */
    protected $innings;

    /** @var integer */
    protected $runs;

    /** @var integer */
    protected $balls_faced;


    public function __construct($match, $innings, $position, $runs, $batsman, $bowler=null, $fielder=null, $balls_faced = null)
    {
        $this->match = $match;
        $this->batsman = $batsman;
        $this->bowler = $bowler;
        $this->fielder = $fielder;
        $this->innings = $innings;
        $this->position = $position;
        $this->runs = $runs;
        $this->balls_faced = $balls_faced;
    }

    abstract function getDismissalId();

    /**
     * @return InningsBatsman batting innings
     */
    public function createBattingInnings()
    {
        return InningsBatsman::create([
            //'match_id' => $this->match->id,
            'position' => $this->position,
            'batsman_id' => $this->batsman->id,
            'bowler_id' => !empty($this->bowler) ? $this->bowler->id : null,
            'fielder_id' => !empty($this->fielder) ? $this->fielder->id : null,
            'dismissable_method_id' => $this->getDismissalId(),
            'innings_id' => $this->innings->id,
            'runs' => $this->runs,
            'balls_faced' => $this->balls_faced
        ]);
    }

}
