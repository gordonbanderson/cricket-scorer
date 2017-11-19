<?php

namespace App\Factories;

use App\Factories\Dismissals\Bowled;
use App\Factories\Dismissals\Caught;
use App\Factories\Dismissals\CaughtAndBowled;
use App\Factories\Dismissals\DidNotBat;
use App\Factories\Dismissals\HandledTheBall;
use App\Factories\Dismissals\HitTheBallTwice;
use App\Factories\Dismissals\HitWicket;
use App\Factories\Dismissals\LegBeforeWicket;
use App\Factories\Dismissals\ObstructingTheField;
use App\Factories\Dismissals\RetiredHurt;
use App\Factories\Dismissals\RetiredOut;
use App\Factories\Dismissals\RunOut;
use App\Factories\Dismissals\Stumped;
use App\Factories\Dismissals\TimedOut;
use App\Models\Player;
use App\Models\Team;

class DismissalsFactory
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

    /**
     * DismissalsFactory constructor.
     * @param $batsman
     * @param $bowler
     * @param $fielder
     */
    public function __construct($match, $innings, $position, $runs, $batsman, $bowler, $fielder, $balls_faced)
    {
        $this->batsman = $batsman;
        $this->bowler = $bowler;
        $this->fielder = $fielder;
        $this->innings = $innings;
        $this->position = $position;
        $this->runs = $runs;
        $this->balls_faced = $balls_faced;
    }

    public function bowled()
    {
        $innings = new Bowled($this->match, $this->innings, $this->position, $this->runs, $this->batsman, $this->bowler, $this->fielder, $this->balls_faced);
        return $innings->createBattingInnings();
    }

    public function caught()
    {
        $innings = new Caught($this->match, $this->innings, $this->position, $this->runs, $this->batsman, $this->bowler, $this->fielder, $this->balls_faced);
        return $innings->createBattingInnings();
    }

    public function caughtAndBowled()
    {
        $innings = new CaughtAndBowled($this->match, $this->innings, $this->position, $this->runs, $this->batsman, $this->bowler, $this->fielder, $this->balls_faced);
        return $innings->createBattingInnings();
    }

    public function didNotBat()
    {
        $innings = new DidNotBat($this->match, $this->innings, $this->position, $this->runs, $this->batsman, $this->bowler, $this->fielder, $this->balls_faced);
        return $innings->createBattingInnings();
    }

    public function handledTheBall()
    {
        $innings = new HandledTheBall($this->match, $this->innings, $this->position, $this->runs, $this->batsman, $this->bowler, $this->fielder, $this->balls_faced);
        return $innings->createBattingInnings();
    }

    public function hitTheBallTwice()
    {
        $innings = new HitTheBallTwice($this->match, $this->innings, $this->position, $this->runs, $this->batsman, $this->bowler, $this->fielder, $this->balls_faced);
        return $innings->createBattingInnings();
    }

    public function hitWicket()
    {
        $innings = new HitWicket($this->match, $this->innings, $this->position, $this->runs, $this->batsman, $this->bowler, $this->fielder, $this->balls_faced);
        return $innings->createBattingInnings();
    }

    public function legBeforeWicket()
    {
        $innings = new LegBeforeWicket($this->match, $this->innings, $this->position, $this->runs, $this->batsman, $this->bowler, $this->fielder, $this->balls_faced);
        return $innings->createBattingInnings();
    }

    public function notOut()
    {
        $innings = new NotOut($this->match, $this->innings, $this->position, $this->runs, $this->batsman, $this->bowler, $this->fielder, $this->balls_faced);
        return $innings->createBattingInnings();
    }

    public function obstructingTheField()
    {
        $innings = new ObstructingTheField($this->match, $this->innings, $this->position, $this->runs, $this->batsman, $this->bowler, $this->fielder, $this->balls_faced);
        return $innings->createBattingInnings();
    }

    public function retiredHurt()
    {
        $innings = new RetiredHurt($this->match, $this->innings, $this->position, $this->runs, $this->batsman, $this->bowler, $this->fielder, $this->balls_faced);
        return $innings->createBattingInnings();
    }

    public function retiredOut()
    {
        $innings = new RetiredOut($this->match, $this->innings, $this->position, $this->runs, $this->batsman, $this->bowler, $this->fielder, $this->balls_faced);
        return $innings->createBattingInnings();
    }

    public function runOut()
    {
        $innings = new RunOut($this->match, $this->innings, $this->position, $this->runs, $this->batsman, $this->bowler, $this->fielder, $this->balls_faced);
        return $innings->createBattingInnings();
    }

    public function stumped()
    {
        $innings = new Stumped($this->match, $this->innings, $this->position, $this->runs, $this->batsman, $this->bowler, $this->fielder, $this->balls_faced);
        return $innings->createBattingInnings();
    }

    public function timedOut()
    {
        $innings = new TimedOut($this->match, $this->innings, $this->position, $this->runs, $this->batsman, $this->bowler, $this->fielder, $this->balls_faced);
        return $innings->createBattingInnings();
    }
}
