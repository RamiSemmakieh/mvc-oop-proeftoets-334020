<?php

class Country extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Overzicht landen van de wereld',
    
        ];

        $this->view('country/index', $data);
    }

    public function getCountries($id1=NULL, $id2=NULL) 
   {
        $data = [
            'title' => 'Overzicht landen van  europa',
            'eersteParameter'   => $id1,
            'tweedeParameter'   => $id2,
        ];

        $this->view('country/getCountries', $data);
    }
}