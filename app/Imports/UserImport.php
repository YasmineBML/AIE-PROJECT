<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use App\Models\Enseignant;
use Hash;

class UserImport implements ToCollection ,ToModel
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
        $enseignat = new Enseignant;
        $enseignat->nom = $row[0];
        $enseignat->prenom = $row[1];
       // $enseignat->date_de_naissence = $row[2] ?? '2000-01-01';
       // $enseignat->date_de_naissence = $row[2];
        $enseignat->email = $row[2];
        $enseignat->mot_de_passe = $row[3];
        $enseignat->grade = $row[4];
        $enseignat->type = $row[5];
        $enseignat->save();
    }
}
   
   
   
   
   
   
   
   
   
   
   
   











    
    
    

}
