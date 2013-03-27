<?php
/**
 * ZF2 Buch Kapitel 21
 * 
 * Das Buch "Zend Framework 2 - Von den Grundlagen bis zur fertigen Anwendung"
 * von Ralf Eggert ist im Addison-Wesley Verlag erschienen. 
 * ISBN 978-3-8273-2994-3
 * 
 * @package    Application
 * @author     Ralf Eggert <r.eggert@travello.de>
 * @copyright  Alle Listings sind urheberrechtlich geschützt!
 * @link       http://www.zendframeworkbuch.de/ und http://www.awl.de/2994
 */

/**
 * namespace definition and usage
 */
namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

/**
 * Listing controller
 * 
 * Shows and executes the listings
 * 
 * @package    Application
 */
class ListingController extends AbstractActionController
{
    /**
     * Redirects to homepage
     */
    public function indexAction()
    {
        return new ViewModel();
    }
    
    /**
     * Show listing 21.01
     */
    public function listing2101Action()
    {
        return new ViewModel();
    }
    
    /**
     * Show listing 21.02
     */
    public function listing2102Action()
    {
        return new ViewModel();
    }
    
    /**
     * Show listing 21.03
     */
    public function listing2103Action()
    {
        return new ViewModel();
    }
    
    /**
     * Show listing 21.04
     */
    public function listing2104Action()
    {
        return new ViewModel();
    }
    
    /**
     * Show listing 21.05
     */
    public function listing2105Action()
    {
        return new ViewModel();
    }
    
    /**
     * Show listing 21.06
     */
    public function listing2106Action()
    {
        return new ViewModel();
    }
    
    /**
     * Show listing 21.07
     */
    public function listing2107Action()
    {
        return new ViewModel();
    }
    
    /**
     * Show listing 21.08
     */
    public function listing2108Action()
    {
        return new ViewModel();
    }
    
    /**
     * Show listing 21.09
     */
    public function listing2109Action()
    {
        return new ViewModel();
    }
}
