<?php

namespace App\Livewire;

use App\Models\Statistics as ModelsStatistics;
use Livewire\Component;

class Statistics extends Component
{
    public $statistic;
    public $cond;
    public $house;
    public $apt;
    public $terr;

    public function mount() {
        if (ModelsStatistics::get()->count()>=1) {
            $this->statistic = ModelsStatistics::get()->first();
        } else {
            $this->statistic = ModelsStatistics::create([
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

    public function update(){
        $this->statistic->update([
            'cond'  => $this->cond,
            'house' => $this->house,
            'apt'   => $this->apt,
            'terr'  => $this->terr,
        ]);
    }

    public function render()
    {
        return view('livewire.statistics');
    }
}
