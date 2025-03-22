<?php

namespace SageUiKits\Components;

use Illuminate\View\Component;

class Copyright extends Component
{
    public function render()
    {
        return function (array $data) {
            return view('components.copyright', $data)->render();
        };
    }
}
