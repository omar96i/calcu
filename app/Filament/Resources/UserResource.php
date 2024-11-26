<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Textarea;
use Illuminate\Support\Facades\Auth;
use Filament\Forms\Get;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'Empresa/Informe';

    protected static ?string $slug = 'empresa';

    protected static ?string $modelLabel = 'Empresas';

    protected static ?string $navigationGroup = 'Datos Empresa';

    public static function getEloquentQuery(): Builder
    {
        $query = parent::getEloquentQuery();

        if (Auth::user()->hasRole('super_admin')) {
            return $query; // Retorna todos los registros sin filtros.
        }

        // Obtiene el usuario autenticado.
        $user = Auth::user();

        if ($user->type_user === 'employee') {
            // Si el usuario es un empleado, traer:
            // 1. Usuarios afiliados a este empleado (user->user_id).
            // 2. El usuario al cual está afiliado (user->id, auth()->user()->user_id).
            return $query->where(function ($subQuery) use ($user) {
                $subQuery->where('user_id', $user->user_id) // Usuarios afiliados al empleado.
                    ->orWhere('id', $user->user_id); // El usuario al cual está afiliado.
            });
        } else {
            return $query->where(function ($subQuery) use ($user) {
                $subQuery->where('user_id', $user->id) // Usuarios afiliados al empleado.
                    ->orWhere('id', $user->id); // El usuario al cual está afiliado.
            });
        }
    }


    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('type_user')
                    ->label('Selecciona el tipo de usuario')
                    ->options([
                        'company' => 'Empresa',
                        'employee' => 'Empleado',
                        'admin' => 'Super admin',
                    ])
                    ->required()
                    ->live(),

                Forms\Components\Select::make('user_id')
                    ->label('Empresa')
                    ->options(function () {
                        return \App\Models\User::whereNull('user_id')
                            ->pluck('name', 'id');
                    })
                    ->required()
                    ->live()
                    ->hidden(fn(Forms\Get $get): bool => $get('type_user') !== 'employee'),

                Section::make('Informacion del usuario')
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->label('Nombre')
                            ->required()
                            ->maxLength(191),
                        Forms\Components\TextInput::make('email')
                            ->label('Correo Electronico')
                            ->email()
                            ->required()
                            ->maxLength(191),
                        Forms\Components\TextInput::make('password')
                            ->label('Contraseña')
                            ->password()
                            ->required()
                            ->maxLength(191),
                        Forms\Components\Select::make('roles')
                            ->label('Roles')
                            ->relationship('roles', 'name')
                            ->multiple()
                            ->preload()
                            ->searchable()
                    ])->columns(2),
                Section::make('Informacion de empresa')
                    ->schema([
                        Forms\Components\TextInput::make('nit')
                            ->label('Nit')
                            ->required()
                            ->maxLength(191),
                        Forms\Components\TextInput::make('phone')
                            ->label('Telefono')
                            ->tel()
                            ->required()
                            ->maxLength(191),
                        Forms\Components\TextInput::make('address')
                            ->label('Direccion')
                            ->required()
                            ->maxLength(191),
                        Forms\Components\TextInput::make('city')
                            ->label('Ciudad')
                            ->required()
                            ->maxLength(191),
                        Forms\Components\TextInput::make('country')
                            ->label('Pais')
                            ->required()
                            ->maxLength(191),
                        Forms\Components\Select::make('liquidated')->label('Liquidada')
                            ->options([
                                'si' => 'SI',
                                'no' => 'NO'
                            ]),
                        Forms\Components\Textarea::make('national_legal_considerations')
                            ->label('Consideraciones Legales Nacionales')
                            ->rows(10)
                            ->autosize(),
                        Forms\Components\Textarea::make('international_legal_considerations')
                            ->label('Consideraciones Legales Internacionales')
                            ->rows(10)
                            ->autosize(),

                        Forms\Components\Select::make('type')
                            ->label('Tipo')
                            ->options([
                                'publico' => 'publico',
                                'privado' => 'privado'
                            ])
                            ->required(),
                    ])->columns(2)->hidden(fn(Forms\Get $get): bool => $get('type_user') !== 'company'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('type_user')
                    ->label('Tipo de Usuario')
                    ->searchable()
                    ->formatStateUsing(function (?string $state): string {
                        return match ($state) {
                            'employee' => 'Empleado',
                            'company' => 'Empresa',
                            default => 'Desconocido',
                        };
                    }),
                Tables\Columns\TextColumn::make('user.name')
                    ->label('Empresa afiliada')
                    ->searchable(),
                Tables\Columns\TextColumn::make('name')
                    ->label('Nombre')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->label('Email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('nit')
                    ->label('Nit')
                    ->searchable(),
                Tables\Columns\TextColumn::make('phone')
                    ->label('Telefono')
                    ->searchable(),
                Tables\Columns\TextColumn::make('address')
                    ->label('Dirección')
                    ->searchable(),
                Tables\Columns\TextColumn::make('city')
                    ->label('Ciudad')
                    ->searchable(),
                Tables\Columns\TextColumn::make('country')
                    ->label('Pais')
                    ->searchable(),
                Tables\Columns\TextColumn::make('description')::make('national_legal_considerations')
                    ->label('Consid. Nacional')
                    ->searchable(),
                Tables\Columns\TextColumn::make('international_legal_considerations')
                    ->label('Consid. Internacional')
                    ->searchable(),
                Tables\Columns\TextColumn::make('liquidated')
                    ->label('Liquidada')
                    ->searchable(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('type_user')
                    ->label('Tipo de Usuario')
                    ->options([
                        'company' => 'Empresa',
                        'employee' => 'Empleado',
                    ]),
                Tables\Filters\SelectFilter::make('user_id')
                    ->label('Filtrar por empresa')
                    ->options(function () {
                        return \App\Models\User::whereNull('user_id')
                            ->pluck('name', 'id');
                    }),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\Action::make('createPDF')
                    ->label('Descargar Nota técnica COLGAAP')
                    ->color('warning')
                    ->url(function ($record): string {
                        $id = $record->type_user === 'employee' ? $record->user_id : $record->id;
                        return route('pdf.example', ['user' => $id]);
                    })
                    ->openUrlInNewTab(),
                Tables\Actions\Action::make('createPDF_int')
                    ->label('Descargar Nota técnica NIIF')
                    ->color('warning')
                    ->url(function ($record): string {
                        $id = $record->type_user === 'employee' ? $record->user_id : $record->id;
                        return route('pdf.example_int', ['user' => $id]);
                    })
                    ->openUrlInNewTab(),
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
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}
