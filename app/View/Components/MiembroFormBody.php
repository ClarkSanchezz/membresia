<?php

namespace App\View\Components;
use App\Models\Miembro;
use Illuminate\View\Component;

class MiembroFormBody extends Component
{
    private $miembro;
    /**
     * Create a new component instance.
     * @param \App\Models\Miembro $miembro
     * @return void
     */
    public function __construct($miembro = null)
    {
        if(is_null($miembro) ){
            $miembro = Miembro::make([
                'estado' => 0,
                
            ]);
        }
        $this->miembro = $miembro;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $params = 
        [
            'miembro' => $this->miembro,
            'estados' => Miembro::ESTADOS,
        ];
        return view('components.miembro-form-body', $params);
    }
}
