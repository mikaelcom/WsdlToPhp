<?php
/**
 * Class file for XiRatesTypeGetLIBORSecure
 * @date 08/07/2012
 */
/**
 * Class XiRatesTypeGetLIBORSecure
 * @date 08/07/2012
 */
class XiRatesTypeGetLIBORSecure extends XiRatesWsdlClass
{
	/**
	 * The Username
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Username;
	/**
	 * The Type
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiRatesTypeLIBORTypes
	 */
	public $Type;
	/**
	 * The Currency
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiRatesTypeLIBORCurrencyTypes
	 */
	public $Currency;
	/**
	 * The AsOfDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $AsOfDate;
	/**
	 * Constructor
	 * @param string Username
	 * @param XiRatesTypeLIBORTypes Type
	 * @param XiRatesTypeLIBORCurrencyTypes Currency
	 * @param string AsOfDate
	 * @return XiRatesTypeGetLIBORSecure
	 */
	public function __construct($_Username = null,$_Type,$_Currency,$_AsOfDate = null)
	{
		parent::__construct(array('Username'=>$_Username,'Type'=>$_Type,'Currency'=>$_Currency,'AsOfDate'=>$_AsOfDate));
	}
	/**
	 * Set Username
	 * @param string Username
	 * @return string
	 */
	public function setUsername($_Username)
	{
		return ($this->Username = $_Username);
	}
	/**
	 * Get Username
	 * @return string
	 */
	public function getUsername()
	{
		return $this->Username;
	}
	/**
	 * Set Type
	 * @param LIBORTypes Type
	 * @return LIBORTypes
	 */
	public function setType($_Type)
	{
		return ($this->Type = XiRatesTypeLIBORTypes::valueIsValid($_Type)?$_Type:null);
	}
	/**
	 * Get Type
	 * @return XiRatesTypeLIBORTypes
	 */
	public function getType()
	{
		return $this->Type;
	}
	/**
	 * Set Currency
	 * @param LIBORCurrencyTypes Currency
	 * @return LIBORCurrencyTypes
	 */
	public function setCurrency($_Currency)
	{
		return ($this->Currency = XiRatesTypeLIBORCurrencyTypes::valueIsValid($_Currency)?$_Currency:null);
	}
	/**
	 * Get Currency
	 * @return XiRatesTypeLIBORCurrencyTypes
	 */
	public function getCurrency()
	{
		return $this->Currency;
	}
	/**
	 * Set AsOfDate
	 * @param string AsOfDate
	 * @return string
	 */
	public function setAsOfDate($_AsOfDate)
	{
		return ($this->AsOfDate = $_AsOfDate);
	}
	/**
	 * Get AsOfDate
	 * @return string
	 */
	public function getAsOfDate()
	{
		return $this->AsOfDate;
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