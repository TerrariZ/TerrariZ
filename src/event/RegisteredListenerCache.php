<?php



declare(strict_types=1);

namespace Terrariz\event;

/**
 * @internal
 */
final class RegisteredListenerCache{

	/**
	 * List of all handlers that will be called for a particular event, ordered by execution order.
	 *
	 * @var RegisteredListener[]
	 * @phpstan-var list<RegisteredListener>
	 */
	public ?array $list = null;
}
