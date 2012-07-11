<?php
/**
 * Class file for XWebNewsTypeLoadPersonalizedArticlesRequest
 * @date 09/07/2012
 */
/**
 * Class XWebNewsTypeLoadPersonalizedArticlesRequest
 * @date 09/07/2012
 */
class XWebNewsTypeLoadPersonalizedArticlesRequest extends XWebNewsWsdlClass
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
	 * Constructor
	 * @param string Source_Identifier
	 * @return XWebNewsTypeLoadPersonalizedArticlesRequest
	 */
	public function __construct($_Source_Identifier)
	{
		parent::__construct(array('Source_Identifier'=>$_Source_Identifier));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>