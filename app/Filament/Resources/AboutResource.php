<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AboutResource\Pages;
use App\Filament\Resources\AboutResource\RelationManagers;
use App\Models\About;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AboutResource extends Resource
{
    protected static ?string $model = About::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title_id')->label('Judul (Bahasa Indonesia)')->required(),
                Forms\Components\Textarea::make('about_id')->label('About (Bahasa Indonesia)')->required(),
                Forms\Components\Textarea::make('visi_id')->label('Visi (Bahasa Indonesia)')->required(),
                Forms\Components\Repeater::make('misi_id')
                    ->label('Misi (Bahasa Indonesia)')
                    ->schema([
                        Forms\Components\TextInput::make('value')->label('Misi')->required(),
                    ])
                    ->columnSpan('full'),
                Forms\Components\TextInput::make('title_en')->label('Title (English)')->required(),
                Forms\Components\Textarea::make('about_en')->label('About (English)')->required(),
                Forms\Components\Textarea::make('visi_en')->label('Visi (English)')->required(),
                Forms\Components\Repeater::make('misi_en')
                    ->label('Mission (English)')
                    ->schema([
                        Forms\Components\TextInput::make('value')->label('Mission')->required(),
                    ])
                    ->columnSpan('full'),
                
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title_id')->label('Judul (ID)'),
                Tables\Columns\TextColumn::make('title_en')->label('Title (EN)'),
                Tables\Columns\TextColumn::make('missions_id')
                    ->label('Misi (ID)')
                    ->formatStateUsing(fn($state) => is_array($state) ? implode(', ', array_column($state, 'value')) : ''),
                Tables\Columns\TextColumn::make('missions_en')
                    ->label('Mission (EN)')
                    ->formatStateUsing(fn($state) => is_array($state) ? implode(', ', array_column($state, 'value')) : ''),
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
            'index' => Pages\ListAbouts::route('/'),
            'create' => Pages\CreateAbout::route('/create'),
            'edit' => Pages\EditAbout::route('/{record}/edit'),
        ];
    }
}
