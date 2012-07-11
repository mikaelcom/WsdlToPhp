<?php
/**
 * Class file for SOFastWeatherTypeForecast
 * @date 08/07/2012
 */
/**
 * Class SOFastWeatherTypeForecast
 * @date 08/07/2012
 */
class SOFastWeatherTypeForecast extends SOFastWeatherWsdlClass
{
	/**
	 * The Error
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOFastWeatherTypeErr
	 */
	public $Error;
	/**
	 * The Date
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Date;
	/**
	 * The High
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $High;
	/**
	 * The Low
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Low;
	/**
	 * The ChanceOfPrecipitation
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ChanceOfPrecipitation;
	/**
	 * The Conditions
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Conditions;
	/**
	 * Constructor
	 * @param SOFastWeatherTypeErr Error
	 * @param string Date
	 * @param string High
	 * @param string Low
	 * @param string ChanceOfPrecipitation
	 * @param string Conditions
	 * @return SOFastWeatherTypeForecast
	 */
	public function __construct($_Error = null,$_Date = null,$_High = null,$_Low = null,$_ChanceOfPrecipitation = null,$_Conditions = null)
	{
		parent::__construct(array('Error'=>$_Error,'Date'=>$_Date,'High'=>$_High,'Low'=>$_Low,'ChanceOfPrecipitation'=>$_ChanceOfPrecipitation,'Conditions'=>$_Conditions));
	}
	/**
	 * Set Error
	 * @param Err Error
	 * @return Err
	 */
	public function setError($_Error)
	{
		return ($this->Error = $_Error);
	}
	/**
	 * Get Error
	 * @return SOFastWeatherTypeErr
	 */
	public function getError()
	{
		return $this->Error;
	}
	/**
	 * Set Date
	 * @param string Date
	 * @return string
	 */
	public function setDate($_Date)
	{
		return ($this->Date = $_Date);
	}
	/**
	 * Get Date
	 * @return string
	 */
	public function getDate()
	{
		return $this->Date;
	}
	/**
	 * Set High
	 * @param string High
	 * @return string
	 */
	public function setHigh($_High)
	{
		return ($this->High = $_High);
	}
	/**
	 * Get High
	 * @return string
	 */
	public function getHigh()
	{
		return $this->High;
	}
	/**
	 * Set Low
	 * @param string Low
	 * @return string
	 */
	public function setLow($_Low)
	{
		return ($this->Low = $_Low);
	}
	/**
	 * Get Low
	 * @return string
	 */
	public function getLow()
	{
		return $this->Low;
	}
	/**
	 * Set ChanceOfPrecipitation
	 * @param string ChanceOfPrecipitation
	 * @return string
	 */
	public function setChanceOfPrecipitation($_ChanceOfPrecipitation)
	{
		return ($this->ChanceOfPrecipitation = $_ChanceOfPrecipitation);
	}
	/**
	 * Get ChanceOfPrecipitation
	 * @return string
	 */
	public function getChanceOfPrecipitation()
	{
		return $this->ChanceOfPrecipitation;
	}
	/**
	 * Set Conditions
	 * @param string Conditions
	 * @return string
	 */
	public function setConditions($_Conditions)
	{
		return ($this->Conditions = $_Conditions);
	}
	/**
	 * Get Conditions
	 * @return string
	 */
	public function getConditions()
	{
		return $this->Conditions;
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