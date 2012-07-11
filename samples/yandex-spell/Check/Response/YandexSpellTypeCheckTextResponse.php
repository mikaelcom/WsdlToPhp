<?php
/**
 * Class file for YandexSpellTypeCheckTextResponse
 * @date 10/07/2012
 */
/**
 * Class YandexSpellTypeCheckTextResponse
 * @date 10/07/2012
 */
class YandexSpellTypeCheckTextResponse extends YandexSpellWsdlClass
{
	/**
	 * The SpellResult
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var YandexSpellTypeSpellResult
	 */
	public $SpellResult;
	/**
	 * Constructor
	 * @param YandexSpellTypeSpellResult SpellResult
	 * @return YandexSpellTypeCheckTextResponse
	 */
	public function __construct($_SpellResult)
	{
		parent::__construct(array('SpellResult'=>$_SpellResult));
	}
	/**
	 * Set SpellResult
	 * @param SpellResult SpellResult
	 * @return SpellResult
	 */
	public function setSpellResult($_SpellResult)
	{
		return ($this->SpellResult = $_SpellResult);
	}
	/**
	 * Get SpellResult
	 * @return YandexSpellTypeSpellResult
	 */
	public function getSpellResult()
	{
		return $this->SpellResult;
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