<?php
/**
 * Class file for XWebCheckOutTypeProcessPaymentLSPGRequest
 * @date 09/07/2012
 */
/**
 * Class XWebCheckOutTypeProcessPaymentLSPGRequest
 * @date 09/07/2012
 */
class XWebCheckOutTypeProcessPaymentLSPGRequest extends XWebCheckOutWsdlClass
{
	/**
	 * The Order
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XWebCheckOutTypeOrder
	 */
	public $Order;
	/**
	 * The Enviroment
	 * @var Enviroment
	 */
	public $Enviroment;
	/**
	 * Constructor
	 * @param XWebCheckOutTypeOrder Order
	 * @param Enviroment Enviroment
	 * @return XWebCheckOutTypeProcessPaymentLSPGRequest
	 */
	public function __construct($_Order,$_Enviroment = null)
	{
		parent::__construct(array('Order'=>$_Order,'Enviroment'=>$_Enviroment));
	}
	/**
	 * Set Order
	 * @param Order Order
	 * @return Order
	 */
	public function setOrder($_Order)
	{
		return ($this->Order = $_Order);
	}
	/**
	 * Get Order
	 * @return XWebCheckOutTypeOrder
	 */
	public function getOrder()
	{
		return $this->Order;
	}
	/**
	 * Set Enviroment
	 * @param Enviroment Enviroment
	 * @return Enviroment
	 */
	public function setEnviroment($_Enviroment)
	{
		return ($this->Enviroment = $_Enviroment);
	}
	/**
	 * Get Enviroment
	 * @return Enviroment
	 */
	public function getEnviroment()
	{
		return $this->Enviroment;
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