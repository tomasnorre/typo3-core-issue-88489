<?php
namespace tomasnorre\typo3CoreIssue88489\Tests\Functional;

use Nimut\TestingFramework\TestCase\FunctionalTestCase;

class DummyTest extends FunctionalTestCase {

    /**
     * @var array
     */
    protected $coreExtensionsToLoad = ['cms', 'core', 'frontend', 'version', 'lang', 'extensionmanager', 'fluid'];

    /**
     * @var array
     */
    protected $testExtensionsToLoad = ['typo3conf/ext/typo3-core-issue-88489'];

    public function setUp()
    {
        parent::setUp();
    }

    /**
     * @test
     */
    public function dummyTest()
    {
        $this->assertTrue(true);
    }

}
