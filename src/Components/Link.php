<?php

namespace SageUiKits\Components;

use Illuminate\View\Component;

class Link extends Component
{
    public function render()
    {
        return function (array $data) {
            return view('components.link', $data)->render();
        };
    }
}
