<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('about')->group(function () {
    Route::get('/profile', function () {
        return view('about.profile');
    });
    Route::get('/structure', function () {
        return view('about.structure');
    });
    Route::get('/boards', function () {
        $boards = \App\Models\Board::orderBy('order')->get();
        return view('about.boards', compact('boards'));
    });
    Route::get('/awards', function () {
        return view('about.awards');
    });
});

Route::prefix('business')->group(function () {
    Route::get('/civil-work', function () {
        return view('business.civil');
    });
    Route::get('/mining-services', function () {
        return view('business.mining');
    });
    Route::get('/heavy-equipment', function () {
        return view('business.equipment');
    });
});

Route::prefix('investor')->group(function () {
    Route::get('/report', function () {
        $documents = \App\Models\Document::where('type', 'report')->orderBy('year', 'desc')->get();
        return view('investor.report', compact('documents'));
    });
    Route::get('/stock', function () {
        return view('investor.stock');
    });
    Route::get('/presentation', function () {
        $documents = \App\Models\Document::where('type', 'presentation')->orderBy('year', 'desc')->get();
        return view('investor.presentation', compact('documents'));
    });
    Route::get('/rups', function () {
        $documents = \App\Models\Document::where('type', 'rups')->orderBy('year', 'desc')->get();
        return view('investor.rups', compact('documents'));
    });
    Route::get('/corporate-action', function () {
        return view('investor.corporate_action');
    });
    Route::get('/prospectus', function () {
        $documents = \App\Models\Document::where('type', 'prospectus')->orderBy('year', 'desc')->get();
        return view('investor.prospectus', compact('documents'));
    });
    Route::get('/capital-market', function () {
        return view('investor.capital_market');
    });
});

Route::prefix('gcg')->group(function () {
    Route::get('/guidelines', function () {
        $documents = \App\Models\Document::where('type', 'gcg')->get();
        return view('gcg.guidelines', compact('documents'));
    });
    Route::get('/committees', function () {
        return view('gcg.committees');
    });
    Route::get('/whistleblowing', function () {
        return view('gcg.whistleblowing');
    });
});

Route::prefix('csr')->group(function () {
    Route::get('/community', function () {
        return view('csr.community');
    });
    Route::get('/hse', function () {
        return view('csr.hse');
    });
});

Route::get('/projects', function () {
    $projects = \App\Models\Project::orderBy('project_date', 'desc')->get();
    return view('projects.index', compact('projects'));
});

Route::get('/news', function () {
    $news = \App\Models\News::where('is_published', true)->orderBy('published_date', 'desc')->get();
    return view('news.index', compact('news'));
});

Route::get('/news/{slug}', function ($slug) {
    $article = \App\Models\News::where('slug', $slug)->where('is_published', true)->firstOrFail();
    return view('news.show', compact('article'));
});

Route::get('/contact', function () {
    return view('contact.index');
});

Route::post('/contact', function (\Illuminate\Http\Request $request) {
    $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'subject' => 'nullable',
        'phone' => 'nullable',
        'message' => 'required'
    ]);
    \App\Models\Contact::create($request->all());
    return redirect()->back()->with('success', 'Your message has been sent successfully. We will get back to you shortly!');
});
