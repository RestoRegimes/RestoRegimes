<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
        'rr_restaurant_home' => array (  0 =>   array (    0 => 'page',  ),  1 =>   array (    '_controller' => 'RR\\RestaurantBundle\\Controller\\RestaurantController::indexAction',    'page' => 1,  ),  2 =>   array (    'page' => '\\d*',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d*',      3 => 'page',    ),    1 =>     array (      0 => 'text',      1 => '/Restaurant',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'rr_restaurant_view' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'RR\\RestaurantBundle\\Controller\\RestaurantController::viewAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/Restaurant/restaurant',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'rr_restaurant_view_slug' => array (  0 =>   array (    0 => 'year',    1 => 'slug',    2 => '_format',  ),  1 =>   array (    '_controller' => 'RR\\RestaurantBundle\\Controller\\RestaurantController::viewSlugAction',    'format' => 'html',  ),  2 =>   array (    'year' => '\\d{4}',    '_format' => 'html|xml',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'html|xml',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/\\.]++',      3 => 'slug',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d{4}',      3 => 'year',    ),    3 =>     array (      0 => 'text',      1 => '/Restaurant/restaurant',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'rr_restaurant_add' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'RR\\RestaurantBundle\\Controller\\RestaurantController::addAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Restaurant/add',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'rr_restaurant_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'RR\\RestaurantBundle\\Controller\\RestaurantController::editAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/Restaurant/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'rr_restaurant_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'RR\\RestaurantBundle\\Controller\\RestaurantController::deleteAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/Restaurant/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'rr_core_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'RR\\CoreBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
