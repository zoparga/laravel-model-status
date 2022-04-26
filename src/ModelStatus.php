<?php

namespace zoparga\ModelStatus;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ModelStatus extends Model
{
    use SoftDeletes;

    public $table = 'model_status_table';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',

    ];

    protected $fillable = [
        'model_statuseable_id',
        'model_statuseable_type',
        'name',
        'order',
        'is_enabled',

    ];

    public function modelStatuseable()
    {
        return $this->morphTo();
    }

    // /**
    //  * @param $id
    //  * @param $data
    //  *
    //  * @return mixed
    //  */
    public function updateModelStatus($id, $data)
    {
        $modelStatus = static::find($id);
        $modelStatus->update($data);

        return $modelStatus;
    }
}
