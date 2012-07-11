<?php
/**
 * Class file for XiFuturesTypeArrayOfNameResult
 * @date 08/07/2012
 */
/**
 * Class XiFuturesTypeArrayOfNameResult
 * @date 08/07/2012
 */
class XiFuturesTypeArrayOfNameResult extends XiFuturesWsdlClass
{
	/**
	 * The NameResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiFuturesTypeNameResult
	 */
	public $NameResult;
	/**
	 * Constructor
	 * @param XiFuturesTypeNameResult NameResult
	 * @return XiFuturesTypeArrayOfNameResult
	 */
	public function __construct($_NameResult = null)
	{
		parent::__construct(array('NameResult'=>$_NameResult));
	}
	/**
	 * Set NameResult
	 * @param NameResult NameResult
	 * @return NameResult
	 */
	public function setNameResult($_NameResult)
	{
		return ($this->NameResult = $_NameResult);
	}
	/**
	 * Get NameResult
	 * @return XiFuturesTypeNameResult
	 */
	public function getNameResult()
	{
		return $this->NameResult;
	}
	/**
	 * Returns the current element
	 * @see XiFuturesWsdlClass::current()
	 * @return XiFuturesTypeNameResult
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiFuturesWsdlClass::item()
	 * @param int
	 * @return XiFuturesTypeNameResult
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiFuturesWsdlClass::first()
	 * @return XiFuturesTypeNameResult
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiFuturesWsdlClass::last()
	 * @return XiFuturesTypeNameResult
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiFuturesWsdlClass::offsetGet()
	 * @param int
	 * @return XiFuturesTypeNameResult
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'NameResult'
	 */
	public function getAttributeName()
	{
		return 'NameResult';
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