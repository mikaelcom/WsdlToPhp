<?php
/**
 * Class file for CdyneWeatherTypePOP
 * @date 02/07/2012
 */
/**
 * Class CdyneWeatherTypePOP
 * @date 02/07/2012
 */
class CdyneWeatherTypePOP extends CdyneWeatherWsdlClass
{
	/**
	 * The Nighttime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Nighttime;
	/**
	 * The Daytime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Daytime;
	/**
	 * Constructor
	 * @param string Nighttime
	 * @param string Daytime
	 * @return CdyneWeatherTypePOP
	 */
	public function __construct($_Nighttime = null,$_Daytime = null)
	{
		parent::__construct(array('Nighttime'=>$_Nighttime,'Daytime'=>$_Daytime));
	}
	/**
	 * Set Nighttime
	 * @param string Nighttime
	 * @return string
	 */
	public function setNighttime($_Nighttime)
	{
		return ($this->Nighttime = $_Nighttime);
	}
	/**
	 * Get Nighttime
	 * @return string
	 */
	public function getNighttime()
	{
		return $this->Nighttime;
	}
	/**
	 * Set Daytime
	 * @param string Daytime
	 * @return string
	 */
	public function setDaytime($_Daytime)
	{
		return ($this->Daytime = $_Daytime);
	}
	/**
	 * Get Daytime
	 * @return string
	 */
	public function getDaytime()
	{
		return $this->Daytime;
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