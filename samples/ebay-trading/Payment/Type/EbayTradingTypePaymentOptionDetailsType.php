<?php
/**
 * Class file for EbayTradingTypePaymentOptionDetailsType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypePaymentOptionDetailsType
 * Documentation : Details about a specific payment option.
 * @date 04/07/2012
 */
class EbayTradingTypePaymentOptionDetailsType extends EbayTradingWsdlClass
{
	/**
	 * The PaymentOption
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A payment method value defined in the schema.<br><br> Related fields:<br> Item.PaymentMethods in AddItem<br> PaymentMethodUsed in ReviseCheckoutStatus
	 * @var EbayTradingTypeBuyerPaymentMethodCodeType
	 */
	public $PaymentOption;
	/**
	 * The Description
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Full name of the payment method for display purposes.
	 * @var string
	 */
	public $Description;
	/**
	 * The DetailVersion
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Returns the latest version number for this field. The version can be used to determine if and when to refresh cached client data.
	 * @var string
	 */
	public $DetailVersion;
	/**
	 * The UpdateTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Gives the time in GMT that the feature flags for the details were last updated. This timestamp can be used to determine if and when to refresh cached client data.
	 * @var dateTime
	 */
	public $UpdateTime;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeBuyerPaymentMethodCodeType PaymentOption
	 * @param string Description
	 * @param string DetailVersion
	 * @param dateTime UpdateTime
	 * @param DOMDocument any
	 * @return EbayTradingTypePaymentOptionDetailsType
	 */
	public function __construct($_PaymentOption = null,$_Description = null,$_DetailVersion = null,$_UpdateTime = null,$_any = null)
	{
		parent::__construct(array('PaymentOption'=>$_PaymentOption,'Description'=>$_Description,'DetailVersion'=>$_DetailVersion,'UpdateTime'=>$_UpdateTime,'any'=>$_any));
	}
	/**
	 * Set PaymentOption
	 * @param BuyerPaymentMethodCodeType PaymentOption
	 * @return BuyerPaymentMethodCodeType
	 */
	public function setPaymentOption($_PaymentOption)
	{
		return ($this->PaymentOption = EbayTradingTypeBuyerPaymentMethodCodeType::valueIsValid($_PaymentOption)?$_PaymentOption:null);
	}
	/**
	 * Get PaymentOption
	 * @return EbayTradingTypeBuyerPaymentMethodCodeType
	 */
	public function getPaymentOption()
	{
		return $this->PaymentOption;
	}
	/**
	 * Set Description
	 * @param string Description
	 * @return string
	 */
	public function setDescription($_Description)
	{
		return ($this->Description = $_Description);
	}
	/**
	 * Get Description
	 * @return string
	 */
	public function getDescription()
	{
		return $this->Description;
	}
	/**
	 * Set DetailVersion
	 * @param string DetailVersion
	 * @return string
	 */
	public function setDetailVersion($_DetailVersion)
	{
		return ($this->DetailVersion = $_DetailVersion);
	}
	/**
	 * Get DetailVersion
	 * @return string
	 */
	public function getDetailVersion()
	{
		return $this->DetailVersion;
	}
	/**
	 * Set UpdateTime
	 * @param dateTime UpdateTime
	 * @return dateTime
	 */
	public function setUpdateTime($_UpdateTime)
	{
		return ($this->UpdateTime = $_UpdateTime);
	}
	/**
	 * Get UpdateTime
	 * @return dateTime
	 */
	public function getUpdateTime()
	{
		return $this->UpdateTime;
	}
	/**
	 * Set any
	 * @param DOMDocument any
	 * @return DOMDocument
	 */
	public function setAny($_any)
	{
		return ($this->any = $_any);
	}
	/**
	 * Get any
	 * @return DOMDocument
	 */
	public function getAny()
	{
		if(!($this->any instanceof DOMDocument))
		{
			$dom = new DOMDocument('1.0','UTF-8');
			$dom->formatOutput = true;
			$dom->loadXML($this->any);
			$this->setAny($dom);
		}
		return $this->any;
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