<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function showUser()
    {
        $users = DB::table('userss')->get();
        return view('allusers', ['data' => $users]);
    }
    public function singleUser(string $id)
    {
        $user = DB::table('userss')->find($id);
        return view('user', ['data' => $user]);
    }
    public function addUser(Request $req)
    {
        $user = DB::table('userss')
            ->insert([
                'name' => $req->username,
                'email' => $req->useremail,
                'age' => $req->userage,
                'city' => $req->usercity
            ]);


            // ->insert([
            //     'name' => 'Ram kumar',
            //     'email' => 'ram@gmail.com',
            //     'age' => 19,
            //     'city' => 'delhi'
            // ]);
        // ->upsert([
        //   'name'=>'Ram kumar',
        //   'email'=>'ram@gmail.com',
        //   'age'=>19,
        //   'city'=>'delhi'
        // ],
        // ['email'],
        // ['city']
        // );

        if ($user) {
            return redirect()->route('home');
        } else {
            echo '<h1>Failed</h>';
        }
    }

    public function updatePage(string $id){
        $user = DB::table('userss')->find($id);
        return view('updateuser', ['data' => $user]);
    }


    public function updateUser( Request $req, $id)
    {
        $user = DB::table('userss')
            ->where('id', $id)
            // ->update([
            //     'city'=>'Mumbai'
            // ]);

            // ->updateOrInsert([
            //     'email' => 'Dhaka',
            //     'age' => 22
            // ]);

            ->update([
              'name'=> $req->username,
              'email'=> $req->useremail,
              'age'=> $req->userage,
              'city'=> $req->usercity
            ]);

        if ($user) {
            return redirect()->route('home');
        } else {
            echo '<h1>Failed</h>';
        }
    }

    public function deleteUser(string $id)
    {
        $user = DB::table('userss')
            ->where('id', $id)
            ->delete();

        if ($user) {
            return redirect()->route('home');
        }
    }
}
