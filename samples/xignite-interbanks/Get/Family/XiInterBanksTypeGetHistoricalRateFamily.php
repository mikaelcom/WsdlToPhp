<?php
/**
 * Class file for XiInterBanksTypeGetHistoricalRateFamily
 * @date 08/07/2012
 */
/**
 * Class XiInterBanksTypeGetHistoricalRateFamily
 * @date 08/07/2012
 */
class XiInterBanksTypeGetHistoricalRateFamily extends XiInterBanksWsdlClass
{
	/**
	 * The RateFamilyType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiInterBanksTypeRateFamilyTypes
	 */
	public $RateFamilyType;
	/**
	 * The FromDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $FromDate;
	/**
	 * The ToDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ToDate;
	/**
	 * Constructor
	 * @param XiInterBanksTypeRateFamilyTypes RateFamilyType
	 * @param string FromDate
	 * @param string ToDate
	 * @return XiInterBanksTypeGetHistoricalRateFamily
	 */
	public function __construct($_RateFamilyType,$_FromDate = null,$_ToDate = null)
	{
		parent::__construct(array('RateFamilyType'=>$_RateFamilyType,'FromDate'=>$_FromDate,'ToDate'=>$_ToDate));
	}
	/**
	 * Set RateFamilyType
	 * @param RateFamilyTypes RateFamilyType
	 * @return RateFamilyTypes
	 */
	public function setRateFamilyType($_RateFamilyType)
	{
		return ($this->RateFamilyType = XiInterBanksTypeRateFamilyTypes::valueIsValid($_RateFamilyType)?$_RateFamilyType:null);
	}
	/**
	 * Get RateFamilyType
	 * @return XiInterBanksTypeRateFamilyTypes
	 */
	public function getRateFamilyType()
	{
		return $this->RateFamilyType;
	}
	/**
	 * Set FromDate
	 * @param string FromDate
	 * @return string
	 */
	public function setFromDate($_FromDate)
	{
		return ($this->FromDate = $_FromDate);
	}
	/**
	 * Get FromDate
	 * @return string
	 */
	public function getFromDate()
	{
		return $this->FromDate;
	}
	/**
	 * Set ToDate
	 * @param string ToDate
	 * @return string
	 */
	public function setToDate($_ToDate)
	{
		return ($this->ToDate = $_ToDate);
	}
	/**
	 * Get ToDate
	 * @return string
	 */
	public function getToDate()
	{
		return $this->ToDate;
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