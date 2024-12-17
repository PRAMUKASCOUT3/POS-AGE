<?php

namespace App\Livewire\User;

use App\Models\User;
use Livewire\Component;

class UserEdit extends Component
{
    public $user_id, $name ,$email, $password;
    public function mount($user)
    {
        $this->user_id = $user->id;
        $this->name = $user->name;
        $this->email = $user->email;
        $this->password = $user->password;
    }

    public function update()
    {
        $this->validate([
            'name' => ['required','string','max:255'],
            'email' => ['required', 'email','max:255', 'unique:users,email,'. $this->user_id],
            'password' => ['string','min:8']
        ]);

        $user = User::find($this->user_id);
        $user->name = $this->name;
        $user->email = $this->email;
        $user->password = $this->password;
        $user->save();

        toastr()->success( 'Data Berhasil Diubah');
        return redirect()->route('pengguna.index');
    }
    public function render()
    {
        return view('livewire.user.user-edit',[
            'user' => User::find($this->user_id)
        ]);
    }
}
