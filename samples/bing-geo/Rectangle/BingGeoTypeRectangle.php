<?php
/**
 * Class file for BingGeoTypeRectangle
 * @date 02/07/2012
 */
/**
 * Class BingGeoTypeRectangle
 * @date 02/07/2012
 */
class BingGeoTypeRectangle extends BingGeoTypeShapeBase
{
	/**
	 * The Northeast
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var BingGeoTypeLocation
	 */
	public $Northeast;
	/**
	 * The Southwest
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var BingGeoTypeLocation
	 */
	public $Southwest;
	/**
	 * Constructor
	 * @param BingGeoTypeLocation Northeast
	 * @param BingGeoTypeLocation Southwest
	 * @return BingGeoTypeRectangle
	 */
	public function __construct($_Northeast = null,$_Southwest = null)
	{
		BingGeoWsdlClass::__construct(array('Northeast'=>$_Northeast,'Southwest'=>$_Southwest));
	}
	/**
	 * Set Northeast
	 * @param Location Northeast
	 * @return Location
	 */
	public function setNortheast($_Northeast)
	{
		return ($this->Northeast = $_Northeast);
	}
	/**
	 * Get Northeast
	 * @return BingGeoTypeLocation
	 */
	public function getNortheast()
	{
		return $this->Northeast;
	}
	/**
	 * Set Southwest
	 * @param Location Southwest
	 * @return Location
	 */
	public function setSouthwest($_Southwest)
	{
		return ($this->Southwest = $_Southwest);
	}
	/**
	 * Get Southwest
	 * @return BingGeoTypeLocation
	 */
	public function getSouthwest()
	{
		return $this->Southwest;
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