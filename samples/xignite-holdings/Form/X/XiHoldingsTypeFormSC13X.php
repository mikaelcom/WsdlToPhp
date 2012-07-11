<?php
/**
 * Class file for XiHoldingsTypeFormSC13X
 * @date 08/07/2012
 */
/**
 * Class XiHoldingsTypeFormSC13X
 * @date 08/07/2012
 */
class XiHoldingsTypeFormSC13X extends XiHoldingsTypeCommon
{
	/**
	 * The CIK
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CIK;
	/**
	 * The Name
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Name;
	/**
	 * The Url
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Url;
	/**
	 * The FilingHeader
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiHoldingsTypeSECHeader
	 */
	public $FilingHeader;
	/**
	 * The Security
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiHoldingsTypeSecurity
	 */
	public $Security;
	/**
	 * The Type
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Type;
	/**
	 * The SourceType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $SourceType;
	/**
	 * The ReportingEntities
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiHoldingsTypeArrayOfReportingEntity
	 */
	public $ReportingEntities;
	/**
	 * The CUSIP
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CUSIP;
	/**
	 * Constructor
	 * @param string CIK
	 * @param string Name
	 * @param string Url
	 * @param XiHoldingsTypeSECHeader FilingHeader
	 * @param XiHoldingsTypeSecurity Security
	 * @param string Type
	 * @param string SourceType
	 * @param XiHoldingsTypeArrayOfReportingEntity ReportingEntities
	 * @param string CUSIP
	 * @return XiHoldingsTypeFormSC13X
	 */
	public function __construct($_CIK = null,$_Name = null,$_Url = null,$_FilingHeader = null,$_Security = null,$_Type = null,$_SourceType = null,$_ReportingEntities = null,$_CUSIP = null)
	{
		XiHoldingsWsdlClass::__construct(array('CIK'=>$_CIK,'Name'=>$_Name,'Url'=>$_Url,'FilingHeader'=>$_FilingHeader,'Security'=>$_Security,'Type'=>$_Type,'SourceType'=>$_SourceType,'ReportingEntities'=>new XiHoldingsTypeArrayOfReportingEntity($_ReportingEntities),'CUSIP'=>$_CUSIP));
	}
	/**
	 * Set CIK
	 * @param string CIK
	 * @return string
	 */
	public function setCIK($_CIK)
	{
		return ($this->CIK = $_CIK);
	}
	/**
	 * Get CIK
	 * @return string
	 */
	public function getCIK()
	{
		return $this->CIK;
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
	 * Set FilingHeader
	 * @param SECHeader FilingHeader
	 * @return SECHeader
	 */
	public function setFilingHeader($_FilingHeader)
	{
		return ($this->FilingHeader = $_FilingHeader);
	}
	/**
	 * Get FilingHeader
	 * @return XiHoldingsTypeSECHeader
	 */
	public function getFilingHeader()
	{
		return $this->FilingHeader;
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
	 * @return XiHoldingsTypeSecurity
	 */
	public function getSecurity()
	{
		return $this->Security;
	}
	/**
	 * Set Type
	 * @param string Type
	 * @return string
	 */
	public function setType($_Type)
	{
		return ($this->Type = $_Type);
	}
	/**
	 * Get Type
	 * @return string
	 */
	public function getType()
	{
		return $this->Type;
	}
	/**
	 * Set SourceType
	 * @param string SourceType
	 * @return string
	 */
	public function setSourceType($_SourceType)
	{
		return ($this->SourceType = $_SourceType);
	}
	/**
	 * Get SourceType
	 * @return string
	 */
	public function getSourceType()
	{
		return $this->SourceType;
	}
	/**
	 * Set ReportingEntities
	 * @param ArrayOfReportingEntity ReportingEntities
	 * @return ArrayOfReportingEntity
	 */
	public function setReportingEntities($_ReportingEntities)
	{
		return ($this->ReportingEntities = $_ReportingEntities);
	}
	/**
	 * Get ReportingEntities
	 * @return XiHoldingsTypeArrayOfReportingEntity
	 */
	public function getReportingEntities()
	{
		return $this->ReportingEntities;
	}
	/**
	 * Set CUSIP
	 * @param string CUSIP
	 * @return string
	 */
	public function setCUSIP($_CUSIP)
	{
		return ($this->CUSIP = $_CUSIP);
	}
	/**
	 * Get CUSIP
	 * @return string
	 */
	public function getCUSIP()
	{
		return $this->CUSIP;
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