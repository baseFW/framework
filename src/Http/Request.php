<?php

namespace Seaon\Http;

use Psr\Http\Message\ServerRequestInterface;

class Request implements ServerRequestInterface
{
    public function getRequestTarget()
    {
        #
    }

    public function withRequestTarget($requestTarget)
    {
        #
    }

    public function getMethod()
    {
        #
    }

    public function withMethod($method)
    {
        #
    }

    public function getUri()
    {
        #
    }

    public function withUri(UriInterface $uri, $preserveHost = false)
    {
        #
    }

    public function getServerParams()
    {
        #
    }

    public function getCookieParams()
    {
        #
    }

    public function withCookieParams(array $cookies)
    {
        #
    }

    public function getQueryParams()
    {
        #
    }

    public function withQueryParams(array $query)
    {
        #
    }

    public function getUploadedFiles()
    {
        #
    }

    public function withUploadedFiles(array $uploadedFiles)
    {
        #
    }

    public function getParsedBody()
    {
        #
    }

    public function withParsedBody($data)
    {
        #
    }

    public function getAttributes()
    {
        #
    }

    public function getAttribute($name, $default = null)
    {
        #
    }

    public function withAttribute($name, $value)
    {
        #
    }

    public function withoutAttribute($name)
    {
        #
    }
}
