<?php

namespace App\Filament\Resources\CicloResource\Pages;

use App\Filament\Resources\CicloResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCiclos extends ListRecords
{
    protected static string $resource = CicloResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
