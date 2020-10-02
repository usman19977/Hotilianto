<?php

namespace App\Actions\Fortify;

use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'mobile_number' => ['required', 'integer'  ],
            'cnic' => ['required', 'integer'  ],
            'role_id' => ['required' , 'integer' , 'in:3,2'],
            'password' => $this->passwordRules(),
        ])->validate();

        $user = User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'cnic' => $input['cnic'],
            'mobile_number' => $input['mobile_number'],
            'role_id' => $input['role_id'],

            'password' => Hash::make($input['password']),
        ]);
        DB::insert(DB::raw("INSERT INTO `role_user` ( `user_id`, `role_id`, `created_at`, `updated_at`) VALUES ('$user->id', '$user->role_id', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP)"));

        return $user;
    }
}
