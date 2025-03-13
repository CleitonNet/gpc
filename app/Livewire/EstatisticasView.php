<?php

namespace App\Livewire;

use App\Models\Statistics;
use Livewire\Component;

class EstatisticasView extends Component
{
    public $statistic;
    public $cond;
    public $house;
    public $apt;
    public $terr;

    public function mount() {
        if (Statistics::get()->count()>=1) {
            $this->statistic = Statistics::get()->first();
        } else {
            $this->statistic = Statistics::create([
                'cond' => 0,
                'house' => 0,
                'apt' => 0,
                'terr' => 0,
            ]);
        }

        $this->cond  = $this->statistic->cond;
        $this->house = $this->statistic->house;
        $this->apt   = $this->statistic->apt;
        $this->terr  = $this->statistic->terr;
    }

    public function render()
    {
        return view('livewire.estatisticas-view');
    }
}
