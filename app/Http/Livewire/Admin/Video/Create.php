<?php

namespace App\Http\Livewire\Admin\Video;

use App\Models\Image;
use App\Models\Vehicle;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $photos;
    public $modal = [
        'name' => null,
        'seo_description' => null,
        'description' => null,
        'price' => 0,
        'gear' => null,
        'hp' => null,
        'model' => null
    ];

    public function submitForm()
    {
        $this->validate([
            'modal.name' => 'required',
            'modal.description' => 'required',
            'modal.seo_description' => 'required',
            'modal.price' => 'numeric'
        ]);

        $vehicle = Vehicle::create([
            'name' => $this->modal['name'],
            'description' => $this->modal['description'],
            'seo_description' => $this->modal['seo_description'],
            'price' => $this->modal['price'],
            'gear' => $this->modal['gear'],
            'hp' => $this->modal['hp'],
            'model' => $this->modal['model']
        ]);

        if (isset($this->photos)) {
            foreach ($this->photos as $key => $photo) {
                $vehicle->addMedia($photo->getRealPath())
                    ->toMediaCollection();
            }
        }

        $this->redirect(route('admin.video.index'));
    }

    public function render()
    {
        return view('livewire.admin.video.create');
    }
}
