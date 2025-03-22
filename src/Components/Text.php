<?php

namespace SageUiKits\Components;

use Illuminate\View\Component;

class Text extends Component
{
    public function render()
    {
        return function (array $data) {
            return view('sage-ui::components.text', $data)->render();
        };
    }
}
