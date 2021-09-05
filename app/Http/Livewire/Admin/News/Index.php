<?php

namespace App\Http\Livewire\Admin\News;

use App\Models\News;
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
        return view('livewire.admin.news.index', [
            'news' => News::query()
                ->where('title', 'like', '%' . $this->search . '%')
                ->paginate(10)
        ]);
    }
}
