<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Course;

class SearchCourses extends Component
{
    /**
     * @var string $searchTerm
     * นี่คือตัวแปรที่จะผูกกับช่องค้นหา
     */
    public $searchTerm = '';

    /**
     * @var \Illuminate\Database\Eloquent\Collection $courses
     * นี่คือตัวแปรที่จะเก็บผลลัพธ์การค้นหา
     */
  

 public function mount($searchTerm = '')
    {
        $this->searchTerm = $searchTerm;
    } 
   
    
    public function render()
    {
        $courses = collect(); 

        if (strlen($this->searchTerm) >= 2) {
            $courses = Course::where('name', 'like', '%' . $this->searchTerm . '%')
                ->orWhere('code', 'like', '%' . $this->searchTerm . '%')
                ->limit(5)
                ->get();
        }

        return view('livewire.search-courses', [
            'courses' => $courses,
        ]);
    }
}
