<?php
/**
 * Class file for XWebCheckOutTypeOrder
 * @date 09/07/2012
 */
/**
 * Class XWebCheckOutTypeOrder
 * @date 09/07/2012
 */
class XWebCheckOutTypeOrder extends XWebCheckOutWsdlClass
{
	/**
	 * The Shopper_ID
	 * @var Shopper_ID
	 */
	public $Shopper_ID;
	/**
	 * The Basket
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XWebCheckOutTypeBasket
	 */
	public $Basket;
	/**
	 * The Shipping
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XWebCheckOutTypeShipping
	 */
	public $Shipping;
	/**
	 * The Billing
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XWebCheckOutTypeBilling
	 */
	public $Billing;
	/**
	 * The Credit_Card
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XWebCheckOutTypeCredit_Card
	 */
	public $Credit_Card;
	/**
	 * The Receipt
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XWebCheckOutTypeReceipt
	 */
	public $Receipt;
	/**
	 * The Comments
	 * @var XWebCheckOutTypeComments
	 */
	public $Comments;
	/**
	 * The Order_ID
	 * @var anonymous3
	 */
	public $Order_ID;
	/**
	 * Constructor
	 * @param Shopper_ID Shopper_ID
	 * @param XWebCheckOutTypeBasket Basket
	 * @param XWebCheckOutTypeShipping Shipping
	 * @param XWebCheckOutTypeBilling Billing
	 * @param XWebCheckOutTypeCredit_Card Credit_Card
	 * @param XWebCheckOutTypeReceipt Receipt
	 * @param XWebCheckOutTypeComments Comments
	 * @param anonymous3 Order_ID
	 * @return XWebCheckOutTypeOrder
	 */
	public function __construct($_Shopper_ID = null,$_Basket = null,$_Shipping = null,$_Billing = null,$_Credit_Card = null,$_Receipt = null,$_Comments = null,$_Order_ID = null)
	{
		parent::__construct(array('Shopper_ID'=>$_Shopper_ID,'Basket'=>$_Basket,'Shipping'=>$_Shipping,'Billing'=>$_Billing,'Credit_Card'=>$_Credit_Card,'Receipt'=>$_Receipt,'Comments'=>$_Comments,'Order_ID'=>$_Order_ID));
	}
	/**
	 * Set Shopper_ID
	 * @param Shopper_ID Shopper_ID
	 * @return Shopper_ID
	 */
	public function setShopper_ID($_Shopper_ID)
	{
		return ($this->Shopper_ID = $_Shopper_ID);
	}
	/**
	 * Get Shopper_ID
	 * @return Shopper_ID
	 */
	public function getShopper_ID()
	{
		return $this->Shopper_ID;
	}
	/**
	 * Set Basket
	 * @param Basket Basket
	 * @return Basket
	 */
	public function setBasket($_Basket)
	{
		return ($this->Basket = $_Basket);
	}
	/**
	 * Get Basket
	 * @return XWebCheckOutTypeBasket
	 */
	public function getBasket()
	{
		return $this->Basket;
	}
	/**
	 * Set Shipping
	 * @param Shipping Shipping
	 * @return Shipping
	 */
	public function setShipping($_Shipping)
	{
		return ($this->Shipping = $_Shipping);
	}
	/**
	 * Get Shipping
	 * @return XWebCheckOutTypeShipping
	 */
	public function getShipping()
	{
		return $this->Shipping;
	}
	/**
	 * Set Billing
	 * @param Billing Billing
	 * @return Billing
	 */
	public function setBilling($_Billing)
	{
		return ($this->Billing = $_Billing);
	}
	/**
	 * Get Billing
	 * @return XWebCheckOutTypeBilling
	 */
	public function getBilling()
	{
		return $this->Billing;
	}
	/**
	 * Set Credit_Card
	 * @param Credit_Card Credit_Card
	 * @return Credit_Card
	 */
	public function setCredit_Card($_Credit_Card)
	{
		return ($this->Credit_Card = $_Credit_Card);
	}
	/**
	 * Get Credit_Card
	 * @return XWebCheckOutTypeCredit_Card
	 */
	public function getCredit_Card()
	{
		return $this->Credit_Card;
	}
	/**
	 * Set Receipt
	 * @param Receipt Receipt
	 * @return Receipt
	 */
	public function setReceipt($_Receipt)
	{
		return ($this->Receipt = $_Receipt);
	}
	/**
	 * Get Receipt
	 * @return XWebCheckOutTypeReceipt
	 */
	public function getReceipt()
	{
		return $this->Receipt;
	}
	/**
	 * Set Comments
	 * @param Comments Comments
	 * @return Comments
	 */
	public function setComments($_Comments)
	{
		return ($this->Comments = $_Comments);
	}
	/**
	 * Get Comments
	 * @return XWebCheckOutTypeComments
	 */
	public function getComments()
	{
		return $this->Comments;
	}
	/**
	 * Set Order_ID
	 * @param anonymous3 Order_ID
	 * @return anonymous3
	 */
	public function setOrder_ID($_Order_ID)
	{
		return ($this->Order_ID = $_Order_ID);
	}
	/**
	 * Get Order_ID
	 * @return anonymous3
	 */
	public function getOrder_ID()
	{
		return $this->Order_ID;
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