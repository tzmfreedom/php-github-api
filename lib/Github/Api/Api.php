<?php

namespace Github\Api;

use Github\Client;

/**
 * Abstract class for Github_Api classes
 *
 * @author    Thibault Duplessis <thibault.duplessis at gmail dot com>
 * @license   MIT License
 */
abstract class Api implements ApiInterface
{
    /**
     * The client
     * @var Client
     */
    protected $client;

    /**
     * @param Client $client
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * Call any path, GET method
     * Ex: $api->get('repos/show/my-username/my-repo')
     *
     * @param   string  $path            the GitHub path
     * @param   array   $parameters       GET parameters
     * @param   array   $requestOptions   reconfigure the request
     * @return  array                     data returned
     */
    protected function get($path, array $parameters = array(), $requestOptions = array())
    {
        return $this->client->get($path, $parameters, $requestOptions);
    }

    /**
     * Call any path, POST method
     * Ex: $api->post('repos/show/my-username', array('email' => 'my-new-email@provider.org'))
     *
     * @param   string  $path            the GitHub path
     * @param   array   $parameters       POST parameters
     * @param   array   $requestOptions   reconfigure the request
     * @return  array                     data returned
     */
    protected function post($path, array $parameters = array(), $requestOptions = array())
    {
        return $this->client->post($path, $parameters, $requestOptions);
    }

    /**
     * Call any path, PATCH method
     * Ex: $api->patch('repos/show/my-username/my-repo')
     *
     * @param   string  $path            the GitHub path
     * @param   array   $parameters       PATCH parameters
     * @param   array   $requestOptions   reconfigure the request
     * @return  array                     data returned
     */
    protected function patch($path, array $parameters = array(), $requestOptions = array())
    {
        return $this->client->patch($path, $parameters, $requestOptions);
    }

    /**
     * Call any path, PUT method
     *
     * @param   string  $path            the GitHub path
     * @param   array   $requestOptions   reconfigure the request
     * @return  array                     data returned
     */
    protected function put($path, array $parameters = array(), $requestOptions = array())
    {
        return $this->client->put($path, $parameters, $requestOptions);
    }

    /**
     * Call any path, DELETE method
     *
     * @param   string  $path            the GitHub path
     * @param   array   $requestOptions   reconfigure the request
     * @return  array                     data returned
     */
    protected function delete($path, array $parameters = array(), $requestOptions = array())
    {
        return $this->client->delete($path, $parameters, $requestOptions);
    }
}
