<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BasicDataResource\Pages;
use App\Filament\Resources\BasicDataResource\RelationManagers;
use App\Models\BasicData;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BasicDataResource extends Resource
{
    protected static ?string $model = BasicData::class;

    protected static ?string $navigationIcon = 'heroicon-o-clipboard';

    protected static ?string $navigationLabel = 'Parametros';

    protected static ?string $slug = 'parametros';

    protected static ?string $modelLabel = 'Parametros';
    protected static ?string $navigationGroup = 'Datos Empresa';

    protected static ?int $navigationSort = 9;


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('calculation_year')
                    ->maxLength(191),
                Forms\Components\DatePicker::make('calculation_date'),
                Forms\Components\TextInput::make('salary')
                    ->maxLength(191),
                Forms\Components\TextInput::make('admon_expenses')
                    ->maxLength(191),
                Forms\Components\TextInput::make('k')
                    ->maxLength(191),
                Forms\Components\TextInput::make('estimated_inflation_rate')
                    ->maxLength(191),
                Forms\Components\TextInput::make('estimated_annual_inflation_rate')
                    ->maxLength(191),
                Forms\Components\TextInput::make('monthly_estimated_inflation_rate')
                    ->maxLength(191),
                Forms\Components\TextInput::make('semiannual_estimated_inflation_rate')
                    ->maxLength(191),
                Forms\Components\TextInput::make('annual_technical_rate')
                    ->maxLength(191),
                Forms\Components\TextInput::make('monthly_technical_rate')
                    ->maxLength(191),
                Forms\Components\TextInput::make('semiannual_technical_rate')
                    ->maxLength(191),
                Forms\Components\TextInput::make('age_difference')
                    ->maxLength(191),
                Forms\Components\TextInput::make('safety_factor')
                    ->maxLength(191),
                Forms\Components\DatePicker::make('legislative_act'),
                Forms\Components\TextInput::make('days_year')
                    ->maxLength(191),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('calculation_year')
                    ->searchable(),
                Tables\Columns\TextColumn::make('calculation_date')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('salary')
                    ->searchable(),
                Tables\Columns\TextColumn::make('k')
                    ->searchable(),
                Tables\Columns\TextColumn::make('estimated_inflation_rate')
                    ->searchable(),
                Tables\Columns\TextColumn::make('estimated_annual_inflation_rate')
                    ->searchable(),
                Tables\Columns\TextColumn::make('monthly_estimated_inflation_rate')
                    ->searchable(),
                Tables\Columns\TextColumn::make('semiannual_estimated_inflation_rate')
                    ->searchable(),
                Tables\Columns\TextColumn::make('annual_technical_rate')
                    ->searchable(),
                Tables\Columns\TextColumn::make('monthly_technical_rate')
                    ->searchable(),
                Tables\Columns\TextColumn::make('semiannual_technical_rate')
                    ->searchable(),
                Tables\Columns\TextColumn::make('age_difference')
                    ->searchable(),
                Tables\Columns\TextColumn::make('safety_factor')
                    ->searchable(),
                Tables\Columns\TextColumn::make('legislative_act')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('days_year')
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
            'index' => Pages\ListBasicData::route('/'),
            'create' => Pages\CreateBasicData::route('/create'),
            'edit' => Pages\EditBasicData::route('/{record}/edit'),
        ];
    }
}
