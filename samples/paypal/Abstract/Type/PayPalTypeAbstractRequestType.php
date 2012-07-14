<?php
/**
 * Class file for PayPalTypeAbstractRequestType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeAbstractRequestType
 * Documentation : Base type definition of request payload that can carry any type of payload content with optional versioning information and detail level requirements.
 * @date 14/07/2012
 */
class PayPalTypeAbstractRequestType extends PayPalWsdlClass
{
	/**
	 * The DetailLevel
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : This specifies the required detail level that is needed by a client application pertaining to a particular data component (e.g., Item, Transaction, etc.). The detail level is specified in the DetailLevelCodeType which has all the enumerated values of the detail level for each component.
	 * @var PayPalTypeDetailLevelCodeType
	 */
	public $DetailLevel;
	/**
	 * The ErrorLanguage
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This should be the standard RFC 3066 language identification tag, e.g., en_US.
	 * @var string
	 */
	public $ErrorLanguage;
	/**
	 * The Version
	 * Meta informations :
	 * 	- documentation : This refers to the version of the request payload schema.
	 * @var string
	 */
	public $Version;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param PayPalTypeDetailLevelCodeType DetailLevel
	 * @param string ErrorLanguage
	 * @param string Version
	 * @param DOMDocument any
	 * @return PayPalTypeAbstractRequestType
	 */
	public function __construct($_DetailLevel = null,$_ErrorLanguage = null,$_Version = null,$_any = null)
	{
		parent::__construct(array('DetailLevel'=>$_DetailLevel,'ErrorLanguage'=>$_ErrorLanguage,'Version'=>$_Version,'any'=>$_any));
	}
	/**
	 * Set DetailLevel
	 * @param DetailLevelCodeType DetailLevel
	 * @return DetailLevelCodeType
	 */
	public function setDetailLevel($_DetailLevel)
	{
		return ($this->DetailLevel = PayPalTypeDetailLevelCodeType::valueIsValid($_DetailLevel)?$_DetailLevel:null);
	}
	/**
	 * Get DetailLevel
	 * @return PayPalTypeDetailLevelCodeType
	 */
	public function getDetailLevel()
	{
		return $this->DetailLevel;
	}
	/**
	 * Set ErrorLanguage
	 * @param string ErrorLanguage
	 * @return string
	 */
	public function setErrorLanguage($_ErrorLanguage)
	{
		return ($this->ErrorLanguage = $_ErrorLanguage);
	}
	/**
	 * Get ErrorLanguage
	 * @return string
	 */
	public function getErrorLanguage()
	{
		return $this->ErrorLanguage;
	}
	/**
	 * Set Version
	 * @param string Version
	 * @return string
	 */
	public function setVersion($_Version)
	{
		return ($this->Version = $_Version);
	}
	/**
	 * Get Version
	 * @return string
	 */
	public function getVersion()
	{
		return $this->Version;
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