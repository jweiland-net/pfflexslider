<?php

declare(strict_types=1);

/*
 * This file is part of the package jweiland/pfflexslider.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace JWeiland\Pfflexslider\Controller;

use JWeiland\Pfflexslider\Domain\Repository\SliderRepository;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

/**
 * Controller to collect the slides and send them to view
 */
class SliderController extends ActionController
{
    /**
     * @var SliderRepository
     */
    protected $sliderRepository;

    public function injectSliderRepository(SliderRepository $sliderRepository)
    {
        $this->sliderRepository = $sliderRepository;
    }

    public function listAction(): void
    {
        $sliders = $this->sliderRepository->findAll();
        $this->view->assign('sliders', $sliders);
    }
}
