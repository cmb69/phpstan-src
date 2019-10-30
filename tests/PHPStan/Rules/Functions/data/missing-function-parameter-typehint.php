<?php

namespace
{
	/**
	 * @param int $a
	 * @param $b
	 */
	function globalFunction($a, $b, $c): bool
	{
		$closure = function($a, $b, $c) {

		};

		return false;
	}
}

namespace MissingFunctionParameterTypehint
{
	/**
	 * @param $d
	 */
	function namespacedFunction($d, bool $e): int {
		return 9;
	};

	/**
	 * @param array|int[] $a
	 */
	function intIterableTypehint($a)
	{

	}

	function missingIterableTypehint(array $a)
	{

	}

	/**
	 * @param array $a
	 */
	function missingPhpDocIterableTypehint(array $a)
	{

	}

	/**
	 * @param mixed[] $a
	 */
	function explicitMixedArrayTypehint(array $a)
	{

	}

	/**
	 * @param \stdClass|array|int|null $a
	 */
	function unionTypeWithUnknownArrayValueTypehint($a)
	{

	}

	/**
	 * @param iterable<int>&\Traversable $a
	 */
	function iterableIntersectionTypehint($a)
	{

	}

	/**
	 * @param iterable<mixed>&\Traversable $a
	 */
	function iterableIntersectionTypehint2($a)
	{

	}

	/**
	 * @param \PDOStatement<int> $a
	 */
	function iterableIntersectionTypehint3($a)
	{

	}

	/**
	 * @param \PDOStatement<mixed> $a
	 */
	function iterableIntersectionTypehint4($a)
	{

	}

}
