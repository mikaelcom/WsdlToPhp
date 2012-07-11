<?php
/**
 * Class file for XiGlobalBondMasterTypeScreenBonds
 * @date 08/07/2012
 */
/**
 * Class XiGlobalBondMasterTypeScreenBonds
 * @date 08/07/2012
 */
class XiGlobalBondMasterTypeScreenBonds extends XiGlobalBondMasterWsdlClass
{
	/**
	 * The Issuer
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Issuer;
	/**
	 * The Domicile
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiGlobalBondMasterTypeCountries
	 */
	public $Domicile;
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
	 * The Callable
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiGlobalBondMasterTypeProvisionsFlag
	 */
	public $Callable;
	/**
	 * The Convertible
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiGlobalBondMasterTypeProvisionsFlag
	 */
	public $Convertible;
	/**
	 * The IncludeNonactive
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $IncludeNonactive;
	/**
	 * The MaxResultCount
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $MaxResultCount;
	/**
	 * Constructor
	 * @param string Issuer
	 * @param XiGlobalBondMasterTypeCountries Domicile
	 * @param string StartMaturityDate
	 * @param string EndMaturityDate
	 * @param string StartCouponRate
	 * @param string EndCouponRate
	 * @param XiGlobalBondMasterTypeProvisionsFlag Callable
	 * @param XiGlobalBondMasterTypeProvisionsFlag Convertible
	 * @param boolean IncludeNonactive
	 * @param int MaxResultCount
	 * @return XiGlobalBondMasterTypeScreenBonds
	 */
	public function __construct($_Issuer = null,$_Domicile,$_StartMaturityDate = null,$_EndMaturityDate = null,$_StartCouponRate = null,$_EndCouponRate = null,$_Callable,$_Convertible,$_IncludeNonactive,$_MaxResultCount)
	{
		parent::__construct(array('Issuer'=>$_Issuer,'Domicile'=>$_Domicile,'StartMaturityDate'=>$_StartMaturityDate,'EndMaturityDate'=>$_EndMaturityDate,'StartCouponRate'=>$_StartCouponRate,'EndCouponRate'=>$_EndCouponRate,'Callable'=>$_Callable,'Convertible'=>$_Convertible,'IncludeNonactive'=>$_IncludeNonactive,'MaxResultCount'=>$_MaxResultCount));
	}
	/**
	 * Set Issuer
	 * @param string Issuer
	 * @return string
	 */
	public function setIssuer($_Issuer)
	{
		return ($this->Issuer = $_Issuer);
	}
	/**
	 * Get Issuer
	 * @return string
	 */
	public function getIssuer()
	{
		return $this->Issuer;
	}
	/**
	 * Set Domicile
	 * @param Countries Domicile
	 * @return Countries
	 */
	public function setDomicile($_Domicile)
	{
		return ($this->Domicile = XiGlobalBondMasterTypeCountries::valueIsValid($_Domicile)?$_Domicile:null);
	}
	/**
	 * Get Domicile
	 * @return XiGlobalBondMasterTypeCountries
	 */
	public function getDomicile()
	{
		return $this->Domicile;
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
	 * Set Callable
	 * @param ProvisionsFlag Callable
	 * @return ProvisionsFlag
	 */
	public function setCallable($_Callable)
	{
		return ($this->Callable = XiGlobalBondMasterTypeProvisionsFlag::valueIsValid($_Callable)?$_Callable:null);
	}
	/**
	 * Get Callable
	 * @return XiGlobalBondMasterTypeProvisionsFlag
	 */
	public function getCallable()
	{
		return $this->Callable;
	}
	/**
	 * Set Convertible
	 * @param ProvisionsFlag Convertible
	 * @return ProvisionsFlag
	 */
	public function setConvertible($_Convertible)
	{
		return ($this->Convertible = XiGlobalBondMasterTypeProvisionsFlag::valueIsValid($_Convertible)?$_Convertible:null);
	}
	/**
	 * Get Convertible
	 * @return XiGlobalBondMasterTypeProvisionsFlag
	 */
	public function getConvertible()
	{
		return $this->Convertible;
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
	 * Set MaxResultCount
	 * @param int MaxResultCount
	 * @return int
	 */
	public function setMaxResultCount($_MaxResultCount)
	{
		return ($this->MaxResultCount = $_MaxResultCount);
	}
	/**
	 * Get MaxResultCount
	 * @return int
	 */
	public function getMaxResultCount()
	{
		return $this->MaxResultCount;
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