<?php
/**
 * Class file for BingTypeArrayOfPhonebookResult
 * @date 02/07/2012
 */
/**
 * Class BingTypeArrayOfPhonebookResult
 * @date 02/07/2012
 */
class BingTypeArrayOfPhonebookResult extends BingWsdlClass
{
	/**
	 * The PhonebookResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var BingTypePhonebookResult
	 */
	public $PhonebookResult;
	/**
	 * Constructor
	 * @param BingTypePhonebookResult PhonebookResult
	 * @return BingTypeArrayOfPhonebookResult
	 */
	public function __construct($_PhonebookResult = null)
	{
		parent::__construct(array('PhonebookResult'=>$_PhonebookResult));
	}
	/**
	 * Set PhonebookResult
	 * @param PhonebookResult PhonebookResult
	 * @return PhonebookResult
	 */
	public function setPhonebookResult($_PhonebookResult)
	{
		return ($this->PhonebookResult = $_PhonebookResult);
	}
	/**
	 * Get PhonebookResult
	 * @return BingTypePhonebookResult
	 */
	public function getPhonebookResult()
	{
		return $this->PhonebookResult;
	}
	/**
	 * Returns the current element
	 * @see BingWsdlClass::current()
	 * @return BingTypePhonebookResult
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see BingWsdlClass::item()
	 * @param int
	 * @return BingTypePhonebookResult
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see BingWsdlClass::first()
	 * @return BingTypePhonebookResult
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see BingWsdlClass::last()
	 * @return BingTypePhonebookResult
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see BingWsdlClass::offsetGet()
	 * @param int
	 * @return BingTypePhonebookResult
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'PhonebookResult'
	 */
	public function getAttributeName()
	{
		return 'PhonebookResult';
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