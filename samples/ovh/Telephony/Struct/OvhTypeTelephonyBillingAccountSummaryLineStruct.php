<?php
/**
 * Class file for OvhTypeTelephonyBillingAccountSummaryLineStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyBillingAccountSummaryLineStruct
 * @date 02/07/2012
 */
class OvhTypeTelephonyBillingAccountSummaryLineStruct extends OvhWsdlClass
{
	/**
	 * The line
	 * @var string
	 */
	public $line;
	/**
	 * The phoneNumber
	 * @var string
	 */
	public $phoneNumber;
	/**
	 * The fixe
	 * @var OvhTypeTelephonyCallsSummaryStruct
	 */
	public $fixe;
	/**
	 * The special
	 * @var OvhTypeTelephonyCallsSummaryStruct
	 */
	public $special;
	/**
	 * The mobile
	 * @var OvhTypeTelephonyCallsSummaryStruct
	 */
	public $mobile;
	/**
	 * The fax
	 * @var OvhTypeTelephonyFaxSummaryStruct
	 */
	public $fax;
	/**
	 * Constructor
	 * @param string line
	 * @param string phoneNumber
	 * @param OvhTypeTelephonyCallsSummaryStruct fixe
	 * @param OvhTypeTelephonyCallsSummaryStruct special
	 * @param OvhTypeTelephonyCallsSummaryStruct mobile
	 * @param OvhTypeTelephonyFaxSummaryStruct fax
	 * @return OvhTypeTelephonyBillingAccountSummaryLineStruct
	 */
	public function __construct($_line = null,$_phoneNumber = null,$_fixe = null,$_special = null,$_mobile = null,$_fax = null)
	{
		parent::__construct(array('line'=>$_line,'phoneNumber'=>$_phoneNumber,'fixe'=>$_fixe,'special'=>$_special,'mobile'=>$_mobile,'fax'=>$_fax));
	}
	/**
	 * Set line
	 * @param string line
	 * @return string
	 */
	public function setLine($_line)
	{
		return ($this->line = $_line);
	}
	/**
	 * Get line
	 * @return string
	 */
	public function getLine()
	{
		return $this->line;
	}
	/**
	 * Set phoneNumber
	 * @param string phoneNumber
	 * @return string
	 */
	public function setPhoneNumber($_phoneNumber)
	{
		return ($this->phoneNumber = $_phoneNumber);
	}
	/**
	 * Get phoneNumber
	 * @return string
	 */
	public function getPhoneNumber()
	{
		return $this->phoneNumber;
	}
	/**
	 * Set fixe
	 * @param telephonyCallsSummaryStruct fixe
	 * @return telephonyCallsSummaryStruct
	 */
	public function setFixe($_fixe)
	{
		return ($this->fixe = $_fixe);
	}
	/**
	 * Get fixe
	 * @return OvhTypetelephonyCallsSummaryStruct
	 */
	public function getFixe()
	{
		return $this->fixe;
	}
	/**
	 * Set special
	 * @param telephonyCallsSummaryStruct special
	 * @return telephonyCallsSummaryStruct
	 */
	public function setSpecial($_special)
	{
		return ($this->special = $_special);
	}
	/**
	 * Get special
	 * @return OvhTypetelephonyCallsSummaryStruct
	 */
	public function getSpecial()
	{
		return $this->special;
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
	 * Set fax
	 * @param telephonyFaxSummaryStruct fax
	 * @return telephonyFaxSummaryStruct
	 */
	public function setFax($_fax)
	{
		return ($this->fax = $_fax);
	}
	/**
	 * Get fax
	 * @return OvhTypetelephonyFaxSummaryStruct
	 */
	public function getFax()
	{
		return $this->fax;
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