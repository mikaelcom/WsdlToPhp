<?php
/**
 * Class file for XWebForumTypeLoadMessagesBySourcePagedRequest
 * @date 09/07/2012
 */
/**
 * Class XWebForumTypeLoadMessagesBySourcePagedRequest
 * @date 09/07/2012
 */
class XWebForumTypeLoadMessagesBySourcePagedRequest extends XWebForumWsdlClass
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
	 * The Page_Number
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var positiveInteger
	 */
	public $Page_Number;
	/**
	 * The Page_Size
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var positiveInteger
	 */
	public $Page_Size;
	/**
	 * Constructor
	 * @param string Source_Identifier
	 * @param positiveInteger Page_Number
	 * @param positiveInteger Page_Size
	 * @return XWebForumTypeLoadMessagesBySourcePagedRequest
	 */
	public function __construct($_Source_Identifier,$_Page_Number,$_Page_Size)
	{
		parent::__construct(array('Source_Identifier'=>$_Source_Identifier,'Page_Number'=>$_Page_Number,'Page_Size'=>$_Page_Size));
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
	 * Set Page_Number
	 * @param positiveInteger Page_Number
	 * @return positiveInteger
	 */
	public function setPage_Number($_Page_Number)
	{
		return ($this->Page_Number = $_Page_Number);
	}
	/**
	 * Get Page_Number
	 * @return positiveInteger
	 */
	public function getPage_Number()
	{
		return $this->Page_Number;
	}
	/**
	 * Set Page_Size
	 * @param positiveInteger Page_Size
	 * @return positiveInteger
	 */
	public function setPage_Size($_Page_Size)
	{
		return ($this->Page_Size = $_Page_Size);
	}
	/**
	 * Get Page_Size
	 * @return positiveInteger
	 */
	public function getPage_Size()
	{
		return $this->Page_Size;
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