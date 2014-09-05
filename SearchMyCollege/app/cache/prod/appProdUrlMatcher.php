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

        // college_search_college_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_college_search_college_homepage;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'college_search_college_homepage');
            }

            return array (  '_controller' => 'CollegeSearch\\CollegeBundle\\Controller\\HomePageController::indexAction',  '_route' => 'college_search_college_homepage',);
        }
        not_college_search_college_homepage:

        // college_search_college_aboutpage
        if ($pathinfo === '/about') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_college_search_college_aboutpage;
            }

            return array (  '_controller' => 'CollegeSearch\\CollegeBundle\\Controller\\HomePageController::aboutAction',  '_route' => 'college_search_college_aboutpage',);
        }
        not_college_search_college_aboutpage:

        // college_search_college_contactpage
        if ($pathinfo === '/contact') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_college_search_college_contactpage;
            }

            return array (  '_controller' => 'CollegeSearch\\CollegeBundle\\Controller\\HomePageController::contactAction',  '_route' => 'college_search_college_contactpage',);
        }
        not_college_search_college_contactpage:

        // college_search_college_collegeList_showListpage
        if (preg_match('#^/(?P<category>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_college_search_college_collegeList_showListpage;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'college_search_college_collegeList_showListpage')), array (  '_controller' => 'CollegeSearch\\CollegeBundle\\Controller\\CollegeListPageController::showAction',));
        }
        not_college_search_college_collegeList_showListpage:

        // college_search_college_collegeList_collegeDetailpage
        if (preg_match('#^/(?P<category>[^/]++)/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_college_search_college_collegeList_collegeDetailpage;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'college_search_college_collegeList_collegeDetailpage')), array (  '_controller' => 'CollegeSearch\\CollegeBundle\\Controller\\CollegeListPageController::collegeDetailAction',));
        }
        not_college_search_college_collegeList_collegeDetailpage:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
