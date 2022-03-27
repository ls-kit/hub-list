<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\StoreJobListing;
use App\Http\Requests\StoreJobRequest;
use App\Location;
use App\Job;
use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function index()
    {
        return Inertia::render('Home');

        // $searchLocations = Location::pluck('name', 'id');
        // $searchCategories = Category::pluck('name', 'id');
        // $searchByCategory = Category::withCount('jobs')
        //     ->orderBy('jobs_count', 'desc')
        //     ->take(5)
        //     ->pluck('name', 'id');
        // $jobs = Job::with('company')
        //     ->orderBy('id', 'desc')
        //     ->take(7)
        //     ->get();

        // return view('index', compact(['searchLocations', 'searchCategories', 'searchByCategory', 'jobs']));


    }

    /**
     * Show listing page
     *
     * @return Inertia\Inertia\Response
     */
    public function show()
    {
        return Inertia::render('Listing');
    }

    /**
     * Show add listing page
     *
     * @return Inertia\Inertia\Response
     */
    public function addListing()
    {
        return Inertia::render('AddListing');
    }

    /**
     * Show Listing page
     *
     * @param $listingId
     */
    public function showListing($listingId)
    {
        return Inertia::render('ShowListing');
    }

    /**
     * Store job listing
     *
     * @param StoreJobListing $request
     * @return Response
     */
    public function storeListing(StoreJobListing $request)
    {
        $validatedData = $request->validated();
        $validatedData['user_id'] = auth()->id();
        Job::create($validatedData);

        return response()->json([
            'message' => 'Job listing successfully created',
        ]);
    }

    /**
     * Get job listing
     *
     * @param $userid
     * @return void
     */

    public function getListing($userid)
    {
        $jobs = Job::all();

        return response($jobs);
    }

    /**
     * Show profile page
     *
     * @return Inertia\Inertia\Response
     */
    public function dashboard()
    {
        return Inertia::render('Dashboard');
    }

    public function search(Request $request)
    {
        $jobs = Job::with('company')
            ->searchResults()
            ->paginate(7);

        $banner = 'Search results';

        return view('jobs.index', compact(['jobs', 'banner']));
    }
}
