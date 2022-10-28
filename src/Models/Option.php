<?php
/** @noinspection PhpUnused */
declare(strict_types=1);

namespace UCRM\Data\Models;

use MVQN\Data\Models\Model;
use MVQN\Data\Annotations\TableNameAnnotation as TableName;
use MVQN\Data\Annotations\ColumnNameAnnotation as ColumnName;

/**
 * Class Option
 *
 * @package MVQN\UNMS
 * @author Ryan Spaeth <rspaeth@spaethtech.com>
 * @final
 *
 * @TableName ucrm.option
 *
 * @method int|null getOptionId()
 * @method string|null getCode()
 * @method string|null getValue()
 */
final class Option extends Model
{
    /**
     * @var int
     * @ColumnName option_id
     */
    protected $optionId;

    /**
     * @var string
     */
    protected $code;

    /**
     * @var string
     */
    protected $value;

}
