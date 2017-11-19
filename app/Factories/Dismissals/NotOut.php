<?php

namespace App\Factories\Dismissals;

use App\Models\DismissalMethod;

class NotOut extends AbstractDismissal
{
    public function getDismissalId() {
        return DismissalMethod::NOT_OUT;
    }
}
