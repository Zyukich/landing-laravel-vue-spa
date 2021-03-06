<?php

namespace App\Http\Controllers;

use App\Models\ApplicationCategories;
use Illuminate\Http\JsonResponse;

class ApplicationCategoriesController extends Controller
{
    /**
     * @param ApplicationCategories $applicationCategories
     * @return JsonResponse
     */
    public function index(ApplicationCategories $applicationCategories): JsonResponse
    {
        return response()->json($applicationCategories->get());
    }
}
