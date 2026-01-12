<?php

namespace App\Enums;

enum JobOrderStatus: string
{
    case DRAFT = 'draft';
    case SCHEDULED = 'scheduled';
    case IN_PROGRESS = 'in-progress';
    case ON_HOLD = 'on-hold';
    case COMPLETED = 'completed';
    case FOR_INVOICING = 'for-invoicing';
    case INVOICED = 'invoiced';
    case CLOSED = 'closed';
    case CANCELLED = 'cancelled';
    case FAILED = 'failed';
}
