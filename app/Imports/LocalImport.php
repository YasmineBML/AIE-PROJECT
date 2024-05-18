<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use App\Models\Local;


class LocalImport implements ToCollection ,ToModel
{
    private $current=0;
    /**
     * @param \Illuminate\Support\Collection $collection
     */
    public function collection(Collection $collection)
    {
       
        
    }

    public function model(array $row)
{
    $this->current++;
    if ($this->current > 1) {
        $locals = new Local;
        $locals->libelle = $row[0];
        $locals->capacite = $row[1];
        $locals->type = $row[2];
        $locals->save();
       
       
       
    }
}
   
   
   
   
   
   
   
   
   
   
   
   











    
    
    

}
