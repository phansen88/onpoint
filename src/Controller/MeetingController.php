<?php
namespace App\Controller;

use App\Entity\CoreMeeting;
use App\Entity\CoreAgenda;
use App\Entity\CoreAgendaItem;
use App\Entity\CoreAsideMenu;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MeetingController extends AbstractController {
    /**
    * @Route("/")
    */
    public function index() {

        $meetings = $this->getDoctrine()->getRepository(CoreMeeting::class)->findAll();
        $agendas = $this->getDoctrine()->getRepository(CoreAgenda::class)->findAll();
        $agenda_items = $this->getDoctrine()->getRepository(CoreAgendaItem::class)->findAll();
        $aside_menu = $this->getDoctrine()->getRepository(CoreAsideMenu::class)->findAll();

        return $this->render('/pages/meetings/index.html.twig', array(
            'meetings' => $meetings,
            'agendas' => $agendas,
            'agenda_items' => $agenda_items,
            'aside_menu' => $aside_menu
        ));
    }
}
?>