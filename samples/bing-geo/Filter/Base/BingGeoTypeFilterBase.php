<?php
/**
 * Class file for BingGeoTypeFilterBase
 * @date 02/07/2012
 */
/**
 * Class BingGeoTypeFilterBase
 * @date 02/07/2012
 */
class BingGeoTypeFilterBase extends BingGeoWsdlClass
{
	/**
	 * Constructor
	 * @return BingGeoTypeFilterBase
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