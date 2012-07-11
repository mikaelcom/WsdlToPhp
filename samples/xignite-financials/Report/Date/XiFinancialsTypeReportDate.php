<?php
/**
 * Class file for XiFinancialsTypeReportDate
 * @date 08/07/2012
 */
/**
 * Class XiFinancialsTypeReportDate
 * @date 08/07/2012
 */
class XiFinancialsTypeReportDate extends XiFinancialsTypeCommon
{
	/**
	 * The Security
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFinancialsTypeSecurity
	 */
	public $Security;
	/**
	 * The ReportType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiFinancialsTypeReportTypes
	 */
	public $ReportType;
	/**
	 * The ReportDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ReportDate;
	/**
	 * The PreliminaryStatusMessage
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PreliminaryStatusMessage;
	/**
	 * Constructor
	 * @param XiFinancialsTypeSecurity Security
	 * @param XiFinancialsTypeReportTypes ReportType
	 * @param string ReportDate
	 * @param string PreliminaryStatusMessage
	 * @return XiFinancialsTypeReportDate
	 */
	public function __construct($_Security = null,$_ReportType,$_ReportDate = null,$_PreliminaryStatusMessage = null)
	{
		XiFinancialsWsdlClass::__construct(array('Security'=>$_Security,'ReportType'=>$_ReportType,'ReportDate'=>$_ReportDate,'PreliminaryStatusMessage'=>$_PreliminaryStatusMessage));
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
	 * @return XiFinancialsTypeSecurity
	 */
	public function getSecurity()
	{
		return $this->Security;
	}
	/**
	 * Set ReportType
	 * @param ReportTypes ReportType
	 * @return ReportTypes
	 */
	public function setReportType($_ReportType)
	{
		return ($this->ReportType = XiFinancialsTypeReportTypes::valueIsValid($_ReportType)?$_ReportType:null);
	}
	/**
	 * Get ReportType
	 * @return XiFinancialsTypeReportTypes
	 */
	public function getReportType()
	{
		return $this->ReportType;
	}
	/**
	 * Set ReportDate
	 * @param string ReportDate
	 * @return string
	 */
	public function setReportDate($_ReportDate)
	{
		return ($this->ReportDate = $_ReportDate);
	}
	/**
	 * Get ReportDate
	 * @return string
	 */
	public function getReportDate()
	{
		return $this->ReportDate;
	}
	/**
	 * Set PreliminaryStatusMessage
	 * @param string PreliminaryStatusMessage
	 * @return string
	 */
	public function setPreliminaryStatusMessage($_PreliminaryStatusMessage)
	{
		return ($this->PreliminaryStatusMessage = $_PreliminaryStatusMessage);
	}
	/**
	 * Get PreliminaryStatusMessage
	 * @return string
	 */
	public function getPreliminaryStatusMessage()
	{
		return $this->PreliminaryStatusMessage;
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