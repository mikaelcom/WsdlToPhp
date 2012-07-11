<?php
/**
 * Class file for SONcoaLiveTypeArrayOfNCOAResult
 * @date 06/07/2012
 */
/**
 * Class SONcoaLiveTypeArrayOfNCOAResult
 * @date 06/07/2012
 */
class SONcoaLiveTypeArrayOfNCOAResult extends SONcoaLiveWsdlClass
{
	/**
	 * The NCOAResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var SONcoaLiveTypeNCOAResult
	 */
	public $NCOAResult;
	/**
	 * Constructor
	 * @param SONcoaLiveTypeNCOAResult NCOAResult
	 * @return SONcoaLiveTypeArrayOfNCOAResult
	 */
	public function __construct($_NCOAResult = null)
	{
		parent::__construct(array('NCOAResult'=>$_NCOAResult));
	}
	/**
	 * Set NCOAResult
	 * @param NCOAResult NCOAResult
	 * @return NCOAResult
	 */
	public function setNCOAResult($_NCOAResult)
	{
		return ($this->NCOAResult = $_NCOAResult);
	}
	/**
	 * Get NCOAResult
	 * @return SONcoaLiveTypeNCOAResult
	 */
	public function getNCOAResult()
	{
		return $this->NCOAResult;
	}
	/**
	 * Returns the current element
	 * @see SONcoaLiveWsdlClass::current()
	 * @return SONcoaLiveTypeNCOAResult
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see SONcoaLiveWsdlClass::item()
	 * @param int
	 * @return SONcoaLiveTypeNCOAResult
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see SONcoaLiveWsdlClass::first()
	 * @return SONcoaLiveTypeNCOAResult
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see SONcoaLiveWsdlClass::last()
	 * @return SONcoaLiveTypeNCOAResult
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see SONcoaLiveWsdlClass::offsetGet()
	 * @param int
	 * @return SONcoaLiveTypeNCOAResult
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'NCOAResult'
	 */
	public function getAttributeName()
	{
		return 'NCOAResult';
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