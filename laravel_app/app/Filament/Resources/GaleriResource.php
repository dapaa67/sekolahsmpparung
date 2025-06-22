<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GaleriResource\Pages;
use App\Filament\Resources\GaleriResource\RelationManagers;
use App\Models\Galeri;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Tables\Actions\DeleteAction;

    class GaleriResource extends Resource
    {
        protected static ?string $model = Galeri::class;
        protected static ?string $navigationLabel = 'Galeri Sekolah';
        protected static ?string $pluralModelLabel = 'Galeri Sekolah';
        protected static ?string $modelLabel = 'Galeri Sekolah';
        protected static ?string $navigationGroup = 'Home';


        protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';



    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('judul')->required(),
            Forms\Components\Textarea::make('deskripsi'),
            Select::make('kategori')
                ->label('Kategori')
                ->options([
                    'kegiatan' => 'Kegiatan',
                    'akademik' => 'Akademik',
                    'ekskul' => 'Ekstrakurikuler',
                    'event' => 'Event',
                ])
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
                    ->disk('public')
                    ->height(100)
                    ->width(150),
                Tables\Columns\TextColumn::make('judul')->searchable(),
                Tables\Columns\TextColumn::make('kategori')->badge()->label('Kategori'),
                Tables\Columns\TextColumn::make('deskripsi')->limit(30),
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
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListGaleris::route('/'),
            'create' => Pages\CreateGaleri::route('/create'),
            'edit' => Pages\EditGaleri::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->orderByDesc('created_at');
    }


}
