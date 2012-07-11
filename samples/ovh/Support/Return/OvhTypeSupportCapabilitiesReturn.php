<?php
/**
 * Class file for OvhTypeSupportCapabilitiesReturn
 * @date 02/07/2012
 */
/**
 * Class OvhTypeSupportCapabilitiesReturn
 * @date 02/07/2012
 */
class OvhTypeSupportCapabilitiesReturn extends OvhWsdlClass
{
	/**
	 * The hasSupportPlus
	 * @var boolean
	 */
	public $hasSupportPlus;
	/**
	 * Constructor
	 * @param boolean hasSupportPlus
	 * @return OvhTypeSupportCapabilitiesReturn
	 */
	public function __construct($_hasSupportPlus = null)
	{
		parent::__construct(array('hasSupportPlus'=>$_hasSupportPlus));
	}
	/**
	 * Set hasSupportPlus
	 * @param boolean hasSupportPlus
	 * @return boolean
	 */
	public function setHasSupportPlus($_hasSupportPlus)
	{
		return ($this->hasSupportPlus = $_hasSupportPlus);
	}
	/**
	 * Get hasSupportPlus
	 * @return boolean
	 */
	public function getHasSupportPlus()
	{
		return $this->hasSupportPlus;
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