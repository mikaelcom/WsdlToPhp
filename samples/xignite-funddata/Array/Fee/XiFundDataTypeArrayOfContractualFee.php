<?php
/**
 * Class file for XiFundDataTypeArrayOfContractualFee
 * @date 08/07/2012
 */
/**
 * Class XiFundDataTypeArrayOfContractualFee
 * @date 08/07/2012
 */
class XiFundDataTypeArrayOfContractualFee extends XiFundDataWsdlClass
{
	/**
	 * The ContractualFee
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiFundDataTypeContractualFee
	 */
	public $ContractualFee;
	/**
	 * Constructor
	 * @param XiFundDataTypeContractualFee ContractualFee
	 * @return XiFundDataTypeArrayOfContractualFee
	 */
	public function __construct($_ContractualFee = null)
	{
		parent::__construct(array('ContractualFee'=>$_ContractualFee));
	}
	/**
	 * Set ContractualFee
	 * @param ContractualFee ContractualFee
	 * @return ContractualFee
	 */
	public function setContractualFee($_ContractualFee)
	{
		return ($this->ContractualFee = $_ContractualFee);
	}
	/**
	 * Get ContractualFee
	 * @return XiFundDataTypeContractualFee
	 */
	public function getContractualFee()
	{
		return $this->ContractualFee;
	}
	/**
	 * Returns the current element
	 * @see XiFundDataWsdlClass::current()
	 * @return XiFundDataTypeContractualFee
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiFundDataWsdlClass::item()
	 * @param int
	 * @return XiFundDataTypeContractualFee
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiFundDataWsdlClass::first()
	 * @return XiFundDataTypeContractualFee
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiFundDataWsdlClass::last()
	 * @return XiFundDataTypeContractualFee
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiFundDataWsdlClass::offsetGet()
	 * @param int
	 * @return XiFundDataTypeContractualFee
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'ContractualFee'
	 */
	public function getAttributeName()
	{
		return 'ContractualFee';
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