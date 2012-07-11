<?php
/**
 * Class file for XiHoldingsTypeFiling
 * @date 08/07/2012
 */
/**
 * Class XiHoldingsTypeFiling
 * @date 08/07/2012
 */
class XiHoldingsTypeFiling extends XiHoldingsTypeCommon
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
	 * The Type
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Type;
	/**
	 * The FileNumber
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $FileNumber;
	/**
	 * The FilingDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $FilingDate;
	/**
	 * The QuarterEndDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $QuarterEndDate;
	/**
	 * The Restatement
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $Restatement;
	/**
	 * The AddEntries
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $AddEntries;
	/**
	 * The URL
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $URL;
	/**
	 * The Holdings
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiHoldingsTypeArrayOfHolding
	 */
	public $Holdings;
	/**
	 * The TotalEntries
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $TotalEntries;
	/**
	 * The TotalAmount
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $TotalAmount;
	/**
	 * The FilingId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $FilingId;
	/**
	 * Constructor
	 * @param string CIK
	 * @param string Type
	 * @param string FileNumber
	 * @param string FilingDate
	 * @param string QuarterEndDate
	 * @param boolean Restatement
	 * @param boolean AddEntries
	 * @param string URL
	 * @param XiHoldingsTypeArrayOfHolding Holdings
	 * @param int TotalEntries
	 * @param double TotalAmount
	 * @param string FilingId
	 * @return XiHoldingsTypeFiling
	 */
	public function __construct($_CIK = null,$_Type = null,$_FileNumber = null,$_FilingDate = null,$_QuarterEndDate = null,$_Restatement,$_AddEntries,$_URL = null,$_Holdings = null,$_TotalEntries,$_TotalAmount,$_FilingId = null)
	{
		XiHoldingsWsdlClass::__construct(array('CIK'=>$_CIK,'Type'=>$_Type,'FileNumber'=>$_FileNumber,'FilingDate'=>$_FilingDate,'QuarterEndDate'=>$_QuarterEndDate,'Restatement'=>$_Restatement,'AddEntries'=>$_AddEntries,'URL'=>$_URL,'Holdings'=>new XiHoldingsTypeArrayOfHolding($_Holdings),'TotalEntries'=>$_TotalEntries,'TotalAmount'=>$_TotalAmount,'FilingId'=>$_FilingId));
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
	 * Set FileNumber
	 * @param string FileNumber
	 * @return string
	 */
	public function setFileNumber($_FileNumber)
	{
		return ($this->FileNumber = $_FileNumber);
	}
	/**
	 * Get FileNumber
	 * @return string
	 */
	public function getFileNumber()
	{
		return $this->FileNumber;
	}
	/**
	 * Set FilingDate
	 * @param string FilingDate
	 * @return string
	 */
	public function setFilingDate($_FilingDate)
	{
		return ($this->FilingDate = $_FilingDate);
	}
	/**
	 * Get FilingDate
	 * @return string
	 */
	public function getFilingDate()
	{
		return $this->FilingDate;
	}
	/**
	 * Set QuarterEndDate
	 * @param string QuarterEndDate
	 * @return string
	 */
	public function setQuarterEndDate($_QuarterEndDate)
	{
		return ($this->QuarterEndDate = $_QuarterEndDate);
	}
	/**
	 * Get QuarterEndDate
	 * @return string
	 */
	public function getQuarterEndDate()
	{
		return $this->QuarterEndDate;
	}
	/**
	 * Set Restatement
	 * @param boolean Restatement
	 * @return boolean
	 */
	public function setRestatement($_Restatement)
	{
		return ($this->Restatement = $_Restatement);
	}
	/**
	 * Get Restatement
	 * @return boolean
	 */
	public function getRestatement()
	{
		return $this->Restatement;
	}
	/**
	 * Set AddEntries
	 * @param boolean AddEntries
	 * @return boolean
	 */
	public function setAddEntries($_AddEntries)
	{
		return ($this->AddEntries = $_AddEntries);
	}
	/**
	 * Get AddEntries
	 * @return boolean
	 */
	public function getAddEntries()
	{
		return $this->AddEntries;
	}
	/**
	 * Set URL
	 * @param string URL
	 * @return string
	 */
	public function setURL($_URL)
	{
		return ($this->URL = $_URL);
	}
	/**
	 * Get URL
	 * @return string
	 */
	public function getURL()
	{
		return $this->URL;
	}
	/**
	 * Set Holdings
	 * @param ArrayOfHolding Holdings
	 * @return ArrayOfHolding
	 */
	public function setHoldings($_Holdings)
	{
		return ($this->Holdings = $_Holdings);
	}
	/**
	 * Get Holdings
	 * @return XiHoldingsTypeArrayOfHolding
	 */
	public function getHoldings()
	{
		return $this->Holdings;
	}
	/**
	 * Set TotalEntries
	 * @param int TotalEntries
	 * @return int
	 */
	public function setTotalEntries($_TotalEntries)
	{
		return ($this->TotalEntries = $_TotalEntries);
	}
	/**
	 * Get TotalEntries
	 * @return int
	 */
	public function getTotalEntries()
	{
		return $this->TotalEntries;
	}
	/**
	 * Set TotalAmount
	 * @param double TotalAmount
	 * @return double
	 */
	public function setTotalAmount($_TotalAmount)
	{
		return ($this->TotalAmount = $_TotalAmount);
	}
	/**
	 * Get TotalAmount
	 * @return double
	 */
	public function getTotalAmount()
	{
		return $this->TotalAmount;
	}
	/**
	 * Set FilingId
	 * @param string FilingId
	 * @return string
	 */
	public function setFilingId($_FilingId)
	{
		return ($this->FilingId = $_FilingId);
	}
	/**
	 * Get FilingId
	 * @return string
	 */
	public function getFilingId()
	{
		return $this->FilingId;
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