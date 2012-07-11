<?php
/**
 * Class file for PaylineWebPaymentTypeVirtualTerminal
 * @date 10/07/2012
 */
/**
 * Class PaylineWebPaymentTypeVirtualTerminal
 * Documentation : virtualTerminal
 * @date 10/07/2012
 */
class PaylineWebPaymentTypeVirtualTerminal extends PaylineWebPaymentWsdlClass
{
	/**
	 * The label
	 * @var string
	 */
	public $label;
	/**
	 * The inactivityDelay
	 * Meta informations :
	 * 	- default : 10
	 * 	- documentation : http session timeout delay
	 * @var int
	 */
	public $inactivityDelay;
	/**
	 * The logo
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : path to logo
	 * @var string
	 */
	public $logo;
	/**
	 * The functions
	 * @var PaylineWebPaymentTypeFunctions
	 */
	public $functions;
	/**
	 * Constructor
	 * @param string label
	 * @param int inactivityDelay
	 * @param string logo
	 * @param PaylineWebPaymentTypeFunctions functions
	 * @return PaylineWebPaymentTypeVirtualTerminal
	 */
	public function __construct($_label = null,$_inactivityDelay = 10,$_logo = null,$_functions = null)
	{
		parent::__construct(array('label'=>$_label,'inactivityDelay'=>$_inactivityDelay,'logo'=>$_logo,'functions'=>$_functions));
	}
	/**
	 * Set label
	 * @param string label
	 * @return string
	 */
	public function setLabel($_label)
	{
		return ($this->label = $_label);
	}
	/**
	 * Get label
	 * @return string
	 */
	public function getLabel()
	{
		return $this->label;
	}
	/**
	 * Set inactivityDelay
	 * @param int inactivityDelay
	 * @return int
	 */
	public function setInactivityDelay($_inactivityDelay)
	{
		return ($this->inactivityDelay = $_inactivityDelay);
	}
	/**
	 * Get inactivityDelay
	 * @return int
	 */
	public function getInactivityDelay()
	{
		return $this->inactivityDelay;
	}
	/**
	 * Set logo
	 * @param string logo
	 * @return string
	 */
	public function setLogo($_logo)
	{
		return ($this->logo = $_logo);
	}
	/**
	 * Get logo
	 * @return string
	 */
	public function getLogo()
	{
		return $this->logo;
	}
	/**
	 * Set functions
	 * @param functions functions
	 * @return functions
	 */
	public function setFunctions($_functions)
	{
		return ($this->functions = $_functions);
	}
	/**
	 * Get functions
	 * @return PaylineWebPaymentTypefunctions
	 */
	public function getFunctions()
	{
		return $this->functions;
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