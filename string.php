<?php
declare(strict_types = 1);

class Str {
	// ---- class constructor ----
	public function __construct(){}

	// ---- class destructore ----
	public function __destruct(){}

	// ---- slice_before ----
	// slice haystack before the needle
	public function slice_before(string $haystack, string $needle) : string {
		return $this->slice($haystack, $needle, true);
	}

	// ---- slice_after ----
	// slice haystack after the needle
	public function slice_after(string $haystack, string $needle) : string {
		return $this->slice($haystack, $needle, false);
	}

	// ---- slice_between ----
	// slice haystack between a start and end needle
	public function slice_between(string $haystack, string $start, string $end) : string {
		$before = strpos($haystack, $start);
		$after = strpos($haystack, $end, $before + 1);
		if ($before === false || $after === false) {
			return $haystack;
		}
		return substr($haystack, $before + strlen($start), $after - $before - strlen($start));
	}

	// ---- slice ----
	// slice a string
	private function slice(string $haystack, string $needle, bool $slice_type) : string {
		$result = strstr($haystack, $needle, $slice_type);
		if ($result === false) {
			return $haystack;
		}
		if (!$slice_type) {
			$result = str_replace($needle, '', $result);
		}
		return $result;
	}
}
