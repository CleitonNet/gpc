<?php

namespace App\Livewire;

use App\Models\Youtube as ModelsYoutube;
use Livewire\Component;
use Illuminate\Support\Facades\Validator;

class Youtube extends Component
{
    public $link;
    public $embedUrl;
    public $youtube;

    protected $rules = [
        'link' => 'required|url',
    ];

    public function mount()
    {
        $this->youtube = ModelsYoutube::firstOrCreate([], [
            'link' => 'https://www.youtube.com/embed/uYeIjXNOFHc',
        ]);

        $this->link = $this->youtube->link;
        $this->embedLink();
    }

    public function updatedLink()
    {
        $this->embedLink();
    }

    public function embedLink()
    {
        if (preg_match('/(?:youtu\.be\/|youtube\.com\/(?:embed\/|watch\?v=|v\/|shorts\/))([a-zA-Z0-9_-]{11})/', $this->link, $matches)) {
            $videoId = $matches[1];
            $this->embedUrl = "https://www.youtube.com/embed/{$videoId}";
        } else {
            $this->embedUrl = null;
        }
    }

    public function update()
    {
        $this->validate();

        if ($this->embedUrl) {
            $this->youtube->update(['link' => $this->embedUrl]);
            session()->flash('message', 'Link do YouTube atualizado com sucesso!');
        } else {
            session()->flash('error', 'Link inválido. Por favor, insira um link válido do YouTube.');
        }
    }

    public function render()
    {
        return view('livewire.youtube');
    }
}
