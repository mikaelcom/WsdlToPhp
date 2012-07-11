<?php
/**
 * Class file for XiFundsTypeArrayOfDividend
 * @date 08/07/2012
 */
/**
 * Class XiFundsTypeArrayOfDividend
 * @date 08/07/2012
 */
class XiFundsTypeArrayOfDividend extends XiFundsWsdlClass
{
	/**
	 * The Dividend
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiFundsTypeDividend
	 */
	public $Dividend;
	/**
	 * Constructor
	 * @param XiFundsTypeDividend Dividend
	 * @return XiFundsTypeArrayOfDividend
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
	 * @return XiFundsTypeDividend
	 */
	public function getDividend()
	{
		return $this->Dividend;
	}
	/**
	 * Returns the current element
	 * @see XiFundsWsdlClass::current()
	 * @return XiFundsTypeDividend
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiFundsWsdlClass::item()
	 * @param int
	 * @return XiFundsTypeDividend
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiFundsWsdlClass::first()
	 * @return XiFundsTypeDividend
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiFundsWsdlClass::last()
	 * @return XiFundsTypeDividend
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiFundsWsdlClass::offsetGet()
	 * @param int
	 * @return XiFundsTypeDividend
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