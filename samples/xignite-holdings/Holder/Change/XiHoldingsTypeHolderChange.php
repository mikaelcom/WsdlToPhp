<?php
/**
 * Class file for XiHoldingsTypeHolderChange
 * @date 08/07/2012
 */
/**
 * Class XiHoldingsTypeHolderChange
 * @date 08/07/2012
 */
class XiHoldingsTypeHolderChange extends XiHoldingsTypeCommon
{
	/**
	 * The HolderCIK
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $HolderCIK;
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
	 * @param string HolderCIK
	 * @param string FilingDate
	 * @param string QuarterDate
	 * @param string StartDate
	 * @param string EndDate
	 * @param int Changes
	 * @return XiHoldingsTypeHolderChange
	 */
	public function __construct($_HolderCIK = null,$_FilingDate = null,$_QuarterDate = null,$_StartDate = null,$_EndDate = null,$_Changes)
	{
		XiHoldingsWsdlClass::__construct(array('HolderCIK'=>$_HolderCIK,'FilingDate'=>$_FilingDate,'QuarterDate'=>$_QuarterDate,'StartDate'=>$_StartDate,'EndDate'=>$_EndDate,'Changes'=>$_Changes));
	}
	/**
	 * Set HolderCIK
	 * @param string HolderCIK
	 * @return string
	 */
	public function setHolderCIK($_HolderCIK)
	{
		return ($this->HolderCIK = $_HolderCIK);
	}
	/**
	 * Get HolderCIK
	 * @return string
	 */
	public function getHolderCIK()
	{
		return $this->HolderCIK;
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