<?php

namespace SageUiKits\Components;

use Illuminate\View\Component;

class Menu extends Component
{
    public function render()
    {
        return function (array $data) {
            return view('sage-ui::components.menu', $data)->render();
        };
    }
}
