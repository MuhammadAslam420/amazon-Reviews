<?php

namespace App\Livewire\Admin\Ai;

use App\Models\AiAssistant;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

class AiAssistantComponent extends Component
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
            $query = AiAssistant::orderBy('id', 'asc');

            if ($this->search) {
                $query->where('name', 'like', '%' . $this->search . '%');
                   
            }

            if ($this->status != 'all') {
                $query->where('status', $this->status);
            }

            if ($this->sorting != 'all') {
                $query->orderBy('created_at', $this->sorting);
            }

            $ais = $query->paginate($this->perPage);

            return view('livewire.admin.ai.ai-assistant-component', get_defined_vars());
        } catch (\Exception $e) {
            $errorMessage = $e->getMessage();
            return view('livewire.admin.error-component', get_defined_vars());
        }
    }
}
