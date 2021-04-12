<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RolesController extends Controller
{
    public function index()
    {
        $role = Role::find(3)->update([
            'name' => 'Editor',
        ]);

        //Role::find(2)->delete();

        return Role::find(3);

        //return Role::whereNotNull('created_at')->where('id', '>', 3)->get();
        //return response()->json(Role::get());
    }

    public function create()
    {

       /* $role = new Role();
        $role->name = 'Client';
        if (!$role->save()){
            echo "Not added";
        } else*/
        Role::create([
            'name' => 'manager',
        ]);

        return response()->json(true);
    }

    public function show(Role $role){
        /*$role = Role::find($roleId);
        if (empty($role)){
            return response([], 404);
        }*/
        return response()->json(['data' => $role]);
    }
}
