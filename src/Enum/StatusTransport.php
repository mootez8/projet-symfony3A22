<?php
namespace App\Enum;

enum StatusTransport: string
{
    case Available = 'Available';
    case Unavailable = 'Unavailable';
    case UnderMaintenance = 'UnderMaintenance';
}
