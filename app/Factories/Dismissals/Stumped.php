<?php

namespace App\Factories\Dismissals;

use App\Models\DismissalMethod;

class Stumped extends AbstractDismissal
{
    public function getDismissalId() {
        return DismissalMethod::STUMPED;
    }
}
