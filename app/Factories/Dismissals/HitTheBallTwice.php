<?php

namespace App\Factories\Dismissals;

use App\Models\DismissalMethod;

class HitTheBallTwice extends AbstractDismissal
{
    public function getDismissalId() {
        return DismissalMethod::HIT_THE_BALL_TWICE;
    }
}
