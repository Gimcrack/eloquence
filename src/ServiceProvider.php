<?php

namespace Ingenious\Eloquence;

use Ingenious\Eloquence\Builder;
use Ingenious\Eloquence\Mutator\Mutator;
use Ingenious\Eloquence\Relations\JoinerFactory;
use Ingenious\Eloquence\Searchable\ParserFactory;
use Illuminate\Support\ServiceProvider as BaseProvider;

/**
 * @codeCoverageIgnore
 */
class ServiceProvider extends BaseProvider
{
    public function boot()
    {
        Builder::setJoinerFactory(new JoinerFactory);

        Builder::setParserFactory(new ParserFactory);
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->registerMutator();
        $this->registerJoiner();
        $this->registerParser();
    }

    /**
     * Register attribute mutator service.
     *
     * @return void
     */
    protected function registerMutator()
    {
        $this->app->singleton('eloquence.mutator', function () {
            return new Mutator;
        });

        $this->app->alias('eloquence.mutator', 'Ingenious\Eloquence\Contracts\Mutator');
    }

    /**
     * Register relation joiner factory.
     *
     * @return void
     */
    protected function registerJoiner()
    {
        $this->app->singleton('eloquence.joiner', function () {
            return new JoinerFactory;
        });

        $this->app->alias('eloquence.joiner', 'Ingenious\Eloquence\Contracts\Relations\JoinerFactory');
    }

    /**
     * Register serachable parser factory.
     *
     * @return void
     */
    protected function registerParser()
    {
        $this->app->singleton('eloquence.parser', function () {
            return new ParserFactory;
        });

        $this->app->alias('eloquence.parser', 'Ingenious\Eloquence\Contracts\Relations\ParserFactory');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['eloquence.mutator', 'eloquence.joiner', 'eloquence.parser'];
    }
}
