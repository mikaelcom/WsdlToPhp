<?php
/**
 * Class file for XiSecurityTypeGetLargestCapDeclines
 * @date 08/07/2012
 */
/**
 * Class XiSecurityTypeGetLargestCapDeclines
 * @date 08/07/2012
 */
class XiSecurityTypeGetLargestCapDeclines extends XiSecurityWsdlClass
{
	/**
	 * The Identifier
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Identifier;
	/**
	 * The IdentifierType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiSecurityTypeIdentifierTypes
	 */
	public $IdentifierType;
	/**
	 * The AsOfDate
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var dateTime
	 */
	public $AsOfDate;
	/**
	 * The YearsOfHistory
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $YearsOfHistory;
	/**
	 * The ExtractIfUnavailable
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $ExtractIfUnavailable;
	/**
	 * Constructor
	 * @param string Identifier
	 * @param XiSecurityTypeIdentifierTypes IdentifierType
	 * @param dateTime AsOfDate
	 * @param int YearsOfHistory
	 * @param boolean ExtractIfUnavailable
	 * @return XiSecurityTypeGetLargestCapDeclines
	 */
	public function __construct($_Identifier = null,$_IdentifierType,$_AsOfDate,$_YearsOfHistory,$_ExtractIfUnavailable)
	{
		parent::__construct(array('Identifier'=>$_Identifier,'IdentifierType'=>$_IdentifierType,'AsOfDate'=>$_AsOfDate,'YearsOfHistory'=>$_YearsOfHistory,'ExtractIfUnavailable'=>$_ExtractIfUnavailable));
	}
	/**
	 * Set Identifier
	 * @param string Identifier
	 * @return string
	 */
	public function setIdentifier($_Identifier)
	{
		return ($this->Identifier = $_Identifier);
	}
	/**
	 * Get Identifier
	 * @return string
	 */
	public function getIdentifier()
	{
		return $this->Identifier;
	}
	/**
	 * Set IdentifierType
	 * @param IdentifierTypes IdentifierType
	 * @return IdentifierTypes
	 */
	public function setIdentifierType($_IdentifierType)
	{
		return ($this->IdentifierType = XiSecurityTypeIdentifierTypes::valueIsValid($_IdentifierType)?$_IdentifierType:null);
	}
	/**
	 * Get IdentifierType
	 * @return XiSecurityTypeIdentifierTypes
	 */
	public function getIdentifierType()
	{
		return $this->IdentifierType;
	}
	/**
	 * Set AsOfDate
	 * @param dateTime AsOfDate
	 * @return dateTime
	 */
	public function setAsOfDate($_AsOfDate)
	{
		return ($this->AsOfDate = $_AsOfDate);
	}
	/**
	 * Get AsOfDate
	 * @return dateTime
	 */
	public function getAsOfDate()
	{
		return $this->AsOfDate;
	}
	/**
	 * Set YearsOfHistory
	 * @param int YearsOfHistory
	 * @return int
	 */
	public function setYearsOfHistory($_YearsOfHistory)
	{
		return ($this->YearsOfHistory = $_YearsOfHistory);
	}
	/**
	 * Get YearsOfHistory
	 * @return int
	 */
	public function getYearsOfHistory()
	{
		return $this->YearsOfHistory;
	}
	/**
	 * Set ExtractIfUnavailable
	 * @param boolean ExtractIfUnavailable
	 * @return boolean
	 */
	public function setExtractIfUnavailable($_ExtractIfUnavailable)
	{
		return ($this->ExtractIfUnavailable = $_ExtractIfUnavailable);
	}
	/**
	 * Get ExtractIfUnavailable
	 * @return boolean
	 */
	public function getExtractIfUnavailable()
	{
		return $this->ExtractIfUnavailable;
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