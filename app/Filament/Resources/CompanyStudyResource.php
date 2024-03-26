<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CompanyStudyResource\Pages;
use App\Filament\Resources\CompanyStudyResource\RelationManagers;
use App\Models\CompanyStudy;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CompanyStudyResource extends Resource
{
    protected static ?string $model = CompanyStudy::class;

    protected static ?string $navigationIcon = 'heroicon-o-academic-cap';

    protected static ?string $navigationLabel = 'Estudios';

    protected static ?string $slug = 'estudios';

    protected static ?string $modelLabel = 'estudios';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('company_id')
                    ->relationship('company', 'name')
                    ->required(),
                Forms\Components\Select::make('actuarial_group_id')
                    ->relationship('actuarial_group', 'name')
                    ->required(),
                Forms\Components\TextInput::make('cc')
                    ->maxLength(191),
                Forms\Components\TextInput::make('full_name')
                    ->maxLength(191),
                Forms\Components\TextInput::make('sex')
                    ->maxLength(191),
                Forms\Components\TextInput::make('civil_status')
                    ->maxLength(191),
                Forms\Components\TextInput::make('birth_date')
                    ->maxLength(191),
                Forms\Components\TextInput::make('causing_state')
                    ->maxLength(191),
                Forms\Components\TextInput::make('date_of_birth_spouse')
                    ->maxLength(191),
                Forms\Components\TextInput::make('spouse_gender')
                    ->maxLength(191),
                Forms\Components\TextInput::make('spouse_status')
                    ->maxLength(191),
                Forms\Components\TextInput::make('company_entry_date')
                    ->maxLength(191),
                Forms\Components\TextInput::make('company_withdrawal_date')
                    ->maxLength(191),
                Forms\Components\TextInput::make('income_base_quotation')
                    ->maxLength(191),
                Forms\Components\TextInput::make('allowance_value')
                    ->maxLength(191),
                Forms\Components\TextInput::make('allowance_14')
                    ->maxLength(191),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('company.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('actuarial_group.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('cc')
                    ->searchable(),
                Tables\Columns\TextColumn::make('full_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('sex')
                    ->searchable(),
                Tables\Columns\TextColumn::make('civil_status')
                    ->searchable(),
                Tables\Columns\TextColumn::make('birth_date')
                    ->searchable(),
                Tables\Columns\TextColumn::make('causing_state')
                    ->searchable(),
                Tables\Columns\TextColumn::make('date_of_birth_spouse')
                    ->searchable(),
                Tables\Columns\TextColumn::make('spouse_gender')
                    ->searchable(),
                Tables\Columns\TextColumn::make('spouse_status')
                    ->searchable(),
                Tables\Columns\TextColumn::make('company_entry_date')
                    ->searchable(),
                Tables\Columns\TextColumn::make('company_withdrawal_date')
                    ->searchable(),
                Tables\Columns\TextColumn::make('income_base_quotation')
                    ->searchable(),
                Tables\Columns\TextColumn::make('allowance_value')
                    ->searchable(),
                Tables\Columns\TextColumn::make('allowance_14')
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
            'index' => Pages\ListCompanyStudies::route('/'),
            'create' => Pages\CreateCompanyStudy::route('/create'),
            'edit' => Pages\EditCompanyStudy::route('/{record}/edit'),
        ];
    }
}
