<?php
/**
 * Class file for EbayTradingTypeBotBlockRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeBotBlockRequestType
 * Documentation : Container of token and user reply.
 * @date 04/07/2012
 */
class EbayTradingTypeBotBlockRequestType extends EbayTradingWsdlClass
{
	/**
	 * The BotBlockToken
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : An encrypted token that eBay generates and that applications need to pass as input to subsquent calls. One use of this might be to block users from the site due to multiple call requests.
	 * @var string
	 */
	public $BotBlockToken;
	/**
	 * The BotBlockUserInput
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The user's response to being asked to type the message in the botblock challenge image (that is, the image corresponding to BotBlockUrl that has been returned in a previous call).
	 * @var string
	 */
	public $BotBlockUserInput;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param string BotBlockToken
	 * @param string BotBlockUserInput
	 * @param DOMDocument any
	 * @return EbayTradingTypeBotBlockRequestType
	 */
	public function __construct($_BotBlockToken = null,$_BotBlockUserInput = null,$_any = null)
	{
		parent::__construct(array('BotBlockToken'=>$_BotBlockToken,'BotBlockUserInput'=>$_BotBlockUserInput,'any'=>$_any));
	}
	/**
	 * Set BotBlockToken
	 * @param string BotBlockToken
	 * @return string
	 */
	public function setBotBlockToken($_BotBlockToken)
	{
		return ($this->BotBlockToken = $_BotBlockToken);
	}
	/**
	 * Get BotBlockToken
	 * @return string
	 */
	public function getBotBlockToken()
	{
		return $this->BotBlockToken;
	}
	/**
	 * Set BotBlockUserInput
	 * @param string BotBlockUserInput
	 * @return string
	 */
	public function setBotBlockUserInput($_BotBlockUserInput)
	{
		return ($this->BotBlockUserInput = $_BotBlockUserInput);
	}
	/**
	 * Get BotBlockUserInput
	 * @return string
	 */
	public function getBotBlockUserInput()
	{
		return $this->BotBlockUserInput;
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