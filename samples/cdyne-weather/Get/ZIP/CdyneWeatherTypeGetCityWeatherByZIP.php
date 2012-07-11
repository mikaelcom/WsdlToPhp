<?php
/**
 * Class file for CdyneWeatherTypeGetCityWeatherByZIP
 * @date 02/07/2012
 */
/**
 * Class CdyneWeatherTypeGetCityWeatherByZIP
 * @date 02/07/2012
 */
class CdyneWeatherTypeGetCityWeatherByZIP extends CdyneWeatherWsdlClass
{
	/**
	 * The ZIP
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ZIP;
	/**
	 * Constructor
	 * @param string ZIP
	 * @return CdyneWeatherTypeGetCityWeatherByZIP
	 */
	public function __construct($_ZIP = null)
	{
		parent::__construct(array('ZIP'=>$_ZIP));
	}
	/**
	 * Set ZIP
	 * @param string ZIP
	 * @return string
	 */
	public function setZIP($_ZIP)
	{
		return ($this->ZIP = $_ZIP);
	}
	/**
	 * Get ZIP
	 * @return string
	 */
	public function getZIP()
	{
		return $this->ZIP;
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