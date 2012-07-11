<?php
/**
 * Class file for EccDomainIpTypeArrayOfResult
 * @date 03/07/2012
 */
/**
 * Class EccDomainIpTypeArrayOfResult
 * @date 03/07/2012
 */
class EccDomainIpTypeArrayOfResult extends EccDomainIpWsdlClass
{
	/**
	 * The Result
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var EccDomainIpTypeResult
	 */
	public $Result;
	/**
	 * Constructor
	 * @param EccDomainIpTypeResult Result
	 * @return EccDomainIpTypeArrayOfResult
	 */
	public function __construct($_Result = null)
	{
		parent::__construct(array('Result'=>$_Result));
	}
	/**
	 * Set Result
	 * @param Result Result
	 * @return Result
	 */
	public function setResult($_Result)
	{
		return ($this->Result = $_Result);
	}
	/**
	 * Get Result
	 * @return EccDomainIpTypeResult
	 */
	public function getResult()
	{
		return $this->Result;
	}
	/**
	 * Returns the current element
	 * @see EccDomainIpWsdlClass::current()
	 * @return EccDomainIpTypeResult
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see EccDomainIpWsdlClass::item()
	 * @param int
	 * @return EccDomainIpTypeResult
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see EccDomainIpWsdlClass::first()
	 * @return EccDomainIpTypeResult
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see EccDomainIpWsdlClass::last()
	 * @return EccDomainIpTypeResult
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see EccDomainIpWsdlClass::offsetGet()
	 * @param int
	 * @return EccDomainIpTypeResult
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'Result'
	 */
	public function getAttributeName()
	{
		return 'Result';
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