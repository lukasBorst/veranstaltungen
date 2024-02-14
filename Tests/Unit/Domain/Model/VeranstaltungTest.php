<?php

declare(strict_types=1);

namespace Lb\Veranstaltungen\Tests\Unit\Domain\Model;

use PHPUnit\Framework\MockObject\MockObject;
use TYPO3\TestingFramework\Core\AccessibleObjectInterface;
use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

/**
 * Test case
 *
 * @author Lukas Borst <entwicklerborst@gmail.com>
 */
class VeranstaltungTest extends UnitTestCase
{
    /**
     * @var \Lb\Veranstaltungen\Domain\Model\Veranstaltung|MockObject|AccessibleObjectInterface
     */
    protected $subject;

    protected function setUp(): void
    {
        parent::setUp();

        $this->subject = $this->getAccessibleMock(
            \Lb\Veranstaltungen\Domain\Model\Veranstaltung::class,
            ['dummy']
        );
    }

    protected function tearDown(): void
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getTitleReturnsInitialValueForString(): void
    {
        self::assertSame(
            '',
            $this->subject->getTitle()
        );
    }

    /**
     * @test
     */
    public function setTitleForStringSetsTitle(): void
    {
        $this->subject->setTitle('Conceived at T3CON10');

        self::assertEquals('Conceived at T3CON10', $this->subject->_get('title'));
    }

    /**
     * @test
     */
    public function getDescritpionReturnsInitialValueForString(): void
    {
        self::assertSame(
            '',
            $this->subject->getDescritpion()
        );
    }

    /**
     * @test
     */
    public function setDescritpionForStringSetsDescritpion(): void
    {
        $this->subject->setDescritpion('Conceived at T3CON10');

        self::assertEquals('Conceived at T3CON10', $this->subject->_get('descritpion'));
    }

    /**
     * @test
     */
    public function getOrganisatorReturnsInitialValueForOrganisator(): void
    {
        self::assertEquals(
            null,
            $this->subject->getOrganisator()
        );
    }

    /**
     * @test
     */
    public function setOrganisatorForOrganisatorSetsOrganisator(): void
    {
        $organisatorFixture = new \Lb\Veranstaltungen\Domain\Model\Organisator();
        $this->subject->setOrganisator($organisatorFixture);

        self::assertEquals($organisatorFixture, $this->subject->_get('organisator'));
    }
}
