<?php

namespace App\Factories\Dismissals;

use App\Models\DismissalMethod;

class RetiredHurt extends AbstractDismissal
{
    public function getDismissalId() {
        return DismissalMethod::RETIRED_HURT;
    }
}
