<?php
/**
 * Class file for XiHoldingsTypeHoldingChange
 * @date 08/07/2012
 */
/**
 * Class XiHoldingsTypeHoldingChange
 * @date 08/07/2012
 */
class XiHoldingsTypeHoldingChange extends XiHoldingsTypeCommon
{
	/**
	 * The Id
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Id;
	/**
	 * The FilingDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $FilingDate;
	/**
	 * The QuarterDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $QuarterDate;
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
	 * The Changes
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $Changes;
	/**
	 * Constructor
	 * @param string Id
	 * @param string FilingDate
	 * @param string QuarterDate
	 * @param string StartDate
	 * @param string EndDate
	 * @param int Changes
	 * @return XiHoldingsTypeHoldingChange
	 */
	public function __construct($_Id = null,$_FilingDate = null,$_QuarterDate = null,$_StartDate = null,$_EndDate = null,$_Changes)
	{
		XiHoldingsWsdlClass::__construct(array('Id'=>$_Id,'FilingDate'=>$_FilingDate,'QuarterDate'=>$_QuarterDate,'StartDate'=>$_StartDate,'EndDate'=>$_EndDate,'Changes'=>$_Changes));
	}
	/**
	 * Set Id
	 * @param string Id
	 * @return string
	 */
	public function setId($_Id)
	{
		return ($this->Id = $_Id);
	}
	/**
	 * Get Id
	 * @return string
	 */
	public function getId()
	{
		return $this->Id;
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
	 * Set QuarterDate
	 * @param string QuarterDate
	 * @return string
	 */
	public function setQuarterDate($_QuarterDate)
	{
		return ($this->QuarterDate = $_QuarterDate);
	}
	/**
	 * Get QuarterDate
	 * @return string
	 */
	public function getQuarterDate()
	{
		return $this->QuarterDate;
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
	 * Set Changes
	 * @param int Changes
	 * @return int
	 */
	public function setChanges($_Changes)
	{
		return ($this->Changes = $_Changes);
	}
	/**
	 * Get Changes
	 * @return int
	 */
	public function getChanges()
	{
		return $this->Changes;
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