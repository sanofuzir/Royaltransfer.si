<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/admin')) {
            // royaltransfer_admin_default_index
            if ($pathinfo === '/admin') {
                return array (  '_controller' => 'royaltransfer\\AdminBundle\\Controller\\DefaultController::indexAction',  '_route' => 'royaltransfer_admin_default_index',);
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

        }

        // _home
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_home');
            }

            return array (  '_controller' => 'royaltransfer\\staticBundle\\Controller\\DefaultController::indexAction',  '_route' => '_home',);
        }

        // _about
        if ($pathinfo === '/About') {
            return array (  '_controller' => 'royaltransfer\\staticBundle\\Controller\\DefaultController::aboutAction',  '_route' => '_about',);
        }

        // _tours
        if ($pathinfo === '/Tours') {
            return array (  '_controller' => 'royaltransfer\\staticBundle\\Controller\\DefaultController::toursAction',  '_route' => '_tours',);
        }

        // _news
        if ($pathinfo === '/News') {
            return array (  '_controller' => 'royaltransfer\\staticBundle\\Controller\\DefaultController::newsAction',  '_route' => '_news',);
        }

        // _galery
        if ($pathinfo === '/Galery') {
            return array (  '_controller' => 'royaltransfer\\staticBundle\\Controller\\DefaultController::galeryAction',  '_route' => '_galery',);
        }

        // _video_galery
        if ($pathinfo === '/Videos') {
            return array (  '_controller' => 'royaltransfer\\staticBundle\\Controller\\DefaultController::videosAction',  '_route' => '_video_galery',);
        }

        // _order
        if ($pathinfo === '/Order') {
            return array (  '_controller' => 'royaltransfer\\staticBundle\\Controller\\DefaultController::orderAction',  '_route' => '_order',);
        }

        // _contact
        if ($pathinfo === '/Contact') {
            return array (  '_controller' => 'royaltransfer\\staticBundle\\Controller\\DefaultController::contactAction',  '_route' => '_contact',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}