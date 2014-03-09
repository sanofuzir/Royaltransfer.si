<?php

namespace royaltransfer\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use royaltransfer\CoreBundle\Entity\Tour;
use royaltransfer\CoreBundle\Models\TourManager;
use royaltransfer\AdminBundle\Form\TourType;

class TourController extends Controller
{
    private $manager;

    /**
     * @return TourManager
     */
    private function getTourManager()
    {
        return $this->container->get('royaltransfer.tour_manager');
    }

    /**
     * @Route("/tours", name="_admin_tours")
     * @Template()
     */
    public function toursAction()
    {
        $tours = $this->getTourManager()->findAllTours();

        return array( 'tours' => $tours);
    }

    
    /**
     * @Route("/tour/delete/{id}", name="_admin_delete_tour", requirements={"id" = "\d+"})
     */
    public function deleteTourAction($id)
    {

        $this->getTourManager()->deleteTour($id);
        $this->get('session')->getFlashBag()->add('success', 'Izlet je bil uspešno odstranjen!');
        return $this->redirect($this->generateUrl('_admin_tours'));
    } 
    
    /**
     * @Route("/tour/add", name="_admin_add_tour")
     * @Route("/tour/edit/{id}", name="_admin_edit_tour", requirements={"id" = "\d+"})
     * @Template()
     */
    public function editTourAction(Request $request, $id = null)
    {
        if (is_null($id)) {
            $entity = $this->getTourManager()->createTour();
        } else {
            $entity = $this->getTourAction($id);
        }

        $form  = $this->createForm(new TourType(), $entity);

        if ($request->isMethod('POST')) {
            $form->bind($request);
            if ($form->isValid()) {
                $this->getTourManager()->saveTour($entity);
                $this->get('session')->getFlashBag()->add('success', 'Izlet je bil uspešno shranjen!');
                return $this->redirect($this->generateUrl('_admin_tours'));
            }
        }

        return array(
            'form'   => $form->createView(),
            'tour' => $entity,
        );
    }
    
    /**
     * get single Tour by id
     *
     * @param  int $id
     * @return Tour
     */
    public function getTourAction($id)
    {
        $tour = $this->getTourManager()->findTour($id);
        if (!$tour) {
            throw new NotFoundHttpException("Izlet ne obstaja.");
        }
        return $tour;
    }
}