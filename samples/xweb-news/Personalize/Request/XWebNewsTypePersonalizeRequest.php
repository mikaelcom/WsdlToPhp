<?php
/**
 * Class file for XWebNewsTypePersonalizeRequest
 * @date 09/07/2012
 */
/**
 * Class XWebNewsTypePersonalizeRequest
 * @date 09/07/2012
 */
class XWebNewsTypePersonalizeRequest extends XWebNewsWsdlClass
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
	 * The Article_ID
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var positiveInteger
	 */
	public $Article_ID;
	/**
	 * Constructor
	 * @param string Source_Identifier
	 * @param positiveInteger Article_ID
	 * @return XWebNewsTypePersonalizeRequest
	 */
	public function __construct($_Source_Identifier,$_Article_ID)
	{
		parent::__construct(array('Source_Identifier'=>$_Source_Identifier,'Article_ID'=>$_Article_ID));
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
	 * Set Article_ID
	 * @param positiveInteger Article_ID
	 * @return positiveInteger
	 */
	public function setArticle_ID($_Article_ID)
	{
		return ($this->Article_ID = $_Article_ID);
	}
	/**
	 * Get Article_ID
	 * @return positiveInteger
	 */
	public function getArticle_ID()
	{
		return $this->Article_ID;
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