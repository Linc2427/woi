<?php

namespace App\View\Components;

use Illuminate\View\Component;

class JobTable extends Component
{
    // Mendeklarasikan properti publik untuk menyimpan data yang diterima
    public $list;

    // Konstruktor untuk menerima data ketika komponen dibuat
    public function __construct($list)
    {
        // Menginisialisasi properti $list dengan data yang diterima
        $this->list = $list;
    }

    // Method render untuk mengembalikan view yang digunakan oleh komponen
    public function render()
    {
        return view('components.job-table');
    }
}
