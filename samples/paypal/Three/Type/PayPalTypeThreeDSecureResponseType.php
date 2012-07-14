<?php
/**
 * Class file for PayPalTypeThreeDSecureResponseType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeThreeDSecureResponseType
 * Documentation : 3DS remaining fields.
 * @date 14/07/2012
 */
class PayPalTypeThreeDSecureResponseType extends PayPalWsdlClass
{
	/**
	 * The Vpas
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $Vpas;
	/**
	 * The EciSubmitted3DS
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $EciSubmitted3DS;
	/**
	 * Constructor
	 * @param string Vpas
	 * @param string EciSubmitted3DS
	 * @return PayPalTypeThreeDSecureResponseType
	 */
	public function __construct($_Vpas = null,$_EciSubmitted3DS = null)
	{
		parent::__construct(array('Vpas'=>$_Vpas,'EciSubmitted3DS'=>$_EciSubmitted3DS));
	}
	/**
	 * Set Vpas
	 * @param string Vpas
	 * @return string
	 */
	public function setVpas($_Vpas)
	{
		return ($this->Vpas = $_Vpas);
	}
	/**
	 * Get Vpas
	 * @return string
	 */
	public function getVpas()
	{
		return $this->Vpas;
	}
	/**
	 * Set EciSubmitted3DS
	 * @param string EciSubmitted3DS
	 * @return string
	 */
	public function setEciSubmitted3DS($_EciSubmitted3DS)
	{
		return ($this->EciSubmitted3DS = $_EciSubmitted3DS);
	}
	/**
	 * Get EciSubmitted3DS
	 * @return string
	 */
	public function getEciSubmitted3DS()
	{
		return $this->EciSubmitted3DS;
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