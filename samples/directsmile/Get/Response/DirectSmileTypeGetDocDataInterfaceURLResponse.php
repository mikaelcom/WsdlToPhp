<?php
/**
 * Class file for DirectSmileTypeGetDocDataInterfaceURLResponse
 * @date 02/08/2012
 */
/**
 * Class DirectSmileTypeGetDocDataInterfaceURLResponse
 * @date 02/08/2012
 */
class DirectSmileTypeGetDocDataInterfaceURLResponse extends DirectSmileWsdlClass
{
	/**
	 * The GetDocDataInterfaceURLResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $GetDocDataInterfaceURLResult;
	/**
	 * Constructor
	 * @param string GetDocDataInterfaceURLResult
	 * @return DirectSmileTypeGetDocDataInterfaceURLResponse
	 */
	public function __construct($_GetDocDataInterfaceURLResult = null)
	{
		parent::__construct(array('GetDocDataInterfaceURLResult'=>$_GetDocDataInterfaceURLResult));
	}
	/**
	 * Set GetDocDataInterfaceURLResult
	 * @param string GetDocDataInterfaceURLResult
	 * @return string
	 */
	public function setGetDocDataInterfaceURLResult($_GetDocDataInterfaceURLResult)
	{
		return ($this->GetDocDataInterfaceURLResult = $_GetDocDataInterfaceURLResult);
	}
	/**
	 * Get GetDocDataInterfaceURLResult
	 * @return string
	 */
	public function getGetDocDataInterfaceURLResult()
	{
		return $this->GetDocDataInterfaceURLResult;
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