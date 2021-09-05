<?php

namespace App\Http\Livewire\Admin\News;

use App\Models\News;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $modal = [
        'title' => null,
        'seo_description' => null,
        'description' => null,
        'photo_path' => null,
    ];

    public function store()
    {
        if ($this->modal['photo_path'])
            $url = $this->modal['photo_path']->store('public');

        News::create([
            'title' => $this->modal['title'],
            'seo_description' => $this->modal['seo_description'],
            'description' => $this->modal['description'],
            'photo_path' => $this->modal['photo_path']
        ]);

        $this->redirect('/admin/haberler');
    }

    public function render()
    {
        return view('livewire.admin.news.create');
    }
}
