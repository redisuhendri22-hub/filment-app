<?php

namespace App\Filament\Resources\CustomerModelResource\Pages;

use App\Filament\Resources\CustomerModelResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateCustomerModel extends CreateRecord
{
    protected static string $resource = CustomerModelResource::class;
}
