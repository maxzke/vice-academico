<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CarreraProfesorResource\Pages;
use App\Filament\Resources\CarreraProfesorResource\RelationManagers;
use App\Models\CarreraProfesor;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CarreraProfesorResource extends Resource
{
    protected static ?string $model = CarreraProfesor::class;
    protected static ?string $navigationLabel = 'Adscripciones';
    protected static ?int $navigationSort = 9;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('profesor_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('carrera_id')
                    ->required()
                    ->numeric(),
                Forms\Components\DateTimePicker::make('fecha')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('profesor_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('carrera_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('fecha')
                    ->dateTime()
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
            'index' => Pages\ListCarreraProfesors::route('/'),
            'create' => Pages\CreateCarreraProfesor::route('/create'),
            'edit' => Pages\EditCarreraProfesor::route('/{record}/edit'),
        ];
    }
}
