<?php

namespace App\Factories\Dismissals;

use App\Models\DismissalMethod;

class RunOut extends AbstractDismissal
{
    public function getDismissalId() {
        return DismissalMethod::RUN_OUT;
    }
}
