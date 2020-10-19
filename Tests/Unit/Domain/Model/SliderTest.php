<?php

/*
 * This file is part of the package jweiland/pfflexslider.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace JWeiland\Pfflexslider\Tests\Unit\Domain\Model;

use JWeiland\Pfflexslider\Domain\Model\Link;
use JWeiland\Pfflexslider\Domain\Model\Slider;
use Nimut\TestingFramework\TestCase\UnitTestCase;
use TYPO3\CMS\Extbase\Domain\Model\FileReference;
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;

/**
 * Test case
 */
class SliderTest extends UnitTestCase
{
    /**
     * @var Slider
     */
    protected $subject;

    protected function setUp()
    {
        $this->subject = new Slider();
    }

    protected function tearDown()
    {
        unset(
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getImageInitiallyReturnsObjectStorage()
    {
        self::assertEquals(
            new ObjectStorage(),
            $this->subject->getImage()
        );
    }

    /**
     * @test
     */
    public function setImageSetsImage()
    {
        $object = new FileReference();
        $objectStorage = new ObjectStorage();
        $objectStorage->attach($object);
        $this->subject->setImage($objectStorage);

        self::assertSame(
            $objectStorage,
            $this->subject->getImage()
        );
    }

    /**
     * @test
     */
    public function addImageAddsOneImage()
    {
        $objectStorage = new ObjectStorage();
        $this->subject->setImage($objectStorage);

        $object = new FileReference();
        $this->subject->addImage($object);

        $objectStorage->attach($object);

        self::assertSame(
            $objectStorage,
            $this->subject->getImage()
        );
    }

    /**
     * @test
     */
    public function removeImageRemovesOneImage()
    {
        $object = new FileReference();
        $objectStorage = new ObjectStorage();
        $objectStorage->attach($object);
        $this->subject->setImage($objectStorage);

        $this->subject->removeImage($object);
        $objectStorage->detach($object);

        self::assertSame(
            $objectStorage,
            $this->subject->getImage()
        );
    }

    /**
     * @test
     */
    public function getTitleReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getTitle()
        );
    }

    /**
     * @test
     */
    public function setTitleForStringSetsTitle()
    {
        $this->subject->setTitle('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'title',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getLinksInitiallyReturnsObjectStorage()
    {
        self::assertEquals(
            new ObjectStorage(),
            $this->subject->getLinks()
        );
    }

    /**
     * @test
     */
    public function setLinksSetsLinks()
    {
        $object = new Link();
        $objectStorage = new ObjectStorage();
        $objectStorage->attach($object);
        $this->subject->setLinks($objectStorage);

        self::assertSame(
            $objectStorage,
            $this->subject->getLinks()
        );
    }

    /**
     * @test
     */
    public function addLinkAddsOneLink()
    {
        $objectStorage = new ObjectStorage();
        $this->subject->setLinks($objectStorage);

        $object = new Link();
        $this->subject->addLink($object);

        $objectStorage->attach($object);

        self::assertSame(
            $objectStorage,
            $this->subject->getLinks()
        );
    }

    /**
     * @test
     */
    public function removeLinkRemovesOneLink()
    {
        $object = new Link();
        $objectStorage = new ObjectStorage();
        $objectStorage->attach($object);
        $this->subject->setLinks($objectStorage);

        $this->subject->removeLink($object);
        $objectStorage->detach($object);

        self::assertSame(
            $objectStorage,
            $this->subject->getLinks()
        );
    }
}
