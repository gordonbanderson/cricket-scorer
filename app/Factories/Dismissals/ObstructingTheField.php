<?php

namespace App\Factories\Dismissals;

use App\Models\DismissalMethod;

class ObstructingTheField extends AbstractDismissal
{
    public function getDismissalId() {
        return DismissalMethod::OBSTRUCTING_THE_FIELD;
    }
}
