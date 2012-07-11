<?php
/**
 * Class file for EbayShoppingTypeAbstractRequestType
 * @date 05/07/2012
 */
/**
 * Class EbayShoppingTypeAbstractRequestType
 * Documentation : Base type definition of the request payload, which can carry any type of payload content plus optional versioning information and detail level requirements. All concrete request types are derived from the abstract request type. The naming convention we use for the concrete type names is the name of the service (the verb or call name) followed by "RequestType": VerbNameRequestType
 * @date 05/07/2012
 */
class EbayShoppingTypeAbstractRequestType extends EbayShoppingWsdlClass
{
	/**
	 * The MessageID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If you pass a value in MessageID in a request, we'll return the same value in CorrelationID in the response. If you're making a lot of calls, you can use this for tracking that a response is returned for every request and to match particular responses to particular requests. (In this case, specify a different value for each request.) You can specify any value that is useful to you.
	 * @var string
	 */
	public $MessageID;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param string MessageID
	 * @param DOMDocument any
	 * @return EbayShoppingTypeAbstractRequestType
	 */
	public function __construct($_MessageID = null,$_any = null)
	{
		parent::__construct(array('MessageID'=>$_MessageID,'any'=>$_any));
	}
	/**
	 * Set MessageID
	 * @param string MessageID
	 * @return string
	 */
	public function setMessageID($_MessageID)
	{
		return ($this->MessageID = $_MessageID);
	}
	/**
	 * Get MessageID
	 * @return string
	 */
	public function getMessageID()
	{
		return $this->MessageID;
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