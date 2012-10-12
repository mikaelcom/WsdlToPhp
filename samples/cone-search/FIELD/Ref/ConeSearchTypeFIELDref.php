<?php
/**
 * Class file for ConeSearchTypeFIELDref
 * @date 13/10/2012
 */
/**
 * Class ConeSearchTypeFIELDref
 * @date 13/10/2012
 */
class ConeSearchTypeFIELDref extends ConeSearchWsdlClass
{
	/**
	 * The ref
	 * @var IDREF
	 */
	public $ref;
	/**
	 * Constructor
	 * @param IDREF ref
	 * @return ConeSearchTypeFIELDref
	 */
	public function __construct($_ref = null)
	{
		parent::__construct(array('ref'=>$_ref));
	}
	/**
	 * Set ref
	 * @param IDREF ref
	 * @return IDREF
	 */
	public function setRef($_ref)
	{
		return ($this->ref = $_ref);
	}
	/**
	 * Get ref
	 * @return IDREF
	 */
	public function getRef()
	{
		return $this->ref;
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