<?php
/**
 * Class file for XiGlobalBondMasterTypeLookupBondsByName
 * @date 08/07/2012
 */
/**
 * Class XiGlobalBondMasterTypeLookupBondsByName
 * @date 08/07/2012
 */
class XiGlobalBondMasterTypeLookupBondsByName extends XiGlobalBondMasterWsdlClass
{
	/**
	 * The Name
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Name;
	/**
	 * The StartMaturityDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $StartMaturityDate;
	/**
	 * The EndMaturityDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $EndMaturityDate;
	/**
	 * The StartCouponRate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $StartCouponRate;
	/**
	 * The EndCouponRate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $EndCouponRate;
	/**
	 * The IncludeNonactive
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $IncludeNonactive;
	/**
	 * Constructor
	 * @param string Name
	 * @param string StartMaturityDate
	 * @param string EndMaturityDate
	 * @param string StartCouponRate
	 * @param string EndCouponRate
	 * @param boolean IncludeNonactive
	 * @return XiGlobalBondMasterTypeLookupBondsByName
	 */
	public function __construct($_Name = null,$_StartMaturityDate = null,$_EndMaturityDate = null,$_StartCouponRate = null,$_EndCouponRate = null,$_IncludeNonactive)
	{
		parent::__construct(array('Name'=>$_Name,'StartMaturityDate'=>$_StartMaturityDate,'EndMaturityDate'=>$_EndMaturityDate,'StartCouponRate'=>$_StartCouponRate,'EndCouponRate'=>$_EndCouponRate,'IncludeNonactive'=>$_IncludeNonactive));
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
	 * Set StartMaturityDate
	 * @param string StartMaturityDate
	 * @return string
	 */
	public function setStartMaturityDate($_StartMaturityDate)
	{
		return ($this->StartMaturityDate = $_StartMaturityDate);
	}
	/**
	 * Get StartMaturityDate
	 * @return string
	 */
	public function getStartMaturityDate()
	{
		return $this->StartMaturityDate;
	}
	/**
	 * Set EndMaturityDate
	 * @param string EndMaturityDate
	 * @return string
	 */
	public function setEndMaturityDate($_EndMaturityDate)
	{
		return ($this->EndMaturityDate = $_EndMaturityDate);
	}
	/**
	 * Get EndMaturityDate
	 * @return string
	 */
	public function getEndMaturityDate()
	{
		return $this->EndMaturityDate;
	}
	/**
	 * Set StartCouponRate
	 * @param string StartCouponRate
	 * @return string
	 */
	public function setStartCouponRate($_StartCouponRate)
	{
		return ($this->StartCouponRate = $_StartCouponRate);
	}
	/**
	 * Get StartCouponRate
	 * @return string
	 */
	public function getStartCouponRate()
	{
		return $this->StartCouponRate;
	}
	/**
	 * Set EndCouponRate
	 * @param string EndCouponRate
	 * @return string
	 */
	public function setEndCouponRate($_EndCouponRate)
	{
		return ($this->EndCouponRate = $_EndCouponRate);
	}
	/**
	 * Get EndCouponRate
	 * @return string
	 */
	public function getEndCouponRate()
	{
		return $this->EndCouponRate;
	}
	/**
	 * Set IncludeNonactive
	 * @param boolean IncludeNonactive
	 * @return boolean
	 */
	public function setIncludeNonactive($_IncludeNonactive)
	{
		return ($this->IncludeNonactive = $_IncludeNonactive);
	}
	/**
	 * Get IncludeNonactive
	 * @return boolean
	 */
	public function getIncludeNonactive()
	{
		return $this->IncludeNonactive;
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