<?php

namespace App\Filament\Resources\CicloResource\Pages;

use App\Filament\Resources\CicloResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCiclo extends EditRecord
{
    protected static string $resource = CicloResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
