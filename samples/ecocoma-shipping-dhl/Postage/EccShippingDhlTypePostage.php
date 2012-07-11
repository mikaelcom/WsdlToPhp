<?php
/**
 * Class file for EccShippingDhlTypePostage
 * @date 03/07/2012
 */
/**
 * Class EccShippingDhlTypePostage
 * @date 03/07/2012
 */
class EccShippingDhlTypePostage extends EccShippingDhlWsdlClass
{
	/**
	 * The Code
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Code;
	/**
	 * The MailService
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $MailService;
	/**
	 * The Rate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Rate;
	/**
	 * Constructor
	 * @param string Code
	 * @param string MailService
	 * @param string Rate
	 * @return EccShippingDhlTypePostage
	 */
	public function __construct($_Code = null,$_MailService = null,$_Rate = null)
	{
		parent::__construct(array('Code'=>$_Code,'MailService'=>$_MailService,'Rate'=>$_Rate));
	}
	/**
	 * Set Code
	 * @param string Code
	 * @return string
	 */
	public function setCode($_Code)
	{
		return ($this->Code = $_Code);
	}
	/**
	 * Get Code
	 * @return string
	 */
	public function getCode()
	{
		return $this->Code;
	}
	/**
	 * Set MailService
	 * @param string MailService
	 * @return string
	 */
	public function setMailService($_MailService)
	{
		return ($this->MailService = $_MailService);
	}
	/**
	 * Get MailService
	 * @return string
	 */
	public function getMailService()
	{
		return $this->MailService;
	}
	/**
	 * Set Rate
	 * @param string Rate
	 * @return string
	 */
	public function setRate($_Rate)
	{
		return ($this->Rate = $_Rate);
	}
	/**
	 * Get Rate
	 * @return string
	 */
	public function getRate()
	{
		return $this->Rate;
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