<?php
/**
 * Class file for XWeb1003TypeLoadApplicationsByRepRequest
 * @date 09/07/2012
 */
/**
 * Class XWeb1003TypeLoadApplicationsByRepRequest
 * @date 09/07/2012
 */
class XWeb1003TypeLoadApplicationsByRepRequest extends XWeb1003WsdlClass
{
	/**
	 * The Rep_Identifier
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Rep_Identifier;
	/**
	 * Constructor
	 * @param string Rep_Identifier
	 * @return XWeb1003TypeLoadApplicationsByRepRequest
	 */
	public function __construct($_Rep_Identifier)
	{
		parent::__construct(array('Rep_Identifier'=>$_Rep_Identifier));
	}
	/**
	 * Set Rep_Identifier
	 * @param string Rep_Identifier
	 * @return string
	 */
	public function setRep_Identifier($_Rep_Identifier)
	{
		return ($this->Rep_Identifier = $_Rep_Identifier);
	}
	/**
	 * Get Rep_Identifier
	 * @return string
	 */
	public function getRep_Identifier()
	{
		return $this->Rep_Identifier;
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