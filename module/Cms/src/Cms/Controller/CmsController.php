<?php
/**
 * ZF2 Buch Kapitel 21
 * 
 * Das Buch "Zend Framework 2 - Von den Grundlagen bis zur fertigen Anwendung"
 * von Ralf Eggert ist im Addison-Wesley Verlag erschienen. 
 * ISBN 978-3-8273-2994-3
 * 
 * @package    Cms
 * @author     Ralf Eggert <r.eggert@travello.de>
 * @copyright  Alle Listings sind urheberrechtlich geschützt!
 * @link       http://www.zendframeworkbuch.de/ und http://www.awl.de/2994
 */

/**
 * namespace definition and usage
 */
namespace Cms\Controller;

use Cms\Service\CmsServiceInterface;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

/**
 * Cms controller
 * 
 * Handles the cms pages
 * 
 * @package    Cms
 */
class CmsController extends AbstractActionController
{
    /**
     * @var CmsServiceInterface
     */
    protected $cmsService;

    /**
     * Constructor
     *
     * @param  CmsServiceInterface $cmsService
     */
    public function __construct(CmsServiceInterface $cmsService)
    {
        $this->setCmsService($cmsService);
    }

    /**
     * Sets comment cmsService
     *
     * @param  CmsServiceInterface $cmsService
     * @return AbstractHelper
     */
    public function setCmsService(CmsServiceInterface $cmsService = null)
    {
        $this->cmsService = $cmsService;
        return $this;
    }
    
    /**
     * Returns CmsService
     *
     * @return CmsServiceInterface
     */
    public function getCmsService()
    {
        return $this->cmsService;
    }
    
    /**
     * Handle cms page
     */
    public function indexAction()
    {
        // Redirect to home
        return $this->redirect()->toRoute('home');
    }
    
    /**
     * Handle save page
     */
    public function saveAction()
    {
        // Redirect to home
        return $this->redirect()->toRoute('home');
    }
}
