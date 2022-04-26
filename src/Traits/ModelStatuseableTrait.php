<?php

namespace zoparga\ModelStatus\Traits;

use Illuminate\Database\Eloquent\Model;
use zoparga\ModelStatus\ModelStatus;

trait ModelStatuseableTrait
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function modelStatuses()
    {
        return $this->morphMany(ModelStatus::class, 'model_statuseable')->orderBy('order', 'ASC');
    }

    public function getLatestModelStatuses()
    {
        return $this->morphMany(ModelStatus::class, 'model_statuseable')->orderBy('order', 'DESC');
    }

    public function getLastModelStatus()
    {
        return $this->morphMany(ModelStatus::class, 'model_statuseable')->orderBy('id', 'DESC')->first();
    }

    /**
     * @param $data
     * @param $author
     * @param $parent
     *
     * @return mixed
     */
    // public function createModelStatus($data)
    // {
    //     return (new ModelStatus())->createModelStatus($this, $data);
    // }

    /**
     * @param $id
     * @param $data
     * @param $parent
     *
     * @return mixed
     */
    public function updateModelStatus($id, $data, Model $parent = null)
    {
        return (new ModelStatus())->updateModelStatus($id, $data);
    }
}
