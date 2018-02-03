<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\SearchType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class AnnonceController extends Controller
{
    /**
     * @Route("/annonces")
     */
    public function listAction(Request $request){
        $em = $this->getDoctrine()->getManager();
        $annonces = $em->getRepository("AppBundle:Annonce")->findAll();

        $form = $this->createFormBuilder()
        ->add("recherche", SearchType::class, array(
            'required' => false,
        ))
        ->add("type", EntityType::class, array(
                'class' => 'AppBundle:TypeAnnonce',
                'placeholder' => 'Sélectionner un type d\'annonce',
                'required' => false,
            ))
        ->getForm();

        $form->handleRequest($request);

        if ($form->isValid() && $form->isSubmitted()) {
            $data = $form->getData();
            $parameter = $data["recherche"];

            if(!($data['type'])){
                $query = $em->createQuery("select a from AppBundle\Entity\Annonce as a
                where a.titre like :p ")
                ->setParameter('p', '%' . $parameter . '%');
            }else{
                $parameter2 = $data['type']->getId();
                $query = $em->createQuery("select a from AppBundle\Entity\Annonce as a
                join a.typOid as t where t.id = :p2 and
                a.titre like :p   ")
                ->setParameters(array('p' => '%' . $parameter . '%', 'p2' => $parameter2));
            }
            
            $annonces = $query->getResult();
        }

        return $this->render('/annonce/liste_annonces.html.twig', array(
            'annonces' => $annonces,
            'form' => $form->createView()
        ));
    }

    /**
     * @Route("/annonce/{id}")
     */
    public function showAction($id){
        $em = $this->getDoctrine()->getManager();
        $annonce = $em->getRepository("AppBundle:Annonce")->findOneById($id);

        return $this->render('/annonce/annonce.html.twig', array(
            'annonce' => $annonce
        ));
    }
}
