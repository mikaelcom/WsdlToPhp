<?php
/**
 * Class file for XiScreenerTypeArrayOfResult
 * @date 08/07/2012
 */
/**
 * Class XiScreenerTypeArrayOfResult
 * @date 08/07/2012
 */
class XiScreenerTypeArrayOfResult extends XiScreenerWsdlClass
{
	/**
	 * The Result
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiScreenerTypeResult
	 */
	public $Result;
	/**
	 * Constructor
	 * @param XiScreenerTypeResult Result
	 * @return XiScreenerTypeArrayOfResult
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
	 * @return XiScreenerTypeResult
	 */
	public function getResult()
	{
		return $this->Result;
	}
	/**
	 * Returns the current element
	 * @see XiScreenerWsdlClass::current()
	 * @return XiScreenerTypeResult
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiScreenerWsdlClass::item()
	 * @param int
	 * @return XiScreenerTypeResult
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiScreenerWsdlClass::first()
	 * @return XiScreenerTypeResult
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiScreenerWsdlClass::last()
	 * @return XiScreenerTypeResult
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiScreenerWsdlClass::offsetGet()
	 * @param int
	 * @return XiScreenerTypeResult
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