<?php
/**
 * Class file for BingGeoTypeShapeBase
 * @date 02/07/2012
 */
/**
 * Class BingGeoTypeShapeBase
 * @date 02/07/2012
 */
class BingGeoTypeShapeBase extends BingGeoWsdlClass
{
	/**
	 * Constructor
	 * @return BingGeoTypeShapeBase
	 */
	public function __construct()
	{
		parent::__construct(array());
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