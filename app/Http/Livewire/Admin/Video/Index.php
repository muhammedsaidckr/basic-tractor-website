<?php

namespace App\Http\Livewire\Admin\Video;

use App\Models\Vehicle;
use App\Models\Video;
use Livewire\Component;

class Index extends Component
{
    public $search;

    public function updatingSearch()
    {
        $this->reset();
    }

    public function render()
    {
        return view('livewire.admin.video.index', [
            'videos' => Vehicle::query()
                ->where('name', 'like', '%' . $this->search . '%')
                ->paginate(10)
        ]);
    }
}
