<?php
/**
 * Class file for XWebForumTypePersonalizeRequest
 * @date 09/07/2012
 */
/**
 * Class XWebForumTypePersonalizeRequest
 * @date 09/07/2012
 */
class XWebForumTypePersonalizeRequest extends XWebForumWsdlClass
{
	/**
	 * The Source_Identifier
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Source_Identifier;
	/**
	 * The Message_ID
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var positiveInteger
	 */
	public $Message_ID;
	/**
	 * Constructor
	 * @param string Source_Identifier
	 * @param positiveInteger Message_ID
	 * @return XWebForumTypePersonalizeRequest
	 */
	public function __construct($_Source_Identifier,$_Message_ID)
	{
		parent::__construct(array('Source_Identifier'=>$_Source_Identifier,'Message_ID'=>$_Message_ID));
	}
	/**
	 * Set Source_Identifier
	 * @param string Source_Identifier
	 * @return string
	 */
	public function setSource_Identifier($_Source_Identifier)
	{
		return ($this->Source_Identifier = $_Source_Identifier);
	}
	/**
	 * Get Source_Identifier
	 * @return string
	 */
	public function getSource_Identifier()
	{
		return $this->Source_Identifier;
	}
	/**
	 * Set Message_ID
	 * @param positiveInteger Message_ID
	 * @return positiveInteger
	 */
	public function setMessage_ID($_Message_ID)
	{
		return ($this->Message_ID = $_Message_ID);
	}
	/**
	 * Get Message_ID
	 * @return positiveInteger
	 */
	public function getMessage_ID()
	{
		return $this->Message_ID;
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