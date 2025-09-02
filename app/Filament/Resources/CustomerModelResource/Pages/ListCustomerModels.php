<?php

namespace App\Filament\Resources\CustomerModelResource\Pages;

use App\Filament\Resources\CustomerModelResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCustomerModels extends ListRecords
{
    protected static string $resource = CustomerModelResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
