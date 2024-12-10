<?php

namespace App\Filament\Resources\CaseStudiesResource\Pages;

use App\Filament\Resources\CaseStudiesResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewCaseStudies extends ViewRecord
{
    protected static string $resource = CaseStudiesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
