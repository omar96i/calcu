<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DataGeneralResource\Pages;
use App\Filament\Resources\DataGeneralResource\RelationManagers;
use App\Models\DataGeneral;
use App\Models\StudyParametro;
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
                Forms\Components\Select::make('type')
                    ->options([
                        'normal' => 'COLGAAP',
                        'normal2' => 'NIIF'
                    ])
                    ->live()
                    ->afterStateUpdated(function (callable $set, $state) {
                        $set('i', null);  // i es la nueva k
                        $set('k', null);  // k es la nueva i
                        $set('j', null);
                        $set('js', null);
                        $set('jm', null);
                        $set('ttm', null);
                        if($state == 'normal2'){
                            $set('i', 0.04);
                        }
                    }),

                Forms\Components\Select::make('type_company')->label('tipo de compañia')
                    ->options([
                        'si' => 'Liquidada',
                        'no' => 'Activa'
                    ])
                    ->live()
                    ->afterStateUpdated(function ($state, callable $get, callable $set) {
                        if ($get('type') == 'normal2') {
                            $set('i', 0.04);
                        } else {
                            if ($state == 'si') {
                                $set('i', 0.04);
                            } else {
                                $set('i', 0.048);
                            }
                        }
                    }),

                Forms\Components\TextInput::make('year')->label('Año')
                    ->required()
                    ->maxLength(191)
                    ->live()
                    ->afterStateUpdated(function ($state, callable $get, callable $set) {
                        $type = $get('type');
                        if ($type == 'normal') {
                            // Obtener el año ingresado
                            $year = (int) $state;

                            // Buscar los valores del año ingresado y dos años anteriores
                            $parametros = StudyParametro::whereIn('year', [$year, $year - 1, $year - 2])
                                ->orderBy('year', 'desc')
                                ->pluck('ipc_anual', 'year');

                            // Verificar que existan los 3 valores necesarios
                            if ($parametros->count() === 3) {
                                $ipc_anual_2023 = $parametros[$year] ?? 0;
                                $ipc_anual_2022 = $parametros[$year - 1] ?? 0;
                                $ipc_anual_2021 = $parametros[$year - 2] ?? 0;

                                // Aplicar la fórmula para calcular 'k'
                                $k = (3 * $ipc_anual_2023 + 2 * $ipc_anual_2022 + $ipc_anual_2021) / 6;

                                // Establecer el valor calculado en el campo 'k'
                                $set('k', $k);

                                $i = $get('i');
                                $k = $get('k');
                                $j = ((1 + $i) * (1 + $k)) - 1;
                                $set('j', $j);
                                $js = pow((1 + $j), 1 / 2) - 1;
                                $set('js', $js);
                                $jm = pow((1 + $j), 1 / 12) - 1;
                                $set('jm', $jm);
                                $ttm = pow((1 + $k), 1 / 12) - 1;
                                $set('ttm', $ttm);
                            } else {
                                // Manejar el caso en que falten datos
                                $set('k', 0);
                            }
                        }
                    }),

                Forms\Components\TextInput::make('parametros_17')->label('parametros')
                    ->maxLength(191),

                Forms\Components\TextInput::make('smmlv')->label('SMMLV')
                    ->maxLength(191),

                Forms\Components\Section::make('Datos a calcular')
                    ->schema([
                        Forms\Components\TextInput::make('i')  // i reemplaza a k
                            ->label('Tasa ténica anual (I)')
                            ->required()
                            ->numeric()
                            ->live()
                            ->readOnly(true),
                        Forms\Components\TextInput::make('k')  // k reemplaza a i
                            ->label('K de corte =')
                            ->required()
                            ->numeric()
                            ->live()
                            ->readOnly(true),
                            Forms\Components\TextInput::make('j')
                            ->label('Tasa de interes anual estimada (J)')
                            ->numeric()
                            ->live()
                            ->readOnly(fn(callable $get) => $get('type') === 'normal')
                            ->afterStateUpdated(function ($state, callable $get, callable $set) {
                                $type = $get('type');
                                $i = $get('i');
                                if ($type === 'normal2' && $i !== null) {
                                    $j = $state;
                                    if($j !== null){
                                        $k = ($j / (1 + $i)) - 1;
                                        $set('k', $k);
                                        $js = pow((1 + $j), 1 / 2) - 1;
                                        $set('js', $js);
                                        $jm = pow((1 + $j), 1 / 12) - 1;
                                        $set('jm', $jm);
                                        $ttm = pow((1 + $k), 1 / 12) - 1;
                                        $set('ttm', $ttm);
                                    }else{
                                        $set('k', null);
                                        $set('js', null);
                                        $set('jm', null);
                                        $set('ttm', null);
                                    }

                                }
                            }),
                    ])->columns(3),

                Forms\Components\TextInput::make('js')
                    ->label('Tasa de interes semestral estimada (JS)')
                    ->readOnly(true),

                Forms\Components\TextInput::make('jm')
                    ->label('Tasa de interes mensual estimada (JM)')
                    ->readOnly(true),

                Forms\Components\TextInput::make('ttm')
                    ->label('Tasa técnica mensual (TTM)')
                    ->readOnly(true),

                Forms\Components\DatePicker::make('fecha_calculo'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('type')->label('tipo de parametros')
                    ->searchable()->formatStateUsing(function ($state) {
                        return match ($state) {
                            'normal' => 'COLGAAP', // local se pide K y I
                            'normal2' => 'NIIF', // Internacional se pide K y J y se calcula el resto  =(J/(1+K_))-1
                            default => 'Desconocido',
                        };
                    }),
                Tables\Columns\TextColumn::make('year')->label('año')
                    ->searchable(),
                Tables\Columns\TextColumn::make('parametros_17')->label('parametros')
                    ->searchable(),
                Tables\Columns\TextColumn::make('smmlv')
                    ->searchable(),
                Tables\Columns\TextColumn::make('k')->label('K de corte =')
                    ->searchable(),
                Tables\Columns\TextColumn::make('j')->label('Tasa de interes anual estimada (J)')
                    ->searchable(),
                Tables\Columns\TextColumn::make('js')->label('Tasa de interes semestral estimada (JS)')
                    ->searchable(),
                Tables\Columns\TextColumn::make('jm')->label('Tasa de interes mensual estimada (JM)')
                    ->searchable(),
                Tables\Columns\TextColumn::make('i')->label('Tasa ténica anual (I)')
                    ->searchable(),
                Tables\Columns\TextColumn::make('ttm')->label('Tasa técnica mensual (TTM)')
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
