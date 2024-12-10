<?php

namespace App\Filament\Resources\FAQsResource\Pages;

use App\Filament\Resources\FAQsResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewFAQs extends ViewRecord
{
    protected static string $resource = FAQsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
