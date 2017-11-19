<?php

namespace App\Factories\Dismissals;

use App\Models\DismissalMethod;

class Caught extends AbstractDismissal
{
    public function getDismissalId() {
        return DismissalMethod::CAUGHT;
    }
}
