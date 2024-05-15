<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProfesorResource\Pages;
use App\Filament\Resources\ProfesorResource\RelationManagers;
use App\Models\Profesor;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProfesorResource extends Resource
{
    protected static ?string $model = Profesor::class;
    protected static ?string $navigationLabel = 'Profesores';
    protected static ?int $navigationSort = 8;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nombre')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('apellido_p')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('apellido_m')
                    ->required()
                    ->maxLength(255),
                Forms\Components\DateTimePicker::make('ingreso')
                    ->required(),
                Forms\Components\DateTimePicker::make('fecha')
                ->required(),
                Forms\Components\TextInput::make('sexo')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('campus_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('sni_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('categoria_id')
                    ->required()
                    ->numeric(),
                Forms\Components\Select::make('carrera_id')
                ->relationship('carreras','nombre')
                ->preload()
                ->searchable(),
                
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('campus_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('sni_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('categoria_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('nombre')
                    ->searchable(),
                Tables\Columns\TextColumn::make('apellido_p')
                    ->searchable(),
                Tables\Columns\TextColumn::make('apellido_m')
                    ->searchable(),
                Tables\Columns\TextColumn::make('ingreso')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('sexo')
                    ->searchable(),
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
            'index' => Pages\ListProfesors::route('/'),
            'create' => Pages\CreateProfesor::route('/create'),
            'edit' => Pages\EditProfesor::route('/{record}/edit'),
        ];
    }
}
