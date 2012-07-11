<?php
/**
 * Class file for PaylineWebPaymentTypeVerifyAuthenticationRequest
 * @date 10/07/2012
 */
/**
 * Class PaylineWebPaymentTypeVerifyAuthenticationRequest
 * @date 10/07/2012
 */
class PaylineWebPaymentTypeVerifyAuthenticationRequest extends PaylineWebPaymentWsdlClass
{
	/**
	 * The contractNumber
	 * Meta informations :
	 * 	- nillable : false
	 * @var string
	 */
	public $contractNumber;
	/**
	 * The pares
	 * Meta informations :
	 * 	- nillable : false
	 * @var string
	 */
	public $pares;
	/**
	 * The md
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $md;
	/**
	 * The card
	 * Meta informations :
	 * 	- nillable : false
	 * @var PaylineWebPaymentTypeCard
	 */
	public $card;
	/**
	 * Constructor
	 * @param string contractNumber
	 * @param string pares
	 * @param string md
	 * @param PaylineWebPaymentTypeCard card
	 * @return PaylineWebPaymentTypeVerifyAuthenticationRequest
	 */
	public function __construct($_contractNumber = null,$_pares = null,$_md = null,$_card = null)
	{
		parent::__construct(array('contractNumber'=>$_contractNumber,'pares'=>$_pares,'md'=>$_md,'card'=>$_card));
	}
	/**
	 * Set contractNumber
	 * @param string contractNumber
	 * @return string
	 */
	public function setContractNumber($_contractNumber)
	{
		return ($this->contractNumber = $_contractNumber);
	}
	/**
	 * Get contractNumber
	 * @return string
	 */
	public function getContractNumber()
	{
		return $this->contractNumber;
	}
	/**
	 * Set pares
	 * @param string pares
	 * @return string
	 */
	public function setPares($_pares)
	{
		return ($this->pares = $_pares);
	}
	/**
	 * Get pares
	 * @return string
	 */
	public function getPares()
	{
		return $this->pares;
	}
	/**
	 * Set md
	 * @param string md
	 * @return string
	 */
	public function setMd($_md)
	{
		return ($this->md = $_md);
	}
	/**
	 * Get md
	 * @return string
	 */
	public function getMd()
	{
		return $this->md;
	}
	/**
	 * Set card
	 * @param card card
	 * @return card
	 */
	public function setCard($_card)
	{
		return ($this->card = $_card);
	}
	/**
	 * Get card
	 * @return PaylineWebPaymentTypecard
	 */
	public function getCard()
	{
		return $this->card;
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