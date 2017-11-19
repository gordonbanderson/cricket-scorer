<?php

namespace App\Factories\Dismissals;

use App\Models\DismissalMethod;

class Bowled extends AbstractDismissal
{
    public function getDismissalId() {
        return DismissalMethod::BOWLED;
    }
}
