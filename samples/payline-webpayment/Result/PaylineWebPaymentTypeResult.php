<?php
/**
 * Class file for PaylineWebPaymentTypeResult
 * @date 10/07/2012
 */
/**
 * Class PaylineWebPaymentTypeResult
 * Documentation : This element contains information about the process
 * @date 10/07/2012
 */
class PaylineWebPaymentTypeResult extends PaylineWebPaymentWsdlClass
{
	/**
	 * The code
	 * Meta informations :
	 * 	- nillable : false
	 * @var string
	 */
	public $code;
	/**
	 * The shortMessage
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $shortMessage;
	/**
	 * The longMessage
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $longMessage;
	/**
	 * Constructor
	 * @param string code
	 * @param string shortMessage
	 * @param string longMessage
	 * @return PaylineWebPaymentTypeResult
	 */
	public function __construct($_code = null,$_shortMessage = null,$_longMessage = null)
	{
		parent::__construct(array('code'=>$_code,'shortMessage'=>$_shortMessage,'longMessage'=>$_longMessage));
	}
	/**
	 * Set code
	 * @param string code
	 * @return string
	 */
	public function setCode($_code)
	{
		return ($this->code = $_code);
	}
	/**
	 * Get code
	 * @return string
	 */
	public function getCode()
	{
		return $this->code;
	}
	/**
	 * Set shortMessage
	 * @param string shortMessage
	 * @return string
	 */
	public function setShortMessage($_shortMessage)
	{
		return ($this->shortMessage = $_shortMessage);
	}
	/**
	 * Get shortMessage
	 * @return string
	 */
	public function getShortMessage()
	{
		return $this->shortMessage;
	}
	/**
	 * Set longMessage
	 * @param string longMessage
	 * @return string
	 */
	public function setLongMessage($_longMessage)
	{
		return ($this->longMessage = $_longMessage);
	}
	/**
	 * Get longMessage
	 * @return string
	 */
	public function getLongMessage()
	{
		return $this->longMessage;
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