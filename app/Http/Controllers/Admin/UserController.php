<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::orderBy('id', 'DESC')->paginate(15);
        return view('admin.users.index', compact('users'));
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       // dd($request->all());

           $users = User::all(); // Fetch all users
           return view('admin.users.create', compact('users')); 
    


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|unique:users',
        'password' => 'required|string|min:8', 
        'profile' => 'nullable|image|max:2048', // Optional profile image
        'role' => 'required|in:admin,user', 
    ]);

    // Correct the variable declaration by removing the extra `$`
    $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => bcrypt($request->password),
        'role' => $request->role,
        'profile' => $request->file('profile') 
            ? $request->file('profile')->store('public/profiles') 
            : null, // Set to null if no profile image is provided
    ]);

    return redirect()->route('users.index')->with('success', 'User created successfully!');
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
}