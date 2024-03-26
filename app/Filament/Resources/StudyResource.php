<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StudyResource\Pages;
use App\Filament\Resources\StudyResource\RelationManagers;
use App\Models\Study;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class StudyResource extends Resource
{
    protected static ?string $model = Study::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';


    protected static ?string $navigationLabel = 'Estudios-old';

    protected static ?string $slug = 'estudios-old';

    protected static ?string $modelLabel = 'Estudios-old';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('actuarial_group_id')
                    ->relationship('actuarial_group', 'name')
                    ->required(),
                Forms\Components\TextInput::make('cc')
                    ->maxLength(40),
                Forms\Components\TextInput::make('name')
                    ->maxLength(40),
                Forms\Components\TextInput::make('sex')
                    ->maxLength(40),
                Forms\Components\TextInput::make('pension_class')
                    ->maxLength(40),
                Forms\Components\TextInput::make('pension_situation')
                    ->maxLength(40),
                Forms\Components\TextInput::make('civil_status')
                    ->maxLength(40),
                Forms\Components\TextInput::make('birth_date')
                    ->maxLength(40),
                Forms\Components\TextInput::make('causative_state')
                    ->maxLength(40),
                Forms\Components\TextInput::make('date_of_birth_spouse')
                    ->maxLength(40),
                Forms\Components\TextInput::make('spouse_gender')
                    ->maxLength(40),
                Forms\Components\TextInput::make('spouse_status')
                    ->maxLength(40),
                Forms\Components\TextInput::make('company_entry_date')
                    ->maxLength(40),
                Forms\Components\TextInput::make('company_withdrawal_date')
                    ->maxLength(40),
                Forms\Components\TextInput::make('base_income_contribution')
                    ->maxLength(40),
                Forms\Components\TextInput::make('allowance_value')
                    ->maxLength(40),
                Forms\Components\TextInput::make('additional_allowance_value')
                    ->maxLength(40),
                Forms\Components\TextInput::make('health_contribution')
                    ->maxLength(40),
                Forms\Components\TextInput::make('extralegal_premium_amount')
                    ->maxLength(40),
                Forms\Components\TextInput::make('number_months_year')
                    ->maxLength(40),
                Forms\Components\TextInput::make('counter_rpm')
                    ->maxLength(40),
                Forms\Components\TextInput::make('months_to_quote')
                    ->maxLength(40),
                Forms\Components\TextInput::make('funeral_aid')
                    ->maxLength(40),
                Forms\Components\TextInput::make('additional_weeks')
                    ->maxLength(40),
                Forms\Components\TextInput::make('allowance_iss')
                    ->maxLength(40),
                Forms\Components\TextInput::make('allowance_14')
                    ->maxLength(40),
                Forms\Components\TextInput::make('school_help')
                    ->maxLength(40),
                Forms\Components\TextInput::make('pension_requirement_date')
                    ->maxLength(40),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('actuarial_group.name')->label('SITUACION PENSIONADO')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('cc')->label('C de C')
                    ->searchable(),
                Tables\Columns\TextColumn::make('name')->label('NOMBRE')
                    ->searchable(),
                Tables\Columns\TextColumn::make('sex')->label('SEXO')
                    ->searchable(),
                Tables\Columns\TextColumn::make('pension_class')->label('Clase Pensión')
                    ->searchable(),
                Tables\Columns\TextColumn::make('pension_situation')->label('Situación Pensional')
                    ->searchable(),
                Tables\Columns\TextColumn::make('civil_status')->label('Estado Civil')
                    ->searchable(),
                Tables\Columns\TextColumn::make('birth_date')->label('Fecha de Nacimiento')
                    ->searchable(),
                Tables\Columns\TextColumn::make('causative_state')->label('Estado causante')
                    ->searchable(),
                Tables\Columns\TextColumn::make('date_of_birth_spouse')->label('Fech. Nacim. Cónyuge')
                    ->searchable(),
                Tables\Columns\TextColumn::make('spouse_gender')->label('Genero cónyuge')
                    ->searchable(),
                Tables\Columns\TextColumn::make('spouse_status')->label('Estado cónyuge')
                    ->searchable(),
                Tables\Columns\TextColumn::make('company_entry_date')->label('Fecha de Ingreso empresa')
                    ->searchable(),
                Tables\Columns\TextColumn::make('company_withdrawal_date')->label('Fecha de Retiro empresa')
                    ->searchable(),
                Tables\Columns\TextColumn::make('base_income_contribution')->label('Ingreso base cotización')
                    ->searchable(),
                Tables\Columns\TextColumn::make('allowance_value')->label('Valor  Mesada')
                    ->searchable(),
                Tables\Columns\TextColumn::make('additional_allowance_value')->label('Valor Mesada adicional pensión 85')
                    ->searchable(),
                Tables\Columns\TextColumn::make('health_contribution')->label('Aporte Salud')
                    ->searchable(),
                Tables\Columns\TextColumn::make('extralegal_premium_amount')->label('Monto de la prima extralegal')
                    ->searchable(),
                Tables\Columns\TextColumn::make('number_months_year')->label('No. De mesadas al año')
                    ->searchable(),
                Tables\Columns\TextColumn::make('counter_rpm')->label('No.mesadas RPM')
                    ->searchable(),
                Tables\Columns\TextColumn::make('months_to_quote')->label('Meses a cotizar desde dic "&Año_calculo')
                    ->searchable(),
                Tables\Columns\TextColumn::make('funeral_aid')->label('Auxilio Funerario')
                    ->searchable(),
                Tables\Columns\TextColumn::make('additional_weeks')->label('Semanas adic. Min')
                    ->searchable(),
                Tables\Columns\TextColumn::make('allowance_iss')->label('Mesada ISS')
                    ->searchable(),
                Tables\Columns\TextColumn::make('allowance_14')->label('Mesada 14 ')
                    ->searchable(),
                Tables\Columns\TextColumn::make('school_help')->label('Auxilio Escolaridad')
                    ->searchable(),
                Tables\Columns\TextColumn::make('pension_requirement_date')->label('Fecha de requisitos Pensión RPM')
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
            'index' => Pages\ListStudies::route('/'),
            'create' => Pages\CreateStudy::route('/create'),
            'edit' => Pages\EditStudy::route('/{record}/edit'),
        ];
    }
}
