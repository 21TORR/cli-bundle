<?php
declare(strict_types=1);

namespace Torr\Cli;

use Symfony\Component\HttpKernel\Bundle\Bundle;

final class CliBundle extends Bundle
{
	/**
	 * @inheritDoc
	 */
	public function getPath () : string
	{
		return \dirname(__DIR__);
	}
}
