<?php
/**
 * Class file for CdyneWeatherTypeTemp
 * @date 02/07/2012
 */
/**
 * Class CdyneWeatherTypeTemp
 * @date 02/07/2012
 */
class CdyneWeatherTypeTemp extends CdyneWeatherWsdlClass
{
	/**
	 * The MorningLow
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $MorningLow;
	/**
	 * The DaytimeHigh
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $DaytimeHigh;
	/**
	 * Constructor
	 * @param string MorningLow
	 * @param string DaytimeHigh
	 * @return CdyneWeatherTypeTemp
	 */
	public function __construct($_MorningLow = null,$_DaytimeHigh = null)
	{
		parent::__construct(array('MorningLow'=>$_MorningLow,'DaytimeHigh'=>$_DaytimeHigh));
	}
	/**
	 * Set MorningLow
	 * @param string MorningLow
	 * @return string
	 */
	public function setMorningLow($_MorningLow)
	{
		return ($this->MorningLow = $_MorningLow);
	}
	/**
	 * Get MorningLow
	 * @return string
	 */
	public function getMorningLow()
	{
		return $this->MorningLow;
	}
	/**
	 * Set DaytimeHigh
	 * @param string DaytimeHigh
	 * @return string
	 */
	public function setDaytimeHigh($_DaytimeHigh)
	{
		return ($this->DaytimeHigh = $_DaytimeHigh);
	}
	/**
	 * Get DaytimeHigh
	 * @return string
	 */
	public function getDaytimeHigh()
	{
		return $this->DaytimeHigh;
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