<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Portfolio;

class PortfolioList extends Component
{
    use WithPagination;

    public $category = '';

    public function setCategory($category)
    {
        $this->category = $category;
        $this->resetPage();
    }

    public function render()
    {
        $query = Portfolio::query();
        
        if (!empty($this->category) && $this->category !== 'Semua') {
            $query->where('category', $this->category);
        }

        return view('livewire.portfolio-list', [
            'portfolios' => $query->paginate(6)
        ]);
    }
}
