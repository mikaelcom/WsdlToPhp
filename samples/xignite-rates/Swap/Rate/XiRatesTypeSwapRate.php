<?php
/**
 * Class file for XiRatesTypeSwapRate
 * @date 08/07/2012
 */
/**
 * Class XiRatesTypeSwapRate
 * @date 08/07/2012
 */
class XiRatesTypeSwapRate extends XiRatesTypeCommon
{
	/**
	 * The Type
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiRatesTypeSwapRateTypes
	 */
	public $Type;
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
	 * @var XiRatesTypeSwapCurrencyTypes
	 */
	public $Currency;
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
	 * The Mid
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Mid;
	/**
	 * The Spread
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Spread;
	/**
	 * Constructor
	 * @param XiRatesTypeSwapRateTypes Type
	 * @param string Date
	 * @param XiRatesTypeSwapCurrencyTypes Currency
	 * @param double Bid
	 * @param double Ask
	 * @param double Mid
	 * @param double Spread
	 * @return XiRatesTypeSwapRate
	 */
	public function __construct($_Type,$_Date = null,$_Currency,$_Bid,$_Ask,$_Mid,$_Spread)
	{
		XiRatesWsdlClass::__construct(array('Type'=>$_Type,'Date'=>$_Date,'Currency'=>$_Currency,'Bid'=>$_Bid,'Ask'=>$_Ask,'Mid'=>$_Mid,'Spread'=>$_Spread));
	}
	/**
	 * Set Type
	 * @param SwapRateTypes Type
	 * @return SwapRateTypes
	 */
	public function setType($_Type)
	{
		return ($this->Type = XiRatesTypeSwapRateTypes::valueIsValid($_Type)?$_Type:null);
	}
	/**
	 * Get Type
	 * @return XiRatesTypeSwapRateTypes
	 */
	public function getType()
	{
		return $this->Type;
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
		return ($this->Currency = XiRatesTypeSwapCurrencyTypes::valueIsValid($_Currency)?$_Currency:null);
	}
	/**
	 * Get Currency
	 * @return XiRatesTypeSwapCurrencyTypes
	 */
	public function getCurrency()
	{
		return $this->Currency;
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
	 * Set Mid
	 * @param double Mid
	 * @return double
	 */
	public function setMid($_Mid)
	{
		return ($this->Mid = $_Mid);
	}
	/**
	 * Get Mid
	 * @return double
	 */
	public function getMid()
	{
		return $this->Mid;
	}
	/**
	 * Set Spread
	 * @param double Spread
	 * @return double
	 */
	public function setSpread($_Spread)
	{
		return ($this->Spread = $_Spread);
	}
	/**
	 * Get Spread
	 * @return double
	 */
	public function getSpread()
	{
		return $this->Spread;
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