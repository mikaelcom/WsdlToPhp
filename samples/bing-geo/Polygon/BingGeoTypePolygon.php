<?php
/**
 * Class file for BingGeoTypePolygon
 * @date 02/07/2012
 */
/**
 * Class BingGeoTypePolygon
 * @date 02/07/2012
 */
class BingGeoTypePolygon extends BingGeoTypeShapeBase
{
	/**
	 * The Vertices
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var BingGeoTypeArrayOfLocation
	 */
	public $Vertices;
	/**
	 * Constructor
	 * @param BingGeoTypeArrayOfLocation Vertices
	 * @return BingGeoTypePolygon
	 */
	public function __construct($_Vertices = null)
	{
		BingGeoWsdlClass::__construct(array('Vertices'=>new BingGeoTypeArrayOfLocation($_Vertices)));
	}
	/**
	 * Set Vertices
	 * @param ArrayOfLocation Vertices
	 * @return ArrayOfLocation
	 */
	public function setVertices($_Vertices)
	{
		return ($this->Vertices = $_Vertices);
	}
	/**
	 * Get Vertices
	 * @return BingGeoTypeArrayOfLocation
	 */
	public function getVertices()
	{
		return $this->Vertices;
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