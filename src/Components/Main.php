<?php

namespace SageUiKits\Components;

use Illuminate\View\Component;

class Main extends Component
{
    public function render()
    {
        return function (array $data) {
            return view('sage-ui::components.main', $data)->render();
        };
    }
}
