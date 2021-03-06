<?php
namespace application\task
{
    use application\FrontendApplication;
    use core\io\Directory;
    use core\task\Job;

    class StaticPageGenerationJob extends Job
    {
        protected function getOutputDirectory()
        {
            return __DIR__ .'/output';
        }

        protected function getPagesToGenerate()
        {
            return array(
                '/de',
                '/en',
            );
        }

        /**
         * @return \core\task\Task[]
         */
        protected function getTasks()
        {
            $application = new FrontendApplication();
            $outputDirectory = $this->getOutputDirectory();
            $directory = new Directory($outputDirectory,true);
            $directory->clear();
            $pagesToGenerate = $this->getPagesToGenerate();
            $tasks = array();
            foreach($pagesToGenerate as $page){
                $tasks[] = new StaticPageGenerationTask($application,$page,array(),$outputDirectory . '/' . $page . '.html');
            }
            return $tasks;
        }
    }
}