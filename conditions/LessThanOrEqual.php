<?php
/**
 * @copyright Copyright (c) 2013 2amigOS! Consulting Group LLC
 * @link http://2amigos.us
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */
namespace dosamigos\arrayquery\conditions;


/**
 * LessThanOrEqual checks if value is less than or equal to the data searched.
 *
 * @author Antonio Ramirez <amigo.cobos@gmail.com>
 * @link http://www.ramirezcobos.com/
 * @link http://www.2amigos.us/
 * @package dosamigos\arrayquery\conditions
 */
class LessThanOrEqual extends Condition
{

	/**
	 * Returns [[GreaterThanOrEqual]] condition
	 * @return GreaterThanOrEqual
	 */
	public function reverse()
	{
		return new GreaterThanOrEqual($this->value);
	}

	/**
	 * @inheritdoc
	 */
	public function matches($data)
	{
		$gt = new GreaterThan($this->value);
		$e = new Equal($this->value);

		return $gt->matches($data) || $e->matches($data);
	}

} 