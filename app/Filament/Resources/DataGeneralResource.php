<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DataGeneralResource\Pages;
use App\Filament\Resources\DataGeneralResource\RelationManagers;
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

    protected static ?string $navigationLabel = 'Datos generales de empresas';

    protected static ?string $slug = 'datos-generales-empresa';

    protected static ?string $modelLabel = 'Datos generales empresas';
    protected static ?string $navigationGroup = 'Datos Empresa';



    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('user_id')->label('compañia')
                    ->relationship('user', 'name')
                    ->required(),
                Forms\Components\Select::make('type')
                    ->options([
                        'normal' => 'COLGAAP',
                        'normal2' => 'NIIF'
                    ]),
                Forms\Components\TextInput::make('year')->label('Año')
                    ->required()
                    ->maxLength(191)
                    ->live()
                    ->afterStateUpdated(function ($state, callable $set) {
                        if ($state) {
                            // Consultamos los datos en la base de datos
                            $generalData = \App\Models\GeneralData::where('calculation_year', $state)->first();

                            if ($generalData) {

                                $set('fecha_calculo', $generalData->calculation_date);
                                $set('smmlv', $generalData->minimum_salary);
                            }
                        }
                    }),
                Forms\Components\TextInput::make('parametros_17')->label('parametros')
                    ->maxLength(191),
                Forms\Components\TextInput::make('smmlv')->label('SMMLV')
                    ->maxLength(191),
                Forms\Components\TextInput::make('k')
                    ->label('K de corte =')
                    ->required()
                    ->numeric() // Asegura que solo se introduzcan números
                    ->live()
                    ->afterStateUpdated(function ($state, callable $get, callable $set) {
                        // Obtener el valor de 'i'
                        $i = $get('i');

                        // Si 'i' está definido, calculamos 'j'
                        if ($i !== null) {
                            $k = $state;
                            $j = ((1 + $k) * (1 + $i)) - 1;

                            // Asignar el valor calculado a 'j'
                            $set('j', $j);
                        }
                    }),

                Forms\Components\TextInput::make('i')
                    ->label('Tasa ténica anual (I)')
                    ->required()
                    ->numeric() // Asegura que solo se introduzcan números
                    ->live()
                    ->afterStateUpdated(function ($state, callable $get, callable $set) {
                        // Obtener el valor de 'k'
                        $k = $get('k');

                        // Si 'k' está definido, calculamos 'j', 'js', 'jm' y 'ttm'
                        if ($k !== null) {
                            $i = $state;

                            // Cálculo de 'j' con la fórmula ((1 + k) * (1 + i)) - 1
                            $j = ((1 + $k) * (1 + $i)) - 1;

                            // Asignar el valor calculado a 'j'
                            $set('j', $j);

                            // Cálculo de 'js' con la fórmula (1 + j)^(1/2) - 1
                            $js = pow((1 + $j), 1 / 2) - 1;

                            // Asignar el valor calculado a 'js'
                            $set('js', $js);

                            // Cálculo de 'jm' con la fórmula (1 + j)^(1/12) - 1
                            $jm = pow((1 + $j), 1 / 12) - 1;

                            // Asignar el valor calculado a 'jm'
                            $set('jm', $jm);
                        }

                        // Cálculo de 'ttm' con la fórmula (1 + i)^(1/12) - 1
                        $ttm = pow((1 + $i), 1 / 12) - 1;

                        // Asignar el valor calculado a 'ttm'
                        $set('ttm', $ttm);
                    }),
                Forms\Components\TextInput::make('j')
                    ->label('Tasa de interes anual estimada (J)'),
                Forms\Components\TextInput::make('js')
                    ->label('Tasa de interes semestral estimada (JS)'),
                Forms\Components\TextInput::make('jm')->label('Tasa de interes mensual estimada (JM)'),

                Forms\Components\TextInput::make('ttm')->label('Tasa técnica mensual (TTM)'),
                Forms\Components\DatePicker::make('fecha_calculo'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.name')->label('compañia')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('type')->label('tipo de parametros')
                    ->searchable(),
                Tables\Columns\TextColumn::make('year')->label('año')
                    ->searchable(),
                Tables\Columns\TextColumn::make('parametros_17')->label('parametros')
                    ->searchable(),
                Tables\Columns\TextColumn::make('smmlv')
                    ->searchable(),
                Tables\Columns\TextColumn::make('k')
                    ->searchable(),
                Tables\Columns\TextColumn::make('j') // se puede calcular
                    ->searchable(),
                Tables\Columns\TextColumn::make('js') // se puede calcular
                    ->searchable(),
                Tables\Columns\TextColumn::make('jm') // se puede calcular
                    ->searchable(),
                Tables\Columns\TextColumn::make('i') // se puede calcular
                    ->searchable(),
                Tables\Columns\TextColumn::make('ttm') // se puede calcular
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
