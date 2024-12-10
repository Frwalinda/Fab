<?php

namespace App\Filament\Resources\CaseStudiesResource\Pages;

use App\Filament\Resources\CaseStudiesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCaseStudies extends EditRecord
{
    protected static string $resource = CaseStudiesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
