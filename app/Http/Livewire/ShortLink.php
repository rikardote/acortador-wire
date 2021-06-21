<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Str;
use App\Models\Link;

class ShortLink extends Component
{
    public $full_url, $shorted_url;

    protected $rules = [
        'full_url' => 'required',
    ];

    public function mount()
    {
        $url_param = url()->current();
        $url = Link::where('shorted_url', $url_param)->first();
        if ($url)
        {
            return redirect($url->full_url);
        }
    }


    public function render()
    {
        $links = Link::latest()->get();

        return view('livewire.short-link', compact('links'));
    }

    public function save()
    {
        $this->validate();

        Link::create([
            'full_url' => $this->full_url,
            'shorted_url' => env("APP_URL") . "/" . str::random(8),
        ]);

        $this->full_url = "";
    }
    public function delete($id)
    {
        Link::find($id)->delete();
    }
}
