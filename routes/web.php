<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    $navLinks = [
        [
            'route' => 'homepage',
            'text' => 'Home',
            'active' => true,
        ],
        [
            'route' => 'contacts',
            'text' => 'Contacts',
            'active' => false,
        ],
        [
            'route' => 'about_us',
            'text' => 'About us',
            'active' => false,
        ],
        [
            'route' => 'blog',
            'text' => 'Blog',
            'active' => false,
        ],
        [
            'route' => 'login',
            'text' => 'Login',
            'active' => false,
        ],
    ];

    $data = [
        'navLinks' => $navLinks,
    ];

    return view('home', $data);

})->name('homepage');


Route::get('aboutUs', function () {
    $data = [
        'title' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        'text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Et laborum illo maxime similique ex voluptatem ratione inventore numquam aliquam velit sunt, vel minus, ut a dolorem earum, amet repudiandae? Vero!
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Et laborum illo maxime similique ex voluptatem ratione inventore numquam aliquam velit sunt, vel minus, ut a dolorem earum, amet repudiandae? Vero!
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Et laborum illo maxime similique ex voluptatem ratione inventore numquam aliquam velit sunt, vel minus, ut a dolorem earum, amet repudiandae? Vero!
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Et laborum illo maxime similique ex voluptatem ratione inventore numquam aliquam velit sunt, vel minus, ut a dolorem earum, amet repudiandae? Vero!
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Et laborum illo maxime similique ex voluptatem ratione inventore numquam aliquam velit sunt, vel minus, ut a dolorem earum, amet repudiandae? Vero!
                    ',
    ];
    return view('partials.aboutUs', $data);
})->name('about_us');



Route::get('/blog', function () {
    $data = [
        'text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Et laborum illo maxime similique ex voluptatem ratione inventore numquam aliquam velit sunt, vel minus, ut a dolorem earum, amet repudiandae? Vero!
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Et laborum illo maxime similique ex voluptatem ratione inventore numquam aliquam velit sunt, vel minus, ut a dolorem earum, amet repudiandae? Vero!
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Et laborum illo maxime similique ex voluptatem ratione inventore numquam aliquam velit sunt, vel minus, ut a dolorem earum, amet repudiandae? Vero!
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Et laborum illo maxime similique ex voluptatem ratione inventore numquam aliquam velit sunt, vel minus, ut a dolorem earum, amet repudiandae? Vero!
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Et laborum illo maxime similique ex voluptatem ratione inventore numquam aliquam velit sunt, vel minus, ut a dolorem earum, amet repudiandae? Vero!
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Et laborum illo maxime similique ex voluptatem ratione inventore numquam aliquam velit sunt, vel minus, ut a dolorem earum, amet repudiandae? Vero!
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Et laborum illo maxime similique ex voluptatem ratione inventore numquam aliquam velit sunt, vel minus, ut a dolorem earum, amet repudiandae? Vero!
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Et laborum illo maxime similique ex voluptatem ratione inventore numquam aliquam velit sunt, vel minus, ut a dolorem earum, amet repudiandae? Vero!
                    ',
    ];
    return view('partials.blog', $data);
})->name('blog');



Route::get('/contacts', function () {
    $data = [
        'email' => 'laravel_primi_passi@gmail.com',
        'phone' => '0215483520',
    ];
    return view('partials.contacts', $data);
})->name('contacts');



Route::get('/login', function () {
    return view('partials.login');
})->name('login');