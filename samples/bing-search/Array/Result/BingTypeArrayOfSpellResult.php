<?php
/**
 * Class file for BingTypeArrayOfSpellResult
 * @date 02/07/2012
 */
/**
 * Class BingTypeArrayOfSpellResult
 * @date 02/07/2012
 */
class BingTypeArrayOfSpellResult extends BingWsdlClass
{
	/**
	 * The SpellResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var BingTypeSpellResult
	 */
	public $SpellResult;
	/**
	 * Constructor
	 * @param BingTypeSpellResult SpellResult
	 * @return BingTypeArrayOfSpellResult
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
	 * @return BingTypeSpellResult
	 */
	public function getSpellResult()
	{
		return $this->SpellResult;
	}
	/**
	 * Returns the current element
	 * @see BingWsdlClass::current()
	 * @return BingTypeSpellResult
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see BingWsdlClass::item()
	 * @param int
	 * @return BingTypeSpellResult
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see BingWsdlClass::first()
	 * @return BingTypeSpellResult
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see BingWsdlClass::last()
	 * @return BingTypeSpellResult
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see BingWsdlClass::offsetGet()
	 * @param int
	 * @return BingTypeSpellResult
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