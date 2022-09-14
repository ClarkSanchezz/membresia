<?php

namespace App\Http\Livewire;
use App\Models\Miembro;
use Livewire\Component;
use Livewire\WithPagination;

class MiembroIndex extends Component
{
    use WithPagination;
    

    public $busqueda = '';
    public $paginacion= 10;
    protected $paginationTheme = 'bootstrap';
    protected $queryString = [
        'busqueda' => ['except' => '' ],
        //'busqueda' => ['except', '', 'as' => 'b' ],
        'paginacion' => ['except' => ''],
    ];

    public function render()
    {
        $miembros = $this->consulta();
        $miembros = $miembros -> paginate($this->paginacion);
        if($miembros->currentPage() > $miembros -> lastPage() )
        {
            $this->reset();
            $miembros = $this->consulta();
            $miembros = $miembros -> paginate($this->paginacion);
        }
        $params = [
            'miembros' => $miembros ,
        ];
        return view('livewire.miembro-index', $params);
    }
    private function consulta(){
        $query = Miembro::orderByDesc('id');
        if($this->busqueda != ''){
            $query->where('nombre', 'LIKE', '%'.$this->busqueda.'%');
        }
        return $query;
    }
}
