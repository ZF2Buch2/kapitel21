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
namespace Cms\Service;

/**
 * Cms Service
 * 
 * @package    Cms
 */
class CmsService implements CmsServiceInterface
{
    /**
     * Load content block
     *
     * @param string $block
     * @return string
     */
    public function loadBlock($block)
    {
        // build file name
        $fileName = LUIGI_ROOT . '/data/cms/' . $block . '.html';
        
        // check file
        if (!file_exists($fileName)) {
            return '';
        }
        
        // get content
        $content = implode('', file($fileName));
        
        // return content
        return $content;
    }
}
