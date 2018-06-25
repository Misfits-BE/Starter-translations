<?php 

namespace ActivismeBe\Translations;

use Illuminate\Support\ServiceProvider;

/**
 * Class TranslationServiceProvider 
 * ---- 
 * The service provider for our translation package that is used accross the platforms
 * from the Activisme_BE organisation. 
 * 
 * @author      Tim Joosten <tim@activisme.be>
 * @copyright   Tim Joosten <MIT license>
 * @package     Misfits\Translations
 */
class TranslationServiceProvider extends ServiceProvider
{
    /** 
     * Bootstrap any application services 
     * 
     * @return void
     */
    public function boot(): void
    {
        // USAGE: __('starter::<group>.<key>')
        $this->loadTranslationsFrom(__DIR__ . '/resources/trans', 'starter-translations');
    }
}