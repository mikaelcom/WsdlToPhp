<?php
/**
 * Class file for RFStockQuoteTypeStockQuote
 * @date 15/08/2012
 */
/**
 * Class RFStockQuoteTypeStockQuote
 * @date 15/08/2012
 */
class RFStockQuoteTypeStockQuote extends RFStockQuoteWsdlClass
{
	/**
	 * The Symbol
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $Symbol;
	/**
	 * The Last
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $Last;
	/**
	 * The Date
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $Date;
	/**
	 * The Time
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $Time;
	/**
	 * The Change
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $Change;
	/**
	 * The Open
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $Open;
	/**
	 * The High
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $High;
	/**
	 * The Low
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $Low;
	/**
	 * The Volume
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $Volume;
	/**
	 * The MktCap
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $MktCap;
	/**
	 * The PreviousClose
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $PreviousClose;
	/**
	 * The PercentageChange
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $PercentageChange;
	/**
	 * The AnnRange
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $AnnRange;
	/**
	 * The Earns
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $Earns;
	/**
	 * The PE
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $PE;
	/**
	 * The Name
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $Name;
	/**
	 * Constructor
	 * @param string Symbol
	 * @param string Last
	 * @param string Date
	 * @param string Time
	 * @param string Change
	 * @param string Open
	 * @param string High
	 * @param string Low
	 * @param string Volume
	 * @param string MktCap
	 * @param string PreviousClose
	 * @param string PercentageChange
	 * @param string AnnRange
	 * @param string Earns
	 * @param string PE
	 * @param string Name
	 * @return RFStockQuoteTypeStockQuote
	 */
	public function __construct($_Symbol = null,$_Last = null,$_Date = null,$_Time = null,$_Change = null,$_Open = null,$_High = null,$_Low = null,$_Volume = null,$_MktCap = null,$_PreviousClose = null,$_PercentageChange = null,$_AnnRange = null,$_Earns = null,$_PE = null,$_Name = null)
	{
		parent::__construct(array('Symbol'=>$_Symbol,'Last'=>$_Last,'Date'=>$_Date,'Time'=>$_Time,'Change'=>$_Change,'Open'=>$_Open,'High'=>$_High,'Low'=>$_Low,'Volume'=>$_Volume,'MktCap'=>$_MktCap,'PreviousClose'=>$_PreviousClose,'PercentageChange'=>$_PercentageChange,'AnnRange'=>$_AnnRange,'Earns'=>$_Earns,'PE'=>$_PE,'Name'=>$_Name));
	}
	/**
	 * Set Symbol
	 * @param string Symbol
	 * @return string
	 */
	public function setSymbol($_Symbol)
	{
		return ($this->Symbol = $_Symbol);
	}
	/**
	 * Get Symbol
	 * @return string
	 */
	public function getSymbol()
	{
		return $this->Symbol;
	}
	/**
	 * Set Last
	 * @param string Last
	 * @return string
	 */
	public function setLast($_Last)
	{
		return ($this->Last = $_Last);
	}
	/**
	 * Get Last
	 * @return string
	 */
	public function getLast()
	{
		return $this->Last;
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
	 * Set Time
	 * @param string Time
	 * @return string
	 */
	public function setTime($_Time)
	{
		return ($this->Time = $_Time);
	}
	/**
	 * Get Time
	 * @return string
	 */
	public function getTime()
	{
		return $this->Time;
	}
	/**
	 * Set Change
	 * @param string Change
	 * @return string
	 */
	public function setChange($_Change)
	{
		return ($this->Change = $_Change);
	}
	/**
	 * Get Change
	 * @return string
	 */
	public function getChange()
	{
		return $this->Change;
	}
	/**
	 * Set Open
	 * @param string Open
	 * @return string
	 */
	public function setOpen($_Open)
	{
		return ($this->Open = $_Open);
	}
	/**
	 * Get Open
	 * @return string
	 */
	public function getOpen()
	{
		return $this->Open;
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
	 * Set Volume
	 * @param string Volume
	 * @return string
	 */
	public function setVolume($_Volume)
	{
		return ($this->Volume = $_Volume);
	}
	/**
	 * Get Volume
	 * @return string
	 */
	public function getVolume()
	{
		return $this->Volume;
	}
	/**
	 * Set MktCap
	 * @param string MktCap
	 * @return string
	 */
	public function setMktCap($_MktCap)
	{
		return ($this->MktCap = $_MktCap);
	}
	/**
	 * Get MktCap
	 * @return string
	 */
	public function getMktCap()
	{
		return $this->MktCap;
	}
	/**
	 * Set PreviousClose
	 * @param string PreviousClose
	 * @return string
	 */
	public function setPreviousClose($_PreviousClose)
	{
		return ($this->PreviousClose = $_PreviousClose);
	}
	/**
	 * Get PreviousClose
	 * @return string
	 */
	public function getPreviousClose()
	{
		return $this->PreviousClose;
	}
	/**
	 * Set PercentageChange
	 * @param string PercentageChange
	 * @return string
	 */
	public function setPercentageChange($_PercentageChange)
	{
		return ($this->PercentageChange = $_PercentageChange);
	}
	/**
	 * Get PercentageChange
	 * @return string
	 */
	public function getPercentageChange()
	{
		return $this->PercentageChange;
	}
	/**
	 * Set AnnRange
	 * @param string AnnRange
	 * @return string
	 */
	public function setAnnRange($_AnnRange)
	{
		return ($this->AnnRange = $_AnnRange);
	}
	/**
	 * Get AnnRange
	 * @return string
	 */
	public function getAnnRange()
	{
		return $this->AnnRange;
	}
	/**
	 * Set Earns
	 * @param string Earns
	 * @return string
	 */
	public function setEarns($_Earns)
	{
		return ($this->Earns = $_Earns);
	}
	/**
	 * Get Earns
	 * @return string
	 */
	public function getEarns()
	{
		return $this->Earns;
	}
	/**
	 * Set PE
	 * @param string PE
	 * @return string
	 */
	public function setPE($_PE)
	{
		return ($this->PE = $_PE);
	}
	/**
	 * Get PE
	 * @return string
	 */
	public function getPE()
	{
		return $this->PE;
	}
	/**
	 * Set Name
	 * @param string Name
	 * @return string
	 */
	public function setName($_Name)
	{
		return ($this->Name = $_Name);
	}
	/**
	 * Get Name
	 * @return string
	 */
	public function getName()
	{
		return $this->Name;
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