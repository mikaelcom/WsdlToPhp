<?php
/**
 * Class file for XiSecurityTypeArrayOfDividend
 * @date 08/07/2012
 */
/**
 * Class XiSecurityTypeArrayOfDividend
 * @date 08/07/2012
 */
class XiSecurityTypeArrayOfDividend extends XiSecurityWsdlClass
{
	/**
	 * The Dividend
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiSecurityTypeDividend
	 */
	public $Dividend;
	/**
	 * Constructor
	 * @param XiSecurityTypeDividend Dividend
	 * @return XiSecurityTypeArrayOfDividend
	 */
	public function __construct($_Dividend = null)
	{
		parent::__construct(array('Dividend'=>$_Dividend));
	}
	/**
	 * Set Dividend
	 * @param Dividend Dividend
	 * @return Dividend
	 */
	public function setDividend($_Dividend)
	{
		return ($this->Dividend = $_Dividend);
	}
	/**
	 * Get Dividend
	 * @return XiSecurityTypeDividend
	 */
	public function getDividend()
	{
		return $this->Dividend;
	}
	/**
	 * Returns the current element
	 * @see XiSecurityWsdlClass::current()
	 * @return XiSecurityTypeDividend
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiSecurityWsdlClass::item()
	 * @param int
	 * @return XiSecurityTypeDividend
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiSecurityWsdlClass::first()
	 * @return XiSecurityTypeDividend
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiSecurityWsdlClass::last()
	 * @return XiSecurityTypeDividend
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiSecurityWsdlClass::offsetGet()
	 * @param int
	 * @return XiSecurityTypeDividend
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'Dividend'
	 */
	public function getAttributeName()
	{
		return 'Dividend';
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