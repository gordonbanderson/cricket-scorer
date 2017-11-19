<?php

namespace App\Factories\Dismissals;

use App\Models\DismissalMethod;

class HitWicket extends AbstractDismissal
{
    public function getDismissalId() {
        return DismissalMethod::HIT_WICKET;
    }
}
