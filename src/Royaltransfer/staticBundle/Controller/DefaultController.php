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
use royaltransfer\CoreBundle\Entity\News;
use royaltransfer\CoreBundle\Models\NewsManager;
use royaltransfer\CoreBundle\Entity\Image;
use royaltransfer\CoreBundle\Models\ImageManager;
use royaltransfer\CoreBundle\Entity\Video;
use royaltransfer\CoreBundle\Models\VideoManager;
use royaltransfer\AdminBundle\Form\InquiryType;
use royaltransfer\CoreBundle\Entity\Inquiry;
use royaltransfer\CoreBundle\Models\InquiryManager;

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
     * @return ImageManager
     */
    private function getImageManager()
    {
        return $this->container->get('royaltransfer.image_manager');
    }
    
    /**
     * @return VideoManager
     */
    private function getVideoManager()
    {
        return $this->container->get('royaltransfer.video_manager');
    }
    /**
     * @return InquiryManager
     */
    private function getInquiryManager()
    {
        return $this->container->get('royaltransfer.inquiry_manager');
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
        $images = $this->getImageManager()->findAllImages();
        
        return array('images' => $images);
    }
    
     /**
     * @Route("/Videos", name="_video_galery")
     * @Template()
     */
    public function videosAction()
    {
        $videos = $this->getVideoManager()->findAllVideos();
        
        return array('videos' => $videos);
    }
    
    /**
     * @Route("/Inquiry", name="_inquiry")
     * @Template()
     */
    public function inquiryAction()
    {
        $entity = $this->getInquiryManager()->createInquiry();
        
        $form  = $this->createForm(new InquiryType(), $entity);
        
        if ($form->isValid()) {
            $this->getNewsInquiry()->saveInquiry($entity);
            
            $message = \Swift_Message::newInstance()
                ->setSubject('Hello Email')
                ->setFrom('send@example.com')
                ->setTo('sano.fuzir@gmail.com')
                ->setBody(
                    $this->renderView(
                        'StaticBundle:Email:email.html.twig',
                        array('data' => $entity)
                    )
                )
            ;
            $this->get('mailer')->send($message);
            
            $this->get('session')->getFlashBag()->add('success', 'Povpraševanje je bilo uspešno shranjeno!');
            return $this->redirect($this->generateUrl('_home'));
        }

        return array(
            'form'   => $form->createView(),
        );
    }
    
    /**
     * @Route("/inquiry/add", name="_add_inquiry")
     * @Route("/inquiry/edit/{id}", name="_edit_inquiry", requirements={"id" = "\d+"})
     * @Template()
     */
    public function editInquiryAction(Request $request, $id = null)
    {
        if (is_null($id)) {
            $entity = $this->getInquiryManager()->createInquiry();
        } else {
            $entity = $this->getInquiryAction($id);
        }

        $form  = $this->createForm(new inquiryType(), $entity);

        if ($request->isMethod('POST')) {
            $form->bind($request);
            if ($form->isValid()) {
                $this->getInquiryManager()->saveInquiry($entity);
                $this->get('session')->getFlashBag()->add('success', 'Povpraševanje je bilo uspešno izvedeno!');
                return $this->redirect($this->generateUrl('_home'));
            }
        }

        return array(
            'form'  => $form->createView(),
            'order' => $entity,
        );
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
