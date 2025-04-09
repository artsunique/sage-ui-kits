<?php

namespace SageUiKits\Components;

use Illuminate\View\Component;

class Section extends Component
{
    public function render()
    {
        return function (array $data) {
            return view('sage-ui::components.section', $data)->render();
        };
    }
}
