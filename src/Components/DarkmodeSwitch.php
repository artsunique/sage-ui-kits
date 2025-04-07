<?php

namespace SageUiKits\Components;

use Illuminate\View\Component;

class DarkmodeSwitch extends Component
{
    public function render()
    {
        return function (array $data) {
            return view('sage-ui::components.darkmode-switch', $data)->render();
        };
    }
}
