<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\ProjectGroup;
use App\Entity\Project;
use App\Entity\Task;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
        $group = new ProjectGroup();
        $group->setName('Group 1');
        $manager->persist($group);

        $project = new Project();
        $project->setName('Project 1');
        $manager->persist($project);

        $task = new Task();
        $task->setName('Task 1');
        $task->setDescription("Description for Task 1");
        $manager->persist($task);

        $manager->flush();
    }
}
