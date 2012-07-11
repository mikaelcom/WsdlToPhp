<?php
/**
 * Class file for SPWebPartPagesTypeRenderWebPartForEditResponse
 * @date 06/07/2012
 */
/**
 * Class SPWebPartPagesTypeRenderWebPartForEditResponse
 * @date 06/07/2012
 */
class SPWebPartPagesTypeRenderWebPartForEditResponse extends SPWebPartPagesWsdlClass
{
	/**
	 * The RenderWebPartForEditResult
	 * @var string
	 */
	public $RenderWebPartForEditResult;
	/**
	 * Constructor
	 * @param string RenderWebPartForEditResult
	 * @return SPWebPartPagesTypeRenderWebPartForEditResponse
	 */
	public function __construct($_RenderWebPartForEditResult = null)
	{
		parent::__construct(array('RenderWebPartForEditResult'=>$_RenderWebPartForEditResult));
	}
	/**
	 * Set RenderWebPartForEditResult
	 * @param string RenderWebPartForEditResult
	 * @return string
	 */
	public function setRenderWebPartForEditResult($_RenderWebPartForEditResult)
	{
		return ($this->RenderWebPartForEditResult = $_RenderWebPartForEditResult);
	}
	/**
	 * Get RenderWebPartForEditResult
	 * @return string
	 */
	public function getRenderWebPartForEditResult()
	{
		return $this->RenderWebPartForEditResult;
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