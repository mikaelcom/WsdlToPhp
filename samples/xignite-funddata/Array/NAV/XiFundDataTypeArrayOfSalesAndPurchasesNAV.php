<?php
/**
 * Class file for XiFundDataTypeArrayOfSalesAndPurchasesNAV
 * @date 08/07/2012
 */
/**
 * Class XiFundDataTypeArrayOfSalesAndPurchasesNAV
 * @date 08/07/2012
 */
class XiFundDataTypeArrayOfSalesAndPurchasesNAV extends XiFundDataWsdlClass
{
	/**
	 * The SalesAndPurchasesNAV
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiFundDataTypeSalesAndPurchasesNAV
	 */
	public $SalesAndPurchasesNAV;
	/**
	 * Constructor
	 * @param XiFundDataTypeSalesAndPurchasesNAV SalesAndPurchasesNAV
	 * @return XiFundDataTypeArrayOfSalesAndPurchasesNAV
	 */
	public function __construct($_SalesAndPurchasesNAV = null)
	{
		parent::__construct(array('SalesAndPurchasesNAV'=>$_SalesAndPurchasesNAV));
	}
	/**
	 * Set SalesAndPurchasesNAV
	 * @param SalesAndPurchasesNAV SalesAndPurchasesNAV
	 * @return SalesAndPurchasesNAV
	 */
	public function setSalesAndPurchasesNAV($_SalesAndPurchasesNAV)
	{
		return ($this->SalesAndPurchasesNAV = $_SalesAndPurchasesNAV);
	}
	/**
	 * Get SalesAndPurchasesNAV
	 * @return XiFundDataTypeSalesAndPurchasesNAV
	 */
	public function getSalesAndPurchasesNAV()
	{
		return $this->SalesAndPurchasesNAV;
	}
	/**
	 * Returns the current element
	 * @see XiFundDataWsdlClass::current()
	 * @return XiFundDataTypeSalesAndPurchasesNAV
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiFundDataWsdlClass::item()
	 * @param int
	 * @return XiFundDataTypeSalesAndPurchasesNAV
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiFundDataWsdlClass::first()
	 * @return XiFundDataTypeSalesAndPurchasesNAV
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiFundDataWsdlClass::last()
	 * @return XiFundDataTypeSalesAndPurchasesNAV
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiFundDataWsdlClass::offsetGet()
	 * @param int
	 * @return XiFundDataTypeSalesAndPurchasesNAV
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'SalesAndPurchasesNAV'
	 */
	public function getAttributeName()
	{
		return 'SalesAndPurchasesNAV';
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