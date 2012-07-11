<?php
/**
 * Class file for XiInterBanksTypeYieldCurveChart
 * @date 08/07/2012
 */
/**
 * Class XiInterBanksTypeYieldCurveChart
 * @date 08/07/2012
 */
class XiInterBanksTypeYieldCurveChart extends XiInterBanksTypeStockChart
{
	/**
	 * The RateFamily
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiInterBanksTypeRateFamilyTypes
	 */
	public $RateFamily;
	/**
	 * The PeriodType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiInterBanksTypePeriodTypes
	 */
	public $PeriodType;
	/**
	 * The StartDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $StartDate;
	/**
	 * The EndDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $EndDate;
	/**
	 * The GetLatest
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $GetLatest;
	/**
	 * The Width
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $Width;
	/**
	 * The Height
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $Height;
	/**
	 * The Title
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Title;
	/**
	 * The Style
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiInterBanksTypeStockChartStyles
	 */
	public $Style;
	/**
	 * The Url
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Url;
	/**
	 * Constructor
	 * @param XiInterBanksTypeRateFamilyTypes RateFamily
	 * @param XiInterBanksTypePeriodTypes PeriodType
	 * @param string StartDate
	 * @param string EndDate
	 * @param boolean GetLatest
	 * @param int Width
	 * @param int Height
	 * @param string Title
	 * @param XiInterBanksTypeStockChartStyles Style
	 * @param string Url
	 * @return XiInterBanksTypeYieldCurveChart
	 */
	public function __construct($_RateFamily,$_PeriodType,$_StartDate = null,$_EndDate = null,$_GetLatest,$_Width,$_Height,$_Title = null,$_Style,$_Url = null)
	{
		XiInterBanksWsdlClass::__construct(array('RateFamily'=>$_RateFamily,'PeriodType'=>$_PeriodType,'StartDate'=>$_StartDate,'EndDate'=>$_EndDate,'GetLatest'=>$_GetLatest,'Width'=>$_Width,'Height'=>$_Height,'Title'=>$_Title,'Style'=>$_Style,'Url'=>$_Url));
	}
	/**
	 * Set RateFamily
	 * @param RateFamilyTypes RateFamily
	 * @return RateFamilyTypes
	 */
	public function setRateFamily($_RateFamily)
	{
		return ($this->RateFamily = XiInterBanksTypeRateFamilyTypes::valueIsValid($_RateFamily)?$_RateFamily:null);
	}
	/**
	 * Get RateFamily
	 * @return XiInterBanksTypeRateFamilyTypes
	 */
	public function getRateFamily()
	{
		return $this->RateFamily;
	}
	/**
	 * Set PeriodType
	 * @param PeriodTypes PeriodType
	 * @return PeriodTypes
	 */
	public function setPeriodType($_PeriodType)
	{
		return ($this->PeriodType = XiInterBanksTypePeriodTypes::valueIsValid($_PeriodType)?$_PeriodType:null);
	}
	/**
	 * Get PeriodType
	 * @return XiInterBanksTypePeriodTypes
	 */
	public function getPeriodType()
	{
		return $this->PeriodType;
	}
	/**
	 * Set StartDate
	 * @param string StartDate
	 * @return string
	 */
	public function setStartDate($_StartDate)
	{
		return ($this->StartDate = $_StartDate);
	}
	/**
	 * Get StartDate
	 * @return string
	 */
	public function getStartDate()
	{
		return $this->StartDate;
	}
	/**
	 * Set EndDate
	 * @param string EndDate
	 * @return string
	 */
	public function setEndDate($_EndDate)
	{
		return ($this->EndDate = $_EndDate);
	}
	/**
	 * Get EndDate
	 * @return string
	 */
	public function getEndDate()
	{
		return $this->EndDate;
	}
	/**
	 * Set GetLatest
	 * @param boolean GetLatest
	 * @return boolean
	 */
	public function setGetLatest($_GetLatest)
	{
		return ($this->GetLatest = $_GetLatest);
	}
	/**
	 * Get GetLatest
	 * @return boolean
	 */
	public function getGetLatest()
	{
		return $this->GetLatest;
	}
	/**
	 * Set Width
	 * @param int Width
	 * @return int
	 */
	public function setWidth($_Width)
	{
		return ($this->Width = $_Width);
	}
	/**
	 * Get Width
	 * @return int
	 */
	public function getWidth()
	{
		return $this->Width;
	}
	/**
	 * Set Height
	 * @param int Height
	 * @return int
	 */
	public function setHeight($_Height)
	{
		return ($this->Height = $_Height);
	}
	/**
	 * Get Height
	 * @return int
	 */
	public function getHeight()
	{
		return $this->Height;
	}
	/**
	 * Set Title
	 * @param string Title
	 * @return string
	 */
	public function setTitle($_Title)
	{
		return ($this->Title = $_Title);
	}
	/**
	 * Get Title
	 * @return string
	 */
	public function getTitle()
	{
		return $this->Title;
	}
	/**
	 * Set Style
	 * @param StockChartStyles Style
	 * @return StockChartStyles
	 */
	public function setStyle($_Style)
	{
		return ($this->Style = XiInterBanksTypeStockChartStyles::valueIsValid($_Style)?$_Style:null);
	}
	/**
	 * Get Style
	 * @return XiInterBanksTypeStockChartStyles
	 */
	public function getStyle()
	{
		return $this->Style;
	}
	/**
	 * Set Url
	 * @param string Url
	 * @return string
	 */
	public function setUrl($_Url)
	{
		return ($this->Url = $_Url);
	}
	/**
	 * Get Url
	 * @return string
	 */
	public function getUrl()
	{
		return $this->Url;
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