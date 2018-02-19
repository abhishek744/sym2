<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }


    /**
     * @Route("/main", name="mainPage")
     */
    public function home(Request $request){
        return $this->render('default/home.html.twig');

    }


    /**
     * @Route("/main_custom", name="mainCustomPage")
     */
    public function home_custom(){

        $form = $this->createFromBuilder()
                ->add('task',TextType::class)
                ->add('name',TextType::class)
                ->getForm();

        return $this->render('default/home_custom.html.twig', array(
            'form'=>    $form->createView(),
        ));

    }

}
