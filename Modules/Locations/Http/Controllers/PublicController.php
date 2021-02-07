<?php

namespace TypiCMS\Modules\Locations\Http\Controllers;

use Illuminate\View\View;
use TypiCMS\Modules\Core\Http\Controllers\BasePublicController;
use TypiCMS\Modules\Locations\Models\Location;

class PublicController extends BasePublicController
{
    public function index(): View
    {
        $models = Location::published()->order()->with('image')->get();

        return view('locations::public.index')
            ->with(compact('models'));
    }

    public function show($slug): View
    {
        $model = Location::published()->whereSlugIs($slug)->firstOrFail();

        return view('locations::public.show')
            ->with(compact('model'));
    }
}
