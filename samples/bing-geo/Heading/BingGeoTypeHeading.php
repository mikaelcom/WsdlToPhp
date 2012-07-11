<?php
/**
 * Class file for BingGeoTypeHeading
 * @date 02/07/2012
 */
/**
 * Class BingGeoTypeHeading
 * @date 02/07/2012
 */
class BingGeoTypeHeading extends BingGeoWsdlClass
{
	/**
	 * The Orientation
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var double
	 */
	public $Orientation;
	/**
	 * Constructor
	 * @param double Orientation
	 * @return BingGeoTypeHeading
	 */
	public function __construct($_Orientation = null)
	{
		parent::__construct(array('Orientation'=>$_Orientation));
	}
	/**
	 * Set Orientation
	 * @param double Orientation
	 * @return double
	 */
	public function setOrientation($_Orientation)
	{
		return ($this->Orientation = $_Orientation);
	}
	/**
	 * Get Orientation
	 * @return double
	 */
	public function getOrientation()
	{
		return $this->Orientation;
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