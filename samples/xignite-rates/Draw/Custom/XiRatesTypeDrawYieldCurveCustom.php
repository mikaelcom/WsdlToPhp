<?php
/**
 * Class file for XiRatesTypeDrawYieldCurveCustom
 * @date 08/07/2012
 */
/**
 * Class XiRatesTypeDrawYieldCurveCustom
 * @date 08/07/2012
 */
class XiRatesTypeDrawYieldCurveCustom extends XiRatesWsdlClass
{
	/**
	 * The RateFamilyType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiRatesTypeRateFamilyTypes
	 */
	public $RateFamilyType;
	/**
	 * The OnDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $OnDate;
	/**
	 * The GetLatestRate
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $GetLatestRate;
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
	 * The Design
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiRatesTypeChartDesign
	 */
	public $Design;
	/**
	 * Constructor
	 * @param XiRatesTypeRateFamilyTypes RateFamilyType
	 * @param string OnDate
	 * @param boolean GetLatestRate
	 * @param int Width
	 * @param int Height
	 * @param XiRatesTypeChartDesign Design
	 * @return XiRatesTypeDrawYieldCurveCustom
	 */
	public function __construct($_RateFamilyType,$_OnDate = null,$_GetLatestRate,$_Width,$_Height,$_Design = null)
	{
		parent::__construct(array('RateFamilyType'=>$_RateFamilyType,'OnDate'=>$_OnDate,'GetLatestRate'=>$_GetLatestRate,'Width'=>$_Width,'Height'=>$_Height,'Design'=>$_Design));
	}
	/**
	 * Set RateFamilyType
	 * @param RateFamilyTypes RateFamilyType
	 * @return RateFamilyTypes
	 */
	public function setRateFamilyType($_RateFamilyType)
	{
		return ($this->RateFamilyType = XiRatesTypeRateFamilyTypes::valueIsValid($_RateFamilyType)?$_RateFamilyType:null);
	}
	/**
	 * Get RateFamilyType
	 * @return XiRatesTypeRateFamilyTypes
	 */
	public function getRateFamilyType()
	{
		return $this->RateFamilyType;
	}
	/**
	 * Set OnDate
	 * @param string OnDate
	 * @return string
	 */
	public function setOnDate($_OnDate)
	{
		return ($this->OnDate = $_OnDate);
	}
	/**
	 * Get OnDate
	 * @return string
	 */
	public function getOnDate()
	{
		return $this->OnDate;
	}
	/**
	 * Set GetLatestRate
	 * @param boolean GetLatestRate
	 * @return boolean
	 */
	public function setGetLatestRate($_GetLatestRate)
	{
		return ($this->GetLatestRate = $_GetLatestRate);
	}
	/**
	 * Get GetLatestRate
	 * @return boolean
	 */
	public function getGetLatestRate()
	{
		return $this->GetLatestRate;
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
	 * Set Design
	 * @param ChartDesign Design
	 * @return ChartDesign
	 */
	public function setDesign($_Design)
	{
		return ($this->Design = $_Design);
	}
	/**
	 * Get Design
	 * @return XiRatesTypeChartDesign
	 */
	public function getDesign()
	{
		return $this->Design;
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