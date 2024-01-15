<?php

namespace App\Livewire\Admin\Category;

use App\Models\Category;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

class CategoriesComponent extends Component
{
    use WithPagination;
    #[Layout('layouts.app')]
    public $search;
    public $perPage = 8;
    public $sorting = 'all';
    public $status = 'all';
    public function render()
    {
        try {
            $query = Category::orderBy('id', 'desc');
            if ($this->search) {
                $query->where('name', 'like', '%' . $this->search . '%');
            }
            if ($this->status != 'all') {
                $query->where('status', $this->status);
            }
            if ($this->sorting != 'all') {
                $query->where('created_at', $this->status);
            }
            $categories = $query->paginate($this->perPage);

            return view('livewire.admin.category.categories-component', get_defined_vars());
        } catch (\Exception $e) {
            $errorMessage = $e->getMessage();
            return view('liveiwre.admin.error-component', get_defined_vars());
        }
    }
}
