<?php

namespace App\Enums;
enum ServiceRequestStatus: string
{
    case PENDING = 'pending';
    case SURVEY_SCHEDULED = 'survey scheduled';
    case SURVEY_COMPLETED = 'survey completed';
    case QUOTED = 'quoted';
    case APPROVED = 'approved';
    case REJECTED = 'rejected';
    case CANCELLED = 'cancelled';
    case ACCEPTED = 'accepted'; #Accepted to job order.
    case COMPLETED = 'completed'; #Completed job order.
}
