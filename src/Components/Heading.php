<?php

namespace SageUiKits\Components;

use Illuminate\View\Component;

class Heading extends Component
{
    public function render()
    {
        return function (array $data) {
            return view('sage-ui::components.heading', $data)->render();
        };
    }
}
