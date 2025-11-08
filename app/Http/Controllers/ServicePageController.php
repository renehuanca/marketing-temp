<?php

namespace App\Http\Controllers;

use App\Models\ServicePage;
use Illuminate\Http\Request;

class ServicePageController extends Controller
{
    public function show(ServicePage $servicePage)
    {
        return view('service-pages.show', compact('servicePage'));
    }

    public function index()
    {
        $servicePages = ServicePage::where('is_active', true)
            ->orderBy('created_at', 'desc')
            ->get();

        return view('service-pages.index', compact('servicePages'));
    }
    public function create()
    {
        return view('service-pages.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:service_pages,slug',
            'description' => 'nullable|string',
            'hero_title' => 'nullable|string|max:255',
            'hero_highlight_text' => 'nullable|string|max:255',
            'hero_subtitle' => 'nullable|string',
            'hero_button_text' => 'nullable|string|max:255',
            'hero_button_link' => 'nullable|string|max:255',
            'hero_video_url' => 'nullable|url',
            'hero_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:5120',

            'cards_title' => 'nullable|string|max:255',
            'cards_subtitle' => 'nullable|string|max:255',
            'cards_description' => 'nullable|string',
            'card1_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'card1_title' => 'nullable|string|max:255',
            'card1_highlight' => 'nullable|string|max:255',
            'card2_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'card2_title' => 'nullable|string|max:255',
            'card2_highlight' => 'nullable|string|max:255',
            'card3_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'card3_title' => 'nullable|string|max:255',
            'card3_highlight' => 'nullable|string|max:255',

            'is_active' => 'boolean',
        ]);

        // Manejar la imagen subida
        if ($request->hasFile('hero_image')) {
            $path = $request->file('hero_image')->store('hero-images', 'public');
            $validated['hero_image'] = '/storage/' . $path;
        }

        // Crear la página de servicio
        $page = ServicePage::create($validated);

        return redirect()
            ->route('service-pages.edit', $page)
            ->with('success', 'Página creada correctamente.');
    }


    public function edit(ServicePage $servicePage)
    {
        return view('service-pages.edit', ['page' => $servicePage]);
    }

    public function update(Request $request, ServicePage $servicePage)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:service_pages,slug,' . $servicePage->id,
            'description' => 'nullable|string',
            'hero_title' => 'nullable|string|max:255',
            'hero_highlight_text' => 'nullable|string|max:255',
            'hero_subtitle' => 'nullable|string',
            'hero_button_text' => 'nullable|string|max:255',
            'hero_button_link' => 'nullable|string|max:255',
            'hero_video_url' => 'nullable|url|max:255',
            'hero_image' => 'nullable|image|max:2048',

            'cards_title' => 'nullable|string|max:255',
            'cards_subtitle' => 'nullable|string|max:255',
            'cards_description' => 'nullable|string',
            'card1_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'card1_title' => 'nullable|string|max:255',
            'card1_highlight' => 'nullable|string|max:255',
            'card2_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'card2_title' => 'nullable|string|max:255',
            'card2_highlight' => 'nullable|string|max:255',
            'card3_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'card3_title' => 'nullable|string|max:255',
            'card3_highlight' => 'nullable|string|max:255',

            'is_active' => 'sometimes|boolean',
        ]);

        if ($request->hasFile('hero_image')) {
            $file = $request->file('hero_image');
            $path = $file->store('hero_images', 'public');
            $data['hero_image'] = '/storage/' . $path;
        }

        $data['is_active'] = $request->has('is_active');

        $servicePage->update($data);

        return redirect()->route('service-pages.edit', $servicePage)
            ->with('success', 'Página actualizada correctamente.');
    }

    public function destroy(ServicePage $servicePage)
    {
        $servicePage->delete();

        return redirect()
            ->route('service-pages.index')
            ->with('success', 'Página eliminada correctamente.');
    }
}
