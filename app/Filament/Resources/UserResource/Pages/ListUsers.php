<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListUsers extends ListRecords
{
    protected static string $resource = UserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    // 🔐 SÉCURITÉ : Seul super_admin peut accéder
    protected function authorizeAccess(): void
    {
        if (!auth()->user()->hasRole('Administrateur')) {
            abort(403);
        }
    }
}
