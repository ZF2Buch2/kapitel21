<?php
/**
 * ZF2 Buch Kapitel 21
 * 
 * Das Buch "Zend Framework 2 - Das Praxisbuch"
 * von Ralf Eggert ist im Galileo-Computing Verlag erschienen. 
 * ISBN 978-3-8362-2610-3
 * 
 * @package    Pizza
 * @author     Ralf Eggert <r.eggert@travello.de>
 * @copyright  Alle Listings sind urheberrechtlich geschützt!
 * @link       http://www.zendframeworkbuch.de/ und http://www.galileocomputing.de/3460
 */

/**
 * namespace definition and usage
 */
namespace Pizza\Table;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * Crust table factory
 * 
 * Generates the Crust table object
 * 
 * @package    Pizza
 */
class CrustTableFactory implements FactoryInterface
{
    /**
     * Create Service Factory
     * 
     * @param ServiceLocatorInterface $serviceLocator
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $adapter = $serviceLocator->get('Zend\Db\Adapter\Adapter');
        $entity  = $serviceLocator->get('Pizza\Entity\Crust');
        $table   = new CrustTable($adapter, $entity);
        return $table;
    }
}
