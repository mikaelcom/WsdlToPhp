<?php
/**
 * Class file for XiVWAPTypeHistoricalVWAPs
 * @date 08/07/2012
 */
/**
 * Class XiVWAPTypeHistoricalVWAPs
 * @date 08/07/2012
 */
class XiVWAPTypeHistoricalVWAPs extends XiVWAPTypeCommon
{
	/**
	 * The Security
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiVWAPTypeSecurity
	 */
	public $Security;
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
	 * The VWAPType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiVWAPTypeHistoricalVWAPTypes
	 */
	public $VWAPType;
	/**
	 * The VWAPS
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiVWAPTypeArrayOfHistoricalVWAP
	 */
	public $VWAPS;
	/**
	 * Constructor
	 * @param XiVWAPTypeSecurity Security
	 * @param string StartDate
	 * @param string EndDate
	 * @param XiVWAPTypeHistoricalVWAPTypes VWAPType
	 * @param XiVWAPTypeArrayOfHistoricalVWAP VWAPS
	 * @return XiVWAPTypeHistoricalVWAPs
	 */
	public function __construct($_Security = null,$_StartDate = null,$_EndDate = null,$_VWAPType,$_VWAPS = null)
	{
		XiVWAPWsdlClass::__construct(array('Security'=>$_Security,'StartDate'=>$_StartDate,'EndDate'=>$_EndDate,'VWAPType'=>$_VWAPType,'VWAPS'=>new XiVWAPTypeArrayOfHistoricalVWAP($_VWAPS)));
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
	 * @return XiVWAPTypeSecurity
	 */
	public function getSecurity()
	{
		return $this->Security;
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
	 * Set VWAPType
	 * @param HistoricalVWAPTypes VWAPType
	 * @return HistoricalVWAPTypes
	 */
	public function setVWAPType($_VWAPType)
	{
		return ($this->VWAPType = XiVWAPTypeHistoricalVWAPTypes::valueIsValid($_VWAPType)?$_VWAPType:null);
	}
	/**
	 * Get VWAPType
	 * @return XiVWAPTypeHistoricalVWAPTypes
	 */
	public function getVWAPType()
	{
		return $this->VWAPType;
	}
	/**
	 * Set VWAPS
	 * @param ArrayOfHistoricalVWAP VWAPS
	 * @return ArrayOfHistoricalVWAP
	 */
	public function setVWAPS($_VWAPS)
	{
		return ($this->VWAPS = $_VWAPS);
	}
	/**
	 * Get VWAPS
	 * @return XiVWAPTypeArrayOfHistoricalVWAP
	 */
	public function getVWAPS()
	{
		return $this->VWAPS;
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