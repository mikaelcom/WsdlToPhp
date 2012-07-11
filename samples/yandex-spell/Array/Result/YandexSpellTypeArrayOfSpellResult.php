<?php
/**
 * Class file for YandexSpellTypeArrayOfSpellResult
 * @date 10/07/2012
 */
/**
 * Class YandexSpellTypeArrayOfSpellResult
 * @date 10/07/2012
 */
class YandexSpellTypeArrayOfSpellResult extends YandexSpellWsdlClass
{
	/**
	 * The SpellResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var YandexSpellTypeSpellResult
	 */
	public $SpellResult;
	/**
	 * Constructor
	 * @param YandexSpellTypeSpellResult SpellResult
	 * @return YandexSpellTypeArrayOfSpellResult
	 */
	public function __construct($_SpellResult = null)
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
	 * Returns the current element
	 * @see YandexSpellWsdlClass::current()
	 * @return YandexSpellTypeSpellResult
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see YandexSpellWsdlClass::item()
	 * @param int
	 * @return YandexSpellTypeSpellResult
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see YandexSpellWsdlClass::first()
	 * @return YandexSpellTypeSpellResult
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see YandexSpellWsdlClass::last()
	 * @return YandexSpellTypeSpellResult
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see YandexSpellWsdlClass::offsetGet()
	 * @param int
	 * @return YandexSpellTypeSpellResult
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'SpellResult'
	 */
	public function getAttributeName()
	{
		return 'SpellResult';
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