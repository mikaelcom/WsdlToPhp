<?php
/**
 * Class file for XiSecurityTypeGetHistoricalMarketCapitalizationCustom
 * @date 08/07/2012
 */
/**
 * Class XiSecurityTypeGetHistoricalMarketCapitalizationCustom
 * @date 08/07/2012
 */
class XiSecurityTypeGetHistoricalMarketCapitalizationCustom extends XiSecurityWsdlClass
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
	 * The ExtractIfUnavailable
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $ExtractIfUnavailable;
	/**
	 * The BackupOption
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiSecurityTypeBackupOptionTypes
	 */
	public $BackupOption;
	/**
	 * Constructor
	 * @param string Identifier
	 * @param XiSecurityTypeIdentifierTypes IdentifierType
	 * @param string StartDate
	 * @param string EndDate
	 * @param boolean ExtractIfUnavailable
	 * @param XiSecurityTypeBackupOptionTypes BackupOption
	 * @return XiSecurityTypeGetHistoricalMarketCapitalizationCustom
	 */
	public function __construct($_Identifier = null,$_IdentifierType,$_StartDate = null,$_EndDate = null,$_ExtractIfUnavailable,$_BackupOption)
	{
		parent::__construct(array('Identifier'=>$_Identifier,'IdentifierType'=>$_IdentifierType,'StartDate'=>$_StartDate,'EndDate'=>$_EndDate,'ExtractIfUnavailable'=>$_ExtractIfUnavailable,'BackupOption'=>$_BackupOption));
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
	 * Set BackupOption
	 * @param BackupOptionTypes BackupOption
	 * @return BackupOptionTypes
	 */
	public function setBackupOption($_BackupOption)
	{
		return ($this->BackupOption = XiSecurityTypeBackupOptionTypes::valueIsValid($_BackupOption)?$_BackupOption:null);
	}
	/**
	 * Get BackupOption
	 * @return XiSecurityTypeBackupOptionTypes
	 */
	public function getBackupOption()
	{
		return $this->BackupOption;
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