<?php
/**
 * Class file for CdyneDemographicsQTypeRacePercentagesCls
 * @date 03/07/2012
 */
/**
 * Class CdyneDemographicsQTypeRacePercentagesCls
 * @date 03/07/2012
 */
class CdyneDemographicsQTypeRacePercentagesCls extends CdyneDemographicsQWsdlClass
{
	/**
	 * The Asian
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var decimal
	 */
	public $Asian;
	/**
	 * The Black
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var decimal
	 */
	public $Black;
	/**
	 * The Indian
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var decimal
	 */
	public $Indian;
	/**
	 * The Mixed
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var decimal
	 */
	public $Mixed;
	/**
	 * The NativeHawaiian
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var decimal
	 */
	public $NativeHawaiian;
	/**
	 * The Other
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var decimal
	 */
	public $Other;
	/**
	 * The White
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var decimal
	 */
	public $White;
	/**
	 * Constructor
	 * @param decimal Asian
	 * @param decimal Black
	 * @param decimal Indian
	 * @param decimal Mixed
	 * @param decimal NativeHawaiian
	 * @param decimal Other
	 * @param decimal White
	 * @return CdyneDemographicsQTypeRacePercentagesCls
	 */
	public function __construct($_Asian,$_Black,$_Indian,$_Mixed,$_NativeHawaiian,$_Other,$_White)
	{
		parent::__construct(array('Asian'=>$_Asian,'Black'=>$_Black,'Indian'=>$_Indian,'Mixed'=>$_Mixed,'NativeHawaiian'=>$_NativeHawaiian,'Other'=>$_Other,'White'=>$_White));
	}
	/**
	 * Set Asian
	 * @param decimal Asian
	 * @return decimal
	 */
	public function setAsian($_Asian)
	{
		return ($this->Asian = $_Asian);
	}
	/**
	 * Get Asian
	 * @return decimal
	 */
	public function getAsian()
	{
		return $this->Asian;
	}
	/**
	 * Set Black
	 * @param decimal Black
	 * @return decimal
	 */
	public function setBlack($_Black)
	{
		return ($this->Black = $_Black);
	}
	/**
	 * Get Black
	 * @return decimal
	 */
	public function getBlack()
	{
		return $this->Black;
	}
	/**
	 * Set Indian
	 * @param decimal Indian
	 * @return decimal
	 */
	public function setIndian($_Indian)
	{
		return ($this->Indian = $_Indian);
	}
	/**
	 * Get Indian
	 * @return decimal
	 */
	public function getIndian()
	{
		return $this->Indian;
	}
	/**
	 * Set Mixed
	 * @param decimal Mixed
	 * @return decimal
	 */
	public function setMixed($_Mixed)
	{
		return ($this->Mixed = $_Mixed);
	}
	/**
	 * Get Mixed
	 * @return decimal
	 */
	public function getMixed()
	{
		return $this->Mixed;
	}
	/**
	 * Set NativeHawaiian
	 * @param decimal NativeHawaiian
	 * @return decimal
	 */
	public function setNativeHawaiian($_NativeHawaiian)
	{
		return ($this->NativeHawaiian = $_NativeHawaiian);
	}
	/**
	 * Get NativeHawaiian
	 * @return decimal
	 */
	public function getNativeHawaiian()
	{
		return $this->NativeHawaiian;
	}
	/**
	 * Set Other
	 * @param decimal Other
	 * @return decimal
	 */
	public function setOther($_Other)
	{
		return ($this->Other = $_Other);
	}
	/**
	 * Get Other
	 * @return decimal
	 */
	public function getOther()
	{
		return $this->Other;
	}
	/**
	 * Set White
	 * @param decimal White
	 * @return decimal
	 */
	public function setWhite($_White)
	{
		return ($this->White = $_White);
	}
	/**
	 * Get White
	 * @return decimal
	 */
	public function getWhite()
	{
		return $this->White;
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