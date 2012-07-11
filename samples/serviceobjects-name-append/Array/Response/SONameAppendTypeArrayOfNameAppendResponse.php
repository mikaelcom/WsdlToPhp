<?php
/**
 * Class file for SONameAppendTypeArrayOfNameAppendResponse
 * @date 08/07/2012
 */
/**
 * Class SONameAppendTypeArrayOfNameAppendResponse
 * @date 08/07/2012
 */
class SONameAppendTypeArrayOfNameAppendResponse extends SONameAppendWsdlClass
{
	/**
	 * The NameAppendResponse
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var SONameAppendTypeNameAppendResponse
	 */
	public $NameAppendResponse;
	/**
	 * Constructor
	 * @param SONameAppendTypeNameAppendResponse NameAppendResponse
	 * @return SONameAppendTypeArrayOfNameAppendResponse
	 */
	public function __construct($_NameAppendResponse = null)
	{
		parent::__construct(array('NameAppendResponse'=>$_NameAppendResponse));
	}
	/**
	 * Set NameAppendResponse
	 * @param NameAppendResponse NameAppendResponse
	 * @return NameAppendResponse
	 */
	public function setNameAppendResponse($_NameAppendResponse)
	{
		return ($this->NameAppendResponse = $_NameAppendResponse);
	}
	/**
	 * Get NameAppendResponse
	 * @return SONameAppendTypeNameAppendResponse
	 */
	public function getNameAppendResponse()
	{
		return $this->NameAppendResponse;
	}
	/**
	 * Returns the current element
	 * @see SONameAppendWsdlClass::current()
	 * @return SONameAppendTypeNameAppendResponse
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see SONameAppendWsdlClass::item()
	 * @param int
	 * @return SONameAppendTypeNameAppendResponse
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see SONameAppendWsdlClass::first()
	 * @return SONameAppendTypeNameAppendResponse
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see SONameAppendWsdlClass::last()
	 * @return SONameAppendTypeNameAppendResponse
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see SONameAppendWsdlClass::offsetGet()
	 * @param int
	 * @return SONameAppendTypeNameAppendResponse
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'NameAppendResponse'
	 */
	public function getAttributeName()
	{
		return 'NameAppendResponse';
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