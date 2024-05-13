<?php

namespace App\Filament\Resources\CarreraProfesorResource\Pages;

use App\Filament\Resources\CarreraProfesorResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCarreraProfesors extends ListRecords
{
    protected static string $resource = CarreraProfesorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
