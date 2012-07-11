<?php
/**
 * Class file for XiInterBanksTypeGetLIBOR
 * @date 08/07/2012
 */
/**
 * Class XiInterBanksTypeGetLIBOR
 * @date 08/07/2012
 */
class XiInterBanksTypeGetLIBOR extends XiInterBanksWsdlClass
{
	/**
	 * The Type
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiInterBanksTypeLIBORTypes
	 */
	public $Type;
	/**
	 * The Currency
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiInterBanksTypeLIBORCurrencyTypes
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
	 * @param XiInterBanksTypeLIBORTypes Type
	 * @param XiInterBanksTypeLIBORCurrencyTypes Currency
	 * @param string AsOfDate
	 * @return XiInterBanksTypeGetLIBOR
	 */
	public function __construct($_Type,$_Currency,$_AsOfDate = null)
	{
		parent::__construct(array('Type'=>$_Type,'Currency'=>$_Currency,'AsOfDate'=>$_AsOfDate));
	}
	/**
	 * Set Type
	 * @param LIBORTypes Type
	 * @return LIBORTypes
	 */
	public function setType($_Type)
	{
		return ($this->Type = XiInterBanksTypeLIBORTypes::valueIsValid($_Type)?$_Type:null);
	}
	/**
	 * Get Type
	 * @return XiInterBanksTypeLIBORTypes
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
		return ($this->Currency = XiInterBanksTypeLIBORCurrencyTypes::valueIsValid($_Currency)?$_Currency:null);
	}
	/**
	 * Get Currency
	 * @return XiInterBanksTypeLIBORCurrencyTypes
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