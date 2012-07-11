<?php
/**
 * Class file for BingGeoTypeSizeOfint
 * @date 02/07/2012
 */
/**
 * Class BingGeoTypeSizeOfint
 * @date 02/07/2012
 */
class BingGeoTypeSizeOfint extends BingGeoWsdlClass
{
	/**
	 * The Height
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var int
	 */
	public $Height;
	/**
	 * The Width
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var int
	 */
	public $Width;
	/**
	 * Constructor
	 * @param int Height
	 * @param int Width
	 * @return BingGeoTypeSizeOfint
	 */
	public function __construct($_Height = null,$_Width = null)
	{
		parent::__construct(array('Height'=>$_Height,'Width'=>$_Width));
	}
	/**
	 * Set Height
	 * @param int Height
	 * @return int
	 */
	public function setHeight($_Height)
	{
		return ($this->Height = $_Height);
	}
	/**
	 * Get Height
	 * @return int
	 */
	public function getHeight()
	{
		return $this->Height;
	}
	/**
	 * Set Width
	 * @param int Width
	 * @return int
	 */
	public function setWidth($_Width)
	{
		return ($this->Width = $_Width);
	}
	/**
	 * Get Width
	 * @return int
	 */
	public function getWidth()
	{
		return $this->Width;
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