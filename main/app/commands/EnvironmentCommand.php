<?php

use Illuminate\Console\Command;
/* use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument; */


class EnvironmentCommand extends Command
{
    protected $name = "environment";

    protected $description = "Lists environment commands.";

    public function fire()
    {
        $this->line(trim("
            <comment>environment:get</comment>
            <info>gets host and environment.</info>
        "));

        $this->line(trim("
            <comment>environment:set</comment>
            <info>adds host to environment.</info>
        "));

        $this->line(trim("
            <comment>environment:remove</comment>
            <info>removes host from environment.</info>
        "));
    }

    protected function getArguments()
    {
        return ;
    }

    protected function getOptions()
    {
        return ;
    }
	
	
	protected function getHost()
	{
		return gethostname();
	}

	protected function getEnvironment()
	{
		return App::environment();
	}


}

