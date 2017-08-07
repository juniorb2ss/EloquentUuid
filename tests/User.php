<?php

namespace juniorb2ss\EloquentUuid\Tests;

use Illuminate\Database\Eloquent\Model;
use juniorb2ss\EloquentUuid\EloquentUuidTrait;

class User extends Model
{
    use EloquentUuidTrait;

    protected $fillable = ['name', 'email', 'password'];
}
