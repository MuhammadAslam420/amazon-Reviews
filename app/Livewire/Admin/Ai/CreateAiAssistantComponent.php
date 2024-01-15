<?php

namespace App\Livewire\Admin\Ai;

use App\Models\AiAssistant;
use App\Models\Category;
use Carbon\Carbon;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;

class CreateAiAssistantComponent extends Component
{
    use LivewireAlert;
    use WithFileUploads;
    #[Layout('layouts.app')]
    public $name;
    public $slug;
    public $title;
    public $prompt;
    public $status;
    public $category_id;
    public $logo;
    public function genSlug(){
        $this->slug = Str::slug($this->name,'-');
    }
    public function createAi(){
        $this->validate([
            'name'=>'required|string|min:3',
            'slug'=>'required|string|unique:ai_assistants,slug',
            'status'=>'required|in:active,inactive',
            'logo'=>'nullable|image|mimes:svg,png,jpg,jpeg,giff',
            'title'=>'nullable|string',
            'prompt'=>'required|string|max:200',
            'category_id'=>'required|exists:categories,id'
        ]);
        try{
            $ai = new AiAssistant();
            $ai->name = $this->name;
            $ai->slug = $this->slug;
            $ai->title = $this->title;
            $ai->category_id = $this->category_id;
            $ai->status = $this->status;
            $ai->prompt = $this->prompt;
            if($this->logo){
                $image = Carbon::now()->timestamp.'.'.$this->logo->extension();
                $this->logo->storeAs('assets/images/ai',$image);
             $ai->logo = $image;
            }
            $ai->save();

            $this->alert('success','Ai created successfully');
           $this->reset();
        }catch(\Exception $e){
            $errorMessage = $e->getMessage();
            $this->alert('error',$errorMessage,[
                'timer'=>5000,
                'toast'=>true
            ]);

        }

    }
    public function render()
    {
        $categories = Category::where('status','active')->get();
        return view('livewire.admin.ai.create-ai-assistant-component',get_defined_vars());
    }
}
