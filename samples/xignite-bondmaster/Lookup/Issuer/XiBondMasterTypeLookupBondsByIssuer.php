<?php
/**
 * Class file for XiBondMasterTypeLookupBondsByIssuer
 * @date 08/07/2012
 */
/**
 * Class XiBondMasterTypeLookupBondsByIssuer
 * @date 08/07/2012
 */
class XiBondMasterTypeLookupBondsByIssuer extends XiBondMasterWsdlClass
{
	/**
	 * The IssuerName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $IssuerName;
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
	 * @param string IssuerName
	 * @param string StartMaturityDate
	 * @param string EndMaturityDate
	 * @param string StartCouponRate
	 * @param string EndCouponRate
	 * @param boolean IncludeNonactive
	 * @return XiBondMasterTypeLookupBondsByIssuer
	 */
	public function __construct($_IssuerName = null,$_StartMaturityDate = null,$_EndMaturityDate = null,$_StartCouponRate = null,$_EndCouponRate = null,$_IncludeNonactive)
	{
		parent::__construct(array('IssuerName'=>$_IssuerName,'StartMaturityDate'=>$_StartMaturityDate,'EndMaturityDate'=>$_EndMaturityDate,'StartCouponRate'=>$_StartCouponRate,'EndCouponRate'=>$_EndCouponRate,'IncludeNonactive'=>$_IncludeNonactive));
	}
	/**
	 * Set IssuerName
	 * @param string IssuerName
	 * @return string
	 */
	public function setIssuerName($_IssuerName)
	{
		return ($this->IssuerName = $_IssuerName);
	}
	/**
	 * Get IssuerName
	 * @return string
	 */
	public function getIssuerName()
	{
		return $this->IssuerName;
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