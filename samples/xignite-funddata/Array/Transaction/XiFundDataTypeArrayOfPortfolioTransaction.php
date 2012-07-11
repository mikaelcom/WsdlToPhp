<?php
/**
 * Class file for XiFundDataTypeArrayOfPortfolioTransaction
 * @date 08/07/2012
 */
/**
 * Class XiFundDataTypeArrayOfPortfolioTransaction
 * @date 08/07/2012
 */
class XiFundDataTypeArrayOfPortfolioTransaction extends XiFundDataWsdlClass
{
	/**
	 * The PortfolioTransaction
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiFundDataTypePortfolioTransaction
	 */
	public $PortfolioTransaction;
	/**
	 * Constructor
	 * @param XiFundDataTypePortfolioTransaction PortfolioTransaction
	 * @return XiFundDataTypeArrayOfPortfolioTransaction
	 */
	public function __construct($_PortfolioTransaction = null)
	{
		parent::__construct(array('PortfolioTransaction'=>$_PortfolioTransaction));
	}
	/**
	 * Set PortfolioTransaction
	 * @param PortfolioTransaction PortfolioTransaction
	 * @return PortfolioTransaction
	 */
	public function setPortfolioTransaction($_PortfolioTransaction)
	{
		return ($this->PortfolioTransaction = $_PortfolioTransaction);
	}
	/**
	 * Get PortfolioTransaction
	 * @return XiFundDataTypePortfolioTransaction
	 */
	public function getPortfolioTransaction()
	{
		return $this->PortfolioTransaction;
	}
	/**
	 * Returns the current element
	 * @see XiFundDataWsdlClass::current()
	 * @return XiFundDataTypePortfolioTransaction
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiFundDataWsdlClass::item()
	 * @param int
	 * @return XiFundDataTypePortfolioTransaction
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiFundDataWsdlClass::first()
	 * @return XiFundDataTypePortfolioTransaction
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiFundDataWsdlClass::last()
	 * @return XiFundDataTypePortfolioTransaction
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiFundDataWsdlClass::offsetGet()
	 * @param int
	 * @return XiFundDataTypePortfolioTransaction
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'PortfolioTransaction'
	 */
	public function getAttributeName()
	{
		return 'PortfolioTransaction';
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