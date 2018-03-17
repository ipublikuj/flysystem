<?php
/**
 * InvalidAdapterException.php
 *
 * @copyright      More in license.md
 * @license        https://www.ipublikuj.eu
 * @author         Adam Kadlec https://www.ipublikuj.eu
 * @package        iPublikuj:Flysystem!
 * @subpackage     Exceptions
 * @since          1.0.0
 *
 * @date           19.04.16
 */

declare(strict_types = 1);

namespace IPub\Flysystem\Exceptions;

class InvalidAdapterException extends \InvalidArgumentException implements IException
{
}
