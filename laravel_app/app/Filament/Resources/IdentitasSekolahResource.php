<?php

namespace App\Filament\Resources;

use App\Filament\Resources\IdentitasSekolahResource\Pages;
use App\Models\IdentitasSekolah;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Actions\DeleteAction;

class IdentitasSekolahResource extends Resource
{
    protected static ?string $model = IdentitasSekolah::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Identitas Sekolah';
    protected static ?string $pluralModelLabel = 'Identitas Sekolah';
    protected static ?string $modelLabel = 'Identitas Sekolah';
    protected static ?string $navigationGroup = 'Profil Sekolah';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama')->label('Nama Sekolah')->required(),
                Textarea::make('alamat')->label('Alamat')->required(),
                TextInput::make('telepon')->label('Telepon')->required(),
                TextInput::make('hp')->label('Handphone')->required(),
                TextInput::make('email')->label('Email')->email()->required(),
                FileUpload::make('logo')->image()->directory('images')->label('Logo Sekolah')->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama'),
                TextColumn::make('telepon'),
                TextColumn::make('hp'),
                TextColumn::make('alamat')->limit(40),
                TextColumn::make('email'),
                ImageColumn::make('logo')->disk('public'),
            ])
            ->filters([])
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
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListIdentitasSekolahs::route('/'),
            'create' => Pages\CreateIdentitasSekolah::route('/create'),
            'edit' => Pages\EditIdentitasSekolah::route('/{record}/edit'),
        ];
    }
}
