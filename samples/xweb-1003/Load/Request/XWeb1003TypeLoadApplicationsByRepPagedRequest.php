<?php
/**
 * Class file for XWeb1003TypeLoadApplicationsByRepPagedRequest
 * @date 09/07/2012
 */
/**
 * Class XWeb1003TypeLoadApplicationsByRepPagedRequest
 * @date 09/07/2012
 */
class XWeb1003TypeLoadApplicationsByRepPagedRequest extends XWeb1003WsdlClass
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
	 * @param string Rep_Identifier
	 * @param positiveInteger Page_Number
	 * @param positiveInteger Page_Size
	 * @return XWeb1003TypeLoadApplicationsByRepPagedRequest
	 */
	public function __construct($_Rep_Identifier,$_Page_Number,$_Page_Size)
	{
		parent::__construct(array('Rep_Identifier'=>$_Rep_Identifier,'Page_Number'=>$_Page_Number,'Page_Size'=>$_Page_Size));
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