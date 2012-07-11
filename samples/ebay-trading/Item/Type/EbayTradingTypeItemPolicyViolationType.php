<?php
/**
 * Class file for EbayTradingTypeItemPolicyViolationType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeItemPolicyViolationType
 * Documentation : Specifies the details of policy violations if the item was administratively canceled. The details are the policy ID and the policy text.
 * @date 04/07/2012
 */
class EbayTradingTypeItemPolicyViolationType extends EbayTradingWsdlClass
{
	/**
	 * The PolicyID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Policy ID of the violated policy which resulted in item being administratively canceled.
	 * @var long
	 */
	public $PolicyID;
	/**
	 * The PolicyText
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Brief information of the violated policy which resulted in item being administratively canceled.
	 * @var string
	 */
	public $PolicyText;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param long PolicyID
	 * @param string PolicyText
	 * @param DOMDocument any
	 * @return EbayTradingTypeItemPolicyViolationType
	 */
	public function __construct($_PolicyID = null,$_PolicyText = null,$_any = null)
	{
		parent::__construct(array('PolicyID'=>$_PolicyID,'PolicyText'=>$_PolicyText,'any'=>$_any));
	}
	/**
	 * Set PolicyID
	 * @param long PolicyID
	 * @return long
	 */
	public function setPolicyID($_PolicyID)
	{
		return ($this->PolicyID = $_PolicyID);
	}
	/**
	 * Get PolicyID
	 * @return long
	 */
	public function getPolicyID()
	{
		return $this->PolicyID;
	}
	/**
	 * Set PolicyText
	 * @param string PolicyText
	 * @return string
	 */
	public function setPolicyText($_PolicyText)
	{
		return ($this->PolicyText = $_PolicyText);
	}
	/**
	 * Get PolicyText
	 * @return string
	 */
	public function getPolicyText()
	{
		return $this->PolicyText;
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