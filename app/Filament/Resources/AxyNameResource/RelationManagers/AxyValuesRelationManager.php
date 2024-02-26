<?php

namespace App\Filament\Resources\AxyNameResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AxyValuesRelationManager extends RelationManager
{
    protected static string $relationship = 'axy_values';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('age')
            ->columns([
                TextColumn::make('age'),
                TextColumn::make('axy_15')->numeric(
                    decimalPlaces: 6,
                    decimalSeparator: '.',
                    thousandsSeparator: ',',
                )->label('15'),
                TextColumn::make('axy_16')->numeric(
                    decimalPlaces: 6,
                    decimalSeparator: '.',
                    thousandsSeparator: ',',
                )->label('16'),
                TextColumn::make('axy_17')->numeric(
                    decimalPlaces: 6,
                    decimalSeparator: '.',
                    thousandsSeparator: ',',
                )->label('17'),
                TextColumn::make('axy_18')->numeric(
                    decimalPlaces: 6,
                    decimalSeparator: '.',
                    thousandsSeparator: ',',
                )->label('18'),
                TextColumn::make('axy_19')->numeric(
                    decimalPlaces: 6,
                    decimalSeparator: '.',
                    thousandsSeparator: ',',
                )->label('19'),
                TextColumn::make('axy_20')->numeric(
                    decimalPlaces: 6,
                    decimalSeparator: '.',
                    thousandsSeparator: ',',
                )->label('20'),
                TextColumn::make('axy_21')->numeric(
                    decimalPlaces: 6,
                    decimalSeparator: '.',
                    thousandsSeparator: ',',
                )->label('21'),
                TextColumn::make('axy_22')->numeric(
                    decimalPlaces: 6,
                    decimalSeparator: '.',
                    thousandsSeparator: ',',
                )->label('22'),
                TextColumn::make('axy_23')->numeric(
                    decimalPlaces: 6,
                    decimalSeparator: '.',
                    thousandsSeparator: ',',
                )->label('23'),
                TextColumn::make('axy_24')->numeric(
                    decimalPlaces: 6,
                    decimalSeparator: '.',
                    thousandsSeparator: ',',
                )->label('24'),
                TextColumn::make('axy_25')->numeric(
                    decimalPlaces: 6,
                    decimalSeparator: '.',
                    thousandsSeparator: ',',
                )->label('25'),
                TextColumn::make('axy_26')->numeric(
                    decimalPlaces: 6,
                    decimalSeparator: '.',
                    thousandsSeparator: ',',
                )->label('26'),
                TextColumn::make('axy_27')->numeric(
                    decimalPlaces: 6,
                    decimalSeparator: '.',
                    thousandsSeparator: ',',
                )->label('27'),
                TextColumn::make('axy_28')->numeric(
                    decimalPlaces: 6,
                    decimalSeparator: '.',
                    thousandsSeparator: ',',
                )->label('28'),
                TextColumn::make('axy_29')->numeric(
                    decimalPlaces: 6,
                    decimalSeparator: '.',
                    thousandsSeparator: ',',
                )->label('29'),
                TextColumn::make('axy_30')->numeric(
                    decimalPlaces: 6,
                    decimalSeparator: '.',
                    thousandsSeparator: ',',
                )->label('30'),
                TextColumn::make('axy_31')->numeric(
                    decimalPlaces: 6,
                    decimalSeparator: '.',
                    thousandsSeparator: ',',
                )->label('31'),
                TextColumn::make('axy_32')->numeric(
                    decimalPlaces: 6,
                    decimalSeparator: '.',
                    thousandsSeparator: ',',
                )->label('32'),
                TextColumn::make('axy_33')->numeric(
                    decimalPlaces: 6,
                    decimalSeparator: '.',
                    thousandsSeparator: ',',
                )->label('33'),
                TextColumn::make('axy_34')->numeric(
                    decimalPlaces: 6,
                    decimalSeparator: '.',
                    thousandsSeparator: ',',
                )->label('34'),
                TextColumn::make('axy_35')->numeric(
                    decimalPlaces: 6,
                    decimalSeparator: '.',
                    thousandsSeparator: ',',
                )->label('35'),
                TextColumn::make('axy_36')->numeric(
                    decimalPlaces: 6,
                    decimalSeparator: '.',
                    thousandsSeparator: ',',
                )->label('36'),
                TextColumn::make('axy_37')->numeric(
                    decimalPlaces: 6,
                    decimalSeparator: '.',
                    thousandsSeparator: ',',
                )->label('37'),
                TextColumn::make('axy_38')->numeric(
                    decimalPlaces: 6,
                    decimalSeparator: '.',
                    thousandsSeparator: ',',
                )->label('38'),
                TextColumn::make('axy_39')->numeric(
                    decimalPlaces: 6,
                    decimalSeparator: '.',
                    thousandsSeparator: ',',
                )->label('39'),
                TextColumn::make('axy_40')->numeric(
                    decimalPlaces: 6,
                    decimalSeparator: '.',
                    thousandsSeparator: ',',
                )->label('40'),
                TextColumn::make('axy_41')->numeric(
                    decimalPlaces: 6,
                    decimalSeparator: '.',
                    thousandsSeparator: ',',
                )->label('41'),
                TextColumn::make('axy_42')->numeric(
                    decimalPlaces: 6,
                    decimalSeparator: '.',
                    thousandsSeparator: ',',
                )->label('42'),
                TextColumn::make('axy_43')->numeric(
                    decimalPlaces: 6,
                    decimalSeparator: '.',
                    thousandsSeparator: ',',
                )->label('43'),
                TextColumn::make('axy_44')->numeric(
                    decimalPlaces: 6,
                    decimalSeparator: '.',
                    thousandsSeparator: ',',
                )->label('44'),
                TextColumn::make('axy_45')->numeric(
                    decimalPlaces: 6,
                    decimalSeparator: '.',
                    thousandsSeparator: ',',
                )->label('45'),
                TextColumn::make('axy_46')->numeric(
                    decimalPlaces: 6,
                    decimalSeparator: '.',
                    thousandsSeparator: ',',
                )->label('46'),
                TextColumn::make('axy_47')->numeric(
                    decimalPlaces: 6,
                    decimalSeparator: '.',
                    thousandsSeparator: ',',
                )->label('47'),
                TextColumn::make('axy_48')->numeric(
                    decimalPlaces: 6,
                    decimalSeparator: '.',
                    thousandsSeparator: ',',
                )->label('48'),
                TextColumn::make('axy_49')->numeric(
                    decimalPlaces: 6,
                    decimalSeparator: '.',
                    thousandsSeparator: ',',
                )->label('49'),
                TextColumn::make('axy_50')->numeric(
                    decimalPlaces: 6,
                    decimalSeparator: '.',
                    thousandsSeparator: ',',
                )->label('50'),
                TextColumn::make('axy_51')->numeric(
                    decimalPlaces: 6,
                    decimalSeparator: '.',
                    thousandsSeparator: ',',
                )->label('51'),
                TextColumn::make('axy_52')->numeric(
                    decimalPlaces: 6,
                    decimalSeparator: '.',
                    thousandsSeparator: ',',
                )->label('52'),
                TextColumn::make('axy_53')->numeric(
                    decimalPlaces: 6,
                    decimalSeparator: '.',
                    thousandsSeparator: ',',
                )->label('53'),
                TextColumn::make('axy_54')->numeric(
                    decimalPlaces: 6,
                    decimalSeparator: '.',
                    thousandsSeparator: ',',
                )->label('54'),
                TextColumn::make('axy_55')->numeric(
                    decimalPlaces: 6,
                    decimalSeparator: '.',
                    thousandsSeparator: ',',
                )->label('55'),
                TextColumn::make('axy_56')->numeric(
                    decimalPlaces: 6,
                    decimalSeparator: '.',
                    thousandsSeparator: ',',
                )->label('56'),
                TextColumn::make('axy_57')->numeric(
                    decimalPlaces: 6,
                    decimalSeparator: '.',
                    thousandsSeparator: ',',
                )->label('57'),
                TextColumn::make('axy_58')->numeric(
                    decimalPlaces: 6,
                    decimalSeparator: '.',
                    thousandsSeparator: ',',
                )->label('58'),
                TextColumn::make('axy_59')->numeric(
                    decimalPlaces: 6,
                    decimalSeparator: '.',
                    thousandsSeparator: ',',
                )->label('59'),
                TextColumn::make('axy_60')->numeric(
                    decimalPlaces: 6,
                    decimalSeparator: '.',
                    thousandsSeparator: ',',
                )->label('60'),
                TextColumn::make('axy_61')->numeric(
                    decimalPlaces: 6,
                    decimalSeparator: '.',
                    thousandsSeparator: ',',
                )->label('61'),
                TextColumn::make('axy_62')->numeric(
                    decimalPlaces: 6,
                    decimalSeparator: '.',
                    thousandsSeparator: ',',
                )->label('62'),
                TextColumn::make('axy_63')->numeric(
                    decimalPlaces: 6,
                    decimalSeparator: '.',
                    thousandsSeparator: ',',
                )->label('63'),
                TextColumn::make('axy_64')->numeric(
                    decimalPlaces: 6,
                    decimalSeparator: '.',
                    thousandsSeparator: ',',
                )->label('64'),
                TextColumn::make('axy_65')->numeric(
                    decimalPlaces: 6,
                    decimalSeparator: '.',
                    thousandsSeparator: ',',
                )->label('65'),
                TextColumn::make('axy_66')->numeric(
                    decimalPlaces: 6,
                    decimalSeparator: '.',
                    thousandsSeparator: ',',
                )->label('66'),
                TextColumn::make('axy_67')->numeric(
                    decimalPlaces: 6,
                    decimalSeparator: '.',
                    thousandsSeparator: ',',
                )->label('67'),
                TextColumn::make('axy_68')->numeric(
                    decimalPlaces: 6,
                    decimalSeparator: '.',
                    thousandsSeparator: ',',
                )->label('68'),
                TextColumn::make('axy_69')->numeric(
                    decimalPlaces: 6,
                    decimalSeparator: '.',
                    thousandsSeparator: ',',
                )->label('69'),
                TextColumn::make('axy_70')->numeric(
                    decimalPlaces: 6,
                    decimalSeparator: '.',
                    thousandsSeparator: ',',
                )->label('70'),
                TextColumn::make('axy_71')->numeric(
                    decimalPlaces: 6,
                    decimalSeparator: '.',
                    thousandsSeparator: ',',
                )->label('71'),
                TextColumn::make('axy_72')->numeric(
                    decimalPlaces: 6,
                    decimalSeparator: '.',
                    thousandsSeparator: ',',
                )->label('72'),
                TextColumn::make('axy_73')->numeric(
                    decimalPlaces: 6,
                    decimalSeparator: '.',
                    thousandsSeparator: ',',
                )->label('73'),
                TextColumn::make('axy_74')->numeric(
                    decimalPlaces: 6,
                    decimalSeparator: '.',
                    thousandsSeparator: ',',
                )->label('74'),
                TextColumn::make('axy_75')->numeric(
                    decimalPlaces: 6,
                    decimalSeparator: '.',
                    thousandsSeparator: ',',
                )->label('75'),
                TextColumn::make('axy_76')->numeric(
                    decimalPlaces: 6,
                    decimalSeparator: '.',
                    thousandsSeparator: ',',
                )->label('76'),
                TextColumn::make('axy_77')->numeric(
                    decimalPlaces: 6,
                    decimalSeparator: '.',
                    thousandsSeparator: ',',
                )->label('77'),
                TextColumn::make('axy_78')->numeric(
                    decimalPlaces: 6,
                    decimalSeparator: '.',
                    thousandsSeparator: ',',
                )->label('78'),
                TextColumn::make('axy_79')->numeric(
                    decimalPlaces: 6,
                    decimalSeparator: '.',
                    thousandsSeparator: ',',
                )->label('79'),
                TextColumn::make('axy_80')->numeric(
                    decimalPlaces: 6,
                    decimalSeparator: '.',
                    thousandsSeparator: ',',
                )->label('80'),
                TextColumn::make('axy_81')->numeric(
                    decimalPlaces: 6,
                    decimalSeparator: '.',
                    thousandsSeparator: ',',
                )->label('81'),
                TextColumn::make('axy_82')->numeric(
                    decimalPlaces: 6,
                    decimalSeparator: '.',
                    thousandsSeparator: ',',
                )->label('82'),
                TextColumn::make('axy_83')->numeric(
                    decimalPlaces: 6,
                    decimalSeparator: '.',
                    thousandsSeparator: ',',
                )->label('83'),
                TextColumn::make('axy_84')->numeric(
                    decimalPlaces: 6,
                    decimalSeparator: '.',
                    thousandsSeparator: ',',
                )->label('84'),
                TextColumn::make('axy_85')->numeric(
                    decimalPlaces: 6,
                    decimalSeparator: '.',
                    thousandsSeparator: ',',
                )->label('85'),
                TextColumn::make('axy_86')->numeric(
                    decimalPlaces: 6,
                    decimalSeparator: '.',
                    thousandsSeparator: ',',
                )->label('86'),
                TextColumn::make('axy_87')->numeric(
                    decimalPlaces: 6,
                    decimalSeparator: '.',
                    thousandsSeparator: ',',
                )->label('87'),
                TextColumn::make('axy_88')->numeric(
                    decimalPlaces: 6,
                    decimalSeparator: '.',
                    thousandsSeparator: ',',
                )->label('88'),
                TextColumn::make('axy_89')->numeric(
                    decimalPlaces: 6,
                    decimalSeparator: '.',
                    thousandsSeparator: ',',
                )->label('89'),
                TextColumn::make('axy_90')->numeric(
                    decimalPlaces: 6,
                    decimalSeparator: '.',
                    thousandsSeparator: ',',
                )->label('90'),
                TextColumn::make('axy_91')->numeric(
                    decimalPlaces: 6,
                    decimalSeparator: '.',
                    thousandsSeparator: ',',
                )->label('91'),
                TextColumn::make('axy_92')->numeric(
                    decimalPlaces: 6,
                    decimalSeparator: '.',
                    thousandsSeparator: ',',
                )->label('92'),
                TextColumn::make('axy_93')->numeric(
                    decimalPlaces: 6,
                    decimalSeparator: '.',
                    thousandsSeparator: ',',
                )->label('93'),
                TextColumn::make('axy_94')->numeric(
                    decimalPlaces: 6,
                    decimalSeparator: '.',
                    thousandsSeparator: ',',
                )->label('94'),
                TextColumn::make('axy_95')->numeric(
                    decimalPlaces: 6,
                    decimalSeparator: '.',
                    thousandsSeparator: ',',
                )->label('95'),
                TextColumn::make('axy_96')->numeric(
                    decimalPlaces: 6,
                    decimalSeparator: '.',
                    thousandsSeparator: ',',
                )->label('96'),
                TextColumn::make('axy_97')->numeric(
                    decimalPlaces: 6,
                    decimalSeparator: '.',
                    thousandsSeparator: ',',
                )->label('97'),
                TextColumn::make('axy_98')->numeric(
                    decimalPlaces: 6,
                    decimalSeparator: '.',
                    thousandsSeparator: ',',
                )->label('98'),
                TextColumn::make('axy_99')->numeric(
                    decimalPlaces: 6,
                    decimalSeparator: '.',
                    thousandsSeparator: ',',
                )->label('99'),
                TextColumn::make('axy_100')->numeric(
                    decimalPlaces: 6,
                    decimalSeparator: '.',
                    thousandsSeparator: ',',
                )->label('100'),
                TextColumn::make('axy_101')->numeric(
                    decimalPlaces: 6,
                    decimalSeparator: '.',
                    thousandsSeparator: ',',
                )->label('101'),
                TextColumn::make('axy_102')->numeric(
                    decimalPlaces: 6,
                    decimalSeparator: '.',
                    thousandsSeparator: ',',
                )->label('102'),
                TextColumn::make('axy_103')->numeric(
                    decimalPlaces: 6,
                    decimalSeparator: '.',
                    thousandsSeparator: ',',
                )->label('103'),
                TextColumn::make('axy_104')->numeric(
                    decimalPlaces: 6,
                    decimalSeparator: '.',
                    thousandsSeparator: ',',
                )->label('104'),
                TextColumn::make('axy_105')->numeric(
                    decimalPlaces: 6,
                    decimalSeparator: '.',
                    thousandsSeparator: ',',
                )->label('105'),
                TextColumn::make('axy_106')->numeric(
                    decimalPlaces: 6,
                    decimalSeparator: '.',
                    thousandsSeparator: ',',
                )->label('106'),
                TextColumn::make('axy_107')->numeric(
                    decimalPlaces: 6,
                    decimalSeparator: '.',
                    thousandsSeparator: ',',
                )->label('107'),
                TextColumn::make('axy_108')->numeric(
                    decimalPlaces: 6,
                    decimalSeparator: '.',
                    thousandsSeparator: ',',
                )->label('108'),
                TextColumn::make('axy_109')->numeric(
                    decimalPlaces: 6,
                    decimalSeparator: '.',
                    thousandsSeparator: ',',
                )->label('109'),
                TextColumn::make('axy_110')->numeric(
                    decimalPlaces: 6,
                    decimalSeparator: '.',
                    thousandsSeparator: ',',
                )->label('110'),

            ])->filters([
                //
            ])
            ->headerActions([
            ])
            ->actions([
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                ]),
            ]);
    }
}
