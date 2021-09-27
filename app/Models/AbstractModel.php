<?php

declare(strict_types=1);

namespace App\Models;

use Exception;
use Illuminate\Database\Eloquent\Model;
use RuntimeException;

/**
 * @author  Andreas Geraldo <andreasgeraldo0@gmail.com>
 */
abstract class AbstractModel extends Model {
    /**
     * @var string
     */
    protected $keyType = 'string';

    /** 
     * BOOT MODEL
    */
    protected static function booted() {
        static::creating(function (Model $model){
            $model->{$model->primaryKey} = uniqid();
        });   
    }

    /** 
     * @param array $options
     * @return bool|void
    */
    public function save(array $options = []) { 
        throw new RunTimeException("Use Repository to save to model.");
    }

    /** 
     * @param array $options
     * @return bool|void
    */
    public function delete(array $options = []) { 
        throw new RunTimeException("Use Repository to delete to model.");
    }

    /**
     * @param array $options
     */
    protected function persist(array $options = [])
    {
        parent::save($options);
    }

    /**
     * @param array $options
     * @throws Exception
     */
    protected function remove(array $options = [])
    {
        parent::delete($options);
    }
}
