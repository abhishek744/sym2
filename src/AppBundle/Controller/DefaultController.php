<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Enquiry;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
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
    public function home_custom(Request $request){

        $enquiry = new Enquiry();

        $form = $this->createFormBuilder($enquiry)
                ->add('destination',TextType::class)
                ->add('checkIn',TextType::class)
                ->add('checkOut',TextType::class)
                ->add('adult',ChoiceType::class, array(
                        'choices'=>array(
                            'Adult' => '0' ,
                            '1' => '1' ,
                            '2' => '2' ,
                            '3' => '3' ,
                            '4' => '4' ,
                            '5' => '5' ,
                        )
                    )
                )
                ->add('children',ChoiceType::class, array(
                        'choices'=>array(
                            'Children' => '0' ,
                            '1' => '1' ,
                            '2' => '2' ,
                            '3' => '3' ,
                            '4' => '4' ,
                            '5' => '5' ,
                        )
                    )
                )
                ->add('room',ChoiceType::class, array(
                        'choices'=>array(
                            'Room' => '0' ,
                            '1' => '1' ,
                            '2' => '2' ,
                            '3' => '3' ,
                            '4' => '4' ,
                            '5' => '5' ,
                        )
                    )
                )
                ->add('save', SubmitType::class)
                ->getForm();

        return $this->render('default/home_custom.html.twig', array(
            'form'=> $form->createView(),
        ));

    }

}
