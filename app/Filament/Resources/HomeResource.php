<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HomeResource\Pages;
use App\Filament\Resources\HomeResource\RelationManagers;
use App\Models\Home;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class HomeResource extends Resource
{
    protected static ?string $model = Home::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title_id')->label('Judul (Bahasa Indonesia)')->required(),
                Forms\Components\Textarea::make('banner_id')->label('Konten Banner (Bahasa Indonesia)')->required(),
                Forms\Components\Textarea::make('foundermsg_id')->label('Pesan Pendiri (Bahasa Indonesia)')->required(),
                Forms\Components\TextInput::make('title_en')->label('Title (English)')->required(),
                Forms\Components\Textarea::make('banner_en')->label('Banner Content (English)')->required(),
                Forms\Components\Textarea::make('foundermsg_en')->label('Founder Message (English)')->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title_id')->label('Judul (ID)'),
                Tables\Columns\TextColumn::make('title_en')->label('Title (EN)'),
                Tables\Columns\TextColumn::make('banner_id')
                    ->label('Banner (ID)')
                    ->limit(50),
                Tables\Columns\TextColumn::make('banner_en')
                    ->label('Banner (EN)')
                    ->limit(50),
                Tables\Columns\TextColumn::make('foundermsg_id')
                    ->label('Founder Message (ID)')
                    ->limit(50),
                Tables\Columns\TextColumn::make('foundermsg_en')
                    ->label('Founder Message (EN)')
                    ->limit(50),
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
            'index' => Pages\ListHomes::route('/'),
            'create' => Pages\CreateHome::route('/create'),
            'edit' => Pages\EditHome::route('/{record}/edit'),
        ];
    }
}
