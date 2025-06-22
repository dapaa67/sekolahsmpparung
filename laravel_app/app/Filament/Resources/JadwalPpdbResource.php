<?php

namespace App\Filament\Resources;

use App\Filament\Resources\JadwalPpdbResource\Pages;
use App\Filament\Resources\JadwalPpdbResource\RelationManagers;
use App\Models\JadwalPpdb;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Actions\DeleteAction;

class JadwalPpdbResource extends Resource
{
    protected static ?string $model = JadwalPpdb::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Jadwal PPDB';
    protected static ?string $pluralModelLabel = 'Jadwal PPDB';
    protected static ?string $modelLabel = 'Jadwal PPDB';
    protected static ?string $navigationGroup = 'PPDB';

    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('tanggal')->label('Tanggal')->required(),
            TextInput::make('kegiatan')->label('Kegiatan')->required(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('tanggal')->label('Tanggal'),
                Tables\Columns\TextColumn::make('kegiatan')->label('Kegiatan'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListJadwalPpdbs::route('/'),
            'create' => Pages\CreateJadwalPpdb::route('/create'),
            'edit' => Pages\EditJadwalPpdb::route('/{record}/edit'),
        ];
    }
}
