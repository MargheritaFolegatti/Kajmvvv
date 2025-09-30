<?php

namespace App\Controller;

use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use App\Form\UserType;

class DefaultController extends AbstractController
{
    protected $mr;

    public function __construct(ManagerRegistry $managerRegistry)
    {
        $this->mr = $managerRegistry;
    }

    #[Route('/', name: 'homepage')]
    public function index(Request $request){
		
        $em = $this->mr->getManager();
        $jewels = $em->getRepository('App\Entity\Project')->findLastProject();
        $blog = $em->getRepository('App\Entity\Blog')->findAll();

		return $this->render('default/index.html.twig', array(
            'jewels' => $jewels,
            'blog' => $blog
        ));
	}

    #[Route('/home/{section}', name: 'homepage_with_section')]
    public function indexWithSection(Request $request, $section)
    {
        $session = $request->getSession();
		$session->set('section', $section);
        

		return $this->redirectToRoute('homepage');
	}

    #[Route('/gioielli', name: 'jewels')]
    public function jewels(Request $request){
		
        $em = $this->mr->getManager();
        $jewels = $em->getRepository('App\Entity\Project')->findAll();


		return $this->render('default/jewels.html.twig', array(
            'jewels' => $jewels
        ));
	}

    #[Route('/chi-siamo', name: 'who')]
    public function who(Request $request){
		
        $em = $this->mr->getManager();
        $blog = $em->getRepository('App\Entity\Blog')->findAll();

		return $this->render('default/who.html.twig', array(
            'blog' => $blog
        ));
	}

    #[Route('/contatti', name: 'contact')]
    public function contact(Request $request){
		
        $em = $this->mr->getManager();

		return $this->render('default/contact.html.twig');
	}

    #[Route('/privacy-policy', name: 'privacy')]
    public function privacy(Request $request){
		
        $em = $this->mr->getManager();

		return $this->render('default/privacy.html.twig');
	}

}