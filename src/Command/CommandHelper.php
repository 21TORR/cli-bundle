<?php declare(strict_types=1);

namespace Torr\Cli\Command;

use Symfony\Component\HttpKernel\Profiler\Profiler;

/**
 * Helper class that eases implementation when building commands.
 *
 * @final
 */
class CommandHelper
{
	private ?Profiler $profiler;

	/**
	 */
	public function __construct (?Profiler $profiler)
	{
		$this->profiler = $profiler;
	}

	/**
	 */
	public function startLongRunningCommand () : void
	{
		$this->disableProfiler();

		// increase PHP limits
		set_time_limit(0);
		ini_set("memory_limit", "-1");
	}

	/**
	 * Disables the symfony profiler
	 */
	public function disableProfiler () : void
	{
		$this->profiler?->disable();
	}
}
