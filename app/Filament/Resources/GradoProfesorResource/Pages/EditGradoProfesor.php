<?php

namespace App\Filament\Resources\GradoProfesorResource\Pages;

use App\Filament\Resources\GradoProfesorResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditGradoProfesor extends EditRecord
{
    protected static string $resource = GradoProfesorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
