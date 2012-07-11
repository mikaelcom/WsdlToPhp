<?php
/**
 * Class file for SOEmailAppendTypeArrayOfEAInfoResult
 * @date 08/07/2012
 */
/**
 * Class SOEmailAppendTypeArrayOfEAInfoResult
 * @date 08/07/2012
 */
class SOEmailAppendTypeArrayOfEAInfoResult extends SOEmailAppendWsdlClass
{
	/**
	 * The EAInfoResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var SOEmailAppendTypeEAInfoResult
	 */
	public $EAInfoResult;
	/**
	 * Constructor
	 * @param SOEmailAppendTypeEAInfoResult EAInfoResult
	 * @return SOEmailAppendTypeArrayOfEAInfoResult
	 */
	public function __construct($_EAInfoResult = null)
	{
		parent::__construct(array('EAInfoResult'=>$_EAInfoResult));
	}
	/**
	 * Set EAInfoResult
	 * @param EAInfoResult EAInfoResult
	 * @return EAInfoResult
	 */
	public function setEAInfoResult($_EAInfoResult)
	{
		return ($this->EAInfoResult = $_EAInfoResult);
	}
	/**
	 * Get EAInfoResult
	 * @return SOEmailAppendTypeEAInfoResult
	 */
	public function getEAInfoResult()
	{
		return $this->EAInfoResult;
	}
	/**
	 * Returns the current element
	 * @see SOEmailAppendWsdlClass::current()
	 * @return SOEmailAppendTypeEAInfoResult
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see SOEmailAppendWsdlClass::item()
	 * @param int
	 * @return SOEmailAppendTypeEAInfoResult
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see SOEmailAppendWsdlClass::first()
	 * @return SOEmailAppendTypeEAInfoResult
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see SOEmailAppendWsdlClass::last()
	 * @return SOEmailAppendTypeEAInfoResult
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see SOEmailAppendWsdlClass::offsetGet()
	 * @param int
	 * @return SOEmailAppendTypeEAInfoResult
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'EAInfoResult'
	 */
	public function getAttributeName()
	{
		return 'EAInfoResult';
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