<?php

/**
 * Queries the remote side of the given socket which may either result in host/port or in a Unix filesystem path, dependent on its type
 *
 * @phpstub
 *
 * @param resource $socket
 * @param string $address
 * @param int $port
 *
 * @return bool may also return
 *              false if the socket type is not any of ,
 *              , or , in which
 *              case the last socket error code is  updated.
 */
function socket_getpeername($socket, &$address, &$port = NULL)
{
}