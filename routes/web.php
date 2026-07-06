<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $banners = \App\Models\Banner::where('is_active', true)->orderBy('order')->get();
    $services = \App\Models\Service::where('is_active', true)->get();
    $projects = \App\Models\Project::orderBy('project_date', 'desc')->take(5)->get();
    $news = \App\Models\News::where('is_published', true)->orderBy('published_date', 'desc')->take(3)->get();
    
    $stockData = \Illuminate\Support\Facades\Cache::remember('stock_ppre', 3600, function () {
        try {
            // Fetch from Yahoo Finance
            $response = \Illuminate\Support\Facades\Http::get('https://query1.finance.yahoo.com/v8/finance/chart/PPRE.JK');
            if ($response->successful()) {
                $data = $response->json();
                $meta = $data['chart']['result'][0]['meta'] ?? null;
                if ($meta && isset($meta['regularMarketPrice']) && isset($meta['previousClose'])) {
                    $change = $meta['regularMarketPrice'] - $meta['previousClose'];
                    $changePercent = ($change / $meta['previousClose']) * 100;
                    return [
                        'price' => $meta['regularMarketPrice'],
                        'change' => $change,
                        'changePercent' => $changePercent,
                    ];
                }
            }
        } catch (\Exception $e) {
            // Ignore error and return null to handle gracefully
        }
        return null;
    });
    
    $settings = \App\Models\Setting::pluck('value', 'key');
    
    return view('welcome', compact('banners', 'services', 'projects', 'news', 'stockData', 'settings'));
});
Route::prefix('about')->group(function () {
    Route::get('/profile', function () {
        $settings = \App\Models\Setting::pluck('value', 'key');
        return view('about.profile', compact('settings'));
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
    Route::get('/miscellaneous', function () {
        $documents = \App\Models\Document::where('type', 'miscellaneous')->orderBy('year', 'desc')->get();
        return view('about.miscellaneous', compact('documents'));
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
        $annualDocs = \App\Models\Document::where('type', 'report')
            ->where('category', 'annual')
            ->orderBy('year', 'desc')
            ->orderBy('sub_type')
            ->get()
            ->groupBy('year');

        $financialDocs = \App\Models\Document::where('type', 'report')
            ->where('category', 'financial')
            ->orderBy('year', 'desc')
            ->orderBy('sub_type')
            ->get()
            ->groupBy('year');

        $sustainabilityDocs = \App\Models\Document::where('type', 'report')
            ->where('category', 'sustainability')
            ->orderBy('year', 'desc')
            ->orderBy('sub_type')
            ->get()
            ->groupBy('year');

        return view('investor.report', compact('annualDocs', 'financialDocs', 'sustainabilityDocs'));
    });
    Route::get('/stock', function () {
        return view('investor.stock');
    });
    Route::get('/presentation', function () {
        $allDocs = \App\Models\Document::where('type', 'presentation')
            ->orderBy('year', 'desc')
            ->orderBy('title')
            ->get();

        // Group by sub_type; docs without sub_type fall into 'Presentation'
        $grouped = $allDocs->groupBy(fn($d) => $d->sub_type ?: 'Presentation');

        // Ensure consistent order: Presentation → Newsletter → Press Release
        $sectionOrder = ['Presentation', 'Newsletter', 'Press Release'];
        $presentationDocs = $grouped->get('Presentation');
        $newsletterDocs   = $grouped->get('Newsletter');
        $pressReleaseDocs = $grouped->get('Press Release');

        return view('investor.presentation', compact(
            'presentationDocs', 'newsletterDocs', 'pressReleaseDocs'
        ));
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
        $documents = \App\Models\Document::where('type', 'capital_market')
            ->orderBy('year', 'desc')
            ->orderBy('title', 'desc')
            ->get();
        return view('investor.capital_market', compact('documents'));
    });
    Route::get('/transparency-of-information', function () {
        $documents = \App\Models\Document::where('type', 'transparency')
            ->orderBy('year', 'desc')
            ->orderBy('title', 'desc')
            ->get();
        return view('investor.transparency', compact('documents'));
    });
});

Route::get('/gcg', function () {
    return view('gcg.policy');
});
Route::get('/code-of-conduct', function () {
    $documents = \App\Models\Document::where('type', 'code_of_conduct')->orderBy('year', 'desc')->orderBy('title', 'desc')->get();
    return view('gcg.code_of_conduct', compact('documents'));
});
Route::get('/charters', function () {
    $documents = \App\Models\Document::where('type', 'charters')->orderBy('year', 'desc')->orderBy('title', 'desc')->get();
    return view('gcg.charters', compact('documents'));
});
Route::get('/committees', function () {
    $documents = \App\Models\Document::where('type', 'committees')->orderBy('year', 'desc')->orderBy('title', 'desc')->get();
    return view('gcg.committees', compact('documents'));
});
Route::get('/corporate-secretary', function () {
    return view('gcg.corporate_secretary');
});
Route::get('/internal-audit-unit', function () {
    $documents = \App\Models\Document::where('type', 'internal_audit')->orderBy('year', 'desc')->orderBy('title', 'desc')->get();
    return view('gcg.internal_audit', compact('documents'));
});
Route::get('/whistleblowing-system', function () {
    $documents = \App\Models\Document::where('type', 'whistleblowing')->orderBy('year', 'desc')->orderBy('title', 'desc')->get();
    return view('gcg.whistleblowing', compact('documents'));
});

Route::get('/csr', function () {
    return view('csr.index');
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
    \App\Models\Contact::create($request->only([
        'name', 'email', 'phone', 'subject', 'company', 'message'
    ]));
    return redirect()->back()->with('success', 'Your message has been sent successfully. We will get back to you shortly!');
});
