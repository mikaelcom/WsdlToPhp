<?php
/**
 * Class file for XiMoneyMarketsTypeGetForwardRateAgreement
 * @date 08/07/2012
 */
/**
 * Class XiMoneyMarketsTypeGetForwardRateAgreement
 * @date 08/07/2012
 */
class XiMoneyMarketsTypeGetForwardRateAgreement extends XiMoneyMarketsWsdlClass
{
	/**
	 * The FirstType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiMoneyMarketsTypeLIBORTypes
	 */
	public $FirstType;
	/**
	 * The SecondType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiMoneyMarketsTypeLIBORTypes
	 */
	public $SecondType;
	/**
	 * The Currency
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiMoneyMarketsTypeLIBORCurrencyTypes
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
	 * @param XiMoneyMarketsTypeLIBORTypes FirstType
	 * @param XiMoneyMarketsTypeLIBORTypes SecondType
	 * @param XiMoneyMarketsTypeLIBORCurrencyTypes Currency
	 * @param string AsOfDate
	 * @return XiMoneyMarketsTypeGetForwardRateAgreement
	 */
	public function __construct($_FirstType,$_SecondType,$_Currency,$_AsOfDate = null)
	{
		parent::__construct(array('FirstType'=>$_FirstType,'SecondType'=>$_SecondType,'Currency'=>$_Currency,'AsOfDate'=>$_AsOfDate));
	}
	/**
	 * Set FirstType
	 * @param LIBORTypes FirstType
	 * @return LIBORTypes
	 */
	public function setFirstType($_FirstType)
	{
		return ($this->FirstType = XiMoneyMarketsTypeLIBORTypes::valueIsValid($_FirstType)?$_FirstType:null);
	}
	/**
	 * Get FirstType
	 * @return XiMoneyMarketsTypeLIBORTypes
	 */
	public function getFirstType()
	{
		return $this->FirstType;
	}
	/**
	 * Set SecondType
	 * @param LIBORTypes SecondType
	 * @return LIBORTypes
	 */
	public function setSecondType($_SecondType)
	{
		return ($this->SecondType = XiMoneyMarketsTypeLIBORTypes::valueIsValid($_SecondType)?$_SecondType:null);
	}
	/**
	 * Get SecondType
	 * @return XiMoneyMarketsTypeLIBORTypes
	 */
	public function getSecondType()
	{
		return $this->SecondType;
	}
	/**
	 * Set Currency
	 * @param LIBORCurrencyTypes Currency
	 * @return LIBORCurrencyTypes
	 */
	public function setCurrency($_Currency)
	{
		return ($this->Currency = XiMoneyMarketsTypeLIBORCurrencyTypes::valueIsValid($_Currency)?$_Currency:null);
	}
	/**
	 * Get Currency
	 * @return XiMoneyMarketsTypeLIBORCurrencyTypes
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