<?php

namespace React\Socket;

use Evenement\EventEmitterInterface;

interface ServerInterface extends EventEmitterInterface
{
    public function getClient($socket);
    public function getClients();
    public function write($data);
    public function close($socket);
    public function getPort();
    public function shutdown();
}
