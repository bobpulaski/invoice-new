<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use App\Models\Company;

class CompanyTable extends Component
{

    public $companies; // Для получение данных из модели Company

    public function render()
    {
        $this->companies = DB::table('companies')
            ->where('user_id', Auth::id())
            ->select('id', 'user_id', 'name', 'inn')
            ->get();

        return view('livewire.company-table');
    }
}
