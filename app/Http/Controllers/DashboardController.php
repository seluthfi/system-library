<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Models\Member;

class DashboardController extends Controller
{
    public function index()
    {
        $title = 'Library System';
        $description = 'Sistem Informasi Perpustakaan Sederhana';

        $bookCount = Book::count();
        $memberCount = Member::count();
        $categoryCount = Category::count();

        return view('dashboard.index', compact(
            'title',
            'description',
            'bookCount',
            'memberCount',
            'categoryCount'
        ));
    }
}
