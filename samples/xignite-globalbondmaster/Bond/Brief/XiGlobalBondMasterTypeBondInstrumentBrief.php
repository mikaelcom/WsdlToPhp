<?php
/**
 * Class file for XiGlobalBondMasterTypeBondInstrumentBrief
 * @date 08/07/2012
 */
/**
 * Class XiGlobalBondMasterTypeBondInstrumentBrief
 * @date 08/07/2012
 */
class XiGlobalBondMasterTypeBondInstrumentBrief extends XiGlobalBondMasterWsdlClass
{
	/**
	 * The Description
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Description;
	/**
	 * The MaturityDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $MaturityDate;
	/**
	 * The CouponRate
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $CouponRate;
	/**
	 * The CouponType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CouponType;
	/**
	 * The ConvertibleByIssuer
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ConvertibleByIssuer;
	/**
	 * The ConvertibleByHolder
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ConvertibleByHolder;
	/**
	 * The CallableByIssuer
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CallableByIssuer;
	/**
	 * The CallableByHolder
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CallableByHolder;
	/**
	 * The Denomination
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Denomination;
	/**
	 * The DenominationCurrency
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $DenominationCurrency;
	/**
	 * Constructor
	 * @param string Description
	 * @param string MaturityDate
	 * @param double CouponRate
	 * @param string CouponType
	 * @param string ConvertibleByIssuer
	 * @param string ConvertibleByHolder
	 * @param string CallableByIssuer
	 * @param string CallableByHolder
	 * @param string Denomination
	 * @param string DenominationCurrency
	 * @return XiGlobalBondMasterTypeBondInstrumentBrief
	 */
	public function __construct($_Description = null,$_MaturityDate = null,$_CouponRate,$_CouponType = null,$_ConvertibleByIssuer = null,$_ConvertibleByHolder = null,$_CallableByIssuer = null,$_CallableByHolder = null,$_Denomination = null,$_DenominationCurrency = null)
	{
		parent::__construct(array('Description'=>$_Description,'MaturityDate'=>$_MaturityDate,'CouponRate'=>$_CouponRate,'CouponType'=>$_CouponType,'ConvertibleByIssuer'=>$_ConvertibleByIssuer,'ConvertibleByHolder'=>$_ConvertibleByHolder,'CallableByIssuer'=>$_CallableByIssuer,'CallableByHolder'=>$_CallableByHolder,'Denomination'=>$_Denomination,'DenominationCurrency'=>$_DenominationCurrency));
	}
	/**
	 * Set Description
	 * @param string Description
	 * @return string
	 */
	public function setDescription($_Description)
	{
		return ($this->Description = $_Description);
	}
	/**
	 * Get Description
	 * @return string
	 */
	public function getDescription()
	{
		return $this->Description;
	}
	/**
	 * Set MaturityDate
	 * @param string MaturityDate
	 * @return string
	 */
	public function setMaturityDate($_MaturityDate)
	{
		return ($this->MaturityDate = $_MaturityDate);
	}
	/**
	 * Get MaturityDate
	 * @return string
	 */
	public function getMaturityDate()
	{
		return $this->MaturityDate;
	}
	/**
	 * Set CouponRate
	 * @param double CouponRate
	 * @return double
	 */
	public function setCouponRate($_CouponRate)
	{
		return ($this->CouponRate = $_CouponRate);
	}
	/**
	 * Get CouponRate
	 * @return double
	 */
	public function getCouponRate()
	{
		return $this->CouponRate;
	}
	/**
	 * Set CouponType
	 * @param string CouponType
	 * @return string
	 */
	public function setCouponType($_CouponType)
	{
		return ($this->CouponType = $_CouponType);
	}
	/**
	 * Get CouponType
	 * @return string
	 */
	public function getCouponType()
	{
		return $this->CouponType;
	}
	/**
	 * Set ConvertibleByIssuer
	 * @param string ConvertibleByIssuer
	 * @return string
	 */
	public function setConvertibleByIssuer($_ConvertibleByIssuer)
	{
		return ($this->ConvertibleByIssuer = $_ConvertibleByIssuer);
	}
	/**
	 * Get ConvertibleByIssuer
	 * @return string
	 */
	public function getConvertibleByIssuer()
	{
		return $this->ConvertibleByIssuer;
	}
	/**
	 * Set ConvertibleByHolder
	 * @param string ConvertibleByHolder
	 * @return string
	 */
	public function setConvertibleByHolder($_ConvertibleByHolder)
	{
		return ($this->ConvertibleByHolder = $_ConvertibleByHolder);
	}
	/**
	 * Get ConvertibleByHolder
	 * @return string
	 */
	public function getConvertibleByHolder()
	{
		return $this->ConvertibleByHolder;
	}
	/**
	 * Set CallableByIssuer
	 * @param string CallableByIssuer
	 * @return string
	 */
	public function setCallableByIssuer($_CallableByIssuer)
	{
		return ($this->CallableByIssuer = $_CallableByIssuer);
	}
	/**
	 * Get CallableByIssuer
	 * @return string
	 */
	public function getCallableByIssuer()
	{
		return $this->CallableByIssuer;
	}
	/**
	 * Set CallableByHolder
	 * @param string CallableByHolder
	 * @return string
	 */
	public function setCallableByHolder($_CallableByHolder)
	{
		return ($this->CallableByHolder = $_CallableByHolder);
	}
	/**
	 * Get CallableByHolder
	 * @return string
	 */
	public function getCallableByHolder()
	{
		return $this->CallableByHolder;
	}
	/**
	 * Set Denomination
	 * @param string Denomination
	 * @return string
	 */
	public function setDenomination($_Denomination)
	{
		return ($this->Denomination = $_Denomination);
	}
	/**
	 * Get Denomination
	 * @return string
	 */
	public function getDenomination()
	{
		return $this->Denomination;
	}
	/**
	 * Set DenominationCurrency
	 * @param string DenominationCurrency
	 * @return string
	 */
	public function setDenominationCurrency($_DenominationCurrency)
	{
		return ($this->DenominationCurrency = $_DenominationCurrency);
	}
	/**
	 * Get DenominationCurrency
	 * @return string
	 */
	public function getDenominationCurrency()
	{
		return $this->DenominationCurrency;
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