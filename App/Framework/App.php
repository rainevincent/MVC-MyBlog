<?php
    /**
     * Created by PhpStorm.
     * User: raine_v
     * Date: 28/09/2017
     * Time: 02:33
     */
    
    namespace Framework;
    
    use GuzzleHttp\Psr7\Response;
    use Psr\Http\Message\ResponseInterface;
    use Psr\Http\Message\ServerRequestInterface;
    
class App
{
    /**
         * @param \Psr\Http\Message\ServerRequestInterface $request
         *
         * @return \Psr\Http\Message\ResponseInterface
         */
    public function run(ServerRequestInterface $request): ResponseInterface
    {
        // Vérifie si l'url finit par '/' et redirige
        $uri = $request->getUri()->getPath();
        if (!empty($uri) && $uri[-1] === "/") {
            return(new Response())
                ->withStatus(301)
                ->withHeader('Location', substr($uri, 0, -1));
        }
            
        if ($uri === '/blog') {
            return new Response(200, [], '<h1>Le Blog</h1>');
        }
            
        return new Response(404, [], '<h1>Erreur 404</h1>composer global require "squizlabs/php_codesniffer=*"');
    }
}
