<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CarreraPlanResource\Pages;
use App\Filament\Resources\CarreraPlanResource\RelationManagers;
use App\Models\CarreraPlan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CarreraPlanResource extends Resource
{
    protected static ?string $model = CarreraPlan::class;
    protected static ?string $navigationLabel = 'Carrera-Plan';
    protected static ?int $navigationSort = 15;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('carrera_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('plan_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('alumnos')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('aprobados')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('reprobados')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('baja')
                    ->required()
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('carrera_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('plan_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('alumnos')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('aprobados')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('reprobados')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('baja')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCarreraPlans::route('/'),
            'create' => Pages\CreateCarreraPlan::route('/create'),
            'edit' => Pages\EditCarreraPlan::route('/{record}/edit'),
        ];
    }
}
