<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Livewire\Component;

class Index extends Component
{
    public $name, $email, $user_id;

    public function resetInput(){
        $this->name = NULL;
        $this->email = NULL;

    }

    public function closeModal(){
        $this->resetInput();
    }
    //EDIT
    public function edit(int $user_id){
        $student = User::find($user_id);

        if($student){
            $this->user_id =  $student->id;
            $this->name =  $student->name;
            $this->email =  $student->email;

        }else {
            return redirect()->to('/users');
        }

    }
        //UPDATE
        public function update(){
            // $images = Accommodation::find()
            $users = User::find($this->user_id);
            $this->validate([
                'name' => 'required|string',
                'email' => 'required|string',
            ]);

            $users->name = $this->name;
            $users->email = $this->email;
            $users->save();


            session()->flash('message', 'Added Successfully');
            $this->dispatchBrowserEvent('close-modal');
            $this->resetInput();
            return redirect()->to('/users');
        }

        //DELETE
        public function deleteStudent(int $user_id){
            $this->user_id = $user_id;
        }

        public function destroy(){

            User::find($this->user_id)->delete();
            session()->flash('message', 'Deleted Successfully');
            $this->dispatchBrowserEvent('close-modal');

            return redirect()->to('/users');
        }


    public function render()
    {
        return view('livewire.user.index',['users' => User::all()]);
    }
}
