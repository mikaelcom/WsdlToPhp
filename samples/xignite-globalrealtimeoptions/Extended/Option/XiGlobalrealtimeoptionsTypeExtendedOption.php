<?php
/**
 * Class file for XiGlobalrealtimeoptionsTypeExtendedOption
 * @date 08/07/2012
 */
/**
 * Class XiGlobalrealtimeoptionsTypeExtendedOption
 * @date 08/07/2012
 */
class XiGlobalrealtimeoptionsTypeExtendedOption extends XiGlobalrealtimeoptionsTypeOption
{
	/**
	 * The CFI
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CFI;
	/**
	 * The QuoteType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $QuoteType;
	/**
	 * The ContractSize
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $ContractSize;
	/**
	 * The DelayedMinutes
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $DelayedMinutes;
	/**
	 * The UTCLastDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $UTCLastDate;
	/**
	 * The UTCLastTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $UTCLastTime;
	/**
	 * The UTCBidDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $UTCBidDate;
	/**
	 * The UTCBidTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $UTCBidTime;
	/**
	 * The UTCAskDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $UTCAskDate;
	/**
	 * The UTCAskTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $UTCAskTime;
	/**
	 * The LastPriceStyle
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $LastPriceStyle;
	/**
	 * The OpenStyle
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $OpenStyle;
	/**
	 * The CloseStyle
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CloseStyle;
	/**
	 * The HighStyle
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $HighStyle;
	/**
	 * The LowStyle
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $LowStyle;
	/**
	 * The VolumeStyle
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $VolumeStyle;
	/**
	 * The AskStyle
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $AskStyle;
	/**
	 * The BidStyle
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $BidStyle;
	/**
	 * The Mid
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Mid;
	/**
	 * The MidDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $MidDate;
	/**
	 * The MidTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $MidTime;
	/**
	 * The MidStyle
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $MidStyle;
	/**
	 * The Valuation
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Valuation;
	/**
	 * The ValuationDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ValuationDate;
	/**
	 * The ValuationTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ValuationTime;
	/**
	 * The ValuationType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ValuationType;
	/**
	 * The ValuationStyle
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ValuationStyle;
	/**
	 * The UnderlyingSpot
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $UnderlyingSpot;
	/**
	 * The UnderlyingSpotDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $UnderlyingSpotDate;
	/**
	 * The PreviousDayLast
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $PreviousDayLast;
	/**
	 * The PreviousDayLastDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PreviousDayLastDate;
	/**
	 * The PreviousDayLastTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PreviousDayLastTime;
	/**
	 * The PreviousDayLastPriceStyle
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PreviousDayLastPriceStyle;
	/**
	 * The PreviousDayLastSize
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $PreviousDayLastSize;
	/**
	 * The PreviousDayValuation
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $PreviousDayValuation;
	/**
	 * The PreviousDayValuationDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PreviousDayValuationDate;
	/**
	 * The PreviousDayValuationTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PreviousDayValuationTime;
	/**
	 * The PreviousDayValuationStyle
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PreviousDayValuationStyle;
	/**
	 * The PreviousDayAsk
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $PreviousDayAsk;
	/**
	 * The PreviousDayAskDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PreviousDayAskDate;
	/**
	 * The PreviousDayAskTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PreviousDayAskTime;
	/**
	 * The PreviousDayAskStyle
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PreviousDayAskStyle;
	/**
	 * The PreviousDayBid
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $PreviousDayBid;
	/**
	 * The PreviousDayBidDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PreviousDayBidDate;
	/**
	 * The PreviousDayBidTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PreviousDayBidTime;
	/**
	 * The PreviousDayBidStyle
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PreviousDayBidStyle;
	/**
	 * The PreviousDayMid
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $PreviousDayMid;
	/**
	 * The PreviousDayMidDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PreviousDayMidDate;
	/**
	 * The PreviousDayMidStyle
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PreviousDayMidStyle;
	/**
	 * Constructor
	 * @param string CFI
	 * @param string QuoteType
	 * @param double ContractSize
	 * @param int DelayedMinutes
	 * @param string UTCLastDate
	 * @param string UTCLastTime
	 * @param string UTCBidDate
	 * @param string UTCBidTime
	 * @param string UTCAskDate
	 * @param string UTCAskTime
	 * @param string LastPriceStyle
	 * @param string OpenStyle
	 * @param string CloseStyle
	 * @param string HighStyle
	 * @param string LowStyle
	 * @param string VolumeStyle
	 * @param string AskStyle
	 * @param string BidStyle
	 * @param double Mid
	 * @param string MidDate
	 * @param string MidTime
	 * @param string MidStyle
	 * @param double Valuation
	 * @param string ValuationDate
	 * @param string ValuationTime
	 * @param string ValuationType
	 * @param string ValuationStyle
	 * @param double UnderlyingSpot
	 * @param string UnderlyingSpotDate
	 * @param double PreviousDayLast
	 * @param string PreviousDayLastDate
	 * @param string PreviousDayLastTime
	 * @param string PreviousDayLastPriceStyle
	 * @param double PreviousDayLastSize
	 * @param double PreviousDayValuation
	 * @param string PreviousDayValuationDate
	 * @param string PreviousDayValuationTime
	 * @param string PreviousDayValuationStyle
	 * @param double PreviousDayAsk
	 * @param string PreviousDayAskDate
	 * @param string PreviousDayAskTime
	 * @param string PreviousDayAskStyle
	 * @param double PreviousDayBid
	 * @param string PreviousDayBidDate
	 * @param string PreviousDayBidTime
	 * @param string PreviousDayBidStyle
	 * @param double PreviousDayMid
	 * @param string PreviousDayMidDate
	 * @param string PreviousDayMidStyle
	 * @return XiGlobalrealtimeoptionsTypeExtendedOption
	 */
	public function __construct($_CFI = null,$_QuoteType = null,$_ContractSize,$_DelayedMinutes,$_UTCLastDate = null,$_UTCLastTime = null,$_UTCBidDate = null,$_UTCBidTime = null,$_UTCAskDate = null,$_UTCAskTime = null,$_LastPriceStyle = null,$_OpenStyle = null,$_CloseStyle = null,$_HighStyle = null,$_LowStyle = null,$_VolumeStyle = null,$_AskStyle = null,$_BidStyle = null,$_Mid,$_MidDate = null,$_MidTime = null,$_MidStyle = null,$_Valuation,$_ValuationDate = null,$_ValuationTime = null,$_ValuationType = null,$_ValuationStyle = null,$_UnderlyingSpot,$_UnderlyingSpotDate = null,$_PreviousDayLast,$_PreviousDayLastDate = null,$_PreviousDayLastTime = null,$_PreviousDayLastPriceStyle = null,$_PreviousDayLastSize,$_PreviousDayValuation,$_PreviousDayValuationDate = null,$_PreviousDayValuationTime = null,$_PreviousDayValuationStyle = null,$_PreviousDayAsk,$_PreviousDayAskDate = null,$_PreviousDayAskTime = null,$_PreviousDayAskStyle = null,$_PreviousDayBid,$_PreviousDayBidDate = null,$_PreviousDayBidTime = null,$_PreviousDayBidStyle = null,$_PreviousDayMid,$_PreviousDayMidDate = null,$_PreviousDayMidStyle = null)
	{
		XiGlobalrealtimeoptionsWsdlClass::__construct(array('CFI'=>$_CFI,'QuoteType'=>$_QuoteType,'ContractSize'=>$_ContractSize,'DelayedMinutes'=>$_DelayedMinutes,'UTCLastDate'=>$_UTCLastDate,'UTCLastTime'=>$_UTCLastTime,'UTCBidDate'=>$_UTCBidDate,'UTCBidTime'=>$_UTCBidTime,'UTCAskDate'=>$_UTCAskDate,'UTCAskTime'=>$_UTCAskTime,'LastPriceStyle'=>$_LastPriceStyle,'OpenStyle'=>$_OpenStyle,'CloseStyle'=>$_CloseStyle,'HighStyle'=>$_HighStyle,'LowStyle'=>$_LowStyle,'VolumeStyle'=>$_VolumeStyle,'AskStyle'=>$_AskStyle,'BidStyle'=>$_BidStyle,'Mid'=>$_Mid,'MidDate'=>$_MidDate,'MidTime'=>$_MidTime,'MidStyle'=>$_MidStyle,'Valuation'=>$_Valuation,'ValuationDate'=>$_ValuationDate,'ValuationTime'=>$_ValuationTime,'ValuationType'=>$_ValuationType,'ValuationStyle'=>$_ValuationStyle,'UnderlyingSpot'=>$_UnderlyingSpot,'UnderlyingSpotDate'=>$_UnderlyingSpotDate,'PreviousDayLast'=>$_PreviousDayLast,'PreviousDayLastDate'=>$_PreviousDayLastDate,'PreviousDayLastTime'=>$_PreviousDayLastTime,'PreviousDayLastPriceStyle'=>$_PreviousDayLastPriceStyle,'PreviousDayLastSize'=>$_PreviousDayLastSize,'PreviousDayValuation'=>$_PreviousDayValuation,'PreviousDayValuationDate'=>$_PreviousDayValuationDate,'PreviousDayValuationTime'=>$_PreviousDayValuationTime,'PreviousDayValuationStyle'=>$_PreviousDayValuationStyle,'PreviousDayAsk'=>$_PreviousDayAsk,'PreviousDayAskDate'=>$_PreviousDayAskDate,'PreviousDayAskTime'=>$_PreviousDayAskTime,'PreviousDayAskStyle'=>$_PreviousDayAskStyle,'PreviousDayBid'=>$_PreviousDayBid,'PreviousDayBidDate'=>$_PreviousDayBidDate,'PreviousDayBidTime'=>$_PreviousDayBidTime,'PreviousDayBidStyle'=>$_PreviousDayBidStyle,'PreviousDayMid'=>$_PreviousDayMid,'PreviousDayMidDate'=>$_PreviousDayMidDate,'PreviousDayMidStyle'=>$_PreviousDayMidStyle));
	}
	/**
	 * Set CFI
	 * @param string CFI
	 * @return string
	 */
	public function setCFI($_CFI)
	{
		return ($this->CFI = $_CFI);
	}
	/**
	 * Get CFI
	 * @return string
	 */
	public function getCFI()
	{
		return $this->CFI;
	}
	/**
	 * Set QuoteType
	 * @param string QuoteType
	 * @return string
	 */
	public function setQuoteType($_QuoteType)
	{
		return ($this->QuoteType = $_QuoteType);
	}
	/**
	 * Get QuoteType
	 * @return string
	 */
	public function getQuoteType()
	{
		return $this->QuoteType;
	}
	/**
	 * Set ContractSize
	 * @param double ContractSize
	 * @return double
	 */
	public function setContractSize($_ContractSize)
	{
		return ($this->ContractSize = $_ContractSize);
	}
	/**
	 * Get ContractSize
	 * @return double
	 */
	public function getContractSize()
	{
		return $this->ContractSize;
	}
	/**
	 * Set DelayedMinutes
	 * @param int DelayedMinutes
	 * @return int
	 */
	public function setDelayedMinutes($_DelayedMinutes)
	{
		return ($this->DelayedMinutes = $_DelayedMinutes);
	}
	/**
	 * Get DelayedMinutes
	 * @return int
	 */
	public function getDelayedMinutes()
	{
		return $this->DelayedMinutes;
	}
	/**
	 * Set UTCLastDate
	 * @param string UTCLastDate
	 * @return string
	 */
	public function setUTCLastDate($_UTCLastDate)
	{
		return ($this->UTCLastDate = $_UTCLastDate);
	}
	/**
	 * Get UTCLastDate
	 * @return string
	 */
	public function getUTCLastDate()
	{
		return $this->UTCLastDate;
	}
	/**
	 * Set UTCLastTime
	 * @param string UTCLastTime
	 * @return string
	 */
	public function setUTCLastTime($_UTCLastTime)
	{
		return ($this->UTCLastTime = $_UTCLastTime);
	}
	/**
	 * Get UTCLastTime
	 * @return string
	 */
	public function getUTCLastTime()
	{
		return $this->UTCLastTime;
	}
	/**
	 * Set UTCBidDate
	 * @param string UTCBidDate
	 * @return string
	 */
	public function setUTCBidDate($_UTCBidDate)
	{
		return ($this->UTCBidDate = $_UTCBidDate);
	}
	/**
	 * Get UTCBidDate
	 * @return string
	 */
	public function getUTCBidDate()
	{
		return $this->UTCBidDate;
	}
	/**
	 * Set UTCBidTime
	 * @param string UTCBidTime
	 * @return string
	 */
	public function setUTCBidTime($_UTCBidTime)
	{
		return ($this->UTCBidTime = $_UTCBidTime);
	}
	/**
	 * Get UTCBidTime
	 * @return string
	 */
	public function getUTCBidTime()
	{
		return $this->UTCBidTime;
	}
	/**
	 * Set UTCAskDate
	 * @param string UTCAskDate
	 * @return string
	 */
	public function setUTCAskDate($_UTCAskDate)
	{
		return ($this->UTCAskDate = $_UTCAskDate);
	}
	/**
	 * Get UTCAskDate
	 * @return string
	 */
	public function getUTCAskDate()
	{
		return $this->UTCAskDate;
	}
	/**
	 * Set UTCAskTime
	 * @param string UTCAskTime
	 * @return string
	 */
	public function setUTCAskTime($_UTCAskTime)
	{
		return ($this->UTCAskTime = $_UTCAskTime);
	}
	/**
	 * Get UTCAskTime
	 * @return string
	 */
	public function getUTCAskTime()
	{
		return $this->UTCAskTime;
	}
	/**
	 * Set LastPriceStyle
	 * @param string LastPriceStyle
	 * @return string
	 */
	public function setLastPriceStyle($_LastPriceStyle)
	{
		return ($this->LastPriceStyle = $_LastPriceStyle);
	}
	/**
	 * Get LastPriceStyle
	 * @return string
	 */
	public function getLastPriceStyle()
	{
		return $this->LastPriceStyle;
	}
	/**
	 * Set OpenStyle
	 * @param string OpenStyle
	 * @return string
	 */
	public function setOpenStyle($_OpenStyle)
	{
		return ($this->OpenStyle = $_OpenStyle);
	}
	/**
	 * Get OpenStyle
	 * @return string
	 */
	public function getOpenStyle()
	{
		return $this->OpenStyle;
	}
	/**
	 * Set CloseStyle
	 * @param string CloseStyle
	 * @return string
	 */
	public function setCloseStyle($_CloseStyle)
	{
		return ($this->CloseStyle = $_CloseStyle);
	}
	/**
	 * Get CloseStyle
	 * @return string
	 */
	public function getCloseStyle()
	{
		return $this->CloseStyle;
	}
	/**
	 * Set HighStyle
	 * @param string HighStyle
	 * @return string
	 */
	public function setHighStyle($_HighStyle)
	{
		return ($this->HighStyle = $_HighStyle);
	}
	/**
	 * Get HighStyle
	 * @return string
	 */
	public function getHighStyle()
	{
		return $this->HighStyle;
	}
	/**
	 * Set LowStyle
	 * @param string LowStyle
	 * @return string
	 */
	public function setLowStyle($_LowStyle)
	{
		return ($this->LowStyle = $_LowStyle);
	}
	/**
	 * Get LowStyle
	 * @return string
	 */
	public function getLowStyle()
	{
		return $this->LowStyle;
	}
	/**
	 * Set VolumeStyle
	 * @param string VolumeStyle
	 * @return string
	 */
	public function setVolumeStyle($_VolumeStyle)
	{
		return ($this->VolumeStyle = $_VolumeStyle);
	}
	/**
	 * Get VolumeStyle
	 * @return string
	 */
	public function getVolumeStyle()
	{
		return $this->VolumeStyle;
	}
	/**
	 * Set AskStyle
	 * @param string AskStyle
	 * @return string
	 */
	public function setAskStyle($_AskStyle)
	{
		return ($this->AskStyle = $_AskStyle);
	}
	/**
	 * Get AskStyle
	 * @return string
	 */
	public function getAskStyle()
	{
		return $this->AskStyle;
	}
	/**
	 * Set BidStyle
	 * @param string BidStyle
	 * @return string
	 */
	public function setBidStyle($_BidStyle)
	{
		return ($this->BidStyle = $_BidStyle);
	}
	/**
	 * Get BidStyle
	 * @return string
	 */
	public function getBidStyle()
	{
		return $this->BidStyle;
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
	 * Set MidDate
	 * @param string MidDate
	 * @return string
	 */
	public function setMidDate($_MidDate)
	{
		return ($this->MidDate = $_MidDate);
	}
	/**
	 * Get MidDate
	 * @return string
	 */
	public function getMidDate()
	{
		return $this->MidDate;
	}
	/**
	 * Set MidTime
	 * @param string MidTime
	 * @return string
	 */
	public function setMidTime($_MidTime)
	{
		return ($this->MidTime = $_MidTime);
	}
	/**
	 * Get MidTime
	 * @return string
	 */
	public function getMidTime()
	{
		return $this->MidTime;
	}
	/**
	 * Set MidStyle
	 * @param string MidStyle
	 * @return string
	 */
	public function setMidStyle($_MidStyle)
	{
		return ($this->MidStyle = $_MidStyle);
	}
	/**
	 * Get MidStyle
	 * @return string
	 */
	public function getMidStyle()
	{
		return $this->MidStyle;
	}
	/**
	 * Set Valuation
	 * @param double Valuation
	 * @return double
	 */
	public function setValuation($_Valuation)
	{
		return ($this->Valuation = $_Valuation);
	}
	/**
	 * Get Valuation
	 * @return double
	 */
	public function getValuation()
	{
		return $this->Valuation;
	}
	/**
	 * Set ValuationDate
	 * @param string ValuationDate
	 * @return string
	 */
	public function setValuationDate($_ValuationDate)
	{
		return ($this->ValuationDate = $_ValuationDate);
	}
	/**
	 * Get ValuationDate
	 * @return string
	 */
	public function getValuationDate()
	{
		return $this->ValuationDate;
	}
	/**
	 * Set ValuationTime
	 * @param string ValuationTime
	 * @return string
	 */
	public function setValuationTime($_ValuationTime)
	{
		return ($this->ValuationTime = $_ValuationTime);
	}
	/**
	 * Get ValuationTime
	 * @return string
	 */
	public function getValuationTime()
	{
		return $this->ValuationTime;
	}
	/**
	 * Set ValuationType
	 * @param string ValuationType
	 * @return string
	 */
	public function setValuationType($_ValuationType)
	{
		return ($this->ValuationType = $_ValuationType);
	}
	/**
	 * Get ValuationType
	 * @return string
	 */
	public function getValuationType()
	{
		return $this->ValuationType;
	}
	/**
	 * Set ValuationStyle
	 * @param string ValuationStyle
	 * @return string
	 */
	public function setValuationStyle($_ValuationStyle)
	{
		return ($this->ValuationStyle = $_ValuationStyle);
	}
	/**
	 * Get ValuationStyle
	 * @return string
	 */
	public function getValuationStyle()
	{
		return $this->ValuationStyle;
	}
	/**
	 * Set UnderlyingSpot
	 * @param double UnderlyingSpot
	 * @return double
	 */
	public function setUnderlyingSpot($_UnderlyingSpot)
	{
		return ($this->UnderlyingSpot = $_UnderlyingSpot);
	}
	/**
	 * Get UnderlyingSpot
	 * @return double
	 */
	public function getUnderlyingSpot()
	{
		return $this->UnderlyingSpot;
	}
	/**
	 * Set UnderlyingSpotDate
	 * @param string UnderlyingSpotDate
	 * @return string
	 */
	public function setUnderlyingSpotDate($_UnderlyingSpotDate)
	{
		return ($this->UnderlyingSpotDate = $_UnderlyingSpotDate);
	}
	/**
	 * Get UnderlyingSpotDate
	 * @return string
	 */
	public function getUnderlyingSpotDate()
	{
		return $this->UnderlyingSpotDate;
	}
	/**
	 * Set PreviousDayLast
	 * @param double PreviousDayLast
	 * @return double
	 */
	public function setPreviousDayLast($_PreviousDayLast)
	{
		return ($this->PreviousDayLast = $_PreviousDayLast);
	}
	/**
	 * Get PreviousDayLast
	 * @return double
	 */
	public function getPreviousDayLast()
	{
		return $this->PreviousDayLast;
	}
	/**
	 * Set PreviousDayLastDate
	 * @param string PreviousDayLastDate
	 * @return string
	 */
	public function setPreviousDayLastDate($_PreviousDayLastDate)
	{
		return ($this->PreviousDayLastDate = $_PreviousDayLastDate);
	}
	/**
	 * Get PreviousDayLastDate
	 * @return string
	 */
	public function getPreviousDayLastDate()
	{
		return $this->PreviousDayLastDate;
	}
	/**
	 * Set PreviousDayLastTime
	 * @param string PreviousDayLastTime
	 * @return string
	 */
	public function setPreviousDayLastTime($_PreviousDayLastTime)
	{
		return ($this->PreviousDayLastTime = $_PreviousDayLastTime);
	}
	/**
	 * Get PreviousDayLastTime
	 * @return string
	 */
	public function getPreviousDayLastTime()
	{
		return $this->PreviousDayLastTime;
	}
	/**
	 * Set PreviousDayLastPriceStyle
	 * @param string PreviousDayLastPriceStyle
	 * @return string
	 */
	public function setPreviousDayLastPriceStyle($_PreviousDayLastPriceStyle)
	{
		return ($this->PreviousDayLastPriceStyle = $_PreviousDayLastPriceStyle);
	}
	/**
	 * Get PreviousDayLastPriceStyle
	 * @return string
	 */
	public function getPreviousDayLastPriceStyle()
	{
		return $this->PreviousDayLastPriceStyle;
	}
	/**
	 * Set PreviousDayLastSize
	 * @param double PreviousDayLastSize
	 * @return double
	 */
	public function setPreviousDayLastSize($_PreviousDayLastSize)
	{
		return ($this->PreviousDayLastSize = $_PreviousDayLastSize);
	}
	/**
	 * Get PreviousDayLastSize
	 * @return double
	 */
	public function getPreviousDayLastSize()
	{
		return $this->PreviousDayLastSize;
	}
	/**
	 * Set PreviousDayValuation
	 * @param double PreviousDayValuation
	 * @return double
	 */
	public function setPreviousDayValuation($_PreviousDayValuation)
	{
		return ($this->PreviousDayValuation = $_PreviousDayValuation);
	}
	/**
	 * Get PreviousDayValuation
	 * @return double
	 */
	public function getPreviousDayValuation()
	{
		return $this->PreviousDayValuation;
	}
	/**
	 * Set PreviousDayValuationDate
	 * @param string PreviousDayValuationDate
	 * @return string
	 */
	public function setPreviousDayValuationDate($_PreviousDayValuationDate)
	{
		return ($this->PreviousDayValuationDate = $_PreviousDayValuationDate);
	}
	/**
	 * Get PreviousDayValuationDate
	 * @return string
	 */
	public function getPreviousDayValuationDate()
	{
		return $this->PreviousDayValuationDate;
	}
	/**
	 * Set PreviousDayValuationTime
	 * @param string PreviousDayValuationTime
	 * @return string
	 */
	public function setPreviousDayValuationTime($_PreviousDayValuationTime)
	{
		return ($this->PreviousDayValuationTime = $_PreviousDayValuationTime);
	}
	/**
	 * Get PreviousDayValuationTime
	 * @return string
	 */
	public function getPreviousDayValuationTime()
	{
		return $this->PreviousDayValuationTime;
	}
	/**
	 * Set PreviousDayValuationStyle
	 * @param string PreviousDayValuationStyle
	 * @return string
	 */
	public function setPreviousDayValuationStyle($_PreviousDayValuationStyle)
	{
		return ($this->PreviousDayValuationStyle = $_PreviousDayValuationStyle);
	}
	/**
	 * Get PreviousDayValuationStyle
	 * @return string
	 */
	public function getPreviousDayValuationStyle()
	{
		return $this->PreviousDayValuationStyle;
	}
	/**
	 * Set PreviousDayAsk
	 * @param double PreviousDayAsk
	 * @return double
	 */
	public function setPreviousDayAsk($_PreviousDayAsk)
	{
		return ($this->PreviousDayAsk = $_PreviousDayAsk);
	}
	/**
	 * Get PreviousDayAsk
	 * @return double
	 */
	public function getPreviousDayAsk()
	{
		return $this->PreviousDayAsk;
	}
	/**
	 * Set PreviousDayAskDate
	 * @param string PreviousDayAskDate
	 * @return string
	 */
	public function setPreviousDayAskDate($_PreviousDayAskDate)
	{
		return ($this->PreviousDayAskDate = $_PreviousDayAskDate);
	}
	/**
	 * Get PreviousDayAskDate
	 * @return string
	 */
	public function getPreviousDayAskDate()
	{
		return $this->PreviousDayAskDate;
	}
	/**
	 * Set PreviousDayAskTime
	 * @param string PreviousDayAskTime
	 * @return string
	 */
	public function setPreviousDayAskTime($_PreviousDayAskTime)
	{
		return ($this->PreviousDayAskTime = $_PreviousDayAskTime);
	}
	/**
	 * Get PreviousDayAskTime
	 * @return string
	 */
	public function getPreviousDayAskTime()
	{
		return $this->PreviousDayAskTime;
	}
	/**
	 * Set PreviousDayAskStyle
	 * @param string PreviousDayAskStyle
	 * @return string
	 */
	public function setPreviousDayAskStyle($_PreviousDayAskStyle)
	{
		return ($this->PreviousDayAskStyle = $_PreviousDayAskStyle);
	}
	/**
	 * Get PreviousDayAskStyle
	 * @return string
	 */
	public function getPreviousDayAskStyle()
	{
		return $this->PreviousDayAskStyle;
	}
	/**
	 * Set PreviousDayBid
	 * @param double PreviousDayBid
	 * @return double
	 */
	public function setPreviousDayBid($_PreviousDayBid)
	{
		return ($this->PreviousDayBid = $_PreviousDayBid);
	}
	/**
	 * Get PreviousDayBid
	 * @return double
	 */
	public function getPreviousDayBid()
	{
		return $this->PreviousDayBid;
	}
	/**
	 * Set PreviousDayBidDate
	 * @param string PreviousDayBidDate
	 * @return string
	 */
	public function setPreviousDayBidDate($_PreviousDayBidDate)
	{
		return ($this->PreviousDayBidDate = $_PreviousDayBidDate);
	}
	/**
	 * Get PreviousDayBidDate
	 * @return string
	 */
	public function getPreviousDayBidDate()
	{
		return $this->PreviousDayBidDate;
	}
	/**
	 * Set PreviousDayBidTime
	 * @param string PreviousDayBidTime
	 * @return string
	 */
	public function setPreviousDayBidTime($_PreviousDayBidTime)
	{
		return ($this->PreviousDayBidTime = $_PreviousDayBidTime);
	}
	/**
	 * Get PreviousDayBidTime
	 * @return string
	 */
	public function getPreviousDayBidTime()
	{
		return $this->PreviousDayBidTime;
	}
	/**
	 * Set PreviousDayBidStyle
	 * @param string PreviousDayBidStyle
	 * @return string
	 */
	public function setPreviousDayBidStyle($_PreviousDayBidStyle)
	{
		return ($this->PreviousDayBidStyle = $_PreviousDayBidStyle);
	}
	/**
	 * Get PreviousDayBidStyle
	 * @return string
	 */
	public function getPreviousDayBidStyle()
	{
		return $this->PreviousDayBidStyle;
	}
	/**
	 * Set PreviousDayMid
	 * @param double PreviousDayMid
	 * @return double
	 */
	public function setPreviousDayMid($_PreviousDayMid)
	{
		return ($this->PreviousDayMid = $_PreviousDayMid);
	}
	/**
	 * Get PreviousDayMid
	 * @return double
	 */
	public function getPreviousDayMid()
	{
		return $this->PreviousDayMid;
	}
	/**
	 * Set PreviousDayMidDate
	 * @param string PreviousDayMidDate
	 * @return string
	 */
	public function setPreviousDayMidDate($_PreviousDayMidDate)
	{
		return ($this->PreviousDayMidDate = $_PreviousDayMidDate);
	}
	/**
	 * Get PreviousDayMidDate
	 * @return string
	 */
	public function getPreviousDayMidDate()
	{
		return $this->PreviousDayMidDate;
	}
	/**
	 * Set PreviousDayMidStyle
	 * @param string PreviousDayMidStyle
	 * @return string
	 */
	public function setPreviousDayMidStyle($_PreviousDayMidStyle)
	{
		return ($this->PreviousDayMidStyle = $_PreviousDayMidStyle);
	}
	/**
	 * Get PreviousDayMidStyle
	 * @return string
	 */
	public function getPreviousDayMidStyle()
	{
		return $this->PreviousDayMidStyle;
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