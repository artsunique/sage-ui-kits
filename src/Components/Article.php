<?php

namespace SageUiKits\Components;

use Illuminate\View\Component;

class Article extends Component
{
    public function render()
    {
        return function (array $data) {
            return view('sage-ui::components.article', $data)->render();
        };
    }
}
