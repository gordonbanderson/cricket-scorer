<?php

namespace App\Factories\Dismissals;

use App\Models\DismissalMethod;

class HandledTheBall extends AbstractDismissal
{
    public function getDismissalId() {
        return DismissalMethod::HANDLED_THE_BALL;
    }
}
