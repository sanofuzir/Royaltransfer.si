<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/admin')) {
            // _admin
            if ($pathinfo === '/admin') {
                return array (  '_controller' => 'royaltransfer\\AdminBundle\\Controller\\DefaultController::indexAction',  '_route' => '_admin',);
            }

            if (0 === strpos($pathinfo, '/admin/image')) {
                // _admin_images
                if ($pathinfo === '/admin/images') {
                    return array (  '_controller' => 'royaltransfer\\AdminBundle\\Controller\\ImageController::imagesAction',  '_route' => '_admin_images',);
                }

                // _admin_delete_image
                if (0 === strpos($pathinfo, '/admin/image/delete') && preg_match('#^/admin/image/delete/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_admin_delete_image')), array (  '_controller' => 'royaltransfer\\AdminBundle\\Controller\\ImageController::deleteImageAction',));
                }

                // _admin_add_image
                if ($pathinfo === '/admin/image/add') {
                    return array (  'id' => NULL,  '_controller' => 'royaltransfer\\AdminBundle\\Controller\\ImageController::editImageAction',  '_route' => '_admin_add_image',);
                }

                // _admin_edit_image
                if (0 === strpos($pathinfo, '/admin/image/edit') && preg_match('#^/admin/image/edit(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_admin_edit_image')), array (  'id' => NULL,  '_controller' => 'royaltransfer\\AdminBundle\\Controller\\ImageController::editImageAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/news')) {
                // _admin_news
                if ($pathinfo === '/admin/news') {
                    return array (  '_controller' => 'royaltransfer\\AdminBundle\\Controller\\NewsController::newsAction',  '_route' => '_admin_news',);
                }

                // _admin_delete_news
                if (0 === strpos($pathinfo, '/admin/news/delete') && preg_match('#^/admin/news/delete/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_admin_delete_news')), array (  '_controller' => 'royaltransfer\\AdminBundle\\Controller\\NewsController::deleteNewsAction',));
                }

                // _admin_add_news
                if ($pathinfo === '/admin/news/add') {
                    return array (  'id' => NULL,  '_controller' => 'royaltransfer\\AdminBundle\\Controller\\NewsController::editNewsAction',  '_route' => '_admin_add_news',);
                }

                // _admin_edit_news
                if (0 === strpos($pathinfo, '/admin/news/edit') && preg_match('#^/admin/news/edit(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_admin_edit_news')), array (  'id' => NULL,  '_controller' => 'royaltransfer\\AdminBundle\\Controller\\NewsController::editNewsAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/tour')) {
                // _admin_tours
                if ($pathinfo === '/admin/tours') {
                    return array (  '_controller' => 'royaltransfer\\AdminBundle\\Controller\\TourController::toursAction',  '_route' => '_admin_tours',);
                }

                // _admin_delete_tour
                if (0 === strpos($pathinfo, '/admin/tour/delete') && preg_match('#^/admin/tour/delete/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_admin_delete_tour')), array (  '_controller' => 'royaltransfer\\AdminBundle\\Controller\\TourController::deleteTourAction',));
                }

                // _admin_add_tour
                if ($pathinfo === '/admin/tour/add') {
                    return array (  'id' => NULL,  '_controller' => 'royaltransfer\\AdminBundle\\Controller\\TourController::editTourAction',  '_route' => '_admin_add_tour',);
                }

                // _admin_edit_tour
                if (0 === strpos($pathinfo, '/admin/tour/edit') && preg_match('#^/admin/tour/edit(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_admin_edit_tour')), array (  'id' => NULL,  '_controller' => 'royaltransfer\\AdminBundle\\Controller\\TourController::editTourAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/video')) {
                // _admin_videos
                if ($pathinfo === '/admin/videos') {
                    return array (  '_controller' => 'royaltransfer\\AdminBundle\\Controller\\VideoController::videosAction',  '_route' => '_admin_videos',);
                }

                // _admin_delete_video
                if (0 === strpos($pathinfo, '/admin/video/delete') && preg_match('#^/admin/video/delete/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_admin_delete_video')), array (  '_controller' => 'royaltransfer\\AdminBundle\\Controller\\VideoController::deleteVideoAction',));
                }

                // _admin_add_video
                if ($pathinfo === '/admin/video/add') {
                    return array (  'id' => NULL,  '_controller' => 'royaltransfer\\AdminBundle\\Controller\\VideoController::editVideoAction',  '_route' => '_admin_add_video',);
                }

                // _admin_edit_video
                if (0 === strpos($pathinfo, '/admin/video/edit') && preg_match('#^/admin/video/edit(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_admin_edit_video')), array (  'id' => NULL,  '_controller' => 'royaltransfer\\AdminBundle\\Controller\\VideoController::editVideoAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/inquiry')) {
                // _admin_inquiry
                if ($pathinfo === '/admin/inquiry') {
                    return array (  '_controller' => 'royaltransfer\\AdminBundle\\Controller\\InquiryController::inquiryAction',  '_route' => '_admin_inquiry',);
                }

                // _admin_delete_inquiry
                if (0 === strpos($pathinfo, '/admin/inquiry/delete') && preg_match('#^/admin/inquiry/delete/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_admin_delete_inquiry')), array (  '_controller' => 'royaltransfer\\AdminBundle\\Controller\\InquiryController::deleteInquiryAction',));
                }

                // _admin_add_inquiry
                if ($pathinfo === '/admin/inquiry/add') {
                    return array (  'id' => NULL,  '_controller' => 'royaltransfer\\AdminBundle\\Controller\\InquiryController::editInquiryAction',  '_route' => '_admin_add_inquiry',);
                }

                // _admin_edit_inquiry
                if (0 === strpos($pathinfo, '/admin/inquiry/edit') && preg_match('#^/admin/inquiry/edit(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_admin_edit_inquiry')), array (  'id' => NULL,  '_controller' => 'royaltransfer\\AdminBundle\\Controller\\InquiryController::editInquiryAction',));
                }

            }

        }

        // sl__RG__home
        if (rtrim($pathinfo, '/') === '/sl') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'sl__RG__home');
            }

            return array (  '_controller' => 'Royaltransfer\\staticBundle\\Controller\\DefaultController::indexAction',  '_locale' => 'sl',  '_route' => 'sl__RG__home',);
        }

        // es__RG__home
        if (rtrim($pathinfo, '/') === '/es') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'es__RG__home');
            }

            return array (  '_controller' => 'Royaltransfer\\staticBundle\\Controller\\DefaultController::indexAction',  '_locale' => 'es',  '_route' => 'es__RG__home',);
        }

        // rs__RG__home
        if (rtrim($pathinfo, '/') === '/rs') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'rs__RG__home');
            }

            return array (  '_controller' => 'Royaltransfer\\staticBundle\\Controller\\DefaultController::indexAction',  '_locale' => 'rs',  '_route' => 'rs__RG__home',);
        }

        // hr__RG__home
        if (rtrim($pathinfo, '/') === '/hr') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'hr__RG__home');
            }

            return array (  '_controller' => 'Royaltransfer\\staticBundle\\Controller\\DefaultController::indexAction',  '_locale' => 'hr',  '_route' => 'hr__RG__home',);
        }

        // it__RG__home
        if (rtrim($pathinfo, '/') === '/it') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'it__RG__home');
            }

            return array (  '_controller' => 'Royaltransfer\\staticBundle\\Controller\\DefaultController::indexAction',  '_locale' => 'it',  '_route' => 'it__RG__home',);
        }

        // ba__RG__home
        if (rtrim($pathinfo, '/') === '/ba') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'ba__RG__home');
            }

            return array (  '_controller' => 'Royaltransfer\\staticBundle\\Controller\\DefaultController::indexAction',  '_locale' => 'ba',  '_route' => 'ba__RG__home',);
        }

        // fr__RG__home
        if (rtrim($pathinfo, '/') === '/fr') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'fr__RG__home');
            }

            return array (  '_controller' => 'Royaltransfer\\staticBundle\\Controller\\DefaultController::indexAction',  '_locale' => 'fr',  '_route' => 'fr__RG__home',);
        }

        // en__RG__home
        if (rtrim($pathinfo, '/') === '/en') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'en__RG__home');
            }

            return array (  '_controller' => 'Royaltransfer\\staticBundle\\Controller\\DefaultController::indexAction',  '_locale' => 'en',  '_route' => 'en__RG__home',);
        }

        // de__RG__home
        if (rtrim($pathinfo, '/') === '/de') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'de__RG__home');
            }

            return array (  '_controller' => 'Royaltransfer\\staticBundle\\Controller\\DefaultController::indexAction',  '_locale' => 'de',  '_route' => 'de__RG__home',);
        }

        // _about
        if ($pathinfo === '/About') {
            return array (  '_controller' => 'Royaltransfer\\staticBundle\\Controller\\DefaultController::aboutAction',  '_route' => '_about',);
        }

        // _tours
        if ($pathinfo === '/Tours') {
            return array (  '_controller' => 'Royaltransfer\\staticBundle\\Controller\\DefaultController::toursAction',  '_route' => '_tours',);
        }

        // _news
        if ($pathinfo === '/News') {
            return array (  '_controller' => 'Royaltransfer\\staticBundle\\Controller\\DefaultController::newsAction',  '_route' => '_news',);
        }

        // _single_news
        if (0 === strpos($pathinfo, '/news') && preg_match('#^/news/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => '_single_news')), array (  '_controller' => 'Royaltransfer\\staticBundle\\Controller\\DefaultController::singleNewsAction',));
        }

        // _single_tour
        if (0 === strpos($pathinfo, '/tour') && preg_match('#^/tour/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => '_single_tour')), array (  '_controller' => 'Royaltransfer\\staticBundle\\Controller\\DefaultController::singleTourAction',));
        }

        // _galery
        if ($pathinfo === '/Galery') {
            return array (  '_controller' => 'Royaltransfer\\staticBundle\\Controller\\DefaultController::galeryAction',  '_route' => '_galery',);
        }

        // _video_galery
        if ($pathinfo === '/Videos') {
            return array (  '_controller' => 'Royaltransfer\\staticBundle\\Controller\\DefaultController::videosAction',  '_route' => '_video_galery',);
        }

        // _inquiry
        if ($pathinfo === '/Inquiry') {
            return array (  '_controller' => 'Royaltransfer\\staticBundle\\Controller\\DefaultController::inquiryAction',  '_route' => '_inquiry',);
        }

        if (0 === strpos($pathinfo, '/inquiry')) {
            // _add_inquiry
            if ($pathinfo === '/inquiry/add') {
                return array (  'id' => NULL,  '_controller' => 'Royaltransfer\\staticBundle\\Controller\\DefaultController::editInquiryAction',  '_route' => '_add_inquiry',);
            }

            // _edit_inquiry
            if (0 === strpos($pathinfo, '/inquiry/edit') && preg_match('#^/inquiry/edit(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_edit_inquiry')), array (  'id' => NULL,  '_controller' => 'Royaltransfer\\staticBundle\\Controller\\DefaultController::editInquiryAction',));
            }

        }

        // _contact
        if ($pathinfo === '/Contact') {
            return array (  '_controller' => 'Royaltransfer\\staticBundle\\Controller\\DefaultController::contactAction',  '_route' => '_contact',);
        }

        // sl__RG__fos_user_security_login
        if ($pathinfo === '/sl/login') {
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_locale' => 'sl',  '_route' => 'sl__RG__fos_user_security_login',);
        }

        // es__RG__fos_user_security_login
        if ($pathinfo === '/es/login') {
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_locale' => 'es',  '_route' => 'es__RG__fos_user_security_login',);
        }

        // rs__RG__fos_user_security_login
        if ($pathinfo === '/rs/login') {
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_locale' => 'rs',  '_route' => 'rs__RG__fos_user_security_login',);
        }

        // hr__RG__fos_user_security_login
        if ($pathinfo === '/hr/login') {
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_locale' => 'hr',  '_route' => 'hr__RG__fos_user_security_login',);
        }

        // it__RG__fos_user_security_login
        if ($pathinfo === '/it/login') {
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_locale' => 'it',  '_route' => 'it__RG__fos_user_security_login',);
        }

        // ba__RG__fos_user_security_login
        if ($pathinfo === '/ba/login') {
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_locale' => 'ba',  '_route' => 'ba__RG__fos_user_security_login',);
        }

        // fr__RG__fos_user_security_login
        if ($pathinfo === '/fr/login') {
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_locale' => 'fr',  '_route' => 'fr__RG__fos_user_security_login',);
        }

        // en__RG__fos_user_security_login
        if ($pathinfo === '/en/login') {
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_locale' => 'en',  '_route' => 'en__RG__fos_user_security_login',);
        }

        // de__RG__fos_user_security_login
        if ($pathinfo === '/de/login') {
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_locale' => 'de',  '_route' => 'de__RG__fos_user_security_login',);
        }

        // sl__RG__fos_user_security_check
        if ($pathinfo === '/sl/login_check') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_sl__RG__fos_user_security_check;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_locale' => 'sl',  '_route' => 'sl__RG__fos_user_security_check',);
        }
        not_sl__RG__fos_user_security_check:

        // es__RG__fos_user_security_check
        if ($pathinfo === '/es/login_check') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_es__RG__fos_user_security_check;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_locale' => 'es',  '_route' => 'es__RG__fos_user_security_check',);
        }
        not_es__RG__fos_user_security_check:

        // rs__RG__fos_user_security_check
        if ($pathinfo === '/rs/login_check') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_rs__RG__fos_user_security_check;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_locale' => 'rs',  '_route' => 'rs__RG__fos_user_security_check',);
        }
        not_rs__RG__fos_user_security_check:

        // hr__RG__fos_user_security_check
        if ($pathinfo === '/hr/login_check') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_hr__RG__fos_user_security_check;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_locale' => 'hr',  '_route' => 'hr__RG__fos_user_security_check',);
        }
        not_hr__RG__fos_user_security_check:

        // it__RG__fos_user_security_check
        if ($pathinfo === '/it/login_check') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_it__RG__fos_user_security_check;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_locale' => 'it',  '_route' => 'it__RG__fos_user_security_check',);
        }
        not_it__RG__fos_user_security_check:

        // ba__RG__fos_user_security_check
        if ($pathinfo === '/ba/login_check') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_ba__RG__fos_user_security_check;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_locale' => 'ba',  '_route' => 'ba__RG__fos_user_security_check',);
        }
        not_ba__RG__fos_user_security_check:

        // fr__RG__fos_user_security_check
        if ($pathinfo === '/fr/login_check') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_fr__RG__fos_user_security_check;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_locale' => 'fr',  '_route' => 'fr__RG__fos_user_security_check',);
        }
        not_fr__RG__fos_user_security_check:

        // en__RG__fos_user_security_check
        if ($pathinfo === '/en/login_check') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_en__RG__fos_user_security_check;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_locale' => 'en',  '_route' => 'en__RG__fos_user_security_check',);
        }
        not_en__RG__fos_user_security_check:

        // de__RG__fos_user_security_check
        if ($pathinfo === '/de/login_check') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_de__RG__fos_user_security_check;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_locale' => 'de',  '_route' => 'de__RG__fos_user_security_check',);
        }
        not_de__RG__fos_user_security_check:

        // sl__RG__fos_user_security_logout
        if ($pathinfo === '/sl/logout') {
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_locale' => 'sl',  '_route' => 'sl__RG__fos_user_security_logout',);
        }

        // es__RG__fos_user_security_logout
        if ($pathinfo === '/es/logout') {
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_locale' => 'es',  '_route' => 'es__RG__fos_user_security_logout',);
        }

        // rs__RG__fos_user_security_logout
        if ($pathinfo === '/rs/logout') {
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_locale' => 'rs',  '_route' => 'rs__RG__fos_user_security_logout',);
        }

        // hr__RG__fos_user_security_logout
        if ($pathinfo === '/hr/logout') {
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_locale' => 'hr',  '_route' => 'hr__RG__fos_user_security_logout',);
        }

        // it__RG__fos_user_security_logout
        if ($pathinfo === '/it/logout') {
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_locale' => 'it',  '_route' => 'it__RG__fos_user_security_logout',);
        }

        // ba__RG__fos_user_security_logout
        if ($pathinfo === '/ba/logout') {
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_locale' => 'ba',  '_route' => 'ba__RG__fos_user_security_logout',);
        }

        // fr__RG__fos_user_security_logout
        if ($pathinfo === '/fr/logout') {
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_locale' => 'fr',  '_route' => 'fr__RG__fos_user_security_logout',);
        }

        // en__RG__fos_user_security_logout
        if ($pathinfo === '/en/logout') {
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_locale' => 'en',  '_route' => 'en__RG__fos_user_security_logout',);
        }

        // de__RG__fos_user_security_logout
        if ($pathinfo === '/de/logout') {
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_locale' => 'de',  '_route' => 'de__RG__fos_user_security_logout',);
        }

        // sl__RG__fos_user_registration_register
        if (rtrim($pathinfo, '/') === '/sl/register') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'sl__RG__fos_user_registration_register');
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_locale' => 'sl',  '_route' => 'sl__RG__fos_user_registration_register',);
        }

        // es__RG__fos_user_registration_register
        if (rtrim($pathinfo, '/') === '/es/register') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'es__RG__fos_user_registration_register');
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_locale' => 'es',  '_route' => 'es__RG__fos_user_registration_register',);
        }

        // rs__RG__fos_user_registration_register
        if (rtrim($pathinfo, '/') === '/rs/register') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'rs__RG__fos_user_registration_register');
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_locale' => 'rs',  '_route' => 'rs__RG__fos_user_registration_register',);
        }

        // hr__RG__fos_user_registration_register
        if (rtrim($pathinfo, '/') === '/hr/register') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'hr__RG__fos_user_registration_register');
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_locale' => 'hr',  '_route' => 'hr__RG__fos_user_registration_register',);
        }

        // it__RG__fos_user_registration_register
        if (rtrim($pathinfo, '/') === '/it/register') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'it__RG__fos_user_registration_register');
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_locale' => 'it',  '_route' => 'it__RG__fos_user_registration_register',);
        }

        // ba__RG__fos_user_registration_register
        if (rtrim($pathinfo, '/') === '/ba/register') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'ba__RG__fos_user_registration_register');
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_locale' => 'ba',  '_route' => 'ba__RG__fos_user_registration_register',);
        }

        // fr__RG__fos_user_registration_register
        if (rtrim($pathinfo, '/') === '/fr/register') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'fr__RG__fos_user_registration_register');
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_locale' => 'fr',  '_route' => 'fr__RG__fos_user_registration_register',);
        }

        // en__RG__fos_user_registration_register
        if (rtrim($pathinfo, '/') === '/en/register') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'en__RG__fos_user_registration_register');
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_locale' => 'en',  '_route' => 'en__RG__fos_user_registration_register',);
        }

        // de__RG__fos_user_registration_register
        if (rtrim($pathinfo, '/') === '/de/register') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'de__RG__fos_user_registration_register');
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_locale' => 'de',  '_route' => 'de__RG__fos_user_registration_register',);
        }

        // sl__RG__fos_user_registration_check_email
        if ($pathinfo === '/sl/register/check-email') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_sl__RG__fos_user_registration_check_email;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_locale' => 'sl',  '_route' => 'sl__RG__fos_user_registration_check_email',);
        }
        not_sl__RG__fos_user_registration_check_email:

        // es__RG__fos_user_registration_check_email
        if ($pathinfo === '/es/register/check-email') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_es__RG__fos_user_registration_check_email;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_locale' => 'es',  '_route' => 'es__RG__fos_user_registration_check_email',);
        }
        not_es__RG__fos_user_registration_check_email:

        // rs__RG__fos_user_registration_check_email
        if ($pathinfo === '/rs/register/check-email') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_rs__RG__fos_user_registration_check_email;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_locale' => 'rs',  '_route' => 'rs__RG__fos_user_registration_check_email',);
        }
        not_rs__RG__fos_user_registration_check_email:

        // hr__RG__fos_user_registration_check_email
        if ($pathinfo === '/hr/register/check-email') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_hr__RG__fos_user_registration_check_email;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_locale' => 'hr',  '_route' => 'hr__RG__fos_user_registration_check_email',);
        }
        not_hr__RG__fos_user_registration_check_email:

        // it__RG__fos_user_registration_check_email
        if ($pathinfo === '/it/register/check-email') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_it__RG__fos_user_registration_check_email;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_locale' => 'it',  '_route' => 'it__RG__fos_user_registration_check_email',);
        }
        not_it__RG__fos_user_registration_check_email:

        // ba__RG__fos_user_registration_check_email
        if ($pathinfo === '/ba/register/check-email') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_ba__RG__fos_user_registration_check_email;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_locale' => 'ba',  '_route' => 'ba__RG__fos_user_registration_check_email',);
        }
        not_ba__RG__fos_user_registration_check_email:

        // fr__RG__fos_user_registration_check_email
        if ($pathinfo === '/fr/register/check-email') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_fr__RG__fos_user_registration_check_email;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_locale' => 'fr',  '_route' => 'fr__RG__fos_user_registration_check_email',);
        }
        not_fr__RG__fos_user_registration_check_email:

        // en__RG__fos_user_registration_check_email
        if ($pathinfo === '/en/register/check-email') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_en__RG__fos_user_registration_check_email;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_locale' => 'en',  '_route' => 'en__RG__fos_user_registration_check_email',);
        }
        not_en__RG__fos_user_registration_check_email:

        // de__RG__fos_user_registration_check_email
        if ($pathinfo === '/de/register/check-email') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_de__RG__fos_user_registration_check_email;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_locale' => 'de',  '_route' => 'de__RG__fos_user_registration_check_email',);
        }
        not_de__RG__fos_user_registration_check_email:

        // sl__RG__fos_user_registration_confirm
        if (0 === strpos($pathinfo, '/sl/register/confirm') && preg_match('#^/sl/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_sl__RG__fos_user_registration_confirm;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sl__RG__fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',  '_locale' => 'sl',));
        }
        not_sl__RG__fos_user_registration_confirm:

        // es__RG__fos_user_registration_confirm
        if (0 === strpos($pathinfo, '/es/register/confirm') && preg_match('#^/es/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_es__RG__fos_user_registration_confirm;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'es__RG__fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',  '_locale' => 'es',));
        }
        not_es__RG__fos_user_registration_confirm:

        // rs__RG__fos_user_registration_confirm
        if (0 === strpos($pathinfo, '/rs/register/confirm') && preg_match('#^/rs/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_rs__RG__fos_user_registration_confirm;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'rs__RG__fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',  '_locale' => 'rs',));
        }
        not_rs__RG__fos_user_registration_confirm:

        // hr__RG__fos_user_registration_confirm
        if (0 === strpos($pathinfo, '/hr/register/confirm') && preg_match('#^/hr/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_hr__RG__fos_user_registration_confirm;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'hr__RG__fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',  '_locale' => 'hr',));
        }
        not_hr__RG__fos_user_registration_confirm:

        // it__RG__fos_user_registration_confirm
        if (0 === strpos($pathinfo, '/it/register/confirm') && preg_match('#^/it/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_it__RG__fos_user_registration_confirm;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'it__RG__fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',  '_locale' => 'it',));
        }
        not_it__RG__fos_user_registration_confirm:

        // ba__RG__fos_user_registration_confirm
        if (0 === strpos($pathinfo, '/ba/register/confirm') && preg_match('#^/ba/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_ba__RG__fos_user_registration_confirm;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ba__RG__fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',  '_locale' => 'ba',));
        }
        not_ba__RG__fos_user_registration_confirm:

        // fr__RG__fos_user_registration_confirm
        if (0 === strpos($pathinfo, '/fr/register/confirm') && preg_match('#^/fr/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_fr__RG__fos_user_registration_confirm;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',  '_locale' => 'fr',));
        }
        not_fr__RG__fos_user_registration_confirm:

        // en__RG__fos_user_registration_confirm
        if (0 === strpos($pathinfo, '/en/register/confirm') && preg_match('#^/en/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_en__RG__fos_user_registration_confirm;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',  '_locale' => 'en',));
        }
        not_en__RG__fos_user_registration_confirm:

        // de__RG__fos_user_registration_confirm
        if (0 === strpos($pathinfo, '/de/register/confirm') && preg_match('#^/de/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_de__RG__fos_user_registration_confirm;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'de__RG__fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',  '_locale' => 'de',));
        }
        not_de__RG__fos_user_registration_confirm:

        // sl__RG__fos_user_registration_confirmed
        if ($pathinfo === '/sl/register/confirmed') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_sl__RG__fos_user_registration_confirmed;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_locale' => 'sl',  '_route' => 'sl__RG__fos_user_registration_confirmed',);
        }
        not_sl__RG__fos_user_registration_confirmed:

        // es__RG__fos_user_registration_confirmed
        if ($pathinfo === '/es/register/confirmed') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_es__RG__fos_user_registration_confirmed;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_locale' => 'es',  '_route' => 'es__RG__fos_user_registration_confirmed',);
        }
        not_es__RG__fos_user_registration_confirmed:

        // rs__RG__fos_user_registration_confirmed
        if ($pathinfo === '/rs/register/confirmed') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_rs__RG__fos_user_registration_confirmed;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_locale' => 'rs',  '_route' => 'rs__RG__fos_user_registration_confirmed',);
        }
        not_rs__RG__fos_user_registration_confirmed:

        // hr__RG__fos_user_registration_confirmed
        if ($pathinfo === '/hr/register/confirmed') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_hr__RG__fos_user_registration_confirmed;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_locale' => 'hr',  '_route' => 'hr__RG__fos_user_registration_confirmed',);
        }
        not_hr__RG__fos_user_registration_confirmed:

        // it__RG__fos_user_registration_confirmed
        if ($pathinfo === '/it/register/confirmed') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_it__RG__fos_user_registration_confirmed;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_locale' => 'it',  '_route' => 'it__RG__fos_user_registration_confirmed',);
        }
        not_it__RG__fos_user_registration_confirmed:

        // ba__RG__fos_user_registration_confirmed
        if ($pathinfo === '/ba/register/confirmed') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_ba__RG__fos_user_registration_confirmed;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_locale' => 'ba',  '_route' => 'ba__RG__fos_user_registration_confirmed',);
        }
        not_ba__RG__fos_user_registration_confirmed:

        // fr__RG__fos_user_registration_confirmed
        if ($pathinfo === '/fr/register/confirmed') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_fr__RG__fos_user_registration_confirmed;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_locale' => 'fr',  '_route' => 'fr__RG__fos_user_registration_confirmed',);
        }
        not_fr__RG__fos_user_registration_confirmed:

        // en__RG__fos_user_registration_confirmed
        if ($pathinfo === '/en/register/confirmed') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_en__RG__fos_user_registration_confirmed;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_locale' => 'en',  '_route' => 'en__RG__fos_user_registration_confirmed',);
        }
        not_en__RG__fos_user_registration_confirmed:

        // de__RG__fos_user_registration_confirmed
        if ($pathinfo === '/de/register/confirmed') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_de__RG__fos_user_registration_confirmed;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_locale' => 'de',  '_route' => 'de__RG__fos_user_registration_confirmed',);
        }
        not_de__RG__fos_user_registration_confirmed:

        // sl__RG__fos_user_resetting_request
        if ($pathinfo === '/sl/resetting/request') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_sl__RG__fos_user_resetting_request;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_locale' => 'sl',  '_route' => 'sl__RG__fos_user_resetting_request',);
        }
        not_sl__RG__fos_user_resetting_request:

        // es__RG__fos_user_resetting_request
        if ($pathinfo === '/es/resetting/request') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_es__RG__fos_user_resetting_request;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_locale' => 'es',  '_route' => 'es__RG__fos_user_resetting_request',);
        }
        not_es__RG__fos_user_resetting_request:

        // rs__RG__fos_user_resetting_request
        if ($pathinfo === '/rs/resetting/request') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_rs__RG__fos_user_resetting_request;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_locale' => 'rs',  '_route' => 'rs__RG__fos_user_resetting_request',);
        }
        not_rs__RG__fos_user_resetting_request:

        // hr__RG__fos_user_resetting_request
        if ($pathinfo === '/hr/resetting/request') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_hr__RG__fos_user_resetting_request;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_locale' => 'hr',  '_route' => 'hr__RG__fos_user_resetting_request',);
        }
        not_hr__RG__fos_user_resetting_request:

        // it__RG__fos_user_resetting_request
        if ($pathinfo === '/it/resetting/request') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_it__RG__fos_user_resetting_request;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_locale' => 'it',  '_route' => 'it__RG__fos_user_resetting_request',);
        }
        not_it__RG__fos_user_resetting_request:

        // ba__RG__fos_user_resetting_request
        if ($pathinfo === '/ba/resetting/request') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_ba__RG__fos_user_resetting_request;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_locale' => 'ba',  '_route' => 'ba__RG__fos_user_resetting_request',);
        }
        not_ba__RG__fos_user_resetting_request:

        // fr__RG__fos_user_resetting_request
        if ($pathinfo === '/fr/resetting/request') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_fr__RG__fos_user_resetting_request;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_locale' => 'fr',  '_route' => 'fr__RG__fos_user_resetting_request',);
        }
        not_fr__RG__fos_user_resetting_request:

        // en__RG__fos_user_resetting_request
        if ($pathinfo === '/en/resetting/request') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_en__RG__fos_user_resetting_request;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_locale' => 'en',  '_route' => 'en__RG__fos_user_resetting_request',);
        }
        not_en__RG__fos_user_resetting_request:

        // de__RG__fos_user_resetting_request
        if ($pathinfo === '/de/resetting/request') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_de__RG__fos_user_resetting_request;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_locale' => 'de',  '_route' => 'de__RG__fos_user_resetting_request',);
        }
        not_de__RG__fos_user_resetting_request:

        // sl__RG__fos_user_resetting_send_email
        if ($pathinfo === '/sl/resetting/send-email') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_sl__RG__fos_user_resetting_send_email;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_locale' => 'sl',  '_route' => 'sl__RG__fos_user_resetting_send_email',);
        }
        not_sl__RG__fos_user_resetting_send_email:

        // es__RG__fos_user_resetting_send_email
        if ($pathinfo === '/es/resetting/send-email') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_es__RG__fos_user_resetting_send_email;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_locale' => 'es',  '_route' => 'es__RG__fos_user_resetting_send_email',);
        }
        not_es__RG__fos_user_resetting_send_email:

        // rs__RG__fos_user_resetting_send_email
        if ($pathinfo === '/rs/resetting/send-email') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_rs__RG__fos_user_resetting_send_email;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_locale' => 'rs',  '_route' => 'rs__RG__fos_user_resetting_send_email',);
        }
        not_rs__RG__fos_user_resetting_send_email:

        // hr__RG__fos_user_resetting_send_email
        if ($pathinfo === '/hr/resetting/send-email') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_hr__RG__fos_user_resetting_send_email;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_locale' => 'hr',  '_route' => 'hr__RG__fos_user_resetting_send_email',);
        }
        not_hr__RG__fos_user_resetting_send_email:

        // it__RG__fos_user_resetting_send_email
        if ($pathinfo === '/it/resetting/send-email') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_it__RG__fos_user_resetting_send_email;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_locale' => 'it',  '_route' => 'it__RG__fos_user_resetting_send_email',);
        }
        not_it__RG__fos_user_resetting_send_email:

        // ba__RG__fos_user_resetting_send_email
        if ($pathinfo === '/ba/resetting/send-email') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_ba__RG__fos_user_resetting_send_email;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_locale' => 'ba',  '_route' => 'ba__RG__fos_user_resetting_send_email',);
        }
        not_ba__RG__fos_user_resetting_send_email:

        // fr__RG__fos_user_resetting_send_email
        if ($pathinfo === '/fr/resetting/send-email') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_fr__RG__fos_user_resetting_send_email;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_locale' => 'fr',  '_route' => 'fr__RG__fos_user_resetting_send_email',);
        }
        not_fr__RG__fos_user_resetting_send_email:

        // en__RG__fos_user_resetting_send_email
        if ($pathinfo === '/en/resetting/send-email') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_en__RG__fos_user_resetting_send_email;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_locale' => 'en',  '_route' => 'en__RG__fos_user_resetting_send_email',);
        }
        not_en__RG__fos_user_resetting_send_email:

        // de__RG__fos_user_resetting_send_email
        if ($pathinfo === '/de/resetting/send-email') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_de__RG__fos_user_resetting_send_email;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_locale' => 'de',  '_route' => 'de__RG__fos_user_resetting_send_email',);
        }
        not_de__RG__fos_user_resetting_send_email:

        // sl__RG__fos_user_resetting_check_email
        if ($pathinfo === '/sl/resetting/check-email') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_sl__RG__fos_user_resetting_check_email;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_locale' => 'sl',  '_route' => 'sl__RG__fos_user_resetting_check_email',);
        }
        not_sl__RG__fos_user_resetting_check_email:

        // es__RG__fos_user_resetting_check_email
        if ($pathinfo === '/es/resetting/check-email') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_es__RG__fos_user_resetting_check_email;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_locale' => 'es',  '_route' => 'es__RG__fos_user_resetting_check_email',);
        }
        not_es__RG__fos_user_resetting_check_email:

        // rs__RG__fos_user_resetting_check_email
        if ($pathinfo === '/rs/resetting/check-email') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_rs__RG__fos_user_resetting_check_email;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_locale' => 'rs',  '_route' => 'rs__RG__fos_user_resetting_check_email',);
        }
        not_rs__RG__fos_user_resetting_check_email:

        // hr__RG__fos_user_resetting_check_email
        if ($pathinfo === '/hr/resetting/check-email') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_hr__RG__fos_user_resetting_check_email;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_locale' => 'hr',  '_route' => 'hr__RG__fos_user_resetting_check_email',);
        }
        not_hr__RG__fos_user_resetting_check_email:

        // it__RG__fos_user_resetting_check_email
        if ($pathinfo === '/it/resetting/check-email') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_it__RG__fos_user_resetting_check_email;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_locale' => 'it',  '_route' => 'it__RG__fos_user_resetting_check_email',);
        }
        not_it__RG__fos_user_resetting_check_email:

        // ba__RG__fos_user_resetting_check_email
        if ($pathinfo === '/ba/resetting/check-email') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_ba__RG__fos_user_resetting_check_email;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_locale' => 'ba',  '_route' => 'ba__RG__fos_user_resetting_check_email',);
        }
        not_ba__RG__fos_user_resetting_check_email:

        // fr__RG__fos_user_resetting_check_email
        if ($pathinfo === '/fr/resetting/check-email') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_fr__RG__fos_user_resetting_check_email;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_locale' => 'fr',  '_route' => 'fr__RG__fos_user_resetting_check_email',);
        }
        not_fr__RG__fos_user_resetting_check_email:

        // en__RG__fos_user_resetting_check_email
        if ($pathinfo === '/en/resetting/check-email') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_en__RG__fos_user_resetting_check_email;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_locale' => 'en',  '_route' => 'en__RG__fos_user_resetting_check_email',);
        }
        not_en__RG__fos_user_resetting_check_email:

        // de__RG__fos_user_resetting_check_email
        if ($pathinfo === '/de/resetting/check-email') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_de__RG__fos_user_resetting_check_email;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_locale' => 'de',  '_route' => 'de__RG__fos_user_resetting_check_email',);
        }
        not_de__RG__fos_user_resetting_check_email:

        // sl__RG__fos_user_resetting_reset
        if (0 === strpos($pathinfo, '/sl/resetting/reset') && preg_match('#^/sl/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_sl__RG__fos_user_resetting_reset;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sl__RG__fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',  '_locale' => 'sl',));
        }
        not_sl__RG__fos_user_resetting_reset:

        // es__RG__fos_user_resetting_reset
        if (0 === strpos($pathinfo, '/es/resetting/reset') && preg_match('#^/es/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_es__RG__fos_user_resetting_reset;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'es__RG__fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',  '_locale' => 'es',));
        }
        not_es__RG__fos_user_resetting_reset:

        // rs__RG__fos_user_resetting_reset
        if (0 === strpos($pathinfo, '/rs/resetting/reset') && preg_match('#^/rs/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_rs__RG__fos_user_resetting_reset;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'rs__RG__fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',  '_locale' => 'rs',));
        }
        not_rs__RG__fos_user_resetting_reset:

        // hr__RG__fos_user_resetting_reset
        if (0 === strpos($pathinfo, '/hr/resetting/reset') && preg_match('#^/hr/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_hr__RG__fos_user_resetting_reset;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'hr__RG__fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',  '_locale' => 'hr',));
        }
        not_hr__RG__fos_user_resetting_reset:

        // it__RG__fos_user_resetting_reset
        if (0 === strpos($pathinfo, '/it/resetting/reset') && preg_match('#^/it/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_it__RG__fos_user_resetting_reset;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'it__RG__fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',  '_locale' => 'it',));
        }
        not_it__RG__fos_user_resetting_reset:

        // ba__RG__fos_user_resetting_reset
        if (0 === strpos($pathinfo, '/ba/resetting/reset') && preg_match('#^/ba/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_ba__RG__fos_user_resetting_reset;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ba__RG__fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',  '_locale' => 'ba',));
        }
        not_ba__RG__fos_user_resetting_reset:

        // fr__RG__fos_user_resetting_reset
        if (0 === strpos($pathinfo, '/fr/resetting/reset') && preg_match('#^/fr/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fr__RG__fos_user_resetting_reset;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',  '_locale' => 'fr',));
        }
        not_fr__RG__fos_user_resetting_reset:

        // en__RG__fos_user_resetting_reset
        if (0 === strpos($pathinfo, '/en/resetting/reset') && preg_match('#^/en/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_en__RG__fos_user_resetting_reset;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',  '_locale' => 'en',));
        }
        not_en__RG__fos_user_resetting_reset:

        // de__RG__fos_user_resetting_reset
        if (0 === strpos($pathinfo, '/de/resetting/reset') && preg_match('#^/de/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_de__RG__fos_user_resetting_reset;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'de__RG__fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',  '_locale' => 'de',));
        }
        not_de__RG__fos_user_resetting_reset:

        // sl__RG__fos_user_change_password
        if ($pathinfo === '/sl/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_sl__RG__fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_locale' => 'sl',  '_route' => 'sl__RG__fos_user_change_password',);
        }
        not_sl__RG__fos_user_change_password:

        // es__RG__fos_user_change_password
        if ($pathinfo === '/es/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_es__RG__fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_locale' => 'es',  '_route' => 'es__RG__fos_user_change_password',);
        }
        not_es__RG__fos_user_change_password:

        // rs__RG__fos_user_change_password
        if ($pathinfo === '/rs/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_rs__RG__fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_locale' => 'rs',  '_route' => 'rs__RG__fos_user_change_password',);
        }
        not_rs__RG__fos_user_change_password:

        // hr__RG__fos_user_change_password
        if ($pathinfo === '/hr/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_hr__RG__fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_locale' => 'hr',  '_route' => 'hr__RG__fos_user_change_password',);
        }
        not_hr__RG__fos_user_change_password:

        // it__RG__fos_user_change_password
        if ($pathinfo === '/it/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_it__RG__fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_locale' => 'it',  '_route' => 'it__RG__fos_user_change_password',);
        }
        not_it__RG__fos_user_change_password:

        // ba__RG__fos_user_change_password
        if ($pathinfo === '/ba/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_ba__RG__fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_locale' => 'ba',  '_route' => 'ba__RG__fos_user_change_password',);
        }
        not_ba__RG__fos_user_change_password:

        // fr__RG__fos_user_change_password
        if ($pathinfo === '/fr/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fr__RG__fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_locale' => 'fr',  '_route' => 'fr__RG__fos_user_change_password',);
        }
        not_fr__RG__fos_user_change_password:

        // en__RG__fos_user_change_password
        if ($pathinfo === '/en/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_en__RG__fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_locale' => 'en',  '_route' => 'en__RG__fos_user_change_password',);
        }
        not_en__RG__fos_user_change_password:

        // de__RG__fos_user_change_password
        if ($pathinfo === '/de/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_de__RG__fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_locale' => 'de',  '_route' => 'de__RG__fos_user_change_password',);
        }
        not_de__RG__fos_user_change_password:

        // _video
        if ($pathinfo === '/video') {
            return array (  '_controller' => 'royaltransfer\\staticBundle\\Controller\\DefaultController::videoAction',  '_route' => '_video',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
