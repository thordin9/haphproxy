<?php

namespace Jalle19\HaPHProxy\Test;

use Jalle19\HaPHProxy\Parser;
use PHPUnit\Framework\TestCase;
use Jalle19\HaPHProxy\Exception\FileNotFoundException;

require __DIR__ . '/../vendor/autoload.php';

/**
 * Class ParserTest
 * @package Jalle19\HaPHProxy\Test
 */
class ParserTest extends TestCase
{
	public function testFileNotFound()
	{
		$this->expectException(FileNotFoundException::class);
		new Parser('/nonexisting');
	}

	public function testFileFoundButUnreadable()
	{
		$filePath = tempnam(sys_get_temp_dir(), 'foo');

		touch($filePath);
		chmod($filePath, 0000);
		$this->expectException(FileNotFoundException::class);
		new Parser($filePath);
	}


	/**
	 * Tests that existing preface comments in configuration file are parsed correctly
	 */
	public function testParsePreface()
	{
		$parser        = new Parser(__DIR__ . '/../resources/examples/example3.cfg');
		$configuration = $parser->parse();

		$expected = <<<EOD
# Generated with Jalle19/haphproxy
EOD;

		$this->assertEquals($expected, $configuration->getPreface());
	}


	/**
	 * Tests that magic comments are parsed correctly
	 */
	public function testMagicComments()
	{
		$parser        = new Parser(__DIR__ . '/../resources/examples/magic_comments.cfg');
		$configuration = $parser->parse();

		$globalSection = $configuration->getGlobalSection();
		$this->assertNotNull($globalSection);

		$magicComments = $globalSection->getMagicComments();
		$this->assertCount(1, $magicComments);

		$this->assertEquals('this is the magic comment', $magicComments[0]);
	}

}
