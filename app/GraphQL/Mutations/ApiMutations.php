<?php


namespace App\GraphQL\Mutations;


use App\Models\Api;
use Illuminate\Support\Facades\Auth;

class ApiMutations
{
    public function __construct()
    {
    }

    public function registerApi($_, array $args): Api
    {
        $args['user_id'] = Auth::id();
        return Api::create($args);
    }

    public function editApi($_, array $args): Api
    {
        $args = array_diff_key($args, array_flip(['directive']));
        return tap(Api::findOrFail($args['id']))
            ->update($args);
    }
}
