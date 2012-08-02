<?php
/**
 * Class file for DirectSmileTypeGetDocDataInterfaceURL
 * @date 02/08/2012
 */
/**
 * Class DirectSmileTypeGetDocDataInterfaceURL
 * @date 02/08/2012
 */
class DirectSmileTypeGetDocDataInterfaceURL extends DirectSmileWsdlClass
{
	/**
	 * The SessionID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $SessionID;
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
	 * @param string SessionID
	 * @param string DocumentAlias
	 * @return DirectSmileTypeGetDocDataInterfaceURL
	 */
	public function __construct($_SessionID = null,$_DocumentAlias = null)
	{
		parent::__construct(array('SessionID'=>$_SessionID,'DocumentAlias'=>$_DocumentAlias));
	}
	/**
	 * Set SessionID
	 * @param string SessionID
	 * @return string
	 */
	public function setSessionID($_SessionID)
	{
		return ($this->SessionID = $_SessionID);
	}
	/**
	 * Get SessionID
	 * @return string
	 */
	public function getSessionID()
	{
		return $this->SessionID;
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