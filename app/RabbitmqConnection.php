<?php

namespace App;

use PhpAmqpLib\Message\AMQPMessage;
use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Channel\AMQPChannel;
use PhpAmqpLib\Exception\AMQPTimeoutException;

class RabbitmqConnection
{
    // docker run --rm -d -p5673:5672 --name amqp-examples rabbitmq
    protected $host = 'localhost';
    protected $port = 5673;
    protected $login = 'guest';
    protected $password = 'guest';
    protected $vhost = '/';

    public function __construct()
    {
        echo "new connection\n";
        //
        $connection = new AMQPStreamConnection(
            $this->host,
            $this->port,
            $this->login,
            $this->password,
            $this->vhost
        );
        var_dump( $channel = $connection->channel() );

    }
}
