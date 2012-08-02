<?php
/**
 * Class file for DirectSmileTypeGetDocAttributes
 * @date 02/08/2012
 */
/**
 * Class DirectSmileTypeGetDocAttributes
 * @date 02/08/2012
 */
class DirectSmileTypeGetDocAttributes extends DirectSmileWsdlClass
{
	/**
	 * The SID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $SID;
	/**
	 * The DocumentAlias
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $DocumentAlias;
	/**
	 * Constructor
	 * @param string SID
	 * @param string DocumentAlias
	 * @return DirectSmileTypeGetDocAttributes
	 */
	public function __construct($_SID = null,$_DocumentAlias = null)
	{
		parent::__construct(array('SID'=>$_SID,'DocumentAlias'=>$_DocumentAlias));
	}
	/**
	 * Set SID
	 * @param string SID
	 * @return string
	 */
	public function setSID($_SID)
	{
		return ($this->SID = $_SID);
	}
	/**
	 * Get SID
	 * @return string
	 */
	public function getSID()
	{
		return $this->SID;
	}
	/**
	 * Set DocumentAlias
	 * @param string DocumentAlias
	 * @return string
	 */
	public function setDocumentAlias($_DocumentAlias)
	{
		return ($this->DocumentAlias = $_DocumentAlias);
	}
	/**
	 * Get DocumentAlias
	 * @return string
	 */
	public function getDocumentAlias()
	{
		return $this->DocumentAlias;
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