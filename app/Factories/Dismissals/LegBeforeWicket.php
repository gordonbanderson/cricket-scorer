<?php

namespace App\Factories\Dismissals;

use App\Models\DismissalMethod;

class LegBeforeWicket extends AbstractDismissal
{
    public function getDismissalId() {
        return DismissalMethod::LBW;
    }
}
