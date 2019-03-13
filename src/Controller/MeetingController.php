<?php
namespace App\Controller;

use App\Entity\CoreMeeting;
use App\Entity\CoreAgenda;
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

        return $this->render('/pages/meetings/index.html.twig', array('meetings' => $meetings, 'agendas' => $agendas));
    }
}
?>