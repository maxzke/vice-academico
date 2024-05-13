<?php

namespace App\Filament\Resources\MateriaPlanResource\Pages;

use App\Filament\Resources\MateriaPlanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMateriaPlans extends ListRecords
{
    protected static string $resource = MateriaPlanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
