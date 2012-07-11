<?php
/**
 * Class file for XiMoneyMarketsTypeSwaption
 * @date 08/07/2012
 */
/**
 * Class XiMoneyMarketsTypeSwaption
 * @date 08/07/2012
 */
class XiMoneyMarketsTypeSwaption extends XiMoneyMarketsTypeCommon
{
	/**
	 * The FirstType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiMoneyMarketsTypeSwaptionTypes
	 */
	public $FirstType;
	/**
	 * The SecondType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiMoneyMarketsTypeSwaptionTypes
	 */
	public $SecondType;
	/**
	 * The Date
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Date;
	/**
	 * The Currency
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiMoneyMarketsTypeSwapCurrencyTypes
	 */
	public $Currency;
	/**
	 * The Last
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Last;
	/**
	 * The Open
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Open;
	/**
	 * The High
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $High;
	/**
	 * The Low
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Low;
	/**
	 * The Close
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Close;
	/**
	 * The Bid
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Bid;
	/**
	 * The Ask
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Ask;
	/**
	 * The Change
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Change;
	/**
	 * Constructor
	 * @param XiMoneyMarketsTypeSwaptionTypes FirstType
	 * @param XiMoneyMarketsTypeSwaptionTypes SecondType
	 * @param string Date
	 * @param XiMoneyMarketsTypeSwapCurrencyTypes Currency
	 * @param double Last
	 * @param double Open
	 * @param double High
	 * @param double Low
	 * @param double Close
	 * @param double Bid
	 * @param double Ask
	 * @param double Change
	 * @return XiMoneyMarketsTypeSwaption
	 */
	public function __construct($_FirstType,$_SecondType,$_Date = null,$_Currency,$_Last,$_Open,$_High,$_Low,$_Close,$_Bid,$_Ask,$_Change)
	{
		XiMoneyMarketsWsdlClass::__construct(array('FirstType'=>$_FirstType,'SecondType'=>$_SecondType,'Date'=>$_Date,'Currency'=>$_Currency,'Last'=>$_Last,'Open'=>$_Open,'High'=>$_High,'Low'=>$_Low,'Close'=>$_Close,'Bid'=>$_Bid,'Ask'=>$_Ask,'Change'=>$_Change));
	}
	/**
	 * Set FirstType
	 * @param SwaptionTypes FirstType
	 * @return SwaptionTypes
	 */
	public function setFirstType($_FirstType)
	{
		return ($this->FirstType = XiMoneyMarketsTypeSwaptionTypes::valueIsValid($_FirstType)?$_FirstType:null);
	}
	/**
	 * Get FirstType
	 * @return XiMoneyMarketsTypeSwaptionTypes
	 */
	public function getFirstType()
	{
		return $this->FirstType;
	}
	/**
	 * Set SecondType
	 * @param SwaptionTypes SecondType
	 * @return SwaptionTypes
	 */
	public function setSecondType($_SecondType)
	{
		return ($this->SecondType = XiMoneyMarketsTypeSwaptionTypes::valueIsValid($_SecondType)?$_SecondType:null);
	}
	/**
	 * Get SecondType
	 * @return XiMoneyMarketsTypeSwaptionTypes
	 */
	public function getSecondType()
	{
		return $this->SecondType;
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
	 * Set Currency
	 * @param SwapCurrencyTypes Currency
	 * @return SwapCurrencyTypes
	 */
	public function setCurrency($_Currency)
	{
		return ($this->Currency = XiMoneyMarketsTypeSwapCurrencyTypes::valueIsValid($_Currency)?$_Currency:null);
	}
	/**
	 * Get Currency
	 * @return XiMoneyMarketsTypeSwapCurrencyTypes
	 */
	public function getCurrency()
	{
		return $this->Currency;
	}
	/**
	 * Set Last
	 * @param double Last
	 * @return double
	 */
	public function setLast($_Last)
	{
		return ($this->Last = $_Last);
	}
	/**
	 * Get Last
	 * @return double
	 */
	public function getLast()
	{
		return $this->Last;
	}
	/**
	 * Set Open
	 * @param double Open
	 * @return double
	 */
	public function setOpen($_Open)
	{
		return ($this->Open = $_Open);
	}
	/**
	 * Get Open
	 * @return double
	 */
	public function getOpen()
	{
		return $this->Open;
	}
	/**
	 * Set High
	 * @param double High
	 * @return double
	 */
	public function setHigh($_High)
	{
		return ($this->High = $_High);
	}
	/**
	 * Get High
	 * @return double
	 */
	public function getHigh()
	{
		return $this->High;
	}
	/**
	 * Set Low
	 * @param double Low
	 * @return double
	 */
	public function setLow($_Low)
	{
		return ($this->Low = $_Low);
	}
	/**
	 * Get Low
	 * @return double
	 */
	public function getLow()
	{
		return $this->Low;
	}
	/**
	 * Set Close
	 * @param double Close
	 * @return double
	 */
	public function setClose($_Close)
	{
		return ($this->Close = $_Close);
	}
	/**
	 * Get Close
	 * @return double
	 */
	public function getClose()
	{
		return $this->Close;
	}
	/**
	 * Set Bid
	 * @param double Bid
	 * @return double
	 */
	public function setBid($_Bid)
	{
		return ($this->Bid = $_Bid);
	}
	/**
	 * Get Bid
	 * @return double
	 */
	public function getBid()
	{
		return $this->Bid;
	}
	/**
	 * Set Ask
	 * @param double Ask
	 * @return double
	 */
	public function setAsk($_Ask)
	{
		return ($this->Ask = $_Ask);
	}
	/**
	 * Get Ask
	 * @return double
	 */
	public function getAsk()
	{
		return $this->Ask;
	}
	/**
	 * Set Change
	 * @param double Change
	 * @return double
	 */
	public function setChange($_Change)
	{
		return ($this->Change = $_Change);
	}
	/**
	 * Get Change
	 * @return double
	 */
	public function getChange()
	{
		return $this->Change;
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