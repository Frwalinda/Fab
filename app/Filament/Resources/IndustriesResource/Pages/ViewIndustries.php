<?php

namespace App\Filament\Resources\IndustriesResource\Pages;

use App\Filament\Resources\IndustriesResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewIndustries extends ViewRecord
{
    protected static string $resource = IndustriesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
