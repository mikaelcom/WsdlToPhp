<?php
/**
 * Class file for PayPalTypeOptionTrackingDetailsType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeOptionTrackingDetailsType
 * @date 14/07/2012
 */
class PayPalTypeOptionTrackingDetailsType extends PayPalWsdlClass
{
	/**
	 * The OptionNumber
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Option Number. Optional
	 * @var string
	 */
	public $OptionNumber;
	/**
	 * The OptionQty
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Option Quantity. Optional
	 * @var string
	 */
	public $OptionQty;
	/**
	 * The OptionSelect
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Option Select Name. Optional
	 * @var string
	 */
	public $OptionSelect;
	/**
	 * The OptionQtyDelta
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Option Quantity Delta. Optional
	 * @var string
	 */
	public $OptionQtyDelta;
	/**
	 * The OptionAlert
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Option Alert. Optional
	 * @var string
	 */
	public $OptionAlert;
	/**
	 * The OptionCost
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Option Cost. Optional
	 * @var string
	 */
	public $OptionCost;
	/**
	 * Constructor
	 * @param string OptionNumber
	 * @param string OptionQty
	 * @param string OptionSelect
	 * @param string OptionQtyDelta
	 * @param string OptionAlert
	 * @param string OptionCost
	 * @return PayPalTypeOptionTrackingDetailsType
	 */
	public function __construct($_OptionNumber = null,$_OptionQty = null,$_OptionSelect = null,$_OptionQtyDelta = null,$_OptionAlert = null,$_OptionCost = null)
	{
		parent::__construct(array('OptionNumber'=>$_OptionNumber,'OptionQty'=>$_OptionQty,'OptionSelect'=>$_OptionSelect,'OptionQtyDelta'=>$_OptionQtyDelta,'OptionAlert'=>$_OptionAlert,'OptionCost'=>$_OptionCost));
	}
	/**
	 * Set OptionNumber
	 * @param string OptionNumber
	 * @return string
	 */
	public function setOptionNumber($_OptionNumber)
	{
		return ($this->OptionNumber = $_OptionNumber);
	}
	/**
	 * Get OptionNumber
	 * @return string
	 */
	public function getOptionNumber()
	{
		return $this->OptionNumber;
	}
	/**
	 * Set OptionQty
	 * @param string OptionQty
	 * @return string
	 */
	public function setOptionQty($_OptionQty)
	{
		return ($this->OptionQty = $_OptionQty);
	}
	/**
	 * Get OptionQty
	 * @return string
	 */
	public function getOptionQty()
	{
		return $this->OptionQty;
	}
	/**
	 * Set OptionSelect
	 * @param string OptionSelect
	 * @return string
	 */
	public function setOptionSelect($_OptionSelect)
	{
		return ($this->OptionSelect = $_OptionSelect);
	}
	/**
	 * Get OptionSelect
	 * @return string
	 */
	public function getOptionSelect()
	{
		return $this->OptionSelect;
	}
	/**
	 * Set OptionQtyDelta
	 * @param string OptionQtyDelta
	 * @return string
	 */
	public function setOptionQtyDelta($_OptionQtyDelta)
	{
		return ($this->OptionQtyDelta = $_OptionQtyDelta);
	}
	/**
	 * Get OptionQtyDelta
	 * @return string
	 */
	public function getOptionQtyDelta()
	{
		return $this->OptionQtyDelta;
	}
	/**
	 * Set OptionAlert
	 * @param string OptionAlert
	 * @return string
	 */
	public function setOptionAlert($_OptionAlert)
	{
		return ($this->OptionAlert = $_OptionAlert);
	}
	/**
	 * Get OptionAlert
	 * @return string
	 */
	public function getOptionAlert()
	{
		return $this->OptionAlert;
	}
	/**
	 * Set OptionCost
	 * @param string OptionCost
	 * @return string
	 */
	public function setOptionCost($_OptionCost)
	{
		return ($this->OptionCost = $_OptionCost);
	}
	/**
	 * Get OptionCost
	 * @return string
	 */
	public function getOptionCost()
	{
		return $this->OptionCost;
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