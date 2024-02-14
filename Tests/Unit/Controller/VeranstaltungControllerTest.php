<?php

declare(strict_types=1);

namespace Lb\Veranstaltungen\Tests\Unit\Controller;

use PHPUnit\Framework\MockObject\MockObject;
use TYPO3\TestingFramework\Core\AccessibleObjectInterface;
use TYPO3\TestingFramework\Core\Unit\UnitTestCase;
use TYPO3Fluid\Fluid\View\ViewInterface;

/**
 * Test case
 *
 * @author Lukas Borst <entwicklerborst@gmail.com>
 */
class VeranstaltungControllerTest extends UnitTestCase
{
    /**
     * @var \Lb\Veranstaltungen\Controller\VeranstaltungController|MockObject|AccessibleObjectInterface
     */
    protected $subject;

    protected function setUp(): void
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder($this->buildAccessibleProxy(\Lb\Veranstaltungen\Controller\VeranstaltungController::class))
            ->onlyMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown(): void
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllVeranstaltungsFromRepositoryAndAssignsThemToView(): void
    {
        $allVeranstaltungs = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $veranstaltungRepository = $this->getMockBuilder(\Lb\Veranstaltungen\Domain\Repository\VeranstaltungRepository::class)
            ->onlyMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $veranstaltungRepository->expects(self::once())->method('findAll')->will(self::returnValue($allVeranstaltungs));
        $this->subject->_set('veranstaltungRepository', $veranstaltungRepository);

        $view = $this->getMockBuilder(ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('veranstaltungs', $allVeranstaltungs);
        $this->subject->_set('view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenVeranstaltungToView(): void
    {
        $veranstaltung = new \Lb\Veranstaltungen\Domain\Model\Veranstaltung();

        $view = $this->getMockBuilder(ViewInterface::class)->getMock();
        $this->subject->_set('view', $view);
        $view->expects(self::once())->method('assign')->with('veranstaltung', $veranstaltung);

        $this->subject->showAction($veranstaltung);
    }
}
