<?php

namespace App\Factories\Dismissals;

use App\Models\DismissalMethod;

class CaughtAndBowled extends AbstractDismissal
{
    public function getDismissalId() {
        return DismissalMethod::CAUGHT_AND_BOWLED;
    }
}
