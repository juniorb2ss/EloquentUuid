<?php
namespace juniorb2ss\EloquentUuid\Tests;

use juniorb2ss\EloquentUuid\Tests\TestCase;
use juniorb2ss\EloquentUuid\Tests\User;

class EloquentUuidTraitTest extends TestCase
{
    public function testCreateUser()
    {
        $this->assertNotEmpty($this->user->uuid);
    }

    public function testRetriveUserByScope()
    {
        $user = (new User)->onUuid($this->user->uuid)
                         ->firstOrFail();

        $this->assertTrue($user->is($this->user));
    }
}
