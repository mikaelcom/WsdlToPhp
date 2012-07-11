<?php
/**
 * Class file for SPImagingTypeArrayOfUnsignedInt
 * @date 06/07/2012
 */
/**
 * Class SPImagingTypeArrayOfUnsignedInt
 * @date 06/07/2012
 */
class SPImagingTypeArrayOfUnsignedInt extends SPImagingWsdlClass
{
	/**
	 * The unsignedInt
	 * @var unsignedInt
	 */
	public $unsignedInt;
	/**
	 * Constructor
	 * @param unsignedInt unsignedInt
	 * @return SPImagingTypeArrayOfUnsignedInt
	 */
	public function __construct($_unsignedInt = null)
	{
		parent::__construct(array('unsignedInt'=>$_unsignedInt));
	}
	/**
	 * Set unsignedInt
	 * @param unsignedInt unsignedInt
	 * @return unsignedInt
	 */
	public function setUnsignedInt($_unsignedInt)
	{
		return ($this->unsignedInt = $_unsignedInt);
	}
	/**
	 * Get unsignedInt
	 * @return unsignedInt
	 */
	public function getUnsignedInt()
	{
		return $this->unsignedInt;
	}
	/**
	 * Returns the current element
	 * @see SPImagingWsdlClass::current()
	 * @return unsignedInt
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see SPImagingWsdlClass::item()
	 * @param int
	 * @return unsignedInt
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see SPImagingWsdlClass::first()
	 * @return unsignedInt
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see SPImagingWsdlClass::last()
	 * @return unsignedInt
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see SPImagingWsdlClass::offsetGet()
	 * @param int
	 * @return unsignedInt
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'unsignedInt'
	 */
	public function getAttributeName()
	{
		return 'unsignedInt';
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