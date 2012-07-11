<?php
/**
 * Class file for OvhTypeTelephonyBillingAccountSummaryBillingAccountStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyBillingAccountSummaryBillingAccountStruct
 * @date 02/07/2012
 */
class OvhTypeTelephonyBillingAccountSummaryBillingAccountStruct extends OvhWsdlClass
{
	/**
	 * The name
	 * @var string
	 */
	public $name;
	/**
	 * The description
	 * @var string
	 */
	public $description;
	/**
	 * The betaGammaOffer
	 * @var boolean
	 */
	public $betaGammaOffer;
	/**
	 * The mobile
	 * @var OvhTypeTelephonyCallsSummaryStruct
	 */
	public $mobile;
	/**
	 * Constructor
	 * @param string name
	 * @param string description
	 * @param boolean betaGammaOffer
	 * @param OvhTypeTelephonyCallsSummaryStruct mobile
	 * @return OvhTypeTelephonyBillingAccountSummaryBillingAccountStruct
	 */
	public function __construct($_name = null,$_description = null,$_betaGammaOffer = null,$_mobile = null)
	{
		parent::__construct(array('name'=>$_name,'description'=>$_description,'betaGammaOffer'=>$_betaGammaOffer,'mobile'=>$_mobile));
	}
	/**
	 * Set name
	 * @param string name
	 * @return string
	 */
	public function setName($_name)
	{
		return ($this->name = $_name);
	}
	/**
	 * Get name
	 * @return string
	 */
	public function getName()
	{
		return $this->name;
	}
	/**
	 * Set description
	 * @param string description
	 * @return string
	 */
	public function setDescription($_description)
	{
		return ($this->description = $_description);
	}
	/**
	 * Get description
	 * @return string
	 */
	public function getDescription()
	{
		return $this->description;
	}
	/**
	 * Set betaGammaOffer
	 * @param boolean betaGammaOffer
	 * @return boolean
	 */
	public function setBetaGammaOffer($_betaGammaOffer)
	{
		return ($this->betaGammaOffer = $_betaGammaOffer);
	}
	/**
	 * Get betaGammaOffer
	 * @return boolean
	 */
	public function getBetaGammaOffer()
	{
		return $this->betaGammaOffer;
	}
	/**
	 * Set mobile
	 * @param telephonyCallsSummaryStruct mobile
	 * @return telephonyCallsSummaryStruct
	 */
	public function setMobile($_mobile)
	{
		return ($this->mobile = $_mobile);
	}
	/**
	 * Get mobile
	 * @return OvhTypetelephonyCallsSummaryStruct
	 */
	public function getMobile()
	{
		return $this->mobile;
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