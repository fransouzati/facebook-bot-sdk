<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 26/01/2018
 * Time: 13:59
 */

namespace CodeBot\Message;


class Text
{
    private $recipientId;
    public function __construct(string $recipientId)
    {
        $this->recipientId = $recipientId;
    }
    public function message(string $messageText) :array
    {
        return [
            'recipient' => [
                'id'=>$this->recipientId
            ],
            'message' => [
                'text' => $messageText,
                'metadata' => 'DEVELOPER_DEFINED_METADATA'
            ]
        ];
    }

}