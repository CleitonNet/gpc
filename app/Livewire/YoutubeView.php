<?php

namespace App\Livewire;

use App\Models\Youtube;
use Livewire\Component;

class YoutubeView extends Component
{
    public $link;
    public $embedUrl;
    public $youtube;

    public function mount()
    {
        $this->youtube = Youtube::firstOrCreate([], [
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

    public function render()
    {
        return view('livewire.youtube-view');
    }
}
