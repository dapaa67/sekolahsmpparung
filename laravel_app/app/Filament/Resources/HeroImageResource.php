<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HeroImageResource\Pages;
use App\Filament\Resources\HeroImageResource\RelationManagers;
use App\Models\HeroImage;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\FileUpload;
use Illuminate\Support\Facades\Storage;

class HeroImageResource extends Resource
{
    protected static ?string $model = HeroImage::class;
    protected static ?string $navigationLabel = 'Banner';
    protected static ?string $pluralModelLabel = 'Banner';
    protected static ?string $modelLabel = 'Banner';
    protected static ?string $navigationGroup = 'Home';


    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
            \Filament\Forms\Components\FileUpload::make('image')
                ->disk('public') // Simpan ke storage/app/public
                ->directory('hero-images') // Disimpan ke folder storage/app/public/hero-images
                ->visibility('public') // Penting biar bisa diakses
                ->image()
                ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
            Tables\Columns\ImageColumn::make('image')
                ->disk('public')
                ->label('Gambar')
                ->height(100) // atur tinggi gambar (px)
                ->width(100),
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
            'index' => Pages\ListHeroImages::route('/'),
            'create' => Pages\CreateHeroImage::route('/create'),
            'edit' => Pages\EditHeroImage::route('/{record}/edit'),
        ];
    }
}
