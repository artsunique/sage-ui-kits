<?php

namespace SageUiKits\Components;

use Illuminate\View\Component;

class Text extends Component
{
    public function render()
    {
        // Der Namespace muss mit loadViewsFrom übereinstimmen
        return view('sage-ui::components.text');
    }
}
