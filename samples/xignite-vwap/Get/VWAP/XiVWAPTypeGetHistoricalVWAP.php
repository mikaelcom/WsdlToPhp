<?php
/**
 * Class file for XiVWAPTypeGetHistoricalVWAP
 * @date 08/07/2012
 */
/**
 * Class XiVWAPTypeGetHistoricalVWAP
 * @date 08/07/2012
 */
class XiVWAPTypeGetHistoricalVWAP extends XiVWAPWsdlClass
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
	 * @var XiVWAPTypeIdentifierTypes
	 */
	public $IdentifierType;
	/**
	 * The HistoricalVWAPType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiVWAPTypeHistoricalVWAPTypes
	 */
	public $HistoricalVWAPType;
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
	 * Constructor
	 * @param string Identifier
	 * @param XiVWAPTypeIdentifierTypes IdentifierType
	 * @param XiVWAPTypeHistoricalVWAPTypes HistoricalVWAPType
	 * @param string StartDate
	 * @param string EndDate
	 * @return XiVWAPTypeGetHistoricalVWAP
	 */
	public function __construct($_Identifier = null,$_IdentifierType,$_HistoricalVWAPType,$_StartDate = null,$_EndDate = null)
	{
		parent::__construct(array('Identifier'=>$_Identifier,'IdentifierType'=>$_IdentifierType,'HistoricalVWAPType'=>$_HistoricalVWAPType,'StartDate'=>$_StartDate,'EndDate'=>$_EndDate));
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
		return ($this->IdentifierType = XiVWAPTypeIdentifierTypes::valueIsValid($_IdentifierType)?$_IdentifierType:null);
	}
	/**
	 * Get IdentifierType
	 * @return XiVWAPTypeIdentifierTypes
	 */
	public function getIdentifierType()
	{
		return $this->IdentifierType;
	}
	/**
	 * Set HistoricalVWAPType
	 * @param HistoricalVWAPTypes HistoricalVWAPType
	 * @return HistoricalVWAPTypes
	 */
	public function setHistoricalVWAPType($_HistoricalVWAPType)
	{
		return ($this->HistoricalVWAPType = XiVWAPTypeHistoricalVWAPTypes::valueIsValid($_HistoricalVWAPType)?$_HistoricalVWAPType:null);
	}
	/**
	 * Get HistoricalVWAPType
	 * @return XiVWAPTypeHistoricalVWAPTypes
	 */
	public function getHistoricalVWAPType()
	{
		return $this->HistoricalVWAPType;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>