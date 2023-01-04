<?php

namespace App\Http\Livewire\Students;

use App\Models\Student;
use Livewire\Component;

class Index extends Component
{

    public $name, $address, $course, $year, $student_id;


    public function resetInput(){
        $this->name = NULL;
        $this->address = NULL;
        $this->course = NULL;
        $this->year = NULL;

    }

    public function closeModal(){
        $this->resetInput();
    }

    //CREATE
    public function submit()
    {
        $this->validate([
            'name' => 'required|string',
            'address' => 'required|string',
            'course' => 'required|string',
            'year' => 'required|numeric',
        ]);


        Student::create([
            'name' => $this->name,
            'address' => $this->address,
            'course' => $this->course,
            'year' => $this->year,
        ]);


        session()->flash('message', 'Added Successfully');
        $this->dispatchBrowserEvent('close-modal');
        $this->resetInput();


        return redirect()->to('/students');
    }

    //EDIT
    public function edit(int $student_id){
        $student = Student::find($student_id);

        if($student){
            $this->student_id =  $student->id;
            $this->name =  $student->name;
            $this->address =  $student->address;
            $this->course =  $student->course;
            $this->year =  $student->year;

        }else {
            return redirect()->to('/students');
        }

    }

    //UPDATE
    public function update(){
        // $images = Accommodation::find()
        $students = Student::find($this->student_id);
        $this->validate([
            'name' => 'required|string',
            'address' => 'required|string',
            'course' => 'required|string',
            'year' => 'required|string',
        ]);




        $students->name = $this->name;
        $students->address = $this->address;
        $students->course = $this->course;
        $students->year = $this->year;
        $students->save();


        session()->flash('message', 'Added Successfully');
        $this->dispatchBrowserEvent('close-modal');
        $this->resetInput();
        return redirect()->to('/students');
    }

    //DELETE
    public function deleteStudent(int $student_id){
        $this->student_id = $student_id;
    }

    public function destroy(){

        Student::find($this->student_id)->delete();
        session()->flash('message', 'Deleted Successfully');
        $this->dispatchBrowserEvent('close-modal');

        return redirect()->to('/students');
    }


    public function render()
    {
        return view('livewire.students.index',  ['students' => Student::all()]);
    }

}
