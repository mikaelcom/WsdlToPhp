<?php
/**
 * Class file for PaylineWebPaymentTypeTechnicalData
 * @date 10/07/2012
 */
/**
 * Class PaylineWebPaymentTypeTechnicalData
 * Documentation : This element contains technical data used to define acquirer service
 * @date 10/07/2012
 */
class PaylineWebPaymentTypeTechnicalData extends PaylineWebPaymentWsdlClass
{
	/**
	 * The terminalNumber
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $terminalNumber;
	/**
	 * The GTInstance
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $GTInstance;
	/**
	 * The paymentProfil
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $paymentProfil;
	/**
	 * Constructor
	 * @param string terminalNumber
	 * @param string GTInstance
	 * @param string paymentProfil
	 * @return PaylineWebPaymentTypeTechnicalData
	 */
	public function __construct($_terminalNumber = null,$_GTInstance = null,$_paymentProfil = null)
	{
		parent::__construct(array('terminalNumber'=>$_terminalNumber,'GTInstance'=>$_GTInstance,'paymentProfil'=>$_paymentProfil));
	}
	/**
	 * Set terminalNumber
	 * @param string terminalNumber
	 * @return string
	 */
	public function setTerminalNumber($_terminalNumber)
	{
		return ($this->terminalNumber = $_terminalNumber);
	}
	/**
	 * Get terminalNumber
	 * @return string
	 */
	public function getTerminalNumber()
	{
		return $this->terminalNumber;
	}
	/**
	 * Set GTInstance
	 * @param string GTInstance
	 * @return string
	 */
	public function setGTInstance($_GTInstance)
	{
		return ($this->GTInstance = $_GTInstance);
	}
	/**
	 * Get GTInstance
	 * @return string
	 */
	public function getGTInstance()
	{
		return $this->GTInstance;
	}
	/**
	 * Set paymentProfil
	 * @param string paymentProfil
	 * @return string
	 */
	public function setPaymentProfil($_paymentProfil)
	{
		return ($this->paymentProfil = $_paymentProfil);
	}
	/**
	 * Get paymentProfil
	 * @return string
	 */
	public function getPaymentProfil()
	{
		return $this->paymentProfil;
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