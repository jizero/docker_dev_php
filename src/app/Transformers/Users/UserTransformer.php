<?php

declare(strict_types=1);

namespace App\Transformers\Users;

use App\Transformers\AbstractTransformer;

class UserTransformer extends AbstractTransformer
{
    public function item($user): array
    {
        return [
//'id' => $user['no'],
            'attributes' => [
                'name' => $user['name'],
                'nickname' => $user['nickname'],
                'email' => $user['email'],
                'nickname' => $user['nickname'],
                'member_type' => $user['member_type'],
                'phone' => $user['phone'],
                'gender' => $user['gender'],
            ],
            'links' => [
                [
                    'self' => '/users/' . $user['id'],
                    'related' => [],
                ],
            ],
        ];
    }
}
