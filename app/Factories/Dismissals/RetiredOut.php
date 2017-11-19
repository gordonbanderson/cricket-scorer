<?php

namespace App\Factories\Dismissals;

use App\Models\DismissalMethod;

class RetiredOut extends AbstractDismissal
{
    public function getDismissalId() {
        return DismissalMethod::RETIRED_OUT;
    }
}
