<?php
namespace JWeiland\Pfflexslider\Controller;

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

use JWeiland\Pfflexslider\Domain\Repository\SliderRepository;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

/**
 * SliderController
 */
class SliderController extends ActionController
{
    /**
     * sliderRepository
     *
     * @var \JWeiland\Pfflexslider\Domain\Repository\SliderRepository
     */
    protected $sliderRepository;

    /**
     * inject sliderRepository
     *
     * @param SliderRepository $sliderRepository
     * @return void
     */
    public function injectSliderRepository(SliderRepository $sliderRepository)
    {
        $this->sliderRepository = $sliderRepository;
    }

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $sliders = $this->sliderRepository->findAll();
        $this->view->assign('sliders', $sliders);
    }
}
