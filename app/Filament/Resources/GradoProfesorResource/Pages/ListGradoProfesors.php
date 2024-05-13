<?php

namespace App\Filament\Resources\GradoProfesorResource\Pages;

use App\Filament\Resources\GradoProfesorResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListGradoProfesors extends ListRecords
{
    protected static string $resource = GradoProfesorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
