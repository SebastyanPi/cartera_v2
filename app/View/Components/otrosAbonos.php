<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\haber;
use App\Models\debe;
use App\Models\concepto;
use App\Models\consecutive;
use App\Models\elaborado;
use App\Models\otrosConcepto;

class otrosAbonos extends Component
{

    public $title, $type, $content, $consecutive, $debe, $haber ,$concepts, $detalles, $elaborados;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type = "abono", $content = null)
    {
        $this->title = "Agregar Otros Abono";
        $this->concepts = otrosConcepto::all();
        $this->content = $content;
        $this->consecutive = consecutive::where('type','entry')->first();
        $this->debe = debe::all();
        $this->haber = haber::all();
        $this->elaborados = elaborado::all();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.otros-abonos');
    }
}
