<?php
/**
 * Class file for SOSICAppendTypeArrayOfSICAppendResponse
 * @date 08/07/2012
 */
/**
 * Class SOSICAppendTypeArrayOfSICAppendResponse
 * @date 08/07/2012
 */
class SOSICAppendTypeArrayOfSICAppendResponse extends SOSICAppendWsdlClass
{
	/**
	 * The SICAppendResponse
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var SOSICAppendTypeSICAppendResponse
	 */
	public $SICAppendResponse;
	/**
	 * Constructor
	 * @param SOSICAppendTypeSICAppendResponse SICAppendResponse
	 * @return SOSICAppendTypeArrayOfSICAppendResponse
	 */
	public function __construct($_SICAppendResponse = null)
	{
		parent::__construct(array('SICAppendResponse'=>$_SICAppendResponse));
	}
	/**
	 * Set SICAppendResponse
	 * @param SICAppendResponse SICAppendResponse
	 * @return SICAppendResponse
	 */
	public function setSICAppendResponse($_SICAppendResponse)
	{
		return ($this->SICAppendResponse = $_SICAppendResponse);
	}
	/**
	 * Get SICAppendResponse
	 * @return SOSICAppendTypeSICAppendResponse
	 */
	public function getSICAppendResponse()
	{
		return $this->SICAppendResponse;
	}
	/**
	 * Returns the current element
	 * @see SOSICAppendWsdlClass::current()
	 * @return SOSICAppendTypeSICAppendResponse
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see SOSICAppendWsdlClass::item()
	 * @param int
	 * @return SOSICAppendTypeSICAppendResponse
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see SOSICAppendWsdlClass::first()
	 * @return SOSICAppendTypeSICAppendResponse
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see SOSICAppendWsdlClass::last()
	 * @return SOSICAppendTypeSICAppendResponse
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see SOSICAppendWsdlClass::offsetGet()
	 * @param int
	 * @return SOSICAppendTypeSICAppendResponse
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'SICAppendResponse'
	 */
	public function getAttributeName()
	{
		return 'SICAppendResponse';
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