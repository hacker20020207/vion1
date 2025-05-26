<?php

namespace App\Handlers;

use UniSharp\LaravelFilemanager\Handlers\ConfigHandler;

class LfmConfigHandler extends ConfigHandler
{
    public function userField()
    {
        $user = auth()->user();

        // Admin foydalanuvchi barcha user fayllariga kira olishi uchun
        if ($user && $user->role_id == 2) {
            return ''; // asosiy papkaga yo'naltiradi: public/store/
        }
        return $user->id;
    }
}

