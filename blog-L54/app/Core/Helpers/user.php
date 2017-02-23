<?php

function user_name(\App\Users\Models\User $user)
{
    return ucfirst(strtolower($user->name));
}
