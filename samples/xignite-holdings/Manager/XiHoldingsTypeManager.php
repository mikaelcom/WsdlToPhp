<?php
/**
 * Class file for XiHoldingsTypeManager
 * @date 08/07/2012
 */
/**
 * Class XiHoldingsTypeManager
 * @date 08/07/2012
 */
class XiHoldingsTypeManager extends XiHoldingsTypeCommon
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
	 * The Name
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Name;
	/**
	 * The BusinessAddress
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $BusinessAddress;
	/**
	 * The MailingAddress
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $MailingAddress;
	/**
	 * Constructor
	 * @param string CIK
	 * @param string Name
	 * @param string BusinessAddress
	 * @param string MailingAddress
	 * @return XiHoldingsTypeManager
	 */
	public function __construct($_CIK = null,$_Name = null,$_BusinessAddress = null,$_MailingAddress = null)
	{
		XiHoldingsWsdlClass::__construct(array('CIK'=>$_CIK,'Name'=>$_Name,'BusinessAddress'=>$_BusinessAddress,'MailingAddress'=>$_MailingAddress));
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
	 * Set BusinessAddress
	 * @param string BusinessAddress
	 * @return string
	 */
	public function setBusinessAddress($_BusinessAddress)
	{
		return ($this->BusinessAddress = $_BusinessAddress);
	}
	/**
	 * Get BusinessAddress
	 * @return string
	 */
	public function getBusinessAddress()
	{
		return $this->BusinessAddress;
	}
	/**
	 * Set MailingAddress
	 * @param string MailingAddress
	 * @return string
	 */
	public function setMailingAddress($_MailingAddress)
	{
		return ($this->MailingAddress = $_MailingAddress);
	}
	/**
	 * Get MailingAddress
	 * @return string
	 */
	public function getMailingAddress()
	{
		return $this->MailingAddress;
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