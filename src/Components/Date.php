<?php

namespace SageUiKits\Components;

use Illuminate\View\Component;

class Date extends Component
{
    public function render()
    {
        return function (array $data) {
            return view('components.date', $data)->render();
        };
    }
}
