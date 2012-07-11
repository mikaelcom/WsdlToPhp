<?php
/**
 * Class file for XiFundsTypeArrayOfFundNAV
 * @date 08/07/2012
 */
/**
 * Class XiFundsTypeArrayOfFundNAV
 * @date 08/07/2012
 */
class XiFundsTypeArrayOfFundNAV extends XiFundsWsdlClass
{
	/**
	 * The FundNAV
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiFundsTypeFundNAV
	 */
	public $FundNAV;
	/**
	 * Constructor
	 * @param XiFundsTypeFundNAV FundNAV
	 * @return XiFundsTypeArrayOfFundNAV
	 */
	public function __construct($_FundNAV = null)
	{
		parent::__construct(array('FundNAV'=>$_FundNAV));
	}
	/**
	 * Set FundNAV
	 * @param FundNAV FundNAV
	 * @return FundNAV
	 */
	public function setFundNAV($_FundNAV)
	{
		return ($this->FundNAV = $_FundNAV);
	}
	/**
	 * Get FundNAV
	 * @return XiFundsTypeFundNAV
	 */
	public function getFundNAV()
	{
		return $this->FundNAV;
	}
	/**
	 * Returns the current element
	 * @see XiFundsWsdlClass::current()
	 * @return XiFundsTypeFundNAV
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiFundsWsdlClass::item()
	 * @param int
	 * @return XiFundsTypeFundNAV
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiFundsWsdlClass::first()
	 * @return XiFundsTypeFundNAV
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiFundsWsdlClass::last()
	 * @return XiFundsTypeFundNAV
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiFundsWsdlClass::offsetGet()
	 * @param int
	 * @return XiFundsTypeFundNAV
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'FundNAV'
	 */
	public function getAttributeName()
	{
		return 'FundNAV';
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