<?php

namespace App\Controller;

use App\Entity\Calendar;
use DateTime;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ApiController extends AbstractController
{
    /**
     * @Route("/api/{id}/edit", name="app_api_edit", methods={"PUT"})
     */
    public function majEvents(?Calendar $calendar, Request $request)
    {

        // On récupere les données
        $donnees = json_decode($request->getContent());
        
        if(
            isset($donnees->title) && !empty($donnees->title) &&
            isset($donnees->start) && !empty($donnees->start) &&
            isset($donnees->descrition) && !empty($donnees->descrition) &&
            isset($donnees->backgroundColor) && !empty($donnees->backgroundColor) &&
            isset($donnees->borderColor) && !empty($donnees->borderColor) &&
            isset($donnees->textColor) && !empty($donnees->textColor)
            
        ){
            // Si Les données sont complètes j'inisialise un code 200
            $code = 200;

            // On vérifie si l'id existe
            if(!$calendar){
                //On instancie un rendez-vous
                $calendar = new Calendar;

                // on change le code en 201 (Created)
                $code = 201;
            }
            // On hydrate l'objet avec les données
            $calendar->setTitle($donnees->title);
            $calendar->setDescrition($donnees->descrition);
            $calendar->setStart(new DateTime($donnees->start));
            if($donnees->allDay){
                $calendar->setEnd(new DateTime($donnees->start));
            }else {
                $calendar->setEnd(new DateTime($donnees->end));
            }
            $calendar->setAllDay($donnees->allDay);
            $calendar->setBackgroundcolor($donnees->backgroundColor);
            $calendar->setBorderColor($donnees->borderColor);
            $calendar->setTextColor($donnees->textColor);
            

            $em = $this->getDoctrine()->getManager();
            $em->persist($calendar);
            $em->flush();

            // On retourne un code qui 
            return new Response('Ok', $code);
        } else {
            // Si les données sont imcomplètes je fais un code erreur 404 
            return new Response('Données incomplètes', 404 );
        }
        


        return $this->render('api/index.html.twig', [
            'controller_name' => 'ApiController',
        ]);
    }
}
