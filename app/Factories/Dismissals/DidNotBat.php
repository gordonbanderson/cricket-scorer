<?php

namespace App\Factories\Dismissals;

use App\Models\DismissalMethod;

class DidNotBat extends AbstractDismissal
{
    public function getDismissalId() {
        return DismissalMethod::DID_NOT_BAT;
    }
}
