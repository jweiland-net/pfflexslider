<?php
namespace JWeiland\Pfflexslider\Domain\Model;

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

use TYPO3\CMS\Extbase\Domain\Model\FileReference;
use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;

/**
 * Slider
 */
class Slider extends AbstractEntity
{
    /**
     * image
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     */
    protected $image;
    /**
     * title
     *
     * @var string
     */
    protected $title = '';
    /**
     * Links
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\JWeiland\Pfflexslider\Domain\Model\Link>
     * @cascade remove
     */
    protected $links;

    /**
     * __construct
     */
    public function __construct()
    {
        //Do not remove the next line: It would break the functionality
        $this->initStorageObjects();
    }

    /**
     * Initializes all ObjectStorage properties
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     *
     * @return void
     */
    protected function initStorageObjects()
    {
        $this->links = new ObjectStorage();
    }

    /**
     * Returns the image
     *
     * @return FileReference $image
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Sets the image
     *
     * @param FileReference $image
     * @return void
     */
    public function setImage(FileReference $image)
    {
        $this->image = $image;
    }

    /**
     * Returns the title
     *
     * @return string $title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets the title
     *
     * @param string $title
     * @return void
     */
    public function setTitle(string $title)
    {
        $this->title = $title;
    }

    /**
     * Adds a Link
     *
     * @param Link $link
     * @return void
     */
    public function addLink(Link $link)
    {
        $this->links->attach($link);
    }

    /**
     * Removes a Link
     *
     * @param Link $linkToRemove The Link to be removed
     * @return void
     */
    public function removeLink(Link $linkToRemove)
    {
        $this->links->detach($linkToRemove);
    }

    /**
     * Returns the links
     *
     * @return ObjectStorage $links
     */
    public function getLinks()
    {
        return $this->links;
    }

    /**
     * Sets the links
     *
     * @param ObjectStorage $links
     * @return void
     */
    public function setLinks(ObjectStorage $links)
    {
        $this->links = $links;
    }
}
