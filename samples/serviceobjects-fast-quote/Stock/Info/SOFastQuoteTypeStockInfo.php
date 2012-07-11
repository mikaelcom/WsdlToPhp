<?php
/**
 * Class file for SOFastQuoteTypeStockInfo
 * @date 08/07/2012
 */
/**
 * Class SOFastQuoteTypeStockInfo
 * @date 08/07/2012
 */
class SOFastQuoteTypeStockInfo extends SOFastQuoteWsdlClass
{
	/**
	 * The Error
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOFastQuoteTypeErr
	 */
	public $Error;
	/**
	 * The Symbol
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Symbol;
	/**
	 * The Name
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Name;
	/**
	 * The QuoteOpen
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $QuoteOpen;
	/**
	 * The PreviousClose
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PreviousClose;
	/**
	 * The QuoteLast
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $QuoteLast;
	/**
	 * The QuoteVolume
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $QuoteVolume;
	/**
	 * The QuoteChange
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $QuoteChange;
	/**
	 * The QuotePercentChange
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $QuotePercentChange;
	/**
	 * The QuoteDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $QuoteDate;
	/**
	 * The QuoteTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $QuoteTime;
	/**
	 * The QuoteHigh
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $QuoteHigh;
	/**
	 * The QuoteLow
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $QuoteLow;
	/**
	 * The FiftyTwoWeekHigh
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $FiftyTwoWeekHigh;
	/**
	 * The FiftyTwoWeekLow
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $FiftyTwoWeekLow;
	/**
	 * The PE
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PE;
	/**
	 * The DivPerShare
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $DivPerShare;
	/**
	 * The NAV
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $NAV;
	/**
	 * The PrevNAV
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PrevNAV;
	/**
	 * The Status
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Status;
	/**
	 * The IndexInfo
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $IndexInfo;
	/**
	 * Constructor
	 * @param SOFastQuoteTypeErr Error
	 * @param string Symbol
	 * @param string Name
	 * @param string QuoteOpen
	 * @param string PreviousClose
	 * @param string QuoteLast
	 * @param string QuoteVolume
	 * @param string QuoteChange
	 * @param string QuotePercentChange
	 * @param string QuoteDate
	 * @param string QuoteTime
	 * @param string QuoteHigh
	 * @param string QuoteLow
	 * @param string FiftyTwoWeekHigh
	 * @param string FiftyTwoWeekLow
	 * @param string PE
	 * @param string DivPerShare
	 * @param string NAV
	 * @param string PrevNAV
	 * @param string Status
	 * @param boolean IndexInfo
	 * @return SOFastQuoteTypeStockInfo
	 */
	public function __construct($_Error = null,$_Symbol = null,$_Name = null,$_QuoteOpen = null,$_PreviousClose = null,$_QuoteLast = null,$_QuoteVolume = null,$_QuoteChange = null,$_QuotePercentChange = null,$_QuoteDate = null,$_QuoteTime = null,$_QuoteHigh = null,$_QuoteLow = null,$_FiftyTwoWeekHigh = null,$_FiftyTwoWeekLow = null,$_PE = null,$_DivPerShare = null,$_NAV = null,$_PrevNAV = null,$_Status = null,$_IndexInfo)
	{
		parent::__construct(array('Error'=>$_Error,'Symbol'=>$_Symbol,'Name'=>$_Name,'QuoteOpen'=>$_QuoteOpen,'PreviousClose'=>$_PreviousClose,'QuoteLast'=>$_QuoteLast,'QuoteVolume'=>$_QuoteVolume,'QuoteChange'=>$_QuoteChange,'QuotePercentChange'=>$_QuotePercentChange,'QuoteDate'=>$_QuoteDate,'QuoteTime'=>$_QuoteTime,'QuoteHigh'=>$_QuoteHigh,'QuoteLow'=>$_QuoteLow,'FiftyTwoWeekHigh'=>$_FiftyTwoWeekHigh,'FiftyTwoWeekLow'=>$_FiftyTwoWeekLow,'PE'=>$_PE,'DivPerShare'=>$_DivPerShare,'NAV'=>$_NAV,'PrevNAV'=>$_PrevNAV,'Status'=>$_Status,'IndexInfo'=>$_IndexInfo));
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
	 * @return SOFastQuoteTypeErr
	 */
	public function getError()
	{
		return $this->Error;
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
	 * Set QuoteOpen
	 * @param string QuoteOpen
	 * @return string
	 */
	public function setQuoteOpen($_QuoteOpen)
	{
		return ($this->QuoteOpen = $_QuoteOpen);
	}
	/**
	 * Get QuoteOpen
	 * @return string
	 */
	public function getQuoteOpen()
	{
		return $this->QuoteOpen;
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
	 * Set QuoteLast
	 * @param string QuoteLast
	 * @return string
	 */
	public function setQuoteLast($_QuoteLast)
	{
		return ($this->QuoteLast = $_QuoteLast);
	}
	/**
	 * Get QuoteLast
	 * @return string
	 */
	public function getQuoteLast()
	{
		return $this->QuoteLast;
	}
	/**
	 * Set QuoteVolume
	 * @param string QuoteVolume
	 * @return string
	 */
	public function setQuoteVolume($_QuoteVolume)
	{
		return ($this->QuoteVolume = $_QuoteVolume);
	}
	/**
	 * Get QuoteVolume
	 * @return string
	 */
	public function getQuoteVolume()
	{
		return $this->QuoteVolume;
	}
	/**
	 * Set QuoteChange
	 * @param string QuoteChange
	 * @return string
	 */
	public function setQuoteChange($_QuoteChange)
	{
		return ($this->QuoteChange = $_QuoteChange);
	}
	/**
	 * Get QuoteChange
	 * @return string
	 */
	public function getQuoteChange()
	{
		return $this->QuoteChange;
	}
	/**
	 * Set QuotePercentChange
	 * @param string QuotePercentChange
	 * @return string
	 */
	public function setQuotePercentChange($_QuotePercentChange)
	{
		return ($this->QuotePercentChange = $_QuotePercentChange);
	}
	/**
	 * Get QuotePercentChange
	 * @return string
	 */
	public function getQuotePercentChange()
	{
		return $this->QuotePercentChange;
	}
	/**
	 * Set QuoteDate
	 * @param string QuoteDate
	 * @return string
	 */
	public function setQuoteDate($_QuoteDate)
	{
		return ($this->QuoteDate = $_QuoteDate);
	}
	/**
	 * Get QuoteDate
	 * @return string
	 */
	public function getQuoteDate()
	{
		return $this->QuoteDate;
	}
	/**
	 * Set QuoteTime
	 * @param string QuoteTime
	 * @return string
	 */
	public function setQuoteTime($_QuoteTime)
	{
		return ($this->QuoteTime = $_QuoteTime);
	}
	/**
	 * Get QuoteTime
	 * @return string
	 */
	public function getQuoteTime()
	{
		return $this->QuoteTime;
	}
	/**
	 * Set QuoteHigh
	 * @param string QuoteHigh
	 * @return string
	 */
	public function setQuoteHigh($_QuoteHigh)
	{
		return ($this->QuoteHigh = $_QuoteHigh);
	}
	/**
	 * Get QuoteHigh
	 * @return string
	 */
	public function getQuoteHigh()
	{
		return $this->QuoteHigh;
	}
	/**
	 * Set QuoteLow
	 * @param string QuoteLow
	 * @return string
	 */
	public function setQuoteLow($_QuoteLow)
	{
		return ($this->QuoteLow = $_QuoteLow);
	}
	/**
	 * Get QuoteLow
	 * @return string
	 */
	public function getQuoteLow()
	{
		return $this->QuoteLow;
	}
	/**
	 * Set FiftyTwoWeekHigh
	 * @param string FiftyTwoWeekHigh
	 * @return string
	 */
	public function setFiftyTwoWeekHigh($_FiftyTwoWeekHigh)
	{
		return ($this->FiftyTwoWeekHigh = $_FiftyTwoWeekHigh);
	}
	/**
	 * Get FiftyTwoWeekHigh
	 * @return string
	 */
	public function getFiftyTwoWeekHigh()
	{
		return $this->FiftyTwoWeekHigh;
	}
	/**
	 * Set FiftyTwoWeekLow
	 * @param string FiftyTwoWeekLow
	 * @return string
	 */
	public function setFiftyTwoWeekLow($_FiftyTwoWeekLow)
	{
		return ($this->FiftyTwoWeekLow = $_FiftyTwoWeekLow);
	}
	/**
	 * Get FiftyTwoWeekLow
	 * @return string
	 */
	public function getFiftyTwoWeekLow()
	{
		return $this->FiftyTwoWeekLow;
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
	 * Set DivPerShare
	 * @param string DivPerShare
	 * @return string
	 */
	public function setDivPerShare($_DivPerShare)
	{
		return ($this->DivPerShare = $_DivPerShare);
	}
	/**
	 * Get DivPerShare
	 * @return string
	 */
	public function getDivPerShare()
	{
		return $this->DivPerShare;
	}
	/**
	 * Set NAV
	 * @param string NAV
	 * @return string
	 */
	public function setNAV($_NAV)
	{
		return ($this->NAV = $_NAV);
	}
	/**
	 * Get NAV
	 * @return string
	 */
	public function getNAV()
	{
		return $this->NAV;
	}
	/**
	 * Set PrevNAV
	 * @param string PrevNAV
	 * @return string
	 */
	public function setPrevNAV($_PrevNAV)
	{
		return ($this->PrevNAV = $_PrevNAV);
	}
	/**
	 * Get PrevNAV
	 * @return string
	 */
	public function getPrevNAV()
	{
		return $this->PrevNAV;
	}
	/**
	 * Set Status
	 * @param string Status
	 * @return string
	 */
	public function setStatus($_Status)
	{
		return ($this->Status = $_Status);
	}
	/**
	 * Get Status
	 * @return string
	 */
	public function getStatus()
	{
		return $this->Status;
	}
	/**
	 * Set IndexInfo
	 * @param boolean IndexInfo
	 * @return boolean
	 */
	public function setIndexInfo($_IndexInfo)
	{
		return ($this->IndexInfo = $_IndexInfo);
	}
	/**
	 * Get IndexInfo
	 * @return boolean
	 */
	public function getIndexInfo()
	{
		return $this->IndexInfo;
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