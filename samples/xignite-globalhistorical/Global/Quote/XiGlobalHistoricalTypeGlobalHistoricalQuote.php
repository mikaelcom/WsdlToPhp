<?php
/**
 * Class file for XiGlobalHistoricalTypeGlobalHistoricalQuote
 * @date 08/07/2012
 */
/**
 * Class XiGlobalHistoricalTypeGlobalHistoricalQuote
 * @date 08/07/2012
 */
class XiGlobalHistoricalTypeGlobalHistoricalQuote extends XiGlobalHistoricalTypeAbstractGlobalHistoricalObject
{
	/**
	 * The Security
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalHistoricalTypeSecurity
	 */
	public $Security;
	/**
	 * The Date
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Date;
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
	 * The Volume
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Volume;
	/**
	 * The LastClose
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $LastClose;
	/**
	 * The ChangeFromOpen
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $ChangeFromOpen;
	/**
	 * The PercentChangeFromOpen
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $PercentChangeFromOpen;
	/**
	 * The ChangeFromLastClose
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $ChangeFromLastClose;
	/**
	 * The PercentChangeFromLastClose
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $PercentChangeFromLastClose;
	/**
	 * The SplitRatio
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $SplitRatio;
	/**
	 * The CummulativeCashDividend
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $CummulativeCashDividend;
	/**
	 * The CummulativeStockDividendRatio
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $CummulativeStockDividendRatio;
	/**
	 * The Currency
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiGlobalHistoricalTypeCurrencies
	 */
	public $Currency;
	/**
	 * The AdjustmentMethodUsed
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var AdjustmentMethods
	 */
	public $AdjustmentMethodUsed;
	/**
	 * The DataConfidence
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var QuoteStatus
	 */
	public $DataConfidence;
	/**
	 * Constructor
	 * @param XiGlobalHistoricalTypeSecurity Security
	 * @param string Date
	 * @param double Last
	 * @param double Open
	 * @param double High
	 * @param double Low
	 * @param double Volume
	 * @param double LastClose
	 * @param double ChangeFromOpen
	 * @param double PercentChangeFromOpen
	 * @param double ChangeFromLastClose
	 * @param double PercentChangeFromLastClose
	 * @param double SplitRatio
	 * @param double CummulativeCashDividend
	 * @param double CummulativeStockDividendRatio
	 * @param XiGlobalHistoricalTypeCurrencies Currency
	 * @param AdjustmentMethods AdjustmentMethodUsed
	 * @param QuoteStatus DataConfidence
	 * @return XiGlobalHistoricalTypeGlobalHistoricalQuote
	 */
	public function __construct($_Security = null,$_Date = null,$_Last,$_Open,$_High,$_Low,$_Volume,$_LastClose,$_ChangeFromOpen,$_PercentChangeFromOpen,$_ChangeFromLastClose,$_PercentChangeFromLastClose,$_SplitRatio,$_CummulativeCashDividend,$_CummulativeStockDividendRatio,$_Currency,$_AdjustmentMethodUsed,$_DataConfidence)
	{
		XiGlobalHistoricalWsdlClass::__construct(array('Security'=>$_Security,'Date'=>$_Date,'Last'=>$_Last,'Open'=>$_Open,'High'=>$_High,'Low'=>$_Low,'Volume'=>$_Volume,'LastClose'=>$_LastClose,'ChangeFromOpen'=>$_ChangeFromOpen,'PercentChangeFromOpen'=>$_PercentChangeFromOpen,'ChangeFromLastClose'=>$_ChangeFromLastClose,'PercentChangeFromLastClose'=>$_PercentChangeFromLastClose,'SplitRatio'=>$_SplitRatio,'CummulativeCashDividend'=>$_CummulativeCashDividend,'CummulativeStockDividendRatio'=>$_CummulativeStockDividendRatio,'Currency'=>$_Currency,'AdjustmentMethodUsed'=>$_AdjustmentMethodUsed,'DataConfidence'=>$_DataConfidence));
	}
	/**
	 * Set Security
	 * @param Security Security
	 * @return Security
	 */
	public function setSecurity($_Security)
	{
		return ($this->Security = $_Security);
	}
	/**
	 * Get Security
	 * @return XiGlobalHistoricalTypeSecurity
	 */
	public function getSecurity()
	{
		return $this->Security;
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
	 * Set Volume
	 * @param double Volume
	 * @return double
	 */
	public function setVolume($_Volume)
	{
		return ($this->Volume = $_Volume);
	}
	/**
	 * Get Volume
	 * @return double
	 */
	public function getVolume()
	{
		return $this->Volume;
	}
	/**
	 * Set LastClose
	 * @param double LastClose
	 * @return double
	 */
	public function setLastClose($_LastClose)
	{
		return ($this->LastClose = $_LastClose);
	}
	/**
	 * Get LastClose
	 * @return double
	 */
	public function getLastClose()
	{
		return $this->LastClose;
	}
	/**
	 * Set ChangeFromOpen
	 * @param double ChangeFromOpen
	 * @return double
	 */
	public function setChangeFromOpen($_ChangeFromOpen)
	{
		return ($this->ChangeFromOpen = $_ChangeFromOpen);
	}
	/**
	 * Get ChangeFromOpen
	 * @return double
	 */
	public function getChangeFromOpen()
	{
		return $this->ChangeFromOpen;
	}
	/**
	 * Set PercentChangeFromOpen
	 * @param double PercentChangeFromOpen
	 * @return double
	 */
	public function setPercentChangeFromOpen($_PercentChangeFromOpen)
	{
		return ($this->PercentChangeFromOpen = $_PercentChangeFromOpen);
	}
	/**
	 * Get PercentChangeFromOpen
	 * @return double
	 */
	public function getPercentChangeFromOpen()
	{
		return $this->PercentChangeFromOpen;
	}
	/**
	 * Set ChangeFromLastClose
	 * @param double ChangeFromLastClose
	 * @return double
	 */
	public function setChangeFromLastClose($_ChangeFromLastClose)
	{
		return ($this->ChangeFromLastClose = $_ChangeFromLastClose);
	}
	/**
	 * Get ChangeFromLastClose
	 * @return double
	 */
	public function getChangeFromLastClose()
	{
		return $this->ChangeFromLastClose;
	}
	/**
	 * Set PercentChangeFromLastClose
	 * @param double PercentChangeFromLastClose
	 * @return double
	 */
	public function setPercentChangeFromLastClose($_PercentChangeFromLastClose)
	{
		return ($this->PercentChangeFromLastClose = $_PercentChangeFromLastClose);
	}
	/**
	 * Get PercentChangeFromLastClose
	 * @return double
	 */
	public function getPercentChangeFromLastClose()
	{
		return $this->PercentChangeFromLastClose;
	}
	/**
	 * Set SplitRatio
	 * @param double SplitRatio
	 * @return double
	 */
	public function setSplitRatio($_SplitRatio)
	{
		return ($this->SplitRatio = $_SplitRatio);
	}
	/**
	 * Get SplitRatio
	 * @return double
	 */
	public function getSplitRatio()
	{
		return $this->SplitRatio;
	}
	/**
	 * Set CummulativeCashDividend
	 * @param double CummulativeCashDividend
	 * @return double
	 */
	public function setCummulativeCashDividend($_CummulativeCashDividend)
	{
		return ($this->CummulativeCashDividend = $_CummulativeCashDividend);
	}
	/**
	 * Get CummulativeCashDividend
	 * @return double
	 */
	public function getCummulativeCashDividend()
	{
		return $this->CummulativeCashDividend;
	}
	/**
	 * Set CummulativeStockDividendRatio
	 * @param double CummulativeStockDividendRatio
	 * @return double
	 */
	public function setCummulativeStockDividendRatio($_CummulativeStockDividendRatio)
	{
		return ($this->CummulativeStockDividendRatio = $_CummulativeStockDividendRatio);
	}
	/**
	 * Get CummulativeStockDividendRatio
	 * @return double
	 */
	public function getCummulativeStockDividendRatio()
	{
		return $this->CummulativeStockDividendRatio;
	}
	/**
	 * Set Currency
	 * @param Currencies Currency
	 * @return Currencies
	 */
	public function setCurrency($_Currency)
	{
		return ($this->Currency = XiGlobalHistoricalTypeCurrencies::valueIsValid($_Currency)?$_Currency:null);
	}
	/**
	 * Get Currency
	 * @return XiGlobalHistoricalTypeCurrencies
	 */
	public function getCurrency()
	{
		return $this->Currency;
	}
	/**
	 * Set AdjustmentMethodUsed
	 * @param AdjustmentMethods AdjustmentMethodUsed
	 * @return AdjustmentMethods
	 */
	public function setAdjustmentMethodUsed($_AdjustmentMethodUsed)
	{
		return ($this->AdjustmentMethodUsed = $_AdjustmentMethodUsed);
	}
	/**
	 * Get AdjustmentMethodUsed
	 * @return AdjustmentMethods
	 */
	public function getAdjustmentMethodUsed()
	{
		return $this->AdjustmentMethodUsed;
	}
	/**
	 * Set DataConfidence
	 * @param QuoteStatus DataConfidence
	 * @return QuoteStatus
	 */
	public function setDataConfidence($_DataConfidence)
	{
		return ($this->DataConfidence = $_DataConfidence);
	}
	/**
	 * Get DataConfidence
	 * @return QuoteStatus
	 */
	public function getDataConfidence()
	{
		return $this->DataConfidence;
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