<?php

namespace royaltransfer\staticBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use royaltransfer\CoreBundle\Entity\Tour;
use royaltransfer\CoreBundle\Models\TourManager;
use royaltransfer\AdminBundle\Form\TourType;
use royaltransfer\CoreBundle\Entity\News;
use royaltransfer\CoreBundle\Models\NewsManager;
use royaltransfer\AdminBundle\Form\NewsType;

class DefaultController extends Controller
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
     * @return NewsManager
     */
    private function getNewsManager()
    {
        return $this->container->get('royaltransfer.news_manager');
    }
    
    /**
     * @Route("/", name="_home")
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }
    
    /**
     * @Route("/About", name="_about")
     * @Template()
     */
    public function aboutAction()
    {
        return array();
    }
    
    /**
     * @Route("/Tours", name="_tours")
     * @Template()
     */
    public function toursAction()
    {
        $tours = $this->getTourManager()->findAllTours();

        return array( 'tours' => $tours);
    }
    
    /**
     * @Route("/News", name="_news")
     * @Template()
     */
    public function newsAction()
    {
        $news = $this->getNewsManager()->findAllNews();

        return array( 'news' => $news);
    }
    
    /**
     * @Route("/Galery", name="_galery")
     * @Template()
     */
    public function galeryAction()
    {
        return array();
    }
    
     /**
     * @Route("/Videos", name="_video_galery")
     * @Template()
     */
    public function videosAction()
    {
        return array();
    }
    
    /**
     * @Route("/Order", name="_order")
     * @Template()
     */
    public function orderAction()
    {
        return array();
    }
    
    /**
     * @Route("/Contact", name="_contact")
     * @Template()
     */
    public function contactAction()
    {
        return array();
    }
}
