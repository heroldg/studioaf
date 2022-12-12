<?php

namespace App\Controller;

use App\Repository\CalendarRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StudioAfController extends AbstractController
{
    /**
     * @Route("/", name="app_studio_af")
     */
    public function index(CalendarRepository $calendar)
    {
        $events = $calendar->findAll();
        // dd($events);
        foreach($events as $event){
            $rdvs[] = [
                'id' => $event->getId(), 
                'start' => $event->getStart()->format('Y-m-d H:i:s'),
                'end' => $event->getEnd()->format('Y-m-d H:i:s'),
                'title' => $event->getTitle(),
                'description' => $event->getDescrition(),
                'backgroundColor' => $event->getBackgroundcolor(),
                'borderColor' => $event->getBorderColor(),
                'textColor' => $event->getTextColor(),
                // 'allDay' => $event -> isAllDay(),

            ]; 
        }

        $data = json_encode($rdvs); 

        return $this->render('studio_af/index.html.twig', compact('data'));
    }
}
