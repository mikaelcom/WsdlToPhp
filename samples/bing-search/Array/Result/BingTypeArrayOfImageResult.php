<?php
/**
 * Class file for BingTypeArrayOfImageResult
 * @date 02/07/2012
 */
/**
 * Class BingTypeArrayOfImageResult
 * @date 02/07/2012
 */
class BingTypeArrayOfImageResult extends BingWsdlClass
{
	/**
	 * The ImageResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var BingTypeImageResult
	 */
	public $ImageResult;
	/**
	 * Constructor
	 * @param BingTypeImageResult ImageResult
	 * @return BingTypeArrayOfImageResult
	 */
	public function __construct($_ImageResult = null)
	{
		parent::__construct(array('ImageResult'=>$_ImageResult));
	}
	/**
	 * Set ImageResult
	 * @param ImageResult ImageResult
	 * @return ImageResult
	 */
	public function setImageResult($_ImageResult)
	{
		return ($this->ImageResult = $_ImageResult);
	}
	/**
	 * Get ImageResult
	 * @return BingTypeImageResult
	 */
	public function getImageResult()
	{
		return $this->ImageResult;
	}
	/**
	 * Returns the current element
	 * @see BingWsdlClass::current()
	 * @return BingTypeImageResult
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see BingWsdlClass::item()
	 * @param int
	 * @return BingTypeImageResult
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see BingWsdlClass::first()
	 * @return BingTypeImageResult
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see BingWsdlClass::last()
	 * @return BingTypeImageResult
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see BingWsdlClass::offsetGet()
	 * @param int
	 * @return BingTypeImageResult
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'ImageResult'
	 */
	public function getAttributeName()
	{
		return 'ImageResult';
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