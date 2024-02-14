<?php

declare(strict_types=1);

namespace Lb\Veranstaltungen\Domain\Model;


/**
 * This file is part of the "Veranstaltungen" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2024 Lukas Borst <entwicklerborst@gmail.com>
 */

/**
 * Veranstaltung
 */
class Veranstaltung extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * title
     *
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $title = null;

    /**
     * descritpion
     *
     * @var string
     */
    protected $descritpion = null;

    /**
     * organisator
     *
     * @var \Lb\Veranstaltungen\Domain\Model\Organisator
     */
    protected $organisator = null;

    /**
     * Returns the title
     *
     * @return string
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
     * Returns the descritpion
     *
     * @return string
     */
    public function getDescritpion()
    {
        return $this->descritpion;
    }

    /**
     * Sets the descritpion
     *
     * @param string $descritpion
     * @return void
     */
    public function setDescritpion(string $descritpion)
    {
        $this->descritpion = $descritpion;
    }

    /**
     * Returns the organisator
     *
     * @return \Lb\Veranstaltungen\Domain\Model\Organisator
     */
    public function getOrganisator()
    {
        return $this->organisator;
    }

    /**
     * Sets the organisator
     *
     * @param \Lb\Veranstaltungen\Domain\Model\Organisator $organisator
     * @return void
     */
    public function setOrganisator(\Lb\Veranstaltungen\Domain\Model\Organisator $organisator)
    {
        $this->organisator = $organisator;
    }
}
