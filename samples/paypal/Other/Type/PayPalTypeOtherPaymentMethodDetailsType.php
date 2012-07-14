<?php
/**
 * Class file for PayPalTypeOtherPaymentMethodDetailsType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeOtherPaymentMethodDetailsType
 * Documentation : Lists the Payment Methods (other than PayPal) that the use can pay with e.g. Money Order. Optional.
 * @date 14/07/2012
 */
class PayPalTypeOtherPaymentMethodDetailsType extends PayPalWsdlClass
{
	/**
	 * The OtherPaymentMethodId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : The identifier of the Payment Method.
	 * @var string
	 */
	public $OtherPaymentMethodId;
	/**
	 * The OtherPaymentMethodType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Valid values are 'Method', 'SubMethod'.
	 * @var string
	 */
	public $OtherPaymentMethodType;
	/**
	 * The OtherPaymentMethodLabel
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : The name of the Payment Method.
	 * @var string
	 */
	public $OtherPaymentMethodLabel;
	/**
	 * The OtherPaymentMethodLabelDescription
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : The short description of the Payment Method, goes along with the label.
	 * @var string
	 */
	public $OtherPaymentMethodLabelDescription;
	/**
	 * The OtherPaymentMethodLongDescriptionTitle
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : The title for the long description.
	 * @var string
	 */
	public $OtherPaymentMethodLongDescriptionTitle;
	/**
	 * The OtherPaymentMethodLongDescription
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : The long description of the Payment Method.
	 * @var string
	 */
	public $OtherPaymentMethodLongDescription;
	/**
	 * The OtherPaymentMethodIcon
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : The icon of the Payment Method.
	 * @var string
	 */
	public $OtherPaymentMethodIcon;
	/**
	 * The OtherPaymentMethodHideLabel
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : If this flag is true, then OtherPaymentMethodIcon is required to have a valid value; the label will be hidden and only ICON will be shown.
	 * @var boolean
	 */
	public $OtherPaymentMethodHideLabel;
	/**
	 * Constructor
	 * @param string OtherPaymentMethodId
	 * @param string OtherPaymentMethodType
	 * @param string OtherPaymentMethodLabel
	 * @param string OtherPaymentMethodLabelDescription
	 * @param string OtherPaymentMethodLongDescriptionTitle
	 * @param string OtherPaymentMethodLongDescription
	 * @param string OtherPaymentMethodIcon
	 * @param boolean OtherPaymentMethodHideLabel
	 * @return PayPalTypeOtherPaymentMethodDetailsType
	 */
	public function __construct($_OtherPaymentMethodId = null,$_OtherPaymentMethodType = null,$_OtherPaymentMethodLabel = null,$_OtherPaymentMethodLabelDescription = null,$_OtherPaymentMethodLongDescriptionTitle = null,$_OtherPaymentMethodLongDescription = null,$_OtherPaymentMethodIcon = null,$_OtherPaymentMethodHideLabel = null)
	{
		parent::__construct(array('OtherPaymentMethodId'=>$_OtherPaymentMethodId,'OtherPaymentMethodType'=>$_OtherPaymentMethodType,'OtherPaymentMethodLabel'=>$_OtherPaymentMethodLabel,'OtherPaymentMethodLabelDescription'=>$_OtherPaymentMethodLabelDescription,'OtherPaymentMethodLongDescriptionTitle'=>$_OtherPaymentMethodLongDescriptionTitle,'OtherPaymentMethodLongDescription'=>$_OtherPaymentMethodLongDescription,'OtherPaymentMethodIcon'=>$_OtherPaymentMethodIcon,'OtherPaymentMethodHideLabel'=>$_OtherPaymentMethodHideLabel));
	}
	/**
	 * Set OtherPaymentMethodId
	 * @param string OtherPaymentMethodId
	 * @return string
	 */
	public function setOtherPaymentMethodId($_OtherPaymentMethodId)
	{
		return ($this->OtherPaymentMethodId = $_OtherPaymentMethodId);
	}
	/**
	 * Get OtherPaymentMethodId
	 * @return string
	 */
	public function getOtherPaymentMethodId()
	{
		return $this->OtherPaymentMethodId;
	}
	/**
	 * Set OtherPaymentMethodType
	 * @param string OtherPaymentMethodType
	 * @return string
	 */
	public function setOtherPaymentMethodType($_OtherPaymentMethodType)
	{
		return ($this->OtherPaymentMethodType = $_OtherPaymentMethodType);
	}
	/**
	 * Get OtherPaymentMethodType
	 * @return string
	 */
	public function getOtherPaymentMethodType()
	{
		return $this->OtherPaymentMethodType;
	}
	/**
	 * Set OtherPaymentMethodLabel
	 * @param string OtherPaymentMethodLabel
	 * @return string
	 */
	public function setOtherPaymentMethodLabel($_OtherPaymentMethodLabel)
	{
		return ($this->OtherPaymentMethodLabel = $_OtherPaymentMethodLabel);
	}
	/**
	 * Get OtherPaymentMethodLabel
	 * @return string
	 */
	public function getOtherPaymentMethodLabel()
	{
		return $this->OtherPaymentMethodLabel;
	}
	/**
	 * Set OtherPaymentMethodLabelDescription
	 * @param string OtherPaymentMethodLabelDescription
	 * @return string
	 */
	public function setOtherPaymentMethodLabelDescription($_OtherPaymentMethodLabelDescription)
	{
		return ($this->OtherPaymentMethodLabelDescription = $_OtherPaymentMethodLabelDescription);
	}
	/**
	 * Get OtherPaymentMethodLabelDescription
	 * @return string
	 */
	public function getOtherPaymentMethodLabelDescription()
	{
		return $this->OtherPaymentMethodLabelDescription;
	}
	/**
	 * Set OtherPaymentMethodLongDescriptionTitle
	 * @param string OtherPaymentMethodLongDescriptionTitle
	 * @return string
	 */
	public function setOtherPaymentMethodLongDescriptionTitle($_OtherPaymentMethodLongDescriptionTitle)
	{
		return ($this->OtherPaymentMethodLongDescriptionTitle = $_OtherPaymentMethodLongDescriptionTitle);
	}
	/**
	 * Get OtherPaymentMethodLongDescriptionTitle
	 * @return string
	 */
	public function getOtherPaymentMethodLongDescriptionTitle()
	{
		return $this->OtherPaymentMethodLongDescriptionTitle;
	}
	/**
	 * Set OtherPaymentMethodLongDescription
	 * @param string OtherPaymentMethodLongDescription
	 * @return string
	 */
	public function setOtherPaymentMethodLongDescription($_OtherPaymentMethodLongDescription)
	{
		return ($this->OtherPaymentMethodLongDescription = $_OtherPaymentMethodLongDescription);
	}
	/**
	 * Get OtherPaymentMethodLongDescription
	 * @return string
	 */
	public function getOtherPaymentMethodLongDescription()
	{
		return $this->OtherPaymentMethodLongDescription;
	}
	/**
	 * Set OtherPaymentMethodIcon
	 * @param string OtherPaymentMethodIcon
	 * @return string
	 */
	public function setOtherPaymentMethodIcon($_OtherPaymentMethodIcon)
	{
		return ($this->OtherPaymentMethodIcon = $_OtherPaymentMethodIcon);
	}
	/**
	 * Get OtherPaymentMethodIcon
	 * @return string
	 */
	public function getOtherPaymentMethodIcon()
	{
		return $this->OtherPaymentMethodIcon;
	}
	/**
	 * Set OtherPaymentMethodHideLabel
	 * @param boolean OtherPaymentMethodHideLabel
	 * @return boolean
	 */
	public function setOtherPaymentMethodHideLabel($_OtherPaymentMethodHideLabel)
	{
		return ($this->OtherPaymentMethodHideLabel = $_OtherPaymentMethodHideLabel);
	}
	/**
	 * Get OtherPaymentMethodHideLabel
	 * @return boolean
	 */
	public function getOtherPaymentMethodHideLabel()
	{
		return $this->OtherPaymentMethodHideLabel;
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