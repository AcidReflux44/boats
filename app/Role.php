<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    const ROLE_USER = 0;
    const ROLE_MANAGER = 1;
    const ROLE_ADMIN = 2;

    /**
     * @return int Le niveau de privilège de l'utilisateur
     */
    public static function findPrivilege(int $user_id) : int
    {
        $pr = self::ROLE_USER;
        $query = self::where('user_id', $user_id);

        if($query->exists())
        {
            $pr = $query->first()->privilege;
        }

        return $pr;
    }
}
