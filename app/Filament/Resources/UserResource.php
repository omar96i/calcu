<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Textarea;
use Illuminate\Support\Facades\Auth;

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
        return parent::getEloquentQuery()->where('id', Auth::user()->id);
    }


    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
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
               // Forms\Components\DateTimePicker::make('email_verified_at'),
                Forms\Components\TextInput::make('password')
                   ->label('Contraseña')
                    ->password()
                    ->required()
                    ->maxLength(191),
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
                Forms\Components\Textarea::make('national_legal_considerations')
                ->label('Consideraciones Legales Nacionales')

                    ->maxLength(191),
                Forms\Components\Textarea::make('Consideraciones Legales Internacionales')
                ->label('Consideraciones Legales Internacionales')

                    ->maxLength(191),
                Forms\Components\Select::make('liquidated')->label('Liquidada')
                ->options([
                    'si' => 'SI',
                    'no' => 'NO'
                ]),


                Forms\Components\TextInput::make('type')
                ->label('Tipo')
                    ->required()
                    ->maxLength(191),
                Forms\Components\Select::make('roles')
                ->label('Roles')
                    ->relationship('roles', 'name')
                    ->multiple()
                    ->preload()
                    ->searchable()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Nombre')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->label('Email')
                    ->searchable(),
                // Tables\Columns\TextColumn::make('email_verified_at')
                //     ->dateTime()
                //     ->sortable(),
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
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}
