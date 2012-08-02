<?php
/**
 * Class file for DirectSmileTypeStartDocPrio
 * @date 02/08/2012
 */
/**
 * Class DirectSmileTypeStartDocPrio
 * @date 02/08/2012
 */
class DirectSmileTypeStartDocPrio extends DirectSmileWsdlClass
{
	/**
	 * The Sid
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Sid;
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
	 * @param string Sid
	 * @param string DocumentAlias
	 * @param string MsgComXML
	 * @return DirectSmileTypeStartDocPrio
	 */
	public function __construct($_Sid = null,$_DocumentAlias = null,$_MsgComXML = null)
	{
		parent::__construct(array('Sid'=>$_Sid,'DocumentAlias'=>$_DocumentAlias,'MsgComXML'=>$_MsgComXML));
	}
	/**
	 * Set Sid
	 * @param string Sid
	 * @return string
	 */
	public function setSid($_Sid)
	{
		return ($this->Sid = $_Sid);
	}
	/**
	 * Get Sid
	 * @return string
	 */
	public function getSid()
	{
		return $this->Sid;
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