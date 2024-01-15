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

class EditAiAssistantComponent extends Component
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
    public $new_logo;
    public $aiId;

    public function mount($id){
        $this->aiId = $id;
        try{
            $ai = AiAssistant::findorFail($this->aiId);
            $this->name = $ai->name;
            $this->slug = $ai->slug;
            $this->title = $ai->title;
            $this->category_id = $ai->category_id;
            $this->status = $ai->status;
            $this->prompt = $ai->prompt;
            $this->logo = $ai->logo;
        }catch(\Exception $e){
            $errorMessage = $e->getMessage();
        return view('livewire.admin.error-component',get_defined_vars());
        }

    }
    public function genSlug(){
        $this->slug = Str::slug($this->name,'-');
    }
    public function updateAi(){
        $this->validate([
            'name'=>'required|string|min:3',
            'slug'=>'required|string|unique:ai_assistants,slug,'.$this->aiId,
            'status'=>'required|in:active,inactive',
            'new_logo'=>'nullable|image|mimes:svg,png,jpg,jpeg,giff',
            'title'=>'nullable|string',
            'prompt'=>'required|string|max:200',
            'category_id'=>'required|exists:categories,id'
        ]);
        try{
            $ai = AiAssistant::findorFail($this->aiId);
            $ai->name = $this->name;
            $ai->slug = $this->slug;
            $ai->title = $this->title;
            $ai->category_id = $this->category_id;
            $ai->status = $this->status;
            $ai->prompt = $this->prompt;
            if($this->new_logo){
                $image = Carbon::now()->timestamp.'.'.$this->new_logo->extension();
                $this->new_logo->storeAs('assets/images/ai',$image);
                $ai->logo = $image;
                // if ($this->logo) {
                //     $filePath = public_path('assets/images/ai/' . $this->logo);
                
                //     if (file_exists($filePath)) {
                //         unlink($filePath);
                //     }
                // }
                
            }
            $ai->save();
            $this->alert('success','Ai updated successfully');
           // return $this->route('admin.ai_assistant',navigate: true);
          
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
       try{
        $categories = Category::where('status','active')->get();
        return view('livewire.admin.ai.edit-ai-assistant-component',get_defined_vars());
       }catch(\Exception $e){
        $errorMessage = $e->getMessage();
        return view('livewire.admin.error-component',get_defined_vars());
       }
    }
}
