<?php

declare(strict_types=1);

namespace Lb\Veranstaltungen\Controller;


/**
 * This file is part of the "Veranstaltungen" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2024 Lukas Borst <entwicklerborst@gmail.com>
 */

/**
 * VeranstaltungController
 */
class VeranstaltungController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * veranstaltungRepository
     *
     * @var \Lb\Veranstaltungen\Domain\Repository\VeranstaltungRepository
     */
    protected $veranstaltungRepository = null;

    /**
     * @param \Lb\Veranstaltungen\Domain\Repository\VeranstaltungRepository $veranstaltungRepository
     */
    public function injectVeranstaltungRepository(\Lb\Veranstaltungen\Domain\Repository\VeranstaltungRepository $veranstaltungRepository)
    {
        $this->veranstaltungRepository = $veranstaltungRepository;
    }

    /**
     * action list
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function listAction(): \Psr\Http\Message\ResponseInterface
    {
        $veranstaltungs = $this->veranstaltungRepository->findAll();
        $this->view->assign('veranstaltungs', $veranstaltungs);
        return $this->htmlResponse();
    }

    /**
     * action show
     *
     * @param \Lb\Veranstaltungen\Domain\Model\Veranstaltung $veranstaltung
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function showAction(\Lb\Veranstaltungen\Domain\Model\Veranstaltung $veranstaltung): \Psr\Http\Message\ResponseInterface
    {
        $this->view->assign('veranstaltung', $veranstaltung);
        return $this->htmlResponse();
    }
}
