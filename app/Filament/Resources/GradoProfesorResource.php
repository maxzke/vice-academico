<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GradoProfesorResource\Pages;
use App\Filament\Resources\GradoProfesorResource\RelationManagers;
use App\Models\GradoProfesor;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class GradoProfesorResource extends Resource
{
    protected static ?string $model = GradoProfesor::class;
    protected static ?string $navigationLabel = 'Grado-Profesor';
    protected static ?int $navigationSort = 12;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('profesor_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('grado_id')
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
                Tables\Columns\TextColumn::make('grado_id')
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
            'index' => Pages\ListGradoProfesors::route('/'),
            'create' => Pages\CreateGradoProfesor::route('/create'),
            'edit' => Pages\EditGradoProfesor::route('/{record}/edit'),
        ];
    }
}
