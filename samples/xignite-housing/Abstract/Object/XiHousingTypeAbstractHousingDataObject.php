<?php
/**
 * Class file for XiHousingTypeAbstractHousingDataObject
 * @date 08/07/2012
 */
/**
 * Class XiHousingTypeAbstractHousingDataObject
 * @date 08/07/2012
 */
class XiHousingTypeAbstractHousingDataObject extends XiHousingWsdlClass
{
	/**
	 * Constructor
	 * @return XiHousingTypeAbstractHousingDataObject
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