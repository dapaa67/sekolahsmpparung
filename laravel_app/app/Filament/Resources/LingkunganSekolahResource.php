<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LingkunganSekolahResource\Pages;
use App\Models\LingkunganSekolah;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Actions\DeleteAction;

class LingkunganSekolahResource extends Resource
{
    protected static ?string $model = LingkunganSekolah::class;
    protected static ?string $navigationLabel = 'Lingkungan Sekolah';
    protected static ?string $pluralModelLabel = 'Lingkungan Sekolah';
    protected static ?string $modelLabel = 'Lingkungan Sekolah';
    protected static ?string $navigationGroup = 'Profil Sekolah';
    protected static ?string $navigationIcon = 'heroicon-o-photo';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('judul')
                ->label('Judul Foto')
                ->required(),
            Forms\Components\FileUpload::make('gambar')
                ->label('Gambar')
                ->image()
                ->directory('images')
                ->disk('public')
                ->imagePreviewHeight('150')
                ->required(fn ($livewire) => $livewire instanceof \Filament\Resources\Pages\CreateRecord),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('gambar')
                    ->label('Gambar')
                    ->disk('public')
                    ->height(100)
                    ->width(150),
                Tables\Columns\TextColumn::make('judul')
                    ->label('Judul')
                    ->searchable()
                    ->wrap(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListLingkunganSekolahs::route('/'),
            'create' => Pages\CreateLingkunganSekolah::route('/create'),
            'edit' => Pages\EditLingkunganSekolah::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->orderByDesc('created_at');
    }
}
