<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ServiceResource\Pages;
use App\Filament\Resources\ServiceResource\RelationManagers;
use App\Models\Service;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ServiceResource extends Resource
{
    protected static ?string $model = Service::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title_id')->label('Judul (Bahasa Indonesia)')->required(),
                Forms\Components\Repeater::make('descriptions_id')
                    ->label('Deskripsi (Bahasa Indonesia)')
                    ->schema([
                        Forms\Components\TextInput::make('value')->label('Deskripsi')->required(),
                    ]),
                Forms\Components\TextInput::make('title_en')->label('Title (English)')->required(),
                Forms\Components\Repeater::make('descriptions_en')
                    ->label('Descriptions (English)')
                    ->schema([
                        Forms\Components\TextInput::make('value')->label('Description')->required(),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title_id')->label('Judul (ID)'),
                Tables\Columns\TextColumn::make('title_en')->label('Title (EN)'),
                Tables\Columns\TextColumn::make('descriptions_id')
                    ->label('Deskripsi (ID)')
                    ->formatStateUsing(fn($state) => is_array($state) ? implode(', ', array_column($state, 'value')) : ''),
                Tables\Columns\TextColumn::make('descriptions_en')
                    ->label('Descriptions (EN)')
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
            'index' => Pages\ListServices::route('/'),
            'create' => Pages\CreateService::route('/create'),
            'edit' => Pages\EditService::route('/{record}/edit'),
        ];
    }
}
