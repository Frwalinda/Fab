<?php

namespace App\Filament\Resources\FAQsResource\Pages;

use App\Filament\Resources\FAQsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFAQs extends EditRecord
{
    protected static string $resource = FAQsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
