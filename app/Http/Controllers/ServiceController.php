<?php
namespace App\Http\Controllers;
use App\Models\Services;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Services::all()->map(function ($service) {
            // Append the full URL for the image
            $service->image = url('storage/' . $service->image);
            return $service;
        });

        return response()->json($services);
    }
}
