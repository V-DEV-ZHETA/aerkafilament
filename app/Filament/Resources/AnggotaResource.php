<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AnggotaResource\Pages;
use App\Filament\Resources\AnggotaResource\RelationManagers;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\DeleteAction;
use App\Models\Anggota;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AnggotaResource extends Resource
{
    protected static ?string $model = Anggota::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    protected static ?string $navigationLabel = 'Struktur Komunitas';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Card::make()
                    ->schema([
                        Forms\Components\Grid::make(2)
                        ->schema([
                            Forms\Components\FileUpload::make('foto')
                            ->required()
                            ->directory('Anggota')
                            ->maxSize(10240)
                            ->image()
                            ->imageEditor()
                            ->helperText('Ukuran Foto Maksimum: 10MB. Format Yang Diizinkan: PNG, JPG, JPEG.')
                            ->columnSpan('2')
                            ->disk('public')
                            ->downloadable()
                            ->openable()
                            ->previewable(),
                            Forms\Components\TextInput::make('nama')
                            ->required()
                            ->suffixIcon('heroicon-o-user'),
                            Forms\Components\TextInput::make('posisi')
                            ->required()
                            ->suffixIcon('heroicon-o-user'),
                            Forms\Components\TextInput::make('region')
                            ->required()
                            ->suffixIcon('heroicon-o-map-pin'),
                            Forms\Components\Select::make('jeniskendaraan')
                            ->label('Jenis Kendaraan')
                            ->placeholder('Silahkan Pilih Jenis Kendaraan')
                            ->required()
                            ->options([
                                'motor'=> 'Motor',
                                'mobil'=> 'Mobil',
                                'lainnya'=> 'Lainnya',
                            ])
                            ->suffixIcon('fas-motorcycle'),
                            Forms\Components\TextInput::make('merkkendaraan')
                            ->label('Unit Kendaraan')
                            ->placeholder('Honda Vario 150 / Toyota Supra MK4')
                            ->required()
                            ->suffixIcon('heroicon-o-question-mark-circle'),
                            Forms\Components\TextInput::make('itasha')
                            ->label('Itasha')
                            ->placeholder('Detail Karakter - Anime Yang Digunakan Pada Decal Kendaraan')
                            ->required()
                            ->suffixIcon('heroicon-o-document-magnifying-glass'),
                            Forms\Components\FileUpload::make('foto_kendaraan')
                            ->label('Foto Kendaraan')
                            ->multiple()
                            ->directory('Anggota/Kendaraan')
                            ->maxSize(10240)
                            ->image()
                            ->imageEditor()
                            ->helperText('Ukuran Foto Maksimum: 10MB per foto. Format Yang Diizinkan: PNG, JPG, JPEG. Bisa upload multiple foto.')
                            ->columnSpan('2')
                            ->visibility('private')
                            ->downloadable()
                            ->openable()
                            ->previewable(),
                            Forms\Components\KeyValue::make('sosmed')
                            ->label('Sosial Media')
                            ->keyLabel('Platform')
                            ->keyPlaceholder('Instagram, Tiktok, Facebook, Dsb')
                            ->valueLabel('URL Sosmed')
                            ->addActionLabel('Tambah Platform')
                            ->validationMessages([
                                'values.*.url' => 'URL harus dimulai dengan http:// atau https://',
                            ])
                            ->columnSpan(2),
                            Forms\Components\Toggle::make('status')
                            ->label('Status')
                            ->default(true)
                            ->helperText('Aktifkan untuk menampilkan anggota sebagai aktif.'),
                        ])
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('foto')
                ->label('Foto'),
                Tables\Columns\TextColumn::make('nama')
                ->label('Nama'),
                Tables\Columns\TextColumn::make('posisi')
                ->label('Role'),
                Tables\Columns\TextColumn::make('region')
                ->label('Region'),
                Tables\Columns\TextColumn::make('merkkendaraan')
                ->label('Unit Kendaraan'),
                Tables\Columns\TextColumn::make('itasha')
                ->label('Itasha'),
                Tables\Columns\BadgeColumn::make('status')
                ->label('Status')
                ->color(fn (bool $state): string => $state ? 'success' : 'danger')
                ->formatStateUsing(fn (bool $state): string => $state ? 'Aktif' : 'Nonaktif'),
            ])
            ->filters([
                //
            ])
            ->actions([
                ActionGroup::make([
                    Tables\Actions\ViewAction::make()
                    ->label('Lihat Detail'),
                    Tables\Actions\EditAction::make()
                    ->label('Edit Kolom'),
                    Tables\Actions\DeleteAction::make()
                    ->label('Hapus Kolom'),
                ]),
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
            'index' => Pages\ListAnggotas::route('/'),
            // 'create' => Pages\CreateAnggota::route('/create'),
            // 'edit' => Pages\EditAnggota::route('/{record}/edit'),
        ];
    }
}
