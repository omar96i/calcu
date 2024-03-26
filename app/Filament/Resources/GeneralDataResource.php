<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GeneralDataResource\Pages;
use App\Filament\Resources\GeneralDataResource\RelationManagers;
use App\Models\GeneralData;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class GeneralDataResource extends Resource
{
    protected static ?string $model = GeneralData::class;

    protected static ?string $navigationIcon = 'heroicon-o-clipboard';

    protected static ?string $navigationLabel = 'Factores';

    protected static ?string $slug = 'factores';

    protected static ?string $modelLabel = 'Factores';

    protected static ?string $navigationGroup = 'Datos generales';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('calculation_year')->label('año cálculo')
                    ->required()
                    ->maxLength(191),
                Forms\Components\DatePicker::make('calculation_date')->label('Fecha de cálculo')
                    ->required()
                    ->maxLength(191),
                Forms\Components\TextInput::make('minimum_salary')->label('Salario Mínimo')
                    ->required()
                    ->maxLength(191),
                Forms\Components\TextInput::make('administration_expenses')->label('Gastos de Administración')
                    ->required()
                    ->maxLength(191),
                Forms\Components\TextInput::make('k_growth')->label('Crecimiento K')
                    ->required()
                    ->maxLength(191),
                Forms\Components\TextInput::make('technical_rate')->label('tasa tecnica')
                    ->required()
                    ->maxLength(191),
                Forms\Components\TextInput::make('expected_inflation_rate')->label('Tasa infla esperada')
                    ->required()
                    ->maxLength(191),
                Forms\Components\TextInput::make('estimated_rate')->label('Tasa estimada')
                    ->required()
                    ->maxLength(191),
                Forms\Components\TextInput::make('age_difference')->label('Diferencia de Edades')
                    ->required()
                    ->maxLength(191),
                Forms\Components\TextInput::make('safety_factor')->label('factor de Seguridad')
                    ->required()
                    ->maxLength(191),
                Forms\Components\TextInput::make('annual_cpi')->label('ipc Anual')
                    ->required()
                    ->maxLength(191),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('calculation_year')->label('año cálculo')
                    ->searchable(),
                Tables\Columns\TextColumn::make('calculation_date')->label('Fecha de cálculo')
                    ->searchable(),
                Tables\Columns\TextColumn::make('minimum_salary')->label('Salario Mínimo')
                    ->searchable()->money('COP'),
                Tables\Columns\TextColumn::make('administration_expenses')->label('Gastos de Administración')
                    ->numeric(
                        decimalPlaces: 2,
                        decimalSeparator: '.',
                        thousandsSeparator: ',',
                    )
                    ->searchable(),
                Tables\Columns\TextColumn::make('k_growth')->label('Crecimiento K')
                    ->searchable()
                    ->numeric(
                        decimalPlaces: 2,
                        decimalSeparator: '.',
                        thousandsSeparator: ',',
                    ),
                Tables\Columns\TextColumn::make('technical_rate')->label('tasa tecnica')
                    ->numeric(
                        decimalPlaces: 2,
                        decimalSeparator: '.',
                        thousandsSeparator: ',',
                    )
                    ->searchable(),
                Tables\Columns\TextColumn::make('expected_inflation_rate')->label('Tasa infla esperada')
                    ->searchable()
                    ,
                Tables\Columns\TextColumn::make('estimated_rate')->label('Tasa estimada')
                    ->searchable()
                    ->numeric(
                        decimalPlaces: 2,
                        decimalSeparator: '.',
                        thousandsSeparator: ',',
                    ),
                Tables\Columns\TextColumn::make('age_difference')->label('Diferencia de Edades')
                    ->searchable(),
                Tables\Columns\TextColumn::make('safety_factor')->label('factor de Seguridad')
                    ->searchable(),
                Tables\Columns\TextColumn::make('annual_cpi')->label('ipc Anual')
                    ->searchable()
                    ->numeric(
                        decimalPlaces: 2,
                        decimalSeparator: '.',
                        thousandsSeparator: ',',
                    ),
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
            'index' => Pages\ListGeneralData::route('/'),
            'create' => Pages\CreateGeneralData::route('/create'),
            'edit' => Pages\EditGeneralData::route('/{record}/edit'),
        ];
    }
}
