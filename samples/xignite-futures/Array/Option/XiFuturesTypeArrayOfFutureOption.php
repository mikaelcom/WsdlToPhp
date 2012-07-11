<?php
/**
 * Class file for XiFuturesTypeArrayOfFutureOption
 * @date 08/07/2012
 */
/**
 * Class XiFuturesTypeArrayOfFutureOption
 * @date 08/07/2012
 */
class XiFuturesTypeArrayOfFutureOption extends XiFuturesWsdlClass
{
	/**
	 * The FutureOption
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiFuturesTypeFutureOption
	 */
	public $FutureOption;
	/**
	 * Constructor
	 * @param XiFuturesTypeFutureOption FutureOption
	 * @return XiFuturesTypeArrayOfFutureOption
	 */
	public function __construct($_FutureOption = null)
	{
		parent::__construct(array('FutureOption'=>$_FutureOption));
	}
	/**
	 * Set FutureOption
	 * @param FutureOption FutureOption
	 * @return FutureOption
	 */
	public function setFutureOption($_FutureOption)
	{
		return ($this->FutureOption = $_FutureOption);
	}
	/**
	 * Get FutureOption
	 * @return XiFuturesTypeFutureOption
	 */
	public function getFutureOption()
	{
		return $this->FutureOption;
	}
	/**
	 * Returns the current element
	 * @see XiFuturesWsdlClass::current()
	 * @return XiFuturesTypeFutureOption
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiFuturesWsdlClass::item()
	 * @param int
	 * @return XiFuturesTypeFutureOption
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiFuturesWsdlClass::first()
	 * @return XiFuturesTypeFutureOption
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiFuturesWsdlClass::last()
	 * @return XiFuturesTypeFutureOption
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiFuturesWsdlClass::offsetGet()
	 * @param int
	 * @return XiFuturesTypeFutureOption
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'FutureOption'
	 */
	public function getAttributeName()
	{
		return 'FutureOption';
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