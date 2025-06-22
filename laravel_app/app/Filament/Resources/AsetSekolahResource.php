<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AsetSekolahResource\Pages;
use App\Models\AsetSekolah;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Actions\DeleteAction;

class AsetSekolahResource extends Resource
{
    protected static ?string $model = AsetSekolah::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Aset Sekolah';
    protected static ?string $pluralModelLabel = 'Aset Sekolah';
    protected static ?string $modelLabel = 'Aset Sekolah';
    protected static ?string $navigationGroup = 'Profil Sekolah';

    public static function form(Form $form): Form
    {
         return $form->schema([
            TextInput::make('status_kepemilikan_tanah')->required(),
            TextInput::make('luas_tanah')->numeric()->required(),
            TextInput::make('luas_bangunan')->numeric()->required(),
            TextInput::make('luas_parkir')->numeric()->required(),
            TextInput::make('luas_lapangan')->numeric()->required(),
            TextInput::make('luas_lainnya')->numeric()->required(),
            TextInput::make('sertifikat_tanah')->required(),
            TextInput::make('status_kepemilikan_gedung')->required(),
            TextInput::make('total_luas_gedung')->numeric()->required(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
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
            'index' => Pages\ListAsetSekolahs::route('/'),
            'create' => Pages\CreateAsetSekolah::route('/create'),
            'edit' => Pages\EditAsetSekolah::route('/{record}/edit'),
        ];
    }
}
