<?php

namespace App\Enums;

enum ServiceRequestType: string
{
    case PMS = 'pms';
    case REPAIR = 'repair';
    case INSTALLATION = 'installation';
}
