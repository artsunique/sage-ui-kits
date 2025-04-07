<?php

namespace SageUiKits\Components;

use Illuminate\View\Component;

class Wrapper extends Component
{
    public function render()
    {
        return function (array $data) {
            return view('sage-ui::components.wrapper', $data)->render();
        };
    }
}
