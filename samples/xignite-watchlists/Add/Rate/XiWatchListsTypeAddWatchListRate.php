<?php
/**
 * Class file for XiWatchListsTypeAddWatchListRate
 * @date 08/07/2012
 */
/**
 * Class XiWatchListsTypeAddWatchListRate
 * @date 08/07/2012
 */
class XiWatchListsTypeAddWatchListRate extends XiWatchListsWsdlClass
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
	 * The Password
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Password;
	/**
	 * The WatchList
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $WatchList;
	/**
	 * The RateType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiWatchListsTypeRateTypes
	 */
	public $RateType;
	/**
	 * The Currency
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiWatchListsTypeLIBORCurrencyTypes
	 */
	public $Currency;
	/**
	 * The PeriodType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiWatchListsTypePeriodTypes
	 */
	public $PeriodType;
	/**
	 * Constructor
	 * @param string Username
	 * @param string Password
	 * @param string WatchList
	 * @param XiWatchListsTypeRateTypes RateType
	 * @param XiWatchListsTypeLIBORCurrencyTypes Currency
	 * @param XiWatchListsTypePeriodTypes PeriodType
	 * @return XiWatchListsTypeAddWatchListRate
	 */
	public function __construct($_Username = null,$_Password = null,$_WatchList = null,$_RateType,$_Currency,$_PeriodType)
	{
		parent::__construct(array('Username'=>$_Username,'Password'=>$_Password,'WatchList'=>$_WatchList,'RateType'=>$_RateType,'Currency'=>$_Currency,'PeriodType'=>$_PeriodType));
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
	 * Set Password
	 * @param string Password
	 * @return string
	 */
	public function setPassword($_Password)
	{
		return ($this->Password = $_Password);
	}
	/**
	 * Get Password
	 * @return string
	 */
	public function getPassword()
	{
		return $this->Password;
	}
	/**
	 * Set WatchList
	 * @param string WatchList
	 * @return string
	 */
	public function setWatchList($_WatchList)
	{
		return ($this->WatchList = $_WatchList);
	}
	/**
	 * Get WatchList
	 * @return string
	 */
	public function getWatchList()
	{
		return $this->WatchList;
	}
	/**
	 * Set RateType
	 * @param RateTypes RateType
	 * @return RateTypes
	 */
	public function setRateType($_RateType)
	{
		return ($this->RateType = XiWatchListsTypeRateTypes::valueIsValid($_RateType)?$_RateType:null);
	}
	/**
	 * Get RateType
	 * @return XiWatchListsTypeRateTypes
	 */
	public function getRateType()
	{
		return $this->RateType;
	}
	/**
	 * Set Currency
	 * @param LIBORCurrencyTypes Currency
	 * @return LIBORCurrencyTypes
	 */
	public function setCurrency($_Currency)
	{
		return ($this->Currency = XiWatchListsTypeLIBORCurrencyTypes::valueIsValid($_Currency)?$_Currency:null);
	}
	/**
	 * Get Currency
	 * @return XiWatchListsTypeLIBORCurrencyTypes
	 */
	public function getCurrency()
	{
		return $this->Currency;
	}
	/**
	 * Set PeriodType
	 * @param PeriodTypes PeriodType
	 * @return PeriodTypes
	 */
	public function setPeriodType($_PeriodType)
	{
		return ($this->PeriodType = XiWatchListsTypePeriodTypes::valueIsValid($_PeriodType)?$_PeriodType:null);
	}
	/**
	 * Get PeriodType
	 * @return XiWatchListsTypePeriodTypes
	 */
	public function getPeriodType()
	{
		return $this->PeriodType;
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