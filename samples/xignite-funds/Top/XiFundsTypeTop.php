<?php
/**
 * Class file for XiFundsTypeTop
 * @date 08/07/2012
 */
/**
 * Class XiFundsTypeTop
 * @date 08/07/2012
 */
class XiFundsTypeTop extends XiFundsTypeCommon
{
	/**
	 * The Rank
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $Rank;
	/**
	 * The Type
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiFundsTypeTopTypes
	 */
	public $Type;
	/**
	 * The Security
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundsTypeSecurity
	 */
	public $Security;
	/**
	 * The Change
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Change;
	/**
	 * The PercentChange
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $PercentChange;
	/**
	 * The StartNAV
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $StartNAV;
	/**
	 * The StartDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $StartDate;
	/**
	 * The EndNAV
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $EndNAV;
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
	 * @param int Rank
	 * @param XiFundsTypeTopTypes Type
	 * @param XiFundsTypeSecurity Security
	 * @param double Change
	 * @param double PercentChange
	 * @param double StartNAV
	 * @param string StartDate
	 * @param double EndNAV
	 * @param string EndDate
	 * @return XiFundsTypeTop
	 */
	public function __construct($_Rank,$_Type,$_Security = null,$_Change,$_PercentChange,$_StartNAV,$_StartDate = null,$_EndNAV,$_EndDate = null)
	{
		XiFundsWsdlClass::__construct(array('Rank'=>$_Rank,'Type'=>$_Type,'Security'=>$_Security,'Change'=>$_Change,'PercentChange'=>$_PercentChange,'StartNAV'=>$_StartNAV,'StartDate'=>$_StartDate,'EndNAV'=>$_EndNAV,'EndDate'=>$_EndDate));
	}
	/**
	 * Set Rank
	 * @param int Rank
	 * @return int
	 */
	public function setRank($_Rank)
	{
		return ($this->Rank = $_Rank);
	}
	/**
	 * Get Rank
	 * @return int
	 */
	public function getRank()
	{
		return $this->Rank;
	}
	/**
	 * Set Type
	 * @param TopTypes Type
	 * @return TopTypes
	 */
	public function setType($_Type)
	{
		return ($this->Type = XiFundsTypeTopTypes::valueIsValid($_Type)?$_Type:null);
	}
	/**
	 * Get Type
	 * @return XiFundsTypeTopTypes
	 */
	public function getType()
	{
		return $this->Type;
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
	 * @return XiFundsTypeSecurity
	 */
	public function getSecurity()
	{
		return $this->Security;
	}
	/**
	 * Set Change
	 * @param double Change
	 * @return double
	 */
	public function setChange($_Change)
	{
		return ($this->Change = $_Change);
	}
	/**
	 * Get Change
	 * @return double
	 */
	public function getChange()
	{
		return $this->Change;
	}
	/**
	 * Set PercentChange
	 * @param double PercentChange
	 * @return double
	 */
	public function setPercentChange($_PercentChange)
	{
		return ($this->PercentChange = $_PercentChange);
	}
	/**
	 * Get PercentChange
	 * @return double
	 */
	public function getPercentChange()
	{
		return $this->PercentChange;
	}
	/**
	 * Set StartNAV
	 * @param double StartNAV
	 * @return double
	 */
	public function setStartNAV($_StartNAV)
	{
		return ($this->StartNAV = $_StartNAV);
	}
	/**
	 * Get StartNAV
	 * @return double
	 */
	public function getStartNAV()
	{
		return $this->StartNAV;
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
	 * Set EndNAV
	 * @param double EndNAV
	 * @return double
	 */
	public function setEndNAV($_EndNAV)
	{
		return ($this->EndNAV = $_EndNAV);
	}
	/**
	 * Get EndNAV
	 * @return double
	 */
	public function getEndNAV()
	{
		return $this->EndNAV;
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