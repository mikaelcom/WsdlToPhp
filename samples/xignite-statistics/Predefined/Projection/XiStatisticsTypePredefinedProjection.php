<?php
/**
 * Class file for XiStatisticsTypePredefinedProjection
 * @date 08/07/2012
 */
/**
 * Class XiStatisticsTypePredefinedProjection
 * @date 08/07/2012
 */
class XiStatisticsTypePredefinedProjection extends XiStatisticsWsdlClass
{
	/**
	 * Constant for value 'Orthogonal'
	 * @return string 'Orthogonal'
	 */
	const VALUE_ORTHOGONAL = 'Orthogonal';
	/**
	 * Constant for value 'OrthogonalElevated'
	 * @return string 'OrthogonalElevated'
	 */
	const VALUE_ORTHOGONALELEVATED = 'OrthogonalElevated';
	/**
	 * Constant for value 'OrthogonalHorizontalLeft'
	 * @return string 'OrthogonalHorizontalLeft'
	 */
	const VALUE_ORTHOGONALHORIZONTALLEFT = 'OrthogonalHorizontalLeft';
	/**
	 * Constant for value 'OrthogonalHorizontalRight'
	 * @return string 'OrthogonalHorizontalRight'
	 */
	const VALUE_ORTHOGONALHORIZONTALRIGHT = 'OrthogonalHorizontalRight';
	/**
	 * Constant for value 'OrthogonalHalf'
	 * @return string 'OrthogonalHalf'
	 */
	const VALUE_ORTHOGONALHALF = 'OrthogonalHalf';
	/**
	 * Constant for value 'OrthogonalHalfHorizontalLeft'
	 * @return string 'OrthogonalHalfHorizontalLeft'
	 */
	const VALUE_ORTHOGONALHALFHORIZONTALLEFT = 'OrthogonalHalfHorizontalLeft';
	/**
	 * Constant for value 'OrthogonalHalfHorizontalRight'
	 * @return string 'OrthogonalHalfHorizontalRight'
	 */
	const VALUE_ORTHOGONALHALFHORIZONTALRIGHT = 'OrthogonalHalfHorizontalRight';
	/**
	 * Constant for value 'OrthogonalHalfRotated'
	 * @return string 'OrthogonalHalfRotated'
	 */
	const VALUE_ORTHOGONALHALFROTATED = 'OrthogonalHalfRotated';
	/**
	 * Constant for value 'OrthogonalHalfElevated'
	 * @return string 'OrthogonalHalfElevated'
	 */
	const VALUE_ORTHOGONALHALFELEVATED = 'OrthogonalHalfElevated';
	/**
	 * Constant for value 'Perspective'
	 * @return string 'Perspective'
	 */
	const VALUE_PERSPECTIVE = 'Perspective';
	/**
	 * Constant for value 'PerspectiveHorizontalLeft'
	 * @return string 'PerspectiveHorizontalLeft'
	 */
	const VALUE_PERSPECTIVEHORIZONTALLEFT = 'PerspectiveHorizontalLeft';
	/**
	 * Constant for value 'PerspectiveHorizontalRight'
	 * @return string 'PerspectiveHorizontalRight'
	 */
	const VALUE_PERSPECTIVEHORIZONTALRIGHT = 'PerspectiveHorizontalRight';
	/**
	 * Constant for value 'PerspectiveRotated'
	 * @return string 'PerspectiveRotated'
	 */
	const VALUE_PERSPECTIVEROTATED = 'PerspectiveRotated';
	/**
	 * Constant for value 'PerspectiveElevated'
	 * @return string 'PerspectiveElevated'
	 */
	const VALUE_PERSPECTIVEELEVATED = 'PerspectiveElevated';
	/**
	 * Constant for value 'PerspectiveTilted'
	 * @return string 'PerspectiveTilted'
	 */
	const VALUE_PERSPECTIVETILTED = 'PerspectiveTilted';
	/**
	 * Constructor
	 * @return XiStatisticsTypePredefinedProjection
	 */
	public function __construct()
	{
		parent::__construct(array());
	}
	/**
	 * Return true if value is allowed
	 * @param string value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(self::VALUE_ORTHOGONAL,self::VALUE_ORTHOGONALELEVATED,self::VALUE_ORTHOGONALHORIZONTALLEFT,self::VALUE_ORTHOGONALHORIZONTALRIGHT,self::VALUE_ORTHOGONALHALF,self::VALUE_ORTHOGONALHALFHORIZONTALLEFT,self::VALUE_ORTHOGONALHALFHORIZONTALRIGHT,self::VALUE_ORTHOGONALHALFROTATED,self::VALUE_ORTHOGONALHALFELEVATED,self::VALUE_PERSPECTIVE,self::VALUE_PERSPECTIVEHORIZONTALLEFT,self::VALUE_PERSPECTIVEHORIZONTALRIGHT,self::VALUE_PERSPECTIVEROTATED,self::VALUE_PERSPECTIVEELEVATED,self::VALUE_PERSPECTIVETILTED));
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