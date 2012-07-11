<?php
/**
 * Class file for CdyneWeatherTypeWeatherDescription
 * @date 02/07/2012
 */
/**
 * Class CdyneWeatherTypeWeatherDescription
 * @date 02/07/2012
 */
class CdyneWeatherTypeWeatherDescription extends CdyneWeatherWsdlClass
{
	/**
	 * The WeatherID
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var short
	 */
	public $WeatherID;
	/**
	 * The Description
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Description;
	/**
	 * The PictureURL
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PictureURL;
	/**
	 * Constructor
	 * @param short WeatherID
	 * @param string Description
	 * @param string PictureURL
	 * @return CdyneWeatherTypeWeatherDescription
	 */
	public function __construct($_WeatherID,$_Description = null,$_PictureURL = null)
	{
		parent::__construct(array('WeatherID'=>$_WeatherID,'Description'=>$_Description,'PictureURL'=>$_PictureURL));
	}
	/**
	 * Set WeatherID
	 * @param short WeatherID
	 * @return short
	 */
	public function setWeatherID($_WeatherID)
	{
		return ($this->WeatherID = $_WeatherID);
	}
	/**
	 * Get WeatherID
	 * @return short
	 */
	public function getWeatherID()
	{
		return $this->WeatherID;
	}
	/**
	 * Set Description
	 * @param string Description
	 * @return string
	 */
	public function setDescription($_Description)
	{
		return ($this->Description = $_Description);
	}
	/**
	 * Get Description
	 * @return string
	 */
	public function getDescription()
	{
		return $this->Description;
	}
	/**
	 * Set PictureURL
	 * @param string PictureURL
	 * @return string
	 */
	public function setPictureURL($_PictureURL)
	{
		return ($this->PictureURL = $_PictureURL);
	}
	/**
	 * Get PictureURL
	 * @return string
	 */
	public function getPictureURL()
	{
		return $this->PictureURL;
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