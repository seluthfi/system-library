<?php

namespace App\Http\Controllers;

use App\Models\Member;

class MemberController extends Controller
{
    public function index()
    {
        $members = Member::orderBy('name')->get();

        return view('members.index', compact('members'));
    }
}
