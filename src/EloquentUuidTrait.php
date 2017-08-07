<?php

namespace juniorb2ss\EloquentUuid;

use juniorb2ss\EloquentUuid\Uuid;

trait EloquentUuidTrait
{
    /**
     * Return uuidKey
     *
     * @return string
     */
    public function getUuidColumn()
    {
        return (property_exists($this, 'uuidKey') ? $this->uuidKey : 'uuid');
    }

    /**
     * Boot the Uuid trait for the model.
     *
     * @return void
     */
    public static function bootEloquentUuidTrait()
    {
        static::creating(function ($model) {
            $uuid = (string) Uuid::generate();
            $model->{$model->getUuidColumn()} = $uuid;
        });
    }

    /**
     * Scope a query on uuid.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeOnUuid($q, $uuid)
    {
        return $q->where(
            $this->getUuidColumn(),
            $uuid
        );
    }
}
