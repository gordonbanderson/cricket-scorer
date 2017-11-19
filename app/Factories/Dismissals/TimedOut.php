<?php

namespace App\Factories\Dismissals;

use App\Models\DismissalMethod;

class TimedOut extends AbstractDismissal
{
    public function getDismissalId() {
        return DismissalMethod::TIMED_OUT;
    }
}
