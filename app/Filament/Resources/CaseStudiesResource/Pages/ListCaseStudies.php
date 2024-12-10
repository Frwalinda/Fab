<?php

namespace App\Filament\Resources\CaseStudiesResource\Pages;

use App\Filament\Resources\CaseStudiesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCaseStudies extends ListRecords
{
    protected static string $resource = CaseStudiesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
