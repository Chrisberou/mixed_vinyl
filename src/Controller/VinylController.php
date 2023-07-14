<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class VinylController
{
    #[Route('/')]
    public function homepage():Response
    {
        return new Response('Title : Pb and asd');
    }

    #[Route('/browse/{slug}')]
    public function browse(string $slug=null):Response
    {
        if($slug){
            $title=str_replace('-',' ',$slug);
        }else{
            $title='all oti na nai'; 
        }
      
        
        return new Response($title);

    }
}

