<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function index()
    {
      $blogs = Blog::all();

      return view('blog/home', ['blogs' => $blogs]);
    }

    public function show($id)
    {
      //$users = ['hilman', 'endy', 'tika'];

      // === INSERT ===
      //DB::table('users')->insert([
      //  ['username' => 'curut', 'password' => '123']
      //]);

      // === UPDATE ===
      //DB::table('users')->where('username', 'dimas')->update([
      //  'username' => 'Dimas Dwi Prasetya', 'password' => '123'
      //]);

      // === DELETE ===
      //DB::table('users')->where('id','>',5)->delete();

      // === SELECT ===
      //$users = DB::table('users')->get();
      //$users = DB::table('users')->where('username','dimas')->get();
      //debug
      //dd($users);

      $blog = Blog::find($id);
      return view('blog/single', ['blog' => $blog]);
    }
}
