<?php
/**
 * @copyright Copyright (c) 2013 2amigOS! Consulting Group LLC
 * @link http://2amigos.us
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */
namespace dosamigos\arrayquery\conditions;


/**
 * NotLike checks if value is not within the data searched.
 *
 * @author Antonio Ramirez <amigo.cobos@gmail.com>
 * @link http://www.ramirezcobos.com/
 * @link http://www.2amigos.us/
 * @package dosamigos\arrayquery\conditions
 */
class NotLike extends Like
{
	/**
	 * @inheritdoc
	 */
	public function matches($data)
	{
		return !parent::matches($data);
	}
} 