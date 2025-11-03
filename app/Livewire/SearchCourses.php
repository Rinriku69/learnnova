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
   
    /**
     * ฟังก์ชัน render() มีหน้าที่แค่แสดง View
     * เราไม่จำเป็นต้องใส่ Logic ค้นหาในนี้ เพราะเราจัดการใน updatedSearchTerm() แล้ว
     */
    public function render()
    {
        $courses = collect(); // สร้าง Collection ว่างๆ ไว้เป็นค่าเริ่มต้น

        // ถ้าผู้ใช้พิมพ์อย่างน้อย 2 ตัวอักษร
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
