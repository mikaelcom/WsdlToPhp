<?php
/**
 * Class file for YandexSpellTypeSpellResult
 * @date 10/07/2012
 */
/**
 * Class YandexSpellTypeSpellResult
 * @date 10/07/2012
 */
class YandexSpellTypeSpellResult extends YandexSpellWsdlClass
{
	/**
	 * The error
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var YandexSpellTypeSpellError
	 */
	public $error;
	/**
	 * Constructor
	 * @param YandexSpellTypeSpellError error
	 * @return YandexSpellTypeSpellResult
	 */
	public function __construct($_error = null)
	{
		parent::__construct(array('error'=>$_error));
	}
	/**
	 * Set error
	 * @param SpellError error
	 * @return SpellError
	 */
	public function setError($_error)
	{
		return ($this->error = $_error);
	}
	/**
	 * Get error
	 * @return YandexSpellTypeSpellError
	 */
	public function getError()
	{
		return $this->error;
	}
	/**
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>