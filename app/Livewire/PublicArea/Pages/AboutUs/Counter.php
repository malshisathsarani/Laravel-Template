<?php

namespace App\Livewire\PublicArea\Pages\AboutUs;

use Livewire\Component;
use App\Models\User;

class Counter extends Component
{
    public $user = [];

    public function render()
    {
        return view('public-area.pages.about-us.components.counter');
    }

    public function rules()
    {
        return [
            'user.name' => 'required',
            'user.email' => 'required|email|unique:users,email',
            'user.password' => 'required|min:6',
        ];
    }

    public function messages()
    {
        return [
            'user.name.required' => 'Name is required',
            'user.name.string' => 'Name must be a string',
            'user.email.required' => 'Email is required',
            'user.email.email' => 'Email is invalid',
            'user.email.unique' => 'Email is already taken',
        ];
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submitUser()
    {
        $validated = $this->validate();
        User::create($validated['user']);
    }
}
