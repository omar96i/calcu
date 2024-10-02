<?php

namespace App\Filament\Company\Resources;

use App\Filament\Company\Resources\DataGeneralResource\Pages;
use App\Filament\Company\Resources\DataGeneralResource\RelationManagers;
use App\Models\DataGeneral;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DataGeneralResource extends Resource
{
    protected static ?string $model = DataGeneral::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-office-2';

    protected static ?string $navigationLabel = 'Variables de empresa';

    protected static ?string $slug = 'variables-empresa';

    protected static ?string $modelLabel = 'variables empresa';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('type')
                    ->options([
                        'normal' => 'COLGAAP',
                        'normal2' => 'NIIF'
                    ]),
                Forms\Components\TextInput::make('year')
                    ->numeric(),
                Forms\Components\TextInput::make('parametros_17')
                    ->numeric(),
                Forms\Components\TextInput::make('smmlv')
                    ->numeric(),
                Forms\Components\TextInput::make('k')
                    ->numeric(),
                Forms\Components\TextInput::make('j')
                    ->numeric(),
                Forms\Components\TextInput::make('js')
                    ->numeric(),
                Forms\Components\TextInput::make('jm')
                    ->numeric(),
                Forms\Components\TextInput::make('i')
                    ->numeric(),
                Forms\Components\TextInput::make('ttm')
                    ->numeric(),
                Forms\Components\DatePicker::make('fecha_calculo'),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('type')
                    ->formatStateUsing(function ($state) {
                        return match ($state) {
                            'normal' => 'COLGAAP',
                            'normal2' => 'NIIF',
                            default => $state,
                        };
                    })
                    ->sortable()
                    ->searchable()
                    ->label('Tipo'),
                Tables\Columns\TextColumn::make('year')
                    ->searchable(),
                Tables\Columns\TextColumn::make('parametros_17')
                    ->searchable(),
                Tables\Columns\TextColumn::make('smmlv')
                    ->searchable(),
                Tables\Columns\TextColumn::make('k')
                    ->searchable(),
                Tables\Columns\TextColumn::make('j')
                    ->searchable(),
                Tables\Columns\TextColumn::make('js')
                    ->searchable(),
                Tables\Columns\TextColumn::make('jm')
                    ->searchable(),
                Tables\Columns\TextColumn::make('i')
                    ->searchable(),
                Tables\Columns\TextColumn::make('ttm')
                    ->searchable(),
                Tables\Columns\TextColumn::make('fecha_calculo')
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
            'index' => Pages\ListDataGenerals::route('/'),
            'create' => Pages\CreateDataGeneral::route('/create'),
            'edit' => Pages\EditDataGeneral::route('/{record}/edit'),
        ];
    }
}
