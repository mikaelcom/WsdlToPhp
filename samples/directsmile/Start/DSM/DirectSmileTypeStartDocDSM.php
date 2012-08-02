<?php
/**
 * Class file for DirectSmileTypeStartDocDSM
 * @date 02/08/2012
 */
/**
 * Class DirectSmileTypeStartDocDSM
 * @date 02/08/2012
 */
class DirectSmileTypeStartDocDSM extends DirectSmileWsdlClass
{
	/**
	 * The AuthenticationCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $AuthenticationCode;
	/**
	 * The DocumentAlias
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $DocumentAlias;
	/**
	 * The MsgComXML
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $MsgComXML;
	/**
	 * Constructor
	 * @param string AuthenticationCode
	 * @param string DocumentAlias
	 * @param string MsgComXML
	 * @return DirectSmileTypeStartDocDSM
	 */
	public function __construct($_AuthenticationCode = null,$_DocumentAlias = null,$_MsgComXML = null)
	{
		parent::__construct(array('AuthenticationCode'=>$_AuthenticationCode,'DocumentAlias'=>$_DocumentAlias,'MsgComXML'=>$_MsgComXML));
	}
	/**
	 * Set AuthenticationCode
	 * @param string AuthenticationCode
	 * @return string
	 */
	public function setAuthenticationCode($_AuthenticationCode)
	{
		return ($this->AuthenticationCode = $_AuthenticationCode);
	}
	/**
	 * Get AuthenticationCode
	 * @return string
	 */
	public function getAuthenticationCode()
	{
		return $this->AuthenticationCode;
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
	 * Set MsgComXML
	 * @param string MsgComXML
	 * @return string
	 */
	public function setMsgComXML($_MsgComXML)
	{
		return ($this->MsgComXML = $_MsgComXML);
	}
	/**
	 * Get MsgComXML
	 * @return string
	 */
	public function getMsgComXML()
	{
		return $this->MsgComXML;
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