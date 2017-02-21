<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 * Blade Integration Class
 *
 * Classe utilizada para integração entre o CodeIgniter e a Blade Template Engine
 */
class Blade
{
    public function __construct()
    {
        // define os diretórios onde estarão armazenadas as views e o cache
        $path = [
            APPPATH . 'views/'
        ];
        $cachePath = APPPATH . 'cache/views';

        // aplica as devidas configurações e instanciações da Blade Template Engine
        $compiler = new \Xiaoler\Blade\Compilers\BladeCompiler($cachePath);
        $engine = new \Xiaoler\Blade\Engines\CompilerEngine($compiler);
        $finder = new \Xiaoler\Blade\FileViewFinder($path);
        $finder->addExtension('php');
        $this->factory = new \Xiaoler\Blade\Factory($engine, $finder);
    }

    /*
     * Os métodos criados a seguir servirão para que você possa utilizar os
     * recursos de carregamento das views usando, por exemplo,
     * $this->blade->view()
     */
    
    public function view($path, $vars = [])
    {
        echo $this->factory->make($path, $vars);
    }

    public function exists($path)
    {
        return $this->factory->exists($path);
    }

    public function share($key, $value)
    {
        return $this->factory->share($key, $value);
    }

    public function render($path, $vars = [])
    {
        return $this->factory->make($path, $vars)->render();
    }

}
