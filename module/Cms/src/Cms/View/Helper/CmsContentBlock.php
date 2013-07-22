<?php
/**
 * ZF2 Buch Kapitel 21
 * 
 * Das Buch "Zend Framework 2 - Das Praxisbuch"
 * von Ralf Eggert ist im Galileo-Computing Verlag erschienen. 
 * ISBN 978-3-8362-2610-3
 * 
 * @package    Cms
 * @author     Ralf Eggert <r.eggert@travello.de>
 * @copyright  Alle Listings sind urheberrechtlich geschützt!
 * @link       http://www.zendframeworkbuch.de/ und http://www.galileocomputing.de/3460
 */

/**
 * namespace definition and usage
 */
namespace Cms\View\Helper;

use Cms\Service\CmsServiceInterface;
use Zend\View\Helper\AbstractHelper;

/**
 * Cms content block
 * 
 * Provides cms content block output and manipulation
 * 
 * @package    Cms
 */
class CmsContentBlock extends AbstractHelper
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
     * Returns itself
     *
     * @return Cms 
     */
    public function __invoke($block)
    {
        // return content
        return $this->getCmsService()->loadBlock($block);
    }
}
